<?php

$file ="latihan.json";

$anggota = file_get_contents($file);

$data = json_decode($anggota, true);

foreach ($data as $d) {
    echo "Nama : " .$d['nama'] ."<br>";
    echo "Domisili : " .$d['tempat'] ."<br>";
    echo "Hobi : ";

    echo "<ul>";
    foreach ($d['hobi'] as $ehe) {
        echo "<li>" .$ehe['satu'] ."</li>";
    } echo "</ul>";
}

?>