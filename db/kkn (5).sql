-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Mar 2020 pada 08.25
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kkn`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `level`) VALUES
(4, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id_dosen` int(30) NOT NULL,
  `nip` varchar(25) NOT NULL,
  `nama_dosen` varchar(50) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id_dosen`, `nip`, `nama_dosen`, `username`, `password`) VALUES
(1, '12345789', 'Dedi Iskandar Inan, ST., MT., Ph.D.', 'dedy', ''),
(2, '6543366', 'Kristia Yuliawan, S.Kom., M.Kom.', 'kris', '54321');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `jenislaporan` varchar(11) NOT NULL,
  `idlaporan` int(11) NOT NULL,
  `iddosen` int(11) NOT NULL,
  `tglwaktu` datetime NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komentar`
--

INSERT INTO `komentar` (`id`, `jenislaporan`, `idlaporan`, `iddosen`, `tglwaktu`, `komentar`) VALUES
(1, 'skripsi', 2, 1, '2020-03-12 12:11:12', 'Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus. '),
(2, 'skripsi', 2, 2, '2020-03-12 16:11:12', 'In the Procurement Department, many activities are carried out, including procurement of goods, purchasing procedures, inventory mechanisms, steps to purchase goods and other matters.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `nim` int(50) NOT NULL,
  `judul_laporan` varchar(100) NOT NULL,
  `jenis_laporan` varchar(30) NOT NULL,
  `tgl_upload` date NOT NULL,
  `dospem_1` varchar(50) NOT NULL,
  `dospem_2` varchar(50) NOT NULL,
  `kategori_laporan` varchar(50) NOT NULL,
  `upload_laporan` varchar(100) NOT NULL,
  `notifikasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `nim`, `judul_laporan`, `jenis_laporan`, `tgl_upload`, `dospem_1`, `dospem_2`, `kategori_laporan`, `upload_laporan`, `notifikasi`) VALUES
(6, 201465040, 'sistem informasi KKN berbasis web', 'Skripsi', '2019-06-12', 'Dedi Iskandar Inan, ST., MT., Ph.D.', 'Kristia Yuliawan, S.Kom., M.Kom.', 'Web', 'uaspbo.docx', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lap_kkn`
--

CREATE TABLE `lap_kkn` (
  `id_laporan` int(11) NOT NULL,
  `nim` int(50) NOT NULL,
  `judul_laporan` varchar(100) NOT NULL,
  `abstrak_laporan` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `dospem_1` varchar(50) NOT NULL,
  `dospem_2` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `notifikasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lap_kkn`
--

INSERT INTO `lap_kkn` (`id_laporan`, `nim`, `judul_laporan`, `abstrak_laporan`, `tgl_upload`, `dospem_1`, `dospem_2`, `file`, `notifikasi`) VALUES
(4, 201565069, 'Laporan KKN di Kampung Sidey Baru - Manokwari', 'sdfsfsfd', '2020-03-11', '2', '1', 'PP_NO_24_2007.PDF', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lap_kp`
--

CREATE TABLE `lap_kp` (
  `id_laporan` int(11) NOT NULL,
  `nim` int(50) NOT NULL,
  `judul_laporan` varchar(100) NOT NULL,
  `abstrak_laporan` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `dospem_1` varchar(50) NOT NULL,
  `dospem_2` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `notifikasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lap_kp`
--

INSERT INTO `lap_kp` (`id_laporan`, `nim`, `judul_laporan`, `abstrak_laporan`, `tgl_upload`, `dospem_1`, `dospem_2`, `file`, `notifikasi`) VALUES
(4, 201565069, 'Membangun Jaringan Hotspot Menggunakan Mikrotik di SMK', 'sdfsfsfd', '2020-03-11', '2', '1', 'PP_NO_24_2007.PDF', 0),
(5, 201465040, 'ANALISIS SISTEM APLIKASI REMEDY HELPDESK PADA PT. TELEKOMUNIKASI INDONESIA Tbk INFORMATION SYSTEM CE', 'Sebagai   perusahaan   yang   berbasis   teknologi   tinggi, PT.   TELKOM   Tbk, mempunyai  cakupan  tugas  yang  sangat  luas.  Mulai  dari  melakukan  penelitian, pengembangan  dan  pembuatan  perangkat  hingga  memberikan  jasa  pelayanan  yang berkaitan  dengan  teknologi  komunikasi.  Sehingga  hal  tersebut  menjadi  daya  tarik tersendiri untuk dilakukannya analisis dalam rangka kegiatan kerja praktek ini. Aplikasi yang digunakan memiliki kelemahan dan kelebihan tersendiri, dengan menganalisis apalikasi tersebut maka akan didapatkan informasi mengenai kelebihan maupun   kelemahan   perangkat   lunak.   Dengan   informasi yang   didapat   setelah dianalisis    diharapkan    akan    lebih    mengembangkan    daya    kerja    aplikasi    dan memperkecil resiko aplikasi tersebut. ', '2020-03-11', '2', '1', '1730-1563-1-PB.pdf', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lap_skripsi`
--

CREATE TABLE `lap_skripsi` (
  `id_laporan` int(11) NOT NULL,
  `nim` int(50) NOT NULL,
  `judul_laporan` text NOT NULL,
  `abstrak_laporan` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `dospem_1` varchar(50) NOT NULL,
  `dospem_2` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `notifikasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lap_skripsi`
--

INSERT INTO `lap_skripsi` (`id_laporan`, `nim`, `judul_laporan`, `abstrak_laporan`, `tgl_upload`, `dospem_1`, `dospem_2`, `file`, `notifikasi`) VALUES
(1, 201565069, 'Sistem Informasi Apotik Papua Medika', 'sdfsfsfd', '2020-03-11', '2', '1', 'PP_NO_24_2007.PDF', 0),
(2, 201465040, 'PEMODELAN PROSES BISNIS DENGAN BPMN (STUDI KASUS: DEPARTEMEN PROCUREMENT UNIVERSITAS ADVENT INDONESIA)', 'Business Process Model and Notation atau lebih sering dikenal dengan istilah BPMN adalah suatu konsep yang digunakan untuk memodelkan sebuah proses bisnis. Melalui penggunaan dari BPMN ini maka pemodelan terhadap suatu proses bisnis pada sebuah alur bisnis dapat tergambar secara jelas dan rinci. Hubungan antar entitas beserta dengan kegiatan apa saja yang terjadi dapat terdokumentasi pada satu model yang dirancang. Pada Departemen Procurement, banyak kegiatan yang dilakukan, termasuk pengadaan barang, prosedur pembelian, mekanisme stok barang, langkah-langkah persetujuan pembelian barang dan hal-hal lainnya. Seluruh kegiatan tersebut nyatanya belum memiliki model baku yang harus digunakan sebagai acuan dalam melakukan kegiatan-kegiatan seperti dicontohkan diatas. Oleh karena itu dengan adanya pemodelan menggunakan BPMN ini, maka Departemen Procurement dapat memiliki panduan baku pada setiap proses bisnis yang terjadi.', '2020-03-11', '2', '1', '667-Article Text-1414-1-10-20190129 (1).pdf', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `lap_ta`
--

CREATE TABLE `lap_ta` (
  `id_laporan` int(11) NOT NULL,
  `nim` int(50) NOT NULL,
  `judul_laporan` varchar(100) NOT NULL,
  `abstrak_laporan` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `dospem_1` varchar(50) NOT NULL,
  `dospem_2` varchar(50) NOT NULL,
  `file` varchar(100) NOT NULL,
  `notifikasi` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lap_ta`
--

INSERT INTO `lap_ta` (`id_laporan`, `nim`, `judul_laporan`, `abstrak_laporan`, `tgl_upload`, `dospem_1`, `dospem_2`, `file`, `notifikasi`) VALUES
(4, 201565069, 'Analisis Virtual Private Network OpenVPN', 'sdfsfsfd', '2020-03-11', '2', '1', 'PP_NO_24_2007.PDF', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` int(12) NOT NULL,
  `nama_mhs` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `prodi` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama_mhs`, `password`, `prodi`) VALUES
(1, 201565069, 'Akbar', '202cb962ac59075b964b07152d234b70', 'S1 Teknik Informatika'),
(2, 201465040, 'Putri Susi Susanty', '202cb962ac59075b964b07152d234b70', 'S1 Teknik Informatika'),
(3, 201152049, 'Ayessa', '202cb962ac59075b964b07152d234b70', 'D3 Teknik Komputer');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id_dosen`);

--
-- Indeks untuk tabel `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `lap_kkn`
--
ALTER TABLE `lap_kkn`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `lap_kp`
--
ALTER TABLE `lap_kp`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `lap_skripsi`
--
ALTER TABLE `lap_skripsi`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `lap_ta`
--
ALTER TABLE `lap_ta`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id_dosen` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `lap_kkn`
--
ALTER TABLE `lap_kkn`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `lap_kp`
--
ALTER TABLE `lap_kp`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `lap_skripsi`
--
ALTER TABLE `lap_skripsi`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `lap_ta`
--
ALTER TABLE `lap_ta`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
