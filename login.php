 
 <?php
 
 require_once('vendor/autoload.php');
 require_once('app/class/google_auth.php');
 require_once('app/init.php');

 $googleClient = new Google_Client();
 $auth =new GoogleAuth($googleClient);

 if($auth->checkRediretCode()){

 
     header('location: pagecontent.php');

 }
 else{
     if(isset($_SESSION['user'])){
    
         header('location: pagecontent.php');
     }
 }
 
 ?>