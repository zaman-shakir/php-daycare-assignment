-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 31, 2024 at 09:02 PM
-- Server version: 5.7.32
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daycare`
--

-- --------------------------------------------------------

--
-- Table structure for table `baby`
--

CREATE TABLE `baby` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `login_id` int(11) NOT NULL,
  `father_name` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `address` text,
  `mobile_no` varchar(20) DEFAULT NULL,
  `religion` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baby`
--

INSERT INTO `baby` (`id`, `name`, `qty`, `price`, `login_id`, `father_name`, `mother_name`, `birthday`, `address`, `mobile_no`, `religion`) VALUES
(1, 'Aarav Rahman', 2, '5000.00', 1, 'Mohammad Rahman', 'Fatima Rahman', '2019-03-15', 'Dhaka', '017748542164', NULL),
(2, 'Zara Ahmed', 3, '6000.00', 1, 'Ahmed Khan', 'Nadia Ahmed', '2018-07-22', 'Chittagong', '018739222418', NULL),
(3, 'Mohammad Adnan', 4, '5500.00', 1, 'Abdul Haque', 'Khadija Begum', '2017-11-10', 'Sylhet', '019450485629', NULL),
(4, 'Anaya Khan', 2, '5200.00', 1, 'Imran Khan', 'Sadia Khan', '2019-05-05', 'Rajshahi', '016034760923', NULL),
(5, 'Aryan Islam', 3, '5900.00', 1, 'Abdul Islam', 'Sumaiya Islam', '2018-08-12', 'Khulna', '017822347758', NULL),
(6, 'Amelia Hussain', 4, '5800.00', 1, 'Hussain Ahmed', 'Mehreen Hussain', '2017-12-25', 'Barishal', '018007456052', NULL),
(7, 'Rohan Ahmed', 2, '5300.00', 1, 'Nasir Ahmed', 'Nusrat Ahmed', '2019-06-30', 'Dhaka', '019570237016', NULL),
(8, 'Aisha Khan', 3, '5400.00', 1, 'Salman Khan', 'Ayesha Khan', '2018-09-18', 'Chittagong', '016828816958', NULL),
(9, 'Kabir Rahman', 4, '5700.00', 1, 'Kamrul Rahman', 'Fahmida Rahman', '2017-11-05', 'Sylhet', '017433373772', NULL),
(10, 'Alisha Ahmed', 2, '5100.00', 1, 'Ashraf Ahmed', 'Tasnim Ahmed', '2019-04-20', 'Rajshahi', '018680418019', NULL),
(11, 'Zayn Khan', 3, '5600.00', 1, 'Arif Khan', 'Shabnam Khan', '2018-10-11', 'Khulna', '016101968810', NULL),
(12, 'Anika Islam', 4, '5900.00', 1, 'Rafiqul Islam', 'Razia Islam', '2017-12-30', 'Barishal', '017468590026', NULL),
(13, 'Kian Hussain', 2, '5200.00', 1, 'Akram Hussain', 'Nahid Hussain', '2019-07-25', 'Dhaka', '019037043728', NULL),
(14, 'Nora Khan', 3, '5500.00', 1, 'Nadeem Khan', 'Farhana Khan', '2018-11-15', 'Chittagong', '016779448596', NULL),
(15, 'Ayman Rahman', 4, '5800.00', 1, 'Asif Rahman', 'Salma Rahman', '2017-10-20', 'Sylhet', '018786111826', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `username`, `password`) VALUES
(1, 'Mymuna', 'mymuna.iubat@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'shakir', 'zaman.shakirdev@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baby`
--
ALTER TABLE `baby`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_baby_1` (`login_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baby`
--
ALTER TABLE `baby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baby`
--
ALTER TABLE `baby`
  ADD CONSTRAINT `FK_baby_1` FOREIGN KEY (`login_id`) REFERENCES `login` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
