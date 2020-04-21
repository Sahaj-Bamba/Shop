<?php

include 'connection.php';

//	Set name

$uploaddir = 'Image/User/';
$st= strrev($_FILES["pic"]['name']);
$ex = strrev(substr($st, 0,strpos($st, ".")));
$uploadfile = $uploaddir . $_SESSION["gamer"]["id"] . "." . $ex;

//	Change Name of uploaded file

move_uploaded_file($_FILES['pic']['tmp_name'], $uploadfile);

//	Save the name in database
$name = mysqli_real_escape_string($con, $uploadfile);
echo $name;
$temp=$_SESSION["gamer"]["id"];
$result = $con->query("UPDATE `user` SET pic_loc='$name' WHERE id = '$temp' ;");


$sql = "SELECT * FROM user WHERE pic_loc='$name' ";
$result = $con->query($sql);
$_SESSION["gamer"] = $result->fetch_assoc();

header('location:index.php');

?>
