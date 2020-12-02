<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style4.css">
	<title>Edit Data Motor</title>
</head>
<body>
<h1  align=center>Edit Data Motor</h1>
<h3  align=center>Ubah Data</h3>
<div id="main">
<div id="first">

	<?php
	include 'koneksi.php';
    $table_name = 'motor';
	
	$kode_motor = $_GET['id'];
	$data = mysqli_query($db,"select * from $table_name where kode_motor='$kode_motor'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="proses_update_data_motor.php?">
			<table border="0">
			<tr>			
					<td>Kode Motor</td>
					<td>
						<input type="text" name="kode_motor" value="<?php echo $d['kode_motor']; ?>"readonly></td>
				</tr>
				<tr>			
					<td>Nama Motor</td>
					<td>
						<input type="text" name="nm_motor" value="<?php echo $d['nm_motor']; ?>"></td>
				</tr>
				<tr>			
					<td>Merk</td>
					<td>
						<input type="text" name="merk" value="<?php echo $d['merk']; ?>"></td>
				</tr>
				<tr>
					<td>Tahun Buat</td>
					<td><input type="text" name="thn_buat" value="<?php echo $d['thn_buat']; ?>"></td>
				</tr>
				<tr>		
					<td>Model</td>
					<td><input type="text" name="model" value="<?php echo $d['model']; ?>"></td>
				</tr>
					<td></td>
					<td><input type="submit" value="PERBAHARUI"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
		<a href="/sewa_motor/tampil_data_motor.php"> <center><button class="button">Tampilkan Data Motor</button></center></a>
		<br>
		<a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Menu Utama </span></button></center></a>
	</body>
</html>