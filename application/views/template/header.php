<?php 



    $project = array("", array("","","","","","","","","","") );
    $employee = array("", array("","","","","","","","","","") );



    switch ($page_focus) {
      case 'summary':
        
        $project[0] = "menu-open";
        $project[1][$page_menu] = "active";

        break;
      case 'projectmanage':
        
        $project[0] = "menu-open";
        $project[1][$page_menu] = "active";
        
        break;

      case 'search':
        
        $project[0] = "menu-open";
        $project[1][$page_menu] = "active";
        
        break;

      case 'employee':
        
        $employee[0] = "menu-open";
        $employee[1][$page_menu] = "active";
        
      break;
       

    }


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ระบบบริหารจัดการโครงการ</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://projectmanage.webclient.me/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="https://projectmanage.webclient.me/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://projectmanage.webclient.me/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="https://projectmanage.webclient.me/assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="https://projectmanage.webclient.me/assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="https://projectmanage.webclient.me/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="https://projectmanage.webclient.me/assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="https://projectmanage.webclient.me/assets/plugins/summernote/summernote-bs4.min.css">

  <!-- datapicker -->
    <link href="https://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css" rel="Stylesheet">
 
    <!-- datapicker -->

  <!-- datatable -->
    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" rel="Stylesheet">
 
    <!-- datatable -->



  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  <!-- jQuery -->
  <script src="https://projectmanage.webclient.me/assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="https://projectmanage.webclient.me/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="https://projectmanage.webclient.me/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="https://projectmanage.webclient.me/assets/plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="https://projectmanage.webclient.me/assets/plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="https://projectmanage.webclient.me/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="https://projectmanage.webclient.me/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="https://projectmanage.webclient.me/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="https://projectmanage.webclient.me/assets/plugins/moment/moment.min.js"></script>
  <script src="https://projectmanage.webclient.me/assets/plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="https://projectmanage.webclient.me/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="https://projectmanage.webclient.me/assets/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="https://projectmanage.webclient.me/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="https://projectmanage.webclient.me/assets/dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="https://projectmanage.webclient.me/assets/dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="https://projectmanage.webclient.me/assets/dist/js/pages/dashboard.js"></script>




</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
 
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li> 


    </ul>
  </nav>
  <!-- /.navbar -->


 

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="https://www.eng.kmutnb.ac.th/web/wp-content/uploads/2019/08/LOGO-KMUTNB--300x300.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">ระบบบริหารโครงการ</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://projectmanage.webclient.me/assets/dist/img/avatar4.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $Name; ?></a>
        </div>
      </div>


 
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
 
  
          <li class="nav-header">เมนู</li>
 
          <!--<li class="nav-item menu-open"> -->
          <li class="nav-item <?php echo $project[0]; ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                โครงการ
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/home/summary" class="nav-link <?php echo $project[1][0]; ?>">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>ภาพรวมโครงการ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/home/project" class="nav-link <?php echo $project[1][1]; ?>">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>จัดการโครงการ</p>
                </a>
              </li> 
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/home/search" class="nav-link <?php echo $project[1][2]; ?>">
                  <i class="far fa-circle nav-icon"></i>
                  <p>สืบค้นข้อมูล</p>
                </a>
              </li> 


            </ul>
          </li>


          <li class="nav-item <?php echo $employee[0]; ?>">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                จัดการผู้ใช้งาน
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
               
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/home/employee" class="nav-link <?php echo $employee[1][0]; ?>">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>ผู้ใช้งาน</p>
                </a>
              </li>  
              <li class="nav-item">
                <a href="<?php echo base_url(); ?>index.php/home/logout" class="nav-link">
                  <i class="fas fa-edit nav-icon"></i>
                  <p>ออกจากระบบ</p>
                </a>
              </li>  



            </ul>
          </li>

     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $page_name; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
             
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->






 
