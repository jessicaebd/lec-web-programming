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
            <a href="home.php" class="active">Home</a>
            <a href="profile.php">Profile</a>
        </div>
        <a href="logout.php">Logout</a>
    </div>

    <div class="home-page">
        <?php
        include "config.php";

        session_start();

        if (isset($_SESSION['username'])) {
            $username = $_SESSION['username'];

            $str_query = "SELECT * FROM mahasiswa WHERE username = '$username'";
            $result = mysqli_query($connection, $str_query);
            $fetch = mysqli_fetch_array($result);

            echo "Halo, <b>" . $fetch['nama_depan'] . " " . $fetch['nama_tengah'] . " " . $fetch['nama_belakang'] . "</b>, Selamat Datang di Aplikasi Pengelolaan Keuangan";
        } else {
            echo "Silahkan login terlebih dahulu <br>";
            echo "<a href='index.php'><b><u>Kembali</u></b></a>";
        }
        ?>
    </div>
</body>

</html>