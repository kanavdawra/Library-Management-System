<?php
session_start();
	$uname=$_REQUEST['log_uname'];
	$pass=$_REQUEST['log_pass'];
	include "connection.php";
	$admin="admin";
	$query="SELECT * FROM user WHERE USERNAME='$uname'";
	$result=mysqli_query($con,$query);
	$row=mysqli_fetch_object($result);
	if($row->PASSWORD==$pass){
		
		 $_SESSION['username'] = $uname; 
    
	if($row->USERNAME==$admin)
	{
    $_SESSION['loggedin'] = true;
	header("Location:admin.php");	
	}
	else{
		$_SESSION['loggedinuser'] = true;
    $_SESSION['username'] = $uname; 
		header("Location:home.php");
	}
	}
	
	else{
header("Location:index.php?chk=1");
    
	}
?>