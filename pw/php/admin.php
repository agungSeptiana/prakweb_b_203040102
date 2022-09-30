<?php

session_start();
require 'functions.php';
 

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];
    $buku = query( "SELECT * FROM buku WHERE
            gambar LIKE '%$keyword%' OR
            jdl_buku LIKE '%$keyword%' OR
            penulis LIKE '%$keyword%' ");

} else {
    $buku = query("SELECT * FROM buku");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Agung Strore - Beli Buku di Agung Store</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="container">
            <header>
                <a href="#" class="logo">Agung Store</a>
                <ul>
                    <li><a href="logout.php" class="active"><img src="../assets/img/logout.png" width="12px" style="color: #191970;"> Logout</a></li>
                    <li><a href="tambah.php"><img src="../assets/img/plus.png" width="12px"> Tambah Data</a></li>
                    <li><form action="" method="GET">
                            <div class="inputbox">
                                <input type="text" name="keyword" autofocus autocomplete="off" id="keyword">
                                <button type="submit" name="cari" id="tombol-cari">Cari</button>
                            </div>
                        </form>
                    </li>
                </ul>
            </header>
            <div class="content" id="content">
                <div class="col-md-12">
                    <div class="row">
                        <?php if(empty($buku)) : ?>
                            <h1>Data tidak ditemukan</h1>
                        <?php else : ?>
                        <?php foreach ($buku as $bk) : ?>
                            <div class="col-md-4">
                                <div class="cards">
                                    <div class="btn">
                                        <a href="ubah.php?id=<?= $bk['id']; ?>"><button>Ubah</button></a>
                                        <a href="hapus.php?id=<?= $bk['id']; ?>" onclick="return confirm('Yakin mau dihapus?')"><button>Hapus</button></a>
                                        <br>
                                    </div>
                                    <br>
                                    <img src="../assets/img/<?= $bk['gambar']; ?>" alt="" width="100px">
                                    <br>
                                    <h2><?= $bk['jdl_buku']?></h2>
                                    <br>
                                    <p><?= $bk['penulis']?></p>
                                    <br>
                                    <br>
                                    <div class="kategori">
                                        <a href="detail.php">Detail</a>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>