<?php




if(isset($_GET['shop'])){

    $ownerShopName = mysqli_real_escape_string($con, $_GET["shop"]);
    $sql = "SELECT * FROM owner WHERE store_name like '$ownerShopName';";

    // echo $sql;

    $result = $con->query($sql);

    if(($result->num_rows > 0)){

        // remove all session variables
        // session_unset(); 

        
        $x = $result->fetch_assoc();
        
        $_SESSION["shopName"] = $ownerShopName;
        $_SESSION["id"] = $x['id'];
        // include 'Vars.php';

    }
    
}

if(isset($_SESSION['shopName'])){

}else{
    header('location:home.php');
}

?>