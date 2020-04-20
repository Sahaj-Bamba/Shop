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
        <link rel="stylesheet" type="text/css" href="Style/login.css">
        
        
    </head>
	
	<style type="text/css">
	</style>

    <style>
        .error {color: #FF0000;}
    </style>

	<body>

        <?php 
            include 'common/header.php';
        ?>

		<section id="main-content">

	

            <div class="box">
            <h2>Signup</h2>
            
            <form action="signup_.php" autocomplete="off" method="POST">

                <div class="inputbox">
                    <input type="text" name="name" required>
                    <label>Username</lable>
                </div>
                <div class="inputbox">
                    <input type="text" name="phone" required>
                    <label>Phone Number</lable>
                </div>
                <div class="inputbox">
                    <input type="email" name="email" required>
                    <label>Email</lable>
                    
                </div>
                <div class="inputbox">
                    <input type="text" name="address" required>
                    <label>Address</lable>
                </div>
                <div class="inputbox">
                    <input type="password" name="password" required>
                    <label>Password</lable>
                    <span class="error" style="font-size: 0.4em;"> 
                </div>
                <input type="submit" name="submit" value="Submit">
                <br>
                <div class="inputbox">
                    <label><?php $_SESSION['Er']; ?></lable>
                    <span class="error" > <?php echo $_SESSION["repeatErr"];?></span>     
                        <br>
                    <span class="error" > <?php echo $_SESSION["nameErr"];?></span>     
                        <br>
                    <span class="error" > <?php echo $_SESSION["phoneErr"];?></span>     
                        <br>
                    <span class="error" > <?php echo $_SESSION["emailErr"];?></span>    
                        <br>
                    <span class="error" > <?php echo $_SESSION["passErr"];?></span>     
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
		<script src="Javascript/category.js"></script>

		<script type="text/javascript">

			$(document).ready(function () {

            });
            
		</script>

    </body>
</html>

            
