<?php 

$total_nilai = 90;
// Buat variabel status
$status;

if ($total_nilai >= 55){
	$status = "Lulus";
}else{
	$status = "Tidak Lulus";
}

echo $status . "<br>";

// Buat variabel grade
$grade;

if ($total_nilai >= 85) {
	$grade = "A";
}elseif($total_nilai >= 70) {
	$grade = "B";
}elseif($total_nilai >= 56) {
	$grade = "C";
}elseif($total_nilai >= 36) {
	$grade = "D";
}else{
	$grade = "E";
}

echo $grade;

?>