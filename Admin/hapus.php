<?php 
session_start(); 
if(!isset($_SESSION['username'])){
    header("location:login.php");
    exit();
}
?>

<?php
include "koneksi.php";
$nis=$_GET['nis'];
$hapus=mysqli_query($koneksi,"DELETE FROM tb_peserta WHERE nis=$nis");
if($hapus){
    echo "<script>alert('Data berhasil dihapus');window.location='dashboard.php';</script>";
}
?>