<?php
include "koneksi1.php";
session_start();
if (!isset($_SESSION['username'])){
header ("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>DATA SISWA SMKN 1 BAWANG</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<div class="judul">		
		<h1>DATA SISWA SMKN 1 BAWANG</h1>
		<h2>Jalan Raya Pucang Nomor 132 Bawang,Banjarnegara</h2>
		<h3>Kode Pos 53471 Telepon 0286-591407</h3>
		<h4>ADMIN</h4>
	</div>
	<br/>

	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>
	Berhasil Login, <a href="logout.php">Logout</a>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Nis</th>
			<th>Gambar</th>
			<th>Opsi</th>		
		</tr>
		<?php 
		include "koneksi.php";
		$query_mysql = mysql_query("SELECT * FROM user")or die(mysql_error());
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>
		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['nis']; ?></td>
			<td><img src="img/<?= $data["gambar"]; ?>" width="	55" ?></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>					
			</td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>
