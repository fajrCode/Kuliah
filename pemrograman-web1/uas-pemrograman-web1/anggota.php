<!DOCTYPE html>

<head>
    <title>Perpustakaan UNH</title>
</head>

<body>
    <h2>
        <center>Data Anggota Perpustakaan</center>
    </h2>
    <?php
    require('koneksi.php');
    $query = "SELECT * FROM anggota";
    $result = mysqli_query($koneksi, $query);
    ?>
    <br>
    <table border="1" width=45%>
        <thead>
            <th>No</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Kode Prodi</th>
            <th>No Hp</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php foreach ($result as $key => $value) { ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $value['nim'] ?></td>
                    <td><?= $value['nama_anggota'] ?></td>
                    <td><?= $value['jk_anggota'] ?></td>
                    <td><?= $value['kode_prodi'] ?></td>
                    <td><?= $value['no_hp_anggota'] ?></td>
                    <td><?= $value['alamat_anggota'] ?></td>
                    <td><a class="aksi" href="update_anggota.php?nim=<?= $value['nim'] ?>">Update</a>
                        <a class="aksi" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');" href="Delete_anggota.php?nim=<?= $value['nim'] ?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <center>
        <a class="tambah" href="Home.php?page=form_anggota">Tambah Data Anggota</a>
    </center>
</body>

</html>