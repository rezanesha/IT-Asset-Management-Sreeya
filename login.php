<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | IT Asset Management </title>
      <style>
        body{
            background-image: url(re.png);
            background-size: 400px;
            background-repeat: no-repeat;
            background-position: left;
        }

    </style>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.css">
</head>
<body class="hold-transition login-page">
  <div class="card">
    <div class="card-header text-center">
      <a href="" class="h1"><h1 style="color:#28a745;"><b>Login</b></a></h1>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Masukkan Username dan Password</p>

      <form action="cek_login.php" method="POST">
        <div class="input-group mb-3">
          <input type="name"  name="user" class="form-control" placeholder="Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password"  name="pass" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>

          <td>
          <button type="submit" name= "submit" class="btn btn-block btn-success btn-sm">Login</button>
          </td>
        </a>
      </div>
</div>
      <p class="mb-1">
        <a href="forgot-password.html"><p align="center">forgot my password</p></a>
        <a href="register.html"><p align="center">Register a new membership</p></a>
    </div>
    <!-- /.login-card-body -->
  </div>
</p>
</form>
<?php

if(isset($_GET['pesan'])){
  
  session_start();
  include 'koneksi.php';
  if($_GET['pesan']=="gagal"){
    echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
  }

}
      //if(isset(($_POST['submit']))){
       // session_start();
       // include 'koneksi.php';

        //$user =mysqli_real_escape_string($db, $_POST['user']);
        //$pass =mysqli_real_escape_string($db,$_POST['pass']);

        //$cek = mysqli_query($db, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '" .$pass."'");
        //if (mysqli_num_rows($cek) > 0){
          //$d = mysqli_fetch_object($cek);
          //$_SESSION['status-login'] = true;
          //$_SESSION['a_global'] = $d;
          //$_SESSION['id'] = $d->nama_admin;
         // echo '<script>window.location="dashboard.php"</script>';
        //}else{
          //echo '<script>alert("Username atau password anda salah")</script>';
      //}
  //  }

    ?>

 
<!-- /.login-box -->
<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
