-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2016 at 09:30 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbc`
--

-- --------------------------------------------------------

--
-- Table structure for table `educational_details`
--

CREATE TABLE `educational_details` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `College_name` varchar(50) NOT NULL,
  `College_entry` date NOT NULL,
  `College_exit` date NOT NULL,
  `College_certification` varchar(50) NOT NULL,
  `Highschool_name` varchar(50) NOT NULL,
  `Highschool_entry` date NOT NULL,
  `Highschool_exit` date NOT NULL,
  `Highschool_certification` varchar(50) NOT NULL,
  `Professional_name` varchar(50) NOT NULL,
  `Professional_entry` date NOT NULL,
  `Professional_exit` date NOT NULL,
  `Professional_certification` varchar(50) NOT NULL,
  `Language_spoken1` varchar(50) NOT NULL,
  `Speaking_status1` varchar(50) NOT NULL,
  `Writing_status1` varchar(50) NOT NULL,
  `Reading_status1` varchar(50) NOT NULL,
  `Language_spoken2` varchar(50) DEFAULT NULL,
  `Speaking_status2` varchar(50) NOT NULL,
  `Writing_status2` varchar(50) DEFAULT NULL,
  `Reading_status2` varchar(50) DEFAULT NULL,
  `Language_spoken3` varchar(50) DEFAULT NULL,
  `Speaking_status3` varchar(50) NOT NULL,
  `Writing_status3` varchar(50) DEFAULT NULL,
  `Reading_status3` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational_details`
--

INSERT INTO `educational_details` (`id`, `user_id`, `College_name`, `College_entry`, `College_exit`, `College_certification`, `Highschool_name`, `Highschool_entry`, `Highschool_exit`, `Highschool_certification`, `Professional_name`, `Professional_entry`, `Professional_exit`, `Professional_certification`, `Language_spoken1`, `Speaking_status1`, `Writing_status1`, `Reading_status1`, `Language_spoken2`, `Speaking_status2`, `Writing_status2`, `Reading_status2`, `Language_spoken3`, `Speaking_status3`, `Writing_status3`, `Reading_status3`) VALUES
(1, 100, 'MIT', '2016-09-25', '2016-09-26', 'BSc', 'MIT', '2016-09-26', '2016-09-26', 'SSCE', 'CISCO', '2016-09-25', '2016-09-25', 'CCNA', 'English', 'high', 'high', 'medium', 'French', 'medium', 'medium', 'low', '', 'low', 'low', 'low'),
(2, 101, 'Havard', '2016-11-15', '2016-09-26', 'BSc', 'MIT', '2016-09-26', '2016-11-14', 'SSCE', 'CISCO', '2016-11-06', '2016-09-25', 'OSCP', 'English', 'high', 'high', 'medium', 'French', 'High', 'medium', 'High', '', 'low', 'low', 'low'),
(3, 102, 'Havard', '2016-09-25', '2016-09-26', 'BSc', 'MIT', '2016-09-26', '2016-09-26', 'SSCE', 'CISCO', '2016-09-25', '2016-09-25', 'CISSP', 'English', 'high', 'high', 'medium', 'French', 'medium', 'medium', 'low', '', 'low', 'low', 'low'),
(4, 103, 'Havard', '2016-09-25', '2016-09-26', 'BSc', 'MIT', '2016-09-26', '2016-09-26', 'SSCE', 'CISCO', '2016-09-25', '2016-09-25', 'CISSP', 'English', 'high', 'high', 'medium', 'French', 'medium', 'medium', 'low', '', 'low', 'low', 'low'),
(6, 104, 'Havard', '2016-09-25', '2016-09-26', 'BSc', 'MIT', '2016-09-26', '2016-09-26', 'SSCE', 'CISCO', '2016-09-25', '2016-09-25', 'CISSP', 'English', 'high', 'high', 'high', 'French', 'medium', 'low', 'low', 'German', 'high', 'high', 'high'),
(7, 105, 'MIT', '2016-09-25', '2016-10-03', 'MBA', 'MIT', '2016-10-02', '2016-10-03', 'SAT', 'MIT', '2016-10-02', '2016-09-26', 'MSc', 'English', 'high', 'high', 'high', 'Spanish', 'low', 'low', 'low', '', 'low', 'low', 'low');

-- --------------------------------------------------------

--
-- Table structure for table `employment_details`
--

CREATE TABLE `employment_details` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `Prev_organisation1` varchar(50) DEFAULT NULL,
  `Job_title1` varchar(30) DEFAULT NULL,
  `Job_description1` varchar(50) DEFAULT NULL,
  `Job_entry1` date DEFAULT NULL,
  `Job_exit1` int(11) DEFAULT NULL,
  `Salary_on_entry1` int(11) DEFAULT NULL,
  `Salary_on_exit1` int(11) DEFAULT NULL,
  `Allowance_on_entry1` int(11) DEFAULT NULL,
  `Allowance_on_exit1` int(11) DEFAULT NULL,
  `Reason_for_leave1` int(11) DEFAULT NULL,
  `Prev_organisation2` varchar(50) DEFAULT NULL,
  `Job_title2` varchar(30) DEFAULT NULL,
  `Job_description2` varchar(50) DEFAULT NULL,
  `Job_entry2` date DEFAULT NULL,
  `Job_exit2` date DEFAULT NULL,
  `Salary_on_entry2` int(11) DEFAULT NULL,
  `Salary_on_exit2` int(11) DEFAULT NULL,
  `Allowance_on_entry2` int(11) DEFAULT NULL,
  `Allowance_on_exit2` int(11) DEFAULT NULL,
  `Reason_for_leave2` varchar(50) DEFAULT NULL,
  `Prev_organisation3` varchar(50) DEFAULT NULL,
  `Job_title3` varchar(30) DEFAULT NULL,
  `Job_description3` varchar(50) DEFAULT NULL,
  `Job_entry3` date DEFAULT NULL,
  `Job_exit3` date DEFAULT NULL,
  `Salary_on_entry3` int(11) DEFAULT NULL,
  `Salary_on_exit3` int(11) DEFAULT NULL,
  `Allowance_on_entry3` int(11) DEFAULT NULL,
  `Allowance_on_exit3` int(11) DEFAULT NULL,
  `Reason_for_leave3` varchar(50) DEFAULT NULL,
  `Referee1` varchar(30) NOT NULL,
  `RefereeDesignation1` varchar(30) NOT NULL,
  `RefereeAddress1` varchar(50) NOT NULL,
  `RefereeNumber1` int(11) NOT NULL,
  `Referee2` varchar(30) DEFAULT NULL,
  `RefereeDesignation2` varchar(30) DEFAULT NULL,
  `RefereeAddress2` varchar(50) DEFAULT NULL,
  `RefereeNumber2` int(11) DEFAULT NULL,
  `Referee3` varchar(30) DEFAULT NULL,
  `RefereeDesignation3` varchar(30) DEFAULT NULL,
  `RefereeAddress3` varchar(50) DEFAULT NULL,
  `RefereeNumber3` int(11) DEFAULT NULL,
  `Agreement` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employment_details`
--

INSERT INTO `employment_details` (`id`, `user_id`, `Prev_organisation1`, `Job_title1`, `Job_description1`, `Job_entry1`, `Job_exit1`, `Salary_on_entry1`, `Salary_on_exit1`, `Allowance_on_entry1`, `Allowance_on_exit1`, `Reason_for_leave1`, `Prev_organisation2`, `Job_title2`, `Job_description2`, `Job_entry2`, `Job_exit2`, `Salary_on_entry2`, `Salary_on_exit2`, `Allowance_on_entry2`, `Allowance_on_exit2`, `Reason_for_leave2`, `Prev_organisation3`, `Job_title3`, `Job_description3`, `Job_entry3`, `Job_exit3`, `Salary_on_entry3`, `Salary_on_exit3`, `Allowance_on_entry3`, `Allowance_on_exit3`, `Reason_for_leave3`, `Referee1`, `RefereeDesignation1`, `RefereeAddress1`, `RefereeNumber1`, `Referee2`, `RefereeDesignation2`, `RefereeAddress2`, `RefereeNumber2`, `Referee3`, `RefereeDesignation3`, `RefereeAddress3`, `RefereeNumber3`, `Agreement`) VALUES
(1, 100, 'Google', 'developer', 'software development', '2016-09-25', 2016, 50000, 75000, 0, 10000, 0, '', '', '', '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', ' ', '', '', '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', 'Bill James', 'Google', 'google estate', 123456, '', '', '', 0, '', '', '', 0, 'on'),
(2, 101, 'Shell', 'Engineer', 'Site supervision', '2016-09-25', 0, 50000, 75000, 0, 10000, 0, '', 'Engineer', '', '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', ' ', '', '', '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', 'Bill Gates', 'Microsoft', 'Shell close', 123456, '', '', '', 0, '', '', '', 0, 'on'),
(3, 102, 'IBM', 'Accountant', 'Auditing', '2016-09-25', 0, 50000, 75000, 0, 10000, 0, '', 'Accountant', '', '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', ' ', '', '', '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', 'Jimmy Fallon', 'IBM', 'Hollywood', 123456, '', '', '', 0, '', '', '', 0, 'on'),
(4, 103, 'Apple', 'Software developer', 'Forensic Analysis', '2016-09-25', 2016, 50000, 75000, 0, 10000, 0, '', '', '', '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', ' ', '', '', '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', 'Steve Jobs', 'Apple', 'California', 123456, '', '', '', 0, '', '', '', 0, 'on'),
(6, 104, 'Apple', 'Software developer', 'Security Expert', '2016-09-25', 2016, 50000, 75000, 0, 10000, 0, '', '', '', '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', ' ', '', '', '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', 'Steve Jobs', 'Apple', 'California', 123456, '', '', '', 0, '', '', '', 0, 'on'),
(7, 105, 'Access Estates', 'Estate Manager', 'Estate Management', '2016-09-25', 2016, 50000, 70000, 0, 0, 0, '', '', '', '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', ' ', '', '', '0000-00-00', '0000-00-00', 0, 0, 0, 0, '', 'Edward Lyon', 'Owner', 'Access states', 123452, '', '', '', 0, '', '', '', 0, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `events_meetings`
--

CREATE TABLE `events_meetings` (
  `id` int(11) NOT NULL,
  `event_title` varchar(50) NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `start_time` time NOT NULL,
  `finish_time` time NOT NULL,
  `color` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events_meetings`
--

INSERT INTO `events_meetings` (`id`, `event_title`, `date_from`, `date_to`, `start_time`, `finish_time`, `color`) VALUES
(1, 'Sample Meeting', '2016-10-27', '2016-10-27', '09:00:00', '09:00:00', '#4caf50'),
(2, 'announcement', '2016-10-27', '2016-10-27', '10:00:00', '10:00:00', '#26c6da');

-- --------------------------------------------------------

--
-- Table structure for table `family_details`
--

CREATE TABLE `family_details` (
  `id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `Full_name` varchar(70) NOT NULL,
  `Name_of_dependant1` varchar(50) DEFAULT NULL,
  `DOB_of_dependant1` date DEFAULT NULL,
  `Address_of_dependant1` varchar(255) DEFAULT NULL,
  `MobileNo_of_dependant1` int(11) DEFAULT NULL,
  `Name_of_dependant2` varchar(50) DEFAULT NULL,
  `DOB_of_dependant2` date DEFAULT NULL,
  `Address_of_dependant2` varchar(255) DEFAULT NULL,
  `MobileNo_of_dependant2` int(11) DEFAULT NULL,
  `Name_of_dependant3` varchar(50) DEFAULT NULL,
  `DOB_of_dependant3` date NOT NULL,
  `Address_of_dependant3` varchar(255) DEFAULT NULL,
  `MobileNo_of_dependant3` int(11) DEFAULT NULL,
  `Hobbies` varchar(255) NOT NULL,
  `Convict_status` varchar(25) NOT NULL,
  `Conviction_reason` varchar(50) DEFAULT NULL,
  `CBC_Relative_status` varchar(25) NOT NULL,
  `Name_of_relative` varchar(50) DEFAULT NULL,
  `Relationship_with_relative` varchar(50) DEFAULT NULL,
  `Familymember_name1` varchar(50) DEFAULT NULL,
  `Relationship_with_familymember1` varchar(50) DEFAULT NULL,
  `DOB_of_familymember1` date DEFAULT NULL,
  `Familymember_name2` varchar(50) DEFAULT NULL,
  `Relationship_with_familymember2` varchar(50) DEFAULT NULL,
  `DOB_of_familymember2` date DEFAULT NULL,
  `Familymember_name3` varchar(50) DEFAULT NULL,
  `Relationship_with_familymember3` varchar(50) DEFAULT NULL,
  `DOB_of_familymember3` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family_details`
--

INSERT INTO `family_details` (`id`, `user_id`, `Full_name`, `Name_of_dependant1`, `DOB_of_dependant1`, `Address_of_dependant1`, `MobileNo_of_dependant1`, `Name_of_dependant2`, `DOB_of_dependant2`, `Address_of_dependant2`, `MobileNo_of_dependant2`, `Name_of_dependant3`, `DOB_of_dependant3`, `Address_of_dependant3`, `MobileNo_of_dependant3`, `Hobbies`, `Convict_status`, `Conviction_reason`, `CBC_Relative_status`, `Name_of_relative`, `Relationship_with_relative`, `Familymember_name1`, `Relationship_with_familymember1`, `DOB_of_familymember1`, `Familymember_name2`, `Relationship_with_familymember2`, `DOB_of_familymember2`, `Familymember_name3`, `Relationship_with_familymember3`, `DOB_of_familymember3`) VALUES
(1, 100, 'Doe John', 'Jane Doe', '2016-10-27', ' 123 sesame street', 123456, ' ', '0000-00-00', ' ', 0, ' ', '0000-00-00', ' ', 0, ' reading', 'no', '', ' no', ' ', '', ' Jane Doe ', 'sister', '2016-10-23', ' ', '', '0000-00-00', ' ', '', '0000-00-00'),
(2, 101, 'Akinola Daniel', 'Jane Akinola', '2016-10-27', '', 0, ' ', '0000-00-00', ' ', 0, ' ', '0000-00-00', ' ', 0, ' reading', 'no', '', 'no', ' ', '', ' Janet  Akinola', 'sister', '2016-10-23', ' ', '', '0000-00-00', ' ', '', '0000-00-00'),
(3, 102, 'David Susan', 'David Ben', '2016-10-27', '1995-10-25', 0, ' ', '0000-00-00', ' ', 0, ' ', '0000-00-00', ' ', 0, ' reading', 'no', '', 'no', ' ', '', ' David Ben', 'husband', '2016-10-23', ' ', '', '0000-00-00', ' ', '', '0000-00-00'),
(4, 103, 'Mohammed Aisha', 'Mohammed Ali', '2016-10-27', ' 123 sesame street', 123456, ' ', '0000-00-00', ' ', 0, ' ', '0000-00-00', ' ', 0, ' coding', 'no', '', ' no', ' ', '', ' Mohammed Ali', 'brother', '2016-10-23', ' ', '', '0000-00-00', ' ', '', '0000-00-00'),
(6, 104, 'Mohammed Fawaz', 'Mohammed Ali', '2016-10-27', ' 123 sesame street', 123456, ' ', '0000-00-00', ' ', 0, ' ', '0000-00-00', ' ', 0, ' coding', 'yes', 'assault', ' no', ' ', '', ' Mohammed Ali', 'brother', '2016-10-23', ' ', '', '0000-00-00', ' ', '', '0000-00-00'),
(7, 105, 'Joseph Elizabeth', 'Joseph Ben', '2016-10-14', ' 123 sesame street', 12232, ' ', '0000-00-00', ' ', 0, ' ', '0000-00-00', ' ', 0, ' reading', 'no', '', ' no', ' ', '', ' Joseph Ben', 'son', '2016-09-26', ' ', '', '0000-00-00', ' ', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `leave_absences`
--

CREATE TABLE `leave_absences` (
  `id` int(50) NOT NULL,
  `user_id` int(255) NOT NULL,
  `fullname` varchar(80) NOT NULL,
  `reason` varchar(80) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `status` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leave_absences`
--

INSERT INTO `leave_absences` (`id`, `user_id`, `fullname`, `reason`, `start_date`, `end_date`, `status`) VALUES
(1, 103, 'Mohammed Aisha', 'OFFICIAL LEAVE', '2016-11-02', '2016-11-04', 'PENDING ');

-- --------------------------------------------------------

--
-- Table structure for table `personal_information`
--

CREATE TABLE `personal_information` (
  `user_id` int(255) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `OtherName` varchar(50) DEFAULT NULL,
  `MaidenName` varchar(50) DEFAULT NULL,
  `D_O_B` date NOT NULL,
  `Nationality` varchar(30) NOT NULL,
  `State_of_Origin` varchar(30) NOT NULL,
  `Telephone_No` int(20) NOT NULL,
  `Title` varchar(20) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `Marital_Status` varchar(20) NOT NULL,
  `Marriage_Date` date DEFAULT NULL,
  `Spouse_Name` varchar(30) DEFAULT NULL,
  `Spouse_Nationality` varchar(30) DEFAULT NULL,
  `Spouse_Profession` varchar(30) DEFAULT NULL,
  `Residential_Address` varchar(200) NOT NULL,
  `Date_of_Employment` date NOT NULL,
  `Email_Address` varchar(70) DEFAULT NULL,
  `Post_Code` int(10) DEFAULT NULL,
  `Next_of_Kin` varchar(50) DEFAULT NULL,
  `Next_of_Kin_Address` varchar(70) DEFAULT NULL,
  `Relationship_with_Next_of_Kin` varchar(50) DEFAULT NULL,
  `Passport_photograph` varchar(150) DEFAULT NULL,
  `subsidiary` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_information`
--

INSERT INTO `personal_information` (`user_id`, `LastName`, `FirstName`, `OtherName`, `MaidenName`, `D_O_B`, `Nationality`, `State_of_Origin`, `Telephone_No`, `Title`, `Religion`, `Marital_Status`, `Marriage_Date`, `Spouse_Name`, `Spouse_Nationality`, `Spouse_Profession`, `Residential_Address`, `Date_of_Employment`, `Email_Address`, `Post_Code`, `Next_of_Kin`, `Next_of_Kin_Address`, `Relationship_with_Next_of_Kin`, `Passport_photograph`, `subsidiary`) VALUES
(100, 'Doe', 'John', 'Sammy', '', '1992-10-25', 'American', 'Texas', 123456, 'mr', 'christianity', 'single', '0000-00-00', '', '', '', '123 sesame street', '2016-09-25', 'johndoe@mail.com', 0, 'Jane Doe', '123 sesame street', 'sister', '../uploads/avatar.png', 'GEDU TECHNOLOGIES'),
(101, 'Akinola', 'David', 'Ola', '', '1990-11-25', 'Nigerian', 'Lagos', 123456, 'mr', 'Islam', 'Divorced', '0000-00-00', '', '', '', '123 sesame street', '2016-09-25', 'akindaniel@mail.com', 1000, 'Jane Akinola', '123 sesame street', 'sister', '../uploads/avatar4.png', 'CBC INFRASTRUCTURE'),
(102, 'David', 'Susan', 'Maria', 'Alison', '1995-11-25', 'Nigerian', 'Lagos', 123456, 'mrs', 'christianity', 'married', '2016-10-12', 'David Ben', 'Nigerian', 'Doctor', '123 sesame street', '2016-09-25', 'susan@mail.com', 0, 'David Ben', '123 sesame street', 'husband', '../uploads/avatar2.png', 'ADMINISTRATION / H.R.'),
(103, 'Mohammed', 'Aisha', 'Jane', 'Mohammed', '1997-10-25', 'American', 'New York', 123456, 'mrs', 'islam', 'single', '0000-00-00', '', '', '', '123 sesame street', '2016-09-25', 'aisha@mail.com', 0, 'Mohammed Ali', '123 sesame street', 'brother', '../uploads/avatar3.png', 'GEDU TECHNOLOGIES'),
(104, 'Fawaz', 'Mohammed', 'Ozil', '', '1986-10-25', 'German', 'Berlin', 123456, 'mr', 'islam', 'single', '0000-00-00', '', '', '', '123 sesame street', '2016-09-25', 'fawaz@mail.com', 0, 'Mohammed Ali', '123 sesame street', 'brother', '../uploads/avatar5.png', 'CBC NETCOMMS'),
(105, 'Joseph', 'Elizabeth', 'Mary', 'Joseph', '1992-10-27', 'American', 'new york', 123456, 'miss', 'christianity', 'single', '0000-00-00', '', '', '', '1234 st at open ', '2016-09-26', 'lizzy@mail.com', 0, 'Joseph Ben', '123 sesame street', 'son', '../uploads/user-5.png', 'CBC PROPERTIES');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(10) UNSIGNED NOT NULL,
  `user_id` int(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `user_id`, `username`, `password`, `firstname`, `lastname`, `status`) VALUES
(1, 100, 'admin', 'admin', 'John', 'Doe', 'admin'),
(2, 101, 'staff', 'staff', 'David', 'Akinola', 'staff'),
(3, 102, 'susan', 'susan', 'Susan', 'David', 'staff'),
(4, 103, 'aisha', 'aisha', 'Aisha', 'Mohammed', 'staff'),
(5, 104, 'fawaz', 'fawaz', 'Mohammed', 'Fawaz', 'staff'),
(6, 105, 'elizabeth', 'elizabeth', 'Elizabeth', 'Joseph', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `educational_details`
--
ALTER TABLE `educational_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `employment_details`
--
ALTER TABLE `employment_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `events_meetings`
--
ALTER TABLE `events_meetings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `family_details`
--
ALTER TABLE `family_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `leave_absences`
--
ALTER TABLE `leave_absences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_information`
--
ALTER TABLE `personal_information`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `users_ibfk_1` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `educational_details`
--
ALTER TABLE `educational_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `employment_details`
--
ALTER TABLE `employment_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `events_meetings`
--
ALTER TABLE `events_meetings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `family_details`
--
ALTER TABLE `family_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `leave_absences`
--
ALTER TABLE `leave_absences`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `educational_details`
--
ALTER TABLE `educational_details`
  ADD CONSTRAINT `educational_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `personal_information` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `employment_details`
--
ALTER TABLE `employment_details`
  ADD CONSTRAINT `employment_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `personal_information` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `family_details`
--
ALTER TABLE `family_details`
  ADD CONSTRAINT `family_details_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `personal_information` (`user_id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `personal_information` (`user_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
