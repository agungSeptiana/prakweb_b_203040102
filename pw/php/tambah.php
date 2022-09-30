<?php
require 'functions.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil ditambahkan!');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal ditambahkan!');
            document.location.href = 'admin.php';
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
    <title>tambah.php</title>
    <link rel="stylesheet" href="../assets/css/tambah1.css">
</head>
<body>
<section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>  
        <div class="box">
            <div class="container">
                <div class="form">
                    <h2>Tambah Data</h2>
                    <form action="" method="POST">
                        <table>
                            <tr>
                                <td>
                                    <label for="gambar">Gambar</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="gambar" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="jdl_buku">Judul Buku</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="jdl_buku" autocomplete="off">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="penulis">Penulis</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="penulis" autocomplete="off">
                                </td>
                            </tr>
                        </table>
                        <div class="inputBox">
                            <button type="submit" name="tambah">Tambah Data</button>
                            <button type="submit">
                                <a href="admin.php" style="text-decoration:none; color: #666;">Kembali</a>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>
</html>