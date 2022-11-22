<?php
include_once("../database/koneksi.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM product WHERE id=$id");
header("location:stok_barang.php");