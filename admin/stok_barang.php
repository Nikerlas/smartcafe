<?php
include "../database/koneksi.php";
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "DELETE FROM product WHERE id=$id";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        echo "<script>alert('Data berhasil dihapus')</script>";
        header("Refresh:0; url=stok_barang.php");
    } else {
        die("gagal menghapus...");
    }

}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Stok Barang</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css' />
</head>
<style>
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 18px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
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
    <div class="judul">
        <h1>Stok Barang</h1>
    </div>
    <br>
    <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
    <thead>
        <tr class="align-middle" style="text-align: center;">
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Price</th>
            <Th>Quantity</th>
            <th>Image</th>
            <th>Code</th>
            <th colspan="2">Opsi</th>
        </tr>
    </thead>
</table>
</div>
<div class="tbl-content">
<table cellpadding="0" cellspacing="0" border="0">
    <tbody>
        <?php
            $no = 0;
            $tabel = mysqli_query($conn, "SELECT * FROM product ORDER BY id asc");
            while ($data = mysqli_fetch_array($tabel)) {
                $no++;
                ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['product_name']; ?></td>
                    <td><?php echo $data['product_price']; ?></td>
                    <td><?php echo $data['product_qty']; ?></td>
                    <td><img src="<?= $data['product_image'] ?>" style="width:100px;height:100px;"></td>
                    <td><?php echo $data['product_code']; ?></td>
                    <td><a href='hapus_barang.php?id="<?=$data['id']?>"' class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin untuk menghapus ?')">Hapus</a></td>
                    <td><a href='edit-barang.php?id="<?=$data['id']?>"' class="btn btn-warning btn-sm">Edit</a></td>
                <tr>
        <?php
            }
        ?>
    </tbody>
</table>
</div>
</center>
</body>
</html>