<?php require_once 'share/header.php';
        require_once '../backend/config.php';
     
        ?>
<link rel="stylesheet" href="assets/css/login.css">
    <div class="login-container">
        <h1><b>Đăng ký</b></h1>
        <form action="login.php" method="post">
            <input type="text" name="Email" placeholder="Email" name="user" required>
            <input type="password" name="password" placeholder="Password" name="pass" required>
            <input type="password" name="password" placeholder="Nhập lại" name="pass" required>
                <input type="submit" value="Đăng ký" name="btn-login">
                <div class="register-link">
                <p>
                    Đã có tài khoản? <a href="login.php">Đăng nhập</a></nav>
                </p>
            </div>
            
          
        </form>
    </div>
</body>

<?php require_once 'share/scripts_control.php';
      

        ?>



