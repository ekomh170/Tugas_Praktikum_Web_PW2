<?php

// POST nim,  nama, jenis kelamin, program studi, keahlian, domisili, email
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$program_studi = $_POST['program_studi'];

// Array Keahlian HTML CSS JAVASCRIPT PYTHON RWD BOOTSTRAP LAINNYA
$keahlianArray = array(
    array("nama" => "HTML", "poin" => 10),
    array("nama" => "CSS", "poin" => 8),
    array("nama" => "JAVASCRIPT", "poin" => 9),
    array("nama" => "PYTHON", "poin" => 7),
    array("nama" => "RWD", "poin" => 8),
    array("nama" => "BOOTSTRAP", "poin" => 7),
    array("nama" => "LAINNYA", "poin" => 6)
);

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
        <?php foreach ($keahlian as $selectedKeahlian) : ?>
            <?php if ($keahlianItem['nama'] == $selectedKeahlian) : ?>
                <?= $keahlianItem['nama']; ?>
                <?php // Tambahkan koma jika tidak mencapai keahlian terakhir ?>
                <?php if ($index < $counter - 1) : ?> 
                    <?php echo ", "; ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
</h5>

<h5>Point Keahlian : 
    <?php $totalPoin = 0; ?>
    <?php foreach ($keahlianArray as $keahlianItem) : ?>
        <?php foreach ($keahlian as $selectedKeahlian) : ?>
            <?php if ($keahlianItem['nama'] == $selectedKeahlian) : ?>
                <?php $totalPoin += $keahlianItem['poin']; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    <?php endforeach; ?>
    <?= $totalPoin; ?>
</h5>

<h5>Domisili : <?= $domisili; ?></h5>
<h5>Email : <?= $email; ?></h5>