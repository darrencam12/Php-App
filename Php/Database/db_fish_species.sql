-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2018 at 09:05 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fish_species`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_fish`
--

CREATE TABLE `tbl_fish` (
  `id` int(11) NOT NULL,
  `fsh_FishName` varchar(60) NOT NULL,
  `fsh_ScientificName` varchar(80) NOT NULL,
  `fsh_Origin` varchar(50) NOT NULL,
  `fsh_Toxic` tinyint(4) NOT NULL,
  `fsh_Venomous` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_fish`
--

INSERT INTO `tbl_fish` (`id`, `fsh_FishName`, `fsh_ScientificName`, `fsh_Origin`, `fsh_Toxic`, `fsh_Venomous`) VALUES
(1, 'Red coat/red squirrelfish', 'Sargocentron rubrum', 'Indian Ocean, Pacific Ocean', 0, 0),
(2, 'Longjaw squirrelfish', 'Holocentrus adscensionis', 'tropical western and eastern Atlantic Ocean', 0, 0),
(3, 'Malabar grouper', 'Ephinephelus malabaricus', 'Indian Ocean, Pacific Ocean, Red Sea', 0, 0),
(4, 'Blue-spotted seabass', 'Cephalopholis taeniops', 'tropical eastern Atlantic Ocean', 0, 0),
(5, 'Yellowfin hind', 'Cephalopholis hemistiktos', 'Indian Ocean, Red Sea ', 0, 0),
(6, 'African sergeant', 'Abudefuduf hoefleri', 'tropical eastern Atlantic Ocean', 0, 0),
(7, 'Sergeant major', 'Abudefduf saxatilis', 'tropical western and eastern Atlantic Ocean', 0, 0),
(8, 'Indo-Pacific sergeant', 'Abudefduf vaigiensis', 'Indian Ocean, Pacific Ocean, Red Sea', 0, 0),
(9, 'Cocoa damselfish', 'Stegastes variabilis', 'tropical western Atlantic Ocean', 0, 0),
(10, 'Azure damselfish', 'Chrysiptera hemicyanea', 'Pacific Ocean', 0, 0),
(11, 'Doctorfish', 'Acanthurus chirurgus', 'western and eastern tropical Atlantic Ocean', 0, 1),
(12, 'Monrovian surgeonfish', 'Acanthurus monroviae', 'tropical eastern Atlantic Ocean', 0, 0),
(13, 'Blue tang surgeonfish', 'Acanthurus coeruleus', 'tropical western Atlantic Ocean', 0, 0),
(14, 'Yellowbar angelfish', 'Pomacanthus maculosus', 'Indian Ocean, Red Sea ', 0, 0),
(15, 'Guinea angelfish', 'Holocanthus africanus', 'tropical eastern Atlantic Ocean', 0, 0),
(16, 'Red Sea bannerfish', 'Heniochus intermedius', 'Indian Ocean, Red Sea ', 0, 0),
(17, 'African moonfish', 'Selene dorsalis', 'tropical eastern Atlantic Ocean', 0, 0),
(18, 'Atlantic tripletail', 'Lobotes surinamensis', 'Tropical and sub-tropical waters of all the oceans', 0, 0),
(19, 'Lesser amberjack', 'Seriola fasciata', 'Western Atlantic Ocean', 0, 0),
(20, 'Shrimp scad', 'Alepes djebaba', 'Indian Ocean, Pacific Ocean, Red Sea', 0, 0),
(21, 'Yellowstripe barracuda ', 'Sphyraena chrysotaenia', 'Indian Ocean, Pacific Ocean, Red Sea', 0, 0),
(22, 'Reticulated leatherjack', 'Stephanolepis diaspros', 'Indian Ocean, Red Sea', 0, 0),
(23, 'Barred knifejaw', 'Oplegnathus fasciatus', 'north-western Pacific Ocean', 0, 0),
(24, 'Dory snapper', 'Lutjanus fulviflamma', 'Indian Ocean, Pacific Ocean, Red Sea', 0, 0),
(25, 'Deep-sea rockfish', 'Pontinus kuhlii', 'eastern Atlantic Ocean', 0, 0),
(26, 'Dusky spinefoot', 'Siganus luridus', 'Indian Ocean, Red Sea', 0, 1),
(27, 'Silver-cheeked toadfish', 'Lagocephalus sceleratus', 'Indian Ocean, Pacific Ocean', 1, 0),
(28, 'Blue cornet fish', 'Fistularia commersonii', 'Indian Ocean, Pacific Ocean, Red Sea', 0, 0),
(29, 'Spotted scat', 'Scatophagus argus', 'Indian Ocean, Pacific Ocean', 0, 0),
(30, 'Lowfin chub', 'Kyphosus vaigiensis', 'Indian Ocean, Pacific Ocean, Red Sea', 0, 0),
(31, ' Porâ€™s goatfish', 'Upeneus pori', 'Indian Ocean, Red Sea', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_poster`
--

CREATE TABLE `tbl_poster` (
  `idPoster` int(10) UNSIGNED NOT NULL,
  `ptr_Name` varchar(60) NOT NULL,
  `ptr_Surname` varchar(45) NOT NULL,
  `ptr_Address` varchar(45) NOT NULL,
  `ptr_Date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_report`
--

CREATE TABLE `tbl_report` (
  `ID` int(10) UNSIGNED NOT NULL,
  `rpt_Name` varchar(60) NOT NULL,
  `rpt_Surname` varchar(70) NOT NULL,
  `rpt_Email` varchar(100) NOT NULL,
  `rpt_PhoneNo` int(11) NOT NULL,
  `rpt_descrpition` varchar(2000) NOT NULL,
  `rpt_Date` int(11) NOT NULL,
  `rpt_Location` varchar(100) NOT NULL,
  `rpt_Preserved` tinyint(4) NOT NULL,
  `rpt_Donate` tinyint(4) NOT NULL,
  `rpt_Checked` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `user_name`, `user_password`) VALUES
(1, 'Admin', '$2y$10$II0CDt8pDNG8gbGHpp1meeWd3Z9A0yI433kFMFkUxgCD4ElxSbbLK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_fish`
--
ALTER TABLE `tbl_fish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_poster`
--
ALTER TABLE `tbl_poster`
  ADD PRIMARY KEY (`idPoster`);

--
-- Indexes for table `tbl_report`
--
ALTER TABLE `tbl_report`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_fish`
--
ALTER TABLE `tbl_fish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_poster`
--
ALTER TABLE `tbl_poster`
  MODIFY `idPoster` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_report`
--
ALTER TABLE `tbl_report`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
