<?php
//terdapat penambahan parameter pada $salam
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo"<br>";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    echo"Senang berkenalan dengan Anda!<br/>"; 
}

perkenalan("Hamdana", "Halo");

echo"<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi!";

//memanggil fungsi yang telah dibuat
// perkenalan();

perkenalan($saya);
?>