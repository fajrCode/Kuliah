<?php

require_once('koneksi.php');
if (isset($_GET['kode_buku'])) {
    $kode_buku = $_GET['kode_buku'];
    $query = "SELECT * FROM buku WHERE kode_buku='$kode_buku'";
    $result_berita = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result_berita);
    if (!$row) {
        echo "<script>alert('Data tidak ditemukan');window.location='Home.php?page=buku';</script>";
    }
} else {
    echo "<script>alert('Parameter belum dikirim');window.location='Home.php?page=buku';</script>";
}

require_once('Header.php');
require_once('Navigation.php');
?>
<!DOCTYPE html>
<html>

<body>
    <center><h2> Edit Data Buku</h2></center>
    <section class="base">
        <form action="" method="POST" enctype="multipart/form-data">
            <div>
                <label>Kode Buku</label>
                <input type="text" name="kode_buku" value=<?= $row['kode_buku'] ?>><br>
            </div>
            <div>
                <label>Judul</label>
                <input type="text" name="judul" value=<?= $row['judul'] ?>><br>
            </div>
            <div>
                <label>Penulis</label>
                <input type="text" name="penulis" value=<?= $row['penulis'] ?>><br>
            </div>
            <div>
                <label>Penerbit</label>
                <input type="text" name="penerbit" value=<?= $row['penerbit'] ?>><br>
            </div>
            <div>
                <label>Tahun Penerbitan</label>
                <input type="text" name="tahun_penerbit" value=<?= $row['tahun_penerbit'] ?>><br>
            </div>
            <div>
                <label>Gambar</label>
                <img src="gambar/<?= $row['gambar'] ?>" width="15%" height="15%"><br>
                <input type="file" name="gambar" value=<?= $row['gambar'] ?>><br>
            </div>
            <button name="input">Simpan</button>
            <button name="batal">Batal</button>
        </form>
    </section>
</body>

</html>
<?php
if (isset($_POST['input'])) {
    require_once "koneksi.php";
    $kode_buku   = $_POST['kode_buku'];
    $judul     = $_POST['judul'];
    $penulis    = $_POST['penulis'];
    $penerbit    = $_POST['penerbit'];
    $tahun_penerbit    = $_POST['tahun_penerbit'];
    $gambar = $_FILES['gambar']['name'];

    if ($gambar != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $angka_acak     = rand(1, 999);
        $nama_gambar_baru = $angka_acak . '-' . $gambar;
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
            $query = "UPDATE buku SET kode_buku='$kode_buku', judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_penerbit='$tahun_penerbit', gambar='$nama_gambar_baru' WHERE kode_buku='$kode_buku'";
            $result = mysqli_query($koneksi, $query);
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                    " - " . mysqli_error($koneksi));
            } else {
                echo "<script>alert('Data berhasil diperbaharui.');window.location='Home.php?page=buku';</script>";
            }
        } else {
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='Home.php?page=form_buku';</script>";
        }
    } else {
        $query = "UPDATE buku SET kode_buku='$kode_buku', judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_penerbit='$tahun_penerbit' WHERE kode_buku='$kode_buku'";
        $result = mysqli_query($koneksi, $query);
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil diperbaharui.');window.location='Home.php?page=buku';</script>";
        }
    }
} elseif (isset($_POST['batal'])) {
    echo "<script>window.location='Home.php?page=buku';</script>";
}

require_once('Footer.php');
?>