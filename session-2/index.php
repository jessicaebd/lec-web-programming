<?php
include 'config.php';

$str_query = "SELECT * FROM mahasiswa";
$result = mysqli_query($connection, $str_query);;

while ($fetch = mysqli_fetch_array($result)) {
    echo $fetch['nim'] . " - "
        . $fetch['nama']
        . " <a href='edit.php?nim="
        . $fetch['nim']
        . "'>Edit</a>&nbsp&nbsp<a href='delete.php?nim="
        . $fetch['nim']
        . "'>Delete</a> <br>";
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

    <form action="prosesDaftarMahasiswa.php" method="post">
        NIM: <input type="text" name="nim"><br>
        Nama: <input type="text" name="nama"><br>
        Jurusan: <input type="text" name="jurusan"><br>
        Tanggal Lahir: <input type="date" name="tanggal_lahir"><br>
        <input type="submit" name="daftar" value="Daftar">
    </form>
</body>

</html>