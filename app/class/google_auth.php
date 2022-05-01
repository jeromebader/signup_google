<?php 
   
   class GoogleAuth{

        protected $client;

        public function __construct(Google_Client $google_Client=null)
        {
            $this->client=$google_Client;
            if($this->client )
            {
                $this->client->setClientId('793638097839-e8dgtlm32hfmrgpd2q5s0nklk9f4vp6f.apps.googleusercontent.com');
                $this->client->setClientSecret('8xjVxTVsxe7bh3JlVpEEBB0n') ;
                $this->client->setRedirectUri('http://localhost/task/login.php');
                $this->client->setScopes('email');
            }
        }
        public function isLoggedIn(){
            return isset($_SESSION['access_token']);

        }
        public function getAuthUri(){
            return $this->client->createAuthUrl();
        }
        public function checkRediretCode(){
            if(isset($_GET['code'])){
              
                $this->client->fetchAccessTokenWithAuthCode($_GET['code']);
                $this->SetToken($this->client->getAccessToken());
                return true;
            }
            return false;
        }
        public  function SetToken($token)
        {
            $_SESSION['access_token']=$token;
            $this->client->setAccessToken($token);
        }
        public function logout(){
            unset($_SESSION['access_token']);
        }

   }

?>