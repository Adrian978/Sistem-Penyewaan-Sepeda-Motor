<?php
   session_start();
   if(isset($_SESSION['username'])) {
   header('location:menu_utama.php'); }
?>
<link rel="stylesheet" type="text/css" href="css/style4.css">
<title>Form Pendaftaran</title>
<div align='center'>
<div id="main">
<div id="first">
  <form action="prosesdaftar.php" method="post">
  <h1>Daftar Baru</h1>
  <table>
  <tbody>
  <tr><td>Username</td><td> : <input name="username" type="text"></td></tr>
  <tr><td>Password</td><td> : <input name="password" type="password"></td></tr>
  <tr><td colspan="2" align="center"><input value="Daftar" type="submit"> <input value="Batal" type="reset"></td></tr>
  <tr><td colspan="2" align="center">Sudah Punya akun ? <a href="index.php"><b>Login</b></a></td></tr>
  </tbody>
  </table>
  </form>
</div>