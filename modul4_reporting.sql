-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2023 at 09:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modul4_reporting`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `cogs` bigint(20) NOT NULL,
  `selling_price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `qty`, `cogs`, `selling_price`) VALUES
(1, 'Espresso Machine', 23, 810399, 1054100);

-- --------------------------------------------------------

--
-- Table structure for table `product_log`
--

CREATE TABLE `product_log` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `operator` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `log_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product_log`
--

INSERT INTO `product_log` (`id`, `product_id`, `qty`, `status`, `operator`, `origin`, `destination`, `log_date`) VALUES
(1, 1, 6, 'arrival', 'Production Staff 1', 'Workstation 3', 'Production', '2023-03-21 08:00:00'),
(2, 1, 6, 'departure', 'Production Staff 1', 'Production', 'Warehouse', '2023-03-23 03:33:00'),
(3, 1, 4, 'finished', 'Operator WS1', 'Workstation 1', '', '2023-03-23 08:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `raw_material`
--

CREATE TABLE `raw_material` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `raw_material`
--

INSERT INTO `raw_material` (`id`, `name`, `qty`, `price`) VALUES
(12, 'Bottom Base', 2, 64963),
(13, 'Bushing 1', 4, 4512),
(14, 'Bushing 2', 4, 3126),
(15, 'Lower Arm', 4, 2383),
(16, 'Power Support', 4, 8382),
(17, 'Upper Base', 2, 41067),
(18, 'Upper Arm', -4, 5104),
(19, 'Center Support', 8, 12303);

-- --------------------------------------------------------

--
-- Table structure for table `raw_material_log`
--

CREATE TABLE `raw_material_log` (
  `id` int(11) NOT NULL,
  `raw_material_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `operator` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `log_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `raw_material_log`
--

INSERT INTO `raw_material_log` (`id`, `raw_material_id`, `qty`, `status`, `operator`, `origin`, `destination`, `log_date`) VALUES
(1, 19, 8, 'arrival', 'Production Staff 1', 'Warehouse', 'Production', '2023-03-20 03:36:20'),
(2, 16, 4, 'arrival', 'Production Staff 1', 'Warehouse', 'Production', '2023-03-20 03:38:50'),
(3, 17, 2, 'arrival', 'Production Staff 1', 'Warehouse', 'Production', '2023-03-20 03:39:05'),
(4, 12, 2, 'arrival', 'Production Staff 1', 'Warehouse', 'Production', '2023-03-20 03:39:24'),
(5, 13, 4, 'arrival', 'Production Staff 1', 'Warehouse', 'Production', '2023-03-19 03:49:43'),
(6, 14, 4, 'arrival', 'Production Staff 1', 'Warehouse', 'Production', '2023-03-19 03:49:47'),
(7, 18, 4, 'arrival', 'Production Staff 1', 'Warehouse', 'Production', '2023-03-19 03:49:55'),
(8, 15, 4, 'arrival', 'Production Staff 1', 'Warehouse', 'Production', '2023-03-19 03:50:00'),
(9, 15, 8, 'departure', 'Production Staff 1', 'Production', 'Workstation 1', '2023-03-22 06:00:00'),
(10, 18, 8, 'departure', 'Production Staff 1', 'Production', 'Workstation 1', '2023-03-22 06:01:54'),
(11, 14, 8, 'departure', 'Production Staff 1', 'Production', 'Workstation 1', '2023-03-22 06:02:02'),
(12, 13, 8, 'departure', 'Production Staff 1', 'Production', 'Workstation 1', '2023-03-22 06:02:08'),
(13, 18, 8, 'departure', 'Production Staff 1', 'Production', 'Workstation 1', '2023-03-22 06:02:14'),
(14, 16, 8, 'departure', 'Production Staff 1', 'Production', 'Workstation 1', '2023-03-22 06:05:54'),
(15, 17, 4, 'departure', 'Production Staff 1', 'Production', 'Workstation 1', '2023-03-22 06:06:13'),
(16, 19, 16, 'departure', 'Production Staff 1', 'Production', 'Workstation 1', '2023-03-22 06:08:23'),
(17, 12, 4, 'departure', 'Production Staff 1', 'Production', 'Workstation 1', '2023-03-22 06:08:36'),
(50, 19, 16, 'arrival', 'Operator WS1', 'Production', 'Workstation 1', '2023-03-23 14:20:58'),
(51, 15, 8, 'arrival', 'Operator WS1', 'Production', 'Workstation 1', '2023-03-23 14:24:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `workstation` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `name`, `role`, `workstation`) VALUES
(1, 'admin_ensyse', 'e10adc3949ba59abbe56e057f20f883e', 'Admin', 'rl_admin', NULL),
(2, 'productionstaff', 'e10adc3949ba59abbe56e057f20f883e', 'Production Staff 1', 'rl_productionstaff', NULL),
(3, 'productionspv', 'e10adc3949ba59abbe56e057f20f883e', 'Production Supervisor 1', 'rl_productionspv', NULL),
(4, 'operator1', 'e10adc3949ba59abbe56e057f20f883e', 'Operator WS1', 'rl_workstation', 'Workstation 1'),
(5, 'operator2', 'e10adc3949ba59abbe56e057f20f883e', 'Operator WS2', 'rl_workstation', 'Workstation 2'),
(6, 'operator3', 'e10adc3949ba59abbe56e057f20f883e', 'Operator WS3', 'rl_workstation', 'Workstation 3');

-- --------------------------------------------------------

--
-- Table structure for table `wip`
--

CREATE TABLE `wip` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `wip`
--

INSERT INTO `wip` (`id`, `name`, `qty`) VALUES
(1, 'Bottom Base Assembly', -8),
(2, 'Pressure Water Assembly', -4),
(3, 'Final Assembly Espresso Machine', 4);

-- --------------------------------------------------------

--
-- Table structure for table `wip_detail`
--

CREATE TABLE `wip_detail` (
  `id` int(11) NOT NULL,
  `wip_id` int(11) NOT NULL,
  `raw_material_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `wip_detail`
--

INSERT INTO `wip_detail` (`id`, `wip_id`, `raw_material_id`, `qty`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(8, 5, 2, 1),
(9, 5, 3, 1),
(10, 6, 4, 2),
(11, 6, 5, 2),
(12, 2, 3, 1),
(13, 2, 4, 1),
(14, 1, 16, 2),
(15, 1, 17, 1),
(16, 1, 19, 4),
(17, 1, 12, 1),
(18, 2, 13, 2),
(19, 2, 14, 2),
(20, 2, 18, 2),
(21, 2, 15, 2);

-- --------------------------------------------------------

--
-- Table structure for table `wip_log`
--

CREATE TABLE `wip_log` (
  `id` int(11) NOT NULL,
  `wip_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `operator` varchar(255) NOT NULL,
  `origin` varchar(255) NOT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `log_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `wip_log`
--

INSERT INTO `wip_log` (`id`, `wip_id`, `qty`, `status`, `operator`, `origin`, `destination`, `log_date`) VALUES
(1, 1, 4, 'arrival', 'Operator WS1', 'Production', 'Workstation 1', '2023-03-22 06:33:47'),
(2, 2, 4, 'arrival', 'Operator WS1', 'Production', 'Workstation 1', '2023-03-22 06:34:51'),
(25, 3, 4, 'finished', 'Operator WS1', 'Workstation 1', '', '2023-03-23 14:40:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_log`
--
ALTER TABLE `product_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raw_material`
--
ALTER TABLE `raw_material`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `raw_material_log`
--
ALTER TABLE `raw_material_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wip`
--
ALTER TABLE `wip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wip_detail`
--
ALTER TABLE `wip_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wip_log`
--
ALTER TABLE `wip_log`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product_log`
--
ALTER TABLE `product_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `raw_material`
--
ALTER TABLE `raw_material`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `raw_material_log`
--
ALTER TABLE `raw_material_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `wip`
--
ALTER TABLE `wip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `wip_detail`
--
ALTER TABLE `wip_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `wip_log`
--
ALTER TABLE `wip_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
