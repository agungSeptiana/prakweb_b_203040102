<?php 
session_start();
require 'functions.php';

if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

if(isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row =mysqli_fetch_assoc($result);

    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id']);
                setcookie('hash', $hash, time() + 60 * 60 * 24);
            }

            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }
            header("Location: ../index.php");
            die;
        }
        $error = true;
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../assets/css/login1.css">
</head>
<body>
    <?php if(isset($error)) : ?>
        <p style="color: red;">Username atau Password Salah</p>
    <?php  endif; ?>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>  
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="container">
                <div class="form">
                    <h2>Login</h2>
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <td><label for="username">Username</label></td>
                                <td class="inputBox"><input type="text" name="username" autocomplete="off"></td>
                            </tr>
                            <tr>
                                <td><label for="password">Password</label></td>
                                <td class="inputBox"><input type="password" name="password" autocomplete="off"></td>
                            </tr>
                        </table>
                        <input type="checkbox" name="remember">
                        <label for="remember">Remember Me</label>
                        <div>
                            <div class="inputBox">
                                <button type="submit" name="submit"><img src="../assets/img/login.png" width="15px">Login</button>
                                <button type="submit">
                                    <a href="../index.php" style="text-decoration:none; color: #666;">Back</a>
                                </button>
                            </div>
                            <div class="inputBox">
                                <P>Don't have an account?  
                                    <a href="registrasi.php">Sign up</a>
                                </P>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>