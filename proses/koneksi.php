<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$host = "localhost";
$user = "root";
$pass = "";
$dbName = "tgs_mhs";

$kon = mysqli_connect ($host, $user, $pass);
if (!$kon)
	die ("gagal koneksi");

$hasil = mysqli_select_db($kon, $dbName);
if(!$hasil){
	$hasil = mysqli_query($kon, "CREATE DATABASE $dbName");
if(!$hasil)
	die ("Gagal Buat database");
else
	$hasil = mysqli_select_db($kon, $dbName);
if (!$hasil) die ("Gagal konek ke database");
}
?>
