<?php
include 'koneksi.php';
session_start();

if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM tb_user WHERE username='$username' AND password ='$password'";
    $result = mysqli_query($koneksi, $sql);
    if ($result && $result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['password'] = $row['password'];
        header("location:dashboard.php");
        exit();
    } else {
        echo "<script>alert('Login Gagal: Cek username dan password Anda!');window.location='login.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
</head>

<body>

    <header class="header">
        <section id="home">
            <nav>
                <div class="brand">
                    <img src="../assets/Logo.png" class="logo">
                    <h3>Lomba<span>Nih</span></h3>
                </div>
            </nav>
        </section>
    </header><br>

    <div class="main">
        <div class="left">
            <img src="../assets/elemen2.jpg" alt="Login Img">
        </div>

        <div class="right">
            <div class="card">
                <h2>LOGIN</h2>

                <form method="post">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Masukkan username" required>

                    <label>Password</label>
                    <input type="password" name="password" placeholder="Masukkan password" required>

                    <div class="button-area">
                        <button type="submit" name="login" class="btn login">Login</button>
                        <button type="reset" class="btn reset">Reset</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>