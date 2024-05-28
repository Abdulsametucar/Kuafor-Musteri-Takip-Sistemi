# Kuafor-Musteri-Takip-Sistemi

## Site Link
http://95.130.171.20/~st21360859075/
## Kurulum

1. Proje dosyalarını indirin ve XAMPP `htdocs` klasörüne yerleştirin.
```
C:\xampp\htdocs\Kuafor-Musteri-Takip-Sistemi-main\
    ├── index.php
    ├── README.md
    ├── .htaccess
    ├── web-proje2\
        ├── css\
        │   └── styles.css
        ├── js\
        │   └── scripts.js
        ├── includes\
        │   ├── veritabani.php
        │   ├── baslik.php
        │   └── altbilgi.php
        ├── pages\
            ├── giris.php
            ├── kayit.php
            ├── anasayfa.php
            ├── musteri_ekle.php
            ├── musteri_sil.php
            ├── cikis.php
            └── musteri_duzenle.php

```
2. XAMPP Kontrol Panelini açın ve Apache ile MySQL'i başlatın.
3. `http://localhost/phpmyadmin` adresine gidin ve yeni bir veritabanı oluşturun.
4. berber.sql dosyasını phpMyAdmin üzerinden veritabanınıza içe aktarın.
5. `web-proje2/includes/veritabani.php` dosyasını açın ve veritabanı bağlantı bilgilerini güncelleyin.
```
$servername = "localhost";
$username = "root";
$password = "";
$database = "berber";     //veritabani ismi
```
6. `http://localhost/Kuafor-Musteri-Takip-Sistemi-main/index.php` adresine gidin ve uygulamayı kullanmaya başlayın.

## Kullanım

- `index.php`: Ana sayfa
- `web-proje2/pages/giris.php`: Kullanıcı giriş sayfası
- `web-proje2/pages/kayit.php`: Kullanıcı kayıt sayfası
- `web-proje2/pages/anasayfa.php`: Giriş yaptıktan sonra kullanıcı ana sayfası
- `web-proje2/pages/musteri_ekle.php`: Yeni müşteri ekleme sayfası
- `web-proje2/pages/musteri_duzenle.php`: Müşteri düzenleme sayfası
- `web-proje2/pages/musteri_sil.php`: Müşteri silme sayfası

## Proje Hakkında

Bu proje, PHP, MySQL, HTML ve Bootstrap kullanılarak bir berber müşteri takip sistemi oluşturmak amacıyla geliştirilmiştir.


## Youtube Link
https://www.youtube.com/watch?v=C0f64fn__zA
