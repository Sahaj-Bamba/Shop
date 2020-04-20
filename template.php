<?php 

	include 'connection.php';
	include 'Vars.php';

    if(isset($_GET['shop'])){
        $ownerShopName = mysqli_real_escape_string($con, $_GET["shop"]);
        $_SESSION["ownerShopName"] = $ownerShopName;    
    }else if(isset($_SESSION['ownerShopName'])){
	
	}else{
		header('location:home.php');
	}


?>

<!DOCTYPE html>
<html>
	
    <head>

	<?php 
		include 'common/head.php';
	?>		

		<link rel="stylesheet" type="text/css" href="Style/index.css">

		<style type="text/css">
		
		</style>

	</head>
	
	<body>

		<?php 
			include 'common/header.php';
		?>
		
		<section id="main-content">

			<div class="jumbotron">
				<div class="container text-center">
					<h1 class="display-2"> <?php echo strtoupper($_SESSION["ownerShopName"]); ?> </h1>      
					<strong><h4 class="mark"> You Want it ? We got it. </h4></strong>
				</div>
			</div>

			<div class="row" style="">
				<div class="btn-group col-sm-5">
					<button type="button" class="btn btn-primary">
						Shop by Category
					</button>
				</div>
				<div class="btn-group col-sm-2">
					<button id="shop_status" type="button" class="btn btn-success">
						Open 
					</button>
				</div>
				<div class="btn-group col-sm-5">
					<button type="button" class="btn btn-info">
						Shop by Offers
					</button>
				</div>
			</div>

		</section>

		<?php 
			include 'common/footer.php';
		?>
		
		<script type="text/javascript" src="Javascript/index.js"></script>

		<script type="text/javascript">
            $(document).ready(function(){

            });

            
        </script>

    </body>

</html>