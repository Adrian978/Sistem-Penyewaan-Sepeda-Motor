<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style4.css">
    <title>Form Input Data Sewa</title>
</head>
<body>
<h1  align=center>Form Input Data Sewa</h1>
<h3  align=center>Inputkan Data</h3>
<div id="main">
<div id="first">
    <body>
        <form method="post" action="proses_simpan_data_sewa.php">
            <table border="0">
                <tr><td>No Sewa</td><td><input type="text" name="no_sewa" maxlength="10"></td><td></td></tr>
                <tr><td>Jenis Motor</td><td><input type="text" name="jenis_motor" maxlength="50"></td><td></td></tr>
                <tr><td>Biaya</td><td><input type="text" name="biaya" maxlength="50"></td><td></td></tr>
				<tr><td>Denda</td><td><input type="text" name="denda" maxlength="20"></td><td></td></tr>
                <tr><td>Tanggal Sewa</td><td><input type="date" name="tgl_sewa" maxlength="50"></td><td></td></tr>
                <tr><td>Tanggal Kembali</td><td><input type="date" name="tgl_kembali" maxlength="50"></td><td></td></tr>
                <tr><td></td><td><input type="submit" value="SIMPAN DATA"></td></tr>
            </table>
        </form>
    </body>
</html>
<html>
        <a href="/sewa_motor/tampil_data_sewa.php"> <center><button class="button">Tampilkan Data Sewa</button></center><br></a>
        <a href=menu_utama.php> <center><button class="button1" style="vertical-align:middle" type="submit"><span>Menu Utama </span></button></center></a>
    </body>
</html>