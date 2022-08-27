# Play With Strings

This is the repo for `Play With Strings` exercise.

# String
Soal latihan string ini memiliki 4 nomor. Simpan di 1 file yang sama!

## 1. Let's Form a Sentence
### Problem
Pada tugas ini kamu diminta untuk melakukan penambahan string menggunakan simbol ".". Disediakan variable word. Tambahkan nilai word satu per satu dengan nilai variable lain untuk membentuk sebuah kalimat. Jangan lupa menambahkan spasi di setiap kata, dan tampilkan hasil penggabungannya! Kamu tidak perlu membuat variable baru!

### Skeleton Code
```php
$word = 'PHP';
$second = 'is';
$third = 'awesome';
$fourth = 'and';
$fifth = 'I';
$sixth = 'love';
$seventh = 'it!';
```
### Output
```
PHP is awesome and I love it!
```
## 2. Index Accessing - 1 by 1
### Problem
Pada tugas ini kamu diminta untuk "memecah" sebuah kalimat dan menampilkan setiap kata didalamnya. Untuk soal nomor ini, gunakan akses satu per satu karakter dari string untuk mengambil setiap huruf dalam kata. Terasa manual? Tidak apa-apa, kita coba ini dulu untuk saat ini.

### Hints
Saat kamu mendapatkan tiap huruf, untuk membentuk setiap kata kamu tinggal menggunakan simbol . untuk membentuk kata tersebut!

### Skeleton Code
```php
$word2 = 'wow PHP is so cool';
$exampleFirstWord = $word2[0] . $word2[1] . $word2[2];
$secondWord; // do your own!
$thirdWord; // do your own!
$fourthWord; // do your own!
$fifthWord; // do your own!

echo 'First Word: ' . $exampleFirstWord;
echo 'Second Word: ' . $secondWord;
echo 'Third Word: ' . $thirdWord;
echo 'Fourth Word: ' . $fourthWord;
echo 'Fifth Word: ' . $fifthWord;
```
### Output
```
First Word: wow
Second Word: PHP
Third Word: is
Fourth Word: so
Fifth Word: cool
```
## 3. Breaking Sentence (Again) using Substring
### Problem
Mirip seperti soal nomor 2, namun kali ini gunakan substring untuk mengambil potongan dari tiap kata!

### Skeleton Code
```php
$word3 = 'wow PHP is so cool';
$exampleFirstWord3 = substr($word3, 0, 3);
$secondWord3; // do your own!
$thirdWord3; // do your own!
$fourthWord3; // do your own!
$fifthWord3; // do your own!

echo 'First Word: ' . $exampleFirstWord3;
echo 'Second Word: ' . $secondWord3;
echo 'Third Word: ' . $thirdWord3;
echo 'Fourth Word: ' . $fourthWord3;
echo 'Fifth Word: ' . $fifthWord3;
```
### Output
```
First Word: wow
Second Word: PHP
Third Word: is
Fourth Word: so
Fifth Word: cool
```
## 4. Breaking Sentence (yet Again) and Count Each Length
### Problem
Mirip seperti soal nomor 3, tapi tampilkan juga panjang kata masing-masingnya!

### Skeleton Code
Buatlah variable-variable baru untuk menyimpan panjang string, dan ubah console dibawah untuk menampilkan nya.
```php
$word4 = 'wow PHP is so cool';
$exampleFirstWord4 = substr($word4, 0, 3);
$secondWord4; // do your own!
$thirdWord4; // do your own!
$fourthWord4; // do your own!
$fifthWord4; // do your own!

$firstWordLength = strlen($exampleFirstWord4);
// create new variables around here

echo "First Word: ".  $exampleFirstWord4 . ", with length: ".  $firstWordLength;
echo "Second Word: ".  $secondWord4;
echo "Third Word: ".  $thirdWord4;
echo "Fourth Word: ".  $fourthWord4;
echo "Fifth Word: ".  $fifthWord4;
```
### Output
```
First Word: wow, with length: 3
Second Word: PHP, with length: 3
Third Word: is, with length: 2
Fourth Word: so, with length: 2
Fifth Word: cool, with length: 4
```
