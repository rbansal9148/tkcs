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
					<li><a href="news.php">AgriNews</a></li>
					<li><a href='contact.php'>Contact Us</a></li>
					<li><a href="problems.php">Problems?</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<?php if(!isset($_SESSION["id"]))
				echo   	"<li class='active'><a href='register.php'>Register</a></li>
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
				<div class="panel panel-default">
					<div class="panel-heading"><p>Registeration Form</p></div>
					<div class="container">
						<div class="panel-body" style="color:black;">
							<p>Enter your information</p>
							<center><form method="post" action="login.php">
								
										TKCS ID:&nbsp&nbsp&nbsp<input type="text" name="id" placeholder="Enter Your TKCS ID"><br/>
										Name:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="name" placeholder="Enter your name"><br/>
										Password:&nbsp<input type="password" name="pwd" placeholder="Enter your password"><br/><br/>
										Confirm Password:&nbsp<input type="password" name="pwdc" placeholder="Enter your password again"><br/><br/>
										<button type="button" class="btn btn-default">Register</button>
							</form></center>
						</div>
					</div>
					<div class="panel-footer" style="color:black;">*All input are compulsory</div>
				</div>
			</div>
		</div>
	</body>
	<footer>Copyright 2015</footer>
</html>
