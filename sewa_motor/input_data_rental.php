<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style4.css">
    <title>Form Input Data Rental</title>
</head>
<body>
<h1  align=center>Form Input Data Rental</h1>
<h3  align=center>Inputkan Data</h3>
<div id="main">
<div id="first">
    <body>
        <form method="post" action="proses_simpan_data_rental.php">
            <table border="0">
                <tr><td>No NPWP</td><td><input type="text" name="no_npwp" maxlength="30"></td><td></td></tr>
                <tr><td>Nama</td><td><input type="text" name="nama" maxlength="50"></td><td></td></tr>
                <tr><td>Jumlah Motor</td><td><input type="text" name="jml_motor" maxlength="11"></td><td></td></tr>
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