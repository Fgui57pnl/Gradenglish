<?php
$path = "../";
require_once '../../backend/config.php'; 
require_once '../../backend/session_check.php'?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Phản hồic</title>
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
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tiêu đề</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label>Khóa học</label>
                                    <select class="form-control select2bs4" style="width: 100%;">
                                        <option selected="selected">Alabama</option>
                                        <option>Alaska</option>
                                        <option>California</option>
                                        <option>Delaware</option>
                                        <option>Tennessee</option>
                                        <option>Texas</option>
                                        <option>Washington</option>
                                    </select>
                                </div>




                                <div class="form-group">
                                    <label for="">Nội dung</label>
                                    <textarea name="des" class="form-control" id="" rows="7"></textarea>
                                </div>
                                
                                   

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Tạo mới</button>
                                    </div>
                        </form>
                    </div>
                    <!-- /.card -->




                    <?php require_once '../share/scripts_control.php' ?>
                    </body>
                    <script>
                        $('.onChange-event-ratings').rateYo().on('rateyo.change', function(e, data) {
                            var rating = data.rating;
                            $(this)
                                .parent()
                                .find('.counter')
                                .text(rating);
                        });
                    </script>

</html>