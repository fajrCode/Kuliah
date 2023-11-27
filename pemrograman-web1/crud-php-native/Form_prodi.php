<!DOCTYPE html>
<html>
<head>
    <title>Tambah Prodi</title>
</head>
<body>
    <form action="" method="POST"> 
        ID Prodi <input type="text" name="id_prodi" id="id_prodi"><br>
        Kode Prodi <input type="text" name="kode_prodi" id="kode_prodi"><br>
        Nama Prodi <input type="text" name="nama_prodi" id="nama_prodi"><br>
               <input type="submit" name="input"> 
    </form>
</body>
</html>
<?php
if (isset($_POST['input'])){
    require_once "koneksi.php";
    extract($_POST);
    $query = "INSERT INTO table_prodi(id_prodi,kode_prodi,nama_prodi)
                values ('$id_prodi','$kode_prodi','$nama_prodi')";
    if(mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil disimpan');window.location='prodi.php';</script>";
    }else{
        echo "<script>alert('Data gagal disimpan');history.go(-1)</script>";
    }

}
?>