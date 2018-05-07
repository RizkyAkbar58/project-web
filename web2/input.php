<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>DATA SISWA SMKN 1 BAWANG</h1>
		<h2>Jalan Raya Pucang Nomor 132 Bawang, Banjarnegara</h2>
		<h3>Kode Pos 53471 Telepon 0286-591407</h3>
	</div>
	
	<br/>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>					
			</tr>	
			<tr>
				<td>NIS</td>
				<td><input type="text" name="nis"></td>					
			</tr>	
			<tr>
				<td>Gambar</td>
				<td><input type="text" name="gambar"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>