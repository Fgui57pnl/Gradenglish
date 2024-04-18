  <?php
  $path = "../";
  require_once '../../backend/config.php';
  require_once '../../backend/session_check.php';

  if (trim($role) == 'Admin') {
    $sql = "SELECT * FROM `nguoi_dung` WHERE `Email`='$Email'";
  } else if ($role == 'Học viên') {
    $sql = "SELECT * FROM `hoc_vien` WHERE `Email`='$Email'";;
  } else if ($role == 'Giáo viên') {
    $sql = "SELECT * FROM `giang_vien` WHERE `Email`='$Email'";
  }
  $result = show_data($sql);
  $row = mysqli_fetch_assoc($result);

  ?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Cấu hình</title>
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
            <h1>Cấu hình</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Cấu hình</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

      <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">

            <!-- /.card-header -->
            <div class="card-body">

              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <form method="post" action="update.php">
                      <label for="">Email</label>
                      <input type="email" class="form-control" name="email" name="email" value="<?php echo $row['Email'] ?>" readonly>

                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label for="">Họ và Tên</label>
                    <input type="text" class="form-control" name="fullname" value="<?php echo $row['Ho_va_Ten'] ?>">
                  </div>
                  <!-- /.form-group -->

                </div>
                <!-- /.col -->
                <div class="col-5">
                  <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="text" class="form-control" name="phone" value="<?php echo $row['So_dien_thoai'] ?>">

                  </div>
                  <!-- /.form-group -->
                </div>

              </div>
              <!-- /.row -->


              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="">Địa chỉ</label>
                    <input type="text" class="form-control" name="address" value="<?php echo $row['Dia_Chi'] ?>">
                  </div>

                </div>
                <!-- /.form-group -->

              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label>Giới tính</label>
                    <select class="form-control select2bs4" name="gender" style="width: 100%;">
                      <option selected="selected">------</option>
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

                    <!-- /.form-group -->
                  </div>
                  <!-- /.col -->


                </div>

                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" name="btn_up"class="btn btn-primary">Lưu lại</button>
            </div>
          </div>
          </form>


      </section>

      <!-- /.card -->
      



      <script type="text/javascript">
        <?php
        if (isset($_GET['editsuccess']) && $_GET['editsuccess'] == true) {
        ?>

          alert("Sửa đổi thành công");
          history.replaceState({}, document.title, window.location.pathname);


        <?php  }     ?>
      </script>



      <!-- /.card-body -->


      <!-- /.card -->




      <?php require_once '../share/scripts_control.php' ?>
      </body>

  </html>