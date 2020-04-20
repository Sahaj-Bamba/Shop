<?php 

	require 'connection.php';
	require 'Vars.php';

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        
        <?php
            require 'common/head.php';
        ?>
        
        <link rel="stylesheet" type="text/css" href="Style/home.css">
        <link rel="stylesheet" type="text/css" href="Style/login.css">
        
    </head>

    <body>

        <?php
            require 'common/header.php';
        ?>
        
		<section id="Main">

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


        <?php
            require 'common/footer.php';
        ?>

		<!-- My Scripts -->
		<script src="Javascript/home.js"></script>
		
	</body>
</html>
