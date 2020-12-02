<?php 
include 'koneksi.php';
$table_name = 'motor';

$kode_motor = $_GET['id'];
$merk = $_GET['Merk'];
$nm_motor = $_GET['nm_motor'];

// query SQL untuk insert data
$query="DELETE FROM $table_name WHERE kode_motor='$kode_motor'";

mysqli_query($db, $query);
if (!$query) {
	die ('ERROR: Data gagal dihapus dari tabel :' . $table_name . ', dikarenakan : ' . mysqli_error($db));
}

echo 'Data '. $merk .' '. $nm_motor .' berhasil dihapus dari tabel ' . $table_name . ''; 
?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
	<br>
		<a href="/sewa_motor/tampil_data_motor.php"> <center><button class="button">Tampilkan Data Motor</button></center><br></a>
	<br>
		<a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Kembali ke Menu Utama </span></button></center></a>
	</body>
</html>