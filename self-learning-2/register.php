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
    <div class="container register-page">
        <div class="header">
            <h3>Register</h3>
        </div>

        <form action="registerProcess.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Depan</td>
                    <td><input type=" text" name="namaDepan" required>
                    </td>

                    <td>Nama Tengah</td>
                    <td><input type="text" name="namaTengah" required></td>

                    <td>Nama Belakang</td>
                    <td><input type="text" name="namaBelakang" required></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempatLahir" required></td>

                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggalLahir" required></td>

                    <td>NIK</td>
                    <td><input type="text" name="nik" required></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name="wargaNegara" required></td>

                    <td>Email</td>
                    <td><input type="email" name="email" required></td>

                    <td>No HP</td>
                    <td><input type="text" name="noHP" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea type="text" name="alamat" rows="4" required></textarea></td>

                    <td>Kode Pos</td>
                    <td><input type="text" name="kodePos" required></td>

                    <td>Foto Profil</td>
                    <td><input type="file" name="fotoProfil" accept="image/*" required></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" required></td>

                    <td>Password 1</td>
                    <td><input type="password" name="password1" required></td>

                    <td>Password 2</td>
                    <td><input type="password" name="password2" required></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>

                    <td></td>
                    <td></td>

                    <td class="kembali"><button><a href="index.php">Kembali</a></button></td>
                    <td class="register"><input type="submit" name="Register" value="Register"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>