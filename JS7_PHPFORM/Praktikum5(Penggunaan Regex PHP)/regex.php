<?php

$pattern = '/[a-z]/';
$text = 'This is a sample text';
if (preg_match($pattern, $text)) {
    echo "Huruf kecil ditemukan!<br>"; 
} else {
    echo "Tidak ada huruf kecil!<br>";
}

$pattern = '/[0-9]+/';
$text = 'There are 123 apples';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>"; 
} else {
    echo "Tidak ada yang cocok!<br>";
}

$pattern = '/apple/';
$replacement = 'banana';
$text = 'I Like apples pie.';
$new_text = preg_replace($pattern, $replacement, $text);
echo $new_text . "<br>";

$pattern = '/go*d/';
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>"; 
} else {
    echo "Tidak ada yang cocok!<br>";
}

//soal 5.5
$pattern = '/go?d/';
$text = 'gd is good';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>"; 
} else {
    echo "Tidak ada yang cocok!<br>";
}

//soal 5.6
$pattern = '/go{0,2}d/'; // mencocokkan 'g' diikuti oleh 0 atau 2 huruf 'o', dan diakhiri dengan 'd'.
$text = 'good is good';
if (preg_match($pattern, $text, $matches)) {
    echo "Cocokkan: " . $matches[0] . "<br>"; 
} else {
    echo "Tidak ada yang cocok!<br>";
}




