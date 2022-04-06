<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="processUpload.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="image_name" required></td>
            </tr>
            <tr>
                <td>Upload image</td>
                <td><input type="file" name="uploaded_image" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Submit"></td>
            </tr>
        </table>
    </form>
    <table>
        <tr>
            <?php
            include 'config.php';

            $query = "SELECT * FROM tb_images";
            $result = mysqli_query($connection, $query);

            while ($fetch = mysqli_fetch_array($result)) {
            ?>

                <td>
                    <img src="data:<?php echo $fetch['image_type']; ?>;base64,<?php echo base64_encode($fetch['image_data']); ?>" width="200">
                </td>

            <?php
            }
            ?>
        </tr>
    </table>
</body>

</html>