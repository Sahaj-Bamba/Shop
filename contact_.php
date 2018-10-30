<?php 

include 'connection.php';
include 'Vars.php';

/*		Form validation					*/

// define variables and set to empty values



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $subject = test_input($_POST["subject"]);
  $content = test_input($_POST["comment"]);
  
	
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

  $name = mysqli_real_escape_string($con, $name);
  $email = mysqli_real_escape_string($con, $email);
  $subject = mysqli_real_escape_string($con, $subject);
  $content = mysqli_real_escape_string($con, $content);
  

   $result = $con->query("INSERT INTO `review`(`name`, `email`, `subject`, `content`) VALUES ('$name','$email','$subject','$content')");

    header('location:index.php');
  
?>