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
    <div class="navbar">
        <span>Aplikasi Pengelolaan Keuangan</span>
        <div class="navbar-mid">
            <a href="home.php">Home</a>
            <a href="profile.php" class="active">Profile</a>
        </div>
        <a href="logout.php">Logout</a>
    </div>

    <div class="container profile-page">
        <div class="header">
            <h3>Profil Pribadi</h3>
        </div>

        <?php
        session_start();
        if (isset($_SESSION)) {
            echo "
            <table>
            <tr>
                <td>Nama Depan</td>
                <td><b>" . $_SESSION['namaDepan'] . "</b></td>

                <td>Nama Tengah</td>
                <td><b>" . $_SESSION['namaTengah'] . "</b></td>

                <td>Nama Belakang</td>
                <td><b>" . $_SESSION['namaBelakang'] . "</b></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><b>" . $_SESSION['tempatLahir'] . "</b></td>

                <td>Tanggal Lahir</td>
                <td><b>" . date_format(date_create($_SESSION['tanggalLahir']), 'd-m-Y') . "</b></td>

                <td>NIK</td>
                <td><b>" . $_SESSION['nik'] . "</b></td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td><b>" . $_SESSION['wargaNegara'] . "</b></td>

                <td>Email</td>
                <td><b>" . $_SESSION['email'] . "</b></td>

                <td>No HP</td>
                <td><b>" . $_SESSION['noHP'] . "</b></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><b>" . $_SESSION['alamat'] . "</b></td>

                <td>Kode Pos</td>
                <td><b>" . $_SESSION['kodePos'] . "</b></td>

                <td>Foto Profil</td>
                <td><img src='uploads/" . $_SESSION['fotoProfil'] . "' width='150'></td>
            </tr>
        </table>
            ";
        } else {
            echo "Silahkan login terlebih dahulu <br>";
            echo "<a href='welcome.php'>Kembali</a>";
        }
        ?>
    </div>
</body>

</html>