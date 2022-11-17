<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$pass = $_POST['pass'];

$login = mysqli_query($conn, "SELECT * FROM user WHERE username='$username' and pass='$pass'");
$cek = mysqli_num_rows($login);

if ($cek > 0){
    $data = mysqli_fetch_assoc($login);

    if ($data['level']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        header("location:halaman_admin.html");
    }else if ($data['level']=="pelanggan"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "pelanggan";
        header("location:halaman_pelanggan.php");
    }else{
        header("location:index.php?pesan=gagal");
    }
}else{
	header("location:index.php?pesan=gagal");
}
 
?>