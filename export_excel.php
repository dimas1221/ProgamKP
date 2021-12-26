<html>
<header></header>

<body>
    <?php
    include 'database/koneksidb.php';
    //Query Menampilkan data
    $query = "SELECT * FROM transaksi";
    //Memanggil Data
    $call = mysqli_query($conn, $query);

    //export file

    header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Rekap data Penjualan.xlsx");

    ?>
    <center>Data Rekap Penjualan</center>
    <!-- awal tabel -->
    <div>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>id transaksi</th>
                    <th>id user</th>
                    <th>id pemesan</th>
                    <th>tanggal pesan</th>
                </tr>
                <?php $i = 1; ?>
                <?php while ($tampil = mysqli_fetch_array($call)) { ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $tampil['id_transaksi']; ?> </td>
                        <td><?= $tampil['id_user']; ?> </td>
                        <td><?php echo $tampil['id_pemesan']; ?> </td>
                        <td><?php echo $tampil['tanggal_pesan']; ?> </td>
                    </tr>
            </thead>
        <?php } ?>
        </table>
    </div>
    <!-- akhir tabel -->
</body>

</html>