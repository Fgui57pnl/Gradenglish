<?php
$path = "../";
require_once '../../backend/config.php';
require_once '../../backend/session_check.php';
$sql = "SELECT DISTINCT *
FROM tai_lieu
JOIN khoa_hoc ON tai_lieu.Ma_Khoa_Hoc = khoa_hoc.Ma_Khoa_Hoc;";

$result = show_data($sql);
$sql = "SELECT  *
FROM khoa_hoc
";
$result1 = show_data($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Tài liệu</title>
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
          <h1>Tài liệu</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Tài liệu</li>
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
                    <th>Tên tài liệu</th>
                    <th>Khóa học</th>
                    <th>Loại tài liệu</th>
                    <th>Link tài liệu
                    <th>


                  </tr>
                </thead>
                <?php $id = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tbody id="oday">
                    <td>
                      <?php echo $id ?>
                    </td>
                    <td>
                      <?php echo $row['Ten_Tai_Lieu'] ?>
                    </td>
                    <td>
                      <?php echo $row['Ten_Khoa_Hoc'] ?>
                    </td>
                    <td>
                      <?php echo $row['Loai_Tai_lieu'] ?>
                    </td>
                    <td>
                      <a href="<?php echo $row['Link_Tai_Lieu'] ?>" target="_blank">Link tài liệu</a>
                    </td>



                    <td>
                      <a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modal_<?php echo $row['id'] ?>">
                        <i class="fa fa-cog"></i> Sửa
                      </a>
                      <a class="btn btn-xs btn-danger btn-remove" onclick="showAlert(event,'xoa.php?sid=<?php echo $row['id'] ?>')">
                        <i class="fa fa-trash-o"></i> Xoá
                      </a>
                    </td>
                    <div class="modal fade" id="modal_<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                  <label for="exampleInputEmail1">Tên tài liệu</label>
                                  <input type="hidden" class="form-control" name="id" readonly value="<?php echo $row['id'] ?>">
                                  <input type="text" class="form-control" name="doc_name" value="<?php echo $row['Ten_Tai_Lieu'] ?>" required>
                                </div>
                                <div class="form-group">
                                  <label>Khóa học</label>
                                  <select class="form-control select2bs4" style="width: 100%;" name="course_name" required>>

                                    <?php while ($row1 = mysqli_fetch_assoc($result1)) { ?>
                                      <option> <?php echo $row1['Ten_Khoa_Hoc'] ?></option>
                                    <?php } ?>

                                  </select>
                                </div>
                                <div class="form-group">
                                  <label>Loại tài liệu</label>
                                  <select class="form-control select2bs4" style="width: 100%;" name="course_type" required>>
                                    <?php
                                    // Define an array of car options
                                    $course_type = array("Giáo trình", "Video bài giảng", "Bài tập");


                                    foreach ($course_type  as $option) {

                                      $selected = ($row['Loai_Tai_lieu'] == $option) ? 'selected' : '';

                                      echo "<option value='$option' $selected>$option</option>";
                                    }
                                    ?>

                                  </select>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Link tài liệu</label>
                                  <input type="text" class="form-control" name="course_link" value="<?php echo $row['Link_Tai_Lieu'] ?>" required>
                                </div>

                              </div>
                              <div class="modal-footer">

                                <button type="submit" name="btn-up" class="btn btn-primary">Lưu</button>
                              </div>
                            </form>
                          </div>
                        </div>


                      </div>

                      </tr>

                  </tbody>
                <?php $id++;
                } ?>
              </table>


            </div>
            <!-- /.box-body -->
          </div>
        </div>
      </div>
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
      <script>
        <?php
        if (isset($_GET['success']) && $_GET['success'] == true) {
        ?>
          alert("Tạo mới thành công");
          history.replaceState({}, document.title, window.location.pathname);

        <?php } ?>
      </script>



      <?php require_once '../share/scripts_control.php' ?>
      </body>

</html>