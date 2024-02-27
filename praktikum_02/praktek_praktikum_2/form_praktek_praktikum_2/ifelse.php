<!-- Font Jetbrains Mono -->

<?php

$nilai = 90;
$kenterangan = "";

if($nilai > 90){
    $keterangan = "Sangat Baik";
} elseif($nilai >= 70 || $nilai <= 90) {
    $keterangan = "Lumayan Baik";
} else {
    $keterangan = "Oke dah";
}

echo "<h1>$keterangan</h1>";


?>