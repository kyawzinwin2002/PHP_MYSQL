<?php

require_once("1-connect.php");

$sql = "DELETE FROM my_students WHERE id = 2";

if(mysqli_query($conn,$sql)){
    echo "deleted";
}