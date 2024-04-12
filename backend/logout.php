<?php 
    session_start();
    session_destroy();
    header('Location: http://localhost/gradenglish/public/login.php');
    exit;
?>