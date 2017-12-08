<?php
include "connection.php";
include "session.php";
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
    <title>*REQUESTS*</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLE CSS -->
     <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <style>
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
<section >
       
       
       
       
       
       
       <!--Contents-->
       
       
       
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<center><button onclick="location.href='req_table.php?task=COMPLETED'" class="button">COMPLETED</button>
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button onclick="location.href='req_table.php?task=INCOMPLETE'" class="button">INCOMPLETED</button>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <button onclick="location.href='req_table.php?task=ALL'" class="button">ALL</button></center>
      
       
       
       
       
       
       <div> <?php
	   
	   
include "connection.php";
$task = $_GET['task'];
$sql = "SELECT * FROM request";
$result = $con->query($sql);
//$task="INCOMPLETE";
$link='req_process.php';
$uname=array();
$i=0;
if ($result->num_rows > 0) {
     echo "<table><thead><tr><th>ID</th><th>NAME</th><th>AUTHOR</th><th>EDITION</th><th>DESCRIPTION</th><th>TASK</th></tr></thead>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
        if ($row["TASK"]==$task)
        {
$uname[$i]=$row["USERNAME"];
         echo "<tr><td><strong>" . $row["USERNAME"]. "</strong></td><td>" . $row["BOOK"]. "</td><td>" . $row["AUTHOR"]. "</td><td>" . $row["EDITION"]. "</td><td>" . $row["DESCRIPTION"]. "</td><td>"; 
		 if($task=="INCOMPLETE")
		 {
		 echo '<a href="req_process.php?varname=' . $uname[$i] . '">INCOMPLETE</a>';}
		 if($task=="COMPLETED")
		 {
			 echo "COMPLETED";
			 }
		echo "</td></tr>";
		$i++;
}
if ($task=="ALL")
        {
         echo "<tr><td><strong>" . $row["USERNAME"]. "</strong></td><td>" . $row["BOOK"]. "</td><td>" . $row["AUTHOR"]. "</td><td>" . $row["EDITION"]. "</td><td>" . $row["DESCRIPTION"]. "</td><td>" . $row["TASK"]. "</td></tr>";
		$i++;
}

	}
     echo "</table>";
} else {
     echo "0 results";
}
?>




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
