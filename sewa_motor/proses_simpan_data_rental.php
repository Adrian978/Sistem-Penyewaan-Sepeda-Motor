<?php
include 'koneksi.php';
$table_name='rental';

// menyimpan data kedalam variabel
$no_npwp			= $_POST['no_npwp'];
$nama         		= $_POST['nama'];
$jml_motor  	    = $_POST['jml_motor'];	
		
// query SQL untuk insert data

$query="INSERT INTO $table_name SET no_npwp='$no_npwp',nama='$nama',jml_motor='$jml_motor'";

mysqli_query($db, $query);

if (!$query) {
	die ('ERROR: Data gagal dimasukkan pada tabel ' . $table_name . ': ' . mysqli_error($db));
}

echo 'Data Rental='.$nama.' berhasil dimasukkan pada tabel ' . $table_name . '';

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