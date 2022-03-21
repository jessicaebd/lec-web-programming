<?php

session_start();

if (isset($_POST['Submit'])) {
    if (isset($_SESSION)) {
        if (($_SESSION['username'] == $_SESSION['usernameLogin']) && ($_SESSION['password'] == $_SESSION['passwordLogin'])) {
            echo "Hi" . $_SESSION['usernameLogin'] . "<br>";
        } else {
            echo "Username atau Password salah";
        }
    }
}
