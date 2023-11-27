<?php

    $index=[
        "nim"=>"21112062",
        "nama_mahasiswa"=>"Fajri Arvandi",
        "prodi"=>"Teknik Informatika"
    ];
    
    echo "<h3>Data Mahasiswa</h3>";
    echo "<p>Nim : {$index['nim']}</p>";
    echo "<p>Nama : {$index['nama_mahasiswa']}</p>";
    echo "<p>Prodi : {$index['prodi']}</p>";

    $index['nilai']= 90;

    echo "<p>Nilai : {$index['nilai']}</p>";

    $nilai=$index['nilai'];
    if ( $nilai < 50){
        $grade="E";
    }elseif ($nilai < 56.99){
        $grade="D";
    }elseif ($nilai < 67.99){
        $grade="C";
    }elseif ($nilai < 79.99){
        $grade="B";
    }else {
        $grade="A";
    }    

    echo "<p>Grade : $grade</p>";

?>
