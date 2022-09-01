<html>
    <head>
        <title>Latihan PHP</title>
    </head>
    <body>
        <form action="" method="POST">
            Nama Mahasiswa <input type="text" name="nama" id="nama"><br>
            NIM Mahasiswa <input type="text" name="nim" id="nim"><br>
            Jenis Kelamin <input type="radio" name="jk" id="jk" id="lk" value="Laki-Laki">Laki-Laki
            <input type="radio" name="jk" id="pr" value="Perempuan">Perempuan<br>
            Program Studi <select name="jurusan" id="jurusan">
                <option value="opsi">- Pilih Prodi -</option>
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
if (isset($_POST['input'])) {
    $nama=$_POST['nama'];
    $nim=$_POST['nim'];
    $jk=$_POST['jk'];
    $prodi=$_POST['jurusan'];
    $alamat=$_POST['alamat'];
    echo "<br>"."Data Mahasiswa"."<br>";
    echo "Nama Mahasiswa : ".$nama."<br>";
    echo "NIM Mahasiswa  : ".$nim."<br>";
    echo "Jenis Kelamin  : ".$jk."<br>";
    echo "Program Studi  : ".$prodi."<br>";
    echo "Alamat         : ".$alamat."<br>";
}
?>
<aside class="button">
        <button onclick="gajiFunction()">Hitung Gaji</button>
        </aside>
        <div id="tabel">
            <aside class="customers">
            <table border="1" class="table">
                <tr>
                    <td>Nama Pegawai</td>
                    <td id="nama"></td>
                </tr>
                <tr>
                    <th>Penghasilan</th>
                </tr>
                <tr>
                    <td>1. Gaji Pokok</td>
                    <td id="gapok"></td>
                </tr>
                <tr>
                    <td>2. Tunjangan Suami/Istri</td>
                    <td id="tsutri"></td>
                </tr>
                <tr>
                    <td>3. Tunjangan Anak</td>
                    <td id="tanak"></td>
                </tr>
                <tr>
                    <td>4. Tunjangan Lain</td>
                    <td id="tlain"></td>
                </tr>
                <tr>
                    <th>Total Penghasilan</th>
                    <th id="total"></th>
                </tr>
                <tr>
                    <th>Potongan</th>
                </tr>
                <tr>
                    <td>1. PPh 2%</td>
                    <td id="pph"></td>
                </tr>
                <tr>
                    <td>2. Potongan Lain</td>
                    <td id="plain"></td>
                </tr>
                <tr>
                    <th>Total Potongan</th>
                    <th id="totalp"></th>
                </tr>
                <tr>
                    <th>Gaji Yang Diterima</th>
                    <th id="gaji"></th>
                </tr>
            </table>
            </aside>
        </div>