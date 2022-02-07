-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2022 at 04:48 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_translate`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_jobs`
--

CREATE TABLE `apply_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_job` int(11) NOT NULL,
  `job_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_job` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `dob` date NOT NULL,
  `pob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remark` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `national_card` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `message` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_jobs`
--

INSERT INTO `apply_jobs` (`id`, `id_job`, `job_name`, `other_job`, `name`, `gender`, `email`, `phone`, `dob`, `pob`, `remark`, `cv`, `national_card`, `read_at`, `created_at`, `updated_at`, `status`, `message`) VALUES
(4, 1, 'Job Opportunities for Credit Officers Senior Credit Officers Internal Auditors Programmers', NULL, 'So Da', 0, 'soda@admin.com', 708921111, '2022-01-19', 'Tuek Tlar, Sen Sok, Phnom Penh.', 'ghsdgd', '1642558327_mGS1SWv0Ni3KsmCngbusbUhpml4ZZ8GoBnapFZeH.jpg', '1642558327_mGS1SWv0Ni3KsmCngbusbUhpml4ZZ8GoBnapFZeH.jpg', NULL, '2022-01-18 19:12:07', '2022-01-20 19:45:38', NULL, NULL),
(5, 2, 'Accounting manager', NULL, 'Rotha', 1, 'rotha@gmail.com', 123465789, '2022-01-19', 'Tuek Tlar, Sen Sok, Phnom Penh.', 'dsfas', '1642568772_vue.jpg', '1642568772_vue.jpg', '2022-01-26 21:36:36', '2022-01-18 22:06:12', '2022-01-26 21:36:36', 2, 'Don\'t Complete Documentation'),
(6, 8, 'The company offers a wide range of positions through online interviews.', NULL, 'Villa', 2, NULL, 70891667, '2022-01-18', 'Tuek Tlar, Sen Sok, Phnom Penh.', NULL, '1642989885_vue.jpg', NULL, NULL, '2022-01-23 19:04:45', '2022-01-24 19:28:44', 1, 'Yes'),
(7, 8, 'គ្រឹះស្ថានមានការជ្រើសរើសមុខតំណែងជាច្រើន តាមរយៈការសម្ភាសន៍ Online', NULL, 'សាយ​ តុង', 1, NULL, 101234567, '2022-01-03', 'Tuek Tlar, Sen Sok, Phnom Penh.', NULL, '1642990292_vue.jpg', NULL, NULL, '2022-01-23 19:11:32', '2022-01-23 19:11:32', NULL, NULL),
(8, 10, 'ឱកាសការងារសម្រាប់តួនាទី មន្រ្តីឥណទាន មន្រ្តីឥណទានជាន់ខ្ពស់', NULL, 'tong say', 1, NULL, 156323213, '2022-01-12', 'Tuek Tlar, Sen Sok, Phnom Penh.', 'dd', '1643338668_vue.jpg', '1643338668_HR-Aavatar.jpg', NULL, '2022-01-27 19:57:48', '2022-01-27 19:57:48', NULL, NULL),
(9, 10, 'ឱកាសការងារសម្រាប់តួនាទី មន្រ្តីឥណទាន មន្រ្តីឥណទានជាន់ខ្ពស់', NULL, 'Laravel test', 1, NULL, 156323213, '1999-02-12', 'Phnom Penh', NULL, '1643338797_Flat-logo-envato-Clipart-PNG.png', NULL, NULL, '2022-01-27 19:59:57', '2022-01-27 19:59:57', NULL, NULL),
(10, 10, 'ឱកាសការងារសម្រាប់តួនាទី មន្រ្តីឥណទាន មន្រ្តីឥណទានជាន់ខ្ពស់', NULL, 'So Da', 2, NULL, 156323213, '1999-02-02', 'Takoe', NULL, '1643338898_vue.jpg', NULL, NULL, '2022-01-27 20:01:38', '2022-01-27 20:01:38', NULL, NULL),
(11, 10, 'ឱកាសការងារសម្រាប់តួនាទី មន្រ្តីឥណទាន មន្រ្តីឥណទានជាន់ខ្ពស់', NULL, 'Beat', 2, NULL, 156323213, '1999-02-01', 'Takoe', NULL, '1643339060_Flat-logo-envato-Clipart-PNG.png', NULL, NULL, '2022-01-27 20:04:20', '2022-01-27 20:34:28', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apply_loans`
--

CREATE TABLE `apply_loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_loan` int(11) NOT NULL,
  `loan_purpose` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `pob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `national_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `apply_loans`
--

INSERT INTO `apply_loans` (`id`, `id_loan`, `loan_purpose`, `name`, `gender`, `email`, `phone`, `pob`, `message`, `national_card`, `read_at`, `created_at`, `updated_at`, `amount`, `status`, `comments`) VALUES
(11, 1, NULL, 'tong say', 1, 'tongsay@gmail.com', 70891667, 'Tuek Tlar, Sen Sok, Phnom Penh.', 'fgsfgs', '1642558433_mGS1SWv0Ni3KsmCngbusbUhpml4ZZ8GoBnapFZeH.jpg', NULL, '2022-01-18 19:13:53', '2022-01-24 20:12:08', NULL, '2', NULL),
(12, 1, NULL, 'So Da', 2, 'admin123@gmail.com', 10234555, 'Phnom Penh', 'hdghfdh', '1642558800_MMc8BnRrANU3n2R3K8Dj2CpaQ9K1bw93z4DOnUoe.jpg', NULL, '2022-01-18 19:20:00', '2022-01-24 20:11:43', NULL, '1', NULL),
(13, 3, NULL, 'Laravel test', 1, 'Admin@admin.com', 70891667, 'Phnom Penh', 'I want apply', '1642758414_xa7en7o59vtxdhgte92u.png', '2022-01-26 21:36:44', '2022-01-21 02:46:54', '2022-01-26 21:36:44', NULL, NULL, NULL),
(14, 6, NULL, 'Villa', 1, NULL, 1023333, 'Phnom Penh', NULL, '1642991913_vue.jpg', NULL, '2022-01-23 19:38:33', '2022-01-24 20:05:39', 1000, '2', 'Don\'t Have Documentation'),
(15, 5, NULL, 'So Da', 2, NULL, 1022331, 'Phnom Penh', NULL, '1642992304_vue.jpg', NULL, '2022-01-23 19:45:04', '2022-01-24 20:05:13', 500, '1', 'Completed Documentation'),
(16, 2, NULL, 'Sal', 1, NULL, 13467892, 'Phnom Penh', NULL, '1643082459_vue.jpg', NULL, '2022-01-24 20:47:39', '2022-01-24 20:47:39', 1000, NULL, NULL),
(17, 2, NULL, 'Villa', 2, NULL, 156323213, 'Tuek Tlar, Sen Sok, Phnom Penh.', NULL, '1643339624_Flat-logo-envato-Clipart-PNG.png', NULL, '2022-01-27 20:13:44', '2022-01-27 20:13:44', 1000, NULL, NULL),
(18, 2, NULL, 'So Da', 2, NULL, 156323213, 'Tuek Tlar, Sen Sok, Phnom Penh.', NULL, '1643339700_vue.jpg', NULL, '2022-01-27 20:15:00', '2022-01-27 20:15:00', 1000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `compliants`
--

CREATE TABLE `compliants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_loan_type` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) NOT NULL,
  `date` date NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `compliant_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `message` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `compliants`
--

INSERT INTO `compliants` (`id`, `name`, `id_loan_type`, `email`, `phone`, `date`, `subject`, `compliant_description`, `path`, `read_at`, `created_at`, `updated_at`, `status`, `message`, `title`) VALUES
(1, 'tong say', 1, 'tongsay@gmail.com', 70891667, '2022-01-19', 'ldklsjfla', 'dfada', '1642560027_MMc8BnRrANU3n2R3K8Dj2CpaQ9K1bw93z4DOnUoe.jpg', NULL, '2022-01-18 19:40:27', '2022-01-24 01:42:39', NULL, NULL, NULL),
(2, 'So Da', 1, 'admin@borribo.com.kh', 70891667, '2022-01-19', 'dsfadds', 'dafdfsa', '1642560538_mGS1SWv0Ni3KsmCngbusbUhpml4ZZ8GoBnapFZeH.jpg', NULL, '2022-01-18 19:48:58', '2022-01-18 19:59:01', NULL, NULL, NULL),
(3, 'So Da', 1, 'admin@borribo.com.kh', 70891667, '2022-01-19', 'dsfadds', 'dafdfsa', '1642560619_mGS1SWv0Ni3KsmCngbusbUhpml4ZZ8GoBnapFZeH.jpg', NULL, '2022-01-18 19:50:19', '2022-01-21 02:19:22', NULL, NULL, NULL),
(4, 'So Da', 1, 'admin@borribo.com.kh', 70891667, '2022-01-19', 'dsfadds', 'dafdfsa', '1642560648_mGS1SWv0Ni3KsmCngbusbUhpml4ZZ8GoBnapFZeH.jpg', NULL, '2022-01-18 19:50:48', '2022-01-24 01:41:56', NULL, NULL, NULL),
(5, 'tong say', 1, 'tongsay@gmail.com', 70891667, '2022-01-19', 'gg', 'gg', '1642568216_vue.jpg', NULL, '2022-01-18 21:56:56', '2022-01-24 00:33:41', NULL, NULL, NULL),
(6, 'So D', 5, NULL, 12444110, '2022-01-17', 'gjfghjgdh', 'ghdhsaghsfh', '1642992978_vue.jpg', NULL, '2022-01-23 19:56:18', '2022-01-24 18:51:01', 1, 'Competed', NULL),
(7, 'IT Department', 4, NULL, 104040404, '2022-01-16', 'adsdasd', 'sdASDs', '1642993698_Flat-logo-envato-Clipart-PNG.png', NULL, '2022-01-23 20:08:18', '2022-01-24 01:19:00', NULL, NULL, NULL),
(8, 'IT Department', 1, NULL, 110101010, '2022-01-16', 'dffgsfgsdg', 'fgsgsdf', '1642993753_vue.jpg', NULL, '2022-01-23 20:09:13', '2022-01-24 01:51:57', 2, 'Don\'t Complete Documentation', NULL),
(9, 'IT Department', 4, NULL, 70891246, '2022-01-25', 'fdgf', 'fgsg', '1642994117_vue.jpg', '2022-01-24 02:02:01', '2022-01-23 20:15:17', '2022-01-24 02:02:01', NULL, NULL, NULL),
(10, 'Bell', 5, NULL, 1024244545, '2022-01-18', 'fsf', 'dfsf', '1642994895_vue.jpg', '2022-01-27 01:19:15', '2022-01-23 20:28:15', '2022-01-27 01:19:15', NULL, NULL, NULL),
(11, 'Sal', 4, NULL, 123456789, '2022-01-25', 'dfd', 'dfad', '1643075209_vue.jpg', NULL, '2022-01-24 18:46:49', '2022-01-24 18:46:49', NULL, NULL, NULL),
(12, 'Sok Reaksa', 3, NULL, 156323213, '2022-01-20', 'no', 'no', '1643268998_Capture.PNG', NULL, '2022-01-27 00:36:38', '2022-01-27 00:36:38', NULL, NULL, NULL),
(13, 'Rotha', 6, NULL, 156323213, '2022-01-20', 'no', 'no', '1643269433_Capture.PNG', NULL, '2022-01-27 00:43:53', '2022-01-27 00:43:53', NULL, NULL, NULL),
(14, 'Rotha', 6, NULL, 156323213, '2022-01-20', 'no', 'no', '1643269451_Capture.PNG', NULL, '2022-01-27 00:44:11', '2022-01-27 00:44:11', NULL, NULL, NULL),
(15, 'Rotha', 6, NULL, 156323213, '2022-01-20', 'no', 'no', '1643269475_Capture.PNG', NULL, '2022-01-27 00:44:35', '2022-01-27 00:44:35', NULL, NULL, NULL),
(16, 'Laravel test', 3, NULL, 156323213, '2022-01-04', 'f', 'f', '1643270357_Flat-logo-envato-Clipart-PNG.png', '2022-01-27 01:37:40', '2022-01-27 00:59:17', '2022-01-27 01:37:40', NULL, NULL, NULL),
(17, 'IT Department', 4, NULL, 156323213, '2022-01-13', 'no', 'no', '1643271371_HR-Aavatar.jpg', NULL, '2022-01-27 01:16:11', '2022-01-27 01:16:11', NULL, NULL, NULL),
(18, 'So D', 4, NULL, 156323213, '2022-01-22', 'd', 'dd', '1643272739_Facebook-logo.png', NULL, '2022-01-27 01:38:59', '2022-01-27 01:38:59', NULL, NULL, NULL),
(19, 'IT Department', 3, NULL, 156323213, '2022-01-13', 'hh', 'hh', '1643335460_Facebook-logo.png', NULL, '2022-01-27 19:04:20', '2022-01-27 19:04:20', NULL, NULL, NULL),
(20, 'So D', 4, NULL, 156323213, '2022-01-10', 'ff', 'ff', '1643337767_Flat-logo-envato-Clipart-PNG.png', NULL, '2022-01-27 19:42:47', '2022-01-27 19:42:47', NULL, NULL, NULL),
(21, 'IT Department', 3, NULL, 156323213, '2022-01-12', 'ដថស', 'ដថថា', '1643337984_Flat-logo-envato-Clipart-PNG.png', NULL, '2022-01-27 19:46:24', '2022-01-27 19:46:24', NULL, NULL, NULL),
(22, 'Villa', 1, NULL, 156323213, '2022-01-06', 'ថងដថ', 'ដថងដថ', '1643338089_vue.jpg', NULL, '2022-01-27 19:48:09', '2022-01-27 19:48:09', NULL, NULL, NULL),
(23, 'Laravel test', 3, NULL, 156323213, '2022-01-21', 'gdfg', 'ghd', '1643338174_Flat-logo-envato-Clipart-PNG.png', NULL, '2022-01-27 19:49:34', '2022-01-27 19:49:34', NULL, NULL, NULL),
(24, NULL, 3, NULL, 156323213, '2022-03-02', 'ff', 'ff', NULL, NULL, '2022-01-31 19:45:25', '2022-01-31 19:45:25', NULL, NULL, 'Ttt'),
(25, NULL, 3, 'tong@admin.com', 156323213, '2022-02-16', 'aa', 'aa', NULL, NULL, '2022-01-31 19:48:47', '2022-01-31 19:48:47', NULL, NULL, 'Baaa'),
(26, NULL, 4, NULL, 156323213, '2022-02-22', 'Taa', 'Taa', NULL, NULL, '2022-01-31 19:50:37', '2022-01-31 19:50:37', NULL, NULL, 'Yeee');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'IT Department', NULL, NULL, NULL),
(2, 'HR Department', NULL, '2022-01-21 01:51:38', '2022-01-21 01:51:38'),
(3, 'Compliant Department', NULL, '2022-01-21 01:59:16', '2022-01-21 01:59:16'),
(4, 'Operation Department', NULL, '2022-01-26 21:38:55', '2022-01-26 21:38:55');

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
-- Table structure for table `genders`
--

CREATE TABLE `genders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `genders`
--

INSERT INTO `genders` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Male', NULL, NULL),
(2, 'Female', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_kh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_kh` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirement_en` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requirement_kh` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_kh` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_job_type` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title_en`, `title_kh`, `description_en`, `description_kh`, `requirement_en`, `requirement_kh`, `content_en`, `content_kh`, `id_user`, `id_job_type`, `image`, `created_at`, `updated_at`) VALUES
(1, 'IT (help check and manage the App)', 'ផ្នែក IT (ជួយពិនិត្យនិងគ្រប់គ្រងលើ App)', '<p>Job TypeFull-time Experience1 Year Up ផ្នែក IT (ជួយពិនិត្យនិងគ្រប់គ្រងលើ App) បទពិសោធន៍ 1ឆ្នាំ ឡើង ត្រូវយល់ដឹងអំពីកូដ IT ប្រាក់ខែចរចារ ម៉ោងធ្វើការ 8-5ល្ងាច (ចន្ទ-សៅរ៍)</p>', '<p>Job TypeFull-time Experience1 Year Up ផ្នែក IT (ជួយពិនិត្យនិងគ្រប់គ្រងលើ App) បទពិសោធន៍ 1ឆ្នាំ ឡើង ត្រូវយល់ដឹងអំពីកូដ IT ប្រាក់ខែចរចារ ម៉ោងធ្វើការ 8-5ល្ងាច (ចន្ទ-សៅរ៍)</p>', '<p>Job TypeFull-time Experience1 Year Up ផ្នែក IT (ជួយពិនិត្យនិងគ្រប់គ្រងលើ App) បទពិសោធន៍ 1ឆ្នាំ ឡើង ត្រូវយល់ដឹងអំពីកូដ IT ប្រាក់ខែចរចារ ម៉ោងធ្វើការ 8-5ល្ងាច (ចន្ទ-សៅរ៍)</p>', '<p>Job TypeFull-time Experience1 Year Up ផ្នែក IT (ជួយពិនិត្យនិងគ្រប់គ្រងលើ App) បទពិសោធន៍ 1ឆ្នាំ ឡើង ត្រូវយល់ដឹងអំពីកូដ IT ប្រាក់ខែចរចារ ម៉ោងធ្វើការ 8-5ល្ងាច (ចន្ទ-សៅរ៍)</p>', NULL, NULL, 1, 1, 'job_null.jpg', '2022-01-11 23:59:15', '2022-01-11 23:59:15'),
(2, 'Accounting manager', 'អ្នកគ្រប់គ្រង​គណនេយ្យ', '<p>- Prepare all payment document.<br />\r\n- Daily check stock.<br />\r\n- Purchasing Order &amp; AP<br />\r\n- Purchasing monthly report<br />\r\n- Inventory Monthly report.<br />\r\n- Check petty cash<br />\r\n- Other tasks assigned by Manager</p>', '<p>- រៀបចំឯកសារទូទាត់ទាំងអស់។<br />\r\n- ពិនិត្យស្តុកប្រចាំថ្ងៃ។<br />\r\n- ការបញ្ជាទិញ &amp; AP<br />\r\n- ទិញរបាយការណ៍ប្រចាំខែ<br />\r\n- របាយការណ៍សារពើភ័ណ្ឌប្រចាំខែ។<br />\r\n- ពិនិត្យសាច់ប្រាក់តិចតួច<br />\r\n- ការងារផ្សេងៗដែលចាត់ចែងដោយអ្នកគ្រប់គ្រង</p>', '<p>- Cambodian Female<br />\r\n- Bachelor Degree in accounting and Finance.<br />\r\n- Good command of spoken and written in English and Chinese is advantage.<br />\r\n- Excellent communication and interpersonal skills.<br />\r\n- Ability to handle the task assigned by manager.<br />\r\n- Excellent computer skills-MS Word, Excel, Peachtree.<br />\r\n- Can work under pressure.<br />\r\n- Salary base on experience and negotiation or expect salary.</p>', '<p>- នារីខ្មែរ<br />\r\n- បរិញ្ញាបត្រផ្នែកគណនេយ្យ និងហិរញ្ញវត្ថុ។<br />\r\n- អាចនិយាយ និងសរសេរជាភាសាអង់គ្លេស និងចិនបានល្អ មានអត្ថប្រយោជន៍។<br />\r\n- មានជំនាញទំនាក់ទំនងល្អ និងអន្តរបុគ្គល។<br />\r\n- សមត្ថភាពក្នុងការគ្រប់គ្រងភារកិច្ចដែលចាត់ចែងដោយអ្នកគ្រប់គ្រង។<br />\r\n- មានជំនាញកុំព្យូទ័រល្អ-MS Word, Excel, Peachtree ។<br />\r\n- អាចធ្វើការក្រោមសម្ពាធ។<br />\r\n- ប្រាក់ខែអាស្រ័យលើបទពិសោធន៍ និងការចរចារ ឬរំពឹងប្រាក់ខែ។</p>', NULL, NULL, 1, 1, 'job_null.jpg', '2022-01-12 18:39:15', '2022-01-12 18:39:15'),
(3, 'ផ្នែក ជាងSoftware Computer', 'Computer Software', '<p>&bull; Installing and configuring computer systems, networks and printers;<br />\r\n&bull; Troubleshooting system and network problems and diagnosing and solving hardware/software faults;<br />\r\n&bull; Talking staff/clients through a series of actions, either face to face or over the telephone;<br />\r\n&bull; Providing support, including procedural, documentation;<br />\r\n&bull; Following diagrams and written instructions to repair a fault or set up a system;<br />\r\n&bull; Prioritizing and managing several open cases at one time;<br />\r\n&bull; Provide maintenance of Hardware, software, networks and security updates to customers;<br />\r\n&bull; Testing and evaluating new technology</p>', '<p>&bull; ការដំឡើង និងកំណត់រចនាសម្ព័ន្ធប្រព័ន្ធកុំព្យូទ័រ បណ្តាញ និងម៉ាស៊ីនបោះពុម្ព។<br />\r\n&bull; ដោះស្រាយបញ្ហាប្រព័ន្ធ និងបណ្តាញ និងការធ្វើរោគវិនិច្ឆ័យ និងដោះស្រាយកំហុសផ្នែករឹង/កម្មវិធី។<br />\r\n&bull; និយាយជាមួយបុគ្គលិក/អតិថិជនតាមរយៈសកម្មភាពជាបន្តបន្ទាប់ ទាំងទល់មុខគ្នា ឬតាមទូរស័ព្ទ។<br />\r\n&bull; ការផ្តល់ការគាំទ្រ រួមទាំងនីតិវិធី ឯកសារ។<br />\r\n&bull; អនុវត្តតាមដ្យាក្រាម និងការណែនាំជាលាយលក្ខណ៍អក្សរ ដើម្បីជួសជុលកំហុស ឬរៀបចំប្រព័ន្ធ។<br />\r\n&bull; ផ្តល់អាទិភាព និងគ្រប់គ្រងករណីបើកចំហជាច្រើនក្នុងពេលតែមួយ។<br />\r\n&bull; ផ្តល់ការថែទាំផ្នែករឹង កម្មវិធី បណ្តាញ និងការអាប់ដេតសុវត្ថិភាពដល់អតិថិជន។<br />\r\n&bull; ការធ្វើតេស្ត និងវាយតម្លៃបច្ចេកវិទ្យាថ្មី។</p>', '<p>&bull; Bachelor&#39;s Degree Computer Science, Information Technology or equivalent;<br />\r\n&bull; At least 2 years of working experience;<br />\r\n&bull; Self-motivated and responsible;<br />\r\n&bull; Experienced Software/Networking/Hardware installation and trouble-shooting<br />\r\n&bull; English Good (Specking &amp; Writing)<br />\r\n&bull; IT Field /Diploma<br />\r\n&nbsp;</p>', '<p>&bull; បរិញ្ញាបត្រវិទ្យាសាស្ត្រកុំព្យូទ័រ បច្ចេកវិទ្យាព័ត៌មាន ឬសញ្ញាបត្រដែលមានតម្លៃស្មើ។<br />\r\n&bull; បទពិសោធន៍ការងារយ៉ាងតិច 2 ឆ្នាំ;<br />\r\n&bull; ការលើកទឹកចិត្តខ្លួនឯង និងការទទួលខុសត្រូវ;<br />\r\n&bull; ការដំឡើងកម្មវិធី/បណ្តាញ/Hardware ដែលមានបទពិសោធន៍ និងការដោះស្រាយបញ្ហា<br />\r\n&bull; ភាសាអង់គ្លេសល្អ (Specking &amp; Writing)<br />\r\n&bull; មុខវិជ្ជា IT / Diploma</p>', NULL, NULL, 1, 1, 'job_null.jpg', '2022-01-12 18:42:44', '2022-01-12 18:42:44'),
(4, 'IT Volunteers', 'បុគ្គលិកស្ម័គ្រចិត្តផ្នែកព័ត៌វិទ្យា IT', '<p>Job TypeInternships Min Salary $ 120 Up Galaxy Computer needs to recruit more IT volunteers. 2nd year students up to 2. Friendly, positive and agile 3. Can use Photoshop, Illustrator or other design software 4. Be responsible in work 5. Respect working hours 6. High willingness to learn new things</p>', '<p>Job TypeInternships Min Salary$120 Up ក្រុមហ៊ុន Galaxy Computer ត្រូវការជ្រើសរើសបុគ្គលិកស្ម័គ្រចិត្ត ផ្នែកព័ត៌វិទ្យា IT ជាច្រើននាក់ លក្ខខណ្ឌ ជ្រើសរើស ១. និស្សិត ឆ្នាំទី 2 ឡើងទៅ ២. រួសរាយរាក់ទាក់ មានគំនិតវិជ្ជមាន និងមានភាពរហ័សរហួន ៣. អាចប្រើ Photoshop, Illustrator ឫ កម្មវិធីឌីស្សាញផ្សេងៗ ៤. មានទំនួលខុសត្រូវក្នុងការងារ ៥. គោរពម៉ោងការងារ ៦. ឆន្ទះខ្ពស់ក្នុងការរៀនសូត្រ អ្វីដែល ថ្មី</p>', '<p>Job TypeInternships Min Salary $ 120 Up Galaxy Computer needs to recruit more IT volunteers. 2nd year students up to 2. Friendly, positive and agile 3. Can use Photoshop, Illustrator or other design software 4. Be responsible in work 5. Respect working hours 6. High willingness to learn new things</p>', '<p>Job TypeInternships Min Salary$120 Up ក្រុមហ៊ុន Galaxy Computer ត្រូវការជ្រើសរើសបុគ្គលិកស្ម័គ្រចិត្ត ផ្នែកព័ត៌វិទ្យា IT ជាច្រើននាក់ លក្ខខណ្ឌ ជ្រើសរើស ១. និស្សិត ឆ្នាំទី 2 ឡើងទៅ ២. រួសរាយរាក់ទាក់ មានគំនិតវិជ្ជមាន និងមានភាពរហ័សរហួន ៣. អាចប្រើ Photoshop, Illustrator ឫ កម្មវិធីឌីស្សាញផ្សេងៗ ៤. មានទំនួលខុសត្រូវក្នុងការងារ ៥. គោរពម៉ោងការងារ ៦. ឆន្ទះខ្ពស់ក្នុងការរៀនសូត្រ អ្វីដែល ថ្មី</p>', NULL, NULL, 1, 1, 'job_null.jpg', '2022-01-12 18:44:43', '2022-01-12 18:44:43'),
(5, 'Accountant (Phnom Penh)', 'Accountant គណនេយ្យករ​ (​ភ្នំពេញ)', '<p>Job TypeFull-time Experience1 Year Up An experienced accountant will be able to close the monthly statement (income statement, balance Sheet) Salary negotiable (Open to talk)</p>', '<p>Job TypeFull-time Experience1 Year Up គណនេយ្យករ ម្នាក់មានបទពិសោធគណនេយ្យករនឹងចេះបិទបញ្ជីប្រចាំខែ (​ income statement, balance Sheet ) ប្រាក់ខែចរចារតាមសមត្តភាព (​ Open to talk )</p>', '<p>Job TypeFull-time Experience1 Year Up An experienced accountant will be able to close the monthly statement (income statement, balance Sheet) Salary negotiable (Open to talk)</p>', '<p>Job TypeFull-time Experience1 Year Up គណនេយ្យករ ម្នាក់មានបទពិសោធគណនេយ្យករនឹងចេះបិទបញ្ជីប្រចាំខែ (​ income statement, balance Sheet ) ប្រាក់ខែចរចារតាមសមត្តភាព (​ Open to talk )</p>', NULL, NULL, 1, 2, 'job_null.jpg', '2022-01-12 18:48:39', '2022-01-12 18:48:39'),
(6, 'Accounting for renting stalls and rooms for rent', 'ផ្នែកគណនេយ្យទូទាត់ថ្លៃតូបជួលនិងបន្ទប់ជួល', '<p>Job TypeFull-time Experience2 Year Up Min Salary $ 300 Up Selection Criteria: * Female * Good computer skills (Word Excel) * Honest at work * Clear in income and expenses * Agile ធ្វើការ Working hours 9 : 00 ~ 18:00 (1 hour break, 8 working hours) 🌍 Location: Near Canadia Industrial Park, Veng Sreng Street, Phnom Penh</p>', '<p>Job TypeFull-time Experience2 Year Up Min Salary$300 Up លក្ខខណ្ឌនៃការជ្រើសរើស: *ភេទស្រី *ចេះប្រើប្រាស់កុំព្យូទ័របានល្អ(Word Excel) *មានភាពស្មោះត្រង់ក្នុងការងារ *ចេះច្បាស់ទៅលើចំណូលចំណាយ *មានភាពរហ័សរហួន 🕠ម៉ោងធ្វើការ 9:00 ~ 18:00(ថ្ងៃត្រង់សម្រាក1ម៉ោង ធ្វើការ8ម៉ោង) 🌍ទីតាំង:នៅជិតសួនឧស្សាហកម្មកាណាឌីយ៉ាផ្លូវវេងស្រេង ភ្នំពេញ</p>', '<p>Job TypeFull-time Experience2 Year Up Min Salary $ 300 Up Selection Criteria: * Female * Good computer skills (Word Excel) * Honest at work * Clear in income and expenses * Agile ធ្វើការ Working hours 9 : 00 ~ 18:00 (1 hour break, 8 working hours) 🌍 Location: Near Canadia Industrial Park, Veng Sreng Street, Phnom Penh</p>', '<p>Job TypeFull-time Experience2 Year Up Min Salary$300 Up លក្ខខណ្ឌនៃការជ្រើសរើស: *ភេទស្រី *ចេះប្រើប្រាស់កុំព្យូទ័របានល្អ(Word Excel) *មានភាពស្មោះត្រង់ក្នុងការងារ *ចេះច្បាស់ទៅលើចំណូលចំណាយ *មានភាពរហ័សរហួន 🕠ម៉ោងធ្វើការ 9:00 ~ 18:00(ថ្ងៃត្រង់សម្រាក1ម៉ោង ធ្វើការ8ម៉ោង) 🌍ទីតាំង:នៅជិតសួនឧស្សាហកម្មកាណាឌីយ៉ាផ្លូវវេងស្រេង ភ្នំពេញ</p>', NULL, NULL, 1, 2, 'job_null.jpg', '2022-01-12 18:50:52', '2022-01-12 18:50:52'),
(7, 'Job Opportunity for Credit Officer Senior Credit Officer', 'ឱកាសការងារសម្រាប់តួនាទី មន្រ្តីឥណទាន មន្រ្តីឥណទានជាន់ខ្ពស់', '<p>Job TypeFull-time Experience1 Year Up IT (Help check and manage the App) Experience 1 year to understand IT code Salary Negotiable Working hours 8-5 pm (Monday-Saturday)</p>', '<p>Job TypeFull-time Experience1 Year Up ផ្នែក IT (ជួយពិនិត្យនិងគ្រប់គ្រងលើ App) បទពិសោធន៍ 1ឆ្នាំ ឡើង ត្រូវយល់ដឹងអំពីកូដ IT ប្រាក់ខែចរចារ ម៉ោងធ្វើការ 8-5ល្ងាច (ចន្ទ-សៅរ៍)</p>', '<p>Job TypeFull-time Experience1 Year Up IT (Help check and manage the App) Experience 1 year to understand IT code Salary Negotiable Working hours 8-5 pm (Monday-Saturday)</p>', '<p>Job TypeFull-time Experience1 Year Up ផ្នែក IT (ជួយពិនិត្យនិងគ្រប់គ្រងលើ App) បទពិសោធន៍ 1ឆ្នាំ ឡើង ត្រូវយល់ដឹងអំពីកូដ IT ប្រាក់ខែចរចារ ម៉ោងធ្វើការ 8-5ល្ងាច (ចន្ទ-សៅរ៍)</p>', NULL, NULL, 1, 2, 'LD1ZPXbXGWUiBwys7b4vE6X5e3n9q085rMyIZNc8.jpg', '2022-01-12 18:53:28', '2022-01-12 18:53:28'),
(8, 'The company offers a wide range of positions through online interviews.', 'គ្រឹះស្ថានមានការជ្រើសរើសមុខតំណែងជាច្រើន តាមរយៈការសម្ភាសន៍ Online', '<p>Job TypeFull-time Experience2 Year Up Chu Meng Kuong Computer Sales as a wholesaler brand Fantech Segotep Ugreen Orico TechGear Onten We are looking for Software Installation ✅ Salary Negotiable - Expert Setup Window Mac OS Check PC&#39;s problem and Build New PC - No need to repair at the customer&#39;s company - 2 years experience</p>', '<p>Job TypeFull-time Experience2 Year Up ក្រុមហ៊ុន ជួ ម៉េងគួង លក់កុំព្យូទ័រ ជាកហាងបោះដុំ brand Fantech Segotep Ugreen Orico TechGear Onten យើងខ្ញុំត្រូវការជ្រើសរើសបុគ្គលិក ផ្នែក Software Installation ✅ប្រាក់ខែពិភាក្សាគ្នាបាន -ត្រូវការអ្នកចេះច្បាស់ Setup Window Mac OS Check PC&#39;s problem និង Build New PC -មិនតំរូវអោយទៅជួសជុលតាមផ្ទះ ក្រុមហ៊ុនរបស់ភ្ញៀវទេ -មានបទពិសោធនចាប់ពី2ឆ្នាំឡើង</p>', '<p>Job TypeFull-time Experience2 Year Up Chu Meng Kuong Computer Sales as a wholesaler brand Fantech Segotep Ugreen Orico TechGear Onten We are looking for Software Installation ✅ Salary Negotiable - Expert Setup Window Mac OS Check PC&#39;s problem and Build New PC - No need to repair at the customer&#39;s company - 2 years experience</p>', '<p>Job TypeFull-time Experience2 Year Up ក្រុមហ៊ុន ជួ ម៉េងគួង លក់កុំព្យូទ័រ ជាកហាងបោះដុំ brand Fantech Segotep Ugreen Orico TechGear Onten យើងខ្ញុំត្រូវការជ្រើសរើសបុគ្គលិក ផ្នែក Software Installation ✅ប្រាក់ខែពិភាក្សាគ្នាបាន -ត្រូវការអ្នកចេះច្បាស់ Setup Window Mac OS Check PC&#39;s problem និង Build New PC -មិនតំរូវអោយទៅជួសជុលតាមផ្ទះ ក្រុមហ៊ុនរបស់ភ្ញៀវទេ -មានបទពិសោធនចាប់ពី2ឆ្នាំឡើង</p>', NULL, NULL, 1, 2, 'ymvIBYfRgt6R4XFQkRXQ2qnqFukxmhEDWUXka2Ga.jpg', '2022-01-12 18:55:14', '2022-01-12 18:55:14'),
(9, 'The company offers a wide range of positions through online interviews.', 'គ្រឹះស្ថានមានការជ្រើសរើសមុខតំណែងជាច្រើន តាមរយៈការសម្ភាសន៍ Online', '<p>Job TypeInternships Min Salary $ 120 Up Galaxy Computer needs to recruit more IT volunteers. 2nd year students up to 2. Friendly, positive and agile 3. Can use Photoshop, Illustrator or other design software 4. Be responsible in work 5. Respect working hours 6. High willingness to learn new things</p>', '<p>Job TypeInternships Min Salary$120 Up ក្រុមហ៊ុន Galaxy Computer ត្រូវការជ្រើសរើសបុគ្គលិកស្ម័គ្រចិត្ត ផ្នែកព័ត៌វិទ្យា IT ជាច្រើននាក់ លក្ខខណ្ឌ ជ្រើសរើស ១. និស្សិត ឆ្នាំទី 2 ឡើងទៅ ២. រួសរាយរាក់ទាក់ មានគំនិតវិជ្ជមាន និងមានភាពរហ័សរហួន ៣. អាចប្រើ Photoshop, Illustrator ឫ កម្មវិធីឌីស្សាញផ្សេងៗ ៤. មានទំនួលខុសត្រូវក្នុងការងារ ៥. គោរពម៉ោងការងារ ៦. ឆន្ទះខ្ពស់ក្នុងការរៀនសូត្រ អ្វីដែល ថ្មី</p>', '<p>Job TypeInternships Min Salary $ 120 Up Galaxy Computer needs to recruit more IT volunteers. 2nd year students up to 2. Friendly, positive and agile 3. Can use Photoshop, Illustrator or other design software 4. Be responsible in work 5. Respect working hours 6. High willingness to learn new things</p>', '<p>Job TypeInternships Min Salary$120 Up ក្រុមហ៊ុន Galaxy Computer ត្រូវការជ្រើសរើសបុគ្គលិកស្ម័គ្រចិត្ត ផ្នែកព័ត៌វិទ្យា IT ជាច្រើននាក់ លក្ខខណ្ឌ ជ្រើសរើស ១. និស្សិត ឆ្នាំទី 2 ឡើងទៅ ២. រួសរាយរាក់ទាក់ មានគំនិតវិជ្ជមាន និងមានភាពរហ័សរហួន ៣. អាចប្រើ Photoshop, Illustrator ឫ កម្មវិធីឌីស្សាញផ្សេងៗ ៤. មានទំនួលខុសត្រូវក្នុងការងារ ៥. គោរពម៉ោងការងារ ៦. ឆន្ទះខ្ពស់ក្នុងការរៀនសូត្រ អ្វីដែល ថ្មី</p>', NULL, NULL, 1, 2, '1kX9Cg00XZPVPDET6RkOhxgNoBTsVjbiaeMQwOlj.jpg', '2022-01-12 18:57:31', '2022-01-12 18:57:31'),
(10, 'Job Opportunity for Credit Officer Senior Credit Officer', 'ឱកាសការងារសម្រាប់តួនាទី មន្រ្តីឥណទាន មន្រ្តីឥណទានជាន់ខ្ពស់', '<p>Job TypeFull-time Experience5 Year Up Min Salary$1,000 Up We are hiring - Accounting Manager -manage all accountants Requirements: - Education bachelor/Master Degree - hard working - experienced in Accounting Professionals - good relations and honestly - good english or chinese - Advanced proficiency Microsoft Excel, other applications software - Good verbal written communication in Khmer and English - Good organizational</p>', '<p>ប្រភេទការងារ បទពិសោធន៍ពេញម៉ោង 5 ឆ្នាំឡើង ប្រាក់ខែចាប់ពី $1,000 ឡើង យើងខ្ញុំកំពុងជ្រើសរើសបុគ្គលិក - អ្នកគ្រប់គ្រងគណនេយ្យ - គ្រប់គ្រងគណនេយ្យករទាំងអស់ តម្រូវការ៖ - កម្រិតវប្បធម៌បរិញ្ញាបត្ររង បរិញ្ញាបត្រជាន់ខ្ពស់ - ឧស្សាហ៍ព្យាយាម - មានបទពិសោធន៍ផ្នែកគណនេយ្យ - មានទំនាក់ទំនងល្អ និងស្មោះត្រង់ - ភាសាអង់គ្លេស ឬចិន - ជំនាញកម្រិតខ្ពស់។ Microsoft Excel កម្មវិធីកម្មវិធីផ្សេងៗ - ទំនាក់ទំនងសរសេរដោយពាក្យសំដីល្អជាភាសាខ្មែរ និងអង់គ្លេស - មានការរៀបចំបានល្អ</p>', '<p>Job TypeFull-time Experience5 Year Up Min Salary$1,000 Up We are hiring - Accounting Manager -manage all accountants Requirements: - Education bachelor/Master Degree - hard working - experienced in Accounting Professionals - good relations and honestly - good english or chinese - Advanced proficiency Microsoft Excel, other applications software - Good verbal written communication in Khmer and English - Good organizational</p>', '<p>ប្រភេទការងារ បទពិសោធន៍ពេញម៉ោង 5 ឆ្នាំឡើង ប្រាក់ខែចាប់ពី $1,000 ឡើង យើងខ្ញុំកំពុងជ្រើសរើសបុគ្គលិក - អ្នកគ្រប់គ្រងគណនេយ្យ - គ្រប់គ្រងគណនេយ្យករទាំងអស់ តម្រូវការ៖ - កម្រិតវប្បធម៌បរិញ្ញាបត្ររង បរិញ្ញាបត្រជាន់ខ្ពស់ - ឧស្សាហ៍ព្យាយាម - មានបទពិសោធន៍ផ្នែកគណនេយ្យ - មានទំនាក់ទំនងល្អ និងស្មោះត្រង់ - ភាសាអង់គ្លេស ឬចិន - ជំនាញកម្រិតខ្ពស់។ Microsoft Excel កម្មវិធីកម្មវិធីផ្សេងៗ - ទំនាក់ទំនងសរសេរដោយពាក្យសំដីល្អជាភាសាខ្មែរ និងអង់គ្លេស - មានការរៀបចំបានល្អ</p>', NULL, NULL, 1, 2, 'YFpl5leGOv83HSAjSDhUnVAYnw4i5zfrJufBgtDt.jpg', '2022-01-12 18:59:23', '2022-01-12 18:59:23'),
(11, 'Institutions offer a wide range of positions through online interviews.', 'រឹះស្ថានមានការជ្រើសរើសមុខតំណែងជាច្រើន តាមរយៈការសម្ភាសន៍ Online', '<p>Job TypeFull-time Experience1 Year Up An experienced accountant will be able to close the monthly statement (income statement, balance Sheet) Salary negotiable (Open to talk)</p>', '<p>Job TypeFull-time Experience1 Year Up គណនេយ្យករ ម្នាក់មានបទពិសោធគណនេយ្យករនឹងចេះបិទបញ្ជីប្រចាំខែ (​ income statement, balance Sheet ) ប្រាក់ខែចរចារតាមសមត្តភាព (​ Open to talk )</p>', '<p>Job TypeFull-time Experience1 Year Up An experienced accountant will be able to close the monthly statement (income statement, balance Sheet) Salary negotiable (Open to talk)</p>', '<p>Job TypeFull-time Experience1 Year Up គណនេយ្យករ ម្នាក់មានបទពិសោធគណនេយ្យករនឹងចេះបិទបញ្ជីប្រចាំខែ (​ income statement, balance Sheet ) ប្រាក់ខែចរចារតាមសមត្តភាព (​ Open to talk )</p>', NULL, NULL, 1, 2, 'QiiZi3pllvXYezHta91qxvuQVTWT6TyR3FCzP1zw.jpg', '2022-01-12 19:00:47', '2022-01-12 19:00:47'),
(12, 'Job Opportunities for Credit Officers Senior Credit Officers Internal Auditors Programmers', 'ឱកាសការងារសម្រាប់តួនាទី មន្រ្តីឥណទាន មន្រ្តីឥណទានជាន់ខ្ពស់ មន្រ្តីសវនករផ្ទៃក្នុង អ្នកសរសេរកម្មវិធី', '<p>Job TypeFull-time Experience2 Year Up Min Salary $ 300 Up Selection Criteria: * Female * Good computer skills (Word Excel) * Honest at work * Clear in income and expenses * Agile ធ្វើការ Working hours 9 : 00 ~ 18:00 (1 hour break, 8 working hours) 🌍 Location: Near Canadia Industrial Park, Veng Sreng Street, Phnom Penh</p>', '<p>Job TypeFull-time Experience2 Year Up Min Salary$300 Up លក្ខខណ្ឌនៃការជ្រើសរើស: *ភេទស្រី *ចេះប្រើប្រាស់កុំព្យូទ័របានល្អ(Word Excel) *មានភាពស្មោះត្រង់ក្នុងការងារ *ចេះច្បាស់ទៅលើចំណូលចំណាយ *មានភាពរហ័សរហួន 🕠ម៉ោងធ្វើការ 9:00 ~ 18:00(ថ្ងៃត្រង់សម្រាក1ម៉ោង ធ្វើការ8ម៉ោង) 🌍ទីតាំង:នៅជិតសួនឧស្សាហកម្មកាណាឌីយ៉ាផ្លូវវេងស្រេង ភ្នំពេញ</p>', '<p>Job TypeFull-time Experience2 Year Up Min Salary $ 300 Up Selection Criteria: * Female * Good computer skills (Word Excel) * Honest at work * Clear in income and expenses * Agile ធ្វើការ Working hours 9 : 00 ~ 18:00 (1 hour break, 8 working hours) 🌍 Location: Near Canadia Industrial Park, Veng Sreng Street, Phnom Penh</p>', '<p>Job TypeFull-time Experience2 Year Up Min Salary$300 Up លក្ខខណ្ឌនៃការជ្រើសរើស: *ភេទស្រី *ចេះប្រើប្រាស់កុំព្យូទ័របានល្អ(Word Excel) *មានភាពស្មោះត្រង់ក្នុងការងារ *ចេះច្បាស់ទៅលើចំណូលចំណាយ *មានភាពរហ័សរហួន 🕠ម៉ោងធ្វើការ 9:00 ~ 18:00(ថ្ងៃត្រង់សម្រាក1ម៉ោង ធ្វើការ8ម៉ោង) 🌍ទីតាំង:នៅជិតសួនឧស្សាហកម្មកាណាឌីយ៉ាផ្លូវវេងស្រេង ភ្នំពេញ</p>', NULL, NULL, 1, 1, 'nvI49LH9u3AhPBpH2iyd4idea80nljsoJM9j6QFG.jpg', '2022-01-12 19:02:17', '2022-01-12 19:02:17');

-- --------------------------------------------------------

--
-- Table structure for table `job_types`
--

CREATE TABLE `job_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_kh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_kh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_types`
--

INSERT INTO `job_types` (`id`, `title_en`, `title_kh`, `description_en`, `description_kh`, `created_at`, `updated_at`) VALUES
(1, 'Information Technology', 'ព័ត៌មានវិទ្យា', NULL, NULL, '2022-01-11 23:54:01', '2022-01-11 23:54:01'),
(2, 'Accounting', 'គណនេយ្យ', NULL, NULL, '2022-01-12 18:46:38', '2022-01-12 18:46:38');

-- --------------------------------------------------------

--
-- Table structure for table `loans`
--

CREATE TABLE `loans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_kh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_kh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_kh` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_loan_type` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loans`
--

INSERT INTO `loans` (`id`, `title_en`, `title_kh`, `description_en`, `description_kh`, `content_en`, `content_kh`, `id_loan_type`, `id_user`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Emergency loan', 'ឥណទានបន្ទាន់', 'Emergency loans are loans that are provided to help clients who face immediate emergencies related to health, accident or death in the family.', 'ឥណទានបន្ទាន់ ​គឺជាឥណទាន​សម្រាប់ផ្តល់ជូនអតិថិជនដែលមានជួយអតិថិជនដែលប្រឈមនឹងបញ្ហាកើតឡើងភ្លាមៗ ពាក់ព័ន្ធនឹងសុខភាព គ្រោះថ្នាក់ ឬមរណៈភាពនៅក្នុងគ្រួសារ៕', '<p><strong>Credit Terms</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- Currency: USD or KHR</p>\r\n\r\n<p>&nbsp; &nbsp;- Loan size: from $ 100 to $ 2,500</p>\r\n\r\n<p>&nbsp; &nbsp;- Interest rate: Reasonably low</p>\r\n\r\n<p>&nbsp; &nbsp;- Loan term: From 6 months to 24 months</p>\r\n\r\n<p>&nbsp; &nbsp;- Repayment method: Installment of principal and fixed interest every month</p>\r\n\r\n<p><strong>Conditions for obtaining a loan</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- Have Khmer nationality</p>\r\n\r\n<p>&nbsp; &nbsp;- Customers must be between 18 and 60 years old.</p>\r\n\r\n<p>&nbsp; &nbsp;- Have a clear residence</p>\r\n\r\n<p>&nbsp; &nbsp;- Have a legitimate business</p>\r\n\r\n<p>&nbsp; &nbsp;- Adequate availability</p>\r\n\r\n<p>&nbsp; &nbsp;- No other offenses</p>\r\n\r\n<p><strong>Required Documents</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- Identification documents (ID card, passport, family book,&nbsp; &nbsp; &nbsp; &nbsp;- residence book, birth certificate. (Copy)</p>\r\n\r\n<p>&nbsp; &nbsp;- Vehicle ID</p>\r\n\r\n<p>&nbsp; &nbsp;- Other documents</p>\r\n\r\n<p>&nbsp; &nbsp;- Other conditions apply</p>', '<p><strong>លក្ខខណ្ឌក្នុងការផ្តល់ឥណទាន</strong>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;- រូបិយប័ណ្ណ &nbsp; &nbsp; &nbsp; &nbsp; ​ : &nbsp; ប្រាក់ដុល្លារអាមេរិក ឬប្រាក់រៀល</p>\r\n\r\n<p>&nbsp; &nbsp;- ទំហំប្រាក់កម្ចី &nbsp; &nbsp; : &nbsp; ចាប់ពី ១០០ ដុល្លារ រហូត​ដល់ ២,៥០០ ដុល្លារ</p>\r\n\r\n<p>&nbsp; &nbsp;- អត្រាការប្រាក់ &nbsp; : &nbsp; ទាបសមរម្យ</p>\r\n\r\n<p>&nbsp; &nbsp;- រយៈពេលកម្ចី &nbsp; &nbsp; : &nbsp; ចាប់ពី ០៦ខែ រហូតដល់ ២៤ ខែ</p>\r\n\r\n<p>&nbsp; &nbsp;- របៀបសង &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; រំលស់ប្រាក់ដើម និងការប្រាក់ថេរជារៀងរាល់ខែ&nbsp;&nbsp;</p>\r\n\r\n<p><strong>លក្ខខណ្ឌក្នុងការទទួលប្រាក់កម្ចី</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- មានសញ្ជាតិខ្មែរ</p>\r\n\r\n<p>&nbsp; &nbsp;- អតិថិជនត្រូវមានអាយុចាប់ពី ១៨ឆ្នាំ រហូតដល់ ៦០ ឆ្នាំ</p>\r\n\r\n<p>&nbsp; &nbsp;- មានទីលំនៅច្បាស់លាស់</p>\r\n\r\n<p>&nbsp; &nbsp;- មានមុខរបរត្រឹមត្រូវស្របច្បាប់</p>\r\n\r\n<p>&nbsp; &nbsp;- មានលទ្ធភាពគ្រប់គ្រាន់</p>\r\n\r\n<p>&nbsp; &nbsp;- ពុំមានជាប់បទពិរុទ្ធផ្សេងៗ&nbsp;</p>\r\n\r\n<p><strong>ឯកសារដែលតម្រូវឲ្យមាន</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- ឯកសារកំណត់អត្តសញ្ញាណ (អត្តសញ្ញាណប័ណ្ណ , លិខិតឆ្លងដែន​​ , សៀវភៅគ្រួសារ , សៀវភៅស្នាក់នៅ , សំបុត្រកំណើត។ (ថតចម្លង)</p>\r\n\r\n<p>&nbsp; &nbsp;- ប័ណ្ណសម្គាល់យានយន្ត</p>\r\n\r\n<p>&nbsp; &nbsp;- ឯកសារផ្សេងៗ</p>\r\n\r\n<p>&nbsp; &nbsp;- លក្ខខណ្ឌផ្សេងៗត្រូវបានអនុវត្ត</p>', 1, 1, 'JMIGy9FbvPX606yJxQUcxvJrWF17fPqBlL6Q2ZVi.jpg', '2022-01-11 21:59:45', '2022-01-11 21:59:45'),
(2, 'Individual Loan', 'ឥណទានបុគ្គល', 'Individual loan is a type of loan that is easy to provide to customers who have a business for personal or family use or to expand the business or create a business to increase income to improve family life, this loan does not require customers to have collateral.', 'ឥណទានបុគ្គល គឺជាប្រភេទឥណទានងាយស្រួលសម្រាប់ផ្ដល់ជូនអតិថិជនដែលមានអាជីវកម្ម សម្រាប់ប្រើប្រាស់ផ្ទាល់ខ្លួន ឬក្នុងគ្រួសារ ឬពង្រីកអាជីវកម្ម ឬបង្កើតមុខរបរ ដើម្បីបន្ថែមចំណូល ជួយលើកកម្ពស់ជីវភាពគ្រួសារ ដោយឥណទាននេះ មិនតម្រូវឲ្យអតិថិជនមានទ្រព្យសម្រាប់ដាក់ធានាឡើយ។', '<p><strong>Credit Terms</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- Currency: USD or KHR</p>\r\n\r\n<p>&nbsp; &nbsp;- Loan size: from $ 100 up to $ 50,000, MARI or equivalent of 400,000 Riels to 80,000,000 Riels</p>\r\n\r\n<p>&nbsp; &nbsp;- Interest rate: Reasonably low</p>\r\n\r\n<p>&nbsp; &nbsp;- Loan term: From 6 months to 72 months</p>\r\n\r\n<p>&nbsp; &nbsp;- Repayment method: Installment of principal and fixed interest every month</p>\r\n\r\n<p><strong>Conditions for obtaining a loan</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- Have Khmer nationality</p>\r\n\r\n<p>&nbsp; &nbsp;- Customers must be between 18 and 60 years old.</p>\r\n\r\n<p>&nbsp; &nbsp;- Have a clear residence</p>\r\n\r\n<p>&nbsp; &nbsp;- Have a legitimate business</p>\r\n\r\n<p>&nbsp; &nbsp;- Adequate availability</p>\r\n\r\n<p>&nbsp; &nbsp;- No other offenses</p>\r\n\r\n<p><strong>Required Documents</strong></p>\r\n\r\n<p>&nbsp; &nbsp;-Identification documents (ID card, passport, family book, residence book, birth certificate. (Copy)</p>\r\n\r\n<p>&nbsp; &nbsp;- Vehicle ID</p>\r\n\r\n<p>&nbsp; &nbsp;- Other documents</p>\r\n\r\n<p>&nbsp; &nbsp;- Other conditions apply</p>', '<p><strong>លក្ខខណ្ឌក្នុងការផ្តល់ឥណទាន</strong>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;- រូបិយប័ណ្ណ&nbsp; &nbsp; &nbsp; &nbsp;​: &nbsp; ប្រាក់ដុល្លារអាមេរិក ឬប្រាក់រៀល</p>\r\n\r\n<p>&nbsp; &nbsp;- ទំហំប្រាក់កម្ចី&nbsp; &nbsp; : &nbsp; ចាប់ពី ១០០ ដុល្លារ រហូត​ដល់ ៥០,០០០ដុលាលរអាងមរិរ ឬសមមូល ៤០០,០០០ងរៀលដល់ ៨០,០០០,០០០រៀល</p>\r\n\r\n<p>&nbsp; &nbsp;- អត្រាការប្រាក់&nbsp; &nbsp; : &nbsp; ទាបសមរម្យ</p>\r\n\r\n<p>&nbsp; &nbsp;- រយៈពេលកម្ចី &nbsp; &nbsp; : &nbsp; ចាប់ពី ០៦ខែ រហូតដល់ ៧២ ខែ</p>\r\n\r\n<p>&nbsp; &nbsp;- របៀបសង&nbsp; &nbsp; &nbsp; &nbsp;: &nbsp; រំលស់ប្រាក់ដើម និងការប្រាក់ថេរជារៀងរាល់ខែ&nbsp;&nbsp;</p>\r\n\r\n<p><strong>លក្ខខណ្ឌក្នុងការទទួលប្រាក់កម្ចី</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- មានសញ្ជាតិខ្មែរ</p>\r\n\r\n<p>&nbsp; &nbsp;- អតិថិជនត្រូវមានអាយុចាប់ពី ១៨ឆ្នាំ រហូតដល់ ៦០ ឆ្នាំ</p>\r\n\r\n<p>&nbsp; &nbsp;- មានទីលំនៅច្បាស់លាស់</p>\r\n\r\n<p>&nbsp; &nbsp;- មានមុខរបរត្រឹមត្រូវស្របច្បាប់</p>\r\n\r\n<p>&nbsp; &nbsp;- មានលទ្ធភាពគ្រប់គ្រាន់</p>\r\n\r\n<p>&nbsp; &nbsp;- ពុំមានជាប់បទពិរុទ្ធផ្សេងៗ&nbsp;</p>\r\n\r\n<p><strong>ឯកសារដែលតម្រូវឲ្យមាន</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- ឯកសារកំណត់អត្តសញ្ញាណ (អត្តសញ្ញាណប័ណ្ណ , លិខិតឆ្លងដែន​​ , សៀវភៅគ្រួសារ , សៀវភៅស្នាក់នៅ , សំបុត្រកំណើត។ (ថតចម្លង)</p>\r\n\r\n<p>&nbsp; &nbsp;- ប័ណ្ណសម្គាល់យានយន្ត</p>\r\n\r\n<p>&nbsp; &nbsp;- ឯកសារផ្សេងៗ</p>\r\n\r\n<p>&nbsp; &nbsp;- លក្ខខណ្ឌផ្សេងៗត្រូវបានអនុវត្ត</p>', 2, 1, 'U9hki3jXz3MTFdzOdwzr7tQTm9EGCvhDwaqy9Gka.jpg', '2022-01-12 01:06:38', '2022-01-12 01:06:38'),
(3, 'Personal Loan', 'ឥណទានផ្ទាល់ខ្លួន', 'Personal loan is a type of loan provided to customers who need to purchase various consumables for personal use purposes.', 'ឥណទានប្រើប្រាស់ផ្ទាល់ខ្លួន គឺជាប្រភេទឥណទាន ផ្តល់ជូន អតិថិជនដែលមានតម្រូវ ការទិញសម្ភារប្រើប្រាស់ផ្សេងៗ ក្នុង គោលបំណងប្រើប្រាស់ផ្ទាល់ខ្លួន', '<p><strong>Credit Terms</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- Currency: USD or KHR</p>\r\n\r\n<p>&nbsp; &nbsp;- Loan size: from $ 1000 up to $ 6,000, MARI or equivalent of 400,000 Riels to 24,000,000 Riels</p>\r\n\r\n<p>&nbsp; &nbsp;- Interest rate: Reasonably low</p>\r\n\r\n<p>&nbsp; &nbsp;- Loan term: From 6 months to 48 months</p>\r\n\r\n<p>&nbsp; &nbsp;- Repayment method: Installment of principal and fixed interest every month</p>\r\n\r\n<p><strong>Conditions for obtaining a loan</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- Have Khmer nationality</p>\r\n\r\n<p>&nbsp; &nbsp;- Customers must be between 18 and 60 years old.</p>\r\n\r\n<p>&nbsp; &nbsp;- Have a clear residence</p>\r\n\r\n<p>&nbsp; &nbsp;- Have a legitimate business</p>\r\n\r\n<p>&nbsp; &nbsp;- Adequate availability</p>\r\n\r\n<p>&nbsp; &nbsp;- No other offenses</p>\r\n\r\n<p><strong>Required Documents</strong></p>\r\n\r\n<p>&nbsp; &nbsp;-Identification documents (ID card, passport, family book, residence book, birth certificate. (Copy)</p>\r\n\r\n<p>&nbsp; &nbsp;- Vehicle ID</p>\r\n\r\n<p>&nbsp; &nbsp;- Other documents</p>\r\n\r\n<p>&nbsp; &nbsp;- Other conditions apply</p>', '<p><strong>លក្ខខណ្ឌក្នុងការផ្តល់ឥណទាន</strong>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;- រូបិយប័ណ្ណ &nbsp; &nbsp; &nbsp; &nbsp; ​ : &nbsp; ប្រាក់ដុល្លារអាមេរិក ឬប្រាក់រៀល</p>\r\n\r\n<p>&nbsp; &nbsp;- ទំហំប្រាក់កម្ចី &nbsp; &nbsp; : &nbsp; ចាប់ពី ១០០ ដុល្លារ រហូត​ដល់ ៦,០០០ ដុល្លារ&nbsp;ឬសមមូល ៤០០,០០០រៀលដល់ ២៤,០០០,០០០រៀល</p>\r\n\r\n<p>&nbsp; &nbsp;- អត្រាការប្រាក់ &nbsp; : &nbsp; ទាបសមរម្យ</p>\r\n\r\n<p>&nbsp; &nbsp;- រយៈពេលកម្ចី &nbsp; &nbsp; : &nbsp; ចាប់ពី ០៦ខែ រហូតដល់ ៤៨ ខែ</p>\r\n\r\n<p>&nbsp; &nbsp;- របៀបសង &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; រំលស់ប្រាក់ដើម និងការប្រាក់ថេរជារៀងរាល់ខែ&nbsp;&nbsp;</p>\r\n\r\n<p><strong>លក្ខខណ្ឌក្នុងការទទួលប្រាក់កម្ចី</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- មានសញ្ជាតិខ្មែរ</p>\r\n\r\n<p>&nbsp; &nbsp;- អតិថិជនត្រូវមានអាយុចាប់ពី ១៨ឆ្នាំ រហូតដល់ ៦០ ឆ្នាំ</p>\r\n\r\n<p>&nbsp; &nbsp;- មានទីលំនៅច្បាស់លាស់</p>\r\n\r\n<p>&nbsp; &nbsp;- មានមុខរបរត្រឹមត្រូវស្របច្បាប់</p>\r\n\r\n<p>&nbsp; &nbsp;- មានលទ្ធភាពគ្រប់គ្រាន់</p>\r\n\r\n<p>&nbsp; &nbsp;- ពុំមានជាប់បទពិរុទ្ធផ្សេងៗ&nbsp;</p>\r\n\r\n<p><strong>ឯកសារដែលតម្រូវឲ្យមាន</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- ឯកសារកំណត់អត្តសញ្ញាណ (អត្តសញ្ញាណប័ណ្ណ , លិខិតឆ្លងដែន​​ , សៀវភៅគ្រួសារ , សៀវភៅស្នាក់នៅ , សំបុត្រកំណើត។ (ថតចម្លង)</p>\r\n\r\n<p>&nbsp; &nbsp;- ប័ណ្ណសម្គាល់យានយន្ត</p>\r\n\r\n<p>&nbsp; &nbsp;- ឯកសារផ្សេងៗ</p>\r\n\r\n<p>&nbsp; &nbsp;- លក្ខខណ្ឌផ្សេងៗត្រូវបានអនុវត្ត</p>', 3, 1, 'FU2UWE942Vusg7NXUNsrT4vauawXitK3lVvODSsn.jpg', '2022-01-12 01:13:45', '2022-01-12 01:13:45'),
(4, 'Civil employee Loan', 'ឥណទានមន្ត្រីរាជការ', 'Civil employee Loan is a loan for customers who use the work of teachers, doctors, police.', 'ឥណទានមន្ត្រីរាជការ ​គឺជាឥណទាន​សម្រាប់ផ្តល់ជូនអតិថិជនដែលមប្រើការងារគ្រូបង្រៀន គ្រូពេទ្យ ប៉ូលិស ៕', '<p><strong>Credit Terms</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- Currency: USD or KHR</p>\r\n\r\n<p>&nbsp; &nbsp;- Loan size: from $ 100 up to $ 6,000, MARI or equivalent of 400,000 Riels to 24,000,000 Riels</p>\r\n\r\n<p>&nbsp; &nbsp;- Interest rate: Reasonably low</p>\r\n\r\n<p>&nbsp; &nbsp;- Loan term: From 6 months to 48months</p>\r\n\r\n<p>&nbsp; &nbsp;- Repayment method: Installment of principal and fixed interest every month</p>\r\n\r\n<p><strong>Conditions for obtaining a loan</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- Have Khmer nationality</p>\r\n\r\n<p>&nbsp; &nbsp;- Customers must be between 18 and 60 years old.</p>\r\n\r\n<p>&nbsp; &nbsp;- Have a clear residence</p>\r\n\r\n<p>&nbsp; &nbsp;- Have a legitimate business</p>\r\n\r\n<p>&nbsp; &nbsp;- Adequate availability</p>\r\n\r\n<p>&nbsp; &nbsp;- No other offenses</p>\r\n\r\n<p><strong>Required Documents</strong></p>\r\n\r\n<p>&nbsp; &nbsp;-Identification documents (ID card, passport, family book, residence book, birth certificate. (Copy)</p>\r\n\r\n<p>&nbsp; &nbsp;- Vehicle ID</p>\r\n\r\n<p>&nbsp; &nbsp;- Other documents</p>\r\n\r\n<p>&nbsp; &nbsp;- Other conditions apply</p>', '<p><strong>លក្ខខណ្ឌក្នុងការផ្តល់ឥណទាន</strong>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;- រូបិយប័ណ្ណ &nbsp; &nbsp; &nbsp; &nbsp; ​ : &nbsp; ប្រាក់ដុល្លារអាមេរិក ឬប្រាក់រៀល</p>\r\n\r\n<p>&nbsp; &nbsp;- ទំហំប្រាក់កម្ចី &nbsp; &nbsp; : &nbsp; ចាប់ពី ១០០ ដុល្លារ រហូត​ដល់ ៦,០០០ ដុល្លារ&nbsp;ឬសមមូល ៤០០,០០០រៀលដល់ ២៤,០០០,០០០រៀល</p>\r\n\r\n<p>&nbsp; &nbsp;- អត្រាការប្រាក់ &nbsp; : &nbsp; ទាបសមរម្យ</p>\r\n\r\n<p>&nbsp; &nbsp;- រយៈពេលកម្ចី &nbsp; &nbsp; : &nbsp; ចាប់ពី ០៦ខែ រហូតដល់ ៤៨ ខែ</p>\r\n\r\n<p>&nbsp; &nbsp;- របៀបសង &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; រំលស់ប្រាក់ដើម និងការប្រាក់ថេរជារៀងរាល់ខែ&nbsp;&nbsp;</p>\r\n\r\n<p><strong>លក្ខខណ្ឌក្នុងការទទួលប្រាក់កម្ចី</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- មានសញ្ជាតិខ្មែរ</p>\r\n\r\n<p>&nbsp; &nbsp;- អតិថិជនត្រូវមានអាយុចាប់ពី ១៨ឆ្នាំ រហូតដល់ ៦០ ឆ្នាំ</p>\r\n\r\n<p>&nbsp; &nbsp;- មានទីលំនៅច្បាស់លាស់</p>\r\n\r\n<p>&nbsp; &nbsp;- មានមុខរបរត្រឹមត្រូវស្របច្បាប់</p>\r\n\r\n<p>&nbsp; &nbsp;- មានលទ្ធភាពគ្រប់គ្រាន់</p>\r\n\r\n<p>&nbsp; &nbsp;- ពុំមានជាប់បទពិរុទ្ធផ្សេងៗ&nbsp;</p>\r\n\r\n<p><strong>ឯកសារដែលតម្រូវឲ្យមាន</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- ឯកសារកំណត់អត្តសញ្ញាណ (អត្តសញ្ញាណប័ណ្ណ , លិខិតឆ្លងដែន​​ , សៀវភៅគ្រួសារ , សៀវភៅស្នាក់នៅ , សំបុត្រកំណើត។ (ថតចម្លង)</p>\r\n\r\n<p>&nbsp; &nbsp;- ប័ណ្ណសម្គាល់យានយន្ត</p>\r\n\r\n<p>&nbsp; &nbsp;- ឯកសារផ្សេងៗ</p>\r\n\r\n<p>&nbsp; &nbsp;- លក្ខខណ្ឌផ្សេងៗត្រូវបានអនុវត្ត</p>', 4, 1, 'gAUqUURDP6M9b2XdIyVFWUvtBWZ5wJRypYWIgQxc.jpg', '2022-01-12 01:18:50', '2022-01-12 01:18:50'),
(5, 'Micro Loan', 'ឥណទានខ្នាតតូច', 'Micro Loan is loan given to customers who wish to expand their business or purchase consumables.', 'ឥណទានខ្នាត​តូច​ ​គឺជាឥណទាន​សម្រាប់ផ្តល់ជូនអតិថិជនដែលមានបំណងចង់ពង្រីកអាជីវកម្ម ឬ ទិញសម្ភារៈប្រើប្រាស់ផ្សេងៗ៕', '<p><strong>Credit Terms</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- Currency: USD or KHR</p>\r\n\r\n<p>&nbsp; &nbsp;- Loan size: from $ 100 up to $ 2,500, MARI or equivalent of 400,000 Riels to 10,000,000 Riels</p>\r\n\r\n<p>&nbsp; &nbsp;- Interest rate: Reasonably low</p>\r\n\r\n<p>&nbsp; &nbsp;- Loan term: From 6 months to 24 months</p>\r\n\r\n<p>&nbsp; &nbsp;- Repayment method: Installment of principal and fixed interest every month</p>\r\n\r\n<p><strong>Conditions for obtaining a loan</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- Have Khmer nationality</p>\r\n\r\n<p>&nbsp; &nbsp;- Customers must be between 18 and 60 years old.</p>\r\n\r\n<p>&nbsp; &nbsp;- Have a clear residence</p>\r\n\r\n<p>&nbsp; &nbsp;- Have a legitimate business</p>\r\n\r\n<p>&nbsp; &nbsp;- Adequate availability</p>\r\n\r\n<p>&nbsp; &nbsp;- No other offenses</p>\r\n\r\n<p><strong>Required Documents</strong></p>\r\n\r\n<p>&nbsp; &nbsp;-Identification documents (ID card, passport, family book, residence book, birth certificate. (Copy)</p>\r\n\r\n<p>&nbsp; &nbsp;- Vehicle ID</p>\r\n\r\n<p>&nbsp; &nbsp;- Other documents</p>\r\n\r\n<p>&nbsp; &nbsp;- Other conditions apply</p>', '<p><strong>លក្ខខណ្ឌក្នុងការផ្តល់ឥណទាន</strong>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;- រូបិយប័ណ្ណ &nbsp; &nbsp; &nbsp; &nbsp; ​ : &nbsp; ប្រាក់ដុល្លារអាមេរិក ឬប្រាក់រៀល</p>\r\n\r\n<p>&nbsp; &nbsp;- ទំហំប្រាក់កម្ចី &nbsp; &nbsp; : &nbsp; ចាប់ពី ១០០ ដុល្លារ រហូត​ដល់ ២,៥០០ ដុល្លារ&nbsp;ឬសមមូល ៤០០,០០០រៀលដល់ ១០,០០០,០០០រៀល</p>\r\n\r\n<p>&nbsp; &nbsp;- អត្រាការប្រាក់ &nbsp; : &nbsp; ទាបសមរម្យ</p>\r\n\r\n<p>&nbsp; &nbsp;- រយៈពេលកម្ចី &nbsp; &nbsp; : &nbsp; ចាប់ពី ០៦ខែ រហូតដល់ ២៤ ខែ</p>\r\n\r\n<p>&nbsp; &nbsp;- របៀបសង &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; រំលស់ប្រាក់ដើម និងការប្រាក់ថេរជារៀងរាល់ខែ&nbsp;&nbsp;</p>\r\n\r\n<p><strong>លក្ខខណ្ឌក្នុងការទទួលប្រាក់កម្ចី</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- មានសញ្ជាតិខ្មែរ</p>\r\n\r\n<p>&nbsp; &nbsp;- អតិថិជនត្រូវមានអាយុចាប់ពី ១៨ឆ្នាំ រហូតដល់ ៦០ ឆ្នាំ</p>\r\n\r\n<p>&nbsp; &nbsp;- មានទីលំនៅច្បាស់លាស់</p>\r\n\r\n<p>&nbsp; &nbsp;- មានមុខរបរត្រឹមត្រូវស្របច្បាប់</p>\r\n\r\n<p>&nbsp; &nbsp;- មានលទ្ធភាពគ្រប់គ្រាន់</p>\r\n\r\n<p>&nbsp; &nbsp;- ពុំមានជាប់បទពិរុទ្ធផ្សេងៗ&nbsp;</p>\r\n\r\n<p><strong>ឯកសារដែលតម្រូវឲ្យមាន</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- ឯកសារកំណត់អត្តសញ្ញាណ (អត្តសញ្ញាណប័ណ្ណ , លិខិតឆ្លងដែន​​ , សៀវភៅគ្រួសារ , សៀវភៅស្នាក់នៅ , សំបុត្រកំណើត។ (ថតចម្លង)</p>\r\n\r\n<p>&nbsp; &nbsp;- ប័ណ្ណសម្គាល់យានយន្ត</p>\r\n\r\n<p>&nbsp; &nbsp;- ឯកសារផ្សេងៗ</p>\r\n\r\n<p>&nbsp; &nbsp;- លក្ខខណ្ឌផ្សេងៗត្រូវបានអនុវត្ត</p>', 5, 1, '9GqOq06VXbhFhRLDYiFr7yxdmSD1rfJ9iuwrmCaZ.jpg', '2022-01-12 01:23:35', '2022-01-12 01:23:35'),
(6, 'Group Loan', 'ឥណទានក្រុមសាមគ្គី', 'Group Loan requires two or more family members. This loan provides target customers to use as capital for doing business and help generate income to improve the lives of customers.', 'ឥណទានក្រុម​សាមគ្គី គឺតម្រូវឲ្យមានសមាជិកគ្រួសារចាប់ពីពីរគ្រួសារឡើងទៅ​ ។ ឥណទាន​នេះផ្តល់ជូនអតិថិជនគោលដៅសម្រាប់ប្រើប្រាស់ជាដើមទុនក្នុងការប្រកបមុខរបរ និង ជួយបង្កើតប្រាក់ចំណូលដើម្បីធ្វើឲ្យជីវភាពរស់នៅរបស់អតិថិជនកាន់តែប្រសើរឡើង៕', '<p><strong>Credit Terms</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- Currency: USD or KHR</p>\r\n\r\n<p>&nbsp; &nbsp;- Loan size: from $ 1000 up to $ 2,000, MARI or equivalent of 400,000 Riels to 80,000,000 Riels</p>\r\n\r\n<p>&nbsp; &nbsp;- Interest rate: Reasonably low</p>\r\n\r\n<p>&nbsp; &nbsp;- Loan term: From 6 months to 12 months</p>\r\n\r\n<p>&nbsp; &nbsp;- Repayment method: Installment of principal and fixed interest every month</p>\r\n\r\n<p><strong>Conditions for obtaining a loan</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- Have Khmer nationality</p>\r\n\r\n<p>&nbsp; &nbsp;- Customers must be between 18 and 60 years old.</p>\r\n\r\n<p>&nbsp; &nbsp;- Have a clear residence</p>\r\n\r\n<p>&nbsp; &nbsp;- Have a legitimate business</p>\r\n\r\n<p>&nbsp; &nbsp;- Adequate availability</p>\r\n\r\n<p>&nbsp; &nbsp;- No other offenses</p>\r\n\r\n<p><strong>Required Documents</strong></p>\r\n\r\n<p>&nbsp; &nbsp;-Identification documents (ID card, passport, family book, residence book, birth certificate. (Copy)</p>\r\n\r\n<p>&nbsp; &nbsp;- Vehicle ID</p>\r\n\r\n<p>&nbsp; &nbsp;- Other documents</p>\r\n\r\n<p>&nbsp; &nbsp;- Other conditions apply</p>', '<p><strong>លក្ខខណ្ឌក្នុងការផ្តល់ឥណទាន</strong>&nbsp;</p>\r\n\r\n<p>&nbsp; &nbsp;- រូបិយប័ណ្ណ​​​​&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ​:&nbsp; ប្រាក់ដុល្លារអាមេរិក ឬប្រាក់រៀល</p>\r\n\r\n<p>&nbsp; &nbsp;- ទំហំប្រាក់កម្ចី&nbsp; &nbsp; &nbsp;: &nbsp; ចាប់ពី ១០០ ដុល្លារ រហូត​ដល់ ២,០០០ ដុល្លារ&nbsp;ឬសមមូល ៤០០,០០០រៀលដល់ ៨,០០០,០០០រៀល</p>\r\n\r\n<p>&nbsp; &nbsp;- អត្រាការប្រាក់ &nbsp; : &nbsp; ទាបសមរម្យ</p>\r\n\r\n<p>&nbsp; &nbsp;- រយៈពេលកម្ចី &nbsp; &nbsp; : &nbsp; ចាប់ពី ០៦ខែ រហូតដល់ ១២ ខែ</p>\r\n\r\n<p>&nbsp; &nbsp;- របៀបសង &nbsp; &nbsp; &nbsp; &nbsp; : &nbsp; រំលស់ប្រាក់ដើម និងការប្រាក់ថេរជារៀងរាល់ខែ&nbsp;&nbsp;</p>\r\n\r\n<p><strong>លក្ខខណ្ឌក្នុងការទទួលប្រាក់កម្ចី</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- មានសញ្ជាតិខ្មែរ</p>\r\n\r\n<p>&nbsp; &nbsp;- អតិថិជនត្រូវមានអាយុចាប់ពី ១៨ឆ្នាំ រហូតដល់ ៦០ ឆ្នាំ</p>\r\n\r\n<p>&nbsp; &nbsp;- មានទីលំនៅច្បាស់លាស់</p>\r\n\r\n<p>&nbsp; &nbsp;- មានមុខរបរត្រឹមត្រូវស្របច្បាប់</p>\r\n\r\n<p>&nbsp; &nbsp;- មានលទ្ធភាពគ្រប់គ្រាន់</p>\r\n\r\n<p>&nbsp; &nbsp;- ពុំមានជាប់បទពិរុទ្ធផ្សេងៗ&nbsp;</p>\r\n\r\n<p><strong>ឯកសារដែលតម្រូវឲ្យមាន</strong></p>\r\n\r\n<p>&nbsp; &nbsp;- ឯកសារកំណត់អត្តសញ្ញាណ (អត្តសញ្ញាណប័ណ្ណ , លិខិតឆ្លងដែន​​ , សៀវភៅគ្រួសារ , សៀវភៅស្នាក់នៅ , សំបុត្រកំណើត។ (ថតចម្លង)</p>\r\n\r\n<p>&nbsp; &nbsp;- ប័ណ្ណសម្គាល់យានយន្ត</p>\r\n\r\n<p>&nbsp; &nbsp;- ឯកសារផ្សេងៗ</p>\r\n\r\n<p>&nbsp; &nbsp;- លក្ខខណ្ឌផ្សេងៗត្រូវបានអនុវត្ត</p>', 6, 1, '9j7xByGBWfx9DWLcLUygeYx6lzFfm478N1nd1ozE.png', '2022-01-12 01:29:17', '2022-01-12 01:29:17');

-- --------------------------------------------------------

--
-- Table structure for table `loan_types`
--

CREATE TABLE `loan_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_kh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_kh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loan_types`
--

INSERT INTO `loan_types` (`id`, `title_en`, `title_kh`, `description_en`, `description_kh`, `created_at`, `updated_at`) VALUES
(1, 'Emergency Loan', 'ឥណទានបន្ទាន់', 'Emergency loans are loans that are provided to help clients who face immediate emergencies related to health, accident or death in the family.', 'ឥណទានបន្ទាន់ ​គឺជាឥណទាន​សម្រាប់ផ្តល់ជូនអតិថិជនដែលមានជួយអតិថិជនដែលប្រឈមនឹងបញ្ហាកើតឡើងភ្លាមៗ ពាក់ព័ន្ធនឹងសុខភាព គ្រោះថ្នាក់ ឬមរណៈភាពនៅក្នុងគ្រួសារ៕', '2022-01-11 21:40:50', '2022-01-11 22:02:11'),
(2, 'Individual Loan', 'ឥណទានបុគ្គល', 'Individual loan is a type of loan that is easy to provide to customers who have a business for personal or family use or to expand the business or create a business to increase income to improve family life, this loan does not require customers to have collateral.', 'ឥណទានបុគ្គល គឺជាប្រភេទឥណទានងាយស្រួលសម្រាប់ផ្ដល់ជូនអតិថិជនដែលមានអាជីវកម្ម សម្រាប់ប្រើប្រាស់ផ្ទាល់ខ្លួន ឬក្នុងគ្រួសារ ឬពង្រីកអាជីវកម្ម ឬបង្កើតមុខរបរ ដើម្បីបន្ថែមចំណូល ជួយលើកកម្ពស់ជីវភាពគ្រួសារ ដោយឥណទាននេះ មិនតម្រូវឲ្យអតិថិជនមានទ្រព្យសម្រាប់ដាក់ធានាឡើយ។', '2022-01-11 21:42:15', '2022-01-11 22:01:56'),
(3, 'Personal Loan', 'ឥណទានផ្ទាល់ខ្លួន', 'Personal loan is a type of loan provided to customers who need to purchase various consumables for personal use purposes.', 'ឥណទានប្រើប្រាស់ផ្ទាល់ខ្លួន គឺជាប្រភេទឥណទាន ផ្តល់ជូន អតិថិជនដែលមានតម្រូវ ការទិញសម្ភារប្រើប្រាស់ផ្សេងៗ ក្នុង គោលបំណងប្រើប្រាស់ផ្ទាល់ខ្លួន', '2022-01-11 21:45:40', '2022-01-11 22:01:38'),
(4, 'Civil Loan', 'ឥណទានមន្ត្រីរាជការ', 'Civil loan is a loan for customers who use the work of teachers, doctors, police.', 'ឥណទានមន្ត្រីរាជការ ​គឺជាឥណទាន​សម្រាប់ផ្តល់ជូនអតិថិជនដែលមប្រើការងារគ្រូបង្រៀន គ្រូពេទ្យ ប៉ូលិស ៕', '2022-01-11 21:47:02', '2022-01-11 22:01:22'),
(5, 'Micro Loan', 'ឥណទានខ្នាតតូច', 'Micro loans are loans given to customers who wish to expand their business or purchase consumables.', 'ឥណទានខ្នាត​តូច​ ​គឺជាឥណទាន​សម្រាប់ផ្តល់ជូនអតិថិជនដែលមានបំណងចង់ពង្រីកអាជីវកម្ម ឬ ទិញសម្ភារៈប្រើប្រាស់ផ្សេងៗ៕', '2022-01-11 21:49:22', '2022-01-11 22:01:09'),
(6, 'Group Loan', 'ឥណទានក្រុមសាមគ្គី', 'Solidarity Group Loan requires two or more family members. This loan provides target customers to use as capital for doing business and help generate income to improve the lives of customers.', 'ឥណទានក្រុម​សាមគ្គី គឺតម្រូវឲ្យមានសមាជិកគ្រួសារចាប់ពីពីរគ្រួសារឡើងទៅ​ ។ ឥណទាន​នេះផ្តល់ជូនអតិថិជនគោលដៅសម្រាប់ប្រើប្រាស់ជាដើមទុនក្នុងការប្រកបមុខរបរ និង ជួយបង្កើតប្រាក់ចំណូលដើម្បីធ្វើឲ្យជីវភាពរស់នៅរបស់អតិថិជនកាន់តែប្រសើរឡើង៕', '2022-01-11 21:50:34', '2022-01-11 21:50:34');

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
(4, '2021_03_23_052535_create_posts_table', 1),
(5, '2021_12_30_073352_add_khmer_language_to_posts', 1),
(6, '2021_12_31_023027_create_roles_table', 1),
(7, '2021_12_31_023143_create_permissions_table', 1),
(8, '2021_12_31_023236_create_departments_table', 1),
(9, '2021_12_31_023341_create_genders_table', 1),
(10, '2022_01_05_024656_create_loan_types_table', 1),
(11, '2022_01_06_015631_create_loans_table', 1),
(12, '2022_01_06_084055_create_news_table', 1),
(13, '2022_01_06_100404_create_reports_table', 1),
(14, '2022_01_10_023226_create_job_types_table', 1),
(15, '2022_01_10_035120_create_jobs_table', 1),
(16, '2022_01_11_012807_create_compliants_table', 1),
(17, '2022_01_11_013856_create_apply_loans_table', 1),
(18, '2022_01_11_014453_create_apply_jobs_table', 1),
(19, '2022_01_18_071311_create_notifications_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_kh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_en` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content_kh` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_en`, `title_kh`, `content_en`, `content_kh`, `id_user`, `image`, `created_at`, `updated_at`) VALUES
(1, 'You can apply for a civil servant loan up to $ 6,000 with Boribo Microfinance Institution Plc.', 'លោកអ្នកអាចស្នើសុំ ឥណទានមន្រ្តីរាជការរហូតដល់ 6,000 $ ជាមួយគ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ បរិបូរណ៍ ភីអិលស៊ី ។', '<p>You can apply for a civil servant loan up to $ 6,000 with Boribo Microfinance Institution Plc.<br />\r\nFor more information For more information:<br />\r\n087 86 85 88 | 087 81 82 15<br />\r\n* Conditions apply</p>', '<p>លោកអ្នកអាចស្នើសុំ ឥណទានមន្រ្តីរាជការរហូតដល់ 6,000 $ ជាមួយគ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ បរិបូរណ៍ ភីអិលស៊ី ។<br />\r\nសម្រាប់ព័ត៌មានលម្អិត For more information:<br />\r\n087​ 86 85 88 | 087 81 82 15<br />\r\n*លក្ខខណ្ឌផ្សេងៗត្រូវបានអនុវត្ត</p>', 1, '1KjJfU7sAzkNqwEYptbH7w8HWa4pNzysNBBHWP8S.jpg', '2022-01-12 01:49:52', '2022-01-12 01:49:52'),
(2, 'You can get a loan of up to $ 50,000 to expand your business. With simple conditions', 'លោកអ្នកអាចទទួលបានឥណទានរហូតដល់ ៥០០០០ ដុល្លារ ដើម្បីពង្រីកអាជីវកម្មលោកអ្នក ។ ជាមួយនិងលក្ខ ខណ្ឌងាយៗ', '<p>You can get a loan of up to $ 50,000 to expand your business. With simple conditions</p>', '<p>លោកអ្នកអាចទទួលបានឥណទានរហូតដល់ ៥០០០០ ដុល្លារ ដើម្បីពង្រីកអាជីវកម្មលោកអ្នក ។ ជាមួយនិងលក្ខ ខណ្ឌងាយៗ</p>', 1, 'FrBsLVF9ghZlkrcucuGBQoFW1F5zAaG1TVbEbyor.jpg', '2022-01-12 01:51:19', '2022-01-12 01:51:19'),
(3, 'With just a vehicle identification card, you can get a credit of up to $ 6,000.', 'គ្រាន់តែមានប័ណ្ណសំគាល់យានយន្តលោកអ្នកអាចទទួលបានឥណទានរហូតដល់ ៦.០០០ ដុល្លារ ។', '<p>With just a vehicle identification card, you can get a credit of up to $ 6,000.</p>', '<p>គ្រាន់តែមានប័ណ្ណសំគាល់យានយន្តលោកអ្នកអាចទទួលបានឥណទានរហូតដល់ ៦.០០០ ដុល្លារ ។</p>', 1, 'yAHFujGcxTCmTwCHxL6Fas7hdVHySRhiHAL7NEbC.jpg', '2022-01-12 01:52:24', '2022-01-12 01:52:24'),
(4, 'Celebrating the 13th Anniversary of the Inclusion of Preah Vihear Temple as a World Heritage Site July 07, 2008 to July 7, 2021', 'អបអរសាទរ ខួបទី១៣ នៃការបញ្ចូលប្រាសាទព្រះវិហារ ជាសម្បត្តិបេតិកភណ្ឌពិភពលោក ០៧​ កក្កដា​ ២០០៨​ ដល់​ ០៧​ កក្កដា​ ២០២១', '<p>Celebrating the 13th Anniversary of the Inclusion of Preah Vihear Temple as a World Heritage Site July 07, 2008 to July 7, 2021</p>', '<p>អបអរសាទរ ខួបទី១៣ នៃការបញ្ចូលប្រាសាទព្រះវិហារ ជាសម្បត្តិបេតិកភណ្ឌពិភពលោក ០៧​ កក្កដា​ ២០០៨​ ដល់​ ០៧​ កក្កដា​ ២០២១</p>', 1, 'qpd8B6EM5K6kzFzI24gKehUdIpPIZEwBwZLTXEPg.jpg', '2022-01-12 01:53:34', '2022-01-12 01:54:00'),
(5, 'Celebrating the 28th Anniversary of the Promulgation of the Constitution of the Kingdom of Cambodia (September 24, 1993 ~ September 24, 2018)', 'អបអរសាទរខួបលើកទី ២៨ឆ្នាំ ទិវាប្រកាសដាក់ឱ្យប្រើប្រាស់រដ្ឋធម្មនុញ្ញ នៃព្រះរាជាណាចក្រកម្ពុជា (២៤-កញ្ញា-១៩៩៣~២៤-កញ្ញា-២០២១)', '<p>a</p>', '<p>a</p>', 1, 'ZHExFamVogV3qZ8FHr1X5fPOIVj5BROy6kxzAPWi.jpg', '2022-01-12 01:59:05', '2022-01-12 01:59:05'),
(6, 'On the occasion of the upcoming Pchum Ben Festival, Boribo Microfinance Institution Plc. Will be closed for 3 days', 'ក្នុងឱកាស ពិធីបុណ្យភ្ជុំបិណ្ឌ ខាងមុខនេះ គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុបរិបូរណ៍ ភីអិលស៊ី នឹងឈប់សម្រាករយៈពេល 3 ថ្ងៃ', '<p>a</p>', '<p>a</p>', 1, 'v5di7YCwUDAzDSkSFGLeDrluZSALhHAfW4vhMJuP.jpg', '2022-01-12 02:01:09', '2022-01-12 02:01:09'),
(7, 'The Royal Government issued Sub-Decree No. 200 on the new model of 30,000 Riel banknote for circulation and use throughout the country.', 'រាជរដ្ឋាភិបាលចេញអនុក្រឹត្យលេខ២០០អនក្រ.បក អនុញ្ញាតដាក់ឲ្យចរាចរ និងប្រើប្រាស់ទូទាំងប្រទេស ក្រដាសប្រាក់ប្រភេទ៣០០០០រៀលគំរូថ្មី', '<p>a</p>', '<p>a</p>', 1, 'fcqrWABox2z4JtoKJ6f017vcTe9Go9rcGUKM0Yq7.jpg', '2022-01-12 02:02:58', '2022-01-12 02:02:58'),
(8, 'I bow to His Majesty King Norodom Sihamoni on the occasion of the 17th anniversary', 'សូមក្រាបបង្គំទូលថ្វាយ ព្រះករុណា សម្ដេចព្រះបរមនាថ នរោត្តម សីហមុនី ក្នុងឱកាសខួបលើកទី ១៧', '<p>I bow down to His Majesty King Norodom Sihamoni on the occasion of the 17th anniversary of the enthronement of His Majesty King Bhumibol Adulyadej. May the King be fit, in good health, strong in body, bright in intellect, and long-lived for more than a hundred years.</p>', '<p>សូមក្រាបបង្គំទូលថ្វាយ ព្រះករុណា សម្ដេចព្រះបរមនាថ នរោត្តម សីហមុនី ក្នុងឱកាសខួបលើកទី ១៧ ដ៏នក្ខត្តឫក្សនៃព្រះរាជពិធីគ្រងព្រះបរមរាជសម្បត្តិ នូវព្រះសព្ទសាធុការពរជ័យ សិរីមង្គល វិបុលសុខ បវរមហាប្រសើរគ្រប់ប្រការចំពោះព្រះករុណាថ្លៃវិសេសជាទីគោរពសក្ការៈដ៏ខ្ពង់ខ្ពស់បំផុត និងសូមព្រះអង្គទ្រង់សមប្រកបដោយព្រះរាជសុខភាពល្អបរិបូរណ៍ ព្រះកាយពលមាំមួន ព្រះបញ្ញាញាណភ្លឺថ្លា និងព្រះជន្មាយុយឺនយូរជាងរយព្រះវស្សា។</p>', 1, 'lhO3HLeMaNWMmdqEYEwZkZycXA8jHP0rmPebBUaB.jpg', '2022-01-12 02:04:37', '2022-01-12 02:04:37'),
(9, 'Celebrating the 68th Anniversary of National Independence Day, November 9, 1953 - November 9, 2021', 'អបអរសាទរខួបអនុស្សាវរីយ៍លើកទី៦៨ ទិវាបុណ្យឯករាជជាតិ ៩ វិច្ឆិកា ១៩៥៣ - ៩ វិច្ឆិកា ២០២១', '<p>Celebrating the 68th Anniversary of National Independence Day, November 9, 1953 - November 9, 2021</p>', '<p>អបអរសាទរខួបអនុស្សាវរីយ៍លើកទី៦៨ ទិវាបុណ្យឯករាជជាតិ ៩ វិច្ឆិកា ១៩៥៣ - ៩ វិច្ឆិកា ២០២១</p>', 1, 'LAuxUtfoSz6heKO0koiuk01WfgsAgRq3QvROVI6x.jpg', '2022-01-12 02:05:38', '2022-01-12 02:05:38'),
(10, 'You will become the owner of 2022 motorcycles immediately with your dreams.', 'លោកអ្នកនឹងក្លាយជាម្ចាស់ម៉ូតូស៊េរីឆ្នាំ ២០២២ ភ្លាមៗជាមួយក្ដីស្រមៃ៉របស់លោកអ្នក', '<p>You will become the owner of 2022 motorcycles immediately with your dreams.</p>', '<p>លោកអ្នកនឹងក្លាយជាម្ចាស់ម៉ូតូស៊េរីឆ្នាំ ២០២២ ភ្លាមៗជាមួយក្ដីស្រមៃ៉របស់លោកអ្នក</p>', 1, 'zbfvnC6RSngPcw16tPc3Vg89T9afPDt9Ee3fFXtn.jpg', '2022-01-12 02:06:40', '2022-01-12 02:06:40'),
(11, 'Water Festival, Floating Lanterns, Ok Ambok and Praying to God in 2021', 'ពិធីបុណ្យអុំទូក បណ្តែតប្រទីប អកអំបុក និងសំពះព្រះខែ ២០២១', '<p>On the occasion of the Water Festival, floating lanterns and worshiping the coming month, Boribo Microfinance Institution Plc. Is honored to inform its customers and the public that our institution will be closed for 3 days, on 18-19 November 20, 2021.<br />\r\nThe establishment will resume normal operations on November 22, 2021.</p>', '<p>នុងឪកាសពិធីបុណ្យអុំទូក បណ្តែតប្រទីប អកអំបុក និងសំពះព្រះខែ ខាងមុខនេះ គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ បរិបូរណ៍ ភីអិលស៊ី មានកិត្តិយសជូនដំណឹងដល់អតិថិជននិងសាធារណជនឲ្យបានជ្រាបថា គ្រឹះស្ថានយើងខ្ញុំនឹងឈប់សម្រាកចំនួន០៣ថ្ងៃ គឺថ្ងៃទី១៨-១៩-២០ ខែវិច្ឆិកា ឆ្នាំ២០២១។<br />\r\nគ្រឹះស្ថាននឹងចាប់ដំណើរការជាធម្មតាវិញនៅថ្ងៃទី ២២ ខែវិច្ឆិកា ឆ្នាំ២០២១។</p>', 1, 'RAkzyKYr7Of9NxjFKzaAQFkSqFzZxknnODbjLE5z.jpg', '2022-01-12 02:07:38', '2022-01-12 02:07:38'),
(12, 'Credit Principles Training for Credit Officers December 10, 2021', 'វគ្គបង្រៀនគោលការណ៍ឥណទាន ដល់បុគ្គលិក ផ្នែកមន្ត្រីឥណទាន ថ្ងៃទី១០ខែធ្នូឆ្នាំ២០២១', '<p>a</p>', '<p>a</p>', 1, '3lG7Bjedqc9LUR5MQAVaKBYEpCHcS4aISgKtggi9.jpg', '2022-01-12 02:08:37', '2022-01-12 02:08:37'),
(13, 'Celebrating the 26th Anniversary of the Inclusion of Angkor Wat as a World Heritage Site', 'អបអរសាទរ ខួបលើកទី២៦ នៃការដាក់បញ្ចូលប្រាសាទអង្គរវត្ត ជាសម្បត្តិបេតិកភណ្ឌពិភពលោក', '<p>a</p>', '<p>a</p>', 1, 'cmMeuTaMyPav0UXCJqXP390fOmHgbhKxzdHqdvi7.jpg', '2022-01-12 02:09:34', '2022-01-12 02:09:34'),
(14, 'Boribo Microfinance Plc. Organized a training course on: Credit Principles, Credit Products and Loan Evaluation', 'គ្រឹះស្ថានមីក្រូហិរញ្ញវត្ថុ បរិបូរណ៍​ ភីអិលស៊ី​ បានរៀបចំវគ្គបណ្តុះបណ្តាលស្តីពី៖ គោលការណ៍ឥណទាន ផលិតផលឥណទាន និងការវាយតម្លៃប្រាក់កម្ចី', '<p>a</p>', '<p>a</p>', 1, '5q5kThlhiuyhi7lW1lTkJg4jrCvZ8soFA3Pb5WgH.jpg', '2022-01-12 02:10:30', '2022-01-12 02:10:30'),
(15, 'Your Excellency, I would like to extend my best wishes to Lok Chumteav Kha Leng', 'សូមគោរពជូនពរបវរមហាប្រសើរជូនចំពោះ លោកជំទាវ​ ខា​ ឡេង', '<p>On the occasion of the Global New Year 2022, I, the management and staff of Boribo Microfinance Institution Plc., Would like to wish good health to Lok Chumteav Kha Leng Abundant longevity, wisdom and success in all tasks 🙏🙏</p>', '<p>ក្នុងឱកាសចូលឆ្នាំថ្មី ឆ្នាំសកល2022នេះ ខ្ញុំបាទគណៈគ្រប់គ្រង​ និងបុគ្គលិក​នៃ គ្រឹះស្ថាន​មីក្រូ​ហិរញ្ញ​វត្ថុ​ បរិបូរណ៍​ ភីអិលស៊ី សូមគោរពជូនពរបវរមហាប្រសើរជូនចំពោះ លោកជំទាវ​ ខា​ ឡេង សូមទទួលបាននូវសុខភាពល្អបរិបូណ៌ អាយុយឺនយូរ បញ្ញាឈ្លាសវៃ និងទទួលបានជោគជ័យគ្រប់ភារកិច្ច<img alt=\"🙏\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t80/1/16/1f64f.png\" width=\"16\" /><img alt=\"🙏\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/t80/1/16/1f64f.png\" width=\"16\" /></p>', 1, 'yPNoQ3jmG0e2ZUOoyX65cOUdf7h3zAcqLswTvEH5.jpg', '2022-01-12 02:11:55', '2022-01-12 02:11:55'),
(16, 'Happy New Year, Global Year 2022. Respectfully wish you all good luck, good health', 'សួស្ដី​ឆ្នាំថ្មី​ ឆ្នាំសកល​ ២០២២​.​ សូមគោរពជូនពរ​ បងប្អូន​ទាំងអស់​ ឲជួបតែសិរីសួស្ដី​ សំណាងល្អ​ សុខភាព​ល្អ', '<p>🙏🏻🧡 | Happy New Year, Global Year 01.01.2022. Please respectfully wish you all the best, good luck, good health, entertainment, near and far, be happy Safety, wishes, everything fits everyone&#39;s wishes, every family | 🙏🏻</p>', '<p><img alt=\"🙏🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tfb/1/16/1f64f_1f3fb.png\" width=\"16\" /><img alt=\"🧡\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tfd/1/16/1f9e1.png\" width=\"16\" />| សួស្ដី​ឆ្នាំថ្មី​ ឆ្នាំសកល​ ០១.០១.២០២២​.​ សូមគោរពជូនពរ​ បងប្អូន​ទាំងអស់​ ឲជួបតែសិរីសួស្ដី​ សំណាងល្អ​ សុខភាព​ល្អ​ ដំណេីកំសាន្តទីជិតទីឆ្ងាយ​ សូមប្រកបទៅដោយសុខសុវត្តិភាព​ ប៉ងប្រាថ្នា​អ្វី​ៗ​ សមប្រកបដូចបំណងគ្រប់ៗគ្នា​ គ្រប់ក្រុមគ្រួសារ​ |&nbsp;<img alt=\"🙏🏻\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/tfb/1/16/1f64f_1f3fb.png\" width=\"16\" /></p>', 1, 'IqhldO9qUiSFpIHD6K5Re5WqfDEKxHBBVIToI2Hi.jpg', '2022-01-12 02:13:16', '2022-01-12 02:13:16'),
(17, 'Celebrating the 43rd Anniversary of January 7 Victory Day (1979-2022)', 'អបអរសាទរ ខួបលើកទី៤៣ នៃទិវាជ័យជម្នះ ៧មករា ( ១៩៧៩-២០២២ )', '<p>a</p>', '<p>a</p>', 1, '5hN4K1YDZvOXe3ZBVk49OiRbusGyVbKIjztDZldA.jpg', '2022-01-12 02:13:56', '2022-01-12 02:13:56');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('01fe6c37-ed17-47d0-aa69-0779532d47b3', 'App\\Notifications\\ApplyJobNotification', 'App\\Models\\ApplyJob', 5, '{\"name\":\"Rotha\",\"email\":\"rotha@gmail.com\",\"id_job\":\"2\"}', NULL, '2022-01-18 22:06:12', '2022-01-18 22:06:12'),
('024a467d-882a-4c0e-af29-e8b2b11e77e5', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 7, '{\"name\":\"IT Department\",\"email\":null,\"id_loan_type\":\"4\"}', NULL, '2022-01-23 20:08:18', '2022-01-23 20:08:18'),
('02bf4727-d8e6-4477-8719-508901ee9275', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 14, '{\"name\":\"Rotha\",\"email\":null,\"id_loan_type\":\"6\"}', NULL, '2022-01-27 00:44:12', '2022-01-27 00:44:12'),
('091b1179-26a1-4233-9be0-59ef4f990a4b', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 21, '{\"name\":\"IT Department\",\"email\":null,\"id_loan_type\":\"3\"}', NULL, '2022-01-27 19:46:24', '2022-01-27 19:46:24'),
('1934a479-7cdf-4b20-95c9-90b61b5e0da9', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 25, '{\"name\":null,\"email\":\"tong@admin.com\",\"id_loan_type\":\"3\"}', NULL, '2022-01-31 19:48:47', '2022-01-31 19:48:47'),
('1b642076-e550-426a-b56a-1afe6a97e2ba', 'App\\Notifications\\ApplyLoanNotification', 'App\\Models\\ApplyLoan', 11, '{\"name\":\"tong say\",\"email\":\"tongsay@gmail.com\",\"id_job\":null}', NULL, '2022-01-18 19:13:53', '2022-01-18 19:13:53'),
('21eac07d-dcf7-43f0-9b85-95407248556d', 'App\\Notifications\\ApplyLoanNotification', 'App\\Models\\ApplyLoan', 14, '{\"name\":\"Villa\",\"email\":null,\"id_job\":null}', NULL, '2022-01-23 19:38:33', '2022-01-23 19:38:33'),
('288e6d3d-1c38-469f-9bdb-e37cc3d818cc', 'App\\Notifications\\ApplyJobNotification', 'App\\Models\\ApplyJob', 10, '{\"name\":\"So Da\",\"email\":null,\"id_job\":\"10\"}', NULL, '2022-01-27 20:01:38', '2022-01-27 20:01:38'),
('3413e367-542b-4e21-9f0e-88e1339631cf', 'App\\Notifications\\ApplyJobNotification', 'App\\Models\\ApplyJob', 9, '{\"name\":\"Laravel test\",\"email\":null,\"id_job\":\"10\"}', NULL, '2022-01-27 19:59:57', '2022-01-27 19:59:57'),
('3a3af09a-1951-4a02-8d95-555f833bc8d2', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 15, '{\"name\":\"Rotha\",\"email\":null,\"id_loan_type\":\"6\"}', NULL, '2022-01-27 00:44:35', '2022-01-27 00:44:35'),
('4607ba05-fa05-4632-90f8-d299ff66a71c', 'App\\Notifications\\ApplyLoanNotification', 'App\\Models\\ApplyLoan', 12, '{\"name\":\"So Da\",\"email\":\"admin123@gmail.com\",\"id_job\":null}', NULL, '2022-01-18 19:20:00', '2022-01-18 19:20:00'),
('464ab6d4-5e68-4b22-8a65-3d4ca30269f6', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 8, '{\"name\":\"IT Department\",\"email\":null,\"id_loan_type\":\"1\"}', NULL, '2022-01-23 20:09:13', '2022-01-23 20:09:13'),
('48788389-8466-4d35-86b0-f64b7382bff6', 'App\\Notifications\\ApplyJobNotification', 'App\\Models\\ApplyJob', 8, '{\"name\":\"tong say\",\"email\":null,\"id_job\":\"10\"}', NULL, '2022-01-27 19:57:48', '2022-01-27 19:57:48'),
('4986650a-2552-4a97-9002-1df3d0101421', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 19, '{\"name\":\"IT Department\",\"email\":null,\"id_loan_type\":\"3\"}', NULL, '2022-01-27 19:04:21', '2022-01-27 19:04:21'),
('4e6c9d81-e350-4272-bfc1-48401a09befc', 'App\\Notifications\\ApplyLoanNotification', 'App\\Models\\ApplyLoan', 18, '{\"name\":\"So Da\",\"email\":null,\"id_job\":null}', NULL, '2022-01-27 20:15:00', '2022-01-27 20:15:00'),
('510794d0-fdb7-4631-9fdc-8195d4ec7c89', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 18, '{\"name\":\"So D\",\"email\":null,\"id_loan_type\":\"4\"}', NULL, '2022-01-27 01:38:59', '2022-01-27 01:38:59'),
('513c6741-02bb-4f92-961c-aef42ad34a85', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 13, '{\"name\":\"Rotha\",\"email\":null,\"id_loan_type\":\"6\"}', NULL, '2022-01-27 00:43:53', '2022-01-27 00:43:53'),
('5d430516-8d88-4702-87b4-bb72d3c40178', 'App\\Notifications\\ApplyLoanNotification', 'App\\Models\\ApplyLoan', 16, '{\"name\":\"Sal\",\"email\":null,\"id_job\":null}', NULL, '2022-01-24 20:47:39', '2022-01-24 20:47:39'),
('6086b36b-7627-44a3-b289-a23dc23d8706', 'App\\Notifications\\ApplyJobNotification', 'App\\Models\\ApplyJob', 11, '{\"name\":\"Beat\",\"email\":null,\"id_job\":\"10\"}', NULL, '2022-01-27 20:04:20', '2022-01-27 20:04:20'),
('75ae49d8-f616-4911-9fb7-01e8e4ebfc87', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 17, '{\"name\":\"IT Department\",\"email\":null,\"id_loan_type\":\"4\"}', NULL, '2022-01-27 01:16:11', '2022-01-27 01:16:11'),
('892708e6-c3ac-474b-98b0-b0421d4db8fc', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 5, '{\"name\":\"tong say\",\"email\":\"tongsay@gmail.com\",\"id_loan_type\":\"1\"}', NULL, '2022-01-18 21:56:56', '2022-01-18 21:56:56'),
('9295477f-5ae1-4c50-88c5-9d47d3c018b4', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 26, '{\"name\":null,\"email\":null,\"id_loan_type\":\"4\"}', NULL, '2022-01-31 19:50:38', '2022-01-31 19:50:38'),
('9ef22e75-57d8-4e98-9ff5-798bcb6c5397', 'App\\Notifications\\ApplyLoanNotification', 'App\\Models\\ApplyLoan', 13, '{\"name\":\"Laravel test\",\"email\":\"Admin@admin.com\",\"id_job\":null}', NULL, '2022-01-21 02:46:55', '2022-01-21 02:46:55'),
('9f2709aa-c674-4548-9a86-c1b419889c0c', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 16, '{\"name\":\"Laravel test\",\"email\":null,\"id_loan_type\":\"3\"}', NULL, '2022-01-27 00:59:17', '2022-01-27 00:59:17'),
('ab2f0179-60aa-4cab-9104-50ed8a40248e', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 6, '{\"name\":\"So D\",\"email\":null,\"id_loan_type\":\"5\"}', NULL, '2022-01-23 19:56:18', '2022-01-23 19:56:18'),
('ac11a6d9-4375-4880-9054-65fea6f6fcd1', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 24, '{\"name\":null,\"email\":null,\"id_loan_type\":\"3\"}', NULL, '2022-01-31 19:45:27', '2022-01-31 19:45:27'),
('ba6bd70c-e52f-48a6-a9ab-0ab773f294e1', 'App\\Notifications\\ApplyJobNotification', 'App\\Models\\ApplyJob', 4, '{\"name\":\"So Da\",\"email\":\"soda@admin.com\",\"id_job\":\"1\"}', NULL, '2022-01-18 19:12:07', '2022-01-18 19:12:07'),
('bf262867-ad96-4704-8a1b-d5d2d292c8aa', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 12, '{\"name\":\"Sok Reaksa\",\"email\":null,\"id_loan_type\":\"3\"}', NULL, '2022-01-27 00:36:39', '2022-01-27 00:36:39'),
('c12ef3d6-9e2e-4b3b-a516-a1ebc08e819d', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 23, '{\"name\":\"Laravel test\",\"email\":null,\"id_loan_type\":\"3\"}', NULL, '2022-01-27 19:49:34', '2022-01-27 19:49:34'),
('c579b928-1be8-437f-b4e1-dbd5515eff32', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 10, '{\"name\":\"Bell\",\"email\":null,\"id_loan_type\":\"5\"}', NULL, '2022-01-23 20:28:15', '2022-01-23 20:28:15'),
('cfaa8604-228f-462d-b890-84d7b43ccf3f', 'App\\Notifications\\ApplyJobNotification', 'App\\Models\\ApplyJob', 6, '{\"name\":\"Villa\",\"email\":null,\"id_job\":\"8\"}', NULL, '2022-01-23 19:04:46', '2022-01-23 19:04:46'),
('d638a072-16a1-43b6-9ec7-9311d38bc2ff', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 11, '{\"name\":\"Sal\",\"email\":null,\"id_loan_type\":\"4\"}', NULL, '2022-01-24 18:46:51', '2022-01-24 18:46:51'),
('ead21744-a9de-4855-b8e9-1dd8922d8e0d', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 9, '{\"name\":\"IT Department\",\"email\":null,\"id_loan_type\":\"4\"}', NULL, '2022-01-23 20:15:17', '2022-01-23 20:15:17'),
('eb866f75-b8d7-4cc2-b098-b30d77cb6de3', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 20, '{\"name\":\"So D\",\"email\":null,\"id_loan_type\":\"4\"}', NULL, '2022-01-27 19:42:47', '2022-01-27 19:42:47'),
('ecbae40d-b111-4480-98a0-507b24a9c837', 'App\\Notifications\\ApplyJobNotification', 'App\\Models\\ApplyJob', 7, '{\"name\":\"\\u179f\\u17b6\\u1799\\u200b \\u178f\\u17bb\\u1784\",\"email\":null,\"id_job\":\"8\"}', NULL, '2022-01-23 19:11:32', '2022-01-23 19:11:32'),
('ef172669-cce5-4aaa-933c-e05536b4a40e', 'App\\Notifications\\ApplyLoanNotification', 'App\\Models\\ApplyLoan', 17, '{\"name\":\"Villa\",\"email\":null,\"id_job\":null}', NULL, '2022-01-27 20:13:45', '2022-01-27 20:13:45'),
('f0c8399d-50ba-42f0-83c1-78dba81bc11a', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 22, '{\"name\":\"Villa\",\"email\":null,\"id_loan_type\":\"1\"}', NULL, '2022-01-27 19:48:09', '2022-01-27 19:48:09'),
('f434716a-bc25-4296-8a75-9709fcf48071', 'App\\Notifications\\ApplyLoanNotification', 'App\\Models\\ApplyLoan', 15, '{\"name\":\"So Da\",\"email\":null,\"id_job\":null}', NULL, '2022-01-23 19:45:04', '2022-01-23 19:45:04'),
('f6654e0d-5a16-4843-a7a6-2b77e9b90d29', 'App\\Notifications\\CompliantNotification', 'App\\Models\\Compliant', 4, '{\"name\":\"So Da\",\"email\":\"admin@borribo.com.kh\",\"id_loan_type\":\"1\"}', NULL, '2022-01-18 19:50:48', '2022-01-18 19:50:48');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `role_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"department\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-delete\":\"1\",\"can-list\":\"1\"},\"role\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-delete\":\"1\",\"can-list\":\"1\"},\"permission\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-delete\":\"1\",\"can-list\":\"1\"},\"user\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-delete\":\"1\",\"can-list\":\"1\"},\"loantype\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-delete\":\"1\",\"can-list\":\"1\"},\"loan\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-delete\":\"1\",\"can-list\":\"1\"},\"applyloan\":{\"can-view\":\"1\",\"can-list\":\"1\"},\"news\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-delete\":\"1\",\"can-list\":\"1\"},\"report\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-delete\":\"1\",\"can-list\":\"1\"},\"jobtype\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-delete\":\"1\",\"can-list\":\"1\"},\"job\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-delete\":\"1\",\"can-list\":\"1\"},\"applyjob\":{\"can-view\":\"1\",\"can-list\":\"1\"},\"compliant\":{\"can-view\":\"1\",\"can-list\":\"1\"},\"leave\":{\"can-list\":\"1\"}}', NULL, NULL),
(2, 2, '{\"user\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-list\":\"1\"}}', NULL, '2022-01-21 02:05:27'),
(3, 3, '{\"department\":{\"can-add\":\"1\",\"can-view\":\"1\",\"can-list\":\"1\"},\"jobtype\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-list\":\"1\"},\"job\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-list\":\"1\"},\"applyjob\":{\"can-view\":\"1\",\"can-list\":\"1\"}}', '2022-01-21 01:54:03', '2022-01-26 21:44:25'),
(4, 4, '{\"compliant\":{\"can-view\":\"1\",\"can-list\":\"1\"}}', '2022-01-21 02:00:42', '2022-01-21 02:00:42'),
(5, 5, '{\"loantype\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-list\":\"1\"},\"loan\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-list\":\"1\"},\"applyloan\":{\"can-view\":\"1\",\"can-list\":\"1\"},\"news\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-view\":\"1\",\"can-list\":\"1\"},\"report\":{\"can-add\":\"1\",\"can-edit\":\"1\",\"can-list\":\"1\"}}', '2022-01-26 21:46:24', '2022-01-26 21:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_text_en` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title_kh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `full_text_kh` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title_kh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `title_en`, `title_kh`, `image`, `file`, `id_user`, `created_at`, `updated_at`) VALUES
(1, 'Annual Report 2014', 'របាយការណ៍ប្រចាំឆ្នាំ២០១៤', 'kvUhwoRW58tkr45TTNS6iolq47xOqRIAxusGOCXb.png', '1641977007_annual_report_2019.png', 1, '2022-01-12 01:43:27', '2022-01-12 01:43:27'),
(2, 'Annual Report 2015', 'របាយការណ៍ប្រចាំឆ្នាំ២០១៥', 'kgOxSiW6cRzpLXtwWldfjb2d3CltmAxLvOIzbXJn.jpg', '1641977041_annual_report_2020.jpg', 1, '2022-01-12 01:44:01', '2022-01-12 01:44:01'),
(3, 'Annual Report 2016', 'របាយការណ៍ប្រចាំឆ្នាំ២០១៦', 'UV9IXo3cL8QGDSlDdpeDlV8ZLDEsqzaKBWjriyPx.png', '1641977063_annual_report_2019.png', 1, '2022-01-12 01:44:23', '2022-01-12 01:44:23'),
(4, 'Annual Report 2017', 'របាយការណ៍ប្រចាំឆ្នាំ២០១៧', 'J7qe75Xpbh40eDm4qkhJTs2lFRY2bGEEiDCECIRh.jpg', '1641977091_annual_report_2020.jpg', 1, '2022-01-12 01:44:51', '2022-01-12 01:44:51'),
(5, 'Annual Report 2018', 'របាយការណ៍ប្រចាំឆ្នាំ២០១៨', 'esbf5zckNItkEKGW84fHQ1jjxquRq7hI1d4PNqFE.png', '1641977115_annual_report_2019.png', 1, '2022-01-12 01:45:15', '2022-01-12 01:45:15'),
(6, 'Annual Report 2019', 'របាយការណ៍ប្រចាំឆ្នាំ២០១៩', '0ManMkYJ11h34SNLlwpn6lqp8ubsIvvD2wh2Xpw1.png', '1641977137_annual_report_2019.png', 1, '2022-01-12 01:45:37', '2022-01-12 01:45:37'),
(7, 'Annual Report 2020', 'របាយការណ៍ប្រចាំឆ្នាំ២០២០', 'MY3Ow9N8OoMDUsnBKWrrPrWjhQCe7LpduZeNZ2KW.jpg', '1641977160_annual_report_2020.jpg', 1, '2022-01-12 01:46:00', '2022-01-12 01:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'Root', NULL, NULL, NULL),
(3, 'HR', NULL, '2022-01-21 01:52:21', '2022-01-21 01:52:21'),
(4, 'Compliant', NULL, '2022-01-21 01:59:47', '2022-01-21 01:59:47'),
(5, 'Operation', NULL, '2022-01-26 21:39:49', '2022-01-26 21:43:29');

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
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_from` date NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `address`, `mobile_number`, `department_id`, `role_id`, `designation`, `start_from`, `image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@borribo.com.kh', NULL, '$2y$10$EALbfVKm0yifTR7NbBcAl.m9bsRE500w8KFa10vSzJgCYzNHom42i', NULL, NULL, 1, 1, 'CEO', '2021-09-14', 'avatar.png', 'kGuU5mdtzyHWIJiSPm79F4fPNGq1dW7kTOx4xX9biXshadSGDNaw2ENMS6Qs', NULL, NULL),
(2, 'Say Tong', 'saytong@borribo.com.kh', NULL, '$2y$10$ataqEiglX6RyyfTyl.rvBOvjJekvs5q/rCpKlWwUbetKpBdyjEHn.', NULL, NULL, 1, 2, 'User', '2021-09-14', 'avatar.png', NULL, NULL, NULL),
(3, 'HR Borribo', 'hr@borribo.com.kh', NULL, '$2y$10$BMdGDssozmhZv5B6v9t5DO4EIMatBam6M4GGFuFVpsaTEZ6eflnDi', NULL, NULL, 2, 3, 'HR Manager', '2022-01-21', 'rCcpcUb13Up2qhvUitEj0to1xHdoX1SeXU0akSJi.jpg', NULL, '2022-01-21 01:58:21', '2022-01-26 21:56:38'),
(4, 'Compliant Borribo', 'compliant@borribo.com.kh', NULL, '$2y$10$C496yl24Z.f46tNqmzc3c.em8esxdaXOr5W2OYljl6x6020sCnRXy', NULL, NULL, 3, 4, 'Manager Compliant', '2022-01-21', 'fmC2eGF6FJ5JGh0TASeRCpIMqHMhCWurPifBRHYl.png', NULL, '2022-01-21 02:03:39', '2022-01-26 21:58:58'),
(5, 'Operation Borribo', 'operation@borribo.com.kh', NULL, '$2y$10$aTYmvwDlkSgoqCBoFbkdeuPj3sSHERJ1t4Pt.31C6Xc0YAT0uf2US', NULL, NULL, 1, 1, 'Operation', '2022-01-27', 'NzKCFbhJ0csG7QR5MEzHi6MS4hkbsUvTnVfOmZhn.jpg', NULL, '2022-01-26 21:49:03', '2022-01-26 21:59:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_jobs`
--
ALTER TABLE `apply_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `apply_loans`
--
ALTER TABLE `apply_loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compliants`
--
ALTER TABLE `compliants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `genders`
--
ALTER TABLE `genders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_types`
--
ALTER TABLE `job_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loans`
--
ALTER TABLE `loans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan_types`
--
ALTER TABLE `loan_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `apply_jobs`
--
ALTER TABLE `apply_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `apply_loans`
--
ALTER TABLE `apply_loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `compliants`
--
ALTER TABLE `compliants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `genders`
--
ALTER TABLE `genders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `job_types`
--
ALTER TABLE `job_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loans`
--
ALTER TABLE `loans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `loan_types`
--
ALTER TABLE `loan_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
