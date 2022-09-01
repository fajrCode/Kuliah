<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "db_perpus";
$koneksi = mysqli_connect($host, $user, $pass, $db);

// !$koneksi = $koneksi==false
// penggunaan ! sama dengan negasi, jadi !$koneksi dibaca $koneksi bernilai false
if (!$koneksi){
    die("Koneksi dengan database gagal: ".mysqli_connect_error());
}

?>