

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
	<body style="background: url('Image/background.jpg');">
		<div class="box">
			<h2>Add Offer</h2>
			
			<form enctype="multipart/form-data" method="POST" action="add_offer_.php" autocomplete="off" >

				<div class="inputbox">
					<input type="text" name="name" required />
					<label>Name</lable>
				</div>
				<div class="inputbox">
					<input type="text" name="duration" required />
					<label>Duration</lable>
				</div>
				<div class="inputbox">
					<input type="text" name="details" required />
					<label>Details</lable>
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
	</body>
</html>
