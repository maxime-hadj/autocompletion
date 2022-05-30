-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 30, 2022 at 11:30 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autocompletion`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(11) NOT NULL,
  `title` varchar(80) NOT NULL,
  `genre` varchar(80) NOT NULL,
  `releasedate` year(4) NOT NULL,
  `developer` varchar(80) NOT NULL,
  `publisher` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `title`, `genre`, `releasedate`, `developer`, `publisher`) VALUES
(1, 'Another World', 'Platformer', 1991, 'Eric Chahi', 'The Digital Lounge'),
(2, 'Baldur\'s Gate', 'RPG', 1998, 'BioWare', 'Interplay Entertainment, Black Isle Studios'),
(3, 'Baldur\'s Gate II', 'RPG', 2000, 'BioWare', 'Interplay Entertainment, Black Isle Studios, Akella'),
(4, 'Bioshock', 'FPS', 2007, '2K Games', '2K Games'),
(5, 'Blade of Darkness', 'RPG', 2001, 'Rebel Act Studios', 'Codemasters'),
(6, 'Blasphemous', 'Platformer', 2019, 'The Game Kitchen', 'The Game Kitchen'),
(7, 'Borderlands 2', 'FPS', 2012, 'Gearbox Software', '2K Games'),
(8, 'Darkest Dungeon', 'Roguelike', 2015, 'Red Hook Studios', 'Sickhead Games'),
(9, 'Dead Cells', 'Roguelite', 2017, 'Motion Twin', 'Motion Twin'),
(10, 'Don\'t Starve', 'Survival', 2013, 'Klei Entertainment', 'Klei Entertainment'),
(11, 'Grim Fandango', 'Adventure', 1998, 'Lucasarts', 'Double Fine'),
(12, 'Icewind Dale', 'RPG', 2000, 'Black Isle Studios', 'Interplay Entertainment'),
(13, 'LIMBO', 'Platformer', 2010, 'Playdead', 'Playdead'),
(14, 'Neverwinter Nights', 'RPG', 2002, 'BioWare', 'Atari'),
(15, 'Pillars of Eternity', 'RPG', 2015, 'Obsidian Entertainment', 'Paradox Interactive'),
(16, 'Planescape: Torment', 'RPG', 1999, 'Black Isle Studios', 'Interplay Entertainment'),
(17, 'Quake', 'FPS', 1998, 'id Software', 'Machine Games'),
(18, 'Resident Evil', 'Surival Horror', 1996, 'Capcom', 'Capcom'),
(19, 'Shenmue', 'Adventure', 1999, 'Sega', 'Sega'),
(20, 'Turok', 'FPS', 2008, 'Nightdive Studios', 'Nightdive Studios');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
