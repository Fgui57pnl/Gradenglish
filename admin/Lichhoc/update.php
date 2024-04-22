<?php
require_once '../../backend/db.php';
require_once '../../backend/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-up'])) {
    $course_name = $_POST['course_name'];
    $teas_name = $_POST['tea_name'];
    $time = $_POST['time'];
    $id = $_POST['id'];
    
    $sql_course= "SELECT Ma_Khoa_Hoc FROM `khoa_hoc` where Ten_Khoa_Hoc='$course_name'";
    $result = mysqli_query($conn, $sql_course);
    $row = mysqli_fetch_assoc($result );
    $ma_khoa_hoc=$row ['Ma_Khoa_Hoc'];

    $sql_teas= "SELECT Ma_Giang_Vien FROM `giang_vien` where Ho_va_Ten='$teas_name'";
    $result1 = mysqli_query($conn,  $sql_teas);
    $row1 = mysqli_fetch_assoc($result1);
    $ma_giang_vien=$row1 ['Ma_Giang_Vien'];
      


    // Assuming $conn is your database connection
    $sql = "UPDATE `giang_day` SET `Ma_Giang_Vien`='$ma_giang_vien',`Ma_Khoa_Hoc`='$ma_khoa_hoc',`Thoi_gian`='$time' WHERE id_LH='$id'";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. ADMIN_URL.'lichhoc?editsuccess=true' );
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
