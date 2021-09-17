<?php

    // class data{
    //     function __construct($nama, $jk, $kelas){
    //         echo "Nama Saya : {$nama} <br>";
    //         echo "Jenis Kelamin : {$jk} <br>";
    //         echo "Kelas : {$kelas} <br>";
    //         echo "<hr>";
    //     }
    // }
    // $data = new data("Aziz Tb", "Laki-laki", "XII RPL 3");

    class data{
        function __construct($nama, $jk, $kelas){
            echo "Nama Saya : {$nama} <br>";
            echo "Jenis Kelamin : {$jk} <br>";
            echo "Kelas : {$kelas} <br>";
            echo "<hr>";
        }
    }

    $data = new data("Aziz Tb", "Laki-laki", "XII RPL 3");
    $data = new data("Rico", "No gender", "??");
    $data = new data("Sulten", "Laki-laki", "XII RPL 3");

?>