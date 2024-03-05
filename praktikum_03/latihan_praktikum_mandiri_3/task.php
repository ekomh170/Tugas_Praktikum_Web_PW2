<?php

echo "<h3>Soal No 1 Looping I Love PHP</h3>";
/* 
Soal No 1 
Looping I Love PHP
Lakukan Perulangan (boleh for/while/do while) sebanyak 20 iterasi. Looping terbagi menjadi dua: Looping yang pertama Ascending (meningkat) 
dan Looping yang ke dua menurun (Descending). 

Output: 
LOOPING PERTAMA
            2 - I Love PHP
            4 - I Love PHP
            6 - I Love PHP
            8 - I Love PHP
            10 - I Love PHP
            12 - I Love PHP
            14 - I Love PHP
            16 - I Love PHP
            18 - I Love PHP
            20- I Love PHP
LOOPING KEDUA
            20 - I Love PHP
            18 - I Love PHP
            16 - I Love PHP
            14 - I Love PHP
            12 - I Love PHP
            10 - I Love PHP
            8 - I Love PHP
            6 - I Love PHP
            4 - I Love PHP
            2 - I Love PHP
*/

echo "Output: <br> <br>LOOPING PERTAMA: <br>";
// Lakukan Looping Pertama Di Sini
for ($i = 2; $i <= 20; $i += 2) {
    echo "$i - I Love PHP <br>";
}

echo "<br>LOOPING KEDUA: <br>";
// Lakukan Looping Kedua Di Sini
for ($i = 20; $i >= 2; $i -= 2) {
    echo "$i - I Love PHP <br>";
}

echo "<h3>Soal No 2 Function Tentukan Nilai</h3>";
/*
Soal 2
buatlah sebuah function bernama tentukan_nilai . Di dalam function tentukan_nilai yang menerima parameter 
berupa integer. dengan ketentuan jika paramater integer lebih besar dari sama dengan 85 dan lebih kecil sama dengan 100 maka akan mereturn String “Sangat Baik” 
Selain itu jika parameter integer lebih besar sama dengan 70 dan lebih kecil dari 85 maka akan mereturn string “Baik” selain itu jika parameter number lebih besar 
sama dengan 60 dan lebih kecil dari 70 maka akan mereturn string “Cukup” selain itu maka akan mereturn string “Kurang”
*/

// Code function di sini
function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup";
    } else {
        return "Kurang";
    }
}

// Hapus komentar di bawah ini untuk jalankan code
echo tentukan_nilai(98) . "<br>"; //Sangat Baik
echo tentukan_nilai(76) . "<br>"; //Baik
echo tentukan_nilai(67) . "<br>"; //Cukup
echo tentukan_nilai(43) . "<br>"; //Kurang

?>
