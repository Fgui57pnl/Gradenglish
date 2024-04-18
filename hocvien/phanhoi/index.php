<?php
$path = "../";
require_once '../../backend/config.php'; 
require_once '../../backend/session_check.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Phản hồi</title>
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
          <h1>Phản hồi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Phản hồi</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
      
      <div class="row">
          <div class="col-xs-12">
          <div class="box">
          <div class="box-header">

      <!-- /.box-header -->
      <div class="box-body">
      <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th>Tiêu đề</th>
            <th>Tên khóa</th>
            <th>Nội dung</th>
           
            <th>Loại đánh giá</th>
            
            
          </tr>
          </thead>
          <tbody id="oday">
            <td>
            <a href="#"
                class="btn btn-xs btn-primary"
                >
                <i class="fa fa-cog"></i>  Sửa
                </a>
                <a href="#"
                class="btn btn-xs btn-danger btn-remove"
                >
                <i class="fa fa-trash-o"></i> Xoá
                </a>
           </td>
           <td>
           <p>Lorem ipsum dolor sit </p></td>
          </tr>
      
        </tbody>
        </table>

      
      </div>
      <!-- /.box-body -->
    </div>
          </div>
      </div>

  


<?php require_once '../share/scripts_control.php' ?>
</body>

</html>