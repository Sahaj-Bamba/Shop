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
			<h2>Add Product</h2>
			
			<form enctype="multipart/form-data" method="POST" action="add_product_.php" autocomplete="off" >

				<div class="inputbox">
					<input type="text" name="name" required />
					<label>Name</lable>
				</div>
				<div class="inputbox">
					<input type="text" name="rate" required />
					<label>Rate</lable>
				</div>
				<div class="inputbox">
					<input type="text" name="description" required />
					<label>Description</lable>
				</div>
				<div class="inputbox">
					<input type="text" name="category" required />
					<label>Category</lable>
				</div>
				<div class="inputbox">
					<input type="file" name="pic_cat" required />
					<label>Image</lable>
				</div>
				<center>
					<input type="submit" name="submit" value="Submit">
				</center>
			</form>
			<br>
			<center>
				<a href="index.php"><button> Go Back </button> </a>
			</center>
		</div>
    

		</section>

        <?php 
            include 'common/footer.php';
        ?>

		<!-- My Scripts -->
		<!-- <script src="Javascript/category.js"></script> -->

		<script type="text/javascript">

			$(document).ready(function () {

            });
            
		</script>

    </body>
</html>

