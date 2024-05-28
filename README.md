# Kuafor-Musteri-Takip-Sistemi

## Kurulum

1. Proje dosyalarını indirin ve XAMPP `htdocs` klasörüne yerleştirin.
```
C:\xampp\htdocs\
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
6. `http://localhost/index.php` adresine gidin ve uygulamayı kullanmaya başlayın.

## Kullanım

- `index.php`: Ana sayfa
- `web-proje2/pages/giris.php`: Kullanıcı giriş sayfası
- `web-proje2/pages/kayit.php`: Kullanıcı kayıt sayfası
- `web-proje2/pages/anasayfa.php`: Giriş yaptıktan sonra kullanıcı ana sayfası
- `web-proje2/pages/musteri_ekle.php`: Yeni müşteri ekleme sayfası
- `web-proje2/pages/musteri_duzenle.php`: Müşteri düzenleme sayfası
- `web-proje2/pages/musteri_listele.php`: Müşteri listeleme sayfası

## Proje Hakkında

Bu proje, PHP, MySQL, HTML ve Bootstrap kullanılarak bir berber müşteri takip sistemi oluşturmak amacıyla geliştirilmiştir.
