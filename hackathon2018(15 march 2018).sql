-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 35.200.166.19
-- Generation Time: Mar 15, 2018 at 06:39 PM
-- Server version: 5.7.14-google-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `aadhar`
--

CREATE TABLE `aadhar` (
  `aadhar_no` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `d_o_b` varchar(45) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aadhar`
--

INSERT INTO `aadhar` (`aadhar_no`, `name`, `d_o_b`, `address`, `gender`, `phone`, `email`) VALUES
('230326019145', 'Patel Neel Dhavalkumar', '19/11/1998', 'E-1 Vasudev Bunglows, bh annpurna hotel, Jasodanagar, Ahmeadabad-382445', 'male', '9825866927', 'neelpatel.6531@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `claim`
--

CREATE TABLE `claim` (
  `fir_no` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `claim`
--

INSERT INTO `claim` (`fir_no`) VALUES
('5');

-- --------------------------------------------------------

--
-- Table structure for table `insurance`
--

CREATE TABLE `insurance` (
  `in_no` varchar(40) DEFAULT NULL,
  `aadhar_no` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `d_o_b` varchar(45) DEFAULT NULL,
  `gender` varchar(45) DEFAULT NULL,
  `in_type` varchar(45) DEFAULT NULL,
  `no_type` varchar(50) NOT NULL,
  `no_aadhar` varchar(50) NOT NULL,
  `no_name` varchar(50) NOT NULL,
  `no_phone` varchar(50) NOT NULL,
  `ammount` varchar(45) DEFAULT NULL,
  `exp_date` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurance`
--

INSERT INTO `insurance` (`in_no`, `aadhar_no`, `name`, `address`, `email`, `phone`, `d_o_b`, `gender`, `in_type`, `no_type`, `no_aadhar`, `no_name`, `no_phone`, `ammount`, `exp_date`) VALUES
('234234124', '230326019145', 'Patel Neel Dhavalkumar', 'E-1 Vasudev Bunglows, bh annpurna hotel, Jasodanagar, Ahmeadabad-382445', 'neelpatel.6531@gmail.com', '9825866927', '19/11/1998', 'male', 'Health Insurance', 'Father', '230326019145', 'Patel Neel Dhavalkumar', '9825866927', '1000000', '2018-04-25');

-- --------------------------------------------------------

--
-- Table structure for table `police_fir`
--

CREATE TABLE `police_fir` (
  `fir_no` int(50) NOT NULL,
  `police_station_name` varchar(50) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `date` varchar(50) DEFAULT NULL,
  `person_name` varchar(50) DEFAULT NULL,
  `p_f_or_h_name` varchar(50) DEFAULT NULL,
  `p_address` varchar(200) DEFAULT NULL,
  `p_phone` varchar(50) DEFAULT NULL,
  `p_email` varchar(50) DEFAULT NULL,
  `location_lat` varchar(50) DEFAULT NULL,
  `location_long` varchar(50) DEFAULT NULL,
  `dist_from_p_s` varchar(50) DEFAULT NULL,
  `direct_from_p_s` varchar(50) DEFAULT NULL,
  `date_of_occ` varchar(50) DEFAULT NULL,
  `time_of_occ` varchar(50) DEFAULT NULL,
  `nature_of_offence` varchar(50) DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  `witness_name` varchar(50) DEFAULT NULL,
  `witness_phone` varchar(50) DEFAULT NULL,
  `witness_address` varchar(200) DEFAULT NULL,
  `address_occ` varchar(200) DEFAULT NULL,
  `photo` varchar(150) DEFAULT NULL,
  `video` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_fir`
--

INSERT INTO `police_fir` (`fir_no`, `police_station_name`, `district`, `date`, `person_name`, `p_f_or_h_name`, `p_address`, `p_phone`, `p_email`, `location_lat`, `location_long`, `dist_from_p_s`, `direct_from_p_s`, `date_of_occ`, `time_of_occ`, `nature_of_offence`, `section`, `description`, `witness_name`, `witness_phone`, `witness_address`, `address_occ`, `photo`, `video`) VALUES
(1, 'Maninagar', 'Ahmedabad', ' 10/02/2018 ', 'a', 'a', 'a', 'a', 'a', '22.997983', '72.599888', '0.6 km', 'South West', '1', '1', '1', '1', '1', '1', '1', '1', '47, Rambagh, Maninagar, Ahmedabad, Gujarat 380008, India', NULL, NULL),
(2, 'Maninagar', 'Ahmedabad', ' 10/02/2018 ', '1', '1', '1', '1', '1dfg@gmail.com', '23.001212', '72.597570', '', 'North West', '12-12-17', '12:00', '1', '1', '1124435435gbfhg', '1', '1', '1', 'gjhgkjh', NULL, NULL),
(3, 'Maninagar', 'Ahmedabad', ' 11/02/2018 ', 'Ajay Patel', 'Rameshbhai', '1, Ambica Society, B/H Anupam Cinema, Ahmedabad', '9812345673', 'ajaypatel@gmail.com', '22.995652', '72.612634', '1.3 km', 'South East', '11/02/2018', '11:03', 'Accident', 'A123', 'Some Description', 'Rambhai', '7635295609', 'Shop No. 1, ABC Complex, Opp. Maninagar Railway Station, Maninagar, Ahmedabad', 'Maninagar Railway Station Rd, Daxini Society, Maninagar, Ahmedabad, Gujarat 380008, India', NULL, NULL),
(4, 'Maninagar', 'Ahmedabad', ' 11/02/2018 ', 'Ajay Patel', 'Rameshbhai', '23/4 Ambica Society, B/H Anupam Cinema, Ahmedabad', '9845632786', 'ajaypatel@gmail.com', '22.997706', '72.611561', '1.1 km', 'South East', '11/02/2018', '11:03 AM', 'Accident', 'A123', 'Some Description', 'Rambai', '7653947654', 'Shop No. 21, ABC Complex, Maninagar, Ahmedabad', 'C/16-17, Maninagar Railway Station Rd, Maninagar, Ahmedabad, Gujarat 380008, India', NULL, NULL),
(5, 'Maninagar', 'Ahmedabad', '10/03/2018 ', 'Deepak Sharma', 'Rambhai', 'R/32 Ambica Society, Nr Sarvoday School, Ahmedabad - 380026', '9867542376', 'deepaksharma98@gmail.com', '23.005695', '72.596959', '1.3 km', 'North West', '10/03/2018', '17:26', 'Fatal Accident', '132', 'Some description about accident', 'Aarti Sathavara', '8767854354', 'Vatva', '6/7, Kankaria, Ahmedabad, Gujarat 380002, India', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `police_form_54`
--

CREATE TABLE `police_form_54` (
  `cr_no` int(50) NOT NULL,
  `p_s_name` varchar(50) DEFAULT NULL,
  `fir_no` varchar(50) DEFAULT NULL,
  `accident_date` varchar(50) DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `place` varchar(50) DEFAULT NULL,
  `name_injured` varchar(50) DEFAULT NULL,
  `address_name` varchar(200) DEFAULT NULL,
  `hospital_name` varchar(50) DEFAULT NULL,
  `veh_reg_no` varchar(50) DEFAULT NULL,
  `veh_type` varchar(50) DEFAULT NULL,
  `d_l_no` varchar(50) DEFAULT NULL,
  `d_name` varchar(50) DEFAULT NULL,
  `d_address` varchar(200) DEFAULT NULL,
  `d_l_exp_date` varchar(50) DEFAULT NULL,
  `add_issuing_authority` varchar(50) DEFAULT NULL,
  `badge_no` varchar(50) DEFAULT NULL,
  `veh_owner_name` varchar(50) DEFAULT NULL,
  `veh_owner_address` varchar(200) DEFAULT NULL,
  `name_of_ins_company` varchar(50) DEFAULT NULL,
  `address_of_ins_company` varchar(200) DEFAULT NULL,
  `policy_no` varchar(50) DEFAULT NULL,
  `insurance_exp_date` varchar(50) DEFAULT NULL,
  `engine_no` varchar(50) DEFAULT NULL,
  `chassis_no` varchar(50) DEFAULT NULL,
  `route_permit` varchar(50) DEFAULT NULL,
  `action_taken` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_form_54`
--

INSERT INTO `police_form_54` (`cr_no`, `p_s_name`, `fir_no`, `accident_date`, `time`, `place`, `name_injured`, `address_name`, `hospital_name`, `veh_reg_no`, `veh_type`, `d_l_no`, `d_name`, `d_address`, `d_l_exp_date`, `add_issuing_authority`, `badge_no`, `veh_owner_name`, `veh_owner_address`, `name_of_ins_company`, `address_of_ins_company`, `policy_no`, `insurance_exp_date`, `engine_no`, `chassis_no`, `route_permit`, `action_taken`) VALUES
(1, 'Maninagar', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `police_station_location`
--

CREATE TABLE `police_station_location` (
  `id` int(11) NOT NULL,
  `p_s_name` varchar(45) DEFAULT NULL,
  `p_s_lat` varchar(45) DEFAULT NULL,
  `p_s_lng` varchar(45) DEFAULT NULL,
  `district` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `police_station_location`
--

INSERT INTO `police_station_location` (`id`, `p_s_name`, `p_s_lat`, `p_s_lng`, `district`) VALUES
(11, 'Maninagar', '22.998545', '72.602323', 'Ahmedabad'),
(12, 'Amraiwadi', '22.992017', '72.621217', 'Ahmedabad'),
(13, 'Rmol', '22.989370', '72.642417', 'Ahmedabad'),
(14, 'Anand Town', '22.557923', '72.968016', 'Anand'),
(15, 'Navarangpura', '23.035033', '72.567272', 'Ahmedabad');

-- --------------------------------------------------------

--
-- Table structure for table `rto_driving_licence`
--

CREATE TABLE `rto_driving_licence` (
  `d_l_no` int(50) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `d_o_b` varchar(50) DEFAULT NULL,
  `blood_group` varchar(50) DEFAULT NULL,
  `issue_date` varchar(50) DEFAULT NULL,
  `exp_date` varchar(50) DEFAULT NULL,
  `licence_type` varchar(50) DEFAULT NULL,
  `aadhar_no` int(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rto_driving_licence`
--

INSERT INTO `rto_driving_licence` (`d_l_no`, `name`, `d_o_b`, `blood_group`, `issue_date`, `exp_date`, `licence_type`, `aadhar_no`, `phone`, `address`) VALUES
(1, 'a', '2018-02-14', 'a', '2018-02-14', '2018-02-15', '1', 1, 'a', 'aa'),
(2, 'maulik', '2018-12-31', 'A+', '2018-12-31', '2018-12-01', '', 44548484, '44848484', '48484488'),
(3, 'xyz', '2018-12-31', 'A+', '2018-12-31', '2018-12-31', '', 5145454, '4545454', 'sdosdksdsd'),
(4, 'djf', '2018-03-14', 'A+', '2018-03-14', '2018-03-15', '', 34687876, '897954678', 'jfjhghkhjjgkl  sjjgkjh jhf'),
(5, 'snjdnj', '2018-01-01', 'mdsjdn', '2017-12-02', '2018-01-31', '', 55454, '445', '5656565'),
(6, 'sa', '2018-12-30', 'A+', '2018-12-31', '2018-12-31', '', 584554, '545454', '454545454'),
(7, 'q', '2018-01-31', 'sdasd', '2018-10-01', '2017-11-30', '', 4848, '4848', '48484848'),
(8, 's', '2018-04-01', 'A+', '2018-12-31', '2018-12-31', '', 54, '8484', '4884'),
(9, 'w', '2018-10-01', 'dd', '2018-12-31', '2018-12-31', '2', 987878, '87878', '78787'),
(10, 'djmdf', '2018-12-31', 'A+', '2018-12-31', '2014-05-01', '2', 547354, '8878', '9887878878'),
(11, 'sd', '2018-12-31', 'A+', '2018-12-31', '2018-12-31', '1', 488488, '8874878', '7878787'),
(12, 'sdb', '2018-01-01', 'a', '2018-12-31', '2017-12-31', '2', 12345, '123456', 'sdjsndjnsjjndsjndj');

-- --------------------------------------------------------

--
-- Table structure for table `rto_vehicle_reg`
--

CREATE TABLE `rto_vehicle_reg` (
  `reg_no` varchar(15) NOT NULL,
  `veh_type` varchar(45) DEFAULT NULL,
  `owner_name` varchar(50) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `engine_no` varchar(50) DEFAULT NULL,
  `chassis_no` varchar(50) DEFAULT NULL,
  `date_of_reg` varchar(50) DEFAULT NULL,
  `reg_validity` varchar(50) DEFAULT NULL,
  `fule_type` varchar(50) DEFAULT NULL,
  `seating_capacity` varchar(50) DEFAULT NULL,
  `wheel_base` varchar(50) DEFAULT NULL,
  `cylinder_no` varchar(50) DEFAULT NULL,
  `mfg_month_yr` varchar(50) DEFAULT NULL,
  `company_name` varchar(50) DEFAULT NULL,
  `colour` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rto_vehicle_reg`
--

INSERT INTO `rto_vehicle_reg` (`reg_no`, `veh_type`, `owner_name`, `address`, `engine_no`, `chassis_no`, `date_of_reg`, `reg_validity`, `fule_type`, `seating_capacity`, `wheel_base`, `cylinder_no`, `mfg_month_yr`, `company_name`, `colour`) VALUES
('gj-27-c-2384', '12', 'Deepak R Patel', 'e/1Ambika Bunglows', '5698-zxcd-284sn', 'Ax-87-nds-wjd', '19/11/2011', '19/11/2032', '1', '1', '1', '1', '1', '1', '1'),
('xyz', '3', ' ddj', 'nsnjdnj', 'njjnjnsj', '48887', '2018-12-31', '2018-12-31', 'Diesel', '-1', '-1', '8878', '2018-01-31', '84888', 'Black');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(30) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `org_name` varchar(50) DEFAULT NULL,
  `org_reg_no` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `u_type` varchar(50) DEFAULT NULL,
  `district` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `org_name`, `org_reg_no`, `phone`, `email`, `pass`, `u_type`, `district`) VALUES
(8, 'Sanket Patel', 'Amraiwadi', '382445', '09825866898', 'police.sanket@gmail.com', 'admin', 'police', 'Ahmedabad'),
(9, 'Neel Patel', 'Maninagar', '380023', '8787887878', 'neelpatel.6531@gmail.com', 'admin', 'police', 'Ahmedabad'),
(10, 'maulik', 'amabawadi', '', '82938224481', 'maulikjagtap@gmail.com', '123456', 'rto', ''),
(11, 'bahubali jadi', 'Amraiwadi', '380026', '8328732432', 'mansi@mansi.com', 'maanjadi', 'police', 'Ahmedabad'),
(12, 'Neel Patel', 'Integration Insurance', 'GST534821', '8765675430', 'integration@gmail.com', 'admin', 'insurance', ''),
(13, 'maulik', 'xyz', '380008', '8238224481', 'aulik@gmail.com', 'maulik21', 'insurance', ''),
(14, 'maulik', 'xyz', '380008', '5455', 'maulik@gmail.com', 'maulik21', 'insurance', ''),
(15, 'maulik', 'Navarangpura', '380008', '88887', 'maulik@gmial.com', 'maulik21', 'police', 'Ahmedabad'),
(16, 'maulik', 'Amraiwadi', '380008', '79863', 'jagtap@gmail.com', 'maulik21', 'police', 'Ahmedabad'),
(17, 'm', 'xyz', '', '123456', 'm@gmail.com', 'maulik21', 'rto', ''),
(18, '', 'Select', '', '', '', '', 'police', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `police_fir`
--
ALTER TABLE `police_fir`
  ADD PRIMARY KEY (`fir_no`);

--
-- Indexes for table `police_form_54`
--
ALTER TABLE `police_form_54`
  ADD PRIMARY KEY (`cr_no`);

--
-- Indexes for table `police_station_location`
--
ALTER TABLE `police_station_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rto_driving_licence`
--
ALTER TABLE `rto_driving_licence`
  ADD PRIMARY KEY (`d_l_no`);

--
-- Indexes for table `rto_vehicle_reg`
--
ALTER TABLE `rto_vehicle_reg`
  ADD PRIMARY KEY (`reg_no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `police_fir`
--
ALTER TABLE `police_fir`
  MODIFY `fir_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `police_form_54`
--
ALTER TABLE `police_form_54`
  MODIFY `cr_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `police_station_location`
--
ALTER TABLE `police_station_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `rto_driving_licence`
--
ALTER TABLE `rto_driving_licence`
  MODIFY `d_l_no` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
