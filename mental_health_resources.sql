-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2023 at 12:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mental_health_resources`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment_t`
--

CREATE TABLE `appointment_t` (
  `cpUserID` varchar(7) NOT NULL,
  `csUserID` varchar(7) NOT NULL,
  `dappDate` date NOT NULL,
  `dappTime` varchar(8) NOT NULL,
  `cappStatus` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ngo_contact_t`
--

CREATE TABLE `ngo_contact_t` (
  `cNGO_ID` varchar(7) NOT NULL,
  `cContact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_hotline_t`
--

CREATE TABLE `ngo_hotline_t` (
  `cNGO_ID` varchar(7) NOT NULL,
  `cSP_Hotline` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_t`
--

CREATE TABLE `ngo_t` (
  `cNGO_ID` varchar(7) NOT NULL,
  `cStreet` varchar(50) NOT NULL,
  `cRoad` varchar(50) NOT NULL,
  `cCity` varchar(20) NOT NULL,
  `cOwner` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_review_records_t`
--

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

CREATE TABLE `patient_review_t` (
  `cpUserID` varchar(7) NOT NULL,
  `csUserID` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_t`
--

CREATE TABLE `patient_t` (
  `cpUserID` varchar(7) NOT NULL,
  `cMedical_History` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `person_contact_t`
--

CREATE TABLE `person_contact_t` (
  `cUserID` varchar(7) NOT NULL,
  `cContact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `person_t`
--

CREATE TABLE `person_t` (
  `cUserID` varchar(7) NOT NULL,
  `cFname` varchar(30) NOT NULL,
  `cLname` varchar(30) NOT NULL,
  `dDOB` date NOT NULL,
  `cAddress` varchar(50) NOT NULL,
  `cEmail` varchar(30) NOT NULL,
  `cType` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_contact_t`
--

CREATE TABLE `pharmacy_contact_t` (
  `cPharmaID` varchar(7) NOT NULL,
  `cContact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pharmacy_t`
--

CREATE TABLE `pharmacy_t` (
  `cPharmaID` varchar(7) NOT NULL,
  `cStreet` varchar(20) NOT NULL,
  `cRoad` varchar(20) NOT NULL,
  `cCity` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescription_med_t`
--

CREATE TABLE `prescription_med_t` (
  `cPrescID` varchar(7) NOT NULL,
  `cMedicine` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescription_t`
--

CREATE TABLE `prescription_t` (
  `cPrescID` varchar(7) NOT NULL,
  `dIssueDate` date NOT NULL,
  `cpUserID` varchar(7) NOT NULL,
  `cpsUserID` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `psychiatrist_t`
--

CREATE TABLE `psychiatrist_t` (
  `cpsUserID` varchar(7) NOT NULL,
  `cRehabID` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `psychiatrist_work_records_t`
--

CREATE TABLE `psychiatrist_work_records_t` (
  `cpsUserID` varchar(7) NOT NULL,
  `cRehabID` varchar(7) NOT NULL,
  `dJ_Date` date NOT NULL,
  `dL_Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rehab_centre_contact_t`
--

CREATE TABLE `rehab_centre_contact_t` (
  `cRehabID` varchar(5) NOT NULL,
  `cContact` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rehab_centre_t`
--

CREATE TABLE `rehab_centre_t` (
  `cRehabID` varchar(5) NOT NULL,
  `cStreet` varchar(20) NOT NULL,
  `cRoad` varchar(20) NOT NULL,
  `cCity` varchar(20) NOT NULL,
  `cSupervisor` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specialist_t`
--

CREATE TABLE `specialist_t` (
  `csUserID` varchar(7) NOT NULL,
  `cExperience` varchar(100) NOT NULL,
  `cOff_Address` varchar(50) NOT NULL,
  `cType` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `therapist_notes_t`
--

CREATE TABLE `therapist_notes_t` (
  `ctsUserID` varchar(7) NOT NULL,
  `cpUserID` varchar(7) NOT NULL,
  `cNotes` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `therapist_t`
--

CREATE TABLE `therapist_t` (
  `ctsUserID` varchar(7) NOT NULL,
  `cSpeciality` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `therapist_work_records_t`
--

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

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Raihan', 'raihan@gmail.com', NULL, '$2y$12$OnUxpP.jYbbrbGb44kwAoO8MPL1EGZES2/viq0zbKYmy.TmgxHxla', NULL, '2023-12-03 04:26:14', '2023-12-03 04:26:14'),
(2, 'Showndorjo', 'dhara@hotmail.com', NULL, '$2y$12$wXv9hySHfI060v4Z8n90LOj6zmbOqf2wo3oPSljxyfN/l9a4yYUn6', NULL, '2023-12-03 04:27:47', '2023-12-03 04:27:47'),
(3, 'Gaji', 'gazi@tank.com', NULL, '$2y$12$5FLVioPY/9yVsicnCoUdweaoJ3nO2iqY87FC/RFsI5kjx10nDtStq', NULL, '2023-12-03 11:04:40', '2023-12-03 11:04:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment_t`
--
ALTER TABLE `appointment_t`
  ADD PRIMARY KEY (`cpUserID`,`csUserID`),
  ADD KEY `csUserID` (`csUserID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
  ADD KEY `cSupervisor` (`cSupervisor`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment_t`
--
ALTER TABLE `appointment_t`
  ADD CONSTRAINT `appointment_t_ibfk_1` FOREIGN KEY (`cpUserID`) REFERENCES `patient_t` (`cpUserID`),
  ADD CONSTRAINT `appointment_t_ibfk_2` FOREIGN KEY (`csUserID`) REFERENCES `specialist_t` (`csUserID`);

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
  ADD CONSTRAINT `patient_review_records_t_ibfk_1` FOREIGN KEY (`cpUserID`) REFERENCES `patient_t` (`cpUserID`),
  ADD CONSTRAINT `patient_review_records_t_ibfk_2` FOREIGN KEY (`csUserID`) REFERENCES `specialist_t` (`csUserID`);

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
  ADD CONSTRAINT `cSupervisor` FOREIGN KEY (`cSupervisor`) REFERENCES `specialist_t` (`csUserID`);

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
