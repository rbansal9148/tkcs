<?php
	session_start();
	if(!isset($_SESSION["id"]))
	header("Location:login.php");
	$id=$_SESSION["id"];
	$name=$_SESSION["name"];
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
			<div class="jumbotron">
				<div class="panel panel-default">
					<div class="panel-heading"><p>DashBoard</p></div>
					<div class="container">
						<div class="panel-body" style="color:black;">
							<p>Your Information</p>
							<table width=100%>
								<tr><td width=50%><p>Name:</p></td><td width=50%><p><?php echo $name;?></p></td></tr>
								<tr><td width=50%><p>Id:</p></td><td width=50%><p><?php echo $id;?></p></td></tr>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
