<?php 
require_once '../../backend/config.php';
require_once '../../backend/db.php';
$id=$_GET['sid'];
$sql = "delete from tai_lieu where id = $id";
     if($conn->query($sql) === TRUE){
     header("Location:".ADMIN_URL.'tailieu');
     die;
     }else
     { echo "<script>alert('Lỗi'); window.location.href = 'index.php';</script>";
   
  
     }

?> 