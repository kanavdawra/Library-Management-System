<?php
include "connection.php";
$id = $_REQUEST['uname'];

$del= $_REQUEST['del'];
$book=$_REQUEST['book'];
$author=$_REQUEST['author'];
$publisher=$_REQUEST['publisher'];
	$edition=$_REQUEST['edition'];
	$accession=$_REQUEST['accession'];
	$availability=$_REQUEST['availability'];
	echo $id;
	
	$query="UPDATE books SET NAME='$book', AUTHOR='$author', PUBLISHER='$publisher', EDITION='$edition', ACCESSION='$accession', AVAILABILITY='$availability' WHERE ID='$id'";
	$result=mysqli_query($con,$query);
	if($result){
		
		header("Location:books.php"); 
	}
	else{
		header("Location:update.php?ids=$id");
	}
?>