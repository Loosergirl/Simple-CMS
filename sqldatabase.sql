-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 10, 2017 at 02:32 PM
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
(5, 'emilhj', 'hej', '2017-05-10', 11, 'http://www.google.se');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`postID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `postID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
