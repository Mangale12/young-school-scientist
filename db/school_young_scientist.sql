-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2024 at 07:05 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_young_scientist`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE `assignments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `assignments`
--

INSERT INTO `assignments` (`id`, `title`, `description`, `file`, `created_at`, `updated_at`) VALUES
(7, 'assignment test', '<p>assignment desc test1</p>', 'assignments/taiWRMSh84dIPtFTENRdtUHS9zldgNoRirnzJrPP.pdf', '2024-10-03 22:55:44', '2024-10-03 22:55:44'),
(8, 'grade 3 assignment', '<p>des</p>', 'assignments/DPLLcB5BE4WBxl53moakDJtHnPeV7SMsfTLfO1Wx.pdf', '2024-10-04 05:27:04', '2024-10-04 05:27:04');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('admin@admin.com|127.0.0.1', 'i:1;', 1727949837),
('admin@admin.com|127.0.0.1:timer', 'i:1727949837;', 1727949837),
('admin@email.com|127.0.0.1', 'i:1;', 1728279167),
('admin@email.com|127.0.0.1:timer', 'i:1728279167;', 1728279167);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `video_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `class`, `description`, `created_at`, `updated_at`, `video_url`) VALUES
(6, 'Class 4 – Coding, AI & Robotics Course', '4', '<p>Learn the basics of Coding, Artificial Intelligence, and Robotics in a wholesome manner.</p>', '2024-10-16 03:46:58', '2024-10-24 23:50:28', 'https://www.youtube.com/watch?v=RByaJcBJX1Q'),
(9, 'rtes', '6', '<p>sadf</p>', '2024-10-24 04:51:17', '2024-10-24 23:50:17', 'https://www.youtube.com/watch?v=Uhm7gcLSmHM'),
(10, 'for 10 class', '10', '<p>destails</p>', '2024-10-25 06:41:38', '2024-10-25 06:41:38', 'https://www.youtube.com/watch?v=o5Z-xEPnwCc');

-- --------------------------------------------------------

--
-- Table structure for table `course_sessions`
--

CREATE TABLE `course_sessions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `session` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_sessions`
--

INSERT INTO `course_sessions` (`id`, `course_id`, `session`, `description`, `created_at`, `updated_at`) VALUES
(35, 9, 'Session 2: Fun with paint', '<p>sdf</p>', '2024-10-24 23:50:17', '2024-10-24 23:50:17'),
(36, 9, 'asdf', '<p>ads</p>', '2024-10-24 23:50:17', '2024-10-24 23:50:17'),
(37, 9, 'ta', '<p>ta</p>', '2024-10-24 23:50:17', '2024-10-24 23:50:17'),
(38, 6, 'Session 1: Introduction to PictoBlox', '<h2>What is a Program?</h2>\r\n<blockquote>\r\n<p>A&nbsp;<strong>program</strong>&nbsp;is a set of instructions that a computer follows to complete a task. The computer receives the information, handles it, utilizes it, and then gives an output based on it by following a&nbsp;<strong>program</strong>.</p>\r\n</blockquote>\r\n<p><img class=\"aligncenter wp-image-467 size-medium\" src=\"https://ai.thestempedia.com/wp-content/uploads/2022/02/computer-asking-1-300x206.png\" sizes=\"(max-width: 300px) 100vw, 300px\" srcset=\"https://ai.thestempedia.com/wp-content/uploads/2022/02/computer-asking-1-300x206.png 300w, https://ai.thestempedia.com/wp-content/uploads/2022/02/computer-asking-1-1024x703.png 1024w, https://ai.thestempedia.com/wp-content/uploads/2022/02/computer-asking-1-768x527.png 768w, https://ai.thestempedia.com/wp-content/uploads/2022/02/computer-asking-1-624x428.png 624w, https://ai.thestempedia.com/wp-content/uploads/2022/02/computer-asking-1.png 1323w\" alt=\"\" width=\"300\" height=\"206\" /></p>\r\n<p><img class=\"aligncenter wp-image-468 size-medium\" src=\"https://ai.thestempedia.com/wp-content/uploads/2022/02/programming-1-300x258.png\" sizes=\"(max-width: 300px) 100vw, 300px\" srcset=\"https://ai.thestempedia.com/wp-content/uploads/2022/02/programming-1-300x258.png 300w, https://ai.thestempedia.com/wp-content/uploads/2022/02/programming-1-1024x880.png 1024w, https://ai.thestempedia.com/wp-content/uploads/2022/02/programming-1-768x660.png 768w, https://ai.thestempedia.com/wp-content/uploads/2022/02/programming-1-624x536.png 624w, https://ai.thestempedia.com/wp-content/uploads/2022/02/programming-1.png 1303w\" alt=\"\" width=\"300\" height=\"258\" /></p>\r\n<p>We are surrounded by computers and computer programs; smartphones, cars, and washing machines are all computers, and they follow different programs to carry out different tasks. E.g. when you search for a contact on your phone, a program already fed into the phone finds the correct number for you. Washing machines also have different programs that decide which task the machine will do. E.g. programs control how hot the water will be, or for how long the machine will wash the clothes.</p>\r\n<p>According to&nbsp;<em>Linda Liukas</em>, a Finnish computer programmer, children&rsquo;s writer, and programming instructor,&nbsp;<strong><em>programming consists</em></strong>&nbsp;of three parts:</p>\r\n<ul>\r\n<li>Planning the program</li>\r\n<li>Writing the program in a programming language into a code</li>\r\n<li>Testing and debugging the program<img class=\"aligncenter wp-image-469 size-medium\" src=\"https://ai.thestempedia.com/wp-content/uploads/2022/02/flow-chart_v1-300x213.png\" sizes=\"(max-width: 300px) 100vw, 300px\" srcset=\"https://ai.thestempedia.com/wp-content/uploads/2022/02/flow-chart_v1-300x213.png 300w, https://ai.thestempedia.com/wp-content/uploads/2022/02/flow-chart_v1-1024x727.png 1024w, https://ai.thestempedia.com/wp-content/uploads/2022/02/flow-chart_v1-768x546.png 768w, https://ai.thestempedia.com/wp-content/uploads/2022/02/flow-chart_v1-1536x1091.png 1536w, https://ai.thestempedia.com/wp-content/uploads/2022/02/flow-chart_v1.png 2048w, https://ai.thestempedia.com/wp-content/uploads/2022/02/flow-chart_v1-624x443.png 624w\" alt=\"\" width=\"300\" height=\"213\" loading=\"lazy\" /></li>\r\n</ul>\r\n<p>The second part is what everybody generally considers programming. Only this part requires coding skills; the first and third parts require additional skills like problem-solving, and decomposition (the ability to break down bigger problems into smaller, manageable tasks).</p>\r\n<h2>Programming Analogy</h2>\r\n<h3>Getting Dressed</h3>\r\n<p>On days that you have to go to school, your mother and father are behind you in the morning, asking you to wake up, while you keep saying &lsquo;5 more minutes!&rsquo; until you realize it is late and you don&rsquo;t have time to take bath. So, you decide to just wash your face, brush your teeth, and get dressed. &nbsp;To get dressed, you follow a particular sequence of steps, like the one given below:</p>\r\n<p><iframe src=\"https://www.youtube.com/embed/9bs90G6XqRc?si=YmPjj9HAxXVUQUET\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></p>', '2024-10-24 23:50:28', '2024-10-24 23:50:28'),
(39, 6, 'Session 2: Creating Animation', '<p>Animations are created, when a set of images changes quickly and repetitively creating a sense of motion.</p>\r\n<p><a href=\"https://ai.thestempedia.com/wp-content/uploads/2022/02/Tobi-Walking.gif\"><img class=\"aligncenter size-full wp-image-25262\" src=\"https://ai.thestempedia.com/wp-content/uploads/2022/02/Tobi-Walking.gif\" alt=\"Tobi Walking\" width=\"414\" height=\"335\" /></a></p>\r\n<p>In this lesson, you will learn about the backdrop and costumes in PictoBlox, which helps you to create amazing animations.</p>\r\n<h2><strong>What is a Backdrop?</strong></h2>\r\n<p>As of now, the Stage looks quite plain and simple, doesn&rsquo;t it? What can we possibly do to make it more lively? Come in:&nbsp;<strong>backdrops</strong>!</p>\r\n<blockquote>\r\n<p>A&nbsp;<strong>backdrop</strong>&nbsp;is one of the many frames, or backgrounds, that a Stage can have.&nbsp; The Stage can change its look to any of its backdrops.</p>\r\n</blockquote>\r\n<p><a href=\"https://ai.thestempedia.com/wp-content/uploads/2022/02/Backdrop-1.png\"><img class=\"aligncenter size-full wp-image-22461\" src=\"https://ai.thestempedia.com/wp-content/uploads/2022/02/Backdrop-1.png\" alt=\"Backdrop\" width=\"800\" height=\"578\" /></a></p>\r\n<h3>Choosing a Backdrop</h3>\r\n<p>You can choose a backdrop from</p>\r\n<ul>\r\n<li>the backdrop library</li>\r\n<li>uploading a file from the computer</li>\r\n<li>creating one using the paint editor<a href=\"https://ai.thestempedia.com/wp-content/uploads/2022/02/Choose-Backdrop-1.png\"><img class=\"aligncenter size-full wp-image-22735\" src=\"https://ai.thestempedia.com/wp-content/uploads/2022/02/Choose-Backdrop-1.png\" alt=\"Choose Backdrop\" width=\"289\" height=\"260\" loading=\"lazy\" /></a></li>\r\n</ul>\r\n<div id=\"learndash-course-header\" class=\"bb-lms-header\">\r\n<div class=\"lms-header-title\">\r\n<div class=\"ld-tabs ld-tab-count-1\">\r\n<div class=\"ld-tabs-content\">\r\n<div id=\"ld-tab-content-670\" class=\"ld-tab-content ld-visible\">\r\n<h2><strong>What are Costumes?</strong></h2>\r\n<blockquote>\r\n<p>A&nbsp;<strong>costume</strong>&nbsp;is one out of possibly many &ldquo;frames&rdquo; or alternate appearances of a sprite. Sprites can change their look to any of their costumes. Every sprite has at least one costume.</p>\r\n</blockquote>\r\n<p><strong>One of the most common uses of costumes is to make an animation for a game.</strong>&nbsp;You can use a number of costumes to create one single animation.</p>\r\n<p>The costumes avai</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '2024-10-24 23:50:28', '2024-10-24 23:50:28'),
(40, 6, 'Session 3: Playing Sounds', '<p>Hmm&hellip; something is missing from our animations. Can you guess what?</p>\r\n<p>Sound! With sound, animations become more attractive. Let&rsquo;s see how you can add sound to your animations.</p>\r\n<h2><strong>What is Sound?</strong></h2>\r\n<blockquote>\r\n<p>A&nbsp;<strong>sound</strong>&nbsp;is something that you hear when someone speaks, sings, or plays a musical instruments. It can be played, available by importing, built-in sound library, or recording.</p>\r\n</blockquote>\r\n<p>In PictoBlox, you can play different sounds by using blocks from the&nbsp;<em><strong>Sound&nbsp;</strong></em>palette which can control a sound&rsquo;s volume, tempo, and more.</p>\r\n<p><img class=\"aligncenter wp-image-48455 size-full\" src=\"https://ai.thestempedia.com/wp-content/uploads/2022/03/sound-1.png\" sizes=\"(max-width: 387px) 100vw, 387px\" srcset=\"https://ai.thestempedia.com/wp-content/uploads/2022/03/sound-1.png 387w, https://ai.thestempedia.com/wp-content/uploads/2022/03/sound-1-175x300.png 175w\" alt=\"\" width=\"387\" height=\"663\" /></p>\r\n<p>Let&rsquo;s see how to use them in an animation!</p>\r\n<h2>Activity:&nbsp;<strong>Playing Sounds</strong></h2>\r\n<p>In this activity, we&rsquo;ll make an animation of a barking dog in which whenever we press the spacebar, the dog will bark and go to a random location on the stage.<iframe src=\"https://www.youtube.com/embed/TzPNJch6ovo?si=AhDx-8F7KqBkWPY3\" width=\"560\" height=\"314\" allowfullscreen=\"allowfullscreen\"></iframe></p>', '2024-10-24 23:50:28', '2024-10-24 23:50:28'),
(41, 10, 'Session 1: Introduction to PictoBlox', '<p>test</p>', '2024-10-25 06:41:38', '2024-10-25 06:41:38');

-- --------------------------------------------------------

--
-- Table structure for table `course_student`
--

CREATE TABLE `course_student` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_student`
--

INSERT INTO `course_student` (`id`, `course_id`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 6, 35, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_teacher`
--

CREATE TABLE `course_teacher` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_teacher`
--

INSERT INTO `course_teacher` (`id`, `course_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 6, 4, NULL, NULL),
(5, 9, 34, NULL, NULL),
(6, 6, 18, NULL, NULL),
(7, 10, 4, NULL, NULL),
(8, 9, 4, NULL, NULL),
(9, 6, 19, NULL, NULL),
(10, 6, 22, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_teacher_resource`
--

CREATE TABLE `course_teacher_resource` (
  `id` bigint(20) NOT NULL,
  `course_id` bigint(20) UNSIGNED DEFAULT NULL,
  `teacher_resource_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_teacher_resource`
--

INSERT INTO `course_teacher_resource` (`id`, `course_id`, `teacher_resource_id`, `created_at`, `updated_at`) VALUES
(1, 6, 1, '2024-10-28 04:43:18', '2024-10-28 04:43:18'),
(2, 6, 3, '2024-10-28 04:57:33', '2024-10-28 04:57:33');

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

CREATE TABLE `course_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_user`
--

INSERT INTO `course_user` (`id`, `course_id`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 9, 38, NULL, NULL),
(7, 6, 36, NULL, NULL),
(8, 6, 35, NULL, NULL),
(9, 10, 42, NULL, NULL);

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
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Groups one', 'groups desc', '2024-10-04 00:17:41', '2024-10-04 00:17:41'),
(2, 'Group Two', 'this is group two  test', '2024-10-04 00:18:56', '2024-10-04 00:19:08');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_10_03_075655_create_schools_table', 2),
(5, '2024_10_03_110647_create_assignments_table', 3),
(6, '2024_10_04_055343_create_groups_table', 4),
(7, '2024_10_04_061853_create_teacher_resources_table', 5),
(8, '2024_10_07_064819_create_courses_table', 6),
(9, '2024_10_07_064820_create_course_sessions_table', 6),
(10, '2024_10_09_082339_add_video_url_to_courses_table', 7),
(11, '2024_10_25_044908_create_course_user_table', 8),
(12, '2024_10_25_055529_create_course_student_table', 9),
(13, '2024_10_25_065729_create_course_teacher_table', 10),
(14, '2024_10_28_022533_course_teacher_resources', 11);

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
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Softwarica College  of IT & E-commerce', 'Softwarica College is working in collaboration with Coventry University, UK, offering a range of undergraduate and postgraduate programmes including BSc (Hons) Computing, BSc (Hons) Ethical Hacking and Cyber Security, BSc (Hons) Computer Science with AI, and MSc Data Science and Computational Intelligence.', '2024-10-03 02:24:36', '2024-10-03 02:24:36'),
(3, 'School one', '<p>school details</p>', '2024-10-03 23:18:22', '2024-10-03 23:18:22'),
(4, 'school name', '<p>detail</p>', '2024-10-04 05:24:17', '2024-10-04 05:24:17');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('CtM4e2qA3ZD0QTrAnSAHS5ER92s77HUGjE8ftBnl', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU2VkTGx5aVA1TlZydlh0ZmNnY0tMd2ZXUmFtbWhvUFJEcm9zRkJIWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjQ6Imh0dHA6Ly9sb2NhbGhvc3Qvc2Nob29sLXlvdW5nLXNjaWVudGlzdC9wdWJsaWMvc3R1ZGVudC9jb3Vyc2VzLzYiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1730093766),
('lwjC6cCS7YiUsR0NfkJEH9VmnuJVji4bKUoFsmRA', 5, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZlpWMERXYm9oZ0l4ZzZYRk9jUFhWOFdzcGlmMkVjVDdXSllaMFhCRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjQ6Imh0dHA6Ly9sb2NhbGhvc3Qvc2Nob29sLXlvdW5nLXNjaWVudGlzdC9wdWJsaWMvdGVhY2hlcl9yZXNvdXJjZXMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo1O30=', 1730095326);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_resources`
--

CREATE TABLE `teacher_resources` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `file` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_resources`
--

INSERT INTO `teacher_resources` (`id`, `title`, `description`, `file`, `created_at`, `updated_at`) VALUES
(1, 'Teacher Resources', 'this is teacher resources', 'teacher_resources/66vKCpIQ3ZNPkVW6pHOaRYlVK4GUURyAirNQb5oc.pdf', '2024-10-04 00:38:24', '2024-10-04 00:38:24'),
(3, 'sdfsafdsa', 'fdfafa', 'teacher_resources/IzgrPaKFAQXkUlEUfSGiBk70VTE8ZgDgI9rjfldQ.json', '2024-10-27 20:13:55', '2024-10-27 20:13:55'),
(4, 'sdfafsa', 'fdsafdasf', 'uploads/teacher_resources/1730081286_8thsem_report_PDF.docx', '2024-10-27 20:23:06', '2024-10-27 20:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_teacher_resource`
--

CREATE TABLE `teacher_teacher_resource` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `teacher_resource_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_teacher_resource`
--

INSERT INTO `teacher_teacher_resource` (`id`, `user_id`, `teacher_resource_id`, `created_at`, `updated_at`) VALUES
(1, 4, 1, NULL, NULL),
(2, 4, 3, NULL, NULL),
(3, 18, 1, NULL, NULL),
(4, 18, 3, NULL, NULL),
(5, 19, 1, NULL, NULL),
(6, 19, 3, NULL, NULL),
(7, 22, 1, NULL, NULL),
(8, 22, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` enum('admin','student','teacher') NOT NULL DEFAULT 'student',
  `password` varchar(255) NOT NULL,
  `student_id` varchar(255) DEFAULT NULL,
  `school_name` varchar(255) DEFAULT NULL,
  `grade` varchar(255) DEFAULT NULL,
  `section` varchar(255) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `parents_phone_number` varchar(255) DEFAULT NULL,
  `parents_email` varchar(255) DEFAULT NULL,
  `teacher_id` varchar(255) DEFAULT NULL,
  `subject_expert` varchar(255) DEFAULT NULL,
  `phone_number` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `password`, `student_id`, `school_name`, `grade`, `section`, `date_of_birth`, `address`, `parents_phone_number`, `parents_email`, `teacher_id`, `subject_expert`, `phone_number`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Hari Tahapa', 'hari@gmail.com', NULL, 'student', '$2y$12$WRKWxaPgrjbuRoM.U/ZvAuSFwRhJ1PXt.qrBx2t8ITAmw3gpGH0ri', '123', 'tribhuwan', '10', 'C', '2024-10-16', 'new baneshwor', '9823846254', 'bikashbist1414@gmail.com', NULL, NULL, NULL, NULL, '2024-10-02 00:45:08', '2024-10-02 00:45:08'),
(2, 'student', 'student@gmail.com', NULL, 'student', '$2y$12$1qa/cKbd3rO.3v0Q5ZV42.7GKQFJgdK8ZyI8afH.FT4sYeI8Pt1hO', '12345', 'kmc', '9', 'A', '2024-10-31', 'new baneshwor', '9823846254', 'staff@gmail.com', NULL, NULL, NULL, NULL, '2024-10-02 00:49:26', '2024-10-02 00:49:26'),
(4, 'teacher', 'teacher@gmail.com', NULL, 'teacher', '$2y$12$Tx5f05Be4sICWnARjG/O/.1XFzijdkM.a7cWzkJCzbSge1OuDs/AW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'staff@gmail.com', '1234', 'math', '9823846254', NULL, '2024-10-02 01:36:48', '2024-10-02 01:36:48'),
(5, 'admin', 'admin@gmail.com', NULL, 'admin', '$2y$12$wH4qO0tivsk3yRqaVSQB/ejqHWV20dCUn.Hr32Eq.X1NZL4p/nyRC', NULL, NULL, NULL, NULL, NULL, 'new baneshwor', '9823846254', 'staff@gmail.com', '488', 'Science', '9823846254', NULL, '2024-10-02 21:17:42', '2024-10-02 21:17:42'),
(6, 'Admin cgtnu', 'admin0@example.com', NULL, 'admin', '$2y$12$ziFK1Pu5t6y72KbTrbxW2es3ZRFBrscMlMmp09p1nwG3kXNBKjfiy', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '980000000', NULL, NULL, NULL),
(7, 'Admin 6PfZd', 'admin1@example.com', NULL, 'admin', '$2y$12$k5C4p8anHo3v1yXi6zsJl.EvmySGhxofEp38..AkDIYWtIGCXhxd6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '980000001', NULL, NULL, NULL),
(8, 'Student fjnsC', 'student0@example.com', NULL, 'student', '$2y$12$jPPjEjFio/3znsNqSV6sZeQ/MRxleJDj/7DBwUlvncFJzuELQfORu', 'STUDbeXI', 'School vFuGU', 'Grade 2', 'C', '2011-10-04', 'Address JoNOO', '9841234579', 'parent0@example.com', NULL, NULL, '980123450', NULL, NULL, NULL),
(9, 'Student acezY', 'student1@example.com', NULL, 'student', '$2y$12$ubW0iGxJNYo5BDY6XeLHJOWDdbTBbV2Fm6JfJD0ywyR041CKdrHKy', 'STUYVQ26', 'School NVXTU', 'Grade 6', 'A', '2009-10-04', 'Address n24tg', '9841234524', 'parent1@example.com', NULL, NULL, '980123451', NULL, NULL, NULL),
(10, 'Student nqVmh', 'student2@example.com', NULL, 'student', '$2y$12$OtKgQMRwRUoJ98xsfTTI/OUZMiZqfl/H.t0E5wbWQw7vI1/sDlM/O', 'STUElBE9', 'School ZcDTP', 'Grade 3', 'A', '2004-10-04', 'Address oo2zp', '9841234579', 'parent2@example.com', NULL, NULL, '980123452', NULL, NULL, NULL),
(11, 'Student 9BVs5', 'student3@example.com', NULL, 'student', '$2y$12$2q9Cq7HJqrfOSMk4rcoC6uKfSrxvG5eat6kJFKYYOyHaWHXZ2nhAO', 'STUNGCax', 'School 6nzog', 'Grade 1', 'A', '2013-10-04', 'Address jgy5F', '9841234520', 'parent3@example.com', NULL, NULL, '980123453', NULL, NULL, NULL),
(12, 'Student XU8be', 'student4@example.com', NULL, 'student', '$2y$12$PpFui323vDk15chEp6oTO.Qm2Aqw0gkGqhYf8S.CqL1kXA8Qmwr/u', 'STUCCOZN', 'School CFlF6', 'Grade 2', 'D', '2007-10-04', 'Address LE2iW', '9841234565', 'parent4@example.com', NULL, NULL, '980123454', NULL, NULL, NULL),
(13, 'Student hc2IR', 'student5@example.com', NULL, 'student', '$2y$12$1PWa4qiK6/SIIrLPiLB6Ou7upEDs.Zpl0VmmmOFluIiS/.SA6BgnW', 'STU5sV2d', 'School 7Yzpb', 'Grade 7', 'A', '2013-10-04', 'Address HYmlq', '9841234529', 'parent5@example.com', NULL, NULL, '980123455', NULL, NULL, NULL),
(14, 'Student 3kvZF', 'student6@example.com', NULL, 'student', '$2y$12$rkDxggPxXutNhsS2IntqEu6mRx6FN99Mnvg6Ta8dCDvFqIybIWXSq', 'STU4x7Jl', 'School M94Vr', 'Grade 8', 'C', '2006-10-04', 'Address 9u6Xk', '9841234599', 'parent6@example.com', NULL, NULL, '980123456', NULL, NULL, NULL),
(15, 'Student SwsHF', 'student7@example.com', NULL, 'student', '$2y$12$jb6TAZv26z1qEhWgtYVFdekcJRQ4rHlfXCQaEK8HKzVBUUkDff2Ue', 'STUcsLxH', 'School eoi35', 'Grade 10', 'B', '2005-10-04', 'Address Fuo84', '9841234534', 'parent7@example.com', NULL, NULL, '980123457', NULL, NULL, NULL),
(16, 'Student shC4X', 'student8@example.com', NULL, 'student', '$2y$12$m8KzIZk/ucF1l/iwv4GPN.B/SbusoxRcTrLBUPq502VGZTzYUvebq', 'STUWlZS1', 'School Xr7qu', 'Grade 10', 'A', '2004-10-04', 'Address GabzV', '9841234541', 'parent8@example.com', NULL, NULL, '980123458', NULL, NULL, NULL),
(17, 'Student A9lpH', 'student9@example.com', NULL, 'student', '$2y$12$tH7N/H2nNA9sZvdM7PR/He820y5Dj5HP7J2uUoDtPdoWoTo.Ak8We', 'STU6e3xa', 'School zz2Lz', 'Grade 7', 'A', '2006-10-04', 'Address pL2qC', '9841234539', 'parent9@example.com', NULL, NULL, '980123459', NULL, NULL, NULL),
(18, 'Teacher VQXLy', 'teacher0@example.com', NULL, 'teacher', '$2y$12$159x9qs5NC0YSgFdyOWjtuCw6HUP4eNYKYI9eCEI/yaOWLFcJ0weC', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TCH7s6Hk', 'Subject ckay9', '981234560', NULL, NULL, NULL),
(19, 'Teacher AhFCg', 'teacher1@example.com', NULL, 'teacher', '$2y$12$PVdasCCw2V94caW.Dkp0NeLkj1O/rJEWZ/OGKrHPf3hkx4LcRkCrK', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TCHbXmXM', 'Subject R9hc4', '981234561', NULL, NULL, NULL),
(20, 'Teacher mmttN', 'teacher2@example.com', NULL, 'teacher', '$2y$12$NViakXdxv9lrGrLQZ.9h/O8eMxbpQGmc5bFeVndcGVdYMG/qWZQiS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TCHdzQuC', 'Subject oC1Xb', '981234562', NULL, NULL, NULL),
(21, 'Teacher xBKFG', 'teacher3@example.com', NULL, 'teacher', '$2y$12$LbRGUuttDGqP4ho8AZoY1.GMibHyhQQOuVGCTsTKvNQfgzMMPmlHG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TCH6xFVq', 'Subject tRYSy', '981234563', NULL, NULL, NULL),
(22, 'Teacher 2UgdZ', 'teacher4@example.com', NULL, 'teacher', '$2y$12$LtDugRI1OZVBMc72a3aO.eO8vrpuSFCTnpDZawWXN/hurYwpcgRW.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TCHfQlTv', 'Subject VyHru', '981234564', NULL, NULL, NULL),
(23, 'Teacher uisTx', 'teacher5@example.com', NULL, 'teacher', '$2y$12$c.XAoP2NrrypQkfU5IXlIehSdAFPmA8SLVmGMEcyFWLJGZr996TvG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TCHCUos9', 'Subject 06pnb', '981234565', NULL, NULL, NULL),
(24, 'Teacher ftSwY', 'teacher6@example.com', NULL, 'teacher', '$2y$12$9J6cI0YW4qwOf4q200B6UeDDu5UaCq5MTS5NkOHGXFhw7FFqKV7Di', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TCHTZ1Rv', 'Subject B7u45', '981234566', NULL, NULL, NULL),
(25, 'Teacher eqOmb', 'teacher7@example.com', NULL, 'teacher', '$2y$12$N/zjKRtGw18R3hpYDFd9cebC4ndZ5JlUzi3nt051joOkWBCbie4ce', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TCHnqyp0', 'Subject truQb', '981234567', NULL, NULL, NULL),
(26, 'Teacher vVQCE', 'teacher8@example.com', NULL, 'teacher', '$2y$12$BcIcj7/LT2gpi7/5RKXB4.9LSV.ZQlEfbojXyGobZoG3DAc5KaF6K', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TCH5TrtZ', 'Subject vkdKi', '981234568', NULL, NULL, NULL),
(27, 'Teacher Q4Bkt', 'teacher9@example.com', NULL, 'teacher', '$2y$12$88d8FxQG4x6SGL7ZNI.C/uoqhrAPgjFsvyXAKvo0VMkbWoK/jNyou', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TCHljM0G', 'Subject aSEtR', '981234569', NULL, NULL, NULL),
(28, 'bikash bist', 'bikashbist1414@gmail.com', NULL, 'student', '$2y$12$023q/BCq3Aok6KoTFjoHKOgYtH0xzs5JV1Ar2LGk0Y.5ehixWhwm6', '1222', 'kmc', '1', NULL, '2024-10-25', 'new baneshwor', '9823846254', 'Gandakiprovince@gmail.com', NULL, NULL, NULL, NULL, '2024-10-23 00:52:55', '2024-10-23 00:52:55'),
(29, 'teacher1', 'teacher1@gmail.com', NULL, 'teacher', '$2y$12$vYDIxCNXIVrPQIAefLmvt.LKqdjFBtUiimoRmhWVbk7mE6.3u/b9m', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1234', 'Science', '9823846254', NULL, '2024-10-23 01:25:55', '2024-10-23 01:25:55'),
(30, 'bikash bist', 'biki123@gmail.com', NULL, 'student', '$2y$12$ryI128tR93gYcNepLrHSHO9ItoVKQAwEh5ff5U7aBvqVqQEuKKfiO', '123', 'kmc', '1', 'A', '2024-10-26', 'new baneshwor', '9823846254', 'staff@gmail.com', NULL, NULL, NULL, NULL, '2024-10-23 23:32:11', '2024-10-23 23:32:11'),
(31, 'bikash bist', 'bikashbist14144@gmail.com', NULL, 'student', '$2y$12$3PyY.aoym6NZ9XyCirJyluJezKSYuGGNmnlGACJvBaHp40zF5ZTXS', '123', NULL, '2', 'A', '2024-10-09', 'new baneshwor', '9823846254', 'staff@gmail.com', NULL, NULL, NULL, NULL, '2024-10-24 00:16:10', '2024-10-24 00:16:10'),
(33, 'test', 'testteacher@gmail.com', NULL, 'teacher', '$2y$12$On.p8DJE7OKNd7CAA/D66.SIuN/swweFaxQcJohh2FLIwbD7rwuAm', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '123', 'Science', '9823846254', NULL, '2024-10-24 01:03:28', '2024-10-24 01:03:28'),
(34, 'bikash bist', 'staff@gmail.com', NULL, 'teacher', '$2y$12$4zI1iJTa8rQCKz017pOHXuDAgMdyLzmZg30XqzuMEQC0bgggLbvmG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1234', 'Science', 'staff@gmail.com', NULL, '2024-10-24 02:03:09', '2024-10-24 02:03:09'),
(35, 'bikash bist', 'bikashbist1414123@gmail.com', NULL, 'student', '$2y$12$ceJgMLWsEIN1pBLRIAt9cOOiyxvBdu11uxx6Mp2rVfP3vBRoX6tje', '123', 'tribhuwan', '4', 'A', '2024-10-10', 'new baneshwor', '9823846254', 'staff@gmail.com', NULL, NULL, NULL, NULL, '2024-10-24 23:28:50', '2024-10-24 23:28:50'),
(36, 'bikash bist', 'bikashbist14146q23@gmail.com', NULL, 'student', '$2y$12$W8.gLAnUD7ZjmuprfdMaMOkejuLx1pSGGgBAytokIZwcWKUiBKWsq', '123', 'tribhuwan', '4', 'C', '2024-10-10', 'new baneshwor', '9823846254', 'staff@gmail.com', NULL, NULL, NULL, NULL, '2024-10-24 23:29:26', '2024-10-24 23:29:26'),
(37, 'bikash bist', 'bikashbist14142123@gmail.com', NULL, 'student', '$2y$12$kF2SH.jez/fLxTsK3W2dsuGJ5nOFxcg1un0FONDREoBErKvka9J3W', '12345', 'tribhuwan', '4', 'A', '2024-10-31', 'new baneshwor', '9823846254', 'staff@gmail.com', NULL, NULL, NULL, NULL, '2024-10-24 23:30:19', '2024-10-24 23:30:19'),
(38, 'bikash bist', 'bikashbist1414123asf@gmail.com', NULL, 'student', '$2y$12$jPSOjpR.7qSQVv4q5m7N1uOHlSuH37El4i9ZkMnJ81p4qoPflEIY2', '123', 'tribhuwan', '6', 'A', '2024-10-26', 'new baneshwor', '9823846254', 'staff@gmail.com', NULL, NULL, NULL, NULL, '2024-10-25 00:25:18', '2024-10-25 00:25:18'),
(39, 'bikash bist', 'bikashbist1231414@gmail.com', NULL, 'student', '$2y$12$/Uocd5kyRlFKyyb1EZWdaeklj3tpuo.vaMUwcKFgMtKGkaHXqpSTG', '123', 'tribhuwan', '6', 'A', '2024-10-22', 'new baneshwor', '9823846254', 'staff@gmail.com', NULL, NULL, NULL, NULL, '2024-10-25 00:25:49', '2024-10-25 00:25:49'),
(40, 'Idola Battle', 'kebag@mailinator.com', NULL, 'student', '$2y$12$quzkFYlK4mG6K.rPVnja4OC15zlOG6HJGKoWyQDYjMLMq304Gagg6', 'Voluptatem vitae qui', 'Lionel Dalton', '10', 'Sunt et Nam ab dolor', '2024-10-30', 'Incidunt minim qui', '578', 'nivudyz@mailinator.com', NULL, NULL, NULL, NULL, '2024-10-25 01:37:29', '2024-10-25 01:37:29'),
(41, 'bikash bist', 'bikashbi1@gmail.com', NULL, 'student', '$2y$12$fcM4cJ5mc881h625u9oa3OlZ2LYGl90v3HYoljpnWexRCPpCLgmva', '123', 'tribhuwan', '100', 'Sunt et Nam ab dolor', '2024-10-25', 'new baneshwor', '9823846254', 'staff1@gmail.com', NULL, NULL, NULL, NULL, '2024-10-25 01:40:03', '2024-10-25 01:40:03'),
(42, 'Hari bist', 'hari123@gmail.com', NULL, 'student', '$2y$12$qpDUNsfJb4B0tMMz8jTpHOtInB2sMNkXW0nWiNtlvFRONLRKHXzSW', '123456', 'kmc', '10', 'A', '2024-10-25', 'new baneshwor', '9823846254', 'staff@gmail.com', NULL, NULL, NULL, NULL, '2024-10-25 06:40:17', '2024-10-25 06:40:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignments`
--
ALTER TABLE `assignments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_sessions`
--
ALTER TABLE `course_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_sessions_course_id_foreign` (`course_id`);

--
-- Indexes for table `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_student_course_id_foreign` (`course_id`),
  ADD KEY `course_student_student_id_foreign` (`user_id`);

--
-- Indexes for table `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_teacher_course_id_foreign` (`course_id`),
  ADD KEY `course_teacher_user_id_foreign` (`user_id`);

--
-- Indexes for table `course_teacher_resource`
--
ALTER TABLE `course_teacher_resource`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `teacher_resource_id` (`teacher_resource_id`);

--
-- Indexes for table `course_user`
--
ALTER TABLE `course_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_user_course_id_foreign` (`course_id`),
  ADD KEY `course_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teacher_resources`
--
ALTER TABLE `teacher_resources`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_teacher_resource`
--
ALTER TABLE `teacher_teacher_resource`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teacher_id` (`user_id`),
  ADD KEY `teacher_resource_id` (`teacher_resource_id`);

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
-- AUTO_INCREMENT for table `assignments`
--
ALTER TABLE `assignments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course_sessions`
--
ALTER TABLE `course_sessions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `course_student`
--
ALTER TABLE `course_student`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_teacher`
--
ALTER TABLE `course_teacher`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `course_teacher_resource`
--
ALTER TABLE `course_teacher_resource`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course_user`
--
ALTER TABLE `course_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher_resources`
--
ALTER TABLE `teacher_resources`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teacher_teacher_resource`
--
ALTER TABLE `teacher_teacher_resource`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course_sessions`
--
ALTER TABLE `course_sessions`
  ADD CONSTRAINT `course_sessions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_student`
--
ALTER TABLE `course_student`
  ADD CONSTRAINT `course_student_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_student_student_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD CONSTRAINT `course_teacher_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_teacher_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `course_teacher_resource`
--
ALTER TABLE `course_teacher_resource`
  ADD CONSTRAINT `course_teacher_resource_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `course_teacher_resource_ibfk_2` FOREIGN KEY (`teacher_resource_id`) REFERENCES `teacher_resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `course_user`
--
ALTER TABLE `course_user`
  ADD CONSTRAINT `course_user_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `course_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `teacher_teacher_resource`
--
ALTER TABLE `teacher_teacher_resource`
  ADD CONSTRAINT `teacher_teacher_resource_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher_teacher_resource_ibfk_2` FOREIGN KEY (`teacher_resource_id`) REFERENCES `teacher_resources` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
