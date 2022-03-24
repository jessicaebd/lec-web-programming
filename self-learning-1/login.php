<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">

    <title>Self Learning 1</title>
</head>

<body>
    <div class="login-page">
        <h3>Login</h3>

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
            </table>

            <input type="submit" name="login" value="Login">
        </form>
    </div>
</body>

</html>