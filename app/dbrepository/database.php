<?php 
class DBrepository {

    private $conexion;

    function __construct() {
        $this->conexion = mysqli_connect("localhost", "root", "", "task");
        
    }

   public function sqlExecuteNoneQuery( $query){
        if (!$this->conexion) {
            die("The conexion failed: " . mysqli_connect_error());
        }
        else{
            try{
                $result=mysqli_query($this->conexion,$query);
                return $result;
            }catch(\Exception $exp){
                $exp->getMessage();
            }
        }
    }
    public function getConnetion(){
        return $this->conexion;
    }
    public function closeConnetion(){
        $this->conexion->close();
    }


}

?>