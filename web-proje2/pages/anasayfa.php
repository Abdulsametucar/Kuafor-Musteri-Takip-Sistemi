<?php
session_start();
if (!isset($_SESSION['kullanici_id'])) {
    header("Location: giris.php");
    exit;
}
include('../includes/baslik.php');
include('../includes/veritabani.php');

$kullanici_id = $_SESSION['kullanici_id'];
$sorgu = "SELECT * FROM musteriler WHERE kullanici_id='$kullanici_id'";
$sonuc = mysqli_query($conn, $sorgu);
?>
<h1 > <?php echo $_SESSION['is_yeri_adi']; ?></h1>
<h2 class="panel-heading">Müşterilerim</h2>
<div class="jumbotron panel-body">

<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>Ad Soyad</th>
            <th>Telefon</th>
            <th>Saç</th>
            <th>Sakal</th>
            <th>Randevu Tarihi</th>
            <th>Randevu Saati</th>
            <th>İşlemler</th>
        </tr>
    </thead>
    <tbody>
        <?php while ($satir = mysqli_fetch_assoc($sonuc)): ?>
        <tr>
            <td><?php echo $satir['ad_soyad']; ?></td>
            <td><?php echo $satir['telefon']; ?></td>
            <td><?php echo $satir['sac_bilgileri'] ? '💲' : '❌'; ?></td> 
            <td><?php echo $satir['sakal_bilgileri'] ? '💲' : '❌'; ?></td>   
            <td><?php echo $satir['randevu_tarihi']; ?></td>
            <td><?php echo $satir['randevu_saat']; ?></td>
            <td class="warning">
                <a href="musteri_duzenle.php?id=<?php echo $satir['id']; ?>">Düzenle</a>
                <a href="musteri_sil.php?id=<?php echo $satir['id']; ?>">Sil</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
</div>

<?php include('../includes/altbilgi.php'); ?> 
