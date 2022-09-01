<?php
require_once('koneksi.php');
if(isset($_GET['nim'])) {
    $nim = $_GET ['nim'];
    $query = "DELETE FROM table_mahasiswa WHERE nim='$nim'";
    if(mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil dihapus');window.location='mahasiswa.php';</script>";
    }else{
        echo "<script>alert('Data gagal dihapus');window.location='mahasiswa.php';</script>";
    }
}
?>