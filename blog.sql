-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 10:14 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `member` varchar(1000) NOT NULL,
  `blogdata` varchar(10000) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `topic` varchar(100) NOT NULL,
  `image1` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL,
  `image4` varchar(200) NOT NULL,
  `image5` varchar(200) NOT NULL,
  `api1-title` varchar(200) NOT NULL,
  `api1-description` varchar(10000) NOT NULL,
  `api2-title` varchar(100) NOT NULL,
  `api2-description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `member`, `blogdata`, `link`, `topic`, `image1`, `image2`, `image3`, `image4`, `image5`, `api1-title`, `api1-description`, `api2-title`, `api2-description`) VALUES
(1, 'Saket Shetty', 'Post-it is a social media app which allows user to interact with each other from all around the world. The user can login with their social media like google and twitter. It uses UTC (universal time cordinate) technology so that time for every user will be same and changing device time will not affect it.', 'https://www.github.com/saket-shetty', 'post-it', 'image/homepage.jpeg', 'image/landingpage.jpeg', 'image/report.jpeg', 'image/account.jpeg', 'image/comment.jpeg', 'Google Api', 'Google Api is used for the user login, so that the user doesnt have to create new account for the app they can user their google account. goole Api also allows developer to access the user_name, email address and user display image. Api also allows the developer to access the secret token of the user so session can be created easily and user doesnot have to login again and again into the app.', 'Twitter Api', 'Twitter Api is another way the user can login into the app, But unlike Google Api the Twitter doesnot allows developer to acces user image. To access the Twitter Api the developer have to fill the form and it takes 1 day for review process and they give the ConsumerKey and ConsumerSecretKey which is essential for Api.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
