<?php

require_once("1-connect.php");

$sql = "SELECT * FROM my_students";

$query = mysqli_query($conn,$sql);

// print_r(mysqli_fetch_all($query));
// print_r(mysqli_fetch_row($query));
// print_r(mysqli_fetch_array($query));
print_r(mysqli_fetch_assoc($query));
print_r(mysqli_fetch_assoc($query));

while($row = mysqli_fetch_assoc($query)){
    print_r($row);
}