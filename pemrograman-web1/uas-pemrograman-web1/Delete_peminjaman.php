<?php
require_once('koneksi.php');
if(isset($_GET['kode_peminjaman'])) {
    $kode_peminjaman = $_GET ['kode_peminjaman'];
    $query = "DELETE FROM tabel_peminjaman WHERE kode_peminjaman='$kode_peminjaman'";
    if(mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil dihapus');window.location='Home.php?page=peminjaman';</script>";
    }else{
        echo "<script>alert('Data gagal dihapus');window.location='Home.php?page=peminjaman';</script>";
    }
}
?>