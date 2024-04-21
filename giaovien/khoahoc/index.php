<?php
$path = "../";
require_once '../../backend/config.php';
require_once '../../backend/session_check.php';
// output data of each row
$sql = "SELECT *

FROM khoa_hoc

INNER JOIN trung_tam

ON khoa_hoc.Ma_Trung_Tam = trung_tam.Ma_Trung_Tam;";
$result = show_data($sql);
$sql_tt = "SELECT  *
FROM trung_tam
";
$result1 = show_data($sql_tt);
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

<?php
require_once '../share/sidebar.php';



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
                <?php $id = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tbody id="oday">



                    <td>

                      <?php echo $id;  ?>
                    </td>
                    <td>
                      <?php echo $row["Ten_Khoa_Hoc"] ?>
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
                      <?php echo number_format($row["Hoc_Phi"]); ?> vnd
                    </td>
                    <td>
                      <a href="<?php echo $row["Link_Khoa_Hoc"]; ?>" target="_blank"> Link </a>
                    </td>





                    

                    <div class="modal fade" id="modal_<?php echo $row['id_KH'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Cập nhật thông tin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="update.php">
                              <div class="card-body">
                                <div class="form-group">
                                  <label>Tên khóa học</label>
                                  <input type="text" class="form-control" name="course_name" required value="<?php echo $row["Ten_Khoa_Hoc"]; ?>">
                                </div>
                                <div class="form-group">
                                  <label>Trung tâm</label>
                                  <select class="form-control select2bs4" style="width: 100%;" name="center_name" required value="<?php echo $row["Ten_Trung_Tam"]; ?>">
                                    <?php
                                    while ($row1 = mysqli_fetch_assoc($result1)) {
                                      $selected = ($row1['Ten_Trung_Tam'] == $row['Ten_Trung_Tam']) ? 'selected="selected"' : '';
                                    ?>
                                      <option <?php echo $selected; ?>><?php echo $row1['Ten_Trung_Tam']; ?></option>
                                    <?php
                                    }
                                    ?>

                                  </select>
                                  <div class="form-group">

                                    <div class="form-group">
                                      <label for="number">Số buổi</label>
                                      <input type="number" maxlength="50" class="form-control" name="lesson" required value="<?php echo $row["So_tiet"]; ?>">
                                    </div>
                                    <?php

                                    ?>
                                    <div class="form-group">
                                      <label for="number">Ngày bắt đầu</label>
                                      <input type="date" id=start_date class="form-control" name="startdate" required value="<?php echo $row["Ngay_BD"]; ?>">
                                    </div>
                                    <div class="form-group">
                                      <label for="number">Ngày kết thúc</label>
                                      <input type="date" id=finish_date class="form-control" name="finishdate" required value="<?php echo $row["Ngay_KT"]; ?>">
                                    </div>
                                    <div class="form-group">
                                      <label for="number">Học phí</label>
                                      <input type="number" min="1000000" maxlength="10000000" class="form-control" name="fee" required value="<?php echo $row["Hoc_Phi"]; ?>">
                                    </div>
                                    <div class="form-group">
                                      <label>Link khóa học</label>
                                      <input type="text" class="form-control" name="lesson_link" required value="<?php echo $row["Link_Khoa_Hoc"]; ?>">
                                    </div>






                                  </div>
                                </div>
                                <div class="modal-footer">

                                  <button type="submit" name="btn-up" class="btn btn-primary">Lưu</button>
                                </div>
                            </form>
                          </div>
                        </div>




                        </tr>


                  </tbody>
                <?php $id++;
                } ?><br>
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
                <script>
        function Date_check() {
            var start_date= new Date(document.getElementById("start_date").value);
            var finish_date = new Date(document.getElementById("finish_date").value);

            if (start_date >= finish_date) {
                Swal.fire({
                icon: "error",
                title: "Oops...",
                text: "Ngày bắt đầu phải nhỏ hơn ngày kết thúc",
        
                });
                return false; // Ngăn form được gửi đi
            }
            return true; // Cho phép gửi form nếu tất cả điều kiện đều đúng
        }
    </script>

            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>




      <?php require_once '../share/scripts_control.php' ?>
      </body>

</html>