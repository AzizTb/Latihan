<?php

    $nilai = -8;

        if ($nilai >= 90 && $nilai <=100 ){
            echo "GRADE MITIK";
        } 
        else if ($nilai >= 80 && $nilai < 90) {
            echo "GRADE LEGEN";
        }
        else if ($nilai >= 70 && $nilai < 80) {
            echo "GRADE EPIG";
        }
        else if ($nilai >= 60 && $nilai < 70) {
            echo "GRADE GE'EM";
        }
        else if ($nilai >= 0 && $nilai < 60) {
            echo "GRADE MASTER";
        }
        else {
            echo "KACAU GEMINK !";
        }

?>