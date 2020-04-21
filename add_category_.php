<?php

include 'connection.php';

$name = mysqli_real_escape_string($con, $_POST["name"]);

$uploaddir = 'Image/'.$_SESSION['id'].'/'.'Category/';
$uploadfile = $uploaddir . basename($_FILES['pic_cat']['name']);

$st= strrev($_FILES["pic_cat"]['name']);
$ex = strrev(substr($st, 0,strpos($st, ".")));
$uploadfile = $uploaddir . $name . "." . $ex;

$picname = mysqli_real_escape_string($con, $uploadfile);
//	Change Name of uploaded file
move_uploaded_file($_FILES['pic_cat']['tmp_name'], $uploadfile);

$d = $_SESSION['id'];

$X=$con->query("SELECT * FROM `category` WHERE name = '$name' and owner = '$d' ;");

if ($X->num_rows == 0) {
	$con->query("INSERT INTO `category`(`name`, `pic_loc`,owner) VALUES ('$name','$picname','$d') ;");	
}
else{

	//		update required since extension might change

	$con->query("UPDATE `category` SET `pic_loc`='$picname' WHERE `name`='$name' and owner = '$d' ");	
}

header('location:index.php');



?>