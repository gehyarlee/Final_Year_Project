-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2023 at 12:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clams`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign_lab`
--

CREATE TABLE `assign_lab` (
  `id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `lab_id` int(11) NOT NULL,
  `status` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `assign_lab`
--

INSERT INTO `assign_lab` (`id`, `teacher_id`, `lab_id`, `status`) VALUES
(1, 21, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `complaint`
--

CREATE TABLE `complaint` (
  `Id` int(11) NOT NULL,
  `Lab` varchar(255) DEFAULT NULL,
  `PCNum` int(11) DEFAULT NULL,
  `Parts` varchar(255) DEFAULT NULL,
  `TeacherId` int(11) DEFAULT NULL,
  `Concerns` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Status` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `laboratory`
--

CREATE TABLE `laboratory` (
  `id` int(11) NOT NULL,
  `lab_name` varchar(255) NOT NULL,
  `lab_location` varchar(255) NOT NULL,
  `status` varchar(5) DEFAULT NULL,
  `login_status` int(5) DEFAULT NULL,
  `created_date` varchar(255) DEFAULT NULL,
  `login_date` varchar(255) DEFAULT NULL,
  `logout_date` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `laboratory`
--

INSERT INTO `laboratory` (`id`, `lab_name`, `lab_location`, `status`, `login_status`, `created_date`, `login_date`, `logout_date`) VALUES
(1, 'lab 1', 'Ground Floor', '1', 0, '1696788755', NULL, NULL),
(2, 'lab 2', 'First Floor', '1', 0, '1696789897', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `lab_ipaddress`
--

CREATE TABLE `lab_ipaddress` (
  `Id` int(11) NOT NULL,
  `Lab` varchar(255) DEFAULT NULL,
  `IpAddress` varchar(255) DEFAULT NULL,
  `Unit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lab_ipaddress`
--

INSERT INTO `lab_ipaddress` (`Id`, `Lab`, `IpAddress`, `Unit`) VALUES
(1, 'lab1', '11111', 'pc-1'),
(2, 'lab1', '242', 'pc-4'),
(3, 'lab1', '242', 'pc-4'),
(4, 'lab2', '123123', 'pc-2'),
(5, 'lab2 ', '34123434', 'pc-3'),
(6, 'lab2 ', '234324', 'pc-34'),
(7, 'lab2 ', '324342', 'pc-35'),
(8, 'lab1', '324', 'pc-5'),
(9, 'lab3 ', '23431434324', 'undefined'),
(10, 'lab3 ', '23432', 'pc-46'),
(11, 'lab3 ', '23434', 'pc-19'),
(12, 'lab4 ', '43545', 'pc-43'),
(13, 'lab4 ', '324', 'pc-2'),
(14, 'lab4 ', '6666', 'pc-28'),
(15, 'lab5 ', '23342', 'undefined'),
(16, 'lab5 ', '3423', 'pc-26'),
(17, 'lab5 ', '232432', 'pc-39'),
(18, 'lab6 ', '32434', 'pc-13'),
(19, 'lab6 ', '42323', 'pc-1');

-- --------------------------------------------------------

--
-- Table structure for table `lab_status`
--

CREATE TABLE `lab_status` (
  `Id` int(11) NOT NULL,
  `TeacherId` int(11) DEFAULT NULL,
  `Lab` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lab_status`
--

INSERT INTO `lab_status` (`Id`, `TeacherId`, `Lab`, `Status`) VALUES
(11, 21, 'lab1', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `lab_units`
--

CREATE TABLE `lab_units` (
  `Id` int(11) NOT NULL,
  `UnitCode` varchar(255) DEFAULT NULL,
  `LabCode` varchar(255) DEFAULT NULL,
  `PeripheralsId` int(5) DEFAULT NULL,
  `SerialNumber` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `lab_units`
--

INSERT INTO `lab_units` (`Id`, `UnitCode`, `LabCode`, `PeripheralsId`, `SerialNumber`) VALUES
(62, 'pc-3', 'lab1 ', 14, '343234'),
(63, 'pc-3', 'lab1 ', 2, '342'),
(64, 'pc-3', 'lab1 ', 7, '3423'),
(65, 'pc-3', 'lab1 ', 30, '43423'),
(66, 'pc-3', 'lab1 ', 25, '234324'),
(67, 'pc-3', 'lab1 ', 17, '234'),
(68, 'pc-2', 'lab1 ', 14, '666'),
(69, 'pc-2', 'lab1 ', 2, '666'),
(70, 'pc-2', 'lab1 ', 10, '666'),
(71, 'pc-2', 'lab1 ', 29, '666'),
(72, 'pc-2', 'lab1 ', 26, '66'),
(73, 'pc-2', 'lab1 ', 17, '666'),
(92, 'pc-1', 'lab1', 15, '2342342'),
(93, 'pc-1', 'lab1', 6, '43423'),
(94, 'pc-1', 'lab1', 7, '3423234'),
(95, 'pc-1', 'lab1', 29, '34234'),
(96, 'pc-1', 'lab1', 26, '234'),
(97, 'pc-1', 'lab1', 17, '234'),
(98, 'pc-9', 'lab1', 15, '444'),
(99, 'pc-9', 'lab1', 2, '44'),
(100, 'pc-9', 'lab1', 10, '44'),
(101, 'pc-9', 'lab1', 29, '44'),
(102, 'pc-9', 'lab1', 25, '44'),
(103, 'pc-9', 'lab1', 17, '444'),
(128, 'pc-2', 'lab1', 14, '666'),
(129, 'pc-2', 'lab1', 2, '666'),
(130, 'pc-2', 'lab1', 10, '666'),
(131, 'pc-2', 'lab1', 29, '666'),
(132, 'pc-2', 'lab1', 26, '66'),
(133, 'pc-2', 'lab1', 17, '666'),
(134, 'pc-2', 'lab1', 14, '666'),
(135, 'pc-2', 'lab1', 2, '666'),
(136, 'pc-2', 'lab1', 10, '666'),
(137, 'pc-2', 'lab1', 29, '777'),
(138, 'pc-2', 'lab1', 26, '66'),
(139, 'pc-2', 'lab1', 17, '666'),
(140, 'pc-4', 'lab1', 13, '4'),
(141, 'pc-4', 'lab1', 2, '4'),
(142, 'pc-4', 'lab1', 7, '4'),
(143, 'pc-4', 'lab1', 29, '4'),
(144, 'pc-4', 'lab1', 25, '4'),
(145, 'pc-4', 'lab1', 17, '4'),
(146, 'pc-2', 'lab1', 14, '666'),
(147, 'pc-2', 'lab1', 2, '666'),
(148, 'pc-2', 'lab1', 10, '666'),
(149, 'pc-2', 'lab1', 29, '777'),
(150, 'pc-2', 'lab1', 26, '66'),
(151, 'pc-2', 'lab1', 17, '666'),
(152, 'pc-1', 'lab1', 15, '2342342'),
(153, 'pc-1', 'lab1', 6, '43423'),
(154, 'pc-1', 'lab1', 7, '3423234'),
(155, 'pc-1', 'lab1', 29, '34234'),
(156, 'pc-1', 'lab1', 26, '234'),
(157, 'pc-1', 'lab1', 17, '234'),
(158, 'pc-1', 'lab1', 15, '2342342'),
(159, 'pc-1', 'lab1', 6, '43423'),
(160, 'pc-1', 'lab1', 7, '3423234'),
(161, 'pc-1', 'lab1', 29, '34234'),
(162, 'pc-1', 'lab1', 26, '234'),
(163, 'pc-1', 'lab1', 17, '234'),
(164, 'pc-1', 'lab1', 15, '2342342'),
(165, 'pc-1', 'lab1', 6, '43423'),
(166, 'pc-1', 'lab1', 7, '3423234'),
(167, 'pc-1', 'lab1', 29, '34234'),
(168, 'pc-1', 'lab1', 26, '234'),
(169, 'pc-1', 'lab1', 17, '234'),
(170, 'pc-1', 'lab1', 15, '2342342'),
(171, 'pc-1', 'lab1', 6, '43423'),
(172, 'pc-1', 'lab1', 7, '3423234'),
(173, 'pc-1', 'lab1', 29, '34234'),
(174, 'pc-1', 'lab1', 26, '234'),
(175, 'pc-1', 'lab1', 17, '234'),
(176, 'pc-1', 'lab1', 15, '2342342'),
(177, 'pc-1', 'lab1', 6, '43423'),
(178, 'pc-1', 'lab1', 7, '3423234'),
(179, 'pc-1', 'lab1', 29, '34234'),
(180, 'pc-1', 'lab1', 26, '234'),
(181, 'pc-1', 'lab1', 17, '234'),
(182, 'pc-3', 'lab1', 14, '343234'),
(183, 'pc-3', 'lab1', 2, '342'),
(184, 'pc-3', 'lab1', 7, '3423'),
(185, 'pc-3', 'lab1', 30, '43423'),
(186, 'pc-3', 'lab1', 25, '234324'),
(187, 'pc-3', 'lab1', 17, '234'),
(188, 'pc-3', 'lab1', 14, '343234'),
(189, 'pc-3', 'lab1', 2, '342'),
(190, 'pc-3', 'lab1', 7, '3423'),
(191, 'pc-3', 'lab1', 30, '43423'),
(192, 'pc-3', 'lab1', 25, '234324'),
(193, 'pc-3', 'lab1', 17, '234'),
(194, 'pc-3', 'lab1', 14, '343234'),
(195, 'pc-3', 'lab1', 2, '342'),
(196, 'pc-3', 'lab1', 7, '3423'),
(197, 'pc-3', 'lab1', 30, '43423'),
(198, 'pc-3', 'lab1', 25, '234324'),
(199, 'pc-3', 'lab1', 17, '234'),
(200, 'pc-3', 'lab1', 14, '343234'),
(201, 'pc-3', 'lab1', 2, '342'),
(202, 'pc-3', 'lab1', 7, '3423'),
(203, 'pc-3', 'lab1', 30, '43423'),
(204, 'pc-3', 'lab1', 25, '234324'),
(205, 'pc-3', 'lab1', 17, '234'),
(206, 'pc-3', 'lab1', 14, '343234'),
(207, 'pc-3', 'lab1', 2, '342'),
(208, 'pc-3', 'lab1', 7, '3423'),
(209, 'pc-3', 'lab1', 30, '43423'),
(210, 'pc-3', 'lab1', 25, '234324'),
(211, 'pc-3', 'lab1', 17, '234'),
(212, 'pc-4', 'lab1', 13, '4'),
(213, 'pc-4', 'lab1', 2, '4'),
(214, 'pc-4', 'lab1', 7, '4'),
(215, 'pc-4', 'lab1', 29, '4'),
(216, 'pc-4', 'lab1', 25, '4'),
(217, 'pc-4', 'lab1', 17, '4'),
(218, 'pc-4', 'lab1', 13, '4'),
(219, 'pc-4', 'lab1', 2, '4'),
(220, 'pc-4', 'lab1', 7, '4'),
(221, 'pc-4', 'lab1', 29, '4'),
(222, 'pc-4', 'lab1', 25, '4'),
(223, 'pc-4', 'lab1', 17, '4'),
(224, 'pc-4', 'lab1', 13, '4'),
(225, 'pc-4', 'lab1', 2, '4'),
(226, 'pc-4', 'lab1', 7, '4'),
(227, 'pc-4', 'lab1', 29, '4'),
(228, 'pc-4', 'lab1', 25, '4'),
(229, 'pc-4', 'lab1', 17, '4'),
(230, 'pc-1', 'lab1', 15, '2342342'),
(231, 'pc-1', 'lab1', 6, '43423'),
(232, 'pc-1', 'lab1', 7, '3423234'),
(233, 'pc-1', 'lab1', 29, '34234'),
(234, 'pc-1', 'lab1', 26, '234'),
(235, 'pc-1', 'lab1', 17, '234'),
(236, 'pc-1', 'lab1', 15, '2342342'),
(237, 'pc-1', 'lab1', 6, '43423'),
(238, 'pc-1', 'lab1', 7, '3423234'),
(239, 'pc-1', 'lab1', 29, '34234'),
(240, 'pc-1', 'lab1', 26, '234'),
(241, 'pc-1', 'lab1', 17, '234'),
(242, 'pc-2', 'lab2', 13, '12312312'),
(243, 'pc-2', 'lab2', 6, '123112'),
(244, 'pc-2', 'lab2', 7, '232132'),
(245, 'pc-2', 'lab2', 29, '23123'),
(246, 'pc-2', 'lab2', 27, '123'),
(247, 'pc-2', 'lab2', 17, '123'),
(248, 'pc-3', 'lab2 ', 13, '24223434'),
(249, 'pc-3', 'lab2 ', 2, '1324133'),
(250, 'pc-3', 'lab2 ', 7, '12341234'),
(251, 'pc-3', 'lab2 ', 30, '3412334'),
(252, 'pc-3', 'lab2 ', 26, '134234'),
(253, 'pc-3', 'lab2 ', 18, '12343'),
(254, 'pc-34', 'lab2 ', 14, '43324'),
(255, 'pc-34', 'lab2 ', 2, '2342'),
(256, 'pc-34', 'lab2 ', 7, '23324'),
(257, 'pc-34', 'lab2 ', 29, '23424'),
(258, 'pc-34', 'lab2 ', 25, '234342'),
(259, 'pc-34', 'lab2 ', 17, '23423'),
(260, 'pc-35', 'lab2 ', 14, '2342'),
(261, 'pc-35', 'lab2 ', 2, '2434'),
(262, 'pc-35', 'lab2 ', 7, '24234'),
(263, 'pc-35', 'lab2 ', 29, '3243'),
(264, 'pc-35', 'lab2 ', 25, '43'),
(265, 'pc-35', 'lab2 ', 18, '3424'),
(266, 'pc-5', 'lab1', 15, '132'),
(267, 'pc-5', 'lab1', 2, '234233'),
(268, 'pc-5', 'lab1', 7, '3'),
(269, 'pc-5', 'lab1', 29, '32433'),
(270, 'pc-5', 'lab1', 25, '3'),
(271, 'pc-5', 'lab1', 18, '33'),
(272, 'undefined', 'lab3 ', 14, '23423'),
(273, 'undefined', 'lab3 ', 2, '234232'),
(274, 'undefined', 'lab3 ', 7, '23434'),
(275, 'undefined', 'lab3 ', 30, '32443'),
(276, 'undefined', 'lab3 ', 25, '234342'),
(277, 'undefined', 'lab3 ', 17, '2343423'),
(278, 'pc-46', 'lab3 ', 13, '324'),
(279, 'pc-46', 'lab3 ', 2, '43'),
(280, 'pc-46', 'lab3 ', 7, '24234'),
(281, 'pc-46', 'lab3 ', 29, '44'),
(282, 'pc-46', 'lab3 ', 26, '234342234'),
(283, 'pc-46', 'lab3 ', 18, '2432'),
(284, 'pc-19', 'lab3 ', 13, '23423'),
(285, 'pc-19', 'lab3 ', 2, '23423223'),
(286, 'pc-19', 'lab3 ', 7, '23434234'),
(287, 'pc-19', 'lab3 ', 29, '3423'),
(288, 'pc-19', 'lab3 ', 26, '234342'),
(289, 'pc-19', 'lab3 ', 17, '234'),
(290, 'pc-43', 'lab4 ', 13, '345'),
(291, 'pc-43', 'lab4 ', 6, '34535'),
(292, 'pc-43', 'lab4 ', 7, '34554'),
(293, 'pc-43', 'lab4 ', 29, '345'),
(294, 'pc-43', 'lab4 ', 26, '34534'),
(295, 'pc-43', 'lab4 ', 18, '4354'),
(296, 'pc-2', 'lab4 ', 14, '234324'),
(297, 'pc-2', 'lab4 ', 2, '2343'),
(298, 'pc-2', 'lab4 ', 7, '2423434'),
(299, 'pc-2', 'lab4 ', 30, '3243324'),
(300, 'pc-2', 'lab4 ', 25, '234342'),
(301, 'pc-2', 'lab4 ', 17, '234'),
(302, 'pc-28', 'lab4 ', 14, '777'),
(303, 'pc-28', 'lab4 ', 6, '777'),
(304, 'pc-28', 'lab4 ', 10, '777'),
(305, 'pc-28', 'lab4 ', 29, '77'),
(306, 'pc-28', 'lab4 ', 25, '777'),
(307, 'pc-28', 'lab4 ', 17, '777'),
(308, 'undefined', 'lab5 ', 15, '2343'),
(309, 'undefined', 'lab5 ', 2, '234'),
(310, 'undefined', 'lab5 ', 7, '234'),
(311, 'undefined', 'lab5 ', 29, '4'),
(312, 'undefined', 'lab5 ', 25, '32423'),
(313, 'undefined', 'lab5 ', 17, '2344'),
(314, 'pc-26', 'lab5 ', 15, '1312'),
(315, 'pc-26', 'lab5 ', 6, '1232'),
(316, 'pc-26', 'lab5 ', 7, '213'),
(317, 'pc-26', 'lab5 ', 29, '4'),
(318, 'pc-26', 'lab5 ', 25, '234342'),
(319, 'pc-26', 'lab5 ', 17, '234'),
(320, 'pc-39', 'lab5 ', 16, '2'),
(321, 'pc-39', 'lab5 ', 6, '2'),
(322, 'pc-39', 'lab5 ', 7, '22'),
(323, 'pc-39', 'lab5 ', 30, '2'),
(324, 'pc-39', 'lab5 ', 26, '2'),
(325, 'pc-39', 'lab5 ', 17, '2342'),
(326, 'pc-13', 'lab6 ', 14, '2344'),
(327, 'pc-13', 'lab6 ', 2, '23434'),
(328, 'pc-13', 'lab6 ', 10, '34342'),
(329, 'pc-13', 'lab6 ', 29, '42344'),
(330, 'pc-13', 'lab6 ', 25, '234234'),
(331, 'pc-13', 'lab6 ', 17, '23434'),
(332, 'pc-1', 'lab6 ', 14, '23423'),
(333, 'pc-1', 'lab6 ', 6, '4'),
(334, 'pc-1', 'lab6 ', 10, '24234'),
(335, 'pc-1', 'lab6 ', 30, '23123'),
(336, 'pc-1', 'lab6 ', 26, '4'),
(337, 'pc-1', 'lab6 ', 17, '4');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `Id` int(11) NOT NULL,
  `TeacherId` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL,
  `Lab` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logs_admin`
--

CREATE TABLE `logs_admin` (
  `Id` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `maintenance`
--

CREATE TABLE `maintenance` (
  `Id` int(11) NOT NULL,
  `StudentAssisId` int(11) DEFAULT NULL,
  `Lab` varchar(255) DEFAULT NULL,
  `Units` varchar(255) DEFAULT NULL,
  `Issue` varchar(255) DEFAULT NULL,
  `IssueDeviceName` varchar(255) DEFAULT NULL,
  `IssueDeviceSerial` varchar(255) DEFAULT NULL,
  `ActionTaken` varchar(255) DEFAULT NULL,
  `PeripheralsId` varchar(5) DEFAULT NULL,
  `PeripherlasSerial` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Remarks` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notif`
--

CREATE TABLE `notif` (
  `Id` int(5) NOT NULL,
  `NotifType` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `peripherals`
--

CREATE TABLE `peripherals` (
  `Id` int(11) NOT NULL,
  `PartsName` varchar(255) DEFAULT NULL,
  `Brand` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `peripherals`
--

INSERT INTO `peripherals` (`Id`, `PartsName`, `Brand`) VALUES
(2, 'Keyboard', 'Yamaha'),
(6, 'Keyboard', 'Casio'),
(7, 'Mouse', 'Logitech MX Master 3S'),
(8, 'Keyboard', 'Dell'),
(9, 'Keyboard', 'AOC'),
(10, 'Mouse', 'LG'),
(11, 'Mouse', 'Dell'),
(12, 'Mouse', 'ViewSonic'),
(13, 'Monitor', 'AOC'),
(14, 'Monitor', 'Dell'),
(15, 'Monitor', 'LG'),
(16, 'Monitor', 'BenQ'),
(17, 'Hardrive', 'Toshiba'),
(18, 'Hardrive', 'Seagate'),
(23, 'Hardrive', 'Western Digital'),
(24, 'Hardrive', 'Samsung'),
(25, 'RAM', 'Kingston'),
(26, 'RAM', 'Lenovo'),
(27, 'RAM', 'Transcend'),
(28, 'RAM', 'Micron'),
(29, 'AVR', 'Pioneer'),
(30, 'AVR', 'Yamaha'),
(31, 'AVR', 'Sony'),
(32, 'AVR', 'Integra'),
(34, 'Monitor', '23r3'),
(35, 'Keyboard', '324'),
(36, 'Keyboard', '324'),
(37, 'Monitor', 'jhhkjhl'),
(38, 'Keyboard', 'fasdf');

-- --------------------------------------------------------

--
-- Table structure for table `request_assistance`
--

CREATE TABLE `request_assistance` (
  `Id` int(11) NOT NULL,
  `TeacherId` int(11) DEFAULT NULL,
  `Lab` varchar(255) DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL,
  `DateTime` datetime DEFAULT NULL,
  `See` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_assistance_rate`
--

CREATE TABLE `request_assistance_rate` (
  `Id` int(11) NOT NULL,
  `RequestReplyId` int(11) DEFAULT NULL,
  `Lab` varchar(255) DEFAULT NULL,
  `Rate` varchar(255) DEFAULT NULL,
  `SAId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_assistance_reply`
--

CREATE TABLE `request_assistance_reply` (
  `Id` int(11) NOT NULL,
  `RequestId` int(11) DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL,
  `StudentAssistanceId` int(11) DEFAULT NULL,
  `Seen` int(255) DEFAULT NULL,
  `Lab` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `Id` int(11) NOT NULL,
  `ResourcesName` varchar(255) DEFAULT NULL,
  `Count` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`Id`, `ResourcesName`, `Count`) VALUES
(1, 'AVR', 3);

-- --------------------------------------------------------

--
-- Table structure for table `resources_request`
--

CREATE TABLE `resources_request` (
  `Id` int(11) NOT NULL,
  `Lab` varchar(255) DEFAULT NULL,
  `TeacherId` int(11) DEFAULT NULL,
  `Peripherals` varchar(11) DEFAULT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `Status` int(255) DEFAULT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resources_request_reply`
--

CREATE TABLE `resources_request_reply` (
  `Id` int(5) NOT NULL,
  `ResourcesRequestId` int(5) DEFAULT NULL,
  `Message` varchar(255) DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `StudentAssistanceId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `Id` int(11) NOT NULL,
  `StudentAssisId` int(11) DEFAULT NULL,
  `Day` varchar(255) DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `TM` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_assistance`
--

CREATE TABLE `student_assistance` (
  `Id` int(5) NOT NULL,
  `Firstname` varchar(255) DEFAULT NULL,
  `Lastname` varchar(255) DEFAULT NULL,
  `AssignLab` varchar(255) DEFAULT NULL,
  `YearStarted` varchar(255) DEFAULT NULL,
  `YearEnded` varchar(255) DEFAULT NULL,
  `Semester` varchar(255) DEFAULT NULL,
  `MaintenanceSchedule` varchar(255) DEFAULT NULL,
  `IdNumber` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `Id` int(5) NOT NULL,
  `Firstname` varchar(255) DEFAULT NULL,
  `Lastname` varchar(255) DEFAULT NULL,
  `Authorization` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Department` varchar(255) DEFAULT NULL,
  `YearStarted` varchar(255) DEFAULT NULL,
  `YearEnded` varchar(255) DEFAULT NULL,
  `Semester` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`Id`, `Firstname`, `Lastname`, `Authorization`, `Password`, `Department`, `YearStarted`, `YearEnded`, `Semester`) VALUES
(21, 'Lee', 'Gehyarlee', '1234', '81dc9bdb52d04dc20036dbd8313ed055', 'CICT', '1', '3', '1st');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Username`, `Password`, `Position`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_lab`
--
ALTER TABLE `assign_lab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`teacher_id`),
  ADD KEY `lab_id` (`lab_id`);

--
-- Indexes for table `complaint`
--
ALTER TABLE `complaint`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `TeacherId` (`TeacherId`);

--
-- Indexes for table `laboratory`
--
ALTER TABLE `laboratory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lab_ipaddress`
--
ALTER TABLE `lab_ipaddress`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `lab_status`
--
ALTER TABLE `lab_status`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `lab_status_ibfk_1` (`TeacherId`);

--
-- Indexes for table `lab_units`
--
ALTER TABLE `lab_units`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `PeripheralsId` (`PeripheralsId`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `TeacherId` (`TeacherId`);

--
-- Indexes for table `logs_admin`
--
ALTER TABLE `logs_admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `StudentAssisId` (`StudentAssisId`),
  ADD KEY `PeripheralsId` (`PeripheralsId`);

--
-- Indexes for table `notif`
--
ALTER TABLE `notif`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `peripherals`
--
ALTER TABLE `peripherals`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `request_assistance`
--
ALTER TABLE `request_assistance`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `TeacherId` (`TeacherId`);

--
-- Indexes for table `request_assistance_rate`
--
ALTER TABLE `request_assistance_rate`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `RequestReplyId` (`RequestReplyId`),
  ADD KEY `SAId` (`SAId`);

--
-- Indexes for table `request_assistance_reply`
--
ALTER TABLE `request_assistance_reply`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `RequestId` (`RequestId`),
  ADD KEY `request_assistance_reply_ibfk_2` (`StudentAssistanceId`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `resources_request`
--
ALTER TABLE `resources_request`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `TeacherId` (`TeacherId`);

--
-- Indexes for table `resources_request_reply`
--
ALTER TABLE `resources_request_reply`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `ResourcesRequestId` (`ResourcesRequestId`),
  ADD KEY `StudentAssistanceId` (`StudentAssistanceId`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `student_assistance`
--
ALTER TABLE `student_assistance`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign_lab`
--
ALTER TABLE `assign_lab`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `complaint`
--
ALTER TABLE `complaint`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laboratory`
--
ALTER TABLE `laboratory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lab_ipaddress`
--
ALTER TABLE `lab_ipaddress`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `lab_status`
--
ALTER TABLE `lab_status`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lab_units`
--
ALTER TABLE `lab_units`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `logs_admin`
--
ALTER TABLE `logs_admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `maintenance`
--
ALTER TABLE `maintenance`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notif`
--
ALTER TABLE `notif`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `peripherals`
--
ALTER TABLE `peripherals`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `request_assistance`
--
ALTER TABLE `request_assistance`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request_assistance_rate`
--
ALTER TABLE `request_assistance_rate`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `request_assistance_reply`
--
ALTER TABLE `request_assistance_reply`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `resources_request`
--
ALTER TABLE `resources_request`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `resources_request_reply`
--
ALTER TABLE `resources_request_reply`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_assistance`
--
ALTER TABLE `student_assistance`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assign_lab`
--
ALTER TABLE `assign_lab`
  ADD CONSTRAINT `assign_lab_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`Id`),
  ADD CONSTRAINT `assign_lab_ibfk_2` FOREIGN KEY (`lab_id`) REFERENCES `laboratory` (`id`);

--
-- Constraints for table `complaint`
--
ALTER TABLE `complaint`
  ADD CONSTRAINT `complaint_ibfk_1` FOREIGN KEY (`TeacherId`) REFERENCES `teachers` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lab_status`
--
ALTER TABLE `lab_status`
  ADD CONSTRAINT `lab_status_ibfk_1` FOREIGN KEY (`TeacherId`) REFERENCES `teachers` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `lab_units`
--
ALTER TABLE `lab_units`
  ADD CONSTRAINT `lab_units_ibfk_1` FOREIGN KEY (`PeripheralsId`) REFERENCES `peripherals` (`Id`);

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `logs_ibfk_1` FOREIGN KEY (`TeacherId`) REFERENCES `teachers` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `maintenance`
--
ALTER TABLE `maintenance`
  ADD CONSTRAINT `maintenance_ibfk_1` FOREIGN KEY (`StudentAssisId`) REFERENCES `student_assistance` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request_assistance`
--
ALTER TABLE `request_assistance`
  ADD CONSTRAINT `request_assistance_ibfk_1` FOREIGN KEY (`TeacherId`) REFERENCES `teachers` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request_assistance_rate`
--
ALTER TABLE `request_assistance_rate`
  ADD CONSTRAINT `request_assistance_rate_ibfk_1` FOREIGN KEY (`RequestReplyId`) REFERENCES `request_assistance_reply` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `request_assistance_rate_ibfk_2` FOREIGN KEY (`SAId`) REFERENCES `student_assistance` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request_assistance_reply`
--
ALTER TABLE `request_assistance_reply`
  ADD CONSTRAINT `request_assistance_reply_ibfk_1` FOREIGN KEY (`RequestId`) REFERENCES `request_assistance` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `request_assistance_reply_ibfk_2` FOREIGN KEY (`StudentAssistanceId`) REFERENCES `student_assistance` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resources_request`
--
ALTER TABLE `resources_request`
  ADD CONSTRAINT `resources_request_ibfk_1` FOREIGN KEY (`TeacherId`) REFERENCES `teachers` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `resources_request_reply`
--
ALTER TABLE `resources_request_reply`
  ADD CONSTRAINT `resources_request_reply_ibfk_1` FOREIGN KEY (`ResourcesRequestId`) REFERENCES `resources_request` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `resources_request_reply_ibfk_2` FOREIGN KEY (`StudentAssistanceId`) REFERENCES `student_assistance` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
