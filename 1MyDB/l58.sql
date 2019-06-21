-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2019 at 05:27 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l58`
--

-- --------------------------------------------------------

--
-- Table structure for table `cancels`
--

CREATE TABLE `cancels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderdetail_id` int(11) NOT NULL,
  `customers_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cancels`
--

INSERT INTO `cancels` (`id`, `orderdetail_id`, `customers_id`, `created_at`, `updated_at`) VALUES
(7, 15, 2, '2019-06-21 08:13:12', '2019-06-21 08:13:12');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `session_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `quantity`, `session_id`, `created_at`, `updated_at`) VALUES
(22, 32, 1, 'febVcUSYI2TPYgCwwjprimKoxJjs4IzDUCecW6MS', '2019-06-21 08:22:56', '2019-06-21 08:22:56');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `parent_id`, `order`, `name`, `created_at`, `updated_at`, `image`) VALUES
(2, NULL, 1, 'Apple', '2019-06-13 02:36:00', '2019-06-18 05:46:51', 'categories\\June2019\\oOkG8R0UCudBBCRqY53a.png'),
(3, NULL, 1, 'Samsung', '2019-06-13 02:40:00', '2019-06-18 05:51:16', 'categories\\June2019\\YatF02kVCt3ZtQqXofjP.png'),
(4, NULL, 1, 'Xiaumi', '2019-06-13 04:24:00', '2019-06-21 07:54:44', 'categories\\June2019\\QBMZc1BbzSrTtiYgQ8yb.png');

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT 0,
  `browse` tinyint(1) NOT NULL DEFAULT 1,
  `read` tinyint(1) NOT NULL DEFAULT 1,
  `edit` tinyint(1) NOT NULL DEFAULT 1,
  `add` tinyint(1) NOT NULL DEFAULT 1,
  `delete` tinyint(1) NOT NULL DEFAULT 1,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 1, 1, 0, 0, 1, '{}', 1),
(2, 1, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 0, 0, 0, '{}', 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 9),
(29, 6, 'id', 'text', 'Id', 1, 1, 1, 0, 0, 0, '{}', 1),
(30, 6, 'customer_id', 'text', 'Customer Id', 1, 1, 1, 0, 0, 1, '{}', 2),
(31, 6, 'orderdetail_id', 'text', 'Orderdetail Id', 1, 1, 0, 0, 0, 1, '{}', 3),
(32, 6, 'image', 'image', 'Image', 1, 1, 1, 0, 0, 1, '{}', 4),
(33, 6, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(34, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(35, 7, 'id', 'text', 'Id', 1, 1, 1, 0, 0, 1, '{}', 1),
(36, 7, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(37, 7, 'bank_number', 'text', 'Bank Number', 1, 1, 1, 1, 1, 1, '{}', 3),
(38, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(39, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(40, 8, 'id', 'text', 'Id', 1, 1, 1, 0, 0, 0, '{}', 1),
(41, 8, 'customer_id', 'text', 'Customer Id', 1, 1, 1, 0, 0, 0, '{}', 2),
(42, 8, 'pay_id', 'text', 'Pay Id', 1, 1, 1, 0, 0, 0, '{}', 3),
(43, 8, 'address', 'text', 'Address', 1, 1, 1, 0, 0, 0, '{}', 4),
(44, 8, 'phone', 'number', 'Phone', 1, 1, 1, 0, 0, 0, '{}', 5),
(45, 8, 'total', 'number', 'Total', 1, 1, 1, 0, 0, 0, '{}', 6),
(46, 8, 'status', 'text', 'สถานะ[pending,shipped,success,cancel]', 1, 1, 1, 0, 0, 0, '{}', 7),
(47, 8, 'created_at', 'timestamp', 'สั่งเมื่อ', 0, 1, 1, 1, 0, 1, '{}', 8),
(48, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(49, 9, 'id', 'text', 'Id', 1, 1, 1, 0, 0, 1, '{}', 0),
(50, 9, 'customer_id', 'text', 'Customer Id', 1, 1, 1, 0, 0, 1, '{}', 2),
(51, 9, 'order_id', 'text', 'Order Id', 1, 1, 1, 0, 0, 1, '{}', 3),
(52, 9, 'product_id', 'text', 'Product Id', 1, 1, 1, 0, 0, 1, '{}', 4),
(53, 9, 'price', 'number', 'Price', 1, 1, 1, 0, 0, 1, '{}', 5),
(54, 9, 'qty', 'number', 'Qty', 1, 1, 1, 0, 0, 1, '{}', 6),
(55, 9, 'total', 'number', 'Total', 1, 0, 0, 0, 0, 0, '{}', 7),
(56, 9, 'status', 'text', 'สถานะ[pending,shipped,success,cancel]', 1, 1, 1, 1, 1, 1, 'null', 8),
(57, 9, 'created_at', 'timestamp', 'สั่งเมื่อ', 0, 1, 1, 1, 0, 1, '{}', 9),
(58, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(59, 10, 'id', 'text', 'Id', 1, 1, 1, 0, 0, 1, '{}', 1),
(60, 10, 'product_id', 'text', 'Product Id', 1, 1, 1, 0, 0, 1, '{}', 2),
(61, 10, 'customer_id', 'text', 'Customer Id', 1, 1, 1, 0, 0, 1, '{}', 3),
(62, 10, 'quantity', 'text', 'Quantity', 1, 1, 1, 0, 0, 1, '{}', 4),
(63, 10, 'session_id', 'text', 'Session Id', 1, 1, 1, 0, 0, 1, '{}', 5),
(64, 10, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(65, 10, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(66, 11, 'id', 'text', 'Id', 1, 1, 1, 0, 0, 0, '{}', 1),
(67, 11, 'orderdetail_id', 'text', 'Orderdetail Id', 1, 1, 1, 0, 0, 1, '{}', 2),
(68, 11, 'customers_id', 'text', 'Customers Id', 1, 1, 1, 0, 0, 1, '{}', 3),
(69, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(70, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(71, 8, 'order_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 0, 0, 0, '{\"model\":\"App\\\\user\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"customer_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"cancels\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(72, 8, 'order_belongsto_payment_relationship', 'relationship', 'payments', 0, 1, 1, 0, 0, 0, '{\"model\":\"App\\\\Payment\",\"table\":\"payments\",\"type\":\"belongsTo\",\"column\":\"pay_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"cancels\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(73, 9, 'order_detail_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 0, 0, 1, '{\"model\":\"App\\\\user\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"customer_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"cancels\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(74, 9, 'order_detail_belongsto_product_relationship', 'relationship', 'products', 0, 1, 1, 0, 0, 1, '{\"model\":\"App\\\\Product\",\"table\":\"products\",\"type\":\"belongsTo\",\"column\":\"product_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"cancels\",\"pivot\":\"0\",\"taggable\":\"0\"}', 12),
(75, 6, 'report_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 0, 0, 1, '{\"model\":\"App\\\\user\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"customer_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"cancels\",\"pivot\":\"0\",\"taggable\":\"0\"}', 7),
(76, 11, 'cancel_belongsto_user_relationship', 'relationship', 'users', 0, 1, 1, 0, 0, 0, '{\"model\":\"App\\\\user\",\"table\":\"users\",\"type\":\"belongsTo\",\"column\":\"customers_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"cancels\",\"pivot\":\"0\",\"taggable\":\"0\"}', 6),
(77, 12, 'id', 'text', 'Id', 1, 1, 1, 0, 0, 1, '{}', 1),
(78, 12, 'category_id', 'text', 'Category Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(79, 12, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 3),
(80, 12, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 4),
(81, 12, 'description', 'text_area', 'Description', 0, 1, 1, 1, 1, 1, '{}', 5),
(82, 12, 'qty', 'number', 'Qty', 1, 1, 1, 1, 1, 1, '{}', 6),
(83, 12, 'price', 'number', 'Price', 1, 1, 1, 1, 1, 1, '{}', 7),
(84, 12, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 8),
(85, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 9),
(86, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(87, 13, 'id', 'text', 'Id', 1, 1, 1, 0, 0, 1, '{}', 1),
(88, 13, 'parent_id', 'text', 'Parent Id', 0, 1, 1, 0, 0, 1, '{}', 2),
(89, 13, 'order', 'text', 'Order', 1, 1, 1, 0, 0, 1, '{}', 3),
(90, 13, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 4),
(91, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 5),
(92, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(93, 12, 'product_belongsto_category_relationship', 'relationship', 'categories', 0, 1, 1, 1, 1, 1, '{\"model\":\"App\\\\category\",\"table\":\"categories\",\"type\":\"belongsTo\",\"column\":\"category_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"cancels\",\"pivot\":\"0\",\"taggable\":\"0\"}', 11),
(94, 10, 'cart_belongsto_product_relationship', 'relationship', 'products', 0, 1, 1, 0, 0, 1, '{\"model\":\"App\\\\Product\",\"table\":\"products\",\"type\":\"belongsTo\",\"column\":\"product_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"cancels\",\"pivot\":\"0\",\"taggable\":\"0\"}', 8),
(96, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 1, 1, 1, 1, 1, '{}', 6),
(97, 14, 'id', 'text', 'Id', 1, 1, 1, 0, 0, 0, '{}', 1),
(98, 14, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 2),
(99, 14, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 3),
(100, 14, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(101, 13, 'image', 'image', 'Image', 0, 1, 1, 1, 1, 1, '{}', 7);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT 0,
  `server_side` tinyint(4) NOT NULL DEFAULT 0,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'voyager-person', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2019-06-13 02:17:43', '2019-06-13 04:37:25'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'voyager-list', 'TCG\\Voyager\\Models\\Menu', NULL, '', '', 1, 0, NULL, '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(6, 'reports', 'reports', 'Report', 'Reports', NULL, 'App\\Report', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-13 02:25:16', '2019-06-13 04:36:28'),
(7, 'payments', 'payments', 'Payment', 'Payments', NULL, 'App\\Payment', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-13 02:25:30', '2019-06-13 04:35:30'),
(8, 'orders', 'orders', 'Order', 'Orders', NULL, 'App\\Order', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-13 02:25:40', '2019-06-21 08:21:54'),
(9, 'order_details', 'order-details', 'Order Detail', 'Order Details', NULL, 'App\\OrderDetail', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-13 02:26:11', '2019-06-21 08:21:36'),
(10, 'carts', 'carts', 'Cart', 'Carts', NULL, 'App\\Cart', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-13 02:29:19', '2019-06-13 04:34:17'),
(11, 'cancels', 'cancels', 'Cancel', 'Cancels', NULL, 'App\\Cancel', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-13 02:30:37', '2019-06-13 04:33:53'),
(12, 'products', 'products', 'Product', 'Products', NULL, 'App\\Product', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-13 04:10:11', '2019-06-13 04:35:58'),
(13, 'categories', 'categories', 'Category', 'Categories', NULL, 'App\\Category', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-13 04:11:16', '2019-06-18 05:45:20'),
(14, 'slide_shows', 'slide-shows', 'Slide Show', 'Slide Shows', NULL, 'App\\SlideShow', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-06-13 04:36:50', '2019-06-13 04:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-06-13 02:17:43', '2019-06-13 02:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'voyager-boat', NULL, NULL, 10, '2019-06-13 02:17:43', '2019-06-13 04:37:44', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'voyager-images', NULL, NULL, 13, '2019-06-13 02:17:43', '2019-06-13 04:37:44', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'voyager-person', NULL, NULL, 12, '2019-06-13 02:17:43', '2019-06-13 04:37:44', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'voyager-lock', NULL, NULL, 11, '2019-06-13 02:17:43', '2019-06-13 04:37:44', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'voyager-tools', NULL, NULL, 14, '2019-06-13 02:17:43', '2019-06-13 04:37:38', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'voyager-list', NULL, 5, 1, '2019-06-13 02:17:43', '2019-06-13 02:33:51', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'voyager-data', NULL, 5, 2, '2019-06-13 02:17:43', '2019-06-13 02:33:51', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'voyager-compass', NULL, 5, 3, '2019-06-13 02:17:43', '2019-06-13 02:33:51', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'voyager-bread', NULL, 5, 4, '2019-06-13 02:17:43', '2019-06-13 02:33:51', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'voyager-settings', NULL, NULL, 15, '2019-06-13 02:17:43', '2019-06-13 04:37:38', 'voyager.settings.index', NULL),
(12, 1, 'ยืนยันการชำระเงิน', '', '_self', NULL, '#000000', NULL, 8, '2019-06-13 02:25:17', '2019-06-13 04:37:44', 'voyager.reports.index', 'null'),
(13, 1, 'ตัวเลือกการชำระ', '', '_self', NULL, '#000000', NULL, 7, '2019-06-13 02:25:30', '2019-06-13 04:37:44', 'voyager.payments.index', 'null'),
(14, 1, 'คำสั่งซื้อ', '', '_self', NULL, '#000000', NULL, 5, '2019-06-13 02:25:40', '2019-06-13 04:37:48', 'voyager.orders.index', 'null'),
(15, 1, 'รายระเอียดคำสั่งซื้อ', '', '_self', NULL, '#000000', NULL, 6, '2019-06-13 02:26:11', '2019-06-13 04:37:48', 'voyager.order-details.index', 'null'),
(19, 1, 'ตะกร้า', '', '_self', NULL, '#000000', NULL, 4, '2019-06-13 02:29:19', '2019-06-13 04:37:48', 'voyager.carts.index', 'null'),
(20, 1, 'รายการที่ยกเลิก', '', '_self', NULL, '#000000', NULL, 9, '2019-06-13 02:30:37', '2019-06-13 04:37:44', 'voyager.cancels.index', 'null'),
(21, 1, 'สินค้า', '', '_self', NULL, '#000000', NULL, 2, '2019-06-13 04:10:11', '2019-06-13 04:17:03', 'voyager.products.index', 'null'),
(22, 1, 'หมวดหมู่', '', '_self', NULL, '#000000', NULL, 1, '2019-06-13 04:11:16', '2019-06-13 04:16:51', 'voyager.categories.index', 'null'),
(23, 1, 'Slide Shows', '', '_self', NULL, NULL, NULL, 3, '2019-06-13 04:36:50', '2019-06-13 04:37:48', 'voyager.slide-shows.index', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_01_01_000000_add_voyager_user_fields', 1),
(4, '2016_01_01_000000_create_data_types_table', 1),
(5, '2016_01_01_000000_create_pages_table', 1),
(6, '2016_01_01_000000_create_posts_table', 1),
(7, '2016_02_15_204651_create_categories_table', 1),
(8, '2016_05_19_173453_create_menu_table', 1),
(9, '2016_10_21_190000_create_roles_table', 1),
(10, '2016_10_21_190000_create_settings_table', 1),
(11, '2016_11_30_135954_create_permission_table', 1),
(12, '2016_11_30_141208_create_permission_role_table', 1),
(13, '2016_12_26_201236_data_types__add__server_side', 1),
(14, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(15, '2017_01_14_005015_create_translations_table', 1),
(16, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(17, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(18, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(19, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(20, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(21, '2017_08_05_000000_add_group_to_settings_table', 1),
(22, '2017_11_26_013050_add_user_role_relationship', 1),
(23, '2017_11_26_015000_create_user_roles_table', 1),
(24, '2018_03_11_000000_add_user_settings', 1),
(25, '2018_03_14_000000_add_details_to_data_types_table', 1),
(26, '2018_03_16_000000_make_settings_value_nullable', 1),
(27, '2019_05_18_082936_create_products_table', 1),
(28, '2019_05_22_114319_create_orders_table', 1),
(29, '2019_05_23_081458_create_carts_table', 1),
(30, '2019_05_29_125924_create_order_details_table', 1),
(31, '2019_06_04_132415_create_slide_shows_table', 1),
(32, '2019_06_12_085151_create_payments_table', 1),
(33, '2019_06_12_094913_create_reports_table', 1),
(34, '2019_06_12_125949_create_cancels_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `pay_id` int(11) NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `status` enum('pending','success','shipped','cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `pay_id`, `address`, `phone`, `total`, `status`, `created_at`, `updated_at`) VALUES
(14, 2, 1, 'asdasd, das', '42434', 161887, 'pending', '2019-06-21 08:12:40', '2019-06-21 08:12:40');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `status` enum('pending','success','shipped','cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `customer_id`, `order_id`, `product_id`, `price`, `qty`, `total`, `status`, `created_at`, `updated_at`) VALUES
(13, 2, 14, 26, 13999.00, 1, 13999, 'pending', '2019-06-21 08:12:40', '2019-06-21 08:12:40'),
(14, 2, 14, 33, 59000.00, 2, 118000, 'success', '2019-06-21 08:12:00', '2019-06-21 08:14:57'),
(15, 2, 14, 29, 29888.00, 1, 29888, 'cancel', '2019-06-21 08:12:00', '2019-06-21 08:17:52');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `name`, `bank_number`, `created_at`, `updated_at`) VALUES
(1, 'Bank A', '123-4567-4567', '2019-06-13 02:43:26', '2019-06-13 02:43:26'),
(2, 'Bank B', '45678-45670-56', '2019-06-13 02:43:37', '2019-06-13 02:43:37');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(2, 'browse_bread', NULL, '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(3, 'browse_database', NULL, '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(4, 'browse_media', NULL, '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(5, 'browse_compass', NULL, '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(6, 'browse_menus', 'menus', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(7, 'read_menus', 'menus', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(8, 'edit_menus', 'menus', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(9, 'add_menus', 'menus', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(10, 'delete_menus', 'menus', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(11, 'browse_roles', 'roles', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(12, 'read_roles', 'roles', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(13, 'edit_roles', 'roles', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(14, 'add_roles', 'roles', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(15, 'delete_roles', 'roles', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(16, 'browse_users', 'users', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(17, 'read_users', 'users', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(18, 'edit_users', 'users', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(19, 'add_users', 'users', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(20, 'delete_users', 'users', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(21, 'browse_settings', 'settings', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(22, 'read_settings', 'settings', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(23, 'edit_settings', 'settings', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(24, 'add_settings', 'settings', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(25, 'delete_settings', 'settings', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(31, 'browse_reports', 'reports', '2019-06-13 02:25:16', '2019-06-13 02:25:16'),
(32, 'read_reports', 'reports', '2019-06-13 02:25:16', '2019-06-13 02:25:16'),
(33, 'edit_reports', 'reports', '2019-06-13 02:25:16', '2019-06-13 02:25:16'),
(34, 'add_reports', 'reports', '2019-06-13 02:25:17', '2019-06-13 02:25:17'),
(35, 'delete_reports', 'reports', '2019-06-13 02:25:17', '2019-06-13 02:25:17'),
(36, 'browse_payments', 'payments', '2019-06-13 02:25:30', '2019-06-13 02:25:30'),
(37, 'read_payments', 'payments', '2019-06-13 02:25:30', '2019-06-13 02:25:30'),
(38, 'edit_payments', 'payments', '2019-06-13 02:25:30', '2019-06-13 02:25:30'),
(39, 'add_payments', 'payments', '2019-06-13 02:25:30', '2019-06-13 02:25:30'),
(40, 'delete_payments', 'payments', '2019-06-13 02:25:30', '2019-06-13 02:25:30'),
(41, 'browse_orders', 'orders', '2019-06-13 02:25:40', '2019-06-13 02:25:40'),
(42, 'read_orders', 'orders', '2019-06-13 02:25:40', '2019-06-13 02:25:40'),
(43, 'edit_orders', 'orders', '2019-06-13 02:25:40', '2019-06-13 02:25:40'),
(44, 'add_orders', 'orders', '2019-06-13 02:25:40', '2019-06-13 02:25:40'),
(45, 'delete_orders', 'orders', '2019-06-13 02:25:40', '2019-06-13 02:25:40'),
(46, 'browse_order_details', 'order_details', '2019-06-13 02:26:11', '2019-06-13 02:26:11'),
(47, 'read_order_details', 'order_details', '2019-06-13 02:26:11', '2019-06-13 02:26:11'),
(48, 'edit_order_details', 'order_details', '2019-06-13 02:26:11', '2019-06-13 02:26:11'),
(49, 'add_order_details', 'order_details', '2019-06-13 02:26:11', '2019-06-13 02:26:11'),
(50, 'delete_order_details', 'order_details', '2019-06-13 02:26:11', '2019-06-13 02:26:11'),
(51, 'browse_carts', 'carts', '2019-06-13 02:29:19', '2019-06-13 02:29:19'),
(52, 'read_carts', 'carts', '2019-06-13 02:29:19', '2019-06-13 02:29:19'),
(53, 'edit_carts', 'carts', '2019-06-13 02:29:19', '2019-06-13 02:29:19'),
(54, 'add_carts', 'carts', '2019-06-13 02:29:19', '2019-06-13 02:29:19'),
(55, 'delete_carts', 'carts', '2019-06-13 02:29:19', '2019-06-13 02:29:19'),
(56, 'browse_cancels', 'cancels', '2019-06-13 02:30:37', '2019-06-13 02:30:37'),
(57, 'read_cancels', 'cancels', '2019-06-13 02:30:37', '2019-06-13 02:30:37'),
(58, 'edit_cancels', 'cancels', '2019-06-13 02:30:37', '2019-06-13 02:30:37'),
(59, 'add_cancels', 'cancels', '2019-06-13 02:30:37', '2019-06-13 02:30:37'),
(60, 'delete_cancels', 'cancels', '2019-06-13 02:30:37', '2019-06-13 02:30:37'),
(61, 'browse_products', 'products', '2019-06-13 04:10:11', '2019-06-13 04:10:11'),
(62, 'read_products', 'products', '2019-06-13 04:10:11', '2019-06-13 04:10:11'),
(63, 'edit_products', 'products', '2019-06-13 04:10:11', '2019-06-13 04:10:11'),
(64, 'add_products', 'products', '2019-06-13 04:10:11', '2019-06-13 04:10:11'),
(65, 'delete_products', 'products', '2019-06-13 04:10:11', '2019-06-13 04:10:11'),
(66, 'browse_categories', 'categories', '2019-06-13 04:11:16', '2019-06-13 04:11:16'),
(67, 'read_categories', 'categories', '2019-06-13 04:11:16', '2019-06-13 04:11:16'),
(68, 'edit_categories', 'categories', '2019-06-13 04:11:16', '2019-06-13 04:11:16'),
(69, 'add_categories', 'categories', '2019-06-13 04:11:16', '2019-06-13 04:11:16'),
(70, 'delete_categories', 'categories', '2019-06-13 04:11:16', '2019-06-13 04:11:16'),
(71, 'browse_slide_shows', 'slide_shows', '2019-06-13 04:36:50', '2019-06-13 04:36:50'),
(72, 'read_slide_shows', 'slide_shows', '2019-06-13 04:36:50', '2019-06-13 04:36:50'),
(73, 'edit_slide_shows', 'slide_shows', '2019-06-13 04:36:50', '2019-06-13 04:36:50'),
(74, 'add_slide_shows', 'slide_shows', '2019-06-13 04:36:50', '2019-06-13 04:36:50'),
(75, 'delete_slide_shows', 'slide_shows', '2019-06-13 04:36:50', '2019-06-13 04:36:50');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1),
(66, 1),
(67, 1),
(68, 1),
(69, 1),
(70, 1),
(71, 1),
(72, 1),
(73, 1),
(74, 1),
(75, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `title`, `description`, `qty`, `price`, `image`, `created_at`, `updated_at`) VALUES
(25, 3, 'Samsung Galaxy S9+', 'Samsung Galaxy S9+ 6 GB RAM 6.2 นิ้ว 3 กล้อง สูงสุด 12 MP FF (F1.5) - โทรศัพท์มือถือ', 'รายละเอียดสินค้า Samsung Galaxy S9+ 6 GB RAM 6.2 นิ้ว 3 กล้อง สูงสุด 12 MP FF (F1.5) - โทรศัพท์มือถือ\r\nขนาดหน้าจอ 6.2\" ความละเอียด 529ppi\r\nการปฏิวัติกล้องที่ฉลาดเหมือนดวงตาของมนุษย์ด้วยรูรับแสงคู่ปรับตามสภาพแสงต่างๆได้อย่างง่ายดาย\r\nแต่งเติมทุกอารมณ์ด้วยสติกเกอร์ AR Emoji สร้างตัวการ์ตูนเสมือนจริงจากตัวคุณเอง\r\nIntelligent Scan เทคโนโลยีที่รวมการจดจำใบหน้า และการสแกนม่านตาเพื่อให้การปลดล็อค\r\nLive Translation อ่านสิ่งที่ดวงตาของคุณไม่สามารถอ่านได้ทันที\r\nพลังเสียงคมชัดจากลำโพงสเตอริโอที่ปรับแต่งเสียงโดย AKG\r\nคุณสมบัติเด่น\r\n\r\n\r\n\r\nการปฏิวัติกล้อง ที่ฉลาดเหมือนดวงตาของมนุษย์ด้วยรูรับแสงคู่ โดยปรับตามสภาพแสงต่างๆได้อย่างง่ายดาย ให้คุณสามารถถ่ายภาพสวยแม้ในที่แสงมากและในที่แสงน้อย\r\nSuper Slow-mo ช่วยบันทึกสิ่งต่างๆที่คุณอาจพลาดได้ในช่วงพริบตา ใส่เพลงหรือเปลี่ยนให้เป็นไฟล์ GIF แบบเล่นวนซ้ำ และแชร์ได้ทันที\r\nแต่งเติมทุกอารมณ์ด้วยสติกเกอร์ AR Emoji สร้างตัวการ์ตูนเสมือนจริงจากตัวคุณเองได้ง่ายๆ เพียงถ่ายภาพตัวเอง จากนั้นแชร์ความรู้สึกของคุณเป็นสติกเกอร์และวิดีโออีโมจิ\r\nIntelligent Scan เทคโนโลยีที่รวมการจดจำใบหน้า และการสแกนม่านตาเพื่อให้การปลดล็อคง่ายขึ้นแม้ในที่แสงน้อย\r\nLive Translation อ่านสิ่งที่ดวงตาของคุณไม่สามารถอ่านได้ทันที แปลภาษาทันที ทุกครั้งที่ต้องการ Live Translation ช่วยให้คุณเปิดโลกใบใหม่\r\nMulti Device Experience แชร์รูปภาพและวิดีโอของคุณอย่างง่ายดาย โดยการซิงค์อุปกรณ์ต่างๆด้วยซัมซุงแอคเคาน์\r\nพลังเสียงคมชัดจากลำโพงสเตอริโอที่ปรับแต่งเสียงโดย AKG ให้เสียงที่ทรงพลังมากถึง 1.4 เท่าเมื่อเทียบกับโทรศัพท์กาแล็กซี่รุ่นก่อน', 500, 59000.00, 'products\\June2019\\mi4Cj4Vm3kEHWgwCgyPd.png', '2019-06-21 07:27:46', '2019-06-21 07:27:46'),
(26, 2, 'Apple iPad', 'Apple iPad 9.7-inch with WiFi, 32GB (2018 model)', 'จอภาพ Multi-Touch แบ็คไลท์แบบ LED ขนาด9.7 นิ้ว(แนวทแยง) พร้อมเทคโนโลยี IPS\r\nชิพ A10 Fusion พร้อมสถาปัตยกรรม64 บิต โปรเซสเซอร์ร่วม M10 ในตัว\r\nกล้องความละเอียด8 เมกะพิกเซล\r\nบันทึกวิดีโอระดับ HD 1080p', 766, 13999.00, 'products\\June2019\\RFIvWFTCwxNjsIuAlo8j.PNG', '2019-06-21 07:36:46', '2019-06-21 07:36:46'),
(27, 2, 'Apple iPhone X', 'Apple iPhone X 256GB Space Grey', 'รายละเอียดสินค้า Apple iPhone X 256GB Space Grey\r\nหน้าจอ Super Retina ขนาด 5.8 นิ้วไม่ใช่แค่ทั้งใหญ่เต็มมือ แต่ยังสวยเต็มตาด้วยเช่นกัน\r\nจอภาพโค้งรับกับดีไซน์แบบโค้งอย่างแม่นยำ ไปจนจรดมุมมนทั้งสี่อย่างสวยงามลงตัว\r\nดีไซน์ใหม่หมดด้วยกระจกที่แข็งแกร่งที่สุดเท่าที่เคยมีมา\r\nกล้องหลังทั้งสองตัวมาพร้อมระบบป้องกันภาพสั่นไหวแบบออปติคอลและเลนส์ไวแสง\r\nชิพ A11 Bionic คือชิพที่ทรงพลังและฉลาดที่สุดเท่าที่เคยมีมาในสมาร์ทโฟน', 400, 59000.00, 'products\\June2019\\b7L05TfI3rmKhC9ZB1qV.PNG', '2019-06-21 07:41:02', '2019-06-21 07:41:02'),
(28, 4, 'Xiaomi Redmi Note 7', 'Xiaomi Redmi Note 7 4GB RAM 128GB ROM', 'รายละเอียดสินค้า Xiaomi Mi 8 Pro EU 8+128G (Transparent Titanium)\r\nDisplay: 6.21 inch, 2248 x 1080 Pixel Screen\r\nCPU: Qualcomm Snapdragon 845 Octa Core 2.8GHz\r\nSystem: Android 8.1\r\nRAM + ROM: 8GB RAM + 128GB ROM\r\nCamera: 12.0MP + 12.0MP rear camera + 20.0MP front camera', 299, 21000.00, 'products\\June2019\\cw1Zdi5XEbkq8n4lyNV7.PNG', '2019-06-21 07:50:32', '2019-06-21 07:50:32'),
(29, 4, 'Xiaomi Redmi K20 Pro', '【Xiaomi Redmi K20 Pro】【Mi 9T Pro】 【Global ROM】【Global version 】', 'สมาร์ทโฟน (โทรศัพท์มือถือพร้อมระบบปฏิบัติการ)\r\nจอแสดงผล AMOLED 24-bit (16 ล้านสี) \r\n- จอแสดงผล HDR\r\n- ระบบสัมผัส Multi-Touch\r\n- กว้าง 6.39 นิ้ว (แนวทะแยง)\r\n- ความละเอียด 2340 x 1080 พิกเซล (403 ppi) \r\n- Capacitive \r\n- Corning Gorilla Glass 5\r\nระบบเซ็นเซอร์ (Sensor) \r\n- ระบบสแกนลายนิ้วมือใต้หน้าจอ (Fingerprint Under Display)	\r\n- ระบบหมุนภาพอัตโนมัติ (Accelerometer) \r\n- ตรวจจับแสงปรับความสว่างอัตโนมัติ (Ambient light) \r\n- ระบบเปิด/ปิดหน้าจออัตโนมัติขณะสนทนา (Proximity) \r\n- ระบบเซนเซอร์หมุนภาพ (Gyroscope) \r\n- ปรับมุมมองการแสดงผลอัตโนมัติ (Orientation)', 800, 29888.00, 'products\\June2019\\J6flYQ2o7z9lbbq31Y3S.PNG', '2019-06-21 07:54:22', '2019-06-21 07:54:22'),
(30, 3, 'Samsung Galaxy Tab A 8.0', 'Samsung Galaxy Tab A 8.0\" with S Pen (Sandy White)', 'Product details of Samsung Galaxy Tab A 8.0\" with S Pen (White)\r\nคุณสมบัติเด่น\r\n\r\nขับเคลื่อนด้วยโปรเซสเซอร์ 1.2 GHz Quad Core, 2 GB RAM\r\nระบบปฏิบัติการรุ่นล่าสุด Lollipop\r\nมีความหนาเพียงแค่ 7.5 มม. และน้ำหนักเพียง 490 กรัมเท่านั้น\r\nเหมาะสมอย่างมากสำหรับผู้ที่ชอบอ่านหนังสือ\r\nกล้องหลัง 5 ล้านพิกเซล โฟกัสอัตโนมัติช่วยเพิ่มความสะดวกในการถ่ายภาพ\r\nปากกาอัจฉริยะ เขียนได้เหมือนจริง\r\nจัดการทุกอย่างได้ง่ายขึ้น ด้วยฟังก์ชั่น Air Command', 789, 8799.00, 'products\\June2019\\ScPU77vrnZkGeYTf7Mxc.PNG', '2019-06-21 07:59:46', '2019-06-21 07:59:46'),
(31, 3, 'Samsung Galaxy S9+', 'Samsung Galaxy S9+ 6 GB RAM 6.2 นิ้ว 3 กล้อง สูงสุด 12 MP FF (F1.5) - โทรศัพท์มือถือ', 'รายละเอียดสินค้า Samsung Galaxy S9+ 6 GB RAM 6.2 นิ้ว 3 กล้อง สูงสุด 12 MP FF (F1.5) - โทรศัพท์มือถือ\r\nขนาดหน้าจอ 6.2\" ความละเอียด 529ppi\r\nการปฏิวัติกล้องที่ฉลาดเหมือนดวงตาของมนุษย์ด้วยรูรับแสงคู่ปรับตามสภาพแสงต่างๆได้อย่างง่ายดาย\r\nแต่งเติมทุกอารมณ์ด้วยสติกเกอร์ AR Emoji สร้างตัวการ์ตูนเสมือนจริงจากตัวคุณเอง\r\nIntelligent Scan เทคโนโลยีที่รวมการจดจำใบหน้า และการสแกนม่านตาเพื่อให้การปลดล็อค\r\nLive Translation อ่านสิ่งที่ดวงตาของคุณไม่สามารถอ่านได้ทันที\r\nพลังเสียงคมชัดจากลำโพงสเตอริโอที่ปรับแต่งเสียงโดย AKG\r\nคุณสมบัติเด่น\r\n\r\n\r\n\r\nการปฏิวัติกล้อง ที่ฉลาดเหมือนดวงตาของมนุษย์ด้วยรูรับแสงคู่ โดยปรับตามสภาพแสงต่างๆได้อย่างง่ายดาย ให้คุณสามารถถ่ายภาพสวยแม้ในที่แสงมากและในที่แสงน้อย\r\nSuper Slow-mo ช่วยบันทึกสิ่งต่างๆที่คุณอาจพลาดได้ในช่วงพริบตา ใส่เพลงหรือเปลี่ยนให้เป็นไฟล์ GIF แบบเล่นวนซ้ำ และแชร์ได้ทันที\r\nแต่งเติมทุกอารมณ์ด้วยสติกเกอร์ AR Emoji สร้างตัวการ์ตูนเสมือนจริงจากตัวคุณเองได้ง่ายๆ เพียงถ่ายภาพตัวเอง จากนั้นแชร์ความรู้สึกของคุณเป็นสติกเกอร์และวิดีโออีโมจิ\r\nIntelligent Scan เทคโนโลยีที่รวมการจดจำใบหน้า และการสแกนม่านตาเพื่อให้การปลดล็อคง่ายขึ้นแม้ในที่แสงน้อย\r\nLive Translation อ่านสิ่งที่ดวงตาของคุณไม่สามารถอ่านได้ทันที แปลภาษาทันที ทุกครั้งที่ต้องการ Live Translation ช่วยให้คุณเปิดโลกใบใหม่\r\nMulti Device Experience แชร์รูปภาพและวิดีโอของคุณอย่างง่ายดาย โดยการซิงค์อุปกรณ์ต่างๆด้วยซัมซุงแอคเคาน์\r\nพลังเสียงคมชัดจากลำโพงสเตอริโอที่ปรับแต่งเสียงโดย AKG ให้เสียงที่ทรงพลังมากถึง 1.4 เท่าเมื่อเทียบกับโทรศัพท์กาแล็กซี่รุ่นก่อน', 500, 59000.00, 'products\\June2019\\mi4Cj4Vm3kEHWgwCgyPd.png', '2019-06-21 07:27:46', '2019-06-21 07:27:46'),
(32, 2, 'Apple iPad', 'Apple iPad 9.7-inch with WiFi, 32GB (2018 model)', 'จอภาพ Multi-Touch แบ็คไลท์แบบ LED ขนาด9.7 นิ้ว(แนวทแยง) พร้อมเทคโนโลยี IPS\r\nชิพ A10 Fusion พร้อมสถาปัตยกรรม64 บิต โปรเซสเซอร์ร่วม M10 ในตัว\r\nกล้องความละเอียด8 เมกะพิกเซล\r\nบันทึกวิดีโอระดับ HD 1080p', 766, 13999.00, 'products\\June2019\\RFIvWFTCwxNjsIuAlo8j.PNG', '2019-06-21 07:36:46', '2019-06-21 07:36:46'),
(33, 2, 'Apple iPhone X', 'Apple iPhone X 256GB Space Grey', 'รายละเอียดสินค้า Apple iPhone X 256GB Space Grey\r\nหน้าจอ Super Retina ขนาด 5.8 นิ้วไม่ใช่แค่ทั้งใหญ่เต็มมือ แต่ยังสวยเต็มตาด้วยเช่นกัน\r\nจอภาพโค้งรับกับดีไซน์แบบโค้งอย่างแม่นยำ ไปจนจรดมุมมนทั้งสี่อย่างสวยงามลงตัว\r\nดีไซน์ใหม่หมดด้วยกระจกที่แข็งแกร่งที่สุดเท่าที่เคยมีมา\r\nกล้องหลังทั้งสองตัวมาพร้อมระบบป้องกันภาพสั่นไหวแบบออปติคอลและเลนส์ไวแสง\r\nชิพ A11 Bionic คือชิพที่ทรงพลังและฉลาดที่สุดเท่าที่เคยมีมาในสมาร์ทโฟน', 400, 59000.00, 'products\\June2019\\b7L05TfI3rmKhC9ZB1qV.PNG', '2019-06-21 07:41:02', '2019-06-21 07:41:02'),
(34, 4, 'Xiaomi Redmi Note 7', 'Xiaomi Redmi Note 7 4GB RAM 128GB ROM', 'รายละเอียดสินค้า Xiaomi Mi 8 Pro EU 8+128G (Transparent Titanium)\r\nDisplay: 6.21 inch, 2248 x 1080 Pixel Screen\r\nCPU: Qualcomm Snapdragon 845 Octa Core 2.8GHz\r\nSystem: Android 8.1\r\nRAM + ROM: 8GB RAM + 128GB ROM\r\nCamera: 12.0MP + 12.0MP rear camera + 20.0MP front camera', 299, 21000.00, 'products\\June2019\\cw1Zdi5XEbkq8n4lyNV7.PNG', '2019-06-21 07:50:32', '2019-06-21 07:50:32'),
(35, 4, 'Xiaomi Redmi K20 Pro', '【Xiaomi Redmi K20 Pro】【Mi 9T Pro】 【Global ROM】【Global version 】', 'สมาร์ทโฟน (โทรศัพท์มือถือพร้อมระบบปฏิบัติการ)\r\nจอแสดงผล AMOLED 24-bit (16 ล้านสี) \r\n- จอแสดงผล HDR\r\n- ระบบสัมผัส Multi-Touch\r\n- กว้าง 6.39 นิ้ว (แนวทะแยง)\r\n- ความละเอียด 2340 x 1080 พิกเซล (403 ppi) \r\n- Capacitive \r\n- Corning Gorilla Glass 5\r\nระบบเซ็นเซอร์ (Sensor) \r\n- ระบบสแกนลายนิ้วมือใต้หน้าจอ (Fingerprint Under Display)	\r\n- ระบบหมุนภาพอัตโนมัติ (Accelerometer) \r\n- ตรวจจับแสงปรับความสว่างอัตโนมัติ (Ambient light) \r\n- ระบบเปิด/ปิดหน้าจออัตโนมัติขณะสนทนา (Proximity) \r\n- ระบบเซนเซอร์หมุนภาพ (Gyroscope) \r\n- ปรับมุมมองการแสดงผลอัตโนมัติ (Orientation)', 800, 29888.00, 'products\\June2019\\J6flYQ2o7z9lbbq31Y3S.PNG', '2019-06-21 07:54:22', '2019-06-21 07:54:22'),
(36, 3, 'Samsung Galaxy Tab A 8.0', 'Samsung Galaxy Tab A 8.0\" with S Pen (Sandy White)', 'Product details of Samsung Galaxy Tab A 8.0\" with S Pen (White)\r\nคุณสมบัติเด่น\r\n\r\nขับเคลื่อนด้วยโปรเซสเซอร์ 1.2 GHz Quad Core, 2 GB RAM\r\nระบบปฏิบัติการรุ่นล่าสุด Lollipop\r\nมีความหนาเพียงแค่ 7.5 มม. และน้ำหนักเพียง 490 กรัมเท่านั้น\r\nเหมาะสมอย่างมากสำหรับผู้ที่ชอบอ่านหนังสือ\r\nกล้องหลัง 5 ล้านพิกเซล โฟกัสอัตโนมัติช่วยเพิ่มความสะดวกในการถ่ายภาพ\r\nปากกาอัจฉริยะ เขียนได้เหมือนจริง\r\nจัดการทุกอย่างได้ง่ายขึ้น ด้วยฟังก์ชั่น Air Command', 789, 8799.00, 'products\\June2019\\ScPU77vrnZkGeYTf7Mxc.PNG', '2019-06-21 07:59:46', '2019-06-21 07:59:46'),
(37, 3, 'Samsung Galaxy S9+', 'Samsung Galaxy S9+ 6 GB RAM 6.2 นิ้ว 3 กล้อง สูงสุด 12 MP FF (F1.5) - โทรศัพท์มือถือ', 'รายละเอียดสินค้า Samsung Galaxy S9+ 6 GB RAM 6.2 นิ้ว 3 กล้อง สูงสุด 12 MP FF (F1.5) - โทรศัพท์มือถือ\r\nขนาดหน้าจอ 6.2\" ความละเอียด 529ppi\r\nการปฏิวัติกล้องที่ฉลาดเหมือนดวงตาของมนุษย์ด้วยรูรับแสงคู่ปรับตามสภาพแสงต่างๆได้อย่างง่ายดาย\r\nแต่งเติมทุกอารมณ์ด้วยสติกเกอร์ AR Emoji สร้างตัวการ์ตูนเสมือนจริงจากตัวคุณเอง\r\nIntelligent Scan เทคโนโลยีที่รวมการจดจำใบหน้า และการสแกนม่านตาเพื่อให้การปลดล็อค\r\nLive Translation อ่านสิ่งที่ดวงตาของคุณไม่สามารถอ่านได้ทันที\r\nพลังเสียงคมชัดจากลำโพงสเตอริโอที่ปรับแต่งเสียงโดย AKG\r\nคุณสมบัติเด่น\r\n\r\n\r\n\r\nการปฏิวัติกล้อง ที่ฉลาดเหมือนดวงตาของมนุษย์ด้วยรูรับแสงคู่ โดยปรับตามสภาพแสงต่างๆได้อย่างง่ายดาย ให้คุณสามารถถ่ายภาพสวยแม้ในที่แสงมากและในที่แสงน้อย\r\nSuper Slow-mo ช่วยบันทึกสิ่งต่างๆที่คุณอาจพลาดได้ในช่วงพริบตา ใส่เพลงหรือเปลี่ยนให้เป็นไฟล์ GIF แบบเล่นวนซ้ำ และแชร์ได้ทันที\r\nแต่งเติมทุกอารมณ์ด้วยสติกเกอร์ AR Emoji สร้างตัวการ์ตูนเสมือนจริงจากตัวคุณเองได้ง่ายๆ เพียงถ่ายภาพตัวเอง จากนั้นแชร์ความรู้สึกของคุณเป็นสติกเกอร์และวิดีโออีโมจิ\r\nIntelligent Scan เทคโนโลยีที่รวมการจดจำใบหน้า และการสแกนม่านตาเพื่อให้การปลดล็อคง่ายขึ้นแม้ในที่แสงน้อย\r\nLive Translation อ่านสิ่งที่ดวงตาของคุณไม่สามารถอ่านได้ทันที แปลภาษาทันที ทุกครั้งที่ต้องการ Live Translation ช่วยให้คุณเปิดโลกใบใหม่\r\nMulti Device Experience แชร์รูปภาพและวิดีโอของคุณอย่างง่ายดาย โดยการซิงค์อุปกรณ์ต่างๆด้วยซัมซุงแอคเคาน์\r\nพลังเสียงคมชัดจากลำโพงสเตอริโอที่ปรับแต่งเสียงโดย AKG ให้เสียงที่ทรงพลังมากถึง 1.4 เท่าเมื่อเทียบกับโทรศัพท์กาแล็กซี่รุ่นก่อน', 500, 59000.00, 'products\\June2019\\mi4Cj4Vm3kEHWgwCgyPd.png', '2019-06-21 07:27:46', '2019-06-21 07:27:46'),
(38, 2, 'Apple iPad', 'Apple iPad 9.7-inch with WiFi, 32GB (2018 model)', 'จอภาพ Multi-Touch แบ็คไลท์แบบ LED ขนาด9.7 นิ้ว(แนวทแยง) พร้อมเทคโนโลยี IPS\r\nชิพ A10 Fusion พร้อมสถาปัตยกรรม64 บิต โปรเซสเซอร์ร่วม M10 ในตัว\r\nกล้องความละเอียด8 เมกะพิกเซล\r\nบันทึกวิดีโอระดับ HD 1080p', 766, 13999.00, 'products\\June2019\\RFIvWFTCwxNjsIuAlo8j.PNG', '2019-06-21 07:36:46', '2019-06-21 07:36:46'),
(39, 2, 'Apple iPhone X', 'Apple iPhone X 256GB Space Grey', 'รายละเอียดสินค้า Apple iPhone X 256GB Space Grey\r\nหน้าจอ Super Retina ขนาด 5.8 นิ้วไม่ใช่แค่ทั้งใหญ่เต็มมือ แต่ยังสวยเต็มตาด้วยเช่นกัน\r\nจอภาพโค้งรับกับดีไซน์แบบโค้งอย่างแม่นยำ ไปจนจรดมุมมนทั้งสี่อย่างสวยงามลงตัว\r\nดีไซน์ใหม่หมดด้วยกระจกที่แข็งแกร่งที่สุดเท่าที่เคยมีมา\r\nกล้องหลังทั้งสองตัวมาพร้อมระบบป้องกันภาพสั่นไหวแบบออปติคอลและเลนส์ไวแสง\r\nชิพ A11 Bionic คือชิพที่ทรงพลังและฉลาดที่สุดเท่าที่เคยมีมาในสมาร์ทโฟน', 400, 59000.00, 'products\\June2019\\b7L05TfI3rmKhC9ZB1qV.PNG', '2019-06-21 07:41:02', '2019-06-21 07:41:02'),
(40, 4, 'Xiaomi Redmi Note 7', 'Xiaomi Redmi Note 7 4GB RAM 128GB ROM', 'รายละเอียดสินค้า Xiaomi Mi 8 Pro EU 8+128G (Transparent Titanium)\r\nDisplay: 6.21 inch, 2248 x 1080 Pixel Screen\r\nCPU: Qualcomm Snapdragon 845 Octa Core 2.8GHz\r\nSystem: Android 8.1\r\nRAM + ROM: 8GB RAM + 128GB ROM\r\nCamera: 12.0MP + 12.0MP rear camera + 20.0MP front camera', 299, 21000.00, 'products\\June2019\\cw1Zdi5XEbkq8n4lyNV7.PNG', '2019-06-21 07:50:32', '2019-06-21 07:50:32'),
(41, 4, 'Xiaomi Redmi K20 Pro', '【Xiaomi Redmi K20 Pro】【Mi 9T Pro】 【Global ROM】【Global version 】', 'สมาร์ทโฟน (โทรศัพท์มือถือพร้อมระบบปฏิบัติการ)\r\nจอแสดงผล AMOLED 24-bit (16 ล้านสี) \r\n- จอแสดงผล HDR\r\n- ระบบสัมผัส Multi-Touch\r\n- กว้าง 6.39 นิ้ว (แนวทะแยง)\r\n- ความละเอียด 2340 x 1080 พิกเซล (403 ppi) \r\n- Capacitive \r\n- Corning Gorilla Glass 5\r\nระบบเซ็นเซอร์ (Sensor) \r\n- ระบบสแกนลายนิ้วมือใต้หน้าจอ (Fingerprint Under Display)	\r\n- ระบบหมุนภาพอัตโนมัติ (Accelerometer) \r\n- ตรวจจับแสงปรับความสว่างอัตโนมัติ (Ambient light) \r\n- ระบบเปิด/ปิดหน้าจออัตโนมัติขณะสนทนา (Proximity) \r\n- ระบบเซนเซอร์หมุนภาพ (Gyroscope) \r\n- ปรับมุมมองการแสดงผลอัตโนมัติ (Orientation)', 800, 29888.00, 'products\\June2019\\J6flYQ2o7z9lbbq31Y3S.PNG', '2019-06-21 07:54:22', '2019-06-21 07:54:22'),
(42, 3, 'Samsung Galaxy Tab A 8.0', 'Samsung Galaxy Tab A 8.0\" with S Pen (Sandy White)', 'Product details of Samsung Galaxy Tab A 8.0\" with S Pen (White)\r\nคุณสมบัติเด่น\r\n\r\nขับเคลื่อนด้วยโปรเซสเซอร์ 1.2 GHz Quad Core, 2 GB RAM\r\nระบบปฏิบัติการรุ่นล่าสุด Lollipop\r\nมีความหนาเพียงแค่ 7.5 มม. และน้ำหนักเพียง 490 กรัมเท่านั้น\r\nเหมาะสมอย่างมากสำหรับผู้ที่ชอบอ่านหนังสือ\r\nกล้องหลัง 5 ล้านพิกเซล โฟกัสอัตโนมัติช่วยเพิ่มความสะดวกในการถ่ายภาพ\r\nปากกาอัจฉริยะ เขียนได้เหมือนจริง\r\nจัดการทุกอย่างได้ง่ายขึ้น ด้วยฟังก์ชั่น Air Command', 789, 8799.00, 'products\\June2019\\ScPU77vrnZkGeYTf7Mxc.PNG', '2019-06-21 07:59:46', '2019-06-21 07:59:46'),
(43, 3, 'Samsung Galaxy S9+', 'Samsung Galaxy S9+ 6 GB RAM 6.2 นิ้ว 3 กล้อง สูงสุด 12 MP FF (F1.5) - โทรศัพท์มือถือ', 'รายละเอียดสินค้า Samsung Galaxy S9+ 6 GB RAM 6.2 นิ้ว 3 กล้อง สูงสุด 12 MP FF (F1.5) - โทรศัพท์มือถือ\r\nขนาดหน้าจอ 6.2\" ความละเอียด 529ppi\r\nการปฏิวัติกล้องที่ฉลาดเหมือนดวงตาของมนุษย์ด้วยรูรับแสงคู่ปรับตามสภาพแสงต่างๆได้อย่างง่ายดาย\r\nแต่งเติมทุกอารมณ์ด้วยสติกเกอร์ AR Emoji สร้างตัวการ์ตูนเสมือนจริงจากตัวคุณเอง\r\nIntelligent Scan เทคโนโลยีที่รวมการจดจำใบหน้า และการสแกนม่านตาเพื่อให้การปลดล็อค\r\nLive Translation อ่านสิ่งที่ดวงตาของคุณไม่สามารถอ่านได้ทันที\r\nพลังเสียงคมชัดจากลำโพงสเตอริโอที่ปรับแต่งเสียงโดย AKG\r\nคุณสมบัติเด่น\r\n\r\n\r\n\r\nการปฏิวัติกล้อง ที่ฉลาดเหมือนดวงตาของมนุษย์ด้วยรูรับแสงคู่ โดยปรับตามสภาพแสงต่างๆได้อย่างง่ายดาย ให้คุณสามารถถ่ายภาพสวยแม้ในที่แสงมากและในที่แสงน้อย\r\nSuper Slow-mo ช่วยบันทึกสิ่งต่างๆที่คุณอาจพลาดได้ในช่วงพริบตา ใส่เพลงหรือเปลี่ยนให้เป็นไฟล์ GIF แบบเล่นวนซ้ำ และแชร์ได้ทันที\r\nแต่งเติมทุกอารมณ์ด้วยสติกเกอร์ AR Emoji สร้างตัวการ์ตูนเสมือนจริงจากตัวคุณเองได้ง่ายๆ เพียงถ่ายภาพตัวเอง จากนั้นแชร์ความรู้สึกของคุณเป็นสติกเกอร์และวิดีโออีโมจิ\r\nIntelligent Scan เทคโนโลยีที่รวมการจดจำใบหน้า และการสแกนม่านตาเพื่อให้การปลดล็อคง่ายขึ้นแม้ในที่แสงน้อย\r\nLive Translation อ่านสิ่งที่ดวงตาของคุณไม่สามารถอ่านได้ทันที แปลภาษาทันที ทุกครั้งที่ต้องการ Live Translation ช่วยให้คุณเปิดโลกใบใหม่\r\nMulti Device Experience แชร์รูปภาพและวิดีโอของคุณอย่างง่ายดาย โดยการซิงค์อุปกรณ์ต่างๆด้วยซัมซุงแอคเคาน์\r\nพลังเสียงคมชัดจากลำโพงสเตอริโอที่ปรับแต่งเสียงโดย AKG ให้เสียงที่ทรงพลังมากถึง 1.4 เท่าเมื่อเทียบกับโทรศัพท์กาแล็กซี่รุ่นก่อน', 500, 59000.00, 'products\\June2019\\mi4Cj4Vm3kEHWgwCgyPd.png', '2019-06-21 07:27:46', '2019-06-21 07:27:46'),
(44, 2, 'Apple iPad', 'Apple iPad 9.7-inch with WiFi, 32GB (2018 model)', 'จอภาพ Multi-Touch แบ็คไลท์แบบ LED ขนาด9.7 นิ้ว(แนวทแยง) พร้อมเทคโนโลยี IPS\r\nชิพ A10 Fusion พร้อมสถาปัตยกรรม64 บิต โปรเซสเซอร์ร่วม M10 ในตัว\r\nกล้องความละเอียด8 เมกะพิกเซล\r\nบันทึกวิดีโอระดับ HD 1080p', 766, 13999.00, 'products\\June2019\\RFIvWFTCwxNjsIuAlo8j.PNG', '2019-06-21 07:36:46', '2019-06-21 07:36:46'),
(45, 2, 'Apple iPhone X', 'Apple iPhone X 256GB Space Grey', 'รายละเอียดสินค้า Apple iPhone X 256GB Space Grey\r\nหน้าจอ Super Retina ขนาด 5.8 นิ้วไม่ใช่แค่ทั้งใหญ่เต็มมือ แต่ยังสวยเต็มตาด้วยเช่นกัน\r\nจอภาพโค้งรับกับดีไซน์แบบโค้งอย่างแม่นยำ ไปจนจรดมุมมนทั้งสี่อย่างสวยงามลงตัว\r\nดีไซน์ใหม่หมดด้วยกระจกที่แข็งแกร่งที่สุดเท่าที่เคยมีมา\r\nกล้องหลังทั้งสองตัวมาพร้อมระบบป้องกันภาพสั่นไหวแบบออปติคอลและเลนส์ไวแสง\r\nชิพ A11 Bionic คือชิพที่ทรงพลังและฉลาดที่สุดเท่าที่เคยมีมาในสมาร์ทโฟน', 400, 59000.00, 'products\\June2019\\b7L05TfI3rmKhC9ZB1qV.PNG', '2019-06-21 07:41:02', '2019-06-21 07:41:02'),
(46, 4, 'Xiaomi Redmi Note 7', 'Xiaomi Redmi Note 7 4GB RAM 128GB ROM', 'รายละเอียดสินค้า Xiaomi Mi 8 Pro EU 8+128G (Transparent Titanium)\r\nDisplay: 6.21 inch, 2248 x 1080 Pixel Screen\r\nCPU: Qualcomm Snapdragon 845 Octa Core 2.8GHz\r\nSystem: Android 8.1\r\nRAM + ROM: 8GB RAM + 128GB ROM\r\nCamera: 12.0MP + 12.0MP rear camera + 20.0MP front camera', 299, 21000.00, 'products\\June2019\\cw1Zdi5XEbkq8n4lyNV7.PNG', '2019-06-21 07:50:32', '2019-06-21 07:50:32'),
(47, 4, 'Xiaomi Redmi K20 Pro', '【Xiaomi Redmi K20 Pro】【Mi 9T Pro】 【Global ROM】【Global version 】', 'สมาร์ทโฟน (โทรศัพท์มือถือพร้อมระบบปฏิบัติการ)\r\nจอแสดงผล AMOLED 24-bit (16 ล้านสี) \r\n- จอแสดงผล HDR\r\n- ระบบสัมผัส Multi-Touch\r\n- กว้าง 6.39 นิ้ว (แนวทะแยง)\r\n- ความละเอียด 2340 x 1080 พิกเซล (403 ppi) \r\n- Capacitive \r\n- Corning Gorilla Glass 5\r\nระบบเซ็นเซอร์ (Sensor) \r\n- ระบบสแกนลายนิ้วมือใต้หน้าจอ (Fingerprint Under Display)	\r\n- ระบบหมุนภาพอัตโนมัติ (Accelerometer) \r\n- ตรวจจับแสงปรับความสว่างอัตโนมัติ (Ambient light) \r\n- ระบบเปิด/ปิดหน้าจออัตโนมัติขณะสนทนา (Proximity) \r\n- ระบบเซนเซอร์หมุนภาพ (Gyroscope) \r\n- ปรับมุมมองการแสดงผลอัตโนมัติ (Orientation)', 800, 29888.00, 'products\\June2019\\J6flYQ2o7z9lbbq31Y3S.PNG', '2019-06-21 07:54:22', '2019-06-21 07:54:22'),
(48, 3, 'Samsung Galaxy Tab A 8.0', 'Samsung Galaxy Tab A 8.0\" with S Pen (Sandy White)', 'Product details of Samsung Galaxy Tab A 8.0\" with S Pen (White)\r\nคุณสมบัติเด่น\r\n\r\nขับเคลื่อนด้วยโปรเซสเซอร์ 1.2 GHz Quad Core, 2 GB RAM\r\nระบบปฏิบัติการรุ่นล่าสุด Lollipop\r\nมีความหนาเพียงแค่ 7.5 มม. และน้ำหนักเพียง 490 กรัมเท่านั้น\r\nเหมาะสมอย่างมากสำหรับผู้ที่ชอบอ่านหนังสือ\r\nกล้องหลัง 5 ล้านพิกเซล โฟกัสอัตโนมัติช่วยเพิ่มความสะดวกในการถ่ายภาพ\r\nปากกาอัจฉริยะ เขียนได้เหมือนจริง\r\nจัดการทุกอย่างได้ง่ายขึ้น ด้วยฟังก์ชั่น Air Command', 789, 8799.00, 'products\\June2019\\ScPU77vrnZkGeYTf7Mxc.PNG', '2019-06-21 07:59:46', '2019-06-21 07:59:46');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `orderdetail_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `customer_id`, `orderdetail_id`, `image`, `created_at`, `updated_at`) VALUES
(4, 2, 14, 'images/2iZyk0MdkbRufmRqro0Lk7H56vc5RHxtzrPY3miA.jpeg', '2019-06-21 08:13:00', '2019-06-21 08:13:00');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-06-13 02:17:43', '2019-06-13 02:17:43'),
(2, 'user', 'Normal User', '2019-06-13 02:17:43', '2019-06-13 02:17:43');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT 1,
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', '', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'My Admin', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Welcome', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', '', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `slide_shows`
--

CREATE TABLE `slide_shows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide_shows`
--

INSERT INTO `slide_shows` (`id`, `image`, `created_at`, `updated_at`) VALUES
(2, 'slide-shows\\June2019\\WdA391hnPwKGV53uFPno.jpg', '2019-06-20 23:52:59', '2019-06-20 23:52:59'),
(3, 'slide-shows\\June2019\\juWkN5y3L4QHtxUwjaaF.png', '2019-06-20 23:54:01', '2019-06-20 23:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `avatar`, `email_verified_at`, `password`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(2, 1, 'admin', 'admin@admin.com', 'users/default.png', NULL, '$2y$10$4n2NTU3Cmikn1n0Yq3TrTuTuyI7IfSLkQXvygiXMWIo8L2nP2ZD8i', 'Yp8RlW5xJWytTFaepXAIm0uFwROIT5EZ1nd6I30WPqO7O1h9R5AkhBGo2jsa', NULL, '2019-06-20 04:48:10', '2019-06-20 04:48:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`user_id`, `role_id`) VALUES
(2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cancels`
--
ALTER TABLE `cancels`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `slide_shows`
--
ALTER TABLE `slide_shows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cancels`
--
ALTER TABLE `cancels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `slide_shows`
--
ALTER TABLE `slide_shows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
