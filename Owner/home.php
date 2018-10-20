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
	  <link rel="stylesheet" type="text/css" href="style/index.css">

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
				<li class="active"><a href="#">Home</a></li>
				<li ><a href="category.php">Categories</a></li>
				<li ><a href="special.php">Special</a></li>
				<li ><a href="request.php">Request</a></li>
				<li ><a href="contact.php">Contact</a></li>
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

	</body>

</html>