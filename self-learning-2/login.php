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
    <div class="container login-page">
        <div class="header">
            <h3>Login</h3>
        </div>

        <div class="login-form">
            <form action="loginProcess.php" method="post">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="usernameLogin"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="passwordLogin"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="btn-login-page">
                            <div class="login-btn">
                                <input type="submit" name="login" value="Login">
                            </div>
                            <div class="kembali-btn-login">
                                <button><a href="index.php">Kembali</a></button>
                            </div>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>