<?php
require_once 'config.php';
// Kiểm tra xem có dữ liệu được gửi từ form hay không
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Truy vấn kiểm tra người dùng
    $sql = "SELECT * FROM nguoi_dung WHERE Ten_dang_nhap = '$username' AND Mat_khau = '$password'";
    $result = $conn->query($sql);

    // Kiểm tra kết quả trả về
    if ($result->num_rows > 0) {
        // Đăng nhập thành công
        header('Location: http://www.youtube.com/');
    } else {
        // Đăng nhập không thành công
        echo "<script>

        alert('Sai mật khẩu hoặc tên đăng nhập');</script>";
    }
}

$conn->close();
?>
