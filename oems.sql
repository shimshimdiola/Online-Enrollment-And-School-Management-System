-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2025 at 08:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oems`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grade_data`
--

CREATE TABLE `tbl_grade_data` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `subuid` int(11) NOT NULL,
  `first` float NOT NULL,
  `second` float NOT NULL,
  `midterm` float NOT NULL,
  `third` float NOT NULL,
  `fourth` float NOT NULL,
  `final` float NOT NULL,
  `gwa` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_grade_data`
--

INSERT INTO `tbl_grade_data` (`id`, `userid`, `subuid`, `first`, `second`, `midterm`, `third`, `fourth`, `final`, `gwa`) VALUES
(38, 61506, 59407, 70, 80, 75, 80, 100, 90, 82.5),
(39, 61506, 65273, 75, 76, 75.5, 97, 76.9, 86.95, 81.225),
(40, 61506, 60423, 80, 75, 77.5, 76, 77, 76.5, 77),
(41, 23052, 70428, 80, 80, 80, 97, 78, 87.5, 83.75),
(42, 57960, 56209, 76, 78, 77, 0, 0, 0, 38.5),
(43, 40573, 26109, 87, 80, 83.5, 0, 0, 0, 41.75),
(44, 40573, 97014, 90, 86, 88, 0, 0, 0, 44),
(45, 40573, 84365, 90, 89, 89.5, 0, 0, 0, 44.75),
(46, 40573, 56209, 90, 99, 94.5, 0, 0, 0, 47.25),
(47, 40631, 26109, 200, 100, 150, 0, 0, 0, 75);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_load_data`
--

CREATE TABLE `tbl_load_data` (
  `id` int(11) NOT NULL,
  `secuid` int(11) NOT NULL,
  `loaduid` int(11) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `subuid` int(11) NOT NULL,
  `fac` varchar(50) NOT NULL,
  `facuid` int(11) NOT NULL,
  `cstart` varchar(10) NOT NULL,
  `cend` varchar(10) NOT NULL,
  `days` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_load_data`
--

INSERT INTO `tbl_load_data` (`id`, `secuid`, `loaduid`, `sub`, `subuid`, `fac`, `facuid`, `cstart`, `cend`, `days`) VALUES
(6, 13809, 95786, 'recess', 75061, '022112221', 60751, '11:33', '00:00', 'tue'),
(10, 9624, 27395, 'Programming 2', 26059, 'diola, kianshim B.', 92304, '23:45', '11:46', 'wed/fri'),
(13, 13809, 79683, 'math', 40186, '022112221', 60751, '12:58', '12:59', 'mon/wed/fr'),
(19, 89132, 58634, 'flag ceremony', 0, 'N', 0, '06:30', '07:00', 'mon'),
(30, 34250, 26109, 'math', 31256, 'diola kishim G.', 67182, '13:36', '00:12', 'tue'),
(32, 34250, 29613, 'science', 0, 'susan', 50982, '00:12', '12:34', 'mon/tue/wed/fri'),
(33, 36280, 65273, 'math', 31256, 'diola kishim G.', 67182, '00:12', '02:12', 'mon/tue/wed/fri'),
(34, 36280, 59407, 'english', 0, 'susan', 50982, '00:12', '03:43', 'mon/tue/wed/thu/fri'),
(35, 7639, 97628, 'Programming 1', 83042, 'diola, kianshim B.', 92304, '07:00', '08:00', 'mon/tue/wed/thu/fri'),
(36, 7639, 20593, 'Programming 2', 26059, 'dummy account1', 0, '08:00', '09:00', 'tue/thu'),
(37, 89605, 53278, 'Programming 4', 48795, 'diola, kianshim B.', 92304, '08:00', '09:00', 'tue/fri'),
(38, 36280, 60423, 'science', 12, 'diola kishim G.', 67182, '11:11', '11:11', 'tue/thu'),
(39, 34250, 56209, 'Aralin panlipunan', 0, 'diola kishim G.', 67182, '12:23', '14:32', 'mon/thu'),
(41, 72981, 70428, 'science', 1924, 'darna, dar L.', 36457, '03:43', '12:33', 'tue/thu'),
(42, 72981, 18496, 'math', 51394, 'darna, dar L.', 36457, '04:06', '13:23', 'mon/fri'),
(43, 34250, 97014, 'algebra', 0, 'diola kishim G.', 67182, '16:23', '05:45', 'wed/fri'),
(44, 34250, 31098, 'mapeh', 0, 'susan', 50982, '04:54', '02:34', 'mon/tue/wed/thu/fri'),
(45, 34250, 84365, 'TLE', 0, 'diola kishim G.', 67182, '00:12', '13:42', 'mon/wed/fri'),
(46, 14085, 37021, 'science', 1924, 'darna, dar L.', 36457, '12:24', '13:25', 'mon/tue/wed/thu/fri'),
(47, 14085, 24071, 'math', 51394, 'darna, dar L.', 36457, '11:22', '00:19', 'tue/wed/fri');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notif_std`
--

CREATE TABLE `tbl_notif_std` (
  `id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `msg` varchar(100) NOT NULL,
  `msg_f` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_notif_std`
--

INSERT INTO `tbl_notif_std` (`id`, `status`, `userid`, `msg`, `msg_f`, `time`) VALUES
(4, 0, 40573, 'You have been successfully admitted!', 'registrar', ''),
(5, 0, 12047, 'You have been successfully admitted !', 'registrar', ''),
(7, 0, 12047, 'You have successfully enrolled!', 'registrar', ''),
(8, 0, 40573, 'You have been successfully admitted !', 'registrar', ''),
(9, 0, 40573, 'You have successfully enrolled!', 'registrar', ''),
(10, 0, 42571, 'You have been successfully admitted !', 'registrar', ''),
(11, 0, 42571, 'You have successfully enrolled!', 'registrar', ''),
(12, 0, 12047, 'You have been successfully admitted !', 'registrar', '03:09:31 AM'),
(13, 0, 12047, 'You have been successfully admitted !', 'registrar', '03:11:04 AM'),
(14, 0, 12047, 'You have been successfully admitted !', 'registrar', '09:13:24 AM'),
(15, 0, 12047, 'You have successfully enrolled!', 'registrar', ''),
(16, 0, 12047, 'You have successfully enrolled!', 'registrar', '09:33:56 AM'),
(17, 0, 40631, 'You have been successfully admitted !', 'registrar', '14:28:58 PM'),
(18, 0, 40631, 'You have successfully enrolled!', 'registrar', '14:32:07 PM'),
(19, 0, 40573, 'You have been successfully admitted !', 'registrar', '15:04:52 PM'),
(20, 0, 40573, 'You have successfully enrolled!', 'registrar', '15:05:01 PM'),
(21, 0, 57960, 'You have been successfully admitted !', 'registrar', '15:05:50 PM'),
(22, 0, 57960, 'You have successfully enrolled!', 'registrar', '15:06:52 PM'),
(23, 0, 42571, 'You have been successfully admitted !', 'registrar', '06:21:22 AM'),
(24, 0, 42571, 'You have successfully enrolled!', 'registrar', '06:21:37 AM'),
(25, 0, 61506, 'You have been successfully admitted !', 'registrar', '10:33:54 AM'),
(26, 0, 61506, 'You have successfully enrolled!', 'registrar', '10:34:15 AM'),
(27, 0, 23052, 'You have been successfully admitted !', 'registrar', '20:46:24 PM'),
(28, 0, 23052, 'You have successfully enrolled!', 'registrar', '20:46:39 PM'),
(29, 0, 27665, 'You have been successfully admitted !', 'admin', '16:24:23 PM'),
(30, 0, 27665, 'You have successfully enrolled!', 'admin', '16:26:43 PM'),
(31, 0, 85580, 'You have been successfully admitted !', 'admin', '11:15:02 AM'),
(32, 0, 85580, 'You have successfully enrolled!', 'admin', '11:19:04 AM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sec_data`
--

CREATE TABLE `tbl_sec_data` (
  `id` int(11) NOT NULL,
  `secuid` int(11) NOT NULL,
  `secname` varchar(50) NOT NULL,
  `secadvicer` varchar(50) NOT NULL,
  `adviceruid` int(11) NOT NULL,
  `secgrade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sec_data`
--

INSERT INTO `tbl_sec_data` (`id`, `secuid`, `secname`, `secadvicer`, `adviceruid`, `secgrade`) VALUES
(24, 34250, 'gold', 'diola kishim G.', 67182, 9),
(26, 36280, 'platinum', 'susan', 50982, 9),
(27, 7639, 'Franklin', 'diola, kianshim B.', 92304, 12),
(30, 14085, 'Blue', 'darna, dar L.', 36457, 7),
(31, 20139, '8-A', '022112221', 60751, 8),
(32, 89704, '10-A', 'palijaro, dennis P.', 15638, 10),
(33, 40367, '11-A', 'LAMOK, lam K.', 89170, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_std_data`
--

CREATE TABLE `tbl_std_data` (
  `id` int(11) NOT NULL,
  `idnumber` varchar(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `lrn` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `bdate` date NOT NULL,
  `etype` varchar(50) NOT NULL,
  `glevel` int(11) NOT NULL,
  `genroll` int(11) NOT NULL,
  `bplace` varchar(50) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `cstatus` varchar(50) NOT NULL,
  `ipa` varchar(50) NOT NULL,
  `tod` varchar(50) NOT NULL,
  `psno` varchar(50) NOT NULL,
  `citizenship` varchar(50) NOT NULL,
  `brgy` varchar(50) NOT NULL,
  `cmpc` varchar(50) NOT NULL,
  `zcode` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mnumber` varchar(11) NOT NULL,
  `f_ln` varchar(50) NOT NULL,
  `f_fn` varchar(50) NOT NULL,
  `f_mn` varchar(50) NOT NULL,
  `m_ln` varchar(50) NOT NULL,
  `m_fn` varchar(50) NOT NULL,
  `m_mn` varchar(50) NOT NULL,
  `balik_aral` varchar(50) NOT NULL,
  `std_req1` varchar(50) NOT NULL,
  `std_req2` varchar(50) NOT NULL,
  `std_req3` varchar(50) NOT NULL,
  `std_req4` varchar(50) NOT NULL,
  `std_req5` varchar(50) NOT NULL,
  `shigh` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `track` varchar(50) NOT NULL,
  `strand` varchar(50) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_std_data`
--

INSERT INTO `tbl_std_data` (`id`, `idnumber`, `userid`, `lrn`, `fname`, `lname`, `mname`, `bdate`, `etype`, `glevel`, `genroll`, `bplace`, `sex`, `cstatus`, `ipa`, `tod`, `psno`, `citizenship`, `brgy`, `cmpc`, `zcode`, `email`, `mnumber`, `f_ln`, `f_fn`, `f_mn`, `m_ln`, `m_fn`, `m_mn`, `balik_aral`, `std_req1`, `std_req2`, `std_req3`, `std_req4`, `std_req5`, `shigh`, `sem`, `track`, `strand`, `time`) VALUES
(11, '0', 40573, 2147483647, 'kian', 'diola', 'bruses', '2003-01-25', 'returnee', 9, 9, 'calipayan dulag', '', 'Annulled', '', '', '', 'filipino', 'calipayan dulag', 'tacloban', 6505, 'shimshimdiola@gamial.com', '927112413', 'diola', 'kian', 'bruses', 'diola', 'kian', 'diola', 'true', '8', '2112', 'calipayan', '233434', 'leyte', 'false', '', '', '', '2024-04-27 02:32:10'),
(13, '0', 14328, 1202102102, 'Jushua', 'Diola', 'martija', '2024-04-20', 'Contenuing', 12, 12, 'calipayan', 'male', 'Married', '', '', '', 'filipino', 'calipayan', 'dulag', 6505, 'kian@nro8.neda.gov.ph', '0', 'ricardo', 'diola', 'martija', 'mary jane', 'diola', 'bruses', 'false', '', '', '', '', '', 'false', '', '', '', '2024-04-27 02:32:10'),
(14, '0', 42571, 2147483647, 'kian', 'diola', 'lauzon', '2000-10-13', 'Contenuing', 12, 12, 'calipayan dulag', 'male', 'Single', 'N/A', 'N/A', 'N/A', 'filipino', 'calipayan dulag', 'tacloban', 6505, 'shimshimdiola@gamial.com', '09999999999', 'diola', 'kian', 'bruses', 'diola', 'kian', 'diola', 'true', '', '', '', '', '', 'false', '', '', '', '2024-04-27 02:32:10'),
(15, '0', 82398, 0, 'Rob', 'Morris', 'Jackson ', '2022-10-11', 'New Enrollee', 0, 7, '', 'male', '', '', '', '', '', '', '', 0, '', '0', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-27 02:32:10'),
(16, '0', 23052, 0, 'kian', 'diola', 'Bruses', '2024-04-16', 'New Enrollee', 7, 7, 'calipayan dulag', 'female', 'Single', '', '', '', 'filipino', 'calipayan dulag', 'tacloban', 6505, 'shimshimdiola@gamial.com', '927112413', 'diola', 'kian', '54', 'diola', 'kian', '454', 'false', '', '', '', '', '', 'false', '', '', '', '2024-04-27 02:32:10'),
(17, '0', 77182, 0, 'Shain jushua', 'Diola', 'Bruses ', '2001-06-22', 'Contenuing', 0, 12, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-27 02:32:10'),
(18, '0', 28937, 0, 'Diola ', 'Mary Jane ', 'Bruses ', '1983-04-20', 'New Enrollee', 0, 7, '', 'male', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-27 02:32:10'),
(19, '0', 85853, 0, 'Qua', 'Diola', 'Bruses', '2003-04-09', 'New Enrollee', 0, 7, '', 'male', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-27 02:32:10'),
(20, '0', 12047, 0, 'lauzon', 'lauzon', 'lauzon', '2003-01-25', 'New Enrollee', 0, 7, '', 'male', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-27 02:32:10'),
(21, '0', 40631, 0, 'Mary', 'Jane ', 'Bruses', '2024-04-25', 'Contenuing', 0, 9, '', 'male', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-27 02:32:10'),
(22, '2024-2023', 57960, 0, 'Xai', 'Xain', 'Xao', '2024-04-25', 'Contenuing', 9, 9, 'Dulag', 'female', 'Single', '', '', '', 'Fil', 'Calipayan', 'Dulag', 0, 'elsielauzon5@gmail.com', '09927112413', 'Diola', 'Ricardo', 'Martija', 'Diola', 'Mary jane', 'Bruses', 'true', '', '', '', '', '', 'false', '', '', '', '2024-04-27 02:32:10'),
(23, '', 61506, 0, 'Zian', 'Bolt', 'Lauzon', '2024-04-27', 'Contenuing', 0, 9, '', 'male', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-27 02:32:10'),
(24, '', 27665, 0, 'kian', 'diola', 'cwevwe', '1939-03-12', 'New Enrollee', 7, 7, 'calipayan dulag', 'female', 'Annulled', '', '', '', 'filipino', 'calipayan dulag', 'tacloban', 6505, 'shimshimdiola@gamial.com', '927112413', 'diola', 'kian', 'bruses', 'diola', 'kian', 'diola', 'true', '', '', '', '', '', 'false', '', '', '', '2024-04-29 08:15:46'),
(25, '', 35814, 0, 'kian', 'diola', 'w', '2003-02-11', 'New Enrollee', 0, 7, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-30 04:25:09'),
(26, '', 24291, 0, 'kian', 'diola', 'bruses', '2003-03-12', 'New Enrollee', 0, 7, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-30 04:25:51'),
(27, '', 52793, 0, 'Qua', 'Jane ', 'Lauzon', '2024-04-30', 'New Enrollee', 0, 7, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-30 04:26:44'),
(28, '', 51948, 0, 'Diola', 'Shoanjushua', 'Bruses', '2003-05-01', 'New Enrollee', 0, 7, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2024-04-30 23:37:09'),
(29, '', 85580, 0, 'Kian shim', 'Diola', 'Bruses', '2003-01-25', 'New Enrollee', 0, 7, '', '', '', '', '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2025-09-20 03:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_std_docu`
--

CREATE TABLE `tbl_std_docu` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `trg_admit` int(11) NOT NULL,
  `trg_lock` int(11) NOT NULL,
  `eform` varchar(100) NOT NULL,
  `f137` varchar(100) NOT NULL,
  `f138` varchar(100) NOT NULL,
  `gmoral` varchar(100) NOT NULL,
  `psa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_std_docu`
--

INSERT INTO `tbl_std_docu` (`id`, `userid`, `trg_admit`, `trg_lock`, `eform`, `f137`, `f138`, `gmoral`, `psa`) VALUES
(51, 40573, 1, 0, '6628b7976df57_enrollmentform.pdf', '662f56940c3d2_form137.pdf', '662f569b1f998_form138.pdf', '662f56a9aeef4_goodmoral.pdf', '662f56a055351_psa-livebirth.pdf'),
(52, 12047, 1, 1, '6628b7976df57_enrollmentform.pdf', '6628b7b653041_form137.pdf', '6628b7b8cc60e_form138.pdf', '6628b7bc99e45_goodmoral.pdf', '6628b7c0904f2_psa-livebirth.pdf'),
(53, 42571, 1, 0, '6628c30186e16_enrollmentform.pdf', '6628c31cdef1a_form137.pdf', '6628c31fead0d_form138.pdf', '6628c323b010e_goodmoral.pdf', '6628c326f0e2f_psa-livebirth.pdf'),
(54, 40631, 1, 0, '6629f818513ac_enrollmentform.PDF', '6629f8867b9a7_form137.PDF', '6629f8d3c922d_form138.PDF', '6629f8972cee4_goodmoral.PDF', '662b7682edc4a_psa-livebirth.pdf'),
(55, 57960, 1, 0, '662a00be1d397_enrollmentform.PDF', '662a00dede7b2_form137.PDF', '662a00e6d772e_form138.PDF', '662a00ecce4fb_goodmoral.PDF', '662a00f7ba12f_psa-livebirth.PDF'),
(56, 61506, 1, 0, '662c631e14072_enrollmentform.docx', '662c6335a25a8_form137.PDF', '662c633fa2f1c_form138.PDF', '662c634a1e379_goodmoral.PDF', '662c635378717_psa-livebirth.PDF'),
(57, 23052, 1, 1, '662cf375074db_enrollmentform.docx', '662cf37b2c74c_form137.docx', '662cf38016ee0_form138.docx', '662cf385d4e6e_goodmoral.docx', '662cf38aac2ac_psa-livebirth.docx'),
(58, 27665, 1, 0, '662f57aae0a3e_enrollmentform.docx', '662f5961b3dd6_form137.docx', '662f59671767b_form138.docx', '662f596f85b64_goodmoral.docx', '662f596b72ef4_psa-livebirth.docx'),
(59, 85580, 1, 0, '68ce1c1e4591e_enrollmentform.pdf', '68ce1ca470e50_form137.docx', '68ce1cd80e110_form138.pdf', '68ce1d02b8609_goodmoral.pdf', '68ce1d07b896b_psa-livebirth.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_std_enroll`
--

CREATE TABLE `tbl_std_enroll` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `secuid` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_std_enroll`
--

INSERT INTO `tbl_std_enroll` (`id`, `userid`, `secuid`, `grade`, `timestamp`) VALUES
(13, 12047, 89132, 7, '2024-04-25 07:07:53'),
(14, 40631, 34250, 9, '2024-04-25 07:07:53'),
(15, 40573, 34250, 9, '2024-04-25 07:07:53'),
(16, 57960, 34250, 9, '2024-04-25 07:07:53'),
(17, 42571, 7639, 12, '2024-04-25 22:21:37'),
(18, 61506, 36280, 9, '2024-04-27 02:34:15'),
(19, 23052, 72981, 7, '2024-04-27 12:46:39'),
(20, 27665, 14085, 7, '2024-04-29 08:26:43'),
(21, 85580, 14085, 7, '2025-09-20 03:19:04');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_std_reg`
--

CREATE TABLE `tbl_std_reg` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_std_reg`
--

INSERT INTO `tbl_std_reg` (`id`, `userid`) VALUES
(38, 12047),
(39, 40631),
(40, 40573),
(41, 57960),
(42, 42571),
(43, 61506),
(44, 23052),
(45, 27665),
(46, 85580);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_data`
--

CREATE TABLE `tbl_sub_data` (
  `id` int(11) NOT NULL,
  `subuid` int(11) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `subg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sub_data`
--

INSERT INTO `tbl_sub_data` (`id`, `subuid`, `sub`, `subg`) VALUES
(1, 31256, 'math', 9),
(7, 83042, 'Programming 1', 12),
(8, 26059, 'Programming 2', 12),
(10, 51394, 'math', 7),
(11, 1924, 'science', 7),
(12, 75061, 'recess', 8),
(15, 20498, 'Programming 3', 12),
(16, 48795, 'Programming 4', 12),
(17, 40186, 'math', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(200) NOT NULL,
  `ipadd` varchar(50) NOT NULL,
  `utype` varchar(50) NOT NULL,
  `grade` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `fullname`, `userid`, `username`, `password`, `hash`, `ipadd`, `utype`, `grade`, `time`) VALUES
(14, 'diola, kian shim b.', 40573, 'kdiola', 'BusdwZj0', '$2y$10$jGC.crAKKkhU8vZ5k/9oneVpA5cu6.cwzwr7uzlGv4Iw62exj.VTK', '192.168.100.50', 'student', 0, '2024-04-28 10:24:12'),
(16, 'Diola, JushuaB.', 14328, 'JDiola', 'PNjIieHZ', '$2y$10$Jvx9JWc1ekfLfuY3n8jNu.mhf7qoDxcWzcVR6fnXdxOIieCFgNC5i', '192.168.100.50', 'registrar', 0, '2024-04-28 10:24:12'),
(17, 'diola, elsie l.', 42571, 'ediola', 'aywGEeQP', '$2y$10$oG20ayVwEG13uS8V6Es9a./Tme574TBr9E6b3ellZvb6OiAp8bv7a', '192.168.100.50', 'student', 0, '2024-04-28 10:24:12'),
(18, 'Morris, Rob J.', 82398, 'RMorris', 'gkWvxZgf', '$2y$10$t1jScYNZ0ukbeW7KnUW1NebaDaO3dLZvK5rua9sNi2PDuP3xMSGtu', '10.5.4.174', 'admin', 0, '2024-04-28 10:24:12'),
(19, 'Diola, shim B.', 23052, 'sDiola', 'FJEqh6XZ', '$2y$10$8jaAem18shxTdbTNzOrm..EaayI2P3FQGleUjwSGYunS7hTbdH.lW', '10.5.4.174', 'student', 0, '2024-04-28 10:24:12'),
(20, 'Diola, Shain jushua B.', 77182, 'SDiola', '90nqYDeb', '$2y$10$xgW/In0isxgWC0ktKFGo2uuh4SqmRoVJFrOd6x.Re8hmmc8RBjeau', '10.5.4.174', 'student', 0, '2024-04-28 10:24:12'),
(23, '022112221', 60751, '', '123', '$2y$10$MzDEmiSiU9XuW2iAwjd2MeykUHzlKVd5djdihCLhsXFeQ6wDbMXOe', '', 'faculty', 8, '2024-04-28 10:24:12'),
(24, 'Registrar, Reg B.', 4761, '', '1234', '$2y$10$kKj/QOD1pkWBp7kK4CUmiuphzYhTh/2yQvw8btBTbRx.uEjXFmAxa', '', 'registrar', 7, '2024-04-28 10:24:12'),
(25, 'diola 123', 75693, '', '123', '$2y$10$moepVXBGT3eJ8iK2zBTDwuoADJuqMX1EUI3XAnXj5lghAVy698iB6', '', 'registrar', 0, '2024-04-28 10:24:12'),
(26, 'diola kishim G.', 67182, 'KDiola**', '123', '$2y$10$dI4W6v2i5lIgkdt/V.Ksq.Bho3YHU/C11CU0OHMIcSuT/hSrfH7w2', '', 'faculty', 9, '2024-04-28 10:24:12'),
(27, 'darna, dar L.', 36457, 'ddarna**', '123', '$2y$10$etb2.oI7XoPkWO8rtfOqoetKHzF79t7FEBFVhf4NePdY4HSf1DwPe', '', 'faculty', 7, '2024-04-28 10:24:12'),
(28, 'LAMOK, lam K.', 89170, 'lamok**', '1234', '$2y$10$inPxWyF3dic23VSdLoZnuOtVSBWfMJ0CY2S0cwGzX6cf36KH1FOO.', '', 'faculty', 11, '2024-04-28 10:24:12'),
(29, 'palijaro, dennis P.', 15638, 'Dennisp**', '123', '$2y$10$0pqa612rVGVvjfiNz2JgLOkH9bh7sP/PQ2/jdWYExzgtvbbpAlHau', '', 'faculty', 10, '2024-04-28 10:24:12'),
(30, 'diola, kianshim B.', 92304, 'diola**', '123', '$2y$10$zHdSWFvGni.xPMZ6apofs.VdzTQQ/BXCMnzemohutMDdmRqAXwoSy', '', 'faculty', 12, '2024-04-28 10:24:12'),
(31, 'Mary Jane , Diola  B.', 28937, 'DMary Jane ', '8hWadCZF', '$2y$10$K/EcPCkkStou1JagUR070OnlX8/OCFf022SshnOuptr0m29v1Bq56', '192.168.100.50', 'student', 0, '2024-04-28 10:24:12'),
(32, 'Diola, Qua B.', 85853, 'QDiola', '5lJ1pH5G', '$2y$10$ptpwu3PK3HEacnW2FV6vxu7tx.hOajd6oBjfhalKOIhtN277TXf26', '10.5.5.53', 'student', 0, '2024-04-28 10:24:12'),
(33, 'lauzon, lauzon l.', 12047, 'llauzon', 'ahBSBrwk', '$2y$10$CP1KXD3BaSlWRg8LKRLdb.45tE6Z9Rmfy5YzyDkTSqJHKFksyqrw2', '10.5.5.53', 'student', 0, '2024-04-28 10:24:12'),
(34, 'susan', 50982, '90', '123', '$2y$10$32IelSYosYTWetyathUBq.ljFiK.H1kS2OA/Zm8sclcD2A8VlhKce', '', 'faculty', 9, '2024-04-28 10:24:12'),
(35, 'Jane , Mary B.', 40631, 'MJane ', '9rCnHOeo', '$2y$10$fgoPp9O6iEdMVz5bQpFGeOytJRD/P1ktpWNTsxO6CGPZaO0YA81KW', '10.5.5.53', 'student', 0, '2024-04-28 10:24:12'),
(36, 'Xain, Xai X.', 57960, 'XXain', '5ZX5TQ1b', '$2y$10$kZa0r6ehfZp8Wzm.sQ3tku/iEOJO96o92GbHnVG9BXLKEF463fMhq', '10.5.5.53', 'student', 0, '2024-04-28 10:24:12'),
(37, 'Bolt, Zian L.', 61506, 'ZBolt', 'ubZNbzCS', '$2y$10$sH9lSh6XcwI13PBnRFwGs.2muJfsBTy7F/5RCGiZe6FuV4.PgQyja', '192.168.100.50', 'student', 0, '2024-04-28 10:24:12'),
(38, 'krejief, fosiew c.', 27665, 'fkrejief', '654c2cpl', '$2y$10$XDeNf7WVpFIagf4dQsktuO2tmHLmWs4CqtZmwxeBW/WjTjAZtXZfi', '::1', 'student', 0, '2024-04-29 08:15:46'),
(39, 'diola, kian w.', 35814, '1220-3232', 'xWDWu9IC', '$2y$10$I7lfzn1xdVM44P1oKn7G6enX42Q7xjzLDqqS2soMXj1m6uFVHrT9u', '::1', 'student', 0, '2024-04-30 04:25:09'),
(40, 'diola, kian b.', 24291, '1223-2422', 'lGNHoTnB', '$2y$10$mPh9zLoShokl95KkoMTyrumX7H6UfDrtVPvQdaMZCd9InafpeyuIu', '::1', 'student', 0, '2024-04-30 04:25:51'),
(41, 'Jane , Qua L.', 52793, '2023-1245', 'Qn7r5YIJ', '$2y$10$xfnULbvyhMjqdwmfyYWMXOCmKDobs6p8gNvXOpEEPcQCI7mYvp8D.', '10.5.5.53', 'student', 0, '2024-04-30 04:26:44'),
(42, 'Shoanjushua, Diola B.', 51948, '3445-6688', 'zbUWufJj', '$2y$10$tNq.vwwu21gxsa8b7e/NmeVAMPefIHYiOfviTlNC4Srcasrn3Eyeq', '192.168.100.50', 'student', 0, '2024-04-30 23:37:09'),
(43, 'administrator, admin A.', 81379, 'administrator**', '1234', '$2y$10$M/YhyGzeQxVfW/3ijRXTze8Cgb9eZCe6rMJfQHYZ8TSnJ3vLfCkSq', '', 'admin', 0, '2024-05-01 00:18:22'),
(44, 'Diola, Kian shim B.', 85580, '0909-0909', 'qqhqpyX8', '$2y$10$lm/GnH4ABCDorEm0XUTauue99Mdu/cTp5X6sgrr6vEnKS.YtI5uPu', '192.168.1.48', 'student', 0, '2025-09-20 03:11:30'),
(45, 'Wojak', 3489, 'admin', 'admin***', '$2y$10$LSTUNsooYNuzdjLZ5A7UyeCNw52U56WStG5WBt9fJb3JNYJCRMevy', '', 'admin', 0, '2025-09-23 08:56:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_grade_data`
--
ALTER TABLE `tbl_grade_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_load_data`
--
ALTER TABLE `tbl_load_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_notif_std`
--
ALTER TABLE `tbl_notif_std`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sec_data`
--
ALTER TABLE `tbl_sec_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_std_data`
--
ALTER TABLE `tbl_std_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_std_docu`
--
ALTER TABLE `tbl_std_docu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_std_enroll`
--
ALTER TABLE `tbl_std_enroll`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_std_reg`
--
ALTER TABLE `tbl_std_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sub_data`
--
ALTER TABLE `tbl_sub_data`
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
-- AUTO_INCREMENT for table `tbl_grade_data`
--
ALTER TABLE `tbl_grade_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_load_data`
--
ALTER TABLE `tbl_load_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `tbl_notif_std`
--
ALTER TABLE `tbl_notif_std`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_sec_data`
--
ALTER TABLE `tbl_sec_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_std_data`
--
ALTER TABLE `tbl_std_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_std_docu`
--
ALTER TABLE `tbl_std_docu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbl_std_enroll`
--
ALTER TABLE `tbl_std_enroll`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_std_reg`
--
ALTER TABLE `tbl_std_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_sub_data`
--
ALTER TABLE `tbl_sub_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
