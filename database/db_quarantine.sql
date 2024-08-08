-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 06:57 AM
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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `username`, `password`) VALUES
(1, 'Milos, Ricardo', 'admin1', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_facility`
--

CREATE TABLE `tbl_facility` (
  `id` int(11) NOT NULL,
  `area_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_facility`
--

INSERT INTO `tbl_facility` (`id`, `area_name`) VALUES
(1, 'Isolation Room #1'),
(2, 'Isolation Room #2'),
(3, 'Isolation Room #3'),
(4, 'Isolation Room #4'),
(5, 'Isolation Room #5'),
(11, 'Isolation Room #6');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_logs`
--

CREATE TABLE `tbl_logs` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `logdate` datetime NOT NULL,
  `action` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_logs`
--

INSERT INTO `tbl_logs` (`id`, `user`, `logdate`, `action`) VALUES
(191, 'Administrator', '2022-06-11 21:48:57', 'Added Resident named MACAYAN, PIOLO C.'),
(192, 'Administrator', '2022-06-11 21:49:27', 'Updated Patient named MACAYAN, PIOLO C.'),
(193, 'Administrator', '2022-06-11 21:50:28', 'Added Resident named Reyes, Karizza Reeee'),
(194, 'Administrator', '2022-06-11 21:51:25', 'Added Resident named Dragon, Gemma C.'),
(195, 'Administrator', '2022-06-11 21:51:32', 'Updated Patient named Dragon, Gemma C.'),
(196, 'Administrator', '2022-07-14 17:42:51', 'Added Staff with name of we'),
(197, 'Administrator', '2022-07-14 19:25:39', 'Updated Patient named ,  '),
(198, 'Administrator', '2022-07-14 19:27:48', 'Updated Patient named ,  '),
(199, 'Administrator', '2022-07-14 19:37:08', 'Update Staff with name of Aoyama'),
(200, 'Administrator', '2022-07-14 19:38:32', 'Update Staff with name of Aoyama'),
(201, 'Administrator', '2022-07-14 19:38:36', 'Update Staff with name of Aoyama'),
(202, 'Administrator', '2022-07-14 19:55:28', 'Added Staff with name of WEWE'),
(203, 'Aoyama', '2022-07-14 19:56:06', 'Added Resident named ,  '),
(204, 'Administrator', '2022-07-14 19:57:30', 'Added Resident named ,  '),
(205, 'Administrator', '2022-07-14 20:37:01', 'Updated Patient named ,  '),
(206, 'Administrator', '2022-07-16 17:17:54', 'Added Resident named ,  '),
(207, 'Administrator', '2022-07-16 22:20:30', 'Updated Patient named MACAYAN, PIOLO C.'),
(208, 'Administrator', '2022-07-16 22:44:15', 'Updated Patient named MACAYAN'),
(209, 'Administrator', '2022-07-16 22:44:19', 'Updated Patient named MACAYAN'),
(210, 'Administrator', '2022-07-16 22:45:54', 'Updated Patient named MACAYAN'),
(211, 'Administrator', '2022-07-16 22:59:09', 'Updated Patient named MACAYAN'),
(212, 'Administrator', '2022-07-16 22:59:33', 'Updated Patient named MACAYAN, PIOLO C.'),
(213, 'Administrator', '2022-07-16 22:59:37', 'Updated Patient named MACAYAN'),
(214, 'Administrator', '2022-07-16 23:00:54', 'Updated Patient named Reyes, Karizza Reeee'),
(215, 'Administrator', '2022-07-16 23:00:59', 'Added Resident named ,  '),
(216, 'Administrator', '2022-07-16 23:01:56', 'Added Resident named ,  '),
(217, 'Administrator', '2022-07-16 23:02:28', 'Added Resident named ,  '),
(218, 'Administrator', '2022-07-16 23:03:07', 'Added Resident named ,  '),
(219, 'Administrator', '2022-07-16 23:04:16', 'Added Resident named ,  '),
(220, 'Administrator', '2022-07-16 23:06:03', 'Added Resident named ,  '),
(221, 'Administrator', '2022-07-16 23:06:55', 'Updated Patient named ,  '),
(222, 'Administrator', '2022-07-16 23:07:03', 'Added Resident named ,  '),
(223, 'Administrator', '2022-07-16 23:07:48', 'Added Resident named ,  '),
(224, 'Administrator', '2022-07-16 23:08:55', 'Added Resident named ,  '),
(225, 'Administrator', '2022-07-16 23:09:10', 'Added Resident named ,  '),
(226, 'Administrator', '2022-07-16 23:20:44', 'Updated Patient named MACAYAN'),
(227, 'Administrator', '2022-07-16 23:21:33', 'Updated Patient named MACAYAN'),
(228, 'Administrator', '2022-07-16 23:22:28', 'Updated Patient named MACAYAN'),
(229, 'Administrator', '2022-07-16 23:23:04', 'Updated Patient named MACAYAN'),
(230, 'Administrator', '2022-07-16 23:23:43', 'Updated Patient named MACAYAN'),
(231, 'Administrator', '2022-07-16 23:24:53', 'Updated Patient named MACAYAN'),
(232, 'Administrator', '2022-07-16 23:25:24', 'Updated Patient named MACAYAN'),
(233, 'Administrator', '2022-07-16 23:25:52', 'Updated Patient named MACAYAN'),
(234, 'Administrator', '2022-07-16 23:26:39', 'Updated Patient named MACAYAN'),
(235, 'Administrator', '2022-07-16 23:27:44', 'Updated Patient named MACAYAN'),
(236, 'Administrator', '2022-07-16 23:27:57', 'Updated Patient named MACAYAN'),
(237, 'Administrator', '2022-07-16 23:28:31', 'Updated Patient named MACAYAN'),
(238, 'Administrator', '2022-07-16 23:29:44', 'Updated Patient named MACAYAN'),
(239, 'Administrator', '2022-07-16 23:31:03', 'Updated Patient named MACAYAN'),
(240, 'Administrator', '2022-07-16 23:31:17', 'Updated Patient named MACAYAN'),
(241, 'Administrator', '2022-07-16 23:32:00', 'Updated Patient named MACAYAN'),
(242, 'Administrator', '2022-07-16 23:33:17', 'Updated Patient named MACAYAN'),
(243, 'Administrator', '2022-07-16 23:34:41', 'Updated Patient named MACAYAN'),
(244, 'Administrator', '2022-07-16 23:35:18', 'Updated Patient named MACAYAN'),
(245, 'Administrator', '2022-07-16 23:47:08', 'Updated Patient named MACAYAN'),
(246, 'Administrator', '2022-07-16 23:47:23', 'Updated Patient named MACAYANE'),
(247, 'Administrator', '2022-07-16 23:48:28', 'Updated Patient named MACAYANE'),
(248, 'Administrator', '2022-07-16 23:48:31', 'Updated Patient named MACAYANE'),
(249, 'Administrator', '2022-07-16 23:53:56', 'Updated Patient named MACAYANE'),
(250, 'Administrator', '2022-07-17 00:05:15', 'Updated Patient named MACAYANE'),
(251, 'Administrator', '2022-07-17 00:06:53', 'Updated Patient named MACAYAN'),
(252, 'Administrator', '2022-07-17 00:06:58', 'Updated Patient named MACAYAN'),
(253, 'Administrator', '2022-07-17 00:07:01', 'Updated Patient named MACAYAN'),
(254, 'Administrator', '2022-07-17 00:08:58', 'Updated Patient named MACAYAN'),
(255, 'Administrator', '2022-07-17 00:09:03', 'Updated Patient named MACAYANE'),
(256, 'Administrator', '2022-07-17 00:09:11', 'Updated Patient named MACAYANE'),
(257, 'Administrator', '2022-07-17 00:09:29', 'Updated Patient named MACAYANE'),
(258, 'Administrator', '2022-07-17 00:09:46', 'Updated Patient named MACAYANE'),
(259, 'Administrator', '2022-07-17 00:10:02', 'Updated Patient named MACAYANE'),
(260, 'Administrator', '2022-07-17 00:10:32', 'Updated Patient named MACAYANE'),
(261, 'Administrator', '2022-07-17 00:10:46', 'Updated Patient named MACAYAN'),
(262, 'Administrator', '2022-07-17 00:11:01', 'Updated Patient named MACAYAN'),
(263, 'Administrator', '2022-07-17 00:11:04', 'Updated Patient named MACAYAN'),
(264, 'Administrator', '2022-07-17 00:12:45', 'Updated Patient named MACAYAN'),
(265, 'Administrator', '2022-07-17 00:13:56', 'Updated Patient named MACAYAN'),
(266, 'Administrator', '2022-07-17 00:14:28', 'Updated Patient named MACAYAN'),
(267, 'Administrator', '2022-07-17 00:14:56', 'Updated Patient named MACAYAN'),
(268, 'Administrator', '2022-07-17 00:15:04', 'Updated Patient named MACAYAN'),
(269, 'Administrator', '2022-07-17 00:15:32', 'Updated Patient named MACAYAN'),
(270, 'Administrator', '2022-07-17 00:19:00', 'Updated Patient named MACAYAN'),
(271, 'Administrator', '2022-07-17 00:19:04', 'Updated Patient named PIOLO C. MACAYAN'),
(272, 'Administrator', '2022-07-17 00:19:26', 'Updated Patient named PIOLO C. MACAYAN'),
(273, 'Administrator', '2022-07-17 00:20:37', 'Updated Patient named PIOLO C. MACAYAN'),
(274, 'Administrator', '2022-07-17 00:20:58', 'Updated Patient named PIOLO C. MACAYAN'),
(275, 'Administrator', '2022-07-17 00:21:09', 'Updated Patient named PIOLO C. MACAYAN'),
(276, 'Administrator', '2022-07-17 00:22:15', 'Updated Patient named PIOLO C. MACAYAN'),
(277, 'Administrator', '2022-07-17 00:22:23', 'Updated Patient named PIOLO C. MACAYAN'),
(278, 'Administrator', '2022-07-17 00:23:00', 'Updated Patient named PIOLO C. MACAYAN'),
(279, 'Administrator', '2022-07-17 00:23:24', 'Updated Patient named PIOLO C. MACAYAN'),
(280, 'Administrator', '2022-07-17 00:25:31', 'Updated Patient named PIOLO C. MACAYAN'),
(281, 'Administrator', '2022-07-17 00:25:46', 'Updated Patient named PIOLO C. MACAYAN'),
(282, 'Administrator', '2022-07-17 00:27:28', 'Updated Patient named PIOLO C. MACAYAN'),
(283, 'Administrator', '2022-07-17 00:28:40', 'Updated Patient named PIOLO C. MACAYAN'),
(284, 'Administrator', '2022-07-17 00:29:23', 'Updated Patient named PIOLO C. MACAYAN'),
(285, 'Administrator', '2022-07-17 00:30:27', 'Updated Patient named PIOLO C. MACAYAN'),
(286, 'Administrator', '2022-07-17 00:30:44', 'Updated Patient named PIOLO C. MACAYAN'),
(287, 'Administrator', '2022-07-17 00:30:48', 'Updated Patient named PIOLO C. MACAYAN'),
(288, 'Administrator', '2022-07-17 00:30:51', 'Updated Patient named PIOLO C. MACAYAN'),
(289, 'Administrator', '2022-07-17 00:31:01', 'Updated Patient named PIOLO C. MACAYAN'),
(290, 'Administrator', '2022-07-17 00:31:29', 'Updated Patient named PIOLO C. MACAYAN'),
(291, 'Administrator', '2022-07-17 00:32:01', 'Updated Patient named PIOLO C. MACAYAN'),
(292, 'Administrator', '2022-07-17 00:32:04', 'Updated Patient named PIOLO C. MACAYAN'),
(293, 'Administrator', '2022-07-17 00:32:32', 'Updated Patient named PIOLO C. MACAYAN'),
(294, 'Administrator', '2022-07-17 00:32:40', 'Updated Patient named PIOLO C. MACAYAN'),
(295, 'Administrator', '2022-07-17 00:32:44', 'Updated Patient named PIOLO C. MACAYAN'),
(296, 'Administrator', '2022-07-17 00:32:49', 'Updated Patient named PIOLO C. MACAYAN'),
(297, 'Administrator', '2022-07-17 00:32:52', 'Updated Patient named PIOLO C. MACAYAN'),
(298, 'Administrator', '2022-07-17 00:33:02', 'Added Staff with name of wew'),
(299, 'Administrator', '2022-07-17 00:33:14', 'Updated Patient named PIOLO C. MACAYAN'),
(300, 'Administrator', '2022-07-17 00:33:23', 'Updated Patient named PIOLO C. MACAYAN'),
(301, 'Administrator', '2022-07-17 00:39:05', 'Updated Patient named PIOLO C. MACAYAN'),
(302, 'Administrator', '2022-07-17 00:39:07', 'Updated Patient named PIOLO C. MACAYAN'),
(303, 'Administrator', '2022-07-17 00:39:09', 'Updated Patient named PIOLO C. MACAYAN'),
(304, 'Administrator', '2022-07-17 00:40:29', 'Updated Patient named PIOLO C. MACAYAN'),
(305, 'Administrator', '2022-07-17 00:41:19', 'Updated Patient named PIOLO C. MACAYAN'),
(306, 'Administrator', '2022-07-17 00:41:33', 'Updated Patient named PIOLO C. MACAYAN'),
(307, 'Administrator', '2022-07-17 00:41:57', 'Updated Patient named Reyes'),
(308, 'Administrator', '2022-07-17 00:44:13', 'Updated Patient named Dragon'),
(309, 'Administrator', '2022-07-17 16:20:38', 'Updated Patient named MACAYAN'),
(310, 'Administrator', '2022-07-17 16:21:36', 'Updated Patient named MACAYAN'),
(311, 'Administrator', '2022-07-17 16:22:00', 'Updated Patient named MACAYAN'),
(312, 'Administrator', '2022-07-17 19:51:59', 'Added Resident named ,  '),
(313, 'Administrator', '2022-07-17 19:52:25', 'Added Resident named ,  '),
(314, 'Administrator', '2022-07-17 19:53:52', 'Added Resident named ,  '),
(315, 'Administrator', '2022-07-17 20:04:46', 'Updated Patient named Reyes'),
(316, 'Administrator', '2022-07-17 20:04:53', 'Updated Patient named Reyes'),
(317, 'Administrator', '2022-07-17 20:07:27', 'Updated Patient named Reyes'),
(318, 'Administrator', '2022-07-17 20:07:57', 'Updated Patient named Reyes'),
(319, 'Administrator', '2022-07-17 20:08:02', 'Updated Patient named Reyes'),
(320, 'Administrator', '2022-07-17 20:08:49', 'Updated Patient named Reyes'),
(321, 'Administrator', '2022-07-17 20:09:09', 'Updated Patient named Reyes'),
(322, 'Administrator', '2022-07-17 20:09:19', 'Updated Patient named Reyes'),
(323, 'Administrator', '2022-07-17 20:09:24', 'Updated Patient named Reyes'),
(324, 'Administrator', '2022-07-17 21:05:04', 'Updated Patient named MACAYAN'),
(325, 'Administrator', '2022-07-17 21:05:29', 'Updated Patient named Dragon'),
(326, 'Administrator', '2022-07-18 12:16:45', 'Added Staff with name of Isolation Room #6'),
(327, 'Administrator', '2022-07-18 12:21:32', 'Updated Patient named Reyes'),
(328, 'Administrator', '2022-07-18 12:27:34', 'Updated Patient named Reyes, Karizza Reeee'),
(329, 'Administrator', '2022-07-18 12:33:35', 'Added Resident named ,  '),
(330, 'Administrator', '2022-07-18 12:34:42', 'Added Resident named ,  ');

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
  `contact` varchar(20) NOT NULL,
  `country` varchar(50) NOT NULL,
  `start_date` varchar(20) NOT NULL,
  `completion_date` varchar(20) NOT NULL,
  `required_days` int(11) NOT NULL,
  `date_discharged` varchar(20) NOT NULL,
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
  `password` varchar(20) NOT NULL,
  `additional_status` text NOT NULL,
  `classification` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_patients`
--

INSERT INTO `tbl_patients` (`id`, `last_name`, `first_name`, `middle_name`, `birthdate`, `age`, `gender`, `nationality`, `control_no`, `date_registered`, `image`, `email`, `contact`, `country`, `start_date`, `completion_date`, `required_days`, `date_discharged`, `status`, `address`, `facility_area`, `remarks`, `recorded_by`, `heart_rate`, `bp`, `oxygen_sat`, `temp`, `no_symptom`, `fever`, `shortness_breath`, `sore_throat`, `cough`, `headache`, `m_pain`, `diarrhea`, `vomit`, `runny_nose`, `others`, `username`, `password`, `additional_status`, `classification`) VALUES
(43, 'MACAYAN', 'PIOLO', 'C.', '2012-01-01', '10', 'Female', 'Filipino', 1234, '2022-07-17', '1657989027585_Squid.jpg', 'munimunisep@gmail.com', '99999', 'Philippines', '2022-07-01', '2022-07-21', 20, '2022-07-15', 'Transferred', 'Batasan Hills Quezon City', 'Isolation Room #3', 'Noneee', 'Aoyama', 'Any', 'Any', 'Any', 'Any', 'Yes', '', 'Yes', 'No', 'Yes', 'No', 'No', 'No', 'Yes', 'No', '', '', '', 'Taken Anti Fever Medicine on 93\r\n\r\nMagaling na\r\nwewe\r\nwewe', 'Asymptomatic'),
(44, 'Reyes', 'Karizza', 'Reeee', '2016-01-11', '6', 'Male', 'Filipino', 1235, '2022-07-16', '1657989717503_246067736_583621689501824_6494067675679439693_n.jpg', 'notmyvegetable@gmail.com', '9090909', 'Philippines', '2022-06-11', '2022-06-25', 14, '2022-07-18', 'Completed', '#139 View Talanay Area A-1', 'Isolation Room #2', '', 'Aoyama', 'Any', '80/60', 'Any', '40', 'Yes', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', '', '', '', 'Mild'),
(45, 'Dragon', 'Gemma', 'C.', '2017-01-11', '5', 'Dead', 'Dragonese', 1234, '2022-06-11', '1657989853377_123967918_157356792753266_4920138185014890130_n.jpg', 'munimunisep@gmail.com', '9090909', 'Philippines', '2022-06-11', '2022-07-02', 21, '', 'Dead', 'Batasan Hills Quezon City', 'Isolation Room #3', '', 'Aoyama', 'Any', 'Any', 'Any', 'Any', 'Yes', '', 'No', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', '', '', '', 'Severe');

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
(2, 'Hinata', 'staff2', 'staff'),
(4, 'we', 'we', 'we'),
(5, 'WEWE', 'WEWE', 'WEWE');

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
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_facility`
--
ALTER TABLE `tbl_facility`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_facility`
--
ALTER TABLE `tbl_facility`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_logs`
--
ALTER TABLE `tbl_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=331;

--
-- AUTO_INCREMENT for table `tbl_patients`
--
ALTER TABLE `tbl_patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tbl_staff`
--
ALTER TABLE `tbl_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
