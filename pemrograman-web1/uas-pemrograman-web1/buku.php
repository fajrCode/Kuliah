<!DOCTYPE html>

<head>
    <title>Perpustakaan UNH</title>
</head>

<body>
    <h2>
        <center>Daftar Buku</center>
    </h2>
    <?php
    require('koneksi.php');
    $query = "SELECT * FROM buku";
    $result = mysqli_query($koneksi, $query);
    ?>
    <br>
    <table border="1" width=45%>
        <thead>
            <th>No</th>
            <th>Kode Buku</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun penerbitan</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php foreach ($result as $key => $value) { ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $value['kode_buku'] ?></td>
                    <td><?= $value['judul'] ?></td>
                    <td><?= $value['penulis'] ?></td>
                    <td><?= $value['penerbit'] ?></td>
                    <td><?= $value['tahun_penerbit'] ?></td>
                    <td align="center"><img src="gambar/<?= $value['gambar'] ?>" width="30%" height="30%"></td>
                    <td width="15%"><a class="aksi" href="update_buku.php?kode_buku=<?= $value['kode_buku'] ?>">Update</a>
                        <a class="aksi" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');" href="Delete_buku.php?kode_buku=<?= $value['kode_buku'] ?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <center>
        <a class="tambah" href="Home.php?page=form_buku">Tambah Daftar Buku</a>
    </center>
</body>

</html>