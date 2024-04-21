<?php
require_once '../../backend/db.php';
require_once '../../backend/config.php';
require_once '../../backend/session_check.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-sign'])) {
    $course_name=$_POST['course_name'];
    
    $sql_kh="SELECT * FROM `khoa_hoc` WHERE Ten_Khoa_Hoc='$course_name'";
    $row0 = getSimpleQuery($sql_kh);
    $ma_kh= $row0['Ma_Khoa_Hoc'];
    $hoc_phi= $row0['Hoc_Phi'];
    $currentDate = date("Y-m-d H:i:s");


    $sql_hv="SELECT Ma_hoc_vien FROM `hoc_vien` WHERE Email='$Email'";  
    $row = getSimpleQuery($sql_hv);
    $ma_hv= $row['Ma_hoc_vien'];

  

    // Assuming $conn is your database connection
    
    $sql="INSERT INTO `hoa_don`( `Ma_Khoa_Hoc`, `Ma_hoc_vien`, `Tong_tien`,`Ngay_tao`, `Trang_thai`) 
                        VALUES ('$ma_kh','$ma_hv','$hoc_phi','$currentDate','0')";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. STU_URL.'hocphi?success=true' );
        die;
    } else {
        echo "<script>alert('Mỗi học viên chỉ đăng ký một khóa học')</script>";
        header('location: '. STU_URL.'hocphi' );

    }
}
?>
