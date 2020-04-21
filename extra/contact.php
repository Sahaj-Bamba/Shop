
<?php 

  include 'connection.php';
  include 'Vars.php';

?>

<!DOCTYPE html>
<html>

<head>
	<title>Bamba Kirana Store</title>

	<meta charset="utf-8">  
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="Style/home.css">
	<link rel="stylesheet" type="text/css" href="Style/home2.css">
	<link rel="stylesheet" type="text/css" href="Style/contact.css">



	<script type="text/javascript">
		$(document).ready(function(){

				

			$("input").focusin(function(){
				$(this).css("value", "");
		});

			var TP=0;
			$(".tagc").hover(function(){
					$(this).children(".image").css("display","none");
					$(this).children(".image2").css("display","inline-block");
				} , 

			function(){
					$(this).children(".image2").css("display","none");
					$(this).children(".image").css("display","inline-block");
				}
			);

			$(".menu_item").hover(function(){
				$(this).css("background-color","#fff");
			},
			function(){
				$(this).css("background-color","#f3f3f3");
				//console.log("hell");
			});


		$(".menu_button").click( function () {
			TP++;
			$(".menu").slideToggle();
			$(this).css("background-image","url('menu"+(TP%2+1)+".jpg')");
			//console.log("uhui");
		});

		});

	</script>
</head>
<body style="height: 99%; width: 99%; background-color: #f3f3f3;">

		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <!--  Button for collapse of main nav bar  -->
			  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav-bar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
			  <div class="active"><a class="navbar-brand active" href="#">Bamba Kirana Store</a></div>
			</div>
			<div class="collapse navbar-collapse" id="main-nav-bar">
			  <ul class="nav navbar-nav">
				<li ><a href="index.php">Home</a></li>
				<li ><a href="category.php">Categories</a></li>
				<li ><a href="offer.php">Offers</a></li>
				<!--li ><a href="request.php">Request</a></li-->
				<li class="active"><a href="contact.php">Contact</a></li>
				<?php 
				if ((isset($_SESSION["gamer"]))&&(strcmp($_SESSION["gamer"]["type"], "owner")==0)) {  
				?>

					<li><a href="add_category.php">Add Category</a></li>
					<li><a href="add_product.php">Add Product</a></li>
					<li><a href="add_offer.php">Add Offer</a></li>

				<?php } ?>
			  </ul>
			  <ul class="nav navbar-nav navbar-right" >
				<?php if (!(isset($_SESSION["gamer"]))) {  ?>
						<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				<?php 
				}
				else { 
				?>
				  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> <?php echo $_SESSION["gamer"]["name"]; ?> <span class="caret"></span></a>
					<ul class="dropdown-menu">
					  <li><a href="profile.php">Profile</a></li>
					  <li><a href="change_pic.php">Change Pic</a></li>
					  <li><a href="logout.php">Logout</a></li>
					</ul>
					</li>
					<?php  
						}
					?>
				
			  </ul>
			</div>
		  </div>
		</nav>

	<div class="main" >

		<div id="map" style="border: solid 0px red;"></div>

		<script>
																															// Maps
			var marker;

			function initMap() {
				var map = new google.maps.Map(document.getElementById('map'), {
					zoom: 13,
					center: {lat: 59.325, lng: 18.070}
				});

				marker = new google.maps.Marker({
					map: map,
					draggable: true,
					animation: google.maps.Animation.DROP,
					position: {lat: 59.327, lng: 18.067}
				});
				marker.addListener('click', toggleBounce);
			}

			function toggleBounce() {
				if (marker.getAnimation() !== null) {
					marker.setAnimation(null);
				} else {
					marker.setAnimation(google.maps.Animation.BOUNCE);
				}
			}
		</script>
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBv19gN1ntBdb61vuMPqA-0Nft1LO_rKg4&callback=initMap">
		</script>
			<div class="white_back" >
				
			</div>
			<div id="info" >
				<div class="special">
					Say Hello!
				</div>
				<div class="txtf">
					We would love to hear more about you and how can we help you!
					<br><br>
					RR Quater Number 58, Subhash Colony, Rudrapur, Uttarakhand
					<br><br>
					+91 955 77 13136<br>
					bambakiranastore@gmail.com
					<br>
					<br>
				<div class="footerc" >
				<div class="socialc" >
				<div class="tagc" >
				<div class="image" style=" border: solid 0px red; background-image: url('logos/fb.jpg');" >
				</div>
				<div class="image2" style=" border: solid 0px red; background-image: url('logos/fb2.jpg');">
				</div>
				</div>
				<div class="tagc" >
				<div class="image" style="background-image: url('logos/twitter.jpg'); " >
				</div>
				<div class="image2" style=" border: solid 0px red; background-image: url('logos/twitter2.jpg'); ">
				</div>
				</div>
				<div class="tagc" >
				<div class="image" style=" border: solid 0px red; background-image: url('logos/instagram.png'); " >
				</div>
				<div class="image2" style=" border: solid 0px red; background-image: url('logos/instagram2.png'); ">
				</div>
				</div>
				<div class="tagc" >
				<div class="image" style=" border: solid 0px red; background-image: url('logos/youtube.png'); " >
				</div>
				<div class="image2" style=" border: solid 0px red; background-image: url('logos/youtube2.png'); ">
				</div>
				</div>
			</div>
	</div>
	</div>
	<span class="spil"><br></span>
	<form method="post" action="contact_.php">
		<input type="text" name="name" placeholder="Your Name" style="width: 48%; display: inline-block; height: 15%;" required />
		<input name="email" type="text" placeholder="Your Email" value = <?php if ((isset($_SESSION['gamer']))) echo $_SESSION['gamer']['email']; ?> style="width: 48%; display: inline-block; height: 15%;" required/>
		<br>
		<br>
		<input name="subject" type="text" placeholder="Subject" style="width: 96%; display: inline-block; height: 15%;"/>
		<br>
		<br>
		<textarea placeholder="Message: *"  name="comment" rows="5" cols="40" required> comment
		</textarea>
		<br>
		<br>
		<input type="submit" value="Submit" />
		<span class="spil"><br></span>
	</form>
</div>

	</div>

	<div class="footer" >
		<div class="txt">
			Copyright © 2018<br> Design by Sahaj Bamba
		</div>
			<div class="social" style="display: block;">
				<div class="tagc" >
				<div class="image" style=" border: solid 0px red; background-image: url('logos/fb.jpg');" >
				</div>
				<div class="image2" style=" border: solid 0px red; background-image: url('logos/fb2.jpg');">
				</div>
				</div>
				<div class="tagc" >
				<div class="image" style="background-image: url('logos/twitter.jpg'); " >
				</div>
				<div class="image2" style=" border: solid 0px red; background-image: url('logos/twitter2.jpg'); ">
				</div>
				</div>
				<div class="tagc" >
				<div class="image" style=" border: solid 0px red; background-image: url('logos/instagram.png'); " >
				</div>
				<div class="image2" style=" border: solid 0px red; background-image: url('logos/instagram2.png'); ">
				</div>
				</div>
				<div class="tagc" >
				<div class="image" style=" border: solid 0px red; background-image: url('logos/youtube.png'); " >
				</div>
				<div class="image2" style=" border: solid 0px red; background-image: url('logos/youtube2.png'); ">
				</div>
				</div>
			</div>
	</div>

</body>
</html>


