<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title>Tabel Rental</title>
</head>
<body>
<h1 align=center>Daftar Rental</h1>

<body>
	<center><h3>Pencarian Data Rental</h3></center>
	<form method="GET" action="tampil_data_rental.php" style="text-align: center;">
		<label>Kata Pencarian : </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button type="submit">Cari</button>
	</form>

<?php
include 'koneksi.php';

$table_name = 'rental';

if(isset($_GET['kata_cari'])) {
	$kata_cari = $_GET['kata_cari'];
	$sql = "SELECT * FROM rental WHERE nama like '%".$kata_cari."%' OR jml_motor like '%".$kata_cari."%' OR no_npwp like '%".$kata_cari."%' ORDER BY no_npwp ASC";
} else {
	$sql = "SELECT * FROM rental ORDER BY no_npwp ASC";
}
		
$query = mysqli_query($db, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($db));
}

echo '<table class="table1" border="1" width="1000px" align=center>
		<thead>
			<tr>
				<th>&nbsp; No NPWP &nbsp;</th>
				<th>&nbsp; Nama &nbsp;</th>
				<th>&nbsp; Jumlah Motor&nbsp;</th>
				<th colspan = "2">Menu Tindakan</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['no_npwp'].'</td>
			<td>'.$row['nama'].'</td>
			<td>'.$row['jml_motor'].'</td>
			<td><a href="proses_hapus_data_rental.php?id='.$row['id_rental'].'&Nama='.$row['nama'].'; ">Hapus</a></td>
			<td><a href="edit_data_rental.php?id='.$row['id_rental'].'">Edit</a></td>
		</tr>';
}
echo '
	</tbody>
</table>';

mysqli_free_result($query);

mysqli_close($db);
?>

	<br>
	<a href="/sewa_motor/input_data_rental.php"> <center><button class="button">Tambah Data Rental</button></center><br></a>
	<br>
		<a href="/sewa_motor/tampil_data_gabungan.php"> <center><button class="button">Tampilkan Data Gabungan</button></center><br></a>
	<br>
		<a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Kembali ke Menu Utama </span></button></center></a>
	</body>
</html>