  <?php
  $path = "../";
  require_once '../../backend/config.php'; ?>

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
                <label for="">Email</label>
                    <input type="email" class="form-control" name="email" value="pquan5459@gmail.com"  readonly>
                  
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="">Họ và Tên</label>
                    <input type="text" class="form-control" name="fullname" value="Kazuki">
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
              <div class="col-md-5">
              <img src="../dist//img/default_avatar.jpg" alt="" style="max-width:130px;" id="showImage">
              <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                <!-- /.form-group -->
              </div>
              
              
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
              <div class="col-md-5">
                <div class="form-group">
                <label for="">Địa chỉ</label>
                    <input type="text" class="form-control" name="address" value="">
                </div>
                
              </div>
              
                
                <!-- /.form-group -->
                <div class="col-5">
                <div class="form-group">
                <label for="">Số điện thoại</label>
                    <input type="text" class="form-control" name="phone" value="">
                
                </div>
                <!-- /.form-group -->
              </div>
              </div>
              <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                <label>Giới tính</label>
                                    <br>
                                    <input type="radio" name="gender" value="1" > Nam &nbsp;
                                    <input type="radio" name="gender" value="-1" > Nữ
                                    </div>
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
                                    <button type="submit" class="btn btn-primary">Lưu lại</button>
                                </div>
        </div>

</section>

        <!-- /.card -->





        <!-- /.card-body -->

      
      <!-- /.card -->




      <?php require_once '../share/scripts_control.php' ?>
      </body>

  </html>