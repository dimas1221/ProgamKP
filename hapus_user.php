<?php

include 'database/koneksidb.php';

$id = $_GET['id'];

$query = "DELETE FROM users WHERE id_user = '$id'";

$delete = mysqli_query($conn, $query);
if (!$delete) {
    echo "<b>Hapus Data Gagal</b>";
} else {
    header("location: tampil_user.php");
}


?>
<br>
<a href="tampil_user.php">BACK</a>