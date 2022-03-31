<?php
include "config.php";

// edit profile data
if (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $noHP = $_POST['noHP'];
    $alamat = $_POST['alamat'];
    $kodePos = $_POST['kodePos'];
    $fileName = $_FILES['fotoProfil']['name'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];


    // validate password
    if ($password1 != $password2) {
        echo '<script type="text/javascript">';
        echo 'alert("Password tidak sama!");';
        echo 'window.location.href = "editProfile.php";';
        echo '</script>';
    } else {
        // check image
        if ($fileName) {
            $fileTmpName = $_FILES['fotoProfil']['tmp_name'];
            $dirUpload = "uploads/";
            $temp = explode(".", $fileName);
            $fileName = round(microtime(true)) . "_" . $_POST['username'] . '.' . end($temp);

            $uploaded = move_uploaded_file($fileTmpName, $dirUpload . $fileName);

            if (!$uploaded) {
                echo "Failed to upload file!";
            } else {
                $str_query = "UPDATE mahasiswa SET email='$email', no_hp='$noHP', alamat='$alamat', kode_pos='$kodePos', foto_profil='$fileName' WHERE id='$id'";
                $result = mysqli_query($connection, $str_query);

                if ($result) {
                    header('Location: index.php');
                } else {
                    echo "Gagal " . mysqli_error($connection);
                }
            }
        } else {
            $str_query = "UPDATE mahasiswa SET email='$email', no_hp='$noHP', alamat='$alamat', kode_pos='$kodePos' WHERE id='$id'";
            $result = mysqli_query($connection, $str_query);

            if ($result) {
                header('Location: index.php');
            } else {
                echo "Gagal " . mysqli_error($connection);
            }
        }
    }
}
