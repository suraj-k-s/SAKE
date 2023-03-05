-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 02:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sake`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(1, 'Admin', 'admin@gmail.com', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_answer`
--

CREATE TABLE `tbl_answer` (
  `answer_id` int(11) NOT NULL,
  `qstn_id` int(11) NOT NULL,
  `answer_content` varchar(50) NOT NULL,
  `answer_status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_answer`
--

INSERT INTO `tbl_answer` (`answer_id`, `qstn_id`, `answer_content`, `answer_status`) VALUES
(1, 1, 'Black', 'True'),
(2, 1, 'White', 'False'),
(3, 1, 'Red', 'False'),
(4, 1, 'Blue', 'False'),
(5, 2, 'Picture', 'True'),
(6, 2, 'Video', 'False'),
(7, 2, 'Audio', 'False'),
(8, 2, 'Document', 'False'),
(9, 3, 'Stik', 'False'),
(10, 3, 'Stick', 'True'),
(11, 3, 'Stek', 'False'),
(12, 3, 'Stikc', 'False'),
(13, 4, 'Rat', 'False'),
(14, 4, 'Bat', 'False'),
(15, 4, 'Cat', 'True'),
(16, 4, 'Can', 'False'),
(17, 5, 'Stick', 'True'),
(18, 5, 'Stik', 'False'),
(19, 5, 'Stikc', 'False'),
(20, 5, 'Stic', 'False'),
(21, 6, 'hoples', 'False'),
(22, 6, 'hopless', 'False'),
(23, 6, 'hopples', 'False'),
(24, 6, 'hopeless', 'True'),
(25, 9, 'Chu', 'False'),
(26, 9, 'Ku', 'False'),
(27, 9, 'Cha', 'True'),
(28, 9, 'Co', 'False'),
(29, 10, '9', 'True'),
(30, 10, '8', 'False'),
(31, 10, '10', 'False'),
(32, 10, '12', 'False'),
(33, 11, '4', 'False'),
(34, 11, '7', 'False'),
(35, 11, '5', 'True'),
(36, 11, '8', 'False'),
(37, 13, 'Chu', 'False'),
(38, 13, 'Ku', 'False'),
(39, 13, 'Cha', 'True'),
(40, 13, 'Cho', 'False'),
(41, 12, 'YLFRETTUB', 'True'),
(42, 12, 'YLFRUTTUB', 'False'),
(43, 12, 'YFLRETTUB', 'False'),
(44, 12, 'YLFERTTUB', 'False'),
(45, 14, '13', 'False'),
(46, 14, '15', 'True'),
(47, 14, '16', 'False'),
(48, 14, '11', 'False'),
(49, 15, '7 4 6 5 3 2 1', 'False'),
(50, 15, '7 6 5 4 3 2 1', 'True'),
(51, 15, '1 2 4 3 6 5 7', 'False'),
(52, 15, '1 2 3 4 5 6 7', 'False'),
(53, 17, '1/3', 'False'),
(54, 17, '2/4', 'True'),
(55, 17, '4/2', 'False'),
(56, 17, '1/4', 'False'),
(57, 20, 'Ballon', 'False'),
(58, 20, 'Balon', 'False'),
(59, 20, 'Baloon', 'False'),
(60, 20, 'Balloon', 'True'),
(61, 21, 'ECIMAERC', 'False'),
(62, 21, 'MAERCECI', 'True'),
(63, 21, 'MARECECI', 'False'),
(64, 21, 'EMARCICE', 'False'),
(65, 23, '2', 'False'),
(66, 23, '9', 'False'),
(67, 23, '6', 'False'),
(68, 23, '7', 'True'),
(69, 24, 'Carrot', 'True'),
(70, 24, 'Carot', 'False'),
(71, 24, 'Parrot', 'False'),
(72, 24, 'Karrot', 'False'),
(73, 25, 'Mowan', 'False'),
(74, 25, 'Wowan', 'False'),
(75, 25, 'Womau', 'False'),
(76, 25, 'Woman', 'True'),
(77, 26, '3', 'False'),
(78, 26, '54', 'False'),
(79, 26, '15', 'True'),
(80, 26, '1', 'False'),
(83, 27, 'x', 'False'),
(84, 27, '+', 'False'),
(85, 27, '÷', 'False'),
(86, 27, '-', 'True'),
(87, 28, 'ORange', 'False'),
(88, 28, 'Orange', 'True'),
(89, 28, 'ORangE', 'False'),
(90, 28, 'orangE', 'False'),
(91, 30, '1,3,6,13,19,22,45', 'True'),
(92, 30, '3,13,1,22,19,6,45', 'False'),
(93, 30, '1,3,13,45,22,19,6', 'False'),
(94, 30, '19,13,22,1,6,45,3', 'False'),
(95, 31, '6', 'True'),
(96, 31, '5', 'False'),
(97, 31, '8', 'False'),
(98, 31, '7', 'False');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_complaint`
--

CREATE TABLE `tbl_complaint` (
  `complaint_id` int(11) NOT NULL,
  `complaint_content` varchar(50) NOT NULL,
  `complaint_reply` varchar(50) NOT NULL DEFAULT 'Not Replied',
  `complaint_date` date NOT NULL,
  `complaint_status` varchar(50) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_complaint`
--

INSERT INTO `tbl_complaint` (`complaint_id`, `complaint_content`, `complaint_reply`, `complaint_date`, `complaint_status`, `parent_id`) VALUES
(1, 'Server Problem', 'it will soon', '2022-07-14', '1', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_disabilities`
--

CREATE TABLE `tbl_disabilities` (
  `disability_id` int(11) NOT NULL,
  `disability_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_disabilities`
--

INSERT INTO `tbl_disabilities` (`disability_id`, `disability_name`) VALUES
(1, 'Dyslexia'),
(3, 'Dyscalculia'),
(4, 'Dysgraphia'),
(5, 'Dyspraxia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `district_id` int(11) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`district_id`, `district_name`) VALUES
(8, 'Trivandrum'),
(9, 'Kollam'),
(10, 'Pathanamthitta'),
(11, 'Ernakulam'),
(12, 'Idukki'),
(13, 'Kottayam'),
(14, 'Thrissur'),
(15, 'Alappuzha'),
(16, 'Kannur'),
(17, 'Palakkad'),
(18, 'Kasargod'),
(19, 'Kozhikode'),
(20, 'Malappuram'),
(21, 'Wayanad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feedback_id` int(11) NOT NULL,
  `feedback_date` date NOT NULL,
  `feedback_content` varchar(50) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`feedback_id`, `feedback_date`, `feedback_content`, `parent_id`) VALUES
(1, '2022-07-15', 'Ok', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_parent`
--

CREATE TABLE `tbl_parent` (
  `parent_id` int(11) NOT NULL,
  `parent_name` varchar(50) NOT NULL,
  `parent_contact` int(11) NOT NULL,
  `parent_email` varchar(50) NOT NULL,
  `parent_photo` varchar(50) NOT NULL,
  `parent_proof` varchar(50) NOT NULL,
  `parent_address` varchar(50) NOT NULL,
  `place_id` int(11) NOT NULL,
  `parent_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_parent`
--

INSERT INTO `tbl_parent` (`parent_id`, `parent_name`, `parent_contact`, `parent_email`, `parent_photo`, `parent_proof`, `parent_address`, `place_id`, `parent_password`) VALUES
(5, 'Parent', 987654321, 'parent@gmail.com', 'black-chalk.jpg', 'black-chalk.jpg', 'Parent Address', 16, 'parent123'),
(6, 'Gopi', 2147483647, 'gopikuttan@gmail.com', 'Place 3.png', 'Place 4.png', 'samadanam,Moolamattam,Idukki', 16, 'gopi1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(50) NOT NULL,
  `district_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`place_id`, `place_name`, `district_id`) VALUES
(1, '', 0),
(2, '', 0),
(4, 'Muvattupuzha', 0),
(6, 'Muvattupuzha', 0),
(7, 'Muvattupuzha', 11),
(8, 'muvattupuzha', 0),
(10, 'Muvattupuzhaa', 0),
(11, 'Muvattupuzhaa', 0),
(13, 'Muvat', 0),
(14, 'Muvattu', 0),
(16, 'Moolamattam', 12),
(17, 'Kovalam', 8),
(18, 'Aranmula', 10),
(19, 'Chalakkudi', 14),
(20, 'Poonkunnam', 14),
(21, 'Ettumanoor', 13),
(22, 'Kaladi', 11),
(23, 'Aluva', 11),
(24, 'Peerumedu', 13),
(25, 'Thodupuzha', 12),
(26, 'Munnar', 12),
(27, 'Pandalam', 10),
(28, 'Konni', 10),
(29, 'Nedumangad', 8),
(30, 'Varkala', 8),
(31, 'Kuttanad', 15),
(32, 'Chertala', 15),
(33, 'Thalasseri', 16),
(34, 'Payyannur', 16),
(35, 'Pattambi', 17),
(36, 'Malambuzha', 17),
(37, 'Hosdurg', 18),
(38, 'Mancheswaram', 18),
(39, 'Kalpatta', 21),
(40, 'Koyilandi', 19),
(41, 'ponnani', 20),
(42, 'Vadakara', 19),
(43, 'Sulthan Bathery', 21);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questionanswer`
--

CREATE TABLE `tbl_questionanswer` (
  `qa_id` int(11) NOT NULL,
  `qstn_time` varchar(11) NOT NULL,
  `qstn_status` varchar(50) NOT NULL DEFAULT '0',
  `qstn_id` int(11) NOT NULL,
  `answer_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_questionanswer`
--

INSERT INTO `tbl_questionanswer` (`qa_id`, `qstn_time`, `qstn_status`, `qstn_id`, `answer_id`, `quiz_id`) VALUES
(1, '12:52:02', 'true', 4, 15, 2),
(2, '12:52:07', 'true', 5, 17, 2),
(3, '12:52:17', 'true', 6, 24, 2),
(4, '12:52:21', 'true', 10, 29, 2),
(5, '12:52:25', 'true', 11, 35, 2),
(6, '12:52:30', 'true', 12, 41, 2),
(7, '12:52:35', 'true', 13, 39, 2),
(8, '12:52:38', 'true', 14, 46, 2),
(9, '12:52:41', 'true', 15, 50, 2),
(10, '12:52:49', 'true', 17, 54, 2),
(11, '12:54:42', 'false', 4, 13, 3),
(12, '12:54:45', 'false', 5, 19, 3),
(13, '12:54:47', 'false', 6, 23, 3),
(14, '12:54:51', 'false', 10, 31, 3),
(15, '12:54:54', 'false', 11, 34, 3),
(16, '12:54:57', 'false', 12, 42, 3),
(17, '12:55:04', 'false', 13, 38, 3),
(18, '12:55:07', 'false', 14, 47, 3),
(19, '12:55:10', 'false', 15, 51, 3),
(20, '12:55:13', 'false', 17, 55, 3),
(21, '15:24:40', 'true', 4, 15, 4),
(22, '15:24:45', 'true', 5, 17, 4),
(23, '15:24:59', 'true', 6, 24, 4),
(24, '15:25:08', 'true', 10, 29, 4),
(25, '15:25:11', 'false', 11, 34, 4),
(26, '15:25:14', 'false', 12, 42, 4),
(27, '15:25:17', 'false', 13, 38, 4),
(28, '15:25:20', 'false', 14, 45, 4),
(29, '15:25:24', 'false', 15, 52, 4),
(30, '15:25:28', 'false', 17, 55, 4),
(31, '15:25:36', 'false', 20, 57, 4),
(32, '15:25:39', 'true', 21, 62, 4),
(33, '19:22:02', 'false', 4, 0, 10),
(34, '19:22:16', 'false', 4, 0, 10),
(35, '19:22:27', 'true', 4, 15, 10),
(36, '19:23:58', 'true', 4, 15, 11),
(37, '19:24:01', 'true', 5, 17, 11),
(38, '19:24:09', 'true', 6, 24, 11),
(39, '19:24:18', 'true', 10, 29, 11),
(40, '19:24:27', 'true', 11, 35, 11),
(41, '19:24:39', 'true', 12, 41, 11),
(42, '19:24:45', 'true', 13, 39, 11),
(43, '19:24:50', 'true', 14, 46, 11),
(44, '19:25:35', 'true', 15, 50, 11),
(45, '16:53:49', 'true', 4, 15, 12),
(46, '16:53:53', 'true', 5, 17, 12),
(47, '16:54:49', 'true', 4, 15, 12),
(48, '16:54:54', 'true', 5, 17, 12),
(49, '16:55:42', 'false', 6, 21, 12),
(50, '16:55:50', 'false', 4, 13, 12),
(51, '16:55:56', 'true', 5, 17, 12),
(52, '16:56:55', 'true', 6, 24, 12),
(53, '16:57:02', 'true', 10, 29, 12),
(54, '16:57:06', 'true', 11, 35, 12),
(55, '16:57:09', 'false', 12, 42, 12),
(56, '16:57:16', 'false', 13, 38, 12),
(57, '16:57:20', 'true', 14, 46, 12),
(58, '16:57:46', 'false', 15, 51, 12),
(59, '16:57:55', 'true', 17, 54, 12),
(60, '16:58:03', 'false', 20, 57, 12),
(61, '16:58:11', 'true', 21, 62, 12),
(62, '16:58:19', 'false', 23, 67, 12),
(63, '16:58:23', 'false', 24, 70, 12),
(64, '16:58:31', 'false', 25, 74, 12),
(65, '16:58:34', 'true', 26, 79, 12),
(66, '16:58:39', 'false', 27, 84, 12),
(67, '16:58:44', 'true', 28, 88, 12),
(68, '16:58:48', 'false', 30, 92, 12),
(69, '16:58:57', 'true', 31, 95, 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_questions`
--

CREATE TABLE `tbl_questions` (
  `qstn_id` int(11) NOT NULL,
  `qstn_content` varchar(500) NOT NULL,
  `disability_id` int(11) NOT NULL,
  `qstn_file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_questions`
--

INSERT INTO `tbl_questions` (`qstn_id`, `qstn_content`, `disability_id`, `qstn_file`) VALUES
(4, 'Identify the animal.', 1, 'edgar-nKC772R_qog-unsplash.jpg'),
(5, 'What is the dog holding on to?', 1, 'mitchell-orr-Pzu9f6Nby5w-unsplash.jpg'),
(10, 'Count the number of squares', 3, 'daniele-franchi-dt0yhDQmJ4k-unsplash.jpg'),
(11, 'Anu has 10 Apples. She ate 2 apples & gave 3 apples to Gopu. How many are left with Anu?', 3, 'aaron-blanco-tejedor-CNpYALGZhMo-unsplash.jpg'),
(12, 'Spell backwards the word BUTTERFLY.', 4, '__-drz-__-CK7rdTauhDE-unsplash.jpg'),
(13, 'The term \"Church\" starts with which of the following sound?', 4, 'cosmic-timetraveler-_R1cc2IHk70-unsplash.jpg'),
(14, 'Add 8+7', 3, 'crissy-jarvis-cHhbULJbPwM-unsplash.jpg'),
(15, 'Count backwards till 7', 3, 'susan-holt-simpson-GQ327RPuxhI-unsplash.jpg'),
(17, 'It was birthday of Merin and her birthday cake was cut into 4 pieces. Two pieces of cake were given to her friends. How much part of the cake is left with Merin?', 3, 'dessy-dimcheva-s8HpMrQtl8E-unsplash.jpg'),
(20, 'Identify the correct word', 4, 'avinash-kumar-b4gv9g8_zrA-unsplash.jpg'),
(21, 'Spell the word backwards ICECREAM', 4, 'courtney-cook-xtVjWVCiE-U-unsplash.jpg'),
(23, 'Calculate 13-6', 3, 'vecteezy_3d-rendering-3d-illustration-simple-math-symbols-icon-on_7426573_207.jpg'),
(24, 'Identify the vegetable', 1, 'vecteezy_three-young-fresh-ripe-carrot_7677386_856.jpg'),
(25, 'Find the correct term', 1, 'vecteezy_young-girl-walking-on-the-old-streets__115.jpg'),
(26, 'Find the result of 9+6', 1, 'vecteezy_3d-rendering-3d-illustration-simple-math-symbols-icon-on_7426573_207.jpg'),
(27, 'Fill in the blanks: \r\n5 __ 2 = 3', 1, 'vecteezy_3d-rendering-3d-illustration-simple-math-symbols-icon-on_7426573_207.jpg'),
(28, 'Identify the fruit', 4, 'mae-mu-U1iYwZ8Dx7k-unsplash.jpg'),
(30, 'Arrange the numbers in ascending order	\r\n6,3,19,1,22,13,45', 3, 'antoine-dautry-_zsL306fDck-unsplash.jpg'),
(31, 'Count the number of balloons ', 3, 'dave-george-xFfdF580dh4-unsplash.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz`
--

CREATE TABLE `tbl_quiz` (
  `quiz_id` int(11) NOT NULL,
  `quiz_date` date NOT NULL,
  `child_name` varchar(50) NOT NULL,
  `child_age` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_quiz`
--

INSERT INTO `tbl_quiz` (`quiz_id`, `quiz_date`, `child_name`, `child_age`, `parent_id`) VALUES
(2, '2022-07-14', 'Child 6', 9, 5),
(3, '2022-07-14', 'Child 2', 8, 5),
(4, '2022-07-14', 'Gopika Gopi', 9, 6),
(5, '2022-07-14', 'Gopika Gopi', 9, 6),
(6, '2022-07-14', 'Gopika Gopi', 9, 6),
(7, '2022-07-14', 'Gopika Gopi', 9, 6),
(8, '2022-07-14', 'Gopika Gopi', 9, 6),
(9, '2022-07-14', 'Gopika Gopi', 9, 6),
(10, '2022-07-14', 'Gopika Gopi', 8, 6),
(11, '2022-07-14', 'Gopika Gopi', 8, 6),
(12, '2022-07-15', 'Gopika Gopi', 8, 6);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  ADD PRIMARY KEY (`complaint_id`);

--
-- Indexes for table `tbl_disabilities`
--
ALTER TABLE `tbl_disabilities`
  ADD PRIMARY KEY (`disability_id`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `tbl_parent`
--
ALTER TABLE `tbl_parent`
  ADD PRIMARY KEY (`parent_id`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `tbl_questionanswer`
--
ALTER TABLE `tbl_questionanswer`
  ADD PRIMARY KEY (`qa_id`);

--
-- Indexes for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  ADD PRIMARY KEY (`qstn_id`);

--
-- Indexes for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  ADD PRIMARY KEY (`quiz_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_answer`
--
ALTER TABLE `tbl_answer`
  MODIFY `answer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `tbl_complaint`
--
ALTER TABLE `tbl_complaint`
  MODIFY `complaint_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_disabilities`
--
ALTER TABLE `tbl_disabilities`
  MODIFY `disability_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_parent`
--
ALTER TABLE `tbl_parent`
  MODIFY `parent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_questionanswer`
--
ALTER TABLE `tbl_questionanswer`
  MODIFY `qa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `tbl_questions`
--
ALTER TABLE `tbl_questions`
  MODIFY `qstn_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  MODIFY `quiz_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
