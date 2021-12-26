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
            <a class="nav-link active text-white, txt2" href="#" style="color: ghostwhite;"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link text-white, txt2" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample" style="color: ghostwhite;">
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
            <a class="nav-link text-white, txt2" href="pesanan.php" style="color: ghostwhite;">Pesanan</a>
            <hr class="bg-secondary">
          </li>
          <li class="nav-item">
            <a class="nav-link disabled text-white, txt2" href="transaksi.php" style="color: ghostwhite;">transaksi</a>
            <hr class="bg-secondary">
          </li>
        </ul>
      </div>
      <!-- akhir sidebar -->
      <!-- dashboard -->
      <div class="col-md-10 p-5 pt-2">
        <h3><i class="fas fa-tachometer-alt mr-2"></i>DASHBOARD</h3>
        <hr>
        <!-- awal card -->
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <img class="card-img-top" src="fgambar/144.jpg" alt="Card image cap">
              <div class="card-body">
                <?php
                $level = $_SESSION['level'] == 'admin';
                if ($level) {
                ?>
                  <a href="tambahmenu.php" class="btn btn-outline-info" style="width: 420px;">Admin Page</a>
                <?php } else { ?>
                  <a href="#" class="btn btn-outline-info" style="width: 420px;">You Can't Access This Pages</a>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <img class="card-img-top" src="fgambar/144.jpg" alt="Card image cap">
              <div class="card-body">
                <a href="tambahpesanan.php" class="btn btn-outline-info" style="width: 420px;">Order</a>
              </div>
            </div>
          </div>
        </div>
        <!-- akhir card -->
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>
  </body>

  </html>
<?php } else {
  header("location: login2.php");
} ?>