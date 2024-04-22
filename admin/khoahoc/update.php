<?php
require_once '../../backend/config.php';
require_once '../../backend/db.php';



if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-up'])) {
    $id = $_POST['id_KH'];
    $course_name = $_POST['course_name'];
    $lesson= $_POST['lesson'];
    $start_date= $_POST['startdate'];
    $finish_date= $_POST['finishdate'];
    $fee= $_POST['fee'];

    
    $lesson_link = trim($_POST['lesson_link']);
    $center_name=$_POST['center_name'];
    $sql_center= "SELECT Ma_Trung_Tam FROM `trung_tam` where Ten_Trung_Tam='$center_name'";
    $center_code = mysqli_query($conn, $sql_center);
    $row = mysqli_fetch_assoc($center_code );
    $ma_trung_tam=$row ['Ma_Trung_Tam'];



    // Assuming $conn is your database connection

      $sql="UPDATE `khoa_hoc` SET `Ma_Trung_Tam`='$ma_trung_tam',`Ten_Khoa_Hoc`='$course_name',
    `So_tiet`='$lesson',`Hoc_Phi`='$fee',`Link_Khoa_Hoc`='$lesson_link',`Ngay_BD`='$start_date',`Ngay_KT`='$finish_date' where id_KH='$id'";
    
                        // Execute the query


    if (mysqli_query($conn, $sql)) {
        header('location: '. ADMIN_URL.'khoahoc?editsuccess=true' );
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>
