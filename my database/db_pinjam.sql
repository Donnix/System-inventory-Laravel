-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2020 pada 15.09
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_pinjam`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_peminjamans`
--

CREATE TABLE `detail_peminjamans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_inventaris` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `employes`
--

CREATE TABLE `employes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_petugas` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_level` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `employes`
--

INSERT INTO `employes` (`id`, `username`, `password`, `jk_petugas`, `nama_petugas`, `nama_level`, `created_at`, `updated_at`) VALUES
(3, 'het', 'haha', 'Laki-laki', 'Judin', 'admin', '2020-01-08 08:17:25', '2020-01-08 08:17:37'),
(4, 'iwanoyoy', 'pass', 'Laki-laki', 'Iwan', 'Petugas', '2020-01-08 09:00:38', '2020-01-08 09:00:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventarisis`
--

CREATE TABLE `inventarisis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kondisi` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(11) NOT NULL,
  `nama_jenis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_register` date NOT NULL,
  `nama_ruangan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_petugas` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `inventarisis`
--

INSERT INTO `inventarisis` (`id`, `nama`, `kondisi`, `keterangan`, `jumlah`, `nama_jenis`, `tanggal_register`, `nama_ruangan`, `nama_petugas`, `created_at`, `updated_at`) VALUES
(3, 'HP', 'Bagus', 'telpon', 1, 'Elektronik', '2020-01-13', 'Kantin', 'Iwan', '2020-01-08 18:09:41', '2020-01-08 18:09:41'),
(4, 'Speaker', 'Bagus', 'Pengencang Suara', 100, 'Elektronik', '2020-01-09', 'Kantin', 'Iwan', '2020-01-09 06:15:10', '2020-01-09 06:15:10');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenises`
--

CREATE TABLE `jenises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jenises`
--

INSERT INTO `jenises` (`id`, `nama_jenis`, `kode_jenis`, `keterangan`, `created_at`, `updated_at`) VALUES
(4, 'Hewan', '13', 'dadaada', '2020-01-07 21:06:34', '2020-01-07 21:06:34'),
(5, 'Elektronik', '11', 'Hati Hati', '2020-01-08 09:01:55', '2020-01-08 09:01:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporanborrowings`
--

CREATE TABLE `laporanborrowings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status_peminjaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pegawai` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `laporanborrowings`
--

INSERT INTO `laporanborrowings` (`id`, `nama`, `jumlah`, `tanggal_pinjam`, `tanggal_kembali`, `status_peminjaman`, `nama_pegawai`, `created_at`, `updated_at`) VALUES
(3, 'Laptop', 2, '2020-01-09', '2020-01-10', 'Pinjam', 'Donnix', NULL, NULL),
(5, 'HP', 2, '2020-01-12', '2020-01-14', 'Pinjam', 'agis', NULL, NULL),
(6, 'Speaker', 2, '2020-01-07', '2020-01-18', 'Pinjam', 'Donnix', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `levels`
--

CREATE TABLE `levels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `levels`
--

INSERT INTO `levels` (`id`, `nama_level`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'CRUD ALL', '2020-01-07 20:25:11', '2020-01-08 00:24:11'),
(2, 'Petugas', 'Hanya CRUD JENIS', '2020-01-08 07:56:59', '2020-01-08 07:56:59');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_01_08_013117_create_jeniss_table', 1),
(5, '2020_01_08_013402_create_inventariss_table', 2),
(6, '2020_01_08_014033_create_ruangans_table', 3),
(7, '2020_01_08_014139_create_petugass_table', 4),
(8, '2020_01_08_014520_create_peminjamans_table', 5),
(9, '2020_01_08_015555_create_detail_peminjamans_table', 6),
(10, '2020_01_08_015837_create_levels_table', 7),
(11, '2020_01_08_020002_create_pegawai_table', 8),
(12, '2020_01_09_052254_create_laporansborrowings_table', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawas`
--

CREATE TABLE `pegawas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk_pegawai` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nohp_pegawai` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pegawas`
--

INSERT INTO `pegawas` (`id`, `nama_pegawai`, `nip`, `jk_pegawai`, `nohp_pegawai`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Donnix', '1213', 'Laki-laki', '0813', 'Tajur', '2020-01-08 07:46:50', '2020-01-08 07:48:43'),
(2, 'agis', '1214', 'Perempuan', '08139903245', 'Cicurug', '2020-01-08 08:29:43', '2020-01-08 08:29:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjamans`
--

CREATE TABLE `peminjamans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status_peminjaman` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pegawai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Trigger `peminjamans`
--
DELIMITER $$
CREATE TRIGGER `abis hapus` AFTER DELETE ON `peminjamans` FOR EACH ROW UPDATE inventarisis
 SET jumlah = jumlah+OLD.jumlah
 WHERE
 nama= OLD.nama
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `kurang inventaris` AFTER INSERT ON `peminjamans` FOR EACH ROW UPDATE inventarisis
 SET jumlah = jumlah-NEW.jumlah
 WHERE
 nama= NEW.nama
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `laporan` AFTER DELETE ON `peminjamans` FOR EACH ROW INSERT INTO laporanborrowings
   ( id,nama,jumlah,tanggal_pinjam,tanggal_kembali,status_peminjaman,nama_pegawai)
   VALUES
   ( OLD.id,OLD.nama,OLD.jumlah,OLD.tanggal_pinjam,OLD.tanggal_kembali,OLD.status_peminjaman,OLD.nama_pegawai)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruangans`
--

CREATE TABLE `ruangans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_ruangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ruangans`
--

INSERT INTO `ruangans` (`id`, `nama_ruangan`, `kode_ruangan`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Ruang  Cinema', '134', 'buat nonton', '2020-01-08 02:20:59', '2020-01-08 02:21:13'),
(2, 'Kantin', '119', 'Makan', '2020-01-08 09:02:38', '2020-01-08 09:02:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_level` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `id_level`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'donnix', 'admin@admin.com', '', NULL, '$2y$10$c.SJ0uU7MHuoQVsQC2y4GetOG5ZD8zIJHbm839QUfJtrUVS0uu3By', NULL, '2020-01-08 20:46:04', '2020-01-08 20:46:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_peminjamans`
--
ALTER TABLE `detail_peminjamans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `employes`
--
ALTER TABLE `employes`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `inventarisis`
--
ALTER TABLE `inventarisis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jenises`
--
ALTER TABLE `jenises`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporanborrowings`
--
ALTER TABLE `laporanborrowings`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pegawas`
--
ALTER TABLE `pegawas`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `peminjamans`
--
ALTER TABLE `peminjamans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ruangans`
--
ALTER TABLE `ruangans`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT untuk tabel `detail_peminjamans`
--
ALTER TABLE `detail_peminjamans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `employes`
--
ALTER TABLE `employes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `inventarisis`
--
ALTER TABLE `inventarisis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `jenises`
--
ALTER TABLE `jenises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `laporanborrowings`
--
ALTER TABLE `laporanborrowings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `levels`
--
ALTER TABLE `levels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pegawas`
--
ALTER TABLE `pegawas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `peminjamans`
--
ALTER TABLE `peminjamans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `ruangans`
--
ALTER TABLE `ruangans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
