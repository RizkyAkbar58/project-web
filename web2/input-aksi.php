<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$gambar = $_POST['gambar'];

mysql_query("INSERT INTO user VALUES('','$nama','$nis','$gambar')");

header("location:index.php?pesan=input");
?>