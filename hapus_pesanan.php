<?php

include 'database/koneksidb.php';

$id = $_GET['id'];

$query = "DELETE FROM pesanan WHERE id_pesanan = '$id'";

$delete = mysqli_query($conn, $query);
if (!$delete) {
    echo "<b>Hapus Data Gagal</b>";
} else {
    function alertWindow($msg)
    {
        echo "<script type ='text/JavaScript'>";
        echo "alert('$msg')";
        echo "</script>";
    }
    alertWindow("Menu berhasil di hapus");
}
