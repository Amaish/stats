<?php

$server     = "127.0.0.1";
$username   = "username";
$password   = "password";

$database   = "name";

$conn = mysqli_connect($server, $username, $password, $database);

if($conn->error){
    echo $conn->error;
}
?>
