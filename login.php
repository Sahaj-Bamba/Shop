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
			<h2>Login</h2>
			
			<form method="POST" action="process/login_.php" autocomplete="off" >

				<div class="inputbox">
					<input type="text" name="name" required>
					<label>Store Name</lable>
				</div>
				<div class="inputbox">
					<input type="password" name="password" required>
					<label>Password</lable>
				</div>
				<center>
					<input type="submit" name="submit" value="Submit">
				</center>
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
			<br>
			<center>
				<a href="signup.php"><button> Signup </button> </a>
			</center>
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
