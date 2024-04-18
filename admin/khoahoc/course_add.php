<?php
$path = "../";
require_once '../../backend/config.php'; 
require_once '../../backend/session_check.php';
$sql = "SELECT * FROM trung_tam ";
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

<?php require_once '../share/sidebar.php'; ?>
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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md">
                    <!-- general form elements -->
                    <div class="card card-primary">

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="save.php" onsubmit="return Date_check()">
                            <div class="card-body">
                                <div class="form-group">
                                    <label >Tên khóa học</label>
                                    <input type="text" class="form-control" name="course_name" required >
                                </div>
                                <div class="form-group">
                                    <label>Trung tâm</label>
                                    <select class="form-control select2bs4" style="width: 100%;" name="center_name"required >
                                        <option selected="selected">------</option>
                                        <?php while ($row = mysqli_fetch_assoc($result)) {
                ?>
                                        <option> <?php echo $row['Ten_Trung_Tam'] ?></option>

                                        <?php }?>
                                    
                                    </select>
                                    <div class="form-group">
                                  
                                <div class="form-group">
                                    <label for="number">Số buổi</label>
                                    <input type="number" maxlength="50" class="form-control" name="lesson"required  >
                                </div>
                                <?php 
              
             ?>
                                <div class="form-group">
                                    <label for="number">Ngày bắt đầu</label>
                                    <input type="date" id=start_date class="form-control" name="startdate" required >
                                </div>
                                <div class="form-group">
                                    <label for="number">Ngày kết thúc</label>
                                    <input type="date" id=finish_date class="form-control" name="finishdate" required >
                                </div>
                                <div class="form-group">
                                    <label for="number">Học phí</label>
                                    <input type="number" min="1000000" maxlength="10000000" class="form-control" name="fee" required >
                                </div>
                                <div class="form-group">
                                    <label >Link khóa học</label>
                                    <input type="text" class="form-control" name="lesson_link" required >
                                </div>
                          


                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="btn-new" class="btn btn-primary">Tạo mới</button>
                                </div>
                        </form>
                    </div>
                    <!-- /.card -->
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




                    <?php require_once '../share/scripts_control.php' ?>
                    </body>

</html>