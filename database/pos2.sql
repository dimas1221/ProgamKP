-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2021 at 04:34 PM
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
('1', 'coba', 'RTB1', 'P11', 10000),
('123', 'coba2', 'SSK1', 'P12', 12233),
('1233', 'coba5', 'PSNGN1', 'P11', 4567),
('45', 'coba3', 'SSK1', 'P12', 30000),
('A111MURMH', 'murni mini hot', 'MCLASSIC1', 'P12', 20000),
('A112MURSH', 'murni standar hot', 'MCLASSIC1', 'P12', 9000),
('A113MURMC', 'murni mini cold', 'MCLASSIC1', 'P12', 6000),
('A114MURSC', 'murni standar cold', 'MCLASSIC1', 'P12', 10000),
('A211STRAWMH', 'strawberi mini hot', 'MCLASSIC1', 'P12', 6000),
('A212STRAWSH', 'strawberi standar hot', 'MCLASSIC1', 'P12', 10000),
('A213STRAWMC', 'strawberi mini cold', 'MCLASSIC1', 'P12', 7000),
('A214STRAWSC', 'strawberi standar cold', 'MCLASSIC1', 'P12', 11000),
('A311ANGMH', 'anggur mini hot', 'MCLASSIC1', 'P12', 6000),
('A312ANGSH', 'anggur standar hot', 'MCLASSIC1', 'P12', 10000),
('A313ANGMC', 'anggur mini cold', 'MCLASSIC1', 'P12', 7000),
('A314ANGSC', 'anggur standar cold', 'MCLASSIC1', 'P12', 11000),
('A411MELMH', 'melon mini hot', 'MCLASSIC1', 'P12', 6000),
('A412MELSH', 'melon standar hot', 'MCLASSIC1', 'P12', 10000),
('A413MELMC', 'melon mini cold', 'MCLASSIC1', 'P12', 7000),
('A414MELSC', 'melon standar cold', 'MCLASSIC1', 'P12', 11000),
('A511DURMH', 'durian mini hot', 'MCLASSIC1', 'P12', 6000),
('A512DURSH', 'durian standar hot', 'MCLASSIC1', 'P12', 10000),
('A513DURMC', 'durian mini cold', 'MCLASSIC1', 'P12', 7000),
('A514DURSC', 'durian standar cold', 'MCLASSIC1', 'P12', 11000),
('A611MANGMH', 'mangga mini hot', 'MCLASSIC1', 'P12', 6000),
('A612MANGSH', 'mangga standar hot', 'MCLASSIC1', 'P12', 10000),
('A613MANGMC', 'mangga mini cold', 'MCLASSIC1', 'P12', 7000),
('A614MANGSC', 'mangga standar cold', 'MCLASSIC1', 'P12', 11000),
('A711VANMH', 'vanila mini hot', 'MCLASSIC1', 'P12', 6000),
('A712VANSH', 'vanila standar hot', 'MCLASSIC1', 'P12', 10000),
('A713VANMC', 'vanila mini cold', 'MCLASSIC1', 'P12', 7000),
('A714VANSC', 'vanila standar cold', 'MCLASSIC1', 'P12', 11000),
('A811COKMH', 'coklat mini hot', 'MCLASSIC1', 'P12', 7000),
('A812COKSH', 'coklat standar hot', 'MCLASSIC1', 'P12', 11000),
('A813COKMC', 'coklat mini cold', 'MCLASSIC1', 'P12', 8000),
('A814COKSC', 'coklat standar cold', 'MCLASSIC1', 'P12', 12000),
('A911GJMH', 'gula jawa mini hot', 'MCLASSIC1', 'P12', 7000),
('A912GJSH', 'gula jawa standar hot', 'MCLASSIC1', 'P12', 11000),
('A913GJMC', 'gula jawa mini cold', 'MCLASSIC1', 'P12', 8000),
('A914GJSC', 'gula jawa standar cold', 'MCLASSIC1', 'P12', 12000),
('B111KPMH', 'kopi mini hot', 'MCF1', 'P12', 9000),
('B112KPSH', 'kopi standar hot', 'MCF1', 'P12', 11000),
('B113KPMC', 'kopi mini cold', 'MCF1', 'P12', 10000),
('B114KPSC', 'kopi standar cold', 'MCF1', 'P12', 12000),
('B211KPGMH', 'kopi gingseng mini hot', 'MCF1', 'P12', 9000),
('B212KPGSH', 'kopi gingseng standar hot', 'MCF1', 'P12', 11000),
('B213KPGMC', 'kopi gingseng mini cold', 'MCF1', 'P12', 10000),
('B214KPGSC', 'kopi gingseng standar cold', 'MCF1', 'P12', 12000),
('B311KPNDMH', 'kopi ndeso mini hot', 'MCF1', 'P12', 9000),
('B312KPNDSH', 'kopi ndeso standar hot', 'MCF1', 'P12', 11000),
('B313KPNDMC', 'kopi ndeso mini cold', 'MCF1', 'P12', 10000),
('B314KPNDSC', 'kopi ndeso standar cold', 'MCF1', 'P12', 12000),
('B411CAPMH', 'cappucino mini hot', 'MCF1', 'P12', 9000),
('B412CAPSH', 'cappucino standar hot', 'MCF1', 'P12', 11000),
('B413CAPMC', 'cappucino mini cold', 'MCF1', 'P12', 10000),
('B414CAPSC', 'cappucino standar cold', 'MCF1', 'P12', 12000),
('B511WCFMH', 'white coffee mini hot', 'MCF1', 'P12', 9000),
('B512WCFSH', 'white coffee standar hot', 'MCF1', 'P12', 11000),
('B513WCFMC', 'white coffee mini cold', 'MCF1', 'P12', 10000),
('B514WCFSC', 'white coffee standar cold', 'MCF1', 'P12', 12000),
('B611VANLATMH', 'vanila latte mini hot', 'MCF1', 'P12', 11000),
('B612VANLATSH', 'vanila latte standar hot', 'MCF1', 'P12', 13000),
('B613VANLATMC', 'vanila latte mini cold', 'MCF1', 'P12', 12000),
('B614VANLATSC', 'vanila latte standar cold', 'MCF1', 'P12', 14000),
('B711TIRAMH', 'tiramisu mini hot', 'MCF1', 'P12', 11000),
('B712TIRASH', 'tiramisu standar hot', 'MCF1', 'P12', 13000),
('B713TIRAMC', 'tiramisu mini cold', 'MCF1', 'P12', 12000),
('B714TIRASC', 'tiramisu standar cold', 'MCF1', 'P12', 14000),
('C111JMH', 'jahe mini hot', 'MTD1', 'P12', 9000),
('C112JSH', 'jahe standar hot', 'MTD1', 'P12', 12000),
('C113JMC', 'jahe mini cold', 'MTD1', 'P12', 10000),
('C114JSC', 'jahe standar cold', 'MTD1', 'P12', 13000),
('C211JAMERMH', 'jahe merah mini hot', 'MTD1', 'P12', 9000),
('C212JAMERSH', 'jahe merah standar hot', 'MTD1', 'P12', 13000),
('C213JAMERMC', 'jahe merah mini cold', 'MTD1', 'P12', 10000),
('C214JAMERSC', 'jahe merah standar cold', 'MTD1', 'P12', 14000),
('C311MADMH', 'madu mini hot', 'MTD1', 'P12', 9000),
('C312MADSH', 'madu standar hot', 'MTD1', 'P12', 12000),
('C313MADMC', 'madu mini cold', 'MTD1', 'P12', 10000),
('C314MADSC', 'madu standar cold', 'MTD1', 'P12', 13000),
('C411TELMH', 'telur mini hot', 'MTD1', 'P12', 9000),
('C412TELSH', 'telur standar hot', 'MTD1', 'P12', 12000),
('C413TELMC', 'telur mini cold', 'MTD1', 'P12', 10000),
('C414TELSC', 'telur standar cold', 'MTD1', 'P12', 13000),
('C511TELMADMH', 'telor madu mini hot', 'MTD1', 'P12', 11000),
('C512TELMADSH', 'telor madu standar hot', 'MTD1', 'P11', 15000),
('C513TELMADMC', 'telor madu mini cold', 'MTD1', 'P12', 12000),
('C514TELMADSC', 'telor madu standar cold', 'MTD1', 'P12', 17000),
('C611TELMAJAMH', 'telur madu jahe mini hot', 'MTD1', 'P12', 11000),
('C612TELMAJASH', 'telur madu jahe stadar hot', 'MTD1', 'P12', 16000),
('C613TELMAJAMC', 'telur madu jahe mini cold', 'MTD1', 'P12', 12000),
('C614TELMAJASC', 'telur madu jahe standar cold', 'MTD1', 'P12', 17000),
('C711TELMAJAMERMH', 'telur madu jahe merah mini hot', 'MTD1', 'P12', 11000),
('C712TELMAJAMERSH', 'telur madu jahe merah standar hot', 'MTD1', 'P12', 17000),
('C713TELMAJAMERMC', 'telur madu jahe merah mini cold', 'MTD1', 'P12', 13000),
('C714TELMAJAMERSC', 'telur madu jahe merah standar cold', 'MTD1', 'P12', 18000),
('D111OREOMH', 'oreo mini hot', 'MSMOTH1', 'P12', 9000),
('D112OREOSH', 'oreo standar hot', 'MSMOTH1', 'P12', 11000),
('D113OREOMC', 'oreo mini cold', 'MSMOTH1', 'P12', 9000),
('D114OREOSC', 'oreo standar cold', 'MSMOTH1', 'P12', 14000),
('D211GTMH', 'goodtime mini hot', 'MSMOTH1', 'P12', 9000),
('D212GTSH', 'goodtime standar hot', 'MSMOTH1', 'P12', 11000),
('D213GTMC', 'goodtime mini cold', 'MSMOTH1', 'P12', 9000),
('D214GTSC', 'goodtime standar cold', 'MSMOTH1', 'P12', 14000),
('D311BGMH', 'bubble gum mini hot', 'MSMOTH1', 'P12', 9000),
('D312BGSH', 'bubble gum standar hot', 'MSMOTH1', 'P12', 11000),
('D313BGMC', 'bubble gum mini cold', 'MSMOTH1', 'P12', 9000),
('D314BGSC', 'bubble gum standar cold', 'MSMOTH1', 'P12', 14000),
('D411TAROMH', 'taro mini hot', 'MSMOTH1', 'P12', 9000),
('D412TAROSH', 'taro standar hot', 'MSMOTH1', 'P12', 11000),
('D413TAROMC', 'taro mini cold', 'MSMOTH1', 'P12', 9000),
('D414TAROSC', 'taro standar cold', 'MSMOTH1', 'P12', 14000),
('D511GTEAMH', 'green tea mini hot', 'MSMOTH1', 'P12', 9000),
('D512GTEASH', 'green tea standar hot', 'MSMOTH1', 'P12', 11000),
('D513GTEAMC', 'green tea mini cold', 'MSMOTH1', 'P12', 9000),
('D514GTEASC', 'green tea standar cold', 'MSMOTH1', 'P12', 14000),
('D611REDVELMH', 'red velvet mini hot', 'MSMOTH1', 'P12', 9000),
('D612REDVELSH', 'red velvet standar hot', 'MSMOTH1', 'P12', 11000),
('D613REDVELMC', 'red velvet mini cold', 'MSMOTH1', 'P12', 9000),
('D614REDVELSC', 'red velvet standar cold', 'MSMOTH1', 'P12', 14000),
('D711HAZMH', 'hazelnut mini hot', 'MSMOTH1', 'P12', 9000),
('D712HAZSH', 'hazelnut standar hot', 'MSMOTH1', 'P12', 11000),
('D713HAZMC', 'hazelnut mini cold', 'MSMOTH1', 'P12', 9000),
('D714HAZSC', 'hazelnut standar cold', 'MSMOTH1', 'P12', 14000),
('D811BANMH', 'banana mini hot', 'MSMOTH1', 'P12', 9000),
('D812BANSH', 'banana standar hot', 'MSMOTH1', 'P12', 11000),
('D813BANMC', 'banana mini cold', 'MSMOTH1', 'P12', 9000),
('D814BANSC', 'banana standar cold', 'MSMOTH1', 'P12', 14000),
('D911AVOMH', 'avocado mini hot', 'MSMOTH1', 'P12', 9000),
('D912AVOSH', 'avocado standar hot', 'MSMOTH1', 'P12', 11000),
('D913AVOMC', 'avocado mini cold', 'MSMOTH1', 'P12', 9000),
('D914AVOSC', 'avocado standar cold', 'MSMOTH1', 'P12', 14000),
('D921MILDIMH', 'milo dinosaur mini hot', 'MSMOTH1', 'P12', 10000),
('D922MILDISH', 'milo dinosaur standar hot', 'MSMOTH1', 'P12', 12000),
('D923MILDIMC', 'milo dinosaur mini cold', 'MSMOTH1', 'P12', 11000),
('D924MILDISC', 'milo dinosaur standar cold', 'MSMOTH1', 'P12', 15000),
('E111TOPP', 'ice cream menu minuman', 'XT1', 'P13', 4000),
('E112TOPP', 'keju menu minuman', 'XT1', 'P13', 4000),
('E211TOPP', 'keju menu jagung serut', 'XT1', 'P13', 3000),
('E212TOPP', 'mayonise menu jagung serut', 'XT1', 'P13', 3000),
('E311TOPP', 'rawit menu aneka mie', 'XT1', 'P13', 3000),
('F111MUR', 'susu kambing murni', 'SSK1', 'P12', 10000),
('F112STRAW', 'susu kambing strawberry', 'SSK1', 'P12', 10000),
('F113ANG', 'susu kambing anggur', 'SSK1', 'P12', 10000),
('F114MEL', 'susu kambing melon', 'SSK1', 'P12', 10000),
('F115DUR', 'susu kambing durian', 'SSK1', 'P12', 10000),
('F116MANG', 'susu kambing mangga', 'SSK1', 'P12', 10000),
('F117COK', 'susu kambing coklat', 'SSK1', 'P12', 10000),
('F117VAN', 'susu kambing vanila', 'SSK1', 'P12', 10000),
('F118GULJA', 'susu kambing gula jawa', 'SSK1', 'P12', 12000),
('F119KOP', 'susu kambing kopi', 'SSK1', 'P12', 13000),
('F211KOPGING', 'susu kambing kopi gingseng', 'SSK1', 'P12', 13000),
('F212KOPNDE', 'susu kambing kopi ndeso', 'SSK1', 'P12', 13000),
('F213CAP', 'susu kambing cappucino', 'SSK1', 'P12', 13000),
('F214WCOF', 'susu kambing white coffee', 'SSK1', 'P12', 13000),
('F215CARMAC', 'susu kambing caramel machiato', 'SSK1', 'P12', 13000),
('F216VANLAT', 'susu kambing vanila latte', 'SSK1', 'P12', 13000),
('F217TIRA', 'susu kambing tiramisu', 'SSK1', 'P12', 13000),
('F218JA', 'susu kambing jahe', 'SSK1', 'P12', 13000),
('F219JAMER', 'susu kambing jahe merah', 'SSK1', 'P12', 140000),
('F311MAD', 'susu kambing madu', 'SSK1', 'P12', 13000),
('F312TEL', 'susu kambing telur', 'SSK1', 'P12', 14000),
('F313TELMAD', 'susu kambing telur madu', 'SSK1', 'P12', 16000),
('F314TELMADJA', 'susu kambing telur madu jahe', 'SSK1', 'P12', 17000),
('F315TELMADJAMER', 'susu kambing telur madu jahe merah', 'SSK1', 'P12', 18000),
('F316OREO', 'susu kambing oreo', 'SSK1', 'P12', 13000),
('F317GT', 'susu kambing good time', 'SSK1', 'P12', 13000),
('F318BG', 'susu kambing bubble gum', 'SSK1', 'P12', 13000),
('F319TAR', 'susu kambing taro', 'SSK1', 'P12', 13000),
('F411GTEA', 'susu kambing green tea', 'SSK1', 'P12', 13000),
('F412REDVEL', 'susu kambing red velvet', 'SSK1', 'P12', 13000),
('F413HAZ', 'susu kambing hazelnut', 'SSK1', 'P12', 13000),
('F414BAN', 'susu kambing banana', 'SSK1', 'P12', 13000),
('F415AVO', 'susu kambing avocado', 'SSK1', 'P12', 13000),
('G111MEN', 'mendoan', 'CAM1', 'P11', 7000),
('G112KG', 'kentang goreng', 'CAM1', 'P11', 9000),
('G113KGB', 'kentang goreng balado', 'CAM1', 'P11', 9000),
('G114KGBBQ', 'kentang goreng bbq', 'CAM1', 'P11', 9000),
('G115TABA', 'tahu bakso', 'CAM1', 'P11', 9000),
('G116SOS', 'sosis', 'CAM1', 'P11', 9000),
('G117NUG', 'nugget', 'CAM1', 'P11', 10000),
('G118SOSBAK', 'sosis bakar', 'CAM1', 'P11', 10000),
('G119BABAK', 'bakso bakar', 'CAM1', 'P11', 10000),
('G211PAN', 'pancake', 'CAM1', 'P11', 12000),
('G212MIX', 'mix kentang sosis', 'CAM1', 'P11', 17000),
('H111ORI', 'pisang nugget original', 'PSNGN1', 'P11', 10000),
('H112COK', 'pisang nugget coklat', 'PSNGN1', 'P11', 12000),
('H113SRTAW', 'pisang nugget strawberry', 'PSNGN1', 'P11', 12000),
('H114KE', 'pisang nugget keju', 'PSNGN1', 'P11', 14000),
('H115OREO', 'pisang nugget oreo', 'PSNGN1', 'P11', 14000),
('H116GTEA', 'pisang nugget green tea', 'PSNGN1', 'P11', 17000),
('H117MX2', 'pisang nugget mix 2 rasa', 'PSNGN1', 'P11', 16000),
('H118MX3', 'pisang nugget mix 3 rasa', 'PSNGN1', 'P11', 17000),
('I111COK', 'pisang bakar coklat', 'PSNGB1', 'P11', 10000),
('I112KE', 'pisang bakar keju', 'PSNGB1', 'P11', 10000),
('I113STRAW', 'pisang bakar strawberry', 'PSNGB1', 'P11', 10000),
('I114BLU', 'pisang bakar blueberry', 'PSNGB1', 'P11', 12000),
('I115COKKE', 'pisang bakar coklat keju', 'PSNGB1', 'P11', 12000),
('I116COKSTRAW', 'pisang bakar coklat strawberry', 'PSNGB1', 'P11', 12000),
('J111COK', 'roti bakar coklat', 'RTB1', 'P11', 10000),
('J112KE', 'roti bakar keju', 'RTB1', 'P11', 10000),
('J113STRAW', 'roti bakar strawberry', 'RTB1', 'P11', 10000),
('J114COKKE', 'roti bakar coklat keju', 'RTB1', 'P11', 12000),
('J115COKSTRAW', 'roti bakar coklat strawberry', 'RTB1', 'P11', 12000),
('J116PISCOK', 'roti bakar pisang coklat', 'RTB1', 'P11', 12000),
('J117PISCOKKE', 'roti bakar pisang coklat keju', 'RTB1', 'P11', 15000),
('K111ORI', 'roti maryam original', 'RTM1', 'P11', 9000),
('K112COK', 'roti maryam coklat', 'RTM1', 'P11', 10000),
('K113KE', 'roti maryam keju', 'RTM1', 'P11', 10000),
('K114MAD', 'roti maryam madu', 'RTM1', 'P11', 10000),
('K115COKKE', 'roti maryam coklat keju', 'RTM1', 'P11', 11000),
('K116MADKE', 'roti maryam madu keju', 'RTM1', 'P11', 11000),
('K117STRAW', 'roti maryam strawberry', 'RTM1', 'P11', 11000),
('K118BLUE', 'roti maryam blueberry', 'RTM1', 'P11', 11000),
('K119P', 'roti maryam pedas', 'RTM1', 'P11', 11000),
('K211IC', 'roti maryam ice cream', 'RTM1', 'P11', 12000),
('K212GTEA', 'roti maryam green tea', 'RTM1', 'P11', 14000),
('K213MX2', 'roti maryam mix 2 rasa', 'RTM1', 'P11', 14000),
('L111ORI', 'jagung serut original', 'JGNGS1', 'P11', 7000),
('L112KE', 'jagung serut keju', 'JGNGS1', 'P11', 10000),
('L113COK', 'jagung serut coklat', 'JGNGS1', 'P11', 10000),
('L114COKKE', 'jagung serut coklat keju', 'JGNGS1', 'P11', 12000),
('L115STRAW', 'jagung serut strawberry', 'JGNGS1', 'P11', 10000),
('L116BLUE', 'jagung serut blueberry', 'JGNGS1', 'P11', 10000),
('L117GTEA', 'jagung serut greentea', 'JGNGS1', 'P11', 12000),
('L118P', 'jagung serut pedas', 'JGNGS1', 'P11', 12000),
('L119BAL', 'jagung serut balado', 'JGNGS1', 'P11', 12000),
('M111RG', 'mie rebus atau goreng', 'MI1', 'P11', 8000),
('M112RGT', 'mie rebus atau goreng telur', 'MI1', 'P11', 10000),
('M113RGBAK', 'mie rebus atau goreng bakso', 'MI1', 'P11', 10000),
('M114RGSOS', 'mie rebus atau goreng sosis', 'MI1', 'P11', 10000),
('M115RGTELBAK', 'mie rebus atau goreng telur bakso', 'MI1', 'P11', 12000),
('M116GREND', 'mie goreng rendang', 'MI1', 'P11', 12000),
('M117GAG', 'mie goreng ayam geprek', 'MCLASSIC1', 'P11', 10000),
('M118MISYU', 'misyu', 'MI1', 'P11', 12000),
('M119SPECIAL', 'mie special putri bumi', 'MI1', 'P11', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `id_pemesan` varchar(250) NOT NULL,
  `nama_pemesan` varchar(250) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `id_user` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`id_pemesan`, `nama_pemesan`, `tanggal_pesan`, `id_user`) VALUES
('PS001', 'cobasss', '2021-12-06', NULL),
('PS002', 'dimas', '2021-12-15', NULL),
('PS003', 'jolyne', '2021-12-21', '12'),
('PS004', 'polnaref', '2021-12-21', '20'),
('PS005', 'sakura', '2021-12-21', '12'),
('PS006', 'bucciarti', '2021-12-21', '20'),
('PS007', 'abdul', '2021-12-21', '20'),
('PS008', 'ramos', '2021-12-23', '12'),
('PS009', 'aurora', '2021-12-23', '12'),
('PS010', 'sakura', '2021-12-23', 'U001'),
('PS011', 'siti', '2021-12-23', 'U002');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pemesan` varchar(250) NOT NULL,
  `kd_menu` varchar(250) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pemesan`, `kd_menu`, `jumlah`, `total`) VALUES
('PS001', 'A114MURSC', 4, NULL),
('PS001', 'A214STRAWSC', 4, NULL),
('PS002', 'A212STRAWSH', 7, NULL),
('PS002', 'M111RG', 4, NULL),
('PS003', 'A214STRAWSC', 3, NULL),
('PS003', 'A312ANGSH', 7, NULL),
('PS003', 'A914GJSC', 3, NULL),
('PS004', 'A212STRAWSH', 5, NULL),
('PS005', 'A211STRAWMH', 12, NULL),
('PS006', 'A311ANGMH', 1, NULL),
('PS006', 'A613MANGMC', 2, NULL),
('PS006', 'A212STRAWSH', 1, NULL),
('PS006', 'A314ANGSC', 1, NULL),
('PS006', 'B711TIRAMH', 2, NULL),
('PS007', 'A211STRAWMH', 12, NULL),
('PS008', 'A313ANGMC', 4, NULL),
('PS008', 'D311BGMH', 2, NULL),
('PS008', 'K116MADKE', 3, NULL),
('PS009', 'C311MADMH', 1, NULL),
('PS009', 'M114RGSOS', 1, NULL),
('PS009', 'L118P', 2, NULL),
('PS010', 'A714VANSC', 4, NULL),
('PS010', 'G115TABA', 5, NULL),
('PS011', 'A211STRAWMH', 5, NULL),
('PS011', 'H114KE', 3, NULL);

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
('20', 'dio', 'abc', 'users'),
('U001', 'himura', 'abcd', 'users'),
('U002', 'daniel', '123ab', 'users');

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
  ADD KEY `kd_menu` (`kd_menu`),
  ADD KEY `id_pemesan` (`id_pemesan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

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
  ADD CONSTRAINT `pemesan_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `pesanan_ibfk_1` FOREIGN KEY (`kd_menu`) REFERENCES `menu` (`kd_menu`),
  ADD CONSTRAINT `pesanan_ibfk_2` FOREIGN KEY (`id_pemesan`) REFERENCES `pemesan` (`id_pemesan`),
  ADD CONSTRAINT `pesanan_ibfk_3` FOREIGN KEY (`kd_menu`) REFERENCES `menu` (`kd_menu`),
  ADD CONSTRAINT `pesanan_ibfk_4` FOREIGN KEY (`kd_menu`) REFERENCES `menu` (`kd_menu`),
  ADD CONSTRAINT `pesanan_ibfk_5` FOREIGN KEY (`id_pemesan`) REFERENCES `pemesan` (`id_pemesan`),
  ADD CONSTRAINT `pesanan_ibfk_6` FOREIGN KEY (`kd_menu`) REFERENCES `menu` (`kd_menu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
