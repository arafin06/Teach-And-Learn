-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2019 at 11:39 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teach_and_learn`
--

-- --------------------------------------------------------

--
-- Table structure for table `biddings`
--

CREATE TABLE `biddings` (
  `id` int(10) UNSIGNED NOT NULL,
  `bidder_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `bid_amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `biddings`
--

INSERT INTO `biddings` (`id`, `bidder_id`, `question_id`, `bid_amount`, `created_at`, `updated_at`) VALUES
(4, 6, 2, 60, '2018-11-19 04:42:05', '2018-11-19 04:42:05');

-- --------------------------------------------------------

--
-- Table structure for table `buy_credits`
--

CREATE TABLE `buy_credits` (
  `id` int(10) UNSIGNED NOT NULL,
  `bkash_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `clint_id` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `cash` int(11) NOT NULL,
  `tr_id` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clints`
--

CREATE TABLE `clints` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skyp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `educational_background` int(11) NOT NULL,
  `department` int(11) NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `institute` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verify` tinyint(4) NOT NULL,
  `block` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clints`
--

INSERT INTO `clints` (`id`, `fname`, `lname`, `email`, `mobile`, `skyp`, `educational_background`, `department`, `profession`, `institute`, `profile_image`, `password`, `verify`, `block`, `created_at`, `updated_at`) VALUES
(5, 'Niaz MD', 'Arafin Haque', 'arafin6@gmail.com', '01779337180', 'arafin06', 5, 2, 'Student', 'Daffodil International University', 'profile-image/40424733_2334696009904715_7047121518244921344_n.jpg', '$2y$10$WGBsIh0uOYqDd.AjcpQ7gOtutc6dFNLQcLZzwTIiOxyOP1.nTJhZq', 1, 1, '2018-10-19 10:00:39', '2018-10-26 15:37:15'),
(6, 'Shadhin', 'Sabbir', 'sabbir@gmail.com', '01521201439', 'sabbir007', 5, 2, 'Student', 'Daffodil International University', 'profile-image/34016686_1813105648756311_4098241717780611072_n.jpg', '$2y$10$NYZNGmDq1Zii5G/fHiXDL.2i.kJkRRoWZ2Ut4iIr12KBelBZXauXG', 1, 1, '2018-10-24 08:56:19', '2018-10-28 09:12:52'),
(8, 'Md Tarikul', 'Islam', 'lipu@gmail.com', '01521201439', 'lipu007', 5, 2, 'Student', 'Daffodil International University', 'profile-image/17103557_1847091608895094_338211505683169655_n.jpg', '$2y$10$TzMlw1EH8fTlTqfhd4l35uQp1DD.1diso4cszfwNMOkZDUJZKN63C', 1, 1, '2018-10-30 07:40:32', '2018-10-30 07:41:06'),
(11, 'Arafin', 'Haque', 'niaz4438@diu.edu.bd', '01521201439', 'arafin06', 5, 2, 'Student', 'Daffodil International University', 'profile-image/23622097_1869167156457605_2239814171938342548_n.jpg', '$2y$10$I04FZN7ZzBl3RFSZw19I/.K0JVaG8HJJ9AeKV5lbgFwfZbp6IEDSC', 1, 1, '2018-11-19 04:39:16', '2018-11-19 04:39:53');

-- --------------------------------------------------------

--
-- Table structure for table `confirmations`
--

CREATE TABLE `confirmations` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `confirmations`
--

INSERT INTO `confirmations` (`id`, `teacher_id`, `question_id`, `student_id`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 10, 1, '2018-11-19 04:34:36', '2018-11-19 04:34:36'),
(2, 6, 1, 10, 1, '2018-11-19 04:35:08', '2018-11-19 04:35:08');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `mobile`, `email`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'asdfgh', '23456', 'arafin6@gmail.com', 'dfghm', '2019-04-02 09:46:46', '2019-04-02 09:46:46');

-- --------------------------------------------------------

--
-- Table structure for table `credits`
--

CREATE TABLE `credits` (
  `id` int(10) UNSIGNED NOT NULL,
  `clint_id` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `credits`
--

INSERT INTO `credits` (`id`, `clint_id`, `credit`, `created_at`, `updated_at`) VALUES
(1, 5, 458, '2018-10-19 10:00:39', '2018-10-30 07:49:10'),
(2, 6, 105, '2018-10-24 08:56:20', '2018-10-30 07:48:26'),
(3, 7, 10, '2018-10-28 09:09:28', '2018-10-28 09:09:28'),
(4, 8, 115, '2018-10-30 07:40:33', '2018-11-19 04:43:50'),
(7, 11, 55, '2018-11-19 04:39:16', '2018-11-19 04:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(11) NOT NULL,
  `department_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `subject_id`, `department_name`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Math', 1, '2018-09-23 09:44:25', '2018-09-23 10:23:59'),
(2, 5, 'CSE', 1, '2018-09-29 05:18:26', '2018-09-29 05:18:26'),
(3, 3, 'BBA', 1, '2018-10-28 09:07:07', '2018-10-28 09:07:07');

-- --------------------------------------------------------

--
-- Table structure for table `done_studies`
--

CREATE TABLE `done_studies` (
  `id` int(10) UNSIGNED NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `question_id` int(11) NOT NULL,
  `bid_id` int(11) NOT NULL,
  `student_done` int(11) NOT NULL,
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_09_23_094723_create_subjects_table', 2),
(4, '2018_09_23_153918_create_departments_table', 3),
(5, '2018_09_29_110323_create_contacts_table', 4),
(6, '2018_10_01_094510_create_contacts_table', 5),
(7, '2018_10_13_142925_create_clints_table', 6),
(8, '2018_10_15_185359_create_clints_table', 7),
(9, '2018_10_16_091947_create_buy_credits_table', 8),
(10, '2018_10_19_154907_create_credits_table', 9),
(11, '2018_10_19_171056_create_sell_credits_table', 10),
(12, '2018_10_22_141649_create_questions_table', 11),
(13, '2018_10_22_151948_create_questions_table', 12),
(14, '2018_10_23_103715_create_biddings_table', 13),
(15, '2018_10_24_190744_create_biddings_table', 14),
(16, '2018_10_25_120123_create_confirmations_table', 15),
(17, '2018_10_25_121511_create_confirmations_table', 16),
(18, '2018_10_25_171923_create_done_studies_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(10) UNSIGNED NOT NULL,
  `clint_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `question_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher_requirement` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `clint_id`, `department_id`, `question_details`, `teacher_requirement`, `credit`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 5, 2, 'wgerhtrjy', 'h54wh', 40, 1, '2019-08-28 09:39:34', '2019-08-28 09:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `sell_credits`
--

CREATE TABLE `sell_credits` (
  `id` int(10) UNSIGNED NOT NULL,
  `bkash_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clint_id` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sell_credits`
--

INSERT INTO `sell_credits` (`id`, `bkash_number`, `clint_id`, `credit`, `created_at`, `updated_at`) VALUES
(2, '01779337180', 8, 500, '2018-11-19 04:43:16', '2018-11-19 04:43:16');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Science', 1, '2018-09-23 03:53:35', '2018-09-23 04:09:07'),
(2, 'Arts', 1, '2018-09-23 03:56:35', '2018-09-23 03:56:35'),
(3, 'Commerce', 1, '2018-09-23 03:56:43', '2018-09-23 03:56:43'),
(4, 'Medical', 1, '2018-09-23 08:41:17', '2018-09-23 08:42:49'),
(5, 'Engineering', 1, '2018-09-29 05:18:15', '2018-09-29 05:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Niaz MD Arafin Haque', 'admin@gmail.com', NULL, '$2y$10$sIvTXX8sVpku4LujQOAkPua5tcsntul4BKeNNAYpuXPZzVf5g0kG.', 'G0R1pHp27Ul8slxYQ64a96yGQeLggje7JohlsymGLmdxm7zNBp0Ahydn2RE2', '2018-09-21 11:48:54', '2018-09-21 11:48:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biddings`
--
ALTER TABLE `biddings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_credits`
--
ALTER TABLE `buy_credits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clints`
--
ALTER TABLE `clints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirmations`
--
ALTER TABLE `confirmations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credits`
--
ALTER TABLE `credits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `done_studies`
--
ALTER TABLE `done_studies`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_credits`
--
ALTER TABLE `sell_credits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `biddings`
--
ALTER TABLE `biddings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `buy_credits`
--
ALTER TABLE `buy_credits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clints`
--
ALTER TABLE `clints`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `confirmations`
--
ALTER TABLE `confirmations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `credits`
--
ALTER TABLE `credits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `done_studies`
--
ALTER TABLE `done_studies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sell_credits`
--
ALTER TABLE `sell_credits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
