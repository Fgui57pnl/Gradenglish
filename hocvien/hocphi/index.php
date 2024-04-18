<?php
$path = "../";
require_once '../../backend/config.php';
require_once '../../backend/session_check.php';
require_once 'shopping_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Học phí</title>
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
          <h1>Học phí</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Học phí</li>
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
                    <th>Tên khóa học</th>
                    <th>Học phí</th>
                    <th>Địa chỉ</th>
                    <th>Ngày BD</th>
                    <th>Ngày KT</th>

                    
                  </tr>
                </thead>
                <?php $id=1;
                if(isset($_SESSION['cart'])) {
                  
                ?>
            
                  <tr>
                  <td><?php  echo $id?> </td>
                    <td>
                     <?php  print_r($_SESSION['cart']);?><td>
                    
                    
                    </tr>
              
                      

            
                      <a class="btn btn-xs btn-danger btn-remove" >
                        <i class="fa fa-trash"></i> Xoá
                      </a>
                     
                      
            </div>
            </tbody>


            <?php $id++; } ?>
                    


    


         
         

          </table>


          <!-- Modal -->



            
    
          </script>







          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div>




    <?php require_once '../share/scripts_control.php' ?>
    </body>

</html>