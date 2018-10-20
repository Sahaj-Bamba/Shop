<?php 

/*		Form validation					*/


  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $phone_number = test_input($_POST["phone"]);
  $password = test_input($_POST["password"]);
	
echo $name;
echo $address;
echo $phone;
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

  $name = mysqli_real_escape_string($con, $_POST["name"]);
  $email = mysqli_real_escape_string($con, $_POST["email"]);
  $address = mysqli_real_escape_string($con, $_POST["address"]);
  $phone_number = mysqli_real_escape_string($con, $_POST["phone"]);
  $password = mysqli_real_escape_string($con, $_POST["password"]);


  //  Password error

if (strlen($password)<6||strlen($password)>15) {
  $_SESSION['passErr'] = "Password must be between 6 and 15 characters long ";
  $_SESSION['Er'] = "ERRORS";

}

  //  Phone Number Error
if (strlen($phone_number)<10||(!(phone_test($phone_number)))) {
  $_SESSION['phoneErr'] = "Please Enter a valid phone number ";
  $_SESSION['Er'] = "ERRORS";

}

function phone_test($data){
  for ($i=0; $i < strlen($data); $i++) { 
    if ($data[i]<'0'||$data[i]>'9') {
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

?>