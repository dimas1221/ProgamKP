<?php
include 'database/koneksidb.php';
//Query Menampilkan data
$query = "SELECT * FROM menu";
//Memanggil Data
$call = mysqli_query($conn, $query);

$query2 = "SELECT * FROM jenis_menu";
$call2 = mysqli_query($conn, $query2);

$query3 = "SELECT * FROM jenis_produk";
$call3 = mysqli_query($conn, $query3);

if (isset($_POST['tambah_data'])) {
    $simpan_kd_menu = $_POST['simpan_kd_menu'];
    $simpan_nama_menu = $_POST['simpan_nama_menu'];
    $simpan_kd_jenis_menu = $_POST['simpan_kd_jenis_menu'];
    $simpan_kd_jenis_produk = $_POST['simpan_kd_jenis_produk'];
    $simpan_harga = $_POST['simpan_harga'];

    //query memasukan data ke database
    $query5 = "INSERT INTO menu (kd_menu, nama_menu, kd_jenis_menu, kd_jenis_produk, harga)
  VALUES ('$simpan_kd_menu','$simpan_nama_menu','$simpan_kd_jenis_menu','$simpan_kd_jenis_produk','$simpan_harga')";

    //Function untuk memasukan data input ke database
    $hasil = mysqli_query($conn, $query5);

    //Pengecheckan input data
    if ($hasil) {
        function alertWindow($msg)
        {
            echo "<script type ='text/JavaScript'>";
            echo "alert('$msg')";
            echo "</script>";
        }
        alertWindow("Menu berhasil di tambahkan ");
    } else {
        function alertWindow($msg)
        {
            echo "<script type ='text/JavaScript'>";
            echo "alert('$msg')";
            echo "</script>";
        }
        alertWindow("Menu gagal di tambahkan karena id sudah ada ");
    }
}
//query otomatis tambah id menu
$queryidmenu = mysqli_query($conn, "SELECT MAX(kd_menu) AS kodeTerbesar FROM menu;");
$dataidmenu = mysqli_fetch_array($queryidmenu);

$kodemenu = $dataidmenu['kodeTerbesar'];

// mengambil angka dari kode barang terbesar, menggunakan fungsi substr dan diubah ke integer dengan (int)
$urutan = (int) substr($kodemenu, 3, 3);
// nomor yang diambil akan ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;
// membuat kode barang baru
// string sprintf("%03s", $urutan); berfungsi untuk membuat string menjadi 3 karakter
// misalnya string sprintf("%03s", 22); maka akan menghasilkan '022'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya PC
$huruf = "MN";
$kodemenu = $huruf . sprintf("%03s", $urutan);
//end
?>



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
            </div>
        </a>

        <form class="form-inline my-2 my-lg-0 ml-auto">

        </form>

        <div class="icon ml-4">
            <h5>
                <a href="tambahmenu.php" class="btn btn-outline-danger">BACK</a>
            </h5>
        </div>
        </div>
    </nav>
    <!-- akhir navbar -->
    <h3><i class="fas fa-tachometer-alt mr-2"></i>DASHBOARD</h3>
    <!-- awal  menu -->
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg'); height:900px;">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <span class="login100-form-title p-b-49">Input Menu</span>
                <form method="post" class="login100-form validate-form">
                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <span class="label-input100">Id Menu :</span>
                        <input class="input100" type="text" name="simpan_kd_menu" placeholder="Masukan id" required value="<?= $kodemenu; ?>" readonly>
                    </div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <span class="label-input100">Nama Menu :</span>
                        <input class="input100" type="text" name="simpan_nama_menu" placeholder="Nama menu" required></td>
                    </div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <span class="label-input100">Jeni Menu :</span>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect02" name="simpan_kd_jenis_menu" required>
                                <option>jenis menu</option>
                                <?php foreach ($call2 as $data) : ?>
                                    <option value="<?= $data['kd_jenis_menu']; ?>"><?= $data['jenis_menu']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <span class="label-input100">Jenis Produk :</span>
                        <div class="input-group mb-3">
                            <select class="custom-select" id="inputGroupSelect02" name="simpan_kd_jenis_produk" required>
                                <option>jenis produk</option>
                                <?php foreach ($call3 as $data) : ?>
                                    <option value="<?= $data['kd_jenis_produk']; ?>"><?= $data['nama_produk']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                        <span class="label-input100">Harga :</span>
                        <input class="input100" type="text" name="simpan_harga" placeholder="harga" required>
                    </div>
                    <button class="btn btn-outline-success" style="width: 390px;" name="tambah_data">Add</button>
            </div>
            </form>
        </div>
    </div>
    </div>
    <!-- akhir dropdown menu -->


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>

</body>

</html>