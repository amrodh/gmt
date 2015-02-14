-- phpMyAdmin SQL Dump
-- version 3.5.8.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 14, 2015 at 06:49 PM
-- Server version: 5.5.35
-- PHP Version: 5.4.23

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE IF NOT EXISTS `banner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `page` (`page`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `page`, `image`, `creation_date`) VALUES
(5, 'home', 'phpshWzN8_1421119366', '2015-01-13 03:22:46'),
(7, 'booking', 'phpYDfs70_1421810091', '2015-01-21 03:14:51'),
(8, 'holidays', 'phplBKTWG_1421811981', '2015-01-21 03:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(11) NOT NULL,
  `adult` tinyint(4) NOT NULL,
  `children` tinyint(4) NOT NULL,
  `single` int(11) NOT NULL,
  `double` int(11) NOT NULL,
  `triple` int(11) NOT NULL,
  `date` date NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `package_id` (`package_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `package_id`, `adult`, `children`, `single`, `double`, `triple`, `date`, `creation_date`, `user_id`, `status`) VALUES
(1, 6, 11, 22, 500, 2200, 3000, '2015-01-31', '2015-01-10 02:14:17', 106, 'Awaiting Cost');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  KEY `name_2` (`name`),
  KEY `name_3` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `creation_date`, `path`) VALUES
(1, 'Visit Egypt', '2015-01-07 19:49:13', 'visit-egypt'),
(2, 'International Travel', '2015-01-07 19:49:13', 'international'),
(3, 'Hajj and Umra', '2015-01-07 19:49:20', 'hajj');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `department` varchar(255) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `department`, `creation_date`) VALUES
(2, 90, 'Sales', '2015-01-09 20:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `feature`
--

CREATE TABLE IF NOT EXISTS `feature` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `package_id` (`package_id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `feature`
--

INSERT INTO `feature` (`id`, `package_id`, `category_id`, `creation_date`) VALUES
(4, 5, 1, '2015-01-18 04:12:49'),
(6, 13, 2, '2015-01-21 03:34:22'),
(7, 12, 1, '2015-01-21 03:34:40'),
(8, 11, 1, '2015-01-21 03:34:43'),
(9, 10, 2, '2015-01-21 03:34:46'),
(10, 8, 2, '2015-01-21 03:35:25'),
(11, 6, 2, '2015-01-21 03:35:33');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE IF NOT EXISTS `package` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `sub_category` int(11) NOT NULL,
  `includes` text NOT NULL,
  `excludes` text NOT NULL,
  `highlights` text NOT NULL,
  `days` tinyint(4) NOT NULL,
  `nights` tinyint(4) NOT NULL,
  `single` int(11) NOT NULL,
  `double` int(11) NOT NULL,
  `optional` text NOT NULL,
  `terms` text NOT NULL,
  `itinerary` text NOT NULL,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sub_category` (`sub_category`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `creation_date`, `sub_category`, `includes`, `excludes`, `highlights`, `days`, `nights`, `single`, `double`, `optional`, `terms`, `itinerary`, `title`) VALUES
(5, '2015-01-09 15:21:10', 3, '<ul>\n	<li><strong>This is the exludes&nbsp;</strong></li>\n	<li><strong>1</strong></li>\n	<li><strong>2</strong></li>\n	<li><strong>3</strong></li>\n	<li><strong>3</strong></li>\n</ul>\n', '<hr />\n<p>Excludes<em>&nbsp;yes it is</em></p>\n\n<ol>\n	<li><em>1</em></li>\n	<li><em>2</em></li>\n	<li><em>3</em></li>\n	<li>&nbsp;</li>\n</ol>\n', '<p><s>Hightlightssss</s></p>\n', 5, 4, 500, 1000, '<blockquote>\n<p>sssssssssssssssssssssssssssssssssssssssssssssssskskjsks</p>\n\n<p>s</p>\n\n<p>s</p>\n\n<p>ss</p>\n</blockquote>\n', '<ul>\n	<li>22222</li>\n	<li>2</li>\n	<li>2</li>\n	<li>2</li>\n	<li>2</li>\n	<li>2</li>\n</ul>\n', '<ol>\n	<li>2</li>\n	<li>2</li>\n	<li>2</li>\n	<li>2</li>\n	<li>2</li>\n</ol>\n', 'Aswan Beauty'),
(6, '2015-01-09 15:35:38', 4, '<ul>\n	<li>1 night accommodation in London in a standard room on meal basis as below.</li>\n	<li>2 nights in Amsterdam, 1 night in Rhineland, 2 nights in Lucerne and 2 nights in Paris in standard rooms.</li>\n	<li>Daily buffet breakfasts and 3 dinners as mentioned in the programe.</li>\n	<li>Round trip economy class airline ticket on EgyptAir, daily departure.</li>\n	<li>Sightseeing tours as per the programe below.</li>\n	<li>Headsets throughtout the tour.</li>\n	<li>Round trip transportation between London and the Channel ports, for the Continent.</li>\n	<li>Cross-Channel ferry and Rhine cruise</li>\n	<li>Touring by private first class air conditioned motorcoach.</li>\n	<li>Services of a professional tour director while touring.</li>\n	<li>Local Guides for city sightseeing in Amsterdam and Paris.</li>\n	<li>Gratuities to tour director and driver.</li>\n</ul>\n', '<ul>\n	<li>1 night accommodation in London in a standard room on meal basis as below.</li>\n	<li>2 nights in Amsterdam, 1 night in Rhineland, 2 nights in Lucerne and 2 nights in Paris in standard rooms.</li>\n	<li>Daily buffet breakfasts and 3 dinners as mentioned in the programe.</li>\n	<li>Round trip economy class airline ticket on EgyptAir, daily departure.</li>\n	<li>Sightseeing tours as per the programe below.</li>\n	<li>Headsets throughtout the tour.</li>\n	<li>Round trip transportation between London and the Channel ports, for the Continent.</li>\n	<li>Cross-Channel ferry and Rhine cruise</li>\n	<li>Touring by private first class air conditioned motorcoach.</li>\n	<li>Services of a professional tour director while touring.</li>\n	<li>Local Guides for city sightseeing in Amsterdam and Paris.</li>\n	<li>Gratuities to tour director and driver.</li>\n</ul>\n', '<ul>\n	<li>1 night accommodation in London in a standard room on meal basis as below.</li>\n	<li>2 nights in Amsterdam, 1 night in Rhineland, 2 nights in Lucerne and 2 nights in Paris in standard rooms.</li>\n	<li>Daily buffet breakfasts and 3 dinners as mentioned in the programe.</li>\n	<li>Round trip economy class airline ticket on EgyptAir, daily departure.</li>\n	<li>Sightseeing tours as per the programe below.</li>\n	<li>Headsets throughtout the tour.</li>\n	<li>Round trip transportation between London and the Channel ports, for the Continent.</li>\n	<li>Cross-Channel ferry and Rhine cruise</li>\n	<li>Touring by private first class air conditioned motorcoach.</li>\n	<li>Services of a professional tour director while touring.</li>\n	<li>Local Guides for city sightseeing in Amsterdam and Paris.</li>\n	<li>Gratuities to tour director and driver.</li>\n</ul>\n', 7, 6, 500, 1000, '<ul>\n	<li>1 night accommodation in London in a standard room on meal basis as below.</li>\n	<li>2 nights in Amsterdam, 1 night in Rhineland, 2 nights in Lucerne and 2 nights in Paris in standard rooms.</li>\n	<li>Daily buffet breakfasts and 3 dinners as mentioned in the programe.</li>\n	<li>Round trip economy class airline ticket on EgyptAir, daily departure.</li>\n	<li>Sightseeing tours as per the programe below.</li>\n	<li>Headsets throughtout the tour.</li>\n	<li>Round trip transportation between London and the Channel ports, for the Continent.</li>\n	<li>Cross-Channel ferry and Rhine cruise</li>\n	<li>Touring by private first class air conditioned motorcoach.</li>\n	<li>Services of a professional tour director while touring.</li>\n	<li>Local Guides for city sightseeing in Amsterdam and Paris.</li>\n	<li>Gratuities to tour director and driver.</li>\n</ul>\n', '<ul>\n	<li>1 night accommodation in London in a standard room on meal basis as below.</li>\n	<li>2 nights in Amsterdam, 1 night in Rhineland, 2 nights in Lucerne and 2 nights in Paris in standard rooms.</li>\n	<li>Daily buffet breakfasts and 3 dinners as mentioned in the programe.</li>\n	<li>Round trip economy class airline ticket on EgyptAir, daily departure.</li>\n	<li>Sightseeing tours as per the programe below.</li>\n	<li>Headsets throughtout the tour.</li>\n	<li>Round trip transportation between London and the Channel ports, for the Continent.</li>\n	<li>Cross-Channel ferry and Rhine cruise</li>\n	<li>Touring by private first class air conditioned motorcoach.</li>\n	<li>Services of a professional tour director while touring.</li>\n	<li>Local Guides for city sightseeing in Amsterdam and Paris.</li>\n	<li>Gratuities to tour director and driver.</li>\n</ul>\n', '<ul>\n	<li>1 night accommodation in London in a standard room on meal basis as below.</li>\n	<li>2 nights in Amsterdam, 1 night in Rhineland, 2 nights in Lucerne and 2 nights in Paris in standard rooms.</li>\n	<li>Daily buffet breakfasts and 3 dinners as mentioned in the programe.</li>\n	<li>Round trip economy class airline ticket on EgyptAir, daily departure.</li>\n	<li>Sightseeing tours as per the programe below.</li>\n	<li>Headsets throughtout the tour.</li>\n	<li>Round trip transportation between London and the Channel ports, for the Continent.</li>\n	<li>Cross-Channel ferry and Rhine cruise</li>\n	<li>Touring by private first class air conditioned motorcoach.</li>\n	<li>Services of a professional tour director while touring.</li>\n	<li>Local Guides for city sightseeing in Amsterdam and Paris.</li>\n	<li>Gratuities to tour director and driver.</li>\n</ul>\n', 'New York '),
(8, '2015-01-10 18:11:19', 7, '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', 5, 4, 5678, 567, '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', 'Miami Beaches'),
(9, '2015-01-10 18:19:58', -1, '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', 5, 4, 456789, 45678, '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', 'Mekka and Madina'),
(10, '2015-01-10 18:20:43', 8, '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', 5, 4, 34567, 45678, '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide</li>\n</ul>\n', 'Barcelona'),
(11, '2015-01-15 01:20:57', 9, '<ul>\n	<li>1 night accommodation in London in a standard room on meal basis as below.</li>\n	<li>2 nights in Amsterdam, 1 night in Rhineland, 2 nights in Lucerne and 2 nights in Paris in standard rooms.</li>\n	<li>Daily buffet breakfasts and 3 dinners as mentioned in the programe.</li>\n	<li>Round trip economy class airline ticket on EgyptAir, daily departure.</li>\n	<li>Sightseeing tours as per the programe below.</li>\n	<li>Headsets throughtout the tour.</li>\n	<li>Round trip transportation between London and the Channel ports, for the Continent.</li>\n	<li>Cross-Channel ferry and Rhine cruise</li>\n	<li>Touring by private first class air conditioned motorcoach.</li>\n	<li>Services of a professional tour director while touring.</li>\n	<li>Local Guides for city sightseeing in Amsterdam and Paris.</li>\n	<li>Gratuities to tour director and driver.</li>\n	<li>&nbsp;</li>\n</ul>\n', '<ul>\n	<li>1 night accommodation in London in a standard room on meal basis as below.</li>\n	<li>2 nights in Amsterdam, 1 night in Rhineland, 2 nights in Lucerne and 2 nights in Paris in standard rooms.</li>\n	<li>Daily buffet breakfasts and 3 dinners as mentioned in the programe.</li>\n	<li>Round trip economy class airline ticket on EgyptAir, daily departure.</li>\n	<li>Sightseeing tours as per the programe below.</li>\n	<li>Headsets throughtout the tour.</li>\n	<li>Round trip transportation between London and the Channel ports, for the Continent.</li>\n	<li>Cross-Channel ferry and Rhine cruise</li>\n	<li>Touring by private first class air conditioned motorcoach.</li>\n	<li>Services of a professional tour director while touring.</li>\n	<li>Local Guides for city sightseeing in Amsterdam and Paris.</li>\n	<li>Gratuities to tour director and driver.</li>\n	<li>&nbsp;</li>\n</ul>\n', '<ul>\n	<li>1 night accommodation in London in a standard room on meal basis as below.</li>\n	<li>2 nights in Amsterdam, 1 night in Rhineland, 2 nights in Lucerne and 2 nights in Paris in standard rooms.</li>\n	<li>Daily buffet breakfasts and 3 dinners as mentioned in the programe.</li>\n	<li>Round trip economy class airline ticket on EgyptAir, daily departure.</li>\n	<li>Sightseeing tours as per the programe below.</li>\n	<li>Headsets throughtout the tour.</li>\n	<li>Round trip transportation between London and the Channel ports, for the Continent.</li>\n	<li>Cross-Channel ferry and Rhine cruise</li>\n	<li>Touring by private first class air conditioned motorcoach.</li>\n	<li>Services of a professional tour director while touring.</li>\n	<li>Local Guides for city sightseeing in Amsterdam and Paris.</li>\n	<li>Gratuities to tour director and driver.</li>\n	<li>&nbsp;</li>\n</ul>\n', 5, 4, 500, 1000, '<ul>\n	<li>1 night accommodation in London in a standard room on meal basis as below.</li>\n	<li>2 nights in Amsterdam, 1 night in Rhineland, 2 nights in Lucerne and 2 nights in Paris in standard rooms.</li>\n	<li>Daily buffet breakfasts and 3 dinners as mentioned in the programe.</li>\n	<li>Round trip economy class airline ticket on EgyptAir, daily departure.</li>\n	<li>Sightseeing tours as per the programe below.</li>\n	<li>Headsets throughtout the tour.</li>\n	<li>Round trip transportation between London and the Channel ports, for the Continent.</li>\n	<li>Cross-Channel ferry and Rhine cruise</li>\n	<li>Touring by private first class air conditioned motorcoach.</li>\n	<li>Services of a professional tour director while touring.</li>\n	<li>Local Guides for city sightseeing in Amsterdam and Paris.</li>\n	<li>Gratuities to tour director and driver.</li>\n	<li>&nbsp;</li>\n</ul>\n', '<ul>\n	<li>1 night accommodation in London in a standard room on meal basis as below.</li>\n	<li>2 nights in Amsterdam, 1 night in Rhineland, 2 nights in Lucerne and 2 nights in Paris in standard rooms.</li>\n	<li>Daily buffet breakfasts and 3 dinners as mentioned in the programe.</li>\n	<li>Round trip economy class airline ticket on EgyptAir, daily departure.</li>\n	<li>Sightseeing tours as per the programe below.</li>\n	<li>Headsets throughtout the tour.</li>\n	<li>Round trip transportation between London and the Channel ports, for the Continent.</li>\n	<li>Cross-Channel ferry and Rhine cruise</li>\n	<li>Touring by private first class air conditioned motorcoach.</li>\n	<li>Services of a professional tour director while touring.</li>\n	<li>Local Guides for city sightseeing in Amsterdam and Paris.</li>\n	<li>Gratuities to tour director and driver.</li>\n	<li>&nbsp;</li>\n</ul>\n', '<ul>\n	<li>1 night accommodation in London in a standard room on meal basis as below.</li>\n	<li>2 nights in Amsterdam, 1 night in Rhineland, 2 nights in Lucerne and 2 nights in Paris in standard rooms.</li>\n	<li>Daily buffet breakfasts and 3 dinners as mentioned in the programe.</li>\n	<li>Round trip economy class airline ticket on EgyptAir, daily departure.</li>\n	<li>Sightseeing tours as per the programe below.</li>\n	<li>Headsets throughtout the tour.</li>\n	<li>Round trip transportation between London and the Channel ports, for the Continent.</li>\n	<li>Cross-Channel ferry and Rhine cruise</li>\n	<li>Touring by private first class air conditioned motorcoach.</li>\n	<li>Services of a professional tour director while touring.</li>\n	<li>Local Guides for city sightseeing in Amsterdam and Paris.</li>\n	<li>Gratuities to tour director and driver.</li>\n	<li>&nbsp;</li>\n</ul>\n', 'TEST_1'),
(12, '2015-01-15 03:15:32', 10, '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide.</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide.</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide.</li>\n</ul>\n', 5, 4, 1500, 2500, '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide.</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide.</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide.</li>\n</ul>\n', 'The Golden Nile'),
(13, '2015-01-15 04:05:13', 5, '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide.</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide.</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide.</li>\n</ul>\n', 5, 4, 3456, 456789, '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide.</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide.</li>\n</ul>\n', '<ul>\n	<li>4 nights accommodation in Cairo based on bed and breakfast, in standard room in Semiramis Hotel or similar.</li>\n	<li>4 nights cruise based on sonesta nile cruise or similar</li>\n	<li>Private transfers to Cairo, Luxor &amp; Aswan upon arrival &amp; departure.</li>\n	<li>Half day visit to the Pyramids &amp; Sphinx.</li>\n	<li>Half day visit to the Egyptian Museum</li>\n	<li>English speaking guide.</li>\n</ul>\n', 'City of Love');

-- --------------------------------------------------------

--
-- Table structure for table `package_image`
--

CREATE TABLE IF NOT EXISTS `package_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_id` int(11) NOT NULL,
  `image` varchar(500) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `image` (`image`),
  KEY `package_id` (`package_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `package_image`
--

INSERT INTO `package_image` (`id`, `package_id`, `image`, `creation_date`) VALUES
(22, 5, 'php8z4tPQ_1', '2015-01-09 17:39:26'),
(23, 5, 'phpjzmNsG_2', '2015-01-09 17:39:26'),
(24, 5, 'phpsbl95v_3', '2015-01-09 17:39:26'),
(25, 5, 'phpNJfxbJ_25', '2015-01-09 17:40:28'),
(26, 5, 'phpSvQ7lc_26', '2015-01-09 17:40:28'),
(27, 5, 'phpolcSFK_27', '2015-01-09 17:41:29'),
(28, 5, 'phpttGkYN_28', '2015-01-09 17:41:30'),
(29, 5, 'phpIavUgR_29', '2015-01-09 17:41:30'),
(30, 5, 'phpZUnyzU_30', '2015-01-09 17:41:30'),
(31, 6, 'phpNUiz0q_31', '2015-01-09 17:41:58'),
(32, 6, 'phpMb99EF_32', '2015-01-09 17:41:58'),
(33, 6, 'phpJBHPjU_33', '2015-01-09 17:41:58'),
(34, 6, 'phpVMpd2h_34', '2015-01-09 17:47:44'),
(35, 6, 'php9jpCT6_35', '2015-01-09 17:47:44'),
(36, 6, 'phpHl5bLV_36', '2015-01-09 17:47:44'),
(37, 11, 'phpiKA0zL_37', '2015-01-15 01:21:12'),
(38, 11, 'phpHP3rsn_38', '2015-01-15 01:21:12'),
(39, 11, 'phpMSqUkZ_39', '2015-01-15 01:21:12'),
(40, 12, 'php3Und6h_40', '2015-01-15 03:15:41'),
(41, 12, 'php3zpRuq_41', '2015-01-15 03:15:42'),
(42, 12, 'phpBAkwTy_42', '2015-01-15 03:15:42'),
(43, 13, 'phpYLW7Y9_43', '2015-01-15 04:05:28'),
(44, 13, 'phpFu7Jga_44', '2015-01-15 04:05:28'),
(45, 13, 'phpE4Hnya_45', '2015-01-15 04:05:28'),
(46, 8, 'phpxPYlxd_46', '2015-01-21 03:35:05'),
(47, 8, 'phpNRH9JU_47', '2015-01-21 03:35:06'),
(48, 8, 'phpn231WB_48', '2015-01-21 03:35:06'),
(49, 10, 'phpSWG8MU_49', '2015-01-21 03:36:09'),
(50, 10, 'phpLXwDfj_50', '2015-01-21 03:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `social_links`
--

CREATE TABLE IF NOT EXISTS `social_links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `name_2` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE IF NOT EXISTS `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`id`, `name`, `category_id`, `creation_date`, `type`) VALUES
(1, 'Aswan', 1, '2015-01-07 23:33:00', '1'),
(2, 'Exotic', 1, '2015-01-07 23:33:00', '2'),
(3, 'Luxor', 1, '2015-01-07 23:39:58', '1'),
(4, 'United States', 2, '2015-01-08 00:14:05', '1'),
(5, 'Europe', 2, '2015-01-08 00:14:05', '1'),
(6, 'Paris', 2, '2015-01-10 18:09:49', '1'),
(7, 'Exotic', 2, '2015-01-10 18:10:41', '2'),
(8, 'Beach', 2, '2015-01-10 18:20:23', '2'),
(9, 'Historical Holidays', 1, '2015-01-15 01:14:51', '1'),
(10, 'Cairo', 1, '2015-01-15 03:14:33', '1'),
(12, 'Honeymoon', 2, '2015-01-15 03:47:30', '2'),
(13, 'Cruises', 2, '2015-01-15 03:47:41', '2'),
(14, 'Far East', 2, '2015-01-15 03:48:21', '1'),
(15, 'Rail Europe', 2, '2015-01-15 03:48:34', '2'),
(16, 'The Americas', 2, '2015-01-15 03:48:43', '1'),
(17, 'Africa', 2, '2015-01-15 03:48:49', '1'),
(18, 'Honeymoon', 1, '2015-01-15 03:49:16', '2'),
(19, 'Special', 1, '2015-01-15 03:49:23', '2'),
(20, 'Seasonal', 1, '2015-01-15 03:49:50', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `password_salt` varchar(8) NOT NULL,
  `birthday` date NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_valid` tinyint(1) NOT NULL,
  `date_joined` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=107 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `first_name`, `last_name`, `location`, `phone`, `password`, `password_salt`, `birthday`, `is_active`, `is_valid`, `date_joined`) VALUES
(1, 'root', 'amrsamo75@gmail.com', 'Amr', 'Bakr', 'Egypt', '010000000', 'b95f02330379a91c53b07aa04cd7decc', '12345678', '0000-00-00', 1, 1, '2014-08-25 12:41:35'),
(2, 'Sara', 'sara@sara.com', 'Sara', 'Nahal', 'Egypt', '010000000', 'b95f02330379a91c53b07aa04cd7decc', '12345678', '0000-00-00', 0, 1, '2014-08-25 13:57:05'),
(4, 'Valencia.Ling_119', 'Valencia.Ling_119@test.com', 'Valencia', 'Ling', 'Egypt', '834083228', 'e7e00406046374858de8f8ab7a40a313', 'K8arYyEk', '0000-00-00', 1, 1, '2014-08-26 10:25:49'),
(5, 'Art.Erich_7146', 'Art.Erich_7146@test.com', 'Art', 'Erich', 'Egypt', '451852471', 'e0b54c7f103c94b749d0b81add6cfa19', 'o73KxVlZ', '0000-00-00', 0, 1, '2014-08-26 10:25:49'),
(6, 'Elin.Jolie_5263', 'Elin.Jolie_5263@test.com', 'Elin', 'Jolie', 'Egypt', '993281141', '44d36fa1bf194094dd86d97238b5d842', '0LUpb1nX', '0000-00-00', 0, 1, '2014-08-26 10:25:49'),
(7, 'Giovanni.Randall_732', 'Giovanni.Randall_732@test.com', 'Giovanni', 'Randall', 'Egypt', '466143058', '5977e5d88402951697b2a2769c047e3d', '6RhlpK3n', '0000-00-00', 0, 1, '2014-08-26 10:25:49'),
(8, 'Russ.Kendrick_8818', 'Russ.Kendrick_8818@test.com', 'Russ', 'Kendrick', 'Egypt', '677285475', 'b33dc7d819bbf3b272c4681aa07baece', '1igF2ZIY', '0000-00-00', 0, 1, '2014-08-26 10:25:49'),
(9, 'Dan.Giovanni_5895', 'Dan.Giovanni_5895@test.com', 'Dan', 'Giovanni', 'Egypt', '338777188', '472e33f86b209f5ca42e79a2ef3c2de2', 'wJ9OWLcR', '0000-00-00', 1, 0, '2014-08-26 10:25:50'),
(10, 'Hubert.Terrence_7652', 'Hubert.Terrence_7652@test.com', 'Hubert', 'Terrence', 'Egypt', '348550548', 'd82ea8fd0f020949fd6aab82e790bfda', 'uG0fYhue', '0000-00-00', 1, 0, '2014-08-26 10:25:50'),
(11, 'Lashon.Patty_655', 'Lashon.Patty_655@test.com', 'Lashon', 'Patty', 'Egypt', '459558744', '3d0996079d353a9a3fd84302e3087cf6', 'mqIaZ66b', '0000-00-00', 0, 1, '2014-08-26 10:25:50'),
(12, 'Margarito.Lewis_9452', 'Margarito.Lewis_9452@test.com', 'Margarito', 'Lewis', 'Egypt', '760540877', 'f395d957e73ff06fec5888b2f216145f', '8Fd63Efv', '0000-00-00', 1, 0, '2014-08-26 10:25:50'),
(13, 'Wanita.Rhonda_4108', 'Wanita.Rhonda_4108@test.com', 'Wanita', 'Rhonda', 'Egypt', '101284549', '4c1c655ab9bc52371b3f9fd3da1dc3b9', 'zJK4TBkb', '0000-00-00', 0, 1, '2014-08-26 10:25:50'),
(14, 'Valencia.Neva_9549', 'Valencia.Neva_9549@test.com', 'Valencia', 'Neva', 'Egypt', '646428500', '2adedfb47a9f7cfdacc7a472bc347d91', 'PZjiG2Ea', '0000-00-00', 1, 0, '2014-08-26 10:25:50'),
(15, 'Luciano.Rodolfo_5979', 'Luciano.Rodolfo_5979@test.com', 'Luciano', 'Rodolfo', 'Egypt', '649939040', 'be011e970d808bb4aeed9d89764df7fb', '0BEdRJjL', '0000-00-00', 0, 0, '2014-08-26 10:25:50'),
(16, 'Elisha.Kenny_3901', 'Elisha.Kenny_3901@test.com', 'Elisha', 'Kenny', 'Egypt', '355712767', '6d452d93888d24bd7e1e3d7ed8eeee0d', 'K17xtCJW', '0000-00-00', 0, 1, '2014-08-26 10:25:50'),
(17, 'Rosann.Nathalie_5713', 'Rosann.Nathalie_5713@test.com', 'Rosann', 'Nathalie', 'Egypt', '740356866', '41d0c4e839a81156615050f0a82ac75c', 'arQ6rIU9', '0000-00-00', 0, 0, '2014-08-26 10:25:50'),
(18, 'Milo.Lance_8448', 'Milo.Lance_8448@test.com', 'Milo', 'Lance', 'Egypt', '289811089', 'a3c5fd402d43b4634a4bd759401b6670', 'AclxCc7I', '0000-00-00', 1, 0, '2014-08-26 10:25:50'),
(19, 'Shavonne.Sheridan_3428', 'Shavonne.Sheridan_3428@test.com', 'Shavonne', 'Sheridan', 'Egypt', '934294345', 'df796922a62706ec7131c7355894cbe7', '1YAtSDV2', '0000-00-00', 0, 0, '2014-08-26 10:25:50'),
(20, 'Lashell.Maia_6718', 'Lashell.Maia_6718@test.com', 'Lashell', 'Maia', 'Egypt', '384220855', '1cc37c073b1f733ea0114d2560240aa0', '61yeHbvY', '0000-00-00', 0, 1, '2014-08-26 10:25:50'),
(21, 'Rufus.Merle_2617', 'Rufus.Merle_2617@test.com', 'Rufus', 'Merle', 'Egypt', '195324631', 'a5a03b950e7dcf38a24044047f9e58e2', 'RXDpwHsL', '0000-00-00', 1, 1, '2014-08-26 10:25:50'),
(22, 'Marhta.Patty_674', 'Marhta.Patty_674@test.com', 'Marhta', 'Patty', 'Egypt', '625368157', 'cc0e27fde76d33eb69f40c045f374743', 'XscfuGnI', '0000-00-00', 1, 1, '2014-08-26 10:25:50'),
(23, 'Sheba.Lizzie_401', 'Sheba.Lizzie_401@test.com', 'Sheba', 'Lizzie', 'Egypt', '723800288', 'afd6388d66fec6a59328b1e8ec17cf05', 'AHulRU8e', '0000-00-00', 1, 1, '2014-08-26 10:25:50'),
(24, 'Andreas.Houston_7134', 'Andreas.Houston_7134@test.com', 'Andreas', 'Houston', 'Egypt', '40571304', '123de70b53e0a27c93249ee99814fe43', 'jCFE70ua', '0000-00-00', 0, 0, '2014-08-26 10:25:50'),
(25, 'Bradley.Mel_9684', 'Bradley.Mel_9684@test.com', 'Bradley', 'Mel', 'Egypt', '935291022', 'e723ff816a6dcfbf01876992c766bf3a', 'qHw6IOsW', '0000-00-00', 0, 0, '2014-08-26 10:25:50'),
(26, 'Odis.Elijah_901', 'Odis.Elijah_901@test.com', 'Odis', 'Elijah', 'Egypt', '932719173', '0079e5e505978715c967f7d69693d45a', 'PGZBOIER', '0000-00-00', 1, 1, '2014-08-26 10:25:50'),
(27, 'Royal.Porfirio_6773', 'Royal.Porfirio_6773@test.com', 'Royal', 'Porfirio', 'Egypt', '901962507', '867c72e50f5135de44c82d245e5368f5', 'bcXQFXSw', '0000-00-00', 0, 1, '2014-08-26 10:25:50'),
(28, 'Carline.Fransisca_9614', 'Carline.Fransisca_9614@test.com', 'Carline', 'Fransisca', 'Egypt', '121152737', '44f6dced67978e9ffd849765ea74f202', 'xC55DFXw', '0000-00-00', 0, 0, '2014-08-26 10:25:50'),
(29, 'Shavonne.Elin_3876', 'Shavonne.Elin_3876@test.com', 'Shavonne', 'Elin', 'Egypt', '442863283', '0cb351a4e00377255112d20f6184d2d4', 'GU9RA7df', '0000-00-00', 0, 1, '2014-08-26 10:25:50'),
(30, 'Sheba.Elise_1888', 'Sheba.Elise_1888@test.com', 'Sheba', 'Elise', 'Egypt', '770653326', '1de2d1fd1f214300ea4707373b83d5ae', 'J3ZWwTd5', '0000-00-00', 0, 1, '2014-08-26 10:25:51'),
(31, 'Mark.Ward_7887', 'Mark.Ward_7887@test.com', 'Mark', 'Ward', 'Egypt', '944753654', 'c66106513b676b9d07c379532f423781', 'NIPsRNzm', '0000-00-00', 1, 1, '2014-08-26 10:25:51'),
(32, 'Carline.Phung_1719', 'Carline.Phung_1719@test.com', 'Carline', 'Phung', 'Egypt', '337555167', 'd8b258c66e1bf82d7fb1ead472c25c55', 'Hex2KYtE', '0000-00-00', 1, 0, '2014-08-26 10:25:51'),
(33, 'Ivory.Elijah_3979', 'Ivory.Elijah_3979@test.com', 'Ivory', 'Elijah', 'Egypt', '325563309', '511fd9f05bb95476470e32d8ec4b9a61', 'BiS0HhBR', '0000-00-00', 0, 0, '2014-08-26 10:25:51'),
(34, 'Leonard.Dudley_2039', 'Leonard.Dudley_2039@test.com', 'Leonard', 'Dudley', 'Egypt', '125477400', '821535192f3ba4a5e5cfecbcb6464185', 'yD4OHhmA', '0000-00-00', 0, 0, '2014-08-26 10:25:51'),
(35, 'Lida.Ebonie_9750', 'Lida.Ebonie_9750@test.com', 'Lida', 'Ebonie', 'Egypt', '912751940', 'fc1153812352d9ec7a6b2afda46c49ff', 'nIjP1xa0', '0000-00-00', 1, 1, '2014-08-26 10:25:51'),
(36, 'Genaro.Dwight_2962', 'Genaro.Dwight_2962@test.com', 'Genaro', 'Dwight', 'Egypt', '509521189', '0f0d69ddafc87675c3427c641463e137', 'ePxWMcz4', '0000-00-00', 0, 0, '2014-08-26 10:25:51'),
(37, 'Maia.Shaquita_3282', 'Maia.Shaquita_3282@test.com', 'Maia', 'Shaquita', 'Egypt', '598459757', '8b98c4c60fcbd29be9c111d747bff87f', 'mlA3A7Ho', '0000-00-00', 0, 1, '2014-08-26 10:25:51'),
(38, 'Alda.Trisha_3696', 'Alda.Trisha_3696@test.com', 'Alda', 'Trisha', 'Egypt', '79787054', '953ca02e2db3954725df47428fe4ee08', 'P0hFV97A', '0000-00-00', 1, 1, '2014-08-26 10:25:51'),
(39, 'Silvana.Jolie_7806', 'Silvana.Jolie_7806@test.com', 'Silvana', 'Jolie', 'Egypt', '70438355', '0cb54d8c3bb7bf9ef2191e234b4927d9', 'D3ozR40Y', '0000-00-00', 0, 1, '2014-08-26 10:25:51'),
(40, 'Rachell.Kristi_5143', 'Rachell.Kristi_5143@test.com', 'Rachell', 'Kristi', 'Egypt', '835887360', '2ec6b3084c1216c66b0a02b62ea43927', 'BW2AZ0qn', '0000-00-00', 0, 0, '2014-08-26 10:25:51'),
(41, 'Raul.Charley_8557', 'Raul.Charley_8557@test.com', 'Raul', 'Charley', 'Egypt', '40611349', '6cefc8e1e63dfe9a2af6fe24777da1b9', 'DKHXWR0c', '0000-00-00', 0, 1, '2014-08-26 10:25:51'),
(42, 'Mike.Dwight_107', 'Mike.Dwight_107@test.com', 'Mike', 'Dwight', 'Egypt', '811648741', '440dcd4a3cc1429b1f01ae27178ddbd5', 'HUrOp5V3', '0000-00-00', 0, 1, '2014-08-26 10:25:51'),
(43, 'Ward.Edgar_9645', 'Ward.Edgar_9645@test.com', 'Ward', 'Edgar', 'Egypt', '908954581', 'ba0f83404147db961e2cbda004fa87b3', 'miVUN2fO', '0000-00-00', 1, 1, '2014-08-26 10:25:51'),
(44, 'Blythe.Marylouise_736', 'Blythe.Marylouise_736@test.com', 'Blythe', 'Marylouise', 'Egypt', '537574304', 'c3dcce2cdf36c41d5d96e411ce9722bd', 'gU4dP1eF', '0000-00-00', 0, 0, '2014-08-26 10:25:51'),
(45, 'Yahaira.Madelaine_2344', 'Yahaira.Madelaine_2344@test.com', 'Yahaira', 'Madelaine', 'Egypt', '500488062', '1573d6aadf66b246f90361f0a31c752b', 'L0t6IcTX', '0000-00-00', 0, 0, '2014-08-26 10:25:51'),
(46, 'Jesica.Lavonda_8805', 'Jesica.Lavonda_8805@test.com', 'Jesica', 'Lavonda', 'Egypt', '754912545', '6a8a17e707a220b4e6e7acd11c57b01f', 'b8bi6gAb', '0000-00-00', 0, 1, '2014-08-26 10:25:51'),
(47, 'Arletta.Aline_5020', 'Arletta.Aline_5020@test.com', 'Arletta', 'Aline', 'Egypt', '767045585', '72b30e9311d66cf7a3c3eca2d4ab9bf3', 'fENOG4k5', '0000-00-00', 0, 0, '2014-08-26 10:25:51'),
(48, 'Rhonda.Floretta_3613', 'Rhonda.Floretta_3613@test.com', 'Rhonda', 'Floretta', 'Egypt', '1026936', '8d9e1bc64737c68651812b294c0e6bd7', 'tBEBROLP', '0000-00-00', 1, 1, '2014-08-26 10:25:52'),
(49, 'Lida.Katherine_2424', 'Lida.Katherine_2424@test.com', 'Lida', 'Katherine', 'Egypt', '97649841', 'e4e86e3365a29ef2ff6498606c1548e9', 'DicgH7QT', '0000-00-00', 0, 0, '2014-08-26 10:25:52'),
(50, 'Kristopher.Matthew_8873', 'Kristopher.Matthew_8873@test.com', 'Kristopher', 'Matthew', 'Egypt', '608137155', '46c2ae5c4626bc28c93a2aebeec06fd9', 'dohPNGdb', '0000-00-00', 0, 0, '2014-08-26 10:25:52'),
(51, 'Lizzie.Shira_2820', 'Lizzie.Shira_2820@test.com', 'Lizzie', 'Shira', 'Egypt', '613125408', '2f59c42c977c9e5b1cc4503f8747a337', 'fhp6eJOZ', '0000-00-00', 0, 1, '2014-08-26 10:25:52'),
(52, 'Ranee.Floretta_4656', 'Ranee.Floretta_4656@test.com', 'Ranee', 'Floretta', 'Egypt', '201390759', 'f01ba47fc3546854f5f7fa3ad1e9828b', 'WaKWLP7a', '0000-00-00', 0, 1, '2014-08-26 10:25:52'),
(53, 'Jung.Ena_1325', 'Jung.Ena_1325@test.com', 'Jung', 'Ena', 'Egypt', '287090149', '541b9098cd6a59531c67249c0202c18e', 'UNT0uEkv', '0000-00-00', 1, 0, '2014-08-26 10:25:52'),
(54, 'Marybelle.Luba_6999', 'Marybelle.Luba_6999@test.com', 'Marybelle', 'Luba', 'Egypt', '370075373', '0e3630033d76d03a3341632c39c56d14', 'k00OgkPI', '0000-00-00', 1, 0, '2014-08-26 10:25:52'),
(55, 'Elise.Marhta_3568', 'Elise.Marhta_3568@test.com', 'Elise', 'Marhta', 'Egypt', '912331141', 'bdf78b9e12f9b77955f5304ddc57a39f', 'Z4nuZFiZ', '0000-00-00', 1, 0, '2014-08-26 10:25:52'),
(56, 'Berta.Cecila_815', 'Berta.Cecila_815@test.com', 'Berta', 'Cecila', 'Egypt', '106399621', '6825469ffba31bc4c7ffa09eaec92719', 'ddAF72yA', '0000-00-00', 1, 1, '2014-08-26 10:25:52'),
(57, 'Damion.Mitch_1324', 'Damion.Mitch_1324@test.com', 'Damion', 'Mitch', 'Egypt', '631014720', '0220270c4b817b04ec28f73e406c1c90', 'vlekeJb7', '0000-00-00', 1, 1, '2014-08-26 10:25:52'),
(58, 'Merle.Rayford_6167', 'Merle.Rayford_6167@test.com', 'Merle', 'Rayford', 'Egypt', '942491648', '620f55600e30ced04925fc915a227218', 'XydMrsng', '0000-00-00', 0, 0, '2014-08-26 10:25:52'),
(59, 'Hank.Jamey_4982', 'Hank.Jamey_4982@test.com', 'Hank', 'Jamey', 'Egypt', '760952068', '5da40512f51011e74f2fcd47af6c79c7', '2WjySrpv', '0000-00-00', 0, 1, '2014-08-26 10:25:52'),
(60, 'Hugh.Colton_2024', 'Hugh.Colton_2024@test.com', 'Hugh', 'Colton', 'Egypt', '301025624', '4367ba3142f8d254b26ee7a3f4279cc1', 'zQ1beqrT', '0000-00-00', 1, 1, '2014-08-26 10:25:52'),
(61, 'Gregorio.Porfirio_769', 'Gregorio.Porfirio_769@test.com', 'Gregorio', 'Porfirio', 'Egypt', '304713442', 'c18d699f6000027cdc9cabad960048e6', 'UTXe0bBo', '0000-00-00', 0, 1, '2014-08-26 10:25:52'),
(62, 'Yee.Joselyn_7812', 'Yee.Joselyn_7812@test.com', 'Yee', 'Joselyn', 'Egypt', '52114406', 'aa51cd92f94c21b69bb32f17ea24fd56', 'Kd8owbpA', '0000-00-00', 1, 0, '2014-08-26 10:25:52'),
(63, 'Odis.Ward_7404', 'Odis.Ward_7404@test.com', 'Odis', 'Ward', 'Egypt', '696336588', 'c9dc99742aae7b75b537c7eb72b832ad', 'LszYvJWm', '0000-00-00', 1, 0, '2014-08-26 10:25:52'),
(64, 'Blossom.Elise_5320', 'Blossom.Elise_5320@test.com', 'Blossom', 'Elise', 'Egypt', '92521573', 'a4094d255e9e46e2d7ffe284a24922f5', '7uQ6FRRv', '0000-00-00', 1, 1, '2014-08-26 10:25:52'),
(65, 'Erin.Wally_4843', 'Erin.Wally_4843@test.com', 'Erin', 'Wally', 'Egypt', '895609493', '9514d989448f650ee0358aefb2c27321', 'w6kzqwsS', '0000-00-00', 0, 0, '2014-08-26 10:25:52'),
(66, 'Rashida.Alysha_203', 'Rashida.Alysha_203@test.com', 'Rashida', 'Alysha', 'Egypt', '597356998', 'd91404afe06654b78f677a147512e1e9', 'dOXpuN6d', '0000-00-00', 1, 1, '2014-08-26 10:25:52'),
(67, 'Marylouise.Gladis_9990', 'Marylouise.Gladis_9990@test.com', 'Marylouise', 'Gladis', 'Egypt', '68525887', 'b55c67a3bf6e8389249d37db4672a3f7', 'gRUipS4J', '0000-00-00', 0, 1, '2014-08-26 10:25:52'),
(68, 'Toya.Phung_1449', 'Toya.Phung_1449@test.com', 'Toya', 'Phung', 'Egypt', '12218573', '1030b44b848b079dea5577bde63fbcb8', 'G2cqs3GA', '0000-00-00', 1, 0, '2014-08-26 10:25:53'),
(69, 'Elijah.Kirk_9308', 'Elijah.Kirk_9308@test.com', 'Elijah', 'Kirk', 'Egypt', '251412736', '668c4721c1a6e82cd97508bea2b9b435', 'BR3pq5kD', '0000-00-00', 1, 0, '2014-08-26 10:25:53'),
(70, 'Renda.Bertha_1325', 'Renda.Bertha_1325@test.com', 'Renda', 'Bertha', 'Egypt', '567593304', '02a64667c463f9e80d0e6ed2b1493835', 'DJB65Qpz', '0000-00-00', 1, 1, '2014-08-26 10:25:53'),
(71, 'Blake.Orlando_5814', 'Blake.Orlando_5814@test.com', 'Blake', 'Orlando', 'Egypt', '793418294', '9d2ab022cf74946bb81c390ecda2ea03', 'uXNwK6Lo', '0000-00-00', 1, 0, '2014-08-26 10:25:53'),
(72, 'Viola.Nathalie_4223', 'Viola.Nathalie_4223@test.com', 'Viola', 'Nathalie', 'Egypt', '965011503', 'fb5724b88eeeb954a38cbe1eb9b5aaa0', 'LiI6x4hm', '0000-00-00', 0, 1, '2014-08-26 10:25:53'),
(73, 'Collin.Mel_2449', 'Collin.Mel_2449@test.com', 'Collin', 'Mel', 'Egypt', '309136242', '55547b132a587d7f749f512bbec70ac7', 'VNVg6sFQ', '0000-00-00', 1, 1, '2014-08-26 10:25:53'),
(74, 'Raymon.Cortez_2345', 'Raymon.Cortez_2345@test.com', 'Raymon', 'Cortez', 'Egypt', '460696459', '7bee5bc15e58bdc4e24fd5d7ba957804', 'ZqgTI0F6', '0000-00-00', 1, 0, '2014-08-26 10:25:53'),
(75, 'Collin.Raymon_2700', 'Collin.Raymon_2700@test.com', 'Collin', 'Raymon', 'Egypt', '840008509', '53d8b6343fee6912974718cf231dbe41', 'eakAXEia', '0000-00-00', 1, 1, '2014-08-26 10:25:53'),
(76, 'Ervin.Leonard_2283', 'Ervin.Leonard_2283@test.com', 'Ervin', 'Leonard', 'Egypt', '562146742', '8435f241ff652b80933eaca7961773a4', 'dSiGEoIN', '0000-00-00', 1, 0, '2014-08-26 10:25:53'),
(77, 'Andreas.Ali_3547', 'Andreas.Ali_3547@test.com', 'Andreas', 'Ali', 'Egypt', '39339275', '76b56eef69a50b4fa37b97df6cddcfad', '5YwSv7N8', '0000-00-00', 0, 0, '2014-08-26 10:25:53'),
(78, 'Evie.Debrah_5739', 'Evie.Debrah_5739@test.com', 'Evie', 'Debrah', 'Egypt', '577168424', '3dc0d92fe99383cfc5a99782874fd63e', 'GqOXeAwG', '0000-00-00', 1, 1, '2014-08-26 10:25:53'),
(79, 'Tempie.Lizzie_2416', 'Tempie.Lizzie_2416@test.com', 'Tempie', 'Lizzie', 'Egypt', '919509468', '957581d73b145f0e9640598a723d902a', 'Q5z2kc2q', '0000-00-00', 0, 1, '2014-08-26 10:25:53'),
(80, 'Lou.Jacques_4187', 'Lou.Jacques_4187@test.com', 'Lou', 'Jacques', 'Egypt', '995005398', '6df3e9025a3e1050603b2e0c1b0c29a4', 'bJcldFWu', '0000-00-00', 1, 1, '2014-08-26 10:25:53'),
(81, 'Rosann.Paola_404', 'Rosann.Paola_404@test.com', 'Rosann', 'Paola', 'Egypt', '601669716', '032c37fd767236230149838fe94bedd7', 'ES3DjyLM', '0000-00-00', 1, 1, '2014-08-26 10:25:53'),
(82, 'Fawn.Keira_8548', 'Fawn.Keira_8548@test.com', 'Fawn', 'Keira', 'Egypt', '125298148', 'd08c792c91fe2a71b50e1610f79f0744', '78dvEGYn', '0000-00-00', 1, 0, '2014-08-26 10:25:53'),
(83, 'Claude.Armando_9772', 'Claude.Armando_9772@test.com', 'Claude', 'Armando', 'Egypt', '34430011', '0b7ced57b019cb47071597d2de2660c3', 'K2BtK75T', '0000-00-00', 1, 1, '2014-08-26 10:25:53'),
(84, 'Ivory.Tomas_5204', 'Ivory.Tomas_5204@test.com', 'Ivory', 'Tomas', 'Egypt', '22743186', 'd2dd6da9da979c031d59de21d31ca293', 'jNXmJi5F', '0000-00-00', 0, 1, '2014-08-26 10:25:53'),
(85, 'Paola.Kristi_7884', 'Paola.Kristi_7884@test.com', 'Paola', 'Kristi', 'Egypt', '991910837', 'e3c54354acd7e30be539a5216593ab79', 'uJqEoe6H', '0000-00-00', 0, 1, '2014-08-26 10:25:53'),
(86, 'Miranda.Margot_5431', 'Miranda.Margot_5431@test.com', 'Miranda', 'Margot', 'Egypt', '644840163', '75ca1c18018489650e44a907773eb64e', '75QjVSD2', '0000-00-00', 0, 1, '2014-08-26 10:25:53'),
(87, 'Milo.Lewis_1429', 'Milo.Lewis_1429@test.com', 'Milo', 'Lewis', 'Egypt', '687732267', '0209526e714650b13448da4c6b44881f', 'DHzDPlCM', '0000-00-00', 0, 1, '2014-08-26 10:25:53'),
(88, 'Nathalie.Kristi_9194', 'Nathalie.Kristi_9194@test.com', 'Nathalie', 'Kristi', 'Egypt', '225220872', 'c11de1111499c6a34693f99926aa707d', 'D8GyTaBl', '0000-00-00', 0, 0, '2014-08-26 10:25:53'),
(89, 'Nolan.Miguel_6049', 'Nolan.Miguel_6049@test.com', 'Nolan', 'Miguel', 'Egypt', '4808941', 'd4ad323b2d51d7622ee990a9c9b5c2ac', 'U2y3l2A6', '0000-00-00', 0, 0, '2014-08-26 10:25:54'),
(90, 'Jayson.Raymon_1594', 'Jayson.Raymon_1594@test.com', 'Jayson', 'Raymon', 'Egypt', '896122572', '1302308be30a380e8e6f13d0d30b18e6', 'vZ8ATjdH', '0000-00-00', 1, 0, '2014-08-26 10:25:54'),
(91, 'Lezlie.Fransisca_8058', 'Lezlie.Fransisca_8058@test.com', 'Lezlie', 'Fransisca', 'Egypt', '543172331', 'a9e3852b84623614c48fd3fde6409fbe', 'ZhcHtlE5', '0000-00-00', 1, 1, '2014-08-26 10:25:54'),
(92, 'Erich.Cedric_2539', 'Erich.Cedric_2539@test.com', 'Erich', 'Cedric', 'Egypt', '990205947', '874465b7f7bf4e8e88697e4b79d55507', 'xkh6ID6s', '0000-00-00', 1, 0, '2014-08-26 10:25:54'),
(93, 'Willie.Elijah_489', 'Willie.Elijah_489@test.com', 'Willie', 'Elijah', 'Egypt', '259272562', '9f5c8173e51fd1f047226f86d0107519', 'TNQZTBgn', '0000-00-00', 1, 0, '2014-08-26 10:25:54'),
(94, 'Ward.Harrison_7463', 'Ward.Harrison_7463@test.com', 'Ward', 'Harrison', 'Egypt', '484918997', '978eca21c52c9e0d9a5a50b5022f1107', 'crVX4YCR', '0000-00-00', 1, 1, '2014-08-26 10:25:54'),
(95, 'Floretta.Ranee_2675', 'Floretta.Ranee_2675@test.com', 'Floretta', 'Ranee', 'Egypt', '255816506', '6104070ad085a9d5f14983aab566c028', '3QUbDBdW', '0000-00-00', 0, 0, '2014-08-26 10:25:54'),
(96, 'Lelia.Marybelle_9926', 'Lelia.Marybelle_9926@test.com', 'Lelia', 'Marybelle', 'Egypt', '842579711', 'bc0f8eb78bb7e746ca65f54ee4913590', 'mQyyOM2w', '0000-00-00', 0, 0, '2014-08-26 10:25:54'),
(97, 'Royal.Teodoro_9206', 'Royal.Teodoro_9206@test.com', 'Royal', 'Teodoro', 'Egypt', '165450818', 'ae19e83737501701033d91993bb74719', 'csPZ5ro5', '0000-00-00', 1, 0, '2014-08-26 10:25:54'),
(98, 'Ling.Shira_1127', 'Ling.Shira_1127@test.com', 'Ling', 'Shira', 'Egypt', '825735219', '4cc435d223d7f90a8d9dbc08e0102c8e', 'stTdNU7K', '0000-00-00', 1, 0, '2014-08-26 10:25:54'),
(99, 'Miguel.Foster_458', 'Miguel.Foster_458@test.com', 'Miguel', 'Foster', 'Egypt', '557437443', '29305a7ae453aa7e176bff4a1ee4c684', 'NqaLy16Z', '0000-00-00', 1, 1, '2014-08-26 10:25:54'),
(100, 'Alfredo.John_1938', 'Alfredo.John_1938@test.com', 'Alfredo', 'John', 'Egypt', '963953273', '0c44d68d72e5bec92400911da14a46ff', 'UQQq29LN', '0000-00-00', 1, 0, '2014-08-26 10:25:54'),
(101, 'Maia.Gita_4077', 'Maia.Gita_4077@test.com', 'Maia', 'Gita', 'Egypt', '605390174', 'c42520a12fd0a971d077cb51be6a1f38', 'xjXGnWex', '0000-00-00', 0, 0, '2014-08-26 10:25:54'),
(102, 'Buddy.Garrett_7780', 'Buddy.Garrett_7780@test.com', 'Buddy', 'Garrett', 'Egypt', '261121595', '72ca0514cabbc68762c2f9a11cfa17b6', 'nnPvtuYu', '0000-00-00', 0, 0, '2014-08-26 10:25:54'),
(103, 'Lizzie.Malka_8364', 'Lizzie.Malka_8364@test.com', 'Lizzie', 'Malka', 'Egypt', '192101434', '2688cde4cb00fa5bf82d9e2f1532fea9', 'TIU1HhDG', '0000-00-00', 0, 1, '2014-08-26 10:25:54'),
(104, 'testuser', 'test@user.com', 'testing', 'ama', 'asmsms', '0101010', '0920798651a9462dc4110bde8eb112d5', '49oWEjGs', '0000-00-00', 0, 0, '2014-08-26 15:05:04'),
(105, 'amrahmed', 'amr@amr.com', 'Amr', 'Ahmed', 'Cairo', '0100000000', 'cdd1db321ee3731888092fcbac306557', 'TWw4mptZ', '0000-00-00', 0, 0, '2014-08-31 13:50:52'),
(106, 'shshshshshsh', 'amamaR2@msms.com', 'sjsjsjss', 'shshshsh', 'hshs', 'hsh', '4a28d68c7abd5b2ea427ae2e99a3290b', 'EIjq978a', '0000-00-00', 0, 0, '2014-09-07 12:00:54');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `package` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feature`
--
ALTER TABLE `feature`
  ADD CONSTRAINT `feature_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `package` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `feature_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `package_image`
--
ALTER TABLE `package_image`
  ADD CONSTRAINT `package_image_ibfk_1` FOREIGN KEY (`package_id`) REFERENCES `package` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD CONSTRAINT `sub_category_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
