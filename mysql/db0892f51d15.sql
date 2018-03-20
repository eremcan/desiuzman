-- phpMyAdmin SQL Dump
-- version 3.4.10
-- http://www.phpmyadmin.net
--
-- Anamakine: 94.73.145.204
-- Üretim Zamanı: 19 Şub 2017, 12:27:27
-- Sunucu sürümü: 5.5.45
-- PHP Sürümü: 5.2.6-1+lenny10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Veritabanı: `db0892f51d15`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ayarlar`
--

CREATE TABLE IF NOT EXISTS `ayarlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `base` text NOT NULL,
  `descr` text NOT NULL,
  `kullanici` text NOT NULL,
  `parola` text NOT NULL,
  `keywwr` text NOT NULL,
  `fbb` text NOT NULL,
  `tww` text NOT NULL,
  `inss` text NOT NULL,
  `adres1` text NOT NULL,
  `adres2` text NOT NULL,
  `telefon` text NOT NULL,
  `mail` text NOT NULL,
  `anaalt1` text NOT NULL,
  `anaaltbas1` text NOT NULL,
  `anaalt2` text NOT NULL,
  `anaaltbas2` text NOT NULL,
  `anaalt3` text NOT NULL,
  `anaaltbas3` text NOT NULL,
  `anaalt4` text NOT NULL,
  `anaaltbas4` text NOT NULL,
  `anaalt5` text NOT NULL,
  `anaaltbas5` text NOT NULL,
  `anaalt6` text NOT NULL,
  `anaaltbas6` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Tablo döküm verisi `ayarlar`
--

INSERT INTO `ayarlar` (`id`, `title`, `base`, `descr`, `kullanici`, `parola`, `keywwr`, `fbb`, `tww`, `inss`, `adres1`, `adres2`, `telefon`, `mail`, `anaalt1`, `anaaltbas1`, `anaalt2`, `anaaltbas2`, `anaalt3`, `anaaltbas3`, `anaalt4`, `anaaltbas4`, `anaalt5`, `anaaltbas5`, `anaalt6`, `anaaltbas6`) VALUES
(1, 'Desi Alarm ve Güvenlik Sistemleri', 'http://www.isatektekne.com.tr/alarm/', 'description', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Keywords', 'fb', 'tw', 'ins', 'adres 1', 'adres 2', '08500000000', 'info@desialarm.com', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.', 'Service Two', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.', 'Service Two', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.', 'Service Two', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.', 'Service Two', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.', 'Service Two', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo itaque ipsum sit harum.', 'Service Two');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `iletisim`
--

CREATE TABLE IF NOT EXISTS `iletisim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adsoyad` text NOT NULL,
  `mail` text NOT NULL,
  `telefon` text NOT NULL,
  `tarih` text NOT NULL,
  `mesaj` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Tablo döküm verisi `iletisim`
--

INSERT INTO `iletisim` (`id`, `adsoyad`, `mail`, `telefon`, `tarih`, `mesaj`) VALUES
(8, 'adsas', 'sadasd@asd.com', 'asdsadasd', '17.02.2017', 'asd'),
(7, 'adsas', 'sadasd@asd.com', 'asdsadasd', '17.02.2017', 'asd');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` text NOT NULL,
  `sef` text NOT NULL,
  `resim` text NOT NULL,
  `cat` int(11) NOT NULL,
  `catyol` text NOT NULL,
  `descr` text NOT NULL,
  `keywrd` text NOT NULL,
  `yazi` text NOT NULL,
  `sira` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Tablo döküm verisi `kategori`
--

INSERT INTO `kategori` (`id`, `baslik`, `sef`, `resim`, `cat`, `catyol`, `descr`, `keywrd`, `yazi`, `sira`) VALUES
(1, 'AHD KAMERALAR', 'AHD-KAMERALAR', 'http://www.isatektekne.com.tr/alarm/urunler/a0646AHD.png', 0, '-0---', '', '', '<p>xxxx</p>\r\n', 1),
(2, 'Dome Kameralar', 'dome-kameralar', '', 1, '-0-1-', '', '', '', 0),
(3, 'Ir Bullet Kameralar', 'ir-bullet-kameralar', '', 1, '-0-1-', '', '', '', 0),
(4, 'Box Kameralar', 'Box-Kameralar', '', 1, '-0-1-', '', '', '<p>adadasd</p>\r\n', 0),
(5, 'PTZ KAMERALAR', 'ptz-kameralar', '', 1, '-0-1-', '', '', '<p><strong>PTZ KAMERALAR</strong></p>\r\n', 0),
(6, 'AHD KAYIT CİHAZLARI', 'AHD-KAYIT-CIHAZLARI', 'http://www.isatektekne.com.tr/alarm/urunler/e286fkayit.png', 0, '-0---', '', '', '<p>AHD KAYIT CİHAZLARI</p>\r\n', 2),
(7, '4 KANAL DVR', '4-kanal-dvr', '', 6, '-0-6-', '', '', '<ul>\r\n	<li><strong>4 KANAL DVR</strong></li>\r\n</ul>\r\n', 0),
(8, '8 KANAL DVR', '8-kanal-dvr', '', 6, '-0-6-', '', '', '<ul>\r\n	<li><strong>a&ccedil;ıklama</strong></li>\r\n</ul>\r\n', 0),
(9, '16 KANAL DVR', '16-kanal-dvr', '', 6, '-0-6-', '', '', '<p>aaaa</p>\r\n', 0),
(10, '24 KANAL DVR', '24-kanal-dvr', '', 9, '-0-6-9-', '', '', '<ul>\r\n	<li><strong>24 KANAL DVR</strong></li>\r\n</ul>\r\n', 0),
(11, '32 KANAL DVR', '32-kanal-dvr', '', 6, '-0-6-', '', '', '<p>32</p>\r\n', 0),
(12, 'IP KAMERALAR', 'IP-KAMERALAR', 'http://www.isatektekne.com.tr/alarm/urunler/83653ipk.png', 0, '-0---', '', '', '<p>a&ccedil;ıklama</p>\r\n', 3),
(13, 'DOME KAMERALAR', 'dome-kameralar-1', '', 12, '-0-12-', '', '', '<ul>\r\n	<li><strong>DOME KAMERALAR</strong></li>\r\n</ul>\r\n', 0),
(14, 'IR BULLET KAMERALAR', 'ir-bullet-kameralar-1', '', 12, '-0-12-', '', '', '<ul>\r\n	<li><strong>IR BULLET KAMERALAR</strong></li>\r\n</ul>\r\n', 0),
(15, 'BOX KAMERALAR', 'box-kameralar-1', '', 12, '-0-12-', '', '', '<ul>\r\n	<li><strong>BOX KAMERALAR</strong></li>\r\n</ul>\r\n', 0),
(16, 'HOME SERİSİ KAMERALAR', 'HOME-SERISI-KAMERALAR', '', 12, '-0-12-', '', '', '<ul>\r\n	<li>&nbsp;</li>\r\n	<li><strong>HOME SERİSİ KAMERALAR</strong></li>\r\n</ul>\r\n', 0),
(17, 'FISH EYE KAMERALAR', 'fish-eye-kameralar', '', 12, '-0-12-', '', '', '<ul>\r\n	<li><strong>FISH EYE KAMERALAR</strong></li>\r\n</ul>\r\n', 0),
(18, 'PLAKA TANIMA SİSTEMİ', 'plaka-tanima-sistemi', '', 12, '-0-12-', '', '', '<ul>\r\n	<li><strong>PLAKA TANIMA SİSTEMİ</strong></li>\r\n</ul>\r\n', 0),
(19, 'ECO-SAVVY KAMERALAR', 'eco-savvy-kameralar', '', 12, '-0-12-', '', '', '<ul>\r\n	<li><strong>ECO-SAVVY KAMERALAR</strong></li>\r\n</ul>\r\n', 0),
(20, 'PTZ KAMERALAR', 'ptz-kameralar-1', '', 12, '-0-12-', '', '', '<ul>\r\n	<li><strong>PTZ KAMERALAR</strong></li>\r\n</ul>\r\n', 0),
(21, 'NVR KAYIT CİHAZLARI', 'NVR-KAYIT-CIHAZLARI', 'http://www.isatektekne.com.tr/alarm/urunler/3cdf8nvr.png', 0, '-0---', '', '', '<p>NVR KAYIT CİHAZLARI</p>\r\n', 4),
(22, '4 KANAL NVR', '4-kanal-nvr', '', 21, '-0-21-', '', '', '<ul>\r\n	<li><strong>4 KANAL NVR</strong></li>\r\n</ul>\r\n', 0),
(23, '8 KANAL NVR', '8-kanal-nvr', '', 21, '-0-21-', '', '', '<p>8 KANAL NVR</p>\r\n', 0),
(24, '16 KANAL NVR', '16-KANAL-NVR', '', 21, '-0-21-', '', '', '<p>12 KANAL NVR</p>\r\n', 0),
(25, '32 KANAL NVR', '32-kanal-nvr', '', 21, '-0-21-', '', '', '<p>32 KANAL NVR</p>\r\n', 0),
(26, 'PoE SWTICH & PoE EXTENDER', 'poe-swtich-poe-extender', '', 21, '-0-21-', '', '', '<p>PoE SWTICH &amp; PoE EXTENDER</p>\r\n', 0),
(27, 'HIRSIZ ALARM SİSTEMLERİ', 'HIRSIZ-ALARM-SISTEMLERI', 'http://www.isatektekne.com.tr/alarm/urunler/f80efhirsiz.png', 0, '-0---', '', '', '<p>HIRSIZ ALARM SİSTEMLERİ</p>\r\n', 5),
(28, 'ALARM SETLERİ', 'alarm-setleri', '', 27, '-0-27-', '', '', '<ul>\r\n	<li><strong>ALARM SETLERİ</strong></li>\r\n</ul>\r\n', 0),
(29, 'SİRENLER', 'sirenler', '', 27, '-0-27-', '', '', '<ul>\r\n	<li><strong>SİRENLER</strong></li>\r\n</ul>\r\n', 0),
(30, 'DEDEKTÖRLER', 'dedektorler', '', 27, '-0-27-', '', '', '<ul>\r\n	<li><strong>DEDEKT&Ouml;RLER</strong></li>\r\n</ul>\r\n', 0),
(31, 'MANYETİK KONTAKLAR', 'manyetik-kontaklar', '', 27, '-0-27-', '', '', '<ul>\r\n	<li><strong>MANYETİK KONTAKLAR</strong></li>\r\n</ul>\r\n', 0),
(32, 'PANİK BUTONLARI', 'panik-butonlari', '', 27, '-0-27-', '', '', '<ul>\r\n	<li><strong>PANİK BUTONLARI</strong></li>\r\n</ul>\r\n', 0),
(33, 'AKSESUARLAR', 'aksesuarlar', '', 27, '-0-27-', '', '', '<ul>\r\n	<li><strong>AKSESUARLAR</strong></li>\r\n</ul>\r\n', 0),
(34, 'DİĞER', 'DIGER', 'http://www.isatektekne.com.tr/alarm/urunler/e4b13diger.png', 0, '-0---', '', '', '', 6),
(35, 'MİKROFONLAR', 'mikrofonlar', '', 34, '-0-34-', '', '', '<p>MİKROFONLAR</p>\r\n', 0),
(36, 'GÜÇ KAYNAKLARI', 'guc-kaynaklari', '', 34, '-0-34-', '', '', '<p>G&Uuml;&Ccedil; KAYNAKLARI</p>\r\n', 0),
(37, 'HARD DISK', 'hard-disk', '', 34, '-0-34-', '', '', '<p>HARD DISK</p>\r\n', 0),
(38, 'KABİNETLER', 'kabinetler', '', 34, '-0-34-', '', '', '<p>KABİNETLER</p>\r\n', 0),
(39, 'MONİTÖRLER', 'monitorler', '', 34, '-0-34-', '', '', '<p>MONİT&Ouml;RLER</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kesif`
--

CREATE TABLE IF NOT EXISTS `kesif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `isim` text NOT NULL,
  `telefon` text NOT NULL,
  `epostra` text NOT NULL,
  `saatx` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Tablo döküm verisi `kesif`
--

INSERT INTO `kesif` (`id`, `isim`, `telefon`, `epostra`, `saatx`) VALUES
(1, 'Çağatay', '05300000', 'asdasd@asd.com', 'Aranmak istediğiniz saat'),
(2, 'Çağatay', '05300000', 'asdasd@asd.com', 'Aranmak istediğiniz saat'),
(3, 'Çağatay', '05300000', 'asdasd@asd.com', 'Aranmak istediğiniz saat'),
(4, 'Çağatay', '05300000', 'asdasd@asd.com', 'Aranmak istediğiniz saat'),
(5, 'Çağatay', '05300000', 'asdasd@asd.com', 'Aranmak istediğiniz saat'),
(6, 'Çağatay', '05300000', 'asdasd@asd.com', 'Aranmak istediğiniz saat'),
(7, 'Çağatay', '05300000', 'asdasd@asd.com', 'Aranmak istediğiniz saat'),
(8, 'asd', '123123', 'asdasd@asd.com', '09:00-12:00'),
(9, 'Çağatay', '123123', 'asdasd@asd.com', '09:00-12:00');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kurumsal`
--

CREATE TABLE IF NOT EXISTS `kurumsal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` text NOT NULL,
  `sef` text NOT NULL,
  `icerik` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Tablo döküm verisi `kurumsal`
--

INSERT INTO `kurumsal` (`id`, `baslik`, `sef`, `icerik`) VALUES
(1, 'Hakkımızda', 'Hakkimizda', '<p><strong>2016 Yılında</strong> kurulan Desi alarm uzmanlık Şirketi <strong>ev, işyeri, mağaza, fabrika, apartman</strong>&nbsp;ve&nbsp;<strong>site</strong> g&uuml;venliği sağlayan, <strong>ara&ccedil; ve personel takip</strong> sistemleri, <strong>yangın alarm</strong> sistemleri gibi sistemleri kuran &uuml;lke &ccedil;apında bu alanda &ouml;nc&uuml; olmayı ama&ccedil;layan bir firmadır.</p>\r\n\r\n<p>Şirketimiz teknolojik alt yapısı ve servis ağı ile tam koruma sağlamaktadır. Geliştirilen &uuml;r&uuml;nleri m&uuml;şterilerine sunan&nbsp;<strong>, </strong>m&uuml;şterilerinden g&uuml;venlik sistemleri talebini profesyonel ekipman ve servis ağı ile m&uuml;kemmelliyetciliği sağlayarak m&uuml;şterilerine hizmeti sunmaktadır. <strong>DESİ UZMAN ŞİRKETİ </strong>verdiği hizmet ve geliştirdiği sistemlerde &uuml;st&uuml;n ve tam koruma sağlamaktadır.</p>\r\n\r\n<p>Satış sonrası teknik servis hizmetlerini, <strong>uzman teknik ekibi ve deneyimli kadrosuyla</strong> sağlayanDesi Uzman firması, <strong>İstanbul&nbsp;</strong>genelinde &ccedil;alışmalarını s&uuml;rd&uuml;rmektedir.</p>\r\n\r\n<p>&nbsp;</p>\r\n');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `referanslar`
--

CREATE TABLE IF NOT EXISTS `referanslar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resim` text NOT NULL,
  `baslik` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Tablo döküm verisi `referanslar`
--

INSERT INTO `referanslar` (`id`, `resim`, `baslik`) VALUES
(1, 'https://www.ustabak.com/wp-content/uploads/2016/08/cam-balkon-1.jpg', 'Referans 1'),
(3, 'http://www.isatektekne.com.tr/alarm/referans/a5733Screenshot_2.png', 'xx');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `urunler`
--

CREATE TABLE IF NOT EXISTS `urunler` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `baslik` text NOT NULL,
  `seo` text NOT NULL,
  `aciklama` text NOT NULL,
  `resim` text NOT NULL,
  `fiyat` text NOT NULL,
  `cat` text NOT NULL,
  `catyol` text NOT NULL,
  `barkod` text NOT NULL,
  `anacat` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;

--
-- Tablo döküm verisi `urunler`
--

INSERT INTO `urunler` (`id`, `baslik`, `seo`, `aciklama`, `resim`, `fiyat`, `cat`, `catyol`, `barkod`, `anacat`) VALUES
(2, 'AHD DOME KAMERA 1MP-8102', 'AHD-DOME-KAMERA-1MP-8102', '<ul style="list-style-type:none">\r\n	<li>AHD Dome&nbsp;Kamera</li>\r\n	<li>Aptina&nbsp;Cmos&nbsp;AR0141</li>\r\n	<li>1280H x&nbsp;800V 1 megapiksel</li>\r\n	<li>2D DNR , 3D DNR</li>\r\n	<li>OSD Men&uuml;l&uuml;</li>\r\n	<li>2.8mm-12mm Varifokal Lens</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/9745dahd-dome-kamera-1mp-8102-B89697.jpg', '100', '2', '', 'AHD8102', '1'),
(3, 'AHD DOME KAMERA 1MP-8100', 'AHD-DOME-KAMERA-1MP-8100', '<ul style="list-style-type:none">\r\n	<li>AHD Dome&nbsp;Kamera</li>\r\n	<li>Aptina&nbsp;Cmos&nbsp;AR0141</li>\r\n	<li>1280H x&nbsp;800V 1 megapiksel</li>\r\n	<li>2D DNR , 3D DNR</li>\r\n	<li>3.6mm Sabit Lens</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/a5d99ahd-dome-kamera-1mp-8100-B59421.jpg', '100', '2', '', 'AHD8100', '1'),
(4, 'AHD DOME KAMERA 1MP-8101', 'AHD-DOME-KAMERA-1MP-8101', '<ul style="list-style-type:none">\r\n	<li>AHD Dome&nbsp;Kamera</li>\r\n	<li>Aptina&nbsp;Cmos&nbsp;AR0141</li>\r\n	<li>1280H x&nbsp;800V 1 megapiksel</li>\r\n	<li>2D DNR , 3D DNR</li>\r\n	<li>3.6mm Sabit Lens</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/f570dahd-dome-kamera-1mp-8101-B20089.jpg', '100', '2', '', 'AHD8101', '1'),
(5, 'AHD DOME KAMERA 2MP-8200', 'AHD-DOME-KAMERA-2MP-8200', '<ul style="list-style-type:none">\r\n	<li>AHD Dome&nbsp;Kamera</li>\r\n	<li>Aptina&nbsp;Cmos&nbsp;AR0141</li>\r\n	<li>1920H x 1080V 2&nbsp;megapiksel</li>\r\n	<li>36 IR Led</li>\r\n	<li>2D DNR , 3D DNR</li>\r\n	<li>3.6mm Sabit Lens</li>\r\n	<li>OSD Men&uuml;l&uuml;</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/f92acahd-dome-kamera-B38193.jpg', '100', '2', '', 'AHD8200', '1'),
(6, 'AHD DOME KAMERA 2MP-8202', 'AHD-DOME-KAMERA-2MP-8202', '<ul style="list-style-type:none">\r\n	<li>AHD Dome&nbsp;Kamera</li>\r\n	<li>Aptina&nbsp;Cmos&nbsp;AR0141</li>\r\n	<li>1920H x 1080V 2&nbsp;megapiksel</li>\r\n	<li>2D DNR , 3D DNR</li>\r\n	<li>OSD Men&uuml;l&uuml;</li>\r\n	<li>2.8mm-12mm Varifokal Lens</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/66afdahd-dome-kamera-2mp-8202-B99888.jpg', '100', '2', '', 'AHD8202', '1'),
(7, 'AHD IR BULLET 2MP-7200', 'AHD-IR-BULLET-2MP-7200', '<ul style="list-style-type:none">\r\n	<li>AHD IR Bullet&nbsp;Kamera</li>\r\n	<li>Aptina&nbsp;Cmos&nbsp;AR0141</li>\r\n	<li>1920H x 1080V 2&nbsp;megapiksel</li>\r\n	<li>2D DNR , 3D DNR</li>\r\n	<li>OSD Men&uuml;l&uuml;</li>\r\n	<li>2.8mm-12mm Varifocal Lens</li>\r\n	<li>4 Adet Array Led</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/3ee0bahd-ir-bullet-2mp-7200-B36431.png', '100', '3', '', 'AHD7200', '1'),
(8, 'AHD IR BULLET 2MP-7209', 'AHD-IR-BULLET-2MP-7209', '<ul>\r\n	<li>AHD IR Bullet&nbsp;Kamera</li>\r\n	<li>Aptina&nbsp;Cmos&nbsp;AR0141</li>\r\n	<li>1920H x 1080V 2&nbsp;megapiksel</li>\r\n	<li>2D DNR , 3D DNR</li>\r\n	<li>OSD Men&uuml;l&uuml;</li>\r\n	<li>4mm Sabit Lens</li>\r\n	<li>4 Adet Array Led</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/f610eahd-ir-bullet-2mp-7209-B65347.png', '100', '3', '', 'AHD7209', '1'),
(9, 'AHD IR BULLET 2MP-7202', 'AHD-IR-BULLET-2MP-7202', '<ul style="list-style-type:none">\r\n	<li>AHD IR Bullet&nbsp;Kamera</li>\r\n	<li>Aptina&nbsp;Cmos&nbsp;AR0141</li>\r\n	<li>1920H x 1080V 2&nbsp;megapiksel</li>\r\n	<li>2D DNR , 3D DNR</li>\r\n	<li>OSD Men&uuml;l&uuml;</li>\r\n	<li>2.8mm-12mm Varifocal Lens</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/75344ahd-ir-bullet-2mp-7202-B25633.png', '100', '3', '', 'AHD7202', '1'),
(10, 'AHD IR BULLET 2MP-7204', 'AHD-IR-BULLET-2MP-7204', '<ul style="list-style-type:none">\r\n	<li>AHD IR Bullet&nbsp;Kamera</li>\r\n	<li>Aptina&nbsp;Cmos&nbsp;AR0141</li>\r\n	<li>1920H x 1080V 2&nbsp;megapiksel</li>\r\n	<li>2D DNR , 3D DNR</li>\r\n	<li>3.6mm Sabit Lens</li>\r\n	<li>OSD Men&uuml;l&uuml;</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/870a5ahd-ir-bullet-2mp-7204-B76413.png', '100', '3', '', 'AHD7204', '1'),
(11, 'AHD IR BULLET 1MP-7102', 'AHD-IR-BULLET-1MP-7102', '<ul style="list-style-type:none">\r\n	<li>AHD IR Bullet&nbsp;Kamera</li>\r\n	<li>Aptina&nbsp;Cmos&nbsp;AR0141</li>\r\n	<li>1280H x&nbsp;800V 1 megapiksel</li>\r\n	<li>2D DNR , 3D DNR</li>\r\n	<li>OSD Men&uuml;l&uuml;</li>\r\n	<li>2.8mm-12mm Varifocal Lens</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/53172ahd-ir-bullet-1mp-7102-B93929.png', '100', '3', '', 'AHD7102', '1'),
(12, 'AHD IR BULLET 1MP-7103', 'AHD-IR-BULLET-1MP-7103', '<ul style="list-style-type:none">\r\n	<li>AHD IR Bullet&nbsp;Kamera</li>\r\n	<li>Aptina&nbsp;Cmos&nbsp;AR0141</li>\r\n	<li>1280H x&nbsp;800V 1 megapiksel</li>\r\n	<li>2D DNR , 3D DNR</li>\r\n	<li>3.6mm Sabit Lens</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/bcc5bahd-ir-bullet-1mp-7103-B19417.png', '100', '3', '', 'AHD7103', '1'),
(13, 'AHD IR BULLET 1MP-7104', 'AHD-IR-BULLET-1MP-7104', '<ul style="list-style-type:none">\r\n	<li>AHD IR Bullet&nbsp;Kamera</li>\r\n	<li>Aptina&nbsp;Cmos&nbsp;AR0141</li>\r\n	<li>1280H x&nbsp;800V 1 megapiksel</li>\r\n	<li>2D DNR , 3D DNR</li>\r\n	<li>3.6mm Sabit Lens</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/67ebdahd-ir-bullet-1mp-7104-B70384.png', '100', '3', '', 'AHD7104', '1'),
(14, 'AHD IR BULLET 1MP-7106', 'AHD-IR-BULLET-1MP-7106', '<ul style="list-style-type:none">\r\n	<li>AHD IR Bullet&nbsp;Kamera</li>\r\n	<li>Aptina&nbsp;Cmos&nbsp;AR0141</li>\r\n	<li>1280H x 800V 1&nbsp;megapiksel</li>\r\n	<li>2D DNR , 3D DNR</li>\r\n	<li>3.6mm Sabit Lens</li>\r\n	<li>3 Adet Array Led&nbsp;</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/93bc1ahd-ir-bullet-1mp-7106-B34995.png', '100', '3', '', 'AHD7106', '1'),
(15, 'AHD BOX KAMERA 2MP-6200', 'AHD-BOX-KAMERA-2MP-6200', '<ul style="list-style-type:none">\r\n	<li>AHD Box Kamera</li>\r\n	<li>Aptina&nbsp;Cmos&nbsp;AR0141</li>\r\n	<li>1920H x 1080V 2&nbsp;megapiksel</li>\r\n	<li>2D DNR , 3D DNR</li>\r\n	<li>OSD Men&uuml;l&uuml;</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/371cdahd-box-kamera-2mp-6200-B47647.jpg', '100', '4', '', 'AHD6200', '1'),
(16, 'AHD BOX KAMERA 1MP-6100', 'AHD-BOX-KAMERA-1MP-6100', '<ul style="list-style-type:none">\r\n	<li>AHD Box Kamera</li>\r\n	<li>Aptina&nbsp;Cmos&nbsp;AR0141</li>\r\n	<li>1280H x&nbsp;800V 1 megapiksel</li>\r\n	<li>2D DNR , 3D DNR</li>\r\n	<li>OSD Men&uuml;l&uuml;</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/41523ahd-box-kamera-1mp-6100-B14765.jpg', '100', '4', '', 'AHD6100', '1'),
(17, 'AHD PTZ KAMERA 2MP-9200', 'AHD-PTZ-KAMERA-2MP-9200', '<ul style="list-style-type:none">\r\n	<li>2 MP HD-AHD</li>\r\n	<li>100M IR Mesafesi</li>\r\n	<li>256 preset noktası</li>\r\n	<li>Pan Aralığı: 360&deg; s&uuml;rekli d&ouml;ng&uuml;</li>\r\n	<li>Tilt aralığı: &nbsp;-10&deg;~90&deg; &nbsp;otomatik ters d&ouml;nme</li>\r\n	<li>Manuel Hız: Dikey: 0.01&deg;/sn - 350&deg;/sn, Yatay: 0.01&deg;/sn - 120&deg;/sn</li>\r\n	<li>Preset Hız: Pan: 350&deg;/s, Tilt: 120&deg;/s</li>\r\n	<li>IP 66 t&uuml;m &ccedil;evre koruma</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/12455ahd-ptz-kamera-2mp-9200-B28770.png', '100', '5', '', 'AHD9200', '1'),
(18, 'AHD PTZ KAMERA 1.3MP-9101', 'AHD-PTZ-KAMERA-1-3MP-9101', '<ul style="list-style-type:none">\r\n	<li>1.3 MP HD-AHD</li>\r\n	<li>100M IR Mesafesi</li>\r\n	<li>256 preset noktası</li>\r\n	<li>Pan Aralığı: 360&deg; s&uuml;rekli d&ouml;ng&uuml;</li>\r\n	<li>Tilt aralığı: &nbsp;-10&deg;~90&deg; &nbsp;otomatik ters d&ouml;nme</li>\r\n	<li>Manuel Hız: Dikey: 0.01&deg;/sn - 350&deg;/sn, Yatay: 0.01&deg;/sn - 120&deg;/sn</li>\r\n	<li>Preset Hız: Pan: 350&deg;/s, Tilt: 120&deg;/s</li>\r\n	<li>IP 66 t&uuml;m &ccedil;evre koruma</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/073c4ahd-ptz-kamera-13mp-9101-B26009.png', '100', '5', '', 'AHD9101', '1'),
(19, 'DVR 6204-4HD', 'DVR-6204-4HD', '<ul style="list-style-type:none">\r\n	<li>HD DVR &uuml;&ccedil;&uuml; bir arada: DVR/HVR/NVR</li>\r\n	<li>4 Kanal BNC, 4 Kanal Ses</li>\r\n	<li>1 Adet HDMI, 1 Adet VGA&nbsp;&ccedil;ıkışı</li>\r\n	<li>4 Kanal Playback</li>\r\n	<li>Akıllı telefon desteği</li>\r\n	<li>2 Adet 6 TB HDD (12TRB) desteği</li>\r\n	<li>P2P kare kod barkod okuma desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/58a98dvr-6204-4hd-B1550.png', '100', '7', '', 'DVR6204', '6'),
(21, 'DVR 6104-4HD', 'DVR-6104-4HD', '<ul style="list-style-type:none">\r\n	<li>HD DVR &uuml;&ccedil;&uuml; bir arada: DVR/HVR/NVR</li>\r\n	<li>4 Kanal BNC, 4 Kanal Ses</li>\r\n	<li>1 Adet HDMI, 1 Adet VGA&nbsp;&ccedil;ıkışı</li>\r\n	<li>4 Kanal Playback</li>\r\n	<li>Akıllı telefon desteği</li>\r\n	<li>1 Adet 6 TB HDD desteği</li>\r\n	<li>P2P kare kod barkod okuma desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/7c84cdvr-6104-4hd-B95395.png', '100', '7', '', 'DVR6104', '6'),
(22, 'DVR 6208-8HD', 'DVR-6208-8HD', '<h1>DVR 6208-8HD</h1>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/71864dvr-6208-8hd-B87793.png', '100', '8', '', 'DVR6208', '6'),
(23, 'DVR 5108-4HD', 'DVR-5108-4HD', '<ul style="list-style-type:none">\r\n	<li>HD DVR &uuml;&ccedil;&uuml; bir arada: DVR/HVR/NVR</li>\r\n	<li>8 Kanal BNC, 4&nbsp;Kanal Ses</li>\r\n	<li>1 Adet HDMI , 1 Adet VGA&nbsp;&ccedil;ıkışı</li>\r\n	<li>8 Kanal Playback</li>\r\n	<li>Akıllı telefon desteği</li>\r\n	<li>1 Adet 6 TB HDD desteği</li>\r\n	<li>P2P kare kod barkod okuma desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/fdb06dvr-5108-4hd-B18241.png', '100', '8', '', 'DVR5108', '6'),
(24, 'DVR 6216-6HD', 'DVR-6216-6HD', '<ul style="list-style-type:none">\r\n	<li>HD DVR &uuml;&ccedil;&uuml; bir arada: DVR/HVR/NVR</li>\r\n	<li>16 Kanal BNC, 6&nbsp;Kanal Ses</li>\r\n	<li>1 Adet HDMI , 1 Adet VGA&nbsp;&ccedil;ıkışı</li>\r\n	<li>8 Kanal Playback</li>\r\n	<li>Akıllı telefon desteği</li>\r\n	<li>2 Adet 6 TB HDD (12TRB) desteği</li>\r\n	<li>P2P kare kod barkod okuma desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/5777fdvr-6216-6hd-B54508.png', '100', '9', '', 'DVR6216', '6'),
(25, 'DVR 6116-2HD', 'DVR-6116-2HD', '<ul style="list-style-type:none">\r\n	<li>HD DVR &uuml;&ccedil;&uuml; bir arada: DVR/HVR/NVR</li>\r\n	<li>16 Kanal BNC, 2&nbsp;Kanal Ses</li>\r\n	<li>1 Adet HDMI , 1 Adet VGA&nbsp;&ccedil;ıkışı</li>\r\n	<li>8 Kanal Playback</li>\r\n	<li>Akıllı telefon desteği</li>\r\n	<li>1 Adet 6 TB HDD desteği</li>\r\n	<li>P2P kare kod barkod okuma desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/6fc5bdvr-6116-2hd-B35450.png', '100', '9', '', 'DVR6116', '6'),
(26, 'DVR 6432-16HD', 'DVR-6432-16HD', '<ul style="list-style-type:none">\r\n	<li>HD DVR &uuml;&ccedil;&uuml; bir arada: DVR/HVR/NVR</li>\r\n	<li>32 Kanal BNC, 16&nbsp;Kanal Ses</li>\r\n	<li>1 Adet HDMI , 1 Adet VGA&nbsp;&ccedil;ıkışı</li>\r\n	<li>8 Kanal Playback</li>\r\n	<li>Akıllı telefon desteği</li>\r\n	<li>4 Adet 6 TB HDD (24TRB) desteği</li>\r\n	<li>P2P kare kod barkod okuma desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/796d4dvr-6432-16hd-B38935.png', '100', '11', '', 'DVR6432', '6'),
(27, 'DVR 6232-16HD', 'DVR-6232-16HD', '<ul style="list-style-type:none">\r\n	<li>HD DVR &uuml;&ccedil;&uuml; bir arada: DVR/HVR/NVR</li>\r\n	<li>32 Kanal BNC, 16&nbsp;Kanal Ses</li>\r\n	<li>1 Adet HDMI , 1 Adet VGA&nbsp;&ccedil;ıkışı</li>\r\n	<li>8 Kanal Playback</li>\r\n	<li>Akıllı telefon desteği</li>\r\n	<li>2 Adet 6 TB HDD (12TRB) desteği</li>\r\n	<li>P2P kare kod barkod okuma desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/aafc7dvr-6232-16hd-B74632.png', '100', '11', '', 'DVR6232', '6'),
(28, 'IP DOME KAMERA 2MP-C3612ER3', 'IP-DOME-KAMERA-2MP-C3612ER3', '<ul style="list-style-type:none">\r\n	<li>3.6 mm Sabit lens</li>\r\n	<li>1/2.8&#39;&#39; 2&nbsp;Megapiksel (1920X1080)&nbsp;Cmos Sens&ouml;r, 30 fps</li>\r\n	<li>​​ROI&nbsp;(Region of Interest), Defog, 3D DNR,&nbsp;Onvif,&nbsp;9:16 Koridor Modu</li>\r\n	<li>WDR(Geniş&nbsp;Dinamik Aralığı)</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/ac05dip-dome-kamera-2mp-c3612e-B17834.png', '100', '13', '', 'C3612ER3', '12'),
(29, 'IP DOME KAMERA 2MP-C322EIR', 'IP-DOME-KAMERA-2MP-C322EIR', '<ul style="list-style-type:none">\r\n	<li>3.6 mm Sabit lens, 30 adet IR Led&nbsp;</li>\r\n	<li>Ses Giriş &Ccedil;ıkışı, ses analizi , Isı Algılama</li>\r\n	<li>1/2.8&#39;&#39; 2&nbsp;Megapiksel (1920X1080)&nbsp;Cmos Sens&ouml;r, 30 fps</li>\r\n	<li>​​ROI&nbsp;(Region of Interest), Defog, 3D DNR,&nbsp;Onvif,&nbsp;9:16 Koridor Modu</li>\r\n	<li>WDR(Geniş&nbsp;Dinamik Aralığı)</li>\r\n	<li>&Ccedil;ift direkt İSCSI veri blok depolama,&nbsp;NAA, UNP</li>\r\n	<li>IP66 standartı desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/f3f02ip-dome-kamera-2mp-c322ei-B89993.png', '100', '13', '', 'C322EIR', '12'),
(30, 'IP DOME KAMERA 2MP-C3232ER', 'IP-DOME-KAMERA-2MP-C3232ER', '<ul style="list-style-type:none">\r\n	<li>1/2.8&#39;&#39; 2 Megapiksel (1920X1080) SONY G&ouml;r&uuml;nt&uuml; sens&ouml;r&uuml;, 30 fps</li>\r\n	<li>2.8 mm-12 mm arası Varifokal lens, 1 Array Led</li>\r\n	<li>ICR ( IR-CUT) Filtre</li>\r\n	<li>Ses girisi destegi</li>\r\n	<li>120dB True WDR , Smart IR Teknolojisi</li>\r\n	<li>IP66,IK10 standartı</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/f3c7fip-dome-kamera-2mp-c3232e-B58289.png', '100', '13', '', 'C3232ER', '12'),
(31, 'IP DOME KAMERA 4MP-C3234SR', 'IP-DOME-KAMERA-4MP-C3234SR', '<ul style="list-style-type:none">\r\n	<li>1/3&#39;&#39; 4 Megapiksel (2592X1520) Cmos Sens&ouml;r</li>\r\n	<li>2592x1520 @ 20fps, 2048x1536 @ 30fps</li>\r\n	<li>2.8mm-12mm Varifokal lens</li>\r\n	<li>Video Analiz</li>\r\n	<li>H.265/H264/MJPEG sıkıstırma &ouml;zelligi</li>\r\n	<li>120dB True WDR , Smart IR Teknolojisi</li>\r\n	<li>IP66, IK10 standartı destegi</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/71e51ip-dome-kamera-4mp-c3234s-B82405.png', '100', '13', '', 'C3234SR', '12'),
(32, 'IP DOME KAMERA 1.3MP-HDW3100', 'IP-DOME-KAMERA-1-3MP-HDW3100', '<ul style="list-style-type:none">\r\n	<li>1/3&#39;&#39; 1.3&nbsp;Megapiksel (1280X960)&nbsp;Cmos Sens&ouml;r</li>\r\n	<li>15fps@1.3M(1280&times;960) &amp; 25/30fps@720P(1280&times;720)</li>\r\n	<li>2.8&nbsp;mm - 12&nbsp;mm arası Varifokal&nbsp;lens</li>\r\n	<li>DWDR, G&uuml;nd&uuml;z/Gece(ICR), 2D DNR, Otomatik iris, AWB, AGC, BLC</li>\r\n	<li>IP66, IK10 standartı , 64 Gb kadar SD kart desteği,&nbsp;Onvif Desteği</li>\r\n	<li>Alarm giriş / &ccedil;ıkışları , 1&nbsp;Giriş /&nbsp;1 &Ccedil;ıkış, PoE Enerji Desteği</li>\r\n	<li>&Ccedil;oklu ağ izleme: Web g&ouml;r&uuml;nt&uuml;leyici, CMS(DSS/PSS) &amp; NMSS</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/e9552ip-dome-kamera-13mp-hdw31-B3084.jpg', '100', '13', '', 'HDW3100', '12'),
(33, 'IP IR BULLET KAMERA 1.3MP-C2121SR3', 'IP-IR-BULLET-KAMERA-1-3MP-C2121SR3', '<ul style="list-style-type:none">\r\n	<li>1/2.8&#39;&#39; 1.3 Megapiksel (1280X960) Cmos Sens&ouml;r</li>\r\n	<li>3.6 mm Sabit lens</li>\r\n	<li>H264/MJPEG sıkıştırma &ouml;zelliği</li>\r\n	<li>WDR , Smart IR Teknolojisi</li>\r\n	<li>IP66 standartı desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/8a72bip-ir-bullet-kamera-13mp--B96714.png', '100', '14', '', 'C2121SR3', '12'),
(34, 'IP IR BULLET KAMERA 1.3MP-C2321EBR', 'IP-IR-BULLET-KAMERA-1-3MP-C2321EBR', '<ul style="list-style-type:none">\r\n	<li>1/3&#39;&#39; 1.3 Megapiksel (1280X960) Cmos Sens&ouml;r, 30 fps</li>\r\n	<li>2.8 mm-12 mm arası Varifokal lens</li>\r\n	<li>64 Gb kadar micro SD kart desteği</li>\r\n	<li>ROI (Region of Interest), Defog, 3D DNR, Onvif, 9:16 Koridor Modu</li>\r\n	<li>IP66, standartı desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/1b79fip-ir-bullet-kamera-13mp--B34226.png', '100', '14', '', 'C2321EBR', '12'),
(35, 'IP IR BULLET KAMERA 2MP-C2122SR3', 'IP-IR-BULLET-KAMERA-2MP-C2122SR3', '<ul style="list-style-type:none">\r\n	<li>1/2.8&#39;&#39; 2 Megapiksel (1920X1080) Cmos Sens&ouml;r</li>\r\n	<li>3.6 mm Sabit lens</li>\r\n	<li>H264/MJPEG sıkıştırma &ouml;zelliği</li>\r\n	<li>WDR , Smart IR Teknolojisi</li>\r\n	<li>IP66 standartı desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/faf18ip-ir-bullet-kamera-2mp-c-B23366.png', '100', '14', '', 'C2122SR3', '12'),
(36, 'IP IR BULLET KAMERA 4MP-C2124SR3', 'IP-IR-BULLET-KAMERA-4MP-C2124SR3', '<ul style="list-style-type:none">\r\n	<li>1/3&#39;&#39; 4&nbsp;Megapiksel (2592X1520) Cmos Sens&ouml;r</li>\r\n	<li>Video Analiz</li>\r\n	<li>3.6 mm Sabit lens</li>\r\n	<li>H.265 /&nbsp;H.264 / MJPEG sıkıştırma &ouml;zelliği</li>\r\n	<li>120dB True&nbsp;WDR , Smart IR Teknolojisi</li>\r\n	<li>IP66 standartı desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/eea12ip-ir-bullet-kamera-4mp-c-B60023.png', '100', '14', '', 'C2124SR3', '12'),
(37, 'IP BOX KAMERA 4MP-CHF5421', 'IP-BOX-KAMERA-4MP-CHF5421', '<ul style="list-style-type:none">\r\n	<li>1/3&rdquo; 4 Megapiksel Progresif Tarama CMOS</li>\r\n	<li>H.264 / MJPEG &ccedil;ift codec desteği</li>\r\n	<li>120dB&rsquo;e kadar Ultra WDR &ldquo;Geniş Dinamik Aralık&rdquo; fonksiyonu</li>\r\n	<li>Ultra 3D DNR &ldquo;Dijital Parazit Azaltma&rdquo;</li>\r\n	<li>EIS &ldquo;Elektronik G&ouml;r&uuml;nt&uuml; Sabitleyici&rdquo;</li>\r\n	<li>Akıllı IR Teknolojisi, Y&uuml;z Algılama</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/07123ip-box-kamera-4mp-chf5421-B23281.png', '100', '15', '', 'CHF5421', '12'),
(38, 'IP BOX KAMERA 2MP-C562E', 'IP-BOX-KAMERA-2MP-C562E', '<ul style="list-style-type:none">\r\n	<li>1/1.9&#39;&#39; 2 Megapiksel (1920X1080)Cmos Sens&ouml;r&nbsp;</li>\r\n	<li>Auto Back Focus (ABF) ,&nbsp;60 fps</li>\r\n	<li>HD Starlight G&ouml;r&uuml;nt&uuml;leme, ICR ( IR-CUT) Filtre</li>\r\n	<li>SFP Mod&uuml;l(Fiber Girişi)</li>\r\n	<li>64 Gb kadar micro SD kart destegi</li>\r\n	<li>WDR(Genis Dinamik Aralıgı) 120dB kadar</li>\r\n	<li>&Ccedil;ift direkt ISCSI veri blok depolama, NAA, UNP</li>\r\n	<li>H.265 / H264 /MJPEG</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/20e23ip-box-kamera-2mp-c562e-B20968.png', '100', '15', '', 'C562E', '12'),
(39, 'IP BOX KAMERA 1.3MP-C541E', 'IP-BOX-KAMERA-1-3MP-C541E', '<ul style="list-style-type:none">\r\n	<li>1/3&#39;&#39; 1.3&nbsp;Megapiksel (1280X960)Cmos Sens&ouml;r, 30 fps</li>\r\n	<li>ICR ( IR-CUT) Filtre</li>\r\n	<li>Ses Giriş &Ccedil;ıkışı, ses analizi&nbsp;</li>\r\n	<li>​​ROI&nbsp;(Region of Interest), Defog, 3D DNR,&nbsp;Onvif,&nbsp;9:16 Koridor Modu</li>\r\n	<li>&Ccedil;ift direkt İSCSI veri blok depolama,&nbsp;NAA, UNP</li>\r\n	<li>64 Gb kadar SD kart desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/2dff2ip-box-kamera-13mp-c541e-B5302.png', '100', '15', '', 'C541E', '12'),
(40, 'HOME SERİSİ 1MP-N1', 'HOME-SERISI-1MP-N1', '<ul style="list-style-type:none">\r\n	<li>1/3&rdquo; 1.3Megapiksel 960P Kablosuz IP kamera</li>\r\n	<li>2.8mm sabit lens</li>\r\n	<li>8GB dahili hafıza</li>\r\n	<li>Bulut (Cloud) Sistemi</li>\r\n	<li>T&uuml;rk&ccedil;e sesli uyarı &ouml;zelliği</li>\r\n	<li>Radar search ile IP arama</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/f70d8home-serisi-1mp-n1-B828.png', '100', '16', '', 'HMSN0058', '12'),
(41, 'HOME SERİSİ 1.3MP-N2', 'HOME-SERISI-1-3MP-N2', '<ul>\r\n	<li>1/3&rdquo; 1.3Megapiksel 960P Kablosuz IP kamera</li>\r\n	<li>2.8mm sabit lens</li>\r\n	<li>8GB dahili hafıza</li>\r\n	<li>Bulut (Cloud) Sistemi</li>\r\n	<li>T&uuml;rk&ccedil;e sesli uyarı &ouml;zelliği</li>\r\n	<li>Radar search ile IP arama</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/bc4a4home-serisi-13mp-n2-B26092.png', '100', '16', '', 'HMSN0059', '12'),
(42, 'FISH EYE KAMERA C8681F', 'FISH-EYE-KAMERA-C8681F', '<ul style="list-style-type:none">\r\n	<li>1/1.7&rdquo; 8Megapiksel progressive scan CMOS</li>\r\n	<li>Maks. 20fps@8.0M(3840x2160)</li>\r\n	<li>H.265/H.264/MJPEG sıkıstırma formatı</li>\r\n	<li>1/1 Ses Girisi/&Ccedil;ıkısı (Dahili Mikrofon)</li>\r\n	<li>DWDR, G&uuml;nd&uuml;z/Gece(ICR), 3DNR,ROI,AWB, AGC, BLC</li>\r\n	<li>Micro SD hafıza 128 GB kadar, IP66,IK10, PoE</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/49433fish-eye-kamera-c8681f-B54417.jpg', '100', '17', '', 'C8681F', '12'),
(43, 'ÜCRETLİ OTOPARK TANIMA', 'UCRETLI-OTOPARK-TANIMA', '<ul style="list-style-type:none">\r\n	<li>Plaka tanıma yazılımı ( yerli,abancı ve askeri plaka )</li>\r\n	<li>Otopark &uuml;cret hesaplama yazılımı</li>\r\n	<li>MegaPixel IP (HD &Ccedil;&ouml;z&uuml;n&uuml;rl&uuml;k) Plaka Tanıma Kamerası</li>\r\n	<li>MegaPixel Day/Night Auto Iris 5.0-50mm Lens&nbsp;(PTS i&ccedil;in &ouml;zel lens)</li>\r\n	<li>6 Power LEDLİ IR Projekt&ouml;r</li>\r\n	<li>12 Volt&nbsp;Kamera adapt&ouml;r&uuml;</li>\r\n	<li>Isıtıcılı,Fanlı ve&nbsp;Termostatlı 360 Derece Dış muhafaza + Ayak</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/cff50ucretli-otopark-tanima-B77304.jpg', '100', '18', '', 'B77304X', '12'),
(44, 'OTOPARK PLAKA TANIMA', 'OTOPARK-PLAKA-TANIMA', '<ul style="list-style-type:none">\r\n	<li>Plaka tanıma yazılımı ( yerli,abancı ve askeri plaka )</li>\r\n	<li>MegaPixel IP (HD &Ccedil;&ouml;z&uuml;n&uuml;rl&uuml;k) Plaka Tanıma Kamerası</li>\r\n	<li>MegaPixel Day/Night Auto Iris 5.0-50mm Lens&nbsp;(PTS i&ccedil;in &ouml;zel lens)</li>\r\n	<li>6 Power LEDLİ IR Projekt&ouml;r</li>\r\n	<li>12 Volt&nbsp;Kamera adapt&ouml;r&uuml;</li>\r\n	<li>Isıtıcılı,Fanlı ve&nbsp;Termostatlı 360 Derece Dış muhafaza + Ayak</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/4b726otopark-plaka-tanima-B5254.png', '100', '18', '', 'B5254X', '12'),
(45, 'OTOYOL PLAKA TANIMA', 'OTOYOL-PLAKA-TANIMA', '<ul style="list-style-type:none">\r\n	<li>Plaka tanıma yazılımı ( yerli,abancı ve askeri plaka )</li>\r\n	<li>MegaPixel IP (HD &Ccedil;&ouml;z&uuml;n&uuml;rl&uuml;k) Plaka Tanıma Kamerası</li>\r\n	<li>MegaPixel Day/Night Auto Iris 5.0-50mm Lens&nbsp;(PTS i&ccedil;in &ouml;zel lens)</li>\r\n	<li>10 Power LEDLİ&nbsp;IR Projekt&ouml;r</li>\r\n	<li>12 Volt&nbsp;Kamera adapt&ouml;r&uuml;</li>\r\n	<li>Isıtıcılı,Fanlı ve&nbsp;Termostatlı 360 Derece Dış muhafaza + Ayak</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/83de0otoyol-plaka-tanima-B60924.jpg', '100', '18', '', 'B60924S', '12'),
(46, 'IP IR BULLET KAMERA 1.3MP-HFW1120', 'IP-IR-BULLET-KAMERA-1-3MP-HFW1120', '<ul style="list-style-type:none">\r\n	<li>1/3&#39;&#39; 1.3 Megapiksel (1280X960)&nbsp;Cmos Sens&ouml;r, 25 fps</li>\r\n	<li>3.6mm sabit lens (6mm,8mm opsiyonel)</li>\r\n	<li>DWDR, G&uuml;nd&uuml;z/Gece(ICR), 2D DNR, Otomatik iris, AWB, AGC, BLC</li>\r\n	<li>IP66 standartı ,&nbsp;Onvif Desteği</li>\r\n	<li>&Ccedil;oklu ağ izleme: Web g&ouml;r&uuml;nt&uuml;leyici, CMS(DSS/PSS) &amp; NMSS</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/23992ip-ir-bullet-kamera-13mp--B44501.jpg', '100', '19', '', 'HFW1120', '12'),
(47, 'IP DOME KAMERA 1.3MP-HDW1120', 'IP-DOME-KAMERA-1-3MP-HDW1120', '<ul style="list-style-type:none">\r\n	<li>1/3&#39;&#39; 1.3 Megapiksel (1280X960)&nbsp;Cmos Sens&ouml;r, 25 fps</li>\r\n	<li>3.6mm sabit lens (6mm,8mm opsiyonel)</li>\r\n	<li>DWDR, G&uuml;nd&uuml;z/Gece(ICR), 2D DNR, Otomatik iris, AWB, AGC, BLC</li>\r\n	<li>IP66 standartı ,&nbsp;Onvif Desteği</li>\r\n	<li>&Ccedil;oklu ağ izleme: Web g&ouml;r&uuml;nt&uuml;leyici, CMS(DSS/PSS) &amp; NMSS</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/181daip-dome-kamera-13mp-hdw11-B94608.png', '100', '19', '', 'HDW1120', '12'),
(48, 'PTZ IP KAMERALAR 2MP-6A230', 'PTZ-IP-KAMERALAR-2MP-6A230', '<ul style="list-style-type:none">\r\n	<li>30X (4.3 mm-129&nbsp;mm) Optik Zoom IR Led ile 150 mt aydınlatma</li>\r\n	<li>1/3&#39;&#39; 2&nbsp;Megapiksel&nbsp;(1920X1080)&nbsp;Cmos Sens&ouml;r, 30 fps​</li>\r\n	<li>Defog, DWDR, G&uuml;nd&uuml;z/Gece(ICR), Ultra DNR, EIS, Otomatik iris,&nbsp;Otomatik odak</li>\r\n	<li>Auto - Tracking ve IVS</li>\r\n	<li>Neutron SD ile 3D Akıllı konumlandırma</li>\r\n	<li>IP66&nbsp;standartı , 64 Gb kadar SD kart desteği</li>\r\n	<li>&Ccedil;oklu ag izleme: Web g&ouml;r&uuml;nt&uuml;leyici, CMS(DSS/PSS) &amp; NMSS</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/c8b71ptz-ip-kameralar-2mp-6a23-B29068.jpg', '100', '20', '', '6A230', '12'),
(49, 'PTZ IP KAMERALAR 1.3MP-65C80C', 'PTZ-IP-KAMERALAR-1-3MP-65C80C', '<ul style="list-style-type:none">\r\n	<li>18X (4.7&nbsp;mm-84.6 mm) Optik Zoom PTZ Kamera</li>\r\n	<li>1/3&#39;&#39; 1.3&nbsp;Megapiksel&nbsp;(1920X1080)&nbsp;Cmos Sens&ouml;r, 30 fps​</li>\r\n	<li>25/30fps@1.3M(1280&times;960) &amp; 720P(1280x960)&nbsp;</li>\r\n	<li>Defog, DWDR, G&uuml;nd&uuml;z/Gece(ICR), Ultra DNR, EIS, Otomatik iris,&nbsp;Otomatik odak</li>\r\n	<li>Neutron SD ile 3D Akıllı konumlandırma</li>\r\n	<li>64 Gb kadar SD kart desteği</li>\r\n	<li>&Ccedil;oklu ag izleme: Web g&ouml;r&uuml;nt&uuml;leyici, CMS(DSS/PSS) &amp; NMSS</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/baa35ptz-ip-kameralar-13mp-65c-B98778.png', '100', '20', '', '65C80C', '12'),
(50, 'PTZ IP KAMERALAR 2MP-65C82A', 'PTZ-IP-KAMERALAR-2MP-65C82A', '<ul style="list-style-type:none">\r\n	<li>20X (4.7&nbsp;mm-94&nbsp;mm) Optik, 16X dijital&nbsp;Zoom PTZ kamera</li>\r\n	<li>1/3&#39;&#39; 2&nbsp;Megapiksel&nbsp;(1920X1080)&nbsp;Cmos Sens&ouml;r, 25&nbsp;fps​​</li>\r\n	<li>DWDR, G&uuml;nd&uuml;z/Gece (ICR), DNR (2D&amp;3D), Otomatik iris, Otomatik odak, AWB,AGC, BLC</li>\r\n	<li>IP66&nbsp;standartı , 64 Gb kadar SD kart desteği</li>\r\n	<li>255 presets, 5 Otomatik tarama, 8 tur, 5 pattern</li>\r\n	<li>Neutron SD ile 3D Akıllı konumlandırma</li>\r\n	<li>Alarm giriş / &ccedil;ıkışları 7&nbsp;giriş / 2 &ccedil;ıkış&nbsp;,&nbsp;Onvif desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/35688ptz-ip-kameralar-2mp-65c8-B79917.png', '100', '20', '', '65C82A', '12'),
(51, 'PTZ IP KAMERALAR 2MP-65C82C', 'PTZ-IP-KAMERALAR-2MP-65C82C', '<ul style="list-style-type:none">\r\n	<li>30X (4.3&nbsp;mm-129&nbsp;mm) Optik, 16X dijital&nbsp;Zoom PTZ kamera</li>\r\n	<li>1/3&#39;&#39; 2&nbsp;Megapiksel&nbsp;(1920X1080)&nbsp;Cmos Sens&ouml;r, 25&nbsp;fps​​</li>\r\n	<li>DWDR, G&uuml;nd&uuml;z/Gece (ICR), DNR (2D&amp;3D), Otomatik iris, Otomatik odak, AWB,AGC, BLC</li>\r\n	<li>IP66&nbsp;standartı , 64 Gb kadar SD kart desteği</li>\r\n	<li>255 presets, 5 Otomatik tarama, 8 tur, 5 pattern</li>\r\n	<li>Neutron SD ile 3D Akıllı konumlandırma</li>\r\n	<li>Alarm giriş / &ccedil;ıkışları 7&nbsp;giriş / 2 &ccedil;ıkış&nbsp;,&nbsp;Onvif desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/11937ptz-ip-kameralar-2mp-65c8-B27345.png', '100', '20', '', '65C82C', '12'),
(52, 'PTZ IP KAMERALAR 2MP-1182C', 'PTZ-IP-KAMERALAR-2MP-1182C', '<ul style="list-style-type:none">\r\n	<li>30X (4.3&nbsp;mm-129&nbsp;mm) Optik Zoom PTZ Kamera, IR Led aydınlatma mesafesi 150 mt</li>\r\n	<li>1/3&#39;&#39; 2&nbsp;Megapiksel&nbsp;(1920X1080)&nbsp;Cmos Sens&ouml;r, 25&nbsp;fps​</li>\r\n	<li>DWDR, G&uuml;nd&uuml;z/Gece(ICR), Ultra DNR, EIS, Otomatik iris,&nbsp;Otomatik odak</li>\r\n	<li>Neutron SD ile 3D Akıllı konumlandırma</li>\r\n	<li>IP67&nbsp;standartı , 64 Gb kadar SD kart desteği</li>\r\n	<li>&Ccedil;oklu ag izleme: Web g&ouml;r&uuml;nt&uuml;leyici, CMS(DSS/PSS) &amp; NMSS</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/00a54ptz-ip-kameralar-2mp-1182-B40643.jpg', '100', '20', '', '1182C', '12'),
(53, 'NVR-20104LP', 'NVR-20104LP', '<ul style="list-style-type:none">\r\n	<li>4 Kanala kadar IP kamera desteği, 32&nbsp;mbps bant genişliği</li>\r\n	<li>Koridor modu &ouml;zelligi</li>\r\n	<li>1 adet (6&nbsp;TRB Kadar)&nbsp;HDD Desteği</li>\r\n	<li>1 adet HDMI, 1 Adet VGA &ccedil;ıkışı</li>\r\n	<li>1 Adet RJ45 &ccedil;ıkışı, 1&nbsp;adet USB 2.0 /&nbsp;1 adet USB 3.0 &Ccedil;ıkışı</li>\r\n	<li>4 kanal PoE Desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/f8e51nvr-20104lp-B90354.png', '100', '22', '', '20104LP', '21'),
(54, 'NVR-20104EP', 'NVR-20104EP', '<ul style="list-style-type:none">\r\n	<li>4 Kanala kadar IP kamera desteği, 48 mbps bant genişliği</li>\r\n	<li>Onvif protokol&nbsp;desteği</li>\r\n	<li>1 adet (6&nbsp;TRB Kadar)&nbsp;HDD Desteği</li>\r\n	<li>1 adet HDMI, 1 Adet VGA &ccedil;ıkışı</li>\r\n	<li>1 Adet RJ45 &ccedil;ıkışı, 1&nbsp;adet USB 2.0 /&nbsp;1 adet USB 3.0 &Ccedil;ıkışı</li>\r\n	<li>4 kanal PoE Desteği</li>\r\n	<li>Akıllı Telefon Desteği ( Apple &amp; Android )</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/4354dnvr-20104ep-B5793.png', '100', '22', '', '20104EP', '21'),
(55, 'NVR-2104', 'NVR-2104', '<ul style="list-style-type:none">\r\n	<li>4 Kanala kadar IP kamera desteği, Onvif desteği</li>\r\n	<li>1 adet (4&nbsp;TRB Kadar)&nbsp;HDD Desteği</li>\r\n	<li>1 adet HDMI, 1 Adet VGA &ccedil;ıkışı</li>\r\n	<li>1 Adet RJ45 &ccedil;ıkışı, 2&nbsp;adet USB girişi</li>\r\n	<li>4 PoE &ccedil;ıkışı(Power Over Ethernet)</li>\r\n	<li>Akıllı Telefon Desteği ( Apple &amp; Android )</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/56a9fnvr-2104-B5629.jpg', '100', '22', '', 'NVR-2104', '21'),
(56, 'NVR-20208EP', 'NVR-20208EP', '<ul style="list-style-type:none">\r\n	<li>8 Kanala kadar IP kamera desteği, 96 mbps bant genişliği</li>\r\n	<li>Onvif protokol&nbsp;desteği</li>\r\n	<li>2 adet (12&nbsp;TRB Kadar)&nbsp;HDD Desteği</li>\r\n	<li>1 adet HDMI, 1 Adet VGA &ccedil;ıkışı</li>\r\n	<li>1 Adet RJ45 &ccedil;ıkışı, 1&nbsp;adet USB 2.0 /&nbsp;1 adet USB 3.0 &Ccedil;ıkışı</li>\r\n	<li>8 kanal PoE Desteği</li>\r\n	<li>Akıllı Telefon Desteği ( Apple &amp; Android )</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/b6a46nvr-20104ep-B5793.png', '100', '23', '', '20208EP', '21'),
(57, 'NVR-20108LP', 'NVR-20108LP', '<ul style="list-style-type:none">\r\n	<li>8 Kanala kadar IP kamera desteği, 96 mbps bant genişliği</li>\r\n	<li>Koridor modu &ouml;zelligi</li>\r\n	<li>2 adet (12&nbsp;TRB Kadar)&nbsp;HDD Desteği</li>\r\n	<li>1 adet HDMI, 1 Adet VGA &ccedil;ıkışı</li>\r\n	<li>1 Adet RJ45 &ccedil;ıkışı, 1&nbsp;adet USB 2.0 /&nbsp;1 adet USB 3.0 &Ccedil;ıkışı</li>\r\n	<li>8 kanal PoE Desteği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/3547envr-20104lp-B90354.png', '100', '1', '', '20108LP', '1'),
(58, 'NVR-20216E', 'NVR-20216E', '<ul style="list-style-type:none">\r\n	<li>16 Kanala kadar IP kamera desteği, 128 mbps bant genişliği</li>\r\n	<li>Onvif protokol desteği</li>\r\n	<li>2 adet (12&nbsp;TRB Kadar)&nbsp;HDD Desteği</li>\r\n	<li>1 adet HDMI, 1 Adet VGA &ccedil;ıkışı</li>\r\n	<li>1 Adet RJ45 &ccedil;ıkışı, 1&nbsp;adet USB 2.0 /&nbsp;1 adet USB 3.0 &Ccedil;ıkışı</li>\r\n	<li>Akıllı Telefon Desteği ( Apple &amp; Android )</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/b6fcenvr-20104ep-B5793.png', '100', '24', '', '20216E', '21'),
(59, 'NVR-20216EP', 'NVR-20216EP', '<ul style="list-style-type:none">\r\n	<li>16 Kanala kadar IP kamera desteği, 128 mbps bant genişliği</li>\r\n	<li>Onvif protokol desteği</li>\r\n	<li>2 adet (12&nbsp;TRB Kadar)&nbsp;HDD Desteği</li>\r\n	<li>1 adet HDMI, 1 Adet VGA &ccedil;ıkışı</li>\r\n	<li>1 Adet RJ45 &ccedil;ıkışı, 1&nbsp;adet USB 2.0 /&nbsp;1 adet USB 3.0 &Ccedil;ıkışı</li>\r\n	<li>Akıllı Telefon Desteği ( Apple &amp; Android )</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/26ab8nvr-20104ep-B5793.png', '100', '24', '', '20216EP', '21'),
(60, 'NVR-20232E', 'NVR-20232E', '<ul style="list-style-type:none">\r\n	<li>32 Kanala kadar IP kamera desteği, 200mbps bant genişliği</li>\r\n	<li>Onvif protokol desteği</li>\r\n	<li>2 adet (12&nbsp;TRB Kadar)&nbsp;HDD Desteği</li>\r\n	<li>1 adet HDMI, 1 Adet VGA &ccedil;ıkışı</li>\r\n	<li>1 Adet RJ45 &ccedil;ıkışı, 1&nbsp;adet USB 2.0 /&nbsp;1 adet USB 3.0 &Ccedil;ıkışı</li>\r\n	<li>Akıllı Telefon Desteği ( Apple &amp; Android )</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/90bbanvr-20104ep-B5793.png', '100', '25', '', '20232E', '21'),
(61, 'NVR-20432E', 'NVR-20432E', '<ul style="list-style-type:none">\r\n	<li>32 Kanala kadar IP kamera desteği, 192&nbsp;mbps bant genişliği</li>\r\n	<li>4 adet&nbsp;SATA (24&nbsp;TRB Kadar) HDD Desteği</li>\r\n	<li>Onvif protokol desteği&nbsp;</li>\r\n	<li>Koridor modu &ouml;zelligi</li>\r\n	<li>P2P barkod okuma &ouml;zelligi</li>\r\n	<li>8 alarm girişi, 2&nbsp;alarm &ccedil;ıkışı</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/4a68bnvr-20104ep-B5793.png', '100', '25', '', '20432E', '21'),
(62, 'NVR-5432', 'NVR-5432', '<ul style="list-style-type:none">\r\n	<li>32 Kanala kadar IP kamera desteği, Onvif desteği</li>\r\n	<li>4 adet (16&nbsp;TRB Kadar)&nbsp;HDD Desteği</li>\r\n	<li>1 adet HDMI, 1 Adet VGA &ccedil;ıkışı</li>\r\n	<li>2 Adet RJ45 &ccedil;ıkışı, 3&nbsp;adet USB girişi&nbsp;/&nbsp;1 adet E-Sata &Ccedil;ıkışı</li>\r\n	<li>16 alarm girişi, 6&nbsp;alarm &ccedil;ıkışı</li>\r\n	<li>Akıllı Telefon Desteği ( Apple &amp; Android )</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/60038nvr-5432-B53251.png', '100', '25', '', 'NVR-5432', '21'),
(63, 'NTE-100', 'NTE-100', '<ul style="list-style-type:none">\r\n	<li>D&uuml;ş&uuml;k kurulum masrafı;</li>\r\n	<li>100 m&rsquo;den fazla (328 ft.) Ethernet ve PoE bağlantısı;</li>\r\n	<li>IEEE802.3af/IEEE802.3at&rsquo;ye tam uyumlu;</li>\r\n	<li>Yıldırım korumalı ve Kompakt tasarım;</li>\r\n	<li>Tak &amp; &Ccedil;alıştır. Yapılandırma gerektirmez;</li>\r\n	<li>PoE g&uuml;c&uuml; 15.4W&rsquo;a kadar desteklenmektedir;</li>\r\n	<li>Uzatılan t&uuml;m mesafe boyunca tam hıza sahip ağ.</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/99db7nte-100-B3273.png', '100', '26', '', 'NTE-100', '21'),
(64, 'NTS-1009', 'NTS-1009', '<ul style="list-style-type:none">\r\n	<li>120 Watt&nbsp;PoE Switch</li>\r\n	<li>IEEE802.3af standardına tam uyumlu</li>\r\n	<li>Her PoE portu i&ccedil;in 15.4W&rsquo;a kadar PoE g&uuml;c&uuml; desteklenmektedir</li>\r\n	<li>Otomatik algılama g&uuml;&ccedil;l&uuml; cihaz (PD)</li>\r\n	<li>&Ccedil;oğu PoE u&ccedil; cihazı i&ccedil;in emniyetli ve g&uuml;venilir g&uuml;&ccedil;</li>\r\n	<li>Tak &amp; &Ccedil;alıştır. Yapılandırma gerektirmez;</li>\r\n	<li>G&uuml;venli ve değerli</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/94eb4nts-1009-B46489.png', '100', '26', '', 'NTS-1009', '21'),
(65, 'NTS-2010', 'NTS-2010', '<ul style="list-style-type:none">\r\n	<li>120 Watt&nbsp;PoE Switch</li>\r\n	<li>Otomatik algılama g&uuml;&ccedil;l&uuml; cihaz (PD)</li>\r\n	<li>&Ccedil;oğu PoE u&ccedil; cihazı i&ccedil;in emniyetli ve g&uuml;venilir g&uuml;&ccedil;</li>\r\n	<li>Tak &amp; &Ccedil;alıştır. Yapılandırma gerektirmez;</li>\r\n	<li>IEEE802.3af/at&rsquo;ye tam uyumlu</li>\r\n	<li>10/100/1000Mbps Uplink bulunan IP g&uuml;venliği i&ccedil;in tasarlanmıştır</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/c5576nts-2010-B80184.png', '100', '26', '', 'NTS-2010', '21'),
(66, 'NTS-2018', 'NTS-2018', '<ul style="list-style-type:none">\r\n	<li>250 Watt&nbsp;PoE Switch</li>\r\n	<li>IEEE802.3af/at standardına tam uyumlu;</li>\r\n	<li>Her PoE portu i&ccedil;in 15.4W/30W&rsquo;a kadar PoE g&uuml;c&uuml; desteklenmektedir</li>\r\n	<li>Otomatik algılama g&uuml;&ccedil;l&uuml; cihaz (PD)</li>\r\n	<li>&Ccedil;oğu PoE u&ccedil; cihazı i&ccedil;in emniyetli ve g&uuml;venilir g&uuml;&ccedil;</li>\r\n	<li>10/100Mbps Destekli</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/0673ents-2018-B11153.png', '100', '26', '', 'NTS-2018', '21'),
(67, 'NTS-2026', 'NTS-2026', '<ul style="list-style-type:none">\r\n	<li>450 Watt&nbsp;PoE Switch</li>\r\n	<li>IEEE802.3af/at standardına tam uyumlu;</li>\r\n	<li>Her PoE portu i&ccedil;in 15.4W/30W&rsquo;a kadar PoE g&uuml;c&uuml; desteklenmektedir</li>\r\n	<li>Otomatik algılama g&uuml;&ccedil;l&uuml; cihaz (PD)</li>\r\n	<li>&Ccedil;oğu PoE u&ccedil; cihazı i&ccedil;in emniyetli ve g&uuml;venilir g&uuml;&ccedil;</li>\r\n	<li>Tak &amp; &Ccedil;alıştır. Yapılandırma gerektirmez</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/00929nts-2026-B39688.png', '100', '26', '', 'NTS-2026', '21'),
(68, 'NTS-2126', 'NTS-2126', '<ul style="list-style-type:none">\r\n	<li>450 Watt&nbsp;PoE Switch</li>\r\n	<li>IEEE802.3af/at standardına tam uyumlu;</li>\r\n	<li>Her PoE portu i&ccedil;in 15.4W/30W&rsquo;a kadar PoE g&uuml;c&uuml; desteklenmektedir</li>\r\n	<li>Otomatik algılama g&uuml;&ccedil;l&uuml; cihaz (PD)</li>\r\n	<li>&Ccedil;oğu PoE u&ccedil; cihazı i&ccedil;in emniyetli ve g&uuml;venilir g&uuml;&ccedil;</li>\r\n	<li>Tak &amp; &Ccedil;alıştır. Yapılandırma gerektirmez</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/198e6nts-2126-B60435.png', '100', '26', '', 'NTS-2126', '21'),
(69, 'Uzaktan Kumanda', 'Uzaktan-Kumanda', '<ul style="list-style-type:none">\r\n	<li>6 tuşlu mini kumanda</li>\r\n	<li>Panik butonu ile uzaktan Neutron alarm panelini kontrol edebilme</li>\r\n	<li>200 metre uzaktan kumanda mesafesi</li>\r\n	<li>İletim/Alış frekansı: 868 Mhz</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/6b1fauzaktan-kumanda-B9482.png', '100', '33', '', 'UZK4287', '27'),
(70, 'Kablosuz Mesafe Arttırıcı (Repeater)', 'Kablosuz-Mesafe-Arttirici-Repeater-', '<p>Kablosuz Mesafe Arttırıcı (Repeater)</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/09877kablosuz-mesafe-arttirici-B72869.jpg', '100', '33', '', 'KMA5963', '27'),
(71, 'Dokunmatik Tuş Takımı', 'Dokunmatik-Tus-Takimi', '<ul style="list-style-type:none">\r\n	<li>Dokunmatik LCD Panel ve tuş takımı</li>\r\n	<li>Tuş Takımı &uuml;zerinden Zone Bağlantı imkanı</li>\r\n	<li>Tek tuşla kurma</li>\r\n	<li>Sabotaj Anahtarı</li>\r\n	<li>Panik, Yangın ve Medikal Butonları</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/c6a7adokunmatik-tus-takimi-B20631.jpg', '100', '33', '', 'DTT5322', '27'),
(72, 'Kablolu Panik Butonu', 'Kablolu-Panik-Butonu', '<p>Kablolu Panik Butonu</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/ff0adkablolu-panik-butonu-B443.jpg', '100', '32', '', 'KPB2584', '27'),
(73, 'Kablosuz Panik Butonu', 'Kablosuz-Panik-Butonu', '<p>Kablosuz Panik Butonu</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/331f3kablosuz-panik-butonu-B44515.jpg', '100', '32', '', 'KBBX5752', '27'),
(74, 'Kablosuz Alarm Seti', 'Kablosuz-Alarm-Seti', '<ul style="list-style-type:none">\r\n	<li>1 NETWORK&nbsp;Mod&uuml;l&uuml; ,1 GPRS Mod&uuml;l&uuml; ,1 GSM mod&uuml;l&uuml;</li>\r\n	<li>1 adet kablolu/kablosuz alarm paneli&nbsp;</li>\r\n	<li>1 adet dokunmatik tuş paneli&nbsp;</li>\r\n	<li>1 adet kablosuz pır dedekt&ouml;r&nbsp;</li>\r\n	<li>1 adet kablosuz&nbsp;manyetik kontak&nbsp;</li>\r\n	<li>2 adet uzaktan kumanda</li>\r\n	<li>1 adet 12v 7 amper switch mod ak&uuml; ve trafo</li>\r\n	<li>1 Yıl AKM Aboneliği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/0eae9kablosuz-alarm-seti-B87610.png', '100', '28', '', 'KBS-5888', '27'),
(75, 'Kablolu Alarm Seti', 'Kablolu-Alarm-Seti', '<ul style="list-style-type:none">\r\n	<li>1 NETWORK&nbsp;Mod&uuml;l&uuml; ,1 GPRS Mod&uuml;l&uuml; ,1 GSM mod&uuml;l&uuml;</li>\r\n	<li>1 adet kablolu/kablosuz alarm paneli&nbsp;</li>\r\n	<li>1 adet dokunmatik tuş paneli&nbsp;</li>\r\n	<li>1 adet kablolu pır dedekt&ouml;r&nbsp;</li>\r\n	<li>1 adet kablolu manyetik kontak&nbsp;</li>\r\n	<li>2 adet uzaktan kumanda</li>\r\n	<li>1 adet 12v 7 amper switch mod ak&uuml; ve trafo</li>\r\n	<li>1 Yıl AKM Aboneliği</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/1da8fkablosuz-alarm-seti-B87610.png', '100', '28', '', 'ERS16832', '27'),
(76, 'Harici Kablosuz SOLAR Dış Siren', 'Harici-Kablosuz-SOLAR-Dis-Siren', '<ul style="list-style-type:none">\r\n	<li>Harici Kablosuz SOLAR (g&uuml;neş enerjili) Dış siren</li>\r\n	<li>İletim/Alış frekansı: 868 Mhz</li>\r\n	<li>Minumum 128 dB ses &ccedil;ıkışı</li>\r\n	<li>5 Adet y&uuml;r&uuml;yen ikaz led sinyali</li>\r\n	<li>Alarm anında g&uuml;&ccedil;l&uuml; flaş&ouml;r</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/ce6faharici-kablosuz-solar-dis-B84425.png', '100', '29', '', 'HK90500', '27'),
(77, 'Harici Kablolu Dış Siren', 'Harici-Kablolu-Dis-Siren', '<ul style="list-style-type:none">\r\n	<li>Harici Kablolu Dış siren</li>\r\n	<li>Minumum 128 dB ses &ccedil;ıkışı</li>\r\n	<li>5 Adet y&uuml;r&uuml;yen ikaz led sinyali</li>\r\n	<li>Alarm anında g&uuml;&ccedil;l&uuml; flaş&ouml;r</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/138a5harici-kablolu-dis-siren-B39188.png', '100', '29', '', 'HKDS5033', '27'),
(78, 'Harici Kablosuz Dış Siren', 'Harici-Kablosuz-Dis-Siren', '<ul style="list-style-type:none">\r\n	<li>Harici Kablosuz&nbsp;Dış siren</li>\r\n	<li>İletim/Alış frekansı: 868 Mhz</li>\r\n	<li>Minumum 128 dB ses &ccedil;ıkışı</li>\r\n	<li>5 Adet y&uuml;r&uuml;yen ikaz led sinyali</li>\r\n	<li>Alarm anında g&uuml;&ccedil;l&uuml; flaş&ouml;r</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/9dd50harici-kablosuz-dis-siren-B41966.png', '100', '29', '', 'HKDS5034', '27'),
(79, 'Yerleşik Isı dedektörü', 'Yerlesik-Isi-dedektoru', '<ul style="list-style-type:none">\r\n	<li>Yerleşik ısı dedekt&ouml;r&uuml;</li>\r\n	<li>Test Butonu</li>\r\n	<li>Dahili buzzer</li>\r\n	<li>2 adet CR123A 5 yıla kadar pil &ouml;mr&uuml;</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/ec008yerlesik-isi-dedektoru-B24655.jpg', '100', '30', '', 'YID8080', '27'),
(80, 'Gaz Dedektörü', 'Gaz-Dedektoru', '<p>Gaz Dedekt&ouml;r&uuml;</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/961d0gaz-dedektoru-B77549.png', '100', '30', '', 'YID8081', '27'),
(81, 'Kablosuz Hareket Dedektörü', 'Kablosuz-Hareket-Dedektoru', '<ul style="list-style-type:none">\r\n	<li>Kablosuz pır dedekt&ouml;r</li>\r\n	<li>İlk &ccedil;alışmada sinyal şiddeti, kutup, eğim ve zamanlamaya g&ouml;re hassasiyet ayarı</li>\r\n	<li>Normal mod veya uyku modlu &ccedil;alışma &ouml;zelliği</li>\r\n	<li>Dinamik sıcaklık ayarıyla ısı değişimlerine g&ouml;re otomatik hassasiyet dengeleme</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/6632ckablosuz-hareket-dedektor-B38665.png', '100', '30', '', 'YID8082', '27'),
(82, 'Kablolu Hareket Dedektörü', 'Kablolu-Hareket-Dedektoru', '<ul style="list-style-type:none">\r\n	<li>Kablolu pır dedekt&ouml;r</li>\r\n	<li>İlk &ccedil;alışmada sinyal şiddeti, kutup, eğim ve zamanlamaya g&ouml;re hassasiyet ayarı</li>\r\n	<li>Normal mod veya uyku modlu &ccedil;alışma &ouml;zelliği</li>\r\n	<li>Dinamik sıcaklık ayarıyla ısı değişimlerine g&ouml;re otomatik hassasiyet dengeleme</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/0d60ekablolu-hareket-dedektoru-B87734.png', '100', '30', '', 'YID8082', '27'),
(83, 'Kablolu Manyetik Kontak', 'Kablolu-Manyetik-Kontak', '<p>Kablolu Manyetik Kontak</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/0639bkablolu-manyetik-kontak-B82626.png', '100', '31', '', 'YID8084', '27'),
(84, 'Kablosuz Manyetik Kontak', 'Kablosuz-Manyetik-Kontak', '<ul style="list-style-type:none">\r\n	<li>1 adet CR123A dahili pil ile 5 yıla kadar uzun pil &ouml;mr&uuml;</li>\r\n	<li>Kablosuz yayma mesafesi Dahili anten: 150m</li>\r\n	<li>Manyetik aralık 1.5cm</li>\r\n	<li>&Ccedil;alışma gerilimi : 3V</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/e2cc4kablosuz-manyetik-kontak-B21033.png', '100', '31', '', 'YID8090', '27'),
(85, 'DOME SES KARTI', 'DOME-SES-KARTI', '<p>DOME SES KARTI</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/3bb46dome-ses-karti-B93504.jpg', '100', '35', '', 'DMK5877', '34'),
(86, 'KARE SES KARTI', 'KARE-SES-KARTI', '<p>KARE SES KARTI</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/61583kare-ses-karti-B74682.jpg', '100', '35', '', 'KRK1288', '34'),
(87, 'KUTUSUZ SES KARTI', 'KUTUSUZ-SES-KARTI', '<p>KUTUSUZ SES KARTI</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/85375kutusuz-ses-karti-B88953.jpg', '100', '35', '', 'KSK5819', '34'),
(88, '12 VOLT 10 AMPER SWITCH MODE ADAPTÖR METAL KASA', '12-VOLT-10-AMPER-SWITCH-MODE-ADAPTOR-METAL-KASA', '<p>12 VOLT 10 AMPER SWITCH MODE ADAPT&Ouml;R METAL KASA</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/d968a12-volt-10-amper-switch-m-B54552.jpg', '100', '36', '', 'YID7778', '34'),
(89, '12 VOLT 7 AMPER SWITCH MODE ADAPTÖR METAL KASA', '12-VOLT-7-AMPER-SWITCH-MODE-ADAPTOR-METAL-KASA', '<p>12 VOLT 7 AMPER SWITCH MODE ADAPT&Ouml;R METAL KASA</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/b52b112-volt-10-amper-switch-m-B54552.jpg', '100', '36', '', 'YID7777', '34'),
(90, '12 VOLT 5 AMPER SWITCH MODE ADAPTÖR METAL KASA', '12-VOLT-5-AMPER-SWITCH-MODE-ADAPTOR-METAL-KASA', '<p>12 VOLT 5 AMPER SWITCH MODE ADAPT&Ouml;R METAL KASA</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/7132712-volt-10-amper-switch-m-B54552.jpg', '100', '36', '', 'YID7776', '34'),
(93, '320 GB SEAGATE HARD DISK', '320-GB-SEAGATE-HARD-DISK', '<p>320 GB SEAGATE HARD DISK</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/c4ab7320-gb-seagate-hard-disk-B18002.png', '100', '37', '', 'YID7571', '34'),
(94, '500 GB SEAGATE HARD DISK', '500-GB-SEAGATE-HARD-DISK', '<p>500 GB SEAGATE HARD DISK</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/84423500-gb-seagate-hard-disk-B38212.png', '100', '37', '', 'YID7572', '34'),
(95, '1 TB SEAGATE HARD DISK', '1-TB-SEAGATE-HARD-DISK', '<p>1 TB SEAGATE HARD DISK</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/998631-tb-seagate-hard-disk-B59737.png', '100', '37', '', 'YID7573', '34'),
(99, '3 TB WD PURPLE SERİSİ HARD DISK', '3-TB-WD-PURPLE-SERISI-HARD-DISK', '<p>3 TB WD PURPLE SERİSİ HARD DISK</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/73f5d3-tb-wd-purple-serisi-har-B15245.jpg', '100', '37', '', 'YID1574', '34'),
(100, '4 TB WD PURPLE SERİSİ HARD DISK', '4-TB-WD-PURPLE-SERISI-HARD-DISK', '<p>4 TB WD PURPLE SERİSİ HARD DISK</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/f447e4-tb-wd-purple-serisi-har-B91327.jpg', '100', '37', '', 'YID1576', '34'),
(101, '6 TB WD PURPLE SERİSİ HARD DISK', '6-TB-WD-PURPLE-SERISI-HARD-DISK', '<p>6 TB WD PURPLE SERİSİ HARD DISK</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/7e7076-tb-wd-purple-serisi-har-B51851.jpg', '100', '37', '', 'YID1577', '34'),
(102, '4/7/9 U EKO DUVAR TİPİ KABİNET', '4-7-9-U-EKO-DUVAR-TIPI-KABINET', '<p>4/7/9 U EKO DUVAR TİPİ KABİNET</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/a3ff9479-u-eko-duvar-tipi-kabi-B75581.jpg', '100', '38', '', 'YID1171', '34'),
(103, '4/7/9 U WAL RACK KABİNET', '4-7-9-U-WAL-RACK-KABINET', '<p>4/7/9 U WAL RACK KABİNET</p>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/82e81479-u-wal-rack-kabinet-B25683.jpg', '100', '38', '', 'YID1172', '34'),
(104, '19 " CCTV BNC-VGA-HDMI MONİTÖR', '19-CCTV-BNC-VGA-HDMI-MONITOR', '<ul>\r\n	<li>&nbsp;&nbsp; &nbsp;19 in&ccedil; LED Ekran</li>\r\n	<li>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;1 Adet CCTV Kamera Girişi ( BNC )</li>\r\n	<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1 Adet VGA Girişi</li>\r\n	<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;1 Adet HDMI Girişi</li>\r\n	<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&Ccedil;&ouml;z&uuml;n&uuml;rl&uuml;k 1366 X 768</li>\r\n	<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Montaj Aparatı</li>\r\n	<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;T&uuml;rk&ccedil;e Menu</li>\r\n	<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Uzaktan Kumanda</li>\r\n	<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Mavi Ekran Sinyal Yok</li>\r\n	<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;16:9 G&ouml;r&uuml;nt&uuml; &ouml;zelliği</li>\r\n	<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Power girişi: AC100-240V / 12V DC</li>\r\n	<li>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;G&uuml;&ccedil; harcaması: &lt; 36 W</li>\r\n</ul>\r\n', 'http://www.isatektekne.com.tr/alarm/urunler/32a1cmonitor-B74318.jpg', '100', '39', '', 'YID1122', '34');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
