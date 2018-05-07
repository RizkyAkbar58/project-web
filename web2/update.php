<?php 

include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$gambar = $_POST['gambar'];

mysql_query("UPDATE siswa SET nama='$nama', nis='$nis', gambar='$gambar' WHERE id='$id'");

header("location:index.php?pesan=update");

?>