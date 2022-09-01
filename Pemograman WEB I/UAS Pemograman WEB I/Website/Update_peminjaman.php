<?php

require_once('koneksi.php');
if (isset($_GET['kode_peminjaman'])) {
    $kode_peminjaman = $_GET['kode_peminjaman'];
    $query = "SELECT * FROM tabel_peminjaman WHERE kode_peminjaman='$kode_peminjaman'";
    $result_berita = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result_berita);
    if (!$row) {
        echo "<script>alert('Data tidak ditemukan');window.location='Home.php?page=peminjaman';</script>";
    }
} else {
    echo "<script>alert('Parameter belum dikirim');window.location='Home.php?page=peminjaman';</script>";
}

require_once('Header.php');
require_once('Navigation.php');
?>
<!DOCTYPE html>
<html>

<body>
    <center>
        <h2> Edit Data Peminjaman Perpustakaan</h2>
    </center>

    <section class="base">
        <form action="" method="POST">
            <div>
                <label>Kode Peminjaman</label>
                <input type="text" name="kode_peminjaman" value=<?= $row['kode_peminjaman'] ?>><br>
            </div>
            <div>
                <label>Tanggal Peminjaman</label>
                <input type="date" name="tanggal_pinjam" value=<?= $row['tanggal_pinjam'] ?>><br>
            </div>
            <div>
                <label>Tempo Pengembalian</label>
                <input type="date" name="tanggal_kembali" value=<?= $row['tanggal_kembali'] ?>><br>
            </div>
            <div>
                <label>Kode Buku</label>
                <input type="text" name="kode_buku" value=<?= $row['kode_buku'] ?>><br>
            </div>
            <div>
                <label>Nim Peminjam</label>
                <input type="text" name="nim" value=<?= $row['nim'] ?>><br>
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
    extract($_POST);
    $query = "UPDATE tabel_peminjaman SET kode_peminjaman='$kode_peminjaman',tanggal_pinjam='$tanggal_pinjam',tanggal_kembali='$tanggal_kembali',kode_buku='$kode_buku',nim='$nim'
            where kode_peminjaman='$kode_peminjaman'";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil diperbaharui');window.location='Home.php?page=peminjaman';</script>";
    } else {
        echo "<script>alert('Data gagal diperbaharui');history.go(-1)</script>";
    }
} elseif (isset($_POST['batal'])) {
    echo "<script>window.location='Home.php?page=peminjaman';</script>";
}

require_once('Footer.php');
?>