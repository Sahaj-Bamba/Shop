<?php

include 'connection.php';

$name = mysqli_real_escape_string($con, $_POST["name"]);

$rate = mysqli_real_escape_string($con, $_POST["rate"]);

$category = mysqli_real_escape_string($con, $_POST["category"]);


$X=$con->query("SELECT * FROM `product` ORDER BY id;");

$n=$X->num_rows;
while (--$n) {
  $X->fetch_assoc();
}
$t=$X->fetch_assoc();
$n=$t['id']+1;

$uploaddir = 'Image/Product/';
$st= strrev($_FILES["pic_cat"]['name']);
$ex = strrev(substr($st, 0,strpos($st, ".")));
$uploadfile = $uploaddir . $n . "." . $ex;
$picname = mysqli_real_escape_string($con, $uploadfile);
//  Change Name of uploaded file

move_uploaded_file($_FILES['pic_cat']['tmp_name'], $uploadfile);

/*
$X=$con->query("SELECT * FROM `category` WHERE name = '$name' ;");

if ($X->num_rows == 0) {
  $con->query("INSERT INTO `category`(`name`, `pic_loc`) VALUES ('$name','$picname') ;"); 
}
else{

  //    update required since extension might change

  $con->query("UPDATE `category` SET `pic_loc`='$picname' WHERE `name`='$name' ");  
}
*/


$con->query("INSERT INTO `product`(`name`, `rate`, `category`, `pic_loc`) VALUES ('$name','$rate','$category','$picname') ;");

header('location:index.php');

?>