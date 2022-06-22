<?php
    $id = $_GET['username'];
    session_start();
    include('koneksi.php');
    if($_SESSION['level']==""){
        header("location:login.php?pesan=Kamu blm login bestie");
      }
?>
<?php
    $sql = "DELETE FROM tb_admin where username='$id'";
    $query = mysqli_query($db, $sql) or die("SQL Anda Salah");
        if($query){
            echo"<script>   
            window.location.assign('user_manage.php');</script>";
        }else{
            echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('user_manage.php');</script>";
        }