<?php
session_start();
$_SESSION['user_id']=NULL;
unset($_SESSION['user_id']);
header("location:login.php");
?>
