-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 07, 2023 at 06:45 AM
-- Server version: 10.5.19-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ptrccom_ptrDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applyjob_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `institute` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `pass_year` int(11) DEFAULT NULL,
  `total_pass` int(11) DEFAULT NULL,
  `obt_mark` int(11) DEFAULT NULL,
  `cgp` int(11) DEFAULT NULL,
  `pic_matric` varchar(255) DEFAULT NULL,
  `pic_fsc` varchar(255) DEFAULT NULL,
  `pic_master` varchar(255) DEFAULT NULL,
  `pic_phd` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academics`
--

INSERT INTO `academics` (`id`, `applyjob_id`, `user_id`, `job_id`, `institute`, `degree`, `pass_year`, `total_pass`, `obt_mark`, `cgp`, `pic_matric`, `pic_fsc`, `pic_master`, `pic_phd`, `remember_token`, `created_at`, `updated_at`) VALUES
(11, 8, 6, 4, 'multan', 'matric', 2008, 850, 610, 67, '20220224145325.jpg', NULL, NULL, NULL, NULL, '2022-02-24 09:53:25', '2022-02-24 09:53:25'),
(12, 8, 6, 4, 'MULTAN', 'intermediate', 2010, 1100, 810, 71, '20220224145325.jpg', NULL, NULL, NULL, NULL, '2022-02-24 09:53:25', '2022-02-24 09:53:25'),
(13, 8, 6, 4, 'ISP', 'bachelor degree', 2015, 4, 4, 4, '20220224145325.jpg', NULL, NULL, NULL, NULL, '2022-02-24 09:53:25', '2022-02-24 09:53:25'),
(14, 9, 6, 5, 'bise multan', 'matric', 2011, 22, 63, 23, '20220224150456.jpg', NULL, NULL, NULL, NULL, '2022-02-24 10:04:56', '2022-02-24 10:04:56'),
(15, 9, 6, 5, 'bise multan', 'intermediate', 2015, 22, 22, 22, '20220224150456.jpg', NULL, NULL, NULL, NULL, '2022-02-24 10:04:56', '2022-02-24 10:04:56'),
(18, 10, 5, 1, 'lahore', 'matric', 2011, 850, 610, 67, '20220224151056.jpg', NULL, NULL, NULL, NULL, '2022-02-24 10:10:56', '2022-02-24 10:10:56'),
(19, 10, 5, 1, 'bahawalpur', 'intermediate', 2013, 1100, 785, 65, '20220224151056.jpg', NULL, NULL, NULL, NULL, '2022-02-24 10:10:56', '2022-02-24 10:10:56'),
(20, 11, 5, 4, 'sahiwal', 'matric', 2014, 850, 63, 76, '20220224151455.jpg', NULL, NULL, NULL, NULL, '2022-02-24 10:14:55', '2022-02-24 10:14:55'),
(21, 13, 6, 1, NULL, 'matric', NULL, NULL, 500, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 05:50:06', '2022-03-05 05:50:06'),
(22, 13, 6, 1, NULL, 'intermediate', NULL, NULL, 600, NULL, NULL, NULL, NULL, NULL, NULL, '2022-03-05 05:50:06', '2022-03-05 05:50:06'),
(23, 14, 6, 1, NULL, 'matric', NULL, NULL, 800, NULL, '20220305105140.jpg', NULL, NULL, NULL, NULL, '2022-03-05 05:51:40', '2022-03-05 05:51:40'),
(24, 14, 6, 1, NULL, 'intermediate', NULL, NULL, 900, NULL, '20220305105140.jpg', NULL, NULL, NULL, NULL, '2022-03-05 05:51:40', '2022-03-05 05:51:40'),
(25, 16, 6, 1, NULL, 'matric', NULL, NULL, 11, NULL, '20220305110106.jpg', NULL, NULL, NULL, NULL, '2022-03-05 06:01:06', '2022-03-05 06:01:06'),
(26, 16, 6, 1, NULL, 'intermediate', NULL, NULL, 22, NULL, '20220305110106.jpg', NULL, NULL, NULL, NULL, '2022-03-05 06:01:06', '2022-03-05 06:01:06'),
(27, 17, 6, 1, NULL, 'matric', NULL, NULL, 44, NULL, '1646478247.green-trees-nature.jpg', NULL, NULL, NULL, NULL, '2022-03-05 06:04:07', '2022-03-05 06:04:07'),
(28, 17, 6, 1, NULL, 'intermediate', NULL, NULL, 55, NULL, '1646478247.image.jpg', NULL, NULL, NULL, NULL, '2022-03-05 06:04:07', '2022-03-05 06:04:07'),
(29, 18, 6, 1, NULL, 'matric', NULL, NULL, 66, NULL, '1646478397.jpg', NULL, NULL, NULL, NULL, '2022-03-05 06:06:37', '2022-03-05 06:06:37'),
(30, 18, 6, 1, NULL, 'intermediate', NULL, NULL, 77, NULL, '1646478397.jpg', NULL, NULL, NULL, NULL, '2022-03-05 06:06:37', '2022-03-05 06:06:37'),
(31, 19, 6, 1, NULL, 'matric', NULL, NULL, 88, NULL, '1646478485.58cf13e9.jpg', NULL, NULL, NULL, NULL, '2022-03-05 06:08:05', '2022-03-05 06:08:05'),
(32, 19, 6, 1, NULL, 'intermediate', NULL, NULL, 99, NULL, '1646478485.download.jpg', NULL, NULL, NULL, NULL, '2022-03-05 06:08:05', '2022-03-05 06:08:05'),
(33, 20, 6, 1, NULL, 'matric', NULL, NULL, 12, NULL, '1646478638058cf13e9.jpg', NULL, NULL, NULL, NULL, '2022-03-05 06:10:38', '2022-03-05 06:10:38'),
(34, 21, 6, 1, NULL, 'matric', NULL, NULL, 14, NULL, '1646478738058cf13e9.jpg', NULL, NULL, NULL, NULL, '2022-03-05 06:12:18', '2022-03-05 06:12:18'),
(35, 21, 6, 1, NULL, 'intermediate', NULL, NULL, 15, NULL, '16464787391road-1072821__480.jpg', NULL, NULL, NULL, NULL, '2022-03-05 06:12:19', '2022-03-05 06:12:19'),
(36, 23, 8, 7, 'MULTAN', 'MATRIC', 2010, 850, 610, 72, '16472603930road-1072821__480.jpg', NULL, NULL, NULL, NULL, '2022-03-14 07:19:53', '2022-03-14 07:19:53'),
(37, 23, 8, 7, 'multan', 'INTERMEDIATE', 2012, 1100, 773, 71, '16472603931private-equity-resize.jpg', NULL, NULL, NULL, NULL, '2022-03-14 07:19:53', '2022-03-14 07:19:53'),
(38, 23, 8, 7, 'MULTAN', 'BSCS', 2015, 4, 3, 80, '1647260393258cf13e9.jpg', NULL, NULL, NULL, NULL, '2022-03-14 07:19:53', '2022-03-14 07:19:53'),
(39, 26, 8, 5, 'asa', 'matric', 2010, 250, 25, 42, '16472637010green-trees-nature.jpg', NULL, NULL, NULL, NULL, '2022-03-14 08:15:01', '2022-03-14 08:15:01'),
(40, 26, 8, 5, 'wwww', 'qqqq', 875, 8522, 14, 45, '16472637021green-trees-nature.jpg', NULL, NULL, NULL, NULL, '2022-03-14 08:15:02', '2022-03-14 08:15:02'),
(41, 27, 8, 5, 'asa', 'matric', 2010, 250, 25, 42, '16472637730green-trees-nature.jpg', NULL, NULL, NULL, NULL, '2022-03-14 08:16:13', '2022-03-14 08:16:13'),
(42, 27, 8, 5, 'wwww', 'qqqq', 875, 8522, 14, 45, '16472637731green-trees-nature.jpg', NULL, NULL, NULL, NULL, '2022-03-14 08:16:13', '2022-03-14 08:16:13'),
(43, 31, 16, 9, 'bise multan', 'matric', 2005, 500, 1000, 50, '164811907904.jpeg', NULL, NULL, NULL, NULL, '2022-03-24 10:51:19', '2022-03-24 10:51:19'),
(44, 33, 19, 4, 'bise multan', 'matric', 2003, 1000, 500, 50, '16485757720WhatsApp Image 2022-03-13 at 11.46.39 PM.jpeg', NULL, NULL, NULL, NULL, '2022-03-29 17:42:52', '2022-03-29 17:42:52'),
(45, 36, 38, 10, 'Bise Multan', 'Matric', 2010, 1050, 700, 67, '16496727470mexico.jpg', NULL, NULL, NULL, NULL, '2022-04-11 10:25:47', '2022-04-11 10:25:47'),
(46, 36, 38, 10, 'Bise Multan', 'Fsc pre Engg', 2014, 1100, 800, 73, '16496727471BhamCurzonSt_Sep19_View-01-North-West-Dusk.jpg', NULL, NULL, NULL, NULL, '2022-04-11 10:25:47', '2022-04-11 10:25:47'),
(47, 41, 38, 10, 'Bise Multan', 'Matric', 2010, 1050, 700, 67, '16500087680mexico.jpg', NULL, NULL, NULL, NULL, '2022-04-15 07:46:08', '2022-04-15 07:46:08'),
(48, 41, 38, 10, 'Bise Multan', 'Fsc pre Engg', 2014, 1100, 800, 73, '16500087681mexico.jpg', NULL, NULL, NULL, NULL, '2022-04-15 07:46:08', '2022-04-15 07:46:08'),
(49, 42, 38, 13, 'Bise Multan', 'Matric', 2010, 1050, 700, 67, '16500105910mexico.jpg', NULL, NULL, NULL, NULL, '2022-04-15 08:16:31', '2022-04-15 08:16:31'),
(50, 42, 38, 13, 'Bise Multan', 'Fsc pre Engg', 2014, 1100, 800, 73, '16500105911mexico.jpg', NULL, NULL, NULL, NULL, '2022-04-15 08:16:31', '2022-04-15 08:16:31'),
(51, 43, 41, 11, 'isp', 'matric', 2012, 230, 200, 4, '165009275902cd0714a5ee60e66f204618f01c43bb0.png', NULL, NULL, NULL, NULL, '2022-04-16 07:05:59', '2022-04-16 07:05:59'),
(52, 44, 38, 10, 'Bise Multan', 'Matric', 2010, 1050, 700, 67, '16500973210mexico.jpg', NULL, NULL, NULL, NULL, '2022-04-16 08:22:01', '2022-04-16 08:22:01'),
(53, 44, 38, 10, 'Bise Multan', 'Fsc pre Engg', 2014, 1100, 800, 73, '16500973211mexico.jpg', NULL, NULL, NULL, NULL, '2022-04-16 08:22:01', '2022-04-16 08:22:01'),
(54, 45, 38, 15, 'Bise Multan', 'Matric', 2013, 1050, 786, 75, '16691952660WhatsApp Image 2022-11-23 at 2.10.03 PM (1).jpeg', NULL, NULL, NULL, NULL, '2022-11-23 09:21:06', '2022-11-23 09:21:06'),
(55, 45, 38, 15, 'Bise Multan', 'Fsc pre Engg', 2015, 1100, 733, 67, '16691952661WhatsApp Image 2022-11-23 at 2.10.03 PM.jpeg', NULL, NULL, NULL, NULL, '2022-11-23 09:21:06', '2022-11-23 09:21:06'),
(56, 46, 38, 21, 'Bise Multan', 'Matric', 2013, 1050, 786, 75, '16692067120WhatsApp Image 2022-11-23 at 2.10.03 PM (1).jpeg', NULL, NULL, NULL, NULL, '2022-11-23 12:31:52', '2022-11-23 12:31:52'),
(57, 46, 38, 21, 'Bise Multan', 'Fsc pre Engg', 2015, 1100, 733, 67, '16692067121WhatsApp Image 2022-11-23 at 2.10.03 PM.jpeg', NULL, NULL, NULL, NULL, '2022-11-23 12:31:52', '2022-11-23 12:31:52'),
(58, 47, 38, 21, 'Bise Multan', 'Matric', 2013, 1050, 786, 75, '16692069070WhatsApp Image 2022-11-23 at 2.10.03 PM (1).jpeg', NULL, NULL, NULL, NULL, '2022-11-23 12:35:07', '2022-11-23 12:35:07'),
(59, 47, 38, 21, 'Bise Multan', 'Fsc pre Engg', 2015, 1100, 733, 67, '16692069071WhatsApp Image 2022-11-23 at 2.10.03 PM.jpeg', NULL, NULL, NULL, NULL, '2022-11-23 12:35:07', '2022-11-23 12:35:07'),
(60, 51, 5, 21, 'sahiwal', 'matric', 2014, 850, 63, 76, '16693725590yellow.jpg', NULL, NULL, NULL, NULL, '2022-11-25 10:35:59', '2022-11-25 10:35:59'),
(61, 52, 5, 21, 'sahiwal', 'matric', 2014, 850, 63, 76, '16693726290yellow.jpg', NULL, NULL, NULL, NULL, '2022-11-25 10:37:09', '2022-11-25 10:37:09'),
(62, 53, 5, 21, 'sahiwal', 'matric', 2014, 850, 63, 76, '16693726630yellow.jpg', NULL, NULL, NULL, NULL, '2022-11-25 10:37:43', '2022-11-25 10:37:43'),
(63, 54, 38, 21, 'Bise Multan', 'Matric', 2013, 1050, 786, 75, '16693747880WhatsApp Image 2022-11-23 at 2.10.03 PM (1).jpeg', NULL, NULL, NULL, NULL, '2022-11-25 11:13:08', '2022-11-25 11:13:08'),
(64, 54, 38, 21, 'Bise Multan', 'Fsc pre Engg', 2015, 1100, 733, 67, '16693747881WhatsApp Image 2022-11-23 at 2.10.03 PM.jpeg', NULL, NULL, NULL, NULL, '2022-11-25 11:13:08', '2022-11-25 11:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `apply_jobs`
--

CREATE TABLE `apply_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `apply_date` date NOT NULL,
  `uploadchallan` varchar(20) DEFAULT NULL,
  `challan_no` varchar(200) NOT NULL,
  `verify` int(2) NOT NULL DEFAULT 0,
  `center_id` int(11) DEFAULT NULL,
  `roll_no` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_jobs`
--

INSERT INTO `apply_jobs` (`id`, `user_id`, `job_id`, `apply_date`, `uploadchallan`, `challan_no`, `verify`, `center_id`, `roll_no`, `created_at`, `updated_at`) VALUES
(8, 6, 4, '2022-02-24', '20220309100404.docx', '', 0, NULL, '', '2022-02-24 09:53:25', '2022-02-24 09:53:25'),
(9, 6, 4, '2022-02-24', '20220303064947.jpg', '', 1, 4, 'CS301-000006', '2022-02-24 10:05:34', '2022-02-24 10:05:34'),
(10, 5, 1, '2022-02-24', NULL, '', 0, NULL, '', '2022-02-24 10:10:56', '2022-02-24 10:10:56'),
(11, 5, 4, '2022-02-24', '20220303064947.jpg', '', 1, 3, 'CS301-000006', '2022-02-24 10:14:55', '2022-02-24 10:14:55'),
(13, 6, 1, '2022-03-05', NULL, '', 0, NULL, '', '2022-03-05 05:50:06', '2022-03-05 05:50:06'),
(14, 6, 1, '2022-03-05', NULL, '', 0, NULL, '', '2022-03-05 05:51:40', '2022-03-05 05:51:40'),
(15, 6, 4, '2022-03-05', NULL, '', 1, 4, 'CS301-000003', '2022-03-05 05:58:23', '2022-03-05 05:58:23'),
(16, 6, 1, '2022-03-05', NULL, '', 0, NULL, '', '2022-03-05 06:01:06', '2022-03-05 06:01:06'),
(17, 6, 4, '2022-03-05', NULL, '', 1, 4, 'CS301-000004', '2022-03-05 06:04:06', '2022-03-05 06:04:06'),
(18, 6, 1, '2022-03-05', NULL, '', 0, NULL, '', '2022-03-05 06:06:37', '2022-03-05 06:06:37'),
(19, 6, 4, '2022-03-05', NULL, '', 1, 4, 'CS301-000005', '2022-03-05 06:08:05', '2022-03-05 06:08:05'),
(20, 6, 1, '2022-03-05', NULL, '', 0, NULL, '', '2022-03-05 06:10:37', '2022-03-05 06:10:37'),
(21, 6, 1, '2022-03-05', NULL, '', 0, NULL, '', '2022-03-05 06:12:18', '2022-03-05 06:12:18'),
(22, 8, 7, '2022-03-14', NULL, '', 0, NULL, NULL, '2022-03-14 07:19:17', '2022-03-14 07:19:17'),
(23, 8, 7, '2022-03-14', '20220314123142.jpg', '', 1, 3, 'IB officer-000001', '2022-03-14 07:19:53', '2022-03-14 07:19:53'),
(24, 8, 5, '2022-03-14', NULL, '', 0, NULL, NULL, '2022-03-14 08:11:40', '2022-03-14 08:11:40'),
(25, 8, 5, '2022-03-14', NULL, '', 0, NULL, NULL, '2022-03-14 08:12:27', '2022-03-14 08:12:27'),
(26, 8, 5, '2022-03-14', NULL, '', 0, NULL, NULL, '2022-03-14 08:15:01', '2022-03-14 08:15:01'),
(27, 8, 5, '2022-03-14', NULL, '', 0, NULL, NULL, '2022-03-14 08:16:13', '2022-03-14 08:16:13'),
(28, 13, 1, '2022-03-21', NULL, '1002', 0, NULL, NULL, '2022-03-21 14:45:48', '2022-03-21 14:45:48'),
(29, 15, 8, '2022-03-22', '20220322143207.jpg', '1003', 0, NULL, NULL, '2022-03-22 12:57:39', '2022-03-22 12:57:39'),
(30, 15, 8, '2022-03-22', '20220322143157.jpg', '1004', 0, NULL, NULL, '2022-03-22 12:59:09', '2022-03-22 12:59:09'),
(31, 16, 9, '2022-03-24', '20220324110153.jpeg', '1005', 1, 5, 'xyz-000001', '2022-03-24 10:51:19', '2022-03-24 10:51:19'),
(32, 11, 9, '2022-03-24', NULL, '1006', 0, NULL, NULL, '2022-03-24 13:51:46', '2022-03-24 13:51:46'),
(33, 19, 4, '2022-03-29', NULL, '1007', 0, NULL, NULL, '2022-03-29 17:42:52', '2022-03-29 17:42:52'),
(34, 38, 10, '2022-04-11', NULL, '1008', 0, NULL, NULL, '2022-04-11 09:51:00', '2022-04-11 09:51:00'),
(35, 38, 10, '2022-04-11', '20220412042245.jpg', '1009', 0, NULL, NULL, '2022-04-11 09:51:24', '2022-04-11 09:51:24'),
(36, 38, 10, '2022-04-11', '20220411174227.jpg', '1010', 1, 5, 'NAB001-000001', '2022-04-11 10:25:47', '2022-04-11 10:25:47'),
(37, 39, 10, '2022-04-11', NULL, '1011', 0, NULL, NULL, '2022-04-11 10:46:07', '2022-04-11 10:46:07'),
(38, 39, 10, '2022-04-12', NULL, '1012', 0, NULL, NULL, '2022-04-12 06:37:16', '2022-04-12 06:37:16'),
(39, 39, 10, '2022-04-12', NULL, '1013', 0, NULL, NULL, '2022-04-12 06:41:55', '2022-04-12 06:41:55'),
(40, 39, 11, '2022-04-12', '20220416063524.png', '1014', 0, NULL, NULL, '2022-04-12 06:42:48', '2022-04-12 06:42:48'),
(41, 38, 10, '2022-04-15', NULL, '1015', 0, NULL, NULL, '2022-04-15 07:46:08', '2022-04-15 07:46:08'),
(42, 38, 13, '2022-04-15', '20220415082214.png', '1016', 1, 5, '0023451-000001', '2022-04-15 08:16:31', '2022-04-15 08:16:31'),
(43, 41, 11, '2022-04-16', '20220416071304.pdf', '1017', 1, 4, '100001', '2022-04-16 07:05:59', '2022-04-16 07:05:59'),
(44, 38, 10, '2022-04-16', NULL, '1018', 0, NULL, NULL, '2022-04-16 08:22:01', '2022-04-16 08:22:01'),
(45, 38, 15, '2022-11-23', NULL, '1019', 0, NULL, NULL, '2022-11-23 09:21:06', '2022-11-23 09:21:06'),
(46, 38, 21, '2022-11-23', NULL, '1020', 0, NULL, NULL, '2022-11-23 12:31:52', '2022-11-23 12:31:52'),
(47, 38, 21, '2022-11-23', NULL, '1021', 0, NULL, NULL, '2022-11-23 12:35:07', '2022-11-23 12:35:07'),
(48, 43, 21, '2022-11-24', NULL, '1022', 0, NULL, NULL, '2022-11-24 10:54:17', '2022-11-24 10:54:17'),
(49, 43, 21, '2022-11-24', NULL, '1023', 0, NULL, NULL, '2022-11-24 10:54:37', '2022-11-24 10:54:37'),
(50, 43, 21, '2022-11-24', NULL, '1024', 0, NULL, NULL, '2022-11-24 10:56:13', '2022-11-24 10:56:13'),
(51, 5, 21, '2022-11-25', NULL, '1025', 0, NULL, NULL, '2022-11-25 10:35:59', '2022-11-25 10:35:59'),
(52, 5, 21, '2022-11-25', NULL, '1026', 0, NULL, NULL, '2022-11-25 10:37:09', '2022-11-25 10:37:09'),
(53, 5, 21, '2022-11-25', NULL, '1027', 0, NULL, NULL, '2022-11-25 10:37:43', '2022-11-25 10:37:43'),
(54, 38, 21, '2022-11-25', NULL, '1028', 0, NULL, NULL, '2022-11-25 11:13:08', '2022-11-25 11:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `banks`
--

CREATE TABLE `banks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `b_name` varchar(255) NOT NULL,
  `b_code` int(11) NOT NULL,
  `account_no` varchar(100) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banks`
--

INSERT INTO `banks` (`id`, `b_name`, `b_code`, `account_no`, `owner`, `created_at`, `updated_at`) VALUES
(1, 'Allied Bank', 318, '03180010095334530024', 'Punjab Testing and Recruitment Council', NULL, '2022-11-23 12:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

CREATE TABLE `centers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date_time` date DEFAULT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `challan`
--

CREATE TABLE `challan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `pic_challan` varchar(255) NOT NULL,
  `paid_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departs`
--

CREATE TABLE `departs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deprt_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departs`
--

INSERT INTO `departs` (`id`, `deprt_name`, `created_at`, `updated_at`) VALUES
(13, 'Punjab Testing and Recruitment Council', '2022-11-23 07:26:56', '2022-11-23 07:26:56');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applyjob_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `designaation` varchar(255) NOT NULL,
  `orga_name` varchar(255) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `retired` enum('Yes','No') NOT NULL,
  `dept_name` varchar(255) DEFAULT NULL,
  `pic_discharge` text DEFAULT NULL,
  `experience` enum('Yes','No') NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `applyjob_id`, `user_id`, `job_id`, `designaation`, `orga_name`, `start_date`, `end_date`, `retired`, `dept_name`, `pic_discharge`, `experience`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 8, 6, 4, 'Web developer', 'United software solution', '2020-02-12', '2022-01-01', 'Yes', 'Police Department', '20220224145325.jpg', 'Yes', NULL, '2022-02-24 09:53:25', '2022-02-24 09:53:25'),
(2, 9, 6, 5, 'developer', 'mj coder', '2022-02-25', '2022-03-04', 'Yes', 'army', '20220224145325.jpg', 'Yes', NULL, '2022-02-24 10:05:34', '2022-02-24 10:05:34'),
(3, 10, 5, 1, 'web coder', 'mj coders', '2022-02-17', '2022-02-25', 'Yes', 'babar', '20220224145325.jpg', 'Yes', NULL, '2022-02-24 10:10:56', '2022-02-24 10:10:56'),
(4, 11, 5, 4, 'coder', 'united', '2022-02-25', '2022-02-26', 'Yes', 'babar retired', '20220224145325.jpg', 'Yes', NULL, '2022-02-24 10:14:55', '2022-02-24 10:14:55'),
(5, 11, 5, 4, 'it manager', 'united', '2022-02-23', '2022-03-05', 'Yes', 'babar retired', '20220224145325.jpg', 'Yes', NULL, '2022-02-24 10:14:55', '2022-02-24 10:14:55'),
(6, 27, 8, 5, 'qqq', 'qqqqq', '2022-03-15', '2022-03-24', 'No', NULL, NULL, 'Yes', NULL, '2022-03-14 08:16:13', '2022-03-14 08:16:13'),
(7, 27, 8, 5, 'qqqqqqq', 'qqqqqqqq', '2022-03-29', '2022-03-25', 'No', NULL, NULL, 'Yes', NULL, '2022-03-14 08:16:14', '2022-03-14 08:16:14'),
(8, 45, 38, 15, 'Marketing Manager', 'Habib Rafiq', '2021-08-12', '2022-09-30', 'No', NULL, NULL, 'Yes', NULL, '2022-11-23 09:21:06', '2022-11-23 09:21:06'),
(9, 53, 5, 21, 'coder', 'united', NULL, NULL, 'No', 'babar retired', NULL, 'Yes', NULL, '2022-11-25 10:37:43', '2022-11-25 10:37:43'),
(10, 53, 5, 21, 'it manager', 'united', NULL, NULL, 'No', 'babar retired', NULL, 'Yes', NULL, '2022-11-25 10:37:43', '2022-11-25 10:37:43');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'From where can I get the information about PTRC-PK Tests and  Jobs ?', 'You can get the Information about PTRC-PK tests from the official website of PTRC (www.ptrc.com.pk) and also from print media advertisements.', '2022-03-15 07:17:43', '2022-06-08 04:04:48'),
(2, 'How can I apply for a job?', 'You can apply for the job by clicking on apply button, right next to the job description.', '2022-03-18 02:09:57', '2022-06-08 04:00:17'),
(3, 'How to get registered on PTRC-Pk?', 'You can register on PTRC-Pk, by clicking the register button, enter your email and set the password which is easy for you to remember.', '2022-03-18 02:12:26', '2022-06-08 03:47:59'),
(5, 'What documents are required to apply for a job?', 'Following documents are required to apply for a job:\r\n1. CNIC card (Front and back side) clearly scanned photo in JPEG format.\r\n2. Recent Passport size photo in JPEG format.\r\n3. Educational result cards or degree certificates.\r\n4. Experience letter (if any)', '2022-06-08 04:12:38', '2022-06-08 04:12:38'),
(6, 'How to check the application status for the applied jobs?', 'You can check the application status for your applied jobs, by clicking on the application status button on the PTRC-Pk website.', '2022-06-08 04:19:06', '2022-06-08 04:19:06'),
(7, 'How to download the roll no slip?', 'You can download your roll no slip, from by clicking on Roll no slip button on the official Website of PTRC-Pk.', '2022-06-08 04:21:38', '2022-06-08 04:21:38');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sr_no` varchar(255) DEFAULT NULL,
  `post_name` varchar(255) DEFAULT NULL,
  `job_id` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  `job_fee` int(11) DEFAULT NULL,
  `description` varchar(500) DEFAULT NULL,
  `ad_date` date DEFAULT NULL,
  `close_date` date DEFAULT NULL,
  `resultpdf` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_04_122211_add_votes_to_users_table', 1),
(6, '2022_02_10_111734_create_jobs_tbl', 2),
(7, '2022_02_10_113434_create_jobs_tbl', 3),
(8, '2022_02_14_104505_create_deprt_table', 4),
(9, '2022_02_15_133509_create_profile_table', 5),
(10, '2022_02_15_140747_create_experience_table', 5),
(11, '2022_02_15_142026_create_academic_table', 6),
(12, '2022_02_15_143235_create_challan_table', 6),
(13, '2022_02_15_143422_create_apply_jobs_table', 6),
(14, '2022_02_15_143935_create_rollno_slip_table', 6),
(15, '2022_03_01_043341_create_news_table', 7),
(16, '2022_03_01_043726_create_banks_table', 7),
(17, '2022_03_07_081443_create_centers_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(3, 'New Jobs', 'Jobs are coming Soon', '2022-04-11 10:04:11', '2022-04-11 10:04:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `applyjob_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `f_name` varchar(255) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `cnic` bigint(20) DEFAULT NULL,
  `religious` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `place_of_birth` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `div_domicel` varchar(255) DEFAULT NULL,
  `pro_domicle` varchar(255) DEFAULT NULL,
  `dis_domicel` varchar(255) DEFAULT NULL,
  `postal_city` varchar(255) DEFAULT NULL,
  `postal_addr` text DEFAULT NULL,
  `per_address` varchar(500) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `phone_res` varchar(20) DEFAULT NULL,
  `phone_office` varchar(20) DEFAULT NULL,
  `emer_no` varchar(20) DEFAULT NULL,
  `emer_name` varchar(255) DEFAULT NULL,
  `emer_rel` varchar(255) DEFAULT NULL,
  `disable` enum('Yes','No') DEFAULT NULL,
  `experience` enum('yes','no') NOT NULL DEFAULT 'no',
  `pic` varchar(255) DEFAULT NULL,
  `idcard_front` varchar(255) DEFAULT NULL,
  `idcard_back` varchar(255) DEFAULT NULL,
  `vaccinated` enum('no','yes') NOT NULL DEFAULT 'no',
  `certificate_no` varchar(50) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `applyjob_id`, `user_id`, `job_id`, `name`, `f_name`, `gender`, `cnic`, `religious`, `nationality`, `dob`, `place_of_birth`, `email`, `div_domicel`, `pro_domicle`, `dis_domicel`, `postal_city`, `postal_addr`, `per_address`, `phone`, `phone_res`, `phone_office`, `emer_no`, `emer_name`, `emer_rel`, `disable`, `experience`, `pic`, `idcard_front`, `idcard_back`, `vaccinated`, `certificate_no`, `remember_token`, `created_at`, `updated_at`) VALUES
(31, 8, 6, 4, 'ahmar', 'ahmar1', 'Male', 11111111111, 'islam', 'multan', '2022-02-25', 'multan', 'ahmar@gmail.com', 'multan', 'multan', 'multan', 'multan', 'multan', 'multan', '1234', '4567', '9874', '77777777', 'ahmar', '7777777', 'Yes', 'no', '20220224145325.jpg', '20220224145325.jpg', '20220224145325.jpg', 'no', NULL, NULL, '2022-02-24 09:53:25', '2022-02-24 09:53:25'),
(33, 9, 6, 5, 'ahmar', 'ali', 'Male', 36302, 'islam', 'pakistan', '2022-02-17', 'multan', 'ahmarkhan@gmail.com', 'multan', 'multan', 'multan', 'multan', 'multan', 'multan', '01212', '212', '21', '1444', 'united', '1444', 'No', 'no', '20220224145325.jpg', '20220224145325.jpg', '20220224145325.jpg', 'no', NULL, NULL, '2022-02-24 10:05:34', '2022-02-24 10:05:34'),
(34, 10, 5, 1, 'babr', 'ali', 'Male', 2525, 'islam', 'pakistan', '2022-03-04', 'multan', 'babr@gmail.com', 'multan', 'multan', 'multan', 'multan', 'multan', 'multan', '1245', '1245', '1245', '2145', 'babar', '02145', 'No', 'no', '20220224145325.jpg', '20220224145325.jpg', '20220224145325.jpg', 'no', NULL, NULL, '2022-02-24 10:10:56', '2022-02-24 10:10:56'),
(35, 11, 5, 4, 'babar 1', 'ali1', 'Male', 456789, 'islam', 'pakistan', '2022-02-25', 'khanewal', 'babar1@gmail.com', 'multan', 'multan', 'multan', 'multan', 'multan', 'multan', '02154', '2154', '2154', '2154', 'babar1', '02145', 'No', 'no', '20220224145325.jpg', '20220224145325.jpg', '20220224145325.jpg', 'no', NULL, NULL, '2022-02-24 10:14:54', '2022-02-24 10:14:54'),
(36, 13, 6, 1, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'no', NULL, NULL, NULL, 'no', NULL, NULL, '2022-03-05 05:50:06', '2022-03-05 05:50:06'),
(37, 14, 6, 1, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'no', NULL, NULL, NULL, 'no', NULL, NULL, '2022-03-05 05:51:40', '2022-03-05 05:51:40'),
(38, 15, 6, 1, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'no', NULL, NULL, NULL, 'no', NULL, NULL, '2022-03-05 05:58:24', '2022-03-05 05:58:24'),
(39, 16, 6, 1, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'no', NULL, NULL, NULL, 'no', NULL, NULL, '2022-03-05 06:01:06', '2022-03-05 06:01:06'),
(40, 17, 6, 1, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'no', NULL, NULL, NULL, 'no', NULL, NULL, '2022-03-05 06:04:06', '2022-03-05 06:04:06'),
(41, 18, 6, 1, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'no', NULL, NULL, NULL, 'no', NULL, NULL, '2022-03-05 06:06:37', '2022-03-05 06:06:37'),
(42, 19, 6, 1, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'no', NULL, NULL, NULL, 'no', NULL, NULL, '2022-03-05 06:08:05', '2022-03-05 06:08:05'),
(43, 20, 6, 1, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'no', NULL, NULL, NULL, 'no', NULL, NULL, '2022-03-05 06:10:38', '2022-03-05 06:10:38'),
(44, 21, 6, 1, 'ahmar', 'khan', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'no', NULL, NULL, NULL, 'no', NULL, NULL, '2022-03-05 06:12:18', '2022-03-05 06:12:18'),
(45, 23, 8, 7, 'hann', 'ali', 'Male', 3636636, 'islam', 'pakistan', '2022-03-16', 'multan', 'multan@gmail.com', 'multan', 'multan', 'multan', 'multan', 'multan', 'multan', '4545454545', '45454545', '545454545', '45454545', 'ali', 'cazan', 'No', 'no', '20220224145325.jpg', 'F:\\xampp\\tmp\\phpC7BC.tmp', 'F:\\xampp\\tmp\\phpC7BD.tmp', 'no', NULL, NULL, '2022-03-14 07:19:53', '2022-03-14 07:19:53'),
(46, 26, 8, 5, 'hann', 'ali', 'Male', 620445454215, 'islam', 'pakistan1', '2022-03-31', 'multan', 'multan@gmail.com', 'multan', 'multan', 'multan', 'multan', 'multan', 'multan', '4545444545', '4545454545', '4545454545', '4545445', 'ali', 'cazan', 'No', 'no', '1647263701private-equity-resize.jpg', '1647263701road-1072821__480.jpg', '1647263701road-1072821__480.jpg', 'no', NULL, NULL, '2022-03-14 08:15:01', '2022-03-14 08:15:01'),
(47, 27, 8, 5, 'hann', 'ali', 'Male', 620445454215, 'islam', 'pakistan1', '2022-03-31', 'multan', 'multan@gmail.com', 'multan', 'multan', 'multan', 'multan', 'multan', 'multan', '4545444545', '4545454545', '4545454545', '4545445', 'ali', 'cazan', 'No', 'no', '1647263773private-equity-resize.jpg', '1647263773road-1072821__480.jpg', '1647263773road-1072821__480.jpg', 'no', NULL, NULL, '2022-03-14 08:16:13', '2022-03-14 08:16:13'),
(48, 28, 13, 1, 'aamish khan', 'khan', 'Male', 5440284704863, 'islam', 'pakistani', '1998-05-04', 'quetta', 'mirzaaamishkhan@gmail.com', 'quetta', 'balochistan', 'quetta', 'multan', 'house no 10 street 1', 'house no 10 street 1', '03313884379', '03313884379', '03313884379', '03313884379', '03313884379', 'sister', 'Yes', 'no', '1647873948Picture.jpg', '1647873948ID Front.jpg', '1647873948ID Back.jpg', 'no', NULL, NULL, '2022-03-21 14:45:48', '2022-03-21 14:45:48'),
(49, 29, 15, 8, 'muashir', 'malik', 'Male', 3630232262739, 'islam', 'paksitani', '2002-01-31', 'Multan', 'mudasir@gmail.com', 'multan', 'multan', 'multan', '66000', 'Gulgasht Colony, Multan', 'Gulgasht Colony, Multan', '03012687470', '03012687470', '03012687470', '03047617470', 'Shahrab', 'Father', 'No', 'no', '1647953859pngtree-w-letter-logo-design-png-image_1770441.jpg', '1647953859pngtree-w-letter-logo-design-png-image_1770441.jpg', '1647953859pngtree-w-letter-logo-design-png-image_1770441.jpg', 'yes', 'E265874', NULL, '2022-03-22 12:57:39', '2022-03-22 12:57:39'),
(50, 30, 15, 8, 'muashir', 'malik', 'Male', 3630232262739, 'islam', 'paksitani', '2002-01-31', 'Multan', 'mudasir@gmail.com', 'multan', 'multan', 'multan', '66000', 'Gulgasht Colony, Multan', 'Gulgasht Colony, Multan', '03012687470', '03012687470', '03012687470', '03047617470', 'Shahrab', 'Father', 'No', 'no', '1647953949pngtree-w-letter-logo-design-png-image_1770441.jpg', '1647953949pngtree-w-letter-logo-design-png-image_1770441.jpg', '1647953949pngtree-w-letter-logo-design-png-image_1770441.jpg', 'yes', 'E265874', NULL, '2022-03-22 12:59:09', '2022-03-22 12:59:09'),
(51, 31, 16, 9, 'tariq', 'khan', 'Male', 544448909670, 'islam', 'pakistani', '1995-06-28', 'multan', 'tariqkhan@gmail.com', 'multan', 'punjab', 'multan', 'khanewal town', 'khanewal town', 'khanewal town', '03111110000', NULL, NULL, NULL, 'tariq', NULL, 'No', 'no', '16481190794.jpeg', '16481190794.jpeg', '16481190794.jpeg', 'no', NULL, NULL, '2022-03-24 10:51:19', '2022-03-24 10:51:19'),
(52, 32, 11, 9, NULL, NULL, 'Male', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'No', 'no', '1648129906green-trees-nature.jpg', '164812990758cf13e9.jpg', '1648129907road-1072821__480.jpg', 'no', NULL, NULL, '2022-03-24 13:51:47', '2022-03-24 13:51:47'),
(53, 33, 19, 4, 'Asad', 'Ullah', 'Male', 321032345677, 'islam', 'pakistani', '1990-02-20', 'multan', 'asadullah@gmail.com', 'multan', 'punjab', 'multan', 'multan', 'multan', 'multan', '03212223334', NULL, NULL, NULL, 'asad', NULL, 'No', 'no', '1648575772OIP (2).jpg', '1648575772WhatsApp Image 2021-12-31 at 6.25.57 PM.jpeg', '1648575772WhatsApp Image 2021-12-31 at 7.19.41 PM.jpeg', 'no', NULL, NULL, '2022-03-29 17:42:52', '2022-03-29 17:42:52'),
(54, 34, 38, 10, 'Muhammad', 'Danish', 'Male', 3630221341023, 'Islam', 'Pakistani', '1997-06-11', 'Multan', 'danish.isp1997@gmail.com', 'Multan', 'Punjab', 'Multan', 'Multan', 'Multan', 'Multan', '03212234653', NULL, NULL, NULL, NULL, NULL, 'No', 'no', '1649670660mexico.jpg', '1649670660shanghai.jpg', '1649670660shanghai.jpg', 'no', NULL, NULL, '2022-04-11 09:51:00', '2022-04-11 09:51:00'),
(55, 35, 38, 10, 'Muhammad', 'Danish', 'Male', 3630221341023, 'Islam', 'Pakistani', '1997-06-11', 'Multan', 'danish.isp1997@gmail.com', 'Multan', 'Punjab', 'Multan', 'Multan', 'Multan', 'Multan', '03212234653', NULL, NULL, NULL, NULL, NULL, 'No', 'no', '1649670684mexico.jpg', '1649670684shanghai.jpg', '1649670684shanghai.jpg', 'no', NULL, NULL, '2022-04-11 09:51:24', '2022-04-11 09:51:24'),
(56, 36, 38, 10, 'Muhammad', 'Danish', 'Male', 3630221341023, 'Islam', 'Pakistani', '1997-06-11', 'Multan', 'danish.isp1997@gmail.com', 'Multan', 'Punjab', 'Multan', 'Multan', 'Multan', 'Multan', '03212234653', NULL, NULL, NULL, NULL, NULL, 'No', 'no', '1649672747mexico.jpg', '1649672747shanghai.jpg', '1649672747shanghai.jpg', 'no', NULL, NULL, '2022-04-11 10:25:47', '2022-04-11 10:25:47'),
(57, 37, 39, 10, 'shahrab', 'saleem', 'Male', 123345545, 'islam', 'pakistan', '1994-02-11', 'multan', 'shahrabsaleem92@gmail.com', 'multan', 'multan', 'multan', '6000', 'multan', 'multan', '0313131312', '0311313112', '012121212112', '03131313131313', 'ali', '012121212121', 'No', 'no', '164967396758cf13e9.jpg', '1649673967green-trees-nature.jpg', '1649673967download.jpg', 'no', NULL, NULL, '2022-04-11 10:46:07', '2022-04-11 10:46:07'),
(58, 38, 39, 10, 'shahrab', 'saleem', 'Male', 123345545, 'islam', 'pakistan', '2022-04-20', 'multan', 'shahrabsaleem92@gmail.com', 'multan', 'multan', 'multan', '6000', 'multan', 'multan', '0313131312', '0311313112', '012121212112', '03131313131313', 'ali', '012121212121', 'No', 'no', '164974543668f7b3b.jpg', '1649745436green-trees-nature.jpg', '1649745436download.jpg', 'no', NULL, NULL, '2022-04-12 06:37:16', '2022-04-12 06:37:16'),
(59, 39, 39, 10, 'shahrab', 'saleem', 'Male', 123345545, 'islam', 'pakistan', '2022-04-14', 'multan', 'shahrabsaleem92@gmail.com', 'multan', 'multan', 'multan', '6000', 'multan', 'multan', '0313131312', '0311313112', '012121212112', '03131313131313', 'ali', '012121212121', 'No', 'no', '164974571568f7b3b.jpg', '1649745715green-trees-nature.jpg', '164974571558cf13e9.jpg', 'no', NULL, NULL, '2022-04-12 06:41:55', '2022-04-12 06:41:55'),
(60, 40, 39, 11, 'shahrab', 'saleem', 'Male', 123345545, 'islam', 'pakistan', '2022-04-06', 'multan', 'shahrabsaleem92@gmail.com', 'multan', 'multan', 'multan', '6000', 'multan', 'multan', '0313131312', '0311313112', '012121212112', '03131313131313', 'ali', '012121212121', 'No', 'no', '164974576868f7b3b.jpg', '1649745768green-trees-nature.jpg', '164974576858cf13e9.jpg', 'no', NULL, NULL, '2022-04-12 06:42:48', '2022-04-12 06:42:48'),
(61, 41, 38, 10, 'Muhammad', 'Danish', 'Male', 3630221341023, 'Islam', 'Pakistani', '1998-06-16', 'Multan', 'danish.isp1997@gmail.com', 'Multan', 'Punjab', 'Multan', 'Multan', 'Multan', 'Multan', '03212234653', NULL, NULL, NULL, NULL, NULL, 'No', 'no', '1650008768mexico.jpg', '1650008768mexico.jpg', '1650008768mexico.jpg', 'no', NULL, NULL, '2022-04-15 07:46:08', '2022-04-15 07:46:08'),
(62, 42, 38, 13, 'Muhammad Danish', 'Danish Ali', 'Male', 3630221341023, 'Islam', 'Pakistani', '1997-06-10', 'Multan', 'danish.isp1997@gmail.com', 'Multan', 'Punjab', 'Multan', 'Multan', 'Multan', 'Multan', '03212234653', NULL, NULL, NULL, NULL, NULL, 'No', 'no', '1650010591mexico.jpg', '1650010591mexico.jpg', '1650010591mexico.jpg', 'no', NULL, NULL, '2022-04-15 08:16:31', '2022-04-15 08:16:31'),
(63, 43, 41, 11, 'shahrab', 'saleem', 'Male', 32333232332, 'islam', 'pakistan', '2022-04-19', 'multan', 'shahrabsaleem92@gmail.com', 'multan', 'ultan', 'multan', '66000', 'multan', 'multan', '03166436464', '031646463131', '031325525', '031524642', 'shah', '0326035466', 'No', 'no', '16500927592cd0714a5ee60e66f204618f01c43bb0.png', '16500927592cd0714a5ee60e66f204618f01c43bb0.png', '16500927592cd0714a5ee60e66f204618f01c43bb0.png', 'no', NULL, NULL, '2022-04-16 07:05:59', '2022-04-16 07:05:59'),
(64, 44, 38, 10, 'Muhammad Danish', 'Danish Ali', 'Male', 3630221341023, 'Islam', 'Pakistani', '1997-06-10', 'Multan', 'danish.isp1997@gmail.com', 'Multan', 'Punjab', 'Multan', 'Multan', 'Multan', 'Multan', '03212234653', NULL, NULL, NULL, NULL, NULL, 'No', 'no', '1650097321mexico.jpg', '1650097321mexico.jpg', '1650097321mexico.jpg', 'no', NULL, NULL, '2022-04-16 08:22:01', '2022-04-16 08:22:01'),
(65, 45, 38, 15, 'Muhammad Danish', 'Muhammad Asif', 'Male', 3630221341023, 'Islam', 'Pakistani', '1997-10-11', 'Multan', 'danish.isp1997@gmail.com', 'Multan', 'Punjab', 'Multan', 'Multan', 'Haideria Road Street#10, H#137/18, Gulgasht Colony, Multan.', 'Haideria Road Street#10, H#137/18, Gulgasht Colony, Multan.', '03038121276', NULL, NULL, '03027801110', 'Muhammad Asif', 'Father', 'No', 'no', '1669195266WhatsApp Image 2022-11-23 at 2.09.59 PM.jpeg', '1669195266WhatsApp Image 2022-11-23 at 2.10.01 PM.jpeg', '1669195266WhatsApp Image 2022-11-23 at 2.10.02 PM.jpeg', 'yes', 'PC2381323754', NULL, '2022-11-23 09:21:06', '2022-11-23 09:21:06'),
(66, 46, 38, 21, 'Muhammad Danish', 'Muhammad Asif', 'Male', 3630221341023, 'Islam', 'Pakistani', '1997-10-11', 'Multan', 'danish.isp1997@gmail.com', 'Multan', 'Punjab', 'Multan', 'Multan', 'Haideria Road Street#10, H#137/18, Gulgasht Colony, Multan.', 'Haideria Road Street#10, H#137/18, Gulgasht Colony, Multan.', '03038121276', NULL, NULL, '03027801110', 'Muhammad Asif', 'Father', 'No', 'no', '1669206712WhatsApp Image 2022-11-23 at 2.09.59 PM.jpeg', '1669206712WhatsApp Image 2022-11-23 at 2.10.01 PM.jpeg', '1669206712WhatsApp Image 2022-11-23 at 2.10.02 PM.jpeg', 'no', 'PC2381323754', NULL, '2022-11-23 12:31:52', '2022-11-23 12:31:52'),
(67, 47, 38, 21, 'Muhammad Danish', 'Muhammad Asif', 'Male', 3630221341023, 'Islam', 'Pakistani', '1997-10-11', 'Multan', 'danish.isp1997@gmail.com', 'Multan', 'Punjab', 'Multan', 'Multan', 'Haideria Road Street#10, H#137/18, Gulgasht Colony, Multan.', 'Haideria Road Street#10, H#137/18, Gulgasht Colony, Multan.', '03038121276', NULL, NULL, '03027801110', 'Muhammad Asif', 'Father', 'No', 'no', '1669206907WhatsApp Image 2022-11-23 at 2.09.59 PM.jpeg', '1669206907WhatsApp Image 2022-11-23 at 2.10.01 PM.jpeg', '1669206907WhatsApp Image 2022-11-23 at 2.10.02 PM.jpeg', 'no', 'PC2381323754', NULL, '2022-11-23 12:35:07', '2022-11-23 12:35:07'),
(68, 48, 43, 21, 'Abdullah', 'Ghulam Ali', 'Male', 3430174466079, 'Islam', 'Pakistani', '1998-12-15', 'Pakistan', 'abdullahghulamali555@gmail.com', 'Hafizabad', 'Punjab', 'Hafizabad', 'Lahore', 'House 12-GN Houses, Block C-1, Johar Town, Lahore', 'Post Office, Dhunni Village, District Hafizabad', '03354214700', NULL, NULL, '03155254991', 'Shawala', 'Sister', 'No', 'no', '1669287257IMG_20220917_233300.jpg', '1669287257IMG_20221124_140615.jpg', '1669287257IMG_20221124_140637.jpg', 'yes', 'WV7163330091', NULL, '2022-11-24 10:54:17', '2022-11-24 10:54:17'),
(69, 49, 43, 21, 'Abdullah', 'Ghulam Ali', 'Male', 3430174466079, 'Islam', 'Pakistani', '1998-12-15', 'Pakistan', 'abdullahghulamali555@gmail.com', 'Hafizabad', 'Punjab', 'Hafizabad', 'Lahore', 'House 12-GN Houses, Block C-1, Johar Town, Lahore', 'Post Office, Dhunni Village, District Hafizabad', '03354214700', NULL, NULL, '03155254991', 'Shawala', 'Sister', 'No', 'no', '1669287277IMG_20220917_233300.jpg', '1669287277IMG_20221124_140615.jpg', '1669287277IMG_20221124_140637.jpg', 'yes', 'WV7163330091', NULL, '2022-11-24 10:54:37', '2022-11-24 10:54:37'),
(70, 50, 43, 21, 'Abdullah', 'Ghulam Ali', 'Male', 3430174466079, 'Islam', 'Pakistani', '1998-12-15', 'Pakistan', 'abdullahghulamali555@gmail.com', 'Hafizabad', 'Punjab', 'Hafizabad', 'Lahore', 'House 12-GN Houses, Block C-1, Johar Town, Lahore', 'Post Office, Dhunni Village, District Hafizabad', '03354214700', NULL, NULL, '03155254991', 'Shawala', 'Sister', 'No', 'no', '1669287373IMG_20220917_233300.jpg', '1669287373IMG_20221124_140615.jpg', '1669287373IMG_20221124_140637.jpg', 'yes', 'WV7163330091', NULL, '2022-11-24 10:56:13', '2022-11-24 10:56:13'),
(71, 51, 5, 21, 'babar 1', 'ali1', 'Male', 456789, 'islam', 'pakistan', '2000-11-01', 'khanewal', 'babar1@gmail.com', 'multan', 'multan', 'multan', 'multan', 'multan', 'multan', '02154', '2154', '2154', '2154', 'babar1', '02145', 'No', 'no', '1669372559yellow-black-taxi.jpg', '1669372559yellow.jpg', '1669372559yellow.jpg', 'no', NULL, NULL, '2022-11-25 10:35:59', '2022-11-25 10:35:59'),
(72, 52, 5, 21, 'babar 1', 'ali1', 'Male', 456789, 'islam', 'pakistan', '2000-11-01', 'khanewal', 'babar1@gmail.com', 'multan', 'multan', 'multan', 'multan', 'multan', 'multan', '02154', '2154', '2154', '2154', 'babar1', '02145', 'No', 'no', '1669372629yellow-black-taxi.jpg', '1669372629yellow.jpg', '1669372629yellow.jpg', 'no', NULL, NULL, '2022-11-25 10:37:09', '2022-11-25 10:37:09'),
(73, 53, 5, 21, 'babar 1', 'ali1', 'Male', 456789, 'islam', 'pakistan', '2000-11-01', 'khanewal', 'babar1@gmail.com', 'multan', 'multan', 'multan', 'multan', 'multan', 'multan', '02154', '2154', '2154', '2154', 'babar1', '02145', 'No', 'no', '1669372663yellow-black-taxi.jpg', '1669372663yellow.jpg', '1669372663yellow.jpg', 'no', NULL, NULL, '2022-11-25 10:37:43', '2022-11-25 10:37:43'),
(74, 54, 38, 21, 'Muhammad Danish', 'Muhammad Asif', 'Male', 3630221341023, 'Islam', 'Pakistani', '1997-10-11', 'Multan', 'danish.isp1997@gmail.com', 'Multan', 'Punjab', 'Multan', 'Multan', 'Haideria Road Street#10, H#137/18, Gulgasht Colony, Multan.', 'Haideria Road Street#10, H#137/18, Gulgasht Colony, Multan.', '03038121276', NULL, NULL, '03027801110', 'Muhammad Asif', 'Father', 'No', 'no', '1669374788WhatsApp Image 2022-11-23 at 2.09.59 PM.jpeg', '1669374788WhatsApp Image 2022-11-23 at 2.10.01 PM.jpeg', '1669374788WhatsApp Image 2022-11-23 at 2.10.02 PM.jpeg', 'no', 'PC2381323754', NULL, '2022-11-25 11:13:08', '2022-11-25 11:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `rollno_slip`
--

CREATE TABLE `rollno_slip` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `challan_id` int(11) NOT NULL,
  `roll_no` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `center` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `image_name`, `created_at`, `updated_at`) VALUES
(30, '1650570897_thump.jpg', '2022-04-21 19:54:58', '2022-04-21 19:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `id` int(11) NOT NULL,
  `city` varchar(19) DEFAULT NULL,
  `lat` varchar(6) DEFAULT NULL,
  `lng` varchar(6) DEFAULT NULL,
  `country` varchar(8) DEFAULT NULL,
  `iso2` varchar(4) DEFAULT NULL,
  `province` varchar(18) DEFAULT NULL,
  `capital` varchar(7) DEFAULT NULL,
  `population` varchar(10) DEFAULT NULL,
  `population_prop` varchar(17) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`id`, `city`, `lat`, `lng`, `country`, `iso2`, `province`, `capital`, `population`, `population_prop`) VALUES
(2, 'Karachi', '24.860', '67.010', 'Pakistan', 'PK', 'Sindh', 'admin', '14835000', '14835000'),
(3, 'Lahore', '31.549', '74.343', 'Pakistan', 'PK', 'Punjab', 'admin', '11021000', '11021000'),
(4, 'Faisalabad', '31.418', '73.079', 'Pakistan', 'PK', 'Punjab', 'minor', '3203846', '3203846'),
(5, 'Rawalpindi', '33.600', '73.067', 'Pakistan', 'PK', 'Punjab', 'minor', '2098231', '2098231'),
(6, 'Gujranwala', '32.150', '74.183', 'Pakistan', 'PK', 'Punjab', 'minor', '2027001', '2027001'),
(7, 'Peshawar', '34.000', '71.500', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'admin', '1970042', '1970042'),
(8, 'Multan', '30.197', '71.471', 'Pakistan', 'PK', 'Punjab', 'minor', '1871843', '1871843'),
(9, 'Saidu Sharif', '34.750', '72.357', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '1860310', '1860310'),
(10, 'Hyderabad City', '25.379', '68.368', 'Pakistan', 'PK', 'Sindh', 'minor', '1732693', '1732693'),
(11, 'Islamabad', '33.698', '73.036', 'Pakistan', 'PK', 'Islāmābād', 'primary', '1014825', '1014825'),
(12, 'Quetta', '30.192', '67.007', 'Pakistan', 'PK', 'Balochistān', 'admin', '1001205', '1001205'),
(13, 'Bahawalpur', '29.395', '71.672', 'Pakistan', 'PK', 'Punjab', 'minor', '762111', '762111'),
(14, 'Sargodha', '32.083', '72.671', 'Pakistan', 'PK', 'Punjab', 'minor', '659862', '659862'),
(15, 'Sialkot City', '32.500', '74.533', 'Pakistan', 'PK', 'Punjab', 'minor', '655852', '655852'),
(16, 'Sukkur', '27.699', '68.867', 'Pakistan', 'PK', 'Sindh', 'minor', '499900', '499900'),
(17, 'Larkana', '27.560', '68.226', 'Pakistan', 'PK', 'Sindh', 'minor', '490508', '490508'),
(18, 'Chiniot', '31.716', '72.983', 'Pakistan', 'PK', 'Punjab', 'minor', '477781', '477781'),
(19, 'Shekhupura', '31.708', '74.000', 'Pakistan', 'PK', 'Punjab', 'minor', '473129', '473129'),
(20, 'Jhang City', '31.268', '72.318', 'Pakistan', 'PK', 'Punjab', 'minor', '414131', '414131'),
(21, 'Dera Ghazi Khan', '30.050', '70.633', 'Pakistan', 'PK', 'Punjab', 'minor', '399064', '399064'),
(22, 'Gujrat', '32.573', '74.078', 'Pakistan', 'PK', 'Punjab', 'minor', '390533', '390533'),
(23, 'Rahimyar Khan', '28.420', '70.295', 'Pakistan', 'PK', 'Punjab', '', '353203', '353203'),
(24, 'Kasur', '31.116', '74.450', 'Pakistan', 'PK', 'Punjab', 'minor', '314617', '314617'),
(25, 'Mardan', '34.195', '72.044', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '300424', '300424'),
(26, 'Mingaora', '34.771', '72.360', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', '', '279914', '279914'),
(27, 'Nawabshah', '26.244', '68.410', 'Pakistan', 'PK', 'Sindh', 'minor', '263102', '263102'),
(28, 'Sahiwal', '30.670', '73.106', 'Pakistan', 'PK', 'Punjab', 'minor', '247706', '247706'),
(29, 'Mirpur Khas', '25.526', '69.011', 'Pakistan', 'PK', 'Sindh', 'minor', '236961', '236961'),
(30, 'Okara', '30.810', '73.459', 'Pakistan', 'PK', 'Punjab', 'minor', '232386', '232386'),
(31, 'Mandi Burewala', '30.150', '72.683', 'Pakistan', 'PK', 'Punjab', '', '203454', '203454'),
(32, 'Jacobabad', '28.276', '68.451', 'Pakistan', 'PK', 'Sindh', 'minor', '200815', '200815'),
(33, 'Saddiqabad', '28.300', '70.130', 'Pakistan', 'PK', 'Punjab', '', '189876', '189876'),
(34, 'Kohat', '33.586', '71.441', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '170800', '170800'),
(35, 'Muridke', '31.802', '74.255', 'Pakistan', 'PK', 'Punjab', '', '163268', '163268'),
(36, 'Muzaffargarh', '30.070', '71.193', 'Pakistan', 'PK', 'Punjab', 'minor', '163268', '163268'),
(37, 'Khanpur', '28.647', '70.662', 'Pakistan', 'PK', 'Punjab', '', '160308', '160308'),
(38, 'Gojra', '31.150', '72.683', 'Pakistan', 'PK', 'Punjab', '', '157863', '157863'),
(39, 'Mandi Bahauddin', '32.586', '73.491', 'Pakistan', 'PK', 'Punjab', 'minor', '157352', '157352'),
(40, 'Abbottabad', '34.150', '73.216', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '148587', '148587'),
(41, 'Turbat', '26.003', '63.054', 'Pakistan', 'PK', 'Balochistān', 'minor', '147791', '75694'),
(42, 'Dadu', '26.731', '67.775', 'Pakistan', 'PK', 'Sindh', 'minor', '146179', '146179'),
(43, 'Bahawalnagar', '29.994', '73.253', 'Pakistan', 'PK', 'Punjab', 'minor', '141935', '141935'),
(44, 'Khuzdar', '27.800', '66.616', 'Pakistan', 'PK', 'Balochistān', '', '141395', '141395'),
(45, 'Pakpattan', '30.350', '73.400', 'Pakistan', 'PK', 'Punjab', 'minor', '139525', '139525'),
(46, 'Tando Allahyar', '25.466', '68.716', 'Pakistan', 'PK', 'Sindh', 'minor', '133487', '133487'),
(47, 'Ahmadpur East', '29.145', '71.261', 'Pakistan', 'PK', 'Punjab', '', '128112', '128112'),
(48, 'Vihari', '30.041', '72.352', 'Pakistan', 'PK', 'Punjab', 'minor', '128034', '128034'),
(49, 'Jaranwala', '31.334', '73.419', 'Pakistan', 'PK', 'Punjab', '', '127973', '127973'),
(50, 'New Mirpur', '33.133', '73.750', 'Pakistan', 'PK', 'Azad Kashmir', 'minor', '124352', '124352'),
(51, 'Kamalia', '30.725', '72.644', 'Pakistan', 'PK', 'Punjab', '', '121401', '121401'),
(52, 'Kot Addu', '30.470', '70.964', 'Pakistan', 'PK', 'Punjab', '', '120479', '120479'),
(53, 'Nowshera', '34.015', '71.974', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '118594', '118594'),
(54, 'Swabi', '34.116', '72.466', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '115018', '115018'),
(55, 'Khushab', '32.291', '72.350', 'Pakistan', 'PK', 'Punjab', 'minor', '110868', '110868'),
(56, 'Dera Ismail Khan', '31.816', '70.916', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '109686', '109686'),
(57, 'Chaman', '30.921', '66.459', 'Pakistan', 'PK', 'Balochistān', '', '107660', '107660'),
(58, 'Charsadda', '34.145', '71.730', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '105414', '105414'),
(59, 'Kandhkot', '28.400', '69.300', 'Pakistan', 'PK', 'Sindh', '', '105011', '105011'),
(60, 'Chishtian', '29.795', '72.857', 'Pakistan', 'PK', 'Punjab', '', '101659', '101659'),
(61, 'Hasilpur', '29.696', '72.554', 'Pakistan', 'PK', 'Punjab', '', '99171', '99171'),
(62, 'Attock Khurd', '33.766', '72.366', 'Pakistan', 'PK', 'Punjab', '', '97374', '97374'),
(63, 'Muzaffarabad', '34.370', '73.471', 'Pakistan', 'PK', 'Azad Kashmir', '', '96000', '96000'),
(64, 'Mianwali', '32.585', '71.543', 'Pakistan', 'PK', 'Punjab', 'minor', '95007', '95007'),
(65, 'Jalalpur Jattan', '32.766', '74.216', 'Pakistan', 'PK', 'Punjab', '', '90130', '90130'),
(66, 'Bhakkar', '31.633', '71.066', 'Pakistan', 'PK', 'Punjab', 'minor', '88472', '88472'),
(67, 'Zhob', '31.341', '69.448', 'Pakistan', 'PK', 'Balochistān', 'minor', '88356', '50537'),
(68, 'Dipalpur', '30.670', '73.653', 'Pakistan', 'PK', 'Punjab', '', '87176', '87176'),
(69, 'Kharian', '32.811', '73.865', 'Pakistan', 'PK', 'Punjab', '', '85765', '85765'),
(70, 'Mian Channun', '30.439', '72.354', 'Pakistan', 'PK', 'Punjab', '', '82586', '82586'),
(71, 'Bhalwal', '32.265', '72.902', 'Pakistan', 'PK', 'Punjab', '', '82556', '82556'),
(72, 'Jamshoro', '25.428', '68.282', 'Pakistan', 'PK', 'Sindh', 'minor', '80000', '80000'),
(73, 'Pattoki', '31.021', '73.852', 'Pakistan', 'PK', 'Punjab', '', '77210', '77210'),
(74, 'Harunabad', '29.610', '73.136', 'Pakistan', 'PK', 'Punjab', '', '77206', '77206'),
(75, 'Kahror Pakka', '29.623', '71.916', 'Pakistan', 'PK', 'Punjab', '', '76098', '76098'),
(76, 'Toba Tek Singh', '30.966', '72.483', 'Pakistan', 'PK', 'Punjab', 'minor', '75943', '75943'),
(77, 'Samundri', '31.063', '72.961', 'Pakistan', 'PK', 'Punjab', '', '73911', '73911'),
(78, 'Shakargarh', '32.262', '75.158', 'Pakistan', 'PK', 'Punjab', '', '73160', '73160'),
(79, 'Sambrial', '32.475', '74.352', 'Pakistan', 'PK', 'Punjab', '', '71766', '71766'),
(80, 'Shujaabad', '29.880', '71.295', 'Pakistan', 'PK', 'Punjab', '', '70595', '70595'),
(81, 'Hujra Shah Muqim', '30.740', '73.821', 'Pakistan', 'PK', 'Punjab', '', '70204', '70204'),
(82, 'Kabirwala', '30.406', '71.866', 'Pakistan', 'PK', 'Punjab', '', '70123', '70123'),
(83, 'Mansehra', '34.333', '73.200', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '69085', '69085'),
(84, 'Lala Musa', '32.700', '73.955', 'Pakistan', 'PK', 'Punjab', '', '67283', '67283'),
(85, 'Chunian', '30.963', '73.980', 'Pakistan', 'PK', 'Punjab', '', '64386', '64386'),
(86, 'Nankana Sahib', '31.449', '73.712', 'Pakistan', 'PK', 'Punjab', '', '63073', '63073'),
(87, 'Bannu', '32.988', '70.605', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '62191', '62191'),
(88, 'Pasrur', '32.268', '74.667', 'Pakistan', 'PK', 'Punjab', '', '58644', '58644'),
(89, 'Timargara', '34.828', '71.840', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '58050', '58050'),
(90, 'Parachinar', '33.899', '70.100', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', '', '55685', '55685'),
(91, 'Chenab Nagar', '31.750', '72.916', 'Pakistan', 'PK', 'Punjab', '', '53965', '53965'),
(92, 'Gwadar', '25.126', '62.322', 'Pakistan', 'PK', 'Balochistān', 'minor', '51901', '23364'),
(93, 'Abdul Hakim', '30.552', '72.127', 'Pakistan', 'PK', 'Punjab', '', '51494', '51494'),
(94, 'Hassan Abdal', '33.819', '72.689', 'Pakistan', 'PK', 'Punjab', '', '50044', '50044'),
(95, 'Tank', '32.216', '70.383', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '44996', '44996'),
(96, 'Hangu', '33.528', '71.057', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '39766', '39766'),
(97, 'Risalpur Cantonment', '34.004', '71.998', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', '', '36653', '36653'),
(98, 'Karak', '33.116', '71.083', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '35844', '35844'),
(99, 'Kundian', '32.452', '71.471', 'Pakistan', 'PK', 'Punjab', '', '35406', '35406'),
(100, 'Umarkot', '25.361', '69.736', 'Pakistan', 'PK', 'Sindh', 'minor', '35059', '35059'),
(101, 'Chitral', '35.851', '71.788', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '31100', '31100'),
(102, 'Dainyor', '35.920', '74.378', 'Pakistan', 'PK', 'Gilgit-Baltistan', '', '25000', '25000'),
(103, 'Kulachi', '31.928', '70.459', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', '', '24738', '24738'),
(104, 'Kalat', '29.025', '66.590', 'Pakistan', 'PK', 'Balochistān', 'minor', '22879', '22879'),
(105, 'Kotli', '33.515', '73.901', 'Pakistan', 'PK', 'Azad Kashmir', 'minor', '21462', '21462'),
(106, 'Gilgit', '35.920', '74.314', 'Pakistan', 'PK', 'Gilgit-Baltistan', 'minor', '8851', '8851'),
(107, 'Narowal', '32.102', '74.873', 'Pakistan', 'PK', 'Punjab', 'minor', '', ''),
(108, 'Khairpur Mir’s', '27.529', '68.759', 'Pakistan', 'PK', 'Sindh', 'minor', '', ''),
(109, 'Khanewal', '30.301', '71.932', 'Pakistan', 'PK', 'Punjab', 'minor', '', ''),
(110, 'Jhelum', '32.933', '73.733', 'Pakistan', 'PK', 'Punjab', 'minor', '', ''),
(111, 'Haripur', '33.994', '72.933', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '', ''),
(112, 'Shikarpur', '27.955', '68.638', 'Pakistan', 'PK', 'Sindh', 'minor', '', ''),
(113, 'Rawala Kot', '33.857', '73.760', 'Pakistan', 'PK', 'Azad Kashmir', 'minor', '', ''),
(114, 'Hafizabad', '32.070', '73.688', 'Pakistan', 'PK', 'Punjab', 'minor', '', ''),
(115, 'Lodhran', '29.538', '71.633', 'Pakistan', 'PK', 'Punjab', 'minor', '', ''),
(116, 'Malakand', '34.565', '71.930', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '', ''),
(117, 'Attock City', '33.766', '72.359', 'Pakistan', 'PK', 'Punjab', 'minor', '', ''),
(118, 'Batgram', '34.679', '73.026', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '', ''),
(119, 'Matiari', '25.597', '68.446', 'Pakistan', 'PK', 'Sindh', 'minor', '', ''),
(120, 'Ghotki', '28.006', '69.315', 'Pakistan', 'PK', 'Sindh', 'minor', '', ''),
(121, 'Naushahro Firoz', '26.840', '68.122', 'Pakistan', 'PK', 'Sindh', 'minor', '', ''),
(122, 'Alpurai', '34.900', '72.655', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '', ''),
(123, 'Bagh', '33.980', '73.774', 'Pakistan', 'PK', 'Azad Kashmir', 'minor', '', ''),
(124, 'Daggar', '34.511', '72.484', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '', ''),
(125, 'Leiah', '30.964', '70.944', 'Pakistan', 'PK', 'Punjab', 'minor', '', ''),
(126, 'Tando Muhammad Khan', '25.123', '68.538', 'Pakistan', 'PK', 'Sindh', 'minor', '', ''),
(127, 'Chakwal', '32.930', '72.850', 'Pakistan', 'PK', 'Punjab', 'minor', '', ''),
(128, 'Badin', '24.655', '68.838', 'Pakistan', 'PK', 'Sindh', 'minor', '', ''),
(129, 'Lakki', '32.607', '70.912', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '', ''),
(130, 'Rajanpur', '29.104', '70.329', 'Pakistan', 'PK', 'Punjab', 'minor', '', ''),
(131, 'Dera Allahyar', '28.416', '68.166', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(132, 'Shahdad Kot', '27.847', '67.906', 'Pakistan', 'PK', 'Sindh', 'minor', '', ''),
(133, 'Pishin', '30.583', '67.000', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(134, 'Sanghar', '26.046', '68.948', 'Pakistan', 'PK', 'Sindh', 'minor', '', ''),
(135, 'Upper Dir', '35.207', '71.876', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '', ''),
(136, 'Thatta', '24.746', '67.924', 'Pakistan', 'PK', 'Sindh', 'minor', '', ''),
(137, 'Dera Murad Jamali', '28.546', '68.223', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(138, 'Kohlu', '29.896', '69.253', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(139, 'Mastung', '29.799', '66.845', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(140, 'Dasu', '35.291', '73.290', 'Pakistan', 'PK', 'Khyber Pakhtunkhwa', 'minor', '', ''),
(141, 'Athmuqam', '34.571', '73.897', 'Pakistan', 'PK', 'Azad Kashmir', 'minor', '', ''),
(142, 'Loralai', '30.370', '68.597', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(143, 'Barkhan', '29.897', '69.525', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(144, 'Musa Khel Bazar', '30.859', '69.822', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(145, 'Ziarat', '30.381', '67.725', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(146, 'Gandava', '28.613', '67.485', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(147, 'Sibi', '29.543', '67.877', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(148, 'Dera Bugti', '29.036', '69.158', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(149, 'Eidgah', '35.347', '74.856', 'Pakistan', 'PK', 'Gilgit-Baltistan', 'minor', '', ''),
(150, 'Uthal', '25.807', '66.622', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(151, 'Khuzdar', '27.738', '66.643', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(152, 'Chilas', '35.420', '74.096', 'Pakistan', 'PK', 'Gilgit-Baltistan', 'minor', '', ''),
(153, 'Panjgur', '26.964', '64.090', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(154, 'Gakuch', '36.173', '73.766', 'Pakistan', 'PK', 'Gilgit-Baltistan', 'minor', '', ''),
(155, 'Qila Saifullah', '30.700', '68.359', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(156, 'Kharan', '28.583', '65.416', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(157, 'Aliabad', '36.307', '74.617', 'Pakistan', 'PK', 'Gilgit-Baltistan', 'minor', '', ''),
(158, 'Awaran', '26.456', '65.231', 'Pakistan', 'PK', 'Balochistān', 'minor', '', ''),
(159, 'Dalbandin', '28.888', '64.406', 'Pakistan', 'PK', 'Balochistān', 'minor', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'PTRC Admin', 'admin@ptrc.com.pk', '2022-04-05 07:54:12', '$2y$10$Dt2AFDOQ.N85Q3rbs/xZUecMMf3fvJoAgkWLoRELQBKxSEqrNUeZm', 1, 'lbXxASuO21spBDlEN9RWdLg9XK4S7gKshIZsT83IIEfIm5QLPNv1CzDtrkdS', '2022-02-08 04:17:49', '2022-11-24 07:12:37'),
(5, 'babar', 'babar@gmail.com', '2022-05-06 15:00:00', '$2y$10$7Vd6Ndgmq1kaedfz/SqqAO7i5wyJa74NPKU6qw.Pn0m/3aV5C.yQC', NULL, 'ztsx2N1gm8XCEyRBkUI1aXiq9TwVZvHlwNujL5oJ5kBTBGmmI96wJwLybjKn', '2022-02-24 07:09:28', '2022-02-24 07:09:28'),
(6, 'ahmar', 'workwithmubii@gmail.com', NULL, '$2y$10$pzgLjACRY.us3rfyHSVpDOr0YaSnLnk4lR65rKIN95DEh7l5Mn6Ya', 1, NULL, '2022-02-24 07:10:09', '2022-02-24 07:10:09'),
(8, 'hanan', 'hanan@gmail.com', NULL, '$2y$10$53ZgMEzeZltiuIlc7aoc5O2JqKTp.NpUjRwjpaT.fGqdjJ03PhClm', NULL, NULL, '2022-03-14 03:27:05', '2022-03-14 03:27:05'),
(9, 'FilmyDunia', 'filmydn@gmail.com', '2022-04-08 16:45:18', '$2y$10$lYhYlqHZbWE2VYxQg0rPo.ndUzZt/n7kU/ZhfdinopT.ghwzolKEC', NULL, 'iEaEudQSHBAMMOU3YiY21soGVf27LEQAUFjKlbh06cMBKi7ZNZScYYZJJmSS', '2022-03-15 11:49:03', '2022-04-08 16:45:18'),
(10, 'Muhammad Mubashir', 'mubashirm651@gmail.com', NULL, '$2y$10$DoKov.r1Eo.Emmu3MVmyPu8SIKsEqz0WMGzEInkm0SxMfRwg/i4fC', NULL, NULL, '2022-03-17 06:20:01', '2022-03-17 06:20:01'),
(12, 'Babar Ali', 'babar1@gmail.com', NULL, '$2y$10$Cit8EzdBXxtrjPyLr6.kLuvXbD5c91YOkUkJBI7n2zQGJA5NQvBay', NULL, NULL, '2022-03-18 06:15:43', '2022-03-18 06:15:43'),
(13, 'aamish khan', 'mirzaaamishkhan@gmail.com', NULL, '$2y$10$7iE3dZwT2jcBY3/Xs5AXs.5u/s/XGgLTT9EdnKC6AVmpVezAMf0d.', NULL, NULL, '2022-03-21 14:39:01', '2022-03-21 14:39:01'),
(14, 'Ali', 'alikhan123@gmail.com', NULL, '$2y$10$DTqXY6KF7kOcwJ2oHCLoFuPm8adCQF5sWJRDtWQfiggwx4dVP5RWK', NULL, NULL, '2022-03-21 14:53:00', '2022-03-21 14:53:00'),
(16, 'tariq', 'tariqkhan@gmail.com', NULL, '$2y$10$C54VPfwzetlyaic.L5F0auruB6PybbGVRcaJ3gNRrKlqa8nrL9phe', NULL, 'P22ogj7p6vJOg21S34MxB10JlUMixWZDaRFg4QOoIWQvAXQ8OQvEFVO4qSsB', '2022-03-24 10:47:14', '2022-03-24 10:47:14'),
(17, 'aashir', 'aashirahmad666@gmail.com', NULL, '$2y$10$jQYS/XhgNf2dKbWXDJsyMunGc3MOh8M6NHSpAddj3lItSlKvwWLni', NULL, NULL, '2022-03-26 16:43:31', '2022-03-26 16:43:31'),
(18, 'aashir', 'aashirsherali666@gmail.com', NULL, '$2y$10$D1O3uWx73J0agVRsy4xEve0LO3yFTtOGKNyp3ZLvxAKY2gehXWF2S', NULL, NULL, '2022-03-26 16:44:10', '2022-03-26 16:44:10'),
(19, 'asad', 'asadullah@gmail.com', NULL, '$2y$10$9jEZnX9SaZGJyC8syiYvR.NIx9zFlJ29muWiIX02LYGOhEvR24arK', NULL, 'fwa3mvzc4LKDzPgdGIUJFpVQenPoapEklAZ5IlyKxSaoSBgMsviCRCL8IG9U', '2022-03-29 17:37:34', '2022-03-29 17:37:34'),
(20, 'Aayzaz Ahmad', 'aayzazahmad1550@gmail.com', NULL, '$2y$10$mKA85NwqAc8dTpEiNTw8C.PTDJOCF1GO0DXqgzdengSICzTdIeM/O', NULL, NULL, '2022-04-01 07:35:39', '2022-04-01 07:35:39'),
(38, 'Muhammad Danish', 'danish.isp1997@gmail.com', '2022-04-05 04:33:29', '$2y$10$YRImLahGoPen.fsKJgvXT.nOcs29Qae3Pm0n90VXJ1XpVPWlN/Ele', NULL, 'AMdDVqUcaME4yxlUHCFCDPdDcYgjriXrv2F6068tBOaMzuSar5xXjja9RUM3', '2022-04-05 04:31:12', '2022-11-23 08:59:28'),
(41, 'shahrabsaleem', 'shahrabsaleem92@gmail.com', '2022-04-16 07:02:51', '$2y$10$P1.CcOSz7WEupnz0FW3fFe7l7DqJOc6l1Key2VhzX4IvTHaz7L6IG', NULL, '1rAmGA4BZfS58mIJKfsnBQiH02hi2A9MGjYcwPF7OWrWk7gkzhjNgz9ESzpX', '2022-04-16 06:58:49', '2022-08-01 09:31:48'),
(42, 'waseem ahmad', 'waseemahmad796334@gmail.com', NULL, '$2y$10$6eB5ZwLEbIAB.i1YedKDxuCkHSjPfs98JfH9fd4svUJMLmIURbkAC', NULL, NULL, '2022-09-10 18:21:10', '2022-09-10 18:21:10'),
(43, 'Abdullah', 'abdullahghulamali555@gmail.com', '2022-11-24 08:23:32', '$2y$10$uScJuqaQJXf7AacKPeQSr.WAmy37QMuWJFATtMhge7x7K79aV9C52', NULL, NULL, '2022-11-24 08:23:03', '2022-11-24 08:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `voucher_no`
--

CREATE TABLE `voucher_no` (
  `id` int(11) NOT NULL,
  `voucher_no` int(11) DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voucher_no`
--

INSERT INTO `voucher_no` (`id`, `voucher_no`, `datetime`) VALUES
(1, 1028, '2022-02-14 04:30:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_jobs`
--
ALTER TABLE `apply_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banks`
--
ALTER TABLE `banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `centers`
--
ALTER TABLE `centers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `challan`
--
ALTER TABLE `challan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departs`
--
ALTER TABLE `departs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jobs_job_id_unique` (`job_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rollno_slip`
--
ALTER TABLE `rollno_slip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `voucher_no`
--
ALTER TABLE `voucher_no`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academics`
--
ALTER TABLE `academics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `apply_jobs`
--
ALTER TABLE `apply_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `banks`
--
ALTER TABLE `banks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `centers`
--
ALTER TABLE `centers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `challan`
--
ALTER TABLE `challan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `departs`
--
ALTER TABLE `departs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `rollno_slip`
--
ALTER TABLE `rollno_slip`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=160;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `voucher_no`
--
ALTER TABLE `voucher_no`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
