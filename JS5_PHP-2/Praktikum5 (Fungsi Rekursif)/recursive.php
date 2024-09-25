<?php
// function tampilkanHaloDunia() {
//     echo "Halo dunia! <br>";
// }
// tampilkanHaloDunia()

function tampilanAngka(int $jumlah, int $indeks = 1) {
    echo "Perulangan ke-{$indeks} <br>";

    if ($indeks < $jumlah) {
        tampilanAngka($jumlah, $indeks + 1);
    }
}
tampilanAngka(20);


?>