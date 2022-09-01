<!DOCTYPE html>
<head>
    <title>Belajar Koneksi PHP dan MySQL</title>
</head>
<br>
<body>

<?php

require('koneksi.php');
$query = "SELECT * FROM table_prodi";
$result = mysqli_query($koneksi, $query);

?>
<table border="1" width=45%>
    <thead>
        <th>No.</th>
        <th>ID Prodi</th>
        <th>Kode Prodi</th>
        <th>Nama Prodi</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php foreach ($result as $key => $value){ ?>
        <tr>
            <td><?=$key+1?></td>
            <td><?=$value['id_prodi']?></td>
            <td><?=$value['kode_prodi']?></td>
            <td><?=$value['nama_prodi']?></td>
            <td><a href="Update_prodi.php?id_prodi=<?=$value['id_prodi']?>">Update</a>
                <a onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');"
                 href="Delete_prodi.php?id_prodi=<?=$value['id_prodi']?>">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </tbody>
</table>
<br>
<button><a href="Form_prodi.php" >Tambah Data</a></button>
<br>
</body>
</html>