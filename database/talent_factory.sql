-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 06, 2022 at 08:18 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `talent_factory`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_title`) VALUES
(1, 'Trending'),
(2, 'Art'),
(3, 'Digital art'),
(4, 'Photography'),
(5, 'Videos');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `create_id` int(11) NOT NULL,
  `create_title` varchar(255) NOT NULL,
  `create_description` text NOT NULL,
  `create_author` varchar(255) NOT NULL,
  `create_category` varchar(255) NOT NULL,
  `create_rating` int(11) NOT NULL DEFAULT '0',
  `create_date` date NOT NULL,
  `create_image` text NOT NULL,
  `create_price` int(11) NOT NULL,
  `create_author_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`create_id`, `create_title`, `create_description`, `create_author`, `create_category`, `create_rating`, `create_date`, `create_image`, `create_price`, `create_author_image`) VALUES
(2, ':)', 'test', 'root', 'Art', 0, '2022-09-05', 'background-blured.jpg', 10, '532722a96c8b6e5d8f4e0448bda5f05c.jpg'),
(4, 'Kotka', ':)', 'root', 'Digital art', 0, '2022-09-05', 'ac63553a12e9d4ea4f1ba044bfedc720.png', 10, '532722a96c8b6e5d8f4e0448bda5f05c.jpg'),
(5, ':)', ':))', 'root', 'Photography', 0, '2022-09-05', 'ac63553a12e9d4ea4f1ba044bfedc720.png', 30, '532722a96c8b6e5d8f4e0448bda5f05c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `posts_to_categories`
--

CREATE TABLE `posts_to_categories` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`) VALUES
(1, 'thristovaa', '12345678', 'Raya', 'Hristova', 'raya.thristova@gmail.com', 'pfp.img'),
(2, 'roots', 'root', 'ss', 's', 'assa@gmail.com', 'pfp.png '),
(7, 'testkotka', 'root', 'kotka', 'kotka', 'kotka@gmail.com', '532722a96c8b6e5d8f4e0448bda5f05c.jpg'),
(8, 'root', 'root', 'raq', 'hr', 'raya.thristova@gmail.com', ''),
(9, 'root', 'root', 'test', 'test', 'tets@test.com', 'original.jpg'),
(10, 'root', 'root', 'test', 'test', 'test@test.com', 'original.jpg'),
(11, 'root', 'root', 'raq', 'hr', 'raya.thristova@gmail.com', '532722a96c8b6e5d8f4e0448bda5f05c.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`create_id`);

--
-- Indexes for table `posts_to_categories`
--
ALTER TABLE `posts_to_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `create_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts_to_categories`
--
ALTER TABLE `posts_to_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
