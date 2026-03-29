<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(strlen($name) < 3){
        echo "Ime nije validno";
    } else {
        $stmt = $conn->prepare("INSERT INTO contact(name,email,message) VALUES (?,?,?)");
        $stmt->bind_param("sss",$name,$email,$message);
        $stmt->execute();
    }
}