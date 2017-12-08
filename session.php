<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    
} else {
    echo "Please log in first to see this page.";
	header("Location:index.php");
}
?>