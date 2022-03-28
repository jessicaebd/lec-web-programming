<?php
include "config.php";

if (isset($_GET['nim'])) {
    $nim = $_GET['nim'];
    $str_query = "SELECT * FROM mahasiswa WHERE nim = '$nim'";
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
    <title>Document</title>
</head>

<body>
    <form action="prosesEditMahasiswa.php" method="post">
        NIM: <input type="text" name="nim" value="<?php echo $fetch['nim']; ?>" readonly><br>
        Nama: <input type="text" name="nama" value="<?php echo $fetch['nama']; ?>"><br>
        Jurusan: <input type="text" name="jurusan" value="<?php echo $fetch['jurusan']; ?>"><br>
        Tanggal Lahir: <input type="date" name="tanggal_lahir" value="<?php echo $fetch['tanggal_lahir']; ?>"><br>
        <input type="submit" name="edit" value="Save">
    </form>
</body>

</html>