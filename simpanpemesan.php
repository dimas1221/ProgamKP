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
        echo "<script type='text/javascript'>
      setTimeout(function (){
        Swal.fire({
            icon: 'success',
            title: 'success',
            text: 'Berhasil menambah data pemesan!'
          });
         window.setTimeout(function(){
             window.location.replace('tambahpesanan.php');
         });
      });
      </script>";
    } else {
        echo "<b>Gagal Menambahkan data</b>";
    }

    //akhir tambah data
    ?>
</body>

</html>