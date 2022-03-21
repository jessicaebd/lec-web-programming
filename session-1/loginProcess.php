<?php

session_start();

if (isset($_POST['Submit'])) {
    if (isset($_SESSION)) {
        if (($_POST['usernameLogin'] == $_SESSION['usernameRegister']) && ($_POST['passwordLogin'] == $_SESSION['passwordRegister'])) {
            echo "Login berhasil";
        } else {
            echo "Login gagal";
        }
    }
}
