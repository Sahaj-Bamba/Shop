<?php 

include 'connection.php';
include 'Vars.php';

/*		Form validation					*/


	$name = test_input($_POST["name"]);
	$email = test_input($_POST["email"]);
	$address = test_input($_POST["address"]);
	$phone_number = test_input($_POST["phone"]);

	
echo $name;
echo $address;
echo $phone_number;
echo $email;



	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$_SESSION["emailErr"] = "Invalid email format";
		$_SESSION["Er"] = "ERRORS";    

	}



function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
	
	//  For commas and other special characters

	$name = mysqli_real_escape_string($con, $name);
	$email = mysqli_real_escape_string($con, $email);
	$address = mysqli_real_escape_string($con, $address);
	$phone_number = mysqli_real_escape_string($con, $phone_number);




	//  Phone Number Error
if (strlen($phone_number)<10||(!(phone_test($phone_number)))) {
	$_SESSION['phoneErr'] = "Please Enter a valid phone number ";
	$_SESSION['Er'] = "ERRORS";

}

function phone_test($data){
	for ($i=0; $i < strlen($data); $i++) { 
		if ($data[$i]<'0'||$data[$i]>'9') {
			return false;
		} 
	}
	return true;
}

	
	//  Name Error

if (!(ctype_alpha($name[0]))) {
	$_SESSION['nameErr'] = "Please Enter a valid username ";
	$_SESSION['Er'] = "ERRORS";

}

	$sql = "SELECT * FROM user WHERE email = '$email' OR phone_number = '$phone_number' ;";
  	$Res = $con->query($sql);

  	if ($Res->num_rows > 0) {

            //user already present trying to resign in so not allowed
  
    	$_SESSION["repeatErr"] = "The given email or phone number is already in use by someone else try different ones. ";
    	$_SESSION["Er"] = "ERRORS";
     

  }

if (strcmp($_SESSION['Er'], "ERRORS")==0) {
}
else{
	$temp= $_SESSION["gamer"]["id"];
	$Res = $con->query("UPDATE `user` SET `name`='$name',`email`='$email',`address`='$address',`phone_number`='$phone_number' WHERE `id`='$temp');");

    $sql = "SELECT * FROM user WHERE email = '$email';";
    $result = $con->query($sql);
    $_SESSION["gamer"] = $result->fetch_assoc();

}

    //header('location:index.php');

?>