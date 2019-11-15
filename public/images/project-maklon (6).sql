-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 03:41 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-maklon`
--

-- --------------------------------------------------------

--
-- Table structure for table `berbadan_hukum`
--

CREATE TABLE `berbadan_hukum` (
  `id` int(11) NOT NULL,
  `berbadan_hukum` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`id`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'Hilo', '2019-04-21 13:31:06', '0000-00-00 00:00:00'),
(4, 'Tropicana Slim', '2019-04-23 18:04:00', '2019-04-23 18:04:00'),
(5, 'Nutrisari', '2019-04-23 18:04:12', '2019-04-23 18:04:12'),
(9, 'Wdank', '2019-04-23 18:04:48', '2019-04-23 18:04:48'),
(10, 'WRP', '2019-04-23 18:04:59', '2019-04-23 18:04:59'),
(11, 'L-Men', '2019-04-23 18:05:09', '2019-04-23 18:05:09');

-- --------------------------------------------------------

--
-- Table structure for table `file`
--

CREATE TABLE `file` (
  `id` int(11) NOT NULL,
  `project_id` int(11) DEFAULT NULL,
  `file` varchar(100) DEFAULT NULL,
  `cpm` varchar(100) DEFAULT NULL,
  `penawaran` varchar(100) DEFAULT NULL,
  `ppt_penjajakan` varchar(100) DEFAULT NULL,
  `jenis_file` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `file`
--

INSERT INTO `file` (`id`, `project_id`, `file`, `cpm`, `penawaran`, `ppt_penjajakan`, `jenis_file`, `created_at`, `updated_at`) VALUES
(1, 1, 'Timeline SMO 1.3.xlsx', NULL, NULL, NULL, 'legalitas', '2019-06-27 07:19:06', '2019-06-27 07:19:06'),
(2, 1, 'Update Timeline SMO.xlsx', NULL, NULL, NULL, 'legalitas', '2019-06-27 07:19:13', '2019-06-27 07:19:13'),
(3, 1, 'Timeline SMO 1.3.xlsx', NULL, NULL, NULL, 'mou', '2019-06-27 07:19:50', '2019-06-27 07:19:50'),
(7, 1, 'D:\\XAMPP\\tmp\\php56D3.tmp', NULL, NULL, NULL, 'cas', '2019-06-27 07:38:54', '2019-06-27 07:38:54'),
(8, 1, 'D:\\XAMPP\\tmp\\php56F3.tmp', NULL, NULL, NULL, 'sertifikat', '2019-06-27 07:38:54', '2019-06-27 07:38:54'),
(9, 1, 'D:\\XAMPP\\tmp\\php5703.tmp', NULL, NULL, NULL, 'kontrak_kerjasama', '2019-06-27 07:38:54', '2019-06-27 07:38:54'),
(10, 2, 'Rancangan Database.xlsx', NULL, NULL, NULL, 'legalitas', '2019-06-27 18:35:49', '2019-06-27 18:35:49'),
(11, 2, 'Rancangan Database-2.xlsx', NULL, NULL, NULL, 'legalitas', '2019-06-27 18:35:58', '2019-06-27 18:35:58'),
(12, 2, 'timeline mantan.xlsx', NULL, NULL, NULL, 'mou', '2019-06-27 18:36:17', '2019-06-27 18:36:17'),
(13, 2, 'D:\\XAMPP\\tmp\\phpE270.tmp', NULL, NULL, NULL, 'cas', '2019-06-27 18:37:02', '2019-06-27 18:37:02'),
(14, 2, 'D:\\XAMPP\\tmp\\phpE281.tmp', NULL, NULL, NULL, 'sertifikat', '2019-06-27 18:37:02', '2019-06-27 18:37:02'),
(15, 2, 'D:\\XAMPP\\tmp\\phpE292.tmp', NULL, NULL, NULL, 'kontrak_kerjasama', '2019-06-27 18:37:02', '2019-06-27 18:37:02');

-- --------------------------------------------------------

--
-- Table structure for table `maklon`
--

CREATE TABLE `maklon` (
  `id` int(11) NOT NULL,
  `nama_maklon` varchar(225) NOT NULL,
  `nama_pic` varchar(191) DEFAULT NULL,
  `alamat` text NOT NULL,
  `kontak` varchar(100) NOT NULL,
  `email` varchar(191) DEFAULT NULL,
  `fasilitas_produksi` text NOT NULL,
  `skala_kategori` varchar(100) NOT NULL,
  `berbadan_hukum` varchar(100) NOT NULL,
  `keterangan` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maklon`
--

INSERT INTO `maklon` (`id`, `nama_maklon`, `nama_pic`, `alamat`, `kontak`, `email`, `fasilitas_produksi`, `skala_kategori`, `berbadan_hukum`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'PT.Sejahtera Abadi', 'Jajang Kusmara', 'Jl.Papandayan Kp.Caringin No.5 RT.07/02', '081287754321', 'jajang@gmail.com', 'Update Timeline SMO.xlsx', 'Perusahaan', 'PT', 'Langganan', '2019-06-26 19:09:08', '2019-06-27 15:04:53'),
(2, 'PT.Abadi Jaya', 'Setyo Agung Kusuma', 'Jl.Cilendek blok A4 No.7', '087754684', 'setyo@gmail.com', 'IMG_20170226_154552.jpg', 'UKM', 'CV', 'Baru da yang ini mh', '2019-06-26 20:47:21', '2019-06-27 03:47:21'),
(3, 'PT.Maklon Yang Baru', 'Satriatna', 'Jl.Papandayan Kp.Caringin No.5 RT.07/02', '086865432356', 'sabrinafarhananur@gmail.com', 'IMG_20170322_202649.jpg', 'Perusahaan', 'Perorangan', 'Jago Masak', '2019-06-26 23:58:25', '2019-06-27 06:58:25'),
(4, 'PT.Baru Lagi', 'Wulan', 'Jl.Sukasari Bogor', '086742579642', 'wulan@gmail.com', 'RAB.xlsx', 'Perusahaan', 'CV', 'Coba coba', '2019-06-27 01:07:24', '2019-06-27 08:07:24'),
(5, 'PT.Sahabat', 'Wulanadri Cahya', 'Jl.Papandayan Kp.Caringin No.5 RT.07/02', '087635765', 'wulan@gmail.com', 'alur.docx', 'Perusahaan', 'CV', '-', '2019-06-27 18:33:45', '2019-06-28 01:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `maklon_project`
--

CREATE TABLE `maklon_project` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `maklon_id` int(11) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  `cpm` varchar(100) DEFAULT NULL,
  `penawaran` varchar(100) DEFAULT NULL,
  `konsep_kerjasama` varchar(100) NOT NULL,
  `alur_proses` text NOT NULL,
  `ppt_penjajakan` varchar(100) NOT NULL,
  `status_maklon` enum('on prosess','done','','') DEFAULT NULL,
  `status_pro` enum('on prosess','done','','') DEFAULT NULL,
  `status_qa` enum('on prosess','done','','') DEFAULT NULL,
  `status_rd` enum('on prosess','done','','') DEFAULT NULL,
  `status_legal` enum('on prosess','done','','') DEFAULT NULL,
  `status_gp` enum('on prosess','done','','') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maklon_project`
--

INSERT INTO `maklon_project` (`id`, `user_id`, `maklon_id`, `project_id`, `cpm`, `penawaran`, `konsep_kerjasama`, `alur_proses`, `ppt_penjajakan`, `status_maklon`, `status_pro`, `status_qa`, `status_rd`, `status_legal`, `status_gp`, `created_at`, `updated_at`) VALUES
(1, 11, 1, 1, 'Timeline SMO 1.3.xlsx', 'Timeline SMO.xlsx', 'Konsep kerjasama', 'Alur proses', 'Timeline SMO 1.3.xlsx', NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-27 06:55:21', '2019-06-27 06:55:21'),
(2, 11, 5, 2, 'Mockup SMO.xlsx', 'alur.docx', 'Konsep Kerjasam', 'Alur proses', 'alur.docx', NULL, NULL, NULL, NULL, NULL, NULL, '2019-06-27 18:35:24', '2019-06-27 18:35:24');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_21_031806_create_siswa_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `nama_project` varchar(225) NOT NULL,
  `kategori_project` varchar(225) NOT NULL,
  `forecast` varchar(100) NOT NULL,
  `pricelist` varchar(100) NOT NULL,
  `nama_brand` varchar(100) NOT NULL,
  `gramasi` int(100) NOT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `konfigurasi_kemas` varchar(100) NOT NULL,
  `umur_simpan` varchar(100) NOT NULL,
  `gambaran_proses` text NOT NULL,
  `urgensi_project` varchar(100) DEFAULT NULL,
  `timeline` varchar(225) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `nama_project`, `kategori_project`, `forecast`, `pricelist`, `nama_brand`, `gramasi`, `satuan`, `konfigurasi_kemas`, `umur_simpan`, `gambaran_proses`, `urgensi_project`, `timeline`, `created_at`, `updated_at`) VALUES
(1, 'Benoa', 'Makanan', 'Rp. 10.000.000', '10000', 'Hillo', 3, 'kg', '12s x 1kg', '1 Bulan', 'Gambaran proses', 'Urgen', 'Update Timeline SMO.xlsx', '2019-06-27 06:34:33', '2019-06-27 08:04:30'),
(2, 'Banago', 'Minuman', 'Rp. 1.000.000', '15000', 'Hillo', 2, 'kg', '12s x 1kg', '1 Bulan', 'Proses', 'Urgen', 'Mockup SMO.xlsx', '2019-06-27 18:26:59', '2019-06-27 18:27:40');

-- --------------------------------------------------------

--
-- Table structure for table `skala_kategori`
--

CREATE TABLE `skala_kategori` (
  `id` int(11) NOT NULL,
  `skala_ketegori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `table_sementara`
--

CREATE TABLE `table_sementara` (
  `id` int(11) NOT NULL,
  `maklon_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_sementara`
--

INSERT INTO `table_sementara` (`id`, `maklon_id`, `project_id`, `created_at`, `updated_at`) VALUES
(5, 1, 1, '2019-06-27 14:48:44', '2019-06-27 14:48:44'),
(6, 5, 2, '2019-06-28 01:34:09', '2019-06-28 01:34:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(10, 'PV', 'Bambang Kusuma', 'bambang@gmail.com', '$2y$10$b66oJc41d6AP8Bup/HbYYOyTbB2I7rp.JC20AnIX3j95raTHW1hMW', 'sZwvNis7WrC3C5jr9ET3X4WSYFLIrqOd7s20fVNIlo1WBBjcQCkSwRlpXIoE', '2019-04-04 17:54:15', '2019-05-19 18:36:07'),
(11, 'Admin', 'Bambang Satya Aji', 'contoh@gmail.com', '$2y$10$7K49apLVd37qAXDSd85u..g/KQ32KoUczG2TQo24LiJ8AwCxPH4mK', 'kKebffXr4AcU09Pb803hrL1Ei4Vr3ofHMu6B8hMk3CfADrQB1Cgb2L3o3p29', '2019-04-04 18:26:46', '2019-06-25 18:39:21'),
(13, 'QA', 'Ririn Damayanti', 'damayanti.ririn@gmail.com', '$2y$10$4zfetDy5Rztg27TQrfvnC.nZUVzBYBjnpdLt9.fzp7uTZJye5erzK', 'tPZUFfiLKtnzP5GgT8ViUh7mD2ebeDtaPepxlTJyTq8qkX8Ty1xGfBVROgta', '2019-04-04 18:52:59', '2019-05-19 18:36:22'),
(14, 'Legal', 'Somad Al Jabar', 'aljabar1750@gmail.com', '$2y$10$2GyX7QnQPjtyKg5qOg4hdOcseBj2hBSzhin.h9HmWVWr13gCZL.P6', 'mR9gwLdgFaQqXiQZY6DtlOsmrFxMyU72hTU40rWBP8cthoYoH9RUYEF9Asvj', '2019-04-10 01:14:16', '2019-05-19 18:36:40'),
(15, 'GP', 'Sabrina Farhana Nurliza', 'sabrinafarhananur@gmail.com', '$2y$10$d77D1UY9XTG12PhSzKQYl.39hFz6KUAK8KZHyr5qWER4p31njMd0e', 'OsokjYuDfnFNoiashi1LZu63usLNRr4S3oaQkrDT6c3CqOqLpzajBG3zurGy', '2019-04-10 01:15:41', '2019-05-19 18:37:09'),
(17, 'PV', 'Wulan', 'wulan@gmail.com', '$2y$10$bw0TdQ.Aez6hv.98zWiVk.Npi.5.SKxdmTp0RElbqeBj6b8ZdfTUi', NULL, '2019-05-19 20:43:30', '2019-05-19 20:43:30'),
(18, 'PV', 'Jamal', 'jamal@gmail.com', '$2y$10$r3vZ6Qv0PxFl1vda54KBdeqhNzEK325LVHeKPe18tW8UnyS259FcO', 'EdHlt7h1ChgZVsQF1c7yOUI1aQzXXEElhzO9Ri9COYyIucoedUsEctiZmgMh', '2019-06-23 23:24:15', '2019-06-23 23:24:15'),
(21, 'Admin', 'Justin Bieber', 'admin.nutrifood@gmail.com', '$2y$10$.3MabUMp9.z3SlP73ymu6Op8NZlW5YAT0.924yNTlNh8xUsbkYW3a', '4J9l4niKblCQxVGXaoXqF4PlJFS7W2UCZMOuJONl8LaRqLZlp0eN19bSgkpV', '2019-06-25 02:17:13', '2019-06-25 02:17:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berbadan_hukum`
--
ALTER TABLE `berbadan_hukum`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `file`
--
ALTER TABLE `file`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `maklon`
--
ALTER TABLE `maklon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maklon_project`
--
ALTER TABLE `maklon_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skala_kategori`
--
ALTER TABLE `skala_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `table_sementara`
--
ALTER TABLE `table_sementara`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `berbadan_hukum`
--
ALTER TABLE `berbadan_hukum`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `file`
--
ALTER TABLE `file`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `maklon`
--
ALTER TABLE `maklon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `maklon_project`
--
ALTER TABLE `maklon_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skala_kategori`
--
ALTER TABLE `skala_kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `table_sementara`
--
ALTER TABLE `table_sementara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
