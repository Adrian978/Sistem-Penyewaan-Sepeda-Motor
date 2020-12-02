<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title>Tabel Pelanggan</title>
</head>
<body>
<h1 align=center>Daftar Nama Pelanggan</h1>

<body>
	<center><h3>Pencarian Data Pelanggan</h3></center>
	<form method="GET" action="tampil_data_pelanggan.php" style="text-align: center;">
		<label>Kata Pencarian : </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button type="submit">Cari</button>
	</form>

<?php
include 'koneksi.php';

$table_name = 'pelanggan';

				if(isset($_GET['kata_cari'])) {
					$kata_cari = $_GET['kata_cari'];
					$sql = "SELECT * FROM pelanggan WHERE nama like '%".$kata_cari."%' OR alamat like '%".$kata_cari."%' OR no_telp like '%".$kata_cari."%' ORDER BY id_pelanggan ASC";
				} else {
					$sql = "SELECT * FROM pelanggan ORDER BY id_pelanggan ASC";
				}
				
$query = mysqli_query($db, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($db));
}

echo '<table class="table1" border="1" width="1000px" align=center>
		<thead>
			<tr>
				<th>&nbsp; Id Pelanggan &nbsp;</th>
				<th>&nbsp; Nama &nbsp;</th>
				<th>&nbsp; Alamat &nbsp;</th>
				<th>&nbsp; Tanggal Lahir &nbsp;</th>
				<th>&nbsp; Nama Motor &nbsp;</th>
				<th>&nbsp; No Telp &nbsp;</th>
				<th colspan = "2">Menu Tindakan</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['id_pelanggan'].'</td>
			<td>'.$row['nama'].'</td>
			<td>'.$row['alamat'].'</td>
			<td>'.$row['tgl_lahir'].'</td>
			<td>'.$row['nm_motor'].'</td>
			<td>'.$row['no_telp'].'</td>
			<td><a href="proses_hapus_data_pelanggan.php?id='.$row['id_pelanggan'].'&Nama='.$row['nama'].'; ">Hapus</a></td>
			<td><a href="edit_data_pelanggan.php?id='.$row['id_pelanggan'].'">Edit</a></td>
		</tr>';
}
echo '
	</tbody>
</table>';

mysqli_free_result($query);

mysqli_close($db);
?>

	<br>
	<a href="/sewa_motor/input_data_pelanggan.php"> <center><button class="button">Tambah Data Pelanggan</button></center><br></a>
	<br>
		<a href="/sewa_motor/tampil_data_gabungan.php"> <center><button class="button">Tampilkan Data Gabungan</button></center><br></a>
	<br>
		<a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Kembali ke Menu Utama </span></button></center></a>
	</body>
</html>