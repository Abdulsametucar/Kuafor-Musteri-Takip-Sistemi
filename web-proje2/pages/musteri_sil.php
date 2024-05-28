<?php
session_start();
if (!isset($_SESSION['kullanici_id'])) {
    header("Location: giris.php");
    exit;
}
include('../includes/veritabani.php');
$id = $_GET['id'];
$sorgu = "DELETE FROM musteriler WHERE id='$id'";

if (mysqli_query($conn, $sorgu)) {
    header("Location: anasayfa.php");
} else {
    echo "Hata: " . mysqli_error($conn);
}
?>
