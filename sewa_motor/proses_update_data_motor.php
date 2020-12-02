<?php
include 'koneksi.php';
$table_name='motor';

// menyimpan data kedalam variabel
$kode_motor			= $_POST['kode_motor'];
$nm_motor         	= $_POST['nm_motor'];
$merk         		= $_POST['merk'];
$thn_buat    	    = $_POST['thn_buat'];	
$model     			= $_POST['model'];


// query SQL untuk insert data
$query="UPDATE $table_name SET kode_motor='$kode_motor',nm_motor='$nm_motor',merk='$merk',thn_buat='$thn_buat',model='$model' WHERE kode_motor='$kode_motor'";

mysqli_query($db, $query);

if (!$query) {
	die ('ERROR: Data gagal diedit pada tabel ' . $table_name . ': ' . mysqli_error($db));
}

echo 'Data '. $merk .' '. $nm_motor .' berhasil diedit pada tabel ' . $table_name . '';
// mengalihkan ke halaman index.php

//header("location:tampil_data.php");
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