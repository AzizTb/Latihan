<?php

    echo "<center>";

    echo "<h3>Nilai Ujian Kelas 12 RPL</h3>";


    echo "<table border=1> ";
    echo "<tr>";
    echo "<th>Nama</th>";
    echo "<th>Matematika</th>";
    echo "<th>B. Inggris</th>";
    echo "<th>B. Indonesia</th>";
    echo "<th>Kejuruan</th>";
    echo "<th>Rata-rata</th>";
    echo "<th>Status</th>";
    echo "<th>Grade</th>";
    echo "</tr>";

    function data($nama,$mtk,$inggris,$indo,$juru){
        $rata = ($mtk + $indo + $inggris + $juru) / 4;

        echo "<tr>";
        echo "<td> {$nama} </td>";
        echo "<td> {$mtk} </td>";
        echo "<td> {$inggris} </td>";
        echo "<td> {$indo} </td>";
        echo "<td> {$juru} </td>";
        echo "<td> {$rata} </td>";

        if ($rata >= 75) {
            echo "<td> Lulus </td>";
        } else {
            echo "<td> Tidak Lulus </td>";
        }
        
        if ($rata >= 90 && $rata <= 100 ) {
            echo "<td>A</td>";
        } else if ($rata >= 80 && $rata <= 89 ) {
            echo "<td>B</td>";
        } else if ($rata >= 70 && $rata <= 79 ) {
            echo "<td>C</td>";
        } else if ($rata >= 50 && $rata <= 69 ) {
            echo "<td>D</td>";
        } else if ($rata >= 0 && $rata <= 49 ) {
            echo "<td>E</td>";
        } else {
            echo "<td>Astagfirulloh</td>";
        }

        echo "</tr>";
    }

    data("Ujang",90,80,70,80);
    data("RaphLust",95,85,45,40);
    data("Beelzebul",100,100,100,100);

    echo "</table>";
    echo "</center";

?>