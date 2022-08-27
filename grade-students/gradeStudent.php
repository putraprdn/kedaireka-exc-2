<?php

function gradeStudent($nama, $nilai)
{
    if ($nilai < 0 || $nilai > 100) {
        echo "Nilai invalid. Silakan coba lagi.";
    } elseif ($nilai <= 34) {
        echo "Nama: $nama\nNilai: E";
    } elseif ($nilai <= 49) {
        echo "Nama: $nama\nNilai: D";
    } elseif ($nilai <= 64) {
        echo "Nama: $nama\nNilai: C";
    } elseif ($nilai <= 79) {
        echo "Nama: $nama\nNilai: B";
    } elseif ($nilai <= 100) {
        echo "Nama: $nama\nNilai: A";
    } else {
        echo "Kocak";
    }
}

gradeStudent("BUDI", "awd");
