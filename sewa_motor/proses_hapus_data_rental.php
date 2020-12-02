<?php 
include 'koneksi.php';
$table_name = 'rental';

$id_rental = $_GET['id'];
$nama = $_GET['Nama'];

// query SQL untuk insert data
$query="DELETE FROM $table_name WHERE id_rental='$id_rental'";

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
		<a href="/sewa_motor/tampil_data_rental.php"> <center><button class="button">Tampilkan Data Rental</button></center><br></a>
	<br>
		<a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Kembali ke Menu Utama </span></button></center></a>
	</body>
</html>