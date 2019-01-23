-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 23, 2019 at 10:56 PM
-- Server version: 8.0.13
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiktorlesiak`
--

-- --------------------------------------------------------

--
-- Table structure for table `devupdate`
--

CREATE TABLE `devupdate` (
  `id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `titledesc` varchar(64) NOT NULL,
  `description` text NOT NULL,
  `timestamp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `devupdate`
--

INSERT INTO `devupdate` (`id`, `title`, `titledesc`, `description`) VALUES
(7, 'First Update', 'Creating Website', 'I started to working on this website to learn more about web development, hopefully it will turn out good without any problems. :)'),
(8, 'Second Update test', 'Test update', 'This is a test update to make sure these updates are working properly');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(50) NOT NULL,
  `image` varchar(49) NOT NULL,
  `p_price` double NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `image`, `p_price`, `description`, `link`) VALUES
(3, 'Resident Evil 7: Biohazard', 'images/resident.jpg', 29.99, 'Fear and isolation seep through the walls of an abandoned southern farmhouse. ', 'http://store.steampowered.com/app/418370/RESIDENT_EVIL_7_biohazard__BIOHAZARD_7_resident_evil/'),
(4, 'Prey', 'images/prey.jpg', 24.99, 'In Prey, you awaken aboard Talos I, a space station orbiting the moon in the year 2032. You are the key subject of an experiment meant to alter humanity forever – but things have gone terribly wrong. The space station has been overrun by hostile aliens and you are now being hunted.', 'http://store.steampowered.com/app/480490/Prey/'),
(8, 'Far Cry 5', 'images/fc5.jpg', 59.99, 'Welcome to Hope County, Montana, home to a fanatical doomsday cult known as Eden’s Gate. Stand up to cult leader Joseph Seed & his siblings, the Heralds, to spark the fires of resistance & liberate the besieged community.', 'http://store.steampowered.com/app/552520/Far_Cry_5/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hash` varchar(32) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `admin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `hash`, `active`, `admin`) VALUES
(13, 'Wiktor', 'Lesiak', 'sypher62@gmail.com', '$2y$10$kHXS/JcCgSrnjWmEoQX3C.2JZvsORj9hnkwZ4qbwpj00mSIcwDlgO', '01f78be6f7cad02658508fe4616098a9', 1, 0),
(14, 'Admin', 'Admin', 'admin@admin.com', '$2y$10$b3FG.TFGQpYc.9Pw2XQ3lumwrPkC7KxL45JWgft2W2vfPJGIY/04m', 'bea5955b308361a1b07bc55042e25e54', 1, 1),
(15, 'John', 'Test', 'wiktor.lesiak@hotmail.com', '$2y$10$Awchii4o4FDLxG8x5TkEJOftJZzcml6DoeauRnZLeB9wcWRFSD.Ka', '08c5433a60135c32e34f46a71175850c', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `devupdate`
--
ALTER TABLE `devupdate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `devupdate`
--
ALTER TABLE `devupdate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
