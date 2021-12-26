<?php
include 'database/koneksidb.php';
//input data
$simpan_id_pemesan = isset($_POST['simpan_id_pemesan']) ? $_POST['simpan_id_pemesan'] : '';
$simpan_kd_menu = $_POST['simpan_kd_menu'];
$simpan_jumlah = $_POST['simpan_jumlah'];

//query memasukan data ke database
$query5 = "INSERT INTO pesanan (id_pemesan,kd_menu,jumlah)
    VALUES ('$simpan_id_pemesan','$simpan_kd_menu','$simpan_jumlah')";

//Function untuk memasukan data input ke database
$hasil = mysqli_query($conn, $query5);

//Pengecheckan input data
if ($hasil) {
    header("location: pesanan.php");
} else {
    echo "<b>Gagal Menambahkan data</b>";
}
