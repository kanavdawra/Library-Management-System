<?php
include "connection.php";
	$uname=$_REQUEST['uname'];
	$book=$_REQUEST['book'];
	$author=$_REQUEST['author'];
	$edition=$_REQUEST['edition'];
	$description=$_POST['description'];
	$task="INCOMPLETE";
	include "connection.php";
	$query="INSERT INTO request (USERNAME, BOOK, AUTHOR, EDITION, DESCRIPTION, TASK) VALUES ('$uname','$book','$author','$edition','$description','$task')";
	$result=mysqli_query($con,$query);
	if($result){
		header("Location:home.php");
	}
	else{
		header("Location:req_form.php?error=failed");
	}

?>
