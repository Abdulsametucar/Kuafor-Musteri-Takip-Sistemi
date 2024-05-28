<?php
session_start();
if (!isset($_SESSION['kullanici_id'])) {
    header("Location: giris.php");
    exit;
}
include('../includes/baslik.php'); 
?>

<form action="musteri_ekle.php" method="POST">
    <h2>Müşteri Ekle</h2>
    <label for="ad_soyad">Ad Soyad:</label>
    <input type="text" name="ad_soyad" required>
    <label for="telefon">Telefon:</label>
    <input type="text" name="telefon" required>
    <label>Saç ve/veya Sakal Bilgileri:</label>
    <div>
        <input type="checkbox" id="sac" name="sac" value="1" >
        <label for="sac">Saç</label>
    </div>
    <div>
        <input type="checkbox" id="sakal" name="sakal" value="1" >
        <label for="sakal">Sakal</label>
    </div>
    <label for="randevu_tarihi">Randevu Tarihi:</label>
    <input type="date" name="randevu_tarihi" required>
    <label for="randevu_saat">Randevu Saat:</label>
    <input type="time" id="randevu_saat" name="randevu_saat" required>
    <button type="submit" class="btn btn-success">Müşteri Ekle</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('../includes/veritabani.php');
    
    $kullanici_id = $_SESSION['kullanici_id'];
    $ad_soyad = $_POST['ad_soyad'];
    $telefon = $_POST['telefon'];
    $sac_bilgileri = isset($_POST['sac']) ? 1 : 0;
    $sakal_bilgileri = isset($_POST['sakal']) ? 1 : 0;
    $randevu_tarihi = $_POST['randevu_tarihi'];
    $randevu_saat = $_POST['randevu_saat'];
    
    $sorgu = "INSERT INTO musteriler (kullanici_id, ad_soyad, telefon, randevu_tarihi,sac_bilgileri, sakal_bilgileri, randevu_saat) VALUES ('$kullanici_id', '$ad_soyad', '$telefon', '$randevu_tarihi','$sac_bilgileri', '$sakal_bilgileri', '$randevu_saat')";
    
    if (mysqli_query($conn, $sorgu)) {
        echo "Müşteri başarıyla eklendi!";
    } else {
        echo "Hata: " . mysqli_error($conn);
    }
}
?>

<?php include('../includes/altbilgi.php'); ?> 
