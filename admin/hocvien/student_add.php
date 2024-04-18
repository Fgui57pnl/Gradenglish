<?php
$path = "../";
require_once '../../backend/config.php'; 
require_once '../../backend/session_check.php';?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Giáo viên</title>
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
                    <h1>Thêm học viên</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Học viên</li>
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
                        <form method="post" action="save.php" onsubmit="return password_check()">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email</label>
                                    <input type="email" class="form-control" name="Email" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Tên học viên</label>
                                    <input type="text" class="form-control" name="stu_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Giới tính</label>
                                    <select class="form-control select2bs4" name="gender" style="width: 100%;" required>
                                        <option selected="selected"></option>
                                        <option>Nam </option>
                                        <option>Nữ</option>

                                    </select>
                                </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Mật khẩu</label>
                                        <input type="password" class="form-control"  id="password" name="password" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Xác nhận mật khẩu</label>
                                        <input type="password" class="form-control" id="password_confirm" name="password_confirm" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">SDT</label>
                                        <input type="text" maxlength="10" class="form-control" name="SDT" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Địa chỉ</label>
                                        <input type="text" class="form-control" name="address" required>
                                    </div>





                              


                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" name="btn-new" class="btn btn-primary">Tạo mới</button>
                                </div>
                        </form>
                    </div>
                    <!-- /.card -->
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