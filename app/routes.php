<?php

session_start();
require_once("../app/class/usercontroller.php");
require_once("../app/validation/validatiouser.php");
require_once("../app/class/mail.php");
$action="";
if(isset($_POST['action']))
{
  $action=$_POST['action'];

}
$validation=new ValidationUser();
$userControler=new userController();
switch ($action) {
        case "register_user":
          
          if( !$validation->idValidation($_POST['id']) && !$validation->emailValiation($_POST['email']) && $validation->changePasswordsValidation($_POST['password'],$_POST['password_confir']) ){
             
              $userControler->userControlRegister(new User($_POST['name'],$_POST['lastname'],$_POST['id'],$_POST['email'],password_hash($_POST['password'], PASSWORD_DEFAULT)));
              
          }

          header("location: ../register.php ");
           
        break;
        case "change_password":
          if($validation->changePasswordsValidation($_POST['newpassword'],$_POST['confirpassword'],$_POST['oldpassword'],$_SESSION['user'])){
            
             $changeflag= $userControler->changePassController($_SESSION['user'],$_POST['newpassword']);
              $_SESSION['changeflag']=$changeflag;
              

          }     
          header("location: ../changepassword.php");

        break;
        case "login_user":
         
          if($validation->changePasswordsValidation($_POST['password'],$_POST['password'],$_POST['password'],$_POST['email']) && $_POST['recaptcha']=="valid"  ) {
            $userControler->loginUserController($_POST['email']);
           
          header('location: http://localhost/task/login.php');
          }
          else{
            header('location: http://localhost/task/enter.php');
          }
      break;
      case "forgot_password_user":

        $textCode=substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0,5);

        $changeflagnoty= $userControler->changePassController($_POST['email'],$textCode);
        if($changeflagnoty){  
          $mail=  new MailUser($_POST['email'],"Notification of Php task", "Your code activation is ".$textCode,"emailmarqueting@gmail.com");
          $mail->sendEmail();
          $_SESSION['changeflagnoty']=$changeflag;
          
        }
        else{
          $_SESSION['changeflagnoty']=$changeflag;
         
        }
        header("location: ../notificationemail.php");

      break;
        
  }

?>