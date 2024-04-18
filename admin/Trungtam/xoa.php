<?php 
require_once '../../backend/config.php';
require_once '../../backend/db.php';
$id=$_GET['sid'];
$sql = "delete from trung_tam where id_TT = $id";
     if($conn->query($sql) === TRUE){
     header("Location:".ADMIN_URL.'trungtam');
     die;
     }else
     { echo "<script>alert('Lỗi: Đã có khóa học kết nối với trung tâm'); window.location.href = 'index.php';</script>";
   
  
     }

?> 