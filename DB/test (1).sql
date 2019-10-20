-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 07:35 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `fname`, `lname`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vraj', 'Joshi', 'vrajjoshi@gmail.com', '123', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `clas`
--

CREATE TABLE `clas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clas`
--

INSERT INTO `clas` (`id`, `class`, `created_at`, `updated_at`) VALUES
(1, 'MCA', '2019-08-08 12:29:27', '2019-08-08 12:29:27'),
(2, 'BBA', '2019-08-08 12:31:20', '2019-08-08 12:31:20'),
(3, 'BCA', '2019-08-08 12:48:25', '2019-08-08 12:48:25'),
(5, 'Bcom', '2019-09-26 11:40:49', '2019-09-26 11:40:49');

-- --------------------------------------------------------

--
-- Table structure for table `divs`
--

CREATE TABLE `divs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sid` bigint(20) UNSIGNED NOT NULL,
  `div` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divs`
--

INSERT INTO `divs` (`id`, `sid`, `div`, `created_at`, `updated_at`) VALUES
(1, 1, 'd', '2019-09-26 10:16:28', '2019-09-26 10:16:28'),
(3, 3, 'g', '2019-09-28 02:31:32', '2019-09-28 02:31:32'),
(4, 3, 'c', '2019-09-28 06:31:53', '2019-09-28 06:31:53'),
(5, 1, 'A', '2019-09-28 07:34:44', '2019-09-28 07:34:44'),
(6, 2, 'f', '2019-10-09 06:55:03', '2019-10-09 06:55:03');

-- --------------------------------------------------------

--
-- Table structure for table `facalty_allocations`
--

CREATE TABLE `facalty_allocations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `div_id` bigint(20) UNSIGNED NOT NULL,
  `subject_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_07_25_130542_create_students_table', 1),
(4, '2019_07_31_152524_create_teachers_table', 1),
(5, '2019_08_05_111200_create_clas_table', 1),
(6, '2019_08_08_080804_create_sems_table', 1),
(7, '2019_09_14_124027_create_ques_table', 2),
(8, '2019_09_20_070007_create_divs_table', 2),
(9, '2019_09_25_200102_create_admins_table', 3),
(10, '2019_09_26_030337_create_subjects_table', 4),
(11, '2019_09_28_082859_create_facalty_allocations_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`id`, `question`, `created_at`, `updated_at`) VALUES
(1, 'kem cho majama???', '2019-09-28 02:39:16', '2019-09-28 02:39:16'),
(2, 'teacher keva che??', '2019-09-28 02:40:29', '2019-09-28 02:40:29');

-- --------------------------------------------------------

--
-- Table structure for table `sems`
--

CREATE TABLE `sems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cid` bigint(20) UNSIGNED NOT NULL,
  `sem` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sems`
--

INSERT INTO `sems` (`id`, `cid`, `sem`, `created_at`, `updated_at`) VALUES
(1, 1, '1', '2019-09-20 00:51:20', '2019-09-20 00:51:20'),
(2, 1, '1', '2019-09-20 00:52:06', '2019-09-20 00:52:06'),
(3, 2, '2', '2019-09-20 00:53:40', '2019-09-20 00:53:40'),
(6, 2, '5', '2019-09-20 01:13:00', '2019-09-20 01:13:00'),
(7, 1, '4', '2019-09-20 01:13:35', '2019-09-20 01:13:35'),
(9, 1, 'sem1', '2019-09-20 03:14:22', '2019-09-20 03:14:22'),
(10, 2, 'sem3', '2019-09-20 03:15:21', '2019-09-20 03:15:21'),
(11, 2, 'Sen2', '2019-09-20 14:17:52', '2019-09-20 14:17:52'),
(12, 2, 'BBA1', '2019-09-24 09:32:16', '2019-09-24 09:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `e_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `div` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conform_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `e_no`, `name`, `email`, `phone_number`, `address`, `class`, `div`, `password`, `conform_password`, `created_at`, `updated_at`) VALUES
(1, '8645132', 'gjkhjl', 'vrajjoshi1998@gmail.com', 7865312, 'hgfjg', 'uyfyjgjkk', 'jgkhk', '123', '123', '2019-08-08 22:21:00', '2019-08-08 22:21:00'),
(2, '521366', 'fgh', 'hardikpandya20@gmail.com', 894561, 'hmt', 'j', 'f', '456', '456', '2019-08-13 02:58:08', '2019-08-13 02:58:08');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sid` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `sid`, `subject`, `created_at`, `updated_at`) VALUES
(1, 3, 'mnb', '2019-09-26 10:27:05', '2019-09-26 10:27:05'),
(2, 2, 'fhds', '2019-09-28 01:49:20', '2019-09-28 01:49:20'),
(3, 2, 'qwrth', '2019-09-28 01:49:34', '2019-09-28 01:49:34'),
(4, 2, 'laravel', '2019-10-08 16:36:26', '2019-10-08 16:36:26'),
(5, 2, 'jhg', '2019-10-09 06:58:51', '2019-10-09 06:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bdate` date NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpassword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `fname`, `lname`, `email`, `bdate`, `city`, `number`, `password`, `cpassword`, `created_at`, `updated_at`) VALUES
(1, 'vraj', 'joshi', 'vrajjoshi1998@gmail.com', '2019-08-12', 'hmt', '8469720929', '123', '123', '2019-08-08 22:18:53', '2019-08-08 22:18:53'),
(2, 'rahul', 'poddar', 'rahulpoddar@gmail.com@gmail.com', '2019-09-06', 'fdsfg', '8764578785', '456', '456', '2019-09-28 01:53:29', '2019-09-28 01:53:29'),
(3, 'dsfgh', 'dsfghj', 'dfghj@gmail.com', '1998-07-18', 'dfg', '86548645', '123', '456', '2019-09-28 01:55:01', '2019-09-28 01:55:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clas`
--
ALTER TABLE `clas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `divs`
--
ALTER TABLE `divs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `divs_sid_foreign` (`sid`);

--
-- Indexes for table `facalty_allocations`
--
ALTER TABLE `facalty_allocations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facalty_allocations_teacher_id_foreign` (`teacher_id`),
  ADD KEY `facalty_allocations_div_id_foreign` (`div_id`),
  ADD KEY `facalty_allocations_subject_id_foreign` (`subject_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sems`
--
ALTER TABLE `sems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sems_cid_foreign` (`cid`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subjects_sid_foreign` (`sid`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `clas`
--
ALTER TABLE `clas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `divs`
--
ALTER TABLE `divs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `facalty_allocations`
--
ALTER TABLE `facalty_allocations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sems`
--
ALTER TABLE `sems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `divs`
--
ALTER TABLE `divs`
  ADD CONSTRAINT `divs_sid_foreign` FOREIGN KEY (`sid`) REFERENCES `sems` (`id`);

--
-- Constraints for table `facalty_allocations`
--
ALTER TABLE `facalty_allocations`
  ADD CONSTRAINT `facalty_allocations_div_id_foreign` FOREIGN KEY (`div_id`) REFERENCES `divs` (`id`),
  ADD CONSTRAINT `facalty_allocations_subject_id_foreign` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`id`),
  ADD CONSTRAINT `facalty_allocations_teacher_id_foreign` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`);

--
-- Constraints for table `sems`
--
ALTER TABLE `sems`
  ADD CONSTRAINT `sems_cid_foreign` FOREIGN KEY (`cid`) REFERENCES `clas` (`id`);

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `subjects_sid_foreign` FOREIGN KEY (`sid`) REFERENCES `sems` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
