<?php
$host   = "localhost";
$user   = "root";
$pass   = "";
$db     = "coursify";

$koneksi = mysqli_connect($host, $user, $pass, $db);

if (!$koneksi) {
    die("Connection Failed: " . mysqli_connect_error());
} else {
    echo "";
}
?>
