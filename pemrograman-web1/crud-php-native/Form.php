<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
</head>
<body>
    <form action="" method="POST"> 
        NIM Mahasiswa <input type="text" name="nim" id="nim"><br>
        Nama Mahasiswa <input type="text" name="nama_mahasiswa" id="nama_mahasiswa"><br>
        Jenis Kelamin <input type="radio" name="jenis_kelamin" id="genderL" value="Laki-laki">Laki-laki
                     <input type="radio" name="jenis_kelamin" id="genderP" value="Perempuan">Perempuan <br>        
        Program Studi <select name="program_studi" id="program_studi">
                        <option value="opsi">-Pilih Prodi-</option>
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Teknologi Informasi">Teknologi Informasi</option>
                      </select><br>
        Alamat <textarea name="alamat" id="alamat" cols="30" rows="5"></textarea>
               <input type="submit" name="input"> 
    </form>
</body>
</html>
<?php
if (isset($_POST['input'])){
    require_once "koneksi.php";
    extract($_POST);
    $query = "INSERT INTO table_mahasiswa(nim,nama_mahasiswa,jenis_kelamin,program_studi,alamat)
                values ('$nim','$nama_mahasiswa','$jenis_kelamin','$program_studi','$alamat')";
    if(mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil disimpan');window.location='mahasiswa.php';</script>";
    }else{
        echo "<script>alert('Data gagal disimpan');history.go(-1)</script>";
    }

}
?>