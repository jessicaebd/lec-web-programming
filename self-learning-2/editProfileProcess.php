<?php
include "config.php";
session_start();

// edit profile data
if (isset($_POST['edit'])) {
    $id = $_SESSION['id'];
    $email = $_POST['email'];
    $noHP = $_POST['noHP'];
    $alamat = $_POST['alamat'];
    $kodePos = $_POST['kodePos'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    // validate password
    if ($password1 != $password2) {
        echo "Password tidak sama";
    } else {
        $str_query = "UPDATE mahasiswa SET email = '$email', no_hp = '$noHP', alamat = '$alamat', kode_pos = '$kodePos', password = '$password1' WHERE id = '$id'";
        $result = mysqli_query($connection, $str_query);

        if ($result) {
            header('Location: index.php');
        } else {
            echo "Gagal " . mysqli_error($connection);
        }
    }
}
