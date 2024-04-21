
<?php
require_once '../../backend/db.php';
require_once '../../backend/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-pay'])) {
    
     $ma_hoc_vien=$_POST['stu_id'];

    // Assuming $conn is your database connection
    $sql = "UPDATE `hoa_don` SET `Trang_thai`='1' WHERE Ma_hoc_vien='$ma_hoc_vien'";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. STU_URL.'hocphi?paysuccess=true' );
        die;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

