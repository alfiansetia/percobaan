-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Jun 2025 pada 13.37
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

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
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pengarang` varchar(255) NOT NULL,
  `penerbit` varchar(255) NOT NULL,
  `tahun_terbit` year(4) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `kode`, `nama`, `pengarang`, `penerbit`, `tahun_terbit`, `image`, `created_at`, `updated_at`) VALUES
(16, '080-07-1', 'Pawang Gajah Yang Pongah', 'Tina Rakhmatin', 'Saka Mitra Kompetensi', '2007', NULL, '2024-09-11 05:15:54', '2024-09-11 05:16:57'),
(17, '813-ARU-KB-1', 'Kapten Bhukal Pertempuran Di Alas Tua', 'Arul Chandrana', 'Tiga Media Prima Semarang', '2019', NULL, '2024-09-11 05:19:42', '2024-09-11 05:19:42'),
(18, '813-CHA-KJA-2', 'Sekolah Bajak Laut Kapten Janggut Api', 'Chae Strathie', 'Pustaka Tiga Kelana Jakarta', '2019', NULL, '2024-09-11 05:21:30', '2024-09-11 05:21:30'),
(19, '813-RED-TMHO-1', 'Tambelo Meniti Hari Di Ottakwa', 'Redhite K', 'Era Adicitra Intermedia', '2008', NULL, '2024-09-11 05:23:31', '2024-09-11 05:23:31'),
(20, '813-VAR-PN-01', 'Penguji Nyali', 'Varuni Dian Wijayanti', 'Era Pustaka Utama', '2019', NULL, '2024-09-11 05:24:56', '2024-09-11 05:24:56'),
(22, '080-28-1-RK-TKBC', 'Tambelo Kembalinya Si Burung Camar', 'Redhite K', 'Era Adicitra Intermedia', '2008', NULL, '2024-09-11 05:27:16', '2024-09-11 05:27:16'),
(23, '813-PC-RR-04', 'Ramuan Rahasia', '17 Penulis Cilik', 'Bestari', '2019', NULL, '2024-09-11 05:28:53', '2024-09-11 05:28:53'),
(24, '813-ENO-SE-01', 'Sangkar Emas', 'Eno H.P', 'PT Citra Aji Parama', '2019', NULL, '2024-09-11 05:30:09', '2024-09-11 05:30:09'),
(25, '813-ANA-MSD-01', 'Mimpi Sang Diva', 'Ananda Putri', 'Pustaka Pawiyatan Surakarta', '2019', NULL, '2024-09-11 05:31:26', '2024-09-11 05:31:26'),
(26, '813-LAR-MPJ-01', 'Mima Dan Putri Jenna', 'Laras Ayu', 'Tiga Media Prima Semarang', '2019', NULL, '2024-09-11 05:32:55', '2024-09-11 05:32:55'),
(27, '813-TED-PRL-04', 'Penculikan Ratu Lebah', 'Tedi Siswoko', 'Wangsa Jatra Lestari Sukoharjo', '2019', NULL, '2024-09-11 05:36:18', '2024-09-11 05:36:18'),
(28, '080-20-2-JW-JJBP', 'Jeri Jerapah Berleher Pendek', 'Jajang Windaya', 'Saka Mitra Kompetensi', '2007', NULL, '2024-09-11 05:38:22', '2024-09-11 05:38:22'),
(29, '080-11-2-J', 'Serial Akta! Ada Duka Di Wibeng', 'Jazimah Al-Muhyi', 'Era Adicitra Intermedia', '2008', NULL, '2024-09-11 05:40:15', '2024-09-11 05:40:15'),
(30, '813-JAJ-EEK-2', 'Ello Si Elang Kecil', 'Jajang Windaya', 'PT Citra Aji Parama', '2019', NULL, '2024-09-11 05:41:39', '2024-09-11 05:41:39'),
(31, '813-ANG-DKK-01', 'Dunia Kaka Vs Kiki', 'Angela Oscario', 'Wangsa Jatra Lestari Sukoharjo', '2019', NULL, '2024-09-11 05:42:58', '2024-09-11 05:42:58'),
(32, '813-PEU-TKB-01', 'Terbentuknya Kelompok Blue', 'Devita Mayanda Heerlie', 'Pustaka Purwonegaraan', '2019', NULL, '2024-09-11 05:44:58', '2024-09-11 05:44:58'),
(33, '813-SAR-L-4', 'Lampor', 'Saryana, M.Pd', 'Iranti Mitra Utama', '2019', NULL, '2024-09-11 05:46:50', '2024-09-11 05:46:50'),
(34, '813-MAH-LGL-1', 'Lari, Gung! Lari!', 'Mahfud Ikhwan', 'Sunda Kelapa Puspita', '2019', NULL, '2024-09-11 05:48:11', '2024-09-11 05:48:11'),
(35, '813-NIT-NPI-04', 'Nino Dan Piala Impian', 'Nita Candra', 'Tiga Kelana', '2019', NULL, '2024-09-11 05:49:46', '2024-09-11 05:49:46'),
(36, '813-YUN-LPK-03', 'Luna Dan Penculikan Kunang-Kunang', 'Yuniar Khairani', 'Tiga Serangkai', '2019', NULL, '2024-09-11 05:51:12', '2024-09-11 05:51:12'),
(37, '080-22-1-Selasih-KKPA', 'Kembali Ke Pangkuan Ayah', 'Selasih', 'Balai Pustaka', '2011', NULL, '2024-09-11 05:52:36', '2024-09-11 05:52:36'),
(38, '813-VER-KB-01', 'Kyla Si Badung', 'Veronica W', 'Tiga Serangkai', '2019', NULL, '2024-09-11 05:54:45', '2024-09-11 05:54:45'),
(39, '813-NUR-PTAB-1', 'Pengemis Tua Di Hutan Belantara', 'Nurani E.L', 'Saka Mitra Kompetensi', '2007', NULL, '2024-09-11 05:56:18', '2024-09-11 05:56:18'),
(40, '813-ARY-NSPM-1', 'Nathan Sang Penjelajah Mimpi', 'Ary Nilandari', 'Wangsa Jatra Lestari Sukoharjo', '2019', NULL, '2024-09-11 05:58:20', '2024-09-11 05:58:20'),
(41, '813-ZUN-HTS-03', 'Hikmah Tikus Sawah', 'Yunne', 'PT Sarana Pancakarya Nusa', '2019', NULL, '2024-09-11 05:59:42', '2024-09-11 05:59:42'),
(42, '810-YAN-HAMD-04', 'Hapuslah Air Mata Dunia', 'Drs Yant Mujiyanto MPd', 'Teguh Karya', '2019', NULL, '2024-09-11 06:01:56', '2024-09-11 06:01:56'),
(43, '890-31-3-S-LSB', 'Lambaian Seribu Bunga', 'Siswandi', 'Balai Pustaka', '2011', NULL, '2024-09-11 06:03:08', '2024-09-11 06:03:08'),
(44, '080-04-3', 'Lembah Seribu Bunga', 'Daniel Agus Maryanto', 'Citra Aji Parama', '2008', NULL, '2024-09-11 06:04:43', '2024-09-11 06:04:43'),
(45, '080-05-2', 'Cinta? Katakan Saja!', 'Rianna Wati', 'Era Adicitra Intermedia', '2010', NULL, '2024-09-11 06:06:04', '2024-09-11 06:06:04'),
(46, '080-09-1', 'Romansa D\'Abrar: Cinta Itu Bukan Virus', 'Jazimah Al-Muhyi', 'Era Adicitra Intermedia', '2010', NULL, '2024-09-11 06:08:46', '2024-09-11 06:08:46'),
(47, '813-EVA-BB-02', 'Batu-Batu Bercerita', 'Eva Y Nukman', 'Tiga Serangkai', '2019', NULL, '2024-09-11 06:09:52', '2024-09-11 06:09:52'),
(48, '813-SEL-PK-1', 'Pengaruh Keadaan', 'Selasih', 'Balai Pustaka', '2011', NULL, '2024-09-11 06:10:43', '2024-09-11 06:10:43'),
(49, '813-NIT-MPK-04', 'Misi Penyelamatan Kat', 'Nita Candra', 'Tiga Media Prima Semarang', '2019', NULL, '2024-09-11 06:11:56', '2024-09-11 06:11:56'),
(50, '813-PAN-SGB-1', 'Sukreni Gadis Bali', 'AA Pandji Tisna', 'Balai Pustaka', '2010', NULL, '2024-09-11 06:13:21', '2024-09-11 06:13:21'),
(51, '813-NUR-KM-1', 'Karena Mentua', 'Nur Sutan Iskandar', 'Balai Pustaka', '2011', NULL, '2024-09-11 06:15:09', '2024-09-11 06:15:09'),
(52, '813-SEN-KSM-01', 'Kepak Seribu Merpati', 'Seno Subro', 'Era Adicitra Intermedia', '2019', NULL, '2024-09-11 06:16:16', '2024-09-11 06:16:16'),
(53, '813-PCO-KBA-04', 'Kimi Dan Buku Ajaib', '30 Penulis Cilik ODTW', 'Bestari', '2019', NULL, '2024-09-11 06:18:25', '2024-09-11 06:18:25'),
(54, '080-08-1', 'Cinta Gaya Britney', 'Afifah Afra', 'Era Adicitra Intermedia', '2012', NULL, '2024-09-11 06:19:23', '2024-09-11 06:19:23'),
(55, '813-SAT-KJP-2', 'Kakek Kami Juga Pejuang', 'Satyagraha Hoerip', 'Balai Pustaka', '2011', NULL, '2024-09-11 06:20:51', '2024-09-11 06:20:51'),
(56, '1253-2-BA-2-CM', 'Cakap Membaca Bahasa Inggris', 'Idhie S', 'Ttik Terang', '0000', NULL, '2024-09-11 06:22:29', '2024-09-11 06:22:43'),
(57, '400-1-SC-GK-4', 'Koleksi Cerita 7 Kebiasaan Anak Bahagia: Good And Kakeknya', 'Sean Covey', 'Libri', '2019', NULL, '2024-09-11 06:24:48', '2024-09-11 06:24:48'),
(58, '400-2-SC-SPS-4', 'Koleksi Cerita 7 Kebiasaan Anak Bahagia: Sophie Dan Puisi Sempurna', 'Sean Covey', 'Libri', '2019', NULL, '2024-09-11 06:26:56', '2024-09-11 06:26:56'),
(59, '400-3-LIW-MDDRB-4', 'Cerita Bergambar Rumah Kecil: Musim Dingin Di Rimba Besar', 'Laura Ingalls Wilder', 'Libri', '2019', NULL, '2024-09-11 06:28:39', '2024-09-11 06:28:39'),
(60, '400-4-LIW-MDDP-4', 'Cerita Bergambar Rumah Kecil: Musim Dingin Di Pertanian', 'Laura Ingalls Wilder', 'Libri', '2019', NULL, '2024-09-11 06:30:02', '2024-09-11 06:30:02'),
(61, '400-5-LIW-BDRK-4', 'Cerita Bergambar Rumah Kecil: Berdansa Di Rumah Kakek', 'Laura Ingalls Wilder', 'Libri', '2019', NULL, '2024-09-11 06:32:16', '2024-09-11 06:32:16'),
(62, '400-6-LIW-NDRB-4', 'Cerita Bergambar Rumah Kecil: Natal Di Rimba Besar', 'Laura Ingalls Wilder', 'Libri', '2019', NULL, '2024-09-11 06:34:29', '2024-09-11 06:34:29'),
(63, '400-7-LIW-MPDRB-4', 'Cerita Bergambar Rumah Kecil: Musim Panas Di Rimba Besar', 'Laura Ingalls Wilder', 'Libri', '2019', NULL, '2024-09-11 06:38:32', '2024-09-11 06:38:32'),
(64, '400-8-LIW-MPDRB-4', 'Cerita Bergambar Rumah Kecil: Rusa Di Rimba', 'Laura Ingalls Wilder', 'Libri', '2019', NULL, '2024-09-11 06:39:54', '2024-09-11 06:39:54'),
(65, '400-9-NH-KPBIUA-2', 'Kumpulan Puisi Berbahasa Inggris Untuk Anda', 'N Hadi', 'Menara Mega Perkasa', '2017', NULL, '2024-09-11 06:41:43', '2024-09-11 06:41:43'),
(66, '400-10-F-MKDBI-2', 'Mengenal Kalimat Dalam Bahasa Indonesia', 'Ferdiansyah', 'Satubuku', '2017', NULL, '2024-09-11 06:43:14', '2024-09-11 06:43:14'),
(67, '400-11-I-BMPDI-2', 'Bagaimana Membuat Poster Dan Iklan', 'Istiati', 'Satubuku', '2017', NULL, '2024-09-11 06:44:35', '2024-09-11 06:44:35'),
(68, '400-12-AA-TP-2', 'The Phone', 'A Asianto', 'Penerbit Tropica', '2017', NULL, '2024-09-11 06:45:37', '2024-09-11 06:45:37'),
(69, '400-13-W-YAWYW-2', 'You Are What You Wear', 'Widi', 'Penerbit Tropica', '2017', NULL, '2024-09-11 06:46:55', '2024-09-11 06:46:55'),
(70, '400-14-B-TBOR', 'The Box Of Requests', 'Berta', 'Penerbit Mata Pedang Ilmu', '2017', NULL, '2024-09-11 06:48:48', '2024-09-11 06:48:48'),
(71, '400-15-MP-MTBB-1', 'Marlin The Beach Boy', 'M Permata', 'Penerbit Potensi Titian Siswa', '2017', NULL, '2024-09-11 06:50:06', '2024-09-11 06:50:06'),
(72, '400-16-E-DOAF-1', 'Dream Of A Fish', 'Evarista', 'Penerbit Tropica', '2017', NULL, '2024-09-11 06:52:23', '2024-09-11 06:52:23'),
(73, '400-17-M-MPKT-1', 'Mengenal Penggunaan Kata Tanya', 'Mulia', 'Satubuku', '2017', NULL, '2024-09-11 20:32:53', '2024-09-11 20:34:58'),
(74, '400-18-CD-OJ-2', 'Oliver Jwist', 'Charls Dickens', 'Regents Publishing', '0000', NULL, '2024-09-11 20:36:41', '2024-09-11 20:36:41'),
(75, '400-19-MWS-F-2', 'Frankenstein', 'Mary W Shelley', 'Regents Publishing', '0000', NULL, '2024-09-11 20:38:00', '2024-09-11 20:38:00'),
(76, '400-20-RLS-TI-2', 'Treasure Island', 'Robert Louis Stevenson', 'Regents Publishing', '0000', NULL, '2024-09-11 20:39:21', '2024-09-11 20:39:21'),
(77, '400-21-AD-TTM-2', 'The Three Musketeers', 'Alexandre Dumas', 'Regents Publishing', '0000', NULL, '2024-09-11 20:40:54', '2024-09-11 20:40:54'),
(78, '400-22-RLS-DJAMH-2', 'Dr Jekyll And Mr Hyde', 'Robert Louis Stevenson', 'Regents Publishing', '0000', NULL, '2024-09-11 20:42:15', '2024-09-11 20:42:15'),
(79, '400-23-EII-NWTE-3', 'New Ways To English', 'ELS Internationak INC', 'ELS International INC', '1986', NULL, '2024-09-11 20:43:39', '2024-09-11 20:43:39'),
(80, '400-24-MGS-GBPDP-2', 'Gaya Bahasa Pengetahuan Dan Penerapan', 'Maya Gustina S', 'Intan Pariwara', '2019', NULL, '2024-09-11 20:44:55', '2024-09-11 20:44:55'),
(81, '400-25-K-BM-2', 'Belajar Menulis', 'Karsidi', 'PT Tiga Serangkai Pustaka Mandiri Solo', '2019', NULL, '2024-09-11 20:46:07', '2024-09-11 20:46:07'),
(82, '400-26-W-GRSBBI-1', 'Gotong Royong Sebagai Budaya Bangsa Indonesia', 'Winarti', 'Saka Mitra Kompetensi', '2019', NULL, '2024-09-11 20:47:37', '2024-09-11 20:47:37'),
(83, '400-27-EF-EIF-1', 'English Fun', 'Ema Fitrini', 'PT Gading Inti Prima', '2019', NULL, '2024-09-11 20:48:52', '2024-09-11 20:48:52'),
(84, '400-28-EK-KMB ll-1', 'Keterampilan Menyimak & Berbicara ll', 'Engkus Kuswandi SPd Dkk', 'CV Ipa Abong', '2008', NULL, '2024-09-11 20:50:54', '2024-09-11 20:50:54'),
(85, '400-29-DHW-PBIDS-1', 'Percakapan Bahasa Inggris Di Sekolah', 'Dwi Henri Wijiatmoko', 'Pustaka Pitaloka Bandung', '2019', NULL, '2024-09-11 20:52:39', '2024-09-11 20:52:39'),
(86, '400-30-S-KDPAK', 'Kedudukan Dan Peranan Anggota Keluarga', 'Drs Sunarno', 'Aneka Ilmu', '2008', NULL, '2024-09-11 20:54:22', '2024-09-11 20:54:22'),
(87, '400-31-K-BM-01', 'Belajar Menulis', 'Karsidi', 'Tiga Serangkai', '2019', NULL, '2024-09-11 20:55:21', '2024-09-11 20:55:21'),
(88, '400-32-S-MMBS-01', 'Manajemen Mutu Berbasis Sekolah Konsep Dan Aplikasi', 'Suryadi MPd', 'PT Sarana Pancakarya Nusa', '2019', NULL, '2024-09-11 20:57:00', '2024-09-11 20:57:00'),
(89, '400-33-AF-TOATF-1', 'The Ox And The Flea And Other Stories', 'Didik Djunaedi', 'PT Gading Inti Prima', '2019', NULL, '2024-09-11 22:55:36', '2024-09-11 22:55:36'),
(90, '400-35-STL-PKDPP-1', 'Pengembangan Karakter Dalam Perkemahan Penggalang', 'Siti Nur Laela', 'PT Gading Inti Prima', '2017', NULL, '2024-09-11 22:57:07', '2024-09-11 22:57:07'),
(91, '400-36-ST-LADKK-1', 'Landasan, Asas, Dan Kedisiplinan Kepramukaan', 'Siti Kurnia', 'PT Gading Inti Prima', '2017', NULL, '2024-09-11 22:58:40', '2024-09-11 22:58:40'),
(92, '400-37-EK-KMBI-1', 'Keterampilan Menyimak & Berbicara ll', 'Engkus Kuswandi SPd Dkk', 'CV Ipa Abong', '2008', NULL, '2024-09-11 23:00:41', '2024-09-11 23:00:41'),
(93, '140510', 'Bingkisan Orang Pulang', 'H Munawar Kalahan', 'Yayasan Penulis 66 Kalimantan Barat', '2003', NULL, '2024-09-11 23:02:00', '2024-09-11 23:02:00'),
(94, '810-END-MAJAS-01', 'Mari Belajar Majas Dan Pribahasa', 'Endang Sri Wahyuni', 'CV Septi Aji', '2019', NULL, '2024-09-11 23:03:45', '2024-09-11 23:03:45'),
(95, '810-HAR-KMCP-01', 'Kiat Menulis Cerita Pendek', 'Harris Effendi Thahar', 'Angkasa', '2019', NULL, '2024-09-11 23:05:00', '2024-09-11 23:05:00'),
(96, '081-JOH-MB-01', 'Mahir Bercerita', 'Johan Wahyudi', 'PT Pustaka Sunda', '2019', NULL, '2024-09-11 23:06:08', '2024-09-11 23:06:08'),
(97, '800-KAR-BM-01', 'Belajar Membaca', 'Karsidi', 'PT Pantja Simpati', '2019', NULL, '2024-09-11 23:08:21', '2024-09-11 23:08:21'),
(98, '080-GNN-SLK-01', 'Jump Like A Frog Race', 'Gina Nurfauzah', 'CV Mitra Sarana Edukasi', '2019', NULL, '2024-09-11 23:09:53', '2024-09-11 23:09:53'),
(99, '810-NAN-MPPC-01', 'Menjadi Penulis Dan Pengarang Cilik', 'Naning Pranoto', 'Tiga Serangkai', '2019', NULL, '2024-09-11 23:11:00', '2024-09-11 23:11:00'),
(100, '813-SCN-BMB-01', 'Berani Menulis Buku', 'Seno Subro', 'PT Era Pustaka Utama', '2016', NULL, '2024-09-11 23:12:27', '2024-09-11 23:12:27'),
(101, '081-DSS-PBI-01', 'Pintar Berbahasa Indonesia', 'Dra Agustien Satiana', 'CV Aneka Ilmu', '0000', NULL, '2024-09-11 23:13:37', '2024-09-11 23:13:54'),
(102, '400-MG-MMK-01', 'Menjelajahi Dan Mempelajari Kalimat', 'MG Hesti Puji Rastuti', 'PT Intan Pariwara', '2019', NULL, '2024-09-11 23:15:54', '2024-09-11 23:15:54'),
(103, '081-MUH-EBI-01', 'Ejaan Bahasa Indonesia Buku 1', 'Drs Muhammad Jaruki', 'PT Adfale Prima Cipta', '2007', NULL, '2024-09-11 23:17:58', '2024-09-11 23:17:58'),
(104, '081-MUH-EBI-01', 'Ejaan Bahasa Indonesia Buku 3', 'Drs Muhammad Jaruki', 'PT Adfale Prima Cipta', '2007', NULL, '2024-09-11 23:19:13', '2024-09-11 23:19:13'),
(105, '081-MUH-EBI-02', 'Ejaan Bahasa Indonesia Buku 2', 'Drs Muhammad Jaruki', 'PT Adfale Prima Cipta', '2017', NULL, '2024-09-11 23:19:55', '2024-09-11 23:19:55'),
(106, '081-MUH-EBI-02', 'Ejaan Bahasa Indonesia Buku 4', 'Drs Muhammad Jaruki', 'PT Adfale Prima Cipta', '2007', NULL, '2024-09-11 23:20:41', '2024-09-11 23:20:41'),
(107, '950-1-BA-3-PDM', 'Pintar Dengan Membaca', 'R Deni Muhammad Danial', 'PT Sindur Press Semarang', '2008', NULL, '2024-09-11 23:22:24', '2024-09-11 23:22:24'),
(108, '810-POE-KD-02', 'Kelompok Drama', 'Ir Djuanda', 'Seti Aji', '2019', NULL, '2024-09-11 23:23:23', '2024-09-11 23:23:23'),
(109, '800-FER-DBT-01', 'Bunyi Bahasa Dan Tata Bunyi Bahasa Indonesia', 'Ferdiansyah', 'CV Satu Buku', '2017', NULL, '2024-09-11 23:24:47', '2024-09-11 23:24:47'),
(110, '810-IVO-KDA-3', 'Kumpulan Drama Anak', 'Ivone RMDA', 'CV Seti Aji Surakarta', '2019', NULL, '2024-09-11 23:26:25', '2024-09-11 23:26:25'),
(111, '813-DOR-KC-01', 'Kumpulan Cerpen Menarik', 'Dartini', 'Era Pustaka Utama', '2019', NULL, '2024-09-11 23:29:19', '2024-09-11 23:29:19'),
(112, '081-YAN-MCB-01', 'Membaca Cepat Banyak Manfaat', 'Yaneu Sulistiawati SPd', 'PT Sindur Press', '2008', NULL, '2024-09-11 23:30:47', '2024-09-11 23:30:47'),
(113, '800-NUA-BE-01', 'Cara Asik Belajar Ejaan', 'Farika', 'Nuansa Citra Grafika', '2006', NULL, '2024-09-11 23:32:14', '2024-09-11 23:32:14'),
(114, '800-YUN-PMK-01', 'Perpustakaan Milik Kita', 'Yuni Sri Wahyuni', 'PT Sindur Press', '2008', NULL, '2024-09-11 23:33:35', '2024-09-11 23:33:35'),
(115, '400-7-ADI-PKK-01', 'Pendidikan Kesejahteraan Keluarga Jilid 2', 'Aditya Pratama', 'PT Adfale Prima Cipta', '2006', NULL, '2024-09-11 23:35:26', '2024-09-11 23:35:26'),
(116, '400-7-ADI-PKK-03', 'Pendidikan Kesejahteraan Keluarga Jilid 3', 'Aditya Pratama', 'PT Adfale Prima Cipta', '2006', NULL, '2024-09-11 23:37:29', '2024-09-11 23:37:29'),
(117, '813-GWO-RMM-04', 'Mc Donald', 'Richard & Maurice', 'G Wu Sarana Komunikasi', '2019', NULL, '2024-09-11 23:38:54', '2024-09-11 23:38:54'),
(118, '024-2', 'The Advantures Of Lola And Woufi', 'Dr Rahayu Surtiati', 'Erlangga For Kids', '2004', NULL, '2024-09-11 23:40:52', '2024-09-11 23:40:52'),
(119, '949-2-BA-3-MD', 'Menjadi Penulis Mulai Dari Sekarang', 'R Deni Muhammad Danial', 'PT Sindur Press Semarang', '2008', NULL, '2024-09-11 23:42:13', '2024-09-11 23:42:13'),
(120, '800-ARM-AMK-02', 'Asiknya Mempelajari Kata Depan', 'Armada A', 'Abadi Zam Zam', '2017', NULL, '2024-09-11 23:43:44', '2024-09-11 23:43:44'),
(121, '052-GIN-EPB-3', 'Emily And A Plastics Ball', 'Gina Nur Fauzah', 'CV Mitra Sarana Edukasi', '2019', NULL, '2024-09-11 23:45:26', '2024-09-11 23:45:26'),
(122, '052-GIN-TLTB-1', 'The Lost Teddy Bear', 'Gina Nur Fauzah', 'CV Mitra Sarana Edukasi', '2019', NULL, '2024-09-11 23:47:15', '2024-09-11 23:47:15'),
(123, '082-404-RA-1', 'Revenge Of The Aves', 'Yoyok Rahayu Basuki SPd', 'Tropika', '2017', NULL, '2024-09-11 23:48:52', '2024-09-11 23:48:52'),
(124, '052-ARY-AD-1', 'Awaken From Despair', 'A Aryadiest', 'Penerbit Utan Kayu', '2017', NULL, '2024-09-11 23:51:48', '2024-09-11 23:51:48'),
(125, '813-ING-AKBP-01', 'Ada Kisah Dibalik Pribahasa', 'Ingrid Veronica Kusumawardan', 'Tiga Serangkai', '2019', NULL, '2024-09-11 23:53:14', '2024-09-11 23:53:14'),
(126, '948-2-BA-3-JD', 'Jago Debat', 'R Deni Muhammad Danial', 'PT Sindur Press', '2008', NULL, '2024-09-11 23:55:02', '2024-09-11 23:55:02'),
(127, '052-IRA-PEN-4', 'Primary English Numbers', 'Jecinda Theola Elisabeth M', 'Iranti Mitra Utama', '2019', NULL, '2024-09-11 23:57:11', '2024-09-11 23:57:11'),
(128, '052-ERN-EC-1', 'English Is Cool', 'Erna Fitrini', 'Cahaya Pustaka Raga', '2019', NULL, '2024-09-11 23:58:33', '2024-09-11 23:58:33'),
(129, '052-ERN-AE-1', 'Always English', 'Erna Fitrini', 'Cahaya Pustaka Raga', '2019', NULL, '2024-09-12 00:01:21', '2024-09-12 00:01:21'),
(130, '052-REN-BPOS-1', 'Bobs Pranks And Other Stories', 'Renata Pohan', 'Cahaya Pustaka Raga', '2019', NULL, '2024-09-12 00:03:34', '2024-09-12 00:03:34'),
(131, '052-ERN-ILE-2', 'I Love English', 'Erna Fitrini', 'Cahaya Pustaka Raga', '2019', NULL, '2024-09-12 00:05:48', '2024-09-12 00:05:48'),
(132, '052-ERN-SEHS-2', 'Speaking English At Home And School', 'Erna Fitrini', 'Cahaya Pustaka Raga', '2019', NULL, '2024-09-12 00:07:09', '2024-09-12 00:07:09'),
(133, '052-DID-TCTF-2', 'The Crab And The Fox', 'Didik Junaidi', 'PT Gading Inti Prima', '2019', NULL, '2024-09-12 00:08:32', '2024-09-12 00:08:32'),
(134, '080-SUR-LFO-02', 'Lets Find Out About Our House', 'Sururiyah SSi', 'PT Mediantara Semesta', '2019', NULL, '2024-09-12 00:11:03', '2024-09-12 00:11:03'),
(135, '052-ERN-EF-2', 'English Is Fun', 'Erna Fitrini', 'PT Gading Inti Prima', '2019', NULL, '2024-09-12 00:11:58', '2024-09-12 00:11:58'),
(136, '800-WAH-ABM-03', 'Aku Bangga Menjadi Bangsa Indonesia', 'Wahjudi Djaja', 'Penerbit Sunda Kelapa Pustaka', '2019', NULL, '2024-09-12 00:13:29', '2024-09-12 00:13:29'),
(137, '052-DID-TMDHMF-3', 'The Mouse Deer And His Magic Flute And Other Stories', 'Didik Djunaedi', 'Cahaya Pustaka Raga', '2019', NULL, '2024-09-12 00:14:58', '2024-09-12 00:14:58'),
(138, '905-2-BA-3-MP', 'Membuat Puisi', 'Dra Ika Berdianti', 'PT Sindur Press', '0000', NULL, '2024-09-12 00:16:41', '2024-09-12 00:16:41'),
(139, '081-ASU-BPP-01', 'Belajar Pidato Untuk Pemula', 'Asul Wiyanto', 'Aneka Ilmu', '0000', NULL, '2024-09-12 00:17:55', '2024-09-12 00:17:55'),
(140, '081-GIR-PI-01', 'Peribahasa Indonesia Jilid 1', 'Giri Prastowo SPd', 'PT Regia Jacatra', '2017', NULL, '2024-09-12 00:19:40', '2024-09-12 00:19:40'),
(141, '081-GIR-PI-03', 'Peribahasa Indonesia Jilid 2', 'Giri Prastowo SPd', 'PT Regia Jacatra', '2019', NULL, '2024-09-12 00:20:40', '2024-09-12 00:20:40'),
(142, '081-GIR-PI-01', 'Peribahasa Indonesia Jilid 3', 'Giri Prastowo SPd', 'PT Regia Jacatra', '2019', NULL, '2024-09-12 00:21:57', '2024-09-12 00:21:57'),
(143, '03-007-KEN-G-E', 'Gogo Loves English Jilid 1', 'Ken Methold Dkk', 'Longman', '2003', NULL, '2024-09-12 00:23:16', '2024-09-12 00:23:16'),
(144, '03-013-KEN-G-E', 'Gogo Loves English Jilid 2', 'Ken Methold Dkk', 'Longman', '2003', NULL, '2024-09-12 00:24:26', '2024-09-12 00:24:26'),
(145, '903-1-BA-3-SI', 'Perjalanan Panjang Sastra Indonesia', 'Dra Ika Berdianti', 'PT Sindur Press', '2008', NULL, '2024-09-12 00:26:18', '2024-09-12 00:26:18'),
(146, '1254-1-AB-4-AG', 'Abily Is A Good Boy', 'Ruyani', 'PT Panca Anugerah Sakti', '2007', NULL, '2024-09-12 00:28:06', '2024-09-12 00:28:06'),
(147, '810-IRW-ABM-02', 'Aku Bisa Menulis Puisi', 'Irwan Rinaldi', 'Kopemdik Nusantara', '2019', NULL, '2024-09-12 00:29:41', '2024-09-12 00:29:41'),
(148, '679-2-BA-3-BI', 'Terampil Berbicara Dalam Bahasa Indonesia 2', 'Drs Hartono', 'CV Pamularsih', '2008', NULL, '2024-09-12 00:31:46', '2024-09-12 00:31:46'),
(149, 'BA-3-BI-631-2', 'Terampil Menulis Dalam Bahasa Indonesia', 'Drs Hartono', 'Aneka Ilmu', '2008', NULL, '2024-09-12 00:33:10', '2024-09-12 00:33:10'),
(150, '052-DID-TBTF-3', 'The Bear And The Fox', 'Didik Djunaedi', 'PT Gading Inti Prima', '2019', NULL, '2024-09-12 00:34:30', '2024-09-12 00:34:30'),
(151, '052-DID-BSLAL-1', 'Baby Squirrel Learnt A Lesson', 'Didik Djunaedi', 'Cahaya Pustaka Raga', '2017', NULL, '2024-09-12 00:36:18', '2024-09-12 00:36:18'),
(152, '052-REN-TFT-2', 'The Fish And The Tortoise', 'Renata Pohan', 'PT Gading Inti Prima', '2017', NULL, '2024-09-12 00:37:53', '2024-09-12 00:37:53'),
(153, '052-DID-TLTM-2', 'The Tadpoles Look For Their Mother And Other Stories', 'Didik Djunaedi', 'PT Gading Inti Prima', '2019', NULL, '2024-09-12 00:39:18', '2024-09-12 00:39:18'),
(154, '052-MOC-B-04', 'Bugs Life (Dunia Serangga)', 'Moch Edwin Iskandar', 'PT Sarana Pancakarya Nusa', '2019', NULL, '2024-09-12 00:43:06', '2024-09-12 00:43:06'),
(155, '800-HAR-MR-02', 'Membuat Resensi', 'Drs Haryanto', 'PT Sindur Press', '2008', NULL, '2024-09-12 00:46:41', '2024-09-12 00:46:41'),
(156, '081-HER-MSC-02', 'Menggagas Sebuah Cerpen', 'E Heri', 'PT Sindur Press', '2008', NULL, '2024-09-12 00:48:09', '2024-09-12 00:48:09'),
(168, 'A-001', 'CONTOH', 'CONTOH', 'CONTOH', '2021', 'images/rTxItR7M5l80JEVlQpIEwYCGfM4bEeLxxlLalw9v.png', '2024-09-16 17:47:37', '2024-09-16 17:47:37');

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
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_08_19_000000_create_failed_jobs_table', 1),
(15, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(16, '2024_06_06_071433_create_category_table', 1),
(17, '2024_06_06_072852_create_penerbit_table', 1),
(18, '2024_06_06_073031_create_anggota_table', 1),
(19, '2024_06_06_073111_create_pengembalian_table', 1),
(20, '2024_06_06_073147_create_pinjaman_table', 1),
(21, '2024_06_06_073216_create_pinjaman_detail_table', 1),
(22, '2024_06_06_073250_create_buku_table', 1),
(23, '2024_09_10_054041_create_peminjaman_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul_buku` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `judul_buku`, `nama_lengkap`, `kelas`, `tanggal_peminjaman`, `created_at`, `updated_at`) VALUES
(5, 'CONTOH', 'CONTOH', '4 A', '2024-09-12', '2024-09-11 06:53:21', '2024-09-11 06:53:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Pak Husain', 'Guru', 'admin@sdn16ptk', NULL, '$2y$10$.tJIGK6dhUvErSWb6qCg/eU028FLjgGX9JT.mqq8vR7xMtCp5tjOC', 'Krww8Tv52EdfQ9oNlC6ru3nHVdeF4wvVICiQ0xBpo56Fjlk48V28WWO9EgLL', '2024-09-08 20:01:48', '2024-09-08 20:01:48'),
(2, 'Husna', 'Murid', 'husna@sdn16ptk', NULL, '$2y$10$.tJIGK6dhUvErSWb6qCg/eU028FLjgGX9JT.mqq8vR7xMtCp5tjOC', 'pZD8o5ADpEOVaNBDymZKnODs3QZNn95QJ4gWyn2ylHlTDvXqltC2DIRvWa60', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=170;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
