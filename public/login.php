<?php include 'share/header.php';
        include '../backend/config.php';
        session_destroy();
        ?>
<link rel="stylesheet" href="assets/css/login.css">
    <div class="login-container">
        <h1><b>Login</b></h1>
        <form action="login.php" method="post">
            <input type="text" name="username" placeholder="Username" name="user" required>
            <input type="password" name="password" placeholder="Password" name="pass" required>
            <div class="remember-forgot">
                <p><input type="checkbox">Ghi Nhớ Đăng Nhập</p>
                <p>
                <a href="#">Quên mật khẩu?</a></p>
            
                
            </div>
                <input type="submit" value="Login" name="btn-login">
           <div class="register-link">
                <p>
                    Không có tài khoản? <a href="#">Đăng ký</a></nav>
                </p>
            </div>
            
          
        </form>
    </div>
</body>




<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/lightbox.js"></script>
<script src="assets/js/tabs.js"></script>
<script src="assets/js/video.js"></script>
<script src="assets/js/slick-slider.js"></script>
<script src="assets/js/custom.js"></script>

