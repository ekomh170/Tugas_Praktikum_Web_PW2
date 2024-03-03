<?php 
// Tangkap hasil inputan
$proses=$_POST["kirim"];
$nama_mahasiswa=$_POST["nama"];
$mata_kuliah=$_POST["matkul"];
$nilai_uts=$_POST["nilai_uts"];
$nilai_uas=$_POST["nilai_uas"];
$nilai_tugas=$_POST["nilai_tugas"];

$total_nilai=($nilai_uts+$nilai_uas+$nilai_tugas)/3;
$grade;
$status;
$predikat;

// Buat Logic status
if ($total_nilai >= 55){
	$status="Lulus";
}else{
	$status="Tidak Lulus";
}

// Buat logic grade
if ($total_nilai >= 85 && $total_nilai <= 100){
	$grade="A";
}elseif($total_nilai >= 70 && $total_nilai < 85){
	$grade="B";
}elseif($total_nilai >= 56 && $total_nilai < 70){
	$grade="C";
}elseif($total_nilai >= 36 && $total_nilai < 56){
	$grade="D";
}elseif ($total_nilai >= 0 && $total_nilai < 36){
	$grade="E";
}else{
	$grade="I";
}

// Buat logic predikat
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
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Nilai Siswa</title>
  </head>
  <body>
  <div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h1>Daftar Nilai Mahasiswa</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<a href="form_nilai.php" class="btn btn-primary mb-2" name="kirim"><- Kembali</a>
			<table class="table table-dark">
			  <thead>
			    <tr>
			      <th scope="col">Nama</th>
			      <th scope="col">Mata Kuliah</th>
			      <th scope="col">Nilai UTS</th>
			      <th scope="col">Nilai UAS</th>
			      <th scope="col">Nilai Tugas</th>
			      <th scope="col">Grade</th>
			      <th scope="col">Predikat</th>
			      <th scope="col">Status</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr>
			      <td><?= $nama_mahasiswa; ?></td>
			      <td><?= $mata_kuliah; ?></td>
			      <td><?= $nilai_uts; ?></td>
			      <td><?= $nilai_uas; ?></td>
			      <td><?= $nilai_tugas; ?></td>
			      <td><?= $grade; ?></td>
			      <td><?= $predikat; ?></td>
			      <td><?= $status; ?></td>
			    </tr>
			  </tbody>
			</table>
		</div>
	</div>
</div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

  </body>
</html>