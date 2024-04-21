<?php
require_once '../../backend/db.php';
require_once '../../backend/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-up'])) {
    $Email=$_POST['Email'];
    $stu_name=$_POST['stu_name'];
    $gender=$_POST['gender'];
    $SDT=$_POST['SDT'];
    $address=$_POST['address'];
    $id = $_POST['id'];


  

    // Assuming $conn is your database connection
    
    $sql="UPDATE `hoc_vien` SET `Ho_va_Ten`='$stu_name',`Gioi_tinh`='$gender',
    `So_dien_thoai`='$SDT',`Dia_Chi`='$address',`Email`='$Email' where `id_HV`=$id";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. ADMIN_URL.'hocvien?editsuccess=true' );
        die;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
