<?php 

	include 'connection.php';
	include 'Vars.php';

	if(isset($_SESSION['ownerShopName'])){
	
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
        <link rel="stylesheet" type="text/css" href="Style/category.css">
        
        
    </head>
	
	<style type="text/css">
	</style>


	<body>

        <section id="header fixed-top" style="position: fixed; width: 100%;">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
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
                            <a class="nav-link" href="category.php">Category</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="offer.php">Offers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
						<?php 
							if ((isset($_SESSION["gamer"]))&&(strcmp($_SESSION["gamer"]["type"], "owner")==0)) {  
						?>
							<li class="nav-item">
								<a class="nav-link" href="#">Add Category</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Add Product</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">Add Offers</a>
							</li>
					
						<?php } ?>
					
					</ul>
					
                    <ul class="navbar-nav">
						<?php if (!(isset($_SESSION["gamer"]))) {  ?>
					
							<li class="nav-item">
								<a href="signup.php" class="nav-link"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
							</li>
							<li class="nav-item">
								<a href="login.php" class="nav-link"><span class="glyphicon glyphicon-log-in"></span> Login</a>
							</li>
						
						<?php 
						}
						else { 
						?>

							<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $_SESSION["gamer"]["name"]; ?> <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="profile.php">Profile</a></li>
									<li class="nav-item"><a class="nav-link" href="change_pic.php">Change Pic</a></li>
									<li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
								</ul>
							</li>

						<?php  
							}
						?>
							
					</ul>

                </div>
			</nav>
			
		</section>   


		<section id="main-content">

			<div class="jumbotron">
				<div class="container text-center">
					<h1 class="display-2"> Categories </h1>      
					<strong><h4 class="mark"> We will not provide you what you want, but what you should have </h4></strong>
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


		</section>

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
		<script src="Javascript/category.js"></script>

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

    </body>

</html>

