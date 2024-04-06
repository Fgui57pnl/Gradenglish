<?php
$path = "../";
require_once '../../backend/config.php'; ?>
<?php

if (isset($_SESSION['login']) && $_SESSION['login'] != "") {
  $user = $_SESSION['login'];
} else {
  // Không có phiên đăng nhập, chuyển hướng đến trang đăng nhập
  header('Location:' . PUBLIC_URL . 'login.php');
  exit;
}?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Khóa học</title>
  <?php require_once '../share/style_asset.php'; ?>
</head>

<?php require_once $path.'share/header.php'; ?>

<?php require_once '../share/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Khóa học</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Khóa học</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  


<?php require_once '../share/scripts_control.php' ?>
</body>

</html>