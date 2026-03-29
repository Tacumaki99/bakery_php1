<?php
$conn = new mysqli("localhost", "root", "", "bakery");

if($conn->connect_error){
    die("Greska: " . $conn->connect_error);
}


session_start();
?>