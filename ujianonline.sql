-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2025 at 02:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+07:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujianonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` int(11) NOT NULL,
  `nama_user` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama_user`, `username`, `password`) VALUES
(1, 'Administrator Sistem', 'admin', 'admin123'),
(2, 'Kepala Sekolah', 'kepsek', 'kepsek123'),
(3, 'Staff Akademik', 'akademik', 'akademik123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id_guru`, `nama_guru`, `username`, `password`) VALUES
(1001, 'Dr. Ahmad Fauzi, M.Pd.', 'ahmad.fauzi', 'guru1234'),
(1002, 'Dra. Siti Rahayu, M.Si.', 'siti.rahayu', 'guru1234'),
(1003, 'Budi Santoso, S.Pd., M.Pd.', 'budi.santoso', 'guru1234'),
(1004, 'Dewi Lestari, S.Kom., M.Cs.', 'dewi.lestari', 'guru1234'),
(1005, 'Dr. Eko Prasetyo, M.T.', 'eko.prasetyo', 'guru1234'),
(1006, 'Rini Wulandari, S.Mat., M.Si.', 'rini.wulandari', 'guru1234');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `id_jawaban` int(5) NOT NULL,
  `id_peserta` int(5) NOT NULL,
  `id_soal_ujian` int(5) NOT NULL,
  `jawaban` varchar(15) NOT NULL,
  `skor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`id_jawaban`, `id_peserta`, `id_soal_ujian`, `jawaban`, `skor`) VALUES
(1, 1, 1, 'C', '1'),
(2, 1, 2, 'B', '1'),
(3, 1, 3, 'A', '1'),
(4, 1, 4, 'C', '1'),
(5, 1, 5, 'D', '0'),
(6, 2, 1, 'C', '1'),
(7, 2, 2, 'B', '1'),
(8, 2, 3, 'A', '1'),
(9, 2, 4, 'C', '1'),
(10, 2, 5, 'C', '1'),
(11, 6, 6, 'A', '1'),
(12, 6, 7, 'C', '1'),
(13, 6, 8, 'E', '1'),
(14, 6, 9, 'C', '1'),
(15, 6, 10, 'A', '0');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_ujian`
--

CREATE TABLE `tb_jenis_ujian` (
  `id_jenis_ujian` int(11) NOT NULL,
  `jenis_ujian` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_jenis_ujian`
--

INSERT INTO `tb_jenis_ujian` (`id_jenis_ujian`, `jenis_ujian`) VALUES
(1, 'Ulangan Harian'),
(2, 'UTS Semester Ganjil'),
(3, 'UAS Semester Ganjil'),
(4, 'UTS Semester Genap'),
(5, 'UAS Semester Genap'),
(6, 'Ujian Praktek');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kelas`
--

CREATE TABLE `tb_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_kelas`
--

INSERT INTO `tb_kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, '10 IPA 1'),
(2, '10 IPA 2'),
(3, '10 IPS 1'),
(4, '10 IPS 2'),
(5, '11 IPA 1'),
(6, '11 IPA 2'),
(7, '11 IPS 1'),
(8, '11 IPS 2'),
(9, '12 IPA 1'),
(10, '12 IPA 2'),
(11, '12 IPS 1'),
(12, '12 IPS 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_matapelajaran`
--

CREATE TABLE `tb_matapelajaran` (
  `id_matapelajaran` int(11) NOT NULL,
  `kode_matapelajaran` varchar(10) NOT NULL,
  `nama_matapelajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_matapelajaran`
--

INSERT INTO `tb_matapelajaran` (`id_matapelajaran`, `kode_matapelajaran`, `nama_matapelajaran`) VALUES
(1, 'MAT001', 'Matematika Wajib'),
(2, 'MAT002', 'Matematika Peminatan'),
(3, 'FIS001', 'Fisika'),
(4, 'KIM001', 'Kimia'),
(5, 'BIO001', 'Biologi'),
(6, 'EKO001', 'Ekonomi'),
(7, 'SEJ001', 'Sejarah'),
(8, 'GEO001', 'Geografi'),
(9, 'SOS001', 'Sosiologi'),
(10, 'BIN001', 'Bahasa Indonesia'),
(11, 'ENG001', 'Bahasa Inggris'),
(12, 'KOM001', 'Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_peserta`
--

CREATE TABLE `tb_peserta` (
  `id_peserta` int(11) NOT NULL,
  `id_matapelajaran` int(11) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_jenis_ujian` int(11) NOT NULL,
  `tanggal_ujian` date NOT NULL,
  `jam_ujian` time NOT NULL,
  `durasi_ujian` int(11) NOT NULL,
  `timer_ujian` int(11) NOT NULL,
  `status_ujian` tinyint(1) NOT NULL,
  `status_ujian_ujian` int(11) NOT NULL,
  `benar` varchar(20) NOT NULL,
  `salah` varchar(20) NOT NULL,
  `nilai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_peserta`
--

INSERT INTO `tb_peserta` (`id_peserta`, `id_matapelajaran`, `id_siswa`, `id_jenis_ujian`, `tanggal_ujian`, `jam_ujian`, `durasi_ujian`, `timer_ujian`, `status_ujian`, `status_ujian_ujian`, `benar`, `salah`, `nilai`) VALUES
(1, 1, 1, 2, '2024-09-15', '08:00:00', 60, 3600, 2, 2, '4', '1', '80'),
(2, 1, 2, 2, '2024-09-15', '08:00:00', 60, 3600, 2, 2, '5', '0', '100'),
(3, 1, 3, 2, '2024-09-15', '08:00:00', 60, 3600, 2, 2, '3', '2', '60'),
(4, 1, 4, 2, '2024-09-15', '08:00:00', 60, 3600, 2, 2, '4', '1', '80'),
(5, 1, 5, 2, '2024-09-15', '08:00:00', 60, 3600, 2, 2, '3', '2', '60'),
(6, 3, 11, 2, '2024-09-16', '10:00:00', 60, 3600, 2, 2, '4', '1', '80'),
(7, 3, 12, 2, '2024-09-16', '10:00:00', 60, 3600, 2, 2, '5', '0', '100'),
(8, 3, 13, 2, '2024-09-16', '10:00:00', 60, 3600, 2, 2, '3', '2', '60'),
(9, 3, 14, 2, '2024-09-16', '10:00:00', 60, 3600, 2, 2, '4', '1', '80'),
(10, 3, 15, 2, '2024-09-16', '10:00:00', 60, 3600, 2, 2, '2', '3', '40'),
(11, 10, 16, 4, '2024-10-10', '09:00:00', 60, 3600, 1, 0, '', '', ''),
(12, 10, 17, 4, '2024-10-10', '09:00:00', 60, 3600, 1, 0, '', '', ''),
(13, 10, 18, 4, '2024-10-10', '09:00:00', 60, 3600, 1, 0, '', '', ''),
(14, 10, 19, 4, '2024-10-10', '09:00:00', 60, 3600, 1, 0, '', '', ''),
(15, 10, 20, 4, '2024-10-10', '09:00:00', 60, 3600, 1, 0, '', '', ''),
-- Data peserta ujian untuk waktu 13 Maret 2025
(16, 3, 1, 2, '2025-03-13', '13:00:00', 60, 3600, 1, 0, '', '', ''),
(17, 3, 2, 2, '2025-03-13', '13:00:00', 60, 3600, 1, 0, '', '', ''),
(18, 3, 3, 2, '2025-03-13', '13:00:00', 60, 3600, 1, 0, '', '', ''),
(19, 3, 4, 2, '2025-03-13', '13:00:00', 60, 3600, 1, 0, '', '', ''),
(20, 3, 5, 2, '2025-03-13', '13:00:00', 60, 3600, 1, 0, '', '', ''),
(21, 1, 11, 2, '2025-03-13', '13:00:00', 60, 3600, 1, 0, '', '', ''),
(22, 1, 12, 2, '2025-03-13', '13:00:00', 60, 3600, 1, 0, '', '', ''),
(23, 1, 13, 2, '2025-03-13', '13:00:00', 60, 3600, 1, 0, '', '', ''),
(24, 1, 14, 2, '2025-03-13', '13:00:00', 60, 3600, 1, 0, '', '', ''),
(25, 1, 15, 2, '2025-03-13', '13:00:00', 60, 3600, 1, 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id_siswa` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nis` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id_siswa`, `id_kelas`, `nama_siswa`, `nis`, `username`, `password`) VALUES
(1, 1, 'Aditya Pratama', 10001, 'aditya.10001', 'siswa123'),
(2, 1, 'Dewi Anggraini', 10002, 'dewi.10002', 'siswa123'),
(3, 1, 'Farhan Rizky', 10003, 'farhan.10003', 'siswa123'),
(4, 1, 'Putri Ramadhani', 10004, 'putri.10004', 'siswa123'),
(5, 1, 'Muhammad Rizki', 10005, 'rizki.10005', 'siswa123'),
(6, 2, 'Andi Wijaya', 10006, 'andi.10006', 'siswa123'),
(7, 2, 'Nina Safitri', 10007, 'nina.10007', 'siswa123'),
(8, 2, 'Dimas Prayoga', 10008, 'dimas.10008', 'siswa123'),
(9, 2, 'Sinta Dewi', 10009, 'sinta.10009', 'siswa123'),
(10, 2, 'Bayu Kurniawan', 10010, 'bayu.10010', 'siswa123'),
(11, 5, 'Rendi Setiawan', 11001, 'rendi.11001', 'siswa123'),
(12, 5, 'Anisa Rahma', 11002, 'anisa.11002', 'siswa123'),
(13, 5, 'Deni Cahyono', 11003, 'deni.11003', 'siswa123'),
(14, 5, 'Lina Marlina', 11004, 'lina.11004', 'siswa123'),
(15, 5, 'Eko Saputra', 11005, 'eko.11005', 'siswa123'),
(16, 9, 'Galih Pratama', 12001, 'galih.12001', 'siswa123'),
(17, 9, 'Dina Fitriani', 12002, 'dina.12002', 'siswa123'),
(18, 9, 'Fajar Ramadhan', 12003, 'fajar.12003', 'siswa123'),
(19, 9, 'Ratna Sari', 12004, 'ratna.12004', 'siswa123'),
(20, 9, 'Irfan Hakim', 12005, 'irfan.12005', 'siswa123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_soal_ujian`
--

CREATE TABLE `tb_soal_ujian` (
  `id_soal_ujian` int(11) NOT NULL,
  `id_matapelajaran` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `a` text NOT NULL,
  `b` text NOT NULL,
  `c` text NOT NULL,
  `d` text NOT NULL,
  `e` text NOT NULL,
  `kunci_jawaban` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_soal_ujian`
--

INSERT INTO `tb_soal_ujian` (`id_soal_ujian`, `id_matapelajaran`, `pertanyaan`, `a`, `b`, `c`, `d`, `e`, `kunci_jawaban`) VALUES
(1, 1, 'Jika diketahui f(x) = 2x + 3 dan g(x) = x² - 1, maka f(g(2)) = ...', '11', '13', '15', '17', '19', 'C'),
(2, 1, 'Bentuk sederhana dari (2x³y²)² : (4x⁵y) adalah ...', '3xy³', 'xy³', 'x⁵y³', 'xy⁴', 'xy', 'B'),
(3, 1, 'Diketahui segitiga ABC dengan koordinat A(0,0), B(4,0), dan C(0,3). Luas segitiga ABC adalah ...', '6 satuan luas', '8 satuan luas', '10 satuan luas', '12 satuan luas', '14 satuan luas', 'A'),
(4, 1, 'Sebuah toko memberikan diskon 20% untuk semua barang. Seorang pembeli membeli barang seharga Rp 800.000,00. Berapa jumlah yang harus dibayar pembeli tersebut?', 'Rp 600.000,00', 'Rp 620.000,00', 'Rp 640.000,00', 'Rp 660.000,00', 'Rp 680.000,00', 'C'),
(5, 1, 'Persamaan garis yang melalui titik (2, 3) dan tegak lurus dengan garis 2x + y - 4 = 0 adalah ...', 'y = 2x + 7', 'y = 2x - 1', 'y = -2x + 7', 'y = -2x + 1', 'y = -1/2x + 4', 'C'),
(6, 3, 'Sebuah benda bermassa 2 kg bergerak dengan kecepatan 5 m/s. Energi kinetik benda tersebut adalah ...', '25 joule', '50 joule', '75 joule', '100 joule', '125 joule', 'A'),
(7, 3, 'Jika sebuah mobil bergerak dengan kecepatan 72 km/jam, maka kecepatannya dalam m/s adalah ...', '10 m/s', '15 m/s', '20 m/s', '25 m/s', '30 m/s', 'C'),
(8, 3, 'Sebuah benda didorong dengan gaya 10 N sehingga berpindah sejauh 5 meter. Usaha yang dilakukan adalah ...', '10 joule', '20 joule', '30 joule', '40 joule', '50 joule', 'E'),
(9, 3, 'Dua buah muatan listrik masing-masing 3 μC dan 4 μC terpisah pada jarak 2 meter. Besar gaya coulomb yang terjadi adalah ... (k = 9 × 10⁹ Nm²/C²)', '2,7 × 10⁻²³ N', '2,7 × 10⁻³ N', '2,7 × 10⁻² N', '2,7 × 10⁻¹ N', '2,7 N', 'C'),
(10, 3, 'Hukum kekekalan energi mekanik berlaku pada benda yang bergerak dalam medan gaya konservatif. Manakah dari gaya berikut yang bukan merupakan gaya konservatif?', 'Gaya gravitasi', 'Gaya pegas', 'Gaya listrik', 'Gaya gesek', 'Gaya magnet', 'D'),
(11, 10, 'Kata yang memiliki imbuhan me-kan dan ber-an secara tepat adalah ...', 'membicarakan - berdatangan', 'mendengarkan - berserakan', 'menyampaikan - bergotongroyong', 'menidurkan - berhadapan', 'mengerjakan - berpakaian', 'B'),
(12, 10, 'Di bawah ini yang bukan merupakan karakteristik teks eksposisi adalah ...', 'Berisi fakta', 'Bersifat informatif', 'Berisi pendapat penulis', 'Bersifat objektif', 'Berisi alur cerita', 'E'),
(13, 10, 'Paragraf yang gagasan utamanya terletak di awal paragraf disebut paragraf ...', 'induktif', 'deduktif', 'campuran', 'narasi', 'deskripsi', 'B'),
(14, 10, 'Contoh kalimat efektif adalah ...', 'Para hadirin dipersilakan duduk', 'Saya telah menghadiri dari acara tersebut', 'Dia pergi ke Jakarta bersama dengan temannya', 'Buku itu adalah milik kepunyaan saya', 'Kami semua sangat senang sekali', 'A'),
(15, 10, 'Makna kata "berlarut-larut" dalam kalimat "Permasalahan itu tidak berlarut-larut" adalah ...', 'berkepanjangan', 'berulang-ulang', 'sebentar-sebentar', 'berangsur-angsur', 'berganti-ganti', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_ujian`
--

CREATE TABLE `tb_jadwal_ujian` (
  `id_jadwal` int(11) NOT NULL,
  `id_matapelajaran` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_jenis_ujian` int(11) NOT NULL,
  `tanggal_ujian` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `durasi` int(11) NOT NULL,
  `status` enum('belum','berlangsung','selesai') NOT NULL DEFAULT 'belum',
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tb_jadwal_ujian`
--

INSERT INTO `tb_jadwal_ujian` (`id_jadwal`, `id_matapelajaran`, `id_kelas`, `id_jenis_ujian`, `tanggal_ujian`, `jam_mulai`, `jam_selesai`, `durasi`, `status`, `keterangan`) VALUES
-- UTS Semester Ganjil - Matematika
(1, 1, 1, 2, '2024-09-15', '08:00:00', '09:00:00', 60, 'selesai', 'UTS Matematika Wajib Kelas 10 IPA 1'),
(2, 1, 2, 2, '2024-09-15', '10:00:00', '11:00:00', 60, 'selesai', 'UTS Matematika Wajib Kelas 10 IPA 2'),
(3, 1, 5, 2, '2024-09-15', '13:00:00', '14:00:00', 60, 'selesai', 'UTS Matematika Wajib Kelas 11 IPA 1'),
(4, 1, 9, 2, '2024-09-16', '08:00:00', '09:00:00', 60, 'selesai', 'UTS Matematika Wajib Kelas 12 IPA 1'),

-- UTS Semester Ganjil - Fisika
(5, 3, 1, 2, '2024-09-16', '10:00:00', '11:00:00', 60, 'selesai', 'UTS Fisika Kelas 10 IPA 1'),
(6, 3, 2, 2, '2024-09-16', '13:00:00', '14:00:00', 60, 'selesai', 'UTS Fisika Kelas 10 IPA 2'),
(7, 3, 5, 2, '2024-09-17', '08:00:00', '09:00:00', 60, 'selesai', 'UTS Fisika Kelas 11 IPA 1'),
(8, 3, 9, 2, '2024-09-17', '10:00:00', '11:00:00', 60, 'selesai', 'UTS Fisika Kelas 12 IPA 1'),

-- UTS Semester Ganjil - Kimia
(9, 4, 1, 2, '2024-09-17', '13:00:00', '14:00:00', 60, 'selesai', 'UTS Kimia Kelas 10 IPA 1'),
(10, 4, 5, 2, '2024-09-18', '08:00:00', '09:00:00', 60, 'selesai', 'UTS Kimia Kelas 11 IPA 1'),

-- UTS Semester Ganjil - Biologi
(11, 5, 1, 2, '2024-09-18', '10:00:00', '11:00:00', 60, 'selesai', 'UTS Biologi Kelas 10 IPA 1'),
(12, 5, 5, 2, '2024-09-18', '13:00:00', '14:00:00', 60, 'selesai', 'UTS Biologi Kelas 11 IPA 1'),

-- UTS Semester Ganjil - Bahasa Indonesia
(13, 10, 1, 2, '2024-09-19', '08:00:00', '09:00:00', 60, 'selesai', 'UTS Bahasa Indonesia Kelas 10 IPA 1'),
(14, 10, 3, 2, '2024-09-19', '10:00:00', '11:00:00', 60, 'selesai', 'UTS Bahasa Indonesia Kelas 10 IPS 1'),

-- UTS Semester Ganjil - Bahasa Inggris
(15, 11, 1, 2, '2024-09-19', '13:00:00', '14:00:00', 60, 'selesai', 'UTS Bahasa Inggris Kelas 10 IPA 1'),
(16, 11, 3, 2, '2024-09-20', '08:00:00', '09:00:00', 60, 'selesai', 'UTS Bahasa Inggris Kelas 10 IPS 1'),

-- UTS Semester Genap - Matematika (yang akan datang)
(17, 1, 1, 4, '2024-10-10', '08:00:00', '09:00:00', 60, 'belum', 'UTS Matematika Wajib Kelas 10 IPA 1'),
(18, 1, 2, 4, '2024-10-10', '10:00:00', '11:00:00', 60, 'belum', 'UTS Matematika Wajib Kelas 10 IPA 2'),
(19, 1, 5, 4, '2024-10-10', '13:00:00', '14:00:00', 60, 'belum', 'UTS Matematika Wajib Kelas 11 IPA 1'),

-- UTS Semester Genap - Fisika (yang akan datang)
(20, 3, 1, 4, '2024-10-11', '08:00:00', '09:00:00', 60, 'belum', 'UTS Fisika Kelas 10 IPA 1'),
(21, 3, 5, 4, '2024-10-11', '10:00:00', '11:00:00', 60, 'belum', 'UTS Fisika Kelas 11 IPA 1'),

-- UTS Semester Genap - Bahasa Indonesia (yang akan datang)
(22, 10, 9, 4, '2024-10-12', '08:00:00', '09:00:00', 60, 'belum', 'UTS Bahasa Indonesia Kelas 12 IPA 1'),
(23, 10, 11, 4, '2024-10-12', '10:00:00', '11:00:00', 60, 'belum', 'UTS Bahasa Indonesia Kelas 12 IPS 1'),

-- Ujian Praktikum Informatika
(24, 12, 1, 6, '2024-10-15', '08:00:00', '10:00:00', 120, 'belum', 'Praktikum Informatika Kelas 10 IPA 1'),
(25, 12, 5, 6, '2024-10-15', '13:00:00', '15:00:00', 120, 'belum', 'Praktikum Informatika Kelas 11 IPA 1'),

-- Jadwal Ujian yang sedang berlangsung saat ini (13/03/2025, 13:30)
(26, 3, 1, 2, '2025-03-13', '13:00:00', '14:00:00', 60, 'berlangsung', 'UTS Fisika Kelas 10 IPA 1 - Sesi Khusus'),
(27, 1, 5, 2, '2025-03-13', '13:00:00', '14:00:00', 60, 'berlangsung', 'UTS Matematika Kelas 11 IPA 1 - Sesi Khusus');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `id_soal_ujian` (`id_soal_ujian`),
  ADD KEY `id_peserta` (`id_peserta`);

--
-- Indexes for table `tb_jenis_ujian`
--
ALTER TABLE `tb_jenis_ujian`
  ADD PRIMARY KEY (`id_jenis_ujian`);

--
-- Indexes for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `tb_matapelajaran`
--
ALTER TABLE `tb_matapelajaran`
  ADD PRIMARY KEY (`id_matapelajaran`);

--
-- Indexes for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  ADD PRIMARY KEY (`id_peserta`),
  ADD KEY `id_matakuliah` (`id_matapelajaran`),
  ADD KEY `id_mahasiswa` (`id_siswa`),
  ADD KEY `id_jenis_ujian` (`id_jenis_ujian`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD UNIQUE KEY `nim` (`nis`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `tb_soal_ujian`
--
ALTER TABLE `tb_soal_ujian`
  ADD PRIMARY KEY (`id_soal_ujian`),
  ADD KEY `id_matakuliah` (`id_matapelajaran`);

--
-- Indexes for table `tb_jadwal_ujian`
--
ALTER TABLE `tb_jadwal_ujian`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_matapelajaran` (`id_matapelajaran`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_jenis_ujian` (`id_jenis_ujian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  MODIFY `id_jawaban` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_jenis_ujian`
--
ALTER TABLE `tb_jenis_ujian`
  MODIFY `id_jenis_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kelas`
--
ALTER TABLE `tb_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_matapelajaran`
--
ALTER TABLE `tb_matapelajaran`
  MODIFY `id_matapelajaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_peserta`
--
ALTER TABLE `tb_peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tb_soal_ujian`
--
ALTER TABLE `tb_soal_ujian`
  MODIFY `id_soal_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `tb_jadwal_ujian`
--
ALTER TABLE `tb_jadwal_ujian`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;