<?php 

include 'connection.php';
include 'Vars.php';

/*		Form validation					*/

// define variables and set to empty values


$name = $email = $gender = $address = $phone_number = $type = $password = "";
$emailErr = $Repeat = $passErr = $phoneErr = " " ;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $phone_number = test_input($_POST["phone"]);
  $password = test_input($_POST["password"]);
	
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["emailErr"] = "Invalid email format";
    $_SESSION["Er"] = "ERRORS";    
    header('location:signup.php');                       //  Return to signup page if there is any error
  }

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
  header('location:signup.php');
}

  //  Phone Number Error
if (strlen($phone_number)<10||(!(phone_test($phone_number)))) {
  $_SESSION['phoneErr'] = "Please Enter a valid phone number ";
  $_SESSION['Er'] = "ERRORS";
  header('location:signup.php');
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
  header('location:signup.php');  
}

  //  Duplicate user check via phone number and email

  $sql = "SELECT * FROM user WHERE email = '$email' OR phone_number = '$phone_number' ;";
  $Res = $con->query($sql);

  if ($Res->num_rows > 0) {

            //user already present trying to resign in so not allowed
  
    $_SESSION["repeatErr"] = "The given email or phone number is already in use by someone else try different ones. ";
    $_SESSION["Er"] = "ERRORS";
     
    header('location:signup.php');                       //  Return to signup page 

  }

  //$password = md5($password);                             //   md5 encryption

  if ((strcmp($_SESSION["Er"], ""))==0) {
    

    $sql = "INSERT INTO user (name , email , address , phone_number , password ) VALUES ('$name','$email','$address','$phone_number','$password') ;";
    $result = $con->query($sql);
    $_SESSION["ID"] = $con->insert_id;

    $sql = "SELECT * FROM user WHERE email = '$email' OR phone_number = '$phone_number' ;";
    $result = $con->query($sql);
    $_SESSION["gamer"] = $result->fetch_assoc();


    header('location:index.php');
  }
  
?>