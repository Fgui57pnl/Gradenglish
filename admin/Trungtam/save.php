
<?php
require_once '../../backend/db.php';
require_once '../../backend/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-new'])) {
    $center_name = $_POST['center_name'];
    $website = trim($_POST['website']);
    $address = $_POST['address'];
 
    $sql_count = "SELECT * FROM `trung_tam` order by `Ma_Trung_Tam` desc limit 1";
    $result = mysqli_query($conn, $sql_count);
    $row = mysqli_fetch_assoc($result);
    $next_id = $row['id_TT'] + 1;
    $ma_trung_tam = "TT" . str_pad($next_id,2, '0', STR_PAD_LEFT);
      
     

    // Assuming $conn is your database connection
    $sql = "INSERT INTO `trung_tam`(`id_TT`, `Ma_Trung_Tam`, `Ten_Trung_Tam`, `Website`, `Dia_chi`) 
            VALUES ('$next_id', '$ma_trung_tam', '$center_name', '$website', '$address')";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('location: '. ADMIN_URL.'trungtam?success=true' );
        die;
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>

