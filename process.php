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
<?php  

	$no_ktp = $_POST['ktp'];
	$nama   = $_POST['nama'];
	$jenis  = $_POST['jenis'];
	$pendidikan = $_POST['pendidikan'];

	$j_member = ['Reguler', 'Premium', 'Executive'];
	$pdd = ['Sekolah Menengah', 'Universitas', 'Umum'];
	$harga = [
		[5000, 8000, 15000],
		[10000, 15000, 20000],
		[15000, 20000, 25000]
	];
	$arrPen = 0;
	$arrJn = 0;
	$diskon =0;

	for($i = 0; $i < count($pdd) ;$i++){
		if($pendidikan == $pdd[$i]){
			$arrPen = $i;
		}
	}

	for($i = 0; $i < count($j_member); $i++){
		if($jenis == $j_member[$i]){
			$arrJn = $i;
		}
	}

	$tarif = $harga[$arrPen][$arrJn];

	// $j_member = ['Reguler', 'Premium', 'Executive'];
	// $pdd = ['Sekolah Menengah', 'Universitas', 'Umum'];
	// $harga = [5000, 8000, 10000, 15000, 20000, 25000];

	// if($jenis == $j_member[0]){
	// 	if($pendidikan == $pdd[0]){
	// 		$tarif = $harga[0];
	// 	}else if($pendidikan == $pdd[1]){
	// 		$tarif = $harga[1];
	// 	}else if($pendidikan == $pdd[2]){
	// 		$tarif = $harga[3];
	// 	}
	// }else if($jenis == $j_member[1]){
	// 	if($pendidikan == $pdd[0]){
	// 		$tarif = $harga[2];
	// 	}else if($pendidikan == $pdd[1]){
	// 		$tarif = $harga[3];
	// 	}else if($pendidikan == $pdd[2]){
	// 		$tarif = $harga[4];
	// 	}
	// }else if($jenis == $j_member[2]){
	// 	if($pendidikan == $pdd[0]){
	// 		$tarif = $harga[3];
	// 	}else if($pendidikan == $pdd[1]){
	// 		$tarif = $harga[4];
	// 	}else if($pendidikan == $pdd[2]){
	// 		$tarif = $harga[5];
	// 	}
	// }

	if($tarif >= $harga[2][1]){
		$diskon = 10/100;
		$diskonText = '10%';
	}else{
		$diskon = 0/100;
		$diskonText = '0%';
	}

	$hasildiskon = $tarif * $diskon;
	$total = $tarif - $hasildiskon;
?>
<body>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h1>BUKTI PENDAFTARAN</h1><br>
				<div class="row">
					<div class="col-4">
						<p>No KTP</p>
					</div>
					<div class="col-8">
						<p><?php echo $no_ktp ?></p>
					</div>
					<div class="col-4">
						<p>Nama</p>
					</div>
					<div class="col-8">
						<p><?php echo $nama ?></p>
					</div>
					<div class="col-4">
						<p>Jenis Member</p>
					</div>
					<div class="col-8">
						<p><?php echo $jenis ?></p>
					</div>
					<div class="col-4">
						<p>Pendidikan</p>
					</div>
					<div class="col-8">
						<p><?php echo $pendidikan ?></p>
					</div>
					<div class="col-12">
						<hr>
					</div>
					<div class="col-4">
						<p>Tarif</p>
					</div>
					<div class="col-8">
						<p><?php echo $tarif ?></p>
					</div>
					<div class="col-4">
						<p>Diskon</p>
					</div>
					<div class="col-8">
						<p><?php echo $diskonText ?></p>
					</div>
					<div class="col-12">
						<hr>
					</div>
					<div class="col-4">
						<p>Total</p>
					</div>
					<div class="col-8">
						<p><?php echo $total ?></p>
					</div>
					<div class="col-8">
					</div>
					<div class="col-4">
						<a href="index.php"><button class="btn btn-primary">Ulangi</button></a>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>


</body>
</html>