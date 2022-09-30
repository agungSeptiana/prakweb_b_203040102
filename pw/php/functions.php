<?php
    function koneksi() {
        $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
        mysqli_select_db($conn, "prakweb_b_203040102")or die ("Database salah!");

        return $conn;
    }

    function query($sql) {
        $conn = koneksi();
        $result = mysqli_query($conn, "$sql");
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
    
    return $rows;
    }

    function tambah($data) {
        $conn = koneksi();

        $gambar = htmlspecialchars($data['gambar']);
        $jdl_buku = htmlspecialchars($data['jdl_buku']);
        $penulis = htmlspecialchars($data['penulis']);

        $query = "INSERT INTO buku
                        VALUES
                        ('', '$gambar', '$jdl_buku', '$penulis')";
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }

    function hapus($id) {
        $conn = koneksi();
        mysqli_query($conn, "DELETE FROM buku WHERE id = $id");
        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        $conn = koneksi();
        $id = htmlspecialchars($data['id']);
        $gambar = htmlspecialchars($data['gambar']);
        $jdl_buku = htmlspecialchars($data['jdl_buku']);
        $penulis = htmlspecialchars($data['penulis']);

        $query = "UPDATE buku
                SET
                gambar = '$gambar',
                jdl_buku = '$jdl_buku',
                penulis = '$penulis'
                WHERE id = '$id'
                ";
        mysqli_query($conn, $query);
        
        return mysqli_affected_rows($conn);
    }

    function registrasi($data) {
        $conn = koneksi();
        $username = htmlspecialchars($data['username']);
        $password = htmlspecialchars($data['password']);

        $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)) {
            echo "<script>
                alert('Username sudah digunakan');
            </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO user VALUES
                ('', '$username', '$password')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword) {
        $query = "SELECT * FROM gadget WHERE
                img LIKE '%$keyword%' OR
                nama LIKE '%$keyword%' OR
                deskripsi LIKE '%$keyword%' OR
                harga LIKE '%$keyword%' OR
                kategori LIKE '%$keyword%' ";
        return query($query);
    }
?>