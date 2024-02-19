<?php 

    // Deklarasi array associative mahasiswa
	$mahasiswa= [
        "Nama"=>"Eko Muchamad Haryono", 
        "Alamat" => "Citeureup, Bogor",
        "Prodi"=>"Teknik Informatika", 
        "Semester"=>"2",
        "Sudah Lulus"=>false

    ];

    // Konversi nilai boolean menjadi teks yang sesuai
    $statusLulus = $mahasiswa["Sudah Lulus"] ? "Ya" : "Belum";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan Praktikum 1 - Array Associative</title>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>

</head>
<body>
    <table>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Prodi</th>
            <th>Semester</th>
            <th>Sudah Lulus</th>
        </tr>
            <tr>
                <td><?= $mahasiswa["Nama"] ?></td>
                <td><?= $mahasiswa["Alamat"] ?></td>
                <td><?= $mahasiswa["Prodi"] ?></td>
                <td><?= $mahasiswa["Semester"] ?></td>
                <td><?= $statusLulus ?></td>
            </tr>
    </table>
</body>
</html>