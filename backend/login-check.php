<?php
require_once 'config.php';

function safe_value($conn,$value){
    return mysqli_real_escape_string($conn,$value);
}

    session_start();
// Kiểm tra xem có dữ liệu được gửi từ form hay không
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn-login']))
{
    // Lấy dữ liệu từ form
    $username = safe_value($conn,$_POST['username']);
    $password = safe_value($conn,$_POST['password']);
    $role;
    

    // Truy vấn kiểm tra người dùng
    $sql = "SELECT * FROM nguoi_dung WHERE Ten_dang_nhap = '$username' AND Mat_khau = '$password'";
    $result = $conn->query($sql);
    $row=mysqli_fetch_assoc($result);

    // Kiểm tra kết quả trả về
    if ($result && $result->num_rows > 0) {
        // Đăng nhập thành công
        $_SESSION['login_alert']= $login_sc;
        $_SESSION['login']=$row['Ho_va_Ten'];
        $_SESSION['role']=$row['Loai_Tai_Khoan'];
        
        header('Location:'.ADMIN_URL);
        exit;
    } else {
        // Đăng nhập không thành công
        echo "<script>
        alert('Sai mật khẩu hoặc tên đăng nhập');
        window.location.href = '" . PUBLIC_URL . "login.php';
      </script>";
        exit;
    }
}

$conn->close();
?>
