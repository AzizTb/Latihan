<?php

    class hitung{
        function luasLingkaran($jari, $phi=3.14){
            $LuasLingkaran = $phi * $jari * $jari;
            echo "Menghitung Luas Lingkaran <br>";
            echo "Phi = {$phi} <br>";
            echo "Jari-jari = {$jari} <br>";
            echo "Luasnya = {$LuasLingkaran} <br>";
            echo "<hr>";
        }
    
        function luasSegitiga($alas, $tinggi){
            $LuasSegitiga = $alas * $tinggi / 2;
            echo "Menghitung Luas Segitiga <br>";
            echo "Alasnya = {$alas} <br>";
            echo "Tingginya = {$tinggi} <br>";
            echo "Luasnya = {$LuasSegitiga} <br>";
            echo "<hr>";
        }
    
        function luasPersegi($sisi){
            $LuasPersegi = $sisi * $sisi;
            echo "Menghitung Luas Persegi <br>";
            echo "Sisinya = {$sisi} <br>";
            echo "Luasnya = {$LuasPersegi} <br>";
            echo "<hr>";
        }
    }

        $perhitungan = new hitung();
        $perhitungan->luasPersegi(10);
        $perhitungan->luasSegitiga(10,5);
        $perhitungan->luasLingkaran(10);

?>