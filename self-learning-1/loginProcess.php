<?php
session_start();

if (isset($_POST['login'])) {
    if (isset($_SESSION)) {
        if (($_POST['usernameLogin'] == $_SESSION['username']) && ($_POST['passwordLogin'] == $_SESSION['password1'])) {
            echo "Login Berhasil<br>";
            header('Location: home.php');
        } else {
            echo "Login Gagal<br>";
            header('Location: login.php');
        }
    } else {
        echo "Silahkan register terlebih dahulu <br>";
        echo "<a href='index.php'>Kembali</a>";
    }
}
