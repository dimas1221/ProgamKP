<?php 
// untuk mengghubungkan koneksi dengan database
$koneksi = mysqli_connect('localhost','root','','kodegenerator');
// untuk variabel field dari form input ke database
$kode = $_POST['kode'];
$nama_brg = $_POST['nama_brg'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
// input data dari fomr input kedalam database
mysqli_query($koneksi,"INSERT INTO tabel VALUES ('$kode','$nama_brg','$harga','$jumlah')")or die(mysqli_error($koneksi));
// redirect kehalaman index.php kembali setelah klik tombol submit
header("location:index.php");
