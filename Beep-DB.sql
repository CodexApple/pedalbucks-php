-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 07:13 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beep_crms`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_accepted_task`
--

CREATE TABLE `tbl_accepted_task` (
  `id` int(11) NOT NULL,
  `user_uuid` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_id` int(11) DEFAULT NULL,
  `distance` int(11) DEFAULT NULL,
  `is_active` int(11) DEFAULT NULL,
  `is_challenge` int(11) DEFAULT NULL,
  `is_expired` int(11) DEFAULT NULL,
  `is_completed` int(11) DEFAULT NULL,
  `is_redeemed` int(11) DEFAULT NULL,
  `is_archive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_accepted_task`
--

INSERT INTO `tbl_accepted_task` (`id`, `user_uuid`, `task_id`, `distance`, `is_active`, `is_challenge`, `is_expired`, `is_completed`, `is_redeemed`, `is_archive`) VALUES
(1, 'b119-857c-de40-4adf', 1, 18, 0, 0, 0, 1, 0, 1),
(2, 'b119-857c-de40-4adf', 2, 2, 0, 0, 0, 0, 0, 1),
(5, 'b119-857c-de40-4adf', 3, 60, 1, 0, 0, 1, 0, 0),
(6, 'c1e4-6bd9-7fc2-4768', 1, 15, 0, 0, 0, 1, 0, 1),
(7, 'c1e4-6bd9-7fc2-4768', 2, 0, 1, 0, 0, 0, 0, 0),
(8, '5f21-6549-e2cf-4cfe', 1, 0, 1, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`id`, `name`) VALUES
(1, 'No Brand');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'No Category');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cyclist`
--

CREATE TABLE `tbl_cyclist` (
  `id` int(11) NOT NULL,
  `user_uuid` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_log`
--

CREATE TABLE `tbl_log` (
  `id` int(11) NOT NULL,
  `user_uuid` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_type` int(11) DEFAULT NULL,
  `log_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_description` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_date` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `log_time` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_read` int(11) DEFAULT NULL,
  `is_archive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `is_archive` int(11) DEFAULT NULL,
  `is_discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `brand_id`, `category_id`, `name`, `description`, `price`, `is_archive`, `is_discount`) VALUES
(1, 1, 1, 'Julie\'s Bakeshop Ensaimada', 'Coupon for 1 Julie\'s Bakeshop Ensaimada.', 10, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id` int(11) NOT NULL,
  `user_uuid` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `middlename` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cellphone` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type_choice` int(11) DEFAULT NULL,
  `distance_goal` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL,
  `is_archive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_profile`
--

INSERT INTO `tbl_profile` (`id`, `user_uuid`, `firstname`, `middlename`, `lastname`, `telephone`, `cellphone`, `address`, `birthday`, `type_choice`, `distance_goal`, `height`, `weight`, `calories`, `is_archive`) VALUES
(1, 'b119-857c-de40-4adf', 'Pedal', '', 'Bucks', '', '09154217926', 'somewhere', '2022-11-13', 3, 1, 200, 200, 1000, 0),
(2, 'c1e4-6bd9-7fc2-4768', 'Kirk', '', 'Espina', '', '09154217926', 'somewhere', '2022-11-14', 3, 1, 170, 60, 100, 0),
(3, '5f21-6549-e2cf-4cfe', 'Paul', '', 'Paul', '', '09154217926', 'somewhere', '2022-11-14', 1, 5, 180, 180, 180, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statistic`
--

CREATE TABLE `tbl_statistic` (
  `id` int(11) NOT NULL,
  `user_uuid` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `speed` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `distance` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `id` int(11) NOT NULL,
  `task_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_description` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_distance` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_difficulty` int(45) DEFAULT NULL,
  `task_reward` int(11) DEFAULT NULL,
  `is_challenge` int(11) DEFAULT NULL,
  `is_expired` int(11) DEFAULT NULL,
  `is_archive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`id`, `task_name`, `task_description`, `task_distance`, `task_difficulty`, `task_reward`, `is_challenge`, `is_expired`, `is_archive`) VALUES
(1, 'Cycle for 15 meters', 'Cycle for 15 meters to receive a reward.', '15', 1, 100, 0, 0, 0),
(2, 'Cycle for 20 meters', 'Cycle for 20 meters to receive a reward.', '20', 2, 100, 0, 0, 0),
(3, 'Cycle for 30 meters', 'Cycle for 30 meters to receive a reward.', '30', 3, 300, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `uuid` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `old_password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datejoined` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` int(11) DEFAULT NULL,
  `is_firstjoin` int(11) DEFAULT NULL,
  `is_archive` int(11) DEFAULT NULL,
  `is_banned` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `uuid`, `username`, `email`, `password`, `old_password`, `datejoined`, `usertype`, `is_firstjoin`, `is_archive`, `is_banned`) VALUES
(1, 'b119-857c-de40-4adf', 'pedalbucks', 'pedalbucks@pedalbucks.com', '$2y$10$GGfrshv/Zbj4r1xmc6L0TO1TAKRvFu.ZZCcXytkExD17ncdwZIzze', '$2y$10$GGfrshv/Zbj4r1xmc6L0TO1TAKRvFu.ZZCcXytkExD17ncdwZIzze', '2022-11-13 14:43:10', NULL, 0, 0, 0),
(2, 'dda7-f24b-b221-49b2', 'paulkirk', 'paulkirk@paulkirk.com', '$2y$10$HNLUfBIl41aGYwFRPqsMaOHvJkMaOi3dw9dOl22hYydfL67LBer5C', '$2y$10$HNLUfBIl41aGYwFRPqsMaOHvJkMaOi3dw9dOl22hYydfL67LBer5C', '2022-11-13 20:13:47', NULL, 0, 0, 0),
(3, 'c1e4-6bd9-7fc2-4768', 'kirkkirk', 'kirkkirk@kirk.com', '$2y$10$YHcZuh4BOoTW.vM/SdOfV.HqcV8AYNzqHQrLf2thG/9AuAi/Crin.', '$2y$10$YHcZuh4BOoTW.vM/SdOfV.HqcV8AYNzqHQrLf2thG/9AuAi/Crin.', '2022-11-13 20:19:48', NULL, 0, 0, 0),
(4, '5f21-6549-e2cf-4cfe', 'paulpaul', 'paulpaul@paul.com', '$2y$10$stkzT2VAAWA/9mavahDRfeW5L7LJymzsjYoUAdsJUJBK.uO41BK3C', '$2y$10$stkzT2VAAWA/9mavahDRfeW5L7LJymzsjYoUAdsJUJBK.uO41BK3C', '2022-11-13 20:38:15', NULL, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_accepted_task`
--
ALTER TABLE `tbl_accepted_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cyclist`
--
ALTER TABLE `tbl_cyclist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_log`
--
ALTER TABLE `tbl_log`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_statistic`
--
ALTER TABLE `tbl_statistic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_task`
--
ALTER TABLE `tbl_task`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_accepted_task`
--
ALTER TABLE `tbl_accepted_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_statistic`
--
ALTER TABLE `tbl_statistic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
