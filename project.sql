-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 28, 2023 at 03:51 PM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `ticket_id` varchar(500) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `email` varchar(300) NOT NULL,
  `message` varchar(2500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`ticket_id`, `name`, `email`, `message`) VALUES
('6565fc72d8891', 'dsadsadas', 'dasda@asdasdas.com', 'asdasdasdasdsadsa'),
('6565fd10389be', 'test', 'teste@teste.com', 'dsadsadasdasdasdas'),
('6565fd26319be', 'asdasdsa', 'dasda@asdasdas.com', 'dsadsadasdasdsa'),
('6565fd3838b9e', 'dsadasdas', 'dsadsadsadas@asdasdas.com', 'asdasdasdas');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'lucas', 'd31f9bb81b68134704060b4ee6fc772cf98f69d699a8456b296bd2d69aaf276e4af927d0e5c62a8a4c85ec463b30ecb18d96d994a1b72d07a5d8503a9206080b'),
(3, 'lucas2', 'd055fd8030691a8a20c071fb80acc6abcbbadb1674f5f1b4fef67a43386b4671f1d7ac7309d9a91e41ab5b477a4fa33c10df7bd5899a257c6c2638569c05d204'),
(4, 'lucas3', 'c70d285e5f0211283211f00988fe25daf021f226ff8c241c8ba7017818cecd0257219ded100ec348368a6fab49144a7829bc120b3cbe0c097afd3e9d0ddc2856'),
(5, 'adsdsadsa', '1cbd7ef5f7dd5c411e8ece9fe653749034aaa9d2a3dd96f4c563e40a9c82fa862ca250e229604b6dd6c193eb1764de549d6b4458b7509273028244ae39ef29c8'),
(6, 'dsadsadasdas', '86ee8e0aada2fb451ca8ae71f443d4a581931317b512777599c5f2d0f98f7432bae77f9c1f4900e315326d0bae16a6c254d9e57955def973799c4e58a81777c5'),
(7, 'LucasCoutinho', 'd31f9bb81b68134704060b4ee6fc772cf98f69d699a8456b296bd2d69aaf276e4af927d0e5c62a8a4c85ec463b30ecb18d96d994a1b72d07a5d8503a9206080b'),
(8, 'Teste', 'b123e9e19d217169b981a61188920f9d28638709a5132201684d792b9264271b7f09157ed4321b1c097f7a4abecfc0977d40a7ee599c845883bd1074ca23c4af');

-- --------------------------------------------------------

--
-- Table structure for table `users_info`
--

CREATE TABLE `users_info` (
  `user_id` int NOT NULL,
  `first_name` varchar(1000) NOT NULL,
  `last_name` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `avatar` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users_info`
--

INSERT INTO `users_info` (`user_id`, `first_name`, `last_name`, `email`, `avatar`) VALUES
(1, 'lucas', 'lucas', 'teste@teste.com', '65657e146d61d.png'),
(3, 'lucas', 'lucas', 'teste@teste.com', NULL),
(4, 'lucas', 'lucas', 'teste@teste.com', NULL),
(5, 'dasdsadas', 'dsadasdsa', 'teste@teste.com', NULL),
(6, 'dsadasdasdasdsa', 'dsaadsdsadas', 'teste@teste.com', NULL),
(7, 'Lucas', 'Coutinho', 'teste@teste.com', '656583e11c548.png'),
(8, 'Teste', 'Teste', 'teste@teste.com', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_avatars`
--

CREATE TABLE `user_avatars` (
  `user_id` int NOT NULL,
  `avatar_id` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_avatars`
--

INSERT INTO `user_avatars` (`user_id`, `avatar_id`) VALUES
(1, '65657dcd4eec0.png'),
(1, '65657e146d61d.png'),
(1, '65657e15e256c.png'),
(1, '65657e16d648d.png'),
(1, '65657e1810447.png'),
(1, '65657e2651b7b.png'),
(7, '656583e11c548.png'),
(7, '65658924111df.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`ticket_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users_info`
--
ALTER TABLE `users_info`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user_avatars`
--
ALTER TABLE `user_avatars`
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_info`
--
ALTER TABLE `users_info`
  ADD CONSTRAINT `users_info_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `user_avatars`
--
ALTER TABLE `user_avatars`
  ADD CONSTRAINT `user_avatars_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
