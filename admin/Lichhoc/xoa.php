<?php 
require_once '../../backend/config.php';
require_once '../../backend/db.php';
$id=$_GET['sid'];
$sql = "delete from giang_day where id_LH = $id";
     if($conn->query($sql) === TRUE){
     header("Location:".ADMIN_URL.'lichhoc');
     die;
     }else
     { echo $conn->error;
   
  
     }

?> 