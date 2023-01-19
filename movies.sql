-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 10:27 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `about_text` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `about_text`) VALUES
(1, 'About Us', 'My Movie  is the world\'s most popular and authoritative source for movie, TV and celebrity content.');

-- --------------------------------------------------------

--
-- Table structure for table `all_movies`
--

CREATE TABLE `all_movies` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_movies`
--

INSERT INTO `all_movies` (`id`, `name`, `image`, `description`) VALUES
(1, 'Se7en', 'Se7en.jpg', 'Se7en: Directed by David Fincher. With Morgan Freeman, Andrew Kevin Walker, Daniel Zacapa, Brad Pitt.'),
(2, 'Joker', '11.jpg', 'Parents need to know that Joker is an intense, complex, powerful thriller starring Joaquin Phoenix as the famous Batman villain. '),
(6, 'The King', 'king.jpg', 'The King: Directed by David Michôd. With Tom Glynn-Carney, Gábor Czap, Tom Fisher, Edward Ashley.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `code`, `name`) VALUES
(1, 'fab fa-facebook', 'Facebook'),
(2, 'fab fa-instagram', 'Instagram'),
(7, 'fab fa-github', 'GitHub');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `ID` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(12) NOT NULL,
  `text` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `name`, `email`, `phone`, `text`) VALUES
(4, 'Max ', 'max@email.ru', 352987, 'Hi this is Max'),
(7, 'Saif', 'saif@gmail.com', 25638347687, 'Hi my movie my name is Saif'),
(8, 'Saif', 'saif@gmail.com', 25638347687, 'Hi my movie my name is Saif'),
(9, 'Saif', 'saif@gmail.com', 25638347687, 'Hi my movie my name is Saif'),
(12, 'Hani', 'hani232@mail.ru', 675865788, 'Hiiiiii this is me'),
(13, 'Alex', 'alix42@gmail.com', 79869876, ' Hi this is create site, thank you so match.'),
(14, 'Alex', 'alix42@gmail.com', 79869876, ' Hi this is create site, thank you so match.'),
(15, 'Max', 'max@email.ru', 8796786, 'this is max'),
(16, 'Joker', 'joker@gmail.com', 34552423642, 'this is Joker');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(225) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(225) NOT NULL,
  `access_token` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `access_token`) VALUES
(2, 'John', '1f3c5f95356772baef577d658cd17b16', ''),
(3, 'Hani', '5ec4b7f0ebbee2b6f96789dc425284c7', ''),
(4, 'bilal@mail.ru', '5ae1c881ad1d8d750f15c232a3232379', ''),
(5, 'saif@mail.ru', '44c099ff522cd529ade21a9c7aa54ebf', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `all_movies`
--
ALTER TABLE `all_movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `all_movies`
--
ALTER TABLE `all_movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
