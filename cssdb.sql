-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2023 at 09:32 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cssdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

DROP TABLE IF EXISTS `abouts`;
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `values` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `description`, `vision`, `message`, `values`, `image`, `created_at`, `updated_at`) VALUES
(1, 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"LOREM IPSUM\" في أي محرك بحث ستظهر العديد من المواقع الحديثة العهد في نتائج البحث. على مدى السنين ظهرت نسخ جديدة ومختلفة من نص لوريم إيبسوم، أحياناً عن طريق الصدفة، وأحياناً عن عمد كإدخال بعض العبارات الفكاهية إليها.', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"LOREM IPSUM\"', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"LOREM IPSUM\"', 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ عوضاً عن استخدام \"هنا يوجد محتوى نصي، هنا يوجد محتوى نصي\" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء. العديد من برامح النشر المكتبي وبرامح تحرير صفحات الويب تستخدم لوريم إيبسوم بشكل إفتراضي كنموذج عن النص، وإذا قمت بإدخال \"LOREM IPSUM\"', 'storage/abouts/goMtgDSVt3VVgAky2Lqz21gbp17fc7Xj1tdh28Id.jpg', '2023-04-04 10:05:13', '2023-04-04 10:16:02');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `role_id`, `name`, `email`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@admin.com', '$2y$10$9FDNeRr6D.qET66oha.WNO3tiIMdBFPRZI13JR39jow89vlnd/Ini', 'storage/admins/qJ3aMHGBifgfiZDes43Reocto5m1bxHZqN9SwosH.png', NULL, NULL, '2023-04-10 08:31:57'),
(2, 2, 'الدكتور : هاني مصطفي', 'teacher@123.com', '$2y$10$knMg52kKkv8pENSqisrDA.MPMk6pVRE8azdiqPXkrEFvKImHgMbZW', 'storage/admins/F62OKspoB2VdmcfD6jjgVuvfEdZabctSUmYFQVhr.png', NULL, '2023-03-15 07:32:04', '2023-04-10 08:33:19'),
(4, 2, 'الدكتور :  محمد علام', 'taecher2@123.com', '$2y$10$Kid9pWXyZiIHsrGOjSLYhu2sNMbrkHBx2u3glS.5rxjkRQJnrvgPW', 'storage/admins/DOi60EzKQGEoErscK8ufZdEeFCZRrdbiycZCyuzR.png', NULL, '2023-04-10 08:32:56', '2023-04-10 08:33:35'),
(5, 2, 'Aya Mohamed', 'aya@gmail.com', '$2y$10$2/LemMIt9yQhKMNs2j5LcuBkhPGWltZlieyhQyYu5pMGF5LnsYQpm', 'storage/admins/JVuMcK0qpMmfnmgBkOvJ3UENc3XbByRv5Wm4xpb8.jpg', NULL, '2023-12-06 20:10:57', '2023-12-06 20:10:57'),
(6, 2, 'gasimiwu', 'dilixawyl@mailinator.com', '$2y$10$b3ptD63j.d6g61PyoOGFaOFwHZdPzdP9io6hi6eWQlusR1OquL7tm', 'storage/admins/d0JQ7CND1iLYKmkrPZnBcfCLg4kaFRj5AAS56ENz.jpg', NULL, '2023-12-07 17:37:00', '2023-12-07 17:37:00');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'يوضع هنا عنوان المنتج بشكل مبسط', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل بعض مولّدات نصوص لوريم إيبسوم علىالإنترنت هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل بعض مولّدات نصوص لوريم إيبسوم علىالإنترنت هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم', 'storage/blogs/bgKCmYJqkRQUwN6xk5yBWxMwedF9aPJaLZMGh3HS.png', '2023-04-07 21:21:23', '2023-04-07 21:21:23'),
(2, 'يوضع هنا عنوان المنتج بشكل مبسط 222', 'هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل بعض مولّدات نصوص لوريم إيبسوم علىالإنترنت هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها بشكل ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم نص لوريم إيبسوم ما، عليك أن تتحقق أولاً أن ليس هناك أي كلمات أو عبارات محرجة أو غير لائقة مخبأة في هذا النص. بينما تعمل بعض مولّدات نصوص لوريم إيبسوم علىالإنترنت هنالك العديد من الأنواع المتوفرة لنصوص لوريم إيبسوم، ولكن الغالبية تم تعديلها ما عبر إدخال بعض النوادر أو الكلمات العشوائية إلى النص. إن كنت تريد أن تستخدم', 'storage/blogs/Ls429mgF8NUu0yA0ztdeHgVgh4QN1yjowjSmppOs.png', '2023-04-07 21:23:15', '2023-04-07 21:23:15'),
(3, 'tefixoqit', 'Sunt odio reprehende', 'storage/blogs/v9u0Ojp4eSppwpIxSoA5KO3FmcEBUZo5QzIY57AD.jpg', '2023-12-07 18:08:09', '2023-12-07 18:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

DROP TABLE IF EXISTS `colleges`;
CREATE TABLE IF NOT EXISTS `colleges` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'كلية الطب', 'storage/colleges/upGWtP3MJxDGG5ucrrpq9rSwHbQRvSlXJ43iMQci.png', '2023-03-15 09:08:25', '2023-03-15 09:08:25'),
(2, 'كلية الهندسة', 'storage/colleges/1nu6LeYCdD0iF8owM8mk8urXi6dfQ3HDaObW4218.jpg', '2023-03-15 09:09:14', '2023-03-15 09:09:14'),
(3, 'كلية العلوم', 'storage/colleges/7d42cys9MatDye2o7sxPXLVES0tdimqswmOBvCzs.jpg', '2023-03-15 09:10:33', '2023-03-15 09:10:33'),
(5, 'كلية الحاسبات والمعلومات', 'storage/colleges/bOgV9V4cAEIPW5YvbXIczvcqi8qBEFg9jmSSMnkx.webp', '2023-03-19 10:51:50', '2023-03-19 10:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `msg`, `created_at`, `updated_at`) VALUES
(1, 'F9OgMzoIMo', '999999999', 'wymtc@pwi5.com', 'zuEf2ogulG', '2023-04-04 12:02:22', '2023-05-10 04:48:09'),
(2, 'Wanda Owens', '81', 'febiburoju@mailinator.com', 'Cillum porro aliqua', '2023-12-07 17:32:16', '2023-12-07 17:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_college_id_foreign` (`college_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `image`, `college_id`, `created_at`, `updated_at`) VALUES
(1, 'IT', 'storage/courses/cAjY4ksmkHcowRtxmA0Qllo6dIJcf8YL51mg5SgH.jpg', 5, '2023-03-19 10:52:59', '2023-03-19 10:52:59'),
(3, 'JAVA  Programming', 'storage/courses/ko1oe1rvdIxxNFjdcfz52Sq1nLmGUDOYfTA3bB5q.jpg', 5, '2023-03-19 11:00:23', '2023-04-08 09:21:53'),
(4, 'قسم القلب والأوعية الدموية', 'storage/courses/YMP4O2Fl7iTOaULAXoGzkHKBPocK5BWXRyDMfJPU.jpg', 1, '2023-04-08 09:23:34', '2023-04-08 09:23:34'),
(5, 'قسم الأسنان', 'storage/courses/Rlvf5t5S3WucauwPqiYYFp46jfJe1Q0U1rweOndR.jpg', 1, '2023-04-08 09:24:17', '2023-04-08 09:24:17'),
(6, 'قسم الميكانيكا', 'storage/courses/4dlZBpEa2dybgFG7oRv7jJJG84baHcLj6AeTuE7v.jpg', 2, '2023-04-08 09:25:22', '2023-04-08 09:25:22'),
(7, 'هندسة معماري', 'storage/courses/EYHeu4tXyzBZBMjGqsQ9LLRXOviRum5NZU6V6AXm.jpg', 2, '2023-04-08 09:26:16', '2023-04-08 09:26:16'),
(8, 'علوم الفيزياء', 'storage/courses/ijnHdxhgP6KEuRLXXG67XkxE6pwmugb68R1vwNT3.webp', 3, '2023-04-08 09:28:20', '2023-04-08 09:28:20'),
(9, 'الكيمياء', 'storage/courses/cpode5PkMdIKVG0AoCfucQFe81p7zJ5Do6mopoQb.jpg', 3, '2023-04-08 09:29:12', '2023-04-08 09:29:12');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

DROP TABLE IF EXISTS `halls`;
CREATE TABLE IF NOT EXISTS `halls` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `halls_college_id_foreign` (`college_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `name`, `college_id`, `created_at`, `updated_at`) VALUES
(1, 'قاعه 1', 1, '2023-04-08 09:41:08', '2023-04-08 09:41:08'),
(2, 'قاعه 2', 1, '2023-04-08 09:41:23', '2023-04-08 09:41:23'),
(3, 'قاعه 3', 1, '2023-04-08 09:41:31', '2023-04-08 09:41:31'),
(4, 'قاعه 1', 5, '2023-04-08 09:41:43', '2023-04-08 09:41:43'),
(5, 'قاعه 2', 5, '2023-04-08 09:41:53', '2023-04-08 09:41:53'),
(6, 'قاعة 3', 5, '2023-04-08 09:42:03', '2023-04-08 09:42:03'),
(7, 'قاعة 1', 2, '2023-04-08 09:42:13', '2023-04-08 09:42:13'),
(8, 'قاعة 2', 2, '2023-04-08 09:42:25', '2023-04-08 09:42:25'),
(9, 'قاعة 3', 2, '2023-04-08 09:42:34', '2023-04-08 09:42:34'),
(10, 'قاعة 1', 3, '2023-04-08 09:42:49', '2023-04-08 09:42:49'),
(11, 'قاعه 2', 3, '2023-04-08 09:42:58', '2023-04-08 09:42:58'),
(12, 'قاعة 3', 3, '2023-04-08 09:43:15', '2023-04-08 09:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

DROP TABLE IF EXISTS `infos`;
CREATE TABLE IF NOT EXISTS `infos` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `phone`, `address`, `email`, `facebook`, `youtube`, `twitter`, `created_at`, `updated_at`) VALUES
(1, '0215456875', 'Computer Science Society', 'css@css.com', 'https://www.facebook.com/', 'https://youtube.com/', 'https://twitter.com/', '2023-05-10 06:16:17', '2023-12-06 17:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_11_092918_create_admins_table', 1),
(6, '2023_03_15_105219_create_colleges_table', 2),
(7, '2023_03_19_114801_create_courses_table', 3),
(8, '2023_04_04_091423_create_sliders_table', 4),
(9, '2023_04_04_111605_create_abouts_table', 5),
(10, '2023_04_04_131623_create_contacts_table', 6),
(11, '2023_04_06_103515_create_blogs_table', 7),
(12, '2023_04_08_113143_create_halls_table', 8),
(13, '2023_04_09_105758_create_schedules_table', 9),
(14, '2023_04_11_221801_create_tables_table', 10),
(15, '2023_05_10_080416_create_infos_table', 11),
(16, '2023_05_10_171306_create_semesters_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL),
(2, 'teacher', 'teacher', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

DROP TABLE IF EXISTS `schedules`;
CREATE TABLE IF NOT EXISTS `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `day` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_from` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_to` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `hall_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED DEFAULT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `day`, `time_from`, `time_to`, `college_id`, `course_id`, `hall_id`, `semester_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(10, 'الأحد', '10:00', '13:00', 1, 4, 1, 1, 2, '2023-05-11 02:54:42', '2023-05-11 02:54:42'),
(11, 'الإثنين', '06:20', '17:20', 1, 4, 2, 2, 2, '2023-05-12 08:17:53', '2023-05-12 08:17:53'),
(12, 'الأحد', '01:16', '03:16', 5, 3, 5, 1, 5, '2023-12-06 20:16:26', '2023-12-06 20:16:26'),
(13, 'الثلاثاء', '12:09', '13:09', 5, 1, 6, 1, 5, '2023-12-07 18:10:05', '2023-12-07 18:10:05');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

DROP TABLE IF EXISTS `semesters`;
CREATE TABLE IF NOT EXISTS `semesters` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'الفصل الدراسي  الاول', '2023-05-10 14:48:36', '2023-05-10 14:48:36'),
(2, 'الفصل الدراسي الثاني', '2023-05-10 14:48:47', '2023-05-10 14:48:47');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'CSS', 'Computer Science Society', 'storage/sliders/O0plKckpkiVMJzYBLjWqt9qVj4DUEbvk8DZvfF7B.jpg', '2023-04-04 07:36:37', '2023-12-06 17:14:46'),
(3, 'Enjoy Learning', 'You can learn any thing', 'storage/sliders/lCzNgSdLsgkALKLEUVajFz7sCJEiauqp24IHkASp.jpg', '2023-04-04 07:53:16', '2023-12-06 17:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `tables`
--

DROP TABLE IF EXISTS `tables`;
CREATE TABLE IF NOT EXISTS `tables` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `college_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED DEFAULT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `college_id`, `course_id`, `semester_id`, `teacher_id`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 1, 4, 1, 2, 4, '2023-05-12 09:05:54', '2023-05-12 09:05:54'),
(7, 5, 3, 1, 5, 5, '2023-12-06 21:54:20', '2023-12-06 21:54:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'eIBRzwgSKE', 'storage/users/ZKMGoM6MRK6YiUySQIa0hqTAwSP82enh0btoTe3o.jpg', 'pwsun@oatd.com', NULL, '$2y$10$7zfqqJPi3r6GgFeWA5TTMu0Qh68qiKm/OLYojSBVV.NO8x9UmHxr6', NULL, '2023-03-13 08:55:43', '2023-03-13 11:00:29'),
(3, 'test', 'storage/users/7m5kmg03rEq5jdkVKdMH2qx9FmNUp5cRMDwZUaGS.jpg', 'test@123.com', NULL, '$2y$10$mmA0TfE4BCgOy/bCLT35weXlCoDTYObpj4gTUBP8G/ZHyMteXvvYy', NULL, '2023-03-13 10:30:37', '2023-03-13 11:00:14'),
(4, 'Ahmed', 'storage/users/2Wij0D4xW4gWLAJSgxNQGMuhtONXrH7jBIdfxYXP.png', 'ahmed@123.com', NULL, '$2y$10$cQM3wJVoXIPgQn8BXkIBWu/cDY3kzyl92Ca1ImA4LVzmuBunhRyny', NULL, '2023-04-05 06:51:30', '2023-04-05 09:19:27'),
(5, 'Aya Mohamed', 'storage/users/ffTwxI8XY231BpPAYfP4FLWjfNloVpGXUMZj3d2N.jpg', 'aya@gmail.com', NULL, '$2y$10$qQwjJWhT5jnTkhMW/3..dOxZg4ezd4yOyRfg/BUarpKuFdwnTg8Fm', NULL, '2023-12-05 18:57:35', '2023-12-07 17:31:28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
