


<form method="POST">
<input type="text" name="username" required>
<input type="email" name="email" required>
<input type="password" name="password" required>
<button type="submit">Registruj se</button>
</form>

<?php
include("config.php");

if($_POST){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users(username,email,password) VALUES (?,?,?)");
    $stmt->bind_param("sss",$username,$email,$password);
    $stmt->execute();

    echo "Uspesna registracija!";
}
?>