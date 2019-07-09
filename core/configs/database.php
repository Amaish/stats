<?php

$server     = "127.0.0.1";
$username   = "maina";
$password   = "Ruth!99!";

$database   = "voice_stat";

$conn = mysqli_connect($server, $username, $password, $database);

if($conn->error){
    echo $conn->error;
}
?>
