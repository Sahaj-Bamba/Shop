<?php 

	include 'connection.php';
	// include 'Vars.php';

?>

<!DOCTYPE html>
<html>
	
    <head>

        <?php 
            include 'common/head.php';
        ?>

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
            
            <form action="process/signup_.php" autocomplete="off" method="POST">

                <div class="inputbox">
                    <input type="text" name="name" required>
                    <label>Username</lable>
                </div>
                <div class="inputbox">
                    <input type="text" name="shopname" required>
                    <label>Shop Name</lable>
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

        <?php 
            include 'common/footer.php';
        ?>

		<!-- My Scripts -->
		<script src="Javascript/category.js"></script>

		<script type="text/javascript">

			$(document).ready(function () {

            });
            
		</script>

    </body>
</html>

<!DOCTYPE html>
<html>
	<head>
		
		<meta charset="UTF-8">
		<title>Bamba Kirana Store</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<link rel="icon" type="image/x-icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="style/login.css">
			
	</head>
	<body style="background: url(Images/background.jpg);">
		<div class="box">
			<h2>Login</h2>
			
			<form method="POST" action="login_.php" autocomplete="off" >

				<div class="inputbox">
					<input type="text" name="name" required>
					<label>Username</lable>
				</div>
				<div class="inputbox">
					<input type="password" name="password" required>
					<label>Password</lable>
				</div>
				<center>
					<input type="submit" name="submit" value="Submit">
				</center>
			</form>
			<br>
			<center>
				<a href="signup.php"><button> Signup </button> </a>
			</center>
		</div>
	</body>
</html>
