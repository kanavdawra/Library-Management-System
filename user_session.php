<?php
session_start();
if (isset($_SESSION['loggedinuser']) && $_SESSION['loggedinuser'] == true) {
    $userid=$_SESSION['username'];
} else {
    echo "Please log in first to see this page.";
	header("Location:index.php");
}
?>