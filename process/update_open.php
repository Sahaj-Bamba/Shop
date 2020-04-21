<?php

    include '../connection.php';
    $tmp = $_SESSION['gamer']['store_name'];
    $sql = "SELECT * FROM owner WHERE store_name like '$tmp' ;";
    // echo 'aaaaaaa';
    // echo $tmp;    
    // print($_SESSION['gamer']['store_name']);

    $result = $con->query($sql);

    if(($result->num_rows > 0)){
        $x = $result->fetch_assoc();
        // echo $x['is_open'];
        if ($x['is_open'] == 0 ){
            $xt = 1;
        }else{
            $xt = 0;
        }
        $sql = "UPDATE owner SET is_open='$xt'  WHERE store_name like '$tmp' ;";
        $result = $con->query($sql);
        echo $xt;
    }
    else{
        echo 0;
    }
    header('location:../index.php');

?>