<?php

function gachaTeros()
{
    $luckyNumber = rand(1, 5);

    switch ($luckyNumber) {
        case 1:
            echo "Yahh, maaf ya kamu belum beruntung.. Silakan coba lagi yaa ;)";
            break;
        case 2:
            echo "Selamaaat! Anda mendapatkan 5 kupon.";
            break;
        case 3:
            echo "Wahh kamu mendapatkan 15 kupon niih!";
            break;
        case 4:
            echo "Yeyy! Kamu mendapatkan 50 kupon!!!";
            break;
        case 5:
            echo "WOW! Kamu menang jackpot!! Selamat yaaa! :D";
            break;
        default:
            break;
    }
};

gachaTeros();
