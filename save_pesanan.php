<?php
include 'database/koneksidb.php';

$a = $_POST['kd_menu'];
$b = $_POST['jumlah_menu'];
$jmlb = count($b);
$jml = count($a);
for ($i = 0; $i < $jml == $jmlb; $i++) {
    $sql = "INSERT INTO pesanan (id_pesanan,id_pemesan,kd_menu,jumlah,total) 
    VALUES ('','$_POST[id_pemesan]','$a[$i]','$b[$i]',NULL)";
    $call = mysqli_query($conn, $sql);
}
if ($call) {
    header('location: transaksi.php');
} else {

    echo "gagal tambah data";
}
