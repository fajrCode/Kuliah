<?php

require_once('koneksi.php');
if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $query = "SELECT * FROM anggota WHERE nim='$nim'";
    $result_berita = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result_berita);
    if (!$row) {
        echo "<script>alert('Data tidak ditemukan');window.location='Home.php?page=anggota';</script>";
    }
} else {
    echo "<script>alert('Parameter belum dikirim');window.location='Home.php?page=anggota';</script>";
}

require_once('Header.php');
require_once('Navigation.php');
?>
<!DOCTYPE html>
<html>

<body>
    <center><h2> Edit Data Anggota Perpustakaan</h2></center>

    <section class="base">
        <form action="" method="POST">
            <div>
                <label>NIM Anggota</label>
                <input type="text" name="nim" value=<?= $row['nim'] ?>><br>
            </div>
            <div>
                <label>Nama Anggota</label>
                <input type="text" name="nama_anggota" value=<?= $row['nama_anggota'] ?>><br>
            </div>
            <div>
                <label>Jenis Kelamin</label><br>
                <input type="radio" name="jk_anggota" value="L" <?= $row['jk_anggota'] == 'L' ? 'checked' : "" ?>>Laki-laki
                <input type="radio" name="jk_anggota" value="P" <?= $row['jk_anggota'] == 'P' ? 'checked' : "" ?>>Perempuan <br>
            </div>
            <div>
                <label>Program Studi</label><br>
                <select name="kode_prodi">
                    <option <?= $row['kode_prodi'] == 'TI' ? 'selected' : '' ?> value="TI">Teknik Informatika</option>
                    <option <?= $row['kode_prodi'] == 'SI' ? 'selected' : '' ?> value="SI">Sistem Informasi</option>
                    <option <?= $row['kode_prodi'] == 'Teknosi' ? 'selected' : '' ?> value="Teknosi">Teknologi Informasi</option>
                </select><br>
            </div>
            <div>
                <label>No Hp</label>
                <input type="text" name="no_hp_anggota" value=<?= $row['no_hp_anggota'] ?>><br>
            </div>
            <div>
                <label>Alamat</label>
                <textarea name="alamat_anggota" cols="30" rows="5"><?= $row['alamat_anggota'] ?></textarea>
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
    $query = "UPDATE anggota SET nim='$nim',nama_anggota='$nama_anggota',jk_anggota='$jk_anggota',kode_prodi='$kode_prodi',no_hp_anggota='$no_hp_anggota',alamat_anggota='$alamat_anggota'
            where nim='$nim'";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil diperbaharui');window.location='Home.php?page=anggota';</script>";
    } else {
        echo "<script>alert('Data gagal diperbaharui');history.go(-1)</script>";
    }
} elseif (isset($_POST['batal'])) {
    echo "<script>window.location='Home.php?page=anggota';</script>";
}

require_once('Footer.php');
?>