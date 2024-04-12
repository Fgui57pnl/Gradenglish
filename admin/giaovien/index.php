<?php
require_once '../../backend/config.php';
require_once '../../backend/session_check.php';
$sql = "SELECT * FROM giang_vien order by id asc";
$result = show_data($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Giáo viên</title>
  <?php require_once '../share/style_asset.php'; ?>
</head>

<?php require_once '../share/header.php'; ?>

<?php require_once '../share/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Giáo viên</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Giáo viên</li>
          </ol>
             
       

    
          </div>
          
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="row">
    <div class="col-md"></div>
      <div class="col-md-4">
  <div class="input-group ">
            <div class="form-outline" data-mdb-input-init>
              <input type="search" placeholder="Search" id="form1" class="form-control" />
            </div>
            <button  type="button" class="btn btn-primary" data-mdb-ripple-init>
              <i class="fas fa-search"></i>
            </button>
          </div>
      </div>
    </div> 
    
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
                    <th>Email</th>
                    <th>Tên giáo viên</th>
                    <th>Giới tính</th>
                    <th>SĐT</th>
                    <th>Địa chỉ</th>
                    


                  </tr>
                </thead>
                <?php while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tbody id="oday">
                  <td>
                  <?php echo $row['id']?>
                  </td>
                  <td>
                  <?php echo $row['Email']?>
                  </td>
                  <td>
                  <?php echo $row['Ho_va_Ten']?>
                  </td>
                  <td>
                  <?php if ($row['Gioi_Tinh']==1) echo 'Nam'; else echo 'Nữ'; ?>
                  </td>
                  <td>
                  <?php echo $row['So_dien_thoai']?>
                  </td>
                 
                  <td>
                  <?php echo $row['Dia_Chi']?>
                  </td>
                 
                
                 <td>
                    <a href="#" class="btn btn-xs btn-primary">
                      <i class="fa fa-cog"></i> Sửa
                    </a>
                    <a href="#" class="btn btn-xs btn-danger btn-remove">
                      <i class="fa fa-trash-o"></i> Xoá
                    </a>
                  </td>
                
                  </tr>

                </tbody>
                <?php  } ?>
              </table>


            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>




      <?php require_once '../share/scripts_control.php' ?>
      </body>

</html>