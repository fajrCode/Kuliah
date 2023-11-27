<!DOCTYPE html>
<html>
<head>
    <title>Latihan Form Handling</title>
</head>
<body>
    <form action="" method="POST"> 
        <label for="">Nama Mahasiswa</label>
            <input type="text" name="nama" id="nama"><br>
        <label for="">NIM Mahasiswa</label>
            <input type="text" name="nim" id="nim"><br>
        <label for="">Jenis Kelamin</label> 
            <input type="radio" name="Jenis_Kelamin" id="genderL" value="Laki-laki">Laki-laki
            <input type="radio" name="Jenis_Kelamin" id="genderP" value="Perempuan">Perempuan <br>        
        <label for="">Program Studi</label>
            <select name="Jurusan" id="jurusan">
                    <option value="opsi">-Pilih Prodi-</option>
                    <option value="Teknik Informatika">Teknik Informatika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>
                    <option value="Teknologi Informasi">Teknolgoi Informasi</option>
            </select><br>
        <label for="">Alamat</label>
            <textarea name="Alamat" id="alamat" cols="30" rows="5"></textarea>
            <input type="submit" name="input"> 
    </form>
</body>
</html>
<?php
if (isset($_POST['input'])){
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $jk=$_POST['Jenis_Kelamin'];
    $prodi=$_POST['Jurusan'];
    $alamat=$_POST['Alamat'];
    echo "<br>";
    echo "<table border=1>
           <tr>
             <td colspan=2 text-align=left>Data Mahasiswa</td>
            </tr>
            <tr>
                <td width=125>Nama Mahasiswa</td>
                <td width=300>$nama</td>
            </tr>
            <tr>
                <td>NIM Mahasiswa</td>
                <td>$nim</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>$jk</td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>$prodi</td>
            </tr>
            <tr height=50>
                <td rowspan=2 text-align=center>Alamat</td>
                <td rowspan=2>$alamat</td>
            </tr>
            <tr></tr>
        </table>";
}
?>