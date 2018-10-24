<?php 

include 'connection.php';
//echo $_SESSION["gamer"];

print_r($_SESSION["gamer"]);

//echo $_SESSION["ID"];

if(strcmp($_SESSION["gamer"]["type"], "owner") != 0 ){
	echo "hi";
}
else {
	echo $_SESSION["gamer"]["type"];
}

if(!(isset($_SESSION["gamer"]))){
	echo "hello";
}
else{
	echo "die3";
}

if (((!(isset($_SESSION["gamer"])))||(strcmp($_SESSION["gamer"]["type"], "owner") != 0 ))) {
	echo "die 4";
}
else{
	echo "live";
}
?>

