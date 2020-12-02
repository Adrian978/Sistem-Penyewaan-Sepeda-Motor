<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style4.css">
	<title>Edit Data Sewa</title>
</head>
<body>
<h1  align=center>Edit Data Sewa</h1>
<h3  align=center>Ubah Data</h3>
<div id="main">
<div id="first">

	<?php
	include 'koneksi.php';
    $table_name = 'sewa';
	
	$no_sewa = $_GET['id'];
	$data = mysqli_query($db,"select * from $table_name where no_sewa='$no_sewa'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="proses_update_data_sewa.php?">
			<table border="0">
			<tr>			
					<td>No Sewa</td>
					<td>
						<input type="text" name="no_sewa" value="<?php echo $d['no_sewa']; ?>"readonly></td>
				</tr>
				<tr>			
					<td>Jenis Motor</td>
					<td>
						<input type="text" name="jenis_motor" value="<?php echo $d['jenis_motor']; ?>"></td>
				</tr>
				<tr>		
					<td>biaya</td>
					<td><input type="text" name="biaya" value="<?php echo $d['biaya']; ?>"></td>
				</tr>
				<tr>
					<td>denda</td>
					<td><input type="text" name="denda" value="<?php echo $d['denda']; ?>"></td>
				</tr>
				</tr>
				<tr>
					<td>Tanggal Sewa</td>
					<td><input type="date" name="tgl_sewa" value="<?php echo $d['tgl_sewa']; ?>"></td>
				</tr>
				<tr>
				</tr>
				<tr>
					<td>Tanggal Kembali</td>
					<td><input type="date" name="tgl_kembali" value="<?php echo $d['tgl_kembali']; ?>"></td>
				</tr>
					<td></td>
					<td><input type="submit" value="PERBAHARUI"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
		<a href="/sewa_motor/tampil_data_sewa.php"> <center><button class="button">Tampilkan Data Sewa</button></center></a>
		<br>
		<a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Menu Utama </span></button></center></a>
	</body>
</html>