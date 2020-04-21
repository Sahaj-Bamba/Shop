<?php 

include '../connection.php';
include '../Vars.php';

/*		Form validation					*/

// define variables and set to empty values


$name = $email = $gender = $address = $phone_number = $type = $password = "";
$emailErr = $Repeat = $passErr = $phoneErr = " " ;


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $shop_name = test_input($_POST["shopname"]);
  $email = test_input($_POST["email"]);
  $address = test_input($_POST["address"]);
  $phone_number = test_input($_POST["phone"]);
  $password = test_input($_POST["password"]);
	
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["emailErr"] = "Invalid email format";
    $_SESSION["Er"] = "ERRORS";    
    header('location:../signup.php');                       //  Return to signup page if there is any error
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
  header('location:../signup.php');
}

  //  Phone Number Error
if (strlen($phone_number)<10||(!(phone_test($phone_number)))) {
  $_SESSION['phoneErr'] = "Please Enter a valid phone number ";
  $_SESSION['Er'] = "ERRORS";
  header('location:../signup.php');
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
  header('location:../signup.php');  
}

  //  Duplicate user check via phone number and email

  $sql = "SELECT * FROM owner WHERE store_name LIKE '$shop_name' ;";
  $Res = $con->query($sql);

  if ($Res->num_rows > 0) {

    //user already present trying to resign in so not allowed
  
    $_SESSION["repeatErr"] = "The given shop is already registered by someone else please try different one. ";
    $_SESSION["Er"] = "ERRORS";

    header('location:../signup.php');                       //  Return to signup page 

  }

echo $_SESSION;

  //$password = md5($password);                             //   md5 encryption

  if ((strcmp($_SESSION["Er"], ""))==0) {
    
    $sql = "INSERT INTO owner (name ,store_name , contact_number, email , address , password ) VALUES ('$name','$shop_name','$phone_number','$email','$address','$password') ;";
    $result = $con->query($sql);
    $sql = "SELECT * FROM owner WHERE store_name LIKE '$shop_name' ;";
    $result = $con->query($sql);
    $_SESSION["gamer"] = $result->fetch_assoc();
    $_SESSION["id"] = $_SESSION["gamer"]['id'];
    $_SESSION["shopName"] = $shop_name;

    $nm = "../Image/".$_SESSION["id"];
    $result = mkdir ($nm, "0755");
    $result = mkdir ($nm."/Category", "0755");
    $result = mkdir ($nm."/Offer", "0755");
    $result = mkdir ($nm."/Product", "0755");
    $result = mkdir ($nm."/User", "0755");


    header('location:../index.php');
  }
  
?>