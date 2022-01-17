<?php
include 'database/koneksidb.php';
session_start();
//sesion tidak bisa buka tanpa login
if (isset($_SESSION['level'])) {

  //tampil daTA user yg login
  if ($_SESSION['username']) {
    $user_login = $_SESSION['username'];
  }
  $sql_user = "SELECT * FROM users WHERE username = '$user_login'";
  $calluser = mysqli_query($conn, $sql_user);

  $data_user = mysqli_fetch_array($calluser);
  //end
  //tampil select kd menu

  $query2 = "SELECT * FROM menu";
  $call2 = mysqli_query($conn, $query2);
  //end

  //quri id pemesan
  $id = $_GET['id'];


  $nama = "SELECT * FROM pemesan WHERE id_pemesan ='$id'";
  $call12 = mysqli_query($conn, $nama);
  //end
  //queri edit jumlah
  $query = "SELECT id_pesanan, id_pemesan, nama_pemesan, nama_menu, harga, jumlah FROM pesanan INNER JOIN pemesan USING (id_pemesan) 
  INNER JOIN menu USING (kd_menu) WHERE id_pemesan ='$id'";
  //Memanggil Data
  $calledit = mysqli_query($conn, $query);
  //ende
  //input pesanan
  if (isset($_POST['submit'])) {
    $a = $_POST['kd_menu'];
    $menu = $_POST['nama_menu'];
    $b = $_POST['jumlah'];
    $c = $_POST['id_pemesan'];
    $check_array = $a;
    foreach ($menu as $key => $value) {
      if (in_array($menu[$key], $check_array)) {
        $sql = "INSERT INTO pesanan (id_pesanan,id_pemesan,kd_menu,jumlah) 
        VALUES ('','$c','$menu[$key]','$b[$key]')";
        $call = mysqli_query($conn, $sql);
      }
    }

    if ($call) {
      header('location: transaksi.php');
    } else {

      echo "gagal tambah data";
    }
  }
  //end
  //edit jumlah
  if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $j = $_POST['jumlah_menu'];
    $p = $_POST['id_pesanan'];
    $jmlp = count($j);
    for ($i = 0; $i < $jmlp; $i++) {
      $query2 = "UPDATE pesanan SET
      id_pesanan='$p[$i]',
      id_pemesan='$id[$i]',
      jumlah='$j[$i]'
      WHERE id_pesanan='$p[$i]'";
    }

    $ubah = mysqli_query($conn, $query2);
    if (!$ubah) {
      echo "<b>Data Gagal Diubah</b>";
    } else {
      header('location: transaksi.php');
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
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>

    <!-- js data table -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
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
            <a class="nav-link text-white" href="#">Pesanan</a>
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
        <h3><i class="fas fa-tachometer-alt mr-2"></i></h3>
        <hr class="bg-secondary">
        <!-- awal tabel -->
        <?php foreach ($call12 as $show) ?>
        <span class="label-input100">
          <h8><?= "nama pemesan : " . $show['nama_pemesan']; ?></h8>
        </span>
        <div class="container">
          <div class="row">
            <div class="col 4">
              <form action="" method="post">
                <input type="text" name="id_pemesan" value="<?php echo $show['id_pemesan']; ?>" readonly>
                <hr class="bg-secondary">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                      <th>no</th>
                      <th>menu</th>
                      <th>i menu</th>
                      <th>jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $k = 1; ?>
                    <?php
                    while ($data = mysqli_fetch_array($call2)) {
                    ?>
                      <tr>
                        <td><?php echo $k++; ?> </td>
                        <td><input type="checkbox" name="kd_menu[]" value="<?php echo $data['kd_menu'] ?>"></td>
                        <td><input type="hidden" name="nama_menu[]" value="<?php echo $data['kd_menu'] ?>"><?php echo $data['nama_menu'] ?></td>
                        <td><input style="width: 50px;" type="number" name="jumlah[]"></td>
                      </tr>
                    <?php
                    }
                    ?>
                  </tbody>
                </table>
                <div>
                  <button class="btn btn-outline-success" type="Submit" name="submit">Add</button>
                </div>
              </form>
            </div>
            <div class="col 4">
              <form action="" method="POST">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>id</th>
                      <td>pemesan</td>
                      <th>nama menu</th>
                      <th>jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php while ($tampil = mysqli_fetch_array($calledit)) {
                    ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><input style="width: 50px;" type="text" name="id_pesanan[]" value="<?= $tampil['id_pesanan']; ?>" readonly></td>
                        <td><input style="width: 50px;" type="text" name="id[]" value="<?php echo $tampil['id_pemesan']; ?>" readonly></td>
                        <td><?php echo $tampil['nama_menu']; ?> </td>
                        <td><input style="width: 50px;" type="number" name="jumlah_menu[]" value="<?php echo $tampil['jumlah']; ?>"></td>
                      </tr>

                    <?php } ?>
                  </tbody>

                </table>
                <button name="edit" class="btn btn-success">SAVE</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <script>
        $(document).ready(function() {
          $('#example').DataTable();
        });
      </script>
  </body>

  </html>
<?php } else {
  header("location: login2.php");
} ?>