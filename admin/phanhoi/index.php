<?php
$path = "../";
require_once '../../backend/config.php'; 
require_once '../../backend/session_check.php';
$sql="SELECT Ten_Khoa_Hoc,Noi_dung,Diem_Danh_Gia,Ngay_DG,id_DG

FROM danh_gia

JOIN khoa_hoc ON khoa_hoc.Ma_Khoa_Hoc = danh_gia.Ma_Khoa_Hoc;";
$result = show_data($sql);
$sql_course="SELECT * 
FROM khoa_hoc ";
$result1=show_data($sql_course);
$course_option = array();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Phản hồi</title>
  <?php require_once '../share/style_asset.php'; ?>
</head>

<?php require_once $path.'share/header.php'; ?>

<?php require_once '../share/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Phản hồi</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Phản hồi</li>
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
            <th>Nội dung</th>
            <th>Điểm đánh giá</th>
            <th>Ngày đánh giá</th>
            
            
            
            
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
                      <?php echo $row['Ten_Khoa_Hoc'] ?>
                    </td>
                    <td>
                      <?php echo $row['Noi_dung'] ?>
                    </td>
                    <td>
                    <?php echo $row['Diem_Danh_Gia'] ?>/100
                    </td>
                    <td>
                    <?php echo $row['Ngay_DG'] ?>
                    </td>
                  
            <td>
            <a href="#" class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modal_<?php echo $row['id_DG'] ?>">
                <i class="fa fa-cog"></i>  Sửa
                </a>
                <a class="btn btn-xs btn-danger btn-remove" onclick="showAlert(event,'xoa.php?sid=<?php echo $row['id_DG'] ?>')">
                        <i class="fa fa-trash-o"></i> Xoá
                      </a>
            
                
           </td>
           <div class="modal fade" id="modal_<?php echo $row['id_DG'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
                                    <label for="exampleInputEmail1">Tiêu đề</label>
                                    <input type="hidden" class="form-control" name="id" readonly value="<?php echo $row['id_DG'] ?>">
                                    <input type="text" class="form-control" name="name" value="<?php echo $row['Ten_Khoa_Hoc'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> Điểm đánh giá</label>
                                    <input type="number" maxlength="3" class="form-control" name="rank" value="<?php echo $row['Diem_Danh_Gia'] ?>" required>
                                </div>
                                <div class="form-group">
                                    <label>Khóa học</label>
                            
                                    <select class="form-control select2bs4" style="width: 100%;" name="course_name" required value="<?php echo $row["Ten_Khoa_Hoc"]; ?>">
                                    <?php if (mysqli_num_rows($result1) > 0) {
                                      
                                      while ($row1 = mysqli_fetch_assoc($result1)) {
                                        $course_option[] = $row1['Ten_Khoa_Hoc'];
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
                                    <label for="">Nội dung</label>
                                    <textarea name="des" class="form-control" required maxlength="100" rows="7" value=""> <?php echo $row['Noi_dung'] ?></textarea>
                                </div>
                                
                                
                                   

                                    <div class="card-footer">
                                        <button type="submit" name="btn-up" class="btn btn-primary">Lưu lại</button>
                                    </div>
                        </form>
                                    
                         
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
  


<?php require_once '../share/scripts_control.php' ?>
</body>

</html>