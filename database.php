<?php
$servername= "localhost";
$username= "root";
$password ="";
$database = "samplelogin";


$conn = new mysqli(hostname: $servername, $username, $password, $database);

if($conn -> connect_error){
    die("connection failed" . $conn -> connect_error);
}

?>