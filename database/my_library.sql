-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2021 at 09:20 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `a_mail` varchar(30) NOT NULL,
  `a_address` varchar(100) NOT NULL,
  `a_psw` varchar(20) NOT NULL,
  `a_mno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_mail`, `a_address`, `a_psw`, `a_mno`) VALUES
(1, 'arnab', 'arnab@gmail.com', '12, s.b.road. kolkata', 'arnab', 9876521430),
(2, 'suparna', 'suparna@gmail.com', '20, g.c.road. barrackpore', 'suparna', 9875461230);

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `b_id` int(10) NOT NULL,
  `b_name` varchar(30) NOT NULL,
  `b_author` varchar(30) NOT NULL,
  `b_img` varchar(100) NOT NULL,
  `t_qty` int(10) NOT NULL,
  `avl_qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`b_id`, `b_name`, `b_author`, `b_img`, `t_qty`, `avl_qty`) VALUES
(1, 'software engineering', 'rajib mall', '', 10, 10),
(2, 'data communication and network', 'forouzan', '', 10, 8),
(3, 'data structure', 's. lipschutz', '', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `fine_details`
--

CREATE TABLE `fine_details` (
  `f_id` int(10) NOT NULL,
  `i_id` int(11) NOT NULL,
  `o_r_date` date NOT NULL,
  `pay_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fine_details`
--

INSERT INTO `fine_details` (`f_id`, `i_id`, `o_r_date`, `pay_status`) VALUES
(1, 2, '2021-03-20', 1),
(2, 1, '2021-03-02', 1),
(3, 9, '2021-07-12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `issued_book`
--

CREATE TABLE `issued_book` (
  `i_id` int(10) NOT NULL,
  `m_id` int(10) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `b_id` int(10) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `i_date` date NOT NULL,
  `r_date` date NOT NULL,
  `r_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `issued_book`
--

INSERT INTO `issued_book` (`i_id`, `m_id`, `m_name`, `b_id`, `b_name`, `i_date`, `r_date`, `r_status`) VALUES
(1, 1, 'subhadip', 3, 'data structure', '2021-02-10', '2021-02-25', 1),
(2, 2, 'saswata', 3, 'data structure', '2021-02-25', '2021-03-12', 1),
(3, 1, 'subhadip', 2, 'data communication and netwrok', '2021-07-02', '2021-07-17', 1),
(7, 1, 'subhadeep', 2, 'data communication and network', '2021-06-26', '2021-07-11', 0),
(8, 1, 'subhadeep', 1, 'software engineering', '2021-07-12', '2021-07-27', 0),
(9, 1, 'subhadeep', 1, 'software engineering', '2021-06-12', '2021-06-27', 1);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `m_id` int(10) NOT NULL,
  `m_name` varchar(30) NOT NULL,
  `m_mail` varchar(30) NOT NULL,
  `m_address` varchar(100) NOT NULL,
  `m_psw` varchar(20) NOT NULL,
  `m_mno` bigint(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`m_id`, `m_name`, `m_mail`, `m_address`, `m_psw`, `m_mno`) VALUES
(1, 'subhadeep', 'subhadeep@gmail.com', '24, h.s.road. shyamnagar', 'subhadeep', 9852147630),
(2, 'saswata', 'saswata@gmail.com', '23, d.c.road. sreerampur', 'saswata', 9741258630);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `fine_details`
--
ALTER TABLE `fine_details`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `issued_book`
--
ALTER TABLE `issued_book`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`m_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `b_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fine_details`
--
ALTER TABLE `fine_details`
  MODIFY `f_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `issued_book`
--
ALTER TABLE `issued_book`
  MODIFY `i_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `m_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
