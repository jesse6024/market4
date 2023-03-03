-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2013 at 09:14 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wizard`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `to_user` varchar(30) DEFAULT NULL,
  `from_user` varchar(30) DEFAULT NULL,
  `deleted` varchar(3) DEFAULT NULL,
  `sent_deleted` varchar(3) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`to_user`, `from_user`, `deleted`, `sent_deleted`, `message`) VALUES
('rg', 'ranjit', NULL, NULL, 'sqdda'),
('sadas', 'ranjit', NULL, NULL, 'ggggggggggggg');

-- --------------------------------------------------------

--
-- Table structure for table `pm_imbox`
--

CREATE TABLE IF NOT EXISTS `pm_imbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` tinyint(5) NOT NULL,
  `username` varchar(123) NOT NULL,
  `from_id` tinyint(4) NOT NULL,
  `from_username` varchar(123) NOT NULL,
  `title` varchar(150) NOT NULL,
  `content` longtext NOT NULL,
  `viewed` enum('0','1') NOT NULL,
  `recieve_date` varchar(123) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `pm_imbox`
--

INSERT INTO `pm_imbox` (`id`, `userid`, `username`, `from_id`, `from_username`, `title`, `content`, `viewed`, `recieve_date`) VALUES
(59, 3, 'to_username', 1, 'ranjit', 'error fix', '&lt;/#?!!hhh', '0', 'Thursday,3rd October 2013,8:38:57:am'),
(61, 2, 'to_username', 1, 'ranjit', 'applelaaa', 'kjbjb', '0', 'Sunday,6th October 2013,1:47:22:pm'),
(62, 3, 'to_username', 1, 'ranjit', 'c', 'sxx', '0', 'Sunday,6th October 2013,1:47:35:pm'),
(63, 1, 'to_username', 1, 'ranjit', 'from ran ti arju', 'xssssssssssssssss', '0', 'Sunday,6th October 2013,1:47:42:pm');

-- --------------------------------------------------------

--
-- Table structure for table `pm_outbox`
--

CREATE TABLE IF NOT EXISTS `pm_outbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` tinyint(4) NOT NULL,
  `username` varchar(123) NOT NULL,
  `to_userid` tinyint(4) NOT NULL,
  `to_username` varchar(123) NOT NULL,
  `title` varchar(123) NOT NULL,
  `content` longtext NOT NULL,
  `senddate` varchar(120) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `pm_outbox`
--

INSERT INTO `pm_outbox` (`id`, `userid`, `username`, `to_userid`, `to_username`, `title`, `content`, `senddate`) VALUES
(40, 2, 'arjun', 2, '<br /><b>Notice</b>:  Undefined variable: TOuser in <b>C:xampphtdocsNewPMpm_send_to.php</b> on line <b>28</b><br />', 'from arjun', 'argun', ''),
(41, 2, 'arjun', 1, '<br /><b>Notice</b>:  Undefined variable: TOuser in <b>C:xampphtdocsNewPMpm_send_to.php</b> on line <b>28</b><br />', 'to ranjit from arjun1', 'cc', ''),
(45, 3, 'ram', 1, 'ranjit', 'wfwer', 'efwew', 'Thursday,3rd October 2013,4:18:47:am'),
(46, 3, 'ram', 1, 'ranjit', 'eree', 'dsffer', 'Thursday,3rd October 2013,4:18:57:am'),
(47, 3, 'ram', 1, 'ranjit', 'error', 'hello!!<?>', 'Thursday,3rd October 2013,8:28:57:am'),
(50, 1, 'ranjit', 2, 'arjun', 'applelaaa', 'kjbjb', 'Sunday,6th October 2013,1:47:22:pm'),
(51, 1, 'ranjit', 3, 'ram', 'c', 'sxx', 'Sunday,6th October 2013,1:47:35:pm'),
(52, 1, 'ranjit', 1, 'ranjit', 'from ran ti arju', 'xssssssssssssssss', 'Sunday,6th October 2013,1:47:42:pm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(123) NOT NULL,
  `password` varchar(123) NOT NULL,
  `email` varchar(123) NOT NULL,
  `showing` enum('0','1') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `showing`) VALUES
(1, 'ranjit', 'ranjit', '', '1'),
(2, 'arjun', 'arjun', 'c_@yahoo.com', '1'),
(3, 'ram', 'ram', '', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
