<?php
require_once('koneksi.php');
if(isset($_GET['id_prodi'])) {
    $id_prodi = $_GET ['id_prodi'];
    $query = "DELETE FROM table_prodi WHERE id_prodi='$id_prodi'";
    if(mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil dihapus');window.location='prodi.php';</script>";
    }else{
        echo "<script>alert('Data gagal dihapus');window.location='prodi.php';</script>";
    }
}
?>