-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2018 at 09:12 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_projectt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_course`
--

CREATE TABLE `admin_course` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` varchar(500) NOT NULL,
  `date_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_course`
--

INSERT INTO `admin_course` (`id`, `image`, `title`, `description`, `date_time`) VALUES
(3, '71e6465f14685f376715b60ae893719b.jpg', 'teacher', 'che', 'Thursday,21st June,2018,4:34 pm'),
(5, '2c4d264c082303d587aab8e8b7a84c8b.jpg', 'jk', 'mvmxjl', 'Thursday,21st June,2018,4:55 pm'),
(6, '6e015f1db830da14ac09dbc0ae317e81.jpg', 'teacher', 'english', 'Monday,2nd July,2018,12:23 pm');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'joy12', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `admin_manage_class`
--

CREATE TABLE `admin_manage_class` (
  `id` int(11) NOT NULL,
  `class_name` varchar(50) NOT NULL,
  `numeric_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_manage_class`
--

INSERT INTO `admin_manage_class` (`id`, `class_name`, `numeric_name`) VALUES
(2, 'one', '1'),
(3, 'three', '3');

-- --------------------------------------------------------

--
-- Table structure for table `admin_manage_section`
--

CREATE TABLE `admin_manage_section` (
  `id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `section_name` varchar(100) NOT NULL,
  `teacher_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_manage_section`
--

INSERT INTO `admin_manage_section` (`id`, `class_name`, `section_name`, `teacher_name`) VALUES
(2, 'two', 'c', 'joy');

-- --------------------------------------------------------

--
-- Table structure for table `admin_manage_subject`
--

CREATE TABLE `admin_manage_subject` (
  `id` int(11) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `teacher_name` varchar(100) NOT NULL,
  `subject_name` varchar(100) NOT NULL,
  `total_mark` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_manage_subject`
--

INSERT INTO `admin_manage_subject` (`id`, `class_name`, `teacher_name`, `subject_name`, `total_mark`) VALUES
(1, 'three', 'joy', 'Chemistry', '200');

-- --------------------------------------------------------

--
-- Table structure for table `admin_question`
--

CREATE TABLE `admin_question` (
  `id` int(11) NOT NULL,
  `question_number` varchar(1000) NOT NULL,
  `question` varchar(2000) NOT NULL,
  `question_option_1` varchar(200) NOT NULL,
  `question_option_2` varchar(200) NOT NULL,
  `question_option_3` varchar(200) NOT NULL,
  `question_option_4` varchar(200) NOT NULL,
  `class` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `correct_answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_question`
--

INSERT INTO `admin_question` (`id`, `question_number`, `question`, `question_option_1`, `question_option_2`, `question_option_3`, `question_option_4`, `class`, `section`, `correct_answer`) VALUES
(1, '1', 'bip', 'bip1', 'bip2', 'bip3', 'bip4', '4', 'c', 'on'),
(2, '2', 'bip', 'bip1', 'bip2', 'bip3', 'bip4', '2', 'k', '3'),
(17, '', 'port', '2', '2', '2', '2', '', '', ''),
(18, '', 'op', '2', '2', '2', '2', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_student`
--

CREATE TABLE `admin_student` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `date_of_birth` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `contract` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(200) NOT NULL,
  `country` varchar(200) NOT NULL,
  `register_date` varchar(200) NOT NULL,
  `class` varchar(100) NOT NULL,
  `section` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `date` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_student`
--

INSERT INTO `admin_student` (`id`, `first_name`, `last_name`, `date_of_birth`, `age`, `contract`, `email`, `address`, `city`, `country`, `register_date`, `class`, `section`, `image`, `date`) VALUES
(1, 'joy', 'hossain', '2018-07-01', '12', '01933722564', 'zabbirhossain729@gmail.com', 'sddadshckja', 'chsxc', 'dkshck', '2018-07-02', 'one', 'c', 'cb211cd4a752c8a3b071e51fb154724e.jpg', 'Sunday,8th July,2018,12:38 am'),
(6, 'rahi', 'hossain', '2018-07-04', '12', '01933722564', 'zabbirhossain729@gmail', 'dhaka', 'dhaka', 'dhaka', '2018-07-04', 'one', 'c', '22a147a7999a930e25d0d12ff2d76d57.jpg', 'Sunday,8th July,2018,1:13 am');

-- --------------------------------------------------------

--
-- Table structure for table `admin_teacher`
--

CREATE TABLE `admin_teacher` (
  `id` int(11) NOT NULL,
  `image` varchar(300) NOT NULL,
  `name` varchar(100) NOT NULL,
  `profession` varchar(200) NOT NULL,
  `details` varchar(1000) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `birth_date` varchar(100) NOT NULL,
  `joining_date` varchar(100) NOT NULL,
  `salary` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_teacher`
--

INSERT INTO `admin_teacher` (`id`, `image`, `name`, `profession`, `details`, `phone`, `email`, `birth_date`, `joining_date`, `salary`, `status`, `date_time`) VALUES
(4, '473f29d3e15ea2f1a411a562d5ea4d4a.jpg', 'rahi', 'engineer', 'cbkjdc kjdcdja ', '', '', '0', '', '', '', 'Friday,22nd June,2018,4:12 pm'),
(5, '0f4613f5d7ce7ac1bcadafb56205a52c.jpg', 'joy', 'doctor', 'dncksdkn', '', '', '0', '', '', '', 'Sunday,1st July,2018,10:24 pm'),
(7, 'dbb02b46a704440ffeff5c786c0926d5.jpg', 'jh', 'jkj', 'bm', '', '', '0', '', '', '', 'Sunday,1st July,2018,10:29 pm'),
(8, 'ef1b9477cf8d180f158062476e044665.jpg', 'bk', 'hb', 'jhjsdk', '', '', '0', '', '', '', 'Sunday,1st July,2018,10:32 pm'),
(11, '8e6c118631831e1cd8e1cb9dddd9a42e.jpg', 'joy', 'Physics', 'teacher', '01933722564', 'zabbirhossain729@gmail.com', '2017-06-01', '2017-06-01', '30k', 'available', 'Friday,6th July,2018,4:36 pm');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `question_name` varchar(500) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `class_name` varchar(100) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `starting_time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question_name`, `option1`, `option2`, `option3`, `option4`, `class_name`, `duration`, `starting_time`) VALUES
(4, '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', ''),
(6, 'eng', '1', '2', '3', '4', 'one', '1', 'today'),
(7, 'bng', '5', '6', '7', '8', 'two', '4', 'today');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_id` int(11) NOT NULL,
  `st_email` varchar(100) NOT NULL,
  `st_password` varchar(40) NOT NULL,
  `father_name` varchar(10) NOT NULL,
  `mother_name` varchar(10) NOT NULL,
  `date_of_birth` varchar(10) NOT NULL,
  `present_address` varchar(30) NOT NULL,
  `permanent_name` varchar(30) NOT NULL,
  `mobile_number` varchar(30) NOT NULL,
  `guardian_name` varchar(10) NOT NULL,
  `guardian_phone_no` varchar(20) NOT NULL,
  `approved` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_email`, `st_password`, `father_name`, `mother_name`, `date_of_birth`, `present_address`, `permanent_name`, `mobile_number`, `guardian_name`, `guardian_phone_no`, `approved`) VALUES
(1, 'jot@gmail.com', '13455566', 'hdsj', 'cnsd', '', '', '', '', '', '02932', ''),
(2, 'zabbirhossain729@gmail.com', '1234', 'wow', 'woww', '12-3-1995', '', '', '', '', '', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `subject_name`) VALUES
(1, 'Physics'),
(2, 'Chemistry'),
(3, 'Math');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_course`
--
ALTER TABLE `admin_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_manage_class`
--
ALTER TABLE `admin_manage_class`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_manage_section`
--
ALTER TABLE `admin_manage_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_manage_subject`
--
ALTER TABLE `admin_manage_subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_question`
--
ALTER TABLE `admin_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_student`
--
ALTER TABLE `admin_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_teacher`
--
ALTER TABLE `admin_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_course`
--
ALTER TABLE `admin_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_manage_class`
--
ALTER TABLE `admin_manage_class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `admin_manage_section`
--
ALTER TABLE `admin_manage_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `admin_manage_subject`
--
ALTER TABLE `admin_manage_subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `admin_question`
--
ALTER TABLE `admin_question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `admin_student`
--
ALTER TABLE `admin_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `admin_teacher`
--
ALTER TABLE `admin_teacher`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
