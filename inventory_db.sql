-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Oct 07, 2013 at 11:18 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `inventory_db`
-- 
CREATE DATABASE `inventory_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `inventory_db`;

-- --------------------------------------------------------

-- 
-- Table structure for table `invoice`
-- 

CREATE TABLE `invoice` (
  `po_number` varchar(20) NOT NULL,
  `vendor` varchar(50) NOT NULL,
  `receiveBy` varchar(50) NOT NULL,
  `receiveByName` varchar(50) NOT NULL,
  `recieveDate` varchar(50) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `fileName` varchar(100) NOT NULL,
  `filePath` varchar(100) NOT NULL,
  `fileSize` varchar(100) NOT NULL,
  `fileType` varchar(100) NOT NULL,
  PRIMARY KEY  (`po_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `invoice`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `store`
-- 

CREATE TABLE `store` (
  `product_code` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `id` int(50) NOT NULL auto_increment,
  `building` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='ตารางเก็บข้อมูลอุปกรณ์' AUTO_INCREMENT=153 ;

-- 
-- Dumping data for table `store`
-- 

INSERT INTO `store` VALUES ('code100', 'mouse', 'asus', 6, 1, 'B4');
INSERT INTO `store` VALUES ('code101', 'keyboard', 'acer', 33, 2, 'B4');
INSERT INTO `store` VALUES ('code103', 'monitor', 'asus', 20, 4, 'B6');
INSERT INTO `store` VALUES ('code104', 'ram', 'samsung', 3, 5, 'B6');
INSERT INTO `store` VALUES ('code105', 'monitor', 'asus', 20, 6, 'B3');
INSERT INTO `store` VALUES ('code106', 'ram', 'hitashi', 14, 7, 'B6');
INSERT INTO `store` VALUES ('code107', 'monitor', 'asus', 78, 8, 'B4');
INSERT INTO `store` VALUES ('code108', 'monitor', 'hitashi', 2, 9, 'B6');
INSERT INTO `store` VALUES ('code109', 'cpu', 'asus', 31, 10, 'B4');
INSERT INTO `store` VALUES ('code110', 'cpu', 'asus', 20, 11, 'B6');
INSERT INTO `store` VALUES ('code111', 'monitor', 'asus', 212, 12, 'B6');
INSERT INTO `store` VALUES ('code112', 'monitor', 'log', 19, 13, 'B6');
INSERT INTO `store` VALUES ('code113', 'cpu', 'asus', 1, 14, 'B6');
INSERT INTO `store` VALUES ('1fdsfs', 'dsfs', 'dfss', 4, 133, 'B6');
INSERT INTO `store` VALUES ('3242', '42424', '2342342', 317, 134, 'B3');
INSERT INTO `store` VALUES ('wrww', 'www', 'wwwww', 319, 135, 'B6');
INSERT INTO `store` VALUES ('ddf', 'monitor', 'sdfs', 1, 136, 'B3');
INSERT INTO `store` VALUES ('dddd', 'monitor', 'dddd', 1, 137, 'B6');
INSERT INTO `store` VALUES ('3324242', 'monitor', '2424224', 1, 138, 'B3');
INSERT INTO `store` VALUES ('222', 'monitor', '222', 1, 139, 'B6');
INSERT INTO `store` VALUES ('ssss', 'monitor', 'sss', 1, 140, 'B6');
INSERT INTO `store` VALUES ('ssss111', 'monitor', 'sss111', 1, 141, 'B6');
INSERT INTO `store` VALUES ('2222', 'monitor', '221111', 1, 142, 'B6');
INSERT INTO `store` VALUES ('reetet', 'monitor', 'erte', 1, 143, 'B6');
INSERT INTO `store` VALUES ('lll', 'monitor', 'kkk', 1, 144, 'B6');
INSERT INTO `store` VALUES ('reetetkik', 'monitor', 'erte', 1, 145, 'B3');
INSERT INTO `store` VALUES ('555', 'monitor', '5555', 1, 146, 'B6');
INSERT INTO `store` VALUES ('22222342', 'monitor', '42342', 1, 147, 'B6');
INSERT INTO `store` VALUES ('31231', 'monitor', '2321', 198, 148, 'B6');

-- --------------------------------------------------------

-- 
-- Table structure for table `store_del`
-- 

CREATE TABLE `store_del` (
  `product_code` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `brand` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `id` int(50) NOT NULL auto_increment,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `product_code` (`product_code`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='ตารางเก็บข้อมูลอุปกรณ์' AUTO_INCREMENT=149 ;

-- 
-- Dumping data for table `store_del`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `user`
-- 

CREATE TABLE `user` (
  `id` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_employee` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `ext` int(5) NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `id_employee` (`id_employee`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- 
-- Dumping data for table `user`
-- 

INSERT INTO `user` VALUES ('1', 'tck', '81dc9bdb52d04dc20036dbd8313ed055', 'RSHCB13_389', 'Nattapong T.', 'IT', 33871);
INSERT INTO `user` VALUES ('2', 'bank', '81dc9bdb52d04dc20036dbd8313ed055', 'RSHCB13_388', 'Chaowalit K.', 'IT', 33421);

-- --------------------------------------------------------

-- 
-- Table structure for table `withdraw`
-- 

CREATE TABLE `withdraw` (
  `ID` int(11) NOT NULL auto_increment,
  `Description` varchar(50) NOT NULL,
  `Quantity` tinyint(4) NOT NULL,
  `Cost_Center` int(11) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Manager` varchar(50) NOT NULL,
  `Owner` varchar(50) NOT NULL,
  `En` varchar(50) NOT NULL,
  `Ext` int(11) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY  (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

-- 
-- Dumping data for table `withdraw`
-- 

INSERT INTO `withdraw` VALUES (15, 'monitor log code112', 1, 3434, 'efdg', 'gvds', 'dsfgvbfds', '66666', 66666, '2013-10-03');
INSERT INTO `withdraw` VALUES (17, 'dsfs dfss 1fdsfs', 2, 2, '2', '2', '2', '2', 2, '2013-10-05');
INSERT INTO `withdraw` VALUES (16, 'dsfs dfss 1fdsfs', 2, 2, '2', '2', '2', '2', 2, '2013-10-05');
INSERT INTO `withdraw` VALUES (13, '33552', 1, 0, 'sdsa', 'asdas', 'sdas', 'sdas', 2323, '2013-10-02');
INSERT INTO `withdraw` VALUES (14, '2388008', 2, 0, 'w', 'w', 'w', 'w', 22, '2013-10-02');
