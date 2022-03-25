<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        <?php include "css/style.css" ?>
    </style>

    <title>Document</title>
</head>

<body>
    <div class="container login-error">
        <div class="header">
            <h3 style="color:red;">Attention!</h3>
        </div>

        <?php
        session_start();

        if (isset($_POST['login'])) {
            if (isset($_SESSION)) {
                if (($_POST['usernameLogin'] == $_SESSION['username']) && ($_POST['passwordLogin'] == $_SESSION['password1'])) {
                    echo "Login Berhasil<br>";
                    header('Location: home.php');
                } else {
                    echo "Login Gagal<br>";
                    echo "<br><a href='register.php'><u>Kembali</u></a>";
                }
            } else {
                echo "Silahkan register terlebih dahulu <br>";
                echo "<a href='index.php'>Kembali</a>";
            }
        }
        ?>
    </div>
</body>

</html>