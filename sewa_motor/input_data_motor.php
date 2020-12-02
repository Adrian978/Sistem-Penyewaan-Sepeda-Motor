<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style4.css">
    <title>Form Input Data Motor</title>
</head>
<body>
<h1  align=center>Form Input Data Motor</h1>
<h3  align=center>Inputkan Data</h3>
<div id="main">
<div id="first">
    <body>
        <form method="post" action="proses_simpan_data_motor.php">
            <table border="0">
                <tr><td>Kode Motor</td><td><input type="text" name="kode_motor" maxlength="10"></td><td></td></tr>
                <tr><td>Nama Motor</td><td><input type="text" name="nm_motor" maxlength="50"></td><td></td></tr>
                <tr><td>Merk</td><td><input type="text" name="merk" maxlength="50"></td><td></td></tr>
                <tr><td>Tahun Buat</td><td><input type="text" name="thn_buat" maxlength="10"></td><td></td></tr>
                <tr><td>Model</td><td><input type="text" name="model" maxlength="30"></td><td></td></tr>
                <tr><td></td><td><input type="submit" value="SIMPAN DATA"></td></tr>
            </table>
        </form>
    </body>
</html>
<html>
        <a href="/sewa_motor/tampil_data_motor.php"> <center><button class="button">Tampilkan Data Motor</button></center><br></a>
        <a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Menu Utama </span></button></center></a>
    </body>
</html>