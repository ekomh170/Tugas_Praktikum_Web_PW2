<?php

// Mendeklarasikan variabel
$nama = "Eko Muchamad Haryono";
$jurusan = "Teknik Informatika";
$semester = 2;
$sudahLulus = false;

// Konversi nilai boolean menjadi teks yang sesuai
$statusLulus = $sudahLulus ? "Ya" : "Belum";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Praktikum 1 - Variable</title>
</head>
<body>
    <h2><?= $nama ?></h2> 
    <p>Hai Nama Saya : <?= $nama ?></p>
    <p>Saya Kulian di Jurusan : <?= $jurusan ?></p>
    <p>Saat Ini Saya Berada di Semester : <?= $semester ?></p>
    <p>Apakah Sudah Lulus : <?= $statusLulus ?></p>
</body>
</html>