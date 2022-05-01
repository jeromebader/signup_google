<?php 
    require_once('app/init.php');
     if(isset($_SESSION['user'])){
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
    
    
       <title>Change your Password</title>
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
                                   <a class="nav-link" href="logout.php">Logout</a>
                                </li>
                                                            

                                
                        
                    </ul>
                </div>
            </div>
        </nav>
        <br>

   <div class="container ">
      <div class="row justify-content-center" >
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header">Change your password</div>
                <br>
                <?php
                      
                     if(isset($_SESSION['changeflag']) && $_SESSION['changeflag']==true ) {
                         
                         $_SESSION['changeflag']=false;
                     } else
                       {
                           if(isset($_SESSION['changeflag']) && $_SESSION['changeflag']!=true ){
                               ?>
                            <div class="alert alert-success" id="alerta"  role="alert">
                            The password in not change. Please try again.
                        </div>
                       <?php         
                           }
                       } 
                ?>
                <div class="panel-body">
                    <form class="form-horizontal form" id="formuser" method="post" action="app/routes.php">
                           <input type="hidden" id="action" name="action" value="change_password">
                  
                                <br>
                                <div class="form-group row ">
                                    <label for="nom" class="col-md-4 col-form-label text-md-right">Old password</label>
                                    <div class="col-md-6">
                                        <input type="password"  id="oldpassword" name="oldpassword" class="form-control" required>
                                        <div class="form-control-feedback text-danger" id="emailt"></div>
                                    </div>
                                </div>
                                
                                <div class="form-group row ">
                                    <label for="nom" class="col-md-4 col-form-label text-md-right">New password</label>
                                    <div class="col-md-6">
                                        <input type="password"  id="newpassword" name='newpassword' class="form-control" required >
                                        <div class="form-control-feedback text-danger" id="passwordt"></div>
                                        

                                    </div>
                                </div>
                                    <div class="form-group row ">
                                    <label for="nom" class="col-md-4 col-form-label text-md-right">Confirm password</label>
                                    <div class="col-md-6">
                                        <input type="password"  id="confirpassword" name='confirpassword' class="form-control" required >
                                        <div class="form-control-feedback text-danger" id="passwordt"></div>
                                        

                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">   
                                    <button type="submit" class="btn-primary" id="register" >Change</button>
                                </div>
                                </div>              
                     </form>

                                   
                   
                   
                </div>
            </div>
        </div>
    </div>

            </div>
   </div>         
   </body>
   </html>

<?php
     }else
     {
        header('location: index.php');
     }

?>