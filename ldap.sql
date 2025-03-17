-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 09, 2016 at 11:45 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ldap`
--

-- --------------------------------------------------------

--
-- Table structure for table `ldap`
--

CREATE TABLE IF NOT EXISTS `ldap` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `host` varchar(25) NOT NULL,
  `port` varchar(25) NOT NULL,
  `basedn` varchar(25) NOT NULL,
  `time_stamp` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `ldap`
--

INSERT INTO `ldap` (`id`, `username`, `password`, `host`, `port`, `basedn`, `time_stamp`) VALUES
(1, 'Administrator', 'India123', 'WIN-46UBI5BFI4P.parent.co', '389', 'dc=parent,dc=com', '10/09/2016 11:37:46 am'),
(11, 'ronaldo', 'asdsad', 'WIN-46UBI5BFI4P.parent.co', 'asdsad', 'dc=parent,dc=com', '10/09/2016 11:36:52 am'),
(12, 'afsanada', 'asdsad', 'WIN-46UBI5BFI4P.parent.co', 'asdsad', 'dc=parent,dc=com', '10/09/2016 11:37:46 am');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(25) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'Administrator', 'Admin');
