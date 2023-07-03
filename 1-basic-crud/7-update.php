<?php

require_once("1-connect.php");

$sql = "UPDATE my_students SET name = 'zaw zaw'";

if(mysqli_query($conn,$sql)){
    echo "updated";
}