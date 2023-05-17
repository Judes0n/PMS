-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 03:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+05:30";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pms`
--
CREATE DATABASE IF NOT EXISTS `pms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pms`;

-- --------------------------------------------------------

--
-- Table structure for table `acc`
--

DROP TABLE IF EXISTS `acc`;
CREATE TABLE `acc` (
  `acc_id` int(11) NOT NULL,
  `u_id` bigint(20) NOT NULL,
  `mid` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `age` int(11) NOT NULL,
  `bday` varchar(20) NOT NULL,
  `relg` varchar(20) NOT NULL,
  `cnct` varchar(11) NOT NULL,
  `addrss` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `income` varchar(30) NOT NULL,
  `height` varchar(20) NOT NULL,
  `wight` int(11) NOT NULL,
  `educ` varchar(30) NOT NULL,
  `occup` varchar(30) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `insta` varchar(200) NOT NULL,
  `lim` int(11) NOT NULL,
  `stats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc`
--

INSERT INTO `acc` (`acc_id`, `u_id`, `mid`, `fname`, `age`, `bday`, `relg`, `cnct`, `addrss`, `gender`, `income`, `height`, `wight`, `educ`, `occup`, `img`, `insta`, `lim`, `stats`) VALUES
(7, 14, 2, 'Joel Saji', 20, '2002-10-01', 'Christian', '9496180540', 'Kattiparambil (H), Karumalloor P.O, Manakapady', 'Male', 'Above 5 Lakh', '185', 75, 'BCA', 'Student', 'WhatsApp Image 2022-11-23 at 10.18.07 PM.jpeg', 'https://www.instagram.com/joel_saji_k/', 0, 1),
(8, 11, 2, 'Sreelaksmi Ajith', 19, '2002-12-28', 'Hindu', '0000000000', 'ABC villa', 'Female', 'Above 5 Lakh', '165', 55, 'BCA', 'Student', 'IMG-20220902-WA0028.jpg', 'https://www.instagram.com/sreelakshmiajith_/', 0, 1),
(9, 13, 0, 'Mohammed Nayeem', 20, '2002-06-10', 'Muslim', '9496571939', 'kariyathipilly', 'Male', 'Above 5 Lakh', '170', 50, 'B.com', 'Business', 'WhatsApp Image 2022-11-21 at 12.53.00 PM.jpeg', 'https://www.instagram.com/stolen_kiss118/', 0, 1),
(11, 15, 1, 'Aswani Suresh', 20, '2002-08-13', 'Hindu', '9944661723', 'Maliyekal(H),Aniyal', 'Female', 'Below 1 Lakh', '153', 52, 'BCA', 'Bakery', '272111081_1057268828154234_7341641531014748575_n.webp', 'https://www.instagram.com/aswanisuresh.__/', 0, 1),
(12, 16, 2, 'Akhil Joseph', 20, '2002-04-23', 'Christian', '8540896521', 'Kuriyappily(H),Chappara,Kodugallur', 'Male', 'Above 1 Lakh & Below 5 lakh', '179', 69, 'BCA', 'Student', 'WhatsApp Image 2022-11-24 at 2.30.29 PM.jpeg', 'https://www.instagram.com/akhiill01/', 0, 1),
(13, 17, 2, 'Razal Saleem', 20, '2002-08-21', 'Muslim', '7332745264', 'Chappara', 'Male', 'Below 1 Lakh', '167', 86, 'BCA', 'Student', '306350784_834976620821869_7948782016439039743_n.webp', 'https://www.instagram.com/razal_saleem/', 0, 1),
(14, 18, 1, 'Ann Mariya Jaison', 20, '2002-07-14', 'Christian', '9078672245', 'Puthenvelikara,North Paravur', 'Female', 'Above 1 Lakh & Below 5 lakh', '164', 70, 'BCA', 'Student', '187616760_225551475629431_2238849682549441954_n.jpg', 'https://www.instagram.com/annhlove_/', 0, 1),
(15, 19, 1, 'Ivin Sebastian', 20, '2002-08-05', 'Christian', '9078672256', 'Puthenvelikara,North Paravur', 'Male', 'Above 5 Lakh', '165', 56, 'Bsc.Biotechnology', 'Student', '316902133_815077256247852_7175699770150594509_n (1).webp', 'https://www.instagram.com/_iva_chan_24_/', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `a_pwd` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`a_id`, `a_name`, `a_pwd`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE `feedback` (
  `fid` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `feed` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fid`, `acc_id`, `feed`) VALUES
(1, 15, 'Annaaa'),
(2, 9, 'Dei');

-- --------------------------------------------------------

--
-- Table structure for table `img_tbl`
--

DROP TABLE IF EXISTS `img_tbl`;
CREATE TABLE `img_tbl` (
  `img_id` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `img_tbl`
--

INSERT INTO `img_tbl` (`img_id`, `acc_id`, `img1`, `img2`, `img3`) VALUES
(1, 10, 'WhatsApp Image 2022-11-23 at 10.18.06 PM.jpeg', 'WhatsApp Image 2022-11-23 at 10.18.06 PM.jpeg', 'WhatsApp Image 2022-11-23 at 10.18.07 PM(1).jpeg'),
(2, 8, 'IMG_20220107_191118_486.jpg', 'IMG-20220908-WA0134.jpg', 'IMG-20220902-WA0028.jpg'),
(3, 9, 'WhatsApp Image 2022-11-23 at 8.52.09 PM.jpeg', 'WhatsApp Image 2022-11-23 at 8.56.44 PM.jpeg', 'WhatsApp Image 2022-11-23 at 8.57.20 PM.jpeg'),
(4, 11, 'WhatsApp Image 2022-11-24 at 10.43.32 AM.jpeg', 'WhatsApp Image 2022-11-24 at 10.43.31 AM.jpeg', '272111081_1057268828154234_7341641531014748575_n.webp'),
(5, 12, 'WhatsApp Image 2022-11-24 at 2.29.43 PM.jpeg', 'WhatsApp Image 2022-11-24 at 2.29.15 PM.jpeg', 'WhatsApp Image 2022-11-24 at 2.30.29 PM.jpeg'),
(6, 13, 'WhatsApp Image 2022-11-23 at 8.56.28 PM.jpeg', 'WhatsApp Image 2022-11-23 at 8.54.53 PM.jpeg', 'WhatsApp Image 2022-11-24 at 2.37.38 PM.jpeg'),
(7, 14, '187616760_225551475629431_2238849682549441954_n.jpg', '278927163_932459520759010_6835648027789807751_n.webp', '313827369_1192997427982009_6947318155480330853_n.webp');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

DROP TABLE IF EXISTS `membership`;
CREATE TABLE `membership` (
  `m_id` int(11) NOT NULL,
  `acc_id` int(11) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `cname` varchar(30) NOT NULL,
  `cnum` varchar(20) NOT NULL,
  `cvv` int(11) NOT NULL,
  `cexp` varchar(30) NOT NULL,
  `cost` varchar(20) NOT NULL,
  `valdity` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`m_id`, `acc_id`, `mname`, `cname`, `cnum`, `cvv`, `cexp`, `cost`, `valdity`) VALUES
(5, 8, 'Deluxe', 'JUDESON', '2555 5222 5222 2552', 6666, '12 / 25', '₹3000', '23/05/21'),
(6, 9, 'Basic', 'muhammed nayeem', '4265 6672 8629 7223', 8790, '12 / 28', '₹750', '23/05/21'),
(7, 7, 'Deluxe', 'JOEL SAJI', '2555 4523 4585 6000', 6666, '06 / 25', '₹3000', '23/05/24'),
(8, 11, 'Premium', 'ASWANI SURA', '3522 8888 4532 5241', 6641, '02 / 25', '₹1500', '23/05/24'),
(9, 12, 'Deluxe', 'AKHI: JOSEPH', '5266 3522 2541 1255', 5556, '02 / 23', '₹3000', '23/05/24'),
(10, 13, 'Deluxe', 'SALEEM', '2541 2245 1224 5255', 7855, '02 / 24', '₹3000', '23/05/24'),
(11, 14, 'Premium', 'ANN MARIYA JAISON', '2566 3566 6145 2235', 5566, '11 / 25', '₹1500', '23/05/28'),
(12, 15, 'Premium', 'IVIN SEBASTIAN', '5466 2525 5425 6324', 7457, '02 / 23', '₹1500', '23/05/28');

-- --------------------------------------------------------

--
-- Table structure for table `sel_profiles`
--

DROP TABLE IF EXISTS `sel_profiles`;
CREATE TABLE `sel_profiles` (
  `s_id` int(11) NOT NULL,
  `acc_id1` int(11) NOT NULL,
  `acc_id2` int(11) NOT NULL,
  `r_name` varchar(40) NOT NULL,
  `s_name` varchar(40) NOT NULL,
  `s_cnct` varchar(11) NOT NULL,
  `s_img` varchar(100) NOT NULL,
  `stat` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sel_profiles`
--

INSERT INTO `sel_profiles` (`s_id`, `acc_id1`, `acc_id2`, `r_name`, `s_name`, `s_cnct`, `s_img`, `stat`) VALUES
(2, 8, 9, 'Sreelaksmi Ajith', 'Mohammed Nayeem', '9496571939', 'WhatsApp Image 2022-11-21 at 12.53.00 PM.jpeg', 0),
(17, 8, 15, 'Sreelaksmi Ajith', 'Ivin Sebastian', '9078672256', '316902133_815077256247852_7175699770150594509_n (1).webp', 0),
(18, 14, 10, 'Ann Mariya Jaison', 'Joel Saji', '9496180540', 'WhatsApp Image 2022-11-23 at 10.18.07 PM.jpeg', 0),
(20, 9, 10, 'Mohammed Nayeem', 'Joel Saji', '9496180540', 'WhatsApp Image 2022-11-23 at 10.18.07 PM.jpeg', 1),
(22, 7, 9, 'Joel Saji', 'Mohammed Nayeem', '9496571939', 'WhatsApp Image 2022-11-21 at 12.53.00 PM.jpeg', 1),
(23, 11, 15, 'Aswani Suresh', 'Ivin Sebastian', '9078672256', '316902133_815077256247852_7175699770150594509_n (1).webp', 0),
(24, 8, 16, 'Sreelaksmi Ajith', 'Judeson', '9078672245', 'LOGO.png', 0),
(25, 11, 7, 'Aswani Suresh', 'Joel Saji', '9496180540', 'WhatsApp Image 2022-11-23 at 10.18.07 PM.jpeg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `u_id` bigint(20) NOT NULL,
  `u_name` varchar(30) NOT NULL,
  `u_email` varchar(40) NOT NULL,
  `u_pwd` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `u_name`, `u_email`, `u_pwd`) VALUES
(11, 'Sreelakhsmi', 'Sree@g.com', '123'),
(13, 'Nayeem', 'n@a', '123'),
(14, 'Joel Saji', 'j@a', '1234'),
(15, 'Aswani Suresh', 'aswani@g', '123'),
(16, 'Akhil Joseph', 'akhil@g', '1234'),
(17, 'Razal Saleem', 'r@a', '123'),
(18, 'Ann Mariya', 'ann@a', '123'),
(19, 'Ivin Sebastian', 'i@a', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc`
--
ALTER TABLE `acc`
  ADD PRIMARY KEY (`acc_id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`a_id`),
  ADD UNIQUE KEY `a_name` (`a_name`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `img_tbl`
--
ALTER TABLE `img_tbl`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`m_id`),
  ADD KEY `acc_id` (`acc_id`);

--
-- Indexes for table `sel_profiles`
--
ALTER TABLE `sel_profiles`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc`
--
ALTER TABLE `acc`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `img_tbl`
--
ALTER TABLE `img_tbl`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sel_profiles`
--
ALTER TABLE `sel_profiles`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `acc`
--
ALTER TABLE `acc`
  ADD CONSTRAINT `acc_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`u_id`);

--
-- Constraints for table `membership`
--
ALTER TABLE `membership`
  ADD CONSTRAINT `membership_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `acc` (`acc_id`);

DELIMITER $$
--
-- Events
--
DROP EVENT IF EXISTS `resetlim`$$
CREATE DEFINER=`root`@`localhost` EVENT `resetlim` ON SCHEDULE EVERY 1 DAY STARTS '2023-01-01 00:00:00' ENDS '2028-01-01 00:00:00' ON COMPLETION PRESERVE ENABLE COMMENT 'Resets Limit In Acc Table' DO UPDATE pms.acc SET lim =0 WHERE 1$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
