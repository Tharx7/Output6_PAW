<?php 
$host = "localhost";
$user = "root";
$password = "";
$dbname = "pertemuan 5";

$koneksi = mysqli_connect($host,$user,$password,$dbname);
if(!$koneksi){
	echo "koneksi gagal";
}
?>