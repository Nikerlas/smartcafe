<?php include('database/server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="akun/style.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
	.error {
		width: 92%;
		margin: 0px auto;
		padding: 10px;
		border: 1px solid #a94442;
		color: #a94442;
		background: #f2dede;
		border-radius: 5px;
		text-align: left;
	}
	.select {
		display: block;
  		width: 100%;
  		height: calc(1.5em + 0.75rem + 2px);
		color: #495057;
		font-size: 1rem;
  		font-weight: 400;
  		line-height: 1.5;
		background-color: #fff;
		background-clip: padding-box;
		padding: 0.375rem 0.75rem;
		border-radius: 0.25rem;
	}
</style>
<body style="background-image: url(image/bg1.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Selamat Datang<br>Pengguna Baru</h3>
		      	<form action="register.php" method="post" class="signin-form">
				  <?php include('database/errors.php'); ?>
		      		<div class="form-group">
		      			<input type="text" class="form-control" name="username" placeholder="Username">
		      		</div>
					<div class="form-group">
						<input type="text" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password_1" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password_2" placeholder="Confirm Password">
					</div>
					<div>
						<input type="hidden" value="pelanggan" name="level">
					</div>
	            	<div class="form-group">
	            		<button type="submit" class="form-control btn btn-primary submit px-3" name="reg_user">Register</button>
	            	</div>
	          	</form>
		      </div>
				</div>
			</div>
		</div>
		<center>
		<p>
			Have an account?
			<a href="index.php">
				Click here to login!
			</a>
		</p>
		</center>
	</section>

    <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>