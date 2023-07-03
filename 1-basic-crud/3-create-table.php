<?php

require_once("1-connect.php");

$sql = "CREATE TABLE my_students( id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(50) NOT NULL,doubt INT NOT NULL,create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP )";

if(mysqli_query($conn,$sql)){
    echo "done";
}else{
    echo "fail";
}