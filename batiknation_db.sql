-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2021 at 09:43 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `batiknation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'admin satu', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bahan`
--

CREATE TABLE `bahan` (
  `id_bahan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kualitas` varchar(100) NOT NULL,
  `jenis_kain` varchar(100) NOT NULL,
  `tekstur` varchar(100) NOT NULL,
  `harga_bahan` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bahan`
--

INSERT INTO `bahan` (`id_bahan`, `nama`, `kualitas`, `jenis_kain`, `tekstur`, `harga_bahan`, `deskripsi`) VALUES
(1, 'Lokatex', 'rendah', 'katun combed 40s', 'kasar', 10000, 'kain lokatex ini terbuat dari katun combed 40s yang mana memiliki tekstur yang kasar, kain ini cocok untuk dibuat dekorasi karena tekstur yang kasar kurang cocok untuk dijahit dalam bentuk pakaian yang akan digunakan oleh seseorang ');

-- --------------------------------------------------------

--
-- Table structure for table `batik`
--

CREATE TABLE `batik` (
  `id_batik` int(11) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga_jenis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batik`
--

INSERT INTO `batik` (`id_batik`, `jenis`, `deskripsi`, `gambar`, `harga_jenis`) VALUES
(1, 'Megamendung', 'Di luar negeri, popularitas motif megamendung pun tak kalah sangar. Ada sebuah buku terbitan luar negeri karya Pepin van Roojen yang menggunakan motif megamendung sebagai covernya. Tak sedikit artis luar negeri yang menggunakan batik bermotif mega mendung di acara-acara formal maupun non-formal.', 'pekalongan.PNG', 30000),
(2, 'Parang', 'Batik parang ini merupakan salah satu motif batik yang terkenal di Indonesia. Bentuk motif batik Parang ini seperti garis garis diagonal dari atas ke bawah yang didalamnya terdapat susunan motif menyerupai huruf “S” yang tanpa terputus dan saling berkesinambungan. Warna pada motif batik ini sering menggunakan warna kontras yang lebih gelap agar memiliki kesan elegan saat digunakan oleh pemakai.', 'parang.jpg', 30000),
(3, 'Sidomukti', 'Sido dalam bahasa Jawa berarti jadi atau terus menerus, sedangkan mulyo berarti mulia. Kain batik dengan motif sidomulyo biasa dipakai oleh mempelai baik pria maupun wanita pada saat upacara perkawinan dengan harapan bahwa kelak keluarga yang dibina akan terus menerus mendapatkan kemuliaan.', 'sidomukti.jfif', 40000),
(4, 'Lasem', 'Batik lasem juga dikenal sebagi batik tiga negeri karena memiliki tiga kali proses pewarnaan di tiga tempat berbeda. Warna merah di Lasem, biru di Pekalongan, dan Cokelat di Solo. Hal tersebut yang menjadi keunikan dari batik ini. Biasanya, harga ditentukan sesuai dengan motif yang ada dan tingkat kerumitan motif yang dibuat karena semakin rumit motifnya semakin mahal harga batik lasem.', 'lasem.PNG', 55000),
(5, 'Gedog Tuban', 'Batik Gedog memiliki ciri khasnya sendiri yaitu sebagai batik tulis. Setiap motif batik yang diaplikasikan di kain mulai dari kain tenun hingga kain katun, semua adalah batik tulis.  Dan yang lebih menarik lagi, motif dari batik Gedog merupakan perpaduan dari tiga budaya yang pernah berkembang dan berdampingan dengan harmonis. Oleh sebab itu, motifnya yang kaya dan bervariatif berasal dari penggabungan budaya-budaya tersebut.', 'gedog.PNG', 30000),
(9, 'Pekalongan', 'Motif batik Pekalongan berkembang dinamis mengikuti zaman. Di masa pendudukan Jepang, muncul batik pagi sore atau motif jawa hokokai yang mirip motif kimono Jepang. Lalu ada motif tritura yang muncul pada 1960-an. Belakangan muncul motif tsunami.', 'pekalongan.PNG', 35000);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `alamat`, `telepon`, `email`, `password`) VALUES
(1, 'Raisa Andriana', 'Jakarta Selatan', '081234567890', 'raisa@gmail.com', '123456'),
(2, 'ardana rizky', 'tuban jawa timur', '08123245678', 'ardana.rizky33@gmail.com', '321123'),
(3, 'izzul', 'penambangan tuban', '01234567854', 'ijul@gmail.com', '123'),
(4, 'Bae Suzy', 'Bejagung, Semanding Tuban Jawa Timur', '01234567854', 'suzy@gmail.com', '1234'),
(5, 'customer 1', 'tuban jawa timur', '123', 'cst1@gmail.com', '123'),
(6, 'customer 2', 'tuban jawa timur', '123', 'customer@gmail.com', '123'),
(7, 'izzul', 'tuban jawa timur', '124', 'izzul@gmail.com', '123'),
(8, 'weqwew', 'tuban jawa timur', '124', 'asdasds@gmail.com', '313'),
(9, 'izzulfaiz123', 'penambangan, tuban jawa timur', '01234567845', 'izzul1@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feedback` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jenisbarang`
--

CREATE TABLE `jenisbarang` (
  `id_barang` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenisbarang`
--

INSERT INTO `jenisbarang` (`id_barang`, `nama`, `harga_barang`) VALUES
(1, 'Kemeja Lengan pendek', 30000),
(2, 'Kemeja Lengan Panjang', 35000),
(3, 'Kain', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `id_batik` int(11) NOT NULL,
  `id_customer` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT current_timestamp(),
  `jumlah` int(11) NOT NULL,
  `id_bahan` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `id_batik`, `id_customer`, `harga`, `tanggal`, `jumlah`, `id_bahan`, `id_barang`) VALUES
(30, 2, 2, 1200000, '2021-06-16 02:13:56', 20, 1, 1),
(35, 1, 2, 800000, '2021-06-16 14:27:00', 10, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bahan`
--
ALTER TABLE `bahan`
  ADD PRIMARY KEY (`id_bahan`);

--
-- Indexes for table `batik`
--
ALTER TABLE `batik`
  ADD PRIMARY KEY (`id_batik`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feedback`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `jenisbarang`
--
ALTER TABLE `jenisbarang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `id_batik` (`id_batik`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_bahan` (`id_bahan`),
  ADD KEY `id_barang` (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bahan`
--
ALTER TABLE `bahan`
  MODIFY `id_bahan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `batik`
--
ALTER TABLE `batik`
  MODIFY `id_batik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feedback` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jenisbarang`
--
ALTER TABLE `jenisbarang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`id_batik`) REFERENCES `batik` (`id_batik`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`id_bahan`) REFERENCES `bahan` (`id_bahan`),
  ADD CONSTRAINT `orders_ibfk_5` FOREIGN KEY (`id_barang`) REFERENCES `jenisbarang` (`id_barang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
