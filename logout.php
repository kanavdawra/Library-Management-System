<?php
session_start();
$_SESSION['loggedin'] = false;
header("Location:index.php?chk=3");
?>