<?php 
include "koneksi.php";

$folder   = 'berkas';
$tmp_name = $_FILES["filecsv"]["tmp_name"];
$name     = "file_upload.csv";
move_uploaded_file($tmp_name, "$folder/$name");

//cek apakah delimiter menggunakan , atau ;
$file = fopen("berkas/file_upload.csv","r"); //buka file csv
$cek  = fgetcsv($file,0,','); //baca isi csv perbaris dengan koma
if(!empty($cek[1])) { 
 $delimiter=",";
}
else { 
 $delimiter=";";
}
fclose($file);
//batas

//insert ke database
$file = fopen("berkas/file_upload.csv","r"); //buka file csv
$baris= 0;
while(!feof($file)) //cari akhir baris csv
{
  $data = fgetcsv($file,0,$delimiter);
  if(!empty($data[0])) //tidak mengikutkan spasi kosong
  { 
  if($baris >= 1) //karena baris 0 adalah judul kolom/field
  {

    $hostname                 = $data[0];
    $Whoami                   = $data[1];
    $serial_number            = $data[2];
    $OS_name                  = $data[3];
    $OS_version               = $data[4];
    $system_manufacturer      = $data[5];
    $system_model             = $data[6];
    $type              = $data[7];
    $processor                = $data[8];
    $memory                   = $data[9];
    $business_unit            = $data[10];
    $disk_size1               = $data[11];
    $disk_size2               = $data[12];
    $department               = $data[13];
    $lokasi                   = $data[14];
    $email                    = $data[15];

    $sql = "INSERT INTO tb_asset 
    (hostname, Whoami, serial_number, OS_name, OS_version, system_manufacturer, system_model, type, processor, memory, business_unit, disk_size1, disk_size2, departement, lokasi, email) 
    VALUES 
    ('$hostname', '$Whoami', '$serial_number', '$OS_name', '$OS_version', '$system_manufacturer', '$system_model', '$type', '$processor', '$memory', '$business_unit', '$disk_size1', '$disk_size2', '$department', '$lokasi', '$email')";
 mysqli_query($db,$sql);

  } 
  }
$baris++;
}
fclose($file); //tutup akses file csv

echo '<script>alert("Data Berhasil Ditambahkan");document.location.href="asset.php";</script>';
 
        

?>