<!DOCTYPE html>
<head>
    <title>Belajar Koneksi PHP dan MySQL</title>
</head>
<body>

<?php

require('koneksi.php');
$query = "SELECT * FROM table_mahasiswa";
$result = mysqli_query($koneksi, $query);

?>
<br>
<table border="1" width=45%>
    <thead>
        <th>No.</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Program Studi</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach ($result as $key => $value){ ?>
        <tr>
            <td><?=$key+1?></td>
            <td><?=$value['nim']?></td>
            <td><?=$value['nama_mahasiswa']?></td>
            <td><?=$value['jenis_kelamin']?></td>
            <td><?=$value['program_studi']?></td>
            <td><?=$value['alamat']?></td>
            <td><a href="update.php?nim=<?=$value['nim']?>">Update</a>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');"
                 href="Delete.php?nim=<?=$value['nim']?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<br>
<a href="index.php?page=tambah_mhs">Tambah Data</a>
<br>
</body>
</html>