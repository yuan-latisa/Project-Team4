<?php
$koneksi = mysqli_connect("localhost", "root", "", "latihan");
if(!$koneksi){
    die("koneksi gagal: ". mysqli_connect_error());
}   
?>