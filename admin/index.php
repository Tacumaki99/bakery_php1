<?php

include("../config.php");

if ($_SESSION['user']['role'] != 'admin') {
    die("Nemas pristup");
}
?>

<h1>Admin panel</h1>

<a href="users.php">Korisnici</a>
<a href="gallery.php">Galerija</a>
<a href="poll.php">Anketa</a>