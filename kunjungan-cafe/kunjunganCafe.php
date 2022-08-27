<?php

function  kunjunganCafe($name, $age, $money)
{
    $minuman = new stdClass;
    $minuman->juice = 'juice';
    $minuman->anggur = 'anggur';

    // echo print_r($minuman);

    if (!$name) {
        echo "Mr. Misterious tidak boleh masuk!";
    } elseif ($age < 17) {
        $minuman = $minuman->juice;
        $price = 50000;
        if ($money > $price) {
            echo 'Minumnya akan segera diantar ya. Ini kembaliannya Rp. ' . $money - $price . ' kakk..';
        } elseif ($money === $price) {
            echo "Uangnya pas ya kakk";
        } else {
            echo "Uangnya kurang kocak. Pulang aja dek.";
        }
    } elseif ($age >= 17) {
        $minuman = $minuman->anggur;
        $price = 300000;
        if ($money > $price) {
            echo 'Minumnya akan segera diantar ya. Ini kembaliannya Rp. ' . $money - $price . ' kakk..';
        } elseif ($money === $price) {
            echo "Uangnya pas ya kakk";
        } else {
            echo "Uangnya kurang kocak. Pulang aja dek.";
        }
    }
}

kunjunganCafe("Eko", 12, 50000);
