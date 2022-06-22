<?php 
    include 'koneksi.php';
   
    if(isset($_POST['submit_edit'])){

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

      mysqli_query ($db, "UPDATE tb_asset SET hostname = '$_POST[hostname]', Whoami='$_POST [Whoami]', serial_number=' $_POST [serial_number]', OS_name='$_POST [OS_name]', OS_version='$_POST [OS_version]', system_manufacturer='$_POST [system_manufacturer]', system_model='$_POST [system_model]', type='$_POST [type]', processor='$_POST [processor]', memory='$_POST [memory]', business_unit='$_POST [business_unit]', disk_size1='$_POST [disk_size1]', disk_size2='$_POST [disk_size2]', department='$_POST [department]', lokasi='$_POST [lokasi]', email='$_POST [email]', WHERE serial_number='$id_serial'");

      if($result){
        echo '<script>alert("Data Berhasil Diupdate");document.location.href="asset.php";</script>';
      }else{
        echo '<script>alert("Data Gagal Diupdate");document.location.href="asset.php";</script> ';
      }
    }