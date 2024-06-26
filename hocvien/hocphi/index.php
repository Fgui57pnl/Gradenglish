<?php
$path = "../";
require_once '../../backend/config.php';
require_once '../../backend/session_check.php';
$sql = "SELECT Ten_Khoa_hoc,Hoc_phi,Ngay_BD,Ngay_KT,Thoi_gian,Trang_thai,hoc_vien.Ma_hoc_vien
FROM `hoa_don` 
JOIN `giang_day` ON hoa_don.Ma_Khoa_Hoc = giang_day.Ma_Khoa_Hoc
JOIN `khoa_hoc` ON hoa_don.Ma_Khoa_Hoc =  khoa_hoc.Ma_Khoa_Hoc
JOIN `hoc_vien` ON hoa_don.Ma_hoc_vien =  hoc_vien.Ma_hoc_vien
where Email='$Email'";


$result = show_data($sql);

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

                    <th>Ngày BD</th>
                    <th>Ngày KT</th>
                    <th>Ca Học</th>
                    <th>Trạng thái</th>


                  </tr>
                </thead>
                <?php $id = 1;
                      $total=0;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                  <td>
                    <?php echo $id; ?>
                  </td>
                  <td>
                    <?php echo $row['Ten_Khoa_hoc'];

                    ?>
                  </td>
                  <td>
                    <?php echo number_format($row['Hoc_phi']) ;
                    $total+=$row['Hoc_phi'];

                    ?>vnd
                  </td>
                  <td>
                    <?php echo $row['Ngay_BD'] ?>
                  </td>
                  <td>
                    <?php echo $row['Ngay_KT'] ?>
                  </td>
                  <td>
                    <?php echo $row['Thoi_gian'] ?>
                  </td>
                 
                  <td>
                    <?php 
                    
                    
                    if(!$row['Trang_thai']) 
                    echo '<button type="button" class="btn btn-danger">Chưa đóng</button>';
                  else  echo '<button type="button" class="btn btn-success">Đã đóng</button>' ?>
                  </td>






              
              









            </div>
            </tbody>
          <?php $id++;$ma_hoc_vien=$row['Ma_hoc_vien'];
                } ?>
                


          </table>

                <div class=row>
          <div class="col-md-8">
              <strong> Tổng tiền cần thanh toán:  <?php echo number_format($total) ?>vnd </strong> 
          </div>
          <form method="post" action="pay.php" >
          <div class="col-md-2">
            <input type="hidden" name="stu_id" value="<?php echo $ma_hoc_vien ?>">
          <button  type="submit" class="btn btn-xl btn-primary" name="btn-pay">
            Thanh toán</button>
            </div>
            </form>
            

          
          </div>












          </div>
          <!-- /.box-body -->
        </div>
      </div>
    </div>

  </section>
</div>
<script>
  <?php
  if (isset($_GET['success']) && $_GET['success'] == true) {
                ?>
                  alert("Tạo mới thành công");
                  history.replaceState({}, document.title, window.location.pathname);

                <?php } ?>
</script>
<script>
  <?php
  if (isset($_GET['paysuccess']) && $_GET['paysuccess'] == true) {
                ?>
                  alert("Thanh toán thành công");
                  history.replaceState({}, document.title, window.location.pathname);

                <?php } ?>
</script>



<?php require_once '../share/scripts_control.php' ?>
</body>

</html>