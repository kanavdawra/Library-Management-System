<?php
include "connection.php";
session_start();
error_reporting(0);
if (isset($_SESSION['loggedinuser']) && $_SESSION['loggedinuser'] == true) {
header("Location:home.php");
}
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
header("Location:admin.php");

}
$chk=0;
$chk=$_GET['chk'];

?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>*LMS Login*</title>
    
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>
<body style="background-image:url(library.jpg)">

    
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<!-- Form Module-->

			
<p>&nbsp;</p>

  <a href="index.php" ><img src="LOGO.png" width="255" height="130" alt=""/></a>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">
      <p>Register </p>
    </div>
  </div>
  <div class="form">
  <?php if ( $chk == 1 ) : ?>
				<p style="background: #e49a9a; border: 1px solid #c05555; padding: 7px 10px;">
					Username or Password is Incorrect
				</p>
			
			<?php elseif ( $chk == 2 ) : ?>
				<p style="background: #fef1b5; border: 1px solid #eedc82; padding: 7px 10px;">
					Successfully Registerd
				</p>
			
			<?php elseif ($chk == 3) : ?>
				
					<p style="background: #fef1b5; border: 1px solid #eedc82; padding: 7px 10px;">
						Successfully Logged Out.
					</p>
				
				
			
			<?php elseif ( $chk == 4) : ?>
				<p style="background: #e49a9a; border: 1px solid #c05555; padding: 7px 10px;">
						Please Login First
					
                    <?php elseif ( $chk == 0) : ?><p></p>
                    <?php else: ?>
					<p style="background: #e49a9a; border: 1px solid #c05555; padding: 7px 10px;">
						Error, Can't Login Now.
					</p>
			<?php endif; ?>
    <h2>Login to your account </h2>
    <form method="post" action="logs.php">
      <input type="text" placeholder="Username" name="log_uname" required/>
      <input type="password" placeholder="Password" name="log_pass" required/>
      <button type="submit" name="btn-login">Login</button>
    </form>
  </div>
  <div class="form">
    <h2>Create an account</h2>
    <form method="post" action="regs.php">
    <input type="text" placeholder="Name" name="reg_name" required/>
      <input type="text" placeholder="Username" name="reg_uname" required/>
      <input type="password" placeholder="Password" name="reg_pass" required/>
      <input type="email" placeholder="Email Address" name="reg_email" required/>
      
      <button>Register</button>
    </form>
  </div>

</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://codepen.io/andytran/pen/vLmRVp.js'></script>

        <script src="js/index.js"></script>

 
    
    
  </body>
  
</html>
