-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2023 at 05:18 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `CUSTOMER_ID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CUSTOMER_NAME` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ADDRESS` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `NICK_NAME` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INPUT_BY` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INPUT_DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CUSTOMER_ID`, `CUSTOMER_NAME`, `ADDRESS`, `NICK_NAME`, `INPUT_BY`, `INPUT_DATE`) VALUES
('CUST002', 'TELLA', 'JAKARTA', 'TL', 'USR002', '2022-11-11 10:10:00'),
('CUST003', 'DINI', 'JAKARTA', 'DN', 'USR002', '2022-11-11 10:10:00'),
('CUST011', 'HAPSAH', 'JAKARTA', 'HPS', 'USR002', '2022-11-11 10:10:00');

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
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `ITEM_ID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ITEM_NAME` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CATEGORY` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INPUT_BY` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INPUT_DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`ITEM_ID`, `ITEM_NAME`, `CATEGORY`, `INPUT_BY`, `INPUT_DATE`) VALUES
('ITM002', 'BABY TERRY', 'KAIN', 'USR002', '2022-11-11 10:10:00'),
('ITM003', 'WOFEN', 'RIB', 'USR003', '2022-11-11 10:10:00'),
('ITM011', 'HYGET', 'KAIN', 'USR011', '2022-11-11 10:10:00');

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
(5, '2023_07_05_050922_create_items_table', 1),
(6, '2023_07_05_050922_create_salesmen_table', 1),
(7, '2023_07_05_051035_create_customers_table', 1),
(8, '2023_07_05_051046_create_sales_table', 1),
(9, '2023_07_05_052925_create_sub_sales_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `SALES_ID` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SALES_NO` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CUSTOMER_ID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SALESMAN_ID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CREATE_BY` bigint(20) UNSIGNED NOT NULL,
  `INPUT_DATE` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`SALES_ID`, `SALES_NO`, `CUSTOMER_ID`, `SALESMAN_ID`, `CREATE_BY`, `INPUT_DATE`) VALUES
('INV-2307-A0031-0001', 'POS1', 'CUST002', 'SLM0002', 4, '2023-07-05 21:43:16'),
('INV-2307-A0031-0002', 'POS3342', 'CUST003', 'SLM0011', 4, '2023-07-05 21:51:31'),
('INV-2307-A0031-0003', 'POS4949', 'CUST003', 'SLM0002', 4, '2023-07-05 21:59:02'),
('INV-2307-A0031-0004', 'POS4949', 'CUST003', 'SLM0002', 4, '2023-07-05 22:01:24'),
('INV-2307-A0031-0005', 'POS4949', 'CUST003', 'SLM0002', 4, '2023-07-05 22:01:33');

-- --------------------------------------------------------

--
-- Table structure for table `salesmen`
--

CREATE TABLE `salesmen` (
  `SALESMAN_ID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SALES_PERSON` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ALAMAT` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INPUT_BY` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `INPUT_DATE` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `salesmen`
--

INSERT INTO `salesmen` (`SALESMAN_ID`, `SALES_PERSON`, `ALAMAT`, `INPUT_BY`, `INPUT_DATE`) VALUES
('SLM0002', 'DARA', 'JAKARTA', 'USR003', '2022-11-11 10:10:00'),
('SLM0003', 'UZI', 'JAKARTA', 'USR002', '2022-11-11 10:10:00'),
('SLM0011', 'KANIA', 'JAKARTA', 'USR111', '2022-11-11 10:10:00');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sales`
--

CREATE TABLE `sub_sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `SALES_ID` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ITEM_ID` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `QTY_SALES` int(11) NOT NULL,
  `UNIT_PRICE` decimal(18,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sales`
--

INSERT INTO `sub_sales` (`id`, `SALES_ID`, `ITEM_ID`, `QTY_SALES`, `UNIT_PRICE`) VALUES
(1, 'INV-2307-A0031-0001', 'ITM002', 2, '300.00'),
(2, 'INV-2307-A0031-0001', 'ITM003', 44, '200.00'),
(3, 'INV-2307-A0031-0005', 'ITM002', 3, '455.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departement` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `departement`, `username`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'FERDI', 'IT', 'FERDI', 'FERDI@example.com', NULL, '$2y$10$QeQuovxX8mRI0NNz46UCI.SAjGR1i3gxuqkhTCNmG0rbGDgk92Xvq', NULL, '2023-07-05 07:22:14', '2023-07-05 07:22:14'),
(2, 'ADM-01', 'IT', 'ADM-01', 'ADM-01@example.com', NULL, '$2y$10$yHiOdw2TgX2Q16CdMmWVJ.DHh.4RIuCYh8Cna5nMEFvDoucazXSmG', NULL, '2023-07-05 07:23:39', '2023-07-05 07:23:39'),
(3, 'NOUVAL', 'IT', 'NOUVAL', 'NOUVAL@example.com', NULL, '$2y$10$CJ0Lq7Kup1ZEfLtFYPod5OvBTnPopHnzyphlU0DmBzBSubxNGSXxC', NULL, '2023-07-05 07:24:29', '2023-07-05 07:24:29'),
(4, 'erpan', 'IT', 'erpan', 'erpan@example.com', NULL, '$2y$10$RwZWKq/OLJaNz42m3ZXqJutHRtG1kk6xDYAJVFnqDqQyLMu2CFTBG', NULL, '2023-07-05 07:32:26', '2023-07-05 07:32:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`CUSTOMER_ID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`ITEM_ID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`SALES_ID`),
  ADD KEY `sales_customer_id_foreign` (`CUSTOMER_ID`),
  ADD KEY `sales_salesman_id_foreign` (`SALESMAN_ID`),
  ADD KEY `sales_create_by_foreign` (`CREATE_BY`);

--
-- Indexes for table `salesmen`
--
ALTER TABLE `salesmen`
  ADD PRIMARY KEY (`SALESMAN_ID`);

--
-- Indexes for table `sub_sales`
--
ALTER TABLE `sub_sales`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_sales_sales_id_foreign` (`SALES_ID`),
  ADD KEY `sub_sales_item_id_foreign` (`ITEM_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_sales`
--
ALTER TABLE `sub_sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
  ADD CONSTRAINT `sales_create_by_foreign` FOREIGN KEY (`CREATE_BY`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `sales_customer_id_foreign` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customers` (`CUSTOMER_ID`),
  ADD CONSTRAINT `sales_salesman_id_foreign` FOREIGN KEY (`SALESMAN_ID`) REFERENCES `salesmen` (`SALESMAN_ID`);

--
-- Constraints for table `sub_sales`
--
ALTER TABLE `sub_sales`
  ADD CONSTRAINT `sub_sales_item_id_foreign` FOREIGN KEY (`ITEM_ID`) REFERENCES `items` (`ITEM_ID`),
  ADD CONSTRAINT `sub_sales_sales_id_foreign` FOREIGN KEY (`SALES_ID`) REFERENCES `sales` (`SALES_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
