<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <h4>Sapaan dalam setiap Agama</h4>
    <form action="" method="POST">
        <label>Agama</label>
            <select name="agama">
                    <option value="opsi">-Pilih Agama-</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Lainnya">Lainnya</option>
            </select>
        <input type=submit name='input'>
    </form>
</body>
</html>

<?php

function salam(){

    if(isset($_POST['input'])){
        $agama=$_POST['agama'];
    
        switch ($agama){
            case "Islam": $salam = "Assalamu'alaikum"; break;
            case "Kristen" : $salam = "Salam sejahtera bagi Kita Semua"; break;
            case "Hindu" : $salam = "Om Swastiastu"; break;
            case "Buddha" : $salam = "Namo Buddhaya"; break;
            case "Lainnya" : $salam = "";break;
        }
    
        echo "Agama: ".$agama."<br>";
        echo $salam;    
    }
    
}    

salam();

echo "<br><h4>Sapaan berdasarkan Waktu</h4>";
date_default_timezone_set('Asia/Jakarta');
$time=date("H:i");

echo "Sekarang Jam: ".$time." WIB"."<br>";
if(($time>="05:00") && ($time<="10:00")){
    echo "Selamat Pagi";
}elseif(($time>="10:01") && ($time<="15:00")){
    echo "Selamat Siang";
}elseif(($time>="15:01") && ($time<="18:00")){
    echo "Selamat Sore";
}else{
    echo "Selamat Malam";
}

?>