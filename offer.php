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


		<link rel="stylesheet" type="text/css" href="Style/offer.css">
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
				<li ><a href="category.php">Categories</a></li>
				<li class="active"><a href="offer.php">Offers</a></li>
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
				<h1> OFFERS </h1>      
				<strong><h2 class="mark"> Pay Less , Earn More. </h2></strong>
			</div>
		</div>

<?php


$res = $con->query("SELECT * FROM `offer` WHERE 1 ORDER BY id ;");
$htm = "";
$row = $res->num_rows+1;
$rows = floor($row/3);
$res->fetch_assoc();

while ($rows--) {
	$htm .= '<div class="row" > ';
		
	while ($X = $res->fetch_assoc()) {
	 		$htm .= '<div class="col-sm-4 offer_column" style=""> ';
	 		$a=$X['pic_loc'] ;
	 		$b = "background: url('$a')";
			$htm .= '<div class="col-sm-12 pic" style=" '.$b.'; background-repeat: no-repeat; background-position: center; background-size: 100% 100%;"></div> ';
			$htm .= '<div class="col-sm-12 title"></div> ';
			$htm .= '<div class="col-sm-12 title half"> '.$X['name'].' </div> ';
			$htm .= '<div class="col-sm-12 txt"> '.$X['details']."<br>".'Duration :- '.$X['duration'].'</div> ';
			$htm .= '</div> ';
	 	}
	$htm .= '</div>';
	echo $htm;
	$htm = ""; 	
} 



?>


	<!--
		<div class="row" >
			<div class="col-sm-4 offer_column" style="">
				<div class="col-sm-12 pic" style="background: url('Image/User/1.jpg'); background-repeat: no-repeat; background-position: center; background-size: 100% 100%;"></div>
				<div class="col-sm-12 title"></div>
				<div class="col-sm-12 title half"> title 1 </div>
				<div class="col-sm-12 txt"> text 1</div>
			</div>
			<div class="col-sm-4 offer_column">
				<div class="col-sm-12 pic" style="background: url('Image/User/1.jpg'); background-position: center;background-repeat: no-repeat; background-size: 100% 100%;"></div>
				<div class="col-sm-12 title" ></div>
				<div class="col-sm-12 title half" ><center>title 2</center></div>
				<div class="col-sm-12 txt"> text 2</div>
			</div>
			<div class="col-sm-4 offer_column">
				<div class="col-sm-12 pic" style="background: url('Image/User/1.jpg'); background-position: center;background-repeat: no-repeat; background-size: 100% 100%;"></div>
				<div class="col-sm-12 title"></div>
				<div class="col-sm-12 title half"> title 3 </div>
				<div class="col-sm-12 txt"> text 3</div>
			</div>
		</div>
	-->

	

		<script type="text/javascript">

			$(document).ready(function () {
			/*
					$(".Image").hover(function(){
			        		$(this).children(".Label").slideDown(1000);
			    		} , 

			    		function(){
			        		$(this).children(".Label").slideUp(2000);
			    		}
			    	);

			*/

				var x =screen.width;
				if (x>=768) {
				
					$(".offer_column").hover(function(){
						//console.log("ji");
						$(this).children(".title").slideDown(500);
					},function(){
						$(this).children(".title").slideUp(2000);
					});		
				}
			});
		</script>

	</body>
</html>