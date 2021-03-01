-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 03, 2021 at 07:13 PM
-- Server version: 10.3.27-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u9796846_aliosman1`
--

-- --------------------------------------------------------

--
-- Table structure for table `albumler`
--

CREATE TABLE `albumler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_kategori` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_sira` int(11) DEFAULT NULL,
  `kategori_title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_descr` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_keyword` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_ad2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_ad3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_title2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_title3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_descr2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_descr3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_keyword2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_keyword3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `albumler`
--

INSERT INTO `albumler` (`kategori_id`, `kategori_ad`, `kategori_resim`, `kategori_kategori`, `kategori_sira`, `kategori_title`, `kategori_descr`, `kategori_keyword`, `kategori_ad2`, `kategori_ad3`, `kategori_title2`, `kategori_title3`, `kategori_descr2`, `kategori_descr3`, `kategori_keyword2`, `kategori_keyword3`) VALUES
(12, 'Arabalar', 'assets/img/hizmetler/3092123581.jpg', '', 1, 'Arabalar', 'Arabalar', 'Arabalar', 'Rooms', 'комнаты', 'Rooms', 'комнаты', 'Rooms', 'комнаты', 'Rooms', 'комнаты');

-- --------------------------------------------------------

--
-- Table structure for table `ayar`
--

CREATE TABLE `ayar` (
  `ayar_id` int(1) NOT NULL,
  `ayar_logo` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_fav` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_renk` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_siteurl` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_firmaadi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_description` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_keywords` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_adres` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ilce` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_il` varchar(200) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_tel` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_fax` varchar(20) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mail` varchar(100) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_kod` longtext COLLATE utf8_turkish_ci NOT NULL,
  `ayar_harita` longtext COLLATE utf8_turkish_ci NOT NULL,
  `ayar_ara` int(11) NOT NULL,
  `ayar_resimparalax` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_resimcounter` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title1` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title2` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title3` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title4` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title5` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_title6` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mobil` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_slaytarka` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mobil1` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mobil2` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `ayar_mobil3` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `ayar`
--

INSERT INTO `ayar` (`ayar_id`, `ayar_logo`, `ayar_fav`, `ayar_renk`, `ayar_siteurl`, `ayar_firmaadi`, `ayar_title`, `ayar_description`, `ayar_keywords`, `ayar_adres`, `ayar_ilce`, `ayar_il`, `ayar_tel`, `ayar_fax`, `ayar_mail`, `ayar_kod`, `ayar_harita`, `ayar_ara`, `ayar_resimparalax`, `ayar_resimcounter`, `ayar_title1`, `ayar_title2`, `ayar_title3`, `ayar_title4`, `ayar_title5`, `ayar_title6`, `ayar_mobil`, `ayar_slaytarka`, `ayar_mobil1`, `ayar_mobil2`, `ayar_mobil3`) VALUES
(0, 'assets/img/genel/27478.jpg', 'assets/img/genel/22434.jpg', 'picton.css', '', 'Yönetim Panelli Çok dil & Otel & Pansiyon SCRİPTİ', 'Kuaför & Güzellik Merkezi & Spa Salonu SCRİPTİ | Scout Teknoloji', 'Gelişmiş admin paneli ile rakiplerinizi kısakandıracak php pdo html 5 web site yazılımı full özellikli tam kontrollü Kuaför & Güzellik Merkezi & Spa Salonu SCRİPTİ', 'Kuaför & Güzellik Merkezi & Spa Salonu SCRİPTİ , kurumsal web site, kurumsal scripti, kurumsal web yazılım', 'Rami kışla caddesiRami kışla caddesiRami kışla caddesiRami kışla caddesiRami kışla caddesiRami kışla caddesi', 'Bayrampaşa', 'İSTANBUL', '0 (532) 179 58 61', '0212 909 96 86', '', '', '0', 1, 'assets/img/genel/22950.jpg', 'assets/img/genel/30384.jpg', 'assets/img/genel/31907.jpg', 'assets/img/genel/27535.jpg', 'assets/img/genel/27916.jpg', 'assets/img/genel/30428.jpg', 'assets/img/genel/24390.jpg', 'assets/img/genel/20997.jpg', '#1', '#1', '#B09C54', '#181818', '#00142B');

-- --------------------------------------------------------

--
-- Table structure for table `bilgi`
--

CREATE TABLE `bilgi` (
  `bilgi_id` int(11) NOT NULL,
  `bilgi_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `bilgi_aciklama` text COLLATE utf8_turkish_ci NOT NULL,
  `bilgi_baslik2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `bilgi_baslik3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `bilgi_aciklama2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `bilgi_aciklama3` longtext COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `bilgi`
--

INSERT INTO `bilgi` (`bilgi_id`, `bilgi_baslik`, `bilgi_aciklama`, `bilgi_baslik2`, `bilgi_baslik3`, `bilgi_aciklama2`, `bilgi_aciklama3`) VALUES
(1, 'Uygun Fiyat Garantisi', 'Buraya metin gelecek, buraya metin gelecek yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır.', 'fa-automobile', 'Откуда он появился?', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\".', 'Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 \"de Finibus Bonorum et Malorum\".'),
(2, '7/24 Müşteri Hizmetleri', 'Buraya metin gelecek, buraya metin gelecek yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır.', 'fa-clock-o', 'Откуда он появился?', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\".', 'Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 \"de Finibus Bonorum et Malorum\".'),
(3, 'Tecrübe & Güven', 'Buraya metin gelecek, buraya metin gelecek yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır.', 'fa-check', 'Откуда он появился?', 'The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\".', 'Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 \"de Finibus Bonorum et Malorum\".');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(11) NOT NULL,
  `blog_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `blog_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `blog_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `blog_kategori` int(11) NOT NULL,
  `blog_detay` longtext COLLATE utf8_turkish_ci NOT NULL,
  `blog_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `blog_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `blog_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `blog_baslik2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `blog_baslik3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `blog_detay2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `blog_detay3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `blog_title2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `blog_title3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `blog_descr2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `blog_descr3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `blog_keyword2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `blog_keyword3` longtext COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_resim`, `blog_tarih`, `blog_baslik`, `blog_kategori`, `blog_detay`, `blog_title`, `blog_descr`, `blog_keyword`, `blog_baslik2`, `blog_baslik3`, `blog_detay2`, `blog_detay3`, `blog_title2`, `blog_title3`, `blog_descr2`, `blog_descr3`, `blog_keyword2`, `blog_keyword3`) VALUES
(28, 'assets/img/blog/3165025660.jpg', '2020-12-18 09:45:40', 'Araç Satın Alırken Nelere Dikkat Edilmeli?', 2, '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor dignissim arcu, eu scelerisque orci finibus vel. Suspendisse eget consectetur justo, non efficitur quam. Pellentesque lacinia id est eget lacinia. Phasellus ut sem et mi consectetur maximus. Etiam pharetra quam in nibh faucibus, at venenatis mi elementum. Nullam bibendum ultrices leo ut vehicula. Phasellus id turpis turpis. Integer scelerisque ac massa a vulputate.</p><p>Fusce hendrerit eros nec justo maximus gravida. Vivamus sed consequat lorem. In hac habitasse platea dictumst. Duis ut eros vitae purus porttitor tristique. Donec eu dapibus ante, non porta erat. Integer nulla elit, egestas non enim vehicula, tempus vestibulum sapien. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p><p>Nunc ex dolor, tincidunt ac feugiat non, faucibus eu sem. Fusce id odio quis elit pellentesque malesuada. Maecenas tincidunt porta imperdiet. Vivamus in arcu arcu. Quisque ut risus eu purus placerat porttitor vel non lacus. Nam et iaculis ex. Ut in malesuada leo. Phasellus ut condimentum odio. Nunc ac urna dignissim, egestas diam sit amet, molestie enim. Curabitur in porta libero, id volutpat magna.</p><p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Integer in scelerisque mauris. Nunc scelerisque hendrerit urna, quis pellentesque velit dictum a. Sed ipsum nisi, viverra tincidunt consequat bibendum, vulputate feugiat justo. Vivamus eget rutrum ante. Nullam semper diam vitae lacus malesuada, nec porttitor turpis tincidunt. Donec placerat urna quis arcu blandit, eget aliquet dui tincidunt. Sed viverra ex nec est consectetur aliquet. Nunc efficitur molestie turpis, ac faucibus nunc viverra ut. Aenean a magna ac nulla ultrices condimentum eu sed mi. Duis sit amet ligula rutrum nulla vehicula vulputate. Donec vehicula imperdiet sagittis. Donec ut pulvinar justo, non rhoncus felis. Curabitur bibendum nunc at dui iaculis, vitae ultricies purus luctus. Nullam efficitur, tellus mollis dignissim condimentum, nisl lacus accumsan orci, id maximus sapien odio nec quam. Praesent tincidunt urna tortor, tempor feugiat libero aliquam vitae.</p><p>Vivamus ut sem vel velit molestie dapibus id vitae quam. Nulla vitae urna semper felis scelerisque tincidunt eu ut lacus. Donec at sapien et sem dapibus vehicula. Nulla facilisi. Ut eget blandit justo. Suspendisse metus ante, laoreet quis ex ac, convallis ullamcorper lorem. Phasellus tempor mi sem, sed pretium massa luctus vestibulum. Mauris in tristique risus.</p>', 'Araç Satın Alırken Nelere Dikkat Edilmeli?', 'Araç Satın Alırken Nelere Dikkat Edilmeli?', 'Araç Satın Alırken Nelere Dikkat Edilmeli?', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `counter_id` int(11) NOT NULL,
  `counter_icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `counter_rakam` int(155) NOT NULL,
  `counter_isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`counter_id`, `counter_icon`, `counter_rakam`, `counter_isim`) VALUES
(1, 'fa fa-users', 265, 'Kullanıcı'),
(2, 'fa fa-eye', 2455, 'Ziyaretçi'),
(3, 'fa fa-thumbs-up', 1254, 'Beğeni'),
(4, 'fa fa-share-alt', 4222, 'Paylaşım');

-- --------------------------------------------------------

--
-- Table structure for table `dil`
--

CREATE TABLE `dil` (
  `dil_id` int(11) NOT NULL,
  `dil_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `dil_bayrak` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `dil_durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `dil_birim` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `dil`
--

INSERT INTO `dil` (`dil_id`, `dil_adi`, `dil_bayrak`, `dil_durum`, `dil_birim`) VALUES
(1, 'Turkey', 'assets/img/genel/22894.jpg', '1', 'TL'),
(2, 'England', 'assets/img/genel/26672.jpg', '0', '$'),
(3, 'Russian', 'assets/img/genel/24405.jpg', '0', 'RUB');

-- --------------------------------------------------------

--
-- Table structure for table `flink`
--

CREATE TABLE `flink` (
  `flink_id` int(11) NOT NULL,
  `flink_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `flink_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `flink_sira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `flink`
--

INSERT INTO `flink` (`flink_id`, `flink_ad`, `flink_link`, `flink_sira`) VALUES
(5, 'Banka Hesapları', 'banka-hesaplarimiz', 3),
(6, 'SSS', 'sss', 2),
(7, 'Hakkımızda', 'sayfa-hakkimizda-1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fmenu`
--

CREATE TABLE `fmenu` (
  `fmenu_id` int(11) NOT NULL,
  `fmenu_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fmenu_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fmenu_sira` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `fmenu`
--

INSERT INTO `fmenu` (`fmenu_id`, `fmenu_ad`, `fmenu_link`, `fmenu_sira`) VALUES
(1, 'ANASAYFA', '#', '1'),
(2, 'ARAÇLARIMIZ', 'odalar', '2'),
(3, 'HAKKIMIZDA', 'sayfa-hakkimizda-1', '3'),
(4, 'İLETİŞİM', 'iletisim', '4');

-- --------------------------------------------------------

--
-- Table structure for table `fmenu2`
--

CREATE TABLE `fmenu2` (
  `fmenu_id` int(11) NOT NULL,
  `fmenu_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fmenu_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fmenu_sira` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `fmenu2`
--

INSERT INTO `fmenu2` (`fmenu_id`, `fmenu_ad`, `fmenu_link`, `fmenu_sira`) VALUES
(1, 'custom menu 1', '#', '1'),
(2, 'custom menu 2', '#', '2'),
(3, 'custom menu 3', '#', '3'),
(4, 'custom menu 4', '#', '4');

-- --------------------------------------------------------

--
-- Table structure for table `fmenu3`
--

CREATE TABLE `fmenu3` (
  `fmenu_id` int(11) NOT NULL,
  `fmenu_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fmenu_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `fmenu_sira` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `fmenu3`
--

INSERT INTO `fmenu3` (`fmenu_id`, `fmenu_ad`, `fmenu_link`, `fmenu_sira`) VALUES
(1, 'пользовательское меню 1', '#', '1'),
(2, 'пользовательское меню 2', '#', '2'),
(3, 'пользовательское меню 3', '#', '3'),
(4, 'пользовательское меню 4', '#', '4');

-- --------------------------------------------------------

--
-- Table structure for table `hesap`
--

CREATE TABLE `hesap` (
  `hesap_id` int(11) NOT NULL,
  `hesap_banka` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hesap_isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hesap_sube` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hesap_no` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hesap_iban` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `hesap`
--

INSERT INTO `hesap` (`hesap_id`, `hesap_banka`, `hesap_isim`, `hesap_sube`, `hesap_no`, `hesap_iban`) VALUES
(1, 'ENPARA (FİNANSBANK)', 'En Şirket adı Tic. Ltd.şti', 'Altıntepe/209', '6296911', 'TR38 0006 2000 2090 0006 2969 11 '),
(2, 'İŞBANKASI', 'İş Şirket adı Tic. Ltd.şti', 'Altıntepe/209', '6296911', 'TR38 0006 2000 2090 0006 2969 11 ');

-- --------------------------------------------------------

--
-- Table structure for table `hit`
--

CREATE TABLE `hit` (
  `gun` int(11) NOT NULL,
  `ay` int(11) NOT NULL,
  `yil` int(11) NOT NULL,
  `simdi` int(11) NOT NULL,
  `sayac` int(11) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hit`
--

INSERT INTO `hit` (`gun`, `ay`, `yil`, `simdi`, `sayac`, `ip`, `id`) VALUES
(29, 11, 2019, 1575033688, 10, '::1', 1),
(29, 11, 2019, 1575034756, 31, '95.7.195.234', 2),
(29, 11, 2019, 1575036587, 4, '78.170.205.248', 3),
(29, 11, 2019, 1575045146, 3, '78.176.5.211', 4),
(29, 11, 2019, 1575045534, 3, '159.146.115.76', 5),
(29, 11, 2019, 1575045831, 3, '78.180.72.221', 6),
(29, 11, 2019, 1575046188, 4, '176.40.236.85', 7),
(29, 11, 2019, 1575048395, 3, '88.228.197.213', 8),
(29, 11, 2019, 1575048513, 6, '185.135.108.168', 9),
(29, 11, 2019, 1575049607, 3, '37.130.95.196', 10),
(29, 11, 2019, 1575056175, 3, '95.10.231.53', 11),
(29, 11, 2019, 1575057359, 3, '151.250.204.67', 12),
(29, 11, 2019, 1575060188, 3, '176.235.133.165', 13),
(30, 11, 2019, 1575091463, 3, '95.9.147.151', 14),
(1, 12, 2019, 1575188214, 3, '37.155.12.115', 15),
(1, 12, 2019, 1575199538, 2, '176.43.204.112', 16),
(1, 12, 2019, 1575208467, 3, '54.209.98.150', 17),
(1, 12, 2019, 1575220239, 3, '176.234.113.161', 18),
(1, 12, 2019, 1575231468, 4, '94.121.92.71', 19),
(2, 12, 2019, 1575244983, 1, '66.249.64.219', 20),
(2, 12, 2019, 1575252276, 1, '66.249.64.221', 21),
(17, 12, 2020, 1608196319, 56, '127.0.0.1', 22),
(18, 12, 2020, 1608272380, 15, '127.0.0.1', 23),
(18, 12, 2020, 1608276018, 51, '82.222.132.238', 24),
(19, 12, 2020, 1608377011, 2, '46.196.81.45', 25),
(20, 12, 2020, 1608487557, 4, '82.222.133.82', 26),
(18, 1, 2021, 1610979835, 8, '82.222.133.141', 27),
(19, 1, 2021, 1611037170, 10, '82.222.134.71', 28),
(20, 1, 2021, 1611135400, 26, '82.222.134.71', 29),
(22, 1, 2021, 1611296110, 22, '82.222.134.39', 30),
(24, 1, 2021, 1611487343, 5, '82.222.132.237', 31),
(25, 1, 2021, 1611569140, 61, '82.222.132.237', 32),
(25, 1, 2021, 1611584349, 2, '205.169.39.77', 33);

-- --------------------------------------------------------

--
-- Table structure for table `hizmetler`
--

CREATE TABLE `hizmetler` (
  `hizmet_id` int(11) NOT NULL,
  `hizmet_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_icerik` longtext COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_vitrin` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `hizmetler`
--

INSERT INTO `hizmetler` (`hizmet_id`, `hizmet_baslik`, `hizmet_icerik`, `hizmet_resim`, `hizmet_icon`, `hizmet_title`, `hizmet_descr`, `hizmet_keyword`, `hizmet_vitrin`) VALUES
(12, 'Cilt Bakım', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/iIXp5R41qN8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/3198126195.jpg', '', 'Cilt Bakım', 'Cilt Bakım', 'Cilt Bakım', '0'),
(14, 'Spa Masaj', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/iIXp5R41qN8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2572626913.jpg', '', 'Spa Masaj', 'Spa Masaj', 'Spa Masaj', '0'),
(15, 'Terapi Masaj', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/iIXp5R41qN8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2029522569.jpg', '', 'Terapi Masaj', 'Terapi Masaj', 'Terapi Masaj', '0'),
(16, 'Bölgesel İncelme', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/iIXp5R41qN8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2535927791.jpg', '', 'Bölgesel İncelme', 'Bölgesel İncelme', 'Bölgesel İncelme', '1'),
(17, 'Lazer Epilasyon', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/iIXp5R41qN8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2933624335.jpg', '', 'Lazer Epilasyon', 'Lazer Epilasyon', 'Lazer Epilasyon', '1'),
(18, 'Kalıcı Makyaj', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/iIXp5R41qN8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2210926443.jpg', '', 'Kalıcı Makyaj', 'Kalıcı Makyaj', 'Kalıcı Makyaj', '1');

-- --------------------------------------------------------

--
-- Table structure for table `hsss`
--

CREATE TABLE `hsss` (
  `sss_id` int(11) NOT NULL,
  `sss_soru` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sss_cevap` varchar(755) COLLATE utf8_turkish_ci NOT NULL,
  `sss_sira` int(11) NOT NULL,
  `sss_hizmet` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `hsss`
--

INSERT INTO `hsss` (`sss_id`, `sss_soru`, `sss_cevap`, `sss_sira`, `sss_hizmet`) VALUES
(11, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 18),
(12, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 18),
(13, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 18),
(14, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 18),
(15, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 17),
(16, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 17),
(17, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 17),
(18, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 17),
(19, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 16),
(20, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 16),
(21, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 16),
(22, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 16),
(23, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 15),
(24, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 15),
(25, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 15),
(26, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 15),
(27, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 14),
(28, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 14),
(29, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 14),
(30, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 14),
(31, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 12),
(32, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 12),
(33, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 12),
(34, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'Lorem Ipsum pasajlarının birçok çeşitlemesi vardır. Ancak bunların büyük bir çoğunluğu mizah katılarak veya rastgele sözcükler eklenerek değiştirilmişlerdir. Eğer bir Lorem Ipsum pasajı kullanacaksanız, metin aralarına utandırıcı sözcükler gizlenmediğinden emin olmanız gerekir.', 1, 12);

-- --------------------------------------------------------

--
-- Table structure for table `il`
--

CREATE TABLE `il` (
  `id` int(2) NOT NULL,
  `il_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `il_plaka` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `il`
--

INSERT INTO `il` (`id`, `il_adi`, `il_plaka`) VALUES
(1, 'İSTANBUL', 34),
(2, 'ANKARA', 6),
(3, 'İZMİR', 35),
(4, 'BURSA', 16),
(5, 'ADANA', 1),
(6, 'ADIYAMAN', 2),
(7, 'AFYONKARAHİSAR', 3),
(8, 'AĞRI', 4),
(9, 'AKSARAY', 68),
(10, 'AMASYA', 5),
(11, 'ANTALYA', 7),
(12, 'ARDAHAN', 75),
(13, 'ARTVİN', 8),
(14, 'AYDIN', 9),
(15, 'BALIKESİR', 10),
(16, 'BARTIN', 74),
(17, 'BATMAN', 72),
(18, 'BAYBURT', 69),
(19, 'BİLECİK', 11),
(20, 'BİNGÖL', 12),
(21, 'BİTLİS', 13),
(22, 'BOLU', 14),
(23, 'BURDUR', 15),
(24, 'ÇANAKKALE', 17),
(25, 'ÇANKIRI', 18),
(26, 'ÇORUM', 19),
(27, 'DENİZLİ', 20),
(28, 'DİYARBAKIR', 21),
(29, 'KOCAELİ', 41),
(30, 'KONYA', 42),
(31, 'KÜTAHYA', 43),
(32, 'MALATYA', 44),
(33, 'MANİSA', 45),
(34, 'MARDİN', 47),
(35, 'MERSİN', 33),
(36, 'MUĞLA', 48),
(37, 'MUŞ', 49),
(38, 'NEVŞEHİR', 50),
(39, 'NİĞDE', 51),
(40, 'ORDU', 52),
(41, 'OSMANİYE', 80),
(42, 'RİZE', 53),
(43, 'SAKARYA', 54),
(44, 'SAMSUN', 55),
(45, 'SİİRT', 56),
(46, 'SİNOP', 57),
(47, 'ŞIRNAK', 73),
(48, 'SİVAS', 58),
(49, 'TEKİRDAĞ', 59),
(50, 'TOKAT', 60),
(51, 'TRABZON', 61),
(52, 'TUNCELİ', 62),
(53, 'ŞANLIURFA', 63),
(54, 'UŞAK', 64),
(55, 'VAN', 65),
(56, 'YALOVA', 77),
(57, 'YOZGAT', 66),
(58, 'ZONGULDAK', 67),
(59, 'DÜZCE', 81),
(60, 'EDİRNE', 22),
(61, 'ELAZIĞ', 23),
(62, 'ERZİNCAN', 24),
(63, 'ERZURUM', 25),
(64, 'ESKİŞEHİR', 26),
(65, 'GAZİANTEP', 27),
(66, 'GİRESUN', 28),
(67, 'GÜMÜŞHANE', 29),
(68, 'HAKKARİ', 30),
(69, 'HATAY', 31),
(70, 'IĞDIR', 76),
(71, 'ISPARTA', 32),
(72, 'KAHRAMANMARAŞ', 46),
(73, 'KARABÜK', 78),
(74, 'KARAMAN', 70),
(75, 'KARS', 36),
(76, 'KASTAMONU', 37),
(77, 'KAYSERİ', 38),
(78, 'KİLİS', 79),
(79, 'KIRIKKALE', 71),
(80, 'KIRKLARELİ', 39),
(81, 'KIRŞEHİR', 40);

-- --------------------------------------------------------

--
-- Table structure for table `iletisim`
--

CREATE TABLE `iletisim` (
  `iletisim_id` int(11) NOT NULL,
  `iletisim_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `iletisim_isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `iletisim_mesaj` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `iletisim`
--

INSERT INTO `iletisim` (`iletisim_id`, `iletisim_tarih`, `iletisim_isim`, `iletisim_mail`, `iletisim_mesaj`) VALUES
(1, '2018-01-25 10:59:37', 'Ahmet Aksu', 'ahmet@hotmail.com', 'Merhaba web sitesi yazılımı istiyorum.'),
(2, '2018-01-25 10:59:39', 'Kemal Demir', 'ahmet@hotmail.com', 'Merhaba web sitesi yazılımı istiyorum.');

-- --------------------------------------------------------

--
-- Table structure for table `kategoriler`
--

CREATE TABLE `kategoriler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(11) NOT NULL,
  `kategori_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kategoriler`
--

INSERT INTO `kategoriler` (`kategori_id`, `kategori_ad`, `kategori_sira`, `kategori_title`, `kategori_descr`, `kategori_keyword`) VALUES
(1, 'Yatak Odası', 1, '', '', ''),
(2, 'Yemek Odası', 2, '', '', ''),
(3, 'KURUMSAL', 3, 'Klima', 'Klima', 'Klima'),
(4, 'Yatak Odası22222222222222222', 2147483647, '2222222222200', '2222222222211', '222222222333');

-- --------------------------------------------------------

--
-- Table structure for table `kategorilerb`
--

CREATE TABLE `kategorilerb` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(11) NOT NULL,
  `kategori_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_ad2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_ad3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_title2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_title3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_descr2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_descr3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_keyword2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_keyword3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kategorilerb`
--

INSERT INTO `kategorilerb` (`kategori_id`, `kategori_ad`, `kategori_sira`, `kategori_title`, `kategori_descr`, `kategori_keyword`, `kategori_ad2`, `kategori_ad3`, `kategori_title2`, `kategori_title3`, `kategori_descr2`, `kategori_descr3`, `kategori_keyword2`, `kategori_keyword3`) VALUES
(2, 'Blog Kategori 2', 2, 'Blog Kategori 2', 'Blog Kategori 2', 'Blog Kategori 2', 'Blog Category 2', 'Категория блога 2', 'Blog Category 2', 'Категория блога 2', 'Blog Category 2', 'Категория блога 2', 'Blog Category 2', 'Категория блога 2 '),
(3, 'Blog Kategori 1', 1, 'Blog Kategori 1', 'Blog Kategori 1', 'Blog Kategori 1', 'Blog Category 1', 'Категория блога 1', 'Blog Category 1', 'Категория блога 1', 'Blog Category 1', 'Категория блога 1', 'Blog Category 1', 'Категория блога 1'),
(5, 'Blog Kategori 3', 3, 'Blog Kategori 3', 'Blog Kategori 3', 'Blog Kategori 3', 'Blog Category 3', 'Категория блога 3', 'Blog Category 3', 'Категория блога 3', 'Blog Category 3', 'Категория блога 3', 'Blog Category 3', 'Категория блога 3');

-- --------------------------------------------------------

--
-- Table structure for table `kategorilerp`
--

CREATE TABLE `kategorilerp` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_sira` int(11) NOT NULL,
  `kategori_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kategorilerp`
--

INSERT INTO `kategorilerp` (`kategori_id`, `kategori_ad`, `kategori_sira`, `kategori_title`, `kategori_descr`, `kategori_keyword`) VALUES
(1, 'Yatak Odasıp', 1, 'Deneme', 'Description', 'Keywords'),
(2, 'Yemek Odası', 2, '', '', ''),
(3, 'KURUMSAL12', 3, 'Klimaa', 'Klima', 'Klima');

-- --------------------------------------------------------

--
-- Table structure for table `kullanici`
--

CREATE TABLE `kullanici` (
  `kullanici_id` int(11) NOT NULL,
  `kullanici_adi` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_pass` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_adsoyad` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `kullanici_resim` varchar(500) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `kullanici`
--

INSERT INTO `kullanici` (`kullanici_id`, `kullanici_adi`, `kullanici_pass`, `kullanici_adsoyad`, `kullanici_resim`) VALUES
(0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Scout Teknoloji', 'assets/img/genel/27690.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mail`
--

CREATE TABLE `mail` (
  `mail_id` int(11) NOT NULL,
  `mail_user` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mail_host` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mail_port` int(250) NOT NULL,
  `mail_pass` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `mail_secure` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mail_sender` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mail_name` longtext COLLATE utf8_turkish_ci NOT NULL,
  `mail_bildirim` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `mail`
--

INSERT INTO `mail` (`mail_id`, `mail_user`, `mail_host`, `mail_port`, `mail_pass`, `mail_secure`, `mail_sender`, `mail_name`, `mail_bildirim`) VALUES
(0, '', '', 0, '', 'ssl', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `markalar`
--

CREATE TABLE `markalar` (
  `hizmet_id` int(11) NOT NULL,
  `hizmet_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_icerik` longtext COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_icon` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `hizmet_vitrin` varchar(255) COLLATE utf8_turkish_ci NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `markalar`
--

INSERT INTO `markalar` (`hizmet_id`, `hizmet_baslik`, `hizmet_icerik`, `hizmet_resim`, `hizmet_icon`, `hizmet_title`, `hizmet_descr`, `hizmet_keyword`, `hizmet_vitrin`) VALUES
(1, 'Maktek Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/3037931371.jpg', '', 'Maktek Kombi Servisi', 'Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa', 'Maktek Kombi Servisi', ''),
(11, 'Baykan Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2906928423.jpg', '', 'Baykan Kombi Servisi', 'Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus.', 'Baykan Kombi Servisi', ''),
(12, 'Alarko Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2611229008.jpg', '', 'Alarko Kombi Servisi', 'Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus.', 'Alarko Kombi Servisi', ''),
(37, 'İmmergas Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/3037931371.jpg', '', 'İmmergas Kombi Servisi', 'Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa', 'Maktek Kombi Servisi', ''),
(38, 'Ferroli Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2906928423.jpg', '', 'Ferroli Kombi Servisi', 'Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus.', 'Ferroli Kombi Servisi', ''),
(39, 'Eca Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2611229008.jpg', '', 'Eca Kombi Servisi', 'Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus.', 'Eca Kombi Servisi', ''),
(40, 'Beko Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/3037931371.jpg', '', 'Beko Kombi Servisi', 'Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa', 'Beko Kombi Servisi', ''),
(41, 'Protherm Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2906928423.jpg', '', 'Protherm Kombi Servisi', 'Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus.', 'Protherm Kombi Servisi', ''),
(42, 'Demirdöküm Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2611229008.jpg', '', 'Demirdöküm Kombi Servisi', 'Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus.', 'Demirdöküm Kombi Servisi', ''),
(43, 'Bosch Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/3037931371.jpg', '', 'Bosch Kombi Servisi', 'Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa', 'Bosch Kombi Servisi', ''),
(44, 'Viessmann Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2906928423.jpg', '', 'Viessmann Kombi Servisi', 'Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus.', 'Viessmann Kombi Servisi', ''),
(45, 'Buderus Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2611229008.jpg', '', 'Buderus Kombi Servisi', 'Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus.', 'Buderus Kombi Servisi', ''),
(46, 'Vaillant Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2611229008.jpg', '', 'Vaillant Kombi Servisi', 'Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus.', 'Vaillant Kombi Servisi', '');
INSERT INTO `markalar` (`hizmet_id`, `hizmet_baslik`, `hizmet_icerik`, `hizmet_resim`, `hizmet_icon`, `hizmet_title`, `hizmet_descr`, `hizmet_keyword`, `hizmet_vitrin`) VALUES
(47, 'Aeg Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2906928423.jpg', '', 'Aeg Kombi Servisi', 'Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus.', 'Aeg Kombi Servisi', ''),
(48, 'Airfel Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2611229008.jpg', '', 'Airfel Kombi Servisi', 'Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus.', 'Airfel Kombi Servisi', ''),
(49, 'Ariston Kombi Servisi', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin rutrum sem ut tellus accumsan, eget ornare urna rutrum. Aenean mattis, tellus et sodales faucibus, diam mi imperdiet nulla, sit amet elementum dui dui facilisis nisi. Duis elementum, eros ac vestibulum tempus, velit justo ultricies leo, sed sagittis nunc diam eu urna. Donec luctus velit arcu, vel tempor nibh consectetur non. Sed fringilla lectus vitae ipsum varius rhoncus. Ut accumsan congue hendrerit. Sed venenatis pulvinar ex at tincidunt.</p>\r\n\r\n<p>Aliquam elementum libero quis mauris vulputate, ac dapibus sem accumsan. Vivamus in porttitor enim. Aliquam eu sapien in felis cursus condimentum. Fusce non malesuada enim. Integer rutrum, leo et blandit iaculis, justo nibh eleifend massa, eu aliquet mi libero in velit. Aenean vestibulum metus nec diam iaculis, vel egestas orci vestibulum. Pellentesque massa leo, maximus id aliquet luctus, tempor ac tellus. Quisque in commodo tortor. Vivamus aliquet mi placerat mattis sagittis. Ut semper augue a lectus dapibus, eget ultrices orci gravida. Mauris nibh ante, iaculis vitae orci eu, suscipit pretium nisl. Vivamus nulla leo, imperdiet nec arcu sit amet, placerat fringilla sem. Phasellus id metus non felis lacinia luctus in vitae ipsum. Cras non velit vel risus bibendum mollis nec eget quam. Aenean cursus elit nec mi luctus molestie.</p>\r\n\r\n<p>Nunc eget accumsan tellus. Phasellus in libero in ante viverra malesuada. Proin a commodo quam, vitae tincidunt sapien. Fusce id mi a dui varius convallis eu sed enim. In tempus est sit amet sapien pellentesque dapibus. Vestibulum sem neque, viverra sed vestibulum vel, tincidunt dignissim dolor. In eu bibendum mi. Aenean scelerisque libero sit amet iaculis convallis. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur tincidunt vehicula enim, quis pretium ante egestas ut. Donec nec vulputate tortor. Donec felis leo, tincidunt et tellus rutrum, fermentum consectetur nisl. Nunc sodales dolor eu massa condimentum hendrerit. Suspendisse interdum pretium odio id laoreet.</p>\r\n\r\n<p>Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus. Mauris posuere lectus eu lectus porttitor luctus. Nulla magna diam, commodo nec sagittis a, mollis non dolor. Nunc eleifend, nunc vitae fermentum sollicitudin, mi ante facilisis leo, in varius lectus eros lacinia urna. Morbi lobortis facilisis tellus. Nulla sollicitudin massa vitae libero faucibus sollicitudin. Vestibulum varius sit amet libero in vestibulum.</p>\r\n\r\n<p>Mauris lobortis non magna sed finibus. Mauris facilisis, leo quis cursus dignissim, arcu velit egestas massa, sit amet molestie sapien mi a odio. Vivamus nulla ipsum, fermentum ut ullamcorper non, tristique eu est. Suspendisse suscipit tellus lacus, sed laoreet tortor luctus eu. Phasellus ultricies arcu at viverra lobortis. Suspendisse potenti. Maecenas et consequat ex. Vivamus mollis nulla in lorem accumsan, aliquam congue urna vestibulum. Vestibulum pellentesque turpis tempus orci gravida semper. Fusce pretium molestie vulputate. Nam sit amet dolor et est dapibus molestie. Fusce fringilla porttitor orci sed volutpat. Pellentesque semper arcu eget felis gravida blandit. Sed nec porttitor arcu.</p>\r\n', 'assets/img/hizmetler/2611229008.jpg', '', 'Ariston Kombi Servisi', 'Vivamus iaculis dignissim massa, a scelerisque urna tristique in. Nunc ut diam non lectus feugiat efficitur vel eget lacus.', 'Ariston Kombi Servisi', '');

-- --------------------------------------------------------

--
-- Table structure for table `mesajlar`
--

CREATE TABLE `mesajlar` (
  `mesaj_id` int(11) NOT NULL,
  `mesaj_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `mesaj_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj_tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `mesaj_icerik` longtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `mesajlar`
--

INSERT INTO `mesajlar` (`mesaj_id`, `mesaj_tarih`, `mesaj_ad`, `mesaj_tel`, `mesaj_mail`, `mesaj_icerik`) VALUES
(11, '2018-01-17 13:57:10', 'Kemal', '0546 667 6703', 'bilgi@scoutteknoloji.com', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam auctor dignissim arcu, eu scelerisque orci finibus vel. Suspendisse eget consectetur justo, non efficitur quam. Pellentesque lacinia id est eget lacinia. Phasellus ut sem et mi consectetur maximus. Etiam pharetra quam in nibh faucibus, at venenatis mi elementum. Nullam bibendum ultrices leo ut vehicula. Phasellus id turpis turpis. Integer scelerisque ac massa a vulputate.');

-- --------------------------------------------------------

--
-- Table structure for table `meta`
--

CREATE TABLE `meta` (
  `meta_id` int(11) NOT NULL,
  `meta_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `meta_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `meta`
--

INSERT INTO `meta` (`meta_id`, `meta_ad`, `meta_title`, `meta_descr`, `meta_keyword`) VALUES
(1, 'Araçlar', 'Araçlar', 'Araçlar Açıklama', 'Araçlar Keywords'),
(4, 'Blog', 'Blog', 'Blog Açıklama', 'Blog Keywords'),
(6, 'Resim Galerisi', 'Resim Galerisi', 'Resim Galerisi Açıklama', 'Resim Galerisi Keywords'),
(7, 'Video Galerisi', 'Video Galerisi', 'Video Galerisi Açıklama', 'Video Galerisi Keywords'),
(8, 'İletişim', 'İletişim', 'İletişim Açıklama', 'İletişim Keywords'),
(11, 'Site Ana Sayfa Meta ', 'ALİ OSMAN OTO', 'ALİ OSMAN OTO Description', 'ALİ OSMAN OTO Keyword'),
(12, 'Rezervasyon Meta ', 'ALİ OSMAN OTO', 'ALİ OSMAN OTO Description', 'ALİ OSMAN OTO Keyword');

-- --------------------------------------------------------

--
-- Table structure for table `meta2`
--

CREATE TABLE `meta2` (
  `meta_id` int(11) NOT NULL,
  `meta_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `meta_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `meta2`
--

INSERT INTO `meta2` (`meta_id`, `meta_ad`, `meta_title`, `meta_descr`, `meta_keyword`) VALUES
(1, 'Araçlar', 'en Odalar Title', 'Odalar Açıklama', 'Odalar Keywords'),
(4, 'Blog', 'en Blog Title', 'Blog Açıklama', 'Blog Keywords'),
(6, 'Resim Galerisi', 'en Resim Galerisi Title', 'Resim Galerisi Açıklama', 'Resim Galerisi Keywords'),
(7, 'Video Galerisi', 'en Video Galerisi Title', 'Video Galerisi Açıklama', 'Video Galerisi Keywords'),
(8, 'İletişim', 'en İletişim Title', 'İletişim Açıklama', 'İletişim Keywords'),
(11, 'Site Ana Sayfa Meta ', 'en Yönetim Panelli Çok dil & Otel & Pansiyon SCRİPTİ', 'Yönetim Panelli Çok dil & Otel & Pansiyon SCRİPTİ Description', 'Yönetim Panelli Çok dil & Otel & Pansiyon SCRİPTİ Keyword'),
(12, 'Rezervasyon Meta ', 'en  Rezervasyon Yönetim Panelli Çok dil & Otel & Pansiyon SCRİPTİ Title', ' Rezervasyon Yönetim Panelli Çok dil & Otel & Pansiyon SCRİPTİ Description', ' Rezervasyon Yönetim Panelli Çok dil & Otel & Pansiyon SCRİPTİ Keyword');

-- --------------------------------------------------------

--
-- Table structure for table `meta3`
--

CREATE TABLE `meta3` (
  `meta_id` int(11) NOT NULL,
  `meta_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `meta_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `meta_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `meta_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `meta3`
--

INSERT INTO `meta3` (`meta_id`, `meta_ad`, `meta_title`, `meta_descr`, `meta_keyword`) VALUES
(1, 'Odalar', 'gr Odalar Title', 'Odalar Açıklama', 'Odalar Keywords'),
(4, 'Blog', 'gr Blog Title', 'Blog Açıklama', 'Blog Keywords'),
(6, 'Resim Galerisi', 'gr Resim Galerisi Title', 'Resim Galerisi Açıklama', 'Resim Galerisi Keywords'),
(7, 'Video Galerisi', 'gr Video Galerisi Title', 'Video Galerisi Açıklama', 'Video Galerisi Keywords'),
(8, 'İletişim', 'gr İletişim Title', 'İletişim Açıklama', 'İletişim Keywords'),
(11, 'Site Ana Sayfa Meta ', ' gr Yönetim Panelli Çok dil & Otel & Pansiyon SCRİPTİ', 'Yönetim Panelli Çok dil & Otel & Pansiyon SCRİPTİ Description', 'Yönetim Panelli Çok dil & Otel & Pansiyon SCRİPTİ Keyword'),
(12, 'Rezervasyon Meta ', 'gr Rezervasyon Yönetim Panelli Çok dil & Otel & Pansiyon SCRİPTİ Title', ' Rezervasyon Yönetim Panelli Çok dil & Otel & Pansiyon SCRİPTİ Description', ' Rezervasyon Yönetim Panelli Çok dil & Otel & Pansiyon SCRİPTİ Keyword');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `motor_id` int(11) NOT NULL,
  `motor_analitik` longtext COLLATE utf8_turkish_ci NOT NULL,
  `motor_metrika` longtext COLLATE utf8_turkish_ci NOT NULL,
  `motor_gonay` longtext COLLATE utf8_turkish_ci NOT NULL,
  `motor_yonay` longtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`motor_id`, `motor_analitik`, `motor_metrika`, `motor_gonay`, `motor_yonay`) VALUES
(1, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `odeme`
--

CREATE TABLE `odeme` (
  `odeme_id` int(11) NOT NULL,
  `odeme_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `odeme_durum` int(11) NOT NULL,
  `odeme_not` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `odeme`
--

INSERT INTO `odeme` (`odeme_id`, `odeme_adi`, `odeme_durum`, `odeme_not`) VALUES
(1, 'Havale ile Öde', 1, 'Ödeme işlemi sırasında lütfen sipariş numaranızı belirtiniz.'),
(2, 'Kapıda Öde', 1, 'Kapıda İster Kredi kartı ister nakit ödeyebilirsiniz.');

-- --------------------------------------------------------

--
-- Table structure for table `omenu`
--

CREATE TABLE `omenu` (
  `omenu_id` int(11) NOT NULL,
  `omenu_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `omenu_ust` int(11) NOT NULL DEFAULT 0,
  `omenu_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `omenu_sira` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `omenu_durum` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `omenu`
--

INSERT INTO `omenu` (`omenu_id`, `omenu_ad`, `omenu_ust`, `omenu_link`, `omenu_sira`, `omenu_durum`) VALUES
(11, 'BLOG', 0, 'blog', '7', 0),
(16, 'KURUMSAL', 0, '#', '2', 16),
(18, 'Misyonumuz', 16, 'sayfa-misyon-2', '2', 16),
(20, 'Kalite Politikamız', 16, 'sayfa-kalite-politikamiz-4', '4', 16),
(30, 'İLETİŞİM', 0, 'iletisim', '8', 0),
(31, 'Vizyonumuz', 16, 'sayfa-vizyonumuz-3', '3', 16),
(37, 'MEDYA', 0, '#', '6', 37),
(38, 'Resim Galerisi', 37, 'resim-galerisi', '1', 37),
(39, 'Video Galerisi', 37, 'video-galerisi', '2', 37),
(44, 'ANASAYFA', 0, 'http://aliosmanoto.com/', '1', 0),
(45, 'Hakkımızda', 16, 'sayfa-hakkimizda-1', '1', 16),
(52, 'ARAÇLARIMIZ', 0, 'odalar', '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `omenu2`
--

CREATE TABLE `omenu2` (
  `omenu_id` int(11) NOT NULL,
  `omenu_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `omenu_ust` int(11) NOT NULL DEFAULT 0,
  `omenu_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `omenu_sira` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `omenu_durum` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `omenu2`
--

INSERT INTO `omenu2` (`omenu_id`, `omenu_ad`, `omenu_ust`, `omenu_link`, `omenu_sira`, `omenu_durum`) VALUES
(11, 'Blog', 0, 'blog', '7', 0),
(16, 'Corporate ', 0, '#', '2', 16),
(18, 'Our mission', 16, 'sayfa-our-mission-2', '2', 16),
(20, 'Our quality policy', 16, 'sayfa-kalite-politikamiz-4', '4', 16),
(30, 'Contact', 0, 'iletisim', '8', 0),
(31, 'Our vision', 16, 'sayfa-vizyonumuz-3', '3', 16),
(37, 'Media', 0, '#', '6', 37),
(38, 'Photo Gallery', 37, 'resim-galerisi', '1', 37),
(39, 'Video Gallery', 37, 'video-galerisi', '2', 37),
(44, 'Home Page', 0, 'https://www.scoutteknoloji.com/otel/', '1', 0),
(45, 'About us', 16, 'sayfa-about-us-1', '1', 16),
(52, 'Rooms', 0, 'odalar', '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `omenu3`
--

CREATE TABLE `omenu3` (
  `omenu_id` int(11) NOT NULL,
  `omenu_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `omenu_ust` int(11) NOT NULL DEFAULT 0,
  `omenu_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `omenu_sira` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `omenu_durum` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `omenu3`
--

INSERT INTO `omenu3` (`omenu_id`, `omenu_ad`, `omenu_ust`, `omenu_link`, `omenu_sira`, `omenu_durum`) VALUES
(11, 'БЛОГ', 0, 'blog', '7', 0),
(16, 'КОРПОРАТИВНЫЙ', 0, '#', '2', 16),
(18, 'наша миссия', 16, 'sayfa-misyonumuz-2', '2', 16),
(20, 'Наша политика качества', 16, 'sayfa-kalite-politikamiz-4', '4', 16),
(30, 'Связаться с нами', 0, 'iletisim', '8', 0),
(31, 'наше видение', 16, 'sayfa-vizyonumuz-3', '3', 16),
(37, 'галерея', 0, '#', '6', 37),
(38, 'Фотогалерея', 37, 'resim-galerisi', '1', 37),
(39, 'Видео Галерея', 37, 'video-galerisi', '2', 37),
(45, 'О компании', 16, 'sayfa-hakkimizda-1', '1', 16),
(52, 'Наши номера', 0, 'odalar', '3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `projeler`
--

CREATE TABLE `projeler` (
  `proje_id` int(11) NOT NULL,
  `proje_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `proje_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `proje_icerik` varchar(2999) COLLATE utf8_turkish_ci NOT NULL,
  `proje_kategori` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `proje_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `proje_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `proje_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `proje_vitrin` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `projeler`
--

INSERT INTO `projeler` (`proje_id`, `proje_baslik`, `proje_resim`, `proje_icerik`, `proje_kategori`, `proje_title`, `proje_descr`, `proje_keyword`, `proje_vitrin`) VALUES
(113, 'Meltem Cumalı', 'assets/img/projeler/2445031093.jpg', '<p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><br></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>', 'Makyaj Uzmanı', 'Meltem Cumalı', 'Meltem Cumalı', 'Meltem Cumalı', 1),
(120, 'Yasemin Çınar', 'assets/img/projeler/2035731833.jpg', '<p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span></p><p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><br></p><p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><br></p>', 'Profesyonel Masör', 'Yasemin Çınar', 'Yasemin Çınar', 'Yasemin Çınar', 1),
(121, 'Dr. Talat Subaşı', 'assets/img/projeler/2430420830.jpg', '<p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><br></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>', 'Diyabet Uzmanı', 'Dr. Talat Subaşı', 'Dr. Talat Subaşı', 'Dr. Talat Subaşı', 1),
(122, 'Dr. Neslihan Dal', 'assets/img/projeler/2182631025.jpg', '<p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><br></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>', 'Uzman Diyetisyen', 'Dr. Neslihan Dal', 'Dr. Neslihan Dal', 'Dr. Neslihan Dal', 1),
(123, 'Dr. Pelin Dayanıklı', 'assets/img/projeler/3013121784.jpg', '<p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><br></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>', 'Uzman Diyetisyen', 'Uzman Diyetisyen', 'Uzman Diyetisyen', 'Uzman Diyetisyen', 0),
(124, 'Melisa Kaçak', 'assets/img/projeler/2767524476.jpg', '<p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><br></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>', 'Makyaj Uzmanı', 'Melisa Kaçak', 'Melisa Kaçak', 'Melisa Kaçak', 0),
(125, 'Dr. Yeliz Danışman', 'assets/img/projeler/2716028273.jpg', '<p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><br></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>', 'Estettik Uzmanı', 'Dr. Yeliz Danışman', 'Dr. Yeliz Danışman', 'Dr. Yeliz Danışman', 0),
(126, 'Ahmet Doğru', 'assets/img/projeler/2851220101.jpg', '<p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><br></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p><p><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla consequat ipsum quis libero ornare, sit amet ullamcorper justo vehicula. Phasellus non interdum risus. Curabitur quis neque enim. Aliquam a ante vitae libero condimentum fringilla quis at elit. Donec mollis pharetra felis vitae egestas. Sed diam eros, tempor luctus ante nec, accumsan mattis ligula. Phasellus ullamcorper enim ac erat faucibus, ac sodales mi placerat. Aenean aliquet malesuada euismod. Maecenas placerat dui at malesuada vestibulum. Quisque ut arcu ac est sollicitudin pharetra. Sed id pellentesque odio. Aenean ornare massa metus, eget pellentesque velit rutrum et.</span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span><span open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"><br></span></p>', 'Epilasyon Uzmanı', 'Ahmet Doğru', 'Ahmet Doğru', 'Ahmet Doğru', 0);

-- --------------------------------------------------------

--
-- Table structure for table `randevu`
--

CREATE TABLE `randevu` (
  `randevu_id` int(11) NOT NULL,
  `randevu_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `randevu_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `randevu_oda` int(11) DEFAULT NULL,
  `randevu_giris` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `randevu_donus` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `randevu_yetiskin` int(11) DEFAULT NULL,
  `randevu_cocuk` int(11) DEFAULT NULL,
  `randevu_gunfarki` int(11) DEFAULT NULL,
  `randevu_fiyat` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `randevu`
--

INSERT INTO `randevu` (`randevu_id`, `randevu_tarih`, `randevu_ad`, `randevu_tel`, `randevu_mail`, `randevu_oda`, `randevu_giris`, `randevu_donus`, `randevu_yetiskin`, `randevu_cocuk`, `randevu_gunfarki`, `randevu_fiyat`) VALUES
(18, '2019-11-12 13:43:03', 'Ozan Öz', '05466676703', '2019-11-13 / 16:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, '2019-11-12 13:44:08', 'Ozan Öz', '05466676703', '2019-11-13 / 16:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, '2019-11-27 18:41:22', 'Ozan Öz', 'sfg', 'arars@as.co', 65, '11/22/2019', '12/04/2019', 1, 0, 12, 22),
(21, '2019-11-29 12:59:27', 'Ozan Öz', '05466676703', 'arars@as.co', 65, '11/29/2019', '11/29/2019', 3, 1, 0, 0),
(22, '2019-11-29 13:08:12', 'Ozan Öz', '05466676703', 'arars@as.co', 65, '11/26/2019', '11/27/2019', 3, 2, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `referanslar`
--

CREATE TABLE `referanslar` (
  `referans_id` int(11) NOT NULL,
  `referans_resim1` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `referans_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `referans_kategori` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `referans_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `referanslar`
--

INSERT INTO `referanslar` (`referans_id`, `referans_resim1`, `referans_adi`, `referans_kategori`, `referans_link`) VALUES
(11, 'assets/img/referanslar/2560025034.jpg', 'Firma Adı', 'Sektörü', 'https://www.scoutteknoloji.com/'),
(12, 'assets/img/referanslar/2684524547.jpg', 'Firma Adı', 'Sektörü', 'https://www.scoutteknoloji.com/'),
(13, 'assets/img/referanslar/2340927523.jpg', 'Firma Adı', 'Sektörü', 'https://www.scoutteknoloji.com/'),
(14, 'assets/img/referanslar/2813031531.jpg', 'Firma Adı', 'Sektörü', 'https://www.scoutteknoloji.com/'),
(15, 'assets/img/referanslar/2314420373.jpg', 'Firma Adı', 'Sektörü', 'https://www.scoutteknoloji.com/'),
(16, 'assets/img/referanslar/3072327938.jpg', 'Firma Adı', 'Sektörü', 'https://www.scoutteknoloji.com/'),
(18, 'assets/img/referanslar/2122329594.jpg', 'Firma Adı', 'Sektörü', 'https://www.scoutteknoloji.com/'),
(19, 'assets/img/referanslar/2610521312.jpg', 'Firma Adı', 'Sektörü', 'https://www.scoutteknoloji.com/');

-- --------------------------------------------------------

--
-- Table structure for table `resim`
--

CREATE TABLE `resim` (
  `resim_id` int(11) NOT NULL,
  `resim_urun` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `resim`
--

INSERT INTO `resim` (`resim_id`, `resim_urun`, `resim_link`) VALUES
(93, '79', 'assets/img/urunler/2269530310.jpg'),
(94, '79', 'assets/img/urunler/2911731590.jpg'),
(95, '79', 'assets/img/urunler/2446721303.jpg'),
(96, '79', 'assets/img/urunler/3177326022.jpg'),
(100, '78', 'assets/img/urunler/2269530310.jpg'),
(101, '78', 'assets/img/urunler/2911731590.jpg'),
(102, '78', 'assets/img/urunler/2446721303.jpg'),
(103, '78', 'assets/img/urunler/3177326022.jpg'),
(107, '77', 'assets/img/urunler/2269530310.jpg'),
(108, '77', 'assets/img/urunler/2911731590.jpg'),
(109, '77', 'assets/img/urunler/2446721303.jpg'),
(110, '77', 'assets/img/urunler/3177326022.jpg'),
(111, '76', 'assets/img/urunler/2269530310.jpg'),
(112, '76', 'assets/img/urunler/2911731590.jpg'),
(113, '76', 'assets/img/urunler/2446721303.jpg'),
(114, '76', 'assets/img/urunler/3177326022.jpg'),
(115, '75', 'assets/img/urunler/2269530310.jpg'),
(116, '75', 'assets/img/urunler/2911731590.jpg'),
(117, '75', 'assets/img/urunler/2446721303.jpg'),
(118, '75', 'assets/img/urunler/3177326022.jpg'),
(119, '74', 'assets/img/urunler/2269530310.jpg'),
(120, '74', 'assets/img/urunler/2911731590.jpg'),
(121, '74', 'assets/img/urunler/2446721303.jpg'),
(122, '74', 'assets/img/urunler/3177326022.jpg'),
(123, '73', 'assets/img/urunler/2269530310.jpg'),
(124, '73', 'assets/img/urunler/2911731590.jpg'),
(125, '73', 'assets/img/urunler/2446721303.jpg'),
(126, '73', 'assets/img/urunler/3177326022.jpg'),
(127, '72', 'assets/img/urunler/2269530310.jpg'),
(128, '72', 'assets/img/urunler/2911731590.jpg'),
(129, '72', 'assets/img/urunler/2446721303.jpg'),
(130, '72', 'assets/img/urunler/3177326022.jpg'),
(131, '71', 'assets/img/urunler/2269530310.jpg'),
(132, '71', 'assets/img/urunler/2911731590.jpg'),
(133, '71', 'assets/img/urunler/2446721303.jpg'),
(134, '71', 'assets/img/urunler/3177326022.jpg'),
(135, '70', 'assets/img/urunler/2269530310.jpg'),
(136, '70', 'assets/img/urunler/2911731590.jpg'),
(137, '70', 'assets/img/urunler/2446721303.jpg'),
(138, '70', 'assets/img/urunler/3177326022.jpg'),
(139, '69', 'assets/img/urunler/2269530310.jpg'),
(140, '69', 'assets/img/urunler/2911731590.jpg'),
(141, '69', 'assets/img/urunler/2446721303.jpg'),
(142, '69', 'assets/img/urunler/3177326022.jpg'),
(143, '68', 'assets/img/urunler/2269530310.jpg'),
(144, '68', 'assets/img/urunler/2911731590.jpg'),
(145, '68', 'assets/img/urunler/2446721303.jpg'),
(146, '68', 'assets/img/urunler/3177326022.jpg'),
(147, '67', 'assets/img/urunler/2269530310.jpg'),
(148, '67', 'assets/img/urunler/2911731590.jpg'),
(149, '67', 'assets/img/urunler/2446721303.jpg'),
(150, '67', 'assets/img/urunler/3177326022.jpg'),
(151, '66', 'assets/img/urunler/2269530310.jpg'),
(152, '66', 'assets/img/urunler/2911731590.jpg'),
(153, '66', 'assets/img/urunler/2446721303.jpg'),
(154, '66', 'assets/img/urunler/3177326022.jpg'),
(156, '74', 'assets/img/urunler/2033127040.jpg'),
(164, '86', 'assets/img/urunler/3014329062.jpg'),
(184, '89', 'assets/img/urunler/2682121992.jpg'),
(185, '89', 'assets/img/urunler/3094830322.jpg'),
(186, '89', 'assets/img/urunler/2566927288.jpg'),
(187, '89', 'assets/img/urunler/3174729296.jpg'),
(188, '89', 'assets/img/urunler/2227327678.jpg'),
(201, '83', 'assets/img/urunler/3155822801.jpg'),
(204, '84', 'assets/img/urunler/2877122260.jpg'),
(207, '85', 'assets/img/urunler/3044331339.jpg'),
(210, '87', 'assets/img/urunler/2634422440.jpg'),
(213, '88', 'assets/img/urunler/2344229241.jpg'),
(222, '4', 'assets/img/urunler/2691020629.jpg'),
(241, '82', 'assets/img/urunler/2722724626.jpg'),
(242, '82', 'assets/img/urunler/2549028908.jpg'),
(243, '82', 'assets/img/urunler/2615628241.jpg'),
(244, '82', 'assets/img/urunler/2364631309.jpg'),
(245, '83', 'assets/img/urunler/2718229046.jpg'),
(246, '83', 'assets/img/urunler/2076626186.jpg'),
(247, '83', 'assets/img/urunler/2375622003.jpg'),
(248, '83', 'assets/img/urunler/2231520218.jpg'),
(249, '84', 'assets/img/urunler/2360720355.jpg'),
(250, '84', 'assets/img/urunler/2446726474.jpg'),
(251, '84', 'assets/img/urunler/2452926442.jpg'),
(252, '84', 'assets/img/urunler/2227930646.jpg'),
(267, '85', 'assets/img/urunler/2832421512.jpg'),
(268, '85', 'assets/img/urunler/3012522159.jpg'),
(269, '85', 'assets/img/urunler/2808223032.jpg'),
(270, '85', 'assets/img/urunler/3074824989.jpg'),
(271, '86', 'assets/img/urunler/2660526608.jpg'),
(272, '86', 'assets/img/urunler/2575322433.jpg'),
(273, '86', 'assets/img/urunler/2440531579.jpg'),
(274, '86', 'assets/img/urunler/2364830510.jpg'),
(275, '87', 'assets/img/urunler/3083823476.jpg'),
(276, '87', 'assets/img/urunler/2227823988.jpg'),
(277, '87', 'assets/img/urunler/3180124617.jpg'),
(278, '87', 'assets/img/urunler/2820122726.jpg'),
(281, '88', 'assets/img/urunler/2312523820.jpg'),
(282, '88', 'assets/img/urunler/2879726602.jpg'),
(283, '88', 'assets/img/urunler/3078620438.jpg'),
(284, '88', 'assets/img/urunler/3052629658.jpg'),
(285, '89', 'assets/img/urunler/2146222964.jpg'),
(286, '89', 'assets/img/urunler/2590227095.jpg'),
(287, '89', 'assets/img/urunler/2171827570.jpg'),
(288, '89', 'assets/img/urunler/2851127994.jpg'),
(304, '65', 'assets/img/urunler/3023125912.jpg'),
(306, '65', 'assets/img/urunler/2856730384.jpg'),
(307, '80', 'assets/img/urunler/3020828533.jpg'),
(309, '80', 'assets/img/urunler/2813621963.jpg'),
(310, '80', 'assets/img/urunler/2872224232.jpg'),
(311, '81', 'assets/img/urunler/2887422490.jpg'),
(312, '81', 'assets/img/urunler/2019529243.jpg'),
(313, '81', 'assets/img/urunler/2344631106.jpg'),
(314, '81', 'assets/img/urunler/2011721770.jpg'),
(315, '81', 'assets/img/urunler/2310430205.jpg'),
(316, '90', 'assets/img/urunler/3137330709.jpg'),
(317, '90', 'assets/img/urunler/2493823839.jpg'),
(318, '90', 'assets/img/urunler/2710531245.jpg'),
(319, '90', 'assets/img/urunler/3038622023.jpg'),
(320, '90', 'assets/img/urunler/2751921737.jpg'),
(321, '91', 'assets/img/urunler/2554231289.jpg'),
(322, '91', 'assets/img/urunler/2504127720.jpg'),
(323, '91', 'assets/img/urunler/2154730812.jpg'),
(324, '91', 'assets/img/urunler/2363428067.jpg'),
(325, '91', 'assets/img/urunler/2928327012.jpg'),
(326, '94', 'assets/img/urunler/2038529667.jpg'),
(327, '94', 'assets/img/urunler/2278920201.jpg'),
(328, '94', 'assets/img/urunler/3051221058.jpg'),
(329, '94', 'assets/img/urunler/2623325274.jpg'),
(330, '94', 'assets/img/urunler/2606924563.jpg'),
(331, '94', 'assets/img/urunler/3190626332.jpg'),
(332, '94', 'assets/img/urunler/2764825498.jpg'),
(333, '94', 'assets/img/urunler/2927227220.jpg'),
(334, '94', 'assets/img/urunler/3162724060.jpg'),
(335, '94', 'assets/img/urunler/2844827781.jpg'),
(336, '94', 'assets/img/urunler/2020520046.jpg'),
(337, '94', 'assets/img/urunler/3167527636.jpg'),
(339, '94', 'assets/img/urunler/2280130932.jpg'),
(340, '94', 'assets/img/urunler/3134029200.jpg'),
(341, '94', 'assets/img/urunler/3099827268.jpg'),
(342, '94', 'assets/img/urunler/2130028629.jpg'),
(343, '94', 'assets/img/urunler/2797127408.jpg'),
(344, '94', 'assets/img/urunler/2222124624.jpg'),
(345, '94', 'assets/img/urunler/3090921807.jpg'),
(346, '94', 'assets/img/urunler/3103727860.jpg'),
(347, '94', 'assets/img/urunler/2957820079.jpg'),
(348, '94', 'assets/img/urunler/2356431882.jpg'),
(349, '94', 'assets/img/urunler/2507020918.jpg'),
(350, '94', 'assets/img/urunler/2804323416.jpg'),
(351, '94', 'assets/img/urunler/2139824540.jpg'),
(352, '94', 'assets/img/urunler/2767024059.jpg'),
(353, '95', 'assets/img/urunler/2560821154.jpg'),
(354, '95', 'assets/img/urunler/2158324450.jpg'),
(355, '95', 'assets/img/urunler/2184030919.jpg'),
(356, '95', 'assets/img/urunler/3125422911.jpg'),
(357, '95', 'assets/img/urunler/2609930013.jpg'),
(358, '95', 'assets/img/urunler/2464822924.jpg'),
(359, '95', 'assets/img/urunler/2410621139.jpg'),
(360, '95', 'assets/img/urunler/2972120584.jpg'),
(361, '95', 'assets/img/urunler/2590820696.jpg'),
(362, '95', 'assets/img/urunler/3197424992.jpg'),
(363, '95', 'assets/img/urunler/2483822848.jpg'),
(364, '95', 'assets/img/urunler/2537424925.jpg'),
(365, '95', 'assets/img/urunler/2650728660.jpg'),
(366, '95', 'assets/img/urunler/2340723371.jpg'),
(367, '95', 'assets/img/urunler/2204025762.jpg'),
(368, '95', 'assets/img/urunler/3009028955.jpg'),
(369, '95', 'assets/img/urunler/2270422381.jpg'),
(371, '95', 'assets/img/urunler/3042125289.jpg'),
(372, '95', 'assets/img/urunler/2660922378.jpg'),
(373, '95', 'assets/img/urunler/2890623970.jpg'),
(374, '95', 'assets/img/urunler/2537526682.jpg'),
(375, '95', 'assets/img/urunler/2677624906.jpg'),
(376, '96', 'assets/img/urunler/3033324424.jpg'),
(377, '96', 'assets/img/urunler/2520931705.jpg'),
(378, '96', 'assets/img/urunler/2696930780.jpg'),
(379, '96', 'assets/img/urunler/2827128293.jpg'),
(380, '96', 'assets/img/urunler/2770522334.jpg'),
(381, '96', 'assets/img/urunler/2295921592.jpg'),
(382, '96', 'assets/img/urunler/2107523373.jpg'),
(383, '96', 'assets/img/urunler/2997124429.jpg'),
(384, '96', 'assets/img/urunler/2141531737.jpg'),
(385, '96', 'assets/img/urunler/2059020063.jpg'),
(386, '96', 'assets/img/urunler/2309522436.jpg'),
(387, '96', 'assets/img/urunler/2202330813.jpg'),
(388, '96', 'assets/img/urunler/2986031442.jpg'),
(389, '96', 'assets/img/urunler/2334324346.jpg'),
(390, '96', 'assets/img/urunler/2892831684.jpg'),
(391, '96', 'assets/img/urunler/2280529581.jpg'),
(392, '96', 'assets/img/urunler/2932526304.jpg'),
(393, '96', 'assets/img/urunler/2605923442.jpg'),
(394, '96', 'assets/img/urunler/2448721174.jpg'),
(395, '96', 'assets/img/urunler/2871431195.jpg'),
(396, '96', 'assets/img/urunler/2600724419.jpg'),
(397, '97', 'assets/img/urunler/2433825759.jpg'),
(398, '97', 'assets/img/urunler/2878023606.jpg'),
(399, '97', 'assets/img/urunler/3110524988.jpg'),
(400, '97', 'assets/img/urunler/2285125753.jpg'),
(401, '97', 'assets/img/urunler/3022431927.jpg'),
(402, '97', 'assets/img/urunler/2488422902.jpg'),
(403, '97', 'assets/img/urunler/3027324328.jpg'),
(404, '98', 'assets/img/urunler/2325728182.jpg'),
(406, '98', 'assets/img/urunler/2710923772.jpg'),
(407, '98', 'assets/img/urunler/3062127265.jpg'),
(408, '98', 'assets/img/urunler/2507729816.jpg'),
(409, '98', 'assets/img/urunler/2466130330.jpg'),
(411, '98', 'assets/img/urunler/2188222321.jpg'),
(412, '98', 'assets/img/urunler/2014430513.jpg'),
(413, '98', 'assets/img/urunler/3115329852.jpg'),
(414, '98', 'assets/img/urunler/2388828615.jpg'),
(415, '98', 'assets/img/urunler/2318020293.jpg'),
(416, '98', 'assets/img/urunler/2502028826.jpg'),
(417, '98', 'assets/img/urunler/2005531884.jpg'),
(418, '98', 'assets/img/urunler/3190325372.jpg'),
(419, '98', 'assets/img/urunler/2633123603.jpg'),
(420, '98', 'assets/img/urunler/2734627163.jpg'),
(421, '98', 'assets/img/urunler/2618122362.jpg'),
(423, '98', 'assets/img/urunler/2938327481.jpg'),
(424, '98', 'assets/img/urunler/2341824295.jpg'),
(426, '98', 'assets/img/urunler/2779024325.jpg'),
(427, '98', 'assets/img/urunler/2406924691.jpg'),
(428, '98', 'assets/img/urunler/2167021439.jpg'),
(430, '99', 'assets/img/urunler/2848222611.jpg'),
(431, '99', 'assets/img/urunler/2849126576.jpg'),
(432, '99', 'assets/img/urunler/2188625644.jpg'),
(433, '99', 'assets/img/urunler/2963321190.jpg'),
(434, '99', 'assets/img/urunler/2963630872.jpg'),
(435, '99', 'assets/img/urunler/2179031205.jpg'),
(436, '99', 'assets/img/urunler/2689328632.jpg'),
(437, '99', 'assets/img/urunler/2008426226.jpg'),
(438, '99', 'assets/img/urunler/3070431109.jpg'),
(439, '99', 'assets/img/urunler/2019822505.jpg'),
(440, '99', 'assets/img/urunler/2586926482.jpg'),
(441, '99', 'assets/img/urunler/2475220501.jpg'),
(442, '99', 'assets/img/urunler/2535822436.jpg'),
(443, '99', 'assets/img/urunler/3130228673.jpg'),
(444, '99', 'assets/img/urunler/2588425454.jpg'),
(445, '99', 'assets/img/urunler/2522124164.jpg'),
(446, '99', 'assets/img/urunler/2871430161.jpg'),
(447, '99', 'assets/img/urunler/2280022609.jpg'),
(448, '99', 'assets/img/urunler/2079121657.jpg'),
(449, '99', 'assets/img/urunler/2150222072.jpg'),
(450, '99', 'assets/img/urunler/3199020591.jpg'),
(451, '99', 'assets/img/urunler/3172229875.jpg'),
(452, '99', 'assets/img/urunler/2045321059.jpg'),
(453, '99', 'assets/img/urunler/2979229312.jpg'),
(454, '100', 'assets/img/urunler/2972324143.jpg'),
(455, '99', 'assets/img/urunler/2053723771.jpg'),
(456, '99', 'assets/img/urunler/2078426359.jpg'),
(457, '100', 'assets/img/urunler/2699930980.jpg'),
(458, '99', 'assets/img/urunler/2233326493.jpg'),
(460, '99', 'assets/img/urunler/2209620808.jpg'),
(461, '100', 'assets/img/urunler/2883226714.jpg'),
(462, '99', 'assets/img/urunler/2254824721.jpg'),
(463, '100', 'assets/img/urunler/2353923395.jpg'),
(464, '100', 'assets/img/urunler/2452620645.jpg'),
(465, '100', 'assets/img/urunler/2708130095.jpg'),
(466, '100', 'assets/img/urunler/2169929137.jpg'),
(467, '100', 'assets/img/urunler/2230124939.jpg'),
(468, '100', 'assets/img/urunler/2438821578.jpg'),
(469, '100', 'assets/img/urunler/3048121657.jpg'),
(470, '100', 'assets/img/urunler/2862621568.jpg'),
(471, '100', 'assets/img/urunler/2723525609.jpg'),
(472, '100', 'assets/img/urunler/3194320582.jpg'),
(473, '100', 'assets/img/urunler/2128728513.jpg'),
(474, '100', 'assets/img/urunler/2124428357.jpg'),
(475, '100', 'assets/img/urunler/2927523800.jpg'),
(476, '100', 'assets/img/urunler/2540625406.jpg'),
(477, '100', 'assets/img/urunler/2545329286.jpg'),
(478, '100', 'assets/img/urunler/2276722545.jpg'),
(479, '100', 'assets/img/urunler/2207726482.jpg'),
(480, '105', 'assets/img/urunler/2480123309.jpg'),
(481, '105', 'assets/img/urunler/2093721285.jpg'),
(482, '105', 'assets/img/urunler/3182224953.jpg'),
(483, '105', 'assets/img/urunler/2601626007.jpg'),
(484, '105', 'assets/img/urunler/2023630179.jpg'),
(485, '105', 'assets/img/urunler/3086027192.jpg'),
(486, '105', 'assets/img/urunler/3087128822.jpg'),
(487, '105', 'assets/img/urunler/2760129527.jpg'),
(488, '105', 'assets/img/urunler/2396220363.jpg'),
(489, '105', 'assets/img/urunler/2398529257.jpg'),
(490, '105', 'assets/img/urunler/2211322783.jpg'),
(491, '105', 'assets/img/urunler/3159326473.jpg'),
(492, '105', 'assets/img/urunler/2451025696.jpg'),
(493, '105', 'assets/img/urunler/2478126594.jpg'),
(494, '105', 'assets/img/urunler/2845527915.jpg'),
(495, '105', 'assets/img/urunler/2144630540.jpg'),
(496, '105', 'assets/img/urunler/2662629091.jpg'),
(497, '105', 'assets/img/urunler/2149625154.jpg'),
(498, '105', 'assets/img/urunler/2611627463.jpg'),
(500, '105', 'assets/img/urunler/2734925500.jpg'),
(501, '106', 'assets/img/urunler/3162428276.jpg'),
(502, '106', 'assets/img/urunler/2713226090.jpg'),
(503, '106', 'assets/img/urunler/2110225172.jpg'),
(504, '106', 'assets/img/urunler/2551429989.jpg'),
(505, '106', 'assets/img/urunler/2606825348.jpg'),
(506, '106', 'assets/img/urunler/2823725826.jpg'),
(507, '106', 'assets/img/urunler/2275529078.jpg'),
(508, '106', 'assets/img/urunler/2928929434.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resimb`
--

CREATE TABLE `resimb` (
  `resim_id` int(11) NOT NULL,
  `resim_urun` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `resimb`
--

INSERT INTO `resimb` (`resim_id`, `resim_urun`, `resim_link`) VALUES
(76, '27', 'assets/img/blog/2268131566.jpg'),
(77, '27', 'assets/img/blog/2855525629.jpg'),
(78, '27', 'assets/img/blog/2142123251.jpg'),
(79, '27', 'assets/img/blog/2987530445.jpg'),
(80, '26', 'assets/img/blog/3127931612.jpg'),
(81, '26', 'assets/img/blog/3002128707.jpg'),
(82, '26', 'assets/img/blog/3095925599.jpg'),
(83, '26', 'assets/img/blog/2697731417.jpg'),
(84, '25', 'assets/img/blog/3015921215.jpg'),
(85, '25', 'assets/img/blog/2654522269.jpg'),
(86, '25', 'assets/img/blog/2099126866.jpg'),
(87, '25', 'assets/img/blog/3080220060.jpg'),
(88, '24', 'assets/img/blog/3158830347.jpg'),
(89, '24', 'assets/img/blog/2771129661.jpg'),
(90, '24', 'assets/img/blog/3098727736.jpg'),
(91, '24', 'assets/img/blog/2562525646.jpg'),
(92, '23', 'assets/img/blog/3031820164.jpg'),
(93, '23', 'assets/img/blog/2528121726.jpg'),
(94, '23', 'assets/img/blog/2110820287.jpg'),
(95, '23', 'assets/img/blog/2781529747.jpg'),
(96, '22', 'assets/img/blog/2881631256.jpg'),
(97, '22', 'assets/img/blog/2170426022.jpg'),
(98, '22', 'assets/img/blog/2735121587.jpg'),
(99, '22', 'assets/img/blog/2766620665.jpg'),
(100, '21', 'assets/img/blog/3147328393.jpg'),
(101, '21', 'assets/img/blog/2321329980.jpg'),
(102, '21', 'assets/img/blog/2473421863.jpg'),
(103, '21', 'assets/img/blog/2226629277.jpg'),
(104, '20', 'assets/img/blog/2989624885.jpg'),
(105, '20', 'assets/img/blog/2045130051.jpg'),
(106, '20', 'assets/img/blog/2976427310.jpg'),
(107, '20', 'assets/img/blog/2695821091.jpg'),
(108, '28', 'assets/img/blog/2747924455.jpg'),
(109, '28', 'assets/img/blog/2507926605.jpg'),
(110, '28', 'assets/img/blog/2111620973.jpg'),
(111, '28', 'assets/img/blog/2925721562.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resimgaleri`
--

CREATE TABLE `resimgaleri` (
  `resim_id` int(11) NOT NULL,
  `resim_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim_album` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `resimgaleri`
--

INSERT INTO `resimgaleri` (`resim_id`, `resim_baslik`, `resim_link`, `resim_album`) VALUES
(113, 'gallery2.jpg', 'assets/img/galeri/2489729689.jpg', 9),
(114, 'gallery1.jpg', 'assets/img/galeri/2912520695.jpg', 9),
(115, 'gallery3.jpg', 'assets/img/galeri/2340829466.jpg', 9),
(116, 'gallery4.jpg', 'assets/img/galeri/2006429899.jpg', 9),
(117, 'gallery5.jpg', 'assets/img/galeri/2835223095.jpg', 9),
(118, 'gallery6.jpg', 'assets/img/galeri/2579524520.jpg', 9),
(119, 'gallery7.jpg', 'assets/img/galeri/3115020856.jpg', 9),
(120, 'gallery8.jpg', 'assets/img/galeri/2405128310.jpg', 9),
(121, 'gallery1.jpg', 'assets/img/galeri/2272320446.jpg', 10),
(122, 'gallery2.jpg', 'assets/img/galeri/2146831066.jpg', 10),
(123, 'gallery3.jpg', 'assets/img/galeri/2776525818.jpg', 10),
(124, 'gallery4.jpg', 'assets/img/galeri/2915327479.jpg', 10),
(125, 'gallery5.jpg', 'assets/img/galeri/3172324036.jpg', 10),
(126, 'gallery6.jpg', 'assets/img/galeri/3158130004.jpg', 10),
(127, 'gallery7.jpg', 'assets/img/galeri/2686124053.jpg', 10),
(128, 'gallery8.jpg', 'assets/img/galeri/3114423217.jpg', 10),
(129, 'gallery11.jpg', 'assets/img/galeri/3170224949.jpg', 9),
(130, 'gallery12.jpg', 'assets/img/galeri/3130121404.jpg', 10),
(131, '2982920688.jpg', 'assets/img/galeri/2810422790.jpg', 12),
(132, '3008825552.jpg', 'assets/img/galeri/2799830732.jpg', 12),
(133, '3081025813.jpg', 'assets/img/galeri/2195922927.jpg', 12),
(134, '3116321543.jpg', 'assets/img/galeri/2934925890.jpg', 12),
(135, '3118325279.jpg', 'assets/img/galeri/2038429918.jpg', 12),
(136, '3153723713.jpg', 'assets/img/galeri/2310920446.jpg', 12),
(137, '2043030964.jpg', 'assets/img/galeri/2274329287.jpg', 12),
(138, '2106430645.jpg', 'assets/img/galeri/2948528951.jpg', 12),
(139, '2161527385.jpg', 'assets/img/galeri/3132230822.jpg', 12),
(140, '2203423845.jpg', 'assets/img/galeri/2107120915.jpg', 12),
(141, '2248325908.jpg', 'assets/img/galeri/2261021438.jpg', 12),
(142, '2309920673.jpg', 'assets/img/galeri/2615722810.jpg', 12),
(143, '2360627771.jpg', 'assets/img/galeri/3128729616.jpg', 12),
(144, '2402020002.jpg', 'assets/img/galeri/2500623286.jpg', 12),
(145, '2478825373.jpg', 'assets/img/galeri/2849627413.jpg', 12),
(146, '2566126183.jpg', 'assets/img/galeri/2436128565.jpg', 12),
(147, '2568920966.jpg', 'assets/img/galeri/2675925999.jpg', 12),
(148, '2737727609.jpg', 'assets/img/galeri/2954727306.jpg', 12),
(149, '2941631162.jpg', 'assets/img/galeri/2271922413.jpg', 12),
(150, '2737727609.jpg', 'assets/img/galeri/2715320075.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `resimh`
--

CREATE TABLE `resimh` (
  `resim_id` int(11) NOT NULL,
  `resim_urun` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `resimh`
--

INSERT INTO `resimh` (`resim_id`, `resim_urun`, `resim_link`) VALUES
(231, '1', 'assets/img/hizmetler/3099722250.jpg'),
(232, '1', 'assets/img/hizmetler/2381631411.jpg'),
(233, '18', 'assets/img/hizmetler/2549825710.jpg'),
(234, '18', 'assets/img/hizmetler/2003328943.jpg'),
(235, '18', 'assets/img/hizmetler/2189631337.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resimkategori`
--

CREATE TABLE `resimkategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `kategori_vitrin` int(11) NOT NULL,
  `kategori_sira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resimp`
--

CREATE TABLE `resimp` (
  `resim_id` int(11) NOT NULL,
  `resim_urun` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `resimp`
--

INSERT INTO `resimp` (`resim_id`, `resim_urun`, `resim_link`) VALUES
(10, '126', 'assets/img/projeler/2609027216.jpg'),
(11, '126', 'assets/img/projeler/2511421671.jpg'),
(12, '125', 'assets/img/projeler/2753925377.jpg'),
(13, '125', 'assets/img/projeler/2467722238.jpg'),
(14, '124', 'assets/img/projeler/2249323128.jpg'),
(15, '124', 'assets/img/projeler/2482425910.jpg'),
(16, '123', 'assets/img/projeler/2806028514.jpg'),
(17, '123', 'assets/img/projeler/2086627692.jpg'),
(18, '122', 'assets/img/projeler/2668731008.jpg'),
(19, '122', 'assets/img/projeler/2086321520.jpg'),
(20, '121', 'assets/img/projeler/2519325794.jpg'),
(21, '121', 'assets/img/projeler/3147120278.jpg'),
(22, '120', 'assets/img/projeler/3111126148.jpg'),
(23, '120', 'assets/img/projeler/2840427786.jpg'),
(24, '113', 'assets/img/projeler/2954529918.jpg'),
(25, '113', 'assets/img/projeler/2025831328.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `resimy`
--

CREATE TABLE `resimy` (
  `resim_id` int(11) NOT NULL,
  `resim_urun` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `resim_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `resimy`
--

INSERT INTO `resimy` (`resim_id`, `resim_urun`, `resim_link`) VALUES
(1, '126', 'assets/img/projeler/2523024388.jpg'),
(2, '126', 'assets/img/projeler/2009322739.jpg'),
(3, '126', 'assets/img/projeler/3195328707.jpg'),
(7, '4', 'assets/img/urunler/2992620431.jpg'),
(8, '4', 'assets/img/urunler/2971131915.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sayfalar`
--

CREATE TABLE `sayfalar` (
  `sayfa_id` int(11) NOT NULL,
  `sayfa_baslik` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_icerik` longtext COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_menu` int(11) NOT NULL,
  `sayfa_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sayfa_baslik2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `sayfa_baslik3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `sayfa_icerik2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `sayfa_icerik3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `sayfa_title2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `sayfa_title3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `sayfa_descr2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `sayfa_descr3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `sayfa_keyword2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `sayfa_keyword3` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sayfalar`
--

INSERT INTO `sayfalar` (`sayfa_id`, `sayfa_baslik`, `sayfa_icerik`, `sayfa_menu`, `sayfa_title`, `sayfa_descr`, `sayfa_keyword`, `sayfa_baslik2`, `sayfa_baslik3`, `sayfa_icerik2`, `sayfa_icerik3`, `sayfa_title2`, `sayfa_title3`, `sayfa_descr2`, `sayfa_descr3`, `sayfa_keyword2`, `sayfa_keyword3`) VALUES
(1, 'Hakkimizda', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia\'daki Hampden-Sydney College\'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan \'consectetur\' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan \"de Finibus Bonorum et Malorum\" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan \"Lorem ipsum dolor sit amet\" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1500\'lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler için yeniden üretilmiştir. Çiçero tarafından yazılan 1.10.32 ve 1.10.33 bölümleri de 1914 H. Rackham çevirisinden alınan İngilizce sürümleri eşliğinde özgün biçiminden yeniden üretilmiştir.</p>\r\n', 1, 'Hakkimizda', 'Hakkimizda', 'Hakkimizda', 'About us', 'компании', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, \"consectetur\", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги \"de Finibus Bonorum et Malorum\" (\"О пределах добра и зла\"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", происходит от одной из строк в разделе 1.10.32</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 \"de Finibus Bonorum et Malorum\" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.</p>', 'About us', 'компании', 'About us', 'компании', 'About us', 0),
(2, 'Misyonumuz', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia\'daki Hampden-Sydney College\'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan \'consectetur\' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan \"de Finibus Bonorum et Malorum\" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan \"Lorem ipsum dolor sit amet\" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1500\'lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler için yeniden üretilmiştir. Çiçero tarafından yazılan 1.10.32 ve 1.10.33 bölümleri de 1914 H. Rackham çevirisinden alınan İngilizce sürümleri eşliğinde özgün biçiminden yeniden üretilmiştir.</p>\r\n', 1, 'Misyonumuz', 'Misyonumuz', 'Misyonumuz', 'Our mission', 'наша миссия', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, \"consectetur\", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги \"de Finibus Bonorum et Malorum\" (\"О пределах добра и зла\"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", происходит от одной из строк в разделе 1.10.32</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 \"de Finibus Bonorum et Malorum\" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.</p>', 'Our mission', 'наша миссия', 'Our mission', 'наша миссия', 'Our mission', 0),
(3, 'Vizyonumuz', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed magna velit, consequat pharetra varius dictum, commodo vel est. Vestibulum ullamcorper suscipit lacus. Quisque lacinia auctor porttitor. Proin auctor mi risus, ut mollis orci laoreet sit amet. In quis elementum ex. Integer volutpat felis purus, et consectetur felis auctor vel. Duis et egestas leo. In eu mollis turpis, at faucibus nulla. Aliquam luctus risus et nunc hendrerit aliquet. Mauris vitae sapien luctus, tempor lorem in, blandit lacus. Donec facilisis nibh imperdiet elit commodo sodales non in elit. Aliquam erat volutpat. Phasellus dolor turpis, rutrum a consectetur id, scelerisque ac elit. Donec vitae elit non dolor volutpat bibendum id vitae urna. Vivamus et purus vel orci maximus vestibulum sit amet a risus. Donec non lorem neque.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\">Morbi et libero nec felis interdum sagittis. Mauris feugiat nisi ut augue scelerisque egestas. Vestibulum dapibus egestas lobortis. Donec augue eros, porttitor vel rutrum ut, blandit quis ligula. Sed tristique feugiat ultricies. Sed efficitur bibendum sem ac pretium. Nam iaculis arcu sed odio sodales, in auctor justo luctus. Nullam a purus sed elit pharetra mattis. Nam vitae molestie dolor.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\">Fusce aliquet augue sit amet felis consequat, posuere elementum dolor pulvinar. Donec aliquet magna et nisi volutpat tincidunt. Nullam vehicula est orci, non maximus lacus tincidunt eu. Nullam a ultrices sem. Proin dapibus est viverra quam luctus pulvinar. Nulla fermentum lectus sit amet tellus lacinia, sed luctus lectus ornare. Nullam euismod faucibus erat sit amet lobortis. Fusce egestas eleifend sodales. Fusce feugiat ligula vitae arcu ornare sollicitudin. Vestibulum sed euismod turpis. Maecenas nibh tellus, cursus eu condimentum ut, hendrerit vel tortor. Fusce ultrices, justo suscipit semper feugiat, magna urna sollicitudin erat, et tincidunt purus enim ac tortor. Mauris mattis justo id metus tempus, sed aliquet orci elementum.</p>', 1, 'Vizyonumuz', 'Vizyonumuz', 'Vizyonumuz', 'Our vision', 'наше видение', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, \"consectetur\", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги \"de Finibus Bonorum et Malorum\" (\"О пределах добра и зла\"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", происходит от одной из строк в разделе 1.10.32</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 \"de Finibus Bonorum et Malorum\" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.</p>', 'Our vision', 'наше видение', 'Our vision', 'наше видение', 'Our vision', 0),
(4, 'Kalite Politikamız', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed magna velit, consequat pharetra varius dictum, commodo vel est. Vestibulum ullamcorper suscipit lacus. Quisque lacinia auctor porttitor. Proin auctor mi risus, ut mollis orci laoreet sit amet. In quis elementum ex. Integer volutpat felis purus, et consectetur felis auctor vel. Duis et egestas leo. In eu mollis turpis, at faucibus nulla. Aliquam luctus risus et nunc hendrerit aliquet. Mauris vitae sapien luctus, tempor lorem in, blandit lacus. Donec facilisis nibh imperdiet elit commodo sodales non in elit. Aliquam erat volutpat. Phasellus dolor turpis, rutrum a consectetur id, scelerisque ac elit. Donec vitae elit non dolor volutpat bibendum id vitae urna. Vivamus et purus vel orci maximus vestibulum sit amet a risus. Donec non lorem neque.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\">Morbi et libero nec felis interdum sagittis. Mauris feugiat nisi ut augue scelerisque egestas. Vestibulum dapibus egestas lobortis. Donec augue eros, porttitor vel rutrum ut, blandit quis ligula. Sed tristique feugiat ultricies. Sed efficitur bibendum sem ac pretium. Nam iaculis arcu sed odio sodales, in auctor justo luctus. Nullam a purus sed elit pharetra mattis. Nam vitae molestie dolor.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: \"Open Sans\", Arial, sans-serif;\">Fusce aliquet augue sit amet felis consequat, posuere elementum dolor pulvinar. Donec aliquet magna et nisi volutpat tincidunt. Nullam vehicula est orci, non maximus lacus tincidunt eu. Nullam a ultrices sem. Proin dapibus est viverra quam luctus pulvinar. Nulla fermentum lectus sit amet tellus lacinia, sed luctus lectus ornare. Nullam euismod faucibus erat sit amet lobortis. Fusce egestas eleifend sodales. Fusce feugiat ligula vitae arcu ornare sollicitudin. Vestibulum sed euismod turpis. Maecenas nibh tellus, cursus eu condimentum ut, hendrerit vel tortor. Fusce ultrices, justo suscipit semper feugiat, magna urna sollicitudin erat, et tincidunt purus enim ac tortor. Mauris mattis justo id metus tempus, sed aliquet orci elementum.</p>', 1, 'Kalite Politikamız', 'Kalite Politikamız', 'Kalite Politikamız', 'Our quality policy', 'Наша политика качества', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Yaygın inancın tersine, Lorem Ipsum rastgele sözcüklerden oluşmaz. Kökleri M.Ö. 45 tarihinden bu yana klasik Latin edebiyatına kadar uzanan 2000 yıllık bir geçmişi vardır. Virginia\'daki Hampden-Sydney College\'dan Latince profesörü Richard McClintock, bir Lorem Ipsum pasajında geçen ve anlaşılması en güç sözcüklerden biri olan \'consectetur\' sözcüğünün klasik edebiyattaki örneklerini incelediğinde kesin bir kaynağa ulaşmıştır. Lorm Ipsum, Çiçero tarafından M.Ö. 45 tarihinde kaleme alınan \"de Finibus Bonorum et Malorum\" (İyi ve Kötünün Uç Sınırları) eserinin 1.10.32 ve 1.10.33 sayılı bölümlerinden gelmektedir. Bu kitap, ahlak kuramı üzerine bir tezdir ve Rönesans döneminde çok popüler olmuştur. Lorem Ipsum pasajının ilk satırı olan \"Lorem ipsum dolor sit amet\" 1.10.32 sayılı bölümdeki bir satırdan gelmektedir.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">1500\'lerden beri kullanılmakta olan standard Lorem Ipsum metinleri ilgilenenler için yeniden üretilmiştir. Çiçero tarafından yazılan 1.10.32 ve 1.10.33 bölümleri de 1914 H. Rackham çevirisinden alınan İngilizce sürümleri eşliğinde özgün biçiminden yeniden üretilmiştir.</p>', '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Многие думают, что Lorem Ipsum - взятый с потолка псевдо-латинский набор слов, но это не совсем так. Его корни уходят в один фрагмент классической латыни 45 года н.э., то есть более двух тысячелетий назад. Ричард МакКлинток, профессор латыни из колледжа Hampden-Sydney, штат Вирджиния, взял одно из самых странных слов в Lorem Ipsum, \"consectetur\", и занялся его поисками в классической латинской литературе. В результате он нашёл неоспоримый первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги \"de Finibus Bonorum et Malorum\" (\"О пределах добра и зла\"), написанной Цицероном в 45 году н.э. Этот трактат по теории этики был очень популярен в эпоху Возрождения. Первая строка Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", происходит от одной из строк в разделе 1.10.32</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif;\">Классический текст Lorem Ipsum, используемый с XVI века, приведён ниже. Также даны разделы 1.10.32 и 1.10.33 \"de Finibus Bonorum et Malorum\" Цицерона и их английский перевод, сделанный H. Rackham, 1914 год.</p>', 'Our quality policy', 'Наша политика качества', 'Our quality policy', 'Наша политика качества', 'Our quality policy', 0);

-- --------------------------------------------------------

--
-- Table structure for table `siparis`
--

CREATE TABLE `siparis` (
  `siparis_id` int(11) NOT NULL,
  `siparis_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `siparis_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_urun` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_durum` int(11) NOT NULL DEFAULT 1,
  `siparis_odeme` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_adres` longtext COLLATE utf8_turkish_ci NOT NULL,
  `siparis_il` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_ilce` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `siparis_fiyat` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `siparis`
--

INSERT INTO `siparis` (`siparis_id`, `siparis_tarih`, `siparis_ad`, `siparis_mail`, `siparis_tel`, `siparis_urun`, `siparis_durum`, `siparis_odeme`, `siparis_adres`, `siparis_il`, `siparis_ilce`, `siparis_fiyat`) VALUES
(3, '2018-01-03 07:09:59', 'Ozan ', 'adsf@fg.cok ', '08508407870 ', '65', 0, 'Kapı', 'Adresssss', '', '', '159'),
(4, '2018-01-16 07:09:59', 'Ozan ', 'adsf@fg.cok ', '08508407870 ', '67', 0, 'Havale', 'Yeni adresimi şurdan burya bakalım hadi', '', '', '729'),
(13, '2018-01-03 07:09:59', 'Ozan ', 'adsf@fg.cok ', '08508407870 ', '65', 0, 'Kapı', 'Adresssss', '', '', '159'),
(15, '2018-01-03 07:09:59', 'Ozan ', 'adsf@fg.cok ', '08508407870 ', '65', 0, 'Kapı', 'Adresssss', '', '', '159'),
(17, '2018-01-03 07:09:59', 'Ozan ', 'adsf@fg.cok ', '08508407870 ', '65', 0, 'Kapı', 'Adresssss', '', '', '159'),
(18, '2018-01-16 07:09:59', 'Ozan ', 'adsf@fg.cok ', '08508407870 ', '67', 0, 'Havale', 'Yeni adresimi şurdan burya bakalım hadi', '', '', '729'),
(40, '2018-01-24 13:15:23', 'asdf', 'murat@mail.com', 'adsf', '70', 1, 'Ödeme Tipi Seçiniz', 'asdfadf', '', '', '799'),
(41, '2018-01-24 13:16:56', 'fvdf', 'denem@mail.com', 'xvb', '70', 1, 'Ödeme Tipi Seçiniz', 'xvbxvbxvn', '', '', '799'),
(42, '2018-01-24 15:14:20', 'fvdf', 'webkozik@gmail.com', '08508407870', '69', 1, 'Ödeme Tipi Seçiniz', 'zsdgdfhgdfdefhdfh', '', '', '799'),
(43, '2018-01-25 11:24:30', 'Ozan', 'adsf@fg.cok', '08508407870', '70', 1, 'Havale ile Öde', 'dfgdfg', '', '', '799'),
(44, '2018-02-06 14:48:43', 'Ozan', 'webkozik@gmail.com', '08508407870', '75', 1, 'Havale ile Öde', 'sfghfghdgj', 'BURSA', 'Bayrampaşa', ''),
(45, '2018-04-26 08:31:37', 'Deneme Havale', 'webkoz@gmail.com', '08508407870', '87', 1, '', 'asdasdas asd asdasfa', 'AYDIN', 'Bayrampaşa', ''),
(46, '2019-11-12 11:05:03', 'Ozan ÖZ', 'webkozik@gmail.com', '08508407870', '82', 0, 'Havale ile Öde', 'cdsgsdag sf hsf hsf h', 'ADANA', 'Bayrampaşa', ''),
(47, '2019-11-12 13:45:39', 'Ozan ÖZ', 'webkozik@gmail.com', '08508407870', '85', 1, 'Havale ile Öde', 'Not Test', 'İSTANBUL', 'Bayrampaşa', ''),
(48, '2019-11-12 13:46:27', 'Ozan ÖZ', 'webkozik@gmail.com', '08508407870', '85', 1, 'Havale ile Öde', 'Not Test', 'İSTANBUL', 'Bayrampaşa', '');

-- --------------------------------------------------------

--
-- Table structure for table `slayt`
--

CREATE TABLE `slayt` (
  `slayt_id` int(1) NOT NULL,
  `slayt_baslik` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `slayt_resim` varchar(355) COLLATE utf8_turkish_ci NOT NULL,
  `slayt_sira` int(11) NOT NULL,
  `slayt_aciklama` varchar(500) COLLATE utf8_turkish_ci NOT NULL,
  `slayt_butonad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `slayt_butonlink` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `slayt_renk` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `slayt_baslik2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slayt_baslik3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slayt_aciklama2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slayt_aciklama3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slayt_butonad2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slayt_butonad3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slayt_butonlink2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `slayt_butonlink3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `slayt`
--

INSERT INTO `slayt` (`slayt_id`, `slayt_baslik`, `slayt_resim`, `slayt_sira`, `slayt_aciklama`, `slayt_butonad`, `slayt_butonlink`, `slayt_renk`, `slayt_baslik2`, `slayt_baslik3`, `slayt_aciklama2`, `slayt_aciklama3`, `slayt_butonad2`, `slayt_butonad3`, `slayt_butonlink2`, `slayt_butonlink3`) VALUES
(12, 'İKİNCİ ELDE GÜVEN; ALİ OSMAN OTO', 'assets/img/slayt/23801.jpg', 1, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'İLETİŞİME GEÇ', 'iletisim', '#5E5E5E', 'Multilingual Advanced Hotel & Pension Scripti', 'Многоязычный улучшенный отель и пансион ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. ', 'CONTACT US', 'Связаться с нами', 'iletisim', 'iletisim'),
(13, 'OTO GALERİ', 'assets/img/slayt/24678.jpg', 2, 'Lorem Ipsum, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir.', 'İLETİŞİME GEÇ', 'iletisim', '#5E5E5E', 'Multilingual Advanced Hotel & Pension Scripti', 'Многоязычный улучшенный отель и пансион ', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Lorem Ipsum - это текст-\"рыба\", часто используемый в печати и вэб-дизайне. ', 'CONTACT US', 'Связаться с нами', 'iletisim', 'iletisim');

-- --------------------------------------------------------

--
-- Table structure for table `smenu`
--

CREATE TABLE `smenu` (
  `smenu_id` int(11) NOT NULL,
  `smenu_ad` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `smenu_durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `smenu`
--

INSERT INTO `smenu` (`smenu_id`, `smenu_ad`, `smenu_durum`) VALUES
(10, 'Kurumsal', '1'),
(15, 'HİZMETLERİMİZ', '1'),
(16, 'HİZMET BÖLGELERİ', '1'),
(19, 'İLETİŞİM', '1'),
(22, 'HESAP NUMARALARIMIZ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sms`
--

CREATE TABLE `sms` (
  `dil_id` int(11) NOT NULL,
  `dil_adi` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `dil_bayrak` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `dil_durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sms`
--

INSERT INTO `sms` (`dil_id`, `dil_adi`, `dil_bayrak`, `dil_durum`) VALUES
(0, '05368436122', '', 'Scout Teknoloji');

-- --------------------------------------------------------

--
-- Table structure for table `sosyal`
--

CREATE TABLE `sosyal` (
  `sosyal_id` int(1) NOT NULL,
  `sosyal_link` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `sosyal_icon` varchar(50) COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sosyal`
--

INSERT INTO `sosyal` (`sosyal_id`, `sosyal_link`, `sosyal_icon`) VALUES
(1, 'https://www.facebook.com/scoutteknolojinet', 'fa-facebook'),
(2, 'https://twitter.com/scoutteknolojinet', 'fa-twitter'),
(3, 'http://linkedin.com', 'fa-linkedin'),
(4, 'http://instagram.com', 'fa-instagram'),
(5, 'https://www.youtube.com/', 'fa-youtube'),
(6, 'https://plus.google.com', 'fa-google-plus');

-- --------------------------------------------------------

--
-- Table structure for table `sss`
--

CREATE TABLE `sss` (
  `sss_id` int(11) NOT NULL,
  `sss_soru` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `sss_cevap` varchar(755) COLLATE utf8_turkish_ci NOT NULL,
  `sss_sira` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `sss`
--

INSERT INTO `sss` (`sss_id`, `sss_soru`, `sss_cevap`, `sss_sira`) VALUES
(1, 'Satın alma işlemi nasıl yapılır?', 'Oporteat urbanitas est et, possit menandri pertinax at quo. Epicurei volutpat ad vim, at dictas offendit lucilius vis, tollit partiendo ei sea. Debet choro vituperatoribus quo ne. No vide omnium probatus vix duo an audire.', 0),
(2, 'Ürünlerin iade hakkı var mıdır?', 'Cu novum debet pertinacia nam, erat putent fabellas duo no, semper detracto expetenda ut nec. Malorum propriae an mei, ad mei propriae invidunt. Audiam bonorum phaedrum mei ut, eos elitr nullam et primis ocurreret.', 1),
(3, 'Yeni ürünler ne zaman gelir?', 'Diam lorem inimicus mel ne, ei nam equidem sadipscing. Quo ex vivendo ancillae fabellas. Falli audiam an nec, eius vidit timeam mei id, cum te numquam elaboraret. Atqui consul hendrerit per ad assum copiosae.', 2),
(4, 'Çalışmalar kalıcı mıdır?', 'Oporteat urbanitas est et, possit menandri pertinax at quo. Epicurei volutpat ad vim, at dictas offendit lucilius vis, tollit partiendo ei sea. Debet choro vituperatoribus quo ne. No vide omnium probatus vix duo an audire.', 3),
(5, 'Satın alma işlemi nasıl yapılır?', 'Oporteat urbanitas est et, possit menandri pertinax at quo. Epicurei volutpat ad vim, at dictas offendit lucilius vis, tollit partiendo ei sea. Debet choro vituperatoribus quo ne. No vide omnium probatus vix duo an audire.', 4),
(6, 'Ürünlerin iade hakkı var mıdır?', 'Cu novum debet pertinacia nam, erat putent fabellas duo no, semper detracto expetenda ut nec. Malorum propriae an mei, ad mei propriae invidunt. Audiam bonorum phaedrum mei ut, eos elitr nullam et primis ocurreret.', 5),
(7, 'Yeni ürünler ne zaman gelir?', 'Diam lorem inimicus mel ne, ei nam equidem sadipscing. Quo ex vivendo ancillae fabellas. Falli audiam an nec, eius vidit timeam mei id, cum te numquam elaboraret. Atqui consul hendrerit per ad assum copiosae.', 6),
(8, 'Çalışmalar kalıcı mıdır?', 'Oporteat urbanitas est et, possit menandri pertinax at quo. Epicurei volutpat ad vim, at dictas offendit lucilius vis, tollit partiendo ei sea. Debet choro vituperatoribus quo ne. No vide omnium probatus vix duo an audire.', 7);

-- --------------------------------------------------------

--
-- Table structure for table `sube`
--

CREATE TABLE `sube` (
  `sube_id` int(11) NOT NULL,
  `sube_adi` varchar(255) NOT NULL,
  `sube_adres` varchar(255) NOT NULL,
  `sube_il` varchar(255) NOT NULL,
  `sube_ilce` varchar(255) NOT NULL,
  `sube_tel` varchar(255) NOT NULL,
  `sube_gsm` varchar(255) NOT NULL,
  `sube_fax` varchar(255) NOT NULL,
  `sube_harita` longtext NOT NULL,
  `sube_web` varchar(255) NOT NULL,
  `sube_mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sube`
--

INSERT INTO `sube` (`sube_id`, `sube_adi`, `sube_adres`, `sube_il`, `sube_ilce`, `sube_tel`, `sube_gsm`, `sube_fax`, `sube_harita`, `sube_web`, `sube_mail`) VALUES
(5, 'Merkez Şube', 'Oto Galericiler Sitesi, Yıldızevler, 38020 Kocasinan/Kayseri', 'Kayseri', 'Kocasinan', '0 (532) 179 58 61', '0 (532) 179 58 61', '', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3111.7345227013284!2d35.537224915739515!3d38.74685386340819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x152b131418685fa3%3A0x9eb4a8d1f99a4932!2sY%C4%B1ld%C4%B1zevler%2C%20Oto%20Galericiler%20Sitesi%2C%2038020%20Kocasinan%2FKayseri!5e0!3m2!1str!2str!4v1611581801239!5m2!1str!2str\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', 'http://www.aliosmanoto.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `urunler`
--

CREATE TABLE `urunler` (
  `urun_id` int(11) NOT NULL,
  `urun_baslik` varchar(455) COLLATE utf8_turkish_ci NOT NULL,
  `urun_aciklama` longtext COLLATE utf8_turkish_ci NOT NULL,
  `urun_kisaaciklama` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_efiyat` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_fiyat` varchar(250) COLLATE utf8_turkish_ci NOT NULL,
  `urun_kategori` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_vitrin` int(11) NOT NULL DEFAULT 0,
  `urun_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `urun_baslik2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_baslik3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_fiyat2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_fiyat3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_aciklama2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_aciklama3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_title2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_title3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `araba_motor_gucu` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `araba_motor_hacim` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `araba_model` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `araba_cekis` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `araba_renk` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `araba_durum` varchar(15) COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_descr2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_descr3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_keyword2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `urun_keyword3` longtext COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `urunler`
--

INSERT INTO `urunler` (`urun_id`, `urun_baslik`, `urun_aciklama`, `urun_kisaaciklama`, `urun_efiyat`, `urun_fiyat`, `urun_kategori`, `urun_vitrin`, `urun_resim`, `urun_title`, `urun_descr`, `urun_keyword`, `urun_baslik2`, `urun_baslik3`, `urun_fiyat2`, `urun_fiyat3`, `urun_aciklama2`, `urun_aciklama3`, `urun_title2`, `urun_title3`, `araba_motor_gucu`, `araba_motor_hacim`, `araba_model`, `araba_cekis`, `araba_renk`, `araba_durum`, `urun_descr2`, `urun_descr3`, `urun_keyword2`, `urun_keyword3`) VALUES
(94, 'Volvo s40', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">1997 MODEL VOLVO S40 2.0 BENZİN &amp; LPG ( BRC MARKA SIRALI SİSTEM )</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">*OTOMATİK VİTES* ==&gt;&gt; ( KUSURSUZ BAKIMLARI YENİ )</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">*MOTOR* ==&gt;&gt; ( BAKIMLARI YENİ, YAĞ YAKMA DUMAN ATMA VS YOKTUR SAAT GİBİ )</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">1 PARÇA DEĞİŞEN ( SOL ÖN ÇAMURLUK )</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">YÜZEYSEL TEMİZLİK BOYASI MEVCUT</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">5664 ==&gt;&gt; HASAR SORGULAMA 7 ADET TOPLAM = 4.267 ₺</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">ÇALIŞMAYAN AKSAMI YOKTUR</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">NOT : ARACIMIZ RESİMLERDEDE GÖRÜNDÜĞÜ GİBİ TEMİZ VE BAKIMLI BİR ARAÇTIR...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">MOTOR &amp; ŞANZIMAN YÜRÜR AKSAMI KUSURSUZ, BAKIMLARI YENİ YAPILMIŞTIR...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">ARACIMIZI DİLEDİĞİNİZ USTAYA VEYA SERVİSE GÖNÜL RAHATLIĞIYLA GÖSTEREBİLİRSİNİZ...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">GÜN İÇİNDE WHATSAPP İLE GÖRÜNTÜLÜ ARAYIP DETAYLI OLARAK İNCELEYEBİLİRSİNİZ...</p>', '1', '', '47.500', '1', 0, 'assets/img/urunler/2451523767.jpg', 'Volvo s40', 'Volvo s40', 'Volvo s40', '282.000', 'Benzinli & LPG', 'Otomatik', 'Var', NULL, '5', '5', '1997', '151-175HP', '1801-2000 cm³', '2.0', 'Önden Çekiş', 'Füme', 'İkinci El', NULL, NULL, NULL, NULL),
(95, '300T Mercedes', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">1992 MODEL</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">W124 SW. -- 5 İLERİ MANUEL</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">MUAYENE YENİ</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">A DAN Z YE BÜTÜN AĞIR BAKIMLARI YENİ</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">MOTOR &amp; ŞANZIMAN KUSURSUZ</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">ELEKTRİKLİ ÇİFT YÖNLÜ SUNROOF FAAL</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">ÇALIŞMAYAN VEYA MASRAFI OLAN HİC BİR YERİ YOKTUR</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">NOT : ARACIMIZ RESİMLERDEDE GÖRÜNDÜĞÜ GİBİ EMSALSİZ TEMİZLİKTE VE KONDİSYONDADIR...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">DİLEDİĞİNİZ USTAYA VEYA SERVİSE GÖNÜL RAHATLIĞIYLA GÖSTEREBİLİRSİNİZ...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">WHATSAPP İLE GÜN İÇERİSİNDE GÖRÜNTÜLÜ ARAYIP DETAYLI OLARAK İNCELEYEBİLİRSİNİZ...</p>', '1', '', '65.000 ', '1', 1, 'assets/img/urunler/3158428211.jpg', '300T Mercedes', '300T Mercedes', '300T Mercedes', '350.000', 'Benzin & LPG', 'Manuel', 'Var', NULL, '5', '4', '1992', '220 hp', '2962 cc', '300 TE ', 'Arkadan İtiş', 'Beyaz', 'İkinci El ', NULL, NULL, NULL, NULL),
(98, '200E Mercedes - Benz ', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">W124-1986-200E -OTOMATİK VİTES</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">MOTOR - ŞANZIMAN KUSURSUZ TEMİZLİKTE</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">BÜTÜN AĞIR BAKIMLARI YENİ YAPILMIŞTIR</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">KIŞLIK BAKIMLARI YENİ YAPILMIŞTIR</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">MASRAFSIZ - TEMİZ - BAKIMLI</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">NOT : ARACIMIZ RESİMLERDEDE GÖRÜNDÜĞÜ GİBİ TEMİZ VE BAKIMLI BİR ARAÇTIR...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">KAPORTASINDA HERHANGİ BİR ÇÜRÜK ÇARIK KIRIK ÇIKIK PAS MACUN VS YOKTUR...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">2 PARÇA DEĞİŞEN ( SAĞ ÖN ÇAMURLUK - MOTOR KAPUTU )</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">YÜZEYSEL TEMİZLİK BOYASI VARDIR</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">İC KISIMLARINDA BOYA OLMAYIP, YILDIZLARI ÜSTÜNDEDİR</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">MOTOR VE ŞANZIMAN BAKIMLARI YENİ OLUP MASRAFSIZ DIR...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">ARACIMIZI DİLEDİĞİNİZ USTAYA VEYA SERVİSE EXPERTİZE VS GÖNÜL RAHATLIĞIYLA GÖSTEREBİLİRSİNİZ...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">GÜN İÇERİSİNDE WHATSAPP İLE GÖRÜNTÜLÜ ARAYIP DETAYLI OLARAK İNCELEYEBİLİRSİNİZ...</p>', '1', '', '48.750', '1', 0, 'assets/img/urunler/2519222892.jpg', '200E Mercedes - Benz ', '200E Mercedes - Benz ', '200E Mercedes - Benz ', '350.000', 'Benzin & LPG', 'Otomatik', 'Var', NULL, '5', '4', '1986', '126 - 150 HP', '1801 - 2000 cm3', 'E 200 200 ', 'Arkadan İtiş', 'Bej', 'İkinci El ', NULL, NULL, NULL, NULL),
(99, '300 SE MERCEDES', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">1989 MODEL -- W126 -- 300 SE</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">NOT : ARACIMIZI FAZLA ANLATMAYA GEREK YOK RESİMLERDEDE GÖRÜNDÜĞÜ GİBİ TEMİZ MASRAFSIZ BAKIMLI ORJİNAL BİR ARAÇTIR... ÇALIŞMAYAN AKSAMI YOKTUR...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">DİLEDİĞİNİZ ZAMAN WHATSAPP İLE GÖRÜNTÜLÜ ARAYIP DETAYLI OLARAK İNCELEYEBİLİRSİNİZ...</p>', '1', '', '89.000', '1', 1, 'assets/img/urunler/2123129345.jpg', '300 SE MERCEDES', '300 SE MERCEDES', '300 SE MERCEDES', '330.000', 'Benzin', 'Otomatik', 'Var', NULL, '5', '5', '1989', '201 - 225 arası', '2501 - 3000 cm3', '1989', 'Arkadan itiş', 'Siyah', 'İkinci El', NULL, NULL, NULL, NULL),
(105, 'Citroen C3', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">2011 -- CİTROEN C3 EXCLUSİVE</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">1.6 VTİ OTOMATİK VİTES</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">BENZİN &amp; LPG</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">CAM TAVAN - DİGİTAL KLİMA ( BU MODELİN EN DOLUSU )</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">ÇALIŞMAYAN HİÇ BİR AKSAMI YOKTUR</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">MOTOR - ŞANZIMAN KUSURSUZ</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">DEĞİŞEN PARÇA KESİNLİKLE YOKTUR...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">4 PARÇA BOYA MEVCUT ( TAVAN- ÖN KAPUT İÇ KISIMLARDA KESİNLİKLE BOYA YOKTUR )</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">AĞIR HASAR KAYDI MEVCUTTUR ( TAMAMEN SİGORTA ŞİRKETİ ŞİŞİRMESİ )</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">TÜM BAKIMLARI YENİ YAPILMIŞTIR</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">NOT : ARACIMIZ RESİMLERDEDE GÖRÜNDÜĞÜ GİBİ TEMİZ VE BAKIMLI BİR ARAÇTIR...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">DİLEDİĞİNİZ USTAYA VEYA SERVİSE GÖNÜL RAHATLIĞIYLA GÖSTEREBİLİRSİNİZ...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">ARACIMIZI GÜN İÇERİSİNDE WHATSAPP İLE GÖRÜNTÜLÜ ARAYIP DETAYLI OLARAK İNCELEYEBİLİRSİNİZ...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">DETAYLI OLARAK EXPERTİZ RAPORLARI PAZARTESİ GÜNÜ EKLENECEKTİR...</p>', '1', '', '105.000', '1', 1, 'assets/img/urunler/2090825919.jpg', 'Citroen C3', 'Citroen C3', 'Citroen C3', '147.000', 'Benzin & LPG', 'Otomatik', 'Var', NULL, '5', '4', '2011', '120 hp', '1598 cc', '1.6 VTi Exclusi', 'Önden Çekiş', 'Siyah', 'İkinci El ', NULL, NULL, NULL, NULL),
(106, 'Mercedes - Benz 190E', '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">190E W201 MANUEL</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">BAKIMLARI YENİ</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">KOMPLE DÖŞEMELERİ YENİ ( TABAN VE KOLTUKLAR )</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">ÇALIŞMAYAN AKSAMI YOKTUR</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">MUAYENE MEVCUTTUR</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">NOT : ARACIMIZ RESİMLERDEDE GÖRÜNDÜĞÜ GİBİ TEMİZ VE BAKIMLI BİR ARAÇTIR...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">BAKIMLARI YENİ YAPILMIŞ OLUP MOTOR ŞANZIMAN VS GİBİ BİR MASRAFI YOKTUR...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">KAPORTASINDA HERHANGİ BİR ÇÜRÜK ÇARIK KIRIK ÇIKIK VS YOKTUR...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">AYNI MODEL VE RENKTE 2 ADET ARACIMIZ MEVCUTTUR...<br>DİĞER İLANLARIMIZDAN İNCELEYEBİLİRSİNİZ...</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">BU ARACIMIZI VE DİĞER MERCEDES\'LERİMİZİ GÜN İÇERİSİNDE WHATSAPP İLE GÖRÜNTÜLÜ ARAYIP DETAYLI OLARAK İNCELEYEBİLİRSİNİZ..</p><p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px 0px 10px; background: 0px 0px no-repeat; line-height: normal; font-family: &quot;Lucida Grande&quot;, LucidaGrande, Arial, sans-serif;\">DİLEDİĞİNİZ USTAYA VEYA SERVİSE GÖNÜL RAHATLIĞIYLA GÖSTEREBİLİRSİNİZ...</p>', '1', '', '36.000', '1', 0, 'assets/img/urunler/2007821774.jpg', 'Mercedes - Benz 190E', 'Mercedes - Benz 190E', 'Mercedes - Benz 190E', '420.000', 'Benzin & LPG', 'Otomatik', 'Var', NULL, '5', '4', '1983', '101 - 125 HP', '1801 - 2000 cm3', '190 E 2.0 ', 'Arkadan İtiş', 'Kırmızı', 'İkinci El ', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `valbumler`
--

CREATE TABLE `valbumler` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ad` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_resim` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_kategori` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_sira` int(11) DEFAULT NULL,
  `kategori_title` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_descr` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_keyword` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_ad2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_ad3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_title2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_title3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_descr2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_descr3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_keyword2` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `kategori_keyword3` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `valbumler`
--

INSERT INTO `valbumler` (`kategori_id`, `kategori_ad`, `kategori_resim`, `kategori_kategori`, `kategori_sira`, `kategori_title`, `kategori_descr`, `kategori_keyword`, `kategori_ad2`, `kategori_ad3`, `kategori_title2`, `kategori_title3`, `kategori_descr2`, `kategori_descr3`, `kategori_keyword2`, `kategori_keyword3`) VALUES
(12, 'Arabalar', 'assets/img/hizmetler/3177627062.jpg', '', 1, 'Arabalar', 'Arabalar', 'Arabalar', 'Room', 'комнаты', 'Room', 'комнаты', 'Room', 'комнаты', 'Room', 'комнаты');

-- --------------------------------------------------------

--
-- Table structure for table `videogaleri`
--

CREATE TABLE `videogaleri` (
  `video_id` int(11) NOT NULL,
  `video_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `video_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `video_album` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `videogaleri`
--

INSERT INTO `videogaleri` (`video_id`, `video_link`, `video_resim`, `video_album`) VALUES
(1, 'Gg9X8oNumCg', 'assets/img/galeri/2059728313.jpg', 0),
(2, 'Gg9X8oNumCg', 'assets/img/galeri/2059728313.jpg', 0),
(3, 'Gg9X8oNumCg', 'assets/img/galeri/2059728313.jpg', 11),
(4, 'Gg9X8oNumCg', 'assets/img/galeri/2059728313.jpg', 0),
(10, 'Gg9X8oNumCg', 'assets/img/galeri/2059728313.jpg', 0),
(11, 'Gg9X8oNumCg', 'assets/img/galeri/2059728313.jpg', 0),
(12, 'tV99hrD9k7U', 'assets/img/galeri/2426124597.jpg', 11),
(22, 'iIXp5R41qN8', 'assets/img/galeri/2132725032.jpg', 18),
(23, 'iIXp5R41qN8', 'assets/img/galeri/3166925936.jpg', 18),
(24, 'iIXp5R41qN8', 'assets/img/galeri/2143526643.jpg', 18),
(25, 'iIXp5R41qN8', 'assets/img/galeri/2784826817.jpg', 18),
(26, 'iIXp5R41qN8', 'assets/img/galeri/2447821228.jpg', 19),
(27, 'iIXp5R41qN8', 'assets/img/galeri/2452722452.jpg', 19),
(28, 'iIXp5R41qN8', 'assets/img/galeri/2936531881.jpg', 19),
(29, 'iIXp5R41qN8', 'assets/img/galeri/2763330949.jpg', 19),
(30, 'vVZMWkhgvBw', 'assets/img/galeri/2956822414.jpg', 12),
(31, 'vVZMWkhgvBw', 'assets/img/galeri/2104025385.jpg', 12),
(32, 'vVZMWkhgvBw', 'assets/img/galeri/2181222985.jpg', 9),
(33, 'vVZMWkhgvBw', 'assets/img/galeri/2973223650.jpg', 9),
(34, 'vVZMWkhgvBw', 'assets/img/galeri/2635928537.jpg', 10),
(35, 'vVZMWkhgvBw', 'assets/img/galeri/2206127924.jpg', 10),
(36, 'vVZMWkhgvBw', 'assets/img/galeri/2607231595.jpg', 10),
(37, 'vVZMWkhgvBw', 'assets/img/galeri/2139529230.jpg', 10),
(38, 'vVZMWkhgvBw', 'assets/img/galeri/2806621505.jpg', 9),
(39, 'vVZMWkhgvBw', 'assets/img/galeri/2695522272.jpg', 9),
(40, 'vVZMWkhgvBw', 'assets/img/galeri/2691622916.jpg', 12),
(41, 'vVZMWkhgvBw', 'assets/img/galeri/2476726285.jpg', 12);

-- --------------------------------------------------------

--
-- Table structure for table `whatsapp`
--

CREATE TABLE `whatsapp` (
  `whats_id` int(11) NOT NULL,
  `whats_tel` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `whats_durum` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `whats_cdestek` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `whats_cdestekdurum` int(11) NOT NULL,
  `whats_tiklaara` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `whats_tiklaaradurum` int(11) NOT NULL,
  `whats_skype` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `whats_skypedurum` int(11) NOT NULL,
  `whats_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `whats_maildurum` int(11) NOT NULL,
  `whats_sssdurum` int(11) NOT NULL,
  `whats_iletisimdurum` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `whatsapp`
--

INSERT INTO `whatsapp` (`whats_id`, `whats_tel`, `whats_durum`, `whats_cdestek`, `whats_cdestekdurum`, `whats_tiklaara`, `whats_tiklaaradurum`, `whats_skype`, `whats_skypedurum`, `whats_mail`, `whats_maildurum`, `whats_sssdurum`, `whats_iletisimdurum`) VALUES
(0, '5466676703', '1', 'randevu', 1, '5466676703', 1, 'kendineozel', 1, 'bilgi@scoutteknoloji.com', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `widget`
--

CREATE TABLE `widget` (
  `widget_id` int(11) NOT NULL,
  `widget_hizmet` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_proje` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_yorum` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_galeri` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_urun` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_counter` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_referans` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_blog` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bwelcome` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_breferans` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bwelcome1` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_welcome` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_welcome1` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bhizmet` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bproje` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_byorum` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bblog` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_burun` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_html` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bbilgi` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bilgi` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ara` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bara` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ufiyat` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_usatinal` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bdiger` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_diger` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bgaleri` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_twitter` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_btwitter` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_sayfayo` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_hizmetyo` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_projeyo` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_urunyo` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_blogyo` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ceviri1` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ceviri2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ceviri3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ceviri4` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `widget_ceviri5` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `widget_ceviri6` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `widget_ceviri7` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `widget_rezgidis` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rezdonus` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rezyetiskin` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rezcocuk` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rezbuton` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rez` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_html2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_html3` longtext COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `widget`
--

INSERT INTO `widget` (`widget_id`, `widget_hizmet`, `widget_proje`, `widget_yorum`, `widget_galeri`, `widget_urun`, `widget_counter`, `widget_referans`, `widget_blog`, `widget_bwelcome`, `widget_breferans`, `widget_bwelcome1`, `widget_welcome`, `widget_welcome1`, `widget_bhizmet`, `widget_bproje`, `widget_byorum`, `widget_bblog`, `widget_burun`, `widget_html`, `widget_bbilgi`, `widget_bilgi`, `widget_ara`, `widget_bara`, `widget_ufiyat`, `widget_usatinal`, `widget_bdiger`, `widget_diger`, `widget_bgaleri`, `widget_twitter`, `widget_btwitter`, `widget_sayfayo`, `widget_hizmetyo`, `widget_projeyo`, `widget_urunyo`, `widget_blogyo`, `widget_ceviri1`, `widget_ceviri2`, `widget_ceviri3`, `widget_ceviri4`, `widget_ceviri5`, `widget_ceviri6`, `widget_ceviri7`, `widget_rezgidis`, `widget_rezdonus`, `widget_rezyetiskin`, `widget_rezcocuk`, `widget_rezbuton`, `widget_rez`, `widget_html2`, `widget_html3`) VALUES
(1, '1', 'Kategoriler', 'AÇIKLAMA', '1', NULL, 'İLETİŞİM', 'Tüm Kategoriler', '1', '© 2020 TÜM HAKKI SAKLIDIR. BU SİTE SCOUT TEKNOLOJİ İŞTİRAKIDIR.', 'Tel no giriniz', 'Menüler', '1', 'ARABA DETAYLARI', 'ÖNE ÇIKAN ARAÇLARIMIZ', 'GÖNDER', 'Blog', 'BLOG / DUYURU', 'İletişim', '<h2 style=\"\">BİZ KİMİZ?</h2><p style=\"text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Lorem Ipsum</strong><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</span><br></p>', 'Devamını Oku', '1', 'YORUMLAR', 'YORUM YAP', 'ARABALAR', 'Gün', 'Haritada Göster', 'Odayı Seç', '', NULL, NULL, '1', 'Ad Soyad', 'Mail adresi', 'Detaylar', 'Paylaş', 'Resim Albümleri', 'Video Albümleri', 'ALİ OSMAN OTO', 'TAMAMLANDI!', 'İşlem Başarılı Bir Şekilde Tamamlandı.', 'HATA!', 'İşlem sırasında bir hata oluştu.', NULL, NULL, NULL, NULL, NULL, NULL, '<h2 style=\"font-family: Rubik, sans-serif; color: rgb(0, 0, 0);\">Lorem Ipsum?</h2><p style=\"text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Lorem Ipsum</strong><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\"> is simply dummy text of the printing and typesetting industry. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '<h2 style=\"font-family: Rubik, sans-serif; color: rgb(0, 0, 0);\">Lorem Ipsum?</h2><p style=\"font-family: Rubik, sans-serif; color: rgb(0, 0, 0);\">Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.<br></p><p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"> Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. </span></p><p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `widget2`
--

CREATE TABLE `widget2` (
  `widget_id` int(11) NOT NULL,
  `widget_hizmet` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_proje` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_yorum` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_galeri` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_urun` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_counter` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_referans` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_blog` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bwelcome` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_breferans` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bwelcome1` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_welcome` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_welcome1` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bhizmet` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bproje` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_byorum` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bblog` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_burun` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_html` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bbilgi` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bilgi` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ara` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bara` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ufiyat` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_usatinal` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bdiger` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_diger` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bgaleri` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_twitter` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_btwitter` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_sayfayo` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_hizmetyo` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_projeyo` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_urunyo` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_blogyo` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ceviri1` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ceviri2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ceviri3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ceviri4` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `widget_ceviri5` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `widget_ceviri6` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `widget_ceviri7` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `widget_rezgidis` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rezdonus` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rezyetiskin` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rezcocuk` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rezbuton` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rez` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_html2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_html3` longtext COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `widget2`
--

INSERT INTO `widget2` (`widget_id`, `widget_hizmet`, `widget_proje`, `widget_yorum`, `widget_galeri`, `widget_urun`, `widget_counter`, `widget_referans`, `widget_blog`, `widget_bwelcome`, `widget_breferans`, `widget_bwelcome1`, `widget_welcome`, `widget_welcome1`, `widget_bhizmet`, `widget_bproje`, `widget_byorum`, `widget_bblog`, `widget_burun`, `widget_html`, `widget_bbilgi`, `widget_bilgi`, `widget_ara`, `widget_bara`, `widget_ufiyat`, `widget_usatinal`, `widget_bdiger`, `widget_diger`, `widget_bgaleri`, `widget_twitter`, `widget_btwitter`, `widget_sayfayo`, `widget_hizmetyo`, `widget_projeyo`, `widget_urunyo`, `widget_blogyo`, `widget_ceviri1`, `widget_ceviri2`, `widget_ceviri3`, `widget_ceviri4`, `widget_ceviri5`, `widget_ceviri6`, `widget_ceviri7`, `widget_rezgidis`, `widget_rezdonus`, `widget_rezyetiskin`, `widget_rezcocuk`, `widget_rezbuton`, `widget_rez`, `widget_html2`, `widget_html3`) VALUES
(1, '1', 'Categories', 'EXPLANATION', '1', 'Reservation', 'CONTACT', 'All Categories', '1', '© 2019 <a href=\"#\">Multi-language & Hotel & Hostel with Management Panel</a>  All rights reserved.', 'Enter phone number', 'Menus', '0', 'ROOM DETAILS', 'Rooms', 'SEND', 'Blogs', 'BLOG / ANNOUNCEMENT', 'Contact', '<h2 style=\"\">BİZ KİMİZ?</h2><p style=\"text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Lorem Ipsum</strong><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</span><br></p>', 'Read more', '1', 'COMMENTS', 'COMMENT', 'ROOMS', 'Day', 'Show on Map', 'Select Room', '', '1', '2', '1', 'Name surname', 'Mail address', 'Detail', 'Share', 'Photo Albums', 'Video Albums', 'Multi-language & Hotel & Pension with Management Panel SCRİPTİ', 'COMPLETED!', 'Operation Completed Successfully.', 'ERROR!', 'An error occurred during the operation.', 'Departure Date', 'Date of return', 'Adult', 'Child', 'Make Reservation', '1', '<h2 style=\"font-family: Rubik, sans-serif; color: rgb(0, 0, 0);\">Lorem Ipsum?</h2><p style=\"text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Lorem Ipsum</strong><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\"> is simply dummy text of the printing and typesetting industry. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '<h2 style=\"font-family: Rubik, sans-serif; color: rgb(0, 0, 0);\">Lorem Ipsum?</h2><p style=\"font-family: Rubik, sans-serif; color: rgb(0, 0, 0);\">Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.<br></p><p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"> Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. </span></p><p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `widget3`
--

CREATE TABLE `widget3` (
  `widget_id` int(11) NOT NULL,
  `widget_hizmet` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_proje` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_yorum` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_galeri` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_urun` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_counter` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_referans` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_blog` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bwelcome` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_breferans` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bwelcome1` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_welcome` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_welcome1` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bhizmet` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bproje` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_byorum` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bblog` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_burun` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_html` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bbilgi` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bilgi` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ara` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bara` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ufiyat` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_usatinal` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bdiger` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_diger` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_bgaleri` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_twitter` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_btwitter` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_sayfayo` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_hizmetyo` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_projeyo` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_urunyo` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_blogyo` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ceviri1` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ceviri2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ceviri3` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ceviri4` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ceviri5` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ceviri6` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_ceviri7` varchar(255) COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rezgidis` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rezdonus` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rezyetiskin` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rezcocuk` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rezbuton` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_rez` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_html2` longtext COLLATE utf8_turkish_ci DEFAULT NULL,
  `widget_html3` longtext COLLATE utf8_turkish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `widget3`
--

INSERT INTO `widget3` (`widget_id`, `widget_hizmet`, `widget_proje`, `widget_yorum`, `widget_galeri`, `widget_urun`, `widget_counter`, `widget_referans`, `widget_blog`, `widget_bwelcome`, `widget_breferans`, `widget_bwelcome1`, `widget_welcome`, `widget_welcome1`, `widget_bhizmet`, `widget_bproje`, `widget_byorum`, `widget_bblog`, `widget_burun`, `widget_html`, `widget_bbilgi`, `widget_bilgi`, `widget_ara`, `widget_bara`, `widget_ufiyat`, `widget_usatinal`, `widget_bdiger`, `widget_diger`, `widget_bgaleri`, `widget_twitter`, `widget_btwitter`, `widget_sayfayo`, `widget_hizmetyo`, `widget_projeyo`, `widget_urunyo`, `widget_blogyo`, `widget_ceviri1`, `widget_ceviri2`, `widget_ceviri3`, `widget_ceviri4`, `widget_ceviri5`, `widget_ceviri6`, `widget_ceviri7`, `widget_rezgidis`, `widget_rezdonus`, `widget_rezyetiskin`, `widget_rezcocuk`, `widget_rezbuton`, `widget_rez`, `widget_html2`, `widget_html3`) VALUES
(1, '1', 'категории', 'ОПИСАНИЕ', '1', 'бронирование', 'связь', 'Все категории', '1', '© 2019 <a href=\"#\">Многоязычный & Гостиница & Хостел</a>  Все права защищены.', 'Введите номер телефона', 'меню', '0', 'КОМНАТА ДЕТАЛИ', 'Рекомендуемый ROOM', 'представить', 'Блоги', 'БЛОГ / ОБЪЯВЛЕНИЕ', 'связь', '<h2 style=\"\">BİZ KİMİZ?</h2><p style=\"text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Lorem Ipsum</strong><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">, dizgi ve baskı endüstrisinde kullanılan mıgır metinlerdir. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak üzere bir yazı galerisini alarak karıştırdığı 1500\'lerden beri endüstri standardı sahte metinler olarak kullanılmıştır. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Beşyüz yıl boyunca varlığını sürdürmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sıçramıştır. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">1960\'larda Lorem Ipsum pasajları da içeren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum sürümleri içeren masaüstü yayıncılık yazılımları ile popüler olmuştur.</span><br></p>', 'Читать больше', '1', 'КОММЕНТАРИИ', 'Оставить комментарий', 'КАМЕРЫ', 'день', 'Показать на карте', 'Выберите номер', '', '1', '2', '1', 'Имя Фамилия', 'Почтовый адрес', 'Detaylar', 'доля', 'Фотоальбомы', 'Видео альбомы', 'Многоязычный, отель и пансион с панелью управления SCRİPTİ', 'ЗАВЕРШЕН!', 'Операция завершена успешно.', 'ОШИБКА!', 'Произошла ошибка во время операции.', 'Дата отправления', 'Дата возвращения', 'для взрослых', 'дети', 'Сделать заказ', '1', '<h2 style=\"font-family: Rubik, sans-serif; color: rgb(0, 0, 0);\">Lorem Ipsum?</h2><p style=\"text-align: justify;\"><strong style=\"margin: 0px; padding: 0px; font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Lorem Ipsum</strong><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\"> is simply dummy text of the printing and typesetting industry. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </span></p><p style=\"text-align: justify;\"><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;\"=\"\">It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', '<h2 style=\"font-family: Rubik, sans-serif; color: rgb(0, 0, 0);\">Lorem Ipsum?</h2><p style=\"font-family: Rubik, sans-serif; color: rgb(0, 0, 0);\">Lorem Ipsum является стандартной \"рыбой\" для текстов на латинице с начала XVI века. В то время некий безымянный печатник создал большую коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов.<br></p><p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\"> Lorem Ipsum не только успешно пережил без заметных изменений пять веков, но и перешагнул в электронный дизайн. </span></p><p><span style=\"font-family: \" open=\"\" sans\",=\"\" arial,=\"\" sans-serif;=\"\" text-align:=\"\" justify;\"=\"\">Его популяризации в новое время послужили публикация листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной вёрстки типа Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.</span><br></p>');

-- --------------------------------------------------------

--
-- Table structure for table `yorum`
--

CREATE TABLE `yorum` (
  `yorum_id` int(11) NOT NULL,
  `yorum_tarih` timestamp NOT NULL DEFAULT current_timestamp(),
  `yorum_isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_mail` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_mesaj` longtext COLLATE utf8_turkish_ci NOT NULL,
  `yorum_cins` int(11) NOT NULL,
  `yorum_durum` int(11) NOT NULL DEFAULT 0,
  `yorum_konu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `yorumlar`
--

CREATE TABLE `yorumlar` (
  `yorum_id` int(11) NOT NULL,
  `yorum_icerik` longtext COLLATE utf8_turkish_ci NOT NULL,
  `yorum_isim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_resim` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `yorum_link` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `descr` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `keyword` varchar(255) COLLATE utf8_turkish_ci NOT NULL,
  `vitrin` int(11) NOT NULL,
  `yorum_kisa` longtext COLLATE utf8_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `yorumlar`
--

INSERT INTO `yorumlar` (`yorum_id`, `yorum_icerik`, `yorum_isim`, `yorum_resim`, `yorum_link`, `title`, `descr`, `keyword`, `vitrin`, `yorum_kisa`) VALUES
(1, '<p>Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. </p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/iIXp5R41qN8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p><p>Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. </p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/iIXp5R41qN8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p><p>Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır.</p>', 'Ahmet GENÇ', 'assets/img/yorumlar/2823125445.jpg', 'Firma Adı / Ünvan', 'Ahmet GENÇ', 'Ahmet GENÇ', 'Ahmet GENÇ', 0, 'Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. '),
(2, '<p>Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. </p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/iIXp5R41qN8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p><p>Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. </p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/iIXp5R41qN8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p><p>Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır.</p>', 'Mehmet YAŞLI', 'assets/img/yorumlar/2510427157.jpg', 'Firma Adı / Ünvan', 'Mehmet YAŞLI', 'Mehmet YAŞLI', 'Mehmet YAŞLI', 0, 'Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır.'),
(3, '<p>Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. </p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/iIXp5R41qN8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p><p>Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. </p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/iIXp5R41qN8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p><p>Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır.</p>', 'Mehmet GENÇ', 'assets/img/yorumlar/2760921041.jpg', 'Firma Adı / Ünvan', 'Mehmet GENÇ', 'Mehmet GENÇ', 'Mehmet GENÇ', 1, 'Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. '),
(4, '<p>Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. </p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/iIXp5R41qN8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p><p>Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. </p><p><iframe frameborder=\"0\" src=\"//www.youtube.com/embed/iIXp5R41qN8\" width=\"640\" height=\"360\" class=\"note-video-clip\"></iframe><br></p><p>Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır. Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır.</p>', 'Ahmet YAŞLI', 'assets/img/yorumlar/2918526491.jpg', 'Firma Adı / Ünvan', 'Ahmet YAŞLI', 'Ahmet YAŞLI', 'Ahmet YAŞLI', 1, 'Lorem Ipsum kullanmanın amacı, sürekli \'buraya metin gelecek, buraya metin gelecek\' yazmaya kıyasla daha dengeli bir harf dağılımı sağlayarak okunurluğu artırmasıdır.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albumler`
--
ALTER TABLE `albumler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `ayar`
--
ALTER TABLE `ayar`
  ADD PRIMARY KEY (`ayar_id`);

--
-- Indexes for table `bilgi`
--
ALTER TABLE `bilgi`
  ADD PRIMARY KEY (`bilgi_id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`counter_id`);

--
-- Indexes for table `dil`
--
ALTER TABLE `dil`
  ADD PRIMARY KEY (`dil_id`);

--
-- Indexes for table `flink`
--
ALTER TABLE `flink`
  ADD PRIMARY KEY (`flink_id`);

--
-- Indexes for table `fmenu`
--
ALTER TABLE `fmenu`
  ADD PRIMARY KEY (`fmenu_id`);

--
-- Indexes for table `fmenu2`
--
ALTER TABLE `fmenu2`
  ADD PRIMARY KEY (`fmenu_id`);

--
-- Indexes for table `fmenu3`
--
ALTER TABLE `fmenu3`
  ADD PRIMARY KEY (`fmenu_id`);

--
-- Indexes for table `hesap`
--
ALTER TABLE `hesap`
  ADD PRIMARY KEY (`hesap_id`);

--
-- Indexes for table `hit`
--
ALTER TABLE `hit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hizmetler`
--
ALTER TABLE `hizmetler`
  ADD PRIMARY KEY (`hizmet_id`);

--
-- Indexes for table `hsss`
--
ALTER TABLE `hsss`
  ADD PRIMARY KEY (`sss_id`);

--
-- Indexes for table `il`
--
ALTER TABLE `il`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `iletisim`
--
ALTER TABLE `iletisim`
  ADD PRIMARY KEY (`iletisim_id`);

--
-- Indexes for table `kategoriler`
--
ALTER TABLE `kategoriler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kategorilerb`
--
ALTER TABLE `kategorilerb`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kategorilerp`
--
ALTER TABLE `kategorilerp`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `kullanici`
--
ALTER TABLE `kullanici`
  ADD PRIMARY KEY (`kullanici_id`);

--
-- Indexes for table `mail`
--
ALTER TABLE `mail`
  ADD PRIMARY KEY (`mail_id`);

--
-- Indexes for table `markalar`
--
ALTER TABLE `markalar`
  ADD PRIMARY KEY (`hizmet_id`);

--
-- Indexes for table `mesajlar`
--
ALTER TABLE `mesajlar`
  ADD PRIMARY KEY (`mesaj_id`);

--
-- Indexes for table `meta`
--
ALTER TABLE `meta`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `meta2`
--
ALTER TABLE `meta2`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `meta3`
--
ALTER TABLE `meta3`
  ADD PRIMARY KEY (`meta_id`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`motor_id`);

--
-- Indexes for table `odeme`
--
ALTER TABLE `odeme`
  ADD PRIMARY KEY (`odeme_id`);

--
-- Indexes for table `omenu`
--
ALTER TABLE `omenu`
  ADD PRIMARY KEY (`omenu_id`);

--
-- Indexes for table `omenu2`
--
ALTER TABLE `omenu2`
  ADD PRIMARY KEY (`omenu_id`);

--
-- Indexes for table `omenu3`
--
ALTER TABLE `omenu3`
  ADD PRIMARY KEY (`omenu_id`);

--
-- Indexes for table `projeler`
--
ALTER TABLE `projeler`
  ADD PRIMARY KEY (`proje_id`);

--
-- Indexes for table `randevu`
--
ALTER TABLE `randevu`
  ADD PRIMARY KEY (`randevu_id`);

--
-- Indexes for table `referanslar`
--
ALTER TABLE `referanslar`
  ADD PRIMARY KEY (`referans_id`);

--
-- Indexes for table `resim`
--
ALTER TABLE `resim`
  ADD PRIMARY KEY (`resim_id`);

--
-- Indexes for table `resimb`
--
ALTER TABLE `resimb`
  ADD PRIMARY KEY (`resim_id`);

--
-- Indexes for table `resimgaleri`
--
ALTER TABLE `resimgaleri`
  ADD PRIMARY KEY (`resim_id`);

--
-- Indexes for table `resimh`
--
ALTER TABLE `resimh`
  ADD PRIMARY KEY (`resim_id`);

--
-- Indexes for table `resimkategori`
--
ALTER TABLE `resimkategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `resimp`
--
ALTER TABLE `resimp`
  ADD PRIMARY KEY (`resim_id`);

--
-- Indexes for table `resimy`
--
ALTER TABLE `resimy`
  ADD PRIMARY KEY (`resim_id`);

--
-- Indexes for table `sayfalar`
--
ALTER TABLE `sayfalar`
  ADD PRIMARY KEY (`sayfa_id`);

--
-- Indexes for table `siparis`
--
ALTER TABLE `siparis`
  ADD PRIMARY KEY (`siparis_id`);

--
-- Indexes for table `slayt`
--
ALTER TABLE `slayt`
  ADD PRIMARY KEY (`slayt_id`);

--
-- Indexes for table `smenu`
--
ALTER TABLE `smenu`
  ADD PRIMARY KEY (`smenu_id`);

--
-- Indexes for table `sms`
--
ALTER TABLE `sms`
  ADD PRIMARY KEY (`dil_id`);

--
-- Indexes for table `sosyal`
--
ALTER TABLE `sosyal`
  ADD PRIMARY KEY (`sosyal_id`);

--
-- Indexes for table `sss`
--
ALTER TABLE `sss`
  ADD PRIMARY KEY (`sss_id`);

--
-- Indexes for table `sube`
--
ALTER TABLE `sube`
  ADD PRIMARY KEY (`sube_id`);

--
-- Indexes for table `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`urun_id`);

--
-- Indexes for table `valbumler`
--
ALTER TABLE `valbumler`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `videogaleri`
--
ALTER TABLE `videogaleri`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `whatsapp`
--
ALTER TABLE `whatsapp`
  ADD PRIMARY KEY (`whats_id`);

--
-- Indexes for table `widget`
--
ALTER TABLE `widget`
  ADD PRIMARY KEY (`widget_id`);

--
-- Indexes for table `widget2`
--
ALTER TABLE `widget2`
  ADD PRIMARY KEY (`widget_id`);

--
-- Indexes for table `widget3`
--
ALTER TABLE `widget3`
  ADD PRIMARY KEY (`widget_id`);

--
-- Indexes for table `yorum`
--
ALTER TABLE `yorum`
  ADD PRIMARY KEY (`yorum_id`);

--
-- Indexes for table `yorumlar`
--
ALTER TABLE `yorumlar`
  ADD PRIMARY KEY (`yorum_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albumler`
--
ALTER TABLE `albumler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ayar`
--
ALTER TABLE `ayar`
  MODIFY `ayar_id` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bilgi`
--
ALTER TABLE `bilgi`
  MODIFY `bilgi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `counter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dil`
--
ALTER TABLE `dil`
  MODIFY `dil_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `flink`
--
ALTER TABLE `flink`
  MODIFY `flink_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fmenu`
--
ALTER TABLE `fmenu`
  MODIFY `fmenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fmenu2`
--
ALTER TABLE `fmenu2`
  MODIFY `fmenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fmenu3`
--
ALTER TABLE `fmenu3`
  MODIFY `fmenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hesap`
--
ALTER TABLE `hesap`
  MODIFY `hesap_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hit`
--
ALTER TABLE `hit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `hizmetler`
--
ALTER TABLE `hizmetler`
  MODIFY `hizmet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `hsss`
--
ALTER TABLE `hsss`
  MODIFY `sss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `il`
--
ALTER TABLE `il`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `iletisim`
--
ALTER TABLE `iletisim`
  MODIFY `iletisim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategoriler`
--
ALTER TABLE `kategoriler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategorilerb`
--
ALTER TABLE `kategorilerb`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategorilerp`
--
ALTER TABLE `kategorilerp`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kullanici`
--
ALTER TABLE `kullanici`
  MODIFY `kullanici_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mail`
--
ALTER TABLE `mail`
  MODIFY `mail_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `markalar`
--
ALTER TABLE `markalar`
  MODIFY `hizmet_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `mesajlar`
--
ALTER TABLE `mesajlar`
  MODIFY `mesaj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `meta`
--
ALTER TABLE `meta`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `meta2`
--
ALTER TABLE `meta2`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `meta3`
--
ALTER TABLE `meta3`
  MODIFY `meta_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `motor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `odeme`
--
ALTER TABLE `odeme`
  MODIFY `odeme_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `omenu`
--
ALTER TABLE `omenu`
  MODIFY `omenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `omenu2`
--
ALTER TABLE `omenu2`
  MODIFY `omenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `omenu3`
--
ALTER TABLE `omenu3`
  MODIFY `omenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `projeler`
--
ALTER TABLE `projeler`
  MODIFY `proje_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `randevu`
--
ALTER TABLE `randevu`
  MODIFY `randevu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `referanslar`
--
ALTER TABLE `referanslar`
  MODIFY `referans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `resim`
--
ALTER TABLE `resim`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=509;

--
-- AUTO_INCREMENT for table `resimb`
--
ALTER TABLE `resimb`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `resimgaleri`
--
ALTER TABLE `resimgaleri`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `resimh`
--
ALTER TABLE `resimh`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=236;

--
-- AUTO_INCREMENT for table `resimkategori`
--
ALTER TABLE `resimkategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resimp`
--
ALTER TABLE `resimp`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `resimy`
--
ALTER TABLE `resimy`
  MODIFY `resim_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sayfalar`
--
ALTER TABLE `sayfalar`
  MODIFY `sayfa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `siparis`
--
ALTER TABLE `siparis`
  MODIFY `siparis_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `slayt`
--
ALTER TABLE `slayt`
  MODIFY `slayt_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `smenu`
--
ALTER TABLE `smenu`
  MODIFY `smenu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `sms`
--
ALTER TABLE `sms`
  MODIFY `dil_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sosyal`
--
ALTER TABLE `sosyal`
  MODIFY `sosyal_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sss`
--
ALTER TABLE `sss`
  MODIFY `sss_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sube`
--
ALTER TABLE `sube`
  MODIFY `sube_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `urunler`
--
ALTER TABLE `urunler`
  MODIFY `urun_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `valbumler`
--
ALTER TABLE `valbumler`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `videogaleri`
--
ALTER TABLE `videogaleri`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `whatsapp`
--
ALTER TABLE `whatsapp`
  MODIFY `whats_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `widget`
--
ALTER TABLE `widget`
  MODIFY `widget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `widget2`
--
ALTER TABLE `widget2`
  MODIFY `widget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `widget3`
--
ALTER TABLE `widget3`
  MODIFY `widget_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `yorum`
--
ALTER TABLE `yorum`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `yorumlar`
--
ALTER TABLE `yorumlar`
  MODIFY `yorum_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
