<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title>Tabel PINJAM PELANGGAN</title>
</head>
<body>
<h1 align=center>Daftar Peminjaman Motor Pelanggan</h1>

<body>
	<center><h3>Pencarian Data Pinjam</h3></center>
	<form method="GET" action="tampil_data_gabungan.php" style="text-align: center;">
		<label>Kata Pencarian : </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button type="submit">Cari</button>
	</form>

<?php
include 'koneksi.php';

$table_name = 'view_pinjam';

				if(isset($_GET['kata_cari'])) {
					$kata_cari = $_GET['kata_cari'];
					$sql = "SELECT * FROM view_pinjam WHERE nama like '%".$kata_cari."%' OR nm_motor like '%".$kata_cari."%' OR jenis_motor like '%".$kata_cari."%' ORDER BY nama ASC";
				} else {
					$sql = "SELECT * FROM view_pinjam ORDER BY nama ASC";
				}
				
$query = mysqli_query($db, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($db));
}

echo '<table class="table1" border="1" width="1000px" align=center>
		<thead>
			<tr>
				<th>&nbsp; Nama &nbsp;</th>
				<th>&nbsp; Nama Motor &nbsp;</th>
				<th>&nbsp; jenis Motor &nbsp;</th>
				<th>&nbsp; Merk &nbsp;</th>
				<th>&nbsp; Biaya &nbsp;</th>
				<th>&nbsp; Denda &nbsp;</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['nama'].'</td>
			<td>'.$row['nm_motor'].'</td>
			<td>'.$row['jenis_motor'].'</td>
			<td>'.$row['merk'].'</td>
			<td>'.$row['biaya'].'</td>
			<td>'.$row['denda'].'</td>
		</tr>';
}
echo '
	</tbody>
</table>';

//<td><a href="delete1.php?nim= <?php echo .$row[nim].; ">Delete2</td>
// Apakah kita perlu menjalankan fungsi mysqli_free_result() ini? baca bagian VII
mysqli_free_result($query);

// Apakah kita perlu menjalankan fungsi mysqli_close() ini? baca bagian VII
mysqli_close($db);
?>

<h1 align=center>Daftar Penyewaan</h1>

<body>
	<center><h3>Pencarian Data Penyewaan</h3></center>
	<form method="GET" action="tampil_data_gabungan.php" style="text-align: center;">
		<label>Kata Pencarian : </label>
		<input type="text" name="kata_cari2" value="<?php if(isset($_GET['kata_cari2'])) { echo $_GET['kata_cari2']; } ?>"  />
		<button type="submit">Cari</button>
	</form>

<?php
include 'koneksi.php';

$table_name = 'penyewaan';

				if(isset($_GET['kata_cari2'])) {
					$kata_cari2 = $_GET['kata_cari2'];
					$sql = "SELECT * FROM penyewaan WHERE nama like '%".$kata_cari2."%' OR alamat like '%".$kata_cari2."%' OR nm_motor like '%".$kata_cari2."%' ORDER BY nama ASC";
				} else {
					$sql = "SELECT * FROM penyewaan ORDER BY nama ASC";
				}
				
$query = mysqli_query($db, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($db));
}

echo '<table class="table1" border="1" width="1000px" align=center>
		<thead>
			<tr>
				<th>&nbsp; Nama &nbsp;</th>
				<th>&nbsp; Alamat &nbsp;</th>
				<th>&nbsp; Nama Motor &nbsp;</th>
				<th>&nbsp; Merk &nbsp;</th>
				<th>&nbsp; No NPWP &nbsp;</th>
				<th>&nbsp; Tanggal Sewa &nbsp;</th>
				<th>&nbsp; Tanggal Kembali &nbsp;</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['nama'].'</td>
			<td>'.$row['alamat'].'</td>
			<td>'.$row['nm_motor'].'</td>
			<td>'.$row['merk'].'</td>
			<td>'.$row['no_npwp'].'</td>
			<td>'.$row['tgl_sewa'].'</td>
			<td>'.$row['tgl_kembali'].'</td>
		</tr>';
}
echo '
	</tbody>
</table>';

mysqli_free_result($query);
mysqli_close($db);
?>

		<a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Kembali ke Menu Utama </span></button></center></a>
	</body>
</html>