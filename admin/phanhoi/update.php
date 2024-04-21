<?php
require_once '../../backend/db.php';
require_once '../../backend/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-up'])) {
    $name = $_POST['name'];
    $course_name= $_POST['course_name'];
    $rank = $_POST['rank'];
    $des =$_POST['des'];
    $sql_course= "SELECT Ma_Khoa_Hoc FROM `khoa_hoc` where Ten_Khoa_Hoc='$course_name'";
    $row = getSimpleQuery($sql_course);
    $ma_khoa_hoc=$row ['Ma_Khoa_Hoc'];
    $id=$_POST['des'];

      
   

    // Assuming $conn is your database connection

    $sql="UPDATE `danh_gia` SET `Ma_Khoa_Hoc`='$ma_khoa_hoc',
    `Diem_Danh_Gia`='$rank',`Noi_dung`='$des' where 'id'=$id";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. ADMIN_URL.'phanhoi?editsuccess=true' );
        die;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>