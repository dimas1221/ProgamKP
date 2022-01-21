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
$id = $_GET['id'];
$query = "SELECT id_pesanan, id_pemesan, nama_pemesan, nama_menu, harga, jumlah, total FROM pesanan INNER JOIN pemesan USING (id_pemesan) 
INNER JOIN menu USING (kd_menu) WHERE id_pemesan ='$id'";
//Memanggil Data
$call = mysqli_query($conn, $query);

$nama = "SELECT nama_pemesan, nama_menu, harga, jumlah, total FROM pesanan INNER JOIN pemesan USING (id_pemesan) 
INNER JOIN menu USING (kd_menu) WHERE id_pemesan ='$id'";
$call12 = mysqli_query($conn, $nama);


$queritotal = "SELECT SUM(menu.harga*pesanan.jumlah) 
AS total FROM menu JOIN pesanan ON menu.kd_menu=pesanan.kd_menu WHERE id_pemesan='$id'";
$call3 = mysqli_query($conn, $queritotal);

function rupiah1($row)
{
    $hasil_rupiah = "Rp " . number_format($row, 0, ".", ".");
    return $hasil_rupiah;
}

function rupiah2($tampil)
{
    $hasil_rupiah = "Rp " . number_format($tampil, 0, ".", ".");
    return $hasil_rupiah;
}

function rupiah3($jumlah)
{
    $hasil_rupiah = "Rp " . number_format($jumlah, 0, ".", ".");
    return $hasil_rupiah;
}

//menampilkan queri sts
$querysts1 = "SELECT * FROM pemesan WHERE id_pemesan='$id'";

$tampilsts = mysqli_query($conn, $querysts1);
//end

//update status payment
if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    //Query edit data
    $querysts = "UPDATE pemesan SET
	 id_pemesan ='$id',
	 status ='$status'
	 WHERE id_pemesan = '$id'";

    $ubah = mysqli_query($conn, $querysts);

    if (!$ubah) {
        echo "<b>Data Gagal Diubah</b>";
    } else {
        echo "<script type='text/javascript'>
        setTimeout(function (){
          Swal.fire({
              icon: 'success',
              title: 'success',
              text: 'Transaksi berhasil!',
              showConfirmButton: true,
              timer: 3200
            });
        },10);
        window.setTimeout(function(){
          window.location.replace('transaksi.php');
      } ,3000);
        </script>";
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.bootstrap4.min.css">
    <!-- css swalert2 -->
    <link rel="stylesheet" href="swalert2/sweetalert2.min.css">
    <!-- end -->
    <!-- libralis js  -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="admin.js"></script>

    <!-- datatable js -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.colVis.min.js"></script>
    <!-- end -->
    <!-- scrip swalert 2 -->
    <script src="swalert2/sweetalert2.min.js"></script>
    <!-- end -->
    <title>Hello, world!</title>
</head>

<body>
    <!-- awal navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top" style="background-image: url('images/bg-01.jpg'); height:82px;">
        <a class="navbar-brand" href="#">
            <div class="txt1 text-center ">
                <h2 style="color: black;"><strong>PB</strong></h2>
                <h6 style="color: ghostwhite;">Pondok Putri Bumi</h6>
            </div>
        </a>

        <form class="form-inline my-2 my-lg-0 ml-auto">

        </form>

        <div class="icon ml-4">
            <h6>
                <a href="daftarpesan.php"><i class="fas fa-envelope fa-2x mr-3" data-toggle="tooltip" title="History"></i></a>
                <a href="#"><i class="fas fa-bell fa-2x mr-3" data-toggle="tooltip" title="Notification"></i></a>
                <a href="logout.php"><i class="fas fa-sign-out-alt fa-2x mr-3" data-toggle="tooltip" title="Log Out"></i></a>
            </h6>
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
            <h3><i class="fas fa-tachometer-alt mr-2"></i>Detail Order</h3>
            <hr class="bg-secondary">
            <?php foreach ($call12 as $show) ?>
            <span class="label-input100">
                <h8><?= "nama pemesan : " . $show['nama_pemesan']; ?></h8>
            </span>
            <hr class="bg-secondary">
            <!-- awal tabel -->
            <div>
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <?php $row = mysqli_fetch_assoc($call3) ?>
                            <th>No</th>
                            <th>nama menu</th>
                            <th>harga</th>
                            <th>jumlah</th>
                            <th>total</th>
                            <th>action</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td style="color: red;"><?php echo " total bayar " . rupiah1($row['total']); ?></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <?php $i = 1; ?>
                        <?php while ($tampil = mysqli_fetch_array($call)) {
                            $jumlah = $tampil['harga'] * $tampil['jumlah'];
                        ?>

                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $tampil['nama_menu']; ?> </td>
                                <td><?php echo rupiah2($tampil['harga']); ?> </td>
                                <td><?php echo $tampil['jumlah']; ?> </td>
                                <td><?php echo rupiah3($jumlah) ?></td>
                                <td>
                                    <a href="pesanan.php?id=<?php echo $tampil['id_pemesan']; ?>" class="btn btn-outline-warning" style="width: 90px;">+</a>
                                </td>
                                <td>
                                    <a href="hapus_pesanan.php?id=<?php echo $tampil['id_pesanan']; ?>" class="btn btn-outline-danger" style="width: 90px;" onclick="return confirm('Are you sure to delete data?')">Delete</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <?php while ($show = mysqli_fetch_array($tampilsts)) { ?>
                    <table class="table table-bordered mt-5">
                        <tr>
                            <td>
                                <form method="post">
                                    <label for="">Klik finish untuk menyelesaikan pesanan :</label>
                                    <div>
                                        <input type="hidden" name="id" value="<?= $show['id_pemesan'] ?>" readonly>
                                    </div>
                                    <div class="input-group mb-3">
                                        <input type="hidden" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default" name="status" value="selesai" readonly>
                                    </div>

                                    <button name="simpan" class="btn btn-success">Finish</button>
                                </form>
                            </td>
                        </tr>
                    </table>
                <?php } ?>
                <!-- akhir tabel -->
                <script>
                    $(document).ready(function() {
                        var table = $('#example').DataTable({
                            lengthChange: false,
                            buttons: ['print', 'excel', 'pdf']
                        });

                        table.buttons().container()
                            .appendTo('#example_wrapper .col-md-6:eq(0)');
                    });
                </script>
            </div>
        </div>
</body>

</html>