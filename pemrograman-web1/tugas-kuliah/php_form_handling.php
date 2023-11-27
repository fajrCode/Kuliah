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
    echo "<br><form action='Form_Handling_Fajri.php'>
    <button>Input Data</button></form>";
}
?>