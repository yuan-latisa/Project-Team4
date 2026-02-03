<?php
session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    echo "<script>alert('Anda harus login terlebih dahulu!'); window.location.href='login.php';</script>";
    exit;
}

include "koneksi.php";

if (!isset($_POST['nis'], $_POST['nama'], $_POST['email'], $_POST['no_telp'], $_POST['kategori_lomba'])) {
    echo "<script>alert('Data tidak lengkap!'); window.location.href='dashboard.php';</script>";
    exit;
}

$nis = mysqli_real_escape_string($koneksi, $_POST['nis']);
$nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
$email = mysqli_real_escape_string($koneksi, $_POST['email']);
$no_telp = mysqli_real_escape_string($koneksi, $_POST['no_telp']);
$kategori_lomba = mysqli_real_escape_string($koneksi, $_POST['kategori_lomba']);

$update = mysqli_query($koneksi, "
    UPDATE tb_peserta
    SET nama='$nama',
        email='$email',
        no_telp='$no_telp',
        kategori_lomba='$kategori_lomba'
    WHERE nis='$nis'
");

if ($update) {
    echo "<script>alert('Data berhasil diupdate!'); window.location.href='dashboard.php';</script>";
} else {
    echo "<script>alert('Gagal update data!'); window.location.href='edit.php?nis=" . urlencode($nis) . "';</script>";
}
