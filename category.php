<?php 

  include 'connection.php';
  include 'Vars.php';

?>

<!DOCTYPE html>
<html>
	
	<head>
		<title> Bamba Kirana Store </title>
		
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
	  <link rel="icon" type="image/x-icon" href="favicon.ico">

		<link rel="stylesheet" type="text/css" href="Style/home.css">
		<link rel="stylesheet" type="text/css" href="Style/home2.css">

	  <link rel="stylesheet" type="text/css" href="Style/index.css">
	  <link rel="stylesheet" type="text/css" href="Style/category.css">
	  <script type="text/javascript" src="javascript/index.js"></script>


	</head>

	<body>

		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <!--  Button for collapse of main nav bar  -->
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav-bar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <div class="active"><a class="navbar-brand active" href="#">Bamba Kirana Store</a></div>
			</div>
			<div class="collapse navbar-collapse" id="main-nav-bar">
			  <ul class="nav navbar-nav">
				<li ><a href="index.php">Home</a></li>
				<li class="active"><a href="category.php">Categories</a></li>
				<li ><a href="offer.php">Offers</a></li>
				<!--li ><a href="request.php">Request</a></li-->
				<li ><a href="contact.php">Contact</a></li>
				<?php 
				if ((isset($_SESSION["gamer"]))&&(strcmp($_SESSION["gamer"]["type"], "owner")==0)) {  
				?>

					<li><a href="add_category.php">Add Category</a></li>
					<li><a href="add_product.php">Add Product</a></li>
					<li><a href="add_offer.php">Add Offer</a></li>

				<?php } ?>
			  </ul>
			  <ul class="nav navbar-nav navbar-right" >
				<?php if (!(isset($_SESSION["gamer"]))) {  ?>
						<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<?php 
				}
				else { 
				?>
				  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $_SESSION["gamer"]["name"]; ?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
					  <li><a href="profile.php">Profile</a></li>
					  <li><a href="change_pic.php">Change Pic</a></li>
					  <li><a href="logout.php">Logout</a></li>
					</ul>
					</li>
					<?php  
						}
					?>
			  </ul>
			</div>
		  </div>
		</nav>


		<div class="jumbotron">
			<div class="container text-center">
				<h1> Categories </h1>      
				<strong><h2 class="mark"> We will not provide you what you want, but what you should have </h2></strong>
			</div>
		</div>



<?php

	$cats = $con->query("SELECT * FROM category WHERE 1 ;");
	while ($row = $cats->fetch_assoc()) {
		$htm = "";
		$htm .= '<div class="cat row alert alert-success">';
		$htm .= '<div class=" bullet" style="background: url('."'".$row['pic_loc']."'".');  background-repeat: no-repeat; background-size: 100% 100%; background-position: center; "> </div>';
		$htm .= '<div class=" name"> '.$row['name'].' </div>';
		
		echo $htm;
		$pros = $con->query("SELECT `id`, `name`, `rate`, `category`, `pic_loc`, `description` FROM `product` WHERE `category` ='".$row['name']."'");
		if ($pros->num_rows == 0) {
			echo "</div>";
			continue;
		}
		echo '<div class="all_pro" style="display: none;">';
		while ($col = $pros->fetch_assoc()) {
			$htm = "";
			$htm .= '<div class=" col-sm-12 product">';
			$htm .= '<div class="pic" style="background: url('."'".$col['pic_loc']."'".');  background-repeat: no-repeat; background-size: 100% 100%; background-position: center; ">';
			$htm .= '</div>';
			$htm .= '<div class="title">';
			$htm .= $col['name'];
			$htm .= '</div>	';
			$htm .= '<div class="description">';
			$htm .= $col['description'];
			$htm .= '</div>';
			$htm .= '<div class="rate">';
			$htm .= $col['rate'];
			$htm .= '</div>';
			$htm .=	'</div>';
			echo $htm;
		}
		$htm = "";
		$htm .= "</div>";
		$htm .= "</div>";
		echo $htm;
	}

?>


<!--
		<div class="cat row alert alert-success">
			<div class=" bullet" style="background: url();"> </div>
			<div class=" name"> name1 </div>
			<div class="all_pro" style="display: none;">
				<div class=" col-sm-12 product">
					<div class="pic" style="background: url(); background-repeat: no-repeat; background-size: 100% 100%; background-position: center;">
						pic 1
					</div>
					<div class="title">
						title 1
					</div>
					<div class="description">
						descr 1
					</div>
					<div class="rate">
						price 1
					</div>
				</div>
				<div class="product col-sm-12"> </div>
				<div class="product col-sm-12"> </div>
				<div class="product col-sm-12"> </div>
			</div>
		</div>
		<div class="cat row alert alert-success">
			<div class="bullet "> </div>
			<div class="name "> name1 </div>
		</div>
-->

		
	</body>

	<script type="text/javascript">
		$(document).ready(function () {
			var x=1;
			$(".cat").click(function(){
				if (x%2) {
					$(this).children(".all_pro").slideDown(100);
				}
				else{
					$(this).children(".all_pro").slideUp(1000);
				}
				x++;
			});
		});
	</script>
</html>