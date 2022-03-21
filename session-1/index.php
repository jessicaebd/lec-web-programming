<?php

echo "<h1>Hello World!</h1>";

// ? Go to
echo "<a href='" . "login.php" . "'>" . "Go to Login" . "</a>";
echo "<br>";
echo "<a href='" . "register.php" . "'>" . "Go to Register" . "</a>";
echo "<br>";
echo "<a href='" . "upload.php" . "'>" . "Go to Upload" . "</a>";
echo "<br>";


//* Tipe Data
echo "<h2>Tipe Data</h2>";
$text = "Text";
$number = 1;
$float = 1.2;
$boolean = true;

echo "<br>";
echo $text;
echo "<br>";
echo $number;
echo "<br>";
echo $float;
echo "<br>";
echo $boolean;

//* Operator
echo "<h2>Operator</h2>";
$a = 1;
$b = 2;
$c = "1";

$d = $a + $b;
echo $d;

echo "<br>";
var_dump($a == $c);

echo "<br>";
var_dump($a === $c);


// * Date
echo "<h2>Date</h2>";
$today = date("d/m/Y");
echo $today;

echo "<br>";

date_default_timezone_set('Asia/Jakarta');
echo date('D, d-M-y h:i:s');
