 <!-- /.navbar -->


 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">

   <!-- Brand Logo -->
   <a href="../index.php" class="brand-link">

     <span class="brand-text font-weight-light"></span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel d-flex text-justify ">
       <div class="image">
         <img src="<?php echo ADMIN_URL ?>dist/img/user1-128x128.png" class="img-circle" alt="User Image">
       </div>
       <div class="info text-light">
         <p href="#"><?php echo $user?><br>Role: <?php echo $role; ?> <br>
    
           <i class="fa-xs fa fa-circle text-success"></i> <small>Online</small>
         </p>
       </div>
     </div>

     <!-- SidebarSearch Form -->

     <!-- Sidebar Menu -->
     <nav class="mt-2">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         <li class="nav-item">
           <a href="<?php echo ADMIN_URL ?>" class="nav-link">
             <i class="nav-icon far fa-image"></i>
             <p>
               Dashboard
             </p>
           </a>
         </li>

         <li class="nav-item">
           <a href="#" class="nav-link ">
             <i class="nav-icon fa fa-tv"></i>
             <p>
               Trung tâm
               <i class="fas fa-angle-left right"></i>
               <span class="badge badge-info right"></span>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo ADMIN_URL ?>trungtam" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Danh sách</p>
               </a>
             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo ADMIN_URL ?>trungtam/center_add.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Tạo mới</p>
               </a>
             </li>
           </ul>

         <li class="nav-item">
           <a href="#" class="nav-link ">
             <i class="nav-icon fas fa-book"></i>
             <p>
               Khóa học
               <i class="fas fa-angle-left right"></i>
               <span class="badge badge-info right"></span>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo ADMIN_URL ?>khoahoc" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Danh sách</p>
               </a>
             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo ADMIN_URL ?>khoahoc/course_add.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Tạo mới</p>
               </a>
             </li>
           </ul>


         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-users"></i>
             <p>
               Giáo viên
               <i class="fas fa-angle-left right"></i>
               <span class="badge badge-info right"></span>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo ADMIN_URL ?>giaovien" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Danh sách</p>
               </a>
             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo ADMIN_URL ?>giaovien/teacher_add.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Tạo mới</p>
               </a>
             </li>
           </ul>
         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-user"></i>
             <p>
               Học viên
               <i class="fas fa-angle-left right"></i>
               <span class="badge badge-info right"></span>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo ADMIN_URL ?>hocvien" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Danh sách</p>
               </a>
             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo ADMIN_URL ?>hocvien/student_add.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Tạo mới</p>
               </a>
             </li>
           </ul>

         </li>

         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-calendar"></i>
             <p>
               Lịch học
               <i class="fas fa-angle-left right"></i>
               <span class="badge badge-info right"></span>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo ADMIN_URL ?>lichhoc" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Danh sách</p>
               </a>
             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo ADMIN_URL ?>lichhoc/timetable_add.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Tạo mới</p>
               </a>
             </li>
           </ul>



         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-file"></i>
             <p>
               Tài liệu
               <i class="fas fa-angle-left right"></i>
               <span class="badge badge-info right"></span>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo ADMIN_URL ?>tailieu" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Danh sách</p>
               </a>
             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo ADMIN_URL ?>tailieu/document_add.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Tạo mới</p>
               </a>
             </li>
           </ul>
         </li>

         <li class="nav-item">
           <a href="#" class="nav-link">
             <i class="nav-icon fas fa-share"></i>
             <p>
               Phản hồi
               <i class="fas fa-angle-left right"></i>
               <span class="badge badge-info right"></span>
             </p>
           </a>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo ADMIN_URL ?>phanhoi" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Danh sách</p>
               </a>
             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo ADMIN_URL ?>phanhoi/feedback_add.php" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Tạo mới</p>
               </a>
             </li>
           </ul>
         <li class="nav-item">
           <a href="<?php echo ADMIN_URL ?>/dethi/" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
             <p>
               Đề thi

             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?php echo ADMIN_URL ?>doanhthu" class="nav-link">
             <i class="nav-icon far fas fa-dollar-sign"></i>
             <p>
               Doanh thu
             </p>
           </a>
         </li>
         <li class="nav-item">
           <a href="<?php echo ADMIN_URL ?>/cauhinh/" class="nav-link">
             <i class="nav-icon fas 	fa fa-cog"></i>
             <p>
               Cấu hình
             </p>
           </a>
         </li>


         <li class="nav-item">
           <a href="<?php echo BACKEND_URL ?>logout.php" class="nav-link">
             <i class="nav-icon fas 	fa fa-sign"></i>
             <p>
               Đăng xuất
             </p>
           </a>
         </li>
 </aside>