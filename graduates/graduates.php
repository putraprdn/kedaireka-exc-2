<?php

function graduates($nama, $nilai, $absen)
{
    if ($nilai >= 70 && $absen < 5) { // 70 ke atas dan di bawah 5
        echo "$nama Lulus!";
    } else {
        echo "$nama Tidak Lulus!";
    }
};

graduates("Jack", 80, 3);
