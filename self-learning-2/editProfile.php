<?php
include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $str_query = "SELECT * FROM mahasiswa WHERE id = $id";
    $result = mysqli_query($connection, $str_query);
    $fetch = mysqli_fetch_array($result);
}
?>

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
            <h3>Edit Profile</h3>
        </div>

        <form action="editProfileProcess.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Nama Depan</td>
                    <td><input type=" text" name="namaDepan" value="<?php echo $fetch['nama_depan']; ?>" readonly>
                    </td>

                    <td>Nama Tengah</td>
                    <td><input type="text" name="namaTengah" value="<?php echo $fetch['nama_tengah']; ?>" readonly></td>

                    <td>Nama Belakang</td>
                    <td><input type="text" name="namaBelakang" value="<?php echo $fetch['nama_belakang']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempatLahir" value="<?php echo $fetch['tempat_lahir']; ?>" readonly></td>

                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggalLahir" value="<?php echo $fetch['tanggal_lahir']; ?>" readonly></td>

                    <td>NIK</td>
                    <td><input type="text" name="nik" value="<?php echo $fetch['nik']; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name="wargaNegara" value="<?php echo $fetch['warga_negara']; ?>" readonly></td>

                    <td>Email</td>
                    <td><input type="email" name="email" value="<?php echo $fetch['email']; ?>"></td>

                    <td>No HP</td>
                    <td><input type="text" name="noHP" value="<?php echo $fetch['no_hp']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea type="text" name="alamat" value="<?php echo $fetch['alamat']; ?>" rows="4"></textarea></td>

                    <td>Kode Pos</td>
                    <td><input type="text" name="kodePos" value="<?php echo $fetch['kode_pos']; ?>"></td>

                    <td>Foto Profil</td>
                    <td>
                        <input type="file" name="fotoProfil">
                        <br>
                        <img src="uploads/<?php echo $fetch['foto_profil']; ?>" alt="" width="100">
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type=" text" name="username" value="<?php echo $fetch['username']; ?>" readonly></td>

                    <td>Password 1</td>
                    <td><input type="password" name="password1" value="<?php echo $fetch['password']; ?>"></td>

                    <td>Password 2</td>
                    <td><input type="password" name="password2" value="<?php echo $fetch['password']; ?>"></td>
                </tr>
                <tr>
                    <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>">
                </tr>
                <tr>
                    <td></td>
                    <td></td>

                    <td></td>
                    <td></td>

                    <td class="kembali"><button><a href="profile.php">Kembali</a></button></td>
                    <td class="register"><input type="submit" name="edit" value="Save"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>