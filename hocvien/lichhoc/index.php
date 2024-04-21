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
$sql1 = "SELECT * 
FROM giang_vien";
$result1 = show_data($sql1);
$sql2 = "SELECT * 
FROM khoa_hoc";
$result2 = show_data($sql2);
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
                <form method="post" action="sign_up.php">
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
                      <input name="course_name" type="hidden" value="<?php echo $row['Ten_Khoa_Hoc']; ?>">
                      <?php echo $row['Ten_Khoa_Hoc'];
                     
                      
                      ?>
                    </td>
                    <td>
                      <?php echo $row['Thoi_gian'] ?>
                    </td>


                    <td>
                      <button href="#" class="btn btn-xs btn-primary" id="signupButton" type="submit"  name="btn-sign" data-toggle="modal">
                        Đăng kí 

                      </button>
                      </form>
                      
                                      <!-- /.card-body -->


                                  
                          </div>


                        </div>



                    </td>


                    </tr>


                  </tbody>
                <?php $id++;
                } ?>

              </table>


              <!-- Modal -->


            
              
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