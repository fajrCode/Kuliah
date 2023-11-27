<!DOCTYPE html>
<html>

<body>
    <center>
        <h2>Tambah Data Peminjaman</h2>
    </center>
    <section class="base">
        <form action="" method="POST">
            <div>
                <label>Kode Peminjaman</label>
                <input type="text" name="kode_peminjaman">
            </div>
            <div>
                <label>Tanggal Peminjaman</label>
                <input type="date" name="tanggal_pinjam">
            </div>
            <div>
                <label>Tempo Pengembalian</label>
                <input type="date" name="tanggal_kembali">
            </div>
            <div>
                <label>Kode Buku</label>
                <input type="text" name="kode_buku">
            </div>
            <div>
                <label>Nim Peminjam</label>
                <input type="text" name="nim">
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
    $query = "INSERT INTO tabel_peminjaman(kode_peminjaman,tanggal_pinjam,tanggal_kembali,kode_buku,nim)
                values ('$kode_peminjaman','$tanggal_pinjam','$tanggal_kembali','$kode_buku','$nim')";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil disimpan');window.location='Home.php?page=peminjaman';</script>";
    } else {
        echo "<script>alert('Data gagal disimpan');history.go(-1)</script>";
    }
} elseif (isset($_POST['batal'])) {
    echo "<script>window.location='Home.php?page=peminjaman';</script>";
}


?>