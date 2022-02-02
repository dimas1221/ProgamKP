  <?php
  include 'database/koneksidb.php';

  session_start();
  //tampil daTA user yg login
  if ($_SESSION['username']) {
    $user_login = $_SESSION['username'];
  }
  $sql_user = "SELECT * FROM users WHERE username = '$user_login'";
  $calluser = mysqli_query($conn, $sql_user);

  $data_user = mysqli_fetch_array($calluser);
  //end
  //Query Menampilkan data
  $query = "SELECT * FROM pemesan ORDER BY id_pemesan DESC";
  //Memanggil Data
  $call = mysqli_query($conn, $query);


  //query otomatis tambah id pemesan
  $query2 = mysqli_query($conn, "SELECT MAX(id_pemesan) AS kodeTerbesar FROM pemesan;");
  $data = mysqli_fetch_array($query2);

  $kodepemesan = $data['kodeTerbesar'];

  // mengambil angka dari kode barang terbesar, menggunakan fungsi substr dan diubah ke integer dengan (int)
  $urutan = (int) substr($kodepemesan, 3, 3);
  // nomor yang diambil akan ditambah 1 untuk menentukan nomor urut berikutnya
  $urutan++;
  // membuat kode barang baru
  // string sprintf("%03s", $urutan); berfungsi untuk membuat string menjadi 3 karakter
  // misalnya string sprintf("%03s", 22); maka akan menghasilkan '022'
  // angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya PC
  $huruf = "PS";
  $kodepemesan = $huruf . sprintf("%03s", $urutan);
  //end
  //tambah pemesan
  if (isset($_POST['tambah'])) {
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
      echo "<script type='text/javascript'>
        setTimeout(function (){
          Swal.fire({
              icon: 'success',
              title: 'success',
              text: 'Berhasil menambah data pemesan!',
              showConfirmButton: true,
              timer: 3200
            });
        },10);
        window.setTimeout(function(){
          window.location.replace('tambahpesanan.php');
      } ,3000);
        </script>";
    } else {
      echo "<b>Gagal Menambahkan data</b>";
    }
  }
  //end

  ?>
  <!doctype html>
  <html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="admin.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free/css/all.min.css">

    <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

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
    <!-- css swalert2 -->
    <link rel="stylesheet" href="swalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="swalert2/animate.min.css">
    <!-- end -->
    <!-- libralis js  -->
    <!-- js bootstap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
    <!-- end -->

    <!-- js data tables -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <!-- end -->
    <!-- scrip swalert 2 -->
    <script src="swalert2/sweetalert2.min.js"></script>
    <!-- end -->
    <title>Hello, world!</title>
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
          <a href="daftarpesan.php"><i class="fas fa-envelope fa-2x mr-3" data-toggle="tooltip" title="History"></i></a>
          <a href="#"><i class="fas fa-bell fa-2x mr-3" data-toggle="tooltip" title="Notification"></i></a>
          <a href="logout.php"><i class="fas fa-sign-out-alt fa-2x mr-3" data-toggle="tooltip" title="Log Out"></i></a>
        </h5>
      </div>
      </div>
    </nav>
    <!-- akhir navbar -->

    <!-- awal side bar -->
    <div class="row no-gutters mt-5">
      <div class="col-md-2 bg-dark mt-3 pr-3 pt-4">
        <ul class="nav flex-column ml-3 mb-5">
          <li class="nav-item mr5">
            <a class="nav-link active text-white, txt2" href="#" style="color: ghostwhite;">
              <img src="fgambar/qr.png" alt="..." class="rounded-circle mr5" width="45px" height="45px"> : <?= $data_user['username']; ?></a>
          </li>
          <hr class="bg-secondary">
          <li class="nav-item">
            <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
              Menu
            </a>
            <div class="collapse" id="collapseExample">
              <div class="card card-body">
                <h6 class="collapse-header">Menu :</h6>
                <hr class="bg-secondary">
                <a style="color: black" class="collapse-item nav-link" href="foods.php">foods</a>
                <hr class="bg-secondary">
                <a style="color: black" class="collapse-item nav-link" href="drinks.php">drinks</a>
                <hr class="bg-secondary">
                <a style="color: black" class="collapse-item nav-link" href="toppings.php">toppings</a>
                <hr class="bg-secondary">
              </div>
            </div>
            <hr class="bg-secondary">
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="transaksi.php">transaksi</a>
            <hr class="bg-secondary">
          </li>
        </ul>
      </div>
      <!-- akhir sidebar -->
      <!-- dashboard -->
      <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-tachometer-alt mr-2"></i>Daftar Pemesan</h3>
        <hr>
        <!-- awal button tambah nama pemesan-->
        <div>
          <!-- Default dropright button -->
          <div class="btn-group dropright">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Add Order
            </button>
            <!-- awal dropdown menu -->
            <div class="dropdown-menu">
              <form method="post" action="">
                <table width="190 %" align="center" class="table table-dark table-hover">
                  <tr>
                    <td>
                      <h6 align="center">Data Pemesan</h6>
                    </td>
                  </tr>
                  <tr>
                    <td><input class="form-control" type="hidden" name="id_user" placeholder="Masukan id" required value="<?php echo $data_user['id_user']; ?>" readonly></td>
                  </tr>
                  <tr>
                    <td><input class="form-control" type="text" name="id_pemesan" placeholder="Masukan id" required value="<?php echo $kodepemesan ?>" readonly></td>
                  </tr>
                  <tr>
                    <td><input class=" form-control" type="text" name="nama_pemesan" placeholder="Nama pemesan" required></td>
                  </tr>
                  <tr>
                    <td><input class="form-control" type="datetime-local" name="tanggal_pesan" placeholder="tanggal pesan" required></td>
                  </tr>
                  <tr>
                    <td style="text-align: center;"><button class="btn btn-outline-success" name="tambah">Add</button></td>
                  </tr>
                </table>
              </form>
            </div>
            <!-- akhir dropdown menu -->
          </div>
        </div>
        <!-- akhir button nama pemesan -->
        <hr class="bg-secondary">
        <!-- awal tabel -->
        <div>
          <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
              <tr>
                <th>No</th>
                <th>id pemesan</th>
                <th>nama pemesan</th>
                <th>tanggal</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php while ($tampil = mysqli_fetch_array($call)) { ?>
                <tr>
                  <td><?php echo $i++; ?></td>
                  <td><?php echo $tampil['id_pemesan']; ?></td>
                  <td><?php echo $tampil['nama_pemesan']; ?> </td>
                  <td><?php echo $tampil['tanggal_pesan']; ?> </td>
                  <td>
                    <a href="pesanan.php?id=<?php echo $tampil['id_pemesan']; ?>" class="btn btn-outline-warning" style="width: 90px;">pesan</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
          <script>
            $(document).ready(function() {
              $('#example').DataTable();
            });
          </script>
        </div>
        <!-- akhir tabel -->
      </div>
    </div>
  </body>

  </html>