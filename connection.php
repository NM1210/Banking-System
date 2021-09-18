<?php

$server = "localhost";
$username = "id17613207_root";
$password = "Password$000";
$database = "id17613207_banking_system";

$conn = mysqli_connect($server, $username, $password, $database);

if(!$conn){
    echo "Failed";
}

?>