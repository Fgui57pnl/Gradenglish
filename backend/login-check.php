<?php
require_once 'config.php';
session_start();

// Xử lý dữ liệu gửi từ form đăng nhập
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn-login'])) {
    $Email = $_POST['Email'];
    $password = $_POST['password'];
    
    // Sử dụng prepared statements để tránh SQL injection
    $stmt1 = $conn->prepare("SELECT * FROM nguoi_dung WHERE Email=? AND Mat_khau=?");
    $stmt1->bind_param("ss", $Email, $password);
    $stmt1->execute();

    $result1 = $stmt1->get_result();
    
    if ($result1->num_rows > 0) {
        // Tài khoản thuộc loại 1
        // Thực hiện các hành động cần thiết
        $row1 = $result1->fetch_assoc();
        $_SESSION["login"] = $row1['Ho_va_Ten'];
        $_SESSION["role"] = $row1['Loai_Tai_Khoan'];
        header('Location:'.ADMIN_URL);
        exit;
    } else {
        // Kiểm tra tài khoản trong các bảng khác (users_type2, users_type3)
        $stmt2 = $conn->prepare("SELECT * FROM hoc_vien WHERE Email=? AND  Mat_khau=?");
        $stmt2->bind_param("ss", $Email, $password);
        $stmt2->execute();
        $result2 = $stmt2->get_result();
        
        if ($result2->num_rows > 0) {
            // Tài khoản thuộc loại 2
            // Thực hiện các hành động cần thiết
            $row2 = $result2->fetch_assoc();
            $_SESSION["login"] = $row2['Ho_va_Ten'];
            $_SESSION["role"] = $row2['Loai_Tai_Khoan'];
            header('Location:'.ADMIN_URL.'student.php');
            exit;
        } else {
            // Sai tên đăng nhập hoặc mật khẩu
            echo "<script>
                alert('Sai mật khẩu hoặc tên đăng nhập');
                window.location.href = '" . PUBLIC_URL . "login.php';
              </script>";
            exit;
        }
    }
}

// Đóng kết nối
?>
