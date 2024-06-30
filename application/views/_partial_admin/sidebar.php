<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user panel (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?php echo base_url('assets'); ?>/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
             </div>
             <div class="info">
                 <a href="#" class="d-block">Admin</a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <div class="form-inline">
             <div class="input-group" data-widget="sidebar-search">
                 <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                 <div class="input-group-append">
                     <button class="btn btn-sidebar">
                         <i class="fas fa-search fa-fw"></i>
                     </button>
                 </div>
             </div>
         </div>

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 <li class="nav-item">
                     <a href="<?php echo site_url() ?>" class="nav-link">
                         <i class="nav-icon fas fa-project-diagram"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?php echo site_url("master/guru") ?>" class="nav-link">
                         <i class="nav-icon fas fa-chalkboard-teacher"></i>
                         <p>
                             Guru
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?php echo site_url("master/siswa") ?>" class="nav-link">
                         <i class="nav-icon fas fa-user-graduate"></i>
                         <p>
                             Siswa
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?php echo site_url("master/kelas") ?>" class="nav-link">
                     <i class="nav-icon fas fa-university"></i>
                         <p>
                             Kelas
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?php echo site_url("master/absensi") ?>" class="nav-link">
                         <i class="nav-icon fas fa-list"></i>
                         <p>
                             Absensi
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?php echo site_url("master/list-nilai") ?>" class="nav-link">
                         <i class="nav-icon fas fa-pen"></i>
                         <p>
                             nilai
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?php echo site_url("master/mata-pelajaran") ?>" class="nav-link">
                         <i class="nav-icon fas fa-book"></i>
                         <p>
                             Mata Pelajaran
                         </p>
                     </a>
                 </li>
                 <li class="nav-item">
                     <a href="<?php echo site_url("master/orang-tua") ?>" class="nav-link">
                         <i class="nav-icon fas fa-user-shield"></i>
                         <p>
                             Data Orang Tua
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
