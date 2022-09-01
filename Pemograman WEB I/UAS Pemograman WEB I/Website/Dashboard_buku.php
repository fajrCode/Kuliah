<!DOCTYPE html>
<?php
require_once('Header.php');
?>
<nav>
    <ul class="topnav">
        <li><a href="index.php">Home</a></li>
        <li><a href="Dashboard_buku.php">Buku</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
</nav>

<body>
    <h2>
        <center>Daftar Buku</center>
    </h2>
    <table border="1">
        <?php
        require('koneksi.php');
        $query = "SELECT * FROM buku";
        $result = mysqli_query($koneksi, $query);
        $kolom = 3;
        $i = 1;
        while ($data = mysqli_fetch_array($result)) {
            if (($i) % $kolom == 1) {
                echo '<tr>';
            }
            echo '<td align="center" width="300px"><img src="gambar/' . $data['gambar'] . '" width="50%" /><br>
            <b>' . $data['judul'] . '</b><br>
            <b>' . 'Karya : ' . $data['penulis'] . '</b></td>';
            if (($i) % $kolom == 0) {
                echo '</tr>';
            }
            $i++;
        }
        ?>
    </table>
</body>
<?php
require_once('Footer.php');
?>

</html>