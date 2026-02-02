<?php
session_start();

if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "12345") {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;

        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Login | LombaNih</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <header class="header">
        <section id="home">
            <nav>
                <div class="brand">
                    <img src="../assets/logo.jpg" class="logo">
                    <h3>Lomba<span>Nih</span></h3>
                </div>
            </nav>
        </section>
    </header>

    <div class="main">
        <div class="left">
            <img src="../assets/elemen2.jpg" alt="Login Illustration">
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