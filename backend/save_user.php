<?php
require_once '../backend/db.php';
require_once '../backend/config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['btn-new'])) {
    $name=$_POST['name'];
    $Email=$_POST['email'];
    $password=md5($_POST['pass']);
    $gender=$_POST['check_box'];

    $sql_count = "SELECT COUNT(*) AS total FROM `hoc_vien` order by `Ma_hoc_vien` desc limit 1";
    $result = mysqli_query($conn, $sql_count);
    $row = mysqli_fetch_assoc($result);
    $next_id = $row['total'] + 1;
    $ma_hv= "HV" . str_pad($next_id,2, '0', STR_PAD_LEFT);
  




    
    $sql="INSERT INTO `hoc_vien`( `Loai_Tai_Khoan`, `Mat_khau`, `Ma_hoc_vien`, `Ho_va_Ten`, `Gioi_tinh`, `Email`) 
                                VALUES ('Học viện','$password','$ma_hv','$name','$gender','$Email')";
    
    // Execute the query
    if (mysqli_query($conn, $sql)) {
        header('Location:'.PUBLIC_URL.'login.php?success=true');

        die;
    } else {
        echo "<script>alert('Đã có email trong cơ sở dữ liệu')</script>";
        header('Location:'.PUBLIC_URL.'login.php');

    }

}
?>
