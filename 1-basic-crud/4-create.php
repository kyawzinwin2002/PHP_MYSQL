<?php

require_once("1-connect.php");

$sql = "INSERT INTO my_students (name,doubt) VALUES ('kk',10000),('aa',40000)";
if(mysqli_query($conn,$sql)){
    echo "done";
}



