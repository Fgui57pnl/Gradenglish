<?php
require_once '../../backend/db.php';
require_once '../../backend/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-up'])) {
    $Email=$_POST['Email'];
    $tea_name=$_POST['tea_name'];
    $gender=$_POST['gender'];
    $SDT=$_POST['SDT'];
    $address=$_POST['address'];
    $id = $_POST['id'];


  

    // Assuming $conn is your database connection
    
    $sql="UPDATE `giang_vien` SET `Ho_va_Ten`='$tea_name',`Gioi_tinh`='$gender',
    `So_dien_thoai`='$SDT',`Dia_Chi`='$address',`Email`='$Email' where id_GV='$id'";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. ADMIN_URL.'giaovien?editsuccess=true' );
        die;
    } else {
        echo "<script>alert('Đã có email trong cơ sở dữ liệu')</script>";
        header('location: '. ADMIN_URL.'giaovien' );
    }
}
?>
