<?php
require 'functions.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
$id = $_GET['id'];
$bk = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil diubah!');
            document.location.href = 'admin.php';
        </script>";
    } else {
        echo "<script>
            alert('Data Gagal diubah!');
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
    <title>Ubah.php</title>
    <link rel="stylesheet" href="../assets/css/ubah1.css">
</head>
<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>  
        <div class="box">
            <div class="container">
                <div class="form">
                    <h2>Ubah Data</h2>
                    <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $bk['id']; ?>">
                        <table>
                            <tr>
                                <td>
                                    <label for="gambar">Gambar</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="gambar" value="<?= $bk['gambar']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="jdl_buku">Judul Buku</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="jdl_buku"  value="<?= $bk['jdl_buku']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <label for="penulis">Penulis</label>
                                </td>
                                <td class="inputBox">
                                    <input type="text" name="penulis"  value="<?= $bk['penulis']; ?>">
                                </td>
                            </tr>
                        </table>
                        <div class="inputBox">
                            <button type="submit" name="ubah">Ubah Data</button>
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