<?php
include_once("../database/koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM orders WHERE id=$id");
header("location:lihat_transaksi.php");