<?php

include 'database/koneksidb.php';

$id = $_GET['id'];

$query = "DELETE FROM menu WHERE kd_menu = '$id'";

$delete = mysqli_query($conn, $query);
if (!$delete) {
	echo "<b>Hapus Data Gagal</b>";
} else {
	echo "<script type='text/javascript'>
        setTimeout(function (){
          Swal.fire({
              icon: 'success',
              title: 'success',
              text: 'Berhasil hapus data menu!',
              showConfirmButton: true,
              timer: 3200
            });
        },10);
        window.setTimeout(function(){
          window.location.replace('tambahmenu.php');
      } ,3000);
        </script>";
}

?>
<html>

<head>
	<!-- css swalert2 -->
	<link rel="stylesheet" href="swalert2/sweetalert2.min.css">
	<link rel="stylesheet" href="swalert2/animate.min.css">
	<!-- end -->
	<!-- scrip swalert 2 -->
	<script src="swalert2/sweetalert2.min.js"></script>
	<!-- end -->
</head>

</html>