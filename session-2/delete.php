<?php
include 'config.php';

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $str_query = "DELETE FROM mahasiswa WHERE nim = '$nim'";
    $result = mysqli_query($connection, $str_query);

    if ($result) {
        header('Location: index.php');
    } else {
        echo "Gagal " . mysqli_error($connection);
    }
}
