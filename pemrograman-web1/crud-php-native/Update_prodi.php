<?php

require_once('koneksi.php');
if(isset($_GET['id_prodi'])) {
    $id_prodi = $_GET ['id_prodi'];
    $query = "SELECT * FROM table_prodi WHERE id_prodi='$id_prodi'";
    $result_berita = mysqli_query($koneksi,$query);
    $row = mysqli_fetch_assoc($result_berita);
    if (!$row){
        echo "<script>alert('Data tidak ditemukan');window.location='prodi.php';</script>";
    }
    print_r($row);
}else{
    echo "<script>alert('Parameter belum dikirim');window.location='prodi.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update data prodi</title>
</head>
<body>
    <form action="" method="POST"> 
        ID Prodi <input type="text" name="id_prodi" value=<?=$row['id_prodi']?>><br>
        Kode Prodi <input type="text" name="kode_prodi" value=<?=$row['kode_prodi']?>><br>
        Nama Prodi <input type="text" name="nama_prodi" value=<?=$row['nama_prodi']?>><br>
               <input type="submit" name="input"> 
    </form>
</body>
</html>
<?php
if (isset($_POST['input'])){
    require_once "koneksi.php";
    extract($_POST);
    $query = "UPDATE table_prodi SET id_prodi='$id_prodi',kode_prodi='$kode_prodi',nama_prodi='$nama_prodi' where id_prodi='$id_prodi'";
    if(mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil diupdate');window.location='prodi.php';</script>";
    }else{
        echo "<script>alert('Data gagal diupdate');history.go(-1)</script>";
    }

}
?>