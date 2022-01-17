<html>

<head>
    <title>Memproses Checkbox dengan PHP</title>
    <meta content="validasi angka php" name="description">
    <meta content="validasi,angka,php" name="keyword">

    <head>

    <body>
        <center>
            <h3>DEMO CHECKBOX DENGAN PHP</h3>
            <form action="" method="POST">
                <input type="checkbox" value="Sepak Bola" name="hobi[]">Sepak Bola<br />
                <input type="checkbox" value="Voli" name="hobi[]">Voli<br />
                <input type="checkbox" Value="Basket" name="hobi[]">Basket<br />
                <input type="submit" name="submit">
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $hobi = $_POST['hobi'];
                for ($i = 0; $i < count($hobi); $i++) {
                    echo "hobi $hobi[$i]<br/>";
                }
            }
            ?>
        </center>
    </body>

</html>