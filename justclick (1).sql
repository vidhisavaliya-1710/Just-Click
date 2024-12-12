-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2024 at 05:11 PM
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
-- Database: `justclick`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`) VALUES
(1, 'vidhi', 'vidhi@gmail.com', 'vidhi123');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `message`) VALUES
(1, 'Tanisha', 'tanisha@gmail.com', 'Veey Good!!');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `guest` int(11) NOT NULL,
  `dates` date NOT NULL,
  `city` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `package` varchar(50) NOT NULL,
  `func` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `fullname`, `email`, `guest`, `dates`, `city`, `country`, `package`, `func`) VALUES
(1, 'smit', 'smit@gmail.com', 2, '2024-09-02', 'surat', 'india', 'Photography Package 6 day ₹ 3,00,000 - ₹ 4,00,000', 'Prewedding Shoot'),
(2, 'vidhi', 'vidhi@gmail.com', 3, '2024-09-05', 'vapi', 'india', 'Photography Package 6 day ₹ 3,00,000 - ₹ 4,00,000', 'Wedding Shoot'),
(3, 'tanisha', 'tanisha@gmail.com', 2, '2024-09-02', 'vadadora', 'india', 'Candid Photography per day ₹ 10,000 - ₹ 15,000', 'modeling Shoot'),
(5, 'radhi', 'radhi@gmail.com', 3, '2024-09-09', 'surat', 'india', 'Photography Package 1 day ₹ 40,000 - ₹ 50,000', 'Wedding Shoot'),
(6, 'smit', 'smit@gmail.com', 4, '2024-09-01', 'surat', 'india', 'Photography Package 2 day ', 'Prewedding Shoot'),
(7, 'bansi', 'bansi@gmail.com', 2, '2024-09-09', 'navsari', 'india', 'traditional Photography per day ', 'Wedding Shoot'),
(8, 'ayushi', 'ayushi@gmail.com', 3, '2024-09-12', 'mumbai', 'india', 'Candid Photography per day ', 'modeling Shoot'),
(10, 'nisha', 'nisha@gmail.com', 3, '2024-09-01', 'vadadora', 'india', 'Photography Package 2 day ', 'Wedding Shoot');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `package_name` varchar(50) NOT NULL,
  `amounts` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `package_name`, `amounts`, `type`, `img`) VALUES
(1, 'Photography Package 1 days ', '₹ 40,000 - ₹ 60,000', 'Wedding Shoot', 'silder_img5.jpg'),
(3, 'modeling shoot ', '₹ 3000 - ₹ 3500', 'PreWedding Shoot', 'post-06-1.jpg'),
(5, 'Photography Package 2 day ', '₹ 1,00,000 - ₹ 1,50,000', 'Engagement Shoot', 'silder_img4.webp');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `anumber` varchar(30) NOT NULL,
  `expiry` date NOT NULL,
  `cvv` int(11) NOT NULL,
  `cnumber` varchar(30) NOT NULL,
  `amount` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `anumber`, `expiry`, `cvv`, `cnumber`, `amount`) VALUES
(1, 'vidhi savaliya', '1234567890988', '2024-10-12', 234, '436578123546', '30,000'),
(3, 'nisha patel', '31345456674321', '2024-11-16', 453, '87576837843', '40,000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`) VALUES
(1, 'vidhi savaliya', 'vidhi1710', 'vidhi01@gmail.com', 'vidhi123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
