<?php

include 'connection.php';

$name = mysqli_real_escape_string($con, $_POST["name"]);

$duration = mysqli_real_escape_string($con, $_POST["duration"]);

$details = mysqli_real_escape_string($con, $_POST["details"]);

$d = $_SESSION['gamer']['id'];

$X=$con->query("SELECT * FROM `offer` where owner = '$d' and name = '$name';");

if ($X->num_rows>0){
    $X=$con->query("DELETE FROM `offer` where owner = '$d' and name = '$name';");    
    $con->query("INSERT INTO `offer`(`name`, `duration`, `details`, `pic_loc`,owner) VALUES ('$name','$duration','$details','','$d')");
}else{
    $con->query("INSERT INTO `offer`(`name`, `duration`, `details`, `pic_loc`,owner) VALUES ('$name','$duration','$details','','$d')");
}

$X=$con->query("SELECT * FROM `offer` where owner = '$d' and name = '$name';");
$t=$X->fetch_assoc();
$n=$t['id'];

$uploaddir = 'Image/'.$_SESSION['id'].'/'.'Offer/';
$st= strrev($_FILES["pic_cat"]['name']);
$ex = strrev(substr($st, 0,strpos($st, ".")));
$uploadfile = $uploaddir . $n . "." . $ex;
$picname = mysqli_real_escape_string($con, $uploadfile);
//  Change Name of uploaded file

move_uploaded_file($_FILES['pic_cat']['tmp_name'], $uploadfile);

$con->query("UPDATE `offer` SET `pic_loc`='$picname' WHERE owner = '$d' and name = '$name' ;");  

header('location:index.php');

?>