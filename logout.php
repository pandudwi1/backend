<?php
session_start();

$_SESSION['id_user']='';
$_SESSION['username']='';
$_SESSION['nama']='';
$_SESSION['password']='';

unset($_SESSION['id_user']);
unset($_SESSION['username']);
unset($_SESSION['nama']);
unset($_SESSION['password']);

session_unset();
session_destroy();
header('Location:login.php');

?>