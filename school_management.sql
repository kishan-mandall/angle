-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2024 at 10:34 AM
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
-- Database: `school_management`
--

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
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2024_08_28_125822_create_students_table', 1),
(14, '2024_08_28_142643_create_teachers_table', 1),
(15, '2024_08_28_170320_add_delete_at_to_students_table', 1),
(16, '2024_08_28_202821_add_delete_at_to_teachers_table', 1);

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
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `class_teacher_id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `admission_date` date NOT NULL,
  `yearly_fees` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `student_name`, `class_teacher_id`, `class`, `admission_date`, `yearly_fees`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Nelda Schroeder', 1, 'first', '2024-08-28', '10000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(2, 'Korey DuBuque PhD', 2, 'first', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(3, 'Esteban Rolfson V', 3, 'four', '2024-08-28', '10000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(4, 'Carole Block', 4, 'third', '2024-08-28', '5000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(5, 'Gregorio Stokes', 5, 'first', '2024-08-28', '5000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(6, 'Prof. Velva Deckow DDS', 6, 'second', '2024-08-28', '10000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(7, 'Vivien Emmerich', 7, 'first', '2024-08-28', '5000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(8, 'Mrs. Freda Hilpert III', 8, 'second', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(9, 'Ms. Loyce Rohan', 9, 'nine', '2024-08-28', '5000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(10, 'Eugene Boyle Sr.', 10, 'four', '2024-08-28', '30000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(11, 'Cale Koepp', 11, 'third', '2024-08-28', '10000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(12, 'Linda Zieme', 12, 'four', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(13, 'Mr. Chester Dietrich', 13, 'first', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(14, 'Ms. Katharina Nienow', 14, 'six', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(15, 'Zoey Kuvalis', 15, 'second', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(16, 'Glennie Johnson', 16, 'second', '2024-08-28', '5000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(17, 'Ms. Shanna Homenick II', 17, 'nine', '2024-08-28', '10000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(18, 'Ms. Lila O\'Reilly', 18, 'first', '2024-08-28', '10000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(19, 'Leopoldo Dare', 19, 'four', '2024-08-28', '20000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(20, 'Mr. Jayde Okuneva', 20, 'nine', '2024-08-28', '10000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(21, 'Julian VonRueden', 21, 'third', '2024-08-28', '20000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(22, 'Miss Vivianne Green DDS', 22, 'first', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(23, 'Heidi Hills', 23, 'first', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(24, 'Yoshiko Durgan', 24, 'four', '2024-08-28', '5000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(25, 'Chaya Harris', 25, 'second', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(26, 'Theron Volkman', 26, 'second', '2024-08-28', '5000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(27, 'Hector Wolff MD', 27, 'four', '2024-08-28', '5000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(28, 'Timmothy Metz', 28, 'first', '2024-08-28', '20000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(29, 'Prof. Brooklyn Schamberger II', 29, 'third', '2024-08-28', '5000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(30, 'Caden Bartoletti', 30, 'first', '2024-08-28', '10000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(31, 'Demetris Hintz', 31, 'nine', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(32, 'Ms. Maci Larkin', 32, 'second', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(33, 'Adam Watsica II', 33, 'first', '2024-08-28', '10000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(34, 'Delfina Kreiger', 34, 'second', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(35, 'Prof. Jacques Hagenes', 35, 'seven', '2024-08-28', '10000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(36, 'Abigale Runolfsdottir', 36, 'first', '2024-08-28', '20000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(37, 'Clifford Murazik II', 37, 'first', '2024-08-28', '5000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(38, 'Margot Schuster', 38, 'five', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(39, 'Branson King', 39, 'third', '2024-08-28', '10000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(40, 'Dr. Jeramy Gusikowski', 40, 'second', '2024-08-28', '5000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(41, 'Mr. Milan Bashirian Jr.', 41, 'five', '2024-08-28', '5000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(42, 'Dr. Alejandrin Bartell', 42, 'four', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(43, 'Dr. Emmalee O\'Reilly DDS', 43, 'four', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(44, 'Prof. Judah Reinger Sr.', 44, 'third', '2024-08-28', '20000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(45, 'Verona Rutherford', 45, 'seven', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(46, 'Madison Bashirian', 46, 'first', '2024-08-28', '20000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(47, 'Geo Gusikowski', 47, 'third', '2024-08-28', '5000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(48, 'Conor Reichert', 48, 'second', '2024-08-28', '10000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(49, 'Eileen Schmidt', 49, 'four', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-27 18:30:00', NULL),
(50, 'Dr. Wilson Collins V', 50, 'five', '2024-08-28', '1000', '2024-08-27 18:30:00', '2024-08-28 23:32:53', '2024-08-28 23:32:53'),
(51, 'krishna', 2, 'second', '2024-08-28', '1', '2024-08-28 22:35:41', '2024-08-28 23:22:19', '2024-08-28 23:22:19'),
(52, 'krishna', 3, 'first', '2024-08-28', '120', '2024-08-28 23:16:48', '2024-08-28 23:22:17', '2024-08-28 23:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `teacherId` int(10) UNSIGNED NOT NULL,
  `teacher_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`teacherId`, `teacher_name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Fred Rowe', NULL, NULL, NULL),
(2, 'Flavie Bradtke', NULL, NULL, NULL),
(3, 'Mr. Ron Rogahn', NULL, NULL, NULL),
(4, 'Prof. Marjolaine Gaylord', NULL, NULL, NULL),
(5, 'Wilfred Bergstrom', NULL, NULL, NULL),
(6, 'Dr. Kaia Gulgowski II', NULL, NULL, NULL),
(7, 'Prof. Michelle Russel Jr.', NULL, NULL, NULL),
(8, 'Heaven Homenick', NULL, NULL, NULL),
(9, 'Casimer Vandervort', NULL, NULL, NULL),
(10, 'Renee Hauck', NULL, NULL, NULL),
(11, 'Ms. Vicky Medhurst', NULL, NULL, NULL),
(12, 'Granville Rowe II', NULL, NULL, NULL),
(13, 'Joshuah Leannon', NULL, NULL, NULL),
(14, 'Christy Mayert', NULL, NULL, NULL),
(15, 'Phyllis Connelly', NULL, NULL, NULL),
(16, 'Nathen Kozey', NULL, NULL, NULL),
(17, 'Chris Morar', NULL, NULL, NULL),
(18, 'Alyce Yost DVM', NULL, NULL, NULL),
(19, 'Santiago Reichert', NULL, NULL, NULL),
(20, 'Julianne Bode', NULL, NULL, NULL),
(21, 'Elias Flatley', NULL, NULL, NULL),
(22, 'Prof. Arthur O\'Connell', NULL, NULL, NULL),
(23, 'Alden Legros', NULL, NULL, NULL),
(24, 'Mr. Halle Murray', NULL, NULL, NULL),
(25, 'Corine Kihn', NULL, NULL, NULL),
(26, 'Lisandro Williamson PhD', NULL, NULL, NULL),
(27, 'Mr. Lazaro King III', NULL, NULL, NULL),
(28, 'Pattie Friesen', NULL, NULL, NULL),
(29, 'Lisa Turner', NULL, NULL, NULL),
(30, 'Letitia Ullrich', NULL, NULL, NULL),
(31, 'Connie Grant', NULL, NULL, NULL),
(32, 'Lionel Wiegand', NULL, NULL, NULL),
(33, 'Mr. Brooks Halvorson', NULL, NULL, NULL),
(34, 'Nia Wehner', NULL, NULL, NULL),
(35, 'Mrs. Marielle Anderson', NULL, NULL, NULL),
(36, 'Kelley Herzog', NULL, NULL, NULL),
(37, 'Daphnee Boehm', NULL, NULL, NULL),
(38, 'Prof. Tracey Douglas DVM', NULL, NULL, NULL),
(39, 'Desiree Rice', NULL, NULL, NULL),
(40, 'Dr. Marilou Graham V', NULL, NULL, NULL),
(41, 'Dr. Greyson Jacobi DVM', NULL, NULL, NULL),
(42, 'Chester Goldner', NULL, NULL, NULL),
(43, 'Jared Predovic', NULL, NULL, NULL),
(44, 'Nicola Rogahn', NULL, NULL, NULL),
(45, 'Prof. Tavares Considine', NULL, NULL, NULL),
(46, 'Armani Lubowitz II', NULL, NULL, NULL),
(47, 'Turner Orn', NULL, '2024-08-28 15:24:21', '2024-08-28 15:24:21'),
(51, 'krishna', '2024-08-28 16:11:30', '2024-08-28 23:31:18', '2024-08-28 23:31:18');

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
  `status` int(55) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'kishan', 'demo@gmail.com', NULL, 'eyJpdiI6IlFRNjVTeVVFQjVQcm8zNXJZWjQyQmc9PSIsInZhbHVlIjoiYXF0bk81OFY4QjViZXNlWkRUVHJ5dz09IiwibWFjIjoiZjA5M2MwMmUxNmYwNjA2YmUzZTUxMWY3ZTJiMDZjNmU5MTZiZmY1NTk1ZDNhNGRmNTcwODhmNjQzMmI2NDk1NSIsInRhZyI6IiJ9', '72MsTuUT3K9BRIBbBr2zKM8ItPxAvONwaZxFivc3SuqkJcpTKH', 1, '2024-08-28 23:48:30', '2024-08-28 23:48:30');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`teacherId`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `teacherId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
