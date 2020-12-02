<?php 
include 'koneksi.php';
$table_name = 'pelanggan';

$id_pelanggan = $_GET['id'];
$nama = $_GET['Nama'];

// query SQL untuk insert data
$query="DELETE FROM $table_name WHERE id_pelanggan='$id_pelanggan'";

mysqli_query($db, $query);
if (!$query) {
	die ('ERROR: Data gagal dihapus dari tabel :' . $table_name . ', dikarenakan : ' . mysqli_error($db));
}

echo 'Data '. $nama .' berhasil dihapus dari tabel ' . $table_name . ''; 
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
	<br>
		<a href="/sewa_motor/tampil_data_pelanggan.php"> <center><button class="button">Tampilkan Data Pelanggan</button></center><br></a>
	<br>
		<a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Kembali ke Menu Utama </span></button></center></a>
	</body>
</html>