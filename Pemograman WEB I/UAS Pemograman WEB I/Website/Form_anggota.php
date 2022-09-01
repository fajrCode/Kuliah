<!DOCTYPE html>
<html>

<body>

    <center>
        <h2> Tambah Data Anggota Perpustakaan</h2>
    </center>
    <main> 
        <section class="base">
            <form action="" method="POST">
                <div>
                    <label>NIM Anggota</label>
                    <input type="text" name="nim" id="nim">
                </div>
                <div>
                    <label>Nama Anggota</label>
                    <input type="text" name="nama_anggota" id="nama_anggota">
                </div>
                <div>
                    <label>Jenis Kelamin</label><br>
                    <input type="radio" name="jk_anggota" id="genderL" value="L">Laki-laki
                    <input type="radio" name="jk_anggota" id="genderP" value="P">Perempuan
                </div>
                <div>
                    <label>Program Studi</label><br>
                    <select name="kode_prodi" id="kode_prodi" class="form-control">
                        <option value="">-Pilih Prodi-</option>
                        <option value="TI">Teknik Informatika</option>
                        <option value="SI">Sistem Informasi</option>
                        <option value="Teknosi">Teknologi Informasi</option>
                    </select>
                </div>
                <div>
                    <label>No Hp</label>
                    <input type="text" name="no_hp_anggota" id="no_hp_anggota">
                </div>
                <div>
                    <label>Alamat</label>
                    <textarea name="alamat_anggota" id="alamat_anggota" cols="30" rows="5"></textarea>
                </div>
                <button name="input">Simpan</button>
                <button name="batal">Batal</button>
            </form>
        </section>
    </main>
</body>

</html>
<?php
if (isset($_POST['input'])) {
    require_once "koneksi.php";
    extract($_POST);
    $query = "INSERT INTO anggota(nim,nama_anggota,jk_anggota,kode_prodi,no_hp_anggota,alamat_anggota)
                values ('$nim','$nama_anggota','$jk_anggota','$kode_prodi','$no_hp_anggota','$alamat_anggota')";
    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Data berhasil disimpan');window.location='Home.php?page=anggota';</script>";
    } else {
        echo "<script>alert('Data gagal disimpan');history.go(-1)</script>";
    }
} elseif (isset($_POST['batal'])) {
    echo "<script>window.location='Home.php?page=anggota';</script>";
}

?>