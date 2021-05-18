-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 03:25 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `color_images`
--

CREATE TABLE `color_images` (
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `img_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color_images`
--

INSERT INTO `color_images` (`color_id`, `product_id`, `img_name`, `created_at`, `updated_at`) VALUES
(4, 63, '1-1-1620035473.jpg', NULL, NULL),
(5, 63, '2-1-1620035473.jpg', NULL, NULL),
(11, 69, '1-1-1620625987.jpg', NULL, NULL),
(12, 69, '2-1-1620625987.jpg', NULL, NULL),
(13, 69, '3-1-1620625987.jpg', NULL, NULL),
(14, 71, '1-1-1620715390.jpg', NULL, NULL),
(15, 71, '2-1-1620715390.jpg', NULL, NULL),
(16, 71, '3-1-1620715390.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`customer_id`, `customer_email`, `product_id`, `customer_name`, `contact`, `address`, `city`, `created_at`, `updated_at`) VALUES
(7, 'hamid@gmail.com', 71, 'hamid khan', '92839283982', 'dhka kala khan rwp', 'Rawalpindi', '2021-05-11 06:50:05', NULL),
(8, 'gull@ymail.com', 69, 'Gul Sher Khan', '03920392332', 'Sultan road street 5 FSD', 'FSF', '2021-05-11 08:51:17', NULL),
(9, 'jhon-wick@gmail.com', 76, 'Jhon Wick', '92891829182', 'the address is in pending for your info', 'islaabad', '2021-05-18 06:21:10', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_18_122513_create_products_table', 1),
(5, '2021_04_21_071458_create_product_details_table', 1),
(6, '2021_04_21_073105_create_product_colors_table', 1),
(7, '2021_04_21_073131_create_product_creativities_table', 1),
(8, '2021_04_21_073219_create_product_videos_table', 1),
(9, '2021_04_21_073245_create_product_sliders_table', 1),
(10, '2021_04_21_073335_create_customer_details_table', 1),
(11, '2021_04_21_073412_create_orders_table', 1),
(12, '2021_04_29_090903_create_specifications_table', 2),
(13, '2021_04_30_051855_create_color_images_table', 3),
(14, '2021_05_10_080831_create_web_pages_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `order_status` int(20) NOT NULL DEFAULT 0 COMMENT '0= pending, 1=diepatched,3=delivered',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `product_id`, `customer_id`, `order_status`, `created_at`, `updated_at`) VALUES
(11, 71, 7, 2, '2021-05-11 06:50:05', '2021-05-18 06:16:45'),
(12, 69, 8, 1, '2021-05-11 08:51:17', '2021-05-18 06:10:36'),
(13, 76, 9, 1, '2021-05-18 06:21:10', '2021-05-18 06:23:54');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(22) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `details`, `price`, `description`, `image_path`, `status`, `created_at`, `updated_at`) VALUES
(63, 'OPPO A-90', 'oppo-a-90', 'database connections, as well as specify which connection should be used by default. Most of the configuration options within this file are driven by the values of your application\'s environment variables. Examples for most of Laravel\'s supported database systems are provided in this file.', 1200, 'database provided in this file.', '1-1621247140.jpg', 1, NULL, '2021-05-17 10:25:40'),
(69, 'Techno Mobile', 'techno-mobile', 'its the detail for the new mobile', 555, 'the description of the file', '1-1621231998.png', 1, '2021-05-10 05:52:33', '2021-05-17 06:13:18'),
(71, 'infinix A5', 'infinix-a5', 'the details about the product', 333, 'description if any', '1-1621247117.jpg', 1, '2021-05-11 06:41:44', '2021-05-17 10:25:17'),
(73, 'hhhhh', 'hhhhh', NULL, 223, 'its the descruopto o bviubw iu', '1-1621239500.jpg', 0, '2021-05-17 08:18:20', NULL),
(76, 'tabs con', 'tabs-con', NULL, 2323, 'its the description', '1-1621240077.jpg', 1, '2021-05-17 08:27:57', '2021-05-17 03:32:42'),
(78, 'jjkk', 'jjkk', NULL, 232, 'iue ibw ivb wib ;ivwbu e; bvkuw eb;ivu ;wieub ivubw ;eiub viwuke', '1-1621248191.jpg', 0, '2021-05-17 10:43:11', NULL),
(83, 'sssd', 'sssd', NULL, 221, 'qwudiuqwbdiuqwdbqiwudbqwiudbkwd oie fbw beviu bweivu bwv bwv ubwvu bwvuew bk boi coi bi;uwb ev wbev iubweiu bv', '1-1621249056.jpg', 0, '2021-05-17 10:57:36', NULL),
(84, 'wwwwe', 'wwwwe', NULL, 222, 'its the description for he mobile info', '1-1621320977.jpg', 0, '2021-05-18 06:56:17', NULL),
(85, 'jjkdw3', 'jjkdw3', NULL, 322, 'kj owie oi weoi bwiebkbwekbkb  e iwe b bwei iw ei eoi o8wg fo9 owef giowief gowief', '1-1621321177.jpg', 0, '2021-05-18 06:59:37', NULL),
(93, 'edcds', 'edcds', NULL, 222, 'wbubuwbcbb  uw bcu w cwu bcuy buy cwub cuy byu yucuwc wcuy bub w ycy bwu ybcu bwcuy w cuywb uc bwuyb cuybw  bcuybwucb uw c wuyb c', '1-1621328157.jpg', 0, '2021-05-18 08:55:57', NULL),
(94, 'assaxz', 'assaxz', NULL, 223, 'j j cu wbucbuwbuycbwbcjbn  s udb cj j jjs jslkdj ksnd n sn i piu ciun iu couiu bwuyebuyb wocwojbbc oiiuuwb eouoycb owube clkjnciuue', '1-1621328244.jpg', 0, '2021-05-18 08:57:24', NULL),
(95, 'ggghhg', 'ggghhg', NULL, 777, 'ytdxuku6xk66 ukudkudkuduy  u yyu uy dukyd yud yu yuu fyu uyf u fyu uyyu', '1-1621329008.jpg', 0, '2021-05-18 09:10:08', NULL),
(99, 'eerdf', 'eerdf', NULL, 2323, ';o wieiuweiu', '1-1621329599.jpg', 0, '2021-05-18 09:19:59', NULL),
(100, 'wewesdsd', 'wewesdsd', NULL, 3323, 'wO EWEHWOIAOWIE ;OI HOIH O po heoir o;aieh roi heori io eori hpo ehrpoj voe;irh oeir', '1-1621329990.jpg', 0, '2021-05-18 09:26:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_colors`
--

CREATE TABLE `product_colors` (
  `color_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `color_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_colors`
--

INSERT INTO `product_colors` (`color_id`, `product_id`, `color_name`, `color_img`, `created_at`, `updated_at`) VALUES
(17, 63, 'Purple', NULL, NULL, NULL),
(18, 63, 'Yellow', NULL, NULL, NULL),
(19, 63, 'Black', NULL, NULL, NULL),
(25, 69, 'Red', '1-1-1621239415.jpg', NULL, NULL),
(26, 69, 'Green', '2-1-1621239415.jpg', NULL, NULL),
(27, 69, 'Blue', '3-1-1621239415.jpg', NULL, NULL),
(28, 71, 'Red', NULL, NULL, NULL),
(29, 71, 'Blue', NULL, NULL, NULL),
(30, 71, 'Green', NULL, NULL, NULL),
(31, 73, '1-1-1621239564.jpg', '1-1-1621239564.jpg', NULL, NULL),
(32, 73, '2-1-1621239564.jpg', '2-1-1621239564.jpg', NULL, NULL),
(33, 73, '3-1-1621239564.jpg', '3-1-1621239564.jpg', NULL, NULL),
(36, 76, 'mehroon', '0-1-1621240116.jpg', NULL, NULL),
(37, 76, 'mehr-pop', '1-1-1621240116.jpg', NULL, NULL),
(38, 76, 'Zeolight', '1-1-1621240116.jpg', NULL, NULL),
(41, 78, 'red', '1-1-1621248218.jpg', NULL, NULL),
(42, 78, 'rede', '2-1-1621248218.jpg', NULL, NULL),
(43, 78, 'red', '3-1-1621248218.jpg', NULL, NULL),
(52, 83, 'aaa', '1-1-1621249083.jpg', NULL, NULL),
(53, 84, NULL, '1-1-1621321020.jpg', NULL, NULL),
(54, 84, NULL, '2-1-1621321020.jpg', NULL, NULL),
(55, 85, NULL, '1-1-1621321204.jpg', NULL, NULL),
(56, 85, NULL, '2-1-1621321204.jpg', NULL, NULL),
(67, 93, 'www', '1-1-1621328185.jpg', NULL, NULL),
(68, 93, 'ssss', '2-1-1621328185.jpg', NULL, NULL),
(69, 94, 'sees3', '1-1-1621328270.jpg', NULL, NULL),
(70, 94, 'wwxs', '2-1-1621328270.jpg', NULL, NULL),
(71, 95, 'fff', '1-1-1621329035.jpg', NULL, NULL),
(72, 95, 'ggg', '2-1-1621329035.jpg', NULL, NULL),
(79, 99, 'weew', '1-1-1621329619.jpg', NULL, NULL),
(80, 99, 'wewe', '2-1-1621329619.jpg', NULL, NULL),
(81, 99, 'wefew', '3-1-1621329620.jpg', NULL, NULL),
(82, 100, 'rrrrr', '1-1-1621330016.jpg', NULL, NULL),
(83, 100, 'wwwww', '2-1-1621330016.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_creativities`
--

CREATE TABLE `product_creativities` (
  `creativity_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `creativity_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creativity_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_creativities`
--

INSERT INTO `product_creativities` (`creativity_id`, `product_id`, `creativity_name`, `creativity_img`, `created_at`, `updated_at`) VALUES
(20, 63, NULL, '1-1-1620035426.jpg', '2021-05-03 09:50:26', '2021-05-03 09:50:26'),
(21, 63, NULL, '2-1-1620035426.jpg', '2021-05-03 09:50:27', '2021-05-03 09:50:27'),
(29, 69, NULL, '1-1-1621232838.jpg', '2021-05-10 05:52:43', '2021-05-17 06:27:18'),
(30, 69, NULL, '2-1-1621232838.png', '2021-05-10 05:52:43', '2021-05-17 06:27:18'),
(33, 71, NULL, '1-1-1620715316.jpg', '2021-05-11 06:41:56', '2021-05-11 06:41:56'),
(34, 71, NULL, '2-1-1620715316.jpg', '2021-05-11 06:41:56', '2021-05-11 06:41:56'),
(35, 73, NULL, '1-1-1621239513.jpg', '2021-05-17 08:18:33', '2021-05-17 08:18:33'),
(36, 73, NULL, '2-1-1621239513.jpg', '2021-05-17 08:18:33', '2021-05-17 08:18:33'),
(41, 76, NULL, '1-1-1621240088.jpg', '2021-05-17 08:28:08', '2021-05-17 08:28:08'),
(42, 76, NULL, '2-1-1621240088.jpg', '2021-05-17 08:28:08', '2021-05-17 08:28:08'),
(45, 78, NULL, '1-1-1621248201.jpg', '2021-05-17 10:43:21', '2021-05-17 10:43:21'),
(46, 78, NULL, '2-1-1621248201.jpg', '2021-05-17 10:43:21', '2021-05-17 10:43:21'),
(47, 78, NULL, '3-1-1621248201.jpg', '2021-05-17 10:43:21', '2021-05-17 10:43:21'),
(57, 83, NULL, '1-1-1621249065.jpg', '2021-05-17 10:57:45', '2021-05-17 10:57:45'),
(58, 83, NULL, '2-1-1621249065.jpg', '2021-05-17 10:57:45', '2021-05-17 10:57:45'),
(59, 84, NULL, '1-1-1621320989.jpg', '2021-05-18 06:56:29', '2021-05-18 06:56:29'),
(60, 84, NULL, '2-1-1621320989.jpg', '2021-05-18 06:56:29', '2021-05-18 06:56:29'),
(61, 85, NULL, '1-1-1621321186.jpg', '2021-05-18 06:59:46', '2021-05-18 06:59:46'),
(62, 85, NULL, '2-1-1621321186.jpg', '2021-05-18 06:59:46', '2021-05-18 06:59:46'),
(77, 93, NULL, '1-1-1621328169.jpg', '2021-05-18 08:56:09', '2021-05-18 08:56:09'),
(78, 93, NULL, '2-1-1621328169.jpg', '2021-05-18 08:56:10', '2021-05-18 08:56:10'),
(79, 94, NULL, '1-1-1621328254.jpg', '2021-05-18 08:57:34', '2021-05-18 08:57:34'),
(80, 94, NULL, '2-1-1621328254.jpg', '2021-05-18 08:57:34', '2021-05-18 08:57:34'),
(81, 95, NULL, '1-1-1621329017.jpg', '2021-05-18 09:10:17', '2021-05-18 09:10:17'),
(82, 95, NULL, '2-1-1621329017.jpg', '2021-05-18 09:10:17', '2021-05-18 09:10:17'),
(88, 99, NULL, '1-1-1621329605.jpg', '2021-05-18 09:20:05', '2021-05-18 09:20:05'),
(89, 99, NULL, '2-1-1621329605.jpg', '2021-05-18 09:20:05', '2021-05-18 09:20:05'),
(90, 100, NULL, '1-1-1621330000.jpg', '2021-05-18 09:26:40', '2021-05-18 09:26:40'),
(91, 100, NULL, '2-1-1621330000.jpg', '2021-05-18 09:26:40', '2021-05-18 09:26:40');

-- --------------------------------------------------------

--
-- Table structure for table `product_details`
--

CREATE TABLE `product_details` (
  `detail_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `overview_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sleek_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sleek_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_details`
--

INSERT INTO `product_details` (`detail_id`, `product_id`, `overview_img`, `overview_info`, `sleek_img`, `sleek_info`, `created_at`, `updated_at`) VALUES
(51, 63, '631-1620035372.jpg', NULL, '751-1620035372.jpg', NULL, NULL, NULL),
(57, 69, '111-1621232759.jpg', 'overview of the mob produyct', '1-1621232759.jpg', 'sleek info of mobile', NULL, '2021-05-17 01:25:59'),
(59, 71, '711-1620715304.jpg', NULL, '831-1620715304.jpg', NULL, NULL, NULL),
(61, 73, '731-1621239500.jpg', NULL, '851-1621239500.jpg', NULL, NULL, NULL),
(64, 76, '761-1621240077.jpg', NULL, '881-1621240077.jpg', NULL, NULL, NULL),
(66, 78, '781-1621248191.jpg', NULL, '901-1621248191.jpg', NULL, NULL, NULL),
(71, 83, '831-1621249056.jpg', NULL, '951-1621249056.jpg', NULL, NULL, NULL),
(72, 84, '841-1621320977.jpg', NULL, '961-1621320977.jpg', NULL, NULL, NULL),
(73, 85, '851-1621321177.jpg', NULL, '971-1621321177.jpg', NULL, NULL, NULL),
(81, 93, '931-1621328157.jpg', NULL, '1051-1621328157.jpg', NULL, NULL, NULL),
(82, 94, '941-1621328244.jpg', NULL, '1061-1621328244.jpg', NULL, NULL, NULL),
(83, 95, '951-1621329008.jpg', NULL, '1071-1621329008.jpg', NULL, NULL, NULL),
(87, 99, '991-1621329599.jpg', NULL, '1111-1621329599.jpg', NULL, NULL, NULL),
(88, 100, '1001-1621329990.jpg', NULL, '1121-1621329990.jpg', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_sliders`
--

CREATE TABLE `product_sliders` (
  `slider_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `slider_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_videos`
--

CREATE TABLE `product_videos` (
  `video_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `video_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_videos`
--

INSERT INTO `product_videos` (`video_id`, `product_id`, `video_name`, `video_link`, `created_at`, `updated_at`) VALUES
(8, 69, NULL, '<iframe  src=\"https://www.youtube.com/embed/O0UIfj4y5Q0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL),
(9, 69, NULL, '<iframe  src=\"https://www.youtube.com/embed/O0UIfj4y5Q0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL),
(10, 69, NULL, '<iframe src=\"https://www.youtube.com/embed/O0UIfj4y5Q0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL),
(14, 71, NULL, '<iframe  src=\"https://www.youtube.com/embed/8IqSkI5xru0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL),
(15, 71, NULL, '<iframe src=\"https://www.youtube.com/embed/8IqSkI5xru0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL),
(16, 71, NULL, '<iframe src=\"https://www.youtube.com/embed/8IqSkI5xru0\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL),
(17, 76, NULL, '<iframe  src=\"https://www.youtube.com/embed/q7m1FqKXCAg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL),
(18, 76, NULL, '<iframe  src=\"https://www.youtube.com/embed/q7m1FqKXCAg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL),
(19, 76, NULL, '<iframe  src=\"https://www.youtube.com/embed/q7m1FqKXCAg\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

CREATE TABLE `specifications` (
  `specs_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `dimentions` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `os` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sim_support` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `resolution` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `internal_memory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `external_memory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `battery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technology` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wlan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bluetooth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gps` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `radio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nfc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cpu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gpu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chipset` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `network` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `protection` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `talk_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `standby_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `front_camera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `back_camera` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specifications`
--

INSERT INTO `specifications` (`specs_id`, `product_id`, `dimentions`, `weight`, `os`, `sim_support`, `display_type`, `resolution`, `internal_memory`, `external_memory`, `ram`, `battery`, `phone_size`, `technology`, `wlan`, `bluetooth`, `gps`, `radio`, `data`, `usb`, `nfc`, `cpu`, `gpu`, `chipset`, `network`, `protection`, `talk_time`, `standby_time`, `front_camera`, `back_camera`, `description`, `created_at`, `updated_at`) VALUES
(5, 63, 'dimention1200', 'weight', 'os', 'sim supprt', 'display type', 'reoslution1', 'internl', 'xteral', 'ram', 'batry type', 'size', 'technplo', 'wlan1', 'blutooth', 'gps', 'radio', 'data', 'usb', 'nfc', 'cpuq1', 'gpu', 'chipset', 'netweoj', 'protection', 'talk time', 'standby', 'front', 'back', NULL, '2021-05-03 11:50:58', '2021-05-10 05:40:42'),
(10, 69, 'techno dimention', 'techno weight', 'OS11', 'dual sim support', 'techno display', 'techno resolution', '14GB in', '12GB card', '4GB am', '5400ahm', 'techno size', 'techno tech', 'WLAN', 'bluetooth', 'GPS techno', 'Radio techno', 'DATA NETWORK', 'USB Port', 'nfc', 'CPU', 'GPS', 'Chipset', 'techno network', 'techno protects', '11hours', '18 hurs', '16 MP front', '65 MP back', NULL, '2021-05-10 05:56:05', '2021-05-10 05:56:05'),
(11, 71, 'dimention-1', 'phone weight', 'ODS', 'sim support', 'display type', 'resolution-1', 'intrenal', 'external', 'ram', 'batry type', 'size', 'tecnology', 'wlan-1', 'bluetooth', 'gps', 'radio', 'data', 'usb', 'nfc', 'cpu-1', 'gpu', 'chipset', 'network', 'protection', '11 hours', '22 hours', 'front cam-1', 'back cam', NULL, '2021-05-11 06:46:23', '2021-05-11 01:48:12'),
(12, 76, 'wew', 'weew', 'sd', 'sd', 'sd', 'wesd', 'wvwev', 'wevwev', 'wevwev', 'wevwev', 'ewwe', 'ds', 'wew', 'sd', 'sdds', 'dsq', 'ERVER', 'wefE', 'erfvewrv', 'sd', 'sd', 'sdds', 'weew', 'ds', 'wvewev', 'wevwev', 'wecwev', 'wvwev', NULL, '2021-05-17 08:31:12', '2021-05-17 08:31:12');

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
(1, 'Kamran Ali', 'kamran@7koncepts.com', NULL, '$2y$10$wzpaYOnYbNmQHwFQxGYHouLH8b8Fk8fhQdWmZsoXusRNAVu8n332.', 'TFdxLa3two3GlaVTdQcsgGSeAArVXOuAdW3rnVbPgUbT27uDlNmehxc40lxE', '2021-04-27 00:16:03', '2021-04-27 00:16:03');

-- --------------------------------------------------------

--
-- Table structure for table `web_pages`
--

CREATE TABLE `web_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1 for textarea , 2 for form',
  `body_content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `web_pages`
--

INSERT INTO `web_pages` (`id`, `page_name`, `page_slug`, `body_type`, `body_content`, `created_at`, `updated_at`) VALUES
(1, 'web page', 'web-page', '1', '<form method=\"post\" action=\'{{url(\"/admin/create-page/\")}}\' class=\"\" style=\"width: 80%;margin-left: 10%\">\r\n                  @csrf\r\n                  <input type=\"hidden\" name=\"body_type\" value=\"1\">\r\n                  <div class=\"form-group\">\r\n                    <label>Page Name</label>\r\n                  <input type=\"text\" name=\"pagename\" class=\"form-control\" required=\"\">\r\n                  </div>\r\n                  <div class=\"form-group\">\r\n                    <button type=\"button\" id=\"add_field_button\" onclick=\"add_field()\">Add Text Area</button>\r\n                    <button type=\"button\">Add Form</button>\r\n                    \r\n                  </div>\r\n                  <div id=\"new_fields\" class=\"form-group\">\r\n                    \r\n                  </div>\r\n                  <div class=\"form-group\">\r\n                    <button type=\"soft-ui-dashboard\" class=\"btn btn-info\">Create</button>\r\n                  </div>\r\n                  \r\n                </form>', NULL, NULL),
(2, 'poli', 'poli', '1', '<p><strong>1 Privacy Policy</strong></p>\r\n<p><strong>1.1</strong>&nbsp;AutoRefs Limited, together with other members of its group (“AutoRefs”, “we”, us”, “our”) takes its responsibilities under data protection legislation seriously.</p>\r\n<p><strong>1.2</strong>&nbsp;This Privacy Policy aims to provide users of our services (“Users”, “you”, “your”) with a clear summary of how we use information that is provided to us and how AutoRefs complies with applicable data protection laws, covering the following areas:</p>\r\n<p><strong>Section 2:</strong>&nbsp;Categories Of Users</p>\r\n<p><strong>Section 3:</strong>&nbsp;Purposes of Collection and Disclosure for Each Category of Users</p>\r\n<p>−&nbsp;<em>All Users</em></p>\r\n<p>−&nbsp;<em>Employers Representatives</em></p>\r\n<p>−&nbsp;<em>Candidates</em></p>\r\n<p>−&nbsp;<em>Referees</em></p>\r\n<p><strong>Section 4:</strong>&nbsp;Marketing and Analytics</p>\r\n<p><strong>Section 5:</strong>&nbsp;Security and Storage</p>\r\n<p><strong>Section 6:</strong>&nbsp;Disclosures Overseas</p>\r\n<p><strong>Section 7:</strong>&nbsp;Export outside the EEA</p>\r\n<p><strong>Section 8:</strong>&nbsp;Contacting Us and Your Rights</p>\r\n<p><strong>Section 9:</strong>&nbsp;Cookies</p>\r\n<p><strong>Section 10:</strong>&nbsp;Changes to this Privacy Policy</p>\r\n<p><strong>2 Categories of Users</strong></p>\r\n<p><strong>2.1 There are 3 categories of Users:</strong></p>\r\n<p><strong>(a) Employers Representatives</strong>&nbsp;(i.e. representatives of organisations who engage AutoRefs to assist them with the hiring of Candidates, referred to as Employers);</p>\r\n<p><strong>(b) Candidates</strong>&nbsp;(i.e. those that we help co-ordinate application information and references for potential new jobs with Employers); and</p>\r\n<p><strong>(c) Referees</strong>&nbsp;(i.e. those whom we contact at the request of a Candidate in connection with the obtaining of a reference about the Candidate for an Employer).</p>\r\n<p><strong>3 Purposes of Collection and Disclosure</strong></p>\r\n<p><strong>3.1</strong>&nbsp;In this section, we set out first the personal information we collect relating to all Users which we are the data controller in respect of (i.e. which AutoRefs determines how to use within the scope of this Privacy Policy without reference back to the Employer). We then set out the information we collect as a data processor on behalf of the Employer who is the data controller of that information (i.e. which we only hold and process as instructed by the Employer). In relation to both categories we set out:</p>\r\n<ul>\r\n<li>The personal information we collect;</li>\r\n<li>How we collect the personal information; and</li>\r\n<li>The purposes for which we use and disclose personal information.</li>\r\n</ul>\r\n<p>Please note that this does not describe the Employer’s use of personal information which the Employer is responsible for providing its own privacy notice or policy in respect of.</p>\r\n<p><strong>3.2</strong>&nbsp;Under European Data Protection Law, we are required to identify the “legal grounds” on which we rely to process the information and these are set out next to each purpose for which we are a data controller. More information on legal grounds can be found at Appendix A</p>\r\n<p><strong>3.3 Information we collect from all Users</strong></p>\r\n<p><strong>(a) Personal information we collect</strong></p>\r\n<ul>\r\n<li><strong>Contact Information</strong>: including your name, email address and other contact details</li>\r\n<li><strong>Our correspondence</strong>: if you contact us, we will typically keep a record of that correspondence</li>\r\n<li><strong>Website and communication usage</strong>: details of your visits to the websites and information collected through cookies and other tracking technologies including, but not limited to, your IP address and domain name, your browser version and operating system, traffic data, location data, web logs and other communication data, and the resources that you access</li>\r\n</ul>\r\n<p><strong>(b)</strong>&nbsp;<strong>How we collect personal information</strong></p>\r\n<p>We collect this personal information from you directly.</p>\r\n<p><strong>(c)</strong>&nbsp;<strong>Purpose of use and disclosure</strong></p>\r\n<p>We process your personal information as a data controller for the following purposes:</p>\r\n<ul>\r\n<li>To provide our services to carry out our obligations arising from any agreements between you or the Employer and us, to respond to your queries and otherwise communicate with you.</li>\r\n</ul>\r\n<p><strong>Legal bases:</strong>&nbsp;contract performance, legitimate interests (to enable us to perform our obligations and provide our services to you)</p>\r\n<ul>\r\n<li>To improve our services to make our services more valuable or useful (e.g. when you have provided us with feedback), including to make our websites function correctly and undertake analytics (please see section 4 below).</li>\r\n</ul>\r\n<p><strong>Legal bases</strong>: consent, legitimate interest (to enable us to provide better services and to provide anonymised aggregated insight to our clients)</p>\r\n<ul>\r\n<li>To inform you of changes to notify you about changes to our services.</li>\r\n</ul>\r\n<p><strong>Legal bases</strong>: legitimate interests (to notify you about changes to our services)</p>\r\n<ul>\r\n<li>To reorganise or make changes to our business in the event that we (i) are subject to negotiations for the sale of our business or part thereof to a third party; (ii) are sold to a third party; or (iii) undergo a re-organisation, we may need to transfer some or all of your personal information to the relevant third party (or its advisors) as part of any due diligence process for the purpose of analysing any proposed sale or re-organisation. We may also need to transfer your personal information to that re-organised entity or third party after the sale or reorganisation for them to use for the same purposes as set out in this policy.</li>\r\n</ul>\r\n<p><strong>Legal bases:</strong>&nbsp;legitimate interests (in order to allow us to change our business)</p>\r\n<ul>\r\n<li>To comply with legal or regulatory obligations we may process your personal information to comply with our legal and regulatory requirements, which may include disclosing your personal information to third parties, the court service and/or regulators or law enforcement agencies in connection with enquiries, proceedings or investigations by such parties anywhere in the world or where compelled to do so. Where permitted, we will direct any such request to you or notify you before responding unless to do so would prejudice the prevention or detection of a crime.</li>\r\n</ul>\r\n<p><strong>Legal bases:</strong>&nbsp;legal obligations, legal claims, legitimate interests (to cooperate with law enforcement and regulatory authorities)</p>\r\n<ul>\r\n<li>To third parties under our control to assist us with service delivery we may disclose your personal information to our service providers, contractors, agents, advisors (e.g. legal, financial, business or other advisors) and other AutoRefs group companies that perform activities on our behalf always subject to suitable safeguards. Specifically, we may disclose contact information of Candidates to third parties under our control where an Employer has requested identity verification services.</li>\r\n</ul>\r\n<p><strong>Legal bases:</strong>&nbsp;legitimate interests (in order to use specialist service providers and operate our business efficiently)</p>\r\n<p><strong>3.4</strong>&nbsp;<strong>Employers Representatives</strong></p>\r\n<p><strong>(d)</strong>&nbsp;<strong>Purpose of use and disclosure</strong></p>\r\n<p>We also process your personal information as a data controller for the following purposes:</p>\r\n<p><strong>For marketing purposes</strong>&nbsp;to send you offers and marketing materials about AutoRefs and AutoRefs’s suppliers and partners’ products and services by email or SMS, and where required by law, we will ask for your consent before we conduct any of these types of marketing. If you wish to opt out from receipt of marketing materials sent by AutoRefs at any time, please use the opt out mechanism in the marketing material, or contact the Privacy Officer to let us know.</p>\r\n<p><strong>Legal bases</strong>: consent, legitimate interest (to keep you updated with news in relation to our services)</p>\r\n<p><strong>3.5</strong>&nbsp;<strong>Candidates</strong></p>\r\n<p><strong>(a)</strong>&nbsp;<strong>Personal information we collect</strong></p>\r\n<p>In addition to the information set out in the All Users section above we may collect the following additional information as a processor for the Employer.</p>\r\n<ul>\r\n<li><strong>Reference Information</strong>: including your work experience, job titles, qualifications, period of employment, aptitude test results, opinions about your work performance provided by Employers and/or Referees</li>\r\n<li><strong>Sensitive Information</strong>: including information to assess your work authorisation or visa requirements (if any), criminal record (or proceedings), health or disability information</li>\r\n</ul>\r\n<p><strong>(b)</strong>&nbsp;<strong>How we collect personal information (including personal information of your chosen Referees)</strong></p>\r\n<p>We collect personal information from you directly when you provide information to us relating to your references, but also collect personal information about you from your potential Employer and your Referees.</p>\r\n<p>As a Candidate, we will assume that you have clear consent from your chosen Referees to supply their names and contact details (including email address) to us so that we can contact them on your behalf to obtain a reference about you which will be supplied to the Employer interested in potentially hiring you. If you do not have that consent, please do not provide their details to us.</p>\r\n<p><strong>(c)</strong>&nbsp;<strong>Purpose of use and disclosure</strong></p>\r\n<p>Except as set out in the All Users section above, we process your personal information&nbsp;<strong>on behalf of</strong>&nbsp;your potential Employer. In providing our services to the potential Employer, we will use your information to communicate with you, organize your application information, coordinate your references, authenticate your identity and respond to your questions, queries or requests regarding our services. We will need to disclose your information to the Employer who will be a client of AutoRefs and will have requested us to seek references in relation to your potential employment by them. The Employer’s processing of such personal information will be subject to the privacy notice or policy of the Employer.</p>\r\n<p><strong>3.6</strong>&nbsp;<strong>Referees</strong></p>\r\n<p><strong>(a)</strong>&nbsp;<strong>Personal information we collect</strong></p>\r\n<p>In addition to the information set out in the All Users section we may collect the following additional information as a processor for the Employer.</p>\r\n<ul>\r\n<li><strong>Employment Information</strong>: including your position, the name of the organisation you are or were working with and the dates covering the period of time in which you are providing a reference for the Candidate. In addition, we may collect your current job title, your current organisation and your current job location, but only if you consent for us to do so.</li>\r\n<li><strong>Any opinions you give on the Candidate</strong></li>\r\n</ul>\r\n<p><strong>(b)</strong>&nbsp;<strong>How we collect personal information</strong></p>\r\n<p>We collect personal information from you directly:</p>\r\n<ul>\r\n<li>when you provide information to us in response to a request for reference, and/or:</li>\r\n<li>when you consent to be contacted by a prospective employer about potential job opportunities or your recruitment needs as a hiring manager.</li>\r\n</ul>\r\n<p>But, we also collect personal information about you from Candidates who have asked you to provide a reference for them.</p>\r\n<p><strong>(c)</strong>&nbsp;<strong>Purpose of use and disclosure</strong></p>\r\n<p>Except as set out in the All Users section above, we process your personal information on behalf of the (potential) Employer of the Candidate who has asked you to provide a reference for him/her. In providing our services to the Employer, we will use your information to communicate with you, coordinate the opinion you provide about the Candidate, authenticate your identity and respond to your questions, queries or requests regarding our services, and where you have consented to being contacted by a potential employer we will use your information in our analytics platform, People Search. We will need to disclose your information to the potential Employer who will be a client of AutoRefs and will have requested us to seek references from you in relation to the Candidate. The Employer’s processing of such personal information will be subject to the privacy notice or policy of theEmployer.</p>\r\n<p><strong>For marketing purposes</strong>&nbsp;We may use your name, email address and contact details to send you more information and marketing materials about AutoRefs and AutoRefs’s suppliers and partners’ products and services by email, phone or SMS, and where required by law we will ask for your consent before we conduct any of these types of marketing. If you wish to opt out from receipt of marketing materials sent by AutoRefs at any time, please use the opt out mechanism in the marketing material or contact the Privacy Officer to let us know.</p>\r\n<p><strong>4 Marketing and Analytics</strong></p>\r\n<p><strong>4.1&nbsp;</strong>We may collect data about your activities that does not personally or directly identify you when you visit our website. This information may include the content you view, the date and time that you view this content, the products you purchase or your location information associated with your IP address. We use the information we collect to serve you more relevant advertisements (referred to as “Retargeting”). We collect information about where you saw the advertisements we serve you and what advertisements you clicked on. You may opt-out of the automated collection of information by amending your web browser controls. Most advertising networks also offer you the option to opt out of targeted advertising. For more information, visit&nbsp;<a href=\"http://www.aboutads.info/choices/\">http://www.aboutads.info/choices/</a>&nbsp;or&nbsp;<a href=\"http://www.youronlinechoices.com/\">http://www.youronlinechoices.com</a>.</p>\r\n<p><strong>4.2</strong>&nbsp;We may use Users’ information for data analytics purposes, including to create insights, reports and other analytics to provide benchmarks to our clients, improve our services and to market our services. The output of our analytics will never identify a particular User or AutoRefs client.</p>\r\n<p><strong>4.3</strong>&nbsp;We use Stripe for some of our payment, analytics, and other business services. Stripe collects identifying information about the devices that connect to its services. Stripe uses this information to operate and improve the services it provides to us, including for fraud detection. You can learn more about Stripe and read its privacy policy at https://stripe.com/privacy.</p>\r\n<p><strong>5 Security and Storage</strong></p>\r\n<p><strong>5.1</strong>&nbsp;We hold your personal information in electronic form. To ensure your personal information is secure we use certified security standards and your data is encrypted in transit and at rest. Service providers may process the information for us, but only ever for the sole purpose of providing our services. Where a service provider holds your information, we require them to adhere to our approved standards of security to ensure the continuing protection of your personal information. Only authorised employees are granted access to your personal information and our procedures ensure that your personal information is only made available to employees where necessary. We audit and monitor our employee’s access to and handling of personal information.</p>\r\n<p><strong>5.2</strong>&nbsp;We will retain your personal and sensitive information as directed by the Employer, or where we are a data controller when we no longer require it for any purpose for which it was collected. AutoRefs will comply with its obligations to destroy, erase, or de-identify your personal information as required by applicable law.</p>\r\n<p><strong>5.3</strong>&nbsp;AutoRefs protects the personal information in its custody or control by making reasonable security arrangements to prevent unauthorised access, collection, use, disclosure, copying, modification, disposal or similar risks. You should be aware that confidentiality and security are not assured when information is transmitted through e-mail or wireless communication.</p>\r\n<p><strong>5.4</strong>&nbsp;AutoRefs will not be responsible for any loss or damage suffered as a result of a breach of security or confidentiality when information is transmitted by e-mail or wireless communication.</p>\r\n<p><strong>6 Disclosures Overseas</strong></p>\r\n<p>In certain limited circumstances AutoRefs may disclose your personal information to an entity overseas. Generally speaking this is in circumstances where we have engaged a third party to carry out operations on our behalf, for example the use of data sub-processors. In such cases, personal information, as defined in Section 3, may be disclosed to data sub-processors overseas.</p>\r\n<p><strong>7 Export outside the EEA</strong></p>\r\n<p><strong>7.1</strong>&nbsp;Your personal information may be accessed by Employers, Candidates, Referees and/or our service providers (as the case may be), and/or stored at, a destination outside the country in which you are located, whose data protection laws may be of a lower standard than those in your country. We will, in all circumstances, safeguard personal information as set out in this Privacy Policy.</p>\r\n<p><strong>7.2</strong>&nbsp;Where we transfer personal information from inside the European Economic Area (the&nbsp;<strong>EEA</strong>) to outside the EEA, we may be required to take specific additional measures to safeguard the relevant personal information. Certain countries outside the EEA have been approved by the European Commission as providing essentially equivalent protections to EEA data protection laws and therefore no additional safeguards are required to export personal information to these jurisdictions. In countries which have not had these approvals (see the full list&nbsp;<a href=\"http://ec.europa.eu/justice/data-protection/international-transfers/adequacy/index_en.htm\">here</a>), we will establish legal grounds justifying such transfer, such as EU Commission-approved model contractual clauses, or other legal grounds permitted by applicable legal requirements.</p>\r\n<p><strong>7.3</strong>&nbsp;Please contact us as set out in the “Contacting Us” section below if you would like to see a copy of the specific safeguards applied to the export of your personal information.</p>\r\n<p><strong>8 Contacting Us and Your rights</strong></p>\r\n<p><strong>8.1</strong>&nbsp;You have the right to access personal information AutoRefs holds on you and to have incorrect information corrected. If you would like to obtain a copy of the personal information that AutoRefs holds on you or to request a correction to personal information held by AutoRefs, please contact our designated Privacy Officer who is accountable for AutoRefs’s compliance with this Privacy Policy. The Privacy Officer can be contacted as follows:</p>\r\n<p>Address: AutoRefs Limited, Moss Bridge House, Moss Bridge Road, Rochdale, OL16 5EA</p>\r\n<p>Email: info@autorefs.com</p>\r\n<p>Phone: +441706318200</p>\r\n<p><strong>8.2</strong>&nbsp;AutoRefs holds the information set out at sections 3.4 and 3.5 as a data processor of the Employer. This means that if you wish to exercise your data subject rights you must address the request to the Employer and AutoRefs will assist the Employer to respond as directed by your Employer. In relation to the information set out at section 3.3, AutoRefs is the controller and in relation to that information, you may have the right to require us to:</p>\r\n<p>(a) provide you with further details on the use we make of your information;</p>\r\n<p>(b) provide you with a copy of information that you have provided to us;</p>\r\n<p>(c) update any inaccuracies in the personal information we hold;</p>\r\n<p>(d) delete any personal information the we no longer have a lawful ground to use;</p>\r\n<p>(e) where processing is based on consent, to withdraw your consent so that we stop that particular processing;</p>\r\n<p>(f) to ask us to transmit the personal data you have provided to us and we still hold about you to a third party electronically;</p>\r\n<p>(g) object to any processing based on the legitimate interests ground unless our reasons for undertaking that processing outweigh any prejudice to your data protection rights; and</p>\r\n<p>(h) restrict how we use your information whilst a complaint is being investigated.</p>\r\n<p><strong>8.3</strong>&nbsp;Your exercise of these data subject rights is subject to certain exemptions to safeguard the public interest (e.g. the prevention or detection of crime) and our interests (e.g. the maintenance of legal privilege). If you exercise any of these rights we will check your entitlement and respond in most cases within a month.</p>\r\n<p><strong>8.4</strong>&nbsp;If you are not satisfied with our use of your personal information or our response to any exercise of these rights, you have the right to complain to your local data protection regulator. If you are in the European Economic Area (EEA) a list of data protection regulators and their contact details can be found&nbsp;<a href=\"http://ec.europa.eu/newsroom/article29/item-detail.cfm?item_id=612080\">here</a>.</p>\r\n<p><strong>8.6</strong>&nbsp;If you have a dispute about personal information held by AutoRefs and covered by the policy, we will investigate and provide you with a formal written response, generally within 30 days. We will investigate and deal with your complaint in a fair, efficient and timely manner. You can contact us at:</p>\r\n<p>Address: AutoRefs Limited, Moss Bridge House, Moss Bridge Road, Rochdale, OL16 5EA</p>\r\n<p>Email: info@autorefs.com</p>\r\n<p>Phone: +441706318200</p>\r\n<p><strong>9 Cookies Policy</strong></p>\r\n<p>AutoRefs’s website uses the following cookies:</p>\r\n<p>sessionid: To store session data of the logged in user. This is how we identify who is logged when they request an action</p>\r\n<p>csrftoken: To prevent cross site request forgery. This ensures that only forms that have originated from our Website can be used to POST data back. If you do not agree to the use of these cookies please disable them by following the instructions for your browser set out&nbsp;<a href=\"http://allaboutcookies.org/\">here</a><strong><em>.</em></strong>&nbsp;Please note that some of the services will not function so well if cookies are disabled.</p>\r\n<p><strong>10 Children’s Privacy</strong></p>\r\n<p>Our services are not directed at people under the age of 16 (“Minors”) and we do not knowingly collect personal information from Minors. If you believe that we have been provided with personal information of Minors, please contact us by using in the information in the “Contacting Us and Your Rights” section above, and we will take steps to delete such information.</p>\r\n<p><strong>11 Changes to our Privacy Policy and/or Cookies Policy</strong></p>\r\n<p><strong>10.1</strong>&nbsp;We may change the content of our websites and how we use cookies and consequently, our Privacy Policy and our Cookie Policy may change from time to time in the future. If we change this Privacy Policy or our Cookies Policy, we will update the date it was last changed below. If these changes are material, we will indicate this clearly on our Website.</p>\r\n<p><strong>10.2</strong>&nbsp;This Privacy Policy was last updated on 8 October 2019: For previous copies of the AutoRefs Privacy Policy please contact our Privacy Officer using the details provided above.</p>\r\n<p><strong>Appendix A: Legal grounds</strong></p>\r\n<p><strong>Legal grounds to justify use of personal information</strong></p>\r\n<p>Under European Data Protection Law, we are required to identify the “legal grounds” on which we rely to process the information. Use of personal information under European Data Protection Law must be justified under one of a number of “legal grounds” and we have set out the grounds in respect of each use above. The explanations of the legal grounds that justify our use of your personal information are as follows:</p>\r\n<p><strong><em>Consent</em></strong><em>: where you have consented to our use of your information (you will have been presented with a consent form in relation to any such use [and may withdraw your consent by contacting us as set out in the “Contacting Us” section).</em></p>\r\n<p><strong><em>Contract performance</em></strong><em>: where your information is necessary to enter into or perform our contract with you.</em></p>\r\n<p><strong><em>Legal obligation</em></strong><em>: where we need to use your information to comply with our legal obligations.</em></p>\r\n<p><strong><em>Legitimate interests</em></strong><em>: where we use your information to achieve a legitimate interest and our reasons for using it outweigh any prejudice to your data protection rights.</em></p>\r\n<p><strong><em>Legal claims</em></strong><em>: where your information is necessary for us to defend, prosecute or make a claim against you, us or a third party.</em></p>\r\n<p>&nbsp;</p>', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `color_images`
--
ALTER TABLE `color_images`
  ADD PRIMARY KEY (`color_id`),
  ADD KEY `color_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `customer_details_product_id_foreign` (`product_id`);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `orders_product_id_foreign` (`product_id`),
  ADD KEY `orders_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- Indexes for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD PRIMARY KEY (`color_id`),
  ADD KEY `product_colors_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_creativities`
--
ALTER TABLE `product_creativities`
  ADD PRIMARY KEY (`creativity_id`),
  ADD KEY `product_creativities_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_details`
--
ALTER TABLE `product_details`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `product_details_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_sliders`
--
ALTER TABLE `product_sliders`
  ADD PRIMARY KEY (`slider_id`),
  ADD KEY `product_sliders_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_videos`
--
ALTER TABLE `product_videos`
  ADD PRIMARY KEY (`video_id`),
  ADD KEY `product_videos_product_id_foreign` (`product_id`);

--
-- Indexes for table `specifications`
--
ALTER TABLE `specifications`
  ADD PRIMARY KEY (`specs_id`),
  ADD KEY `specifications_product_id_foreign` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `web_pages`
--
ALTER TABLE `web_pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `web_pages_page_name_unique` (`page_name`),
  ADD UNIQUE KEY `web_pages_page_slug_unique` (`page_slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `color_images`
--
ALTER TABLE `color_images`
  MODIFY `color_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `customer_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `product_colors`
--
ALTER TABLE `product_colors`
  MODIFY `color_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `product_creativities`
--
ALTER TABLE `product_creativities`
  MODIFY `creativity_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `product_details`
--
ALTER TABLE `product_details`
  MODIFY `detail_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `product_sliders`
--
ALTER TABLE `product_sliders`
  MODIFY `slider_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_videos`
--
ALTER TABLE `product_videos`
  MODIFY `video_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `specifications`
--
ALTER TABLE `specifications`
  MODIFY `specs_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `web_pages`
--
ALTER TABLE `web_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `color_images`
--
ALTER TABLE `color_images`
  ADD CONSTRAINT `color_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD CONSTRAINT `customer_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customer_details` (`customer_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_colors`
--
ALTER TABLE `product_colors`
  ADD CONSTRAINT `product_colors_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_creativities`
--
ALTER TABLE `product_creativities`
  ADD CONSTRAINT `product_creativities_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_details`
--
ALTER TABLE `product_details`
  ADD CONSTRAINT `product_details_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_sliders`
--
ALTER TABLE `product_sliders`
  ADD CONSTRAINT `product_sliders_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_videos`
--
ALTER TABLE `product_videos`
  ADD CONSTRAINT `product_videos_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `specifications`
--
ALTER TABLE `specifications`
  ADD CONSTRAINT `specifications_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
