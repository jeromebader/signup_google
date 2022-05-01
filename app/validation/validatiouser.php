<?php 
           require_once("../app/dbRepository/database.php");
           
           require_once("IValidation.php");  
        class ValidationUser implements IValidation {

                private $dbrepo;
                private $resultOfvalidations;

                function __construct()
                {
                        $this->dbrepo=new DBrepository();
                        $this->resultOfvalidations=array(
                                'verifypass' => true,
                                'iquals_new_and_confirm_passw'=>true,
                                'lenght_new_and_confirm_passw' =>true,
                                'dificult_passwords_entry'=>true,
                                'emailValiation'=>true,
                                'idValidation'=>true


                        );
                        
                }

                public function changePasswordsValidation($new_password,$_confirmpassword,$old_password=null,$email=null){
                        if($old_password!=null){
                           try{         
                               $result= $this->dbrepo->sqlExecuteNoneQuery("select * from user where email='".$email."'") ;
                                mysqli_data_seek ($result, 0);

                                $extraido= mysqli_fetch_array($result); 
                                
                                $this->resultOfvalidations['verifypass']=password_verify($old_password,$extraido['password']) ;       

                                $_SESSION['listOfvalidations']=$this->resultOfvalidations;

                                 return   password_verify($old_password,$extraido['password']) and $this->iquals_new_and_confirm_passw($new_password,$_confirmpassword) and $this->lenght_new_and_confirm_passw($_confirmpassword) and $this->dificult_passwords_entry($_confirmpassword); 
                                  

                           }
                           catch(\Exception $exp){
                                   $exp->getMessage();
                           }

                        }else{
                                $_SESSION['listOfvalidations']=$this->resultOfvalidations;
                                 return    $this->iquals_new_and_confirm_passw($new_password,$_confirmpassword) and $this->lenght_new_and_confirm_passw($_confirmpassword) and $this->dificult_passwords_entry($_confirmpassword); 
                        }

                       
                      


                }

                private function iquals_new_and_confirm_passw($newp,$conf){
                      
                        if ($newp == $conf)
                        {
                                $this->resultOfvalidations['iquals_new_and_confirm_passw']=true;
                                return true;

                        }
                        else{
                                $this->resultOfvalidations['iquals_new_and_confirm_passw']=false;
                                return false;
  
                        }
                }

                private function lenght_new_and_confirm_passw($newp){

                        if(strlen($newp)>=8)
                        {
                                $this->resultOfvalidations['lenght_new_and_confirm_passw']=true;
                                return true;   
                        }
                        else
                        {
                                $this->resultOfvalidations['lenght_new_and_confirm_passw']=false;
                                return false;  
                        }
                }
                private function dificult_passwords_entry($newp){
                        $this->resultOfvalidations['dificult_passwords_entry']=( !ctype_lower($newp) and  !ctype_upper($newp)) ;
                        return !ctype_lower($newp) and  !ctype_upper($newp);

                }

               





                public function emailValiation($email){
                        
                        return mysqli_num_rows($this->dbrepo->sqlExecuteNoneQuery("select * from user where email='".$email."'"))>0 ;

                         
                }
                public function idValidation($id){
                        return mysqli_num_rows($this->dbrepo->sqlExecuteNoneQuery("select * from user where id='".$id."'"))>0 ;

                }


        }
?>