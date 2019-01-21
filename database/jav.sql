-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Jan 2019 pada 09.02
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jav`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agenda`
--

CREATE TABLE `agenda` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fk_desawisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `agenda`
--

INSERT INTO `agenda` (`id`, `tanggal`, `judul`, `keterangan`, `foto`, `fk_desawisata`) VALUES
(1, '2019-02-01', 'Upacara skaten', 'akan diadakn upacara sekaten yang jatuh pada taggal 1 Frebruari 2019', 'images.jpg', 1),
(2, '2019-01-31', 'Reog Ponorogo', 'Desa sambi akan merayakan ulang tahunnya. dan akan menampilkan Reog yang asli dari ponorogo Jawa timur', 'sejumlah-penari-menampilkan-kesenian-terkenal-reog-ponorogo1499925621.jpg', 2),
(3, '2019-01-18', 'Tari Lesung', 'akan diadakan tari lesung untuk memperingati hari panen di desa wisata tanjung', 'Bendrong_Lesung01.jpg', 3),
(4, '2019-02-03', 'Sepeda santai', 'Bersepeda santai di desa wisata tembi. dapatkan doorprice menarik 1 sepeda motor, 1kulkas, 1 tv  turut juga dihadiri oleh bupati bantul', 'wisata-sepeda-di-bali.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal` date NOT NULL,
  `foto` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fk_desawisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `konten`, `author`, `tanggal`, `foto`, `fk_desawisata`) VALUES
(1, 'Peresmian Desa Wisata Tembi', 'Desawisata Tembi Telah diresmikan Oleh Gubernur DIY', 'Bagus Pogar', '2019-01-17', 'logocoding.png', 1),
(2, 'Desa wisata sambi dikunjungi gub', 'desa wisata sambi dikunjungi gubernur diy. gubernur Diy  ingin  tahu proses jalannya desa wisata tersebut', '', '2019-01-17', 'Rambu_stop.jpg', 2),
(3, 'Peresmian Desa Wisata Tanjung', 'peresmian desawisata tanjung', 'Bagus Pogar', '2019-03-05', 'Rambu_stop1.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `desawisata`
--

CREATE TABLE `desawisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `_lat` double NOT NULL,
  `_long` double NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `desawisata`
--

INSERT INTO `desawisata` (`id`, `nama`, `alamat`, `deskripsi`, `_lat`, `_long`, `foto`) VALUES
(1, 'Desa wisata Tembi', 'Jalan Parangtritis km 8,5, Tembi, Timbulharjo, Sewon, Mriyan, Timbulharjo, Sewon, Bantul, Daerah Ist', 'Desa wisata ini sangat terkenal di yogyakarta menjadi salah satu destinasi para pengunjung', -7.84435, 110.34329, '1.jpg'),
(2, 'Desa wisata Sambi', 'Jl. Kaliurang KM. 19.2, Dusun Sambi, Desa Pakembinangun, Kec. Pakem, Purwodadi, Pakembinangun, Slema', 'Suasana khas pedesaan, pemandangannya bagus, banyak camping ground dan gazebo untuk pertemuan', -7.774297, 110.375128, 'dw_sambi_(1)_(Copy).jpg'),
(3, 'Desa Wisata Tanjung', ' Tanjung, Donoharjo, Ngaglik, Ponason, Donoharjo, Kec. Sleman, Kabupaten Sleman, Daerah Istimewa Yog', 'Desa wisata dengan wahana membajak sawah & melakukan aktivitas pedesaan.', -7.84435, 110.34329, 'download_(3).jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nourut` varchar(100) NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `fk_desawisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `galeri`
--

INSERT INTO `galeri` (`id`, `judul`, `foto`, `nourut`, `ukuran`, `fk_desawisata`) VALUES
(1, 'Pengunjung belajar batik di desa tembi', 'desa-wisata-tembi_20180919_125221.jpg', '1', '2', 1),
(2, 'Ritual yang diadakan sesepuh desa sambi', '105435_labuhanmerapi1.jpg', '2', '2', 2),
(3, 'Wisata memandangi persawahan', 'download_(1).jpg', '3', '3', 3),
(4, 'Pengunjung belajar bercocok tanam ', 'tanjung.jpg', '4', '4', 3),
(5, 'Sepeda santai', 'wisata_sepeda_onthel_di_pedesaan_borobudur.jpg', '5', '4', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kamar`
--

CREATE TABLE `kamar` (
  `id` int(11) NOT NULL,
  `no` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `fk_penginapan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kamar`
--

INSERT INTO `kamar` (`id`, `no`, `kategori`, `foto`, `fasilitas`, `status`, `fk_penginapan`) VALUES
(1, '1', '1', 'logoaldansorry2.png', '1', '1', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fk_desawisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `keterangan`, `foto`, `fk_desawisata`) VALUES
(1, 'Wisata Alam', '', 'air-terjun-sri-gethuk.jpg', 1),
(2, 'Petualangan', '', 'IMG-20120322-WA0001-732946.jpg', 2),
(3, 'Edukasi', '', 'download_(2).jpg', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `nama` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `editedby` varchar(32) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id`, `nama`, `datecreated`, `createdby`, `editedby`) VALUES
(1, 'Super Admin', '2019-01-14 08:55:41', NULL, NULL),
(2, 'Admin', '2019-01-14 08:55:49', NULL, NULL),
(3, 'Operator', '2019-01-14 08:55:58', NULL, NULL),
(4, 'Admin Desawisata', '2019-01-14 09:11:01', NULL, NULL),
(5, 'Operator Kamar', '2019-01-14 09:13:17', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `penginapan`
--

CREATE TABLE `penginapan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fk_desawisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penginapan`
--

INSERT INTO `penginapan` (`id`, `nama`, `keterangan`, `alamat`, `foto`, `fk_desawisata`) VALUES
(1, 'D omah ', 'home stay yang terletak di desa wisata tembi', 'desa Tembi, Sewon, Bantul, Yogyakarta,', '5587566764f8029e976fa07463837d0e.jpg', 1),
(2, 'Rumah Joglo', 'Rumah Joglo terletak di desa sambi , merupakan salah satu penginapan resort dan spa. bagi para pengunjung yang ingin menginap di sini merupakan salah satu destinasi yang wajib di kunjungi. karena pemandangan khas pedesaan melekat di desa ini', 'Jl. Kaliurang Km. 19.2, Desa Wisata Sambi | Pakembinangun, Pakem, 55582, Indonesia', 'filename-img-2178-jpg.jpg', 2),
(3, 'D homestay', 'Homestay ini terdapat di Desa Wisata Tanjung', 'Desa wisata Tanjung yogyakarta', '132265845.jpg', 3),
(4, ' Sakinah homestay', 'Home stay yang ada di daerah desawisata Tanjung', 'Desa wisata tanjung', '132265821.jpg', 3),
(5, 'Tembi Village Home stay', 'fasilitas tidak perlu diragukan lagi', 'Desa wisata Tembi', '2c7d05d85a44be4ab3c810969431f278.jpg', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telp` int(14) NOT NULL,
  `rating` int(5) NOT NULL,
  `keterangan` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fk_desawisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `review`
--

INSERT INTO `review` (`id`, `nama`, `email`, `telp`, `rating`, `keterangan`, `foto`, `fk_desawisata`) VALUES
(1, 'Bagus Pogar', 'baguspogar@gmail.com', 2147483647, 1, 'desanya sangat bagus', '1.jpg', 1),
(2, 'Budi hariyanto', 'budihariyanto@gmail.', 2147483647, 4, 'Pemandangannya susasana desanya sangat indah wajib untuk di kunjungi', 'dw_sambi_(1)_(Copy).jpg', 2),
(3, 'Yahya Hartanto', 'yahya89720837', 2147483647, 5, 'Desawisata Tanjung cocok untuk beredukasi bagi keluarga , bagaimana caranya bercocok tanam', '86d27-desa-tanjung.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `toko`
--

CREATE TABLE `toko` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fk_desawisata` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `toko`
--

INSERT INTO `toko` (`id`, `nama`, `alamat`, `keterangan`, `jenis`, `foto`, `fk_desawisata`) VALUES
(1, 'Jendela Jogja', 'Jalan Gedong Kuning A No.161, Banguntapan, Bantul, Daerah Istimewa Yogyakarta 55198', 'Toko Oleh oleh khas jogja', 'Oleh oleh', '1145527JENDELA-JOGJA-5780x390.jpg', 1),
(2, 'Wong batik', 'Jl. HOS Cokroaminoto No.149, Tegalrejo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55244', 'Pusat oleh oleh jogja dan merchandise khas jogja', 'Sovenir', 'download.jpg', 2),
(3, 'Jogja Souvenir', 'Suryatmajan, Danurejan, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55213', 'Toko Souvenir Terlengkap di Yogyakarta', 'Sovenir', 'souvenir.jpg', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telp` varchar(16) NOT NULL,
  `email` varchar(20) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `status` int(11) NOT NULL,
  `ket_status` varchar(64) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fk_level` int(11) NOT NULL,
  `fk_desawisata` int(11) DEFAULT NULL,
  `fk_penginapan` int(11) DEFAULT NULL,
  `datecreated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `createdby` varchar(32) DEFAULT NULL,
  `editedby` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `alamat`, `telp`, `email`, `username`, `password`, `status`, `ket_status`, `foto`, `fk_level`, `fk_desawisata`, `fk_penginapan`, `datecreated`, `createdby`, `editedby`) VALUES
(1, 'superadmin', 'superadmin', 'superadmin', 'superadmin', '1', 'c4ca4238a0b923820dcc509a6f75849b', 1, 'superadmin', 'superadmin.png', 1, 1, NULL, '2019-01-14 09:16:22', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `harga` int(20) NOT NULL,
  `jamkunjung` varchar(32) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fk_desawisata` int(11) NOT NULL,
  `fk_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id`, `nama`, `keterangan`, `harga`, `jamkunjung`, `foto`, `fk_desawisata`, `fk_kategori`) VALUES
(1, 'Wisata alam Arum jeram', 'Arum jeram', 10000000, '10:00 - 20:00', '0800031karo-rafting780x390.JPG', 1, 1),
(2, 'Outboound', 'outbound', 10000000, '08.00', 'DSC001902.jpg', 2, 2),
(3, 'Bercocok Tananm', 'Wisata Persawahan untuk bercocok tanam. merupkana salah satu wisata edukasi di desa wisata tanjung', 20000, '08.00', '574388_620.jpg', 3, 3),
(4, 'Air tejun', 'Air tejun', 300000, '08.00-17.00', 'Wisata_Air_Terjun_di_Jogja.jpg', 3, 1),
(5, 'Kolam renang Desa Tembi', 'Salah satu wisata di Desa wisata tembi, yaitu  kolam renang desa tembi', 10000, '09.00-19.00', 'Kolam-Renang-Tembi-Jogja.jpg', 1, 1),
(6, 'Rumah Budaya Desa Wisata tembi', 'Salah satu wisata di desa tembi', 15000, '09.00-19.00', 'images_(1).jpg', 1, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisata` (`fk_desawisata`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisatas` (`fk_desawisata`);

--
-- Indexes for table `desawisata`
--
ALTER TABLE `desawisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisata` (`fk_desawisata`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_penginapan` (`fk_penginapan`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisata` (`fk_desawisata`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penginapan`
--
ALTER TABLE `penginapan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisata` (`fk_desawisata`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisata` (`fk_desawisata`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisata` (`fk_desawisata`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_levle` (`fk_level`),
  ADD KEY `fk_desa_wisata` (`fk_desawisata`),
  ADD KEY `fk_penginapan` (`fk_penginapan`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_desawisata` (`fk_desawisata`),
  ADD KEY `fk_kategori` (`fk_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `desawisata`
--
ALTER TABLE `desawisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `penginapan`
--
ALTER TABLE `penginapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`);

--
-- Ketidakleluasaan untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`);

--
-- Ketidakleluasaan untuk tabel `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`);

--
-- Ketidakleluasaan untuk tabel `kamar`
--
ALTER TABLE `kamar`
  ADD CONSTRAINT `kamar_ibfk_1` FOREIGN KEY (`fk_penginapan`) REFERENCES `penginapan` (`id`);

--
-- Ketidakleluasaan untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`);

--
-- Ketidakleluasaan untuk tabel `penginapan`
--
ALTER TABLE `penginapan`
  ADD CONSTRAINT `penginapan_ibfk_2` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`);

--
-- Ketidakleluasaan untuk tabel `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`);

--
-- Ketidakleluasaan untuk tabel `toko`
--
ALTER TABLE `toko`
  ADD CONSTRAINT `toko_ibfk_1` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`);

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`fk_level`) REFERENCES `level` (`id`),
  ADD CONSTRAINT `users_ibfk_2` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`),
  ADD CONSTRAINT `users_ibfk_3` FOREIGN KEY (`fk_penginapan`) REFERENCES `penginapan` (`id`);

--
-- Ketidakleluasaan untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD CONSTRAINT `wisata_ibfk_1` FOREIGN KEY (`fk_desawisata`) REFERENCES `desawisata` (`id`),
  ADD CONSTRAINT `wisata_ibfk_2` FOREIGN KEY (`fk_kategori`) REFERENCES `kategori` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
