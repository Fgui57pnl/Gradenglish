<?php 
require_once '../../backend/config.php';
require_once '../../backend/db.php';
$id=$_GET['sid'];
$sql = "delete from khoa_hoc where id_KH = $id";
if($conn->query($sql) === TRUE){
     header("Location:".ADMIN_URL.'khoahoc');
     die;
     }else
     { echo "<script>alert('Lỗi: Đã có khóa học kết nối với trung tâm'); window.location.href = 'index.php';</script>";
   
  
     }


?> 