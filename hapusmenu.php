<?php

include 'database/koneksidb.php';

$id = $_GET['id'];

$query = "DELETE FROM menu WHERE kd_menu = '$id'";

$delete = mysqli_query($conn, $query);
if (!$delete) {
	echo "<b>Hapus Data Gagal</b>";
} else {
	header("location: tambahmenu.php");
}


?>
<br>
<a href="tambahmenu.php">BACK</a>