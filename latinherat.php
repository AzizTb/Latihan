<?php

    class BangunDatar{

        public $lp = "Sisi x Sisi";
        public $lpp = "Panjang x Lebar";
        public $ls = "Alas x Tinggi / 2";
        public $ll = "3.14 x jari x jari";

        public function utama() {
            echo "Bangun datar";
        } 
    }

    class persegi extends BangunDatar{
        public function Luaspersegi($sisi){
            $luaspersegi = $sisi * $sisi;

            echo "<h3> Luas Persegi </h3> <br>";
            echo "Sisi : {$sisi}<br>";
            echo "Rumus : {$this->lp}<br>";
            echo "Luas : {$luaspersegi} <br>";
        }
    }

    class persegipanjang extends BangunDatar{
        public function Luaspp($panjang, $lebar){
            $luasppanjang = $panjang * $lebar;

            echo "<h3> Luas Persegi </h3> <br>";
            echo "Panjang : {$panjang}<br>";
            echo "lebar : {$lebar}<br>";
            echo "Rumus : {$this->lpp}<br>";
            echo "Luas : {$luaspp} <br>";
        }
    }

    // class segitiga extends BangunDatar{
    //     public function Luassegitiga($sisi){
    //         $luassegitiga = $alas * $tinggi / 2;

    //         echo "<h3> Luas Persegi </h3> <br>";
    //         echo "Alas : {$alas}<br>";
    //         echo "Tinggi : {$tinggi}<br>";
    //         echo "Rumus : {$this->ls}<br>";
    //         echo "Luas : {$luassegitiga} <br>";
    //     }
    // }

    // class lingkaran extends BangunDatar{
    //     public function Luaslingkaran($jari){
    //         $luaslingkaran = $sisi * $sisi;

    //         echo "<h3> Luas Persegi </h3> <br>";
    //         echo "Jari-jari : {$jari}<br>";
    //         echo "Rumus : {$this->ll}<br>";
    //         echo "Luas : {$luaslingkaran} <br>";
    //     }
    // }


    $output = new Bangundatar();

    $output->Luaspersegi(7);
    $output->Luaspp(7,4);
    // $output->Luassegitiga(7,2);
    // $output->Luaslingkaran(7);

?>