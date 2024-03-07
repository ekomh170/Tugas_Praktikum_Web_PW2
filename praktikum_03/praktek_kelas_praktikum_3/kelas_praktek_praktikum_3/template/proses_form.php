<?php

// POST nim,  nama, jenis kelamin, program studi, keahlian, domisili, email

$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$program_studi = $_POST['program_studi'];
$keahlian = $_POST['keahlian'];
$domisili = $_POST['domisi'];
$email = $_POST['email'];

// Buat Tampilan Selamat Datang di IT Club Data Science


?>

<h1>Terima Kasih Sudah Mendaftar di IT Club Data Science <br></h1>
<h5>Nama Lengkap : <?php echo $nama; ?></h5>
<h5>NIM : <?php echo $nim; ?></h5>
<h5>Jenis Kelamin : <?php echo $jenis_kelamin; ?></h5>
<h5>Program Studi : <?php echo $program_studi; ?></h5>
<h5>Keahlian : <?php echo $keahlian; ?></h5>
<h5>Domisili : <?php echo $domisili; ?></h5>
<h5>Email : <?php echo $email; ?></h5>

