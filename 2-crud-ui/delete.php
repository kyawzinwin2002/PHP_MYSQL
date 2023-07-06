<?php

session_start();
require_once("./core/connection.php");
require_once("./core/functions.php");

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $id = $_POST["id"];
    $sql = "DELETE FROM doubtMen WHERE id=$id";
    
    if(mysqli_query($conn,$sql)){
        $_SESSION["status"] = [
            "message" => "Deleted Successfully"
        ];
        header("Location:read.php");

    }
}