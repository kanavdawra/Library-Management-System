<?php
include "connection.php";
$uname = $_GET['varname'];
$comp = "COMPLETED";
echo $uname;
	$query="UPDATE REQUEST SET TASK='$comp' WHERE USERNAME='$uname'";
	$result=mysqli_query($con,$query);
	if($result){
		header("Location:req_table.php?task=INCOMPLETE");
		
	}
	else{
		header("Location:req_table.php?task=ALL");
	}
	echo $uname;
?>