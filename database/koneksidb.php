<!DOCTYPE html>
<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>

<?php
//Data pada server 
$host="localhost"; //Jika sudah online ini akan menjadi IP
$username="root";
$password="";
$database="pos2";
//Harus Berurutan
$conn=mysqli_connect($host,$username,$password,$database);
if($conn){
	echo "Connected To Server";
}
else{
	echo "Server Not Connected";
}


 ?>
</body>
</html>