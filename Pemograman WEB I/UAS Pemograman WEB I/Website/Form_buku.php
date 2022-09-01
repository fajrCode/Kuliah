<!DOCTYPE html>
<html>

<body>
    <center><h2> Tambah Data Buku</h2></center>
    <section class="base">
        <form action="" method="POST" enctype="multipart/form-data">
            <div>
                <label>Kode Buku</label>
                <input type="text" name="kode_buku">
            </div>
            <div>
                <label>Judul</label>
                <input type="text" name="judul">
            </div>
            <div>
                <label>Penulis</label>
                <input type="text" name="penulis">
            </div>
            <div>
                <label>Penerbit</label>
                <input type="text" name="penerbit">
            </div>
            <div>
                <label>Tahun Penerbitan</label>
                <input type="text" name="tahun_penerbit">
            </div>
            <div>
                <label>Gambar</label>
                <input type="file" name="gambar">
            </div>
            <button name="input">Simpan</button>
            <button name="batal">Batal</button>
        </form>
    </section>
</body>

</html>
<?php
if (isset($_POST['input'])) {
    require_once "koneksi.php";
    $kode_buku   = $_POST['kode_buku'];
    $judul     = $_POST['judul'];
    $penulis    = $_POST['penulis'];
    $penerbit    = $_POST['penerbit'];
    $tahun_penerbit    = $_POST['tahun_penerbit'];
    $gambar = $_FILES['gambar']['name'];

    if ($gambar != "") {
        $ekstensi_diperbolehkan = array('png', 'jpg');
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $file_tmp = $_FILES['gambar']['tmp_name'];
        $angka_acak     = rand(1, 999);
        $nama_gambar_baru = $angka_acak . '-' . $gambar;
        if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
            move_uploaded_file($file_tmp, 'gambar/' . $nama_gambar_baru);
            $query = "INSERT INTO buku (kode_buku, judul, penulis, penerbit, tahun_penerbit, gambar) VALUES ('$kode_buku', '$judul', '$penulis', '$penerbit', '$tahun_penerbit', '$nama_gambar_baru')";
            $result = mysqli_query($koneksi, $query);
            if (!$result) {
                die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                    " - " . mysqli_error($koneksi));
            } else {
                echo "<script>alert('Data berhasil ditambah.');window.location='Home.php?page=buku';</script>";
            }
        } else {
            echo "<script>alert('Ekstensi gambar yang boleh hanya jpg atau png.');window.location='Home.php?page=form_buku';</script>";
        }
    } else {
        $query = "INSERT INTO buku (kode_buku, judul, penulis, penerbit, tahun_penerbit, gambar) VALUES ('$kode_buku', '$judul', '$penulis', '$penerbit', '$tahun_penerbit', null)";
        $result = mysqli_query($koneksi, $query);
        if (!$result) {
            die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
                " - " . mysqli_error($koneksi));
        } else {
            echo "<script>alert('Data berhasil ditambah.');window.location='Home.php?page=buku';</script>";
        }
    }
} elseif (isset($_POST['batal'])) {
    echo "<script>window.location='Home.php?page=buku';</script>";
}

?>