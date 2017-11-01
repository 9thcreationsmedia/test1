-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2017 at 06:54 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osms`
--

-- --------------------------------------------------------

--
-- Table structure for table `chapters`
--

CREATE TABLE `chapters` (
  `id` int(10) UNSIGNED NOT NULL,
  `chapter_name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapter_number` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chapter_start_date` date DEFAULT NULL,
  `chapter_end_date` date DEFAULT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `classtables`
--

CREATE TABLE `classtables` (
  `id` int(10) UNSIGNED NOT NULL,
  `class_name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_teacher` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `classtables`
--

INSERT INTO `classtables` (`id`, `class_name`, `class_teacher`, `created_at`, `updated_at`) VALUES
(8, 'chinna', 'roja', '2017-10-23 09:25:42', '2017-10-23 22:56:15');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_type` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_fname` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `employee_lname` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `email` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience_in_years` char(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `dol` date DEFAULT NULL,
  `aadhar` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobbies` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_groop` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caste` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_photo` char(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_resume` char(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_certificates` char(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedetails`
--

CREATE TABLE `feedetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `fee_type` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` decimal(7,2) NOT NULL,
  `extra_curricular` decimal(7,2) NOT NULL,
  `num_terms` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(24, '2017_10_11_071918_create_employees_table', 1),
(49, '2017_10_07_165326_create_classtables_table', 2),
(50, '2017_10_08_053113_create_sections_table', 2),
(51, '2017_10_11_131133_create_parents_table', 2),
(52, '2017_10_11_131231_create_students_table', 2),
(53, '2017_10_12_070106_create_subjects_table', 2),
(54, '2017_10_12_070135_create_chapters_table', 2),
(55, '2017_10_13_050947_create_employees_table', 2),
(56, '2017_10_21_053814_create_feedetails_table', 2),
(57, '2017_10_23_082728_create_products_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_fname` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_lname` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `relation_with_student` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `present_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permanent_address` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `aadhar` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pan` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_groop` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caste` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_photo` char(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `details`, `created_at`, `updated_at`) VALUES
(3, 'manish', 'yejellaa', '2017-10-23 03:06:33', '2017-10-23 03:26:37'),
(4, '656565', '5565', '2017-10-23 03:07:00', '2017-10-23 03:07:00'),
(5, 'roja', 'yejella', '2017-10-23 03:09:27', '2017-10-23 03:09:27'),
(6, 'kat', 'hui', '2017-10-23 03:26:49', '2017-10-23 03:26:49');

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_teacher` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `status` char(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `stud_adm_id` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_fname` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_lname` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` char(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll_no` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date DEFAULT NULL,
  `doj` date DEFAULT NULL,
  `dol` date DEFAULT NULL,
  `aadhar` char(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hobbies` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blood_groop` char(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_photo` char(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_tc` char(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `upload_certificates` char(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(10) UNSIGNED NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_teacher` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_id` int(10) UNSIGNED NOT NULL,
  `section_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chapters`
--
ALTER TABLE `chapters`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chapters_subject_id_foreign` (`subject_id`),
  ADD KEY `chapters_class_id_foreign` (`class_id`),
  ADD KEY `chapters_section_id_foreign` (`section_id`);

--
-- Indexes for table `classtables`
--
ALTER TABLE `classtables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedetails`
--
ALTER TABLE `feedetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedetails_class_id_foreign` (`class_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sections_class_id_foreign` (`class_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_stud_adm_id_unique` (`stud_adm_id`),
  ADD KEY `students_parent_id_foreign` (`parent_id`),
  ADD KEY `students_class_id_foreign` (`class_id`),
  ADD KEY `students_section_id_foreign` (`section_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_class_id_foreign` (`class_id`),
  ADD KEY `subjects_section_id_foreign` (`section_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chapters`
--
ALTER TABLE `chapters`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `classtables`
--
ALTER TABLE `classtables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedetails`
--
ALTER TABLE `feedetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chapters`
--
ALTER TABLE `chapters`
  ADD CONSTRAINT `chapters_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classtables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chapters_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chapters_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedetails`
--
ALTER TABLE `feedetails`
  ADD CONSTRAINT `feedetails_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classtables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sections`
--
ALTER TABLE `sections`
  ADD CONSTRAINT `sections_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classtables` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classtables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parents` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `students_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_class_id_foreign` FOREIGN KEY (`class_id`) REFERENCES `classtables` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subjects_section_id_foreign` FOREIGN KEY (`section_id`) REFERENCES `sections` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
