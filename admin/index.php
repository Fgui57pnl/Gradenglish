<?php require_once '../backend/config.php'; ?>
<?php require_once '../backend/session_check.php'; 
$sql_course = "SELECT COUNT(*) AS total FROM khoa_hoc";
$course= getSimpleQuery($sql_course);
$sql_tea = "SELECT COUNT(*) AS total FROM giang_vien";
$teas= getSimpleQuery($sql_tea);
$sql_stu = "SELECT COUNT(*) AS total FROM hoc_vien";
$stu = getSimpleQuery($sql_stu);
$sql_time = "SELECT COUNT(*) AS total FROM giang_day";
$timetable = getSimpleQuery($sql_time);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>
  <?php require_once 'share/style_asset.php'; ?>
  </head>



<?php require_once 'share/header.php'; ?>

<?php require_once 'share/sidebar.php'; ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <section class="content">
    <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3><?= $course['total']; ?></h3>

              <p>Khoá học</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="<?= $ADMIN_URL; ?>khoahoc" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $timetable['total']?></h3>

              <p>Lớp học</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="<?= $ADMIN_URL; ?>lop" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
            <h3><?= $stu['total']; ?></h3>

              <p>Học viên</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="<?= $ADMIN_URL; ?>nhanvien" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><h3><?= $teas['total']; ?></h3></h3>

              <p>Giáo viên</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="<?php echo $ADMIN_URL ?>giaovien" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div></div>
        
      </section>
  </section>
</div>

  



<?php require_once 'share/scripts_control.php' ?>
</body>

</html>