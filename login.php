<?php
session_start();
if(isset($_SESSION["id"]))
	header("Location:user_dashboard.php");
?>
<html>
	<head>
		<title>Login | TKCS</title>
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
				echo   	"<li><a href='register.php'>Register</a></li>
					<li class='active'><a href='login.php'>Log In</a></li>";
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
					<div class="panel-heading"><p>Log In</p></div>
						<div class="panel-body" style="color:black;">
							<p>Enter your login details</p>
							<div class="form-group">
							<center><form method="post" action="login.php">
								
										TKCS ID:&nbsp&nbsp&nbsp<input type="text" name="id" class="form-control" placeholder="Enter Your TKCS ID"><br/>
										Password:&nbsp<input class="form-control" class="form-control" type="password" name="pwd" placeholder="Enter your password"><br/>
										<?php
											if(isset($_POST["login"])){
												if(empty($_POST["id"]) || empty($_POST["pwd"])){
												echo "Please enter the details.";
												}
												else
												{
													$id=$_POST["id"];
													$pwd=$_POST["pwd"];
													$connection = mysql_connect("localhost","root","qweqweqwe");
													$id = stripslashes($id);
													$pwd = stripslashes($pwd);
													$id = mysql_real_escape_string($id);	
													$pwd = mysql_real_escape_string($pwd);
													$db = mysql_select_db("tkcs",$connection);
													$query=mysql_query("select * from users where id='$id' && pwd ='$pwd';",$connection);
													$row  = mysql_fetch_array($query);	
													if(is_array($row)){
													$_SESSION["id"]=$row[id];
													$_SESSION["name"]=$row[name];
													$_SESSION["email"]=$row[email];
													$_SESSION["pwd"]=$row[pwd];
													header("Location:user_dashboard.php");
													}
													else 
														echo "Invalid id or password or both<br />";
												}
	
											}											
										?>
										<button type="submit" name="login" class="btn btn-default">Log In</button> &nbsp|&nbsp Don't have an account <a href="register.php">Register here</a>
							</form></center>
							</div>
						</div>
					</div>
					<div class="panel-footer" style="color:black;">*If you have register than wait for 1 day before loging in</div>
				</div>
			</div>
		</div>
	</body>
	<footer>Copyright@ 2015</footer>
</html>
