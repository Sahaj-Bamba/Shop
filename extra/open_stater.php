<?php
include 'connection.php';


if ((isset($_SESSION["gamer"]))&&(strcmp($_SESSION["gamer"]["type"], "owner")==0)) {  
	# code...

	$result = $con->query("SELECT * FROM open WHERE 1");
	$X = $result->fetch_assoc();
	if ($X["is_open"]==0) {
		$con->query("UPDATE `open` SET `is_open`= 1 WHERE 1 ;");
	}
	else
	$con->query("UPDATE `open` SET `is_open`= 0 WHERE 1 ;");

}
header('location:index.php');

?>