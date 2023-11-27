<?php
require_once('koneksi.php');
if(isset($_GET['kode_buku'])) {
    $kode_buku = $_GET ['kode_buku'];
    $query = "DELETE FROM buku WHERE kode_buku='$kode_buku'";
    if(mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil dihapus');window.location='Home.php?page=buku';</script>";
    }else{
        echo "<script>alert('Data gagal dihapus');window.location='Home.php?page=buku';</script>";
    }
}
?>