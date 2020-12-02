<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:index.php'); 
} else { 
    $username = $_SESSION['username']; 
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="css/style2.css" type="text/css">
    <link rel="stylesheet" href="css/style2-1.css">
  </head>
  <body>
   <div class="wrapper">
        <div class="navigationDesktop">
            <nav>
                <ul>
                    <li><a href="#">Tambah Data</a>
                        <ul>
                            <li><a href="/sewa_motor/input_data_pelanggan.php">Pelanggan</a></li>
                            <li><a href="/sewa_motor/input_data_motor.php">Motor</a></li>
                            <li><a href="/sewa_motor/input_data_sewa.php">Sewa</a>
                            <li><a href="/sewa_motor/input_data_rental.php">Rental</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="#">Lihat Data</a>
                        <ul>
                            <li><a href="/sewa_motor/tampil_data_pelanggan.php">Pelanggan</button></a></li>
                            <li><a href="/sewa_motor/tampil_data_motor.php">Motor</a></li>
                            <li><a href="/sewa_motor/tampil_data_sewa.php">Sewa</a></li>
                            <li><a href="/sewa_motor/tampil_data_rental.php">Rental</a></li>
                        </ul>
                    </li>
                    <li><a href="/sewa_motor/tampil_data_gabungan.php">Lihat Join</a>
                    </li>
                    <li><a href="logout.php">Logout</a>
                </ul>
            </nav>
        </div>
		
 <header class="intro">
 <head>
    <div align='center'>
    <h1 align=center>Penyewaan Sepeda Motor</h1>
    Selamat Datang, <b><?php echo $username;?></b>
</head>
<body>
  </body>
</html>