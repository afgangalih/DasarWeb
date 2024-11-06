<?php

$siswa = [
    ['nama' => 'Alice', 'nilai' => 85],
    ['nama' => 'Bob', 'nilai' => 92],
    ['nama' => 'Charlie', 'nilai' => 78],
    ['nama' => 'David', 'nilai' => 64],
    ['nama' => 'Eva', 'nilai' => 90]
];


$total_nilai = 0;
foreach ($siswa as $data) {
    $total_nilai += $data['nilai'];
}
$rata_rata = $total_nilai / count($siswa);


echo "Daftar nilai siswa di atas rata-rata kelas:";
echo"<br>";
echo "Rata-rata kelas: " . $rata_rata . "\n\n";
echo"<br>";
foreach ($siswa as $data) {
    if ($data['nilai'] > $rata_rata) {
        echo $data['nama'] . ": " . $data['nilai'] . "\n";
    }
}
?>