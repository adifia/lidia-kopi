-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2021 at 12:08 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gis`
--

-- --------------------------------------------------------

--
-- Table structure for table `kopi`
--

CREATE TABLE `kopi` (
  `id_perusahaan` int(11) NOT NULL,
  `nama_usaha` varchar(30) NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `alamat` varchar(60) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `tahun_berdiri` varchar(4) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `wilayah_pemasaran` varchar(60) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kopi`
--

INSERT INTO `kopi` (`id_perusahaan`, `nama_usaha`, `nama_pemilik`, `alamat`, `no_hp`, `tahun_berdiri`, `jenis_produk`, `wilayah_pemasaran`, `lat`, `lng`) VALUES
(1, 'Java Ijen', 'H. Sumarhum', 'Desa Sukosari Lor Kec. Sukosari', '082302209999', '2010', 'greenbean, roasbean, dan kopi bubuk', 'Australia, Malaysia, Jakarta, Jember, Surabaya, Bondowoso', -7, 113),
(2, 'UD. Barokah', 'Tohari', 'Desa Sukosari Lor Kec. Sukosari', '085228902989', '2016', 'greenbean, roasbean, dan kopi bubuk', 'Medan, Bandung, Singapura, Malaysia', -7, 113),
(3, 'Bon\'d Coffee', 'Heru Setyo Wibowo', 'Desa Rejoagung Dsn. Leces RT/RW 01/01 Kec. Sumberwringin', '085258210008', '2014', 'greenbean, roasbean, dan kopi bubuk', '', -7, 113),
(4, 'UD. Dua Putra Ijen', 'Yatina', 'Desa Sukorejo RT/RW 07/02 Kec. Sumberwringin', '082336177859', '2005', 'greenbean dan bubuk', 'Jakarta, Jawa Timur', -7, 113),
(5, 'Sahabat Tiga Bintang', 'Muali', 'Desa Sukorejo Dusun Tengger RT/RW 09/03 Kec. Sumberwringin', '085331258412', '2012', 'HS, greenbean, bubuk', 'Jakarta, Sulawesi, Medan, Bandung, Kalimantan, Surabaya', -7, 114),
(6, 'Usaha Tani', 'Sukaryadi', 'Desa Sukorejo Dusun Kluncing RT/RW 18/05 Kec. Sumberwringin', '082302002815', '2012', 'HS basah, Greenbean', 'Bondowoso', -7, 114),
(7, 'Java Ijen Raung / Matt Coffee', 'Matt Husen', 'Desa Sukorejo Dusun Rejoagung Kec. Sumberwringin', '082340699929', '2016', 'bubuk, greenbean, roasbean', 'Jawa Tengah, Jakarta, Malaysia, Jawa Timur, Sumatera Timur', -7, 113),
(8, 'UD. Nuri', 'Sigit Kurniawan', 'Desa Rejoagung Dusun Leces Kec. Sumberwringin', '085204939192', '2011', 'bubuk, greenbean, roasbean, coklat kopi', 'Bondowoso, Jember, Tuban, Yogyakarta, Surabaya, Bali', -7, 113),
(9, 'Cap Jago', 'Bahriman', 'Desa Sumberwringin Dusun Darungan RT/RW 04/01 Kec. sumberwri', '085336038170', '2011', 'bubuk, roasbean', 'Bondowoso, Jember, Besuki', -7, 113),
(10, 'Dako Julie', 'Suyitno', 'Desa Sukosari Dusun Krajan RT/RW 06/03 Kec. Sukosari', '085230618257', '2013', 'bubuk, roasbean, greenbean', 'Eropa, Amerika, Jakarta, Kalimantan, Bali, Papua, Sulawesi, ', -7, 113),
(11, 'Jalakku', 'Rustam', 'Desa Sumberwringin Dusun Darungan RT/RW 16/03 Kec. Sumberwri', '085236805507', '2012', 'HS basah, Hs Kering, bubuk, greenbean', 'Bondowoso, Surabaya', -7, 113),
(12, 'Garuda', 'Timur Tyo Sudarno', 'Desa Sumberwringin Dusun Darungan Kec. Sumberwringin', '082313254667', '2007', 'bubuk, roasbean', 'Yogyakarta, Probolinggo, Surabaya, Bondowoso', -7, 113),
(13, 'UD. Sari Kembang', 'Yonatan Kurnia Chandra', 'Desa Sumberwringin Kec. Sumberwringin', '082338404294', '2002', 'kopi bubuk', 'Bondowoso', -7, 113),
(14, 'Agung Coffe', 'Suheri / Nanang Yuliharto', 'Desa Sukorejo Dusun Sukosawah RT/RW 23/06 Kec. Sumberwringin', '082264891992', '2011', 'roasbean, bubuk', 'Surabaya, Jakarta, Bondowoso', -7, 114),
(15, 'Cap Dua Gunung', 'Suriyanto', 'Desa Sumber Gading RT/RW 29/04 Kec. Sumberwringin', '082244149805', '2015', 'bubuk, greenbean, roasbean', '', -7, 113);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kopi`
--
ALTER TABLE `kopi`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kopi`
--
ALTER TABLE `kopi`
  MODIFY `id_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
