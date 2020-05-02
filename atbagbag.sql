-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Bulan Mei 2020 pada 11.48
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atbagbag`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayar`
--

CREATE TABLE `bayar` (
  `id_bayar` varchar(7) NOT NULL,
  `nama_pemilik` varchar(30) NOT NULL,
  `bank` varchar(45) DEFAULT NULL,
  `bukti_pembayaran` varchar(100) DEFAULT NULL,
  `kode_pesan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bayar`
--

INSERT INTO `bayar` (`id_bayar`, `nama_pemilik`, `bank`, `bukti_pembayaran`, `kode_pesan`) VALUES
('BR0001', 'farid', 'bri', 'assets/images/squishy.jpg', 'ps0034');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(20) NOT NULL,
  `nama_kategori` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('KG0002', 'Tas'),
('KG0003', 'Pernak Pernik'),
('KG0004', 'Playmat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `jumlah` varchar(45) DEFAULT NULL,
  `total` varchar(45) DEFAULT NULL,
  `id_kostumer_id` int(11) DEFAULT NULL,
  `produk_id_produk` varchar(20) NOT NULL,
  `pesan_id_pesan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`jumlah`, `total`, `id_kostumer_id`, `produk_id_produk`, `pesan_id_pesan`) VALUES
('1', '155000', 5, 'PR0029', 'PS0001'),
('2', '290000', 5, 'PR0044', 'PS0001'),
('12', '2388000', 5, 'PR0018', 'PS0001'),
('1', '155000', 5, 'PR0029', 'PS0002'),
('1', '120000', 5, 'PR0032', 'PS0002'),
('1', '155000', 5, 'PR0029', 'PS0003');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kostumer`
--

CREATE TABLE `kostumer` (
  `id_kostumer` int(11) NOT NULL,
  `nama_kostumer` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` int(13) NOT NULL,
  `password` varchar(256) NOT NULL,
  `date_created` int(11) NOT NULL,
  `id_level_id` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kostumer`
--

INSERT INTO `kostumer` (`id_kostumer`, `nama_kostumer`, `email`, `no_telp`, `password`, `date_created`, `id_level_id`) VALUES
(3, 'farid', 'farid@gmail.com', 568290093, '$2y$10$IZk0IIYOEvQHH9yQWpVf4uwWImT1Xe.nw9WYNAjkgmY.xZ9oNlD1i', 1580305647, '111'),
(4, 'mega', 'megasilvia5555@gmail.com', 2147483647, '$2y$10$9iH.3Ic.OkDD.MWjKXjmkOzkZ4kqc9kTgOv0.Q6dUe95okz5RdMJi', 1580401824, '111'),
(5, 'Aji Pratama', 'ajip2606@yahoo.com', 2147483647, '12345', 1584884797, '111'),
(6, 'fabi', 'fabiputra55@gmail.com', 81277366, 'fabiputra', 1584979829, '111');

-- --------------------------------------------------------

--
-- Struktur dari tabel `level`
--

CREATE TABLE `level` (
  `id_level` varchar(20) NOT NULL,
  `nama_level` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
('111', 'user'),
('222', 'admin'),
('333', 'owner');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengiriman`
--

CREATE TABLE `pengiriman` (
  `id_kirim` varchar(20) NOT NULL,
  `nama_pengirim` varchar(30) NOT NULL,
  `provinsi` varchar(45) DEFAULT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `desa` varchar(30) NOT NULL,
  `jenis_layanan` varchar(45) DEFAULT NULL,
  `kurir` varchar(30) NOT NULL,
  `harga_kirim` int(20) NOT NULL,
  `kodepos` int(10) NOT NULL,
  `telp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengiriman`
--

INSERT INTO `pengiriman` (`id_kirim`, `nama_pengirim`, `provinsi`, `kabupaten`, `kecamatan`, `desa`, `jenis_layanan`, `kurir`, `harga_kirim`, `kodepos`, `telp`) VALUES
('S00001', 'Aji Pratama', 'Jawa Timur', 'Lumajang', 'Yosowilangun', 'Wonokerto', 'OKE', 'jne', 77000, 68168, '081515868592'),
('S00002', 'Aji Pratama', 'Jawa Timur', 'Jember', 'Sumbersari', 'Sumbersair', 'CTC', 'jne', 12000, 68168, '2147483647'),
('S00003', 'Aji Pratama', 'Jawa Timur', 'Bangkalan', 'as', 'as', 'OKE', 'jne', 7000, 12, '2147483647');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` varchar(20) NOT NULL,
  `id_kostumer_id` int(11) NOT NULL,
  `tanggal_pesan` datetime DEFAULT NULL,
  `jatuh_tempo` datetime NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `pengiriman_id_kirim` varchar(20) NOT NULL,
  `total_pesan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `id_kostumer_id`, `tanggal_pesan`, `jatuh_tempo`, `status`, `pengiriman_id_kirim`, `total_pesan`) VALUES
('PS0001', 5, '2020-03-22 23:59:18', '2020-03-23 23:59:18', 'Terbayar', 'S00001', 2910000),
('PS0002', 5, '2020-03-23 11:47:33', '2020-03-24 11:47:33', 'Terbayar', 'S00002', 287000),
('PS0003', 5, '2020-03-26 11:06:55', '2020-03-27 11:06:55', 'Proses', 'S00003', 162000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id_produk` varchar(20) NOT NULL,
  `nama_produk` varchar(45) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `kategori_id_kategori` varchar(20) NOT NULL,
  `stok` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `berat` int(5) NOT NULL,
  `gambar` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `keterangan`, `kategori_id_kategori`, `stok`, `harga`, `berat`, `gambar`) VALUES
('PR0016', 'XPE PLAYMAT Motif A Uk 150 X 200', 'Dimensi Produk : 1.5m x 2m \r\nKetebalan: 1cm\r\n\r\n3 macam pilihan motif: \r\n- A\r\n- B\r\n- C\r\n\r\nDESKRIPSI:\r\nBerikan area bermain yang aman dan nyaman untuk anak Anda dengan play mat lembut PVC. Cocok untuk bayi 3 bulan keatas. Soft Mats sangat berguna khususnya pada fase tengkurap bayi, merangkak dan belajar berjalan. Material yang kuat tahan hingga bertahun tahun pemakaian.\r\n\r\nBantalan empuk PVC soft playmat menyerap dampak benturan, melindungi bayi atau balita Anda dari jatuh yang sering terjadi pada', 'KG0003', 50, 199000, 700, 'assets/images/motif_a.JPG'),
('PR0017', 'XPE PLAYMAT Motif B Uk 150 X 200', 'Dimensi Produk : 1.5m x 2m \r\nKetebalan: 1cm\r\n\r\n3 macam pilihan motif: \r\n- A\r\n- B\r\n- C\r\n\r\nDESKRIPSI:\r\nBerikan area bermain yang aman dan nyaman untuk anak Anda dengan play mat lembut PVC. Cocok untuk bayi 3 bulan keatas. Soft Mats sangat berguna khususnya pada fase tengkurap bayi, merangkak dan belajar berjalan. Material yang kuat tahan hingga bertahun tahun pemakaian.\r\n\r\nBantalan empuk PVC soft playmat menyerap dampak benturan, melindungi bayi atau balita Anda dari jatuh yang sering terjadi pada', 'KG0004', 50, 199000, 700, 'assets/images/motif_b.JPG'),
('PR0018', 'XPE PLAYMAT Motif C Uk 150 X 200', 'Dimensi Produk : 1.5m x 2m \r\nKetebalan: 1cm\r\n\r\n3 macam pilihan motif: \r\n- A\r\n- B\r\n- C\r\n\r\nDESKRIPSI:\r\nBerikan area bermain yang aman dan nyaman untuk anak Anda dengan play mat lembut PVC. Cocok untuk bayi 3 bulan keatas. Soft Mats sangat berguna khususnya pada fase tengkurap bayi, merangkak dan belajar berjalan. Material yang kuat tahan hingga bertahun tahun pemakaian.\r\n\r\nBantalan empuk PVC soft playmat menyerap dampak benturan, melindungi bayi atau balita Anda dari jatuh yang sering terjadi pada', 'KG0004', 50, 199000, 700, 'assets/images/motif_cc.JPG'),
('PR0019', 'XPE PLAYMAT Motif A Uk 180 X 200', 'Dimensi Produk : 1.8m x 2m \r\nKetebalan: 1cm\r\n\r\n3 macam pilihan motif: \r\n- A\r\n- B\r\n- C\r\n\r\nDESKRIPSI:\r\nBerikan area bermain yang aman dan nyaman untuk anak Anda dengan play mat lembut PVC. Cocok untuk bayi 3 bulan keatas. Soft Mats sangat berguna khususnya pada fase tengkurap bayi, merangkak dan belajar berjalan. Material yang kuat tahan hingga bertahun tahun pemakaian.\r\n\r\nBantalan empuk PVC soft playmat menyerap dampak benturan, melindungi bayi atau balita Anda dari jatuh yang sering terjadi pada', 'KG0004', 50, 279000, 700, 'assets/images/motif_a1.JPG'),
('PR0020', 'XPE PLAYMAT Motif B Uk 180 X 200', 'Dimensi Produk : 1.8m x 2m \r\nKetebalan: 1cm\r\n\r\n3 macam pilihan motif: \r\n- A\r\n- B\r\n- C\r\n\r\nDESKRIPSI:\r\nBerikan area bermain yang aman dan nyaman untuk anak Anda dengan play mat lembut PVC. Cocok untuk bayi 3 bulan keatas. Soft Mats sangat berguna khususnya pada fase tengkurap bayi, merangkak dan belajar berjalan. Material yang kuat tahan hingga bertahun tahun pemakaian.\r\n\r\nBantalan empuk PVC soft playmat menyerap dampak benturan, melindungi bayi atau balita Anda dari jatuh yang sering terjadi pada', 'KG0004', 50, 279000, 700, 'assets/images/motif_b1.JPG'),
('PR0021', 'XPE PLAYMAT Motif C Uk 180 X 200', 'Dimensi Produk : 1.8m x 2m \r\nKetebalan: 1cm\r\n\r\n3 macam pilihan motif: \r\n- A\r\n- B\r\n- C\r\n\r\nDESKRIPSI:\r\nBerikan area bermain yang aman dan nyaman untuk anak Anda dengan play mat lembut PVC. Cocok untuk bayi 3 bulan keatas. Soft Mats sangat berguna khususnya pada fase tengkurap bayi, merangkak dan belajar berjalan. Material yang kuat tahan hingga bertahun tahun pemakaian.\r\n\r\nBantalan empuk PVC soft playmat menyerap dampak benturan, melindungi bayi atau balita Anda dari jatuh yang sering terjadi pada', 'KG0004', 50, 279000, 700, 'assets/images/motif_cc1.JPG'),
('PR0025', 'TPR Guci Klasik', 'ukuran P27 x T20 x L14\r\nwarna : biru, orage, coklat, merah\r\nbahan : kulit sintetis D', 'KG0002', 1, 145000, 650, 'assets/images/tasupload5.JPG'),
('PR0028', 'Botol Minum  2 in 1 420 ML', 'Botol Minum Dual Use 420ml\r\n\r\nReady Warna :\r\nHitam\r\nMerah\r\nKuning\r\nHijau\r\nBiru\r\n\r\nAnda bisa menikmati dua tipe dari minuman dalam 1 botol !!\r\nMenampilkan 2 kompartemen dan 2 sedotan, hal ini memungkinkan Anda untuk membawa dua jenis minuman yang berbeda pada setiap waktu.\r\n\r\nTerbuat dari PC food grade, tidak-beracun, ringan namun kokoh.\r\nPenutup kubah dan Sedotan akhiri ke arah luar menjadi lipatan untuk mencegah minuman tumpah keluar. anti tumpah.\r\n\r\nBahan: PC\r\nLid : PC + PP + silicone\r\nKapasit', 'KG0003', 5, 60000, 200, 'assets/images/IMG_9878.JPG'),
('PR0029', 'TPR PR0015', 'ukuran : P24 x T20 x L12cm warna : coklat, kuning, merah, pink, biru bahan : sintetis', 'KG0002', 2, 155000, 700, 'assets/images/tasupload1a.jpg'),
('PR0030', 'Botol Minum 2 in 1 600 ML', 'Botol Minum Dual Use 600ml\r\n\r\nReady warna :\r\nHijau\r\nBiru\r\nHitam\r\nMerah\r\n\r\n\r\nAnda bisa menikmati dua tipe dari minuman dalam 1 botol !!\r\nMenampilkan 2 kompartemen dan 2 sedotan, hal ini memungkinkan Anda untuk membawa dua jenis minuman yang berbeda pada setiap waktu.\r\n\r\nTerbuat dari PC food grade, tidak-beracun, ringan namun kokoh.\r\nPenutup kubah dan Sedotan akhiri ke arah luar menjadi lipatan untuk mencegah minuman tumpah keluar. anti tumpah.\r\n\r\nBahan: PC\r\nLid : PC + PP + silicone\r\nKapasitas: 60', 'KG0003', 4, 65000, 450, 'assets/images/IMG_9889.JPG'),
('PR0032', 'Portable Juicer Cup', 'TGB Bingo Portable Juicer Cup / Gelas dan Botol Blender Portable\r\n\r\nReady Warna :\r\nUngu\r\nHijau\r\nMerah\r\nBiru\r\nPink\r\n\r\nPortable Blender Juice Cup Mini Electric 500ML Rechargeable Blender jus buah elektrik yang dapat Anda bawa kemanapun, berbentuk seperti botol minum biasa dan ringan, Anda dapat membuat jus dimanapun Anda berada.\r\n\r\nDesign\r\nDengan Desain Terbaru Sporty dan Elegan Sangat Menarik,\r\n\r\nFeatures\r\nPortable Blender\r\nMinum jus bukan hal yang sulit dan repot lagi, dengan blender cup elektri', 'KG0003', 4, 120000, 650, 'assets/images/IMG_9895.JPG'),
('PR0033', 'TPR Jinjing Pita', 'tas tali gantungan pita + kriwil', 'KG0002', 4, 150000, 700, 'assets/images/tasupload7.JPG'),
('PR0034', 'TPR Rantai', 'ukuran : P23 x T19 x L11\r\nwarna : coklat, pink, hijau, hitam, abu, merah', 'KG0002', 6, 155000, 625, 'assets/images/tasupload8.JPG'),
('PR0035', 'TPR Slempang Rantai', 'Ready warna :\r\nHitam , Pink , Abu , Biru , Pink\r\nUkuran : P20 X T 10 X L10\r\nBahan : Kulit Sintetis', 'KG0002', 6, 155000, 600, 'assets/images/IMG_2065.JPG'),
('PR0036', 'TPR019', 'ukuran : P20 x T25 x L10\r\nwarna : coklat, biru, putih, merah\r\nbahan : PU', 'KG0002', 4, 125000, 600, 'assets/images/tasupload9.JPG'),
('PR0037', 'TPR Selempang Bulu', 'Ready Warna :\r\nAbu , Pink , Hitam , Merah , Navy , Merah Bata , Cream\r\nBahan : Kulit Sintetis', 'KG0002', 6, 140000, 600, 'assets/images/IMG_2042.JPG'),
('PR0038', 'TPR Burberi', 'ukuran : P25 x T20 x L10\r\nwarna : coklat, merah, hitam\r\nbahan : PU', 'KG0002', 3, 165000, 775, 'assets/images/tasupload10.JPG'),
('PR0039', 'TPR 9621#', 'ukuran : L22 x H18 x W6\r\nbahan : PU\r\nwarna : merah, hitam, ungu, coklat', 'KG0002', 4, 145000, 450, 'assets/images/tasupload11.JPG'),
('PR0040', 'TPR Gucci LV', 'Uk : L24 X H17 X W10\r\nBahan : PU\r\nVariasi : Motif\r\nKualitas : Premium Super\r\nReady Warna : Coklat , Merah', 'KG0002', 6, 130000, 700, 'assets/images/IMG_2054.JPG'),
('PR0041', 'TPR Hueivetu', 'ukuran : P23 x T16 x L14\r\nwarna : coklat,, merah, hitam, coklta tua, hitam full', 'KG0002', 6, 130000, 550, 'assets/images/tasupload12.JPG'),
('PR0042', 'TPR 186', 'Ukuran : P24 X T20 X L8\r\nWarna : Pink , Ungu , Hitam , Merah\r\nBahan : PU', 'KG0002', 7, 145000, 425, 'assets/images/IMG_2024.JPG'),
('PR0043', 'TPR Jinjing', 'Ukuran : P127 X T125 X L13\r\nWarna : Merah , Coklat , Pink\r\nBahan : PU', 'KG0002', 3, 150000, 600, 'assets/images/IMG_2028.JPG'),
('PR0044', 'TPR M Kotak', 'bahan : PU\r\nwarna : motif ', 'KG0002', 2, 145000, 650, 'assets/images/tasupload13.JPG'),
('PR0045', 'Apapun', 'aa', 'KG0002', 12, 12000, 210, 'assets/images/batik1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_user` varchar(45) DEFAULT NULL,
  `no_telp` varchar(45) DEFAULT NULL,
  `alamat` varchar(45) DEFAULT NULL,
  `kode_pos` int(11) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `level_id_level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `password`, `nama_user`, `no_telp`, `alamat`, `kode_pos`, `email`, `level_id_level`) VALUES
('100000', 'owner', 'owner', '098454637289', 'jember', 950846, 'owner@gmail.com', '333'),
('100001', 'saya', 'saya', '0923762476384', 'nganjuk', 38403, 'saya@gmail.com', '222'),
('100002', 'fikal', 'fikal', '0987678986679', 'nganjuk', 98979, 'fikal@gmail.com', '222'),
('100003', 'mega', 'mega', '0083478473463', 'jember', 974938, 'mega@gmail.com', '222');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`id_bayar`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD KEY `fk_keranjang_produk1` (`produk_id_produk`),
  ADD KEY `id_kostumer_id` (`id_kostumer_id`),
  ADD KEY `pesan_id_pesan` (`pesan_id_pesan`);

--
-- Indeks untuk tabel `kostumer`
--
ALTER TABLE `kostumer`
  ADD PRIMARY KEY (`id_kostumer`),
  ADD KEY `id_level_id` (`id_level_id`);

--
-- Indeks untuk tabel `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indeks untuk tabel `pengiriman`
--
ALTER TABLE `pengiriman`
  ADD PRIMARY KEY (`id_kirim`);

--
-- Indeks untuk tabel `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`),
  ADD KEY `fk_pesan_pengiriman1_idx` (`pengiriman_id_kirim`),
  ADD KEY `id_kostumer_id` (`id_kostumer_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `fk_produk_kategori1_idx` (`kategori_id_kategori`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `fk_user_level_idx` (`level_id_level`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kostumer`
--
ALTER TABLE `kostumer`
  MODIFY `id_kostumer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD CONSTRAINT `fk_keranjang_produk1` FOREIGN KEY (`produk_id_produk`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `keranjang_ibfk_1` FOREIGN KEY (`id_kostumer_id`) REFERENCES `kostumer` (`id_kostumer`),
  ADD CONSTRAINT `keranjang_ibfk_2` FOREIGN KEY (`pesan_id_pesan`) REFERENCES `pesan` (`id_pesan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `kostumer`
--
ALTER TABLE `kostumer`
  ADD CONSTRAINT `kostumer_ibfk_1` FOREIGN KEY (`id_level_id`) REFERENCES `level` (`id_level`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `fk_produk_kategori1` FOREIGN KEY (`kategori_id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `fk_user_level` FOREIGN KEY (`level_id_level`) REFERENCES `level` (`id_level`) ON DELETE CASCADE ON UPDATE CASCADE;

DELIMITER $$
--
-- Event
--
CREATE DEFINER=`root`@`localhost` EVENT `hapus_data` ON SCHEDULE EVERY 1 SECOND STARTS '2020-03-23 22:51:20' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'Hapus data yang bukan hari ini' DO DELETE pesan, keranjang FROM pesan INNER JOIN keranjang ON keranjang.pesan_id_pesan=pesan.id_pesan WHERE pesan.status='Proses' AND NOW() > pesan.jatuh_tempo$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
