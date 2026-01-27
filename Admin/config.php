<?php
$conn = mysqli_connect("localhost", "root", "", "latihan");
if(!$conn){
    die("koneksi gagal: ". mysqli_connect_error());
}   
?>