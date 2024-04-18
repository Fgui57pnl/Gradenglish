<?php
require_once '../../backend/config.php';
require_once '../../backend/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-new'])) {
    $doc_name = $_POST['doc_name'];
    $course_name= $_POST['course_name'];

    $sql_course= "SELECT Ma_Khoa_Hoc FROM `khoa_hoc` where Ten_Khoa_Hoc='$course_name'";
    $result = mysqli_query($conn, $sql_course);
    $row = mysqli_fetch_assoc($result );
    $ma_khoa_hoc=$row ['Ma_Khoa_Hoc'];


    $course_type= $_POST['course_type'];
    $course_link= $_POST['course_link'];

    $sql_count = "SELECT * FROM `khoa_hoc` order by `id` desc limit 1 ";
    $result = mysqli_query($conn, $sql_count);
    $row = mysqli_fetch_assoc($result);
    $next_id = $row['id'] + 1;

    // Assuming $conn is your database connection

    $sql="INSERT INTO `tai_lieu`(`id`, `Ten_Tai_Lieu`, `Ma_Khoa_Hoc`, `Loai_Tai_lieu`, `Link_Tai_Lieu`) 
                        VALUES ('$next_id','$doc_name','$ma_khoa_hoc','$course_type','$course_link')";
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. ADMIN_URL.'tailieu?=success' );
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>
