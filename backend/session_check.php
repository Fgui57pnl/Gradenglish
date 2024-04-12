<?php 
include_once 'config.php';
if (isset($_SESSION['login']) && $_SESSION['login'] != "") {
  $user = $_SESSION['login'];
  $role=$_SESSION["role"] ;
}

else header('Location:'.PUBLIC_URL.'login.php');

 
?>