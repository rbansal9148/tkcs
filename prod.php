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
					<li class="active"><a href="prod.php">Products</a></li>
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
 <form class="navbar-form">
        <div class="form-group" style="display:inline;">
          <div class="input-group" style="display:table;">
            <span class="input-group-addon" style="width:1%;"><span class="glyphicon glyphicon-search"></span></span>
            <input class="form-control" name="search" placeholder="Search Here" autocomplete="off" autofocus="autofocus" type="text">
          </div>
        </div>
      </form>
<hr>
<div class="container">
	<div class="row">
		<div class="col-xs-18 col-sm-4 col-md-3">
			<div class="productbox">
				<div class="imgthumb img-responsive">
					<img class="img-responsive" src="http://www.retirement-today.co.uk/images/peas1.jpg">
				</div>
				<div class="caption">
					<h5>BEANS PEAS</h5>
<s class="text-muted">Rs 60</s> <b class="finalprice">Rs 40</b> from <b>TKCS</b><br>
					<a href="#" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-edit"></i></a> <a href="#" class="btn btn-info btn-xs" role="button">BUY</a> <a href="#" class="btn btn-default btn-xs" role="button">ADD TO CART</a>
				</div>
			</div>
		</div>

		<div class="col-xs-18 col-sm-4 col-md-3">
			<div class="productbox">
				<div class="imgthumb img-responsive">
					<img class="img-responsive" src="http://www.rastaseed.com/wp-content/uploads/2008/11/marigold_seed_rasta.jpg">
				</div>
				<div class="caption">
					<h5>MARIGOLD</h5>
<s class="text-muted">Rs 70</s> <b class="finalprice">Rs 50</b> from <b>TKCS</b><br>
					<a href="#" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-edit"></i></a> <a href="#" class="btn btn-info btn-xs" role="button">BUY</a> <a href="#" class="btn btn-default btn-xs" role="button">ADD TO CART</a>
				</div>
			</div>
		</div>

		<div class="col-xs-18 col-sm-4 col-md-3">
			<div class="productbox">
				<div class="imgthumb img-responsive">
					<img class="img-responsive" src="http://toptropicals.com/pics/garden/2004/4/4704.jpg">
				</div>
				<div class="caption">
					<h5>SESBANIA</h5>
<s class="text-muted">Rs 150</s> <b class="finalprice">Rs 99</b> from <b>TKCS</b><br>
					<a href="#" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-edit"></i></a> <a href="#" class="btn btn-info btn-xs" role="button">BUY</a> <a href="#" class="btn btn-default btn-xs" role="button">ADD TO CART</a>
				</div>
			</div>
		</div>

		<div class="col-xs-18 col-sm-4 col-md-3">
			<div class="productbox">
				<div class="imgthumb img-responsive">
					<img class="img-responsive" src="http://cucku.in/uploads/products/104311082015180431_Basmati-Rice.jpg">
				</div>
				<div class="caption">
					<h5>RICE</h5>
<s class="text-muted">Rs 800</s> <b class="finalprice">Rs 665</b> from <b>TKCS</b><br>
					<a href="#" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-edit"></i></a> <a href="#" class="btn btn-info btn-xs" role="button">BUY</a> <a href="#" class="btn btn-default btn-xs" role="button">ADD TO CART</a>
				</div>
			</div>
		</div>
		
		<div class="col-xs-18 col-sm-4 col-md-3">
			<div class="productbox">
				<div class="imgthumb img-responsive">
					<img class="img-responsive" src="https://upload.wikimedia.org/wikipedia/commons/9/96/Wheat_P1210892.jpg">
				</div>
				<div class="caption">
					<h5>WHEAT</h5>
<s class="text-muted">Rs 200</s> <b class="finalprice">Rs 150</b> from <b>TKCS</b><br>
					<a href="#" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-edit"></i></a> <a href="#" class="btn btn-info btn-xs" role="button">BUY</a> <a href="#" class="btn btn-default btn-xs" role="button">ADD TO CART</a>
				</div>
			</div>
		</div>

		<div class="col-xs-18 col-sm-4 col-md-3">
			<div class="productbox">
				<div class="imgthumb img-responsive">
					<img class="img-responsive" src="http://2.wlimg.com/product_images/bc-full/dir_13/376735/yellow-maize-1416017.jpg">
				</div>
				<div class="caption">
					<h5>MAIZE</h5>
<s class="text-muted">Rs 180</s> <b class="finalprice">Rs 160</b> from <b>TKCS</b>
                  	<div class="btn-group">
                      <button type="button" class="btn btn-info btn-xs" role="button">BUY</button>
                      <button type="button" class="btn btn-default btn-xs" role="button">ADD TO CART</button> 
                  	</div>
					<a href="#" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-edit"></i></a>
				</div>
			</div>
		</div>
		
		<div class="col-xs-18 col-sm-4 col-md-3">
			<div class="productbox">
				<div class="imgthumb img-responsive">
					<img class="img-responsive" src="http://www.seriouseats.com/images/2014/02/20140203-grains-pearl-barley.jpg">
				</div>
				<div class="caption">
					<h5>BARLEY</h5>
                  	<s class="text-muted">Rs 200</s> <b class="finalprice">Rs 150</b> from <b>TKCS</b>
                  	<a href="#" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-zoom-in"></i></a>
<div class="btn-group">
                      <button type="button" class="btn btn-info btn-xs" role="button">BUY</button>
                      <button type="button" class="btn btn-default btn-xs" role="button">ADD TO CART</button> 
                  	</div>
					<a href="#" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-edit"></i></a>
                    
              	</div>
              		</div>
		</div>		
	</div><!--/row-->
</div><!--/container -->  	</div>
</body>
</html>
