<!-- Tugas Punya : Eko Muchamad Haryono -->
<!-- TI - 02 -->
<!-- Teknik Informatika -->
<!-- Pemograman Web 2 (PW2) -->

<?php
// Buat array asosiatif nilai
$nilai1 = ["id" => 1, "nim" => "01101", "uts" => 80, "uas" => 84, "tugas" => 78];
$nilai2 = ["id" => 2, "nim" => "01102", "uts" => 90, "uas" => 80, "tugas" => 88];
$nilai3 = ["id" => 3, "nim" => "01103", "uts" => 70, "uas" => 74, "tugas" => 70];
$nilai4 = ["id" => 4, "nim" => "01104", "uts" => 88, "uas" => 95, "tugas" => 80];

// Buat array multidimensi
$kumpulan_nilai = [
    $nilai1, 
    $nilai2, 
    $nilai3, 
    $nilai4
];

?>

<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Tugas Praktikum 1">
        <meta name="author" content="Eko Muchamad Haryono">
        <meta name="keywords" content="HTML, CSS, Bootstrap, PHP, Array, Array Asosiatif, Array Multidimensi">

        <link rel="icon" href="assets/favicon/sttnf.png" type="image/x-icon">

        <!-- Bootstrap Assets/CSS -->

        <link rel="stylesheet" href="assets/css/bootstrap.min.css">

        <title>Tugas Praktikum 1 - Nilai Siswa - Eko Muchamad Haryono</title>

        <style>
            body {
                background-color: #f8f9fa;
            }

            .container {
                margin-top: 50px;
            }

            .table {
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .table thead th {
                background-color: #343a40;
                color: #ffffff;
                border-color: #454d55;
            }

            .table tbody tr:nth-of-type(even) {
                background-color: #f8f9fa;
            }

            .table tbody tr:hover {
                background-color: #e9ecef;
            }
        </style>
    </head>

    <body>
        <div class="container">
            <h1 class="text-center display-4 mb-4">Daftar Nilai Siswa</h1>

            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">NIM</th>
                            <th scope="col">UTS</th>
                            <th scope="col">UAS</th>
                            <th scope="col">Tugas</th>
                            <th scope="col">Nilai Akhir</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($kumpulan_nilai as $nilai): ?>

                        <tr>
                            <?php $nilai_akhir = ($nilai["uts"] + $nilai["uas"] + $nilai["tugas"]) / 3; ?>
                            <td><?= $nilai["id"]?></td>
                            <td><?= $nilai["nim"]?></td>
                            <td><?= $nilai["uts"]?></td>
                            <td><?= $nilai["uas"]?></td>
                            <td><?= $nilai["tugas"]?></td>
                            <td><?= number_format($nilai_akhir, 2, ",", ".")  ?></td>
                        </tr>

                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <script>
            // Menampilkan alert saat halaman dimuat
            window.onload = function () {
                alert("Selamat datang di halaman daftar nilai siswa milik : Eko Muchamad Haryono!");
            };
        </script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
    </body>

</html>

<!-- Tugas Punya : Eko Muchamad Haryono -->
<!-- TI - 02 -->
<!-- Teknik Informatika -->
<!-- Pemograman Web 2 (PW2) -->