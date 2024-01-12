-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 02:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `ceklogin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `ceklogin`) VALUES
('admin', 'admin', 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `katalog_buku`
--

CREATE TABLE `katalog_buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(150) DEFAULT NULL,
  `penulis` varchar(100) DEFAULT NULL,
  `tahun` int(11) DEFAULT NULL,
  `sinopsis` varchar(255) DEFAULT NULL,
  `foto_buku` varchar(255) DEFAULT NULL,
  `tindakan` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `katalog_buku`
--

INSERT INTO `katalog_buku` (`id_buku`, `judul_buku`, `penulis`, `tahun`, `sinopsis`, `foto_buku`, `tindakan`) VALUES
(1, 'To Kill a Mocking', 'Harper', 1960, 'Novel ini mengikuti kisah Scout Finch, seorang anak perempuan yang tinggal di sebuah kota kecil di Alabama selama Depresi Besar. Cerita ini membahas ketidaksetaraan rasial dan sistem hukum yang tidak adil melalui pengalaman Scout dan ayahnya, seorang peng', '', ''),
(2, '1984', 'George Orwell', 1949, 'Ditempatkan dalam dunia distopia yang dikuasai oleh pemerintah totaliter, \"1984\" mengikuti kisah Winston Smith yang mencoba melawan rezim otoriter yang memantau setiap tindakan dan pikirannya. Novel ini merinci dampak kontrol penuh pemerintah terhadap ind', '', ''),
(3, 'The Great Gatsby', 'F. Scott Fitzgerald', 1925, 'Cerita ini berkisah tentang Jay Gatsby, seorang miliuner misterius yang mencoba mengambil kembali cinta masa lalunya, Daisy Buchanan. Melalui gaya hidup glamor dan pesta mewah, Fitzgerald menggambarkan ketidakpuasan dan ketidakpastian di antara kelas sosi', '', ''),
(4, 'Norwegian Wood', 'Haruki Murakami', 1987, 'Novel ini adalah kisah tentang Toru Watanabe, seorang mahasiswa Jepang pada tahun 1960-an yang terlibat dalam hubungan rumit dengan dua wanita, Naoko dan Midori. \"Norwegian Wood\" menggali tema kehilangan, kesepian, dan pencarian makna hidup.', '', ''),
(5, 'The Kite Runner', 'Khaled Hosseini', 2003, 'Berlatar di Afghanistan, \"The Kite Runner\" mengisahkan persahabatan yang kompleks antara dua anak laki-laki, Amir dan Hassan. Melalui peristiwa dramatis dan konflik, novel ini menjelajahi konsep pengampunan, pengorbanan, dan pencarian identitas pribadi.', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_10_121814_create_pencatatanbuku_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pencatatanbuku`
--

CREATE TABLE `pencatatanbuku` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `insert_id_buku` bigint(20) UNSIGNED NOT NULL,
  `judul_buku` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_peminjam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pencatatanbuku`
--

INSERT INTO `pencatatanbuku` (`id`, `insert_id_buku`, `judul_buku`, `nama_peminjam`, `tanggal_pinjam`, `tanggal_pengembalian`, `status`) VALUES
(6, 1, 'To Kill a Mocking', 'meng', '2024-01-10', '2024-01-17', 'Tersedia'),
(7, 4, 'Norwegian Wood', 'yohan', '2024-01-10', '2024-01-17', 'Tersedia'),
(8, 3, 'The Great Gatsby', 'titi', '2024-01-10', '2024-01-17', 'Tersedia'),
(9, 5, 'The Kite Runner', 'yohan', '2024-01-10', '2024-01-17', 'Dipinjam'),
(10, 1, 'To Kill a Mocking', 'meng', '2024-01-12', '2024-01-19', 'Dipinjam');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `katalog_buku`
--
ALTER TABLE `katalog_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pencatatanbuku`
--
ALTER TABLE `pencatatanbuku`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `katalog_buku`
--
ALTER TABLE `katalog_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=310;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pencatatanbuku`
--
ALTER TABLE `pencatatanbuku`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
