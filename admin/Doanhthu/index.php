<?php
$path = "../";
require_once '../../backend/config.php';
require_once '../../backend/session_check.php';

// output data of each row
$sql = "SELECT * from hoa_don
JOIN `giang_day` ON hoa_don.Ma_Khoa_Hoc = giang_day.Ma_Khoa_Hoc
JOIN `khoa_hoc` ON hoa_don.Ma_Khoa_Hoc =  khoa_hoc.Ma_Khoa_Hoc
JOIN `hoc_vien` ON hoa_don.Ma_hoc_vien =  hoc_vien.Ma_hoc_vien
";
$result = show_data($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Hóa đơn</title>
  <?php require_once '../share/style_asset.php'; ?>
</head>

<?php require_once $path . 'share/header.php'; ?>

<?php require_once '../share/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Hóa đơn</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Hóa đơn</li>
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
                    <th>Tên Khóa học</th>
                    <th>Tên học viên</th>
                    <th>Ngày tạo</th>
                    <th>Học phí</th>
                    <th>Trạng thái</th>
                    



                  </tr>
                </thead>
                <?php $id=1;
                 while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tbody id="oday">
                    <td>
                      <?php echo $id; ?>
                    </td>
                    <td>
                      <?php echo $row['Ten_Khoa_Hoc'] ?>
                    </td>
                    <td>
                       <?php echo $row['Ho_va_Ten'] ?>
                    </td>
                    <td>
                       <?php echo $row['Ngay_tao'] ?>
                    </td>
                    
                    <td>
                      <?php echo number_format($row['Tong_tien']) ?>vnd
                    </td>
                    <td>
                    <?php 
                    
                    
                    if(!$row['Trang_thai']) 
                    echo '<button type="button" class="btn btn-danger">Chưa đóng</button>';
                  else  echo '<button type="button" class="btn btn-success">Đã đóng</button>' ?>
                  </td>



                    
                      
            </div>



            </td>


            </tr>


            </tbody>
          <?php $id++; } ?>

          </table>


          <!-- Modal -->









          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div>




    <?php require_once '../share/scripts_control.php' ?>
    </body>

</html>