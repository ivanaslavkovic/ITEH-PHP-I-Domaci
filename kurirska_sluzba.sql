-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2022 at 12:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kurirska_sluzba`
--
CREATE DATABASE IF NOT EXISTS `kurirska_sluzba` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `kurirska_sluzba`;

-- --------------------------------------------------------

--
-- Table structure for table `posiljka`
--

CREATE TABLE `posiljka` (
  `id` int(11) NOT NULL,
  `broj` int(11) NOT NULL,
  `tezina` double NOT NULL,
  `cena` double NOT NULL,
  `status` varchar(30) NOT NULL,
  `primalac_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posiljka`
--

INSERT INTO `posiljka` (`id`, `broj`, `tezina`, `cena`, `status`, `primalac_id`) VALUES
(5, 123, 321, 222, 'isporucena', 6),
(6, 23132, 25, 2500, 'isporucena', 7),
(7, 22, 22, 22, 'neisporucena', 8);

-- --------------------------------------------------------

--
-- Table structure for table `primalac`
--

CREATE TABLE `primalac` (
  `id` int(11) NOT NULL,
  `ime_prezime` varchar(100) NOT NULL,
  `adresa` varchar(100) NOT NULL,
  `grad` varchar(80) NOT NULL,
  `broj_telefona` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `primalac`
--

INSERT INTO `primalac` (`id`, `ime_prezime`, `adresa`, `grad`, `broj_telefona`) VALUES
(6, 'Marko Markovic', 'Adresa 5', 'Grad 6', 'Broj 4'),
(7, 'Jovana Jovanic', 'Adresa 4', 'Grad 2', 'Broj 1'),
(8, 'sa', 'ease', 'saesaseas', 'esea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posiljka`
--
ALTER TABLE `posiljka`
  ADD PRIMARY KEY (`id`),
  ADD KEY `primalac_id_spoljni_kljuc` (`primalac_id`);

--
-- Indexes for table `primalac`
--
ALTER TABLE `primalac`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posiljka`
--
ALTER TABLE `posiljka`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `primalac`
--
ALTER TABLE `primalac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posiljka`
--
ALTER TABLE `posiljka`
  ADD CONSTRAINT `primalac_id_spoljni_kljuc` FOREIGN KEY (`primalac_id`) REFERENCES `primalac` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
