<?php 

	include 'connection.php';
	include 'Vars.php';

    if(isset($_GET['shop'])){
        $ownerShopName = mysqli_real_escape_string($con, $_GET["shop"]);
        $_SESSION["ownerShopName"] = $ownerShopName;    
    }else if(isset($_SESSION['shop'])){
	
	}else{
		header('location:home.php');
	}


?>

<!DOCTYPE html>
<html>
	
    <head>

        <title>
            <?php echo $_SESSION["ownerShopName"]; ?>
        </title>    
        
        <meta charset="UTF-8" />
        <meta https-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
        <meta name="description" content="Shop" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
                
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161923538-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'UA-161923538-2');
        </script>
        <!-- ending google analytics-->
        
        
        <!-- Latest compiled and minified CSS for boot strap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        
        
        <link rel="icon" type="image/x-icon" href="Image/Site/icon.jpeg">
        <link rel="stylesheet" type="text/css" href="style/index.css">
        
        
    </head>
	
	<style type="text/css">
	.carousel-inner img {
		/*width: 100%;*/
		margin: auto;
		min-height:200px;
		max-height: 600px;
		max-width: 700px;
	}
	@media (max-width: 600px) {
		.carousel-caption {
			display: none; 
		}
	}

	</style>


	<body>

        <section id="header">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-fixed-top">
                <!-- Brand -->
                <a class="navbar-brand" href="#"><?php echo $_SESSION["ownerShopName"]; ?></a>
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Offers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li>
                            
                        </li>
                    </ul>
                </div>
			</nav>
			
		</section>   

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
				<h1> BAMBA KIRANA STORE </h1>      
				<strong><h2 class="mark"> You Want it ? We got it. </h2></strong>
			</div>
		</div>

		<div class="btn-group btn-group-justified" style="top: -15px;">
		  	<div class="btn-group">
		    	<button type="button" class="btn btn-primary">Shop by Category</button>
		  	</div>
		  	<div class="btn-group">
		    	<a href="open_stater.php"><button id="shop_status" type="button" class="btn btn-success"> Open </button></a>
			</div>
			<div class="btn-group">
				<button type="button" class="btn btn-info">Shop by Offers</button>
			</div>
		</div>


		
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
			</ol>

		    <!-- Wrapper for slides -->
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="Image/Site/1.jpg" alt="Image">
					<div class="carousel-caption">
						<h3>Our Products $</h3>
						<!--	<p>Money Money.</p>	-->
					</div>      
				</div>

				<div class="item">
					<img src="Image/Site/2.jpg" alt="Image">
					<div class="carousel-caption">
						<h3>More Products $</h3>
						<!--p>Lorem ipsum...</p-->
					</div>      
				</div>
			</div>

		    <!-- Left and right controls -->
		    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		    </a>
		    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		    </a>
		</div>
		  



        <section id="Footer">
			<nav class="navbar navbar-inverse navbar-fixed-bottom fixed-bottom navbar bg-light bg-dark">
				<div class="container-fluid">
					<div class="navbar-header">
						<div class="navbar-brand content text-muted">
							Copyright © 2020 Design by Sahaj Bamba								
						</div>
					</div>
				</div>
			</nav>
		</section>

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
				
		<!-- My Scripts -->
		<script src="index.js"></script>

        <script type="text/javascript">
            $(document).ready(function(){

                <?php 

                    $result = $con->query("SELECT * FROM open WHERE 1");
                    $X = $result->fetch_assoc();
                    if ($X["is_open"] == 0) {
                ?>
                    $("#shop_status").removeClass("btn-success");
                    $("#shop_status").addClass("btn-danger");
                    $("#shop_status").text('Closed');
                <?php } 
                else { ?>
                
                    $("#shop_status").removeClass("btn-danger");
                    $("#shop_status").addClass("btn-success");
                    $("#shop_status").text('Open');
                
                <?php } ?>

                <?php 
                if ((isset($_SESSION["gamer"]))&&(strcmp($_SESSION["gamer"]["type"], "owner")==0)) {  
                ?>
                    $("#shop_status").removeClass("disabled");
                    
                <?php 
                } 
                else {
                ?>
                    $("#shop_status").addClass("disabled");
                <?php } 
                ?>
            });

            
        </script>


    </body>

</html>