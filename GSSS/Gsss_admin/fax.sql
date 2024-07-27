-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2024 at 11:38 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `girl_school`
--

-- --------------------------------------------------------

--
-- Table structure for table `facility`
--

CREATE TABLE `facility` (
  `id` int(255) NOT NULL,
  `name` text NOT NULL,
  `title` text NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(255) NOT NULL,
  `img` text NOT NULL,
  `info` text NOT NULL,
  `roll` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facility`
--

INSERT INTO `facility` (`id`, `name`, `title`, `date`, `status`, `img`, `info`, `roll`) VALUES
(9, 'Manish ', 'Principal ', '2024-02-14 12:28:04', 1, 'bc0bd2e414add9e469ea9d25a93fe4c9.jpg', '<p>Certainly! Here&#39;s a <span style=\"font-size:72px\">sample</span> &quot;vichar&quot; (thought) from a school principal:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Education is not merely about imparting knowledge; it&#39;s about nurturing minds, instilling values, and fostering a sense of curiosity and critical thinking. As a school community, our aim should not only be to prepare students for exams but to prepare them for life. Let&#39;s create an environment where every child feels valued, supported, and empowered to reach their full potential. Together, let&#39;s inspire a love for learning and a commitment to excellence that will guide our students towards success in both their academic and personal journeys.&quot;</p>\r\n', '5'),
(10, 'facility name', 'Post', '2024-02-17 16:20:22', 0, 'IMG_20240213_112348.jpg', '<p>Teacher 1</p>\r\n', '1'),
(11, 'Rohit ', 'facility ', '2024-02-18 13:17:18', 1, '637510576167203704.png', '<p>Certainly! Here&#39;s a sample &quot;vichar&quot; (thought) from a school principal:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Education is not merely about imparting knowledge; it&#39;s about nurturing minds, instilling values, and fostering a sense of curiosity and critical thinking. As a school community, our aim should not only be to prepare students for exams but to prepare them for life. Let&#39;s create an environment where every child feels valued, supported, and empowered to reach their full potential. Together, let&#39;s inspire a love for learning and a commitment to excellence that will guide our students towards success in both their academic and personal journeys.&quot;</p>\r\n\r\n<p>Certainly! Here&#39;s a sample &quot;vichar&quot; (thought) from a school principal:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&quot;Education is not merely about imparting knowledge; it&#39;s about nurturing minds, instilling values, and fostering a sense of curiosity and critical thinking. As a school community, our aim should not only be to prepare students for exams but to prepare them for life. Let&#39;s create an environment where every child feels valued, supported, and empowered to reach their full potential. Together, let&#39;s inspire a love for learning and a commitment to excellence that will guide our students towards success in both their academic and personal journeys.&quot;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facility`
--
ALTER TABLE `facility`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facility`
--
ALTER TABLE `facility`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;