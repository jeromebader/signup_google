<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    
    
   
    <title>Register User</title>
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
                                   <a class="nav-link" href="index.php">Login</a>
                                </li>
                                <li class="nav-item">
                                   <a class="nav-link" href="register.php">Register</a>
                                </li>
                                                            

                                
                        
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <div class="container" >
            <div class="row justify-content-center" >
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Register User</div>
                        <br>
                        <?php
                        if(isset($_SESSION['listOfvalidations'])){
                            echo"hola";
                            session_start();
                            $errors=$_SESSION['listOfvalidations'];
                                if(in_array(false,$errors)){
                                    echo " <div class=alert alert-danger id=alerta  role=alert> <ol>";
                                            if(!$errors['verifypass'])
                                            {
                                                echo "<li> Please check the old password do not match.</li>"; 
                                            }
                                            if(!$errors['iquals_new_and_confirm_passw'])
                                            {
                                                echo "<li> The new password and confirm password do not match.</li>"; 
                                            }
                                            if(!$errors['lenght_new_and_confirm_passw'])
                                            {
                                                echo "<li> The new password and confirm password do not have same lenght.</li>"; 
                                            }
                                            if(!$errors['verifydificult_passwords_entrypass'])
                                            {
                                                echo "<li> Please check the new password it wil more dificult.</li>"; 
                                            }
                                            if(!$errors['emailValiation'])
                                            {
                                                echo "<li> This email is not unique.</li>"; 
                                            }
                                            if(!$errors['idValidation'])
                                            {
                                                echo "<li> This id is not unique.</li>"; 
                                            }
                                    
                                
            
                                    echo " </ol> </div>";
                                }  
                            
                            }
                        ?>

                        <div class="card-body">
                            <form class="form-horizontal form" id="formuser" method="post" action="app/routes.php">
                                <input type="hidden" name="action" value="register_user">

                                        <div class="form-group row ">
                                            <label for="nom" class="col-md-4 col-form-label text-md-right">Name</label>
                                            <div class="col-md-6">
                                                <input type="text"  id="name" name="name" class="form-control" required>
                                                <div class="form-control-feedback text-danger" id="namet"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="nom" class="col-md-4 col-form-label text-md-right">Lastname</label>
                                            <div class="col-md-6">
                                                <input type="text"  id="lastname" name='lastname' class="form-control" required>
                                                <div class="form-control-feedback text-danger" id="logint"></div>

                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="nom" class="col-md-4 col-form-label text-md-right">id</label>
                                            <div class="col-md-6">
                                                <input type="text"  id="id" name="id" class="form-control" required size="11" maxlength="11" minlength="11">
                                                <div class="form-control-feedback text-danger"  id="cit"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="nom" class="col-md-4 col-form-label text-md-right">Email</label>
                                            <div class="col-md-6">
                                                <input type="email"  id="email" name="email" class="form-control" required>
                                                <div class="form-control-feedback text-danger" id="emailt"></div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row ">
                                            <label for="nom" class="col-md-4 col-form-label text-md-right">Password</label>
                                            <div class="col-md-6">
                                                <input type="password"  id="password" name='password' class="form-control" required >
                                                <div class="form-control-feedback text-danger" id="passwordt"></div>

                                            </div>
                                        </div>
                                        <div class="form-group row ">
                                            <label for="nom" class="col-md-4 col-form-label text-md-right"> Password confirm</label>
                                            <div class="col-md-6">
                                                <input type="password"  id="password_confir" name='password_confir' class="form-control" required>
                                                <div class="form-control-feedback text-danger" id="password_confirt"></div>

                                            </div>
                                        </div>
                                        <br>
                                             <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">          


                                                    <button type="submit" class="btn-primary" id="register" >Register</button>
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