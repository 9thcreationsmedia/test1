-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 16, 2017 at 09:09 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osms_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `osms_class_mast_tab`
--

CREATE TABLE `osms_class_mast_tab` (
  `class_id` varchar(100) NOT NULL,
  `class_name` varchar(100) DEFAULT NULL,
  `school_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_desgnation_mast_tab`
--

CREATE TABLE `osms_desgnation_mast_tab` (
  `designation_id` varchar(100) NOT NULL,
  `designation_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_emp_tab`
--

CREATE TABLE `osms_emp_tab` (
  `emp_id` varchar(100) NOT NULL,
  `emp_fname` varchar(100) NOT NULL,
  `emp_lname` varchar(100) DEFAULT NULL,
  `dt_join` datetime NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` text,
  `dob` date NOT NULL,
  `designation_id` int(7) NOT NULL,
  `school_id` varchar(100) NOT NULL,
  `annual_salary` int(8) DEFAULT NULL,
  `educational_info` text NOT NULL,
  `contact_no` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sub_designation_id` int(5) DEFAULT NULL,
  `blood_grp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_fee_type_mast_tab`
--

CREATE TABLE `osms_fee_type_mast_tab` (
  `fee_type_id` varchar(100) NOT NULL,
  `fee_type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_hostel_bldg_mast_tab`
--

CREATE TABLE `osms_hostel_bldg_mast_tab` (
  `bldg_id` int(4) NOT NULL,
  `bldg_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_hostel_room_allocate_tab`
--

CREATE TABLE `osms_hostel_room_allocate_tab` (
  `student_id` varchar(100) NOT NULL,
  `room_id` int(4) NOT NULL,
  `bldg_id` int(4) NOT NULL,
  `joining_date` date NOT NULL,
  `bed_id` int(2) NOT NULL,
  `status` varchar(100) NOT NULL,
  `left_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_hostel_room_mast_tab`
--

CREATE TABLE `osms_hostel_room_mast_tab` (
  `room_id` int(4) NOT NULL,
  `bldg_id` int(4) NOT NULL,
  `room_inchg_id` varchar(100) NOT NULL,
  `no_ofbeds` int(3) NOT NULL,
  `empty_beds` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_login_log_tab`
--

CREATE TABLE `osms_login_log_tab` (
  `login_id` varchar(100) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `login_time` datetime NOT NULL,
  `logout_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_login_mast_tab`
--

CREATE TABLE `osms_login_mast_tab` (
  `login_id` varchar(100) NOT NULL,
  `login_pwd` varchar(100) NOT NULL,
  `login_user_type` varchar(100) NOT NULL,
  `user_created_time` datetime NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_parent_mast_tab`
--

CREATE TABLE `osms_parent_mast_tab` (
  `parent_id` varchar(100) NOT NULL,
  `parent_fname` varchar(100) NOT NULL,
  `parent_lname` varchar(100) DEFAULT NULL,
  `mobile_no` int(10) NOT NULL,
  `address` text,
  `occupation` varchar(100) DEFAULT NULL,
  `annual_income` int(8) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `blood_grp` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `religion` varchar(100) DEFAULT NULL,
  `caste` varchar(20) DEFAULT NULL,
  `adhar_id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_routeno_mast_tab`
--

CREATE TABLE `osms_routeno_mast_tab` (
  `route_no` int(5) NOT NULL,
  `route_name` varchar(100) DEFAULT NULL,
  `num_viechles` int(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_routepoints_mast_tab`
--

CREATE TABLE `osms_routepoints_mast_tab` (
  `pick_point_id` int(4) NOT NULL,
  `pick_point_name` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_route_path_mast_tab`
--

CREATE TABLE `osms_route_path_mast_tab` (
  `route_no` int(5) NOT NULL,
  `pick_point_id` int(4) NOT NULL,
  `point_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_route_vehicle_info_tab`
--

CREATE TABLE `osms_route_vehicle_info_tab` (
  `route_no` int(5) DEFAULT NULL,
  `driver_id` varchar(100) DEFAULT NULL,
  `driver_name` varchar(100) DEFAULT NULL,
  `vehicle_no` varchar(50) DEFAULT NULL,
  `last_updated_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_school_mast_tab`
--

CREATE TABLE `osms_school_mast_tab` (
  `id` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `area` varchar(100) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `bldg_no` varchar(100) DEFAULT NULL,
  `pin` int(6) NOT NULL,
  `established_yr` date NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_section_mast_tab`
--

CREATE TABLE `osms_section_mast_tab` (
  `section_id` varchar(50) NOT NULL,
  `section_name` varchar(100) DEFAULT NULL,
  `class_id` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_stu_mast_tab`
--

CREATE TABLE `osms_stu_mast_tab` (
  `stu_adm_id` varchar(100) NOT NULL,
  `stu_id` varchar(100) NOT NULL,
  `stu_name` varchar(100) NOT NULL,
  `class_id` varchar(100) NOT NULL,
  `section_id` varchar(100) NOT NULL,
  `rollno` int(6) NOT NULL,
  `dob` date DEFAULT NULL,
  `dt_join` datetime NOT NULL,
  `blood_grp` varchar(100) DEFAULT NULL,
  `parent_id` varchar(100) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_stu_transport_det_tab`
--

CREATE TABLE `osms_stu_transport_det_tab` (
  `student_id` varchar(100) NOT NULL,
  `boarding_status_mng` varchar(100) NOT NULL,
  `boarding_status_evng` varchar(100) NOT NULL,
  `journey_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_subdesg_mast_tab`
--

CREATE TABLE `osms_subdesg_mast_tab` (
  `sub_desg_id` varchar(100) NOT NULL,
  `designation_id` varchar(100) DEFAULT NULL,
  `sub_desg_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `osms_subjects_mast_tab`
--

CREATE TABLE `osms_subjects_mast_tab` (
  `subject_id` varchar(100) NOT NULL,
  `subject_name` varchar(100) DEFAULT NULL,
  `class_id` varchar(100) DEFAULT NULL,
  `added_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `osms_class_mast_tab`
--
ALTER TABLE `osms_class_mast_tab`
  ADD PRIMARY KEY (`class_id`);

--
-- Indexes for table `osms_desgnation_mast_tab`
--
ALTER TABLE `osms_desgnation_mast_tab`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `osms_emp_tab`
--
ALTER TABLE `osms_emp_tab`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `osms_fee_type_mast_tab`
--
ALTER TABLE `osms_fee_type_mast_tab`
  ADD PRIMARY KEY (`fee_type_id`);

--
-- Indexes for table `osms_hostel_bldg_mast_tab`
--
ALTER TABLE `osms_hostel_bldg_mast_tab`
  ADD PRIMARY KEY (`bldg_id`);

--
-- Indexes for table `osms_hostel_room_mast_tab`
--
ALTER TABLE `osms_hostel_room_mast_tab`
  ADD PRIMARY KEY (`room_id`,`bldg_id`);

--
-- Indexes for table `osms_parent_mast_tab`
--
ALTER TABLE `osms_parent_mast_tab`
  ADD PRIMARY KEY (`parent_id`),
  ADD UNIQUE KEY `uk_parent_adhar` (`adhar_id`);

--
-- Indexes for table `osms_routeno_mast_tab`
--
ALTER TABLE `osms_routeno_mast_tab`
  ADD PRIMARY KEY (`route_no`);

--
-- Indexes for table `osms_routepoints_mast_tab`
--
ALTER TABLE `osms_routepoints_mast_tab`
  ADD PRIMARY KEY (`pick_point_id`);

--
-- Indexes for table `osms_route_path_mast_tab`
--
ALTER TABLE `osms_route_path_mast_tab`
  ADD PRIMARY KEY (`route_no`,`pick_point_id`);

--
-- Indexes for table `osms_school_mast_tab`
--
ALTER TABLE `osms_school_mast_tab`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `osms_section_mast_tab`
--
ALTER TABLE `osms_section_mast_tab`
  ADD PRIMARY KEY (`section_id`);

--
-- Indexes for table `osms_stu_mast_tab`
--
ALTER TABLE `osms_stu_mast_tab`
  ADD PRIMARY KEY (`stu_id`),
  ADD UNIQUE KEY `uk_stu_admid` (`stu_adm_id`);

--
-- Indexes for table `osms_subdesg_mast_tab`
--
ALTER TABLE `osms_subdesg_mast_tab`
  ADD PRIMARY KEY (`sub_desg_id`);

--
-- Indexes for table `osms_subjects_mast_tab`
--
ALTER TABLE `osms_subjects_mast_tab`
  ADD PRIMARY KEY (`subject_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
