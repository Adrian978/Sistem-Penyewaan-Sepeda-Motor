<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
	<title>Tabel Motor</title>
</head>
<body>
<h1 align=center>Daftar Motor</h1>

<body>
	<center><h3>Pencarian Data Motor</h3></center>
	<form method="GET" action="tampil_data_motor.php" style="text-align: center;">
		<label>Kata Pencarian : </label>
		<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
		<button type="submit">Cari</button>
	</form>

<?php
include 'koneksi.php';

$table_name = 'motor';

				if(isset($_GET['kata_cari'])) {
					$kata_cari = $_GET['kata_cari'];
					$sql = "SELECT * FROM motor WHERE merk like '%".$kata_cari."%' OR thn_buat like '%".$kata_cari."%' OR model like '%".$kata_cari."%' OR nm_motor like '%".$kata_cari."%' ORDER BY kode_motor ASC";
				} else {
					$sql = "SELECT * FROM motor ORDER BY kode_motor ASC";
				}
		
$query = mysqli_query($db, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($db));
}

echo '<table class="table1" border="1" width="1000px" align=center>
		<thead>
			<tr>
				<th>&nbsp; Kode Motor &nbsp;</th>
				<th>&nbsp; Nama Motor &nbsp;</th>
				<th>&nbsp; Merk &nbsp;</th>
				<th>&nbsp; Tahun Buat&nbsp;</th>
				<th>&nbsp; Model &nbsp;</th>
				<th colspan = "2">Menu Tindakan</th>
			</tr>
		</thead>
		<tbody>';
		
while ($row = mysqli_fetch_array($query))
{
	echo '<tr>
			<td>'.$row['kode_motor'].'</td>
			<td>'.$row['nm_motor'].'</td>
			<td>'.$row['merk'].'</td>
			<td>'.$row['thn_buat'].'</td>
			<td>'.$row['model'].'</td>
			<td><a href="proses_hapus_data_motor.php?id='.$row['kode_motor'].'&Merk='.$row['merk'].'&nm_motor='.$row['nm_motor'].'; ">Hapus</a></td>
			<td><a href="edit_data_motor.php?id='.$row['kode_motor'].'">Edit</a></td>
		</tr>';
}
echo '
	</tbody>
</table>';

mysqli_free_result($query);

mysqli_close($db);
?>

	<br>
	<a href="/sewa_motor/input_data_motor.php"> <center><button class="button">Tambah Data Motor</button></center><br></a>
	<br>
		<a href="/sewa_motor/tampil_data_gabungan.php"> <center><button class="button">Tampilkan Data Gabungan</button></center><br></a>
	<br>
		<a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Kembali ke Menu Utama </span></button></center></a>
	</body>
</html>