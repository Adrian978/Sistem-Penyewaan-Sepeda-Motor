<?php
include 'koneksi.php';
$table_name='sewa';

// menyimpan data kedalam variabel
$no_sewa			= $_POST['no_sewa'];
$jenis_motor        = $_POST['jenis_motor'];
$biaya	    		= $_POST['biaya'];
$denda		   	    = $_POST['denda'];
$tgl_sewa   	    = $_POST['tgl_sewa'];	
$tgl_kembali    	    = $_POST['tgl_kembali'];			
// query SQL untuk insert data

$query="INSERT INTO $table_name SET no_sewa='$no_sewa',jenis_motor='$jenis_motor',biaya='$biaya',denda='$denda',tgl_sewa='$tgl_sewa',tgl_kembali='$tgl_kembali'";

mysqli_query($db, $query);

if (!$query) {
	die ('ERROR: Data gagal dimasukkan pada tabel ' . $table_name . ': ' . mysqli_error($db));
}

echo 'Data Sewa berhasil dimasukkan pada tabel ' . $table_name . '';

?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style1.css">
</head>
	<br>
		<a href="/sewa_motor/tampil_data_sewa.php"> <center><button class="button">Tampilkan Data Sewa</button></center><br></a>
	<br>
		<a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Kembali ke Menu Utama </span></button></center></a>
	</body>
</html>