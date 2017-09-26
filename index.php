<?php
session_start();
?>
<html>
	<head>
		<title>Index | TKCS</title>
		<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
		<script src="./bootstrap/js/bootstrap.js"></script>
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation" style="Overflow;auto;">
			<div class="container-fluid">
				<div class="navbar-header">
      					<a class="navbar-brand" href="#">TKCS</a>
    				</div>
				<ul class="nav navbar-nav navbar-left">
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="prod.php">Products</a></li>
					<li><a href="news.php">AgriNews</a></li>
					<li><a href='contact.php'>Contact Us</a></li>
					<li><a href="problems.php">Problems?</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php if(!isset($_SESSION["id"]))
				echo   	"<li><a href='register.php'>Register</a></li>
					<li><a href='login.php'>Log In</a></li>";
				else	echo "<li><a href='user_dashboard.php'>Dashboard</a></li>
					<li><a href='logout.php'>Logout</a></li>";
					?>
					<li><a href="aboutus.php">About Us</a></li>
				</ul>
			</div>
		</nav>
		<div class="container">
			<div class="jumbotron" style="background-image:url('./images/background.jpg');width:100%;height:40%;color:white">
				<h1>Find all the agriculture products here</h1>
				<p>Serving people all over Punjab<p>
			</div>
		</div>
		<div class="container">
			<h2>Our moto is to supply agriculture products to all farmers easily and at cheaper rate from market</h2>
			<h4>We supply products like Seeds, Farm Machinery, Fertlizers, Pesticides and much more</h4>
			<h4>We also provide services like latest news regarding the farming techniques, disease, etc.</h4>
			<h4>There is FAQ where you can see and ask questions regarding farming</h4>
		</div>
	</body>
</hmtl>
