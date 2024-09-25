<?php
//menampilkan semua informasi yang tersedia dalam array $_SERVER

// echo '<pre>';
// print_r($_SERVER);
// echo '</pre>';

$nama = @$_GET['nama']; //tanda @ agar tidak ada peringatan eror
//ketika key-nya kosong
$usia = @$_GET['usia']; //tanda @ agar tidak ada peringatan eror ketika key-nya kosong

echo "Halo {$nama}!, Apakah benar anda berusia {$usia} tauhn?";
?>