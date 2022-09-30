<?php

// Nama : Agung Septiana
// Npm  : 203040102
// Shift : Kamis 08:00 - 09:00


require 'php/functions.php';

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
<html lang="en" id="agung">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agung Store - List of Books</title>
    <link rel="stylesheet" href="assets/css/index1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <section id="home" id="agung">
        <div class="container">
            <header>
                <a href="#agung" class="logo">Agung Store</a>
                <ul>
                    <li><a href="#home" class="active"><img src="assets/img/home.png" width="12px"> Home</a></li>
                    <li><a href="#about"><img src="assets/img/user-avatar-with-check-mark.png" width="12px"> About</a></li>
                    <li><a href="#product"><img src="assets/img/shop.png" width="12px"> Product</a></li>
                    <li><a href="#contact"><img src="assets/img/phone.png" width="12px"> Contact</a></li>
                    <li>
                        <form action="" method="GET">
                            <input type="text" name="keyword" autofocus autocomplete="off" id="keyword">
                            <button type="submit" name="cari" id="tombol-cari">Cari</button>
                        </form>
                    </li>
                </ul>
            </header>
            <div class="content">
                <h2>Daftar Buku</h2><br>
                <p>Anda membutuhkan buku? Tapi tidak punya waktu untuk mengunjungi toko buku? Toko buku Agung Store bisa menjadi pilihan yang tepat. Anda dapat memesannya secara online di rumah hanya dalam hitungan detik.</p>
                <a href="php/login.php"><img src="assets/img/user-avatar-with-check-mark.png" width="20px" style="color: #00ffff;"> Join Us</a>
            </div>
            <div class="imgbx">
                <img src="assets/img/kirito.png" width="200px">
            </div>
            <ul class="sci">
                <li><a href="https://www.facebook.com/agung.septiana.986" target="_blank"><img src="assets/img/facebook.png" alt="" width="40px"></a></li>
                <li><a href="https://instagram.com/aggSeptiana" class="instagram" target="_blank"><img src="assets/img/instagram.png" alt="" width="40px"></a></li>
                <li><a href="" target="_blank"><img src="assets/img/twitter.png" alt="" width="40px"></a></li>
                <li><a href="#"><img src="assets/img/008-youtube.png" alt="" width="40px"></a></li>
                <li><a href="https://github.com/ags-code" target="_blank"><img src="assets/img/github.png" alt="" width="40px"></a></li>
            </ul>
        </div>


    </section>
    <section id="about">
        <div class="container1">
            <header class="me">
                <a href="#" class="about">About Me</a>
            </header>
            <div class="content1">
                <h2>Hi, Iam Agung Septiana</h2>
                <h3>i'm Web Development</h3> <br>
                <p>Agung Septiana adalah Seorang Web Development. Sekarang sedang sibuk kuliah dengan tujuan lulus secepatnya. Lahir di Banten. Hobbinya adalah berolahraga. Senang dengan volly dan berjalan kaki karena itu sehat. Penikmat jalan kaki.</p>
                <a href="#product"><img src="assets/img/shop.png" width="20px"> See Product</a>
                </div>
                <div class="imgbx">
                    <img src="assets/img/agung1.jpg" width="200px" style="border-radius: 50px;">
                </div>
            </div>
        </div>
    </section>

    <section id="product">
        <div class="container2">
            <header class="produk">
                <a href="#" class="product">Product</a>
            </header>
            <div class="content2" id="content2">
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
                                    <img src="assets/img/<?= $bk['gambar']; ?>" alt="" width="100px">
                                    <br>
                                    <h2><?= $bk['jdl_buku']?></h2>
                                    <br>
                                    <p><?= $bk['penulis']?></p>
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
    <section class="contact" id="contact">
        <div class="container3">
            <h2>Contact Us Form</h2>
            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span class="text">First Name</span>
                        <span class="line"></span>
                    </div>
                </div>

                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span class="text">Last Name</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>

            <div class="row100">
                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span class="text">Email</span>
                        <span class="line"></span>
                    </div>
                </div>

                <div class="col">
                    <div class="inputBox">
                        <input type="text" name="" required="required">
                        <span class="text">Mobile</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>

            <div class="row100">
                <div class="col">
                    <div class="inputBox textarea">
                        <textarea required="required"></textarea>
                        <span class="text">Type Your Message Here...</span>
                        <span class="line"></span>
                    </div>
                </div>
            </div>

            <div class="row100">
                <div class="col">
                    <input type="submit" value="send">
                </div>
            </div>
            <div class="copyrightText">
                <p class="copyrightText">  <a href="#agung">Copyright © 2021 Agung Septiana. All Right Reserved.</a> </p>
            </div>
        </div>
    </section>
    <script src="assets/js/script3.js"></script>
</body>
</html>