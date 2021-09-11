<?php
    $jenis = "Makanan";
    $nama = "nasi goreng";
    $jumlah = 6;

    $mie = 10000 * $jumlah;
    $nasi = 15000 * $jumlah;
    $ayam = 20000 * $jumlah;

    $air = 8000 * $jumlah;
    $jus = 10000 * $jumlah;
    $kopi = 12000 * $jumlah;

    echo "======================== <br>";
    echo "+++ Restoran AntahBerantah +++ <br>";
    echo "======================== <br><br>";
    echo "Jenis makanan : $jenis <br>";
    echo "Nama pesanan  : $nama <br>";
    echo "Jumlah        : $jumlah <br>";

    if ($jenis == "Makanan" || $jenis == "MAKANAN" || $jenis == "makanan") {
        if ($nama == "Mie goreng" || $nama == "mie goreng") {
            $diskon1 = $mie * 20/100;
            $bayar1 = $mie - $diskon1;
            echo "Total         : $mie <br>";
            if ($mie >= 50000){
                echo "Diskon 20%    : $diskon1 <br>";
                echo "Total bayar   : $bayar1 <br>";
            } else {
            echo "Total bayar   : $mie <br>";
            }
        } 
        else if ($nama == "Nasi goreng" || $nama == "nasi goreng") {
            $diskon2 = $nasi * 20/100;
            $bayar2 = $nasi - $diskon2;
            echo "Total         : $nasi <br>";
            if ($nasi >= 50000){
                echo "Diskon 20%    : $diskon2 <br>";
                echo "Total bayar   : $bayar2 <br>";
            } else {
            echo "Total bayar   : $nasi <br>";
            }
        }
        if ($nama == "Ayam goreng" || $nama == "ayam goreng") {
            $diskon3 = $ayam * 20/100;
            $bayar3 = $ayam - $diskon3;
            echo "Total         : $ayam <br>";
            if ($ayam >= 50000){
                echo "Diskon 20%    : $diskon3 <br>";
                echo "Total bayar   : $bayar3 <br>";
            } else {
            echo "Total bayar   : $ayam <br>";
            }
        }
    }
    else if ($jenis == "Minuman" || $jenis == "MINUMAN" || $jenis == "minuman") {
        if ($nama == "Air mineral" || $nama == "air mineral") {
            $diskon4 = $air * 20/100;
            $bayar4 = $air - $diskon4;
            echo "Total         : $air <br>";
            if ($air >= 50000){
                echo "Diskon 20%    : $diskon4 <br>";
                echo "Total bayar   : $bayar4 <br>";
            } else {
            echo "Total bayar   : $air <br>";
            }
        } 
        else if ($nama == "Jus" || $nama == "jus") {
            $diskon5 = $jus * 20/100;
            $bayar5 = $jus - $diskon5;
            echo "Total         : $jus <br>";
            if ($jus >= 50000){
                echo "Diskon 20%    : $diskon5 <br>";
                echo "Total bayar   : $bayar5 <br>";
            } else {
            echo "Total bayar   : $jus <br>";
            }
        }
        if ($nama == "Kopi" || $nama == "kopi") {
            $diskon6 = $kopi * 20/100;
            $bayar6 = $kopi - $diskon6;
            echo "Total         : $kopi <br>";
            if ($kopi >= 50000){
                echo "Diskon 20%    : $diskon6 <br>";
                echo "Total bayar   : $bayar6 <br>";
            } else {
            echo "Total bayar   : $kopi <br>";
            }
        }
    } else {
        echo "none";
    }
    echo "<br> ======================== <br>";
    echo "======= Terima kasih ======= <br>";
    echo "======================== <br>";

?>