<?php

require_once("1-connect.php");

$sql = "CREATE DATABASE san_kyi_tar";

if(mysqli_query($conn,$sql)){
    echo "Aung tl";
}else{
    echo "U fail";
}