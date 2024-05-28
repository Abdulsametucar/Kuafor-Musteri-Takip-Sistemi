<?php include('../includes/baslik.php'); ?> 
<form action="giris.php" method="POST">
    <h2>Giriş Yap</h2>
    <label for="kullanici_adi">Kullanıcı Adı:</label>
    <input type="text" name="kullanici_adi" required>
    <label for="sifre">Şifre:</label>
    <input type="password" name="sifre" required>
    <button type="submit" class="btn btn-primary">Giriş Yap</button>
</form>
<p>Hesabınız yok mu? <a href="kayit.php">Kayıt Ol</a></p>
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('../includes/veritabani.php');
    
    $kullanici_adi = $_POST['kullanici_adi'];
    $sifre = $_POST['sifre'];
    
    $sorgu = "SELECT * FROM kullanicilar WHERE kullanici_adi='$kullanici_adi'";
    $sonuc = mysqli_query($conn, $sorgu);
    $kullanici = mysqli_fetch_assoc($sonuc);
    
    if ($kullanici && password_verify($sifre, $kullanici['sifre'])) {
        $_SESSION['kullanici_id'] = $kullanici['id'];
        $_SESSION['is_yeri_adi'] = $kullanici['is_yeri_adi'];
        header("Location: anasayfa.php");
    } else {
        echo "Kullanıcı adı veya şifre hatalı!";
    }
}
?>

<?php include('../includes/altbilgi.php'); ?>
