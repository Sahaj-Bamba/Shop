<?php

include '../connection.php';

	$name = mysqli_real_escape_string($con, $_POST["name"]);
	$password = mysqli_real_escape_string($con, $_POST["password"]);


$sql = "SELECT * FROM owner WHERE store_name like '$name' and password = '$password' ;";

//echo $sql;

$result = $con->query($sql);

if(($result->num_rows > 0)){

	session_start();
	$_SESSION["gamer"] = $result->fetch_assoc();
	$_SESSION["id"] = $_SESSION["gamer"]['id'];
	$_SESSION['shopName'] = $name;
	// echo 'aaaaaaaaa';
	// echo $_SESSION['gamer'];
	// echo $_SESSION['gamer']['store_name'];
}
else{

}

header('location:../index.php');

// Tell number of rows in results 		$result->num_rows
//	Fetch a row from the result 		$result->fetch_assoc()
//	Access different members of the result 			$row["id"]
//				Start session and set session variables
// if ( strcmp($_SESSION["gamer"]["type"], "user") == 0 ) {
// 	header('location:index.php');
// }
// elseif (strcmp($_SESSION["gamer"]["type"], "owner") == 0) {
// 	header('location:index.php');
// }

?>