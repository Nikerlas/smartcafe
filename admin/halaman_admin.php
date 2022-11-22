<?php
include "../database/koneksi.php";
session_start();

if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: ../index.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Stok Barang</title>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
</head>
<style>
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
</style>
<body>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="halaman_admin.php">&nbsp;&nbsp;Smart Cafe</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link"><?php echo $_SESSION['username']?></a>
        </li>
      </ul>
    </div>
  </nav>
    <center>
    <br>
	<br>
	<br>
		<h1>Selamat Datang <?php echo $_SESSION['username']?></h1>
		<br>
		<br>
        <div class="link2">
        <br>
        <a href="tambah_barang.html">TAMBAH STOK BARANG</a> | <a href="stok_barang.php">LIHAT STOK BARANG</a> | <a href="lihat_transaksi.php">LIHAT TRANSAKSI</a>        
        </div>
		<br>

        <p style="color:white">@SMKN 9 Semarang</p>

    </center>
</body>
</html>

