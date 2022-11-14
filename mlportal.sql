-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 14, 2022 at 02:50 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MLPortal`
--

-- --------------------------------------------------------

--
-- Table structure for table `instructor`
--

CREATE TABLE `instructor` (
  `instructor_id` int(11) DEFAULT NULL,
  `username` varchar(55) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `display_name` varchar(100) DEFAULT NULL,
  `permissions` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instructor`
--

INSERT INTO `instructor` (`instructor_id`, `username`, `password`, `display_name`, `permissions`) VALUES
(1, 'MacJones', 'Pats', 'Mac', 'All'),
(2, 'JoeyB', 'Cinci', 'Joe', 'All'),
(3, 'KirkC', 'trash', 'Kirk', 'None'),
(4, 'AARon', 'Oldman', 'Rodgers', 'All'),
(4, 'JoshA', 'Runner', 'Josh', 'All');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(11) NOT NULL,
  `topic` varchar(100) DEFAULT NULL,
  `description` varchar(2000) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `instructor_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `topic`, `description`, `type`, `keywords`, `link`, `instructor_id`) VALUES
(1, 'Gaussian Processes', 'a generic supervised learning method designed to solve regression and probabilistic classification problems.', 'Supervised Learning', 'GPR', 'https://scikit-learn.org/stable/modules/gaussian_process.html#:~:text=Gaussian%20Processes%20(GP)%20are%20a,at%20least%20for%20regular%20kernels).', '3'),
(2, 'Naive Bayes', 'Is a classification algorithm that uses Bayes theorem', 'Supervised Learning', 'Bayes', 'https://scikit-learn.org/stable/modules/naive_bayes.html', '3'),
(4, 'Decision Trees', 'Are used for classicfication and regression methods', 'Supervised Learning ', 'Tree', 'https://scikit-learn.org/stable/modules/tree.html', '4'),
(6, 'Manifold learning', 'Data in these sets take a non leaner approach', 'Unsupervised Learning', 'Unsupervised Learning', 'https://scikit-learn.org/stable/modules/manifold.html', '6'),
(7, 'Gaussian mixture models', 'Is a model that takes into account the possible of mixted finite numbers for data sets. It generates their proablilty ', 'Unsupervised learning', 'Unsupervised learning, Gaussian', 'https://www.walmart.com/', '7'),
(8, 'Biclustering', 'It will cluster rows and columns of matrixs', 'Unsupervised learning ', 'Unsupervised learning, clustering', 'https://www.miamidolphins.com/', '8'),
(9, 'Density Estimation', 'Can use models like Gaussian Mixtures or kernel density. To estimate the density of data sets.', 'Unsupervised learning', 'Unsupervised learning', 'https://scikit-learn.org/stable/modules/density.html', '9'),
(10, 'Neural network models', 'Restricted Boltzmann machines are one kind of neural network mdoels. This model assumes inputs are binary.This data would be encoded.', 'Unsupervised learning', 'Unsupervised learning, Neural networks', 'https://scikit-learn.org/stable/modules/neural_networks_unsupervised.html', '10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `displayname` varchar(100) NOT NULL,
  `role` enum('admin','instructor') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `displayname`, `role`) VALUES
(1, 'test', 'test', 'test', 'admin'),
(3, 'test_instructor', 'test', 'test_instructor', 'instructor'),
(5, 'juan', 'test', 'juan', 'instructor'),
(9, 'alex', 'test', 'alex', 'instructor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
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
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
