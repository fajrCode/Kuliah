<?php
require_once('koneksi.php');
if(isset($_GET['nim'])) {
    $nim = $_GET ['nim'];
    $query = "DELETE FROM anggota WHERE nim='$nim'";
    if(mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil dihapus');window.location='Home.php?page=anggota';</script>";
    }else{
        echo "<script>alert('Data gagal dihapus');window.location='Home.php?page=anggota';</script>";
    }
}
?>