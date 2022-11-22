<?php

include "../database/koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM orders WHERE id=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
if (!$sql) {
    echo "<script>alert('Data tidak ditemukan')</script>";
}

if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $products = $_POST['products'];
    $paid = $_POST['paid'];

    $query = mysqli_query($conn, "UPDATE orders SET name='$name', products='$products', paid='$paid' WHERE id=$id");

    if ($sql) {
        echo "<script>alert('Data berhasil diupdate')</script>";
        header("Refresh:0; url=lihat_transaksi.php");
    } else {
        die("gagal update...");
    }

}

?>
<html>
    <head>
        <title>Data Stok Barang</title>
    </head>
    <style>
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
    </style>
    <body>
        <center>
        <a href="index.php">Home</a>
        
        <form name="update_user" method="post">
            <table border="0">
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name" value=<?php echo $data['name'] ?>></td>
                </tr>
                <tr>
                    <td>Products</td>
                    <td><input type="text" name="products" value=<?php echo $data['products']; ?>></td>
                </tr>
                <tr>
                    <td>Paid</td>
                    <td><input type="text" name="paid" value=<?php echo $data['paid']; ?>></td>
                </tr>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
            </table>
        </center>
    </body>
</html>