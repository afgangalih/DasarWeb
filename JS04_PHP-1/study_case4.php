<?php


$siswa = [
    'Alice' => 85,
    'Bob' => 92,
    'Charlie' => 78,
    'David' => 64,
    'Eva' => 90
];


$totalNilai = 0;
$jumlahSiswa = 0;

foreach ($siswa as $nilai) {
    $totalNilai += $nilai;  
}


$rataRata = $totalNilai / $jumlahSiswa;


echo "Rata-rata nilai kelas adalah: " . $rataRata . "<br>";
echo "Daftar siswa dengan nilai di atas rata-rata:<br>";


foreach ($siswa as $nama => $nilai) {
    if ($nilai > $rataRata) {
        echo "Nama: $nama, Nilai: $nilai<br>";
    }
}

?>
