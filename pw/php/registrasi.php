<?php
require 'functions.php';
if(isset($_POST['register'])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
            alert('Registrasi Berhasil!');
            document.location.href = 'login.php';
        </script>";
    } else {
        echo "<script>
            alert('Registrasi Gagal!');
            document.location.href = 'login.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <link rel="stylesheet" href="../assets/css/registrasi1.css">
</head>
<body>
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
                    <h2>Regist</h2>
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
                            <div class="inputBox">
                                <button type="submit" name="register">Register</button>
                                <button type="submit">
                                    <a href="login.php" style="text-decoration:none; color: #666;">Back</a>
                                </button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>
</html>