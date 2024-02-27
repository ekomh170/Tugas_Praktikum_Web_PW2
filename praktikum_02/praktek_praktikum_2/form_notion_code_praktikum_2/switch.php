<?php 

$grade = "B";
$predikat;

switch ($grade) {
	case 'A':
		$predikat="Sangat Memuaskan";
		break;
	case "B":
		$predikat="Memuaskan";
		break;
	case "C":
		$predikat="Cukup";
		break;
	case "D":
		$predikat="Kurang";
		break;
	case "E":
		$predikat="Sangat Kurang";
		break;
	default:
		$predikat="Tidak Ada";
		break;
}

echo $predikat;

?>