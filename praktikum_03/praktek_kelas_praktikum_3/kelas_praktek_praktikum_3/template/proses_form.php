<?php

// POST nim,  nama, jenis kelamin, program studi, keahlian, domisili, email
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$program_studi = $_POST['program_studi'];

// Array Keahlian HTML CSS JAVASCRIPT PYTHON RWD BOOTSTRAP LAINNYA
$keahlianArray = ["HTML", "CSS", "JAVASCRIPT", "PYTHON", "RWD", "BOOTSTRAP", "LAINNYA"];

// Memastikan bahwa $_POST['keahlian'] merupakan sebuah array
$keahlian = isset($_POST['keahlian']) ? $_POST['keahlian'] : [];

$domisili = $_POST['domisi'];
$email = $_POST['email'];

?>

<h1>Terima Kasih Sudah Mendaftar di IT Club Data Science <br></h1>
<h5>Nama Lengkap : <?= $nama; ?></h5>
<h5>NIM : <?= $nim; ?></h5>
<h5>Jenis Kelamin : <?= $jenis_kelamin; ?></h5>
<h5>Program Studi : <?= $program_studi; ?></h5>

<h5>Keahlian :
    <?php $counter = count($keahlian); // Hitung jumlah keahlian yang dipilih ?>
    <?php foreach ($keahlianArray as $index => $keahlianItem) : ?>
        <?php if (in_array($keahlianItem, $keahlian)) : ?>
            <?= $keahlianItem; ?>
            <?php // Tambahkan koma jika tidak mencapai keahlian terakhir ?>
            <?php if ($index < $counter - 1) : ?> 
                <?php echo ", "; ?>
            <?php endif; ?>
        <?php endif; ?>
    <?php endforeach; ?>
</h5>



<h5>Domisili : <?= $domisili; ?></h5>
<h5>Email : <?= $email; ?></h5>