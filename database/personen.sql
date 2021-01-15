-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 09:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `personen`
--

-- --------------------------------------------------------

--
-- Table structure for table `personen`
--

CREATE TABLE `personen` (
  `id` int(11) NOT NULL,
  `Voornaam` varchar(30) NOT NULL,
  `Achternaam` varchar(30) NOT NULL,
  `Straat` varchar(50) NOT NULL,
  `Huisnummer` varchar(5) NOT NULL,
  `Postcode` varchar(6) NOT NULL,
  `Woonplaats` varchar(30) NOT NULL,
  `Telefoonnummer` int(10) NOT NULL,
  `TijdToegevoegd` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personen`
--

INSERT INTO `personen` (`id`, `Voornaam`, `Achternaam`, `Straat`, `Huisnummer`, `Postcode`, `Woonplaats`, `Telefoonnummer`, `TijdToegevoegd`) VALUES
(1, 'Pascal', 'Haverkamp', 'Vrouwslaan', '66', '1234PG', 'Assen', 620212324, '2021-01-11 21:47:34'),
(2, 'Kevin', 'Blank', 'Brickcity', '69', '2345BD', 'Assen', 645434642, '2020-12-17 13:51:20'),
(3, 'Sidian', 'Koné', 'Lamron', '24', '0624BD', 'Norg', 624422442, '2020-12-17 13:09:50'),
(9, 'Jayjay', 'Tromp', 'Trumplaan 420', '69', '6969HO', 'Drachten', 65882354, '2021-01-15 07:56:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personen`
--
ALTER TABLE `personen`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personen`
--
ALTER TABLE `personen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
