<?php 

	// Deklarasi array
	$hewan = ["Kucing", "Kuda", "Kelinci", "Kangguru", "Koala", "Keledai"];
	
	// Cetak isi array
	echo "<b>Array Urutan Ke-2 Sebelum Di Ganti Menjadi Kukang : </b>" . $hewan[2]; // Output: Kelinci Sebelum Di ganti
	echo "<br>";

	// Cetak isi array
	echo "<b>Mencoba Cetak Array Urutan Ke-5 : </b>" . $hewan[5]; // Output: Kedelai
	echo "<br>";

    // Mengganti Array 
    $hewan[2] = "Kukang";

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan Praktikum 1 - Array</title>
</head>
<body>
	<p>Nama-nama Hewan Setelah Di Ganti Lalu di Loop</p>
	<ul>
		<?php
			foreach($hewan as $hewans => $value) {
				echo "<li>". $value. "</li>";
			}
		?>
	</ul>
</body>
</html>