<?php
// Connect to db
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'php_dasar';

$connection = mysqli_connect($server, $username, $password, $db_name);

if ($connection) {
    // echo 'Connected to database';
} else {
    throw new Exception("MySQL connection error: " . mysqli_connect_error());
}
