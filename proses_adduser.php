<?php 

    include 'koneksi.php';
    
    if(isset($_POST)){

      $username                 = $_POST['username'];
      $nama_admin               = $_POST['nama_admin'];
      $jabatan                  = $_POST['jabatan'];
      $password                 = $_POST['password'];

        $sql = "INSERT INTO tb_admin values('$username', '$nama_admin', '$jabatan', '$password')";

        $result = mysqli_query($db,$sql);
            echo '<script>alert("Data Berhasil Ditambahkan");document.location.href="user_manage.php";</script>';
        }else{
            echo '<script>alert("Data Gagal Ditambahkan");document.location.href="adduser.php";</script> ';
        }