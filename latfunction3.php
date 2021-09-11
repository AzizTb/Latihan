<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIODATA</title>
</head>
<body>
    
    <form method="POST" action="">
    <h2>Form Biodata Diri</h2>

    <table>
    
    <tr>
    <td>Nama </td>
    <td> : </td>
    <td><input type="text" name="nama"></td>
    </tr>

    <tr>
    <td>Jenis Kelamin </td>
    <td> : </td>
    <td>
        <input type="radio" name="jenis" value="Laki-laki"> Laki-laki
        <input type="radio" name="jenis" value="Perempuan"> Perempuan
        <input type="radio" name="jenis" value="Transgender"> Transgender
    </td>
    </tr>

    <tr>
    <td>Tanggal Lahir </td>
    <td> : </td>
    <td><input type="date" name="tgl"></textarea></td>
    </tr>

    <tr>
    <td>Agama </td>
    <td> : </td>
    <td> 
        <select name="agama" value="agama">
            <option value="Tidak Ada">Tidak Ada</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Buddha">Buddha</option>
            <option value="Konghucu">Konghucu</option>
            <option value="Indomie">Indomie</option>
            <option value="Atheis">Atheis</option>
            <option value="Satanist">Satanist</option>
        </select>
    </td>
    </tr>

    <tr>
    <td>Alamat </td>
    <td> : </td>
    <td><textarea name="alamat" value="Alamat"></textarea></td>
    </tr>

    <tr>
    <td>Hobi </td>
    <td> : </td>
    <td>
        <input type="checkbox" name="hobi[]" value="Ngoding">Ngoding
        <input type="checkbox" name="hobi[]" value="Membaca">Membaca
        <input type="checkbox" name="hobi[]" value="Traveling">Traveling
        <input type="checkbox" name="hobi[]" value="Main Game">Main Game
        <input type="checkbox" name="hobi[]" value="Menonton Film">Menonton Film
        <input type="checkbox" name="hobi[]" value="Memasak">Memasak
        <input type="checkbox" name="hobi[]" value="Rebahan">Rebahan
        <input type="checkbox" name="hobi[]" value="Ngemil">Ngemil
    </td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td><input type="submit" name="kirim" value="kirim"></td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>

    <?php
    
    if (isset($_POST['kirim'])) {
        $nama = $_POST["nama"];
        $tgl = $_POST["tgl"];
        $jenis = $_POST["jenis"];
        $alamat = $_POST["alamat"];
        $agama = $_POST["agama"];
        $hobi = $_POST["hobi"];

                
        function Data ($nama, $tgl, $jenis, $alamat, $agama) {
            echo "<tr>";
            echo "<td> Nama </td>";
            echo "<td> : </td>";
            echo "<td> {$nama} </td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td> Jenis Kelamin </td>";
            echo "<td> : </td>";
            echo "<td> {$jenis} </td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td> Tanggal Lahir </td>";
            echo "<td> : </td>";
            echo "<td> {$tgl} </td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td> Agama </td>";
            echo "<td> : </td>";
            echo "<td> {$agama} </td>";
            echo "</tr>";

            echo "<tr>";
            echo "<td> Alamat </td>";
            echo "<td> : </td>";
            echo "<td> {$alamat} </td>";
            echo "</tr>";

        }

        function Hobi($hobi){
            echo "<tr>";
            echo "<td> Hobi </td>";
            echo "<td> : </td>";
            echo "<td>";

            for ($i=0; $i < count($hobi); $i++) { 
                echo $hobi[$i] .", " ;
            }
            echo "</td>";
            echo "</tr>";
        }
        
        echo Data($nama, $tgl, $jenis, $alamat, $agama);
        echo Hobi($hobi);


    }

    ?>

    </table>

    </form>

</body>
</html>