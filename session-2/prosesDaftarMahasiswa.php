<?php
include "config.php";

if (isset($_POST)) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $tanggal_lahir = $_POST['tanggal_lahir'];

    $str_query = "INSERT INTO mahasiswa (nim, nama, jurusan, tanggal_lahir) VALUES ('$nim', '$nama', '$jurusan', '$tanggal_lahir')";
    $result = mysqli_query($connection, $str_query);

    if ($result) {
        header('Location: index.php');
    } else {
        echo 'Data gagal disimpan';
    }
}
