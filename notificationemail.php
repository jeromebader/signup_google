<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    
    <title>Email Notification</title>
</head>
<body>
  <div class="container">
  <br>
      <br>
    <div class="row justify-content-center">
    <form id="form" method="post" action="app/routes.php" >
    <input type="hidden" name="action" value="forgot_password_user">
                    <div class="col-md-10 ">
                            <div class="alert alert-success" id="alerta"  role="alert">
                                You will recieved an email with a code to active your account. Please enter you email address account in text box below.
                            </div>

                  </div>

                     <?php 
                          if(isset($_SESSION['changeflagnoty']) && !$_SESSION['changeflagnoty']){
                              echo "This is not a email address account, check and try again";
                            
                          }
                          else{
                              if(isset($_SESSION['changeflagnoty']) && $_SESSION['changeflagnoty'])
                                 echo "Message has been sent";
                          }
                     ?>
                            <div class="form-group row justify-content-center col-md-10" >
                            
                                    <label for="nom" class="col-sm-3 col-form-label">Type your email address account</label>
                                    <div class="col-sm-5">
                                        <input type="text"  id="email" name="email" class="form-control" required>
                                       
                                    </div>
                                    <div class="col-sm-4">
                                        
                                       <input type="submit"  class ="btn-primary" value="Send email">
                                    </div>
                                </div>
           </form>           
       </div>

  </div>
                   
    
</body>
</html>