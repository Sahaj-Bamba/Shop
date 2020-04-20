<?php

include 'connection.php';




if(isset($_GET['shop'])){

    $ownerShopName = mysqli_real_escape_string($con, $_GET["shop"]);
    $sql = "SELECT * FROM 'owner' WHERE store_name like '$ownerShopName';";

    $result = $con->query($sql);

    if(($result->num_rows > 0)){

        session_start();
        $_SESSION["shopName"] = $ownerShopName;

    }
    
}

if(isset($_SESSION['shopName'])){

}else{
    header('location:home.php');
}

?>