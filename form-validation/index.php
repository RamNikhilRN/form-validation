<?php include('register.php'); ?>

<!DOCTYPE html>
<html lang="en">
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sample</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    


</head>
<body>

 <div class="container">

    <div class="signup-form-container">
    
         <!-- form start -->
         <form action= "" role="form" id="register-form" autocomplete="off" method="post">
          <?php echo $success_msg; ?>
            <?php echo $email_exist; ?>
            
        <div id="legend">
      <legend class="">SAMPLE</legend>
        
         
                      
         </div>
         
         <div class="form-body">
                      
            <div class="form-group">
            	<label for="name" class="cols-sm-2 control-label">UserName</label>
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="username" type="text" id="username" class="form-control" placeholder="Enter Username">
                   <?php echo $emptyError1; ?>
                   </div>
                   <p class="help-block">Username Should be Unique alphanumeric characters</p>
                   <span class="help-block" id="error"></span>
              </div>
              
                          <div class="form-group">
                          	<label for="name" class="cols-sm-2 control-label">Full Name</label>
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                   <input name="fullname" type="text" id = "fullname" class="form-control" placeholder="Enter your Name">
<?php echo $emptyError2; ?>

                   </div>
                   <p class="help-block">Enter Your Name as per the documents</p>
                   <span class="help-block" id="error"></span>
              </div>

              <div class="form-group">
              	<label for="name" class="cols-sm-2 control-label">Email</label>
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="email" type="text" class="form-control"  id="email" placeholder="Email">
                   <?php echo $emptyError3; ?>
                   </div> 
                   <p class="help-block">Mail format Should be mail@abc.xyz</p>
                   <span class="help-block" id="error"></span>                     
              </div>

               <div class="form-group">
               	<label for="name" class="cols-sm-2 control-label">Confirm Email</label>
                   <div class="input-group">
                   <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                   <input name="cemail" type="text" class="form-control" placeholder="Confirm Email">
                   </div> 
                   <p class="help-block">Should be same as email</p>
                   <span class="help-block" id="error"></span>                     
              </div>
                        
                <div class="form-group">
                	<label for="name" class="cols-sm-2 control-label">Password</label>
                   <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="password" id="password" type="password" class="form-control" placeholder="Enter Your Password">
                        <?php echo $emptyError4; ?>
                        </div>  
                        <p class="help-block">At least 8 character, lowercase,upper case, number</p>
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
                   <div class="form-group">
                   <label for="name" class="cols-sm-2 control-label">Confirm Password</label>
                        <div class="input-group">
                        <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
                        <input name="cpassword" type="password" class="form-control" placeholder="Enter Your Password">
                        </div> 
                        <p class="help-block">Should be same as password</p> 
                        <span class="help-block" id="error"></span>                    
                   </div>
                            
             </div>
                        
                        
            </div>
            
            <div class="form-group">
                 <button type="submit" class="btn btn-info btn-lg btn-block login-button" name="submit" id="submit">
                 SUBMIT
                 </button>
            </div>


            </form>
            
           </div>

 </div>

 <script src="js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="assets/jquery.validate.min.js"></script>
<!-- javascript/jquery validations will be here  -->
<script src="register.js"></script>

<script src = "register.php"></script>

</body>
</html>


