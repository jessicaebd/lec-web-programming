<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        <?php include "css/style.css" ?>
    </style>

    <title>Aplikasi Pengelolaan Keuangan</title>
</head>

<body>
    <div class="container login-error">
        <div class="header">
            <h3 style="color:red;">Attention!</h3>
        </div>

        <?php
        include "config.php";
        session_start();

        if (isset($_POST['login'])) {
            $username = $_POST['usernameLogin'];
            $password = $_POST['passwordLogin'];

            $str_query = "SELECT * FROM mahasiswa WHERE username = '$username'";
            $result = mysqli_query($connection, $str_query);
            $fetch = mysqli_fetch_array($result);

            if ($fetch) {
                if (($username == $fetch['username']) & ($password == $fetch['password'])) {
                    $_SESSION['username'] = $username;
                    header("Location: home.php");
                } else {
                    echo '<script type="text/javascript">';
                    echo 'alert("Password Salah!");';
                    echo 'window.location.href = "login.php";';
                    echo '</script>';
                }
            } else {
                echo '<script type="text/javascript">';
                echo 'alert("Username tidak ditemukan!");';
                echo 'window.location.href = "login.php";';
                echo '</script>';
            }
        }
        ?>
    </div>
</body>

</html>