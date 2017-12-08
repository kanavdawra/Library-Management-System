<?php
include "connection.php";
include "user_session.php";
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    
    <link rel="stylesheet" href="css/reset.css">

    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>


    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>*REQUEST*</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLE CSS -->
     <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
	form { margin: 25px 0 0 29px; width: 600px; padding-bottom: 30px }
form * { vertical-align: middle; }

fieldset { margin: 0 0 22px 0; border: 0; }
legend { font-size: 1.2em; color: #2E6600; font-weight: bold; }

label { float: left; display: block; width: 100px; margin-top: 4px; clear: left; }
label.choose { width: 162px; }
label.spam-protection { display: inline; width: auto; }

input.text, textarea, input.choose, input.answer { border: 1px solid #909090; padding: 3px; }
input.text { width: 300px; margin: 0 0 8px 0; }
textarea { width: 400px; margin: 0 0 12px 0; display: block; }

select { width: 50px; }

input.choose { margin: 0; }
input.answer { width: 40px; margin: 0 0 0 10px; }
input.submit-text { font: 1.4em Georgia, "Times New Roman", Times, serif; letter-spacing: 1px; display: block; margin: 23px 0 0 0; }

hr.formik { height: 1px; color: gray; background-color: gray; border: 0 solid gray; margin: 3px 0 20px 0; }
form br { display: none; }
#bod {
	background: #fafafa url(http://jackrugile.com/images/misc/noise-diagonal.png);
	color: #444;
	font: 100%/30px 'Helvetica Neue', helvetica, arial, sans-serif;
	text-shadow: 0 1px 0 #fff;
}

strong {
	font-weight: bold; 
}

em {
	font-style: italic; 
}

table {
	background: #f5f5f5;
	border-collapse: separate;
	box-shadow: inset 0 1px 0 #fff;
	font-size: 12px;
	line-height: 24px;
	margin: 30px auto;
	text-align: left;
	width: 800px;
}	

th {
	background: url(http://jackrugile.com/images/misc/noise-diagonal.png), linear-gradient(#777, #444);
	border-left: 1px solid #555;
	border-right: 1px solid #777;
	border-top: 1px solid #555;
	border-bottom: 1px solid #333;
	box-shadow: inset 0 1px 0 #999;
	color: #fff;
  font-weight: bold;
	padding: 10px 15px;
	position: relative;
	text-shadow: 0 1px 0 #000;	
}

th:after {
	background: linear-gradient(rgba(255,255,255,0), rgba(255,255,255,.08));
	content: '';
	display: block;
	height: 25%;
	left: 0;
	margin: 1px 0 0 0;
	position: absolute;
	top: 25%;
	width: 100%;
}

th:first-child {
	border-left: 1px solid #777;	
	box-shadow: inset 1px 1px 0 #999;
}

th:last-child {
	box-shadow: inset -1px 1px 0 #999;
}

td {
	border-right: 1px solid #fff;
	border-left: 1px solid #e8e8e8;
	border-top: 1px solid #fff;
	border-bottom: 1px solid #e8e8e8;
	padding: 10px 15px;
	position: relative;
	transition: all 300ms;
}

td:first-child {
	box-shadow: inset 1px 0 0 #fff;
}	

td:last-child {
	border-right: 1px solid #e8e8e8;
	box-shadow: inset -1px 0 0 #fff;
}	

tr {
	background: url(http://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:nth-child(odd) td {
	background: #f1f1f1 url(http://jackrugile.com/images/misc/noise-diagonal.png);	
}

tr:last-of-type td {
	box-shadow: inset 0 -1px 0 #fff; 
}

tr:last-of-type td:first-child {
	box-shadow: inset 1px -1px 0 #fff;
}	

tr:last-of-type td:last-child {
	box-shadow: inset -1px -1px 0 #fff;
}	

tbody:hover td {
	color: transparent;
	text-shadow: 0 0 3px #aaa;
}

tbody:hover tr:hover td {
	color: #444;
	text-shadow: 0 1px 0 #fff;
}
.button {
    position: relative;
    background-color: #4CAF50;
    border: none;
    font-size: 15px;
    color: #FFFFFF;
    padding: 20px;
    width: 200px;
    text-align: center;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}
.button:hover{
    position: relative;
    background-color: #FFFFFF;
    border: none;
    font-size: 15px;
    color: #4CAF50;
    padding: 20px;
    width: 200px;
    text-align: center;
    -webkit-transition-duration: 0.1s; /* Safari */
    transition-duration: 0.1s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}
.button:after {
    content: "";
    background: #90EE90;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px!important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}
.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s

}
</style>
  
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
                <a class="navbar-brand" href="home.php" ><strong style=""></strong><img src="LOGO.png" width="226" height="101" alt=""/></a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right set-links">
                    <li><a href="home.php" >HOME</a></li>
                     <li><a href="user_books.php">BOOKS</a></li>
                     <li><a href="req_form.php">REQUISITION FORM</a></li>
                    <li><a href="user_logout.php">LOGOUT</a></li>
                    <li style="font-size: 10px"><a href="home.php" >HI! <?php echo $userid; ?></a></li>
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
<section><div> 
    	
	
	
	<body>

	<form action="request.php" method="post">
		<fieldset>
			<legend>Faculty Details</legend>
            <hr class="formik" />
			Name: <select>
    <option value="Mr.">Mr.</option>
    <option value="Ms.">Ms.</option>
  </select>   &emsp;  
<input type="text" name="firstname" placeholder="First Name" required>&emsp;<input type="text" name="lastname" placeholder="Last Name" required>
		</fieldset>
        <p>Id:&emsp; 
          <input type="text" name="uname" required><br/>
        </p>
        <p>&nbsp; </p>
        <fieldset>
		  <legend>Book Details</legend>
			<hr class="formik" />
Book Name:&emsp;<input type="text" name="book" placeholder="Book
 Name" required>
 Edition:&emsp;<input type="text" name="edition" placeholder="Edition" required>
  Author:&emsp;<input type="text" name="author" placeholder="Author" required><br/>
 <br/>
		</fieldset>

		<fieldset>
			<legend>Description:</legend>
			<hr class="formik" />
			<textarea type="text" name="description" id="description" cols="20" rows="10"></textarea><br />
		</fieldset>
		<p><input type="submit" alt="SUBMIT" name="Submit" value="Submit" class="button" /></p>
	</form>














<div></section>
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
