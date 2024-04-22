<?php require_once 'share/header.php'; ?>
<?php require_once '../backend/config.php'; ?>

<link rel="stylesheet" href="assets/css/login.css">

<div class="login-container">
    <h1><b>Đăng ký</b></h1>
    <form method="post" action="../backend/save_user.php" onsubmit="return validate_check()">
    
        <input type="text" id="email" name="email" placeholder="Email" required>
        <input type="text" id="name" name="name" maxlength="50" placeholder="Họ và tên" required>
        <br>
        <input type="radio" class="checkbox" name="check_box" value="Nam" required>
        <label>Nam</label>
        <input type="radio" class="checkbox" name="check_box" value="NỮ" required>
        <label>Nữ</label>
        
        <input type="password" id="password" placeholder="Password" minlength="6" name="pass" required>
        <input type="password" id="password_confirm" placeholder="Nhập lại" minlength="6"  name="pass_confirm" required>
        <input type="submit" name='btn-new' value="Đăng ký">
        <div class="register-link">
            <p>Đã có tài khoản? <a href="login.php">Đăng nhập</a></p>
        </div>
    </form>
</div>



<script>
    function validate_check() {
        var password = document.getElementById("password").value;
        var password_confirm = document.getElementById("password_confirm").value;
        var email = document.getElementById("email").value;
        var name = document.getElementById("name").value;

        // Kiểm tra mật khẩu
        if (password !== password_confirm) {
            alert("Mật khẩu nhập lại phải giống nhau");

            return false; // Ngăn form được gửi đi
        }

        // Kiểm tra định dạng email
        var email_pattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!email_pattern.test(email)) {

            alert("Email không đúng định dạng");

            return false; // Ngăn form được gửi đi
        }
        var name_pattern = /^[^\d]+(?:\s[^\d]+)*$/;
    if (!name_pattern.test(name)) {
        alert("Tên không được chứa số");
        return false; // Ngăn form được gửi đi
    }


        return true; // Cho phép gửi form nếu tất cả điều kiện đều đúng
    }
   
</script>


<?php require_once 'share/scripts_control.php'; ?>