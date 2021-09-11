<?php

    $satu = [
        ['berita' => "Olahraga", 'ichi' => 
        [
            [ 'genre' => "Sepak Bola", 'ni' => 
            [
                ['jenis' => "Sepak Bola Nasional"],
                ['jenis' => "Sepak Bola Internasional"]
            ]
            ],

            [ 'genre' => "Bulu Tangkis", 'ni' => 
            [
                ['jenis' => "Bulu Tangkis Nasional"],
                ['jenis' => "Bulu Tangkis Internasional"]
            ]
            ],

            [ 'genre' => "Atletik", 'ni' =>
            [
                ['jenis' => "Atletik Bola Nasional"],
                ['jenis' => "Atletik Bola Internasional"]
            ]
            ]

        ]
        ],

        ['berita' => "Ekonomi", 'ichi' =>
        [
            ['genre' => 'Saham', 'ni' =>
            [
                ['jenis' => "Saham Nasional"],
                ['jenis' => "Saham Internasional"]
            ]
            ],
            ['genre' => 'Bank', 'ni' =>
            [
                ['jenis' => "Bank Nasional"],
                ['jenis' => "Bank Internasional"]
            ]
            ],
        ]
        ],

        ['berita' => "Politik", 'ichi' =>
        [
            ['genre' => 'Capres', 'ni' =>
            [
                ['jenis' => "Jokowo"],
                ['jenis' => "Prabowo"]
            ]
            ],
            ['genre' => 'Cawapres', 'ni' =>
            [
                ['jenis' => "Ma'ruf Amin"],
                ['jenis' => "Sandiaga Uno"]
            ]
            ],
        ]
        ]
    ];

echo "Artikel : Detik.com <br>";
echo "Isi Berita : <br>";

echo "<ul>";
    foreach ($satu as $one ) {
        echo "<li>" .$one['berita'] ."</li>";
        echo "<ul>";

        foreach($one['ichi'] as $two) {
            echo "<li>" .$two['genre'] ."</li>";
            echo "<ul>";

            foreach($two['ni'] as $three) {
                echo "- " .$three['jenis'] ."</br>";
            }
        echo "</ul>";
        }
    echo "</ul>";
    }


?>