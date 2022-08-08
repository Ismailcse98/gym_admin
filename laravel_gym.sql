-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Aug 06, 2022 at 10:24 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'JUMPING ON YOUR DAY.', 'The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable\r\n\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form.', 'about.png', '2022-08-05 13:41:13', '2022-08-05 08:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `acton_bottoms`
--

CREATE TABLE `acton_bottoms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acton_bottoms`
--

INSERT INTO `acton_bottoms` (`id`, `heading`, `description`, `icon`, `created_at`, `updated_at`) VALUES
(2, 'LOSE WEIGHT', 'Galley of type and scrambled it to make a type.', '20220805170253.png', '2022-08-05 11:02:53', '2022-08-05 11:02:53'),
(3, 'BUILD MUSCLE', 'Galley of type and scrambled it to make a type.', '20220805170324.png', '2022-08-05 11:03:24', '2022-08-05 11:03:24'),
(4, 'STAY FIT', 'Galley of type and scrambled it to make a type.', '20220805170350.png', '2022-08-05 11:03:50', '2022-08-05 11:03:50'),
(5, 'PROTEIN PLAN', 'Galley of type and scrambled it to make a type.', '20220805170413.png', '2022-08-05 11:04:13', '2022-08-05 11:04:13'),
(6, 'BODY IMPROVE', 'Galley of type and scrambled it to make a type.', '20220805170433.png', '2022-08-05 11:04:33', '2022-08-05 11:04:33'),
(7, 'PERSONAL TRAINER', 'Galley of type and scrambled it to make a type.', '20220805170449.png', '2022-08-05 11:04:49', '2022-08-05 11:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `acton_tops`
--

CREATE TABLE `acton_tops` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `acton_tops`
--

INSERT INTO `acton_tops` (`id`, `title`, `icon`, `image`, `created_at`, `updated_at`) VALUES
(2, 'STAY FIT', '202208170723.png', '20220805170723.jpg', '2022-08-05 11:07:23', '2022-08-05 11:07:23'),
(3, 'LOSE WEIGHT', '202208170750.png', '20220805170750.jpg', '2022-08-05 11:07:50', '2022-08-05 11:07:50'),
(4, 'BUILD MUSCLE', '202208170813.png', '20220805170813.jpg', '2022-08-05 11:08:13', '2022-08-05 11:08:13');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `heading`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Get in the groove', 'EXERCISE YOUR MIND AND BODY.', '20220805171852.jpg', '2022-08-05 11:18:52', '2022-08-05 11:18:52'),
(3, 'Commit to be fit.', 'LOVE YOURSELF ENOUGH TO WORK HARDER.', '20220805171921.jpg', '2022-08-05 11:19:21', '2022-08-05 11:19:21'),
(4, 'Turn fat into fit', 'WILLPOWER KNOWS NO OBSTACLES.', '20220805171955.jpg', '2022-08-05 11:19:55', '2022-08-05 11:19:55');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(11) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_id`, `user_id`, `title`, `description`, `image`, `tags`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 'Yoga positions that will help you be flexible', 'Majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable, has a more or less normal distribution of letters, as opposed to using\r\n\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text.\r\n\r\nAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated', '20220805172513.jpg', 'Muscle Cario Exercices Body Builder Yoga Pilates', '2022-08-05 11:25:13', '2022-08-05 11:25:13'),
(3, 3, 1, 'Yoga positions that will help you be flexible', 'Majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable, has a more or less normal distribution of letters, as opposed to using', '20220805172644.jpg', 'Muscle Cario Exercices Body Builder Yoga Pilates', '2022-08-05 11:26:44', '2022-08-05 11:26:44'),
(4, 4, 1, 'Improve the appearance of your body', 'Majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable, has a more or less normal distribution of letters, as opposed to using', '20220805172725.jpg', 'Muscle Cario Exercices Body Builder Yoga Pilates', '2022-08-05 11:27:25', '2022-08-05 11:27:25'),
(5, 5, 1, 'Exercise tips to make at home', 'Majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable, has a more or less normal distribution of letters, as opposed to using', '20220805172801.jpg', 'Muscle Cario Exercices Body Builder Yoga Pilates', '2022-08-05 11:28:01', '2022-08-05 11:28:01');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Muscle', '2022-08-05 11:22:11', '2022-08-05 11:22:11'),
(3, 'Cario Exercices', '2022-08-05 11:22:24', '2022-08-05 11:22:24'),
(4, 'Body Builder', '2022-08-05 11:22:39', '2022-08-05 11:22:39'),
(5, 'Yoga', '2022-08-05 11:22:50', '2022-08-05 11:22:50'),
(6, 'Pilates', '2022-08-05 11:23:03', '2022-08-05 11:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `class_name`, `created_at`, `updated_at`) VALUES
(2, '20220805173450.jpg', 'workout', '2022-08-05 11:34:50', '2022-08-05 11:34:50'),
(3, '20220805173507.jpg', 'workout', '2022-08-05 11:35:07', '2022-08-05 11:35:07'),
(4, '20220805173525.jpg', 'spinning', '2022-08-05 11:35:25', '2022-08-05 11:35:25'),
(5, '20220805173544.jpg', 'spinning', '2022-08-05 11:35:44', '2022-08-05 11:35:44'),
(6, '20220805173619.jpg', 'fitness', '2022-08-05 11:36:19', '2022-08-05 11:36:19'),
(7, '20220805173645.jpg', 'workout', '2022-08-05 11:36:45', '2022-08-05 11:36:45'),
(8, '20220805173659.jpg', 'spinning', '2022-08-05 11:36:59', '2022-08-05 11:36:59'),
(9, '20220805173712.jpg', 'fitness', '2022-08-05 11:37:12', '2022-08-05 11:37:12');

-- --------------------------------------------------------

--
-- Table structure for table `generals`
--

CREATE TABLE `generals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generals`
--

INSERT INTO `generals` (`id`, `email`, `phone`, `location`, `description`, `copyright`, `logo`, `facebook`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '01876598215', 'Dhanmondi, Dhaka', 'Established fact that a reader will be distracted by the readable content.\r\n\r\nVarious versions have evolved over the years, sometimes by accident, sometimes on purpose.', '2022 ActionGym, Gym and Fitness HTML Template', 'logo.png', 'https://facebook.com', 'https://www.twitter.com', 'https://www.instagram.com', '2022-08-03 16:41:09', '2022-08-03 10:52:38');

-- --------------------------------------------------------

--
-- Table structure for table `get_touches`
--

CREATE TABLE `get_touches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `get_touches`
--

INSERT INTO `get_touches` (`id`, `title`, `icon`, `created_at`, `updated_at`) VALUES
(2, 'Visit Us', '2022080517017.png', '2022-08-05 11:53:17', '2022-08-05 11:53:17'),
(3, 'Email Us', '2022080517051.png', '2022-08-05 11:53:51', '2022-08-05 11:53:51'),
(4, 'Call Us', '2022080517009.png', '2022-08-05 11:54:09', '2022-08-05 11:54:09'),
(5, 'Online Support', '2022080517027.png', '2022-08-05 11:54:27', '2022-08-05 11:54:27');

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `short_title`, `long_title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'FREE MEMBERSHIP', 'Join now and get 15 days free access!', 'Alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use.', '2022-08-05 14:13:13', '2022-08-05 09:36:35');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_03_055625_create_generals_table', 1),
(6, '2022_08_03_060700_create_banners_table', 1),
(7, '2022_08_03_061056_create_acton_tops_table', 1),
(8, '2022_08_03_061347_create_acton_bottoms_table', 1),
(9, '2022_08_03_061930_create_trains_infos_table', 1),
(10, '2022_08_03_062533_create_pushes_table', 1),
(11, '2022_08_03_062935_create_galleries_table', 1),
(12, '2022_08_03_063206_create_opinions_table', 1),
(13, '2022_08_03_063453_create_memberships_table', 1),
(14, '2022_08_03_063908_create_categories_table', 1),
(15, '2022_08_03_070203_create_blogs_table', 1),
(16, '2022_08_03_075126_create_abouts_table', 1),
(17, '2022_08_03_075443_create_packages_table', 1),
(18, '2022_08_03_075833_create_contacts_table', 1),
(19, '2022_08_03_105916_create_get_touches_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `opinions`
--

CREATE TABLE `opinions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opinions`
--

INSERT INTO `opinions` (`id`, `name`, `heading`, `comments`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Julie Belle', 'Wonderful Gym highly recommended!', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', '20220805175840.jpg', '2022-08-05 11:58:40', '2022-08-05 11:58:40'),
(3, 'Carlos Lopez', 'Wonderful Gym highly recommended!', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident', '20220805175936.jpg', '2022-08-05 11:59:36', '2022-08-05 11:59:36'),
(4, 'Robert Luke', 'Wonderful Gym highly recommended!', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.', '20220805180021.jpg', '2022-08-05 12:00:21', '2022-08-05 12:00:21');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `d_4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `price`, `d_1`, `d_2`, `d_3`, `d_4`, `created_at`, `updated_at`) VALUES
(1, 'Basic', '39', 'Cross Generation', 'Stott Pilates', 'Spinning', 'Zumba', '2022-08-05 03:49:07', '2022-08-05 03:49:07'),
(2, 'Standard', '49', 'Cross Generation', 'Stott Pilates', 'Spinning', 'Zumba', '2022-08-05 12:01:30', '2022-08-05 12:01:30'),
(3, 'Premium', '69', 'Cross Generation', 'Stott Pilates', 'Spinning', 'Zumba', '2022-08-05 12:01:53', '2022-08-05 12:01:53');

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
-- Table structure for table `pushes`
--

CREATE TABLE `pushes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_top` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_bottom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pushes`
--

INSERT INTO `pushes` (`id`, `title_top`, `title_bottom`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'EXERCISING BODY AND MIND', 'PUSH YOURSELF', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable.', 'push-bg.jpg', '2022-08-05 16:17:04', '2022-08-05 10:45:55');

-- --------------------------------------------------------

--
-- Table structure for table `trains_infos`
--

CREATE TABLE `trains_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trains_infos`
--

INSERT INTO `trains_infos` (`id`, `name`, `designation`, `description`, `image`, `facebook`, `twitter`, `instagram`, `created_at`, `updated_at`) VALUES
(2, 'MARTHA SMITH', 'Cardio Trainer', 'Majority have suffered alteration in some form, as opposed to using', '20220805182623.jpg', 'https://facebook.com', 'www.twitter.com', 'www.instagram.com', '2022-08-05 12:26:23', '2022-08-05 12:26:23'),
(3, 'ROBERT LUKE', 'Dance Trainer', 'Majority have suffered alteration in some form, as opposed to using', '20220805182727.jpg', 'www.facebook.com', 'www.twitter.com', 'www.instagram.com', '2022-08-05 12:27:27', '2022-08-05 12:27:27'),
(4, 'JADE PERKINS', 'Yoga Trainer', 'Majority have suffered alteration in some form, as opposed to using', '20220805182827.jpg', 'www.facebook.com', 'www.twitter.com', 'www.instagram.com', '2022-08-05 12:28:27', '2022-08-05 12:28:27'),
(5, 'LAURA THOMAS', 'Cardio Trainer', 'Majority have suffered alteration in some form, as opposed to using', '20220805182924.jpg', 'www.facebook.com', 'www.twitter.com', 'www.instagram.com', '2022-08-05 12:29:24', '2022-08-05 12:29:24'),
(6, 'RICHARD OLSEN', 'Dance Trainer', 'Majority have suffered alteration in some form, as opposed to using', '20220805183020.jpg', 'www.facebook.com', 'www.twitter.com', 'www.instagram.com', '2022-08-05 12:30:20', '2022-08-05 12:30:20'),
(7, 'KAREN GOMEZ', 'Yoga Trainer', 'Majority have suffered alteration in some form, as opposed to using', '20220805183109.jpg', 'www.facebook.com', 'www.twitter.com', 'www.instagram.com', '2022-08-05 12:31:09', '2022-08-05 12:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(1, 'Md. Ismail', 'ismail@gmail.com', NULL, '$2y$10$75iVIern8fwIrab8XUwIEOmkgM3gurSA/hgpZYsxisSkRklemUZd2', NULL, '2022-08-04 05:11:42', '2022-08-04 05:11:42');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acton_bottoms`
--
ALTER TABLE `acton_bottoms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `acton_tops`
--
ALTER TABLE `acton_tops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_touches`
--
ALTER TABLE `get_touches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opinions`
--
ALTER TABLE `opinions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
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
-- Indexes for table `pushes`
--
ALTER TABLE `pushes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trains_infos`
--
ALTER TABLE `trains_infos`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `acton_bottoms`
--
ALTER TABLE `acton_bottoms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `acton_tops`
--
ALTER TABLE `acton_tops`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `generals`
--
ALTER TABLE `generals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `get_touches`
--
ALTER TABLE `get_touches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `opinions`
--
ALTER TABLE `opinions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pushes`
--
ALTER TABLE `pushes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trains_infos`
--
ALTER TABLE `trains_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
