-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2019 at 05:34 PM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `churchman`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`admin_id` int(128) NOT NULL,
  `firstname` varchar(128) NOT NULL,
  `lastname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `adminthumbnails` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`, `adminthumbnails`) VALUES
(1, 'Kelvins', 'Twum', 'admin', 'jesus', 'uploads/c4.jpg'),
(2, 'admin', 'admin', 'master', '1234', 'images/NO-IMAGE-AVAILABLE.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
`keyu` int(10) NOT NULL,
  `sname` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `oname` varchar(100) DEFAULT NULL,
  `Gender` varchar(100) DEFAULT NULL,
  `Bloodgroup` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `region` varchar(100) DEFAULT NULL,
  `Birthday` varchar(100) DEFAULT NULL,
  `Nationality` varchar(100) DEFAULT NULL,
  `prof` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `other_mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `nok` varchar(100) DEFAULT NULL,
  `rnok` varchar(100) DEFAULT NULL,
  `mobilenok` varchar(100) DEFAULT NULL,
  `town` varchar(100) DEFAULT NULL,
  `suburd` varchar(100) DEFAULT NULL,
  `streetname` varchar(100) DEFAULT NULL,
  `housenumber` varchar(100) DEFAULT NULL,
  `regofresidence` varchar(100) DEFAULT NULL,
  `postaladd` varchar(100) DEFAULT NULL,
  `maritalstat` varchar(100) DEFAULT NULL,
  `nameofspouse` varchar(100) DEFAULT NULL,
  `chidlren` varchar(100) DEFAULT NULL,
  `living_dad` varchar(100) DEFAULT NULL,
  `hn_dad` varchar(100) DEFAULT NULL,
  `dad_name` varchar(100) DEFAULT NULL,
  `nationality_dad` varchar(100) DEFAULT NULL,
  `Residence_dad` varchar(100) DEFAULT NULL,
  `dad_home` varchar(100) DEFAULT NULL,
  `dad_prof` varchar(100) DEFAULT NULL,
  `dad_phone` varchar(100) DEFAULT NULL,
  `living_mum` varchar(100) DEFAULT NULL,
  `name_mum` varchar(100) DEFAULT NULL,
  `hn_mum` varchar(100) DEFAULT NULL,
  `mum_nationility` varchar(100) DEFAULT NULL,
  `res_mum` varchar(100) DEFAULT NULL,
  `home_mum` varchar(100) DEFAULT NULL,
  `mum_prof` varchar(100) DEFAULT NULL,
  `mum_phone` varchar(100) DEFAULT NULL,
  `other_info` varchar(100) DEFAULT NULL,
  `local_congre` varchar(100) DEFAULT NULL,
  `Baptismal_stat` varchar(100) DEFAULT NULL,
  `place_of_bap` varchar(100) DEFAULT NULL,
  `date_of_bap` varchar(100) DEFAULT NULL,
  `name_of_school` varchar(100) DEFAULT NULL,
  `programme` varchar(100) DEFAULT NULL,
  `form` varchar(100) DEFAULT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `id` varchar(10) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`keyu`, `sname`, `fname`, `oname`, `Gender`, `Bloodgroup`, `city`, `region`, `Birthday`, `Nationality`, `prof`, `mobile`, `other_mobile`, `email`, `nok`, `rnok`, `mobilenok`, `town`, `suburd`, `streetname`, `housenumber`, `regofresidence`, `postaladd`, `maritalstat`, `nameofspouse`, `chidlren`, `living_dad`, `hn_dad`, `dad_name`, `nationality_dad`, `Residence_dad`, `dad_home`, `dad_prof`, `dad_phone`, `living_mum`, `name_mum`, `hn_mum`, `mum_nationility`, `res_mum`, `home_mum`, `mum_prof`, `mum_phone`, `other_info`, `local_congre`, `Baptismal_stat`, `place_of_bap`, `date_of_bap`, `name_of_school`, `programme`, `form`, `duration`, `thumbnail`, `id`, `date`) VALUES
(25, 'Blay', 'Peter', 'Nyameke', 'male', 'O+', 'Axim', 'Western', '1990-12-27', 'Ghanaian', 'student', '0559099224', '0508313659', 'blay@gmail.com', 'Stigger', 'Dad', '0508312659', 'Asanda', 'Elembelle', 'Paa Grant', 'UVA 16', 'Western', 'uva 17', 'married', 'Junaita', '""', 'live', 'UVA 17', 'Andreas Gomez', 'Ghanaian', 'Tesano', 'Mamobi', 'Employed', '0558899647', 'live', 'Joyce Hariet', 'UVA 16', 'Indian', 'UVA 16', 'Paris', 'Employed', '0557485962', '', 'Axim Church', 'Baptised', 'Asanda', '1998-12-27', 'Legon', 'Computer science', 'Tertiary', '5', 'uploads/none.png', '0559099224', '2019-12-26 16:23:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE IF NOT EXISTS `user_log` (
`user_log_id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `login_date` varchar(30) NOT NULL,
  `logout_date` varchar(128) NOT NULL,
  `admin_id` int(128) NOT NULL,
  `student_id` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
 ADD PRIMARY KEY (`keyu`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
 ADD PRIMARY KEY (`user_log_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `admin_id` int(128) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
MODIFY `keyu` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
MODIFY `user_log_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
