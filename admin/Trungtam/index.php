<?php
$path = "../";
require_once '../../backend/config.php';
require_once '../../backend/session_check.php';

// output data of each row
$sql = "SELECT * FROM trung_tam order by id asc";
$result = show_data($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Trung tâm</title>
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
          <h1>Trung tâm</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Trung tâm</li>
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
                    <th>Tên Trung tâm</th>
                    <th>Website</th>
                    <th>Địa chỉ</th>



                  </tr>
                </thead>
                <?php $id=1;
                 while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <tbody id="oday">
                    <td>
                      <?php echo $id; $id++;?>
                    </td>
                    <td>
                      <?php echo $row['Ten_Trung_Tam'] ?>
                    </td>
                    <td>
                      <a href="<?php echo $row['Website'] ?>">Link</a>
                    </td>
                    <td>
                      <?php echo $row['Dia_chi'] ?>
                    </td>


                    <td>
                      <a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modal_<?php echo $row['id'] ?>">
                        <i class="fa fa-cog"> </i> Sửa

                      </a>
                      <a class="btn btn-xs btn-danger btn-remove" onclick="showAlert(event,'xoa.php?sid=<?php echo $row['id'] ?>')">
                        <i class="fa fa-trash"></i> Xoá
                      </a>
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
                                  <label>STT</label>
                                    <input type="text" class="form-control" name="id" readonly value="<?php echo $row['id'] ?>">
                                    <label>Tên Trung tâm</label>
                                    <input type="text" class="form-control" name="center_name" value="<?php echo $row['Ten_Trung_Tam'] ?>" required>

                                  </div>


                                  <div class="form-group">
                                    <label>Website</label>
                                    <input type="text" class="form-control" name="website" value="<?php echo $row['Website'] ?>" required>
                                  </div>
                                  <div class="form-group">
                                    <label>Địa chỉ</label>
                                    <input type="text" class="form-control" name="address" value="<?php echo $row['Dia_chi'] ?>" required>
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
          <?php  } ?>

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