-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2025 at 07:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `career_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Wahaj Ansari', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `short_intro` varchar(100) NOT NULL,
  `email` varchar(80) NOT NULL,
  `contact` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(80) NOT NULL,
  `gender` varchar(80) NOT NULL,
  `about` text NOT NULL,
  `image` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`id`, `name`, `short_intro`, `email`, `contact`, `password`, `dob`, `address`, `gender`, `about`, `image`) VALUES
(1, 'Muhammad Saif', 'Sr. Web Developer', 'saif1810@gmail.com', '03049834989', 'Saif123', '1991-09-07', 'Suite No. 3 Cantt Board Plaza Adjacent To The Mall Of Lahore Tufail Road, Afshan', 'Male', 'As an employer on Career Hub, you can efficiently post job vacancies, review applications, and connect with top talent. Our platform streamlines the hiring process, helping you find the right candidates quickly and effectively.', 'team-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `company` varchar(80) NOT NULL,
  `location` varchar(80) NOT NULL,
  `job_requirements` varchar(80) NOT NULL,
  `salary_range` varchar(80) NOT NULL,
  `job_type` varchar(80) NOT NULL,
  `deadline` date NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `employer_id`, `title`, `company`, `location`, `job_requirements`, `salary_range`, `job_type`, `deadline`, `description`, `image`, `status`) VALUES
(1, 1, 'Laravel Developer', 'Arham Business & Technologies Pvt. Ltd', 'Lahore', 'Beginner level command over (PHP, Laravel, MySQL, HTML, CSS, BootStrap, JavaScri', '70000-80000', 'Full Time', '2025-03-30', 'Basic knowledge of RESTful APIs and JSON.\r\nUnderstanding of MVC design patterns.\r\nKnows the value of writing clean, elegant, well-documented code.\r\nBasic Knowledge of relational databases.\r\nA basic understanding of code versioning tools like Git will be a plus.', 'img-001.jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `job_seeker`
--

CREATE TABLE `job_seeker` (
  `id` int(11) NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `contact` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(80) NOT NULL,
  `education` varchar(80) NOT NULL,
  `experience` varchar(80) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `resume` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job_seeker`
--

INSERT INTO `job_seeker` (`id`, `name`, `email`, `contact`, `password`, `dob`, `address`, `education`, `experience`, `gender`, `resume`) VALUES
(1, 'Muhammad Usama', 'usama8290@gmail.com', '03018789109', '1234', '1996-08-29', 'Shalimar Town Karachi', '', '', 'Male', ''),
(2, 'Maria Javed', 'maria7910@gmail.com', '03005787890', '1234', '2000-12-19', 'Karachi', '', '', 'Female', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job_seeker`
--
ALTER TABLE `job_seeker`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employer`
--
ALTER TABLE `employer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job_seeker`
--
ALTER TABLE `job_seeker`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
