<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        <?php include "css/style.css" ?>
    </style>

    <title>Self Learning 1</title>
</head>

<body>
    <div class="container register-page">
        <div class="header">
            <h3>Register</h3>
        </div>

        <form action="registerProcess.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Depan</td>
                    <td><input type=" text" name="namaDepan">
                    </td>

                    <td>Nama Tengah</td>
                    <td><input type="text" name="namaTengah"></td>

                    <td>Nama Belakang</td>
                    <td><input type="text" name="namaBelakang"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempatLahir"></td>

                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggalLahir"></td>

                    <td>NIK</td>
                    <td><input type="text" name="nik"></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name="wargaNegara"></td>

                    <td>Email</td>
                    <td><input type="email" name="email"></td>

                    <td>No HP</td>
                    <td><input type="text" name="noHP"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea type="text" name="alamat" rows="4"></textarea></td>

                    <td>Kode Pos</td>
                    <td><input type="text" name="kodePos"></td>

                    <td>Foto Profil</td>
                    <td><input type="file" name="fotoProfil"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>

                    <td>Password 1</td>
                    <td><input type="password" name="password1"></td>

                    <td>Password 2</td>
                    <td><input type="password" name="password2"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>

                    <td></td>
                    <td></td>

                    <td class="kembali"><button><a href="welcome.php">Kembali</a></button></td>
                    <td class="register"><input type="submit" name="Register" value="Register"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>