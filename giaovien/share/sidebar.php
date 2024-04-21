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
         <img src="<?php echo TEACHER_URL?>dist/img/user1-128x128.png" class="img-circle" alt="User Image">
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
           <a href="<?php echo TEACHER_URL ?>" class="nav-link">
             <i class="nav-icon far fa-image"></i>
             <p>
               Dashboard
             </p>
           </a>
         </li>

        
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
               <a href="<?php echo TEACHER_URL ?>khoahoc" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Danh sách</p>
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
               <a href="<?php echo TEACHER_URL?>lichhoc" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Danh sách</p>
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
               <a href="<?php echo TEACHER_URL?>tailieu" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Danh sách</p>
               </a>
             </li>
           </ul>
           <ul class="nav nav-treeview">
             <li class="nav-item">
               <a href="<?php echo TEACHER_URL?>tailieu/document_add.php" class="nav-link">
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
               <a href="<?php echo TEACHER_URL?>phanhoi" class="nav-link">
                 <i class="far fa-circle nav-icon"></i>
                 <p>Danh sách</p>
               </a>
             </li>
           </ul>
          
         <li class="nav-item">
           <a href="<?php echo TEACHER_URL?>/dethi/" class="nav-link">
             <i class="nav-icon fas fa-copy"></i>
             <p>
               Đề thi

             </p>
           </a>
         </li>
         
         <li class="nav-item">
           <a href="<?php echo TEACHER_URL?>/cauhinh/" class="nav-link">
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