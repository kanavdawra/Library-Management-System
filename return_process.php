<?php
include "connection.php";
$acc=$_REQUEST['accession'];
$uname=$_REQUEST['uname'];
$null="";
$i=0;

$a=0;
$sql = "SELECT * FROM issue WHERE USERNAME='$uname'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
   

    while($row = $result->fetch_assoc()) {
        
		if($row["BOOK1"]==$acc)
		{
			$query="UPDATE issue SET BOOK1=NULL WHERE USERNAME='$uname'";
	$result=mysqli_query($con,$query);
	$a=1;
	
	if($result){
		$add="UPDATE books SET AVAILABILITY=AVAILABILITY+1 WHERE ACCESSION='$acc'";
	mysqli_query($con,$add);
		header("Location:return.php?chk=2"); 
	}
	else{
		header("Location:return.php?chk=3");
	}
			}
			
			if($a==0){
			if($row["BOOK2"]==$acc)
		{
			$query1="UPDATE issue SET BOOK2=NULL WHERE USERNAME='$uname'";
	$result1=mysqli_query($con,$query1);
	if($result1){
		$add="UPDATE books SET AVAILABILITY=AVAILABILITY+1 WHERE ACCESSION='$acc'";
	mysqli_query($con,$add);
		header("Location:return.phpchk=2"); 
	}
	else{
		header("Location:return.php?chk=3");
	}
			}
    }
   
} }else {
    header("Location:return.php?chk=1");
}
$con->close();?>