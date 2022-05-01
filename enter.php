<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   
	
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	
    <script async src="https://www.google.com/recaptcha/api.js"></script>
     
    <title> Php Task</title>
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
                   
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->

                        <li class="nav-item">
                                   <a class="nav-link" href="index.php">Begin</a>
                                </li>
                           
                                <li class="nav-item">
                                   <a class="nav-link" href="register.php">Register</a>
                                </li>
                                                            

                                
                        
                    </ul>
                </div>
            </div>
        </nav>
        <br>
            <div class="container">
                <div class="row justify-content-center" >
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">Login with your account</div>
                          
                            <div class="card-body">
                                <form class="form-horizontal form" id="formuser" method="post" action="app/routes.php">
                                    <input type="hidden" id="action" name="action" value="login_user">

                                        
                                        
                                            
                                            <div class="form-group row ">
                                                <label for="nom" class="col-md-4 col-form-label">E-Mail Address</label>
                                                <div class="col-sm-6">
                                                    <input type="email"  id="email" name="email" class="form-control" required>
                                                    <div class="form-control-feedback text-danger" id="emailt"></div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row ">
                                                <label for="nom" class="col-md-4 col-form-label">Password</label>
                                                <div class="col-sm-6">
                                                    <input type="password"  id="password" name='password' class="form-control" required >
                                                    <div class="form-control-feedback text-danger" id="passwordt"></div>
                                                    <br>
                                                    <div class="g-recaptcha" data-sitekey="6Ld6zqwbAAAAAKoa6Qutif-rvWtr_Bs1aUA4nqSO"></div>

                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="button" class="btn-primary" id="register" >Login</button>
                                                    <a class="btn btn-link" href="notificationemail.php">Forgot Your Password?</a>
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
<script type="text/javascript">
   $(document).ready(function () {
        $('#register').click(function () {
            var email_f=$('#email').val() ;
            var password_f=$('#password').val() ;
            var act =$('#action').val();
            var valid='valid';

           

             if($('#g-recaptcha-response').val()!="" && $("#g-recaptcha-response").length > 0){
                $.ajax({
                type: 'post',
                url: 'app/routes.php/' ,
                data: {
                   email: email_f,
                   password:password_f, 
                   recaptcha:valid, 
                   action:act, 

                },
                        success: function (data) {
                         
                           if(data.indexOf('login_user')==-1){
                            document.location.href = 'http://localhost/task/login.php'

                           }
                           else{
                            document.location.href = 'http://localhost/task/enter.php'

                           }

                           
                        }, error: function () {
                            alert('Ha ocurrido un error al cargar los datos. Contacte con el administrador del sistema.')
                        }
                });
            }
            else
            {
                alert("You are a robot.");
            }
             
   
        });

 
   });
</script>