<html>

<head>
    <!-- css swalert2 -->
    <link rel="stylesheet" href="swalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="swalert2/animate.min.css">
    <!-- end -->
    <!-- scrip swalert 2 -->
    <script src="swalert2/sweetalert2.min.js"></script>
    <!-- end -->
</head>

<body>
    <?php

    include 'database/koneksidb.php';

    $id = $_GET['id'];

    $query = "DELETE FROM pesanan WHERE id_pesanan = '$id'";

    $delete = mysqli_query($conn, $query);
    if (!$delete) {
        echo "<b>Hapus Data Gagal</b>";
    } else {
        echo "<script type='text/javascript'>
      setTimeout(function (){
        Swal.fire({
            icon: 'success',
            title: 'succes',
            text: 'Berhasil menghapus data!'
          });
         
      });
      </script>";
    }
    ?>
</body>

</html>