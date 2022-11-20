<?php
// Starting the session, to use and
// store data in session variable
session_start();

// If the session variable is empty, this
// means the user is yet to login
// User will be sent to 'login.php' page
// to allow the user to login
if (!isset($_SESSION['username'])) {
	$_SESSION['msg'] = "You have to log in first";
	header('location: login.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="admin/style.css" rel="stylesheet">
    <title>Admin</title>
</head>
<body>
  	<input class="menu-icon" type="checkbox" id="menu-icon" name="menu-icon"/>
  	<label for="menu-icon"></label>
  	<nav class="nav"> 		
  		<ul class="pt-5">
  			<li><a href="tambah_menu.php">Tambah Menu</a></li>
            <br>
  			<li><a href="transaksi.php">Transaksi</a></li>
  		</ul>
  	</nav>

  	<div class="section-center">
  		<h1 class="mb-0">Selamat Datang</h1>
        <h1 class="mb-0">Admin</h1>
  	</div>
</body>
</html>