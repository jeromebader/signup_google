<?php 
       require_once('vendor/autoload.php');
       require_once('app/class/google_auth.php');
       require_once('app/init.php');

       $googleClient = new Google_Client();
       $auth =new GoogleAuth($googleClient);
      
       if($auth->checkRediretCode()){
          // die($_GET['code']);
          header('location: index.php');
       }

  
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <title>Welcome to Php Task</title>
 </head>
 <body>
      

      <div id="app">
        <nav class="navbar navbar-expand-md  shadow-sm background-color: #CC1414">
            <div class="container">
                <a class="navbar-brand" alingn="center" {{--href="{{ url('/') }} "--}}>
                    <strong>Welcome Php Task</strong>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        
                           
                                <li class="nav-item">
                                   <a class="nav-link" href="register.php">Register</a>
                                </li>
                                                            

                                
                        
                    </ul>
                </div>
            </div>
        </nav>

              <main class="py-4">
                <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-8">
                          <div class="card">
                              <div class="card-header"> <strong> Log in </strong></div>

                              <div class="card-body">
                              <div class="d-grid gap-2 col-6 mx-auto">
                              <a href="<?php echo $auth->getAuthUri();   ?>" class="btn btn-primary btn-lg " tabindex="-1" role="button" aria-disabled="true">Use Google account</a>
                              <hr>


                              <a href="enter.php" class="btn btn-secondary btn-lg " tabindex="-1" role="button" aria-disabled="true">Use another account</a>
                                
                              </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
        </main>
    </div>  
      
 </body>
 </html>