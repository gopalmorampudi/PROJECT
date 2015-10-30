-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.27 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for tution
DROP DATABASE IF EXISTS `tution`;
CREATE DATABASE IF NOT EXISTS `tution` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `tution`;


-- Dumping structure for table tution.admin
DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table tution.admin: ~1 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
	(1, 'admin', 'admin');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


-- Dumping structure for table tution.complaint
DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `emailid` varchar(50) NOT NULL DEFAULT '0',
  `subject_name` varchar(50) DEFAULT NULL,
  `tutor_name` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `reply` varchar(50) DEFAULT NULL,
  `replied_by` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'pending',
  KEY `complaint_id` (`complaint_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table tution.complaint: ~5 rows (approximately)
/*!40000 ALTER TABLE `complaint` DISABLE KEYS */;
INSERT INTO `complaint` (`complaint_id`, `emailid`, `subject_name`, `tutor_name`, `description`, `reply`, `replied_by`, `status`) VALUES
	(6, 'vishnu@gmail.com', 'spring', 'priya', 'Not taking class', 'gfgdfh', 'admin', 'Replied'),
	(7, 'vishnu@gmail.com', 'Maths', 'priya', 'not teaching', NULL, NULL, 'pending'),
	(8, 'vishnu@gmail.com', 'Maths', 'priya', 'vfkjgf', NULL, NULL, 'pending'),
	(9, 'vishnu@gmail.com', 'Maths', 'priya', 'ayh', NULL, NULL, 'pending'),
	(10, 'vishnu@gmail.com', 'Maths', 'priya', 'hfgvlhk', NULL, NULL, 'pending');
/*!40000 ALTER TABLE `complaint` ENABLE KEYS */;


-- Dumping structure for table tution.contact
DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'pending',
  KEY `contact_id` (`contact_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table tution.contact: ~6 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
INSERT INTO `contact` (`contact_id`, `customer_name`, `email`, `phone`, `description`, `status`) VALUES
	(1, 'Nukesh', 'nukesh.smts@gmail.com', 2147483647, 'haiiiiiiii', 'pending'),
	(2, 'Nukesh', 'nh8685@gmail.com', 2147483647, 'hiiiiiii', 'pending'),
	(3, 'Nukesh', 'nukesh.smts@gmail.com', 2147483647, 'hiiiiiiiii', 'pending'),
	(4, 'Nukesh', 'ticketraisingsystem@gmail.com', 2147483647, 'hiiiii', 'pending'),
	(5, 'Nukesh', 'ticketraisingsystem@gmail.com', 2147483647, 'hiiiii', 'pending'),
	(6, 'Nukesh', 'ticketraisingsystem@gmail.com', 2147483647, 'hiiiii', 'pending');
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;


-- Dumping structure for table tution.scheduled_classes
DROP TABLE IF EXISTS `scheduled_classes`;
CREATE TABLE IF NOT EXISTS `scheduled_classes` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `schedule_id` int(11) DEFAULT NULL,
  `tutor_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  `from_time` timestamp NULL DEFAULT NULL,
  `to_time` timestamp NULL DEFAULT NULL,
  `status` varchar(50) DEFAULT 'assigned',
  PRIMARY KEY (`class_id`),
  KEY `schedule_id` (`schedule_id`),
  KEY `tutor_id` (`tutor_id`),
  KEY `subject_id` (`subject_id`),
  KEY `student_id` (`student_id`),
  CONSTRAINT `FK_scheduled_classes_student` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_scheduled_classes_subject` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_scheduled_classes_tutor` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`tutor_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `FK_scheduled_classes_tutor_schedule` FOREIGN KEY (`schedule_id`) REFERENCES `tutor_schedule` (`schedule_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table tution.scheduled_classes: ~2 rows (approximately)
/*!40000 ALTER TABLE `scheduled_classes` DISABLE KEYS */;
INSERT INTO `scheduled_classes` (`class_id`, `schedule_id`, `tutor_id`, `subject_id`, `student_id`, `from_time`, `to_time`, `status`) VALUES
	(1, 25, 16, 3, 3, '2015-09-01 12:33:19', '2015-09-01 12:33:20', 'assigned'),
	(2, 31, 14, 4, 1, '2015-09-01 12:36:35', '2015-09-01 12:36:36', 'assigned');
/*!40000 ALTER TABLE `scheduled_classes` ENABLE KEYS */;


-- Dumping structure for table tution.student
DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone_number` bigint(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'pending',
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table tution.student: ~6 rows (approximately)
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` (`student_id`, `student_name`, `emailid`, `password`, `phone_number`, `address`, `status`) VALUES
	(1, 'Priya123', 'priya@gmail.com', '123', 9603623790, 'Hyderabad', 'Accept'),
	(2, 'nikki', 'nikki@gmail.com', '123', 5454564, 'ghfcghfjh', 'Accept'),
	(3, 'Priya', 'priyanjn@bh', '123', 548678, 'njnjnj', 'Accept'),
	(4, 'PriyaDarshini', 'priya1@gmail.com', '123', 9603623790, 'Hyderabad', 'Accept'),
	(5, 'kalyan', 'kalyan@gmail.com', '123', 545456445, 'Hyderabad', 'Accept'),
	(6, 'vishnuPriya', 'vishnu@gmail.com', '123', 98654545889, 'Hyderabad', 'Reject');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;


-- Dumping structure for table tution.subject
DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table tution.subject: ~9 rows (approximately)
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
INSERT INTO `subject` (`subject_id`, `subject_name`) VALUES
	(2, 'DBMS'),
	(3, 'C'),
	(4, 'C++'),
	(5, 'Spring'),
	(6, 'Hibernate'),
	(7, 'Java Script'),
	(8, 'HTML'),
	(9, 'c#');
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;


-- Dumping structure for table tution.tutor
DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `tutor_id` int(11) NOT NULL AUTO_INCREMENT,
  `tutor_name` varchar(50) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone_number` bigint(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `working_hours` int(11) DEFAULT NULL,
  `working_days` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'pending',
  PRIMARY KEY (`tutor_id`),
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

-- Dumping data for table tution.tutor: ~7 rows (approximately)
/*!40000 ALTER TABLE `tutor` DISABLE KEYS */;
INSERT INTO `tutor` (`tutor_id`, `tutor_name`, `emailid`, `password`, `phone_number`, `address`, `subject`, `working_hours`, `working_days`, `status`) VALUES
	(14, 'ShantiPriya', 'priya.smts@gmail.com', '1123', 9603623790, 'Hyderabad', '2,3,4,5,6,7', 6, 5, 'available'),
	(15, 'Chanti', 'Chanti@gmail.com', '123', 8500236545, 'Hyderabad', '4,5,6,7', 7, 6, 'Accept'),
	(16, 'Nukesh', 'nukesh.smts@gmail.com', '123', 8686154623, 'hyderabad', '2,3,4,5', 5, 4, 'available'),
	(17, 'raju', 'raju1@gmail.com', '123', 45896523, 'kodad', '2,3,5', 5, 5, 'available'),
	(18, 'rani', 'rani1@gmail.com', '123', 850069546, 'kukatpally', '3,4,5', 4, 5, 'available'),
	(19, 'ramesh', 'ramesh@gmail.com', '123', 587964545, 'chintal', '3,4,5', 5, 5, 'pending'),
	(20, 'satya', 'satya@gmail.com', '123', 8500236541, 'hythnagar', '4,5,6', 6, 5, 'Reject');
/*!40000 ALTER TABLE `tutor` ENABLE KEYS */;


-- Dumping structure for table tution.tutor_schedule
DROP TABLE IF EXISTS `tutor_schedule`;
CREATE TABLE IF NOT EXISTS `tutor_schedule` (
  `schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `tutor_id` int(11) DEFAULT NULL,
  `c1_8AM` int(11) DEFAULT NULL,
  `c2_9AM` int(11) DEFAULT NULL,
  `c3_10AM` int(11) DEFAULT NULL,
  `c4_11AM` int(11) DEFAULT NULL,
  `c5_12AM` int(11) DEFAULT NULL,
  `c6_1PM` int(11) DEFAULT NULL,
  `c7_2PM` int(11) DEFAULT NULL,
  `c8_3PM` int(11) DEFAULT NULL,
  `c9_4PM` int(11) DEFAULT NULL,
  `c10_5PM` int(11) DEFAULT NULL,
  `weekdays` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'available',
  PRIMARY KEY (`schedule_id`),
  KEY `tutor_id` (`tutor_id`),
  KEY `subject_id` (`c1_8AM`),
  CONSTRAINT `FK_tutor_schedule_tutor` FOREIGN KEY (`tutor_id`) REFERENCES `tutor` (`tutor_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- Dumping data for table tution.tutor_schedule: ~12 rows (approximately)
/*!40000 ALTER TABLE `tutor_schedule` DISABLE KEYS */;
INSERT INTO `tutor_schedule` (`schedule_id`, `tutor_id`, `c1_8AM`, `c2_9AM`, `c3_10AM`, `c4_11AM`, `c5_12AM`, `c6_1PM`, `c7_2PM`, `c8_3PM`, `c9_4PM`, `c10_5PM`, `weekdays`, `status`) VALUES
	(25, 14, 4, 4, NULL, NULL, NULL, 4, 5, 5, 5, 5, 'Monday', 'available'),
	(26, 14, NULL, NULL, 4, 5, 4, 5, 5, 5, NULL, NULL, 'tuesday', 'available'),
	(27, 14, 4, NULL, NULL, NULL, NULL, 4, NULL, 4, 5, 4, 'Wednesday', 'available'),
	(28, 14, NULL, 5, NULL, 4, 4, NULL, 5, 5, 5, NULL, 'Thursday', 'available'),
	(29, 14, 5, 4, 4, NULL, NULL, 5, NULL, 5, NULL, NULL, 'Friday', 'available'),
	(30, 14, 4, 4, 5, 4, NULL, NULL, 4, 4, 5, 5, 'Saturday', 'available'),
	(31, 16, 3, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Monday', 'available'),
	(32, 16, NULL, NULL, NULL, NULL, NULL, 3, 3, 4, 5, 5, 'tuesday', 'available'),
	(33, 16, 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, 4, 'Wednesday', 'available'),
	(34, 16, NULL, 5, 3, NULL, 4, NULL, 4, NULL, NULL, NULL, 'Thursday', 'available'),
	(35, 16, NULL, 3, NULL, 4, NULL, 3, NULL, 5, NULL, NULL, 'Friday', 'available'),
	(36, 16, 3, NULL, 3, NULL, NULL, NULL, 3, NULL, 4, NULL, 'Saturday', 'available');
/*!40000 ALTER TABLE `tutor_schedule` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
