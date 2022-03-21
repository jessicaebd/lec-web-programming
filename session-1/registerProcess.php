<?php

session_start();

if (isset($_POST['Submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $_SESSION['usernameRegister'] = $username;
    $_SESSION['passwordRegister'] = $password;

    echo "Username: $username <br>";
    echo "Password: $password <br>";
} else {
    echo "Tidak ada data yang dikirim";
}
?>

<a href="login.php">Click disini untuk Login</a>