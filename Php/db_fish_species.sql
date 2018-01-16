-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2018 at 07:41 PM
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
(5, 'Blue-spotted seabass', 'Cephalopholis taeniops', 'tropical eastern Atlantic Ocean', 0, 0);

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

--
-- Dumping data for table `tbl_poster`
--

INSERT INTO `tbl_poster` (`idPoster`, `ptr_Name`, `ptr_Surname`, `ptr_Address`, `ptr_Date`) VALUES
(1, 'Darren', 'Camilleri', '93,romar triq lizbark tat- torok', 20180117),
(2, 'Darren', 'Camilleri', 'tirq il mandra', 1992802),
(3, 'Darren', 'Darren', 'tirq il mandra', 1992802);

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
  `rpt_Date` int(11) NOT NULL,
  `rpt_Location` varchar(100) NOT NULL,
  `rpt_Preserved` tinyint(4) NOT NULL,
  `rpt_Donate` tinyint(4) NOT NULL,
  `rpt_Checked` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_report`
--

INSERT INTO `tbl_report` (`ID`, `rpt_Name`, `rpt_Surname`, `rpt_Email`, `rpt_PhoneNo`, `rpt_Date`, `rpt_Location`, `rpt_Preserved`, `rpt_Donate`, `rpt_Checked`) VALUES
(1, 'Joe', 'Camilleri', 'joecam@gmail.com', 99652994, 20180117, 'Birzebbuigia', 1, 1, 0),
(2, 'Daniel', 'Cassar', 'Cas1@gmail.com', 99874224, 20180117, 'Birzebbuigia', 0, 1, 0),
(3, 'Robert', 'Grech', 'Rgrech@gmail.com', 99852312, 20180117, 'Birzebbuigia', 0, 0, 0),
(4, 'Merry', 'Psalia', 'MP@gmail.com', 99852224, 20180117, 'Birzebbuigia', 1, 1, 0),
(5, 'Darren', 'bigila', 'db@gmail.com', 99421452, 20180117, 'Birzebbuigia', 0, 1, 0);

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
(1, 'admin', '$2y$10$l6uUMyCmKrAzYDVkQtZ4fOgvf698R2SYRXQjg7W4Os3N6PDhnBTMK');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_poster`
--
ALTER TABLE `tbl_poster`
  MODIFY `idPoster` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_report`
--
ALTER TABLE `tbl_report`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
