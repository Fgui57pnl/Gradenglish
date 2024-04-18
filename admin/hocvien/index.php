<?php
require_once '../../backend/config.php';
require_once '../../backend/session_check.php';
$sql = "SELECT * FROM hoc_vien order by id_HV asc";
$result = show_data($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Học viên</title>
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
          <h1>Học viên</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Học viên</li>
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
          <button type="button" class="btn btn-primary" data-mdb-ripple-init>
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

                    <th>Tên học viên</th>
                    <th>Giới tính</th>
                    <th>SĐT</th>
                    <th>Địa chỉ</th>



                  </tr>
                </thead>
                <?php $id=1;
                
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tbody id="oday">
                    <td>
                      <?php echo $id ?>
                    </td>
                    <td>
                      <?php echo $row['Email'] ?>
                    </td>
                    <td>
                      <?php echo $row['Ho_va_Ten'] ?>
                    </td>
                    <td>
                      <?php echo $row['Gioi_tinh'] ?>
                    </td>
                    <td>
                      <?php echo $row['So_dien_thoai'] ?>
                    </td>

                    <td>
                      <?php echo $row['Dia_Chi'] ?>
                    </td>



                    <td>
                      <a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modal_<?php echo $row['id_HV'] ?>">
                        <i class="fa fa-cog"></i> Sửa
                      </a>
                      <a class="btn btn-xs btn-danger btn-remove" onclick="showAlert(event,'xoa.php?sid=<?php echo $row['id_HV'] ?>')">
                        <i class="fa fa-trash-o"></i> Xoá
                      </a>
                    </td>
                    <div class="modal fade" id="modal_<?php echo $row['id_HV'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="myModalLabel">Cập nhật thông tin</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form method="post" action="update.php" onsubmit="return password_check()">


                              <div class="card-body">
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Email</label>
                                  <input type="email" class="form-control" name="Email" value="<?php echo $row['Email'] ?>" required>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Tên học viên</label>
                                  <input type="text" class="form-control" name="stu_name" value="<?php echo $row['Ho_va_Ten'] ?>" required>
                                </div>
                                <div class="form-group">
                                  <label>Giới tính</label>
                                  <select class="form-control select2bs4" name="gender" style="width: 100%;">
                                
                                  <?php
                                  // Define an array of car options
                                  $genderOptions = array("Nam", "Nữ");

                                  // Loop through the array to create options
                                  foreach ($genderOptions  as $option) {
                                    // Check if the option matches the submitted value
                                    $selected = ($row['Gioi_tinh'] == $option) ? 'selected' : '';

                                    // Output each option with selected attribute if applicable
                                    echo "<option value='$option' $selected>$option</option>";
                                  }
                                  ?>
                                  </select>
                                </div>
                            
                                <div class="form-group">
                                  <label for="exampleInputPassword1">SDT</label>
                                  <input type="text" maxlength="10" class="form-control" name="SDT" value="<?php echo $row['So_dien_thoai'] ?>" required>
                                </div>
                                <div class="form-group">
                                  <label for="exampleInputPassword1">Địa chỉ</label>
                                  <input type="text" class="form-control" name="address" value="<?php echo $row['Dia_Chi'] ?>" required>
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

                    </tr>

                  </tbody>
                <?php $id++; } ?>
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
        function password_check() {
          var password = document.getElementById("password").value;
          var password_confirm = document.getElementById("password_confirm").value;

          if (password !== password_confirm) {
            Swal.fire({
              icon: "error",
              title: "Oops...",
              text: "Mật khẩu nhập lại phải giống nhau"
            });
            return false; // Ngăn form được gửi đi
          }
          return true; // Cho phép gửi form nếu tất cả điều kiện đều đúng
        }
      </script>


      <?php require_once '../share/scripts_control.php' ?>
      </body>

</html>