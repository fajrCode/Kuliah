<!DOCTYPE html>

<body>
    <h2>
        <center>Daftar Peminjaman</center>
    </h2>
    <?php
    require('koneksi.php');
    $query = "SELECT tabel_peminjaman.kode_peminjaman, tabel_peminjaman.tanggal_pinjam, tabel_peminjaman.tanggal_kembali , buku.judul, anggota.nama_anggota  
              FROM tabel_peminjaman, anggota, buku
              WHERE tabel_peminjaman.nim=anggota.nim
              AND tabel_peminjaman.kode_buku=buku.kode_buku";
    $result = mysqli_query($koneksi, $query);
    ?>
    <br>
    <table border="1" width=45%>
        <thead>
            <th>No</th>
            <th>Kode Peminjaman</th>
            <th>Tanggal Peminjaman</th>
            <th>Tempo Pengembalian</th>
            <th>Judul Buku</th>
            <th>Nama Peminjam</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php foreach ($result as $key => $value) { ?>
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $value['kode_peminjaman'] ?></td>
                    <td><?= date('d-m-Y', strtotime($value['tanggal_pinjam'])) ?></td>
                    <td><?= date('d-m-Y', strtotime($value['tanggal_kembali'])) ?></td>
                    <td><?= $value['judul'] ?></td>
                    <td><?= $value['nama_anggota'] ?></td>
                    <td width="15%"><a class="aksi" href="update_peminjaman.php?kode_peminjaman=<?= $value['kode_peminjaman'] ?>">Update</a>
                        <a class="aksi" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');" href="Delete_peminjaman.php?kode_peminjaman=<?= $value['kode_peminjaman'] ?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <br>
    <center>
        <a class="tambah" href="Home.php?page=form_peminjaman">Tambah Daftar Pinjaman</a>
    </center>
</body>

</html>