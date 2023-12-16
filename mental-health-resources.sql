-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 10:15 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mental-health-resources`
--
CREATE DATABASE IF NOT EXISTS `mental-health-resources` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mental-health-resources`;

-- --------------------------------------------------------

--
-- Table structure for table `appointment_t`
--

DROP TABLE IF EXISTS `appointment_t`;
CREATE TABLE `appointment_t` (
  `cpUserID` varchar(7) NOT NULL,
  `csUserID` varchar(7) NOT NULL,
  `dappDate` date NOT NULL,
  `cappTime` varchar(8) NOT NULL,
  `cappStatus` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ngo_contact_t`
--

DROP TABLE IF EXISTS `ngo_contact_t`;
CREATE TABLE `ngo_contact_t` (
  `cNGO_ID` varchar(7) NOT NULL,
  `cContact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_hotline_t`
--

DROP TABLE IF EXISTS `ngo_hotline_t`;
CREATE TABLE `ngo_hotline_t` (
  `cNGO_ID` varchar(7) NOT NULL,
  `cSP_Hotline` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_t`
--

DROP TABLE IF EXISTS `ngo_t`;
CREATE TABLE `ngo_t` (
  `cNGO_ID` varchar(7) NOT NULL,
  `cArea` varchar(50) NOT NULL,
  `cAddress` varchar(150) NOT NULL,
  `cOwner` varchar(20) NOT NULL,
  `cManagerEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ngo_t`
--

INSERT INTO `ngo_t` (`cNGO_ID`, `cArea`, `cAddress`, `cOwner`, `cManagerEmail`) VALUES
('1', 'Uttara', 'House 88, Road 6/A, Sector 5, Uttara, Dhaka', 'Nguyen', 'ngo@abc.com');

-- --------------------------------------------------------

--
-- Table structure for table `patient_review_records_t`
--

DROP TABLE IF EXISTS `patient_review_records_t`;
CREATE TABLE `patient_review_records_t` (
  `cpUserID` varchar(7) NOT NULL,
  `csUserID` varchar(7) NOT NULL,
  `nRating` int(11) NOT NULL,
  `cComment` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_review_t`
--

DROP TABLE IF EXISTS `patient_review_t`;
CREATE TABLE `patient_review_t` (
  `cpUserID` varchar(7) NOT NULL,
  `csUserID` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_t`
--

DROP TABLE IF EXISTS `patient_t`;
CREATE TABLE `patient_t` (
  `cpUserID` varchar(7) NOT NULL,
  `cMedicalHistory` varchar(200) NOT NULL,
  `cArea` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patient_t`
--

INSERT INTO `patient_t` (`cpUserID`, `cMedicalHistory`, `cArea`) VALUES
('7995226', 'I used to have lupus', 'Bashundhara R/A'),
('9796158', 'I did not die', 'Uttara');

-- --------------------------------------------------------

--
-- Table structure for table `person_contact_t`
--

DROP TABLE IF EXISTS `person_contact_t`;
CREATE TABLE `person_contact_t` (
  `cUserID` varchar(7) NOT NULL,
  `cContact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person_contact_t`
--

INSERT INTO `person_contact_t` (`cUserID`, `cContact`) VALUES
('4', '01234567891'),
('4', '01987654321');

-- --------------------------------------------------------

--
-- Table structure for table `person_t`
--

DROP TABLE IF EXISTS `person_t`;
CREATE TABLE `person_t` (
  `cUserID` varchar(7) NOT NULL,
  `cFname` varchar(30) NOT NULL,
  `cLname` varchar(30) NOT NULL,
  `cGender` varchar(11) NOT NULL,
  `dDOB` date NOT NULL,
  `cAddress` varchar(150) NOT NULL,
  `cEmail` varchar(30) NOT NULL,
  `cType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `person_t`
--

INSERT INTO `person_t` (`cUserID`, `cFname`, `cLname`, `cGender`, `dDOB`, `cAddress`, `cEmail`, `cType`) VALUES
('2234453', 'Gazi', 'Tank', 'Tank', '2023-12-06', 'Dhanmondi', 'gazi@tank.com', 'Therapist'),
('3445102', 'Pat', 'Hugh', 'Male', '2023-12-06', 'House 9, Road 7, Sector 5, Uttara, Dhaka', 'pat@abc.com', 'Patient'),
('3958756', 'Admin', 'Boss', 'Code', '1918-11-11', 'Brain', 'admin@super.com', 'Admin'),
('3987298', 'Shwondujrp', 'Dhara', 'Female', '2023-12-12', 'Mirpur 1', 'dhara@hotmail.com', 'Psychiatrist'),
('4', 'Ikram', 'Hossain', 'Male', '2023-12-07', 'Uttara', 'ikram@abc.com', 'Psychiatrist'),
('5098802', 'Steve', 'Carol', 'Car', '2023-12-13', 'Dhaka', 'steve@gmail.com', 'Psychiatrist'),
('553', 'Mark', 'Jacobs', 'Male', '2023-11-29', 'House 8, Road 33, Block F, Bashundhara R/A, Dhaka', 'mark@abc.com', 'Therapist'),
('6886361', 'Pat', 'Hugh', 'Male', '2023-12-07', 'House 9, Road 7, Sector 5, Uttara, Dhaka', 'pat@abc.com', 'Patient'),
('6908394', 'Nazifa', 'Chy', 'Female', '2023-12-26', 'Cumilla', 'nazifa@gmaiil.com', 'Therapist'),
('7995226', 'Raihan', 'Rashid', 'Male', '2023-12-06', 'House 1, Road 2, Sector 3', 'raihan@gmail.com', 'Patient'),
('9796158', 'Pat', 'Hugh', 'Male', '2023-12-06', 'House 9, Road 7, Sector 5, Uttara, Dhaka', 'pat@abc.com', 'Patient');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_contact_t`
--

DROP TABLE IF EXISTS `pharmacy_contact_t`;
CREATE TABLE `pharmacy_contact_t` (
  `cPharmaID` varchar(7) NOT NULL,
  `cContact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacy_contact_t`
--

INSERT INTO `pharmacy_contact_t` (`cPharmaID`, `cContact`) VALUES
('1', '01234567888'),
('1', '01798952147'),
('1', '09876543211');

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_t`
--

DROP TABLE IF EXISTS `pharmacy_t`;
CREATE TABLE `pharmacy_t` (
  `cPharmaID` varchar(7) NOT NULL,
  `cPharmaName` varchar(50) NOT NULL,
  `cArea` varchar(50) NOT NULL,
  `cAddress` varchar(150) NOT NULL,
  `cManagerEmail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pharmacy_t`
--

INSERT INTO `pharmacy_t` (`cPharmaID`, `cPharmaName`, `cArea`, `cAddress`, `cManagerEmail`) VALUES
('1', 'Razz Pharma', 'Uttara', 'House 150, Road 50, Sector 3, Uttara', 'pharma@abc.com');

-- --------------------------------------------------------

--
-- Table structure for table `prescription_med_t`
--

DROP TABLE IF EXISTS `prescription_med_t`;
CREATE TABLE `prescription_med_t` (
  `cPrescID` varchar(7) NOT NULL,
  `cMedicine` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescription_med_t`
--

INSERT INTO `prescription_med_t` (`cPrescID`, `cMedicine`) VALUES
('5389668', 'Napa');

-- --------------------------------------------------------

--
-- Table structure for table `prescription_t`
--

DROP TABLE IF EXISTS `prescription_t`;
CREATE TABLE `prescription_t` (
  `cPrescID` varchar(7) NOT NULL,
  `dIssueDate` date NOT NULL,
  `cpUserID` varchar(7) NOT NULL,
  `cpsUserID` varchar(7) NOT NULL,
  `cDelivered` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prescription_t`
--

INSERT INTO `prescription_t` (`cPrescID`, `dIssueDate`, `cpUserID`, `cpsUserID`, `cDelivered`) VALUES
('5389668', '2023-12-15', '9796158', '4', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `psychiatrist_t`
--

DROP TABLE IF EXISTS `psychiatrist_t`;
CREATE TABLE `psychiatrist_t` (
  `cpsUserID` varchar(7) NOT NULL,
  `cRehabID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `psychiatrist_t`
--

INSERT INTO `psychiatrist_t` (`cpsUserID`, `cRehabID`) VALUES
('4', '111');

-- --------------------------------------------------------

--
-- Table structure for table `psychiatrist_work_records_t`
--

DROP TABLE IF EXISTS `psychiatrist_work_records_t`;
CREATE TABLE `psychiatrist_work_records_t` (
  `cpsUserID` varchar(7) NOT NULL,
  `cRehabID` varchar(7) NOT NULL,
  `dJ_Date` date NOT NULL,
  `dL_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `psychiatrist_work_records_t`
--

INSERT INTO `psychiatrist_work_records_t` (`cpsUserID`, `cRehabID`, `dJ_Date`, `dL_Date`) VALUES
('4', '111', '2023-12-01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `rehab_centre_contact_t`
--

DROP TABLE IF EXISTS `rehab_centre_contact_t`;
CREATE TABLE `rehab_centre_contact_t` (
  `cRehabID` varchar(5) NOT NULL,
  `cContact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rehab_centre_t`
--

DROP TABLE IF EXISTS `rehab_centre_t`;
CREATE TABLE `rehab_centre_t` (
  `cRehabID` varchar(5) NOT NULL,
  `cArea` varchar(50) NOT NULL,
  `cAddress` varchar(150) NOT NULL,
  `cSupervisorID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rehab_centre_t`
--

INSERT INTO `rehab_centre_t` (`cRehabID`, `cArea`, `cAddress`, `cSupervisorID`) VALUES
('111', 'Uttara', 'House 12, Road 5, Sector 14, Uttara, Dhaka', '4');

-- --------------------------------------------------------

--
-- Table structure for table `specialist_t`
--

DROP TABLE IF EXISTS `specialist_t`;
CREATE TABLE `specialist_t` (
  `csUserID` varchar(7) NOT NULL,
  `cExperience` varchar(100) NOT NULL,
  `cOff_Address` varchar(50) NOT NULL,
  `cType` varchar(15) NOT NULL,
  `cArea` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specialist_t`
--

INSERT INTO `specialist_t` (`csUserID`, `cExperience`, `cOff_Address`, `cType`, `cArea`) VALUES
('4', 'I cracked skulls', 'Uttara Centre', 'Psychiatrist', 'Uttara'),
('553', 'Vietnam', 'House 5, Road 2/A, Block C, Bashundhara R/A, Dhaka', 'Therapist', 'Bashundhara R/A');

-- --------------------------------------------------------

--
-- Table structure for table `therapist_notes_t`
--

DROP TABLE IF EXISTS `therapist_notes_t`;
CREATE TABLE `therapist_notes_t` (
  `ctsUserID` varchar(7) NOT NULL,
  `cpUserID` varchar(7) NOT NULL,
  `cNotes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `therapist_t`
--

DROP TABLE IF EXISTS `therapist_t`;
CREATE TABLE `therapist_t` (
  `ctsUserID` varchar(7) NOT NULL,
  `cSpecialty` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `therapist_work_records_t`
--

DROP TABLE IF EXISTS `therapist_work_records_t`;
CREATE TABLE `therapist_work_records_t` (
  `ctsUserID` varchar(7) NOT NULL,
  `cRehabID` varchar(7) NOT NULL,
  `dJ_Date` date NOT NULL,
  `dL_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cType` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `cType`) VALUES
(2, 'Showndorjo', 'dhara@hotmail.com', NULL, '$2y$12$wXv9hySHfI060v4Z8n90LOj6zmbOqf2wo3oPSljxyfN/l9a4yYUn6', NULL, '2023-12-03 04:27:47', '2023-12-03 04:27:47', 'Psychiatrist'),
(3, 'Gaji', 'gazi@tank.com', NULL, '$2y$12$5FLVioPY/9yVsicnCoUdweaoJ3nO2iqY87FC/RFsI5kjx10nDtStq', NULL, '2023-12-03 11:04:40', '2023-12-03 11:04:40', 'Therapist'),
(4, 'Ikram', 'ikram@abc.com', NULL, '$2y$12$fX1jxc7f5Bf.384QS04B6.1QZzqAJ4sGmgrbDanBzZLj7heTp8JvK', NULL, '2023-12-07 16:18:09', '2023-12-07 16:18:09', 'Psychiatrist'),
(6, 'Steeve', 'steve@gmail.com', NULL, '$2y$12$UQbHOjYWDePaejYIVY3.PeP/wbBnvdQaQtc3nWTlk2b3/C4nEoF0W', NULL, '2023-12-07 22:26:57', '2023-12-07 22:26:57', 'Psychiatrist'),
(7, 'nazifa', 'nazifa@gmail.com', NULL, '$2y$12$oGkyvGh49PJ.320c0BlZeut0hqVSBJgXOEdBaLkALwmoVrQrZnD0a', NULL, '2023-12-07 22:27:33', '2023-12-07 22:27:33', 'Therapist'),
(9, 'Raihan', 'raihan@gmail.com', NULL, '$2y$12$dAKYQUkxKunq6PjIypxaPOtRaeYfHeHojL9kl0MOAqqSm3oPqPvX6', NULL, '2023-12-13 11:17:18', '2023-12-13 11:17:18', 'Patient'),
(10, 'Admin', 'admin@super.com', NULL, '$2y$12$lzQtpKUDNaT6fATET7L6auFuuOBJB.L5.j4J6OjYl994zSUQKtl8m', NULL, '2023-12-13 17:02:21', '2023-12-13 17:02:21', 'Admin'),
(13, 'Walter', 'pharma@abc.com', NULL, '$2y$12$p6x9V9pFIYuJd9qC4CoSxucB4kGzQwqWawabR2.fWkb6R0VmR9T3W', NULL, '2023-12-14 03:15:42', '2023-12-14 03:15:42', 'Pharmacy'),
(14, 'Nguyen', 'ngo@abc.com', NULL, '$2y$12$P7oPfwLHWY9kVdkvD0gD9O1swA695DOaxzNZW6xJH5b732Ri5Yox2', NULL, '2023-12-14 03:15:54', '2023-12-14 03:15:54', 'NGO'),
(16, 'Pat', 'pat@abc.com', NULL, '$2y$12$1S6gIeYHXy7LZd1YkSpaGOPvRypuwrW4zgRWesWiMlz/uuAykYOAG', NULL, '2023-12-15 13:08:09', '2023-12-15 13:08:09', 'Patient');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_t`
--
ALTER TABLE `appointment_t`
  ADD PRIMARY KEY (`cpUserID`,`csUserID`,`dappDate`,`cappTime`),
  ADD KEY `csUserID` (`csUserID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo_contact_t`
--
ALTER TABLE `ngo_contact_t`
  ADD PRIMARY KEY (`cNGO_ID`,`cContact`);

--
-- Indexes for table `ngo_hotline_t`
--
ALTER TABLE `ngo_hotline_t`
  ADD PRIMARY KEY (`cNGO_ID`,`cSP_Hotline`);

--
-- Indexes for table `ngo_t`
--
ALTER TABLE `ngo_t`
  ADD PRIMARY KEY (`cNGO_ID`);

--
-- Indexes for table `patient_review_records_t`
--
ALTER TABLE `patient_review_records_t`
  ADD PRIMARY KEY (`cpUserID`,`csUserID`,`nRating`,`cComment`),
  ADD KEY `csUserID` (`csUserID`);

--
-- Indexes for table `patient_review_t`
--
ALTER TABLE `patient_review_t`
  ADD PRIMARY KEY (`cpUserID`,`csUserID`),
  ADD KEY `csUserID` (`csUserID`);

--
-- Indexes for table `patient_t`
--
ALTER TABLE `patient_t`
  ADD PRIMARY KEY (`cpUserID`);

--
-- Indexes for table `person_contact_t`
--
ALTER TABLE `person_contact_t`
  ADD PRIMARY KEY (`cUserID`,`cContact`);

--
-- Indexes for table `person_t`
--
ALTER TABLE `person_t`
  ADD PRIMARY KEY (`cUserID`);

--
-- Indexes for table `pharmacy_contact_t`
--
ALTER TABLE `pharmacy_contact_t`
  ADD PRIMARY KEY (`cPharmaID`,`cContact`);

--
-- Indexes for table `pharmacy_t`
--
ALTER TABLE `pharmacy_t`
  ADD PRIMARY KEY (`cPharmaID`);

--
-- Indexes for table `prescription_med_t`
--
ALTER TABLE `prescription_med_t`
  ADD PRIMARY KEY (`cPrescID`,`cMedicine`);

--
-- Indexes for table `prescription_t`
--
ALTER TABLE `prescription_t`
  ADD PRIMARY KEY (`cPrescID`),
  ADD KEY `cpUserID` (`cpUserID`),
  ADD KEY `cpsUserID` (`cpsUserID`);

--
-- Indexes for table `psychiatrist_t`
--
ALTER TABLE `psychiatrist_t`
  ADD PRIMARY KEY (`cpsUserID`),
  ADD KEY `cRehabID` (`cRehabID`);

--
-- Indexes for table `psychiatrist_work_records_t`
--
ALTER TABLE `psychiatrist_work_records_t`
  ADD PRIMARY KEY (`cpsUserID`,`cRehabID`),
  ADD KEY `cRehabID` (`cRehabID`);

--
-- Indexes for table `rehab_centre_contact_t`
--
ALTER TABLE `rehab_centre_contact_t`
  ADD PRIMARY KEY (`cRehabID`,`cContact`);

--
-- Indexes for table `rehab_centre_t`
--
ALTER TABLE `rehab_centre_t`
  ADD PRIMARY KEY (`cRehabID`),
  ADD KEY `cSupervisor` (`cSupervisorID`);

--
-- Indexes for table `specialist_t`
--
ALTER TABLE `specialist_t`
  ADD PRIMARY KEY (`csUserID`);

--
-- Indexes for table `therapist_notes_t`
--
ALTER TABLE `therapist_notes_t`
  ADD PRIMARY KEY (`ctsUserID`,`cpUserID`),
  ADD KEY `cpUserID` (`cpUserID`);

--
-- Indexes for table `therapist_t`
--
ALTER TABLE `therapist_t`
  ADD PRIMARY KEY (`ctsUserID`);

--
-- Indexes for table `therapist_work_records_t`
--
ALTER TABLE `therapist_work_records_t`
  ADD PRIMARY KEY (`ctsUserID`,`cRehabID`),
  ADD KEY `cRehabID` (`cRehabID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment_t`
--
ALTER TABLE `appointment_t`
  ADD CONSTRAINT `fk_cpUserID` FOREIGN KEY (`cpUserID`) REFERENCES `patient_t` (`cpUserID`),
  ADD CONSTRAINT `fk_csUserID` FOREIGN KEY (`csUserID`) REFERENCES `specialist_t` (`csUserID`);

--
-- Constraints for table `ngo_contact_t`
--
ALTER TABLE `ngo_contact_t`
  ADD CONSTRAINT `ngo_contact_t_ibfk_1` FOREIGN KEY (`cNGO_ID`) REFERENCES `ngo_t` (`cNGO_ID`);

--
-- Constraints for table `ngo_hotline_t`
--
ALTER TABLE `ngo_hotline_t`
  ADD CONSTRAINT `ngo_hotline_t_ibfk_1` FOREIGN KEY (`cNGO_ID`) REFERENCES `ngo_t` (`cNGO_ID`);

--
-- Constraints for table `patient_review_records_t`
--
ALTER TABLE `patient_review_records_t`
  ADD CONSTRAINT `patient_review_records_t_ibfk_1` FOREIGN KEY (`cpUserID`) REFERENCES `patient_review_t` (`cpUserID`),
  ADD CONSTRAINT `patient_review_records_t_ibfk_2` FOREIGN KEY (`csUserID`) REFERENCES `patient_review_t` (`csUserID`);

--
-- Constraints for table `patient_review_t`
--
ALTER TABLE `patient_review_t`
  ADD CONSTRAINT `patient_review_t_ibfk_1` FOREIGN KEY (`cpUserID`) REFERENCES `patient_t` (`cpUserID`),
  ADD CONSTRAINT `patient_review_t_ibfk_2` FOREIGN KEY (`csUserID`) REFERENCES `specialist_t` (`csUserID`);

--
-- Constraints for table `patient_t`
--
ALTER TABLE `patient_t`
  ADD CONSTRAINT `cpUserID` FOREIGN KEY (`cpUserID`) REFERENCES `person_t` (`cUserID`);

--
-- Constraints for table `person_contact_t`
--
ALTER TABLE `person_contact_t`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`cUserID`) REFERENCES `person_t` (`cUserID`);

--
-- Constraints for table `pharmacy_contact_t`
--
ALTER TABLE `pharmacy_contact_t`
  ADD CONSTRAINT `cPharmaID` FOREIGN KEY (`cPharmaID`) REFERENCES `pharmacy_t` (`cPharmaID`);

--
-- Constraints for table `prescription_med_t`
--
ALTER TABLE `prescription_med_t`
  ADD CONSTRAINT `prescription_med_t_ibfk_1` FOREIGN KEY (`cPrescID`) REFERENCES `prescription_t` (`cPrescID`);

--
-- Constraints for table `prescription_t`
--
ALTER TABLE `prescription_t`
  ADD CONSTRAINT `prescription_t_ibfk_1` FOREIGN KEY (`cpUserID`) REFERENCES `patient_t` (`cpUserID`),
  ADD CONSTRAINT `prescription_t_ibfk_2` FOREIGN KEY (`cpsUserID`) REFERENCES `psychiatrist_t` (`cpsUserID`);

--
-- Constraints for table `psychiatrist_t`
--
ALTER TABLE `psychiatrist_t`
  ADD CONSTRAINT `cpsUserlD` FOREIGN KEY (`cpsUserID`) REFERENCES `specialist_t` (`csUserID`),
  ADD CONSTRAINT `psychiatrist_t_ibfk_1` FOREIGN KEY (`cRehabID`) REFERENCES `rehab_centre_t` (`cRehabID`);

--
-- Constraints for table `psychiatrist_work_records_t`
--
ALTER TABLE `psychiatrist_work_records_t`
  ADD CONSTRAINT `psychiatrist_work_records_t_ibfk_1` FOREIGN KEY (`cpsUserID`) REFERENCES `psychiatrist_t` (`cpsUserID`),
  ADD CONSTRAINT `psychiatrist_work_records_t_ibfk_2` FOREIGN KEY (`cRehabID`) REFERENCES `rehab_centre_t` (`cRehabID`);

--
-- Constraints for table `rehab_centre_contact_t`
--
ALTER TABLE `rehab_centre_contact_t`
  ADD CONSTRAINT `cRehabID` FOREIGN KEY (`cRehabID`) REFERENCES `rehab_centre_t` (`cRehabID`);

--
-- Constraints for table `rehab_centre_t`
--
ALTER TABLE `rehab_centre_t`
  ADD CONSTRAINT `cSupervisor` FOREIGN KEY (`cSupervisorID`) REFERENCES `specialist_t` (`csUserID`);

--
-- Constraints for table `specialist_t`
--
ALTER TABLE `specialist_t`
  ADD CONSTRAINT `csUserID` FOREIGN KEY (`csUserID`) REFERENCES `person_t` (`cUserID`);

--
-- Constraints for table `therapist_notes_t`
--
ALTER TABLE `therapist_notes_t`
  ADD CONSTRAINT `therapist_notes_t_ibfk_1` FOREIGN KEY (`cpUserID`) REFERENCES `patient_t` (`cpUserID`),
  ADD CONSTRAINT `therapist_notes_t_ibfk_2` FOREIGN KEY (`ctsUserID`) REFERENCES `therapist_t` (`ctsUserID`);

--
-- Constraints for table `therapist_t`
--
ALTER TABLE `therapist_t`
  ADD CONSTRAINT `therapist_t_ibfk_1` FOREIGN KEY (`ctsUserID`) REFERENCES `specialist_t` (`csUserID`);

--
-- Constraints for table `therapist_work_records_t`
--
ALTER TABLE `therapist_work_records_t`
  ADD CONSTRAINT `therapist_work_records_t_ibfk_1` FOREIGN KEY (`cRehabID`) REFERENCES `rehab_centre_t` (`cRehabID`),
  ADD CONSTRAINT `therapist_work_records_t_ibfk_2` FOREIGN KEY (`ctsUserID`) REFERENCES `therapist_t` (`ctsUserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;