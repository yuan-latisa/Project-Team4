<?php
include 'config.php';
session_start();

if (isset($_SESSION['Username']) && isset($_SESSION['Password'])) {
    header("Location: dashboard.php");
    exit;
}

if (isset($_POST['login'])) {
    $username = $_POST['Username'];
    $password = $_POST['Password'];

    $query = "SELECT * FROM tb_user WHERE Username='$username' AND Password='$password'";
    $result = mysqli_query($conn, $query);

    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['Username'] = $row['Username'];
        $_SESSION['Password'] = $row['Password'];
        header("location: dashboard.php");
        exit;
        } else {
            echo "<script>alert('Username atau password anda salah. Silahkan coba lagi!');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h1>Login Administrator</h1>
    <form action="" name="Login" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="Username" id="user" maxlength="50" placeholder="Masukkan username"
                        required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="Nama" id="name" maxlength="6" placeholder="Masukkan nama" required></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="Password" id="pass" maxlength="50" placeholder="Masukkan password"
                        required></td>
            </tr>
            <tr>
                <td><button type="submit" name="login" value="Login">Login</button></td>
                <td><button type="reset">Reset</button></td>
            </tr>
        </table>
    </form>
</body>

</html>