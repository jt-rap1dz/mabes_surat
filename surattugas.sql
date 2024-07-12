-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 12 Jul 2024 pada 05.09
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surattugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agama`
--

CREATE TABLE `agama` (
  `id` int(11) NOT NULL,
  `agama` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Dumping data untuk tabel `agama`
--

INSERT INTO `agama` (`id`, `agama`) VALUES
(1, 'Islam'),
(2, 'Hindu'),
(3, 'Kristen'),
(7, 'Buddha'),
(8, 'Katholik'),
(9, 'Khonghucu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kesatuan`
--

CREATE TABLE `kesatuan` (
  `id` int(11) NOT NULL,
  `kesatuan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Dumping data untuk tabel `kesatuan`
--

INSERT INTO `kesatuan` (`id`, `kesatuan`) VALUES
(1, 'Angkatan Darat'),
(2, 'Angkatan Laut'),
(3, 'Angkatan Udara'),
(4, 'Komcad');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE `kota` (
  `id` int(11) NOT NULL,
  `kota` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id`, `kota`) VALUES
(1, 'Banda Aceh'),
(2, 'Langsa'),
(3, 'Lhokseumawe'),
(4, 'Sabang'),
(5, 'Subulussalam'),
(6, 'Medan'),
(7, 'Binjai'),
(8, 'Tebing Tinggi'),
(9, 'Pematang Siantar'),
(10, 'Tanjung Balai'),
(11, 'Padang'),
(12, 'Bukittinggi'),
(13, 'Padang Panjang'),
(14, 'Pariaman'),
(15, 'Payakumbuh'),
(16, 'Sawahlunto'),
(17, 'Solok'),
(18, 'Pekanbaru'),
(19, 'Dumai'),
(20, 'Batam'),
(21, 'Tanjung Pinang'),
(22, 'Jambi'),
(23, 'Sungai Penuh'),
(24, 'Palembang'),
(25, 'Lubuklinggau'),
(26, 'Pagar Alam'),
(27, 'Prabumulih'),
(28, 'Bengkulu'),
(29, 'Bandar Lampung'),
(30, 'Metro'),
(31, 'Pangkal Pinang'),
(32, 'Tanjung Pandan'),
(33, 'Jakarta Pusat'),
(34, 'Jakarta Utara'),
(35, 'Jakarta Barat'),
(36, 'Jakarta Selatan'),
(37, 'Jakarta Timur'),
(38, 'Bogor'),
(39, 'Depok'),
(40, 'Bekasi'),
(41, 'Tangerang'),
(42, 'Tangerang Selatan'),
(43, 'Cilegon'),
(44, 'Serang'),
(45, 'Sukabumi'),
(46, 'Bandung'),
(47, 'Cimahi'),
(48, 'Cirebon'),
(49, 'Tasikmalaya'),
(50, 'Semarang'),
(51, 'Salatiga'),
(52, 'Surakarta'),
(53, 'Magelang'),
(54, 'Tegal'),
(55, 'Yogyakarta'),
(56, 'Surabaya'),
(57, 'Malang'),
(58, 'Madiun'),
(59, 'Blitar'),
(60, 'Kediri'),
(61, 'Probolinggo'),
(62, 'Pasuruan'),
(63, 'Denpasar'),
(64, 'Mataram'),
(65, 'Bima'),
(66, 'Kupang'),
(67, 'Atambua'),
(68, 'Ende'),
(69, 'Labuan Bajo'),
(70, 'Waingapu'),
(71, 'Pontianak'),
(72, 'Singkawang'),
(73, 'Palangkaraya'),
(74, 'Banjarmasin'),
(75, 'Banjarbaru'),
(76, 'Samarinda'),
(77, 'Balikpapan'),
(78, 'Bontang'),
(79, 'Tenggarong'),
(80, 'Tarakan'),
(81, 'Tanjung Selor'),
(82, 'Manado'),
(83, 'Bitung'),
(84, 'Tomohon'),
(85, 'Kotamobagu'),
(86, 'Gorontalo'),
(87, 'Palu'),
(88, 'Makassar'),
(89, 'Parepare'),
(90, 'Palopo'),
(91, 'Kendari'),
(92, 'Baubau'),
(93, 'Ambon'),
(94, 'Tual'),
(95, 'Ternate'),
(96, 'Tidore Kepulauan'),
(97, 'Jayapura'),
(98, 'Merauke'),
(99, 'Sorong'),
(100, 'Manokwari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personel`
--

CREATE TABLE `personel` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `nrp` varchar(16) NOT NULL,
  `alamat` text NOT NULL,
  `agama_id` int(11) NOT NULL,
  `kesatuan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Dumping data untuk tabel `personel`
--

INSERT INTO `personel` (`id`, `nama`, `nrp`, `alamat`, `agama_id`, `kesatuan_id`) VALUES
(1, 'Yadi', '000001', 'Cibubur', 1, 1),
(2, 'Budi', '000002', 'Jakarta', 1, 2),
(3, 'Siti', '000003', 'Bandung', 2, 2),
(4, 'Andi', '000004', 'Surabaya', 3, 1),
(5, 'Rina', '000005', 'Semarang', 2, 3),
(6, 'Joko', '000006', 'Yogyakarta', 1, 3),
(12, 'Dewi', '000007', 'Malang', 2, 2),
(13, 'Rudi', '000008', 'Solo', 2, 1),
(14, 'Lina', '000009', 'Makassar', 2, 3),
(15, 'Tono', '000010', 'Medan', 2, 1),
(16, 'Ronaldo', '000011', 'Manado', 3, 2),
(17, 'Joko', '000012', 'Denpasar', 1, 3),
(18, 'Kiki', '000013', 'Malang', 1, 1),
(19, 'Lia', '000014', 'Tasikmalaya', 1, 2),
(20, 'Mira', '000015', 'Pontianak', 1, 3),
(21, 'Nina', '000016', 'Kupang', 3, 3),
(22, 'Oki', '000017', 'Manado', 3, 1),
(23, 'Putri', '000018', 'Samarinda', 2, 2),
(24, 'Qori', '000019', 'Mataram', 2, 1),
(25, 'Rudi', '000020', 'Palu', 3, 3),
(26, 'Sari', '000021', 'Jayapura', 3, 2),
(27, 'Tina', '000022', 'Gorontalo', 3, 1),
(28, 'Udin', '000023', 'Ambon', 2, 1),
(29, 'Vina', '000024', 'Banjarmasin', 1, 2),
(30, 'Wulan', '000025', 'Yogyakarta', 2, 3),
(31, 'Xena', '000026', 'Solo', 1, 1),
(32, 'Yogi', '000027', 'Cirebon', 3, 3),
(33, 'Zara', '000028', 'Magelang', 3, 1),
(34, 'Abi', '000029', 'Bengkulu', 1, 1),
(35, 'Beni', '000030', 'Manokwari', 1, 2),
(36, 'Cici', '000031', 'Tarakan', 1, 2),
(37, 'Dedi', '000032', 'Singaraja', 2, 2),
(38, 'Eka', '000033', 'Tanjung Pinang', 1, 3),
(39, 'Fani', '000034', 'Bontang', 1, 1),
(40, 'Gina', '000035', 'Palangkaraya', 2, 2),
(41, 'Hana', '000036', 'Bau-Bau', 2, 2),
(42, 'Indra', '000037', 'Kendari', 2, 3),
(43, 'Jaya', '000038', 'Sumbawa', 2, 3),
(44, 'Kris', '000039', 'Sorong', 1, 3),
(45, 'Lisa', '000040', 'Ternate', 1, 3),
(46, 'Maya', '000041', 'Tidore', 3, 3),
(47, 'Niko', '000042', 'Kaimana', 2, 1),
(48, 'Omar', '000043', 'Namlea', 1, 3),
(49, 'Putu', '000044', 'Fak-Fak', 1, 2),
(50, 'Qina', '000045', 'Luwuk', 1, 2),
(51, 'Rini', '000046', 'Tidore', 3, 1),
(52, 'Sandi', '000047', 'Maumere', 2, 3),
(53, 'Toni', '000048', 'Waingapu', 2, 1),
(54, 'Uli', '000049', 'Ende', 1, 2),
(55, 'Vito', '000050', 'Larantuka', 1, 2),
(56, 'Widi', '000051', 'Ruteng', 1, 2),
(57, 'Xavier', '000052', 'Lewoleba', 3, 1),
(58, 'Yoga', '000053', 'Wolowaru', 1, 1),
(59, 'Yuni', '000054', 'Atambua', 2, 2),
(60, 'Zidan', '000055', 'Malaka', 3, 3),
(61, 'Asep', '000056', 'Soe', 1, 1),
(62, 'Bobby', '000057', 'Tambolaka', 1, 2),
(63, 'Catur', '000058', 'Palu', 2, 1),
(64, 'Dian', '000059', 'Biak', 1, 3),
(65, 'Elma', '000060', 'Wamena', 1, 1),
(66, 'Fani', '000061', 'Merauke', 2, 3),
(67, 'Budiman', '67123890', 'Surabaya', 3, 4),
(68, 'AAAA', '67126890', 'Surabaya', 3, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pimpinan`
--

CREATE TABLE `pimpinan` (
  `id` int(11) NOT NULL,
  `namapimpinan` varchar(45) NOT NULL,
  `pangkat` varchar(45) NOT NULL,
  `nrp` varchar(45) DEFAULT NULL,
  `jabatan` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Dumping data untuk tabel `pimpinan`
--

INSERT INTO `pimpinan` (`id`, `namapimpinan`, `pangkat`, `nrp`, `jabatan`) VALUES
(1, 'Budi Santoso', 'Kolonel', '12345678', 'Komandan Batalyon'),
(2, 'Agus Wijaya', 'Mayor', '23456789', 'Kepala Operasi'),
(3, 'Citra Dewi', 'Letnan Kolonel', '34567890', 'Wakil Komandan'),
(4, 'Dewi Lestari', 'Kapten', '45678901', 'Komandan Kompi'),
(5, 'Erwin Saputra', 'Letnan Dua', '56789012', 'Pasi Intel'),
(6, 'Fajar Pratama', 'Sersan Mayor', '67890123', 'Komandan Peleton'),
(7, 'Gita Nuraini', 'Letnan Satu', '78901234', 'Perwira'),
(8, 'Budiman', 'Prada', '67123890', 'Anggota');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(11) NOT NULL,
  `wilayah` varchar(45) NOT NULL,
  `kota_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id`, `wilayah`, `kota_id`) VALUES
(1, 'Aceh', 1),
(2, 'Aceh', 2),
(3, 'Aceh', 3),
(4, 'Aceh', 4),
(5, 'Aceh', 5),
(6, 'Sumatera Utara', 6),
(7, 'Sumatera Utara', 7),
(8, 'Sumatera Utara', 8),
(9, 'Sumatera Utara', 9),
(10, 'Sumatera Utara', 10),
(11, 'Sumatera Barat', 11),
(12, 'Sumatera Barat', 12),
(13, 'Sumatera Barat', 13),
(14, 'Sumatera Barat', 14),
(15, 'Sumatera Barat', 15),
(16, 'Sumatera Barat', 16),
(17, 'Sumatera Barat', 17),
(18, 'Riau', 18),
(19, 'Riau', 19),
(20, 'Kepulauan Riau', 20),
(21, 'Kepulauan Riau', 21),
(22, 'Jambi', 22),
(23, 'Jambi', 23),
(24, 'Sumatera Selatan', 24),
(25, 'Sumatera Selatan', 25),
(26, 'Sumatera Selatan', 26),
(27, 'Sumatera Selatan', 27),
(28, 'Bengkulu', 28),
(29, 'Lampung', 29),
(30, 'Lampung', 30),
(31, 'Kepulauan Bangka Belitung', 31),
(32, 'Kepulauan Bangka Belitung', 32),
(33, 'DKI Jakarta', 33),
(34, 'DKI Jakarta', 34),
(35, 'DKI Jakarta', 35),
(36, 'DKI Jakarta', 36),
(37, 'DKI Jakarta', 37),
(38, 'Jawa Barat', 38),
(39, 'Jawa Barat', 39),
(40, 'Jawa Barat', 40),
(41, 'Banten', 41),
(42, 'Banten', 42),
(43, 'Banten', 43),
(44, 'Banten', 44),
(45, 'Jawa Barat', 45),
(46, 'Jawa Barat', 46),
(47, 'Jawa Barat', 47),
(48, 'Jawa Barat', 48),
(49, 'Jawa Barat', 49),
(50, 'Jawa Tengah', 50),
(51, 'Jawa Tengah', 51),
(52, 'Jawa Tengah', 52),
(53, 'Jawa Tengah', 53),
(54, 'Jawa Tengah', 54),
(55, 'DI Yogyakarta', 55),
(56, 'Jawa Timur', 56),
(57, 'Jawa Timur', 57),
(58, 'Jawa Timur', 58),
(59, 'Jawa Timur', 59),
(60, 'Jawa Timur', 60),
(61, 'Jawa Timur', 61),
(62, 'Jawa Timur', 62),
(63, 'Bali', 63),
(64, 'Nusa Tenggara Barat', 64),
(65, 'Nusa Tenggara Barat', 65),
(66, 'Nusa Tenggara Timur', 66),
(67, 'Nusa Tenggara Timur', 67),
(68, 'Nusa Tenggara Timur', 68),
(69, 'Nusa Tenggara Timur', 69),
(70, 'Nusa Tenggara Timur', 70),
(71, 'Kalimantan Barat', 71),
(72, 'Kalimantan Barat', 72),
(73, 'Kalimantan Tengah', 73),
(74, 'Kalimantan Selatan', 74),
(75, 'Kalimantan Selatan', 75),
(76, 'Kalimantan Timur', 76),
(77, 'Kalimantan Timur', 77),
(78, 'Kalimantan Timur', 78),
(79, 'Kalimantan Timur', 79),
(80, 'Kalimantan Utara', 80),
(81, 'Kalimantan Utara', 81),
(82, 'Sulawesi Utara', 82),
(83, 'Sulawesi Utara', 83),
(84, 'Sulawesi Utara', 84),
(85, 'Sulawesi Utara', 85),
(86, 'Gorontalo', 86),
(87, 'Sulawesi Tengah', 87),
(88, 'Sulawesi Selatan', 88),
(89, 'Sulawesi Selatan', 89),
(90, 'Sulawesi Selatan', 90),
(91, 'Sulawesi Tenggara', 91),
(92, 'Sulawesi Tenggara', 92),
(93, 'Maluku', 93),
(94, 'Maluku', 94),
(95, 'Maluku Utara', 95),
(96, 'Maluku Utara', 96),
(97, 'Papua', 97),
(98, 'Papua', 98),
(99, 'Papua Barat', 99),
(100, 'Papua Barat', 100);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6wAdgc8qu7PL7j7PFky9c9ctPxVCnNFhnrKbmhZj', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiUjVsSWtDMWVkZzZPdG94RURDZlZqeklpVDlqZVl2VUtsSWFtS1RjbSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjU6Imh0dHA6Ly8xMjcuMC4wLjEva2VzYXR1YW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720747486),
('mGf7TbFpGDFcu7KIG8S5wz80F7zrpwZXUbbohokt', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoidkpyVHNCNUE5eHU5bzRBTUdYSTNmTGFmdDlySGgxQ1BjTlJNRGJGRyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjEvcGVyc29uZWwvY3JlYXRlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1720753247),
('PGSwSJcXROS1bCXTdI8luRiVV4VwKkhJ4CO6pRyJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWU42MVVrUXhrTnVCS0V4UzQ4QzQxd0t1eFplVHBnYVpFQlpFUmY3NiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjI6Imh0dHA6Ly8xMjcuMC4wLjEvYWdhbWEiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1720747310),
('qWUhaDUIKhYHUZkhv6PL0JeNhiDhGy1akUHHSN4q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36', 'YToyOntzOjY6Il90b2tlbiI7czo0MDoiVW04WnlRc2RnY1JHOGtyNWhoTjZ0WXpVekhkenhWVHBROGtmWlhReCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1720747283);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tembusan`
--

CREATE TABLE `tembusan` (
  `id` int(11) NOT NULL,
  `jabatan` varchar(45) DEFAULT NULL,
  `tugas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `nomorsurat` varchar(45) NOT NULL,
  `mulai` date NOT NULL,
  `akhir` date NOT NULL,
  `provinsi_id` int(11) NOT NULL,
  `personel_id` int(11) NOT NULL,
  `pimpinan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_czech_ci;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `nomorsurat`, `mulai`, `akhir`, `provinsi_id`, `personel_id`, `pimpinan_id`) VALUES
(1, 'NS-001', '2024-07-01', '2024-07-02', 1, 38, 2),
(2, 'NS-002', '2024-07-01', '2024-07-02', 4, 53, 3),
(3, 'NS-003', '2024-07-02', '2024-07-03', 41, 54, 7),
(4, 'NS-004', '2024-07-02', '2024-07-03', 4, 53, 1),
(5, 'NS-005', '2024-07-03', '2024-07-04', 9, 26, 2),
(6, 'NS-006', '2024-07-04', '2024-07-05', 12, 3, 3),
(7, 'NS-007', '2024-07-05', '2024-07-06', 20, 25, 4),
(8, 'NS-008', '2024-07-06', '2024-07-07', 30, 27, 5),
(9, 'NS-009', '2024-07-07', '2024-07-08', 2, 45, 6),
(10, 'NS-010', '2024-07-08', '2024-07-09', 26, 38, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agama`
--
ALTER TABLE `agama`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indeks untuk tabel `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kesatuan`
--
ALTER TABLE `kesatuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personel`
--
ALTER TABLE `personel`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nrp_UNIQUE` (`nrp`),
  ADD KEY `fk_personel_agama_idx` (`agama_id`),
  ADD KEY `fk_personel_kesatuan1_idx` (`kesatuan_id`);

--
-- Indeks untuk tabel `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jabatan_UNIQUE` (`jabatan`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_provinsi_kota1_idx` (`kota_id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `tembusan`
--
ALTER TABLE `tembusan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jabatan_UNIQUE` (`jabatan`),
  ADD KEY `fk_tembusan_tugas1_idx` (`tugas_id`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nomorsurat_UNIQUE` (`nomorsurat`),
  ADD KEY `fk_tugas_provinsi1_idx` (`provinsi_id`),
  ADD KEY `fk_tugas_personel1_idx` (`personel_id`),
  ADD KEY `fk_tugas_pimpinan1_idx` (`pimpinan_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agama`
--
ALTER TABLE `agama`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kesatuan`
--
ALTER TABLE `kesatuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `kota`
--
ALTER TABLE `kota`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `personel`
--
ALTER TABLE `personel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT untuk tabel `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `tembusan`
--
ALTER TABLE `tembusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `personel`
--
ALTER TABLE `personel`
  ADD CONSTRAINT `fk_personel_agama` FOREIGN KEY (`agama_id`) REFERENCES `agama` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_personel_kesatuan1` FOREIGN KEY (`kesatuan_id`) REFERENCES `kesatuan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD CONSTRAINT `fk_provinsi_kota1` FOREIGN KEY (`kota_id`) REFERENCES `kota` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tembusan`
--
ALTER TABLE `tembusan`
  ADD CONSTRAINT `fk_tembusan_tugas1` FOREIGN KEY (`tugas_id`) REFERENCES `tugas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD CONSTRAINT `fk_tugas_personel1` FOREIGN KEY (`personel_id`) REFERENCES `personel` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tugas_pimpinan1` FOREIGN KEY (`pimpinan_id`) REFERENCES `pimpinan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tugas_provinsi1` FOREIGN KEY (`provinsi_id`) REFERENCES `provinsi` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
