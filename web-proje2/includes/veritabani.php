<?php
$servername = "localhost";
$username = "dbusr21360859075";
$password = "QYiOTNWp9lJA";
$database = "dbstorage21360859075";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Bağlantı hatası: " . mysqli_connect_error());
}
?>
