<?php
include 'config.php';

if (isset($_POST['edit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $str_query = "UPDATE mahasiswa SET nama = '$nama', jurusan = '$jurusan', tanggal_lahir = '$tanggal_lahir' WHERE nim = '$nim'";
    $result = mysqli_query($connection, $str_query);

    if ($result) {
        header('Location: index.php');
    } else {
        echo "Gagal " . mysqli_error($connection);
    }
}
