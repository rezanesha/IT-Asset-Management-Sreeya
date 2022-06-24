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
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <div class="card">
              <div class="card-header">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
         
        </div>
      </div>
    </div>

    <!-- Main content -->
    
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
                include 'koneksi.php';
                $data_admin = mysqli_query($db,"SELECT * FROM  tb_admin where level ='admin' ");
                
                // menghitung data barang
                $jumlah_user = mysqli_num_rows($data_admin);
                ?>
<h2><b><?php echo $jumlah_user; ?></b></h2>
 <p>  Data User </p>
              </div>
              <div class="icon">
              </div>
              <a href="user_manage.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
                    include 'koneksi.php';
                    $data_asset = mysqli_query($db,"SELECT * FROM  tb_asset ");
                    
                    // menghitung data barang
                    $jumlah_asset = mysqli_num_rows($data_asset);
                    ?>
<h2><b><?php echo $jumlah_asset; ?></b></h2>
                <p>DATA ASSET</p>
              </div>
              <div class="icon">
              </div>
              <a href="asset.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
                include 'koneksi.php';
                $data_asset = mysqli_query($db,"SELECT * FROM  tb_asset where memory like '8%' ");
                
                // menghitung data barang
                $jumlah_asset = mysqli_num_rows($data_asset);
                ?>
<h2><b><?php echo $jumlah_asset; ?></b></h2>
               <b><p>Memory 8GB</p></b>
              </div>
              <div class="icon">
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
                  include 'koneksi.php';
                  $data_asset = mysqli_query($db,"SELECT * FROM  tb_asset where memory like '16%' ");
                  
                  // menghitung data barang
                  $jumlah_asset = mysqli_num_rows($data_asset);
                  ?>
                  <h2><b><?php echo $jumlah_asset; ?></b></h2>

               <b> <p>Memory 16GB</p></b>
              </div>
              <div class="icon">
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>       
    
        
            </div>
          </section>
          <div class="content-header">
          <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Data Pengguna Microsoft</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              
          <script type="text/javascript" src="Chart.js"></script>
    <?php 
	include 'koneksi.php';
	?>
 
	<div style="width: 700px;margin: 0px auto;">
		<canvas id="myChart"></canvas>
	</div>
 
	<br/>
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: ["Microsoft 10 Pro", "Microsoft 7 Professional", "Microsoft 8 Pro", "Microsoft 2012 R2 Standard"],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_10pro = mysqli_query($db,"select * from tb_asset where OS_name='Microsoft Windows 10 Pro'");
					echo mysqli_num_rows($jumlah_10pro);
					?>, 
					<?php 
					$jumlah_7pro = mysqli_query($db,"select * from tb_asset where OS_name='Microsoft Windows 7 Professional'");
					echo mysqli_num_rows($jumlah_7pro);
					?>, 
					<?php 
					$jumlah_8pro = mysqli_query($db,"select * from tb_asset where OS_name='Microsoft Windows 8 Pro'");
					echo mysqli_num_rows($jumlah_8pro);
					?>, 
					<?php 
					$jumlah_2012 = mysqli_query($db,"select * from tb_asset where OS_name='Microsoft Windows Server 2012 R2 Standard'");
					echo mysqli_num_rows($jumlah_2012);
					?>
					],
					backgroundColor: 
            ['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
				
					borderColor: ['rgb(255, 99, 132)'],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
    </div>
            </div>
          </div>
          <!-- /.card-body -->
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <div class="content-header">
          <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title">Data System Manucfaturer</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <div class="chart">
              
          <script type="text/javascript" src="Chart.js"></script>
    <?php 
	include 'koneksi.php';
	?>
 
	<div style="width: 700px;margin: 0px auto;">
		<canvas id="myPie"></canvas>
	</div>
 
	<br/>
	<script>
		var ctx = document.getElementById("myPie").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				labels: ["HP", "Dell Inc.", "VMware, Inc."],
				datasets: [{
					label: '',
					data: [
					<?php 
					$jumlah_HP = mysqli_query($db,"select * from tb_asset where system_manufacturer='HP'");
          echo mysqli_num_rows($jumlah_HP);
					?>, 
					<?php 
					$jumlah_Dell  = mysqli_query($db,"select * from tb_asset where system_manufacturer='Dell Inc.'");
          echo mysqli_num_rows($jumlah_Dell);
					?>, 
					<?php 
					$jumlah_VMware = mysqli_query($db,"select * from tb_asset where system_manufacturer='VMware, Inc.'");
          echo mysqli_num_rows($jumlah_VMware);
					?>
					],
					backgroundColor: 
['rgb(255, 99, 132)', 'rgba(56, 86, 255, 0.87)', 'rgb(60, 179, 113)','rgb(175, 238, 239)'],
				
					borderColor: ['rgb(255, 99, 132)'],
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
    </div>
            </div>
          </div>
          </div>
          <!-- /.card-body -->
        <!-- /.card -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


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
