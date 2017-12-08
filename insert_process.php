<?php
include "connection.php";
$book=$_REQUEST['book'];
	$edition=$_REQUEST['edition'];
	$author=$_REQUEST['author'];
	$publisher=$_REQUEST['publisher'];
	$accession=$_REQUEST['accession'];
	$availability=$_REQUEST['availability'];
	$query="INSERT INTO books (NAME, AUTHOR, PUBLISHER, EDITION, ACCESSION, AVAILABILITY) VALUES ('$book','$author','$publisher','$edition','$accession','$availability')";
	$result=mysqli_query($con,$query);
	if($result){
		
		header("Location:books.php");
	}
	else{
		header("Location:insert.php?error=failed");
		echo "error";
	}
?>