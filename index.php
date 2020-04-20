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