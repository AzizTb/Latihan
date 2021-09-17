<?php

    class bangundatar{
        public $luas;
        public $keliling;
    }

    class persegi extends bangundatar{
        public function LP($sisi){
            $this->luas = $sisi * $sisi;
            $this->keliling = 4 * $sisi;

            echo "<b> Luas & Keliling Persegi </b><br>";
            echo "<i> Rumus Luas : Sisi x Sisi </i> <br>";
            echo "<i> Rumus Keliling : 4 x Sisi </i> <br>";
            echo "Sisi : $sisi <br>";
            echo "Luas : {$this->luas} <br>";
            echo "Keliling : {$this->keliling}";
            echo "<hr>";
        }
    }

    class persegipanjang extends bangundatar{
        public function LPP($panjang, $lebar){
            $this->luas = $panjang * $lebar;
            $this->keliling = 2 * ($panjang + $lebar);

            echo "<b> Luas & Keliling Persegi Panjang </b> <br>";
            echo "<i> Rumus Luas : Panjang x Lebar </i> <br>";
            echo "<i> Rumus Keliling : 2 x (Panjang + Lebar) </i> <br>";
            echo "Panjang : $panjang <br>";
            echo "Lebar : $lebar <br>";
            echo "Luas : {$this->luas} <br>";
            echo "Keliling : {$this->keliling}";
            echo "<hr>";
        }
    }

    class segitiga extends bangundatar{
        public function LS($alas, $tinggi){
            $this->luas = $alas * $tinggi / 2;
            $this->keliling = 3 * $alas;

            echo "<b>Luas & Keliling Segitiga</b> <br>";
            echo "<i> Rumus Luas : Alas x Tinggi : 2 </i> <br>";
            echo "<i> Rumus Keliling : 3 x Alas </i> <br>";
            echo "Alas : $alas <br>";
            echo "Tinggi : $tinggi <br>";
            echo "Luas : {$this->luas} <br>";
            echo "Keliling : {$this->keliling} <br>";
            echo "<hr>";
        }
    }

    class lingkaran extends bangundatar{
        public function LL($jari, $phi = 3.14){
            $this->luas = $phi * $jari * $jari;
            $this->keliling = 2 * $phi * $jari;

            echo "<b> Luas & Keliling Lingkaran </b> <br>";
            echo "<i> Rumus Luas : 3.14 x Jari x Jari </i> <br>";
            echo "<i> Rumus Keliling : 2 x 3.14 x Jari </i> <br>";
            echo "Jari-jari : $jari <br>";
            echo "Luas : {$this->luas} <br>";
            echo "Keliling : {$this->keliling} <br>";
            echo "<hr>";
        }
    }

    $output1 = new persegi();
    $output2 = new persegipanjang();
    $output3 = new segitiga();
    $output4 = new lingkaran();

    $output1->LP(8);
    $output2->LPP(4,6);
    $output3->LS(10,6);
    $output4->LL(16);

?>