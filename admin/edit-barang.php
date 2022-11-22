<?php

include "../database/koneksi.php";
$id = $_GET['id'];
$query = "SELECT * FROM product WHERE id=$id";
$sql = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($sql);
if (!$sql) {
    echo "<script>alert('Data tidak ditemukan')</script>";
}

if (isset($_POST['update'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_qty = $_POST['product_qty'];
    $product_image = $_POST['product_image'];
    $product_code = $_POST['product_code'];

    $query = mysqli_query($conn, "UPDATE product SET product_name='$product_name', product_price='$product_price', product_qty='$product_qty', product_image='$product_image', product_code='$product_code' WHERE id=$id");

    if ($sql) {
        echo "<script>alert('Data berhasil diupdate')</script>";
        header("Refresh:0; url=stok_barang.php");
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
        <a href="halaman_admin.php">Home</a>
        <br>
        <br>
        
        <form name="update_user" method="post" >
            <table border="0">
                <tr>
                    <td>Product Name</td>
                    <td><input type="text" name="product_name" value=<?php echo $data['product_name']; ?>></td>
                </tr>
                <tr>
                    <td>Product Price</td>
                    <td><input type="text" name="product_price" value=<?php echo $data['product_price']; ?>></td>
                </tr>
                <tr>
                    <td>Quantity</td>
                    <td><input type="text" name="product_qty" value=<?php echo $data['product_qty']; ?>></td>
                </tr>
                <tr>
                    <td>Image</td>
                    <td><input type="text" name="product_image" value=<?php echo $data['product_image']; ?>></td>
                </tr>
                <tr>
                    <td>Code</td>
                    <td><input type="text" name="product_code" value=<?php echo $data['product_code']; ?>></td>
                </tr>
            </table>
            <tr>
                    <td><input type="submit" name="update" value="Update"></td>
                </tr>
</form>
        </center>
    </body>
</html>