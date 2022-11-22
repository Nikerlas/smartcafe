<?php
include '../database/koneksi.php';

if (isset($_POST['submit'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_qty = $_POST['product_qty'];
    $product_image = $_POST['product_image'];
    $product_code = $_POST['product_code'];
}

$sql = mysqli_query($conn, "INSERT INTO product (product_name, product_price, product_qty, product_image, product_code) VALUES ('$product_name', '$product_price', '$product_qty', '$product_image', '$product_code')");

if(!$sql){
    echo "<script>alert('Data berhasil ditambahkan')</script>";
    header("Refresh:0; url=stok_barang.php");
} else {
    echo "<script>alert('Data gagal ditambahkan')</script>";
    header("Refresh:0; url=tambah_barang.html?status=gagal");
}
?>