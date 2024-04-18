<?php 
require_once '../../backend/config.php';
require_once '../../backend/db.php';
$id=$_GET['sid'];
$sql = "delete from hoc_vien where id = $id_HV";
     if($conn->query($sql) === TRUE){
     header("Location:".ADMIN_URL.'hocvien');
     die;
     }else
     { echo "Lỗi";
   
  
     }

?> 