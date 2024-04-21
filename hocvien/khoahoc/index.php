<?php
$path = "../";
require_once '../../backend/config.php';
require_once '../../backend/session_check.php';


// output data of each row
$sql = "SELECT DISTINCT *

FROM khoa_hoc

INNER JOIN trung_tam

ON khoa_hoc.Ma_Trung_Tam = trung_tam.Ma_Trung_Tam;";
$result = show_data($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Khóa học</title>
  <?php require_once '../share/style_asset.php'; ?>
</head>

<?php require_once $path . 'share/header.php'; ?>

<?php if ($role == 'Admin') {
  require_once '../share/sidebar.php';
} else require_once '../share/sidebar.php'

?>
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
                    <th>Tên khóa</th>
                    <th>Tên trung tâm</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Số tiết học</th>

                    <th>Học phí</th>
                 


                  </tr>
                </thead>
                <?php $id=1;
                 while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tbody id="oday">

             

                    <td >
                      <?php echo $id; ?>
                    </td>
                    <td >
                      <?php echo $row["Ten_Khoa_Hoc"]?>
                    </td >
                    <td>
                      <?php echo $row["Ten_Trung_Tam"]; ?>
                    </td>
                    <td>
                      <?php echo $row["Ngay_BD"]; ?>
                    </td>
                    <td>
                      <?php echo $row["Ngay_KT"]; ?>
                    </td>
                    <td>
                      <?php echo $row["So_tiet"]; ?>
                    </td>

                    <td>
                      <?php echo $row["Hoc_Phi"]; ?> vnd
                    </td>
                 




                    
                        
                  


                  </tbody>
                <?php $id++; } ?><br>
              </table>
             
               <script type="text/javascript">
            <?php
            if (isset($_GET['success']) && $_GET['success'] == true) {
            ?>
              alert("Tạo mới thành công");
              history.replaceState({}, document.title, window.location.pathname);

            <?php } ?>
            <?php 
          if (isset($_GET['editsuccess']) && $_GET['editsuccess'] == true) {
              ?>
              
                  alert("Sửa đổi thành công");
                  history.replaceState({}, document.title, window.location.pathname);

            
              <?php  }     ?>
          </script>


            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>




      <?php require_once '../share/scripts_control.php' ?>
      </body>

</html>