<?php 
    session_start();
    unset($_SESSION['user_name']);
    header('Location: http://localhost/gradenglish/public/login.php');
    exit;
?>