<?php
require_once '../../backend/db.php';
require_once '../../backend/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-new'])) {
    $Email=$_POST['Email'];
    $Tea_name=$_POST['tea_name'];
    $gender=$_POST['gender'];
    $password=md5($_POST['password']);
    $SDT=$_POST['SDT'];
    $address=$_POST['address'];


     
    $sql_count = "SELECT COUNT(*) AS total FROM `giang_vien` order by `Ma_Giang_Vien` desc limit 1";
    $result = mysqli_query($conn, $sql_count);
    $row = mysqli_fetch_assoc($result);
    $next_id = $row['total'] + 1;
    $ma_gv= "GV" . str_pad($next_id,2, '0', STR_PAD_LEFT);

    // Assuming $conn is your database connection
    $sql="INSERT INTO `giang_vien`( `Ma_Giang_Vien`, `Ho_va_Ten`, `Mat_khau`, `Loai_Tai_khoan`, `Gioi_tinh`, `So_dien_thoai`, `Dia_Chi`, `Email`) 
                    VALUES ('$ma_gv','$Tea_name','$password','GV','$gender',' $SDT','$address','$Email')";
    
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. ADMIN_URL.'giaovien?success=true' );
        die;
    } else {
        echo "<script>alert('Đã có email trong cơ sở dữ liệu')</script>";
        header('location: '. ADMIN_URL.'giaovien' );
    }
}
?>
