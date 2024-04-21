<?php
$path = "../";
require_once '../../backend/config.php';
require_once '../../backend/session_check.php'; 
$sql1 = "SELECT distinct * FROM khoa_hoc";
$result1 = show_data($sql1);
$sql2 = "SELECT distinct * FROM giang_vien";
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

                        <form method="post" action="save.php">

                            <div class="card-body">
                                <div class="form-group">
                                    <label>Tên Khóa học</label>
                                    <select class="form-control select2bs4" style="width: 100%;" name="course_name" required>
                                    <?php while ($row = mysqli_fetch_assoc($result1)) {
                ?>
                                        <option> <?php echo $row['Ten_Khoa_Hoc'] ?></option>

                                        <?php }?>
                                    </select>
                                   
                                </div>
                               
                              
                                <div class="form-group">
                                    <label>Tên giảng viên</label>
                                    <select class="form-control select2bs4" style="width: 100%;" name="teas_name" required>
                                    <?php while ($row = mysqli_fetch_assoc($result2)) {
                ?>
                                        <option> <?php echo $row['Ho_va_Ten'] ?></option>

                                        <?php }?>
                                        </select>
                                </div>
                                <div class="form-group">
                                    <label>Ca học</label>
                                    <select class="form-control select2bs4"name="time"  style="width: 100%;" required>
                                    <option>Ca 1: 2,4,6 6h30->8h30</option>
                                    <option>Ca 2: 2,4,6 2h30->4h30</option>
                                    <option>Ca 3: 2,4,6 8h30->10h00</option>
                                    <option>Ca 4: 3,5,7 6h30->8h30</option>
                                    <option>Ca 5: 3,5,7 2h30->4h30</option>
                                    <option>Ca 6: 3,5,7 8h30->10h00</option>
                                    </select>
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