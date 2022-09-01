<?php
// $artikel = [
//     [
//         'judul' => "Belajar Pemograman PHP",
//         'penulis' => "UNH Center"
//     ],
//     [
//         'judul'=>"Belajar Pemograman MySQL",
//         'penulis'=>"UNH Center"
//     ]
//     ];

// echo "<pre>";
// print_r($artikel);
// echo "</pre>";

// echo $artikel[1]["judul"];

// echo "<br>";

// //looping kalau pake tag html
// // foreach ($artikel as $post){
// //     echo "<p>".$post["judul"]."<p>";
// //     echo "<p>".$post["penulis"]."<p>";
// // }

// foreach ($artikel as $post){
//     echo $post["judul"]."<br>";
//     echo $post["penulis"]."<br>";
// }

// function ram(){
//     $ram = ["4GB","8GB","16GB"];
//     foreach($ram as $post){
//         echo "<ul><li>$post</li></ul>";
//     }
//     }
?>

<?php

echo "<h4>Contoh penggunaan Array Multidimensi</h4>";
echo "<table border=1>"."<tr>"."<td>";
$komputer = [
    [ "komponen" =>
        "<li>Komponen Komputer</li>".
        "<ul><li>Casing</li></ul>".
        "<ul><li>Motherboard</li></ul>".
        "<ul><li>RAM</li></ul>".
        "<ul><ul><li>4GB</li></ul></ul>".
        "<ul><ul><li>8GB</li></ul></ul>".
        "<ul><ul><li>16GB</li></ul></ul>".
        "<ul><li>SSD</li></ul>"
    ],
    [
        "komponen" =>
        "<li>Komponen Laptop</li>".
        "<ul><li>Baterai</li></ul>".
        "<ul><li>LCD Keyboard Laptop</li></ul>"
    ]

    ];

    foreach ($komputer as $post){
    echo $post["komponen"];

}

echo "</td>"."</tr>"."</table>";

?>