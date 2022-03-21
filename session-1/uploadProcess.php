<?php

$fileName = $_FILES['fileUpload']['name'];
$fileTmpName = $_FILES['fileUpload']['tmp_name'];

$dirUpload = "uploads/";

$uploaded = move_uploaded_file($fileTmpName, $dirUpload . $fileName);

if ($uploaded) {
    echo "Uploaded!";
    echo "<br>";
    echo "<a href='" . $dirUpload . $fileName . "'>" . $fileName . "</a>";
} else {
    echo "Failed!";
}
