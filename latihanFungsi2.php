<?php

    function luasLingkaran($jari){
        $LuasLingkaran = 3.14 * $jari * $jari;
        return $LuasLingkaran;
    }

    function luasSegitiga($tinggi, $alas){
        $LuasSegitiga = $alas * $tinggi / 2;
        return $LuasSegitiga;
    }

    function luasPersegiPanjang($panjang, $lebar){
        $LuasPersegiPanjang = $panjang * $lebar;
        return $LuasPersegiPanjang;
    }

    echo "<table>";
    echo "<tr>";
    echo "<td> Luas Lingkaran </td>";
    echo "<td> : </td>";
    echo "<td>" .luasLingkaran(7) ."</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td> Luas Segitiga </td>";
    echo "<td> : </td>";
    echo "<td>" .luasSegitiga(10, 5) ."</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td> Luas Persegi Panjang </td>";
    echo "<td> : </td>";
    echo "<td>" .luasPersegiPanjang(13, 5) ."</td>";
    echo "</tr>";

    echo "</table>";
?>