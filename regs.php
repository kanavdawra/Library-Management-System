<?php
	$email=$_REQUEST['reg_email'];
	$pass=$_REQUEST['reg_pass'];
	$name=$_REQUEST['reg_name'];
	$uname=$_REQUEST['reg_uname'];
	include "connection.php";
	$query="INSERT INTO user (NAME, USERNAME, PASSWORD, EMAIL) VALUES ('$name','$uname','$pass','$email')";
	mysqli_query($con,"INSERT INTO issue (USERNAME) VALUES ('$uname')");
	$result=mysqli_query($con,$query);
	if($result){
		header("Location:index.php?chk=2");
	}
	else{
		header("Location:index.php?error=failed");
	}

?>
