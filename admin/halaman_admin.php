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
	header('location: ../index.php');
}

// Logout button will destroy the session, and
// will unset the session variables
// User will be headed to 'login.php'
// after logging out
if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.scss" rel="stylesheet">
    <title>Admin</title>
</head>
<body>
<div id="page">
  <div class="navigation"><a class="active" href="" onClick=" onRouteClick('a'); return false; ">admin</a><a href="" onClick=" onRouteClick('b'); return false; ">add</a><a href="" onClick=" onRouteClick('c'); return false; ">history</a></div>
  <div class="loader"></div>
  <div class="container">
    <div class="a">
      <div class="at ac">
			<center>
				<h5>Selamat Datang <br><?php echo $_SESSION['username']?></h5>
			</center>
		</div>
    </div>
  </div>
  <div class="container">
    <div class="b">
      <div class="bt ac">
		
	  </div>
    </div>
  </div>
  <div class="container">
    <div class="c">
      <div class="ct ac">contact</div>
    </div>
  </div>
</div>

<script>
	const appRoot = document.getElementById("page");
	const nav = document.querySelector(".navigation");
	const root=document.documentElement;
	const endTransition = () => {
	const loader = document.querySelector(".loader");
	loader.addEventListener("transitionend", () => {
		loader.style.transform = "translateX(100%)";
		root.classList.remove("disable-hover");
	});
	loader.style.transform = "";
};

const startTransition = () => {
	const loader = document.querySelector(".loader");
	loader.style.transform = "translateX(100%)";
	appRoot.dataset.route = "a";
};

nav.addEventListener("click", (e) => {
	if (e.target.nodeName === "A") {
		let a = Array.from(nav.children).find((v) => v.closest(".active"));
		root.classList.add("disable-hover");
		a.classList.remove("active");
		e.target.classList.add("active");
		e.preventDefault();
	}
});

const onRouteClick = (route) => {
	if (appRoot.dataset.route === route) return;
	appRoot.dataset.route = route;
	endTransition();
};

window.addEventListener("load", () => {
	startTransition();
});

</script>
</body>
</html>