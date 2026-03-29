<?php
$result = $conn->query("SELECT * FROM gallery");

while($row = $result->fetch_assoc()){
    echo "<img src='uploads/".$row['image_path']."' width='200'>";
}

if($_POST){
    $name = $_FILES['slika']['name'];
    move_uploaded_file($_FILES['slika']['tmp_name'], "../uploads/".$name);

    $conn->query("INSERT INTO gallery(title,image_path) VALUES('slika','$name')");
}

$search = $_GET['search'];

$result = $conn->query("SELECT * FROM gallery WHERE title LIKE '%$search%'");
?>
