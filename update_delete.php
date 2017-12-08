<?php
include "connection.php";
$id=$_REQUEST['uname'];
$query="DELETE FROM books WHERE id='$id'";
	$result=mysqli_query($con,$query);
	if($result){
		
		header("Location:books.php"); 
	}
	else{
		header("Location:update.php?ids=$id");
	}
?>