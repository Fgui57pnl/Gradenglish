<?php
require_once '../../backend/config.php';
require_once '../../backend/db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-up'])) {
    $doc_name = $_POST['doc_name'];
    $course_name= $_POST['course_name'];
    $id= $_POST['id'];

    $sql_course= "SELECT Ma_Khoa_Hoc FROM `khoa_hoc` where Ten_Khoa_Hoc='$course_name'";
    $result = mysqli_query($conn, $sql_course);
    $row = mysqli_fetch_assoc($result );
    $ma_khoa_hoc=$row ['Ma_Khoa_Hoc'];
  


    $course_type= $_POST['course_type'];
    $course_link= $_POST['course_link'];


    // Assuming $conn is your database connection

              $sql="UPDATE `tai_lieu` SET `Ten_Tai_Lieu`='$doc_name',
                        `Ma_Khoa_Hoc`='$ma_khoa_hoc',`Loai_Tai_lieu`='$course_type',`Link_Tai_Lieu`='$course_link' where 'id' =$id";
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. ADMIN_URL.'tailieu?editsuccess=true' );
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>
