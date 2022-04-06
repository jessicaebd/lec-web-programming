<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $image_name = $_POST['image_name'];
    $image_type = $_FILES['uploaded_image']['type'];
    $image_data = addslashes(file_get_contents($_FILES['uploaded_image']['tmp_name']));

    $query = "INSERT INTO tb_images (image_name, image_type, image_data) VALUES ('$image_name', '$image_type', '$image_data')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        header('Location: index.php');
    } else {
        echo 'Error';
    }
}
