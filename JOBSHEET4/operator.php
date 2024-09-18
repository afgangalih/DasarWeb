<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil + $a dan $b adalah $hasilTambah <br>";
echo "Hasil - $a dan $b adalah $hasilKurang <br>";
echo "Hasil x $a dan $b adalah $hasilKali <br>";
echo "Hasil : $a dan $b adalah $hasilBagi <br>";
echo "Hasil % $a dan $b adalah $sisaBagi <br>";
echo "Hasil ** $a dan $b adalah $pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "<br><br>";

echo "Hasil = $a dan $b adalah $hasilSama <br>";
echo "Hasil !=  $a dan $b adalah $hasilTidakSama <br>";
echo "Hasil < $a dan $b adalah $hasilLebihKecil <br>";
echo "Hasil > $a dan $b adalah $hasilLebihBesar <br>";
echo "Hasil <= $a dan $b adalah $hasilLebihKecilSama <br>";
echo "Hasil >= $a dan $b adalah $hasilLebihBesarSama <br>";


$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "<br><br>";

echo "Hasil && $a dan $b adalah $hasilAnd <br>";
echo "Hasil || $a dan $b adalah $hasilOr <br>";
echo "Hasil ! $a dan $b adalah $hasilNotA <br>";
echo "Hasil ! $a dan $b adalah $hasilNotB <br>";

echo "<br><br>";

$a += $b;
echo"Hasil += a dan b adalah $a <br>";

$a -= $b;
echo"Hasil -= a dan b adalah $a <br>";

$a *= $b;
echo"Hasil *= a dan b adalah $a <br>";

$a /= $b;
echo"Hasil /= a dan b adalah $a <br>";

$a %= $b;
echo"Hasil %= a dan b adalah $a <br>";

echo "<br><br>";

$hasilIdentik = $a === $b;
echo "Hasil === $a dan $b adalah $hasilIdentik <br>";

$tidakIdentik = $a !== $b;
echo "Hasil !== 10 dan 5 adalah $tidakIdentik <br>";

$totalKursi = 45;
$kursiDitempati = 28;


$persentaseKosong = ($kursiDitempati / $totalKursi  ) * 100;
echo "Persentase kursi yang kosong adalah $persentaseKosong <br>";










