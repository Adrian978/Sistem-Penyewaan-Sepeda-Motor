<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style4.css">
    <title>Form Input Data Pelanggan</title>
</head>
<body>
<h1  align=center>Form Input Data Pelanggan</h1>
<h3  align=center>Inputkan Data</h3>
<div id="main">
<div id="first">
    <body>
        <form method="post" action="proses_simpan_data_pelanggan.php">
            <table border="0">
                <tr><td>Id Pelanggan</td><td><input type="text" name="id_pelanggan" maxlength="50"></td><td></td></tr>
                <tr><td>Nama</td><td><input type="text" name="nama" maxlength="50"></td><td></td></tr>
                <tr><td>Alamat</td><td><input type="text" name="alamat" maxlength="50"></td><td></td></tr>
				<tr><td>Tgl Lahir</td><td><input type="date" name="tgl_lahir" maxlength="20"></td><td></td></tr>
                <tr><td>Nama Motor</td><td><input type="text" name="nm_motor" maxlength="50"></td><td></td></tr>
                <tr><td>No Telp</td><td><input type="text" name="no_telp" maxlength="25"></td><td></td></tr>
                <tr><td></td><td><input type="submit" value="SIMPAN DATA"></td></tr>
            </table>
        </form>
    </body>
</html>
<html>
        <a href="/sewa_motor/tampil_data_pelanggan.php"> <center><button class="button">Tampilkan Data Pelanggan</button></center><br></a>
        <a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Menu Utama </span></button></center></a>
    </body>
</html>