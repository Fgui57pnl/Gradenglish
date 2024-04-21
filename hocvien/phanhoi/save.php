<?php
require_once '../../backend/db.php';
require_once '../../backend/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-new'])) {
    $name = $_POST['name'];
    $course_name= $_POST['course_name'];
    $rank = $_POST['rank'];
    $today = date("Y-m-d");
    $des =$_POST['des'];
    $sql_course= "SELECT Ma_Khoa_Hoc FROM `khoa_hoc` where Ten_Khoa_Hoc='$course_name'";
    $row = getSimpleQuery($sql_course);
    $ma_khoa_hoc=$row ['Ma_Khoa_Hoc'];

      
   

    // Assuming $conn is your database connection
    $sql = "INSERT INTO `danh_gia`( `Ma_hoc_vien`, `Ma_Khoa_Hoc`, `Diem_Danh_Gia`, `Ngay_DG`, `Noi_dung`) 
                                VALUES ('','$ma_khoa_hoc','$rank','$today','$des')";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. ADMIN_URL.'phanhoi?success=true' );
        die;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>