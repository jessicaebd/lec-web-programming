<?php

session_start();

session_destroy();

echo '<script type="text/javascript">';
echo 'alert("Logout berhasil!");';
echo 'window.location.href = "index.php";';
echo '</script>';
