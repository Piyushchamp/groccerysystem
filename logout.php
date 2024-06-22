<?php
@include 'config.php';
// session_start();
$_SESSION['user_name']="";
session_unset();
session_destroy();

header('location:login_form.php');  
?>