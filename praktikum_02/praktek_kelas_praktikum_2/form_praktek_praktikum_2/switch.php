<?php

$grade = "A";

$keterangan = "";

switch ($grade) {
    case "A":
        $keterangan = "Sangat Memuaskan";
        break;
    case "B":
        $keterangan = "Memuaskan";
        break;
    case "C":
        $keterangan = "Kurang Memuaskan";
        break;
    case "D":
        $keterangan = "Tidak Memuaskan";
        break;
    default;
        $keterangan = "Tidak Lulus";
        break;
}

echo "<h1>$keterangan</h1>";

?>