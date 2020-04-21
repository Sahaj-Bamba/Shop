<?php

    include 'connection.php';
    
    $sql = "SELECT * FROM owner WHERE store_name like '$_SESSION['shopName']' ;";

    //echo $sql;

    $result = $con->query($sql);

    if(($result->num_rows > 0)){
        $x = $result->fetch_assoc();
        echo = $x['is_open'];
    }
    else{
        echo 0;
    }

?>