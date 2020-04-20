<?php 

	include 'connection.php';
	include 'Vars.php';

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        
        <title>
            Shop
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
        <link rel="stylesheet" type="text/css" href="Style/home.css">
        <link rel="stylesheet" type="text/css" href="Style/login.css">
        
        
    </head>

    <body>

        <section id="header">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark navbar-fixed-top">
                <!-- Brand -->
                <a class="navbar-brand" href="#">Your Store</a>
                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#"></a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li>
                            
                        </li>
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
		
		<section id="Main-Content">

            <div class="jumbotron">
                    <div class="container text-center">
                        <h1 class="display-2"> Your Store </h1>      
                        <strong><h4 class="mark"> Looking for something, Come have a look. </h4></strong>
                    </div>
            </div>

            <div class="box">
                <h2>Welcome</h2>
                <form action="index.php" autocomplete="off" method="GET">
                    <div class="inputbox">
                        <input type="text" name="shop" required>
                        <label>Shop Name</lable>
                    </div>
                </form>
            </div> 

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
		<script src="Javascript/home.js"></script>
		
	</body>
</html>
