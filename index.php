<!DOCTYPE html>
<html>
<head>
	<title>PENDAFTARAN</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h3>PENDAFTARAN ANGGOTA PERPUSTAKAAN</h3>
				<form action="process.php" method="post">
					<div class="form-group">
			      		<label>No KTP</label>
						<input class="form-control" type='text' name='ktp' placeholder="Masukkan Nomor KTP" required/>
					</div>
					<div class="form-group">
						<label>Nama</label>
						<input class="form-control" type="text" name="nama" placeholder="Masukkan Nama" required /><br>
					</div>
					<div class="form-group">
						<label>Jenis Member</label>
						<select  class="form-control" name="jenis">
						<option value='Reguler'>Reguler</option>
						<option value="Premium">Premium</option>
						<option value="Executive">Executive</option>
						</select>
					</div>
					<div class="form-group">
						<label>Pendidikan</label><br>
						<div class="form-check">
							<input class="form-check-input" name="pendidikan" type="radio" value="Sekolah Menengah" id="defaultCheck" checked>
							<label class="form-check-label" for="defaultCheck">
							Sekolah Menengah
							</label><br>
							<input class="form-check-input" name="pendidikan" type="radio" value="Universitas" id="defaultCheck1">
							<label class="form-check-label" for="defaultCheck1">
							Universitas dan sederajat
							</label><br>
							<input class="form-check-input" name="pendidikan" type="radio" value="Umum" id="defaultCheck2">
							<label class="form-check-label" for="defaultCheck2">
							Umum
							</label>
						</div>
					</div>
					 
					<button class="btn btn-primary" type="submit">SIMPAN</button>
					<button class="btn btn-danger" type="reset">RESET</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>