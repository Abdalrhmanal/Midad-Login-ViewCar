-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 09 ديسمبر 2022 الساعة 20:45
-- إصدار الخادم: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datalog`
--

-- --------------------------------------------------------

--
-- بنية الجدول `log-in`
--

CREATE TABLE `log-in` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `passowrd` text NOT NULL,
  `name` text NOT NULL,
  `work` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- إرجاع أو استيراد بيانات الجدول `log-in`
--

INSERT INTO `log-in` (`id`, `email`, `passowrd`, `name`, `work`) VALUES
(0, '[hom@gmail.com]', '[12345]', '[abd]', '[program]'),
(1, 'dddd@fkbnkf', '1245', 'abode', 'prog');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log-in`
--
ALTER TABLE `log-in`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
