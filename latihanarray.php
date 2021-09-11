<?php
    // $nama = ['Palah','Aziz','Aliyul','Adzura','Nabila','Cecep',
    //         'Cindy','Maudy','Diki','Dinda'];
    // $nilai = [10,20,30,40,50,60,70,80,90,100];



    // echo "<table>";
    // echo "<tr> <td></td>";
    // echo "<td> Nilai Produktif Siswa </td></tr>";
    // echo "<tr> <td>" .$nama[0] ."</td>";
    // echo "<td><center> <===> </center></td>";
    // echo "<td>" .$nilai[6] ."</td></tr>";
    // echo "<tr> <td>" .$nama[9] ."</td>";
    // echo "<td><center> <===> </center></td>";
    // echo "<td>" .$nilai[7] ."</td></tr>";
    // echo "<tr> <td>" .$nama[5] ."</td>";
    // echo "<td><center> <===> </center></td>";
    // echo "<td>" .$nilai[8] ."</td></tr>";
    // echo "<tr> <td>" .$nama[7] ."</td>";
    // echo "<td><center> <===> </center></td>";
    // echo "<td>" .$nilai[9] ."</td></tr>";
    // echo "<tr> <td>" .$nama[4] ."</td>";
    // echo "<td><center> <===> </center></td>";
    // echo "<td>" .$nilai[5] ."</td></tr>";

    // echo "Menampilkan Seluruh Data Menggunakan FOREACH <br>";
    // foreach ($nama as $data) {
    //     echo $data ."<br>";
    // }

    $nama = [ 1 => 'Palah',
    2 => 'Aziz', 
    3 => 'Aliyul',
    4 => 'Adzura',
    5 => 'Nabila',
    6 => 'Cecep',
    7 => 'Cindy',
    8 => 'Maudy',
    9 => 'Diki',
    10 => 'Dinda'];


    echo "<table>";
    echo "<tr> <td></td>";
    echo "<td> Nilai Produktif Siswa </td></tr>";
    foreach ($nama as $key => $data) {
        echo "<tr> <td>" .$data ."</td></tr>";
    } echo "</table>";
?>