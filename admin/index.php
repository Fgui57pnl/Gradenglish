<?php require_once '../backend/config.php'; ?>
<?php

if (isset($_SESSION['login']) && $_SESSION['login'] != "") {
  $user = $_SESSION['login'];
  $role = $_SESSION['role'];
  //$login_sc =$_SESSION['login_alert'];
  //echo $login_sc;
 

  if ($role == 'Admin') {
    // Cho phép truy cập
    // Tiếp tục thực hiện các hành động dành riêng cho Admin
  } else {
    // Không cho phép truy cập
    header('Location:' . ADMIN_URL . 'student.php'); // Chuyển hướng đến trang người dùng
    exit;
  }
} else {
  // Không có phiên đăng nhập, chuyển hướng đến trang đăng nhập
  header('Location:' . PUBLIC_URL . 'login.php');
  exit;
}?>

<!--<div class="row justify-content-end">
      <div class="col-md-3">
        <div id="alertMessage" class="alert alert-success alert-dismissible" style="max-width: 350px;">
          <p class="text-justify"><i class="icon fas fa-check"></i> Đăng nhập thành công</p>
        </div>
      </div>
    </div>
  </div>';*/ 
-->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <?php require_once 'share/style_asset.php'; ?>
  </head>



<?php require_once 'share/header.php'; ?>

<?php require_once 'share/sidebar.php'; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">

            <div class="card-body">

              <div>
                <div class="filter-container p-0 row">
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=1" data-toggle="lightbox" data-title="sample 1 - white">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=1" class="img-fluid mb-2" alt="white sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                    <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black">
                      <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                    <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black">
                      <img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2" alt="black sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                    <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black">
                      <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                      <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white">
                      <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample" />
                    </a>
                  </div>
                  <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                    <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black">
                      <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample" />
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>

      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?php require_once 'share/scripts_control.php' ?>
</body>

</html>