-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 12:30 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database`
--

-- --------------------------------------------------------

--
-- Table structure for table `entry_count`
--

CREATE TABLE `entry_count` (
  `S.No` int(11) NOT NULL,
  `names` varchar(20) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `entry_count`
--

INSERT INTO `entry_count` (`S.No`, `names`, `count`) VALUES
(1, 'recepies', 6),
(2, 'origami', 0),
(3, 'carpentry', 0),
(4, 'decor', 0),
(5, 'gaming', 0),
(6, 'movies', 0),
(7, 'animes', 0),
(8, 'tv_shows', 0);

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `price` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `name`, `description`, `price`, `image`, `created`, `modified`) VALUES
(12345686, 'CodeKar@abc.com;pizza.txt', '', 0, '', '2021-04-10 20:24:02', '2021-04-10 20:24:02'),
(12345684, 'CodeKar@abc.com;cold coffee.txt', '', 0, '', '2021-04-10 15:18:36', '2021-04-10 15:18:36'),
(12345685, 'CodeKar@abc.com;Kadai paneer.txt', '', 0, '', '2021-04-10 15:30:59', '2021-04-10 15:30:59'),
(12345687, 'CodeKar@abc.com;sandwich.txt', '', 0, '', '2021-04-10 20:28:31', '2021-04-10 20:28:31'),
(12345688, 'CodeKar@abc.com;Death Note.txt', '', 0, '', '2021-04-10 20:47:04', '2021-04-10 20:47:04'),
(12345689, 'CodeKar@abc.com;Kimetsu no Yaiba.txt', '', 0, '', '2021-04-10 20:48:12', '2021-04-10 20:48:12'),
(12345690, 'CodeKar@abc.com;My Hero Academia.txt', '', 0, '', '2021-04-10 20:49:16', '2021-04-10 20:49:16'),
(12345691, 'CodeKar@abc.com;Naruto Shippuden.txt', '', 0, '', '2021-04-10 20:50:34', '2021-04-10 20:50:34'),
(12345692, 'CodeKar@abc.com;Naruto.txt', '', 0, '', '2021-04-10 20:52:07', '2021-04-10 20:52:07'),
(12345693, 'CodeKar@abc.com;abhishek upmanyu.txt', '', 0, '', '2021-04-10 20:55:29', '2021-04-10 20:55:29'),
(12345694, 'CodeKar@abc.com;akash gupta.txt', '', 0, '', '2021-04-10 20:55:55', '2021-04-10 20:55:55'),
(12345695, 'CodeKar@abc.com;Anubhav Singh Bassi.txt', '', 0, '', '2021-04-10 21:05:26', '2021-04-10 21:05:26'),
(12345696, 'CodeKar@abc.com;jaspreet singh.txt', '', 0, '', '2021-04-10 21:07:53', '2021-04-10 21:07:53'),
(12345697, 'CodeKar@abc.com;Rahul Dua.txt', '', 0, '', '2021-04-10 21:08:15', '2021-04-10 21:08:15'),
(12345698, 'CodeKar@abc.com;despacito.txt', '', 0, '', '2021-04-10 21:15:36', '2021-04-10 21:15:36'),
(12345699, 'CodeKar@abc.com;Jai Ho.txt', '', 0, '', '2021-04-10 21:16:37', '2021-04-10 21:16:37'),
(12345700, 'CodeKar@abc.com;Memories.txt', '', 0, '', '2021-04-10 21:17:06', '2021-04-10 21:17:06'),
(12345701, 'CodeKar@abc.com;Taki Taki.txt', '', 0, '', '2021-04-10 21:18:04', '2021-04-10 21:18:04'),
(12345702, 'CodeKar@abc.com;Inception.txt', '', 0, '', '2021-04-10 21:22:38', '2021-04-10 21:22:38'),
(12345703, 'CodeKar@abc.com;Interstellar.txt', '', 0, '', '2021-04-10 21:23:58', '2021-04-10 21:23:58'),
(12345704, 'CodeKar@abc.com;Joker.txt', '', 0, '', '2021-04-10 21:24:45', '2021-04-10 21:24:45'),
(12345705, 'CodeKar@abc.com;The pursuit of happiness.txt', '', 0, '', '2021-04-10 21:25:39', '2021-04-10 21:25:39'),
(12345706, 'CodeKar@abc.com;Genshin Impact.txt', '', 0, '', '2021-04-10 21:39:17', '2021-04-10 21:39:17'),
(12345707, 'CodeKar@abc.com;Minecraft.txt', '', 0, '', '2021-04-10 21:41:04', '2021-04-10 21:41:04'),
(12345708, 'CodeKar@abc.com;Persona 3.txt', '', 0, '', '2021-04-10 21:41:56', '2021-04-10 21:41:56'),
(12345709, 'CodeKar@abc.com;Persona 4.txt', '', 0, '', '2021-04-10 21:42:26', '2021-04-10 21:42:26'),
(12345710, 'CodeKar@abc.com;Persona 5.jpg', '', 0, '', '2021-04-10 21:43:05', '2021-04-10 21:43:05');

-- --------------------------------------------------------

--
-- Table structure for table `item_rating`
--

CREATE TABLE `item_rating` (
  `ratingId` int(11) NOT NULL,
  `itemId` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `ratingNumber` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1 COMMENT '1 = Block, 0 = Unblock'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset`
--

CREATE TABLE `password_reset` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `password_reset`
--

INSERT INTO `password_reset` (`id`, `email`, `token`) VALUES
(1, 'mttparth306@gmail.com', '9884e11e3d48e9216c935b72b80b64114233580afa9fa0062aba339de286d44eb239c9817142ec68d49b3a3392cb499ff4b2'),
(2, 'mttparth306@gmail.com', '2242d159405582b0008ce39f09aba72140d64f1a285229ac4601e8887c4497121fa707102f270f1fa047e6522f571b3369a2'),
(3, 'mttparth306@gmail.com', '58245b3deb48b6b9f81f20e5b0da549fcf91a5a2c5651d551bfc18d1b64290a2dc5badc21c76a0d3ede5c22aa4dc42f90dd0'),
(4, 'mttparth306@gmail.com', 'c37ac7fe03a8891c14f1b66be361b044b73968ef816980b2d69046eff4d25cbec418ce3342864ad475adc17cff8cf31e6876'),
(5, 'mttparth306@gmail.com', '5530712c5c44a730a541a09c34fc2454b85db32e65eb6897edda31bb85593b4bffc9109ed24a88553f95bbecb8b3b26ad39c'),
(6, 'mttparth306@gmail.com', '16713f8aa83062d32eb63d0c603a8852ea1fb54685c1973584c05789c2eed2724bc2dd1417573c7506dc287f5d58a883af22');

-- --------------------------------------------------------

--
-- Table structure for table `paths`
--

CREATE TABLE `paths` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` longtext NOT NULL,
  `tags` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paths`
--

INSERT INTO `paths` (`id`, `name`, `tags`) VALUES
(13, 'repo/food/CodeKar@abc.com;cold coffee.txt', ';milk;coffee;milk;coffee;'),
(14, 'repo/food/CodeKar@abc.com;Kadai paneer.txt', ';paneer;bellpepper;tomato;onion;paneer;bellpepper;tomato;onion;'),
(15, 'repo/Food/CodeKar@abc.com;pizza.txt', ';Olives;Corn;Cheese;Onions;Tomato;Dough;Olives;Corn;Cheese;Onions;Tomato;Dough;'),
(16, 'repo/Food/CodeKar@abc.com;sandwich.txt', ';cheese;capsicum;tomato;cucumber;butter;bread;cheese;capsicum;tomato;cucumber;butter;bread;'),
(17, 'repo/Anime/CodeKar@abc.com;Death Note.txt', ';supernatural;psycological;police;mystery;supernatural;psycological;police;mystery;'),
(18, 'repo/Anime/CodeKar@abc.com;Kimetsu no Yaiba.txt', ';hystorical;shounen;supernatural;demon;action;hystorical;shounen;supernatural;demon;action;'),
(19, 'repo/Anime/CodeKar@abc.com;My Hero Academia.txt', ';superpower;shounen;school;comedy;action;superpower;shounen;school;comedy;action;'),
(20, 'repo/Anime/CodeKar@abc.com;Naruto Shippuden.txt', ';shounen;Superpower;MartialArt;comedy;adventure;action;shounen;Superpower;MartialArt;comedy;adventure;action;'),
(21, 'repo/Anime/CodeKar@abc.com;Naruto.txt', ';MartialArts;Supernatural;Superpower;comedy;adventure;action;MartialArts;Supernatural;Superpower;comedy;adventure;action;'),
(22, 'repo/Stand Up Comedy/CodeKar@abc.com;abhishek upmanyu.txt', ';comedy;comedy;'),
(23, 'repo/Stand Up Comedy/CodeKar@abc.com;akash gupta.txt', ';comedy;comedy;'),
(24, 'repo/Stand Up Comedy/CodeKar@abc.com;Anubhav Singh Bassi.txt', ';comedy;comedy;'),
(25, 'repo/Stand Up Comedy/CodeKar@abc.com;jaspreet singh.txt', ';comedy;comedy;'),
(26, 'repo/Stand Up Comedy/CodeKar@abc.com;Rahul Dua.txt', ';comedy;comedy;'),
(27, 'repo/Music/CodeKar@abc.com;despacito.txt', ';LuiseFonsi;DaddyYankie;music;LuiseFonsi;DaddyYankie;music;'),
(28, 'repo/Music/CodeKar@abc.com;Jai Ho.txt', ';Oscar;Rahman;music;Oscar;Rahman;music;'),
(29, 'repo/Music/CodeKar@abc.com;Memories.txt', ';music;Maroon5;music;Maroon5;'),
(30, 'repo/Music/CodeKar@abc.com;Taki Taki.txt', ';SelenaGomez;music;CardiB;SelenaGomez;music;CardiB;'),
(31, 'repo/Movies/CodeKar@abc.com;Inception.txt', ';ElliotPage;TomHardy;JosephGordon;LeonardoDiCaprio;movie;ElliotPage;TomHardy;JosephGordon;LeonardoDiCaprio;movie;'),
(32, 'repo/Movies/CodeKar@abc.com;Interstellar.txt', ';JessicaChastain;MatthewMcConghey;MichaelCaine;AnneHathaway;JessicaChastain;MatthewMcConghey;MichaelCaine;AnneHathaway;'),
(33, 'repo/Movies/CodeKar@abc.com;Joker.txt', ';ZazieBeetz;RobertDeNiro;JoaquiniPhoenix;ZazieBeetz;RobertDeNiro;JoaquiniPhoenix;'),
(34, 'repo/Movies/CodeKar@abc.com;The pursuit of happiness.txt', ';DanCastellaneta;ThandiweNewton;JadenSmith;WillSmith;DanCastellaneta;ThandiweNewton;JadenSmith;WillSmith;'),
(35, 'repo/Games/CodeKar@abc.com;Genshin Impact.txt', ';Coop;Exploration;OpenWorld;Coop;Exploration;OpenWorld;'),
(36, 'repo/Games/CodeKar@abc.com;Minecraft.txt', ';Crafting;Exploration;OpenWorld;Crafting;Exploration;OpenWorld;'),
(37, 'repo/Games/CodeKar@abc.com;Persona 3.txt', ';TurnBased;RPG;ShinMegamiTensei;TurnBased;RPG;ShinMegamiTensei;'),
(38, 'repo/Games/CodeKar@abc.com;Persona 4.txt', ';TurnBased;RPG;ShinMegamiTensei;TurnBased;RPG;ShinMegamiTensei;'),
(39, 'repo/Games/CodeKar@abc.com;Persona 5.jpg', ';DatingSim;TurnBased;RPG;ShinMegamiTensei;DatingSim;TurnBased;RPG;ShinMegamiTensei;');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `userID` int(255) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `files` longtext NOT NULL,
  `EMAILID` varchar(255) NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `favourites` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`userID`, `NAME`, `files`, `EMAILID`, `PASSWORD`, `favourites`) VALUES
(13, 'Parth', 'repo/food/CodeKar@abc.com;cold coffee.txt;repo/food/CodeKar@abc.com;Kadai paneer.txt;repo/Food/CodeKar@abc.com;pizza.txt;repo/Food/CodeKar@abc.com;sandwich.txt;repo/Anime/CodeKar@abc.com;Death Note.txt;repo/Anime/CodeKar@abc.com;Kimetsu no Yaiba.txt;repo/Anime/CodeKar@abc.com;My Hero Academia.txt;repo/Anime/CodeKar@abc.com;Naruto Shippuden.txt;repo/Anime/CodeKar@abc.com;Naruto.txt;repo/Stand Up Comedy/CodeKar@abc.com;abhishek upmanyu.txt;repo/Stand Up Comedy/CodeKar@abc.com;akash gupta.txt;repo/Stand Up Comedy/CodeKar@abc.com;Anubhav Singh Bassi.txt;repo/Stand Up Comedy/CodeKar@abc.com;jaspreet singh.txt;repo/Stand Up Comedy/CodeKar@abc.com;Rahul Dua.txt;repo/Music/CodeKar@abc.com;despacito.txt;repo/Music/CodeKar@abc.com;Jai Ho.txt;repo/Music/CodeKar@abc.com;Memories.txt;repo/Music/CodeKar@abc.com;Taki Taki.txt;repo/Movies/CodeKar@abc.com;Inception.txt;repo/Movies/CodeKar@abc.com;Interstellar.txt;repo/Movies/CodeKar@abc.com;Joker.txt;repo/Movies/CodeKar@abc.com;The pursuit of happiness.txt;repo/Games/CodeKar@abc.com;Genshin Impact.txt;repo/Games/CodeKar@abc.com;Minecraft.txt;repo/Games/CodeKar@abc.com;Persona 3.txt;repo/Games/CodeKar@abc.com;Persona 4.txt;repo/Games/CodeKar@abc.com;Persona 5.jpg;', 'CodeKar@abc.com', '$2y$10$WWX2UNYWQu.BrMuAwf.b2e20rE/DEpIjj/f75.5K93wfdFzapPjG.', 'repo/food/CodeKar@abc.com;Kadai paneer.txt:'),
(14, 'Testing', ';', 'Testing@CodeKar.in', '$2y$10$NDR5FQTB23GtpvQDBE51yOhOjv3MWfTt9Qx.qogXeup2nrVcJ8yG2', ''),
(15, 'Parth Mittal', ';', 'mttparth306@gmail.com', '$2y$10$cdvG7HlUKcVSurOXSll6ReCowRbt9QgEaq29h.6oCOpxVioVt9XEu', 'repo/food/CodeKar@abc.com;cold coffee.txt:');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `entry_count`
--
ALTER TABLE `entry_count`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `item_rating`
--
ALTER TABLE `item_rating`
  ADD PRIMARY KEY (`ratingId`);

--
-- Indexes for table `password_reset`
--
ALTER TABLE `password_reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paths`
--
ALTER TABLE `paths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `entry_count`
--
ALTER TABLE `entry_count`
  MODIFY `S.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12345711;

--
-- AUTO_INCREMENT for table `item_rating`
--
ALTER TABLE `item_rating`
  MODIFY `ratingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `password_reset`
--
ALTER TABLE `password_reset`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `paths`
--
ALTER TABLE `paths`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `userID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
