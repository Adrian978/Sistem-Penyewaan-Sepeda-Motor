<?php
include 'koneksi.php';
$table_name='pelanggan';

// menyimpan data kedalam variabel
$id_pelanggan		= $_POST['id_pelanggan'];
$nama         		= $_POST['nama'];
$alamat     		= $_POST['alamat'];
$tgl_lahir   	    = $_POST['tgl_lahir'];
$nm_motor   	    = $_POST['nm_motor'];	
$no_telp    	    = $_POST['no_telp'];			
// query SQL untuk insert data

$query="INSERT INTO $table_name SET id_pelanggan='$id_pelanggan',nama='$nama',alamat='$alamat',tgl_lahir='$tgl_lahir',nm_motor='$nm_motor',no_telp='$no_telp'";

mysqli_query($db, $query);

if (!$query) {
	die ('ERROR: Data gagal dimasukkan pada tabel ' . $table_name . ': ' . mysqli_error($db));
}

echo 'Data Pelanggan='.$nama.' berhasil dimasukkan pada tabel ' . $table_name . '';

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