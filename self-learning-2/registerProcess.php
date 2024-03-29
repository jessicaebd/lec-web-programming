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
    <div class="container register-error">
        <div class="header">
            <h3 style="color:red;">Attention!</h3>
        </div>

        <?php
        include "config.php";

        if (isset($_POST['Register'])) {
            $namaDepan = $_POST['namaDepan'];
            $namaTengah = $_POST['namaTengah'];
            $namaBelakang = $_POST['namaBelakang'];
            $tempatLahir = $_POST['tempatLahir'];
            $tanggalLahir = $_POST['tanggalLahir'];
            $nik = $_POST['nik'];
            $wargaNegara = $_POST['wargaNegara'];
            $email = $_POST['email'];
            $noHP = $_POST['noHP'];
            $alamat = $_POST['alamat'];
            $kodePos = $_POST['kodePos'];
            $fotoProfil = $_FILES['fotoProfil']['name'];
            $username = $_POST['username'];
            $password1 = $_POST['password1'];
            $password2 = $_POST['password2'];


            // Validate input
            $errors = array();

            if (empty($namaDepan)) {
                array_push($errors, "Nama Depan tidak boleh kosong");
            } else {
                if (!preg_match("/^[a-zA-Z]*$/", $namaDepan)) {
                    array_push($errors, "Nama Depan tidak valid");
                }
            }

            if (empty($namaTengah)) {
                array_push($errors, "Nama Tengah tidak boleh kosong");
            } else {
                if (!preg_match("/^[a-zA-Z]*$/", $namaTengah)) {
                    array_push($errors, "Nama Tengah tidak valid");
                }
            }

            if (empty($namaBelakang)) {
                array_push($errors, "Nama Belakang tidak boleh kosong");
            } else {
                if (!preg_match("/^[a-zA-Z]*$/", $namaBelakang)) {
                    array_push($errors, "Nama Belakang tidak valid");
                }
            }

            if (empty($tempatLahir)) {
                array_push($errors, "Tempat Lahir tidak boleh kosong");
            } else {
                if (!preg_match("/^[a-zA-Z]*$/", $tempatLahir)) {
                    array_push($errors, "Tempat Lahir tidak valid");
                }
            }

            if (empty($tanggalLahir)) {
                array_push($errors, "Tanggal Lahir tidak boleh kosong");
            }

            if (empty($nik)) {
                array_push($errors, "NIK tidak boleh kosong");
            } else {
                if (!preg_match("/^[0-9]*$/", $nik) && strlen($nik) != 16) {
                    array_push($errors, "NIK tidak valid");
                }
            }

            if (empty($wargaNegara)) {
                array_push($errors, "Warga Negara tidak boleh kosong");
            } else {
                if (!preg_match("/^[a-zA-Z]*$/", $wargaNegara)) {
                    array_push($errors, "Warga Negara tidak valid");
                }
            }

            if (empty($email)) {
                array_push($errors, "Email tidak boleh kosong");
            } else {
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    array_push($errors, "Email tidak valid");
                }
            }

            if (empty($noHP)) {
                array_push($errors, "No HP tidak boleh kosong");
            } else {
                if (!preg_match("/^[0-9]*$/", $noHP) && strlen($noHP) != 12) {
                    array_push($errors, "No HP tidak valid");
                }
            }

            if (empty($alamat)) {
                array_push($errors, "Alamat tidak boleh kosong");
            } else {
                if (!preg_match("/^[a-zA-Z0-9 ]*$/", $alamat)) {
                    array_push($errors, "Alamat hanya boleh berisi huruf, angka dan spasi");
                }
            }

            if (empty($kodePos)) {
                array_push($errors, "Kode Pos tidak boleh kosong");
            } else {
                if (!preg_match("/^[0-9]*$/", $kodePos) && strlen($kodePos) != 5) {
                    array_push($errors, "Kode Pos tidak valid!");
                }
            }

            if (empty($username)) {
                array_push($errors, "Username tidak boleh kosong!");
            } else {
                if (strlen($username) < 6) {
                    array_push($errors, "Username harus berisi minimal 6 karakter!");
                } else {
                    if (strlen($username) > 20) {
                        array_push($errors, "Username harus berisi maksimal 20 karakter!");
                    }
                }
            }

            if (empty($password1)) {
                array_push($errors, "Password tidak boleh kosong!");
            } else {
                if (strlen($password1) < 6) {
                    array_push($errors, "Password harus berisi minimal 6 karakter!");
                } else {
                    if (strlen($password1) > 20) {
                        array_push($errors, "Password harus berisi maksimal 20 karakter!");
                    }
                }
            }

            if (empty($password2)) {
                array_push($errors, "Konfirmasi password tidak boleh kosong!");
            } else {
                if ($password1 != $password2) {
                    array_push($errors, "Password tidak sama!");
                }
            }


            // Handle File Upload
            $fileName = $_FILES['fotoProfil']['name'];
            $fileTmpName = $_FILES['fotoProfil']['tmp_name'];
            $dirUpload = "uploads/";
            // Rename file name before saving to dir
            $temp = explode(".", $fileName);
            $fileName = round(microtime(true)) . "_" . $username . '.' . end($temp);
            $uploaded = move_uploaded_file($fileTmpName, $dirUpload . $fileName);


            // Insert data
            if (!$uploaded) {
                array_push($errors, "Failed to upload file!");

                foreach ($errors as $error) {
                    echo $error . "<br>";
                }
                echo "<br><a href='index.php'><u>Kembali</u></a>";
            } else {
                if (count($errors) == 0) {
                    $str_query = "INSERT INTO `mahasiswa` (`nama_depan`, `nama_tengah`, `nama_belakang`, `tempat_lahir`, `tanggal_lahir`, `nik`, `warga_negara`, `email`, `no_hp`, `alamat`, `kode_pos`, `foto_profil`, `username`, `password`) VALUES ('$namaDepan', '$namaTengah', '$namaBelakang', '$tempatLahir', '$tanggalLahir', '$nik', '$wargaNegara', '$email', '$noHP', '$alamat', '$kodePos', '$fileName', '$username', '$password1')";

                    $result = mysqli_query($connection, $str_query);

                    if ($result) {
                        header('Location: index.php');
                    } else {
                        echo '<script type="text/javascript">';
                        echo 'alert("Registrasi Gagal!");';
                        echo 'window.location.href = "index.php";';
                        echo '</script>';
                    }
                } else {
                    foreach ($errors as $error) {
                        echo $error . "<br>";
                    }
                    echo "<br><a href='index.php'><u>Kembali</u></a>";
                }
            }
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Registrasi Gagal!");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
        }
        ?>
    </div>
</body>

</html>