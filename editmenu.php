<?php
include 'database/koneksidb.php';

$id = $_GET['id'];

$query = "SELECT * FROM menu WHERE kd_menu='$id'"; // WHERE dari AI Id_mahasiswa yang ada didatabase kita

$tampil = mysqli_query($conn, $query);

$query3 = "SELECT * FROM jenis_menu";
$call3 = mysqli_query($conn, $query3);

$query4 = "SELECT * FROM jenis_produk";
$call4 = mysqli_query($conn, $query4);

if (isset($_POST['simpan'])) {
	$id = $_POST['id'];
	$nama_menu = $_POST['nama_menu'];
	$kd_jenis_menu = $_POST['kd_jenis_menu'];
	$kd_jenis_produk = $_POST['kd_jenis_produk'];
	$harga = $_POST['harga'];

	//Query edit data
	$query2 = "UPDATE menu SET
	 kd_menu='$id',
	 nama_menu='$nama_menu',
	 kd_jenis_menu='$kd_jenis_menu',
	 kd_jenis_produk='$kd_jenis_produk'
	 WHERE kd_menu = '$id'";

	$ubah = mysqli_query($conn, $query2);

	if (!$ubah) {
		echo "<b>Data Gagal Diubah</b>";
	} else {
		echo "<b>Data Berhasil Diubah</b>";
	}
}
?>
<!DOCTYPE html>
<html>

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->
	<title>Data's Edit</title>
</head>

<body>
	<!-- awal navbar -->
	<nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top" style="background-image: url('images/bg-01.jpg');">
		<a class="navbar-brand" href="#">
			<div class="txt1 text-center ">
				<h2 style="color: black;"><strong>PB</strong></h2>
				<h6 style="color: ghostwhite;">Pondok Putri Bumi</h6>
			</div></b>
		</a>

		<form class="form-inline my-2 my-lg-0 ml-auto">

		</form>

		<div class="icon ml-4">
			<h5>
				<a href="tambahmenu.php" class="btn btn-outline-info">BACK</a>
			</h5>
		</div>
		</div>
	</nav>
	<!-- akhir navbar -->
	<?php while ($show = mysqli_fetch_array($tampil)) { ?>
		<table class="table table-bordered mt-5">
			<tr>
				<td>
					<form method="post">
						<label for="">nama menu</label>
						<input type="hidden" name="id" value="<?= $show['kd_menu'] ?>">
						<div class="input-group mb-3">
							<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="nama_menu" value="<?= $show['nama_menu'] ?>">
						</div>
						<label for="">jenis menu:</label>
						<div class="input-group mb-3">
							<select class="custom-select" id="inputGroupSelect02" name="kd_jenis_menu">
								<option>pilih</option>
								<?php foreach ($call3 as $data) : ?>
									<option value="<?= $data['kd_jenis_menu']; ?>"><?= $data['jenis_menu']; ?></option>
								<?php endforeach; ?>
							</select>
							<div class="input-group-append">
								<label class="input-group-text" for="inputGroupSelect02">Options</label>
							</div>
						</div>
						<label for="">jenis produk</label>
						<div class="input-group mb-3">
							<select class="custom-select" id="inputGroupSelect02" name="kd_jenis_produk">
								<option>pilih</option>
								<?php foreach ($call4 as $data1) : ?>
									<option value="<?= $data1['kd_jenis_produk']; ?>"><?= $data1['nama_produk']; ?></option>
								<?php endforeach; ?>
							</select>
							<div class="input-group-append">
								<label class="input-group-text" for="inputGroupSelect02">Options</label>
							</div>
						</div>
						<label for="">harga :</label>
						<div class="input-group mb-3">
							<input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="harga" value="<?= $show['harga'] ?>">
						</div>

						<button name="simpan" class="btn btn-success">SAVE</button>
					</form>
				</td>
			</tr>
		</table>


	<?php } ?>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script type="text/javascript" src="admin.js"></script>

</body>

</html>