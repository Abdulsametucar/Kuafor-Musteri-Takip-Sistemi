<?php
session_start();
if (!isset($_SESSION['kullanici_id'])) {
    header("Location: giris.php");
    exit;
}
include('../includes/baslik.php');
include('../includes/veritabani.php');

$id = $_GET['id'];
$sorgu = "SELECT * FROM musteriler WHERE id='$id'";
$sonuc = mysqli_query($conn, $sorgu);
$musteri = mysqli_fetch_assoc($sonuc);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ad_soyad = $_POST['ad_soyad'];
    $telefon = $_POST['telefon'];
    $sac_bilgileri = isset($_POST['sac']) ? 1 : 0;
    $sakal_bilgileri = isset($_POST['sakal']) ? 1 : 0;
    $randevu_tarihi = $_POST['randevu_tarihi'];
    $randevu_saat = $_POST['randevu_saat'];

    $sorgu = "UPDATE musteriler SET ad_soyad='$ad_soyad', telefon='$telefon', sac_bilgileri='$sac_bilgileri', sakal_bilgileri='$sakal_bilgileri', randevu_tarihi='$randevu_tarihi', randevu_saat='$randevu_saat' WHERE id='$id'";
    
    if (mysqli_query($conn, $sorgu)) {
        echo "Müşteri başarıyla güncellendi!";
    } else {
        echo "Hata: " . mysqli_error($conn);
    }
}
?>

<form action="musteri_duzenle.php?id=<?php echo $id; ?>" method="POST">
    <h2>Müşteri Düzenle</h2>
    <label for="ad_soyad">Ad Soyad:</label>
    <input type="text" name="ad_soyad" value="<?php echo $musteri['ad_soyad']; ?>" required>
    <label for="telefon">Telefon:</label>
    <input type="text" name="telefon" value="<?php echo $musteri['telefon']; ?>" required>
    <div>
        <input type="checkbox" id="sac" name="sac" value="1" <?php if ($musteri['sac_bilgileri'] == 'Saç') echo 'checked'; ?>>
        <label for="sac">Saç</label>
    </div>
    <div>
        <input type="checkbox" id="sakal" name="sakal" value="1" <?php if ($musteri['sakal_bilgileri'] == 'Sakal') echo 'checked'; ?>>
        <label for="sakal">Sakal</label>
    </div>
    <label for="randevu_tarihi">Randevu Tarihi:</label>
    <input type="date" name="randevu_tarihi" value="<?php echo $musteri['randevu_tarihi']; ?>" required>
    <label for="randevu_saat">Randevu Saati:</label>
    <input type="time" name="randevu_saat" value="<?php echo $musteri['randevu_saat']; ?>" required>
    <button type="submit" class="btn btn-warning">Güncelle</button>
</form>

<?php include('../includes/altbilgi.php'); ?> 
