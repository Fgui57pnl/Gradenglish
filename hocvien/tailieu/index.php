<?php
$path = "../";
require_once '../../backend/config.php';
require_once '../../backend/session_check.php';
$sql = "SELECT * FROM tai_lieu order by id asc";
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

<?php require_once $path.'share/header.php'; ?>

<?php require_once '../share/sidebar.php'; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tài liệu</h1>
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
            <th>Tên tài liệu</th>
            <th>Loại tài liệu</th>
            <th>Link tài liệu<th>
           
            
          </tr>
          </thead>
          <?php $id=1;
          
          while ($row = mysqli_fetch_assoc($result)) {
                ?>
                <tbody id="oday">
                  <td>
                  <?php echo $id?>
                  </td>
                  <td>
                  <?php echo $row['Ten_Tai_Lieu']?>
                  </td>
                  <td>
                  <?php echo $row['Loai_Tai_lieu']?>
                  </td>
                  <td>
                  <a href="<?php echo $row['Link_Tai_Lieu'] ?>" target="_blank">Link tài liệu</a>
                  </td>
                  
                 
                
                 
                
                

                </tbody>
                <?php $id++;  } ?>
        </table>

      
      </div>
      <!-- /.box-body -->
    </div>
          </div>
      </div> 
      


<?php require_once '../share/scripts_control.php' ?>
</body>

</html>