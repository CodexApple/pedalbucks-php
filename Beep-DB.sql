-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 09:48 AM
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
(1, '6a44-4131-4bba-47dc', 2, 32, 0, 0, 0, 1, 1, 1),
(2, '6a44-4131-4bba-47dc', 1, 22, 0, 0, 0, 1, 1, 1);

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
-- Table structure for table `tbl_economy`
--

CREATE TABLE `tbl_economy` (
  `id` int(11) NOT NULL,
  `user_uuid` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_points` int(11) DEFAULT NULL,
  `is_archive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_economy`
--

INSERT INTO `tbl_economy` (`id`, `user_uuid`, `user_points`, `is_archive`) VALUES
(1, '6a44-4131-4bba-47dc', 703, 1),
(2, '2d16-a447-2eb2-4eef', 0, 1);

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

--
-- Dumping data for table `tbl_log`
--

INSERT INTO `tbl_log` (`id`, `user_uuid`, `log_type`, `log_name`, `log_description`, `log_date`, `log_time`, `is_read`, `is_archive`) VALUES
(1, 'bda0-ef3b-dfa5-4bca', 0, 'Created new Task', 'CodexApple created a new task, detailed link: pedalbucks.gq?taskid', '2022-11-14', '06:02:20', 1, 1),
(2, 'bda0-ef3b-dfa5-4bca', 0, 'Created new Task', 'CodexApple created a new task, detailed link: pedalbucks.gq?taskid', '2022-11-17', '06:26:48', 1, 1),
(3, 'bda0-ef3b-dfa5-4bca', 0, 'Created new Task', 'CodexApple created a new task, detailed link: pedalbucks.gq?taskid', '2022-11-24', '11:49:54', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id` int(11) NOT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `current_claim` int(11) DEFAULT NULL,
  `max_claim` int(11) DEFAULT NULL,
  `is_archive` int(11) DEFAULT NULL,
  `is_discount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id`, `brand_id`, `category_id`, `name`, `image`, `description`, `price`, `current_claim`, `max_claim`, `is_archive`, `is_discount`) VALUES
(1, 1, 1, 'Julie\'s Bakeshop Cheesy Ensaimada', 'https://cdn.discordapp.com/attachments/1001090233326112798/1028359385250021469/julie.png', 'Claim this voucher for one (1) free Julie\'s Cheesy Ensaimada', 250, 10, 11, 0, 0);

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
(1, 'bda0-ef3b-dfa5-4bca', 'Kristofer Martin', 'Ramirez', 'Pillarina', '123456789', '09123456789', 'Sample Address', '11/14/2000', 1, 1000, 150, 80, 2000, 0),
(2, '6a44-4131-4bba-47dc', 'Pedal', '', 'Bucks', '', '09154217926', 'somewhere', '2022-12-4', 3, 5, 180, 60, 500, 0),
(3, '2d16-a447-2eb2-4eef', 'Test', '', 'Tester', '', '09154217926', 'somewhere', '2022-12-12', 3, 1, 160, 60, 500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_redeem`
--

CREATE TABLE `tbl_redeem` (
  `id` int(11) NOT NULL,
  `user_uuid` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_used` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_redeem`
--

INSERT INTO `tbl_redeem` (`id`, `user_uuid`, `product_id`, `product_code`, `is_used`) VALUES
(1, '6a44-4131-4bba-47dc', 1, '81d2be38', 0),
(2, '6a44-4131-4bba-47dc', 1, 'abf9ecfb', 0),
(3, '6a44-4131-4bba-47dc', 1, 'b55f3a13', 0),
(4, '6a44-4131-4bba-47dc', 1, '56d0a613', 0),
(5, '6a44-4131-4bba-47dc', 1, 'db664d35', 0),
(6, '6a44-4131-4bba-47dc', 1, '656336eb', 0),
(7, '6a44-4131-4bba-47dc', 1, 'cbbbcf1f', 0),
(8, '6a44-4131-4bba-47dc', 1, 'dd77a1a1', 0),
(9, '6a44-4131-4bba-47dc', 1, '05c7e7aa', 0),
(10, '6a44-4131-4bba-47dc', 1, 'b40da288', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_statistic`
--

CREATE TABLE `tbl_statistic` (
  `id` int(11) NOT NULL,
  `user_uuid` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `datetime` bigint(20) DEFAULT NULL,
  `duration` bigint(20) DEFAULT NULL,
  `speed` float DEFAULT NULL,
  `distance` int(11) DEFAULT NULL,
  `calories` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_statistic`
--

INSERT INTO `tbl_statistic` (`id`, `user_uuid`, `datetime`, `duration`, `speed`, `distance`, `calories`) VALUES
(1, '6a44-4131-4bba-47dc', 1670407020654, 0, 2, 300, 200),
(2, '6a44-4131-4bba-47dc', 1670504618889, 0, 0.0506814, 2, 5),
(3, '6a44-4131-4bba-47dc', 1670585049663, 0, 0.417308, 4, 1),
(4, '6a44-4131-4bba-47dc', 1670585540591, 0, 0.506623, 5, 1),
(7, '6a44-4131-4bba-47dc', 1670829645174, 300, 2, 300, 200),
(8, 'bda0-ef3b-dfa5-4bca', 1670830221240, 243, 2, 300, 200),
(9, '6a44-4131-4bba-47dc', 1670832727312, 78, 0.303704, 21, 9),
(10, '6a44-4131-4bba-47dc', 1670834787938, 89, 0.268602, 23, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_task`
--

CREATE TABLE `tbl_task` (
  `id` int(11) NOT NULL,
  `task_name` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_description` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_distance` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `task_difficulty` int(11) DEFAULT NULL,
  `task_reward` int(11) DEFAULT NULL,
  `is_challenge` int(11) DEFAULT NULL,
  `is_expired` int(11) DEFAULT NULL,
  `is_archive` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_task`
--

INSERT INTO `tbl_task` (`id`, `task_name`, `task_description`, `task_distance`, `task_difficulty`, `task_reward`, `is_challenge`, `is_expired`, `is_archive`) VALUES
(1, 'Cycle for 20M', 'Cycle for 20 meters to receive a reward.', '20', 1, 100, 1, 0, 0),
(2, 'Cycle for 15M', 'Cycle for 15 meters to receive a reward.', '15', 1, 100, 1, 0, 0),
(3, 'Cycle for 30M', 'Cycle for 30 meters to receive a reward.', '30', 2, 150, 0, 0, 0);

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
(1, 'bda0-ef3b-dfa5-4bca', 'CodexApple', 'codexapple@pedalbucks.cf', '$2y$10$xhR3qDjVbwtiut2jWAyT4.qEJoHJs0JCqv938IXpO.yztGiYXm7Ji', '$2y$10$xhR3qDjVbwtiut2jWAyT4.qEJoHJs0JCqv938IXpO.yztGiYXm7Ji', '2022-11-14 05:56:31', 1, 0, 0, 0),
(2, '2d16-a447-2eb2-4eef', 'testtester', 'tester@test.com', '$2y$10$Y94wnj/B76n3g.UcwEyJq.ek4uR.W2K34QhKgY.H74ajucIKGGnXu', '$2y$10$Y94wnj/B76n3g.UcwEyJq.ek4uR.W2K34QhKgY.H74ajucIKGGnXu', '2022-11-20 11:05:03', 1, 0, 0, 0),
(3, '6a44-4131-4bba-47dc', 'pedalbucks', 'pedalbucks@pedalbucks.com', '$2y$10$9swtcPjJOcP/5GO43oyXEudoW7mvDr5595ELvePgb59OPFPGsBaVi', '$2y$10$9swtcPjJOcP/5GO43oyXEudoW7mvDr5595ELvePgb59OPFPGsBaVi', '2022-12-04 10:32:51', NULL, 0, 0, 0);

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
-- Indexes for table `tbl_economy`
--
ALTER TABLE `tbl_economy`
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
-- Indexes for table `tbl_redeem`
--
ALTER TABLE `tbl_redeem`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `tbl_economy`
--
ALTER TABLE `tbl_economy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_log`
--
ALTER TABLE `tbl_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
-- AUTO_INCREMENT for table `tbl_redeem`
--
ALTER TABLE `tbl_redeem`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_statistic`
--
ALTER TABLE `tbl_statistic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_task`
--
ALTER TABLE `tbl_task`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
