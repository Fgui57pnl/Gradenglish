<?php
require_once '../../backend/config.php';
require_once '../../backend/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-new'])) {
    $course_name = $_POST['course_name'];
    $lesson= $_POST['lesson'];
    $lesson_link = trim($_POST['lesson_link']);
    $center_name=$_POST['center_name'];
    $sql_center= "SELECT Ma_Trung_Tam FROM `trung_tam` where Ten_Trung_Tam='$center_name'";
    $center_code = mysqli_query($conn, $sql_center);
    $row = mysqli_fetch_assoc($center_code );
    $center_test=$row ['Ma_Trung_Tam'];

    $sql_count = "SELECT COUNT(*) AS total FROM `khoa_hoc`";
    $result = mysqli_query($conn, $sql_count);
    $row = mysqli_fetch_assoc($result);
    $next_id = $row['total'] + 1;
    $ma_khoa_hoc = "KH" . str_pad($next_id,2, '0', STR_PAD_LEFT);

    // Assuming $conn is your database connection
    $sql="INSERT INTO `khoa_hoc`(`id`, `Ma_Khoa_Hoc`, `Ma_Trung_Tam`, `Ten_Khoa_Hoc`, `So_tiet`, `Hoc_Phi`, `Loai_Khoa_Hoc`, `Link_Khoa_Hoc`) 
    VALUES ('$next_id','$ma_khoa_hoc','$center_test',' $course_name','$lesson','','','$lesson_link')";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. ADMIN_URL.'khoahoc' );
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>
