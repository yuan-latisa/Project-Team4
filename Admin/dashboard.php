<?php
include 'config.php';
session_start();
if(!isset($_SESSION['Username']) && !isset($_SESSION['Password'])) {
    echo "<script>alert('Anda harus login terlebih dahulu!'); window.location.href='login.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the Dashboard</h1>
    <br>
    <br>
    <a href="logout.php">Logout</a>
</body>
</html>