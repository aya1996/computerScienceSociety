-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 19, 2023 at 12:08 AM
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
(2, 2, 'الدكتور : احمد عبد اللطيف العنيزي', 'aa.alanazii@paaet.edu.kw', '$2y$10$knMg52kKkv8pENSqisrDA.MPMk6pVRE8azdiqPXkrEFvKImHgMbZW', 'storage/admins/F62OKspoB2VdmcfD6jjgVuvfEdZabctSUmYFQVhr.png', NULL, '2023-03-15 07:32:04', '2023-12-18 19:20:57'),
(4, 2, 'الدكتور :  عبد الرحمن عبدلله', 'aam.elkandary@paaet.edu.kw', '$2y$10$Kid9pWXyZiIHsrGOjSLYhu2sNMbrkHBx2u3glS.5rxjkRQJnrvgPW', 'storage/admins/DOi60EzKQGEoErscK8ufZdEeFCZRrdbiycZCyuzR.png', NULL, '2023-04-10 08:32:56', '2023-12-18 19:54:45'),
(5, 2, 'الدكتوري:هدي عبد الفتاح', 'ha.kartam@paaet.edu.kw', '$2y$10$2/LemMIt9yQhKMNs2j5LcuBkhPGWltZlieyhQyYu5pMGF5LnsYQpm', 'storage/admins/JVuMcK0qpMmfnmgBkOvJ3UENc3XbByRv5Wm4xpb8.jpg', NULL, '2023-12-06 20:10:57', '2023-12-18 19:23:38'),
(6, 2, 'الدكتور:محمد علي يوسف', 'ma.yossef@paaet.edu.kw', '$2y$10$b3ptD63j.d6g61PyoOGFaOFwHZdPzdP9io6hi6eWQlusR1OquL7tm', 'storage/admins/d0JQ7CND1iLYKmkrPZnBcfCLg4kaFRj5AAS56ENz.jpg', NULL, '2023-12-07 17:37:00', '2023-12-18 19:24:45');

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `courses_semester_id_foreign` (`semester_id`),
  KEY `courses_department_id_foreign` (`department_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `image`, `semester_id`, `department_id`, `created_at`, `updated_at`) VALUES
(1, 'تطبيقات الرسوم', 'storage/courses/3YRwNEXvERB2UWzLkLi45VfUrYRIR3S57b3eUYEu.jpg', 1, 1, '2023-12-18 18:49:14', '2023-12-18 18:49:14'),
(2, 'هياكل البيانات', 'storage/courses/WEiCWuPUA9RWPaSpQbIo960QBlzNAecCK4T5YAKg.jpg', 1, 1, '2023-12-18 18:49:50', '2023-12-18 18:49:50'),
(3, 'المعادلات التفاضلية', 'storage/courses/gQMf01MRWCYAGHLVsxQr7tjFEGhDOMcDzewbv2Iv.jpg', 1, 2, '2023-12-18 18:50:19', '2023-12-18 18:50:19'),
(4, 'البرمجة الخطية', 'storage/courses/GtW2mTqtD227Sxw4fhVJCJqjbkcQBHXzsDfEUejJ.jpg', 1, 2, '2023-12-18 19:11:17', '2023-12-18 19:11:17'),
(5, 'تصميم برامج تعليمية', 'storage/courses/1Ma7XzRUkBQbPps4BWHr79CVOa2jSaBjsgZw5Fm8.jpg', 1, 3, '2023-12-18 19:12:07', '2023-12-18 19:12:07'),
(6, 'الوسائط التعليمية المتعددة', 'storage/courses/ASDmFU8Uhe2I1k0IjsHVS9PutGD9dcJOjw6gjaJJ.jpg', 1, 3, '2023-12-18 19:13:36', '2023-12-18 19:13:36'),
(7, 'صيانة الحاسوب', 'storage/courses/ejLBSNmHALCnE8E1Uh9UxBdjr31q2pbDSMpF98zm.png', 2, 1, '2023-12-18 19:14:50', '2023-12-18 19:14:50'),
(8, 'مقدمة في التحليل العددي', 'storage/courses/cLPpuid1qWT9XK9L8RXyBbXjDtPUzBaV8xPBFjpj.png', 2, 2, '2023-12-18 19:16:05', '2023-12-18 19:16:05'),
(9, 'تصميم الدروس باستخدام الحاسوب', 'storage/courses/lI5WKAOUyDIWuK10OjKBevnAG58lCPAdaEvb7gUs.jpg', 2, 3, '2023-12-18 19:16:56', '2023-12-18 19:16:56');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'قسم الحاسوب', '2023-12-18 16:45:12', '2023-12-18 16:45:12'),
(2, 'قسم الرياضيات', '2023-12-18 16:47:39', '2023-12-18 16:47:39'),
(3, 'قسم تكنولوجيا التعليم', '2023-12-18 16:48:01', '2023-12-18 18:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `image`, `video`, `created_at`, `updated_at`) VALUES
(1, 'مؤتمر علوم الحاسوب', 'storage/events/8uv4ZyzYPioJtKmiuRosZA89HGYyDyWbrX17OBm2.png', 'https://www.youtube.com/watch?v=yci475Vwc10', '2023-12-16 18:16:17', '2023-12-16 18:16:17'),
(2, 'مؤتمر علوم الحاسوب', 'storage/events/6Wm0dMRizOPKCxu3mD4ihjFqBmWiPmfwCIE2tvII.png', 'yci475Vwc10', '2023-12-16 18:23:11', '2023-12-16 18:23:11');

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
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `halls_course_id_foreign` (`course_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`id`, `name`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'قاعة 1', 1, '2023-12-16 19:01:00', '2023-12-16 19:01:00'),
(2, 'قاعة 2', 3, '2023-12-16 19:11:56', '2023-12-16 19:11:56'),
(3, 'قاعة3', 7, '2023-12-18 20:15:56', '2023-12-18 20:15:56');

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
(1, '0215456875', 'Computer Science Society', 'css@paaet.edu.kw', 'https://instagram.com/csspaaetkw?utm_medium=copy_link', 'https://youtube.com/channel/UCzClrTdwJLGKshkCXdKwaxw', 'https://twitter.com/csspaaetkw?s=21', '2023-05-10 06:16:17', '2023-12-17 19:04:37');

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_03_11_092918_create_admins_table', 1),
(6, '2023_03_15_105219_create_colleges_table', 2),
(8, '2023_04_04_091423_create_sliders_table', 4),
(9, '2023_04_04_111605_create_abouts_table', 5),
(10, '2023_04_04_131623_create_contacts_table', 6),
(11, '2023_04_06_103515_create_blogs_table', 7),
(15, '2023_05_10_080416_create_infos_table', 11),
(16, '2023_05_10_171306_create_semesters_table', 12),
(19, '2023_03_15_105219_create_events_table', 14),
(20, '2023_04_08_113143_create_halls_table', 15),
(21, '2023_12_18_180415_department', 16),
(25, '2023_03_19_114801_create_courses_table', 19),
(26, '2023_04_11_221801_create_tables_table', 20),
(27, '2023_04_09_105758_create_schedules_table', 21);

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
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `hall_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `schedules_department_id_foreign` (`department_id`),
  KEY `schedules_semester_id_foreign` (`semester_id`),
  KEY `schedules_course_id_foreign` (`course_id`),
  KEY `schedules_hall_id_foreign` (`hall_id`),
  KEY `schedules_teacher_id_foreign` (`teacher_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `day`, `time_from`, `time_to`, `department_id`, `semester_id`, `course_id`, `hall_id`, `teacher_id`, `created_at`, `updated_at`) VALUES
(1, 'الثلاثاء', '02:03', '03:03', 1, 1, 4, 2, 5, '2023-12-18 22:03:53', '2023-12-18 22:03:53');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `department_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `semester_id` bigint(20) UNSIGNED NOT NULL,
  `teacher_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tables_department_id_foreign` (`department_id`),
  KEY `tables_course_id_foreign` (`course_id`),
  KEY `tables_semester_id_foreign` (`semester_id`),
  KEY `tables_teacher_id_foreign` (`teacher_id`),
  KEY `tables_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tables`
--

INSERT INTO `tables` (`id`, `department_id`, `course_id`, `semester_id`, `teacher_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 1, 4, 1, '2023-12-18 20:39:18', '2023-12-18 20:39:18'),
(2, 2, 9, 1, 5, 1, '2023-12-18 20:56:19', '2023-12-18 20:56:19'),
(3, 2, 4, 1, 2, 1, '2023-12-18 21:08:41', '2023-12-18 21:08:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `national_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `national_id`, `name`, `email`, `email_verified_at`, `password`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 245689, 'Aya Mohamed', 'aya@gmail.com', NULL, '$2y$10$G4RrDxVxrkYLwmXcREl.2.Zzkyks0jCfrb2JOE2wBS27W2Uu7FMzy', 'storage/users/eOxCxOLplNNhGOrRmBzCNnQDU8YrItLb9cNE3dl2.jpg', NULL, '2023-12-17 17:37:51', '2023-12-17 17:37:51');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
