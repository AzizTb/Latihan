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
        <form method="POST" action="">
        
            <tr>
                <td> Masukan Jari-jari </td>
                <td> : </td>
                <td> <input type="number" name="jari"> </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td> <input type="submit" name="buat" value="Buat"> </td>
            </tr>     
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>   
        </form>

        <?php

if(isset($_POST['buat'])){
    $jari=@$_POST['jari'];

    function luasLingkaran($jari, $phi){
        $luas = $phi * $jari * $jari;
        return $luas;
    }

    function kelilingLingkaran($jari, $phi){
        $keliling = 2 * $phi * $jari;
        return $keliling;
    }

    echo "<tr>";
    echo "<td> Luas Lingkaran </td>";
    echo "<td> : </td>";
    echo "<td>" .luasLingkaran($jari, $phi=3.14) ."</td>";
    echo "</tr>";
    
    echo "<tr>";
    echo "<td> Keliling Lingkaran </td>";
    echo "<td> : </td>";
    echo "<td>" .kelilingLingkaran($jari, $phi=3.14) ."</td>";
    echo "</tr>";

}
?>
    </table>
</body>
</html>