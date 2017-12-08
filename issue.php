<?php
include "connection.php";
include "session.php";
	$iss="issue_process.php";
	$chk=0;
$chk=$_GET['chk'];
echo $chk;
?>










<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>*ISSUE BOOKS*</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLE CSS -->
     <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
  
</head>
<body > 
   
        <div class="navbar navbar-inverse navbar-fixed-top " >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php" ><strong style=""></strong><img src="LOGO.png" width="226" height="101" alt=""/></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right set-links">
                    <li><a href="admin.php" >HOME</a></li>
                     <li><a href="issue.php">ISSUE</a></li>
                   <li><a href="return.php">RETURN</a></li>
                     <li><a href="books.php">BOOKS</a></li>
                     <li><a href="req_table.php?task=INCOMPLETE">REQUISITIONS</a></li>
                    <li><a href="logout.php" >LOGOUT</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!--MENU SECTION END-->
    <section class="headline-sec">
        <div class="overlay ">
            

        </div>
    </section>
    <!--HOME SECTION END-->
<section style="background-color: #5D92BA">
    
    
    <div scoped >
   <style>
   @import url(http://fonts.googleapis.com/css?family=Tenor+Sans);

.containe {
  width: 500px;
  height: 400px;
  margin: 0 auto;
}

.login {
  margin-top: 50px;
  width: 450px;
}

.login-heading {
  font: 1.8em/48px "Tenor Sans", sans-serif;
  color: white;
}

.input-txt {
  width: 100%;
  padding: 20px 10px;
  background: #5D92BA;
  border: none;
  font-size: 1em;
  color: white;
  border-bottom: 1px dotted rgba(250, 250, 250, 0.4);
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-transition: background-color 0.5s ease-in-out;
  -o-transition: background-color 0.5s ease-in-out;
  -webkit-transition: background-color 0.5s ease-in-out;
  transition: background-color 0.5s ease-in-out;
}
.input-txt:-moz-placeholder {
  color: #81aac9;
}
.input-txt:-ms-input-placeholder {
  color: #81aac9;
}
.input-txt::-webkit-input-placeholder {
  color: #81aac9;
}
.input-txt:focus {
  background-color: #4478a0;
}

.login-footer {
  margin: 10px 0;
  overlow: hidden;
  float: left;
  width: 100%;
}

.btn {
  padding: 15px 30px;
  border: none;
  background: #5D92BA;
  color: white;
}
.btn:hover
{
	color: #4478a0;
	}

.btn--right {
  float: right;
}
.btn--left {
  float: left;
}

.icon {
  display: inline-block;
}

.icon--min {
  font-size: .9em;
}

.lnk {
  font-size: .8em;
  line-height: 3em;
  color: white;
  text-decoration: none;
}



   </style>
    
    
    
    <div class="containe">
  <div class="login">
  	<h1 class="login-heading">
    <?php if ( $chk == 1 ) : ?>
				<p style="background: #e49a9a; border: 1px solid #c05555; padding: 7px 10px;">
					No ID Found
				</p>
			
			<?php elseif ( $chk == 2 ) : ?>
				<p style="background: #fef1b5; border: 1px solid #eedc82; padding: 7px 10px;">
					Successfully Issued
				</p>
			
			<?php elseif ($chk == 3) : ?>
				
					<p style="background: #fef1b5; border: 1px solid #c05555; padding: 7px 10px;">
						Issue Unsuccessfull
					</p>
					<?php elseif ($chk == 4) : ?>
				
					<p style="background: #fef1b5; border: 1px solid #c05555; padding: 7px 10px;">
						Book Not Available
					</p>
                    <?php elseif ($chk == 7) : ?>
				
					<p style="background: #fef1b5; border: 1px solid #c05555; padding: 7px 10px;">
						Book Not Found
					</p>
                    <?php elseif ( $chk == 0) : ?><p></p>
                    <?php else: ?>
					<p style="background: #e49a9a; border: 1px solid #c05555; padding: 7px 10px;">
						Error, Can't Return Now.
					</p>
			<?php endif; ?>
      <strong>Book Issue</strong></h1>
      <form method="post" action="<?=$iss?>">
          <input type="text" name="accession" placeholder="ACCESSION NO." class="input-txt" >
          <input type="text" name="uname" placeholder="USERNAME" class="input-txt" ><br/>
         
             <div class="login-footer">
            <input type="submit" name="issue" value="Issue" class="btn btn--right" formaction="<?=$iss?>">
          
    
          </div>
      </form>
      <div class="login-footer">
     
</div>
    
       <script src="js/index.js"></script>
    
    
    
    
    
</div>
    
    
    </section>
    <section style="background-color: #5D92BA"></section>
    <section id="footer-sec" >
        <div class="container">
            <div class="row">
<div class="col-md-4">
   <h4>ABOUT US</h4>
     <p style="padding-right:50px;">
        <h5>Kanav Dawra </h5>
        <h5>Ketan Sethi</h5>
        <h5>Keshav Mehta</h5>
        
        
        
        <!--**********ABOUT US**********-->
        
        
        
    </p>
</div>
                <div class="col-md-4">
       <h4>PHYSICAL LOCATION </h4>
                    <h5>CHITKARA UNIVERSITY</h5>
                     
                   
</div>
                <div class="col-md-4">
      <h4>SOCIAL LINKS</h4>
                    <div class="social-links">

                    
                    <a href="fb.com" > <i class="fa fa-facebook fa-2x" ></i></a>
                         <a href="twitter.com" > <i class="fa fa-twitter fa-2x" ></i></a>
                         <a href="linkedin.com" > <i class="fa fa-linkedin fa-2x" ></i></a>
                         <a href="google.com" > <i class="fa fa-google-plus fa-2x" ></i></a>
                         
                      
                   </div>

</div>
               
            </div>
               
      </div>
</section>
     <!--FOOTER SECTION END-->
    <div class="copy-txt">
         <div class="container">
        <div class="row">
<div class="col-md-12 set-foot" >
    &copy 2016 freelms.tk | All rights reserved | Design by : IP TEAM
</div>
            </div>
                   </div>
    </div>
     <!-- COPY TEXT SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
    
</body>
</html>
