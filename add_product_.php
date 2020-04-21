<?php

include 'connection.php';

$name = mysqli_real_escape_string($con, $_POST["name"]);

$rate = mysqli_real_escape_string($con, $_POST["rate"]);

$category = mysqli_real_escape_string($con, $_POST["category"]);

$description = mysqli_real_escape_string($con, $_POST["description"]);

$d = $_SESSION['gamer']['id'];

$X=$con->query("SELECT * FROM `product` where owner = '$d' and name = '$name' and category='$category';");

if ($X->num_rows>0){
    $X=$con->query("DELETE FROM `product` where owner = '$d' and name = '$name' and category='$category';");    
    $con->query("INSERT INTO `product`(`name`, `rate`, `category`, `pic_loc` , `description`,owner) VALUES ('$name','$rate','$category','' , '$description','$d') ;");
}else{
    $con->query("INSERT INTO `product`(`name`, `rate`, `category`, `pic_loc` , `description`,owner) VALUES ('$name','$rate','$category','' , '$description','$d') ;");
}

$X=$con->query("SELECT * FROM `product` where owner = '$d' and name = '$name' and category='$category';");
$t=$X->fetch_assoc();
$n=$t['id'];

$uploaddir = 'Image/'.$_SESSION['id'].'/'.'Product/';
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

$con->query("UPDATE `product` SET `pic_loc`='$picname' WHERE owner = '$d' and name = '$name' and category='$category';");  

header('location:index.php');

?>