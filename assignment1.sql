-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 02, 2023 at 07:34 PM
-- Server version: 8.0.34
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assignment1`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `amount` int NOT NULL,
  `size` varchar(50) NOT NULL,
  `shape` varchar(50) NOT NULL,
  `crust` varchar(50) NOT NULL,
  `toppings` varchar(500) NOT NULL,
  `delivery` varchar(100) NOT NULL,
  `comments` varchar(100) DEFAULT NULL,
  `user_id` int NOT NULL,
  `order_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`amount`, `size`, `shape`, `crust`, `toppings`, `delivery`, `comments`, `user_id`, `order_id`, `created_at`) VALUES
(4, 'medium', 'square', 'thinCrust ', 'anchovies, pineapple, prosciutto', 'takeOut', 'Do not include cheese', 1, 1, '2023-10-02 17:16:32'),
(1, 'small', 'round', 'chicagoStyle', 'pepperoni, anchovies, pineapple, prosciutto, pesto, chicken, spinach, mushroom, pickle, buffalo-chicken', 'delivery', 'Do not Include onions', 1, 2, '2023-10-02 17:18:58'),
(12, 'large', 'square', 'chicagoStyle', 'pepperoni, anchovies', 'dineIn', '', 3, 3, '2023-10-02 17:19:30'),
(12, 'large', 'square', 'chicagoStyle', 'pepperoni, pesto', 'takeOut', '', 1, 4, '2023-10-02 17:32:55');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL,
  `user_id` int NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `phone_number`, `address`, `user_id`, `updated_at`) VALUES
('John Doe', '123-456-7890', '1 Main St, Toronto, ON', 1, '2023-10-02 17:16:32'),
('Jane Doe', '123-456-7890', '2 Main St. Toronto, Ontario', 3, '2023-10-02 17:19:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
