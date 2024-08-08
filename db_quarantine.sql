-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2022 at 04:12 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_quarantine`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_patients`
--

CREATE TABLE `tbl_patients` (
  `id` int(11) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `birthdate` varchar(20) NOT NULL,
  `age` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `control_no` int(11) NOT NULL,
  `date_registered` varchar(20) NOT NULL,
  `image` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `completion_date` varchar(20) NOT NULL,
  `required_days` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `facility_area` text NOT NULL,
  `remarks` text NOT NULL,
  `recorded_by` varchar(50) NOT NULL,
  `heart_rate` varchar(20) NOT NULL,
  `bp` varchar(20) NOT NULL,
  `oxygen_sat` varchar(20) NOT NULL,
  `temp` varchar(20) NOT NULL,
  `no_symptom` varchar(20) NOT NULL,
  `fever` varchar(20) NOT NULL,
  `shortness_breath` varchar(20) NOT NULL,
  `sore_throat` varchar(20) NOT NULL,
  `cough` varchar(20) NOT NULL,
  `headache` varchar(20) NOT NULL,
  `m_pain` varchar(20) NOT NULL,
  `diarrhea` varchar(20) NOT NULL,
  `vomit` varchar(20) NOT NULL,
  `runny_nose` varchar(20) NOT NULL,
  `others` text NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_patients`
--

INSERT INTO `tbl_patients` (`id`, `last_name`, `first_name`, `middle_name`, `birthdate`, `age`, `gender`, `nationality`, `control_no`, `date_registered`, `image`, `email`, `contact`, `country`, `start_date`, `completion_date`, `required_days`, `status`, `address`, `facility_area`, `remarks`, `recorded_by`, `heart_rate`, `bp`, `oxygen_sat`, `temp`, `no_symptom`, `fever`, `shortness_breath`, `sore_throat`, `cough`, `headache`, `m_pain`, `diarrhea`, `vomit`, `runny_nose`, `others`, `username`, `password`) VALUES
(43, 'MACAYAN', 'PIOLO', 'C.', '2015-01-11', '7', 'Completed', 'Filipino', 1234, '2022-06-11', '1654955337841_Neji.jpg', 'munimunisep@gmail.com', 9090909, 'Philippines', '2022-06-11', '2022-06-25', 14, 'Completed', 'Batasan Hills Quezon City', 'Isolation Room #1', 'None', 'Aoyama', 'Any', 'Any', 'Any', 'Any', 'No', '', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '', '', ''),
(44, 'Reyes', 'Karizza', 'Reeee', '2016-01-11', '6', '', 'Filipino', 1235, '2022-06-11', '1654955428946_123967918_157356792753266_4920138185014890130_n.jpg', 'notmyvegetable@gmail.com', 9090909, 'Philippines', '2022-06-11', '2022-06-25', 14, 'Admitted', '#139 View Talanay Area A-1', 'Isolation Room #2', '', 'Aoyama', 'Any', 'Any', 'Any', 'Any', 'Yes', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', '', ''),
(45, 'Dragon', 'Gemma', 'C.', '2017-01-11', '5', 'Dead', 'Dragonese', 1234, '2022-06-11', '1654955492842_Squid.jpg', 'munimunisep@gmail.com', 9090909, 'Philippines', '2022-06-11', '2022-07-02', 21, 'Dead', 'Batasan Hills Quezon City', 'Isolation Room #3', '', 'Aoyama', 'Any', 'Any', 'Any', 'Any', 'Yes', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_staff`
--

CREATE TABLE `tbl_staff` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_staff`
--

INSERT INTO `tbl_staff` (`id`, `name`, `username`, `password`) VALUES
(1, 'Aoyama', 'staff1', 'staff'),
(2, 'Hinata', 'staff2', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_patients`
--
ALTER TABLE `tbl_patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_patients`
--
ALTER TABLE `tbl_patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
