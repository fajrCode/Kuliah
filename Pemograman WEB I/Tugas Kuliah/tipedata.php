<!DOCTYPE html>
<html>
<head>
    <title>Latihan PHP</title>
</head>
<body>
    <?php
        $nim = "12345";
        $nama = "Rizki Budi";
        $umur = 22;
        $nilai = 89.9;
        $hadir = true;
        if($hadir==true){
            $hadir="Hadir";
        }else{
            $hadir="Tidak Hadir";
        }
        define ("kampus",'Universitas Nurdin Hamzah');
        // echo "NIM  : ".$nim."<br>";
        // echo "Nama : $nama"."<br>";
        // echo "Umur : $umur"."<br>";
        // echo "Nilai : $nilai"."<br>";
        // echo "Hadir : $hadir";
        $a = 5;
        $b = 2;
        $c = $a + $b;
        $d = $a - $b;
        $e = $a * $b;
        $f = $a ** $b;
        $g = $a / $b;
        $h = $a % $b;
        echo "$a + $b = $c"."<br>";
        echo "$a - $b = $d"."<br>";
        echo "$a * $b = $e"."<br>";
        echo "$a ** $b = $f"."<br>";
        echo "$a / $b = $g"."<br>";
        echo "$a % $b = $h";
        echo "<hr>";

        $speed = $a;
        $speed += $b;
        echo "Speed = $speed";
    

    ?>
        <!-- <table border="1" width=50%>
            <tr>
                <td colspan="2" align="center"><?php kampus?></td>
            </tr>
            <tr>
                <td width=25%>NIM</td>
                <td><?php echo $nim?></td>
            </tr>
            <tr>
                <td width=25%>Nama</td>
                <td><?php echo $nama?></td>
            </tr>
            <tr>
                <td width=25%>Umur</td>
                <td><?php echo $umur?></td>
            </tr>
            <tr>
                <td width=25%>$nilai</td>
                <td><?php echo $nilai?></td>
            </tr>
            <tr>
                <td width=25%>Hadir</td>
                <td><?php echo $hadir?></td>
            </tr>
        </table> -->
    
</body>
</html>