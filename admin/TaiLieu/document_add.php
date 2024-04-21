<?php
$path = "../";
require_once '../../backend/config.php';
require_once '../../backend/session_check.php'; 
$sql = "SELECT distinct * FROM khoa_hoc";
$result = show_data($sql);
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
                    <h1>Thêm tài liệu</h1>
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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="save.php">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên tài liệu</label>
                                    <input type="text" class="form-control" name="doc_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Khóa học</label>
                                    <select class="form-control select2bs4" style="width: 100%;" name="course_name" required>
                                    
                                        <?php while ($row = mysqli_fetch_assoc($result)) {
                ?>
                                        <option> <?php echo $row['Ten_Khoa_Hoc'] ?></option>

                                        <?php }?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Loại tài liệu</label>
                                    <select class="form-control select2bs4" style="width: 100%;"name="course_type" required>>
                                
                                        <option>Giáo trình</option>
                                        <option>Video bài giảng</option>
                                        <option>Bài tập</option>
                                    
                                    
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Link tài liệu</label>
                                    <input type="text" class="form-control" name="course_link" required>
                                </div>

                               



                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="btn-new" class="btn btn-primary">Tạo mới</button>
                                </div>
                        </form>
                    </div>
                    <!-- /.card -->




                    <?php require_once '../share/scripts_control.php' ?>
                    </body>

</html>