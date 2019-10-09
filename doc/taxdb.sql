-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2019 at 03:09 PM
-- Server version: 5.6.41-84.1-log
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `taxdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `ID` int(11) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mem_name` varchar(100) NOT NULL,
  `mobile` bigint(20) UNSIGNED DEFAULT NULL,
  `role` varchar(30) NOT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`ID`, `userid`, `email`, `mem_name`, `mobile`, `role`, `password`) VALUES
(1, 'a@gmail.com', 'a@gmail.com', 'a', NULL, 'Client', '$2y$10$7CxPHDN9IQq5WDViw/doeucFNMslHt4rpNfMVlM5izzpovXyYcdhG'),
(2, 'abc@gmail.com', 'abc@gmail.com', 'abc', NULL, 'Client', '$2y$10$v3v4fx.Vbd8oCgdOuc1G4u9cE.yYWPlumhR30czjzeujZxp6Epu7.'),
(3, 'b@gmail.com', 'b@gmail.com', 'b f', 1651498438, 'CA', '$2y$10$E4kNLhuftYbN/dOHBz7yr.rurwXjKPhFUBh39C6HIdwYrfPAJtwIG'),
(17, 'c388281@urhen.com', 'c388281@urhen.com', 'Sid Singh', 9876543210, 'TA', '$2y$10$wA21djV.1QOrp3sSk3C1eeXHhNOQZ.JwSED8w0zoCWiDSvAi.z3LC'),
(18, 'c456198@urhen.com', 'c456198@urhen.com', 'sidhu singh', 7845956852, 'TA', '$2y$10$lxmjBzpXMwC2jb2a9FyZEe8VC/ciB4x9H0nNdUQ8uoyZfzU6iEbvO'),
(8, 'c@gmail.com', 'c@gmail.com', 'cehbh hebchkv', 8177689767, 'CA', '$2y$10$oGtp1C6iNqER5N4TARuMs.Nk1z4rBWSRohy3VSbMup.mKEUt7lddu'),
(9, 'd@gmail.com', 'd@gmail.com', '', NULL, '', '$2y$10$18aN/Z3K0z3hKGchuxGFTuoz0Qa4uZAEz7z4rMKlkMK/.lAyvFGC6'),
(4, 'gautam@gmail.com', 'gautam@gmail.com', '', NULL, '', '$2y$10$jjiGlQn5KgOmZRJxvjzlquTszSxj38Y3T3oA2s5P4pVlYagXgnXlu'),
(10, 'gautamsingh@gmail.com', 'gautamsingh@gmail.com', '', NULL, '', '$2y$10$D4shi/2uuj6unJs2dyDPu.vpWAb3KzFAM7to.o3.QztyJ5sdGkhE.'),
(21, 'pk@gmail.com', 'pk@gmail.com', 'Prabhakar Singh', 9559888980, 'TA', '$2y$10$6qEHDkjhDFJ1BB0Bv72ise2j9yIomcJFc3slq1ROqEclEb0udYU3u'),
(5, 'pksingh150007@gmail.com', 'pksingh150007@gmail.com', '', NULL, '', '$2y$10$6OXGRBgTW5O/bp12SjzrVequxPxVcyhVKvyYLexkjIyMVSVurc7Je'),
(12, 'rishav@gmail.com', 'rishav@gmail.com', 'RISHAV KARN', 7070976262, 'CA', '$2y$10$jUUoPzfw985WlNO6992r3uDPynQlreGHz5fNAz8FD3FfaaTOm64wO'),
(6, 'rishavanurag2612@gmail.com', 'rishavanurag2612@gmail.com', 'Rishav Anurag', 5146884694, 'TA', '$2y$10$1RtQC6JmUmZlXQ4jx8ba9.cXn1qw.fq5uduMHyMD/kjzShoo8YX8e'),
(11, 'rishavanurag@gmail.com', 'rishavanurag@gmail.com', 'RISHAV ANURAG', 9090709762, 'TA', '$2y$10$gcofRoy7VEYZ8XiVkk76HOpvjgOud0RwynXfOxDj4esr/cshAgDsm'),
(16, 'rohan24aug@gmail.com', 'rohan24aug@gmail.com', 'Rohan Singh', 8765039453, 'TA', '$2y$10$YTwYIMQ/dov62teuYwe3aObWLz2rZk1KXHL6uA7yYUkNL6lxmavkS'),
(0, 'rishav1@gmail.com', 'rishav1@gmail.com', 'roh as', 1869767978, 'Client', '$2y$10$J6wKdFqTovPHmJ1Rbnl6zOI8AyYTVc2Gi87NLmBn7dMyJwu5sXkD2'),
(0, 'rohana@gmail.com', 'rohana@gmail.com', 'Rohan KumarSingh', 9453437453, 'TA', '$2y$10$O3MMjbOlZQKjdk9qd0o1BehubztWYW8a.O9/xhDgCQLQ2fy1NeBnK');

-- --------------------------------------------------------

--
-- Table structure for table `newtask`
--

CREATE TABLE `newtask` (
  `client` varchar(100) NOT NULL,
  `professional` varchar(100) NOT NULL,
  `service` varchar(20) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date_assign` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_completion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `newtask`
--

INSERT INTO `newtask` (`client`, `professional`, `service`, `status`, `date_assign`, `date_completion`) VALUES
('a@gmail.com', 'rishavanurag2612@gmail.com', 's2', 1, '2019-09-19 18:44:47', '0000-00-00 00:00:00'),
('a@gmail.com', 'rishavanurag2612@gmail.com', 's3', 0, '2019-09-19 19:14:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `professionals`
--

CREATE TABLE `professionals` (
  `userid` varchar(100) NOT NULL,
  `s1` tinyint(1) NOT NULL DEFAULT '0',
  `s2` tinyint(1) NOT NULL DEFAULT '0',
  `s3` tinyint(1) NOT NULL DEFAULT '0',
  `s4` tinyint(1) NOT NULL DEFAULT '0',
  `s5` tinyint(1) NOT NULL DEFAULT '0',
  `s6` tinyint(1) NOT NULL DEFAULT '0',
  `s7` tinyint(1) NOT NULL DEFAULT '0',
  `s8` tinyint(1) NOT NULL DEFAULT '0',
  `s9` tinyint(1) NOT NULL DEFAULT '0',
  `s10` tinyint(1) NOT NULL DEFAULT '0',
  `s11` tinyint(1) NOT NULL DEFAULT '0',
  `s12` tinyint(1) NOT NULL DEFAULT '0',
  `s13` tinyint(1) NOT NULL DEFAULT '0',
  `s14` tinyint(1) NOT NULL DEFAULT '0',
  `s15` tinyint(1) NOT NULL DEFAULT '0',
  `s16` tinyint(1) NOT NULL DEFAULT '0',
  `s17` tinyint(1) NOT NULL DEFAULT '0',
  `s18` tinyint(1) NOT NULL DEFAULT '0',
  `s19` tinyint(1) NOT NULL DEFAULT '0',
  `s20` tinyint(1) NOT NULL DEFAULT '0',
  `s21` tinyint(1) NOT NULL DEFAULT '0',
  `s22` tinyint(1) NOT NULL DEFAULT '0',
  `s23` tinyint(1) NOT NULL DEFAULT '0',
  `s24` tinyint(1) NOT NULL DEFAULT '0',
  `s25` tinyint(1) NOT NULL DEFAULT '0',
  `s26` tinyint(1) NOT NULL DEFAULT '0',
  `s27` tinyint(1) NOT NULL DEFAULT '0',
  `s28` tinyint(1) NOT NULL DEFAULT '0',
  `s29` tinyint(1) NOT NULL DEFAULT '0',
  `s30` tinyint(1) NOT NULL DEFAULT '0',
  `s31` tinyint(1) NOT NULL DEFAULT '0',
  `s32` tinyint(1) NOT NULL DEFAULT '0',
  `s33` tinyint(1) NOT NULL DEFAULT '0',
  `s34` tinyint(1) NOT NULL DEFAULT '0',
  `s35` tinyint(1) NOT NULL DEFAULT '0',
  `s36` tinyint(1) NOT NULL DEFAULT '0',
  `s37` tinyint(1) NOT NULL DEFAULT '0',
  `s38` tinyint(1) NOT NULL DEFAULT '0',
  `s39` tinyint(1) NOT NULL DEFAULT '0',
  `s40` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `s_id` varchar(5) NOT NULL,
  `service` varchar(100) NOT NULL,
  `s_type` varchar(100) DEFAULT NULL,
  `s_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`s_id`, `service`, `s_type`, `s_name`) VALUES
('s1', 'Routine Services', 'Company Audit ', 'Internal Audit '),
('s10', 'Routine Services', 'Loan Assistance ', 'Projected Balance Sheet'),
('s11', 'Routine Services', 'Loan Assistance ', 'Actual Balance Sheet'),
('s12', 'Routine Services', 'Loan Assistance ', 'Bank Report'),
('s13', 'Income Tax', NULL, 'TDS Refund'),
('s14', 'Income Tax', NULL, 'Sugam E-Filing'),
('s15', 'Income Tax', NULL, 'Sugan E-Filing'),
('s16', 'Income Tax', NULL, 'Audit'),
('s17', 'Income Tax', NULL, 'Computation of ITR'),
('s18', 'Income Tax', NULL, 'Tax Payment'),
('s19', 'Income Tax', NULL, 'Tax Planning'),
('s2', 'Routine Services', 'Company Audit', 'External Audit'),
('s20', 'Income Tax', NULL, 'Response to notice issued by tax Authorities'),
('s21', 'Income Tax', NULL, 'Appear for Scrutiny Cases'),
('s22', 'Income Tax', NULL, 'Yearly cases of Taxpayers'),
('s23', 'Income Tax', NULL, 'Other service of Income Tax'),
('s24', 'GST', NULL, 'GST Registration '),
('s25', 'GST', NULL, 'GST Return Filing '),
('s26', 'GST', NULL, 'Audit & Assurance'),
('s27', 'GST', NULL, 'Yearly cases of Taxpayers'),
('s28', 'GST', NULL, 'Tax Payment'),
('s29', 'GST', NULL, 'Tax Planning '),
('s3', 'Routine Services', 'Company Audit', 'Concurrent Audit'),
('s30', 'GST', NULL, 'Book Keeping- Balance Sheet Preparation'),
('s31', 'GST', NULL, 'E-Way Bill Services'),
('s32', 'GST', NULL, 'Submit Quarterly details of sale and purchase'),
('s33', 'GST', NULL, 'Respond to notices issued by tax Authorities'),
('s34', 'GST', NULL, 'Other GST related Services'),
('s35', 'Advice/Consultancy', NULL, 'Financial management'),
('s36', 'Advice/Consultancy', NULL, 'Investement'),
('s37', 'Advice/Consultancy', NULL, 'Cost Analysis'),
('s38', 'Advice/Consultancy', NULL, 'Share Market'),
('s39', 'Advice/Consultancy', NULL, 'Loan/Finance'),
('s4', 'Routine Services', 'Company Audit', 'Stautory Audit'),
('s40', 'Advice/Consultancy', NULL, 'Business Acquision'),
('s5', 'Routine Services', 'Company Audit', 'Final Audit'),
('s6', 'Routine Services', 'Firm Audit', 'HUF Businesses'),
('s7', 'Routine Services', 'Firm Audit', 'Proprietorship Businesses'),
('s8', 'Routine Services', 'Firm Audit', 'Partnership Businesses'),
('s9', 'Routine Services', 'Firm Audit', 'LLP Businesses');

-- --------------------------------------------------------

--
-- Stand-in structure for view `service_provider`
-- (See below for the actual view)
--
CREATE TABLE `service_provider` (
`spid` int(11)
,`sp_userid` varchar(100)
,`service_id` varchar(5)
,`price` decimal(10,2)
);

-- --------------------------------------------------------

--
-- Table structure for table `s_provider`
--

CREATE TABLE `s_provider` (
  `spid` int(11) NOT NULL,
  `sp_userid` varchar(100) NOT NULL,
  `service_id` varchar(5) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `s_provider`
--

INSERT INTO `s_provider` (`spid`, `sp_userid`, `service_id`, `price`) VALUES
(1, 'rishav@gmail.com', 's1', '0.00'),
(2, 'pk@gmail.com', 's1', '0.00'),
(3, 'pk@gmail.com', 's2', '0.00'),
(4, 'pk@gmail.com', 's14', '0.00'),
(36, 'pk@gmail.com', 's15', '0.00'),
(37, 'pk@gmail.com', 's24', '0.00'),
(38, 'pk@gmail.com', 's36', '0.00'),
(40, 'rishavanurag2612@gmail.com', 's13', '0.00'),
(42, 'rishavanurag2612@gmail.com', 's35', '0.00'),
(167, 'rishavanurag2612@gmail.com', 's1', '0.00'),
(168, 'rishavanurag2612@gmail.com', 's2', '0.00'),
(169, 'rishavanurag2612@gmail.com', 's22', '0.00');

-- --------------------------------------------------------

--
-- Structure for view `service_provider`
--
DROP TABLE IF EXISTS `service_provider`;

CREATE ALGORITHM=UNDEFINED DEFINER=`passiah2`@`localhost` SQL SECURITY DEFINER VIEW `service_provider`  AS  select `sp`.`spid` AS `spid`,`sp`.`sp_userid` AS `sp_userid`,`sp`.`service_id` AS `service_id`,`sp`.`price` AS `price` from (`s_provider` `sp` join `members` `m` on((`sp`.`sp_userid` = `m`.`userid`))) ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
