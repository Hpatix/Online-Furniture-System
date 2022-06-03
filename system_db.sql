-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2022 at 02:06 PM
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
-- Database: `system`
--

-- --------------------------------------------------------

--
-- Table structure for table `furniture`
--

CREATE TABLE `furniture` (
  `ID` int(3) NOT NULL,
  `Order_id` int(11) NOT NULL,
  `Furniture` varchar(30) NOT NULL,
  `Cost` int(20) NOT NULL,
  `Quantity` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `furniture`
--

INSERT INTO `furniture` (`ID`, `Order_id`, `Furniture`, `Cost`, `Quantity`) VALUES
(1, 0, 'Chairs', 2033, 3),
(2, 0, 'plates', 2000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `makeorders`
--

CREATE TABLE `makeorders` (
  `Order_id` int(3) NOT NULL,
  `S_id` int(3) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `F_ID` int(11) NOT NULL,
  `Furniture_name` varchar(30) NOT NULL,
  `Date` date NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Location` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makeorders`
--

INSERT INTO `makeorders` (`Order_id`, `S_id`, `Username`, `F_ID`, `Furniture_name`, `Date`, `Quantity`, `Location`) VALUES
(1, 1, 'Patrick', 1, 'Chairs', '2022-06-02', 3, 'Muhanga'),
(2, 1, 'Patrick', 1, 'Chairs', '2022-06-02', 4, 'Kigali'),
(437, 1, 'Patrick', 1, 'Chairs', '2022-06-02', 2323, 'Kigali');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `Username` varchar(15) DEFAULT NULL,
  `Password` char(15) DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Username`, `Password`, `Category`, `email`, `address`, `tel_no`) VALUES
(1, 'Patrick', '0000', 'Customer', NULL, NULL, NULL),
(2, 'Olivis', '123', 'Admin', NULL, NULL, NULL),
(3, 'bobo', '321', 'Customer', 'bobo@gmail.com', 'Muhanga', '32344e5'),
(4, 'bobo', '321', 'Customer', 'bobo@gmail.com', 'Muhanga', '32344e5'),
(5, 'John', '123', 'Customer', 'john@gmail', 'kgl', '78987987'),
(6, 'die', 'jjj', 'Customer', NULL, NULL, NULL),
(7, 'die', 'jjj', 'Customer', NULL, NULL, NULL),
(8, 'die', 'jjj', 'Customer', NULL, NULL, NULL),
(9, 'die', 'jjj', 'Customer', NULL, NULL, NULL),
(10, 'Patrick', 'ff', 'Customer', NULL, NULL, NULL),
(11, 'John', '123', 'Customer', NULL, NULL, NULL),
(12, 'doe', 'man', 'Customer', 'does@gmail.com', 'karenge', '333333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `furniture`
--
ALTER TABLE `furniture`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `makeorders`
--
ALTER TABLE `makeorders`
  ADD PRIMARY KEY (`Order_id`),
  ADD KEY `S_id` (`S_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `makeorders`
--
ALTER TABLE `makeorders`
  ADD CONSTRAINT `makeorders_ibfk_1` FOREIGN KEY (`S_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
