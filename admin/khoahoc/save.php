<?php
require_once '../../backend/config.php';
require_once '../../backend/db.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-new'])) {
    $course_name = $_POST['course_name'];
    $lesson= $_POST['lesson'];
    $start_date= $_POST['startdate'];
    $finish_date= $_POST['finishdate'];
    $fee= $_POST['fee'];

    if ($start_date>= $finish_date) {
        header('location: '. ADMIN_URL.'khoahoc/course_add.php?datewrong=true' );
    }
   
    $lesson_link = trim($_POST['lesson_link']);
    $center_name=$_POST['center_name'];
    $sql_center= "SELECT Ma_Trung_Tam FROM `trung_tam` where Ten_Trung_Tam='$center_name'";
    $center_code = mysqli_query($conn, $sql_center);
    $row = mysqli_fetch_assoc($center_code );
    $ma_trung_tam=$row ['Ma_Trung_Tam'];

    $sql_count = "SELECT * FROM `khoa_hoc` order by `Ma_Khoa_Hoc` desc limit 1";
    $result = mysqli_query($conn, $sql_count);
    $row = mysqli_fetch_assoc($result);
    $next_id = $row['id_KH'] + 1;
    $ma_khoa_hoc = "KH" . str_pad($next_id,2, '0', STR_PAD_LEFT);

    // Assuming $conn is your database connection

    $sql="INSERT INTO `khoa_hoc`( `Ma_Khoa_Hoc`, `Ma_Trung_Tam`, `Ten_Khoa_Hoc`, `So_tiet`, `Hoc_Phi`, `Link_Khoa_Hoc`, `Ngay_BD`, `Ngay_KT`) 
                        VALUES ('$ma_khoa_hoc','$ma_trung_tam','$course_name','$lesson','$fee','$lesson_link','$start_date','$finish_date')";
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. ADMIN_URL.'khoahoc?=success' );
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>
