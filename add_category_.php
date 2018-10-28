<?php

include 'connection.php';

$name = mysqli_real_escape_string($con, $_POST["name"]);

$uploaddir = 'Image/Category/';
$uploadfile = $uploaddir . basename($_FILES['pic_cat']['name']);

$st= strrev($_FILES["pic_cat"]['name']);
$ex = strrev(substr($st, 0,strpos($st, ".")));
$uploadfile = $uploaddir . $name . "." . $ex;

$picname = mysqli_real_escape_string($con, $uploadfile);
//	Change Name of uploaded file
move_uploaded_file($_FILES['pic_cat']['tmp_name'], $uploadfile);


$X=$con->query("SELECT * FROM `category` WHERE name = '$name' ;");

if ($X->num_rows == 0) {
	$con->query("INSERT INTO `category`(`name`, `pic_loc`) VALUES ('$name','$picname') ;");	
}
else{

	//		update required since extension might change

	$con->query("UPDATE `category` SET `pic_loc`='$picname' WHERE `name`='$name' ");	
}

header('location:index.php');



?>