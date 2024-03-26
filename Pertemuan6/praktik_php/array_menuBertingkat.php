<?php
// membuat array dari menu
$menu = [
    [ 
        "nama" => "Beranda"
    ],
    [
        "nama" => "Berita", 
        "subMenu" => 
        [ 
            [ 
                "nama" => "Wisata",
                "subMenu" => 
                [
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
        ],
];
// membuat fungsi menampilkan menu
function tampilkanMenuBertingkat (array $menu) {
    echo "<ul>";
    foreach ($menu as $key => $item) { 
        echo "<li>{$item['nama']}";
        if (isset($item['subMenu']) && is_array($item['subMenu'])) {
            tampilkanMenuBertingkat($item['subMenu']); // Rekursif
        }
        echo "</li>";
    }
    echo "</ul>";
}
// Memanggil fungsi
tampilkanMenuBertingkat($menu);
?>
