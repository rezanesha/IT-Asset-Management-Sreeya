<?php
$id_serial = $_GET['serial_number'];
session_start();
include('koneksi.php');
if($_SESSION['level']==""){
  header("location:login.php?pesan=Kamu blm login bestie");
}
// if ($_SESSION['status-login'] != true) {
//     echo '<script>window.location="login.php"</script>';
//   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Asset | IT Asset Management</title>

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
    <a href="dashboard_peg.php" class="brand-link">
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
                <a href="asset_peg.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Kembali</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </div>
    </aside>

  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
        </div>
    </section>
 
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-8">
          <div class="col-sm-2">
            <h1 class="m-0">Detail Asset</h1>
          </div>
          <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              </div>

              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_asset where serial_number='$id_serial'";
                            $query = mysqli_query($db, $sql) or die("SQL Anda Salah");
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                      <td>Hostname</td>
                      <td>: <?= $data['hostname']?></td>
                    </tr>
                  <tbody>
                    <tr>
                      <td>Whoami</td>
                      <td>: <?= $data['Whoami']?></td>
                    </tr>
                  <tbody>
                    <tr>
                      <td>Serial Number</td>
                      <td>: <?= $data['serial_number']?></td>
                    </tr>
                  <tbody>
                    <tr>
                      <td>OS Name</td>
                      <td>: <?= $data['OS_name']?></td>
                    </tr>
                  <tbody>
                    <tr>
                      <td>OS Version</td>
                      <td>: <?= $data['OS_version']?></td>
                    </tr>
                  <tbody>
                    <tr>
                      <td>System Manufacturer</td>
                      <td>: <?= $data['system_manufacturer']?></td>
                    </tr>
                  <tbody>
                    <tr>
                      <td>System Model</td>
                      <td>: <?= $data['system_model']?></td>
                    </tr>
                  <tbody>
                    <tr>
                      <td>Type</td>
                      <td>: <?= $data['system_type']?></td>
                    </tr>
                  <tbody>
                    <tr>
                      <td>Processor</td>
                      <td>: <?= $data['processor']?></td>
                    </tr>
                  <tbody>
                    <tr>
                      <td>Memory</td>
                      <td>: <?= $data['memory']?></td>
                    </tr>
                  <tbody>
                    <tr>
                      <td>Disk Size 1</td>
                      <td>: <?= $data['disk_size1']?></td>
                    </tr>
                  <tbody>
                    <tr>
                      <td>Disk Size 2</td>
                      <td>: <?= $data['disk_size2']?></td>
                    </tr>
                  <tbody>
                    <tr>
                        <td>Business Unit</td>
                        <td>: <?= $data['business_unit']?></td>
                        </tr>
                    <tr>
                      <td>Department</td>
                      <td>: <?= $data['department']?></td>
                    </tr>
                  <tbody>
                    <tr>
                      <td>Lokasi</td>
                      <td>: <?= $data['lokasi']?></td>
                    </tr>
                  <tbody>
                    <tr>
                      <td>Email Addres</td>
                      <td>: <?= $data['email']?></td>
                    </tr>
                  <tbody>
                            <?php } ?>
                    </thead>
                  </tbody>
                </table>
              </div>
              <card-body>
              </div>
            <card>
          </div>
        </div>
        </div>
      </div>
    </div>

  </div>
  <footer class="main-footer">
    <center><strong>Copyright &copy; 2022 <a href="https://adminlte.io">Sreeya Sewu Indonesia</a>.</strong></center>
    </div>
  </footer>

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