-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2023 pada 12.11
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bukudigital`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(6) NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `nama_lengkap` varchar(20) DEFAULT NULL,
  `jenis_kelamin` varchar(14) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `level` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `foto`, `level`) VALUES
(1, 'ujicoba1', 'root', 'suharto', 'Laki - Laki', 'Lorem ipsum dolor sit amet', 'c65d9283fb86ed6fce2a4c5f9118f5ac.jpg', 'admin'),
(9, 'Man34', 'root', 'yokohama', 'Perempuan', 'jalan barbasari', 'e8af4eb5603842f58470d53b5109aaed.jpg', 'user'),
(10, 'Man30', 'root', 'yokohama', 'Laki - Laki', 'jalan kaliurang', 'de669ca67d0c4f2486e240be3a009244.jpg', 'admin'),
(11, 'pascal', 'rot', 'paskalis', 'Laki - Laki', 'jogja', 'drake-approves--disapproves.png', 'user'),
(13, 'koko', 'massa', 'yokohama', 'Laki - Laki', 'jalan barbasari', 'a5b162ad6d4ac8766ba32cc7066371a8.jpg', 'user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(6) NOT NULL,
  `judul_buku` varchar(20) DEFAULT NULL,
  `nama_pengarang` varchar(20) DEFAULT NULL,
  `ketagori_buku` varchar(10) DEFAULT NULL,
  `ketebalan_buku` int(10) DEFAULT NULL,
  `sinopsis` varchar(1000) DEFAULT NULL,
  `ranting` float DEFAULT NULL,
  `foto_sampul` varchar(20) DEFAULT NULL,
  `foto_1` varchar(20) DEFAULT NULL,
  `foto_2` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `nama_pengarang`, `ketagori_buku`, `ketebalan_buku`, `sinopsis`, `ranting`, `foto_sampul`, `foto_1`, `foto_2`) VALUES
(1, 'Castle in the sky', 'Dyna waves', 'Fantasy', 234, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n      tempor incididunt ut', 7.8, 'ga.jpg', 'ga3.jpg', 'ga2.jpg'),
(16, 'Berlari dimalam hari', 'yaumil hexa', 'Fantasy', 300, 'Berkisahkan seorang pasangan yang depresi yang ingin bunuh diri', 0, 'Screenshot (115).png', 'Screenshot (20).png', 'Screenshot (12).png'),
(17, 'Keinginan', 'Dyna Tuji', 'Fantasy', 120, 'Berkisahkan tentang sesorang yang ingin mendapatkan buku ajaib di alam gaib', 0, 'Screenshot (93).png', 'Screenshot (38).png', 'Screenshot (43).png'),
(18, 'Pencapaian Disaat it', 'Yaumil Aksah', 'Fantasy', 450, 'Sesorang mahasiswa semester 7 yang akan menjadi astronot pertama di negaranya sendiri', 9.1, 'Screenshot (45).png', 'Screenshot (37).png', 'Screenshot (144).png'),
(19, 'Menua diatas langit', 'Dyna Wwaves', 'Fantasy', 231, 'Seseorang paruh baya yang sedang menunggu kematianya di peperangan', 6.9, 'Screenshot (155).png', 'Screenshot (144).png', 'Screenshot (165).png'),
(20, 'dsadadnkn', 'nams', 'Fantasy', 120, 'sdadsadjjabfaj', 8.8, 'Screenshot (8).png', 'Screenshot (3).png', 'Screenshot (6).png'),
(21, 'Malam itu', 'Pascal', 'Horor', 120, 'Berkisahkan seorang mahasiswa yang kembali kemasa 10tahun lalu', 7.9, 'Screenshot (165).png', 'Screenshot (20).png', 'Screenshot (39).png'),
(23, 're', 'dyna waves', 'Sejarah', 210, 'SGrzsgzrgrzgrdgdrgrgdrg', 7.8, 'Screenshot (9).png', 'Screenshot (11).png', 'Screenshot (18).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `foto_user` varchar(30) DEFAULT NULL,
  `langganan` date DEFAULT NULL,
  `status_langganan` varchar(8) DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`, `nama_user`, `alamat`, `foto_user`, `langganan`, `status_langganan`, `jenis_kelamin`) VALUES
(1, 'voor12', 'root', 'jamas dibon', 'jalan sisamping pingir atas jalan', 'kerja.jpg', '2023-10-30', 'aktif', 'Laki - Laki'),
(2, 'yami', 'root', 'sukihiro yan', 'jalan barbasari no 30', ' ', '0000-00-00', 'tidak', 'Laki - Laki'),
(3, 'yaumil', 'root', 'yaumil aksah', 'jalan barbasari no 30', ' ', '0000-00-00', 'tidak', 'Laki - Laki'),
(4, 'pakal01', 'user', 'barbarasss', 'barbasari', ' ', '0000-00-00', 'tidak', 'Perempuan'),
(5, 'admin12', 'root', 'saya', 'ggadfgsfdggfd', ' ', '0000-00-00', 'tidak', 'Laki - Laki');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
