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
					<li><a href="index.php">Home</a></li>
					<li><a href="prod.php">Products</a></li>
					<li class="active"><a href="news.php">AgriNews</a></li>
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
			<div class="jumbotron">
				<h2>Latest News in feild of agriculture.</h2>			
			</div>
		</div>
		<div class="container">
			<p>1.NCML forges partnership with South African agri-business firm<br /><br />

2.Basmati rice exporter DRRK Foods to enter domestic market with flagship brand Crown Basmati<br /><br />

3. Higher MSP on pulses expected to increase planting by 5-10% only<br /><br />

4. Explore option of genetically modified pulses: NITI member<br /><br />

5. Centre Hikes Minimum Support Prices for Rabi Crops to Boost Production<br /><br />
 
6. ‘Sarso mein IP ka tadka’ leaves local farmers in the dock<br /><br />

7. Agriculture department for bigger tobacco warnings<br /><br />

8. Agriculture department all geared up for pulling out farmers from agrarian crisis<br /><br />

9. Madurai agriculture department urges drought hit ryots to insure coconut trees<br /><br />

10. Agriculture department starts Geographical Indication process for Lasalgaon onions</p>
		</div>
	</body>
</html>
