<?php 
require_once '../../backend/config.php';
require_once '../../backend/db.php';
$id=$_GET['sid'];
$sql = "delete from danh_gia where id_DG = $id";
     if($conn->query($sql) === TRUE){
     header("Location:".ADMIN_URL.'phanhoi');
     die;
     }else
     { echo $conn->error;
   
  
     }

?> 