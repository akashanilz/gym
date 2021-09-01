-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2021 at 06:43 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `uuid` varchar(250) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(500) NOT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `uuid`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Admin', 'admin@gmail.com', '$2y$10$HrTe9uydFtFDu8QunRdULefOoHEQF0l9mLAs7z8.mBSFLtKtUh/bm', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `attendances`
--

CREATE TABLE `attendances` (
  `id` int(11) NOT NULL,
  `user_id` mediumtext DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `date` date NOT NULL,
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendances`
--

INSERT INTO `attendances` (`id`, `user_id`, `user_name`, `date`, `updated_at`, `created_at`) VALUES
(19, '[\"15\"]', NULL, '2021-07-19', '2021-07-04', '2021-07-04'),
(20, '[\"15\"]', NULL, '2011-07-19', '2021-07-04', '2021-07-04');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `uuid` varchar(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `uuid`, `name`, `updated_at`, `created_at`) VALUES
(1, 'a5f42cea-e815-4079-afd4-be082237fefd', 'Xeravo', '2021-01-22 08:18:48', '2021-01-22 08:18:48'),
(2, 'c5be4459-60bd-4d3c-bc0b-4ff83af17052', 'Castero', '2021-01-22 08:19:03', '2021-01-22 08:19:03'),
(3, '7c229068-67df-424c-a477-640f82a9cc46', 'Masser', '2021-01-22 08:19:13', '2021-01-22 08:19:13'),
(4, '5f5d29b6-9ea1-4f56-bb3a-63cc24a47eb2', 'Kiamin', '2021-01-22 08:19:23', '2021-01-22 08:19:23');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `product_id`, `updated_at`, `created_at`) VALUES
(11, 8, 35, '2021-03-17 05:54:00', '2021-03-17 05:54:00'),
(12, 14, 34, '2021-06-25 18:01:24', '2021-06-25 18:01:24'),
(13, 14, 35, '2021-06-25 18:01:28', '2021-06-25 18:01:28'),
(14, 14, 36, '2021-06-25 18:01:30', '2021-06-25 18:01:30'),
(30, 17, 37, '2021-07-18 15:44:26', '2021-07-18 15:44:26');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `uuid` varchar(350) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `uuid`, `name`, `updated_at`, `created_at`) VALUES
(1, '52e2d070-aab1-47dd-9a5b-668de017e30153', 'Suppliments', NULL, NULL),
(2, '52e2d070-aab1-47dd-9a5b-668de017e21mk90', 'Accessories', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `diets`
--

CREATE TABLE `diets` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `diets`
--

INSERT INTO `diets` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Grapes', 'heloo my dear karadi', '60f447305b509.jpg', '2021-07-18 15:22:24', '2021-07-18 15:22:24'),
(5, 'Apple', 'heloo my dear karadi', '60f4474c2205c.jpg', '2021-07-18 15:22:52', '2021-07-18 15:22:52'),
(6, 'Pinapple', 'heloo my dear karadi', '60f447607d453.jpg', '2021-07-18 15:23:12', '2021-07-18 15:23:12'),
(7, 'Orange', 'heloo my dear karadi', '60f447730e281.jpg', '2021-07-18 15:23:31', '2021-07-18 15:23:31');

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
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(11) NOT NULL,
  `name` varchar(300) DEFAULT NULL,
  `email` varchar(300) DEFAULT NULL,
  `mobile` varchar(300) DEFAULT NULL,
  `message` varchar(300) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `name`, `email`, `mobile`, `message`, `updated_at`, `created_at`) VALUES
(1, 'Akash Anil', 'akashanilinbox@gmail.com', '09847554867', 'Message...afasd', '2021-07-18 16:13:33', '2021-07-18 16:13:33'),
(2, 'Akash Anil', 'akashanilinbox@gmail.com', '09847554867', 'refdsdsd', '2021-07-18 16:15:32', '2021-07-18 16:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `id` int(11) NOT NULL,
  `uuid` varchar(250) NOT NULL,
  `name` varchar(100) NOT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`id`, `uuid`, `name`, `updated_at`, `created_at`) VALUES
(1, 'a0f3afcc-6f1f-421b-a91f-c6984c8cf445', 'Gym Bag', '2021-01-22 08:23:01', '2021-01-22 08:23:01'),
(2, 'f5561ef6-37d0-4e8d-8555-68f1758edc81', 'Shaker', '2021-01-22 08:23:13', '2021-01-22 08:23:13'),
(3, '7119537b-49b4-46dd-b39a-89469cb5f27f', 'Protien Biscut', '2021-01-22 08:23:26', '2021-01-22 08:23:26'),
(4, 'da65b83a-05d7-495d-94e8-360197241e23', 'Gym Gloves', '2021-01-22 08:24:49', '2021-01-22 08:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `merchants`
--

CREATE TABLE `merchants` (
  `id` int(11) NOT NULL,
  `uuid` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `created_at` varchar(250) DEFAULT NULL,
  `updated_at` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `month_and_year` varchar(100) DEFAULT NULL,
  `payment_id` varchar(100) DEFAULT NULL,
  `razorpay_id` varchar(100) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date DEFAULT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`id`, `user_id`, `month_and_year`, `payment_id`, `razorpay_id`, `date`, `updated_at`, `created_at`) VALUES
(8, 15, '2021-12', 'order_HUqbtwcXcnNQ8E', 'pay_HUqboIaw4vXWOo', '2021-07-04', '2021-07-04', '2021-07-04'),
(9, 15, '2021-04', 'order_HaRwObXqZohTeS', 'pay_HaRwIZTH1GkTkc', '2021-07-18', '2021-07-18', '2021-07-18'),
(10, 15, '2021-04', 'order_HaRz3Hb7eTbr4R', 'pay_HaRwIZTH1GkTkc', '2021-07-18', '2021-07-18', '2021-07-18'),
(11, 15, '2021-04', 'order_HaRzVaifZread9', 'pay_HaRwIZTH1GkTkc', '2021-07-18', '2021-07-18', '2021-07-18'),
(12, 15, '2021-04', 'order_HaS0pA5RVYuwZ3', 'pay_HaRwIZTH1GkTkc', '2021-07-18', '2021-07-18', '2021-07-18'),
(13, 15, '2021-04', 'order_HaS1DGRKEjAmfJ', 'pay_HaRwIZTH1GkTkc', '2021-07-18', '2021-07-18', '2021-07-18'),
(14, 15, '2021-04', 'order_HaS1iUvhf0orc6', 'pay_HaRwIZTH1GkTkc', '2021-07-18', '2021-07-18', '2021-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `oders`
--

CREATE TABLE `oders` (
  `id` int(11) NOT NULL,
  `product` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(300) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `total` int(11) DEFAULT NULL,
  `razorpay_id` varchar(300) DEFAULT NULL,
  `payment_id` varchar(300) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `oder_confirm` int(11) NOT NULL DEFAULT 0,
  `oder_packed` int(11) NOT NULL DEFAULT 0,
  `oder_shipped` int(11) NOT NULL DEFAULT 0,
  `oder_out_for_delivery` int(11) NOT NULL DEFAULT 0,
  `oder_delivered` int(11) NOT NULL DEFAULT 0,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oders`
--

INSERT INTO `oders` (`id`, `product`, `user_id`, `address`, `mobile`, `total`, `razorpay_id`, `payment_id`, `status`, `date`, `oder_confirm`, `oder_packed`, `oder_shipped`, `oder_out_for_delivery`, `oder_delivered`, `created_at`, `updated_at`) VALUES
(61, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"}]', 15, 'ggsgsg', '9785756757', 1000, 'pay_HUUq9MtaVtVVUr', 'order_HUUqHzhwxNtSdm', 1, '2021-07-03', 1, 1, 1, 1, 1, '2021-07-03', '2021-07-03'),
(62, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"}]', 15, 'hhjhjhhhkhk', '9785756757', 1000, 'pay_HUV7dT8zKALLIV', 'order_HUV7jGjXwr97WE', 1, '2021-07-03', 1, 1, 1, 0, 0, '2021-07-03', '2021-07-18'),
(63, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'dffsff323232', '9785756757', 3222, 'pay_HUW2956obxSfhW', 'order_HUW2F6T8d6i8P1', 1, '2021-07-03', 1, 1, 1, 1, 1, '2021-07-03', '2021-07-04'),
(64, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(65, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(66, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(67, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(68, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(69, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(70, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(71, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(72, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(73, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(74, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(75, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(76, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(77, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(78, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(79, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(80, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(81, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(82, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(83, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(84, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(85, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(86, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(87, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(88, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(89, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(90, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(91, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 3222, NULL, NULL, 0, '2021-07-03', 0, 0, 0, 0, 0, '2021-07-03', '2021-07-03'),
(92, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"},{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 6444, 'pay_HUp5qPjGrJpXen', 'order_HUpFcv2pzYGWw4', 1, '2021-07-04', 0, 0, 0, 0, 0, '2021-07-04', '2021-07-04'),
(93, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"},{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Bus station, Kiliyileth Plaza South of KSRTC, Kayamkulam, Kerala 690502', '9785756757', 6444, NULL, NULL, 0, '2021-07-04', 0, 0, 0, 0, 0, '2021-07-04', '2021-07-04'),
(94, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"},{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Bus station, Kiliyileth Plaza South of KSRTC, Kayamkulam, Kerala 690502', '9785756757', 6444, NULL, NULL, 0, '2021-07-04', 0, 0, 0, 0, 0, '2021-07-04', '2021-07-04'),
(95, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"},{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Bus station, Kiliyileth Plaza South of KSRTC, Kayamkulam, Kerala 690502', '9785756757', 6444, NULL, NULL, 0, '2021-07-04', 0, 0, 0, 0, 0, '2021-07-04', '2021-07-04'),
(96, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"},{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Bus station, Kiliyileth Plaza South of KSRTC, Kayamkulam, Kerala 690502', '9785756757', 6444, 'pay_HUs38C1dKZmfs0', 'order_HUs3IrOFokHL4S', 1, '2021-07-04', 0, 0, 0, 0, 0, '2021-07-04', '2021-07-04'),
(97, '[]', 15, 'Bus station, Kiliyileth Plaza South of KSRTC, Kayamkulam, Kerala 690502', '9785756757', 0, NULL, NULL, 0, '2021-07-04', 0, 0, 0, 0, 0, '2021-07-04', '2021-07-04'),
(98, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"}]', 15, 'Bus station, Kiliyileth Plaza South of KSRTC, Kayamkulam, Kerala 690502', '9785756757', 1000, 'pay_HUtAK6x4yzw28b', 'order_HUtARJIT5AGRSC', 1, '2021-07-04', 0, 0, 0, 0, 0, '2021-07-04', '2021-07-04'),
(99, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"}]', 15, 'Bus station, Kiliyileth Plaza South of KSRTC, Kayamkulam, Kerala 690502', '9785756757', 1000, 'pay_HUtEuMt4jhxsEm', 'order_HUtF2fUNoe4Mmm', 1, '2021-07-04', 0, 0, 0, 0, 0, '2021-07-04', '2021-07-04'),
(100, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"}]', 15, 'Bus station, Kiliyileth Plaza South of KSRTC, Kayamkulam, Kerala 690502', '9785756757', 1000, 'pay_HUtOzW7jelkvF5', 'order_HUtP7v11lnVHxN', 1, '2021-07-04', 0, 0, 0, 0, 0, '2021-07-04', '2021-07-04'),
(101, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"}]', 15, 'Bus station, Kiliyileth Plaza South of KSRTC, Kayamkulam, Kerala 690502', '9785756757', 1000, 'pay_HUtTm8l2J15OHm', 'order_HUtTsVYbg3i0LH', 1, '2021-07-04', 0, 0, 0, 0, 0, '2021-07-04', '2021-07-04'),
(102, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"},{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Bus station, Kiliyileth Plaza South of KSRTC, Kayamkulam, Kerala 690502', '9785756757', 3222, 'pay_HUtVOn5l8nzDVT', 'order_HUtVUX4I5xzPyW', 1, '2021-07-04', 0, 0, 0, 0, 0, '2021-07-04', '2021-07-04'),
(103, '[{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Kayamkulam, Kerala 690502', '9785756757', 2222, NULL, NULL, 0, '2021-07-04', 0, 0, 0, 0, 0, '2021-07-04', '2021-07-04'),
(104, '[{\"id\":38,\"uuid\":\"ec55c202-c0d5-44ab-809d-5197a0d41f9b\",\"name\":\"suku\",\"discription\":\"xcxcxcx\",\"quantity\":\"3.5 Lbs\",\"category_id\":1,\"brand_id\":2,\"merchant_id\":18,\"image\":\"60e0886d91e9e.jpg\",\"price\":2222,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T15:55:25.000000Z\",\"updated_at\":\"2021-07-03T15:55:52.000000Z\"}]', 15, 'Bus station, Kiliyileth Plaza South of KSRTC, Kayamkulam, Kerala 690502', '9785756757', 2222, 'pay_HUtvLUvCqippg0', 'order_HUtvRs0YEslkpX', 1, '2021-07-04', 0, 0, 0, 0, 0, '2021-07-04', '2021-07-04'),
(105, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"}]', 17, 'Sivasadanam, South kochumuri,Oachira P.O Krishnapuram, Alappuzha', '09847554867', 1000, NULL, NULL, 0, '2021-07-18', 0, 0, 0, 0, 0, '2021-07-18', '2021-07-18'),
(106, '[{\"id\":37,\"uuid\":\"7f24f3e0-d9c7-4724-85e5-768357bb3b92\",\"name\":\"Xerox\",\"discription\":\"nice\",\"quantity\":\"1 Lbs\",\"category_id\":1,\"brand_id\":1,\"merchant_id\":17,\"image\":\"60e077c9a490a.jpg\",\"price\":1000,\"status\":1,\"admin_confirm\":1,\"created_at\":\"2021-07-03T14:44:26.000000Z\",\"updated_at\":\"2021-07-03T14:46:11.000000Z\"}]', 15, 'Sivasadanam, South kochumuri,Oachira P.O Krishnapuram, Alappuzha', '09847554867', 1000, 'pay_HaRuiLiBdga3XL', 'order_HaRusURj0rxuHh', 1, '2021-07-18', 0, 0, 0, 0, 0, '2021-07-18', '2021-07-18');

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
-- Table structure for table `pays`
--

CREATE TABLE `pays` (
  `id` int(11) NOT NULL,
  `rzp_paymentId` varchar(200) NOT NULL,
  `rzp_orderId` varchar(200) NOT NULL,
  `rzp_signature` varchar(200) NOT NULL,
  `amount` int(11) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pays`
--

INSERT INTO `pays` (`id`, `rzp_paymentId`, `rzp_orderId`, `rzp_signature`, `amount`, `created_at`, `updated_at`) VALUES
(1, 'pay_HfzVmU2uI9FY4y', 'order_HfzVgAVkcvvNkw', '79e091028a516facd21eb0647d8727fbec4736fdf5445468460165c798c741dd', 12300, '2021-08-01', '2021-08-01'),
(2, 'pay_HfzthHXyOQXugp', 'order_HfztZudVNJsh3c', 'b552dc603f51de216c9d0d35ffc0aa0867ff5ff7f6664dc841ba1e403df94a7e', 12300, '2021-08-01', '2021-08-01'),
(3, 'pay_HfzuUdLkCLklzg', 'order_HfzuAJQMntEXE5', '58f47dfe0ef31318a94d815cab13272350b3f71a494c8f7a9510c255038a5c02', 12300, '2021-08-01', '2021-08-01'),
(4, 'pay_Hfzx9YlbuC2Ka1', 'order_Hfzx4HTASvGrSo', 'f56890b603aeff288e271c2bfbc507b14dc134272700164929ca462825f04007', 12300, '2021-08-01', '2021-08-01'),
(5, 'pay_HfzyqaD5JadTGU', 'order_HfzylizvdMuLAs', 'e79067060354b49f43a476149c73f7a933f2c25dc5efb1c92b267f45875dd98d', 123, '2021-08-01', '2021-08-01'),
(6, 'pay_Hg07DEHuOVCQwe', 'order_Hg05qEqV9aBkgX', 'b9c32830504bb94528016e840b0d735207e461f481113c983cb20b13279ba63c', 123, '2021-08-01', '2021-08-01'),
(7, 'pay_Hg0J1cREUnb6Ew', 'order_Hg0IZMGjZlhkW8', 'c61ad3a8843c67c022c802ccd806f699338cfa6020a3c855e6fba7c9e06d5769', 123, '2021-08-01', '2021-08-01'),
(8, 'pay_Hg0NHenQSzdhdJ', 'order_Hg0Mt4UKBZBDto', 'ecccaa5f82f46854a17db2dba652889f58cc67f50c1748f4c75fc928c5980d0b', 123, '2021-08-01', '2021-08-01'),
(9, 'pay_Hg0UjCBLVJQA0s', 'order_Hg0UdibinyNQHS', '1267a1a3f2a5eb66f625a554b76d07d9137a848a965d2c91759d2619ee4d6d38', 123, '2021-08-01', '2021-08-01'),
(10, 'pay_Hg0eKZ2MSW5HQo', 'order_Hg0eDQNxDchyrD', 'c5b50660fda8ee74e11c1c048066e154668affc9bed7548aac0974ac5d89e759', 1234, '2021-08-01', '2021-08-01'),
(11, 'pay_Hg0eKZ2MSW5HQo', 'order_Hg0eDQNxDchyrD', 'c5b50660fda8ee74e11c1c048066e154668affc9bed7548aac0974ac5d89e759', 1234, '2021-08-01', '2021-08-01'),
(12, 'pay_Hg105cbzCuox8b', 'order_Hg0zFHeGknPhFq', 'c6d1b811500edc3592db86313cd0ff87213a2894d928057abd4e9392e9c32421', 10000, '2021-08-01', '2021-08-01'),
(13, 'pay_Hg19ZGe2S1vN1d', 'order_Hg15v49tucf45D', '97c103d26fe82301aee2a200546a712ea84299936d974dedbc5952fa059d5df7', 500, '2021-08-01', '2021-08-01'),
(14, 'pay_Hg1Y7hItWS9qmc', 'order_Hg1XeRGjeR9AgF', 'cafe110ab7a1359d51cb559eb1ea5bfc437914eaef5adb8d993fcfa858f02a57', 123, '2021-08-01', '2021-08-01'),
(15, 'pay_Hg1aFMTXWr7SrT', 'order_Hg1ZN2dDSbj7Gq', 'f03e788453b2b0f3e020de8b2a43c06db08b712d986bb30ef2a75e2a148ebaa1', 588, '2021-08-01', '2021-08-01'),
(16, 'pay_Hg28leC4wCCYfE', 'order_Hg278PUtv4PH7Q', 'e840965bac1f122e9e6536f468d14a14063e0c163ed09151b602cb2305e14d41', 123, '2021-08-01', '2021-08-01'),
(17, 'pay_HgIu6Bvt8IgWXk', 'order_HgItXdRU4OoJSo', '1fc6e4a194ebc82f70cb4aab75dca68af511e08b242e093e7cb79513e5d34f16', 555, '2021-08-02', '2021-08-02');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) NOT NULL,
  `uuid` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `discription` varchar(1000) NOT NULL,
  `quantity` varchar(100) DEFAULT NULL,
  `category_id` bigint(20) DEFAULT NULL,
  `brand_id` bigint(20) DEFAULT NULL,
  `merchant_id` int(11) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `price` bigint(20) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `admin_confirm` int(11) NOT NULL DEFAULT 0,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `uuid`, `name`, `discription`, `quantity`, `category_id`, `brand_id`, `merchant_id`, `image`, `price`, `status`, `admin_confirm`, `created_at`, `updated_at`) VALUES
(37, '7f24f3e0-d9c7-4724-85e5-768357bb3b92', 'Xerox', 'nice', '1 Lbs', 1, 1, 17, '60e077c9a490a.jpg', 1000, 1, 1, '2021-07-03 14:44:26', '2021-07-03 14:46:11'),
(38, 'ec55c202-c0d5-44ab-809d-5197a0d41f9b', 'suku', 'xcxcxcx', '3.5 Lbs', 1, 2, 18, '60e0886d91e9e.jpg', 2222, 1, 1, '2021-07-03 15:55:25', '2021-07-03 15:55:52');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(11) NOT NULL,
  `uuid` varchar(300) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `amount` int(150) NOT NULL,
  `weight` int(50) NOT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `age` int(100) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `health` varchar(150) DEFAULT NULL,
  `height` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `uuid`, `full_name`, `email`, `mobile`, `address`, `amount`, `weight`, `created_at`, `updated_at`, `age`, `date`, `health`, `height`) VALUES
(1, 'b0ba5e22-9675-42df-a78d-c73632db9e0a', 'AKASH A', 'akashanilinbox@gmail.com', '09847554867', 'SIVASADANAM, SOUTH KOCHUMURI, OACHIRA P.O', 1000, 56, '2021-02-22 14:46:13', '2021-02-22 14:46:13', NULL, '2021-02-22', NULL, NULL),
(2, 'ba2b4054-4aa1-48e3-8186-e881bb16ff7a', 'AKASH A', 'akashanilinbox@gmail.com', '09847554867', 'SIVASADANAM, SOUTH KOCHUMURI, OACHIRA P.O', 1500, 80, '2021-02-22 15:09:40', '2021-02-22 15:09:40', NULL, '2021-02-22', 'heart', 177),
(3, '56007df3-ee3d-4a97-af00-6fb1235ca466', 'AKASH A', 'akashanilinbox@gmail.com', '09847554867', 'SIVASADANAM, SOUTH KOCHUMURI, OACHIRA P.O', 1000, 123, '2021-02-22 16:25:03', '2021-02-22 16:25:03', 33, '2021-02-22', 'no', 188),
(4, '240cd94d-91b1-4775-8d62-4fc6c743bbf6', 'AKASH A', 'akashanilinbox@gmail.com', '09847554867', 'SIVASADANAM, SOUTH KOCHUMURI, OACHIRA P.O', 1000, 123, '2021-02-22 16:25:40', '2021-02-22 16:25:40', 33, '2021-02-22', 'no', 188),
(5, 'a5a477eb-701f-4fb5-b899-7c33f045860e', 'AKASH A', 'akashanilinbox@gmail.com', '09847554867', 'SIVASADANAM, SOUTH KOCHUMURI, OACHIRA P.O', 3000, 55, '2021-02-22 16:33:40', '2021-02-22 16:33:40', 66, '2021-02-22', NULL, 177);

-- --------------------------------------------------------

--
-- Table structure for table `supplements`
--

CREATE TABLE `supplements` (
  `id` int(11) NOT NULL,
  `uuid` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplements`
--

INSERT INTO `supplements` (`id`, `uuid`, `name`, `updated_at`, `created_at`) VALUES
(1, '52e2d070-aab1-47dd-9a5b-668de017e301', 'Mass Gainer', '2021-01-22 08:12:55', '2021-01-22 08:12:55'),
(2, '828bd806-a6f0-4b54-ba80-418100fdbce4', 'Whey Protein', '2021-01-22 08:14:03', '2021-01-22 08:14:03'),
(3, 'cbc1b5b6-b2ad-4af4-b717-396105c7a533', 'Beef Protien', '2021-01-22 08:14:15', '2021-01-22 08:14:15'),
(4, 'd2564672-e90d-438c-a1e6-242b785a0b61', 'Creatine', '2021-01-22 08:14:41', '2021-01-22 08:14:41'),
(5, '6b67fe37-ea73-4753-8e9e-82ba35a05ba6', 'BCCA', '2021-01-22 08:14:57', '2021-01-22 08:14:57'),
(6, 'a0cfaf60-f3e6-4ee7-bf52-7116780fc7c1', 'Capsule', '2021-01-22 08:15:08', '2021-01-22 08:15:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `health` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `register_check` int(11) NOT NULL DEFAULT 0,
  `payment_type` int(11) DEFAULT NULL,
  `razorpay_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_done` int(11) NOT NULL DEFAULT 0,
  `payment_id` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group` int(11) NOT NULL DEFAULT 0,
  `company` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_details` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prev_exp` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `uuid`, `name`, `email`, `mobile`, `address`, `weight`, `height`, `health`, `age`, `amount`, `date`, `register_check`, `payment_type`, `razorpay_id`, `payment_done`, `payment_id`, `email_verified_at`, `password`, `remember_token`, `group`, `company`, `company_details`, `prev_exp`, `created_at`, `updated_at`) VALUES
(15, '7dea60fc-6028-4d62-a19c-6ac369a904c8', 'akash', 'akashanilinbox@gmail.com', '9785756757', 'Bus station, Kiliyileth Plaza South of KSRTC, Kayamkulam, Kerala 690502', 55, 167, NULL, 24, 1000, '2021-07-03', 1, NULL, 'pay_HUqZjWD5caTCnW', 1, 'order_HUqZqd5H5f39cL', NULL, '$2y$10$BnJjzTHUpppRGsCl5.oBtOqueiUcBhfjVroPw/J9oMIUWW7AuIvcu', NULL, 0, NULL, NULL, NULL, '2021-07-03 08:07:50', '2021-07-04 06:33:49'),
(16, '96cc45b1-1b85-47bd-9f4e-aa8278991322', 'vinod', 'akashanil031098@gmail.com', '9785756759', NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-03', 0, NULL, NULL, 0, NULL, NULL, '$2y$10$nbeZwf.RpR2L2siIOTf0/uhBkPtN3A.J3NsyzP6H.ULgdZsQGocJS', NULL, 0, NULL, NULL, NULL, '2021-07-03 08:49:30', '2021-07-03 08:49:30'),
(17, '1e3d6efa-0836-49ef-8670-78362d70c7cb', 'gjgjgj', '1@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-03', 0, NULL, NULL, 0, NULL, NULL, '$2y$10$uXXzh78yMPdVZMOYU5AUeuVxwpDHujjeZ8MA2V05y8KAQSpImR4lC', NULL, 1, 'lulu', 'ffff', NULL, '2021-07-03 09:09:04', '2021-07-03 09:09:04'),
(18, 'aa25a865-6777-44bf-9b29-484532aeda60', NULL, '2@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-03', 0, NULL, NULL, 0, NULL, NULL, '$2y$10$Jg18H1TiCmQdwqjsmIO3a.lf3vum5Bsy.fuGcRJGx14WbgR0z6WOO', NULL, 1, 'saho', 'fsds', NULL, '2021-07-03 10:18:19', '2021-07-03 10:18:19'),
(19, 'bc651f24-da38-4a59-8b09-46add9a30f67', 'vinod', 'sabu@gmail.com', '9785756753', NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-04', 0, NULL, NULL, 0, NULL, NULL, '$2y$10$4XEjimFH1LJ6bYvoRXiPiOdivB0yss5ivA8GXSxGThzEJhWj.g3dq', NULL, 0, NULL, NULL, NULL, '2021-07-04 03:35:37', '2021-07-04 03:35:37'),
(20, '9344e5ac-e9f2-4f80-a760-ce459de8f79e', 'vinod', 'admin@greenmedia.co', '9867567888', NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-04', 0, NULL, NULL, 0, NULL, NULL, '$2y$10$X8/KTsiDVGxg/o/i1P7avOpXDqd8hqeM5U8/t9QbCTaMDAvVTYcjy', NULL, 0, NULL, NULL, NULL, '2021-07-04 03:58:27', '2021-07-04 03:58:27'),
(21, '40239094-ef90-4a9f-b0b4-9e4478c648e7', 'akash demo', 'admin@hms.com', '5353535399', NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-04', 0, NULL, NULL, 0, NULL, NULL, '$2y$10$7cs7RRpznZBnsxOypslhdeNlan3t2VIvunCPIvks6qnUZ3OB8dAVi', NULL, 0, NULL, NULL, NULL, '2021-07-04 04:02:44', '2021-07-04 04:02:44'),
(22, '452b5954-383a-4416-a8bd-29b85478324b', 'vinod', 'admin@triworld.com', '9785756752', NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-04', 0, NULL, NULL, 0, NULL, NULL, '$2y$10$ihB.7LeuN9UcL8dxcVG2lO6ujKHRTq2GxnCzJ1rhi5c6o5FHkt/vK', NULL, 0, NULL, NULL, NULL, '2021-07-04 04:07:59', '2021-07-04 04:07:59'),
(23, '1d34defc-ad2d-4791-8246-d84a6ca3ab18', 'akash demo', 'akashanilineebox@gmail.com', '97857356757', NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-04', 0, NULL, NULL, 0, NULL, NULL, '$2y$10$ReyifOZrPHN0JSmzzeriBe9F5TkJ2QsgwtJtMeU1V7qxiSeya36vC', NULL, 0, NULL, NULL, NULL, '2021-07-04 04:12:30', '2021-07-04 04:12:30'),
(24, '11a38f13-c713-482b-8517-58881fc19095', 'Accounts', 'akash33anil031098@gmail.com', '1234567897', NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-04', 0, NULL, NULL, 0, NULL, NULL, '$2y$10$/Od19Sdpxw.3N9mGpiG7EeJs8Vi3dwNQKW4LSTa5zPbGuC36sc3ri', NULL, 0, NULL, NULL, NULL, '2021-07-04 04:20:23', '2021-07-04 04:20:23'),
(25, '50f84ad8-94c4-46de-a5b2-17ae1c224779', 'vinod', 'akas88hanilinbox@gmail.com', '97857567570', NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-04', 0, NULL, NULL, 0, NULL, NULL, '$2y$10$A3qx0arxF3njpP2neIpf/uPcsmhUtg.wYGC/tcMecstAwNAfT5NlG', NULL, 0, NULL, NULL, NULL, '2021-07-04 04:21:25', '2021-07-04 04:21:25'),
(26, 'f987cd8e-a5ba-4af2-8374-62c2c3cb91bc', 'vinod', 'akas888anilinbox@gmail.com', '9785056757', NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-04', 0, NULL, NULL, 0, NULL, NULL, '$2y$10$QdVbOzBZ9d5QFbGCBx6b0.UWICToA65L8oqD3jvMPK8t2tnqD0Nhi', NULL, 0, NULL, NULL, NULL, '2021-07-04 04:23:50', '2021-07-04 04:23:50'),
(27, 'fc56815b-3f29-4686-bae5-d245d6641504', 'vinod', 'akashanilinbiiox@gmail.com', '9705756757', NULL, NULL, NULL, NULL, NULL, NULL, '2021-07-04', 0, NULL, NULL, 0, NULL, NULL, '$2y$10$jNu74KVog0y0wABSdAC52.7LQOsH3bPreXMPaZ2JK1ZT8T6LLwVK.', NULL, 0, NULL, NULL, NULL, '2021-07-04 04:35:23', '2021-07-04 04:35:23'),
(28, '1258bfd3-09c7-4808-816a-96b8ca22f4bc', 'Sugu', '5@gmail.com', NULL, NULL, 74, 167, NULL, 25, NULL, '2021-07-04', 0, NULL, NULL, 0, NULL, NULL, '$2y$10$kOgOBLShKDfFrL3y16yVbeMoPzMiART0vbHYXDHnSKBG3iH3iS/4O', NULL, 2, NULL, NULL, NULL, '2021-07-04 06:47:27', '2021-07-04 06:47:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uuid` (`uuid`);

--
-- Indexes for table `attendances`
--
ALTER TABLE `attendances`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `date` (`date`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uuid` (`uuid`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uuid` (`uuid`);

--
-- Indexes for table `diets`
--
ALTER TABLE `diets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uuid` (`uuid`);

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uuid` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `months`
--
ALTER TABLE `months`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oders`
--
ALTER TABLE `oders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pays`
--
ALTER TABLE `pays`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uuid` (`uuid`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uuid` (`uuid`);

--
-- Indexes for table `supplements`
--
ALTER TABLE `supplements`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uuid` (`uuid`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attendances`
--
ALTER TABLE `attendances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `diets`
--
ALTER TABLE `diets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `materials`
--
ALTER TABLE `materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `months`
--
ALTER TABLE `months`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `oders`
--
ALTER TABLE `oders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `pays`
--
ALTER TABLE `pays`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `supplements`
--
ALTER TABLE `supplements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
