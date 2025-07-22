-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2025 at 02:54 AM
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
-- Database: `noon_o_kabab_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `open_time` time NOT NULL,
  `close_time` time NOT NULL,
  `code` varchar(255) NOT NULL,
  `lunch_time_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `name`, `country`, `state`, `city`, `zip`, `address`, `contact`, `open_time`, `close_time`, `code`, `lunch_time_id`, `created_at`, `updated_at`) VALUES
(2, 'LincolnWood', 'USA', 'Alabama', 'NewYork', '232242', 'aasdfsefd#233', '0332313423', '06:00:00', '18:30:46', '#3424Ab', 2, '2025-07-04 19:05:46', '2025-07-22 01:25:10'),
(3, 'Albany Park', 'USA', 'Chicago', 'Gay fort', '2323', 'fljsdfk#234', '03308425176', '07:00:00', '17:30:20', '#3w323', 1, '2025-07-04 19:14:36', '2025-07-21 23:33:10'),
(4, 'Vinewood', 'Pakistan', 'Los Santos', 'karachi', '75850', 'Flat E-16 Saleem Center North Karachi Sector 11-I', '03308425176', '17:46:00', '18:46:00', '322334', 1, '2025-07-19 07:16:17', '2025-07-19 07:16:17'),
(10, 'Indigo Raymond', 'Dolorem tenetur dolo', 'Nesciunt eos minima', 'Amet modi ipsa rei', '48506', 'Pariatur Et est vol', '55', '08:21:00', '03:04:00', 'Velit sed dolorem e', 3, '2025-07-22 02:52:05', '2025-07-22 02:52:05');

-- --------------------------------------------------------

--
-- Table structure for table `branch_category`
--

CREATE TABLE `branch_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branch_category`
--

INSERT INTO `branch_category` (`id`, `branch_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2025-07-04 19:15:45', '2025-07-04 19:15:45'),
(2, 2, 3, '2025-07-04 19:15:45', '2025-07-04 19:15:45'),
(3, 2, 2, '2025-07-04 19:16:19', '2025-07-04 19:16:19'),
(5, 3, 2, '2025-07-04 19:16:50', '2025-07-04 19:16:50'),
(6, 3, 3, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 10, 2, NULL, NULL),
(10, 10, 4, NULL, NULL),
(11, 10, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'APPETIZERS', '2025-07-04 07:17:58', '2025-07-04 07:17:58'),
(2, 'ENTRéE', '2025-07-04 07:17:58', '2025-07-04 07:17:58'),
(3, 'BEVERAGES', '2025-07-04 07:17:58', '2025-07-04 07:17:58'),
(4, 'SOUPS & SALADS', '2025-07-04 07:17:58', '2025-07-04 07:17:58'),
(5, 'INDIVIDUAL SKEWERS', '2025-07-04 07:17:58', '2025-07-04 07:17:58'),
(7, 'Family Platter', '2025-07-19 04:00:31', '2025-07-19 04:00:31');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(1, '8 ounce Creamy Garlic Sauce', 3, '2025-07-10 22:57:17', '2025-07-10 22:57:17'),
(2, '8oz Tahini Sauce', 3, '2025-07-10 22:57:18', '2025-07-10 22:57:18'),
(3, 'White Rice (Side)', 6, '2025-07-10 22:58:50', '2025-07-10 22:58:50');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_menu`
--

CREATE TABLE `ingredient_menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ingredient_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ingredient_menu`
--

INSERT INTO `ingredient_menu` (`id`, `ingredient_id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 1, 3, '2025-07-10 23:01:08', '2025-07-10 23:01:08'),
(2, 2, 3, '2025-07-10 23:01:08', '2025-07-10 23:01:08'),
(3, 3, 3, '2025-07-10 23:02:05', '2025-07-10 23:02:05');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_menu_order`
--

CREATE TABLE `ingredient_menu_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_order_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ingredient_menu_order`
--

INSERT INTO `ingredient_menu_order` (`id`, `menu_order_id`, `name`, `price`, `created_at`, `updated_at`) VALUES
(4, 22, '8 ounce Creamy Garlic Sauce', 3, '2025-07-17 07:23:25', '2025-07-17 07:23:25'),
(5, 22, '8oz Tahini Sauce', 3, '2025-07-17 07:23:25', '2025-07-17 07:23:25'),
(6, 22, 'White Rice (Side)', 6, '2025-07-17 07:23:25', '2025-07-17 07:23:25'),
(7, 24, '8 ounce Creamy Garlic Sauce', 3, '2025-07-17 07:45:52', '2025-07-17 07:45:52'),
(8, 24, '8oz Tahini Sauce', 3, '2025-07-17 07:45:52', '2025-07-17 07:45:52'),
(9, 24, 'White Rice (Side)', 6, '2025-07-17 07:45:52', '2025-07-17 07:45:52');

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
-- Table structure for table `lunch_times`
--

CREATE TABLE `lunch_times` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `from` time NOT NULL,
  `to` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lunch_times`
--

INSERT INTO `lunch_times` (`id`, `from`, `to`, `created_at`, `updated_at`) VALUES
(1, '13:00:00', '15:00:00', '2025-07-04 18:54:46', '2025-07-04 18:54:46'),
(2, '13:54:46', '14:30:46', '2025-07-04 18:54:46', '2025-07-19 05:36:11'),
(3, '14:36:00', '17:35:00', '2025-07-19 04:39:02', '2025-07-19 04:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `image` text DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `regular` tinyint(1) DEFAULT NULL,
  `lunch_time` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `category_id`, `branch_id`, `image`, `name`, `description`, `price`, `regular`, `lunch_time`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '', 'ONE SKEWER JOUJEH KOUBIDEH KABAB', 'asdsdfsfasdfasdfasd', 120, 1, 1, '2025-07-07 16:56:37', '2025-07-07 16:56:37'),
(2, 2, 3, '', 'Vegetable Spring Rolls', 'Crispy fried rolls filled with fresh mixed vegetables, served with sweet chili sauce', 85.75, 1, 1, '2025-07-07 17:15:00', '2025-07-07 17:15:00'),
(3, 3, 2, '', 'Spicy Chicken Burger', 'Grilled chicken patty with jalapeños and special sauce', 350.5, 1, 0, '2025-07-06 21:30:00', '2025-07-06 21:30:00'),
(4, 4, 3, '1753136442.jpg', 'Joujeh in the Garden', 'Omnis consequatur al', 528, 1, 1, '2025-07-22 05:20:42', '2025-07-22 05:20:42'),
(5, 3, 2, '1753136537.jpg', 'Pepsi', 'asdfasdf', 2323, 1, 1, '2025-07-22 05:22:17', '2025-07-22 05:22:17'),
(6, 3, 2, '1753136578.jpg', '7Up', 'dsfasd', 232, 1, 0, '2025-07-22 05:22:58', '2025-07-22 05:22:58'),
(7, 4, 4, '1753138017.jpg', 'Persian Salad', 'sdafasd', 60, 1, 1, '2025-07-22 05:25:27', '2025-07-22 05:46:57'),
(8, 1, 2, '1753136767.jpg', 'Lentil Saffron Soup', 'sdafas', 121, 0, 0, '2025-07-22 05:26:07', '2025-07-22 05:26:07'),
(9, 3, 3, '1753136861.jpg', 'Kashk-E-Bademjan [L]', 'dsfasdfasdfsdfasdfdfaf', 120, 0, 1, '2025-07-22 05:27:41', '2025-07-22 05:47:13');

-- --------------------------------------------------------

--
-- Table structure for table `menu_order`
--

CREATE TABLE `menu_order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `total_price` double NOT NULL,
  `quantity` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_order`
--

INSERT INTO `menu_order` (`id`, `order_id`, `menu_id`, `name`, `price`, `total_price`, `quantity`, `category`, `created_at`, `updated_at`) VALUES
(19, 16, 1, 'ONE SKEWER JOUJEH KOUBIDEH KABAB', 120, 360, 3, 'APPETIZERS', '2025-07-17 07:20:44', '2025-07-17 07:20:44'),
(20, 16, 3, 'Spicy Chicken Burger', 350.5, 725, 2, 'BEVERAGES', '2025-07-17 07:20:44', '2025-07-17 07:20:44'),
(21, 17, 1, 'ONE SKEWER JOUJEH KOUBIDEH KABAB', 120, 360, 3, 'APPETIZERS', '2025-07-17 07:23:25', '2025-07-17 07:23:25'),
(22, 17, 3, 'Spicy Chicken Burger', 350.5, 725, 2, 'BEVERAGES', '2025-07-17 07:23:25', '2025-07-17 07:23:25'),
(23, 18, 1, 'ONE SKEWER JOUJEH KOUBIDEH KABAB', 120, 360, 3, 'APPETIZERS', '2025-07-17 07:45:52', '2025-07-17 07:45:52'),
(24, 18, 3, 'Spicy Chicken Burger', 350.5, 725, 2, 'BEVERAGES', '2025-07-17 07:45:52', '2025-07-17 07:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `menu_order_sideline`
--

CREATE TABLE `menu_order_sideline` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_order_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_order_sideline`
--

INSERT INTO `menu_order_sideline` (`id`, `menu_order_id`, `name`, `option`, `created_at`, `updated_at`) VALUES
(1, 23, 'COOKING LEVEL(Optional)', 'Medium Rare', NULL, NULL),
(2, 23, 'Platter Rice (Compulsory)', 'Dill Rice', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_sideline`
--

CREATE TABLE `menu_sideline` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu_id` bigint(20) UNSIGNED NOT NULL,
  `sideline_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_sideline`
--

INSERT INTO `menu_sideline` (`id`, `menu_id`, `sideline_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2025-07-09 23:17:59', '2025-07-09 23:17:59'),
(2, 1, 2, '2025-07-09 23:17:59', '2025-07-09 23:17:59');

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
(4, '2025_07_03_211851_create_branches_table', 1),
(5, '2025_07_03_212430_create_lunch_times_table', 1),
(6, '2025_07_03_222443_create_categories_table', 1),
(7, '2025_07_03_222624_create_menus_table', 1),
(8, '2025_07_03_222920_create_orders_table', 1),
(9, '2025_07_03_222937_create_menu_order_table', 1),
(10, '2025_07_03_225458_create_contacts_table', 1),
(11, '2025_07_03_225712_create_reservations_table', 1),
(12, '2025_07_03_232920_add_foreign_key_column_to_branches_table', 1),
(13, '2025_07_04_181157_create_sidelines_table', 2),
(14, '2025_07_04_181255_create_options_table', 2),
(15, '2025_07_04_181509_create_ingredients_table', 2),
(16, '2025_07_04_181656_create_ingredient_menu_table', 2),
(17, '2025_07_04_182200_create_branch_category_table', 2),
(18, '2025_07_04_182405_create_menu_sideline_table', 2),
(19, '2025_07_04_183346_create_ingredient_menu_order_table', 2),
(20, '2025_07_17_003957_create_menu_order_sideline_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE `options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `sideline_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `name`, `sideline_id`, `created_at`, `updated_at`) VALUES
(10, 'Half & Half Rice', 2, '2025-07-09 23:56:59', '2025-07-09 23:56:59'),
(11, 'Dill Rice', 2, '2025-07-09 23:57:56', '2025-07-09 23:57:56'),
(12, 'Adass-Polo', 2, '2025-07-09 23:57:56', '2025-07-09 23:57:56'),
(13, 'Zereshk-Polo', 2, '2025-07-10 00:03:20', '2025-07-10 00:03:20'),
(14, 'Shirin-Polo', 2, '2025-07-10 00:03:20', '2025-07-10 00:03:20'),
(15, 'Incidunt vel iste f', 3, '2025-07-22 07:10:13', '2025-07-22 07:10:13'),
(16, 'Similique dolor offi', 3, '2025-07-22 07:10:13', '2025-07-22 07:10:13'),
(17, 'Optio recusandae Q', 3, '2025-07-22 07:10:13', '2025-07-22 07:10:13'),
(18, 'Sit occaecat omnis', 3, '2025-07-22 07:10:13', '2025-07-22 07:10:13'),
(19, 'Obcaecati nulla cons', 4, '2025-07-22 07:10:43', '2025-07-22 07:10:43'),
(20, 'Aspernatur sint dign', 4, '2025-07-22 07:10:43', '2025-07-22 07:10:43'),
(21, 'Illo minus praesenti', 4, '2025-07-22 07:10:43', '2025-07-22 07:10:43'),
(22, 'Nam minima quo minim', 4, '2025-07-22 07:10:43', '2025-07-22 07:10:43'),
(23, 'Medium Rare', 1, '2025-07-22 07:51:09', '2025-07-22 07:51:09'),
(24, 'Well Done', 1, '2025-07-22 07:51:09', '2025-07-22 07:51:09');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `time` time NOT NULL,
  `schedule` date NOT NULL,
  `type` varchar(255) NOT NULL,
  `delivery_address` varchar(255) DEFAULT NULL,
  `floor` varchar(255) DEFAULT NULL,
  `sub_total` double NOT NULL,
  `total` double NOT NULL,
  `gratuity` float DEFAULT NULL,
  `discount_code` varchar(255) DEFAULT NULL,
  `discount_price` double DEFAULT NULL,
  `pickup_point` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `name`, `phone`, `time`, `schedule`, `type`, `delivery_address`, `floor`, `sub_total`, `total`, `gratuity`, `discount_code`, `discount_price`, `pickup_point`, `created_at`, `updated_at`) VALUES
(16, 2, 'Dean Britt', '523', '10:05:00', '2025-07-22', 'Pickup', NULL, NULL, 1085, 1085, 108.5, 'Vitae quo magni dolo', NULL, NULL, '2025-07-17 07:20:44', '2025-07-17 07:20:44'),
(17, 2, 'Dean Britt', '523', '10:05:00', '2025-07-22', 'Pickup', NULL, NULL, 1085, 1085, 108.5, 'Vitae quo magni dolo', NULL, NULL, '2025-07-17 07:23:25', '2025-07-17 07:23:25'),
(18, 2, 'Harriet Barrera', '947', '06:40:00', '2025-07-22', 'Pickup', NULL, NULL, 1085, 1085, 260.4, 'Et culpa est omnis', NULL, NULL, '2025-07-17 07:45:52', '2025-07-17 07:45:52');

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
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `persons` varchar(255) NOT NULL,
  `branch_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `sidelines`
--

CREATE TABLE `sidelines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sidelines`
--

INSERT INTO `sidelines` (`id`, `name`, `option`, `created_at`, `updated_at`) VALUES
(1, 'COOKING LEVEL(Optional)', 'Optional', '2025-07-04 23:29:21', '2025-07-04 23:29:21'),
(2, 'Platter Rice (Compulsory)', 'Compulsory', '2025-07-09 23:16:19', '2025-07-09 23:16:19'),
(3, 'Eu elit laborum De', 'Compulsory', '2025-07-22 07:10:13', '2025-07-22 07:10:13'),
(4, 'Nemo explicabo Dolo', 'Optional', '2025-07-22 07:10:43', '2025-07-22 07:10:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '03308434344', 'admin', NULL, '$2y$12$gKBYrUwjjZETOWAhr2xWIevfA5VjyB136.6uFwttwl.mNJ573qxAi', NULL, NULL, NULL),
(2, 'Shelley Cochran', 'cedudup@mailinator.com', '30232323232', 'user', NULL, '$2y$12$sIq4HXPq6vsCfwUBF2NA3uyE6cvlvOJMRz8SzLTx0aAFRDvx1swGK', NULL, '2025-07-05 02:51:11', '2025-07-05 02:51:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branches_lunch_time_id_foreign` (`lunch_time_id`);

--
-- Indexes for table `branch_category`
--
ALTER TABLE `branch_category`
  ADD PRIMARY KEY (`id`),
  ADD KEY `branch_category_branch_id_foreign` (`branch_id`),
  ADD KEY `branch_category_category_id_foreign` (`category_id`);

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
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredient_menu`
--
ALTER TABLE `ingredient_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingredient_menu_ingredient_id_foreign` (`ingredient_id`),
  ADD KEY `ingredient_menu_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `ingredient_menu_order`
--
ALTER TABLE `ingredient_menu_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingredient_menu_order_menu_order_id_foreign` (`menu_order_id`);

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
-- Indexes for table `lunch_times`
--
ALTER TABLE `lunch_times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menus_category_id_foreign` (`category_id`),
  ADD KEY `menus_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `menu_order`
--
ALTER TABLE `menu_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_order_order_id_foreign` (`order_id`),
  ADD KEY `menu_order_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `menu_order_sideline`
--
ALTER TABLE `menu_order_sideline`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_order_sideline_menu_order_id_foreign` (`menu_order_id`);

--
-- Indexes for table `menu_sideline`
--
ALTER TABLE `menu_sideline`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_sideline_menu_id_foreign` (`menu_id`),
  ADD KEY `menu_sideline_sideline_id_foreign` (`sideline_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `options`
--
ALTER TABLE `options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `options_sideline_id_foreign` (`sideline_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservations_user_id_foreign` (`user_id`),
  ADD KEY `reservations_branch_id_foreign` (`branch_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `sidelines`
--
ALTER TABLE `sidelines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `branch_category`
--
ALTER TABLE `branch_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ingredient_menu`
--
ALTER TABLE `ingredient_menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ingredient_menu_order`
--
ALTER TABLE `ingredient_menu_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lunch_times`
--
ALTER TABLE `lunch_times`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu_order`
--
ALTER TABLE `menu_order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `menu_order_sideline`
--
ALTER TABLE `menu_order_sideline`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `menu_sideline`
--
ALTER TABLE `menu_sideline`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `options`
--
ALTER TABLE `options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sidelines`
--
ALTER TABLE `sidelines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branches`
--
ALTER TABLE `branches`
  ADD CONSTRAINT `branches_lunch_time_id_foreign` FOREIGN KEY (`lunch_time_id`) REFERENCES `lunch_times` (`id`);

--
-- Constraints for table `branch_category`
--
ALTER TABLE `branch_category`
  ADD CONSTRAINT `branch_category_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`),
  ADD CONSTRAINT `branch_category_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `ingredient_menu`
--
ALTER TABLE `ingredient_menu`
  ADD CONSTRAINT `ingredient_menu_ingredient_id_foreign` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`),
  ADD CONSTRAINT `ingredient_menu_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`);

--
-- Constraints for table `ingredient_menu_order`
--
ALTER TABLE `ingredient_menu_order`
  ADD CONSTRAINT `ingredient_menu_order_menu_order_id_foreign` FOREIGN KEY (`menu_order_id`) REFERENCES `menu_order` (`id`);

--
-- Constraints for table `menus`
--
ALTER TABLE `menus`
  ADD CONSTRAINT `menus_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`),
  ADD CONSTRAINT `menus_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `menu_order`
--
ALTER TABLE `menu_order`
  ADD CONSTRAINT `menu_order_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `menu_order_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `menu_order_sideline`
--
ALTER TABLE `menu_order_sideline`
  ADD CONSTRAINT `menu_order_sideline_menu_order_id_foreign` FOREIGN KEY (`menu_order_id`) REFERENCES `menu_order` (`id`);

--
-- Constraints for table `menu_sideline`
--
ALTER TABLE `menu_sideline`
  ADD CONSTRAINT `menu_sideline_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`),
  ADD CONSTRAINT `menu_sideline_sideline_id_foreign` FOREIGN KEY (`sideline_id`) REFERENCES `sidelines` (`id`);

--
-- Constraints for table `options`
--
ALTER TABLE `options`
  ADD CONSTRAINT `options_sideline_id_foreign` FOREIGN KEY (`sideline_id`) REFERENCES `sidelines` (`id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_branch_id_foreign` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`id`),
  ADD CONSTRAINT `reservations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
