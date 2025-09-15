-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2025 at 10:59 AM
-- Server version: 8.0.43-0ubuntu0.22.04.1
-- PHP Version: 8.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_directory`
--

CREATE TABLE `admin_directory` (
  `id` int NOT NULL,
  `institute_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_name` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_personal_email` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_email_otp` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `email_otp_verification_status` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_whatsapp_contact` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `whatsapp_otp` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `whatsapp_verification_status` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `institute_email` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `institute_contact` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `year_of_establishment` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `institute_short_description` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `postal_address` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `map_embeded_address` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `alternate_email` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `alternate_contact` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `facebook_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `twitter_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `linkedin_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `instagram_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `youtube_url` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `registration_no` varchar(120) COLLATE utf8mb4_general_ci NOT NULL,
  `registration_document` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `institute_logo` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `institute_short_code` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `system_gen_password` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `old_password_status` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `portal_credentials` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `portal_password_status` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `admin_avatar` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `subscription_amount` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `subscription_tenure` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `paid_amount` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `dues_amount` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `profile_activation_status` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `if_suspended_reason` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `payment_mode` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `transaction_id` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `payment_date` varchar(360) COLLATE utf8mb4_general_ci NOT NULL,
  `portal_registraton_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_directory`
--
ALTER TABLE `admin_directory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_directory`
--
ALTER TABLE `admin_directory`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
