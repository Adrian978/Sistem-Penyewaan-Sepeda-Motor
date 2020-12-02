<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style4.css">
	<title>Edit Data Rental</title>
</head>
<body>
<h1  align=center>Edit Data Rental</h1>
<h3  align=center>Ubah Data</h3>
<div id="main">
<div id="first">

	<?php
	include 'koneksi.php';
    $table_name = 'rental';
	
	$id_rental = $_GET['id'];
	$data = mysqli_query($db,"select * from $table_name where id_rental='$id_rental'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="proses_update_data_rental.php?">
			<table border="0">
			<tr>			
					<td>Id Rental</td>
					<td>
						<input type="text" name="id_rental" value="<?php echo $d['id_rental']; ?>"readonly></td>
				</tr>
				<tr>			
			<tr>			
					<td>No NPWP</td>
					<td>
						<input type="text" name="no_npwp" value="<?php echo $d['no_npwp']; ?>"></td>
				</tr>
				<tr>			
					<td>Nama</td>
					<td>
						<input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Jumlah Motor</td>
					<td><input type="text" name="jml_motor" value="<?php echo $d['jml_motor']; ?>"></td>
				</tr>
					<td></td>
					<td><input type="submit" value="PERBAHARUI"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
		<a href="/sewa_motor/tampil_data_rental.php"> <center><button class="button">Tampilkan Data Rental</button></center></a>
		<br>
		<a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Menu Utama </span></button></center></a>
	</body>
</html>