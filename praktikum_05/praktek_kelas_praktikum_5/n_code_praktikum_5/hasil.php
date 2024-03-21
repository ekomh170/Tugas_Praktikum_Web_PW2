<?php
        if (isset($_POST["submit"])) {
            require_once "class.php";

            // Set nilai properti pada objek dari nilai yang diisi pada form
            $nama = $_POST["nama"];
            $berat = $_POST["berat"];
            $tinggi = $_POST["tinggi"];
            $umur = $_POST["umur"];
            $jk = $_POST["jk"];

						// Buat objek baru dari class bmiPasien
            $pasien = new bmiPasien($nama, $berat, $tinggi, $umur, $jk);

            echo "<h2>Hasil BMI Pasien</h2>";
            echo "<p>Nama: " . $pasien->nama . "</p>";
            echo "<p>Berat: " . $pasien->berat . " kg</p>";
            echo "<p>Tinggi: " . $pasien->tinggi . " cm</p>";
            echo "<p>Umur: " . $pasien->umur . " tahun</p>";
            echo "<p>Jenis Kelamin: " . $pasien->jk . "</p>";
            echo "<p>Hasil BMI: " . $pasien->hasilBMI() . "</p>";
            echo "<p>Status BMI: " . $pasien->statusBMI() . "</p>";
        }

        ?>