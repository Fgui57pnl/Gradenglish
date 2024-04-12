<?php require_once '../backend/config.php'; ?>
<?php require_once '../backend/session_check.php'; 


?>


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

<?php require_once 'share/sidebar_stu.php'; ?>


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

  



<?php require_once 'share/scripts_control.php' ?>
</body>

</html>