<?php
$menu = [
    [
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita",
        "SubMenu" => [
            [
                "nama" => "Wisata",
                "SubMenu" => [
                    [
                        "nama" => "Pantai"
                    ],
                    [
                        "nama" => "Gunung"
                    ]
                ]
            ],
            [
                "nama" => "Kuliner"
            ],
            [
                "nama" => "Hiburan"
            ]
        ]
    ],
    [
        "nama" => "Tentang"
    ],
    [
        "nama" => "Kontak"
    ]
];

function tampilkanMenuBertingkat(array $menu) {
    echo "<ul>";
    foreach ($menu as $item) {
        // Tampilkan item menu
        echo "<li>{$item['nama']}</li>";

        // Cek apakah item menu memiliki submenu
        if (isset($item['SubMenu'])) {
            // Jika ada submenu, panggil fungsi ini lagi untuk menampilkan submenu tersebut
            tampilkanMenuBertingkat($item['SubMenu']);
        }
    }
    echo "</ul>";
}

// Memanggil fungsi untuk menampilkan menu
tampilkanMenuBertingkat($menu);
?>
