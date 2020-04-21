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
					<h1 class="display-2"> Offers </h1>      
					<strong><h4 class="mark">  Pay Less , Buy More. </h4></strong>
				</div>
			</div>

			<?php

				$res = $con->query("SELECT * FROM `offer` WHERE owner = ".$_SESSION['id']." ORDER BY id ;");
				$htm = "";
				if($res==null){
					$rows = 0;
				}else{
					$row = $res->num_rows+1;
					$rows = floor($row/3);
				}
				
				//		Don't know why it was maybe used ????
				// $res->fetch_assoc();

				while ($rows--) {
					$htm .= '<div class="row" > ';
						
					while ($X = $res->fetch_assoc()) {
							$htm .= '<div class="col-sm-4 offer_column" style=""> ';
							$a=$X['pic_loc'] ;
							$b = "background: url('$a')";
							$htm .= '<div class="col-sm-12 pic" style=" '.$b.'; background-repeat: no-repeat; background-position: center; background-size: 100% 100%;"></div> ';
							$htm .= '<div class="col-sm-12 title"></div> ';
							$htm .= '<div class="col-sm-12 title half"> '.$X['name'].' </div> ';
							$htm .= '<div class="col-sm-12 txt"> '.$X['details']."<br>".'Duration :- '.$X['duration'].'</div> ';
							$htm .= '</div> ';
						}
					$htm .= '</div>';
					echo $htm;
					$htm = ""; 	
				} 

			?>

																	<?php
																	/*
																						<div class="row" >
																							<div class="col-sm-4 offer_column" style="">
																								<div class="col-sm-12 pic" style="background: url('Image/User/1.jpg'); background-repeat: no-repeat; background-position: center; background-size: 100% 100%;"></div>
																								<div class="col-sm-12 title"></div>
																								<div class="col-sm-12 title half"> title 1 </div>
																								<div class="col-sm-12 txt"> text 1</div>
																							</div>
																							<div class="col-sm-4 offer_column">
																								<div class="col-sm-12 pic" style="background: url('Image/User/1.jpg'); background-position: center;background-repeat: no-repeat; background-size: 100% 100%;"></div>
																								<div class="col-sm-12 title" ></div>
																								<div class="col-sm-12 title half" ><center>title 2</center></div>
																								<div class="col-sm-12 txt"> text 2</div>
																							</div>
																							<div class="col-sm-4 offer_column">
																								<div class="col-sm-12 pic" style="background: url('Image/User/1.jpg'); background-position: center;background-repeat: no-repeat; background-size: 100% 100%;"></div>
																								<div class="col-sm-12 title"></div>
																								<div class="col-sm-12 title half"> title 3 </div>
																								<div class="col-sm-12 txt"> text 3</div>
																							</div>
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
			/*
					$(".Image").hover(function(){
							$(this).children(".Label").slideDown(1000);
						} , 

						function(){
							$(this).children(".Label").slideUp(2000);
						}
					);

			*/

				var x =screen.width;
				if (x>=768) {
				
					$(".offer_column").hover(function(){
						//console.log("ji");
						$(this).children(".title").slideDown(500);
					},function(){
						$(this).children(".title").slideUp(2000);
					});		
				}
			});
		</script>

    </body>

</html>
