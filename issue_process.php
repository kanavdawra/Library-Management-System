<?php
include "connection.php";
$acc=$_REQUEST['accession'];
$uname=$_REQUEST['uname'];
$null="";
$i=0;
if($uname=="")
{
	   header("Location:return.php?chk=1");
}

$sql = "SELECT * FROM issue WHERE USERNAME='$uname'";
$result = $con->query($sql);
$chk = "SELECT AVAILABILITY FROM books WHERE ACCESSION='$acc'";
$chkresult = $con->query($chk);
if ($chkresult->num_rows > 0) {
   

    while($chkrow = $chkresult->fetch_assoc()) {
		$a=$chkrow["AVAILABILITY"];
		
		}}
		echo $a;
		if($a>0)
		{
if ($result->num_rows > 0) {
   

    while($row = $result->fetch_assoc()) {
        
		if($row["BOOK1"]==NULL)
		{
			$query="UPDATE issue SET BOOK1='$acc' WHERE USERNAME='$uname'";
	$result=mysqli_query($con,$query);
	
	$i=1;
	if($result){
		$add="UPDATE books SET AVAILABILITY=AVAILABILITY-1 WHERE ACCESSION='$acc'";
	mysqli_query($con,$add);
		header("Location:issue.php?chk=2"); 
	}
	else{
		header("Location:rissue.php?chk=3");
	}
			}
			
			
			if($row["BOOK2"]==NULL && $i==0)
		{
			$query1="UPDATE issue SET BOOK2='$acc' WHERE USERNAME='$uname'";
	$result1=mysqli_query($con,$query1);
	if($result1){
		$add="UPDATE books SET AVAILABILITY=AVAILABILITY-1 WHERE ACCESSION='$acc'";
	mysqli_query($con,$add);
		header("Location:issue.php?chk=2"); 
	}
	else{
		header("Location:issue.php?chk=3");
	}
			}
    }
   
} else {
    header("Location:issue.php?chk=4");
}}
else{
	header("Location:issue.php?chk=1");
	}
$con->close();

?>