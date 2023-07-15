-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:8111
-- Generation Time: Dec 05, 2022 at 05:55 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `career_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `pass`) VALUES
(1, 'rantejbir@career.com', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `career_tb`
--

CREATE TABLE `career_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `descr` varchar(500) NOT NULL,
  `skill1` varchar(50) NOT NULL,
  `skill2` varchar(50) NOT NULL,
  `skill3` varchar(50) NOT NULL,
  `edu1` varchar(50) NOT NULL,
  `edu2` varchar(50) NOT NULL,
  `edu3` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `career_tb`
--

INSERT INTO `career_tb` (`id`, `name`, `descr`, `skill1`, `skill2`, `skill3`, `edu1`, `edu2`, `edu3`) VALUES
(1, 'Computer Programming', 'Create, modify, and test the code, forms, and script that allow computer applications to run. Work from specifications drawn up by software developers or other individuals.', 'Mathematics', 'Critical Thinking ', 'Programming', 'Mathematics  	', ' Computers and Electronics', 'English Language'),
(2, 'Accountant', 'Analyze financial information and prepare financial reports to determine or maintain record of assets, liabilities, profit and loss, tax liability, or other financial activities within an organization.', 'Mathematics', 'Critical Thinking', 'System Analysis ', 'Mathematics', 'Economics and Accounting', 'English'),
(3, 'Architect', 'Plan and design structures, such as private residences, office buildings, theaters, factories, and other structural property.', 'Critical Thinking ', 'Operational Analysis', 'Complex Problem Solving', 'Mathematics', 'Engineering and Technology', 'Computers and Electronics'),
(4, 'Biologist', 'Research or study basic principles of plant and animal life, such as origin, relationship, development, anatomy, and functions.', 'Management of Material Resources', 'Judgement and Decision making', 'Persuasion', 'Biology', 'Chemistry', 'Geography'),
(5, 'Civil Engineer', 'Perform engineering duties in planning, designing, and overseeing construction and maintenance of building structures, and facilities. ', 'Science', 'Coordination', 'System Analysis', 'Mathematics', 'Building and Construction', 'Engineering and Technology'),
(6, 'Database Administrator', 'Administer, test, and implement computer databases, applying knowledge of database management systems. Coordinate changes to computer databases. ', 'Programming', 'Operational Analysis', 'Critical Thinking', 'Mathematics', 'Computer and Electronics ', 'English'),
(7, 'Dentist', 'Diagnose and treat diseases, injuries, and malformations of teeth and gums and related oral structures. May treat diseases of nerve, pulp, and other dental tissues affecting vitality of teeth.', 'Science', 'Instructing', 'Social Perceptiveness', 'Biology', 'Medicine and Dentistry', 'Psychology'),
(8, 'Dietitian & Nutritionist', 'Plan and conduct food service or nutritional programs to assist in the promotion of health and control of disease. May supervise activities of a department providing quantity food services, counsel individuals, or conduct nutritional research.', 'Service Orientation', 'Social Perceptiveness', 'Science', 'Food Production', 'Socialogy and Anthropology', 'Biology'),
(9, 'Electrical Engineer', 'Design, develop, test, or supervise the manufacturing and installation of electrical equipment, components, or systems for commercial, industrial, military, or scientific use.', 'Technology Design', 'Installation', 'System Analysis ', 'Engineering and Technology', 'Computers and Electronics', 'Mathematics'),
(10, 'Financial Manager ', 'Direct and coordinate financial activities of workers in a branch, office, or department of an establishment, such as branch bank, brokerage firm, risk and insurance department, or credit department.', 'Mathematics', 'Active learning', 'Critical Thinking', 'Finance and Mathematics', 'Administration and Management', 'Law and Government '),
(11, 'Geologist', 'Study composition, structure, and history of the earth\'s crust; examine rocks, minerals, and fossil remains to identify and determine the sequence of processes affecting the development of the earth; apply knowledge of chemistry, physics, biology, and mathematics.', 'Science', 'System Analysis', 'Judgement and Decision Making', 'Engineering and Technology', 'Geography', 'Chemistry and Physics'),
(12, 'Graphic Designer ', 'Design or create graphics to meet specific commercial or promotional needs, such as packaging, displays, or logos. May use a variety of mediums to achieve artistic or decorative effects.', 'Critical Thinking', 'Systems Analysis', 'Design', 'Communication and Media', 'Computer and Electronics ', 'English'),
(13, 'Lawyer', 'Represent clients in criminal and civil litigation and other legal proceedings, draw up legal documents, and manage or advise clients on legal transactions. May specialize in a single area or may practice broadly in many areas of law.', 'Judgment and Decision Marking', 'Speaking', 'Learning Strategies ', 'Law and Government ', 'History', 'English'),
(14, 'Mechanical Engineer', 'Perform engineering duties in planning and designing tools, engines, machines, and other mechanically functioning equipment. Oversee installation, operation, maintenance, and repair of such equipment as centralized heat, gas, water, and steam systems.', 'Operations Analysis', 'Mathematics', 'Critical thinking', 'Mechanical', 'Engineering and Technology', 'Production and Processing');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `query` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `email`, `query`) VALUES
(7, 'rantejbirs@gmail.com', 'what is your name?'),
(8, 'rantejbir@icloud.com', 'how are you?'),
(10, 'dandamudi.ramya@gmail.com', 'what are you doing?'),
(11, 'sing1729@algonquinlive.com', 'what is the plan?'),
(12, 'rantejbirs@gmail.com', 'What are you thinking?'),
(13, 'rantejbir@icloud.com', 'What is next step?');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `pass` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `user`, `phone`, `pass`) VALUES
(3, 'rantejbirs', '4364664', '12345678'),
(4, 'daksh@eee.com', '12345678', '12345678'),
(5, 'daksh@eee', '1234567', '123456789'),
(6, 'sammy@iii', '765386836', '12345678'),
(7, 'rantejbirs@gmail.com', '', '12345678'),
(8, 'abdo@gmail.com', 'r3453425', '12345678'),
(9, 'imunib@gmail.com', '12323456', 'ninja1010'),
(10, 'ramya@gmail.com', '123456', 'ninja1010'),
(11, 'sam@gmail.com', '', '123456'),
(12, 'imunib@gmvail.com', '', 'ninja1010'),
(13, 'imunib@gccmail.com', '', 'ninja1010'),
(14, 'risabh@career.com', '1234567', '12345678'),
(15, 'pratham@gmail.com', '123456789', '12345678'),
(16, 'ghjbkjvyj', '', 'ninja1010'),
(17, 'PADMA@gmail.com', '', 'ninja1010'),
(18, 'rantejbir@career.com', '', '12345678'),
(19, '', '', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `career_tb`
--
ALTER TABLE `career_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
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
-- AUTO_INCREMENT for table `career_tb`
--
ALTER TABLE `career_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
