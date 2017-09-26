<?php
session_start();
?>
<html>
	<head>
		<title>About Us | TKCS</title>
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
					<li><a href="index.php">Home</a></li>
					<li><a href="prod.php">Products</a></li>
					<li><a href="news.php">AgriNews</a></li>
					<li class="active"><a href='contact.php'>Contact Us</a></li>
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
		<div class="jumbotron" style="background-image:url('./images/background2.jpg');width:100%;height:40%;color:white">
				<h1>The Takkar-Kalan Cooperative Society</h1>
			</div></div>
		<div class="container">
			<h2>About us</h2>
<p>Our Society is a nonprofit development organization established by a group of professionally trained agriculture graduates and IT graduates.
This trust is mainly established for development of Agriculture sector which is backbone of Indian economy. Working area of institute is ‘Maharashtra State’ but initially it is established in Takkhar Kalan. 
Our mission is to have largest penetration in rural masses for their socio-economic and cultural development through Agriculture research,self employment, awareness towards various Government Schemes and extended support from other agencies.
The TKCS is only born to help farmers in such type of villages. Presently we have selected 3 villages Takkhar, Sikanderpura, Binjoki which are locatead nar Malerotla, Punjab. In future we aim at expanding our social services.</p>
		</div>
	</body>
</html>
