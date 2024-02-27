<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

	<title>Form Nilai</title>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-12">
				<form method="POST" action="submit.php">
					<h1>Form Nilai Siswa</h1>
					<hr>
					<div class="form-group row">
						<label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
						</div>
					</div>
					<div class="form-group row">
						<label for="matkul" class="col-sm-2 col-form-label">Mata Kuliah</label>
						<div class="col-sm-10">
							<select class="form-control" name="matkul" id="matkul">
								<option value="Dasar-dasar Pemrograman">Dasar-dasar Pemrograman</option>
								<option value="Pemrograman Web">Pemrograman Web</option>
								<option value="Sistem Operasi">Sistem Operasi</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 col-form-label">Nilai UTS</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="text" placeholder="Nilai UTS" name="nilai_uts">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 col-form-label">Nilai UAS</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="text" placeholder="Nilai UAS" name="nilai_uas">
						</div>
					</div>
					<div class="form-group row">
						<label for="inputPassword" class="col-sm-2 col-form-label" name="nilai_tugas">Nilai Tugas</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="text" placeholder="Nilai Tugas" name="nilai_tugas">
						</div>
					</div>
					<div class="form-group row">
						<div class="offset-2">
							<div class="col-sm-12">
								<button type="submit" class="btn btn-danger" name="batal">Batal</button>
								<button type="submit" class="btn btn-primary" name="kirim">Kirim</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Optional JavaScript; choose one of the two! -->

	<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
	<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>