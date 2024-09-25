<?php
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam.", ";
    echo "<br/>";
    echo "Perkenalkan, nama saya ".$nama."<br/>";
    
    //memanggil fungsi lain
    echo "Saya berusia ".$umur = hitungUmur(2005, 2024)." tahun<br/>";
    echo "Senang berkenalan dengan anda!<br/>";
}

//memanggil fungsi perkenalan
perkenalan("Elok")

// echo "Umur saya adalah ".hitungUmur(2005, 2024) ." tahun";
?>