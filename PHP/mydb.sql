-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2024 at 06:07 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `id` mediumint(10) NOT NULL,
  `first_name` char(25) NOT NULL,
  `last_name` char(25) NOT NULL,
  `address` char(100) NOT NULL,
  `city` char(50) NOT NULL,
  `state` char(2) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`id`, `first_name`, `last_name`, `address`, `city`, `state`, `phone`, `email`) VALUES
(6, 'Vincent Lloyd', 'Siglos', 'BLK28 LOT6 Lagundi St., Starville Subd. Brgy. Calauag, Naga City, Camarines Sur, Philippines, 4400', 'Naga', 'PH', 2147483647, 'vincentsiglos26@gmail.com'),
(7, 'Vincent Lloyd', 'Siglos', 'BLK28 LOT6 Lagundi St., Starville Subd. Brgy. Calauag, Naga City, Camarines Sur, Philippines, 4400', 'Naga', 'PH', 123, 'vincentsiglos26@gmail.com'),
(8, 'Vincent Lloyd', 'Siglos', 'BLK28 LOT6 Lagundi St., Starville Subd. Brgy. Calauag, Naga City, Camarines Sur, Philippines, 4400', 'Naga', 'PH', 2147483647, 'vincentsiglos26@gmail.com'),
(9, '', '', '', '', '', 0, ''),
(10, 'Vincent Lloyd', 'Siglos', 'BLK28 LOT6 Lagundi St., Starville Subd. Brgy. Calauag, Naga City, Camarines Sur, Philippines, 4400', 'Naga', 'PH', 2147483647, 'vincentsiglos26@gmail.com'),
(11, 'Vincent Lloyd', 'Siglos', 'Lagundi St., Starville Subd. Brgy. Calauag', 'Naga', 'NY', 2147483647, 'vincentsiglos26@gmail.com'),
(12, 'Vincent Lloyd', 'Siglos', 'BLK28 LOT6 Lagundi St., Starville Subd. Brgy. Calauag, Naga City, Camarines Sur, Philippines, 4400', 'Naga', 'IL', 1231231231, 'vincentsiglos26@gmail.com'),
(13, 'Vincent Lloyd', 'Siglos', 'BLK28 LOT6 Lagundi St., Starville Subd. Brgy. Calauag, Naga City, Camarines Sur, Philippines, 4400', 'Naga', 'GU', 2147483647, 'vincentsiglos26@gmail.com'),
(14, 'Vincent Lloyd', 'Siglos', 'BLK28 LOT6 Lagundi St., Starville Subd. Brgy. Calauag, Naga City, Camarines Sur, Philippines, 4400', 'Naga', 'FL', 2147483647, 'vincentsiglos26@gmail.com'),
(15, 'Vincent Lloyd', 'Siglos', 'BLK28 LOT6 Lagundi St., Starville Subd. Brgy. Calauag, Naga City, Camarines Sur, Philippines, 4400', 'Naga', 'PR', 1112223334, 'vincentsiglos26@gmail.com'),
(16, 'Vince', 'Sig', 'Calauag', 'Naga', 'IA', 2147483647, 'vince@gmail.com'),
(17, 'Shan', 'Aman', 'Con Peq', 'Naga', 'VI', 398911024, 'shan@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` mediumint(10) NOT NULL,
  `card_type` tinyint(1) NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `card_exp_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_details`
--

INSERT INTO `payment_details` (`id`, `card_type`, `card_number`, `card_exp_date`) VALUES
(1, 0, '123', '123'),
(2, 123, '123', '123'),
(3, 0, '321', '321'),
(4, 0, 'asd', 'asd'),
(5, 0, '123', '123'),
(6, 0, '123', '123'),
(7, 0, '5864-5937-5962-4952', '08/26'),
(8, 0, '2323-5454-5656-7676', '11/11'),
(9, 72, '2222-2222-2222-2222', '22/22'),
(10, 2, '3453-5965-4589-6859', '11/24'),
(11, 1, '3333-3333-3333-3333', '01/29'),
(12, 10, '6969-6969-6969-6969', '12/69');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `id` mediumint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` mediumint(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
