-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2022 at 12:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gportal-final`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_questions`
--

CREATE TABLE `add_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `qtopic_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_questions`
--

INSERT INTO `add_questions` (`id`, `question`, `answer`, `option1`, `option2`, `option3`, `option4`, `mark`, `qtopic_id`, `created_at`, `updated_at`) VALUES
(1, 'What is Article ?', '1', '1', '2', '3', '4', '1', 1, '2022-08-09 00:34:19', '2022-08-09 00:34:19');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '25d55ad283aa400af464c76d713c07ad', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attempt_quizzes`
--

CREATE TABLE `attempt_quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `student_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `right_ans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wrong_ans` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perchantage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attempt_quizzes`
--

INSERT INTO `attempt_quizzes` (`id`, `student_id`, `student_name`, `student_roll`, `student_class`, `student_branch`, `student_semester`, `student_mobile`, `student_email`, `topic_name`, `topic_id`, `right_ans`, `wrong_ans`, `perchantage`, `status`, `created_at`, `updated_at`) VALUES
(21, '2', 'Patty O’Furniture', '123456', 'B.tch', 'cse', 'first', '6396568563', 'email@email.com', 'Article easy', '1', '1', '0', '100', '1', '2022-08-17 00:31:26', '2022-08-17 00:31:26'),
(22, '2', 'Patty O’Furniture', '123456', 'B.tch', 'cse', 'first', '6396568563', 'email@email.com', 'Article Hard', '2', '1', '0', '100', '1', '2022-08-17 00:31:26', '2022-08-17 00:31:26'),
(23, '22', 'Akash', '161660', 'B.Tech', 'CSE', '5th', '8851133606', 'akashdics1@gmail.com', 'Article easy', '1', '0', '1', '0', '1', '2022-08-27 03:26:27', '2022-08-27 03:26:27');

-- --------------------------------------------------------

--
-- Table structure for table `batches`
--

CREATE TABLE `batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `batch_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batches`
--

INSERT INTO `batches` (`id`, `batch_name`, `created_at`, `updated_at`) VALUES
(1, 'B.Tech CSE 1st year', '2022-08-08 00:49:38', '2022-08-08 00:49:38'),
(2, 'B.Tech CSE 2nd Year', '2022-09-08 05:19:55', '2022-09-08 05:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'Soft Skills', '2022-08-08 01:22:48', '2022-08-08 01:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `start_date`, `end_date`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 'Soft Skills Level-1', '2022-08-08', '2022-08-31', '1660119987.jpg', 1, '2022-08-08 01:25:05', '2022-08-10 02:56:27'),
(2, 'Soft Skills Level-2', '2022-09-01', '2022-09-23', '1662007434.jpg', 1, '2022-08-31 23:13:55', '2022-08-31 23:13:55'),
(3, 'Soft Skills Level-3', '2022-09-01', '2022-09-30', '1662007456.jpg', 1, '2022-08-31 23:14:16', '2022-08-31 23:14:16'),
(4, 'Soft Skills Level-4', '2022-09-01', '2022-09-30', '1662007764.jpg', 1, '2022-08-31 23:19:24', '2022-08-31 23:19:24'),
(5, 'Soft Skills Level-5', '2022-09-01', '2022-09-30', '1662007806.jpg', 1, '2022-08-31 23:20:06', '2022-08-31 23:20:06');

-- --------------------------------------------------------

--
-- Table structure for table `course_batches`
--

CREATE TABLE `course_batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_batches`
--

INSERT INTO `course_batches` (`id`, `course_id`, `batch_id`, `created_at`, `updated_at`) VALUES
(2, '1', '1', '2022-08-22 22:49:50', '2022-08-22 22:49:50'),
(6, '1', '161660', '2022-08-27 03:23:25', '2022-08-27 03:23:25'),
(7, '2', '123456', '2022-08-31 23:20:52', '2022-08-31 23:20:52'),
(8, '3', '123456', '2022-08-31 23:21:04', '2022-08-31 23:21:04'),
(9, '4', '123456', '2022-08-31 23:22:29', '2022-08-31 23:22:29'),
(10, '5', '123456', '2022-08-31 23:22:38', '2022-08-31 23:22:38');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_05_16_114404_create_students_table', 1),
(5, '2022_05_24_170337_create_admins_table', 1),
(6, '2022_05_25_061403_create_categories_table', 1),
(7, '2022_05_25_064250_create_batches_table', 1),
(8, '2022_05_30_043135_create_courses_table', 1),
(9, '2022_06_02_051518_create_qcategories_table', 1),
(10, '2022_06_02_065128_create_qtopics_table', 1),
(11, '2022_06_03_043517_create_add_questions_table', 1),
(12, '2022_07_05_044418_create_quiz_answers_table', 1),
(13, '2022_07_09_114609_create_attempt_quizzes_table', 1),
(14, '2022_07_25_090255_create_students_batches_table', 1),
(15, '2022_07_26_095608_create_course_batches_table', 1),
(16, '2022_09_13_040629_create_semesters_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qcategories`
--

CREATE TABLE `qcategories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qcategories`
--

INSERT INTO `qcategories` (`id`, `category_name`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Article', 1, '2022-08-09 00:33:13', '2022-08-09 00:33:13'),
(2, 'Tense', 2, '2022-08-31 23:40:44', '2022-08-31 23:40:44'),
(3, 'Verb', 3, '2022-08-31 23:40:57', '2022-08-31 23:40:57'),
(4, 'parts of speech', 4, '2022-08-31 23:42:45', '2022-08-31 23:42:45'),
(5, 'modal', 5, '2022-08-31 23:43:20', '2022-08-31 23:43:20');

-- --------------------------------------------------------

--
-- Table structure for table `qtopics`
--

CREATE TABLE `qtopics` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `topic_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qcategory_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `qtopics`
--

INSERT INTO `qtopics` (`id`, `topic_name`, `total_question`, `total_time`, `qcategory_id`, `created_at`, `updated_at`) VALUES
(1, 'Article easy', '1', '1', 1, '2022-08-09 00:33:41', '2022-08-16 00:51:29'),
(2, 'Article Hard', '1', '1', 1, '2022-08-23 02:00:26', '2022-08-23 02:00:26'),
(4, 'Tense easy', '5', '5', 2, '2022-08-31 23:44:51', '2022-08-31 23:44:51'),
(5, 'Modal easy', '5', '5', 5, '2022-09-01 23:55:53', '2022-09-01 23:55:53'),
(6, 'Verb easy', '5', '5', 3, '2022-09-01 23:56:24', '2022-09-01 23:56:24'),
(7, 'parts of speech easy', '5', '5', 4, '2022-09-01 23:57:22', '2022-09-01 23:57:22'),
(8, 'Article Medium', '5', '5', 1, '2022-09-12 01:26:23', '2022-09-12 01:26:23');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_answers`
--

CREATE TABLE `quiz_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtopic_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addquestion_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qanswer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quiz_answers`
--

INSERT INTO `quiz_answers` (`id`, `student_id`, `qtopic_id`, `addquestion_id`, `answer`, `qanswer`, `status`, `created_at`, `updated_at`) VALUES
(21, '2', '1', '1', '1', '1', '0', NULL, NULL),
(22, '22', '1', '1', '2', '1', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `semester` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `semester`, `created_at`, `updated_at`) VALUES
(1, '1<sup>st</sup> Semester', NULL, NULL),
(2, '2<sup>nd</sup> Semester', NULL, NULL),
(3, '3<sup>rd</sup> Semester', NULL, NULL),
(4, '4<sup>th</sup> Semester', NULL, NULL),
(5, '5<sup>th</sup> Semester', NULL, NULL),
(6, '6<sup>th</sup> Semester', NULL, NULL),
(7, '7<sup>th</sup> Semester', NULL, NULL),
(8, '8<sup>th</sup> Semester', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `roll`, `class`, `branch`, `semester`, `mobile`, `email`, `password`, `created_at`, `updated_at`) VALUES
(2, 'Md Shafiqul Islam', '123456', 'B.tch', 'CSE', 'first', '6396568563', 'email@email.com', '$2y$10$JQZjTK1vjZBMqJpB2rR4AODz9w4IWT4F3WyTwKi94vuoCv5/rDFSu', '2022-08-08 01:23:00', '2022-08-08 01:23:00'),
(3, 'Paddy O’Furniture', '123450', 'B.tch', 'CSE', 'first', '6396568564', 'email@email.com', '$2y$10$bsLGl47yEl.diqMOPczQwu4rQ6JP2cV1HOc3oFVZUBSWg4a4Af3qy', '2022-08-08 01:23:00', '2022-08-08 01:23:00'),
(4, 'Olive Yew', '123451', 'B.tch', 'CSE', 'first', '6396568565', 'email@email.com', '$2y$10$92CHGnENNYvaC1fMeAsyl.rcXvtXF0V7wOXRlNtym/16P7/7I.SlK', '2022-08-08 01:23:00', '2022-08-08 01:23:00'),
(5, 'Aida Bugg', '123452', 'B.tch', 'CSE', 'first', '6396568566', 'email@email.com', '$2y$10$lf3nT/8q5hLd2WbDi4Kn4uzPIlDykeLknipFdSnCwBc8kUX5ihiUC', '2022-08-08 01:23:00', '2022-08-08 01:23:00'),
(6, 'Maureen Biologist', '123453', 'B.tch', 'CSE', 'first', '6396568567', 'email@email.com', '$2y$10$gsYe44ilJBQYGqmnul9g1uqfCMxXBLadMyJp1RCrWbT3Jg8YeVO9G', '2022-08-08 01:23:00', '2022-08-08 01:23:00'),
(7, 'Teri Dactyl', '123454', 'B.tch', 'CSE', 'first', '6396568568', 'email@email.com', '$2y$10$wm0sbFY6tsSQhO25uBYX0OXY6u4RAIsQwUF0X3MtysbwLs7EwXDEm', '2022-08-08 01:23:00', '2022-08-08 01:23:00'),
(8, 'Peg Legge', '123455', 'B.tch', 'CSE', 'first', '6396568569', 'email@email.com', '$2y$10$vB/RfbMZyB2ofKs/50H9x.eMswH23ON/tqR.z1APWxNeO.v/bYAIO', '2022-08-08 01:23:00', '2022-08-08 01:23:00'),
(9, 'Allie Grater', '123457', 'B.tch', 'CSE', 'first', '6396568570', 'email@email.com', '$2y$10$eUT/Ei4QnO3na6hBYNxWNOvpCOCBnn4qO92PKPjIS0ulR1FU3RZyS', '2022-08-08 01:23:00', '2022-08-08 01:23:00'),
(10, 'Liz Erd', '123458', 'B.tch', 'CSE', 'first', '6396568571', 'email@email.com', '$2y$10$hr6uh4MRRIyjCo456qkMI.jLNFUzttAWG2hUvPnWOQbI4om9.DRIq', '2022-08-08 01:23:00', '2022-08-08 01:23:00'),
(11, 'A. Mused', '123459', 'B.tch', 'CSE', 'first', '6396568572', 'email@email.com', '$2y$10$PGPGOnJOjc4abgqGWgo64uqpArkN06yKXXAIWOn.s1PwVS.2hOw2m', '2022-08-08 01:23:01', '2022-08-08 01:23:01'),
(12, 'Constance Noring', '123410', 'B.tch', 'CSE', 'first', '6396568573', 'email@email.com', '$2y$10$MKf07gyJdX3NCHun2XvyKO7nMaOYp3FjyB//hirzn53tc8JHTfL5q', '2022-08-08 01:23:01', '2022-08-08 01:23:01'),
(13, 'Lois Di Nominator', '123411', 'B.tch', 'CSE', 'first', '6396568574', 'email@email.com', '$2y$10$dBycdhTEyWRahDLAEjY72eXzD25/b08GrlNt.eCcBC.I6tE0aia3y', '2022-08-08 01:23:01', '2022-08-08 01:23:01'),
(14, 'Minnie Van Ryder', '123412', 'B.tch', 'CSE', 'first', '6396568575', 'email@email.com', '$2y$10$OZ5NxNEalf94PjJGfWoiFuynEPZ.ec1LhrzOxbm2TunJz4KMpkzwm', '2022-08-08 01:23:01', '2022-08-08 01:23:01'),
(15, 'Lynn O’Leeum', '123413', 'B.tch', 'CSE', 'first', '6396568576', 'email@email.com', '$2y$10$3yVRykVJUMdLICGIHNEtXeUJ//l4nId0GTCKNlQbuS7il.eJK.LTm', '2022-08-08 01:23:01', '2022-08-08 01:23:01'),
(16, 'P. Ann O’Recital', '123414', 'B.tch', 'CSE', 'first', '6396568577', 'email@email.com', '$2y$10$q0cQPv2vB.i3PkerD1tpN.8KpjjCMwA7IM4hfWjBemrih.ZQPRAD6', '2022-08-08 01:23:01', '2022-08-08 01:23:01'),
(17, 'Ray O’Sun', '123415', 'B.tch', 'CSE', 'first', '6396568578', 'email@email.com', '$2y$10$qDOi1WlD9ve8eqLGBrGUf.hPmt6R78X3JP7DQ5OKN2GGp5ZBCntn2', '2022-08-08 01:23:01', '2022-08-08 01:23:01'),
(18, 'Lee A. Sun', '123416', 'B.tch', 'CSE', 'first', '6396568579', 'email@email.com', '$2y$10$cJCCDk9ksd0k4EL4y0BUUe.lzasoL1hirTk/z4OOJHW09v2cEd3eG', '2022-08-08 01:23:01', '2022-08-08 01:23:01'),
(19, 'Ray Sin', '123417', 'B.tch', 'CSE', 'first', '6396568580', 'email@email.com', '$2y$10$99AslqsdPbb0dOouupFLJ.uGcOIaR1nsy9MCA.k0uxzhbfrQo5YbS', '2022-08-08 01:23:01', '2022-08-08 01:23:01'),
(20, 'Isabelle Ringing', '123418', 'B.tch', 'CSE', 'first', '6396568581', 'email@email.com', '$2y$10$6NfLycAf68Jxg8ibUG3eYONENyB7mTX20MUrJD4gdtvNzKfwOxr/i', '2022-08-08 01:23:01', '2022-08-08 01:23:01'),
(21, 'Audie Yose', '123419', 'B.tch', 'CSE', 'first', '6396568582', 'email@email.com', '$2y$10$vW3O6OoP9/FWECJ5ZMBFsuWOjVJ3HYkF./hZNx/VAZHBESnZe6oR.', '2022-08-08 01:23:01', '2022-08-08 01:23:01'),
(22, 'Akash', '161660', 'B.Tech', 'CSE', '5th', '8851133606', 'akashdics1@gmail.com', '$2y$10$s0JIqY7MZQ1Dt5okO2yJU.VPU062G/Tzq0vd8pSQEKVznSWC4RTba', '2022-08-27 03:19:56', '2022-08-27 03:19:56'),
(23, 'Sofik Test', '369852', 'B.Tech', 'CSE', '2<sup>nd</sup> Semester', '1254736987', 'test@gmail.com', '$2y$10$cxmTk67.MzhFBRSaRMnpxeylDgYjcvfgxnhCD.jSuTthh4g5qBjnq', '2022-09-13 00:10:21', '2022-09-13 00:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `students_batches`
--

CREATE TABLE `students_batches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `student_roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students_batches`
--

INSERT INTO `students_batches` (`id`, `student_roll`, `batch_id`, `created_at`, `updated_at`) VALUES
(47, '123456', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(48, '123450', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(49, '123451', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(50, '123452', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(51, '123453', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(52, '123454', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(53, '123455', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(54, '123457', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(55, '123458', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(56, '123459', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(57, '123410', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(58, '123411', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(59, '123412', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(60, '123413', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(61, '123414', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(62, '123415', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(63, '123416', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(64, '123417', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(65, '123418', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29'),
(66, '123419', 1, '2022-09-09 00:05:29', '2022-09-09 00:05:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_questions`
--
ALTER TABLE `add_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `add_questions_qtopic_id_foreign` (`qtopic_id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `attempt_quizzes`
--
ALTER TABLE `attempt_quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batches`
--
ALTER TABLE `batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_category_id_foreign` (`category_id`);

--
-- Indexes for table `course_batches`
--
ALTER TABLE `course_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `qcategories`
--
ALTER TABLE `qcategories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qcategories_course_id_foreign` (`course_id`);

--
-- Indexes for table `qtopics`
--
ALTER TABLE `qtopics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `qtopics_qcategory_id_foreign` (`qcategory_id`);

--
-- Indexes for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_roll_unique` (`roll`);

--
-- Indexes for table `students_batches`
--
ALTER TABLE `students_batches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `students_batches_batch_id_foreign` (`batch_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_questions`
--
ALTER TABLE `add_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attempt_quizzes`
--
ALTER TABLE `attempt_quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `batches`
--
ALTER TABLE `batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course_batches`
--
ALTER TABLE `course_batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
-- AUTO_INCREMENT for table `qcategories`
--
ALTER TABLE `qcategories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `qtopics`
--
ALTER TABLE `qtopics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quiz_answers`
--
ALTER TABLE `quiz_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `students_batches`
--
ALTER TABLE `students_batches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `add_questions`
--
ALTER TABLE `add_questions`
  ADD CONSTRAINT `add_questions_qtopic_id_foreign` FOREIGN KEY (`qtopic_id`) REFERENCES `qtopics` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `qcategories`
--
ALTER TABLE `qcategories`
  ADD CONSTRAINT `qcategories_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`);

--
-- Constraints for table `qtopics`
--
ALTER TABLE `qtopics`
  ADD CONSTRAINT `qtopics_qcategory_id_foreign` FOREIGN KEY (`qcategory_id`) REFERENCES `qcategories` (`id`);

--
-- Constraints for table `students_batches`
--
ALTER TABLE `students_batches`
  ADD CONSTRAINT `students_batches_batch_id_foreign` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
