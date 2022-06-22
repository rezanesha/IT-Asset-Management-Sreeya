<?php
session_start();
include('koneksi.php');

if($_SESSION['level']==""){
  header("location:login.php?pesan=Kamu blm login bestie");
}
// if ($_SESSION['status-login'] != true) {
//     echo '<script>window.location="login.php"</script>';
//   }
?>

<?php
$username = $_GET['username'];
include('koneksi.php');
// if ($_SESSION['status-login'] != true) {
//     echo '<script>window.location="login.php"</script>';
//   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Asset | IT Asset Management</title>

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
                  <p>User Management</p>
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
                <center><h3>EDIT DATA USER</h3></center>
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
             <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tb_admin where username='$username'";
                            $query = mysqli_query($db, $sql) or die("SQL Anda Salah");
                            
                            
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {                              
                            ?>
            

            <form action="" method="POST">
                <div class="form-group">
                <input class="form-control form-control-sm" type="text" name="username" value="<?=$data['username']?>"  placeholder="Username" style="background-color:#28a745;">
                <br>
                <input class="form-control " type="text" name="nama_admin" value="<?=$data['nama_admin']?>" placeholder="Nama">
                <br>
                <input class="form-control form-control-sm" type="text" name="jabatan" style="background-color:#28a745;" value="<?=$data['jabatan']?>">
                <br>
                <input class="form-control form-control-sm" type="text" name="level"  value="<?=$data['level']?>">
                <br>
                <input class="form-control form-control-sm" type="text" name="password" style="background-color:#28a745;" value="<?=$data['password']?>">
                <br>
               
                <button type="submit" name="submit_edit" class="btn btn-success"> <i class="fas fa fa-update"></i> Update</button>
            </form>    
            

    <?php 
    include 'koneksi.php';
    if(isset($_POST['submit_edit'])){

      $username                 = $_POST['username'];
      $nama_admin                   = $_POST['nama_admin'];
      $jabatan            = $_POST['jabatan'];
      $password                  = $_POST['password'];
      
      

      //$sql = "UPDATE tb_asset SET hostname='$hostname', Whoami='$Whoami', serial_number='$serial_number', OS_name='$OS_name', OS_version='$OS_version', system_manufacturer='$system_manufacturer', system_model='$system_model', system_model='$system_type', processor='$processor', memory='$memory', business_unit='$business_unit', disk_size1='$disk_size1', disk_size2='$disk_size2', department='$department', lokasi='$lokasi', email='$email', type_acoount'$type_account' WHERE serial_number='$_POST[serial_number]'";

      $q= mysqli_query($db,"UPDATE tb_admin SET 
          username='$_POST[username]',
          nama_admin='$_POST[nama_admin]',
          jabatan='$_POST[jabatan]',
          password='$_POST[password]'WHERE username='$username'") or die ("Kesalahan di SQL");

      if($q){
        echo '<script>alert("Data Berhasil Diupdate");document.location.href="user_manage.php";</script>';
      }else{
          echo '<script>alert("Data Gagal Diupdate");document.location.href="edituser.php";</script>';
      }     
    }

    ?>
            
        </div>
        <?php } ?> 
        
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