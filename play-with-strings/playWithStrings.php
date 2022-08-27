<?php

// ## 1. Let's Form a Sentence
echo "## 1. Let's Form a Sentence\n";

$word = 'PHP';
$second = 'is';
$third = 'awesome';
$fourth = 'and';
$fifth = 'I';
$sixth = 'love';
$seventh = 'it!';

$result = $word . ' ' . $second . ' ' . $third . ' ' . $fourth . ' ' . $fifth . ' ' . $sixth . ' ' . $seventh;

echo $result;
echo "\n\n";

## 2. Index Accessing - 1 by 1
echo "## 2. Index Accessing - 1 by 1\n";

$word2 = 'wow PHP is so cool';
$firstWord = $word2[0] . $word2[1] . $word2[2] . "\n";
$secondWord = $word2[4] . $word2[5] . $word2[6] . "\n";
$thirdWord = $word2[8] . $word2[9] . "\n";
$fourthWord = $word2[11] . $word2[12] . "\n";
$fifthWord = $word2[14] . $word2[15] . $word2[16] . $word2[17] . "\n";

echo 'First Word: ' . $firstWord;
echo 'Second Word: ' . $secondWord;
echo 'Third Word: ' . $thirdWord;
echo 'Fourth Word: ' . $fourthWord;
echo 'Fifth Word: ' . $fifthWord;

echo "\n\n";


## 3. Breaking Sentence (Again) using Substring
echo "## 3. Breaking Sentence (Again) using Substring\n";

$word3 = 'wow PHP is so cool';
$firstWord3 = substr($word3, 0, 3) . "\n";
$secondWord3 = substr($word3, 4, 3) . "\n";
$thirdWord3 = substr($word3, 8, 2) . "\n";
$fourthWord3 = substr($word3, 11, 2) . "\n";
$fifthWord3 = substr($word3, 14, 4) . "\n";

echo 'First Word: ' . $firstWord3;
echo 'Second Word: ' . $secondWord3;
echo 'Third Word: ' . $thirdWord3;
echo 'Fourth Word: ' . $fourthWord3;
echo 'Fifth Word: ' . $fifthWord3;

echo "\n\n";


## 4. Breaking Sentence (yet Again) and Count Each Length
### Problem
echo "## 4. Breaking Sentence (yet Again) and Count Each Length\n";

$word4 = 'wow PHP is so cool';
$firstWord4 = substr($word4, 0, 3);
$secondWord4 = substr($word4, 4, 3);
$thirdWord4 = substr($word4, 8, 2);
$fourthWord4 = substr($word4, 11, 2);
$fifthWord4 = substr($word4, 14, 4);

$firstWordLength = strlen($firstWord4);
$secondWordLength = strlen($secondWord4);
$thirdWordLength = strlen($thirdWord4);
$fourthWordLength = strlen($fourthWord4);
$fifthWordLength = strlen($fifthWord4);
// create new variables around here

echo "First Word: " .  $firstWord4 . ", with length: " .  $firstWordLength . "\n";
echo "Second Word: " .  $secondWord4 . ", with length: " .  $secondWordLength . "\n";
echo "Third Word: " .  $thirdWord4 . ", with length: " .  $thirdWordLength . "\n";
echo "Fourth Word: " .  $fourthWord4 . ", with length: " .  $fourthWordLength . "\n";
echo "Fifth Word: " .  $fifthWord4 . ", with length: " .  $fifthWordLength;
