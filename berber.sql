-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 May 2024, 14:28:34
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `berber`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `is_yeri_adi` varchar(100) DEFAULT NULL,
  `sifre` varchar(255) NOT NULL,
  `olusturma_tarihi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `is_yeri_adi`, `sifre`, `olusturma_tarihi`) VALUES
(1, 'samet', NULL, '$2y$10$Axgxv6xyBp/sAD67RypqMOe2ERfbB538fpoNAdKz8DzpK9hGoOSdG', '2024-05-23 13:18:28'),
(6, 'btubm', 'BTÜ Kuaför', '$2y$10$IR7yl1QPhbKcaPE4iUDL0.IEaf2xBpWyyBeBq7YyBtvkIWjtgGaHe', '2024-05-26 11:20:48');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `musteriler`
--

CREATE TABLE `musteriler` (
  `id` int(11) NOT NULL,
  `kullanici_id` int(11) NOT NULL,
  `ad_soyad` varchar(100) NOT NULL,
  `telefon` varchar(15) NOT NULL,
  `randevu_tarihi` date NOT NULL,
  `sac_bilgileri` tinyint(1) DEFAULT 1,
  `sakal_bilgileri` tinyint(1) DEFAULT 1,
  `randevu_saat` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `musteriler`
--

INSERT INTO `musteriler` (`id`, `kullanici_id`, `ad_soyad`, `telefon`, `randevu_tarihi`, `sac_bilgileri`, `sakal_bilgileri`, `randevu_saat`) VALUES
(6, 1, 'enes', '05422122322', '2024-05-16', 1, 0, '20:00:00'),
(7, 1, 'berk', '05411593256', '2024-05-30', 0, 1, '20:00:00'),
(8, 1, 'samet', '05421231212', '2024-05-30', 1, 0, '20:00:00'),
(9, 1, 'berk', '05411593259', '2024-05-22', 1, 0, '23:34:00'),
(10, 1, 'samet', '05422610207', '2024-05-30', 0, 1, '23:32:00'),
(11, 1, 'burak er', '05421231212', '2024-05-23', 1, 0, '19:34:00'),
(12, 1, 'erdem', '05421231212', '2024-05-31', 1, 1, '18:37:00'),
(13, 6, 'malik altın', '05421231212', '2024-05-23', 1, 0, '18:21:00'),
(14, 6, 'burak er', '05411593256', '2024-05-25', 0, 1, '19:21:00'),
(15, 6, 'berk', '05422122323', '2024-05-27', 1, 1, '16:21:00'),
(16, 6, 'samet', '05411593259', '2024-05-28', 1, 0, '15:22:00'),
(17, 6, 'enes', '05651561515', '2024-05-30', 0, 1, '20:22:00'),
(18, 6, 'emin', '05651561515', '2024-05-30', 1, 0, '15:28:00'),
(19, 6, 'furkan', '05462313131', '2024-05-31', 1, 1, '22:00:00'),
(20, 6, 'batu', '05315649789', '2024-05-08', 1, 0, '19:01:00');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullanici_adi` (`kullanici_adi`);

--
-- Tablo için indeksler `musteriler`
--
ALTER TABLE `musteriler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kullanici_id` (`kullanici_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Tablo için AUTO_INCREMENT değeri `musteriler`
--
ALTER TABLE `musteriler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `musteriler`
--
ALTER TABLE `musteriler`
  ADD CONSTRAINT `musteriler_ibfk_1` FOREIGN KEY (`kullanici_id`) REFERENCES `kullanicilar` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
