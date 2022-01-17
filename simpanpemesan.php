<?php
include 'database/koneksidb.php';
//tambah data

$id_pemesan = $_POST['id_pemesan'];
$nama_pemesan = $_POST['nama_pemesan'];
$tanggal_pesan = $_POST['tanggal_pesan'];
$id_user = $_POST['id_user'];


//query memasukan data ke database
$query = "INSERT INTO pemesan (id_pemesan,nama_pemesan,tanggal_pesan,id_user)
    VALUES ('$id_pemesan','$nama_pemesan','$tanggal_pesan','$id_user')";

//Function untuk memasukan data input ke database
$hasil = mysqli_query($conn, $query);

//Pengecheckan input data
if ($hasil) {
    header("location: tambahpesanan.php");
} else {
    echo "<b>Gagal Menambahkan data</b>";
}

  //akhir tambah data
