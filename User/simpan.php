<?php
include '../Admin/koneksi.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$no_telp = $_POST['telp'];
$kategori_lomba = $_POST['kategori'];
$cek = mysqli_query($koneksi, "SELECT nis FROM tb_peserta WHERE nis='$nis'");
if(mysqli_num_rows($cek) > 0){
    echo "<script>alert('NISN sudah terdaftar!');window.location='Home.php#lomba';</script>";
    exit();
}

$simpan = mysqli_query($koneksi,"INSERT INTO tb_peserta VALUES('$nis', '$nama', '$email', '$no_telp', '$kategori_lomba')");

if($simpan){
    $_SESSION['bukti_nis'] = $nis;

    header("Location: tampil.php?nis=" . urlencode($nis));
    exit;
} else {
    echo "<script>alert('Gagal menyimpan data!'); window.location='daftar.php';</script>";
    exit;
}
?>