<?php 
require_once '../../backend/config.php';
require_once '../../backend/db.php';
$id=$_GET['sid'];
$sql = "delete from giang_vien where id_GV = $id";
     if($conn->query($sql) === TRUE){
     header("Location:".ADMIN_URL.'giaovien');
     die;
     }else
     { echo "Lỗi";
   
  
     }

?> 