-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 15, 2022 at 12:05 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mlportal`
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
(10, 'Neural network models', 'Restricted Boltzmann machines are one kind of neural network mdoels. This model assumes inputs are binary.This data would be encoded.', 'Unsupervised learning', 'Unsupervised learning, Neural networks', 'https://scikit-learn.org/stable/modules/neural_networks_unsupervised.html', '10'),
(13, 'topic', 'description', 'type', 'keywords', 'link', 'instructor_id'),
(14, 'Intro To Machine Learning Crash Course', 'Introduction to machine learning crash course by Google.', 'website', 'intro, machine, learning, crash course', 'https://developers.google.com/machine-learning/crash-course/ml-intro', '1'),
(15, 'Machine Learning Zero To Hero', 'Watch intro to machine learning video that takes you from zero to hero.', 'video', 'zero to hero, machine, learning, intro', 'https://www.youtube.com/watch?v=KNAWp2S3w94', '1'),
(16, 'An Introduction To Machine Learning (Digital Ocean)', 'Machine learning is a subfield of artificial intelligence (AI). The goal of machine learning generally is to understand the structure of data and fit that data into models that can be understood and utilized by people.', 'blog', 'intro, machine learning, ', 'https://www.digitalocean.com/community/tutorials/an-introduction-to-machine-learning', '1'),
(17, 'Machine Learning Basics - What Is Machine Learning?', 'This Machine Learning basics video will help you understand what Machine Learning is, what are the types of Machine Learning - supervised, unsupervised & reinforcement learning, how Machine Learning works with simple examples, and will also explain how Machine Learning is being used in various industries.', 'video', 'machine, learning, basics, intro, what is machine learning', 'https://www.youtube.com/watch?v=ukzFI9rgwfU', '1'),
(18, '11. Introduction to Machine Learning from MIT', 'MIT 6.0002 Introduction to Computational Thinking and Data Science, Fall 2016 Instructor: Eric Grimson', 'video', 'intro to machine learning, MIT, intro, machine, learning', 'https://www.youtube.com/watch?v=h0e2HAPTGF4', '1'),
(19, 'What Is Supervised Learning? from IBM', 'Learn how supervised learning works and how it can be used to build highly accurate machine learning models.', 'website', 'supervised learning, supervised', 'https://www.ibm.com/cloud/learn/supervised-learning', '1'),
(20, 'Supervised Machine Learning Explained For Beginners', 'In this video we learn about Supervised Machine Learning, which is arguably the most important type of Machine Learning.', 'video', 'supervised learning, supervised, beginners', 'https://www.youtube.com/watch?v=Mu3POlNoLdc', '1'),
(21, 'Supervised Machine Learning from Java Point', 'Supervised learning is the types of machine learning in which machines are trained using well \"labelled\" training data, and on basis of that data, machines predict the output. The labelled data means some input data is already tagged with the correct output.', 'website', 'supervised machine learning, supervised, machine learning', 'https://www.javatpoint.com/supervised-machine-learning', '1'),
(22, 'What Is Supervised Learning? by David Petersson', 'Supervised learning is an approach to creating artificial intelligence (AI), where a computer algorithm is trained on input data that has been labeled for a particular output.', 'website', 'supervised machine learning, supervised, machine learning', 'https://www.techtarget.com/searchenterpriseai/definition/supervised-learning', '1'),
(23, 'Unsupervised Machine Learning Explained For Beginners', 'You will learn: What is unsupervised learning,Clustering,K-Means,Outlier Detection,Latent variable modeling,Principal Component Analysis (PCA), and Autoencoder', 'video', 'unsupervised learning, beginner, beginners', 'https://www.youtube.com/watch?v=yteYU_QpUxs', '1'),
(24, 'What Is Unsupervised Learning by Thomas Wood', 'Unsupervised learning is a kind of machine learning where a model must look for patterns in a dataset with no labels and with minimal human supervision.', 'blog', 'unsupervised learning,', 'https://deepai.org/machine-learning-glossary-and-terms/unsupervised-learning', '1'),
(25, 'What Does Unsupervised Machine Learning Mean?', 'Unsupervised machine learning algorithms infer patterns from a dataset without reference to known, or labeled, outcomes. ', 'blog', 'unsupervised learning,', 'https://www.datarobot.com/wiki/unsupervised-machine-learning/', '1'),
(26, 'Python Machine Learning', 'In this tutorial we will go back to mathematics and study statistics, and how to calculate important numbers based on data sets.', 'website', 'python machine learning, tutorial', 'https://www.w3schools.com/python/python_ml_getting_started.asp', '1'),
(27, 'Python Machine Learning Tutorial (Data Science)', 'Python Machine Learning Tutorial  - Learn how to predict the kind of music people like.', 'video', 'python machine learning, tutorial', 'https://www.youtube.com/watch?v=7eh4d6sabA0', '1'),
(28, 'Machine Learning With Python - Full Course 2022', 'In this video on Machine Learning with Python full course, you will understand the basics of machine learning, essential applications of machine learning, machine learning concepts, and understand why mathematics, statistics, and linear algebra are crucial.', 'video', 'python, course', 'https://www.youtube.com/watch?v=c8W7dRPdIPE', '1'),
(29, 'Linear Regression In Python', 'Learn what linear regression is, what it\'s used for, how it works, and how to implement it in python.', 'website', 'linear regression, python', 'https://realpython.com/linear-regression-in-python/', '1'),
(30, 'Building A Neural Network & Making Predictions With Python', 'If you’re just starting out in the artificial intelligence (AI) world, then Python is a great language to learn since most of the tools are built using it.', 'blog', 'neural network, python', 'https://realpython.com/courses/build-neural-network-python-ai/', '1'),
(31, 'What Is A Neural Network? In 5 Minutes', 'This video on \"What is a Neural Network\" delivers an entertaining and exciting introduction to the concepts of Neural Network.', 'video', 'neural network ', 'https://www.youtube.com/watch?v=bfmFfD2RIcg', '1'),
(32, 'Naive Bayes Algorithm - Everything You Need To Know', 'Naïve Bayes is a probabilistic machine learning algorithm based on the Bayes Theorem, used in a wide variety of classification tasks.', 'blog', 'Naive Bayes, Algorithm', 'https://www.kdnuggets.com/2020/06/naive-bayes-algorithm-everything.html', '1'),
(33, 'Naive Bayes Classifiers', 'This article discusses the theory behind the Naive Bayes classifiers and their implementation.', 'website', 'Naive Bayes classifiers', 'https://www.geeksforgeeks.org/naive-bayes-classifiers/', '1'),
(34, 'Understanding K-Means Clustering In Machine Learning', 'K-means clustering is one of the simplest and popular unsupervised machine learning algorithms.', 'website', 'k-means, clustering, machine learning', 'https://towardsdatascience.com/understanding-k-means-clustering-in-machine-learning-6a6e67336aa1', '1'),
(35, 'K-Means Python Tutorial', 'K Means clustering algorithm is unsupervised machine learning technique used to cluster data points.', 'video', 'k-means, clustering, machine learning', 'https://www.youtube.com/watch?v=EItlUEPCIzM', ''),
(36, 'K-Means: The Basic Idea', 'Say you are given a data set where each observed example has a set of features, but has no labels. Labels are an essential ingredient to a supervised algorithm like Support Vector Machines, which learns a hypothesis function to predict labels given features. So we can\'t run supervised learning. What can we do?', 'website', 'k-means, stanford', 'https://stanford.edu/~cpiech/cs221/handouts/kmeans.html', '1'),
(37, 'Logistic Regression For Machine Learning', 'Logistic regression is another technique borrowed by machine learning from the field of statistics.', 'blog', 'logistic regression', 'https://machinelearningmastery.com/logistic-regression-for-machine-learning/', '1'),
(38, 'Logistic Regression Outline', 'Logistic regression is a classification algorithm used to assign observations to a discrete set of classes.', 'website', 'logistic regression', 'https://ml-cheatsheet.readthedocs.io/en/latest/logistic_regression.html', '1'),
(39, 'Decision Trees 1.10', 'Decision Trees (DTs) are a non-parametric supervised learning method used for classification and regression. ', 'website', 'decision trees, scikit learn', 'https://scikit-learn.org/stable/modules/tree.html', '1'),
(40, 'Decision Tree Classification Clearly Explained', 'Here, I\'ve explained Decision Trees in great detail. You\'ll also learn the math behind splitting the nodes.', 'video', 'decision trees, classification', 'https://www.youtube.com/watch?v=ZVR2Way4nwQ', '1'),
(41, 'Top 10 Machine Learning Applications', 'Machine learning is the latest buzzword sweeping across the global business landscape. It has captured the popular imagination, conjuring up visions of futuristic self-learning AI and robots.', 'website', 'applications, uses, machine learning applications, top 10', 'https://www.simplilearn.com/tutorials/machine-learning-tutorial/machine-learning-applications', '1'),
(42, 'Top 10 Applications of Machine Learning', 'This \"Top 10 Applications of Machine Learning in 2021\" video will give you an idea of how vast the machine learning is and how commonly you are using it in your day to day life. ', 'video', 'top 10, applications, machine learning applications', 'https://www.youtube.com/watch?v=sGoCg7Tb0AU', '1'),
(43, 'Applications of Machine Learning Javapoint', 'Machine learning is a buzzword for today\'s technology, and it is growing very rapidly day by day. We are using machine learning in our daily life even without knowing it such as Google Maps, Google assistant, Alexa, etc.', 'blog', 'applications, uses, machine learning applications', 'https://www.javatpoint.com/applications-of-machine-learning', '1');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
