<?php include('../includes/baslik.php'); ?>
<form action="kayit.php" method="POST">
    <h2>Kayıt Ol</h2>
    <label for="is_yeri_adi">İş Yeri Adı:</label>
    <input type="text" name="is_yeri_adi" required>
    <label for="kullanici_adi">Kullanıcı Adı:</label>
    <input type="text" name="kullanici_adi" required>
    <label for="sifre">Şifre:</label>
    <input type="password" name="sifre" required>
    <button type="submit" class="btn btn-success">Kayıt Ol</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('../includes/veritabani.php');
    
    $is_yeri_adi = $_POST['is_yeri_adi'];
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = password_hash($_POST['sifre'], PASSWORD_BCRYPT);
    
    $sorgu = "INSERT INTO kullanicilar (kullanici_adi, is_yeri_adi, sifre) VALUES ('$kullanici_adi', '$is_yeri_adi', '$sifre')";    
    if (mysqli_query($conn, $sorgu)) {
        header("Location: giris.php");
        exit;
    } else {
        echo "Hata: " . mysqli_error($conn);
    }
}
?>

<?php include('../includes/altbilgi.php'); ?>
