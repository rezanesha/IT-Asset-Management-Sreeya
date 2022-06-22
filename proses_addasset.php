<?php 

    include 'koneksi.php';
    
    if(isset($_POST)){

      $hostname                 = $_POST['hostname'];
      $Whoami                   = $_POST['Whoami'];
      $serial_number            = $_POST['serial_number'];
      $OS_name                  = $_POST['OS_name'];
      $OS_version               = $_POST['OS_version'];
      $system_manufacturer      = $_POST['system_manufacturer'];
      $system_model             = $_POST['system_model'];
      $type              = $_POST['type'];
      $processor                = $_POST['processor'];
      $memory                   = $_POST['memory'];
      $business_unit            = $_POST['business_unit'];
      $disk_size1               = $_POST['disk_size1'];
      $disk_size2               = $_POST['disk_size2'];
      $department               = $_POST['department'];
      $lokasi                   = $_POST['lokasi'];
      $email                    = $_POST['email'];

        $sql = "INSERT INTO tb_asset values('$hostname', '$Whoami', '$serial_number', '$OS_name', '$OS_version', '$system_manufacturer', '$system_model', '$type', '$processor', '$memory', '$business_unit', '$disk_size1', '$disk_size2', '$department', '$lokasi', '$email')";
        $result = mysqli_query($db,$sql);
            echo '<script>alert("Data Berhasil Ditambahkan");document.location.href="asset.php";</script>';
        }else{
            echo '<script>alert("Data Gagal Ditambahkan");document.location.href="addasset.php";</script> ';
        }