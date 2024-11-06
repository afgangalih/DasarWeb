<?php

$hargaProduk = 120000;
$diskon = 20; 

if ($hargaProduk > 100000) {
    $jumlahDiskon = ($diskon / 100) * $hargaProduk; 
} else {
    $jumlahDiskon = 0; 
}


$hargaSetelahDiskon = $hargaProduk - $jumlahDiskon;


echo "Harga produk sebelum diskon: Rp " . $hargaProduk . "<br>";
echo "Diskon: Rp " . $jumlahDiskon . "<br>";
echo "Harga setelah diskon: Rp " . $hargaSetelahDiskon . "<br>";
?>
