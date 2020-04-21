<?php 

	include 'connection.php';
	include 'Vars.php';
	include 'common/shopName.php';

?>

<!DOCTYPE html>
<html>
	
    <head>

	<?php 
		include 'common/head.php';
	?>		

	<link rel="stylesheet" type="text/css" href="Style/category.css">

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
					<h1 class="display-2"> Categories </h1>      
					<strong><h4 class="mark"> We will not provide you what you want, but what you should have </h4></strong>
				</div>
			</div>

			<?php
				$x = $_SESSION['id'];
				$sql = "SELECT * FROM category WHERE owner = '$x' ";
				// echo $sql;
				$cats = $con->query("SELECT * FROM category WHERE owner = '$x' ;");
				while ($row = $cats->fetch_assoc()) {
					$htm = "";
					$htm .= '<div class="cat row alert alert-success" style="text-align: center; align-items: center; display: block">';
					$htm .= '<div style="margin:auto;" class= >';
					$htm .= '<div class=" bullet" style="background: url('."'".$row['pic_loc']."'".');  background-repeat: no-repeat; background-size: 100% 100%; background-position: center; "> </div>';
					$htm .= '<div class=" name"> '.$row['name'].' </div>';
					$htm .= '</div>';
					echo $htm;
					$sql = "SELECT `id`, `name`, `rate`, `category`, `pic_loc`, `description` FROM `product` WHERE `category` ='".$row['name']."' and owner = '".$_SESSION['id']."';";
					// echo $sql;
					$pros = $con->query("SELECT `id`, `name`, `rate`, `category`, `pic_loc`, `description` FROM `product` WHERE `category` ='".$row['name']."' and owner = '".$_SESSION['id']."';");
					
					if ($pros->num_rows == 0) {
						echo "</div>";
						continue;
					}
					echo '<div class="all_pro row" style="display: none;">';
					while ($col = $pros->fetch_assoc()) {
						$htm = "";
						$htm .= '<div class="row product">';
						$htm .= '<div class="pic col-1" style="background: url('."'".$col['pic_loc']."'".');  background-repeat: no-repeat; background-size: 100% 100%; background-position: center; ">';
						$htm .= '</div>';
						$htm .= '<div class="title col-3">';
						$htm .= $col['name'];
						$htm .= '</div>	';
						$htm .= '<div class="description col-3">';
						$htm .= $col['description'];
						$htm .= '</div>';
						$htm .= '<div class="rate col-3">';
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

								<?php
										/*
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
										*/
								?>
		</section>

		<?php 
			include 'common/footer.php';
		?>
		
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
