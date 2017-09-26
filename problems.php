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
					<li class="active"><a href="problems.php">Problems?</a></li>
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
				<h2>Ask about your problems here</h2><br />
				<form method="post" action="problems.php">
					<p>Name<br />
					<input class="form-control" type="text" placeholder="Enter your name" name="name" value="<?php if(isset($_SESSION["name"])) echo $_SESSION["name"] ?>" />
					<p>Email-Id<br />
					<input class="form-control" style="width:30%;" type="email" placeholder="Enter your email id" value="<?php if(isset($_SESSION["name"])) echo $_SESSION["email"] ?>" name="email" />
					<p>Subject<br />
					<input class="form-control" style="width:50%;" type="text" placeholder="Enter your subject of your problem" name="subject" />
					<p>Details<br />
					<textarea class="form-control" style="width:70%;" rows="5" placeholder="Enter your details here"></textarea><br />
					<input class="btn btn-default" type="submit" name="submit" value="Submit">
					<?php
						if(isset($_POST["submit"])){							
							$name=$_POST["name"];
							$email=$_POST["email"];
							$subject=$_POST["subject"];
							echo "<br />Problem Reported";
							}
					?>
				</form>
			</div>
		</div>
	</body>
</html>
