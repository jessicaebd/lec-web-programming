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
        session_start();
        if (isset($_SESSION)) {
            echo "Halo, <b>" . $_SESSION['namaDepan'] . " " . $_SESSION['namaTengah'] . " " . $_SESSION['namaBelakang'] . "</b>, Selamat Datang di Aplikasi Pengelolaan Keuangan";
        } else {
            echo "Silahkan login terlebih dahulu <br>";
            echo "<a href='welcome.php'>Kembali</a>";
        }
        ?>
    </div>
</body>

</html>