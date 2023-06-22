-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2023 pada 08.55
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
-- Database: `perpuskita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_buku`
--

CREATE TABLE `daftar_buku` (
  `id_buku` int(10) NOT NULL,
  `judul_buku` varchar(200) NOT NULL,
  `stok_buku` int(11) NOT NULL,
  `id_gambar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `daftar_buku`
--

INSERT INTO `daftar_buku` (`id_buku`, `judul_buku`, `stok_buku`, `id_gambar`) VALUES
(1, 'Under The Blood Red Maple', 5, 'bloodRed.jpg'),
(2, 'Dog Nutrition 101', 3, 'dogNutrition.jpg'),
(3, 'This Is Goin To Hurt', 7, 'goingToHurt.jpg'),
(4, 'Hologram', 2, 'hologram.jpg'),
(5, 'Kucinta', 10, 'horus01-medium.png'),
(6, 'Muscle Build', 8, 'muscleBuild.jpg'),
(7, 'Robert Pattinson Eternally Yours', 6, 'robertPationson.jpg'),
(8, 'Simulasi', 4, 'simulasi.jpg'),
(9, 'Skytube', 9, 'skytube.jpg'),
(10, 'Social Anxiety', 1, 'socialAnxiety.jpg'),
(11, 'Sonogram', 12, 'sonogram.jpg'),
(12, 'Talk To Anyone', 3, 'talkToAnyone.jpg'),
(13, 'True Crime Stories', 6, 'trueCrime.jpg'),
(14, 'When World Begin', 5, 'whenWorldBegin.jpg'),
(15, 'Almond', 10, 'Almond.jpg'),
(16, 'Four : A Divergent Colletion', 5, 'four.jpeg'),
(17, 'Divergent : Colector edition', 3, 'divergentColector.jpeg'),
(18, 'Four : The Son of Divergent 4', 8, 'fourTheSon.jpeg'),
(19, 'Divergent', 2, 'divergent.jpeg'),
(20, 'Harry Potter : and The Goblet oF Fire', 15, 'harryGoblet.jpg'),
(21, 'Harry Potter : and the Chamber of Secret', 7, 'harryChamber.jpg'),
(22, 'Harry Potter : and The Prisoner of Askaban', 12, 'harryPrison.jpg'),
(23, 'Harry Potter : the Sorcerers Stone', 9, 'harryStone.jpg'),
(24, 'Laut Bercerita', 6, 'lautBercerita.png'),
(25, 'Luka Cita', 4, 'lukaCita.jpg'),
(26, 'Surat Kematian', 11, 'suratKematian.jpg'),
(27, 'Rich Dad Poor Dad', 13, 'richDad.jpg'),
(28, 'You do You', 20, 'youDoYou.png'),
(29, 'Black Snowman dan Pembunuhan di Kota tak Bernama', 1, 'blackSnowman.jpg'),
(30, 'Home Sweet Loan', 18, 'homeSweetLoan.jpg'),
(31, 'One Piece 5', 14, 'OnePiece.jpg'),
(32, 'Demon Slayer : Mugen Train', 6, 'DemonSlayer.jpg'),
(33, 'Personal Branding Bisa Mengubah Takdir', 9, 'personalBranding.jpg'),
(34, 'Sebuah Seni Untuk Bersikap Bodo Amat', 3, 'bodoAmat.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hot`
--

CREATE TABLE `hot` (
  `id_hot` int(10) NOT NULL,
  `id_buku` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `hot`
--

INSERT INTO `hot` (`id_hot`, `id_buku`) VALUES
(1, 1),
(2, 4),
(3, 11),
(4, 15),
(5, 20),
(6, 21),
(7, 22),
(8, 23);

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `id_member` int(10) NOT NULL,
  `nama_member` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email_member` varchar(100) NOT NULL,
  `password_member` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `gender`, `email_member`, `password_member`) VALUES
(1, 'John Doe', 'Laki-laki', 'john.doe@example.com', 'john123'),
(2, 'Jane Smith', 'Perempuan', 'jane.smith@example.com', 'jane456'),
(3, 'Michael Johnson', 'Laki-laki', 'michael.johnson@example.com', 'michael789'),
(4, 'Emily Davis', 'Perempuan', 'emily.davis@example.com', 'emily012'),
(5, 'Robert Wilson', 'Laki-laki', 'robert.wilson@example.com', 'robert345'),
(6, 'Sarah Anderson', 'Perempuan', 'sarah.anderson@example.com', 'sarah678'),
(7, 'David Thompson', 'Laki-laki', 'david.thompson@example.com', 'david901'),
(8, 'Olivia Garcia', 'Perempuan', 'olivia.garcia@example.com', 'olivia234'),
(9, 'James Martinez', 'Laki-laki', 'james.martinez@example.com', 'james567'),
(10, 'Sophia Robinson', 'Perempuan', 'sophia.robinson@example.com', 'sophia890'),
(13, 'aziz', 'Pria', 'rizkyaziz214@gmail.com', '123'),
(14, 'bima', 'pria', 'bimacrot@example.com', '123'),
(15, 'bima', 'pria', 'bimacrot@example.com', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(10) NOT NULL,
  `id_buku` int(10) NOT NULL,
  `id_member` int(10) NOT NULL,
  `kondisi_buku` varchar(100) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `id_buku`, `id_member`, `kondisi_buku`, `tanggal_pinjam`, `tanggal_kembali`) VALUES
(1, 1, 1, 'baik', '0000-00-00', NULL),
(2, 4, 1, 'baik', '0000-00-00', NULL),
(3, 4, 1, 'baik', '2023-06-22', NULL),
(4, 16, 8, 'baik', '0000-00-00', NULL),
(5, 16, 8, 'baik', '0000-00-00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_buku`
--
ALTER TABLE `daftar_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `hot`
--
ALTER TABLE `hot`
  ADD PRIMARY KEY (`id_hot`),
  ADD KEY `fk_idBuku_hot` (`id_buku`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `fk_idBuku_pinjam` (`id_buku`),
  ADD KEY `fk_idMember_pinjam` (`id_member`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `hot`
--
ALTER TABLE `hot`
  MODIFY `id_hot` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `hot`
--
ALTER TABLE `hot`
  ADD CONSTRAINT `fk_idBuku_hot` FOREIGN KEY (`id_buku`) REFERENCES `daftar_buku` (`id_buku`);

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `fk_idBuku_pinjam` FOREIGN KEY (`id_buku`) REFERENCES `daftar_buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
