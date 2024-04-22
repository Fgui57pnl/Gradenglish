<?php
$path = "../";
require_once '../../backend/config.php';
require_once '../../backend/session_check.php';

// output data of each row
$sql = "SELECT * 
FROM giang_day
JOIN giang_vien ON giang_day.Ma_Giang_Vien = giang_vien.Ma_Giang_Vien
JOIN khoa_hoc ON giang_day.Ma_Khoa_Hoc = khoa_hoc.Ma_Khoa_Hoc;";
$result = show_data($sql);
$sql1 = "SELECT  *
FROM giang_vien
";
$result1 = show_data($sql1);
$tea_option = array();

$sql2 = "SELECT  *
FROM khoa_hoc
";
$result2 = show_data($sql2);
$course_option = array();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Lịch học</title>
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
          <h1>Lịch học</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Lịch học</li>
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
                    <th>Tên giáo viên</th>
                    <th>Tên khóa học </th>
                    <th>Thời gian học</th>



                  </tr>
                </thead>
                <?php $id = 1;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tbody id="oday">
                    <td>
                      <?php echo $id; ?>
                    </td>
                    <td>
                      <?php echo $row['Ho_va_Ten'];
                      $choose_teas=$row['Ho_va_Ten'];
                      ?>
                    </td>
                    <td>
                      <?php echo $row['Ten_Khoa_Hoc'];
                      $choose_course=$row['Ten_Khoa_Hoc'];
                      
                      ?>
                    </td>
                    <td>
                      <?php echo $row['Thoi_gian'] ?>
                    </td>


                    <td>
                      <a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modal_<?php echo $row['id_LH'] ?>">
                        <i class="fa fa-cog"> </i> Sửa

                      </a>
                      <a class="btn btn-xs btn-danger btn-remove" onclick="showAlert(event,'xoa.php?sid=<?php echo $row['id_LH'] ?>')">
                        <i class="fa fa-trash"></i> Xoá
                      </a>
                      <div class="modal fade" id="modal_<?php echo $row['id_LH'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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

                                    <input type="hidden" class="form-control" name="id" readonly value="<?php echo $row['id_LH'] ?>">
                                    
                                    <div class="card-body">
                                    <div class="form-group">
                                    <label>Tên giảng viên</label>
                                  <select class="form-control select2bs4" style="width: 100%;" name="tea_name" required value="<?php echo $row["Ho_va_Ten"]; ?>">
                                    <?php if (mysqli_num_rows($result1) > 0) {
                                      
                                      while ($row1 = mysqli_fetch_assoc($result1)) {
                                        $tea_option[] = $row1['Ho_va_Ten'];
                                      }
                                    } ?>

                                    <?php
                                   
                                    if (!empty($tea_option)) {
                                      
                                      foreach ($tea_option as $tea_name) {
                                        $selected0 = ($row['Ho_va_Ten'] == $tea_name) ? 'selected' : '';
                                        echo "<option $selected0>$tea_name</option>";
                                    }
                            
                                      }                                 
                              
                                    ?>

                                  </select>
                                </div>
                                      <div class="form-group">
                                      <label>Tên khóa học</label>
                                  <select class="form-control select2bs4" style="width: 100%;" name="course_name" required value="<?php echo $row["Ten_Khoa_Hoc"]; ?>">
                                    <?php if (mysqli_num_rows($result2) > 0) {
                                      
                                      while ($row2 = mysqli_fetch_assoc($result2)) {
                                        $course_option[] = $row2['Ten_Khoa_Hoc'];
                                      }
                                    } ?>

                                    <?php
                                   
                                    if (!empty($course_option)) {
                                      
                                      foreach ($course_option as $course_name) {
                                        $selected = ($row['Ten_Khoa_Hoc'] == $course_name) ? 'selected' : '';
                                        echo "<option $selected>$course_name</option>";
                                    }
                            
                                      }
                              
                                    ?>

                                  </select>
                                </div>

                                     
                                      <div class="form-group">
                                        <label>Ca học</label>
                                        <select class="form-control select2bs4" name="time" style="width: 100%;" required>
                                        <?php
                                  // Define an array of car options
                                  $timetable_options = array("Ca 1: 2,4,6 6h30->8h30", 
                                                          "Ca 2: 2,4,6 2h30->4h30",
                                                          "Ca 3: 2,4,6 8h30->10h00",
                                                          "Ca 4: 3,5,7 6h30->8h30",
                                                          "Ca 5: 3,5,7 2h30->4h30",
                                                          "Ca 6: 3,5,7 8h30->10h00");

                                  // Loop through the array to create options
                                  foreach ( $timetable_options   as $option) {
                                    // Check if the option matches the submitted value
                                    $selected2 = ($row['Thoi_gian'] == $option) ? 'selected' : '';

                                    // Output each option with selected attribute if applicable
                                    echo "<option value='$option' $selected2>$option</option>";
                                  }
                                  ?>
                                        </select>
                                      </div>
                                      

                                      <!-- /.card-body -->


                                    </div>
                                  </div>
                                  <div class="modal-footer">

                                    <button type="submit" name="btn-up" class="btn btn-primary">Lưu</button>
                                  </div>
                              </form>
                            </div>
                          </div>


                        </div>



                    </td>


                    </tr>


                  </tbody>
                <?php $id++;
                } ?>

              </table>


              <!-- Modal -->


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