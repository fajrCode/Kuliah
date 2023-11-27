<?php

require_once('koneksi.php');
if(isset($_GET['nim'])) {
    $nim = $_GET ['nim'];
    $query = "SELECT * FROM table_mahasiswa WHERE nim='$nim'";
    $result_berita = mysqli_query($koneksi,$query);
    $row = mysqli_fetch_assoc($result_berita);
    if (!$row){
        echo "<script>alert('Data tidak ditemukan');window.location='mahasiswa.php';</script>";
    }
    print_r($row);
}else{
    echo "<script>alert('Parameter belum dikirim');window.location='mahasiswa.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Update data mahasiswa</title>
</head>
<body>
    <form action="" method="POST"> 
        NIM Mahasiswa <input type="text" name="nim" value=<?=$row['nim']?>><br>
        Nama Mahasiswa <input type="text" name="nama_mahasiswa" value=<?=$row['nama_mahasiswa']?>><br>
        Jenis Kelamin <input type="radio" name="jenis_kelamin" value="Laki-laki" <?=$row['jenis_kelamin']=='Laki-laki'?'checked':""?>>Laki-laki
                     <input type="radio" name="jenis_kelamin" value="Perempuan" <?=$row['jenis_kelamin']=='Perempuan'?'checked':""?>>Perempuan <br>        
        Program Studi <select name="program_studi">
                        <option <?=$row['program_studi']=='Teknik Informatika'?'selected':''?>>Teknik Informatika</option>
                        <option <?=$row['program_studi']=='Sistem Informasi'?'selected':''?>>Sistem Informasi</option>
                        <option <?=$row['program_studi']=='Teknologi Informasi'?'selected':''?>>Teknolgoi Informasi</option>
                      </select><br>
        Alamat <textarea name="alamat" cols="30" rows="5"><?=$row['alamat']?></textarea>
               <input type="submit" name="input"> 
    </form>
</body>
</html>
<?php
if (isset($_POST['input'])){
    require_once "koneksi.php";
    extract($_POST);
    $query = "UPDATE table_mahasiswa SET nim='$nim',nama_mahasiswa='$nama_mahasiswa',jenis_kelamin='$jenis_kelamin',program_studi='$program_studi',alamat='$alamat'
            where nim='$nim'";
    if(mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil diupdate');window.location='mahasiswa.php';</script>";
    }else{
        echo "<script>alert('Data gagal diupdate');history.go(-1)</script>";
    }

}
?>