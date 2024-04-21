<?php
require_once '../../backend/db.php';
require_once '../../backend/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-up'])) {
    $center_name = $_POST['center_name'];
    $website = trim($_POST['website']);
    $address = $_POST['address'];
    $id = $_POST['id'];
      


    // Assuming $conn is your database connection
    $sql = "UPDATE `trung_tam` SET 
    `Ten_Trung_Tam`='$center_name',`Website`='$website ',`Dia_chi`='$address' where `id_TT`=$id";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. ADMIN_URL.'trungtam?editsuccess=true' );
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
