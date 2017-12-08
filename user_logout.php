<?php
session_start();
$_SESSION['loggedinuser'] = false;
header("Location:index.php?chk=3");
?>