<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        <?php include "css/style.css" ?>
    </style>

    <title>Document</title>
</head>

<body>
    <div class="container register-error">
        <div class="header">
            <h3 style="color:red;">Attention!</h3>
        </div>

        <?php
        session_start();

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


            // Validate
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

            $uploaded = move_uploaded_file($fileTmpName, $dirUpload . $fileName);

            if (!$uploaded) {
                array_push($errors, "Failed to upload file!");
            }


            // Insert data
            if (count($errors) == 0 && $uploaded) {
                $_SESSION['namaDepan'] = $namaDepan;
                $_SESSION['namaTengah'] = $namaTengah;
                $_SESSION['namaBelakang'] = $namaBelakang;
                $_SESSION['tempatLahir'] = $tempatLahir;
                $_SESSION['tanggalLahir'] = $tanggalLahir;
                $_SESSION['nik'] = $nik;
                $_SESSION['wargaNegara'] = $wargaNegara;
                $_SESSION['email'] = $email;
                $_SESSION['noHP'] = $noHP;
                $_SESSION['alamat'] = $alamat;
                $_SESSION['kodePos'] = $kodePos;
                $_SESSION['fotoProfil'] = $fileName;
                $_SESSION['username'] = $username;
                $_SESSION['password1'] = $password1;
                $_SESSION['password2'] = $password2;

                echo "Username: " . $_SESSION['username'] . "<br>";
                header('Location: index.php');
            } else {
                foreach ($errors as $error) {
                    echo $error . "<br>";
                }
                echo "<br><a href='register.php'><u>Kembali</u></a>";
            }
        } else {
            echo "Register Failed!";
        }
        ?>
    </div>
</body>

</html>