<?php
require_once '../../backend/db.php';
require_once '../../backend/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-new'])) {
    $Email=$_POST['Email'];
    $stu_name=$_POST['stu_name'];
    $gender=$_POST['gender'];
    $password=md5($_POST['password']);
    $SDT=$_POST['SDT'];
    $address=$_POST['address'];


     
    $sql_count = "SELECT COUNT(*) AS total FROM `hoc_vien` order by `Ma_hoc_vien` desc limit 1";
    $row = getSimpleQuery($sql_count);
    $next_id = $row['total'] + 1;
    $ma_hv= "HV" . str_pad($next_id,2, '0', STR_PAD_LEFT);

    // Assuming $conn is your database connection
    
    $sql="INSERT INTO `hoc_vien`( `Loai_Tai_Khoan`, `Mat_khau`, `Ma_hoc_vien`, `Ho_va_Ten`, `Gioi_tinh`, `So_dien_thoai`, `Dia_Chi`, `Email`) 
                        VALUES ('Học viên','$password','$ma_hv','$stu_name','$gender','$SDT','$address','$Email')";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. ADMIN_URL.'hocvien?success=true' );
        die;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
