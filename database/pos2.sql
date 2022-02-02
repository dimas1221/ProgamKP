-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2022 at 07:49 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pos2`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_menu`
--

CREATE TABLE `jenis_menu` (
  `kd_jenis_menu` varchar(250) NOT NULL,
  `jenis_menu` varchar(250) NOT NULL,
  `kd_jenis_produk` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_menu`
--

INSERT INTO `jenis_menu` (`kd_jenis_menu`, `jenis_menu`, `kd_jenis_produk`) VALUES
('CAM1', 'camilan', 'P11'),
('JGNGS1', 'jagung serut', 'P11'),
('MCF1', 'coffee menu', 'P12'),
('MCLASSIC1', 'classic menu', 'P12'),
('MI1', 'aneka mie', 'P11'),
('MSMOTH1', 'smoothies menu', 'P12'),
('MTD1', 'tradisional menu', 'P12'),
('PSNGB1', 'pisang bakar', 'P12'),
('PSNGN1', 'pisang nugget', 'P11'),
('RTB1', 'roti bakar', 'P11'),
('RTM1', 'roti maryam', 'P11'),
('SSK1', 'susu kambing', 'P12'),
('XT1', 'extra toping', 'P13');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `kd_jenis_produk` varchar(250) NOT NULL,
  `nama_produk` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`kd_jenis_produk`, `nama_produk`) VALUES
('P11', 'makanan'),
('P12', 'minuman'),
('P13', 'toping');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `kd_menu` varchar(250) NOT NULL,
  `nama_menu` varchar(250) NOT NULL,
  `kd_jenis_menu` varchar(250) NOT NULL,
  `kd_jenis_produk` varchar(250) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`kd_menu`, `nama_menu`, `kd_jenis_menu`, `kd_jenis_produk`, `harga`) VALUES
('M001', 'murni mini hot coba', 'MCLASSIC1', 'P12', 20000),
('M002', 'murni standar hot', 'MCLASSIC1', 'P12', 9000),
('M003', 'murni mini cold', 'MCLASSIC1', 'P12', 6000),
('M004', 'murni standar cold', 'MCLASSIC1', 'P12', 10000),
('M005', 'strawberi mini cold', 'MCLASSIC1', 'P12', 7000),
('M006', 'strawberi standar cold', 'MCLASSIC1', 'P12', 11000),
('M007', 'anggur mini hot', 'MCLASSIC1', 'P12', 6000),
('M008', 'anggur standar hot', 'MCLASSIC1', 'P12', 10000),
('M009', 'anggur mini cold', 'MCLASSIC1', 'P12', 7000),
('M011', 'anggur standar cold', 'MCLASSIC1', 'P12', 11000),
('M012', 'melon mini hot', 'MCLASSIC1', 'P12', 6000),
('M013', 'melon standar hot', 'MCLASSIC1', 'P12', 10000),
('M014', 'melon mini cold', 'MCLASSIC1', 'P12', 7000),
('M015', 'melon standar cold', 'MCLASSIC1', 'P12', 11000),
('M016', 'durian mini hot', 'MCLASSIC1', 'P12', 6000),
('M017', 'durian standar hot', 'MCLASSIC1', 'P12', 10000),
('M018', 'durian mini cold', 'MCLASSIC1', 'P12', 7000),
('M019', 'durian standar cold', 'MCLASSIC1', 'P12', 11000),
('M021', 'mangga mini hot', 'MCLASSIC1', 'P12', 6000),
('M022', 'mangga standar hot', 'MCLASSIC1', 'P12', 10000),
('M023', 'mangga mini cold', 'MCLASSIC1', 'P12', 7000),
('M024', 'mangga standar cold', 'MCLASSIC1', 'P12', 11000),
('M025', 'vanila mini hot', 'MCLASSIC1', 'P12', 6000),
('M026', 'vanila standar hot', 'MCLASSIC1', 'P12', 10000),
('M027', 'vanila mini cold', 'MCLASSIC1', 'P12', 7000),
('M028', 'vanila standar cold', 'MCLASSIC1', 'P12', 11000),
('M029', 'coklat mini hot', 'MCLASSIC1', 'P12', 7000),
('M031', 'coklat standar hot', 'MCLASSIC1', 'P12', 11000),
('M032', 'coklat mini cold', 'MCLASSIC1', 'P12', 8000),
('M033', 'coklat standar cold', 'MCLASSIC1', 'P12', 12000),
('M034', 'gula jawa mini hot', 'MCLASSIC1', 'P12', 7000),
('M035', 'gula jawa standar hot', 'MCLASSIC1', 'P12', 11000),
('M036', 'gula jawa mini cold', 'MCLASSIC1', 'P12', 8000),
('M037', 'gula jawa standar cold', 'MCLASSIC1', 'P12', 12000),
('M038', 'kopi mini hot', 'MCF1', 'P12', 9000),
('M039', 'kopi standar hot', 'MCF1', 'P12', 11000),
('M041', 'kopi mini cold', 'MCF1', 'P12', 10000),
('M042', 'kopi standar cold', 'MCF1', 'P12', 12000),
('M043', 'kopi gingseng mini hot', 'MCF1', 'P12', 9000),
('M044', 'kopi gingseng standar hot', 'MCF1', 'P12', 11000),
('M045', 'kopi gingseng mini cold', 'MCF1', 'P12', 10000),
('M046', 'kopi gingseng standar cold', 'MCF1', 'P12', 12000),
('M047', 'kopi ndeso mini hot', 'MCF1', 'P12', 9000),
('M048', 'kopi ndeso standar hot', 'MCF1', 'P12', 11000),
('M049', 'kopi ndeso mini cold', 'MCF1', 'P12', 10000),
('M051', 'kopi ndeso standar cold', 'MCF1', 'P12', 12000),
('M052', 'cappucino mini hot', 'MCF1', 'P12', 9000),
('M053', 'cappucino standar hot', 'MCF1', 'P12', 11000),
('M054', 'cappucino mini cold', 'MCF1', 'P12', 10000),
('M055', 'cappucino standar cold', 'MCF1', 'P12', 12000),
('M056', 'white coffee mini hot', 'MCF1', 'P12', 9000),
('M057', 'white coffee standar hot', 'MCF1', 'P12', 11000),
('M058', 'white coffee mini cold', 'MCF1', 'P12', 10000),
('M059', 'white coffee standar cold', 'MCF1', 'P12', 12000),
('M061', 'vanila latte mini hot', 'MCF1', 'P12', 11000),
('M062', 'vanila latte standar hot', 'MCF1', 'P12', 13000),
('M063', 'vanila latte mini cold', 'MCF1', 'P12', 12000),
('M064', 'vanila latte standar cold', 'MCF1', 'P12', 14000),
('M065', 'tiramisu mini hot', 'MCF1', 'P12', 11000),
('M066', 'tiramisu standar hot', 'MCF1', 'P12', 13000),
('M067', 'tiramisu mini cold', 'MCF1', 'P12', 12000),
('M068', 'tiramisu standar cold', 'MCF1', 'P12', 14000),
('M069', 'jahe mini hot', 'MTD1', 'P12', 9000),
('M070', 'jahe standar hot', 'MTD1', 'P12', 12000),
('M071', 'jahe mini cold', 'MTD1', 'P12', 10000),
('M072', 'jahe standar cold', 'MTD1', 'P12', 13000),
('M073', 'jahe merah mini hot', 'MTD1', 'P12', 9000),
('M074', 'jahe merah standar hot', 'MTD1', 'P12', 13000),
('M075', 'jahe merah mini cold', 'MTD1', 'P12', 10000),
('M076', 'jahe merah standar cold', 'MTD1', 'P12', 14000),
('M077', 'madu mini hot', 'MTD1', 'P12', 9000),
('M078', 'madu standar hot', 'MTD1', 'P12', 12000),
('M079', 'madu mini cold', 'MTD1', 'P12', 10000),
('M080', 'madu standar cold', 'MTD1', 'P12', 13000),
('M081', 'telur mini hot', 'MTD1', 'P12', 9000),
('M082', 'telur standar hot', 'MTD1', 'P12', 12000),
('M083', 'telur mini cold', 'MTD1', 'P12', 10000),
('M084', 'telur standar cold', 'MTD1', 'P12', 13000),
('M085', 'telor madu mini hot', 'MTD1', 'P12', 11000),
('M086', 'telor madu standar hot', 'MTD1', 'P11', 15000),
('M087', 'telor madu mini cold', 'MTD1', 'P12', 12000),
('M088', 'telor madu standar cold', 'MTD1', 'P12', 17000),
('M089', 'telur madu jahe mini hot', 'MTD1', 'P12', 11000),
('M090', 'telur madu jahe stadar hot', 'MTD1', 'P12', 16000),
('M091', 'telur madu jahe mini cold', 'MTD1', 'P12', 12000),
('M092', 'telur madu jahe standar cold', 'MTD1', 'P12', 17000),
('M093', 'telur madu jahe merah mini hot', 'MTD1', 'P12', 11000),
('M094', 'telur madu jahe merah standar hot', 'MTD1', 'P12', 17000),
('M095', 'telur madu jahe merah mini cold', 'MTD1', 'P12', 13000),
('M096', 'telur madu jahe merah standar cold', 'MTD1', 'P12', 18000),
('M097', 'oreo mini hot', 'MSMOTH1', 'P12', 9000),
('M098', 'oreo standar hot', 'MSMOTH1', 'P12', 11000),
('M099', 'oreo mini cold', 'MSMOTH1', 'P12', 9000),
('M100', 'oreo standar cold', 'MSMOTH1', 'P12', 14000),
('M101', 'goodtime mini hot', 'MSMOTH1', 'P12', 9000),
('M102', 'goodtime standar hot', 'MSMOTH1', 'P12', 11000),
('M103', 'goodtime mini cold', 'MSMOTH1', 'P12', 9000),
('M104', 'goodtime standar cold', 'MSMOTH1', 'P12', 14000),
('M105', 'bubble gum mini hot', 'MSMOTH1', 'P12', 9000),
('M106', 'bubble gum standar hot', 'MSMOTH1', 'P12', 11000),
('M107', 'bubble gum mini cold', 'MSMOTH1', 'P12', 9000),
('M108', 'bubble gum standar cold', 'MSMOTH1', 'P12', 14000),
('M109', 'taro mini hot', 'MSMOTH1', 'P12', 9000),
('M110', 'taro standar hot', 'MSMOTH1', 'P12', 11000),
('M111', 'taro mini cold', 'MSMOTH1', 'P12', 9000),
('M112', 'taro standar cold', 'MSMOTH1', 'P12', 14000),
('M113', 'green tea mini hot', 'MSMOTH1', 'P12', 9000),
('M114', 'green tea standar hot', 'MSMOTH1', 'P12', 11000),
('M115', 'green tea mini cold', 'MSMOTH1', 'P12', 9000),
('M116', 'green tea standar cold', 'MSMOTH1', 'P12', 14000),
('M117', 'red velvet mini hot', 'MSMOTH1', 'P12', 9000),
('M118', 'red velvet standar hot', 'MSMOTH1', 'P12', 11000),
('M119', 'red velvet mini cold', 'MSMOTH1', 'P12', 9000),
('M120', 'red velvet standar cold', 'MSMOTH1', 'P12', 14000),
('M121', 'hazelnut mini hot', 'MSMOTH1', 'P12', 9000),
('M122', 'hazelnut standar hot', 'MSMOTH1', 'P12', 11000),
('M123', 'hazelnut mini cold', 'MSMOTH1', 'P12', 9000),
('M124', 'hazelnut standar cold', 'MSMOTH1', 'P12', 14000),
('M125', 'banana mini hot', 'MSMOTH1', 'P12', 9000),
('M126', 'banana standar hot', 'MSMOTH1', 'P12', 11000),
('M127', 'banana mini cold', 'MSMOTH1', 'P12', 9000),
('M128', 'banana standar cold', 'MSMOTH1', 'P12', 14000),
('M129', 'avocado mini hot', 'MSMOTH1', 'P12', 9000),
('M130', 'mie rebus atau goreng', 'MI1', 'P11', 8000),
('M131', 'mie rebus atau goreng telur', 'MI1', 'P11', 10000),
('M132', 'mie rebus atau goreng bakso', 'MI1', 'P11', 10000),
('M134', 'mie rebus atau goreng sosis', 'MI1', 'P11', 10000),
('M135', 'mie rebus atau goreng telur bakso', 'MI1', 'P11', 12000),
('M136', 'mie goreng rendang', 'MI1', 'P11', 12000),
('M137', 'mie goreng ayam geprek', 'MCLASSIC1', 'P11', 10000),
('M138', 'misyu', 'MI1', 'P11', 12000),
('M139', 'mie special putri bumi', 'MI1', 'P11', 12000),
('M140', 'avocado standar hot', 'MSMOTH1', 'P12', 11000),
('M141', 'avocado mini cold', 'MSMOTH1', 'P12', 9000),
('M142', 'avocado standar cold', 'MSMOTH1', 'P12', 14000),
('M143', 'milo dinosaur mini hot', 'MSMOTH1', 'P12', 10000),
('M144', 'milo dinosaur standar hot', 'MSMOTH1', 'P12', 12000),
('M145', 'milo dinosaur mini cold', 'MSMOTH1', 'P12', 11000),
('M146', 'milo dinosaur standar cold', 'MSMOTH1', 'P12', 15000),
('M147', 'ice cream menu minuman', 'XT1', 'P13', 4000),
('M148', 'keju menu minuman', 'XT1', 'P13', 4000),
('M149', 'keju menu jagung serut', 'XT1', 'P13', 3000),
('M150', 'mayonise menu jagung serut', 'XT1', 'P13', 3000),
('M151', 'rawit menu aneka mie', 'XT1', 'P13', 3000),
('M152', 'susu kambing murni', 'SSK1', 'P12', 10000),
('M153', 'susu kambing strawberry', 'SSK1', 'P12', 10000),
('M154', 'susu kambing anggur', 'SSK1', 'P12', 10000),
('M155', 'susu kambing melon', 'SSK1', 'P12', 10000),
('M156', 'susu kambing durian', 'SSK1', 'P12', 10000),
('M157', 'susu kambing mangga', 'SSK1', 'P12', 10000),
('M158', 'susu kambing coklat', 'SSK1', 'P12', 10000),
('M159', 'susu kambing vanila', 'SSK1', 'P12', 10000),
('M160', 'susu kambing gula jawa', 'SSK1', 'P12', 12000),
('M161', 'susu kambing kopi', 'SSK1', 'P12', 13000),
('M162', 'susu kambing kopi gingseng', 'SSK1', 'P12', 13000),
('M163', 'susu kambing kopi ndeso', 'SSK1', 'P12', 13000),
('M164', 'susu kambing cappucino', 'SSK1', 'P12', 13000),
('M165', 'susu kambing white coffee', 'SSK1', 'P12', 13000),
('M166', 'susu kambing caramel machiato', 'SSK1', 'P12', 13000),
('M167', 'susu kambing vanila latte', 'SSK1', 'P12', 13000),
('M168', 'susu kambing tiramisu', 'SSK1', 'P12', 13000),
('M169', 'susu kambing jahe', 'SSK1', 'P12', 13000),
('M170', 'susu kambing jahe merah', 'SSK1', 'P12', 140000),
('M171', 'susu kambing madu', 'SSK1', 'P12', 13000),
('M172', 'susu kambing telur', 'SSK1', 'P12', 14000),
('M173', 'susu kambing telur madu', 'SSK1', 'P12', 16000),
('M174', 'susu kambing telur madu jahe', 'SSK1', 'P12', 17000),
('M175', 'susu kambing telur madu jahe merah', 'SSK1', 'P12', 18000),
('M176', 'susu kambing oreo', 'SSK1', 'P12', 13000),
('M177', 'susu kambing good time', 'SSK1', 'P12', 13000),
('M178', 'susu kambing bubble gum', 'SSK1', 'P12', 13000),
('M179', 'susu kambing taro', 'SSK1', 'P12', 13000),
('M180', 'susu kambing green tea', 'SSK1', 'P12', 13000),
('M181', 'susu kambing red velvet', 'SSK1', 'P12', 13000),
('M182', 'susu kambing hazelnut', 'SSK1', 'P12', 13000),
('M183', 'susu kambing banana', 'SSK1', 'P12', 13000),
('M184', 'susu kambing avocado', 'SSK1', 'P12', 13000),
('M185', 'mendoan', 'CAM1', 'P11', 7000),
('M186', 'kentang goreng', 'CAM1', 'P11', 9000),
('M187', 'kentang goreng balado', 'CAM1', 'P11', 9000),
('M188', 'kentang goreng bbq', 'CAM1', 'P11', 9000),
('M189', 'tahu bakso', 'CAM1', 'P11', 9000),
('M190', 'sosis', 'CAM1', 'P11', 9000),
('M191', 'nugget', 'CAM1', 'P11', 10000),
('M192', 'sosis bakar', 'CAM1', 'P11', 10000),
('M193', 'bakso bakar', 'CAM1', 'P11', 10000),
('M194', 'pancake', 'CAM1', 'P11', 12000),
('M195', 'mix kentang sosis', 'CAM1', 'P11', 17000),
('M196', 'pisang nugget original', 'PSNGN1', 'P11', 10000),
('M197', 'pisang nugget coklat', 'PSNGN1', 'P11', 12000),
('M198', 'pisang nugget strawberry', 'PSNGN1', 'P11', 12000),
('M199', 'pisang nugget keju', 'PSNGN1', 'P11', 14000),
('M200', 'pisang nugget oreo', 'PSNGN1', 'P11', 14000),
('M201', 'pisang nugget green tea', 'PSNGN1', 'P11', 17000),
('M202', 'pisang nugget mix 2 rasa', 'PSNGN1', 'P11', 16000),
('M203', 'pisang nugget mix 3 rasa', 'PSNGN1', 'P11', 17000),
('M204', 'pisang bakar coklat', 'PSNGB1', 'P11', 10000),
('M205', 'pisang bakar keju', 'PSNGB1', 'P11', 10000),
('M206', 'pisang bakar strawberry', 'PSNGB1', 'P11', 10000),
('M207', 'pisang bakar blueberry', 'PSNGB1', 'P11', 12000),
('M208', 'pisang bakar coklat keju', 'PSNGB1', 'P11', 12000),
('M209', 'pisang bakar coklat strawberry', 'PSNGB1', 'P11', 12000),
('M210', 'roti bakar coklat', 'RTB1', 'P11', 10000),
('M211', 'roti bakar keju', 'RTB1', 'P11', 10000),
('M212', 'roti bakar strawberry', 'RTB1', 'P11', 10000),
('M213', 'roti bakar coklat keju', 'RTB1', 'P11', 12000),
('M214', 'roti bakar coklat strawberry', 'RTB1', 'P11', 12000),
('M215', 'roti bakar pisang coklat', 'RTB1', 'P11', 12000),
('M216', 'roti bakar pisang coklat keju', 'RTB1', 'P11', 15000),
('M217', 'roti maryam original', 'RTM1', 'P11', 9000),
('M218', 'roti maryam coklat', 'RTM1', 'P11', 10000),
('M219', 'roti maryam keju', 'RTM1', 'P11', 10000),
('M220', 'roti maryam madu', 'RTM1', 'P11', 10000),
('M221', 'roti maryam coklat keju', 'RTM1', 'P11', 11000),
('M222', 'roti maryam madu keju', 'RTM1', 'P11', 11000),
('M223', 'roti maryam strawberry', 'RTM1', 'P11', 11000),
('M224', 'roti maryam blueberry', 'RTM1', 'P11', 11000),
('M225', 'roti maryam pedas', 'RTM1', 'P11', 11000),
('M226', 'roti maryam ice cream', 'RTM1', 'P11', 12000),
('M227', 'roti maryam green tea', 'RTM1', 'P11', 14000),
('M228', 'roti maryam mix 2 rasa', 'RTM1', 'P11', 14000),
('M229', 'jagung serut original', 'JGNGS1', 'P11', 7000),
('M230', 'jagung serut keju', 'JGNGS1', 'P11', 10000),
('M231', 'jagung serut coklat', 'JGNGS1', 'P11', 10000),
('M232', 'jagung serut coklat keju', 'JGNGS1', 'P11', 12000),
('M233', 'jagung serut strawberry', 'JGNGS1', 'P11', 10000),
('M234', 'jagung serut blueberry', 'JGNGS1', 'P11', 10000),
('M235', 'jagung serut greentea', 'JGNGS1', 'P11', 12000),
('M236', 'jagung serut pedas', 'JGNGS1', 'P11', 12000),
('M237', 'jagung serut balado', 'JGNGS1', 'P11', 12000),
('MN008', 'coba', 'RTM1', 'P11', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `id_pemesan` varchar(250) NOT NULL,
  `nama_pemesan` varchar(250) NOT NULL,
  `tanggal_pesan` datetime DEFAULT NULL,
  `id_user` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`id_pemesan`, `nama_pemesan`, `tanggal_pesan`, `id_user`, `status`) VALUES
('PS001', 'ahmad', '2022-01-17 00:00:00', '12', 'selesai'),
('PS002', 'yusuf', '2022-01-17 00:00:00', '12', 'selesai'),
('PS003', 'yoga', '2022-01-18 00:00:00', '12', NULL),
('PS004', 'hana', '2022-01-18 00:00:00', '12', 'selesai'),
('PS009', 'dimas', '2022-01-18 00:00:00', '12', 'selesai'),
('PS010', 'hanabi', '2022-01-19 00:00:00', '12', 'selesai'),
('PS012', 'coba', '2022-01-27 00:00:00', '12', 'selesai'),
('PS013', 'coba12', '2022-01-29 00:00:00', '12', 'selesai'),
('PS014', 'eko', '2022-01-29 00:00:00', 'U002', 'selesai'),
('PS015', 'coba1', '2022-02-03 00:00:00', '12', NULL),
('PS016', 'coba2', '2022-02-04 00:00:00', '12', NULL),
('PS017', 'ab', '2022-02-03 07:07:00', '12', NULL),
('PS018', 'ac', '2022-02-04 12:30:00', '12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `id_pemesan` varchar(250) NOT NULL,
  `kd_menu` varchar(250) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `id_pemesan`, `kd_menu`, `jumlah`, `total`) VALUES
(26001, 'PS002', 'M039', 3, NULL),
(26005, 'PS001', 'M196', 10, NULL),
(26006, 'PS001', 'M197', 1, NULL),
(26007, 'PS003', 'M006', 2, NULL),
(26009, 'PS004', 'M005', 2, NULL),
(26010, 'PS004', 'M007', 4, NULL),
(26015, 'PS001', 'M034', 3, NULL),
(26016, 'PS001', 'M053', 6, NULL),
(26017, 'PS001', 'M089', 2, NULL),
(26031, 'PS009', 'M008', 3, NULL),
(26032, 'PS009', 'M012', 1, NULL),
(26033, 'PS009', 'M130', 2, NULL),
(26035, 'PS010', 'M043', 4, NULL),
(26042, 'PS001', 'M001', 1, NULL),
(26043, 'PS001', 'M002', 2, NULL),
(26044, 'PS001', 'M003', 3, NULL),
(26046, 'PS001', 'M018', 2, NULL),
(26051, 'PS010', 'M046', 3, NULL),
(26057, 'PS012', 'M006', 2, NULL),
(26058, 'PS012', 'M014', 1, NULL),
(26060, 'PS012', 'M039', 4, NULL),
(26061, 'PS013', 'M001', 2, NULL),
(26062, 'PS013', 'M002', 4, NULL),
(26064, 'PS014', 'M043', 3, NULL),
(26065, 'PS014', 'M130', 5, NULL),
(26066, 'PS014', 'M043', 2, NULL),
(26067, 'PS003', 'M003', 5, NULL),
(26068, 'PS017', 'M002', 2, NULL),
(26069, 'PS017', 'M003', 10, NULL),
(26070, 'PS018', 'M005', 2, NULL),
(26071, 'PS018', 'M007', 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(250) NOT NULL,
  `username` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  `level` enum('admin','users') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `level`) VALUES
('12', 'dimas', '123', 'admin'),
('U002', 'yoga', '123abc', 'users');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_menu`
--
ALTER TABLE `jenis_menu`
  ADD PRIMARY KEY (`kd_jenis_menu`),
  ADD KEY `kd_jenis_produk` (`kd_jenis_produk`);

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`kd_jenis_produk`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`kd_menu`),
  ADD KEY `kd_jenis_produk` (`kd_jenis_produk`),
  ADD KEY `kd_jenis_menu` (`kd_jenis_menu`);

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`id_pemesan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`),
  ADD KEY `kd_menu` (`kd_menu`),
  ADD KEY `id_pemesan` (`id_pemesan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26072;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jenis_menu`
--
ALTER TABLE `jenis_menu`
  ADD CONSTRAINT `jenis_menu_ibfk_1` FOREIGN KEY (`kd_jenis_produk`) REFERENCES `jenis_produk` (`kd_jenis_produk`),
  ADD CONSTRAINT `jenis_menu_ibfk_2` FOREIGN KEY (`kd_jenis_produk`) REFERENCES `jenis_produk` (`kd_jenis_produk`),
  ADD CONSTRAINT `jenis_menu_ibfk_3` FOREIGN KEY (`kd_jenis_produk`) REFERENCES `jenis_produk` (`kd_jenis_produk`),
  ADD CONSTRAINT `jenis_menu_ibfk_4` FOREIGN KEY (`kd_jenis_produk`) REFERENCES `jenis_produk` (`kd_jenis_produk`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`kd_jenis_produk`) REFERENCES `jenis_produk` (`kd_jenis_produk`),
  ADD CONSTRAINT `menu_ibfk_2` FOREIGN KEY (`kd_jenis_menu`) REFERENCES `jenis_menu` (`kd_jenis_menu`),
  ADD CONSTRAINT `menu_ibfk_3` FOREIGN KEY (`kd_jenis_produk`) REFERENCES `jenis_produk` (`kd_jenis_produk`),
  ADD CONSTRAINT `menu_ibfk_4` FOREIGN KEY (`kd_jenis_menu`) REFERENCES `jenis_menu` (`kd_jenis_menu`),
  ADD CONSTRAINT `menu_ibfk_5` FOREIGN KEY (`kd_jenis_produk`) REFERENCES `jenis_produk` (`kd_jenis_produk`),
  ADD CONSTRAINT `menu_ibfk_6` FOREIGN KEY (`kd_jenis_menu`) REFERENCES `jenis_menu` (`kd_jenis_menu`),
  ADD CONSTRAINT `menu_ibfk_7` FOREIGN KEY (`kd_jenis_produk`) REFERENCES `jenis_produk` (`kd_jenis_produk`),
  ADD CONSTRAINT `menu_ibfk_8` FOREIGN KEY (`kd_jenis_menu`) REFERENCES `jenis_menu` (`kd_jenis_menu`);

--
-- Constraints for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD CONSTRAINT `pemesan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_6` FOREIGN KEY (`kd_menu`) REFERENCES `menu` (`kd_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pesanan_ibfk_7` FOREIGN KEY (`id_pemesan`) REFERENCES `pemesan` (`id_pemesan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
