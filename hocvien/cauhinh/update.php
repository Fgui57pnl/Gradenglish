<?php
require_once '../../backend/db.php';
require_once '../../backend/config.php';
require_once '../../backend/session_check.php';
if ($_SERVER['REQUEST_METHOD'] ) {
    $Email = $_POST['email'];
    $full_name = $_POST['fullname'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
      

    // Assuming $conn is your database connection
    if ($role =='Admin'){
        $sql="UPDATE `nguoi_dung` SET `Ho_va_Ten`='$full_name',`Gioi_tinh`='$gender',
        `So_dien_thoai`='$phone',`Dia_Chi`='$address' WHERE `Email`='$Email'";
      }
      else if($role =='Học viên'){
        $sql="UPDATE `hoc_vien` SET `Ho_va_Ten`='$full_name',`Gioi_tinh`='$gender',
        `So_dien_thoai`='$phone',`Dia_Chi`='$address' WHERE `Email`='$Email'";
    
      }
      else if($role =='Giáo viên'){
        $sql="UPDATE `giang_vien` SET `Ho_va_Ten`='$full_name',`Gioi_tinh`='$gender',
        `So_dien_thoai`='$phone',`Dia_Chi`='$address' WHERE `Email`='$Email'";
      }
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. ADMIN_URL.'cauhinh?editsuccess=true' );
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
