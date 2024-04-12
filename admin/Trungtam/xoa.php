<?php 
require_once '../../backend/config.php';
require_once '../../backend/db.php';
$id=$_GET['sid'];
$sql = "delete from trung_tam where id = $id";
mysqli_query($conn,$sql);
     
     header("Location:".ADMIN_URL.'trungtam');
     die;

?> 