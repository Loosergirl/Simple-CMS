SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `memberID` int(11) unsigned NOT NULL,
  `postID` int(11) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`liker_id`, `post_id`) VALUES
(1, 1),
(1, 2),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `memberID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT NULL
  PRIMARY KEY (`memberID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pc`
--

INSERT INTO `users` (`memberID`, `username`, `password`, `email`, `isAdmin`) VALUES
(1, 'Maria', 'evilbunnies', 'maria@maria.com', 1),
(2, 'Martin', 'strongpassword', 'martin@martin.com', 1),
(3, 'Emil', 'strongpassword', 'emil@emil.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `blog_posts`
--

CREATE TABLE IF NOT EXISTS `blog_posts` (
  `postID` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `postTitle` varchar(255) DEFAULT NULL,
  `postCont` text,
  `postDate` datetime DEFAULT NULL,
  `memberID` int(11) unsigned NOT NULL,
  `pictureSRC` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`postID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `printer`
--

INSERT INTO `blog_posts` (`postID`, `postTitle`, `postCont`, `postDate`, `memberID`, `pictureSRC`) VALUES
(1, 'Very Tall Buildings', '<p>Burj Khalifa, Shanghai Tower, Abraj Al-Bait Clock Tower, Ping An Finance Centre, Lotte World Tower, One World Trade Center, CTF Finance Centre, Taipei 101, Shanghai World Financial Center, International Commerce Centre... </p><p>Trollolol Eiffel Tower, Empire State Building<p>', 1, 'http://cdn.history.com/sites/2/2015/04/hith-eiffel-tower-iStock_000016468972Large.jpg'),
(2, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean congue lobortis maximus. Morbi vel velit ultricies, mattis odio ut, hendrerit ligula. Sed pharetra nulla nec erat lobortis, in ullamcorper turpis efficitur. Mauris pretium vehicula quam, at pretium libero posuere at. Sed eget pellentesque metus, at vestibulum lacus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum tellus quis mollis blandit. 
', 1, 'https://i.ytimg.com/vi/Z20IRoVtGlI/maxresdefault.jpg');