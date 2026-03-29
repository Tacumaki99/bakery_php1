<?php
include("config.php");

$result = $conn->query("SELECT * FROM pages");

while($row = $result->fetch_assoc()){
    echo "<a href='{$row['link']}'>{$row['title']}</a> ";
}
?>
