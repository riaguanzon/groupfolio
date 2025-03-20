-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2025 at 09:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `authenticate`
--

-- --------------------------------------------------------

--
-- Table structure for table `certifications`
--

CREATE TABLE `certifications` (
  `user_id` int(11) NOT NULL,
  `cert_id` int(11) NOT NULL,
  `certificate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certifications`
--

INSERT INTO `certifications` (`user_id`, `cert_id`, `certificate`) VALUES
(68, 1, 'Finish ZUITT Game Development Bootcamp'),
(68, 2, 'Finish ZUITT Basic Web Development Bootcamp'),
(69, 3, 'madami'),
(70, 4, 'pumasa sa webdev1'),
(71, 5, 'INC Passer'),
(72, 6, 'INC Passer');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `user_id` int(11) NOT NULL,
  `info_id` int(11) NOT NULL,
  `birthday` date NOT NULL,
  `section` varchar(255) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `elem` varchar(255) NOT NULL,
  `elemgrad` year(4) NOT NULL,
  `high` varchar(255) NOT NULL,
  `juniorgrad` year(4) NOT NULL,
  `shs` varchar(255) NOT NULL,
  `seniorgrad` year(4) NOT NULL,
  `college` varchar(255) NOT NULL,
  `collegegrad` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`user_id`, `info_id`, `birthday`, `section`, `bio`, `contact`, `address`, `email`, `facebook`, `github`, `insta`, `elem`, `elemgrad`, `high`, `juniorgrad`, `shs`, `seniorgrad`, `college`, `collegegrad`) VALUES
(68, 1, '2004-08-30', 'ACT AD3', 'A second year Associate in Computer Technology student at Western Mindanao State University', '092255664321', 'Rojo Compound Kasanyangan Z.C', 'mariaericha_g@yahoo.com', 'https://www.linkedin.com/in/ma-ericha-guanzon-626918298/', 'https://github.com/mariacutiepie', 'https://www.instagram.com/maaariyaaaah/', 'Talon-Talon Central School Sped Center', '2017', 'Zamboanga City High School Main', '2021', 'Zamboanga City High School Main', '2023', 'Western Mindanao State Universiry', 'present'),
(69, 2, '2005-10-21', 'ACT AD 2', 'mabait', '09264754814', 'san roque zamboanga city', 'kurtlevy.duenas@gmail.com', 'NONE', 'NONE', 'NONE', 'southcom elementary school', '2017', 'Zamboanga City High School West', '2021', 'Baliwasan Senior High', '2023', 'Western Mindanao State Universiry', 'present'),
(70, 3, '2000-08-27', 'ACT AD 2', 'isang dakilang tamad/kupals', '09531325563', 'guiwan', 'Rronelfrancisco315@gmail.com', 'NONE', 'https://github.com/Ronel27', 'NONE', 'Buenakapok Elementary School', '2013', 'Culianan National High School', '2017', 'Culianan National Senior High School', '2019', 'Western Mindanao State University', 'present'),
(71, 4, '1999-10-26', 'ACT AD 2', 'idiot', '09632464989', 'Cabatangan', 'hz202305232@wmsu.edu.ph', 'NA', 'NA', 'NA', 'Fuente Elementary School', '2013', 'Don Pablo Lorenzo Memorial High school', '2017', 'STI College Zamboanga', '2019', 'Western Mindanao State Universiry', 'present'),
(72, 5, '2004-09-16', 'ACT AD 2', 'hakdok', '09938603707', 'sta maria z.c', 'd.chiong123456@gmail.com', 'NA', 'NA', 'NA', 'sta. maria central school sped center', '2017', 'Don Pablo Lorenzo Memorial High school', '2021', 'Don Pablo Lorenzo Memorial Stand Alone senior high school', '2024', 'Western Mindanao State University', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `profile_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `projects` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `user_id`, `projects`, `title`, `description`, `status`) VALUES
(1, 68, 'https://2048car.netlify.app/', '2048 Cars Game', 'Zuitt Free Coding Bootcamp', 'Active'),
(2, 68, 'https://guanzon-la07.netlify.app/', 'Joleebing', 'Beeda ang sayaaa', 'Active'),
(3, 68, 'https://guanzon-la08.netlify.app/', 'Calculator', 'WebDev Lab Activity', 'Active'),
(4, 69, 'https://guanzon-lab09.netlify.app/', 'ZAMBOANGA WONDERS', 'AKO AY BATMAN', 'Active'),
(5, 70, 'https://francisco-bacalso-bayoneta.netlify.app/', 'Ronel&#039;s coffee Shop', 'E-commerce website', 'Active'),
(6, 71, 'https://cordero-sonny.netlify.app/', 'Laptop E-Store', 'Laptop E-Store', 'Active'),
(7, 72, 'https://dchiong-lipeng.netlify.app/', 'Chiong&#039;s Burger', 'malaki masarap pero mahal', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `skills_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `skills` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`skills_id`, `user_id`, `skills`) VALUES
(1, 68, 'PHP'),
(2, 68, 'Python'),
(3, 68, 'HTML'),
(4, 68, 'CSS'),
(5, 68, 'C++'),
(6, 68, 'SQL'),
(7, 68, 'Java'),
(8, 68, 'Javascript'),
(9, 69, 'HTML'),
(10, 69, 'CSS'),
(11, 70, 'Php'),
(12, 71, 'HTML'),
(13, 72, 'bisaya'),
(14, 72, 'chinese'),
(15, 72, 'gay language');

-- --------------------------------------------------------

--
-- Table structure for table `talents`
--

CREATE TABLE `talents` (
  `user_id` int(11) NOT NULL,
  `talent_id` int(11) NOT NULL,
  `talent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `talents`
--

INSERT INTO `talents` (`user_id`, `talent_id`, `talent`) VALUES
(68, 1, 'Photography'),
(68, 2, 'Layout Design'),
(68, 3, 'Pixel Art'),
(69, 4, 'singing'),
(70, 5, 'mag reklamo'),
(71, 6, 'NA'),
(72, 7, 'ma tulala 3hours');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `request_status` varchar(20) NOT NULL DEFAULT 'Pending',
  `status` varchar(255) NOT NULL DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `lastname`, `firstname`, `email`, `username`, `password`, `is_admin`, `request_status`, `status`) VALUES
(68, 'Guanzon', 'Ma. Ericha', 'mariaericha_g@yahoo.com', 'admin', '$2y$10$yk5teinZNQ1tBtOYd0qT6OlQfzwkz3AycQ6xS17xUyXpbzPeYCZ7G', 1, 'Default', 'Active'),
(69, 'Bayoneta', 'Kurtlevy', 'kurtlevy.duenas@gmail.com', 'lebay123', '$2y$10$dNSq0vxgLpzNUg1/hn/4e.Zomxugng5TXfOtJ8i1U.2Ui/Pfzg4ym', 0, 'Accepted', 'Active'),
(70, 'FRANCISCO', 'RONEL', 'Rronelfrancisco315@gmail.com', 'Ronel', '$2y$10$c2J1Cl05CdoxOPDbVTG0femjM8UBSstaWvMAZrUNmPzg6OFFZeh/6', 0, 'Accepted', 'Active'),
(71, 'Sonny', 'Ghaffrie', 'hz202305232@wmsu.edu.ph', 'ghaf', '$2y$10$d3fauhT6qSfmVkavajK/1ONGDnJSFAHfCPPBT8jezGm52R4R6PaAW', 0, 'Accepted', 'Active'),
(72, 'chiong', 'danley', 'd.chiong123456@gmail.com', 'danley', '$2y$10$XKv0tvOcOV9/kXM9GMLhxOe7/A0I6MDmWF6P5rUlLUDAO/W0D5Kbe', 0, 'Accepted', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certifications`
--
ALTER TABLE `certifications`
  ADD PRIMARY KEY (`cert_id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`info_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`profile_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`project_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`skills_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `talents`
--
ALTER TABLE `talents`
  ADD PRIMARY KEY (`talent_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certifications`
--
ALTER TABLE `certifications`
  MODIFY `cert_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `profile_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `skills_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `talents`
--
ALTER TABLE `talents`
  MODIFY `talent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `infos`
--
ALTER TABLE `infos`
  ADD CONSTRAINT `infos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
