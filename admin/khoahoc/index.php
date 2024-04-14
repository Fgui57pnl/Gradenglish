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
} else require_once '../share/sidebar_stu.php'

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
                    <th>Link khóa học</th>


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
                      <?php echo $row["Ten_Khoa_Hoc"]; ?>
                    </td>
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
                    <td>
                      <?php echo $row["Link_Khoa_Hoc"]; ?>
                    </td>





                    <?php
                    if ($role == 'Admin') {
                      echo '
                          <td>
                            <a href="#" class="btn btn-xs btn-primary">
                              <i class="fa fa-cog"></i> Sửa
                            </a>
                            <a class="btn btn-xs btn-danger btn-remove" onclick="showAlert(event, \'xoa.php?sid=' . $id . '\')">
                              <i class="fa fa-trash"></i> Xoá
                            </a>
                          </td>';
                                          } else if ($role == 'HV')
                                            echo '
                          <td>
                            <a href="#" class="btn btn-xs btn-primary">
                              <i class="fa fa-cart-arrow-down"></i> Đăng ký 
                            </a>

                          </td>';
                    ?>



                    </tr>


                  </tbody>
                <?php $id++; } ?><br>
              </table>
              <script>
                function showAlert(event, href) {
                  event.preventDefault(); // Ngăn chặn hành động mặc định của liên kết
                  Swal.fire({
                    title: 'Cảnh báo',
                    text: 'Bạn có chắc chắn muốn xóa nó này?',
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: 'Đồng ý',
                    cancelButtonText: 'Hủy',
                  }).then((result) => {
                    if (result.isConfirmed) {
                      // Chuyển hướng sau khi nhấp vào nút "Đồng ý"
                      window.location.href = href;
                    }
                  });
                }
              </script>
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