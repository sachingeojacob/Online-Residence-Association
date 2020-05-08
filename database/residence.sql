-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2019 at 06:02 AM
-- Server version: 5.5.36
-- PHP Version: 5.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `residence`
--

-- --------------------------------------------------------

--
-- Table structure for table `caretaker`
--

CREATE TABLE IF NOT EXISTS `caretaker` (
  `cid` int(50) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `housenum` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `logid` int(50) NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `caretaker`
--

INSERT INTO `caretaker` (`cid`, `cname`, `email`, `phone`, `gender`, `housenum`, `username`, `logid`, `status`) VALUES
(1, 'jishnu', 'jishnu@gmail.com', 9747523614, 'male', '12b', 'jishnu', 4, 1),
(7, 'ammu', 'ammu@gmail.com', 9048605320, 'female', '12c', 'ammu', 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `compid` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `complaint` varchar(200) NOT NULL,
  PRIMARY KEY (`compid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`compid`, `username`, `complaint`) VALUES
(1, 'missa', 'bad room');

-- --------------------------------------------------------

--
-- Table structure for table `election`
--

CREATE TABLE IF NOT EXISTS `election` (
  `elid` int(50) NOT NULL AUTO_INCREMENT,
  `elname` varchar(50) NOT NULL,
  `candidates` varchar(100) NOT NULL,
  `edate` date NOT NULL,
  `vote` int(100) NOT NULL,
  `voterid` int(4) NOT NULL,
  PRIMARY KEY (`elid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `election`
--

INSERT INTO `election` (`elid`, `elname`, `candidates`, `edate`, `vote`, `voterid`) VALUES
(25, 'rep', 'jishnu ', '2018-04-05', 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `electionadd`
--

CREATE TABLE IF NOT EXISTS `electionadd` (
  `elid` int(50) NOT NULL AUTO_INCREMENT,
  `elname` varchar(50) NOT NULL,
  `candidates` varchar(50) NOT NULL,
  `edate` varchar(50) NOT NULL,
  PRIMARY KEY (`elid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `electionadd`
--

INSERT INTO `electionadd` (`elid`, `elname`, `candidates`, `edate`) VALUES
(27, 'rep', 'ammu', '2018-04-05'),
(26, 'rep', 'jishnu', '2018-04-05'),
(25, 'rep', 'missa', '2018-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `gid` int(50) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`gid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`gid`, `image`) VALUES
(2, '1159522_WAN4Iuki48ouhdOVvVQttNt8an5hTR-JdvnSYv59Bl5GrTV8bMz5BRAGrdFAYBZjVvuT5MSeet5QmuU5mW9EqQ...jpg'),
(3, '8255782_l-e1467965954603.jpg'),
(4, '35-1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ladiespanel`
--

CREATE TABLE IF NOT EXISTS `ladiespanel` (
  `laid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  PRIMARY KEY (`laid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `ladiespanel`
--

INSERT INTO `ladiespanel` (`laid`, `username`, `message`) VALUES
(1, 'missa', 'hai'),
(2, 'meril', 'can you please give your cat'),
(6, 'missa', 'how are you'),
(5, 'missa', 'how you all'),
(8, 'missa', 'haiiii'),
(9, 'missa', 'helllllllllllllllllloooooooooooooo');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'admin', 'admin@1234', 'admin', 1),
(3, 'missa', 'missa@1234', 'user', 1),
(4, 'jishnu', 'jishnu@123', 'caretaker', 1),
(11, 'ammu', 'ammu@12345', 'caretaker', 1),
(12, 'sarath', 'sarath@123', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsid` int(50) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `news` varchar(500) NOT NULL,
  PRIMARY KEY (`newsid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `date`, `news`) VALUES
(1, '2018-03-07', 'hello'),
(2, '2018-03-13', 'vhgh\r\nkhk');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notid` int(50) NOT NULL AUTO_INCREMENT,
  `date` varchar(100) NOT NULL,
  `notification` varchar(200) NOT NULL,
  PRIMARY KEY (`notid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notid`, `date`, `notification`) VALUES
(3, '2018-03-07', 'meeting should be held at time'),
(5, '2018-04-02', 'meeting postponded');

-- --------------------------------------------------------

--
-- Table structure for table `serpro`
--

CREATE TABLE IF NOT EXISTS `serpro` (
  `serid` int(50) NOT NULL AUTO_INCREMENT,
  `sername` varchar(50) NOT NULL,
  `service` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  PRIMARY KEY (`serid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `serpro`
--

INSERT INTO `serpro` (`serid`, `sername`, `service`, `email`, `phone`, `gender`) VALUES
(1, 'meril', 'plumber', 'meril@gmail.com', 9048605321, 'female'),
(2, 'achu', 'cleaning', 'achu@gmail.com', 9048605322, 'female'),
(3, 'anu', 'laundry', 'anu@gmail.com', 9048605323, 'female');

-- --------------------------------------------------------

--
-- Table structure for table `serreq`
--

CREATE TABLE IF NOT EXISTS `serreq` (
  `srid` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `service` varchar(200) NOT NULL,
  `status` int(20) NOT NULL,
  PRIMARY KEY (`srid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `serreq`
--

INSERT INTO `serreq` (`srid`, `username`, `service`, `status`) VALUES
(1, 'missa', 'want electricity', 1),
(2, 'missa', 'want water', 1),
(3, 'meril', 'cant', 1),
(4, 'missa', 'hgfh', 1),
(7, 'missa', 'want laundry service', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userid` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `housenum` varchar(200) NOT NULL,
  `username` varchar(50) NOT NULL,
  `logid` int(50) NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `name`, `email`, `gender`, `phone`, `housenum`, `username`, `logid`, `status`) VALUES
(2, 'missa', 'missa@gmail.com', 'female', 9797977520, '14d', 'missa@1234', 3, 1),
(6, 'sarath', 'sarath@gmail.com', 'male', 9745263251, '15A', 'sarath@123', 12, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
