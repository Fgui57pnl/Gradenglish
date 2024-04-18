<?php require_once 'share/header.php';
        require_once '../backend/config.php';
     
        ?>
<link rel="stylesheet" href="assets/css/login.css">
    <div class="login-container">
        <h1><b>Đăng nhập</b></h1>
        <form action="login.php" method="post">
            <input type="text" name="Email" placeholder="Email" name="user" required>
            <input type="password" name="password" placeholder="Password" name="pass" required>
            <div class="remember-forgot">
    
                <p>
                <a href="#">Quên mật khẩu?</a></p>
            
                
            </div>
                <input type="submit" value="Login" name="btn-login">
           <div class="register-link">
                <p>
                    Không có tài khoản? <a href="registration.php">Đăng ký</a></nav>
                </p>
            </div>
            
          
        </form>
    </div>
</body>


<script>  <?php
            if (isset($_GET['success']) && $_GET['success'] == true) {
            ?>
              alert("Thêm thành công. Mời đăng nhập");
              history.replaceState({}, document.title, window.location.pathname);

            <?php } ?>
</script>
<?php require_once 'share/scripts_control.php';
      

        ?>



