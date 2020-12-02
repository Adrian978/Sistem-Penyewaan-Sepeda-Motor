<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title>Tabel Sewa</title>
</head>
<body>
<h1 align=center>Daftar Sewa</h1>

<body>
	<center><h3>Pencarian Data Sewa</h3></center>
	<form method="GET" action="tampil_data_sewa.php" style="text-align: center;">
		<label>Kata Pencarian : </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button type="submit">Cari</button>
	</form>

<?php
include 'koneksi.php';

$table_name = 'sewa';

if(isset($_GET['kata_cari'])) {
	$kata_cari = $_GET['kata_cari'];
	$sql = "SELECT * FROM sewa WHERE jenis_motor like '%".$kata_cari."%' OR biaya like '%".$kata_cari."%' OR denda like '%".$kata_cari."%' ORDER BY no_sewa ASC";
} else {
	$sql = "SELECT * FROM sewa ORDER BY no_sewa ASC";
}
		
$query = mysqli_query($db, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($db));
}

echo '<table class="table1" border="1" width="1000px" align=center>
		<thead>
			<tr>
				<th>&nbsp; No Sewa &nbsp;</th>
				<th>&nbsp; Jenis Motor &nbsp;</th>
				<th>&nbsp; Biaya &nbsp;</th>
				<th>&nbsp; Denda &nbsp;</th>
				<th>&nbsp; Tanggal Sewa &nbsp;</th>
				<th>&nbsp; Tanggal Kembali &nbsp;</th>
				<th colspan = "2">Menu Tindakan</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['no_sewa'].'</td>
			<td>'.$row['jenis_motor'].'</td>
			<td>'.$row['biaya'].'</td>
			<td>'.$row['denda'].'</td>
			<td>'.$row['tgl_sewa'].'</td>
			<td>'.$row['tgl_kembali'].'</td>
			<td><a href="proses_hapus_data_sewa.php?id='.$row['no_sewa'].'; ">Hapus</a></td>
			<td><a href="edit_data_sewa.php?id='.$row['no_sewa'].'">Edit</a></td>
		</tr>';
}
echo '
	</tbody>
</table>';

mysqli_free_result($query);

mysqli_close($db);
?>

	<br>
	<a href="/sewa_motor/input_data_sewa.php"> <center><button class="button">Tambah Data Sewa</button></center><br></a>
	<br>
		<a href="/sewa_motor/tampil_data_gabungan.php"> <center><button class="button">Tampilkan Data Gabungan</button></center><br></a>
	<br>
		<a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Kembali ke Menu Utama </span></button></center></a>
	</body>
</html>