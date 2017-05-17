-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 14, 2017 at 05:16 PM
-- Server version: 5.6.34
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Simple-Cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE `blog_posts` (
  `postID` int(10) UNSIGNED NOT NULL,
  `postTitle` varchar(65) DEFAULT NULL,
  `postCont` text NOT NULL,
  `postDate` date NOT NULL,
  `memberID` int(10) UNSIGNED NOT NULL,
  `pictureSRC` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_posts`
--

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postCont`, `postDate`, `memberID`, `pictureSRC`) VALUES
(1, 'Första bloggen!', 'Hej', '2017-05-10', 11, ''),
(2, 'hej', 'hej', '2017-05-10', 11, ''),
(3, 'emil', 'emil', '2017-05-10', 11, ''),
(4, 'emilhj', 'hej', '2017-05-10', 11, 'http://www.google.se'),
(5, 'emilhj', 'hej', '2017-05-10', 11, 'http://www.google.se'),
(6, 'Day on beach', 'Today I was on the beach and it was awesome!', '2017-05-11', 13, 'htttp://google.se'),
(7, 'Day on beach', 'Today I was on the beach and it was awesome!', '2017-05-11', 13, 'htttp://google.se');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `memberID` int(10) UNSIGNED NOT NULL,
  `postID` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`memberID`, `postID`) VALUES
(1, 1),
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `memberID` int(10) UNSIGNED NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(65) CHARACTER SET utf8mb4 NOT NULL,
  `isAdmin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`memberID`, `username`, `password`, `email`, `isAdmin`) VALUES
(11, 'admin', '$2y$10$uFbUonuWL5gn./HptX5ZBO5Gg.QAPFPoER8hCA93Tat0g3HHWvyhK', 'admin@hotmail.com', 1),
(12, 'emil', '$2y$10$fFoKBUuxyxmaAfdvwXmDSeAAZKXwiRwVBn7jna9/vY6T0GgJI/mR6', 'emil@gmail.com', 0),
(13, 'martin', '$2y$10$Ty7V/WhRkKihoUmgUNlDneWtKnRKP2T1YJlAlqCGrU5hyZisb5nJy', 'martin@hotmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`postID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`memberID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `postID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `memberID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
