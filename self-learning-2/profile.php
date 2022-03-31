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
        include "config.php";

        session_start();

        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];

            $str_query = "SELECT * FROM mahasiswa WHERE username = '$username'";
            $result = mysqli_query($connection, $str_query);
            $fetch = mysqli_fetch_array($result);

            echo "
            <table>
            <tr>
                <td>Nama Depan</td>
                <td><b>" . $fetch['nama_depan'] . "</b></td>

                <td>Nama Tengah</td>
                <td><b>" . $fetch['nama_tengah'] . "</b></td>

                <td>Nama Belakang</td>
                <td><b>" . $fetch['nama_belakang'] . "</b></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><b>" . $fetch['tempat_lahir'] . "</b></td>

                <td>Tanggal Lahir</td>
                <td><b>" . date_format(date_create($fetch['tanggal_lahir']), 'd-m-Y') . "</b></td>

                <td>NIK</td>
                <td><b>" . $fetch['nik'] . "</b></td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td><b>" . $fetch['warga_negara'] . "</b></td>

                <td>Email</td>
                <td><b>" . $fetch['email'] . "</b></td>

                <td>No HP</td>
                <td><b>" . $fetch['no_hp'] . "</b></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><b>" . $fetch['alamat'] . "</b></td>

                <td>Kode Pos</td>
                <td><b>" . $fetch['kode_pos'] . "</b></td>

                <td>Foto Profil</td>
                <td><img src='uploads/" . $fetch['foto_profil'] . "' width='120'></td>
            </tr>
        </table>
        <div class='edit-btn'><button><a class = 'edit-a' href='editProfile.php?id=" . $fetch['id'] . "'>Edit</a></button><br></div>
            ";
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Silahkan login terlebih dahulu!");';
            echo 'window.location.href = "login.php";';
            echo '</script>';
        }
        ?>
    </div>
</body>

</html>