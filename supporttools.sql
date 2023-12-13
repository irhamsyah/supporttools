-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 22 Nov 2023 pada 08.10
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supporttools`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `areas`
--

CREATE TABLE `areas` (
  `id` bigint(20) NOT NULL,
  `nama_area` varchar(78) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `areas`
--

INSERT INTO `areas` (`id`, `nama_area`) VALUES
(1, 'Area Bangkalan 1'),
(2, 'Area Bangkalan 2'),
(3, 'Area Bangkalan 3'),
(4, 'Area Pamekasan 1'),
(5, 'Area Pamekasan 2'),
(6, 'Area Pamekasan 3'),
(7, 'Area Sampang 1'),
(8, 'Area Sampang 2'),
(9, 'Area Sidoarjo 1'),
(10, 'Area Sidoarjo 2'),
(11, 'Area Sidoarjo 3'),
(12, 'Area Sidoarjo 4'),
(13, 'Area Sidoarjo 5'),
(14, 'Area Sidoarjo 6'),
(15, 'Area Sidoarjo 7'),
(16, 'Area Sumenep 1'),
(17, 'Area Sumenep 2'),
(18, 'Area Sumenep 3'),
(19, 'Area Sumenep 4'),
(20, 'Area Surabaya 1'),
(21, 'Area Surabaya 10'),
(22, 'Area Surabaya 2'),
(23, 'Area Surabaya 3'),
(24, 'Area Surabaya 4'),
(25, 'Area Surabaya 5'),
(26, 'Area Surabaya 6'),
(27, 'Area Surabaya 7'),
(28, 'Area Surabaya 8'),
(29, 'Area Surabaya 9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventory`
--

CREATE TABLE `inventory` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cabang` varchar(100) NOT NULL,
  `region` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `kode_unit` int(11) DEFAULT NULL,
  `nama_unit` varchar(100) DEFAULT NULL,
  `jumlah_kdo` int(11) DEFAULT NULL,
  `kdo_aktif` int(11) DEFAULT NULL,
  `kdo_rusak` int(11) DEFAULT NULL,
  `kdo_jt_lelang` int(11) DEFAULT NULL,
  `kdo_hilang` int(11) DEFAULT NULL,
  `jml_sdm_bisnis` int(11) DEFAULT NULL,
  `jml_std_kdo` int(11) DEFAULT NULL,
  `gap_kdo` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `inventory`
--

INSERT INTO `inventory` (`id`, `cabang`, `region`, `area`, `kode_unit`, `nama_unit`, `jumlah_kdo`, `kdo_aktif`, `kdo_rusak`, `kdo_jt_lelang`, `kdo_hilang`, `jml_sdm_bisnis`, `jml_std_kdo`, `gap_kdo`, `keterangan`, `created_at`, `updated_at`) VALUES
(2, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_1', 90143, 'M.WNKM-Wonokromo', 16, 16, 0, 0, 0, 10, 20, -4, 'tes', NULL, '2023-10-30 21:45:45'),
(3, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_1', 92694, 'M.WNLO-Wonocolo', 13, 13, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_1', 93675, 'M.GAYU-Gayungan', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_1', 93907, 'M.WNK2-Wonokromo 2', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_10', 90475, 'M.SMPR-Semampir', 14, 12, 1, 1, 0, 12, 17, -5, NULL, NULL, '2023-10-26 03:49:10'),
(7, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_10', 92136, 'M.PBCT-Pabean Cantian', 14, 10, 0, 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_10', 92351, 'M.SMP2-Semampir 2', 8, 8, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_10', 93316, 'M.SMP3-Semampir 3', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_10', 93698, 'M.PBC2-Pabean Cantian 2', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_2', 92215, 'M.RGKT-Rungkut', 4, 4, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_2', 92261, 'M.SKLG-Sukolilo Gresik', 12, 12, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_2', 93318, 'M.SKG2-Sukolilo Gresik 2', 7, 6, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_2', 93618, 'M.TSJY-Tenggilis Mejoyo', 6, 6, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_2', 93694, 'M.GYAR-Gunung anyar', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_3', 91987, 'M.GBSB-Gubeng Surabaya', 9, 9, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_3', 92301, 'M.TGRI-Tegalsari', 17, 16, 0, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_3', 93679, 'M.GNTG-Genteng', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_3', 93723, 'M.GUB2-Gubeng 2', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_3', 93909, 'M.TGI2-Tegalsari 2', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_4', 92282, 'M.TBSR-Tambaksari', 13, 13, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_4', 92350, 'M.TBK2-Tambaksari 2', 6, 1, 0, 5, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_4', 93627, 'M.BLAK-Bulak', 7, 6, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_4', 93704, 'M.MYJO-Mulyorejo', 6, 6, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_4', 93711, 'M.TBI3-Tambaksari 3', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_4', 93715, 'M.MYJ2-Mulyorejo 2', 7, 6, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_5', 90138, 'M.KNJR-Kenjeran', 21, 16, 1, 4, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_5', 91719, 'M.SIMT-Simokerto', 10, 10, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_5', 92689, 'M.KNJ2-Kenjeran 2', 8, 7, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_5', 92693, 'M.SIM2-Simokerto 2', 7, 6, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_5', 93317, 'M.SIM3-Simokerto 3', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_5', 93632, 'M.BLA2-Bulak 2', 6, 6, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_6', 92337, 'M.JBGN-Jambangan', 22, 15, 2, 5, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_6', 93635, 'M.KRPL-Karangpilang', 9, 9, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_6', 93684, 'M.LRSI-Lakarsantri', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_6', 93693, 'M.WYUG-Wiyung', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_6', 93716, 'M.DUPS-Dukuh Pakis', 6, 5, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(38, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_7', 90132, 'M.BYRP-Banyu Urip', 11, 11, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_7', 91701, 'M.SWHN-Sawahan', 16, 15, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_7', 92686, 'M.BYU2-Banyu Urip 2', 7, 6, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_7', 93322, 'M.SOML-Suko Manunggal', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_7', 93623, 'M.SOM2-Sukomanunggal 2', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_8', 90134, 'M.TNDS-Tandes', 9, 9, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_8', 92123, 'M.SMKP-Sambikerep', 11, 10, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_8', 92691, 'M.MNK2-Manukan 2', 9, 7, 2, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_8', 93626, 'M.ASWO-Asemrowo', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(47, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_8', 93731, 'M.BNWO-Benowo', 7, 7, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(48, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_9', 90133, 'M.KRBG-Krembangan', 16, 16, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_9', 91930, 'M.BBTN-Bubutan', 8, 7, 1, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_9', 92690, 'M.KRBG-Krembangan', 6, 6, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_9', 93315, 'M.BTN2-Bubutan 2', 5, 5, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'PNM Surabaya', 'Reg_Surabaya_1', 'Area_Surabaya_1', 90132, 'M.BYRP- Banyu Urip', 10, 10, 0, 0, 0, 10, 10, 0, 'tes add', '2023-10-30 22:26:23', '2023-10-30 22:26:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `itppis`
--

CREATE TABLE `itppis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cabang` varchar(100) DEFAULT NULL,
  `id_region` int(11) DEFAULT NULL,
  `id_area` int(11) DEFAULT NULL,
  `kode_unit` int(11) DEFAULT NULL,
  `jumlah_laptop_pc` int(11) DEFAULT NULL,
  `laptop_pc_aktif` int(11) DEFAULT NULL,
  `laptop_pc_rusak` int(11) DEFAULT NULL,
  `laptop_pc_jt_lelang` int(11) DEFAULT NULL,
  `laptop_pc_hilang` int(11) DEFAULT NULL,
  `jml_fao` int(11) DEFAULT NULL,
  `jml_std_laptop` int(11) DEFAULT NULL,
  `gap_laptop` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `itppis`
--

INSERT INTO `itppis` (`id`, `cabang`, `id_region`, `id_area`, `kode_unit`, `jumlah_laptop_pc`, `laptop_pc_aktif`, `laptop_pc_rusak`, `laptop_pc_jt_lelang`, `laptop_pc_hilang`, `jml_fao`, `jml_std_laptop`, `gap_laptop`, `keterangan`, `created_at`, `updated_at`) VALUES
(446, 'PNM Surabaya', 1, 20, 90143, 16, 3, 0, 0, 0, 3, 3, 0, 'tes', NULL, '2023-11-15 02:50:30'),
(447, 'PNM Surabaya', 1, 20, 92694, 13, 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(448, 'PNM Surabaya', 1, 20, 93675, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(449, 'PNM Surabaya', 1, 20, 93907, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(450, 'PNM Surabaya', 1, 21, 90475, 14, 12, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(451, 'PNM Surabaya', 1, 21, 92136, 14, 10, 0, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(452, 'PNM Surabaya', 1, 21, 92351, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(453, 'PNM Surabaya', 1, 21, 93316, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(454, 'PNM Surabaya', 1, 21, 93698, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(455, 'PNM Surabaya', 1, 22, 92215, 4, 4, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(456, 'PNM Surabaya', 1, 22, 92261, 12, 12, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(457, 'PNM Surabaya', 1, 22, 93318, 7, 6, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(458, 'PNM Surabaya', 1, 22, 93618, 6, 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(459, 'PNM Surabaya', 1, 22, 93694, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(460, 'PNM Surabaya', 1, 23, 91987, 9, 9, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(461, 'PNM Surabaya', 1, 23, 92301, 17, 16, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(462, 'PNM Surabaya', 1, 23, 93679, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(463, 'PNM Surabaya', 1, 23, 93723, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(464, 'PNM Surabaya', 1, 23, 93909, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(465, 'PNM Surabaya', 1, 24, 92282, 13, 13, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(466, 'PNM Surabaya', 1, 24, 92350, 6, 1, 0, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(467, 'PNM Surabaya', 1, 24, 93627, 7, 6, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(468, 'PNM Surabaya', 1, 24, 93704, 6, 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(469, 'PNM Surabaya', 1, 24, 93711, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(470, 'PNM Surabaya', 1, 24, 93715, 7, 6, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(471, 'PNM Surabaya', 1, 25, 90138, 21, 16, 1, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(472, 'PNM Surabaya', 1, 25, 91719, 10, 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(473, 'PNM Surabaya', 1, 25, 92689, 8, 7, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(474, 'PNM Surabaya', 1, 25, 92693, 7, 6, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(475, 'PNM Surabaya', 1, 25, 93317, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(476, 'PNM Surabaya', 1, 25, 93632, 6, 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(477, 'PNM Surabaya', 1, 26, 92337, 22, 15, 2, 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(478, 'PNM Surabaya', 1, 26, 93635, 9, 9, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(479, 'PNM Surabaya', 1, 26, 93684, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(480, 'PNM Surabaya', 1, 26, 93693, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(481, 'PNM Surabaya', 1, 26, 93716, 6, 5, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(482, 'PNM Surabaya', 1, 27, 90132, 11, 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(483, 'PNM Surabaya', 1, 27, 91701, 16, 15, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(484, 'PNM Surabaya', 1, 27, 92686, 7, 6, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(485, 'PNM Surabaya', 1, 27, 93322, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(486, 'PNM Surabaya', 1, 27, 93623, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(487, 'PNM Surabaya', 1, 28, 90134, 9, 9, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(488, 'PNM Surabaya', 1, 28, 92123, 11, 10, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(489, 'PNM Surabaya', 1, 28, 92691, 9, 7, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(490, 'PNM Surabaya', 1, 28, 93626, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(491, 'PNM Surabaya', 1, 28, 93731, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(492, 'PNM Surabaya', 1, 29, 90133, 16, 16, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(493, 'PNM Surabaya', 1, 29, 91930, 8, 7, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(494, 'PNM Surabaya', 1, 29, 92690, 6, 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(495, 'PNM Surabaya', 1, 29, 93315, 5, 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(496, 'PNM Surabaya', 1, 29, 93727, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(497, 'PNM Surabaya', 2, 1, 91332, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(498, 'PNM Surabaya', 2, 1, 91679, 8, 7, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(499, 'PNM Surabaya', 2, 1, 92318, 8, 7, 0, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(500, 'PNM Surabaya', 2, 1, 93115, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(501, 'PNM Surabaya', 2, 1, 93116, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(502, 'PNM Surabaya', 2, 2, 91148, 6, 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(503, 'PNM Surabaya', 2, 2, 91151, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(504, 'PNM Surabaya', 2, 2, 91183, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(505, 'PNM Surabaya', 2, 2, 92145, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(506, 'PNM Surabaya', 2, 2, 93114, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(507, 'PNM Surabaya', 2, 3, 90846, 8, 7, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(508, 'PNM Surabaya', 2, 3, 91162, 8, 7, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(509, 'PNM Surabaya', 2, 3, 91197, 6, 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(510, 'PNM Surabaya', 2, 3, 91224, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(511, 'PNM Surabaya', 2, 3, 91304, 6, 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(512, 'PNM Surabaya', 2, 3, 91401, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(513, 'PNM Surabaya', 2, 9, 90856, 16, 12, 4, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(514, 'PNM Surabaya', 2, 9, 91800, 11, 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(515, 'PNM Surabaya', 2, 9, 92218, 10, 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(516, 'PNM Surabaya', 2, 9, 92362, 11, 8, 3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(517, 'PNM Surabaya', 2, 9, 92669, 10, 9, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(518, 'PNM Surabaya', 2, 10, 90136, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(519, 'PNM Surabaya', 2, 10, 90139, 9, 7, 0, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(520, 'PNM Surabaya', 2, 10, 92232, 9, 8, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(521, 'PNM Surabaya', 2, 10, 92260, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(522, 'PNM Surabaya', 2, 10, 92366, 14, 10, 0, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(523, 'PNM Surabaya', 2, 10, 93908, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(524, 'PNM Surabaya', 2, 11, 90142, 10, 9, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(525, 'PNM Surabaya', 2, 11, 90870, 6, 6, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(526, 'PNM Surabaya', 2, 11, 90871, 11, 10, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(527, 'PNM Surabaya', 2, 11, 92056, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(528, 'PNM Surabaya', 2, 11, 93918, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(529, 'PNM Surabaya', 2, 12, 90140, 10, 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(530, 'PNM Surabaya', 2, 12, 90141, 10, 9, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(531, 'PNM Surabaya', 2, 12, 92336, 16, 14, 2, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(532, 'PNM Surabaya', 2, 12, 92370, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(533, 'PNM Surabaya', 2, 12, 93002, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(534, 'PNM Surabaya', 2, 13, 90137, 12, 9, 3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(535, 'PNM Surabaya', 2, 13, 91737, 8, 7, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(536, 'PNM Surabaya', 2, 13, 91941, 10, 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(537, 'PNM Surabaya', 2, 13, 92667, 11, 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(538, 'PNM Surabaya', 2, 13, 93611, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(539, 'PNM Surabaya', 2, 14, 91464, 26, 13, 13, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(540, 'PNM Surabaya', 2, 14, 91660, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(541, 'PNM Surabaya', 2, 14, 92000, 8, 7, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(542, 'PNM Surabaya', 2, 14, 93326, 5, 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(543, 'PNM Surabaya', 2, 14, 93663, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(544, 'PNM Surabaya', 2, 15, 90147, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(545, 'PNM Surabaya', 2, 15, 90148, 9, 9, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(546, 'PNM Surabaya', 2, 15, 91631, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(547, 'PNM Surabaya', 2, 15, 92552, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(548, 'PNM Surabaya', 2, 15, 93163, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(549, 'PNM Surabaya', 3, 4, 90615, 16, 8, 8, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(550, 'PNM Surabaya', 3, 4, 92149, 7, 6, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(551, 'PNM Surabaya', 3, 4, 92542, 7, 6, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(552, 'PNM Surabaya', 3, 4, 93120, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(553, 'PNM Surabaya', 3, 5, 90550, 10, 9, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(554, 'PNM Surabaya', 3, 5, 90614, 9, 9, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(555, 'PNM Surabaya', 3, 5, 92187, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(556, 'PNM Surabaya', 3, 5, 92188, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(557, 'PNM Surabaya', 3, 6, 90551, 7, 6, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(558, 'PNM Surabaya', 3, 6, 91021, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(559, 'PNM Surabaya', 3, 6, 91223, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(560, 'PNM Surabaya', 3, 6, 91593, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(561, 'PNM Surabaya', 3, 6, 93119, 8, 7, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(562, 'PNM Surabaya', 3, 7, 90952, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(563, 'PNM Surabaya', 3, 7, 90953, 11, 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(564, 'PNM Surabaya', 3, 7, 90991, 7, 4, 3, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(565, 'PNM Surabaya', 3, 7, 90994, 11, 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(566, 'PNM Surabaya', 3, 7, 91221, 9, 9, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(567, 'PNM Surabaya', 3, 8, 90653, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(568, 'PNM Surabaya', 3, 8, 90989, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(569, 'PNM Surabaya', 3, 8, 90990, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(570, 'PNM Surabaya', 3, 8, 90992, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(571, 'PNM Surabaya', 3, 16, 91089, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(572, 'PNM Surabaya', 3, 16, 91334, 10, 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(573, 'PNM Surabaya', 3, 16, 93313, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(574, 'PNM Surabaya', 3, 16, 93314, 9, 9, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(575, 'PNM Surabaya', 3, 17, 91076, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(576, 'PNM Surabaya', 3, 17, 91566, 5, 5, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(577, 'PNM Surabaya', 3, 17, 92098, 11, 11, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(578, 'PNM Surabaya', 3, 17, 92271, 9, 9, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(579, 'PNM Surabaya', 3, 17, 93118, 7, 6, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(580, 'PNM Surabaya', 3, 18, 90150, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(581, 'PNM Surabaya', 3, 18, 90152, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(582, 'PNM Surabaya', 3, 18, 90904, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(583, 'PNM Surabaya', 3, 18, 91705, 7, 6, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(584, 'PNM Surabaya', 3, 18, 92182, 9, 9, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(585, 'PNM Surabaya', 3, 19, 90153, 9, 8, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(586, 'PNM Surabaya', 3, 19, 90154, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(587, 'PNM Surabaya', 3, 19, 92541, 10, 10, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(588, 'PNM Surabaya', 3, 19, 93117, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(589, 'PNM Surabaya', 2, 1, 91150, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(590, 'PNM Surabaya', 3, 4, 91084, 8, 8, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(591, 'PNM Surabaya', 3, 5, 91238, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(592, 'PNM Surabaya', 3, 8, 90993, 7, 7, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(593, 'PNM Surabaya', 3, 16, 90151, 8, 7, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(594, 'PNM Surabaya', 3, 19, 91363, 9, 8, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenispelatihans`
--

CREATE TABLE `jenispelatihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenisunits`
--

CREATE TABLE `jenisunits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `jenis_unit` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kodecabang`
--

CREATE TABLE `kodecabang` (
  `kode_cab` char(3) NOT NULL DEFAULT '',
  `nama_cab` char(30) NOT NULL DEFAULT '',
  `DATA_CAB` char(30) NOT NULL DEFAULT 'datasource_mtech',
  `IP_CAB` char(15) DEFAULT 'localhost',
  `DATABASE_CAB` char(50) NOT NULL DEFAULT '',
  `GL_RAK_DB` char(20) NOT NULL DEFAULT '',
  `GL_RAK_CR` char(20) NOT NULL DEFAULT '',
  `tipe_cab` tinyint(4) NOT NULL DEFAULT 0,
  `PWD_CAB` char(50) NOT NULL DEFAULT 'mmsPNMonl1n3',
  `DRIVER_CAB` char(50) NOT NULL DEFAULT 'MySQL ODBC 3.51 Driver',
  `USER_CAB` char(50) NOT NULL DEFAULT 'root',
  `KODE_CAB_INDUK` char(3) NOT NULL DEFAULT '',
  `NAMA_CAB_INDUK` char(50) NOT NULL DEFAULT '',
  `Port_Cab` char(4) DEFAULT NULL,
  `posisi_konsolidasi` char(3) DEFAULT 'K00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=FIXED;

--
-- Dumping data untuk tabel `kodecabang`
--

INSERT INTO `kodecabang` (`kode_cab`, `nama_cab`, `DATA_CAB`, `IP_CAB`, `DATABASE_CAB`, `GL_RAK_DB`, `GL_RAK_CR`, `tipe_cab`, `PWD_CAB`, `DRIVER_CAB`, `USER_CAB`, `KODE_CAB_INDUK`, `NAMA_CAB_INDUK`, `Port_Cab`, `posisi_konsolidasi`) VALUES
('001', 'KANTOR PUSAT', 'mydata', '192.168.1.125', 'Mtechkonve', '10704', '20904', 1, 'mmsPNMonl1n3', 'MySQL ODBC 3.51 Driver', 'root', '', '', '3307', 'K00'),
('002', 'KANTOR TANGGULANGIN', 'datasource_cab1', '103.77.157.186', 'mtechkonve', '10701', '20901', 2, 'mmsPNMonl1n3', 'MySQL ODBC 3.51 Driver', 'root', '', '', '3307', 'K01'),
('003', 'KANTOR MALANG', 'datasource_cab2', '103.77.157.24', 'mtechkonve', '21102', '21102', 2, 'mmsPNMonl1n3', 'MySQL ODBC 3.51 Driver', 'root', '', '', '3307', 'K02'),
('005', 'KANTOR PURWOSARI', 'datasource_cab4', '103.77.157.210', 'mtechkonve', '10703', '20903', 2, 'mmsPNMonl1n3', 'MySQL ODBC 3.51 Driver', 'root', '', '', '3307', 'K03'),
('004', 'KANTOR PASURUAN', 'datasource_cab3', '103.77.157.42', 'mtechkonve', '10703', '20903', 2, 'mmsPNMonl1n3', 'MySQL ODBC 3.51 Driver', 'root', '', '', '3307', 'K03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `logo`
--

CREATE TABLE `logo` (
  `id` int(11) NOT NULL,
  `logo_name` varchar(250) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `logo`
--

INSERT INTO `logo` (`id`, `logo_name`) VALUES
(1, '1604728040.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mareas`
--

CREATE TABLE `mareas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_area` varchar(75) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2023_10_25_083911_create_inventory_table', 1),
(2, '2023_10_26_033124_create_unit_table', 1),
(3, '2023_10_26_061554_create_regions_table', 1),
(4, '2023_10_26_062304_create_areas_table', 1),
(5, '2023_10_31_103111_create_namapelatihans_table', 1),
(6, '2023_10_31_124434_create_pkuusers_table', 1),
(7, '2023_10_31_125957_create_jenispelatihans_table', 1),
(8, '2023_10_31_130027_create_jenisunits_table', 1),
(9, '2023_10_31_131733_create_pelatihans_table', 1),
(10, '2023_11_01_022531_create_pkudatas_table', 1),
(11, '2023_11_07_053306_create_sdmulamms_table', 1),
(12, '2023_11_07_041228_create_sdmmekaars_table', 1),
(13, '2023_11_08_084908_create_unitulamms_table', 2),
(14, '2023_11_10_095616_create_itppis_table', 3),
(15, '2023_11_14_142422_create_cobas_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `namapelatihans`
--

CREATE TABLE `namapelatihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pelatihan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `namapelatihans`
--

INSERT INTO `namapelatihans` (`id`, `nama_pelatihan`) VALUES
(1, 'Mba Maya'),
(2, 'Kak Wulan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelatihans`
--

CREATE TABLE `pelatihans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pic` varchar(40) NOT NULL,
  `jnspelatihan_id` int(11) NOT NULL,
  `nmpelatihan_id` int(11) NOT NULL,
  `jenisunit_id` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `realisasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkudatas`
--

CREATE TABLE `pkudatas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pic_id` int(11) NOT NULL,
  `mba_maya_mekaar_target` varchar(255) DEFAULT NULL,
  `mba_maya_mekaar_realisasi` varchar(255) DEFAULT NULL,
  `mba_maya_ulamm_target` varchar(255) DEFAULT NULL,
  `mba_maya_ulamm_realisasi` varchar(255) DEFAULT NULL,
  `kak_wulan_mekaar_target` varchar(255) DEFAULT NULL,
  `kak_wulan_mekaar_realisasi` varchar(255) DEFAULT NULL,
  `pameran_target` varchar(255) DEFAULT NULL,
  `pameran_realisasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pkudatas`
--

INSERT INTO `pkudatas` (`id`, `pic_id`, `mba_maya_mekaar_target`, `mba_maya_mekaar_realisasi`, `mba_maya_ulamm_target`, `mba_maya_ulamm_realisasi`, `kak_wulan_mekaar_target`, `kak_wulan_mekaar_realisasi`, `pameran_target`, `pameran_realisasi`) VALUES
(1, 1, '19', '10', '20', '12', '20', '10', '5', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkuusers`
--

CREATE TABLE `pkuusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pkuusers`
--

INSERT INTO `pkuusers` (`id`, `nama`) VALUES
(1, 'MIO'),
(2, 'RAL'),
(3, 'HTA'),
(4, 'PIR');

-- --------------------------------------------------------

--
-- Struktur dari tabel `regions`
--

CREATE TABLE `regions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_region` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `regions`
--

INSERT INTO `regions` (`id`, `nama_region`) VALUES
(1, 'Reg Surabaya 1'),
(2, 'Reg Surabaya 2'),
(3, 'Reg Surabaya 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `samar`
--

CREATE TABLE `samar` (
  `id` bigint(20) NOT NULL,
  `nama_area` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `samar`
--

INSERT INTO `samar` (`id`, `nama_area`) VALUES
(1, 'Area Bangkalan 1'),
(2, 'Area Bangkalan 2'),
(3, 'Area Bangkalan 3'),
(4, 'Area Pamekasan 1'),
(5, 'Area Pamekasan 2'),
(6, 'Area Pamekasan 3'),
(7, 'Area Sampang 1'),
(8, 'Area Sampang 2'),
(9, 'Area Sidoarjo 1'),
(10, 'Area Sidoarjo 2'),
(11, 'Area Sidoarjo 3'),
(12, 'Area Sidoarjo 4'),
(13, 'Area Sidoarjo 5'),
(14, 'Area Sidoarjo 6'),
(15, 'Area Sidoarjo 7'),
(16, 'Area Sumenep 1'),
(17, 'Area Sumenep 2'),
(18, 'Area Sumenep 3'),
(19, 'Area Sumenep 4'),
(20, 'Area Surabaya 1'),
(21, 'Area Surabaya 10'),
(22, 'Area Surabaya 2'),
(23, 'Area Surabaya 3'),
(24, 'Area Surabaya 4'),
(25, 'Area Surabaya 5'),
(26, 'Area Surabaya 6'),
(27, 'Area Surabaya 7'),
(28, 'Area Surabaya 8'),
(29, 'Area Surabaya 9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sdmmekaars`
--

CREATE TABLE `sdmmekaars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_unit` varchar(60) DEFAULT NULL,
  `noa_nasabah` int(11) DEFAULT NULL,
  `kum` int(11) DEFAULT NULL,
  `sao_standard` int(11) DEFAULT NULL,
  `sao_realisasi` int(11) DEFAULT NULL,
  `ao_standard` int(11) DEFAULT NULL,
  `ao_realisasi` int(11) DEFAULT NULL,
  `fao_standard` int(11) DEFAULT NULL,
  `fao_realisasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `sdmmekaars`
--

INSERT INTO `sdmmekaars` (`id`, `kode_unit`, `noa_nasabah`, `kum`, `sao_standard`, `sao_realisasi`, `ao_standard`, `ao_realisasi`, `fao_standard`, `fao_realisasi`) VALUES
(1, '90132', 100000, 1, 6, 4, 12, 10, 2, 1),
(2, '90133', 0, 0, 6, 4, 12, 10, 2, 1),
(3, '90134', NULL, NULL, 6, 4, 12, 10, 2, 1),
(4, '90136', NULL, NULL, 6, 4, 12, 10, 2, 1),
(5, '90137', NULL, NULL, 6, 4, 12, 10, 2, 1),
(6, '90138', NULL, NULL, 6, 4, 12, 10, 2, 1),
(7, '90139', NULL, NULL, 6, 4, 12, 10, 2, 1),
(8, '90140', NULL, NULL, 6, 4, 12, 10, 2, 1),
(9, '90141', NULL, NULL, 6, 4, 12, 10, 2, 1),
(10, '90142', NULL, NULL, 6, 4, 12, 10, 2, 1),
(11, '90143', NULL, NULL, 6, 4, 12, 10, 2, 1),
(12, '90147', NULL, NULL, 6, 4, 12, 10, 2, 1),
(13, '90148', NULL, NULL, 6, 4, 12, 10, 2, 1),
(14, '90150', NULL, NULL, 6, 4, 12, 10, 2, 1),
(15, '90151', NULL, NULL, 6, 4, 12, 10, 2, 1),
(16, '90152', NULL, NULL, 6, 4, 12, 10, 2, 1),
(17, '90153', NULL, NULL, 6, 4, 12, 10, 2, 1),
(18, '90154', NULL, NULL, 6, 4, 12, 10, 2, 1),
(19, '90475', NULL, NULL, 6, 4, 12, 10, 2, 1),
(20, '90550', NULL, NULL, 6, 4, 12, 10, 2, 1),
(21, '90551', NULL, NULL, 6, 4, 12, 10, 2, 1),
(22, '90614', NULL, NULL, 6, 4, 12, 10, 2, 1),
(23, '90615', NULL, NULL, 6, 4, 12, 10, 2, 1),
(24, '90653', NULL, NULL, 6, 4, 12, 10, 2, 1),
(25, '90846', NULL, NULL, 6, 4, 12, 10, 2, 1),
(26, '90856', NULL, NULL, 6, 4, 12, 10, 2, 1),
(27, '90870', NULL, NULL, 6, 4, 12, 10, 2, 1),
(28, '90871', NULL, NULL, 6, 4, 12, 10, 2, 1),
(29, '90904', NULL, NULL, 6, 4, 12, 10, 2, 1),
(30, '90952', NULL, NULL, 6, 4, 12, 10, 2, 1),
(31, '90953', NULL, NULL, 6, 4, 12, 10, 2, 1),
(32, '90989', NULL, NULL, 6, 4, 12, 10, 2, 1),
(33, '90990', NULL, NULL, 6, 4, 12, 10, 2, 1),
(34, '90991', NULL, NULL, 6, 4, 12, 10, 2, 1),
(35, '90992', NULL, NULL, 6, 4, 12, 10, 2, 1),
(36, '90993', NULL, NULL, 6, 4, 12, 10, 2, 1),
(37, '90994', NULL, NULL, 6, 4, 12, 10, 2, 1),
(38, '91021', NULL, NULL, 6, 4, 12, 10, 2, 1),
(39, '91076', NULL, NULL, 6, 4, 12, 10, 2, 1),
(40, '91084', NULL, NULL, 6, 4, 12, 10, 2, 1),
(41, '91089', NULL, NULL, 6, 4, 12, 10, 2, 1),
(42, '91148', NULL, NULL, 6, 4, 12, 10, 2, 1),
(43, '91150', NULL, NULL, 6, 4, 12, 10, 2, 1),
(44, '91151', NULL, NULL, 6, 4, 12, 10, 2, 1),
(45, '91162', NULL, NULL, 6, 4, 12, 10, 2, 1),
(46, '91183', NULL, NULL, 6, 4, 12, 10, 2, 1),
(47, '91197', NULL, NULL, 6, 4, 12, 10, 2, 1),
(48, '91221', NULL, NULL, 6, 4, 12, 10, 2, 1),
(49, '91223', NULL, NULL, 6, 4, 12, 10, 2, 1),
(50, '91224', NULL, NULL, 6, 4, 12, 10, 2, 1),
(51, '91238', NULL, NULL, 6, 4, 12, 10, 2, 1),
(52, '91304', NULL, NULL, 6, 4, 12, 10, 2, 1),
(53, '91332', NULL, NULL, 6, 4, 12, 10, 2, 1),
(54, '91334', NULL, NULL, 6, 4, 12, 10, 2, 1),
(55, '91363', NULL, NULL, 6, 4, 12, 10, 2, 1),
(56, '91401', NULL, NULL, 6, 4, 12, 10, 2, 1),
(57, '91464', NULL, NULL, 6, 4, 12, 10, 2, 1),
(58, '91566', NULL, NULL, 6, 4, 12, 10, 2, 1),
(59, '91593', NULL, NULL, 6, 4, 12, 10, 2, 1),
(60, '91631', NULL, NULL, 6, 4, 12, 10, 2, 1),
(61, '91660', NULL, NULL, 6, 4, 12, 10, 2, 1),
(62, '91679', NULL, NULL, 6, 4, 12, 10, 2, 1),
(63, '91701', NULL, NULL, 6, 4, 12, 10, 2, 1),
(64, '91705', NULL, NULL, 6, 4, 12, 10, 2, 1),
(65, '91719', NULL, NULL, 6, 4, 12, 10, 2, 1),
(66, '91737', NULL, NULL, 6, 4, 12, 10, 2, 1),
(67, '91800', NULL, NULL, 6, 4, 12, 10, 2, 1),
(68, '91930', NULL, NULL, 6, 4, 12, 10, 2, 1),
(69, '91941', NULL, NULL, 6, 4, 12, 10, 2, 1),
(70, '91987', NULL, NULL, 6, 4, 12, 10, 2, 1),
(71, '92000', NULL, NULL, 6, 4, 12, 10, 2, 1),
(72, '92056', NULL, NULL, 6, 4, 12, 10, 2, 1),
(73, '92098', NULL, NULL, 6, 4, 12, 10, 2, 1),
(74, '92123', NULL, NULL, 6, 4, 12, 10, 2, 1),
(75, '92136', NULL, NULL, 6, 4, 12, 10, 2, 1),
(76, '92145', NULL, NULL, 6, 4, 12, 10, 2, 1),
(77, '92149', NULL, NULL, 6, 4, 12, 10, 2, 1),
(78, '92182', NULL, NULL, 6, 4, 12, 10, 2, 1),
(79, '92187', NULL, NULL, 6, 4, 12, 10, 2, 1),
(80, '92188', NULL, NULL, 6, 4, 12, 10, 2, 1),
(81, '92215', NULL, NULL, 6, 4, 12, 10, 2, 1),
(82, '92218', NULL, NULL, 6, 4, 12, 10, 2, 1),
(83, '92232', NULL, NULL, 6, 4, 12, 10, 2, 1),
(84, '92260', NULL, NULL, 6, 4, 12, 10, 2, 1),
(85, '92261', NULL, NULL, 6, 4, 12, 10, 2, 1),
(86, '92271', NULL, NULL, 6, 4, 12, 10, 2, 1),
(87, '92282', NULL, NULL, 6, 4, 12, 10, 2, 1),
(88, '92301', NULL, NULL, 6, 4, 12, 10, 2, 1),
(89, '92318', NULL, NULL, 6, 4, 12, 10, 2, 1),
(90, '92336', NULL, NULL, 6, 4, 12, 10, 2, 1),
(91, '92337', NULL, NULL, 6, 4, 12, 10, 2, 1),
(92, '92350', NULL, NULL, 6, 4, 12, 10, 2, 1),
(93, '92351', NULL, NULL, 6, 4, 12, 10, 2, 1),
(94, '92362', NULL, NULL, 6, 4, 12, 10, 2, 1),
(95, '92366', NULL, NULL, 6, 4, 12, 10, 2, 1),
(96, '92370', NULL, NULL, 6, 4, 12, 10, 2, 1),
(97, '92541', NULL, NULL, 6, 4, 12, 10, 2, 1),
(98, '92542', NULL, NULL, 6, 4, 12, 10, 2, 1),
(99, '92552', NULL, NULL, 6, 4, 12, 10, 2, 1),
(100, '92667', NULL, NULL, 6, 4, 12, 10, 2, 1),
(101, '92669', NULL, NULL, 6, 4, 12, 10, 2, 1),
(102, '92686', NULL, NULL, 6, 4, 12, 10, 2, 1),
(103, '92689', NULL, NULL, 6, 4, 12, 10, 2, 1),
(104, '92690', NULL, NULL, 6, 4, 12, 10, 2, 1),
(105, '92691', NULL, NULL, 6, 4, 12, 10, 2, 1),
(106, '92693', NULL, NULL, 6, 4, 12, 10, 2, 1),
(107, '92694', NULL, NULL, 6, 4, 12, 10, 2, 1),
(108, '93002', NULL, NULL, 6, 4, 12, 10, 2, 1),
(109, '93114', NULL, NULL, 6, 4, 12, 10, 2, 1),
(110, '93115', NULL, NULL, 6, 4, 12, 10, 2, 1),
(111, '93116', NULL, NULL, 6, 4, 12, 10, 2, 1),
(112, '93117', NULL, NULL, 6, 4, 12, 10, 2, 1),
(113, '93118', NULL, NULL, 6, 4, 12, 10, 2, 1),
(114, '93119', NULL, NULL, 6, 4, 12, 10, 2, 1),
(115, '93120', NULL, NULL, 6, 4, 12, 10, 2, 1),
(116, '93163', NULL, NULL, 6, 4, 12, 10, 2, 1),
(117, '93313', NULL, NULL, 6, 4, 12, 10, 2, 1),
(118, '93314', NULL, NULL, 6, 4, 12, 10, 2, 1),
(119, '93315', NULL, NULL, 6, 4, 12, 10, 2, 1),
(120, '93316', NULL, NULL, 6, 4, 12, 10, 2, 1),
(121, '93317', NULL, NULL, 6, 4, 12, 10, 2, 1),
(122, '93318', NULL, NULL, 6, 4, 12, 10, 2, 1),
(123, '93322', NULL, NULL, 6, 4, 12, 10, 2, 1),
(124, '93326', NULL, NULL, 6, 4, 12, 10, 2, 1),
(125, '93611', NULL, NULL, 6, 4, 12, 10, 2, 1),
(126, '93618', NULL, NULL, 6, 4, 12, 10, 2, 1),
(127, '93623', NULL, NULL, 6, 4, 12, 10, 2, 1),
(128, '93626', NULL, NULL, 6, 4, 12, 10, 2, 1),
(129, '93627', NULL, NULL, 6, 4, 12, 10, 2, 1),
(130, '93632', NULL, NULL, 6, 4, 12, 10, 2, 1),
(131, '93635', NULL, NULL, 6, 4, 12, 10, 2, 1),
(132, '93663', NULL, NULL, 6, 4, 12, 10, 2, 1),
(133, '93675', NULL, NULL, 6, 4, 12, 10, 2, 1),
(134, '93679', NULL, NULL, 6, 4, 12, 10, 2, 1),
(135, '93684', NULL, NULL, 6, 4, 12, 10, 2, 1),
(136, '93693', NULL, NULL, 6, 4, 12, 10, 2, 1),
(137, '93694', NULL, NULL, 6, 4, 12, 10, 2, 1),
(138, '93698', NULL, NULL, 6, 4, 12, 10, 2, 1),
(139, '93704', NULL, NULL, 6, 4, 12, 10, 2, 1),
(140, '93711', NULL, NULL, 6, 4, 12, 10, 2, 1),
(141, '93715', NULL, NULL, 6, 4, 12, 10, 2, 1),
(142, '93716', NULL, NULL, 6, 4, 12, 10, 2, 1),
(143, '93723', NULL, NULL, 6, 4, 12, 10, 2, 1),
(144, '93727', NULL, NULL, 6, 4, 12, 10, 2, 1),
(145, '93731', NULL, NULL, 6, 4, 12, 10, 2, 1),
(146, '93907', NULL, NULL, 6, 4, 12, 10, 2, 1),
(147, '93908', NULL, NULL, 6, 4, 12, 10, 2, 1),
(148, '93909', NULL, NULL, 6, 4, 12, 10, 2, 1),
(149, '93918', NULL, NULL, 6, 4, 12, 10, 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sdmulamms`
--

CREATE TABLE `sdmulamms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_unit` varchar(10) NOT NULL,
  `kuu` int(11) DEFAULT NULL,
  `aom` int(11) DEFAULT NULL,
  `kam` int(11) DEFAULT NULL,
  `aom_pantas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `sdmulamms`
--

INSERT INTO `sdmulamms` (`id`, `kode_unit`, `kuu`, `aom`, `kam`, `aom_pantas`) VALUES
(1, 'BNGL', 1, 5, 1, 3),
(2, 'GRKT', 1, NULL, NULL, NULL),
(3, 'GNGS', 1, NULL, NULL, NULL),
(4, 'JYBY', 1, NULL, NULL, NULL),
(5, 'KPKR', 1, NULL, NULL, NULL),
(6, 'KRAN', 1, NULL, NULL, NULL),
(7, 'MNKN', 1, NULL, NULL, NULL),
(8, 'PDMW', 1, NULL, NULL, NULL),
(9, 'PSPD', 1, NULL, NULL, NULL),
(10, 'PRGN', 1, NULL, NULL, NULL),
(11, 'SBRK', 1, NULL, NULL, NULL),
(12, 'SDSJ', 1, NULL, NULL, NULL),
(13, 'SDKT', 1, NULL, NULL, NULL),
(14, 'SKJO', 1, NULL, NULL, NULL),
(15, 'TLGN', 1, NULL, NULL, NULL),
(16, 'SDWG', 1, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `unit`
--

CREATE TABLE `unit` (
  `kode_unit` int(11) NOT NULL,
  `nama_unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unit`
--

INSERT INTO `unit` (`kode_unit`, `nama_unit`) VALUES
(90132, 'M.BYRP- Banyu Urip'),
(90133, 'M.KRBG- Krembangan'),
(90134, 'M.TNDS- Tandes'),
(90136, 'M.SDJO- Sidoarjo'),
(90137, 'M.TGAG- Tanggulangin'),
(90138, 'M.KNJR- Kenjeran'),
(90139, 'M.GDNN- Gedangan'),
(90140, 'M.KRMB- Krembung'),
(90141, 'M.PRBN- Prambon'),
(90142, 'M.KRIN- Krian'),
(90143, 'M.WNKM- Wonokromo'),
(90147, 'M.RMBG- Rembang Pasuruan'),
(90148, 'M.SKJO- Sukorejo'),
(90150, 'M.SGSM- Saronggi Sumenep'),
(90151, 'M.GPSM- Gapura Sumenep'),
(90152, 'M.BLTO- Bluto'),
(90153, 'M.MNDG- Manding'),
(90154, 'M.ABTN- Ambunten'),
(90475, 'M.SMPR- Semampir'),
(90550, 'M.PDMW- Pademawu'),
(90551, 'M.WARU- Waru'),
(90614, 'M.TNKN- Tlanakan'),
(90615, 'M.PRPO- Proppo'),
(90653, 'M.BTMR- Batu Marmar'),
(90846, 'M.GGER- Geger'),
(90856, 'M.TMSJ- Taman Sidoarjo'),
(90870, 'M.BGBD- Balongbendo'),
(90871, 'M.TRIK- Tarik'),
(90904, 'M.PGAA- Pragaan'),
(90952, 'M.OMBN- Omben'),
(90953, 'M.CMPG- Camplong'),
(90989, 'M.BYTS- Banyuates'),
(90990, 'M.KGPN- Karang Penang'),
(90991, 'M.KDGD- Kedungdung'),
(90992, 'M.KTAG- Ketapang Sampang'),
(90993, 'M.RBTL- Robatal'),
(90994, 'M.SMPG- Sampang'),
(91021, 'M.PGTN- Pengantenan'),
(91076, 'M.LTEG- Lenteng'),
(91084, 'M.PLGN- Palengaan'),
(91089, 'M.BTBT- Batang Batang'),
(91148, 'M.BLGA- Blega'),
(91150, 'M.MODG- Modung'),
(91151, 'M.GLIS- Galis'),
(91162, 'M.SPLU- Sepulu'),
(91183, 'M.KNAG- Konang'),
(91197, 'M.KKOP- Kokop'),
(91221, 'M.TOJN- Torjun'),
(91223, 'M.PSAN- Pasean'),
(91224, 'M.TJBM- Tanjungbumi'),
(91238, 'M.KDUR- Kadur'),
(91304, 'M.KLPS- Klampis'),
(91332, 'M.KMAL- Kamal'),
(91334, 'M.ARSM- Arjasa Sumenep'),
(91363, 'M.BTPH- Batuputih'),
(91401, 'M.ARBY- Arosbaya'),
(91464, 'M.GMPS- Gempol Pasuruan'),
(91566, 'M.GNDG- Ganding'),
(91593, 'M.PSSN- Pasongsongan'),
(91631, 'M.PNDN- Pandaan'),
(91660, 'M.BJPS- Beji Pasuruan'),
(91679, 'M.SOCH- Socah'),
(91701, 'M.SWHN- Sawahan'),
(91705, 'M.GLGK- Guluk Guluk'),
(91719, 'M.SIMT- Simokerto'),
(91737, 'M.TLGN- Tulangan'),
(91800, 'M.WRSD- Waru Sidoarjo'),
(91930, 'M.BBTN- Bubutan'),
(91941, 'M.CNDI- Candi'),
(91987, 'M.GBSB- Gubeng Surabaya'),
(92000, 'M.JBSJ- Jabon Sidoarjo'),
(92056, 'M.KRN2- Krian 2'),
(92098, 'M.KLGT- Kalianget'),
(92123, 'M.SMKP- Sambikerep'),
(92136, 'M.PBCT- Pabean Cantian'),
(92145, 'M.TNMH- Tanah Merah'),
(92149, 'M.PMKS- Pamekasan'),
(92182, 'M.PGA2- Pragaan 2'),
(92187, 'M.KDU2- Kadur 2'),
(92188, 'M.GLS2- Galis 2'),
(92215, 'M.RGKT- Rungkut'),
(92218, 'M.SDTI- Sedati'),
(92232, 'M.SDJ2- Sidoarjo 2'),
(92260, 'M.SKDJ- Sukodono Sidoarjo'),
(92261, 'M.SKLG- Sukolilo Gresik'),
(92271, 'M.SPKT- Sumenep Kota'),
(92282, 'M.TBSR- Tambaksari'),
(92301, 'M.TGRI- Tegalsari'),
(92318, 'M.KWYR- Kwanyar'),
(92336, 'M.WNSD- Wonoayu Sidoarjo'),
(92337, 'M.JBGN- Jambangan'),
(92350, 'M.TBK2- Tambaksari 2'),
(92351, 'M.SMP2- Semampir 2'),
(92362, 'M.TMS2- Taman Sidoarjo 2'),
(92366, 'M.BUDR- Buduran'),
(92370, 'M.PBN2- Prambon 2'),
(92541, 'M.RBRU- Rubaru'),
(92542, 'M.TNK2- Tlanakan 2'),
(92552, 'M.RBG2- Rembang 2'),
(92667, 'M.CND2- Candi 2'),
(92669, 'M.WAR2- Waru 2'),
(92686, 'M.BYU2- Banyu Urip 2'),
(92689, 'M.KNJ2- Kenjeran 2'),
(92690, 'M.KRB2- Krembangan 2'),
(92691, 'M.MNK2- Manukan 2'),
(92693, 'M.SIM2- Simokerto 2'),
(92694, 'M.WNLO- Wonocolo'),
(93002, 'M.KBG2- Krembung 2'),
(93114, 'M.BNEH- Burneh'),
(93115, 'M.LBNG- Labang'),
(93116, 'M.BKLN- Bangkalan'),
(93117, 'M.DASK- Dasuk'),
(93118, 'M.LTE2- Lenteng 2'),
(93119, 'M.PAKG- Pakong'),
(93120, 'M.PMS2- Pamekasan 2'),
(93163, 'M.PND2- Pandaan 2'),
(93313, 'M.ARS2- Arjasa Sumenep 2'),
(93314, 'M.DKEK- Dungkek'),
(93315, 'M.BTN2- Bubutan 2'),
(93316, 'M.SMP3- Semampir 3'),
(93317, 'M.SIM3- Simokerto 3'),
(93318, 'M.SKG2- Sukolilo Gresik 2'),
(93322, 'M.SOML- Suko Manunggal'),
(93326, 'M.GMP2- Gempol Pasuruan 2'),
(93611, 'M.TGL2- Tanggulangin 2'),
(93618, 'M.TSJY- Tenggilis Mejoyo'),
(93623, 'M.SOM2- Sukomanunggal 2'),
(93626, 'M.ASWO- Asemrowo'),
(93627, 'M.BLAK- Bulak'),
(93632, 'M.BLA2- Bulak 2'),
(93635, 'M.KRPL- Karangpilang'),
(93663, 'M.JBJ2- Jabon 2'),
(93675, 'M.GAYU- Gayungan'),
(93679, 'M.GNTG- Genteng'),
(93684, 'M.LRSI- Lakarsantri'),
(93693, 'M.WYUG- Wiyung'),
(93694, 'M.GYAR- Gunung anyar'),
(93698, 'M.PBC2- Pabean Cantian 2'),
(93704, 'M.MYJO- Mulyorejo'),
(93711, 'M.TBI3- Tambaksari 3'),
(93715, 'M.MYJ2- Mulyorejo 2'),
(93716, 'M.DUPS- Dukuh Pakis'),
(93723, 'M.GUB2- Gubeng 2'),
(93727, 'M.BBT3- Bubutan 3'),
(93731, 'M.BNWO- Benowo'),
(93907, 'M.WNK2- Wonokromo 2'),
(93908, 'M.BUD2- Buduran 2'),
(93909, 'M.TGI2- Tegalsari 2'),
(93918, 'M.TRK2- Tarik 2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `unitulamms`
--

CREATE TABLE `unitulamms` (
  `kode_unit` varchar(10) NOT NULL,
  `nama_unit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `unitulamms`
--

INSERT INTO `unitulamms` (`kode_unit`, `nama_unit`) VALUES
('BNGL', 'Unit Bangil'),
('GNGS', 'Unit Gunung Gangsir'),
('GRKT', 'Unit Gresik'),
('JYBY', 'Unit Joyoboyo'),
('KPKR', 'Unit Kapas Krampung'),
('KRAN', 'Unit Krian'),
('MNKN', 'Unit Manukan Surabaya'),
('PDMW', 'Unit Pademawu'),
('PRGN', 'Unit Prigen'),
('PSPD', 'Unit Pasuruan Pandaan'),
('SBRK', 'Unit Rungkut - Surabaya'),
('SDKT', 'Unit Sidoarjo Kota'),
('SDSJ', 'Unit Sepanjang - Sidoarjo'),
('SDWG', 'Unit Wadungasri - Sidoarjo'),
('SKJO', 'Unit Sukarejo-Pasuruan'),
('TLGN', 'UNIT TULANGAN');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `name` varbinary(70) DEFAULT NULL,
  `username` varchar(60) DEFAULT NULL,
  `email` varbinary(70) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL DEFAULT '',
  `remember_token` varchar(255) DEFAULT NULL,
  `privilege` varchar(15) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=DYNAMIC;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `privilege`, `created_at`, `updated_at`) VALUES
(1, 0x697268616d2073796168, 'irham', 0x697268616d70313240676d61696c2e636f6d, NULL, '$2y$10$ERMc13FZ8U51/AOxmecDde.CWOGXXsSavQQYZMWZrFNT52K5pi54u', NULL, 'admin', '2022-11-04 23:56:58', '2022-11-04 23:56:58'),
(3, 0x6d65696c616e, 'mio', 0x6d696f40676d61696c2e636f6d, NULL, '$2y$10$G0MpnoydSF608rMkXliCu.y5ZWobW/bH3KeMoPBXlWeA9IEoUyjh6', NULL, 'pku', '2023-11-20 03:03:23', '2023-11-20 03:03:23'),
(7, 0x697266616e2041726469616e746f, 'ifn', NULL, NULL, '$2y$10$lpoGN0k64iS6O8Cr.MQRwOkZKhC4paDs.CozxXuuaUYdoQ0fbWHRW', NULL, 'view', '2023-11-21 02:57:22', '2023-11-21 02:57:22'),
(8, 0x4661686d6920416b626172205072617365747961, 'fhp', NULL, NULL, '$2y$10$JlLqbYLX5WSVEWq6VVBpt.IpSynFFQvqM82eGX8bocOOrf4vIFF1e', NULL, 'ppi', '2023-11-21 03:21:11', '2023-11-21 03:21:11');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `itppis`
--
ALTER TABLE `itppis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenispelatihans`
--
ALTER TABLE `jenispelatihans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenisunits`
--
ALTER TABLE `jenisunits`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `mareas`
--
ALTER TABLE `mareas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `namapelatihans`
--
ALTER TABLE `namapelatihans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pelatihans`
--
ALTER TABLE `pelatihans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pkudatas`
--
ALTER TABLE `pkudatas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pkuusers`
--
ALTER TABLE `pkuusers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `samar`
--
ALTER TABLE `samar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sdmmekaars`
--
ALTER TABLE `sdmmekaars`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `sdmulamms`
--
ALTER TABLE `sdmulamms`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indeks untuk tabel `unitulamms`
--
ALTER TABLE `unitulamms`
  ADD PRIMARY KEY (`kode_unit`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `areas`
--
ALTER TABLE `areas`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `inventory`
--
ALTER TABLE `inventory`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `itppis`
--
ALTER TABLE `itppis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=596;

--
-- AUTO_INCREMENT untuk tabel `jenispelatihans`
--
ALTER TABLE `jenispelatihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jenisunits`
--
ALTER TABLE `jenisunits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mareas`
--
ALTER TABLE `mareas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `namapelatihans`
--
ALTER TABLE `namapelatihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pelatihans`
--
ALTER TABLE `pelatihans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pkudatas`
--
ALTER TABLE `pkudatas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pkuusers`
--
ALTER TABLE `pkuusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `regions`
--
ALTER TABLE `regions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `samar`
--
ALTER TABLE `samar`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `sdmmekaars`
--
ALTER TABLE `sdmmekaars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT untuk tabel `sdmulamms`
--
ALTER TABLE `sdmulamms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
