<?php
include 'koneksi.php';
$table_name='rental';

// menyimpan data kedalam variabel
$id_rental			= $_POST['id_rental'];
$no_npwp			= $_POST['no_npwp'];
$nama         		= $_POST['nama'];
$jml_motor  	    = $_POST['jml_motor'];	


// query SQL untuk insert data
$query="UPDATE $table_name SET id_rental='$id_rental',no_npwp='$no_npwp',nama='$nama',jml_motor='$jml_motor'WHERE id_rental='$id_rental'";

mysqli_query($db, $query);

if (!$query) {
	die ('ERROR: Data gagal diedit pada tabel ' . $table_name . ': ' . mysqli_error($db));
}

echo 'Data '. $nama .'  berhasil diedit pada tabel ' . $table_name . '';
// mengalihkan ke halaman index.php

//header("location:tampil_data.php");
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