<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style4.css">
	<title>Edit Data Pelanggan</title>
</head>
<body>
<h1  align=center>Edit Data Pelanggan</h1>
<h3  align=center>Ubah Data</h3>
<div id="main">
<div id="first">

	<?php
	include 'koneksi.php';
    $table_name = 'pelanggan';
	
	$id_pelanggan = $_GET['id'];
	$data = mysqli_query($db,"select * from $table_name where id_pelanggan='$id_pelanggan'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="proses_update_data_pelanggan.php?">
			<table border="0">
			<tr>			
					<td>Id Pelanggan</td>
					<td>
						<input type="text" name="id_pelanggan" value="<?php echo $d['id_pelanggan']; ?>"readonly></td>
				</tr>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
				<tr>		
					<td>Alamat</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td>Tgl Lahir</td>
					<td><input type="date" name="tgl_lahir" value="<?php echo $d['tgl_lahir']; ?>"></td>
				</tr>
				</tr>
				<tr>
					<td>Nama Motor</td>
					<td><input type="text" name="nm_motor" value="<?php echo $d['nm_motor']; ?>"></td>
				</tr>
				<tr>
				</tr>
				<tr>
					<td>No Telp</td>
					<td><input type="text" name="no_telp" value="<?php echo $d['no_telp']; ?>"></td>
				</tr>
					<td></td>
					<td><input type="submit" value="PERBAHARUI"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
		<a href="/sewa_motor/tampil_data_pelanggan.php"> <center><button class="button">Tampilkan Data Pelanggan</button></center></a>
		<br>
		<a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Menu Utama </span></button></center></a>
	</body>
</html>