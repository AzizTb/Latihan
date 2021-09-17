<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form action="" method="POST">
            <tr>
                <td> <input type="text" name="angka1"> </td>
                <td> 
                    <select name="opsi" value="opsi">
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="x">x</option>
                        <option value="/">/</option>
                    </select>
                </td>
                <td> <input type="text" name="angka2"> </td>
                <td> = </td>
                <td> <input type="submit" name="proses" value="Hitung"> </td>
            </tr>
        </form>
    </table>
</body>
</html>

<?php

    if(isset($_POST['proses'])) {
        $angka1 = @$_POST["angka1"];
        $opsi = @$_POST["opsi"];
        $angka2 = @$_POST["angka2"];

        class kalkulator {
            public $x;
            public $y;
            public $z;
            public $hasil;

            public function tambah($angka1, $opsi, $angka2) {
                $this->x = $angka1;
                $this->y = $opsi;
                $this->z = $angka2;
                $this->hasil1 = $angka1 + $angka2;
            }
            public function kurang($angka1, $opsi, $angka2) {
                $this->x = $angka1;
                $this->y = $opsi;
                $this->z = $angka2;
                $this->hasil2 = $angka1 - $angka2;
            }
            public function kali($angka1, $opsi, $angka2) {
                $this->x = $angka1;
                $this->y = $opsi;
                $this->z = $angka2;
                $this->hasil3 = $angka1 * $angka2;
            }
            public function bagi($angka1, $opsi, $angka2) {
                $this->x = $angka1;
                $this->y = $opsi;
                $this->z = $angka2;
                $this->hasil4 = $angka1 / $angka2;
            }
        }        
        $data = new kalkulator();
        
        $data->tambah($angka1, $opsi, $angka2);
        $data->kurang($angka1, $opsi, $angka2);
        $data->kali($angka1, $opsi, $angka2);
        $data->bagi($angka1, $opsi, $angka2);

        echo $data->x ." ";
        echo $data->y ." ";
        echo $data->z ." ";
        echo " = ";
        if ($data->y == "+" ) {
            echo $data->hasil1;
        } else if ($data->y == "-" ) {
            echo $data->hasil2;
        } else if ($data->y == "x" ) {
            echo $data->hasil3;
        } else if ($data->y == "/" ) {
            echo $data->hasil4;
        }
        
    }

?>