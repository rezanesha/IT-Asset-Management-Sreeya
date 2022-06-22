<?php
session_start();
include('koneksi.php'); 

if($_SESSION['level']==""){
  header("location:login.php?pesan=Kamu blm login bestie");
}
// if ($_SESSION['status-login'] != true) {
    // echo '<script>window.location="login.php"</script>';
  //}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard | IT Asset Management PT Sreeya Sewu Indonesia Tbk.</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="logo.png" alt="AdminLTELogo" height="50" width="100">
  </div>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
     <center> <img src="logo.png"></center>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="dashboard.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="asset.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Asset</p>
                </a>
              
              </li>
              <li class="nav-item">
                <a href="user_manage.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User management</p>
                </a>
                </li>
              <li class="nav-item">
                <a href="logout.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Logout</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
    </aside>

    <div class="content-wrapper">
    <div class="card" >
              <div class="card-header" >
                <center><h3>ADD USER</h3></center>
              <a href="user_manage.php" class="btn btn-success " style="float:left;">
                <i class="fas fa fa-plus-circle"></i> KEMBALI
             </a>    
             <br>
    <!-- Main content -->
    <section class="content" style="background-color:#28a745;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="simple-results.html">
                        <div class="input-group">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <p>
 
    <!-- Content Header (Page header) -->

<section class="content">
    <div class="container-fluid">
    <!-- Main row -->
    <div class="row">
        <!-- Left col -->
        <section class="col-lg-12 connectedSortable">
             <div class="card-body">
            <form action="proses_adduser.php" method="POST">
                <div class="form-group">
                
                <input class="form-control form-control-sm" type="text" name="username" placeholder="Username">
                <br>
                
                <input class="form-control form-control-sm" type="text" name="nama_admin" placeholder="Nama Admin">
                <br>
                
                <input class="form-control form-control-sm" type="text" name="jabatan" placeholder="Jabatan">
                <br>
                <input class="form-control form-control-sm" type="text" name="level" placeholder="Level">
                <br>
                <input class="form-control form-control-sm" type="text" name="password" placeholder="Password">
                <br>
                
                <button type="submit" name="submit" class="btn btn-success"> <i class="fas fa fa-save"></i> Simpan</button>
            
            </form>
        
        </div>
        
  </div><!-- /.container-fluid -->
</section>
              <!-- /.card-body -->
            </div>
</div>

  </div>
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
</body>
</html>