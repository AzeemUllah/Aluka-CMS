-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 07:20 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marocms`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(100) NOT NULL,
  `component_id` int(100) NOT NULL,
  `component_name` varchar(50) NOT NULL,
  `sequence` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(100) NOT NULL,
  `component_id` int(100) NOT NULL,
  `component_name` varchar(50) NOT NULL,
  `sequence` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `component_id`, `component_name`, `sequence`) VALUES
(1, 1, 'cpn_meta_data', 1),
(2, 1, 'navigation_bar_style_one', 2),
(3, 1, 'page_header', 3),
(4, 1, 'profile_card_one', 4),
(5, 1, 'blog_card', 5),
(6, 1, 'coment_box', 6);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_blog_card`
--

CREATE TABLE `cpn_blog_card` (
  `id` int(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `status_icon` varchar(50) NOT NULL,
  `heading` varchar(150) NOT NULL,
  `date` varchar(100) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_blog_card`
--

INSERT INTO `cpn_blog_card` (`id`, `image`, `link`, `status`, `status_icon`, `heading`, `date`, `user_id`) VALUES
(1, 'assets/img/examples/blog8.jpg', 'https://www.google.com', 'Trending', 'trending_up', 'Hi there! This is sample Blog Card.', '27 March 2017', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_button`
--

CREATE TABLE `cpn_button` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `round` varchar(1) NOT NULL,
  `icon_name` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `size` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_button`
--

INSERT INTO `cpn_button` (`id`, `name`, `round`, `icon_name`, `color`, `type`, `size`) VALUES
(1, 'ABC', 'Y', 'favorite', 'btn-primary', 'button', 'btn-sm');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_checkbox`
--

CREATE TABLE `cpn_checkbox` (
  `id` int(100) NOT NULL,
  `checked` varchar(1) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_checkbox`
--

INSERT INTO `cpn_checkbox` (`id`, `checked`, `name`) VALUES
(1, 'Y', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_comentbox`
--

CREATE TABLE `cpn_comentbox` (
  `id` int(100) NOT NULL,
  `offset` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_comentbox`
--

INSERT INTO `cpn_comentbox` (`id`, `offset`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_comentbox_coments`
--

CREATE TABLE `cpn_comentbox_coments` (
  `id` int(100) NOT NULL,
  `commenterprofilelink` varchar(100) NOT NULL,
  `commenterimage` varchar(100) NOT NULL,
  `commenterName` varchar(50) NOT NULL,
  `commenttime` date NOT NULL,
  `coment` varchar(1000) NOT NULL,
  `numberoflikes` int(100) NOT NULL,
  `coment_box_id` int(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_comentbox_coments`
--

INSERT INTO `cpn_comentbox_coments` (`id`, `commenterprofilelink`, `commenterimage`, `commenterName`, `commenttime`, `coment`, `numberoflikes`, `coment_box_id`, `email`) VALUES
(1, 'abc.com', 'assets\\img\\faces\\avatar.jpg', 'Aabbcc', '2017-04-01', 'hi there! this coment section iss so awesom. hi there! this coment section iss so awesom. hi there! this coment section iss so awesom. hi there! this coment section iss so awesom. hi there! this coment section iss so awesom. ', 3, 1, ''),
(2, 'abc.com', 'assets\\img\\faces\\avatar.jpg', 'Aabbcc', '2017-04-01', 'hi there! this coment section iss so awesom. hi there! this coment section iss so awesom. hi there! this coment section iss so awesom. hi there! this coment section iss so awesom. hi there! this coment section iss so awesom. ', 3, 1, ''),
(4, '', '', 'a', '0000-00-00', 'a', 0, 1, 'a'),
(5, '', '', 'a', '0000-00-00', 'a', 0, 1, 'a'),
(6, '', '', 'a', '0000-00-00', 'adadadad', 0, 1, 'abc@abc.com'),
(7, '', '', 'abc', '0000-00-00', 'dadadd', 0, 1, 'abd'),
(8, '', '', 'test', '0000-00-00', 'test1', 0, 1, 'adadad'),
(9, '', '', 'a', '0000-00-00', 'a', 0, 1, 'a'),
(10, '', '', 'b', '0000-00-00', 'b', 0, 1, 'b'),
(11, '', '', '', '0000-00-00', '', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_contact_us`
--

CREATE TABLE `cpn_contact_us` (
  `id` int(100) NOT NULL,
  `heading` varchar(150) NOT NULL,
  `subtext` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_contact_us`
--

INSERT INTO `cpn_contact_us` (`id`, `heading`, `subtext`) VALUES
(1, 'Dont be shy! Whisper us!', 'Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam ');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_feature`
--

CREATE TABLE `cpn_feature` (
  `id` int(100) NOT NULL,
  `col_md` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_feature`
--

INSERT INTO `cpn_feature` (`id`, `col_md`) VALUES
(1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_feature_tiles`
--

CREATE TABLE `cpn_feature_tiles` (
  `id` int(100) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `subText` varchar(750) NOT NULL,
  `iconName` varchar(50) NOT NULL,
  `cpn_feature_id` int(100) NOT NULL,
  `color_code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_feature_tiles`
--

INSERT INTO `cpn_feature_tiles` (`id`, `heading`, `subText`, `iconName`, `cpn_feature_id`, `color_code`) VALUES
(1, 'Free Chat', 'Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.', 'chat', 1, 'icon-info'),
(2, 'Verified Users', 'Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.', 'verified_user', 1, 'icon-success'),
(3, 'Verified Users', 'Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.', 'fingerprint', 1, 'icon-danger');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_footer_style_four`
--

CREATE TABLE `cpn_footer_style_four` (
  `id` int(100) NOT NULL,
  `brandName` varchar(50) NOT NULL,
  `brandParagraph` varchar(500) NOT NULL,
  `brandAddress` varchar(250) NOT NULL,
  `columnOneHeading` varchar(50) NOT NULL,
  `columnTwoHeading` varchar(50) NOT NULL,
  `columnThreeHeading` varchar(50) NOT NULL,
  `newsLetterParagraph` varchar(50) NOT NULL,
  `subText` varchar(500) NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_footer_style_four`
--

INSERT INTO `cpn_footer_style_four` (`id`, `brandName`, `brandParagraph`, `brandAddress`, `columnOneHeading`, `columnTwoHeading`, `columnThreeHeading`, `newsLetterParagraph`, `subText`, `color`) VALUES
(1, 'abc', ' ahahah adaandakfnksa adkansak adadaahahah adaandakfnksa adkansak adada ahahah adaandakfnksa adkansak adada ahahah adaandakfnksa adkansak adada ahahah adaandakfnksa adkansak adada ahahah adaandakfnksa adkansak adada.', 'abc.com', 'Articles', 'Pages', 'Posts', 'subscribe Biatch subscribe Bitch subscribe Bitch', 'adadadad ddsadaa adassdad', 'white');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_footer_style_four_heading_one`
--

CREATE TABLE `cpn_footer_style_four_heading_one` (
  `id` int(100) NOT NULL,
  `linkAddress` varchar(250) NOT NULL,
  `linkName` varchar(50) NOT NULL,
  `footer_style_four_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_footer_style_four_heading_one`
--

INSERT INTO `cpn_footer_style_four_heading_one` (`id`, `linkAddress`, `linkName`, `footer_style_four_id`) VALUES
(1, 'Abc.com', 'abc', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_footer_style_four_heading_three`
--

CREATE TABLE `cpn_footer_style_four_heading_three` (
  `id` int(100) NOT NULL,
  `linkAddress` varchar(250) NOT NULL,
  `linkName` varchar(50) NOT NULL,
  `footer_style_four_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_footer_style_four_heading_three`
--

INSERT INTO `cpn_footer_style_four_heading_three` (`id`, `linkAddress`, `linkName`, `footer_style_four_id`) VALUES
(1, 'adada', 'dadada', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_footer_style_four_heading_two`
--

CREATE TABLE `cpn_footer_style_four_heading_two` (
  `id` int(100) NOT NULL,
  `linkAddress` varchar(250) NOT NULL,
  `linkName` varchar(50) NOT NULL,
  `footer_style_four_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_footer_style_four_heading_two`
--

INSERT INTO `cpn_footer_style_four_heading_two` (`id`, `linkAddress`, `linkName`, `footer_style_four_id`) VALUES
(1, 'aadada', 'dadadad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_footer_style_four_social_links`
--

CREATE TABLE `cpn_footer_style_four_social_links` (
  `id` int(100) NOT NULL,
  `linkAddress` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL,
  `footer_style_four_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_footer_style_four_social_links`
--

INSERT INTO `cpn_footer_style_four_social_links` (`id`, `linkAddress`, `type`, `footer_style_four_id`) VALUES
(1, 'adadda', 'facebook', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_footer_style_one`
--

CREATE TABLE `cpn_footer_style_one` (
  `id` int(100) NOT NULL,
  `brandName` varchar(50) NOT NULL,
  `brandAddress` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_footer_style_one`
--

INSERT INTO `cpn_footer_style_one` (`id`, `brandName`, `brandAddress`) VALUES
(1, 'Azeem Ullah', 'fb.com');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_footer_style_one_links`
--

CREATE TABLE `cpn_footer_style_one_links` (
  `id` int(100) NOT NULL,
  `linkName` varchar(50) NOT NULL,
  `linkAddress` varchar(250) NOT NULL,
  `footer_style_one_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_footer_style_one_links`
--

INSERT INTO `cpn_footer_style_one_links` (`id`, `linkName`, `linkAddress`, `footer_style_one_id`) VALUES
(1, 'Home', 'abc.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_footer_style_one_social_link`
--

CREATE TABLE `cpn_footer_style_one_social_link` (
  `id` int(100) NOT NULL,
  `linkAddress` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL,
  `footer_style_one_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_footer_style_one_social_link`
--

INSERT INTO `cpn_footer_style_one_social_link` (`id`, `linkAddress`, `type`, `footer_style_one_id`) VALUES
(1, 'tw.com', 'twitter', 1),
(2, 'tw.com', 'facebook', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_footer_style_three`
--

CREATE TABLE `cpn_footer_style_three` (
  `id` int(100) NOT NULL,
  `developersName` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_footer_style_three`
--

INSERT INTO `cpn_footer_style_three` (`id`, `developersName`) VALUES
(1, 'Azeem Ullah for a world with better CMS.');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_footer_style_three_links`
--

CREATE TABLE `cpn_footer_style_three_links` (
  `id` int(100) NOT NULL,
  `linkAddress` varchar(250) NOT NULL,
  `linkName` varchar(50) NOT NULL,
  `footer_style_three_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_footer_style_three_links`
--

INSERT INTO `cpn_footer_style_three_links` (`id`, `linkAddress`, `linkName`, `footer_style_three_id`) VALUES
(1, 'home.com', 'Home', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_footer_style_two`
--

CREATE TABLE `cpn_footer_style_two` (
  `id` int(100) NOT NULL,
  `brandName` varchar(50) NOT NULL,
  `brandAddress` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_footer_style_two`
--

INSERT INTO `cpn_footer_style_two` (`id`, `brandName`, `brandAddress`) VALUES
(1, 'ABC', 'abc.com');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_footer_style_two_links`
--

CREATE TABLE `cpn_footer_style_two_links` (
  `id` int(100) NOT NULL,
  `linkName` varchar(50) NOT NULL,
  `linkAddress` varchar(250) NOT NULL,
  `footer_style_two_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_footer_style_two_links`
--

INSERT INTO `cpn_footer_style_two_links` (`id`, `linkName`, `linkAddress`, `footer_style_two_id`) VALUES
(1, 'abc', 'ada', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_footer_style_two_social_link`
--

CREATE TABLE `cpn_footer_style_two_social_link` (
  `id` int(100) NOT NULL,
  `linkAddress` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL,
  `footer_style_two_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_footer_style_two_social_link`
--

INSERT INTO `cpn_footer_style_two_social_link` (`id`, `linkAddress`, `type`, `footer_style_two_id`) VALUES
(1, 'dadad', 'facebook', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_image_circle`
--

CREATE TABLE `cpn_image_circle` (
  `id` int(100) NOT NULL,
  `raised` varchar(1) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `imageAdddress` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_image_circle`
--

INSERT INTO `cpn_image_circle` (`id`, `raised`, `heading`, `imageAdddress`) VALUES
(1, 'Y', 'abc', 'assets/img/faces/christian.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_image_rounded`
--

CREATE TABLE `cpn_image_rounded` (
  `id` int(100) NOT NULL,
  `raised` varchar(1) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `imageAdddress` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_image_rounded`
--

INSERT INTO `cpn_image_rounded` (`id`, `raised`, `heading`, `imageAdddress`) VALUES
(1, 'Y', 'abc', 'assets/img/faces/card-profile5-square.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_input`
--

CREATE TABLE `cpn_input` (
  `id` int(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `label_text` varchar(100) NOT NULL,
  `floating` varchar(1) NOT NULL,
  `placeholder` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_input`
--

INSERT INTO `cpn_input` (`id`, `type`, `label_text`, `floating`, `placeholder`) VALUES
(1, 'email', 'Enter your email..', 'Y', '');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_input_with_icon`
--

CREATE TABLE `cpn_input_with_icon` (
  `id` int(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `icon_name` varchar(50) NOT NULL,
  `placeholder` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `cpn_input_with_icon`
--

INSERT INTO `cpn_input_with_icon` (`id`, `type`, `icon_name`, `placeholder`) VALUES
(1, 'email', 'group', 'Enter your email...');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_label`
--

CREATE TABLE `cpn_label` (
  `id` int(100) NOT NULL,
  `text` varchar(250) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_label`
--

INSERT INTO `cpn_label` (`id`, `text`, `color`) VALUES
(1, 'abc', 'label-info');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_meta_data`
--

CREATE TABLE `cpn_meta_data` (
  `id` int(100) NOT NULL,
  `page_tittle` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_meta_data`
--

INSERT INTO `cpn_meta_data` (`id`, `page_tittle`) VALUES
(1, 'CMS');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_navigation_bar_style_one`
--

CREATE TABLE `cpn_navigation_bar_style_one` (
  `id` int(100) NOT NULL,
  `brandName` varchar(100) NOT NULL,
  `brandNameAddress` varchar(250) NOT NULL,
  `cpn_navigation_bar_rose_links` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `cpn_navigation_bar_style_one`
--

INSERT INTO `cpn_navigation_bar_style_one` (`id`, `brandName`, `brandNameAddress`, `cpn_navigation_bar_rose_links`) VALUES
(1, 'ABC', 'abc.com', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_navigation_bar_style_one_links`
--

CREATE TABLE `cpn_navigation_bar_style_one_links` (
  `id` int(100) NOT NULL,
  `pageName` varchar(50) NOT NULL,
  `pageAddress` varchar(250) NOT NULL,
  `navigation_bar_rose_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `cpn_navigation_bar_style_one_links`
--

INSERT INTO `cpn_navigation_bar_style_one_links` (`id`, `pageName`, `pageAddress`, `navigation_bar_rose_id`) VALUES
(1, 'Home', 'home.com', 1),
(2, 'Contact Us', 'cu.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_navigation_bar_style_three`
--

CREATE TABLE `cpn_navigation_bar_style_three` (
  `id` int(100) NOT NULL,
  `brandName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_navigation_bar_style_three`
--

INSERT INTO `cpn_navigation_bar_style_three` (`id`, `brandName`) VALUES
(1, 'Bahria Unniverstry');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_navigation_bar_style_three_links`
--

CREATE TABLE `cpn_navigation_bar_style_three_links` (
  `id` int(100) NOT NULL,
  `linkAddress` varchar(50) NOT NULL,
  `linkIconName` varchar(50) NOT NULL,
  `linkName` varchar(50) NOT NULL,
  `dropdown` varchar(1) NOT NULL,
  `cpn_navigation_bar_style_three_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_navigation_bar_style_three_links`
--

INSERT INTO `cpn_navigation_bar_style_three_links` (`id`, `linkAddress`, `linkIconName`, `linkName`, `dropdown`, `cpn_navigation_bar_style_three_id`) VALUES
(1, 'index.php?page=blog', 'apps', 'blog', 'N', 1),
(2, 'abc.com', 'view_day', 'Our campus', 'Y', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_navigation_bar_style_three_links_dropdown`
--

CREATE TABLE `cpn_navigation_bar_style_three_links_dropdown` (
  `id` int(100) NOT NULL,
  `linkAddress` varchar(50) NOT NULL,
  `linkIconName` varchar(50) NOT NULL,
  `linkName` varchar(50) NOT NULL,
  `cpn_navigation_bar_style_three_links_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_navigation_bar_style_three_links_dropdown`
--

INSERT INTO `cpn_navigation_bar_style_three_links_dropdown` (`id`, `linkAddress`, `linkIconName`, `linkName`, `cpn_navigation_bar_style_three_links_id`) VALUES
(1, 'abc.com', 'dns', 'Karachi Campus', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_navigation_bar_style_two`
--

CREATE TABLE `cpn_navigation_bar_style_two` (
  `id` int(100) NOT NULL,
  `brandName` varchar(50) NOT NULL,
  `brandNameAddress` varchar(250) NOT NULL,
  `links` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_navigation_bar_style_two`
--

INSERT INTO `cpn_navigation_bar_style_two` (`id`, `brandName`, `brandNameAddress`, `links`) VALUES
(1, 'ABC', 'abc.com', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_navigation_bar_style_two_links`
--

CREATE TABLE `cpn_navigation_bar_style_two_links` (
  `id` int(100) NOT NULL,
  `pageName` varchar(50) NOT NULL,
  `pageAddress` varchar(250) NOT NULL,
  `navigation_bar_style_two_id` int(100) NOT NULL,
  `iconName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_navigation_bar_style_two_links`
--

INSERT INTO `cpn_navigation_bar_style_two_links` (`id`, `pageName`, `pageAddress`, `navigation_bar_style_two_id`, `iconName`) VALUES
(1, 'Home', 'h.com', 1, 'explore'),
(2, 'Contact Us', 'abc.com', 1, 'explore');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_navigation_pill`
--

CREATE TABLE `cpn_navigation_pill` (
  `id` int(100) NOT NULL,
  `style` varchar(10) NOT NULL,
  `tittle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_navigation_pill`
--

INSERT INTO `cpn_navigation_pill` (`id`, `style`, `tittle`) VALUES
(1, 'horizontal', 'Horizontal Bar');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_navigation_pill_content`
--

CREATE TABLE `cpn_navigation_pill_content` (
  `id` int(100) NOT NULL,
  `np_id` int(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `paragraph` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_navigation_pill_content`
--

INSERT INTO `cpn_navigation_pill_content` (`id`, `np_id`, `heading`, `paragraph`) VALUES
(1, 1, 'Hello', 'Hi There Hi There Hi There Hi There '),
(2, 1, 'Howdy', 'Howdy world Howdy world Howdy world Howdy world Howdy world ');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_page_header`
--

CREATE TABLE `cpn_page_header` (
  `id` int(100) NOT NULL,
  `backgroundImage` varchar(100) NOT NULL,
  `heading` varchar(150) NOT NULL,
  `subHeading` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_page_header`
--

INSERT INTO `cpn_page_header` (`id`, `backgroundImage`, `heading`, `subHeading`) VALUES
(1, 'assets/img/bg3.jpg', 'Hi there!', 'Hello World!');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_paragraph`
--

CREATE TABLE `cpn_paragraph` (
  `id` int(100) NOT NULL,
  `text` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cpn_pre_footer_style_one`
--

CREATE TABLE `cpn_pre_footer_style_one` (
  `id` int(100) NOT NULL,
  `tittle` varchar(500) NOT NULL,
  `social_links` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_pre_footer_style_one`
--

INSERT INTO `cpn_pre_footer_style_one` (`id`, `tittle`, `social_links`) VALUES
(1, 'Thank you for your support!', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_pre_footer_style_one_links`
--

CREATE TABLE `cpn_pre_footer_style_one_links` (
  `id` int(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `text` varchar(50) NOT NULL,
  `pre_footer_style_one_id` int(100) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_pre_footer_style_one_links`
--

INSERT INTO `cpn_pre_footer_style_one_links` (`id`, `type`, `text`, `pre_footer_style_one_id`, `address`) VALUES
(1, 'twitter', '1.6k followers', 1, ''),
(2, 'reddit', '1.6k Likes', 1, 'fb.com');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_pre_footer_style_two`
--

CREATE TABLE `cpn_pre_footer_style_two` (
  `id` int(100) NOT NULL,
  `colorType` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_pre_footer_style_two`
--

INSERT INTO `cpn_pre_footer_style_two` (`id`, `colorType`) VALUES
(1, 'dark');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_pre_footer_style_two_links`
--

CREATE TABLE `cpn_pre_footer_style_two_links` (
  `id` int(100) NOT NULL,
  `type` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `pre_footer_style_two_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_pre_footer_style_two_links`
--

INSERT INTO `cpn_pre_footer_style_two_links` (`id`, `type`, `address`, `pre_footer_style_two_id`) VALUES
(1, 'twitter', 'abc.com', 1),
(2, 'facebook', 'abc.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_profile_card_one`
--

CREATE TABLE `cpn_profile_card_one` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `desegnation` varchar(100) NOT NULL,
  `few_words` varchar(500) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `google` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_profile_card_one`
--

INSERT INTO `cpn_profile_card_one` (`id`, `name`, `link`, `pic`, `desegnation`, `few_words`, `twitter`, `google`, `facebook`, `instagram`) VALUES
(1, 'Azeem', 'https://google.com', 'assets/img/examples/card-profile4.jpg', 'Developer', 'If you gaze long enough into an abys; the abys gazes back into you.', 'https://google.com', 'https://google.com', 'https://google.com', 'https://google.com');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_profile_card_two`
--

CREATE TABLE `cpn_profile_card_two` (
  `id` int(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  `desegnation` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `few_words` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_profile_card_two`
--

INSERT INTO `cpn_profile_card_two` (`id`, `link`, `pic`, `desegnation`, `name`, `few_words`) VALUES
(1, 'https://www.google.com', 'assets/img/faces/marc.jpg', 'Founder', 'Alex Miller', 'Hi there! i dont have anything to say except; I dont have any thing to say.');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_radio`
--

CREATE TABLE `cpn_radio` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `text` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_radio`
--

INSERT INTO `cpn_radio` (`id`, `name`, `text`) VALUES
(1, 'ABC', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_select`
--

CREATE TABLE `cpn_select` (
  `id` int(100) NOT NULL,
  `style` varchar(50) NOT NULL,
  `default_text` varchar(250) NOT NULL,
  `placeholder` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_select`
--

INSERT INTO `cpn_select` (`id`, `style`, `default_text`, `placeholder`) VALUES
(1, 'fancy', 'abc def', 'aadad adada');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_select_option`
--

CREATE TABLE `cpn_select_option` (
  `id` int(100) NOT NULL,
  `select_id` int(100) NOT NULL,
  `value` varchar(50) NOT NULL,
  `text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_select_option`
--

INSERT INTO `cpn_select_option` (`id`, `select_id`, `value`, `text`) VALUES
(1, 1, 'abc', '123'),
(2, 1, 'xyz', '567');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_social_button_default`
--

CREATE TABLE `cpn_social_button_default` (
  `id` int(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `text` varchar(150) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_social_button_default`
--

INSERT INTO `cpn_social_button_default` (`id`, `address`, `text`, `type`) VALUES
(1, 'abc.com', 'Click me!', 'reddit');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_social_button_simple`
--

CREATE TABLE `cpn_social_button_simple` (
  `id` int(11) NOT NULL,
  `text` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_social_button_simple`
--

INSERT INTO `cpn_social_button_simple` (`id`, `text`, `type`, `address`) VALUES
(1, '2.5k Likes', 'facebook', 'http://facebook.com');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_social_button_small`
--

CREATE TABLE `cpn_social_button_small` (
  `id` int(100) NOT NULL,
  `address` varchar(250) NOT NULL,
  `round` varchar(1) NOT NULL,
  `type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_social_button_small`
--

INSERT INTO `cpn_social_button_small` (`id`, `address`, `round`, `type`) VALUES
(1, 'xyz.com', 'N', 'twitter'),
(2, 'xyz.com', 'Y', 'reddit');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_subscribe_style_one`
--

CREATE TABLE `cpn_subscribe_style_one` (
  `id` int(100) NOT NULL,
  `heading` varchar(500) NOT NULL,
  `description` varchar(750) NOT NULL,
  `backgroundImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_subscribe_style_one`
--

INSERT INTO `cpn_subscribe_style_one` (`id`, `heading`, `description`, `backgroundImage`) VALUES
(1, 'Subscribe to our Newsletter', 'Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.', '');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_subscribe_style_two`
--

CREATE TABLE `cpn_subscribe_style_two` (
  `id` int(100) NOT NULL,
  `description` varchar(750) NOT NULL,
  `heading` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_subscribe_style_two`
--

INSERT INTO `cpn_subscribe_style_two` (`id`, `description`, `heading`) VALUES
(1, 'Join our newsletter and get news in your inbox every week! We hate spam too, so no worries about this.', 'Get Tips & Tricks every Week!');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_table_simple`
--

CREATE TABLE `cpn_table_simple` (
  `id` int(100) NOT NULL,
  `offSet` int(1) NOT NULL,
  `heading` varchar(250) NOT NULL,
  `tableName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_table_simple`
--

INSERT INTO `cpn_table_simple` (`id`, `offSet`, `heading`, `tableName`) VALUES
(1, 2, 'Hi there!', 'products');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_tabs_card`
--

CREATE TABLE `cpn_tabs_card` (
  `id` int(100) NOT NULL,
  `simple` varchar(1) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_tabs_card`
--

INSERT INTO `cpn_tabs_card` (`id`, `simple`, `color`) VALUES
(1, 'N', 'header-success');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_tabs_card_content`
--

CREATE TABLE `cpn_tabs_card_content` (
  `id` int(100) NOT NULL,
  `tc_id` int(100) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `icon_name` varchar(50) NOT NULL,
  `paragraph` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `cpn_tabs_card_content`
--

INSERT INTO `cpn_tabs_card_content` (`id`, `tc_id`, `heading`, `icon_name`, `paragraph`) VALUES
(1, 1, 'Profile', 'face', ' I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. '),
(2, 1, 'Messages', 'chat', 'I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at. I will be the leader of a company that ends up being worth billions of dollars, because I got the answers. I understand culture. I am the nucleus. I think that’s a responsibility that I have, to push possibilities, to show people, this is the level that things could be at.');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_team`
--

CREATE TABLE `cpn_team` (
  `id` int(100) NOT NULL,
  `col_md_image` int(2) NOT NULL,
  `col_md_content` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_team`
--

INSERT INTO `cpn_team` (`id`, `col_md_image`, `col_md_content`) VALUES
(1, 6, 7);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_team_cards`
--

CREATE TABLE `cpn_team_cards` (
  `id` int(100) NOT NULL,
  `profileLink` varchar(50) NOT NULL,
  `imageLink` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tittle` varchar(50) NOT NULL,
  `message` varchar(250) NOT NULL,
  `twitterLink` varchar(50) NOT NULL,
  `facebookLink` varchar(50) NOT NULL,
  `googleLink` varchar(50) NOT NULL,
  `cpn_team_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_team_cards`
--

INSERT INTO `cpn_team_cards` (`id`, `profileLink`, `imageLink`, `name`, `tittle`, `message`, `twitterLink`, `facebookLink`, `googleLink`, `cpn_team_id`) VALUES
(1, 'abc.com', 'assets/img/faces/card-profile1-square.jpg', 'Lorem Ispam', 'Lorem Ispam', 'Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam ...', 'abc.com', 'abc.com', 'abc.com', 1),
(2, 'abc.com', 'assets/img/faces/card-profile2-square.jpg', 'Lorem Ispam', 'Lorem Ispam', 'Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam Lorem Ispam ...', 'abc.com', 'abc.com', 'abc.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cpn_textarea`
--

CREATE TABLE `cpn_textarea` (
  `id` int(100) NOT NULL,
  `label_text` varchar(250) NOT NULL,
  `floating` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_textarea`
--

INSERT INTO `cpn_textarea` (`id`, `label_text`, `floating`) VALUES
(1, '123', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_tittle`
--

CREATE TABLE `cpn_tittle` (
  `id` int(100) NOT NULL,
  `tittle_text` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_tittle`
--

INSERT INTO `cpn_tittle` (`id`, `tittle_text`, `type`) VALUES
(1, 'Hello World', 'normal'),
(2, 'Hello World', 'blog');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_tittle_with_subtittle`
--

CREATE TABLE `cpn_tittle_with_subtittle` (
  `id` int(100) NOT NULL,
  `tittle_text` varchar(100) NOT NULL,
  `subtittle_text` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_tittle_with_subtittle`
--

INSERT INTO `cpn_tittle_with_subtittle` (`id`, `tittle_text`, `subtittle_text`) VALUES
(1, 'Hello World', 'Hi this is a test paragraph.');

-- --------------------------------------------------------

--
-- Table structure for table `cpn_toggle`
--

CREATE TABLE `cpn_toggle` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `text` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpn_toggle`
--

INSERT INTO `cpn_toggle` (`id`, `name`, `text`) VALUES
(1, 'AzE', 'dadadad efsef');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(100) NOT NULL,
  `footer_navigation_link` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `footer_navigation_link`) VALUES
(1, 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `footer_navigation_link`
--

CREATE TABLE `footer_navigation_link` (
  `id` int(100) NOT NULL,
  `fnl_name` varchar(50) NOT NULL,
  `fnl_address` varchar(100) NOT NULL,
  `footer_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `footer_navigation_link`
--

INSERT INTO `footer_navigation_link` (`id`, `fnl_name`, `fnl_address`, `footer_id`) VALUES
(1, 'logo', '', 1),
(2, 'mogo', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `header`
--

CREATE TABLE `header` (
  `id` int(100) NOT NULL,
  `header_heading` varchar(250) NOT NULL,
  `header_paragraph` varchar(500) NOT NULL,
  `header_background_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `header`
--

INSERT INTO `header` (`id`, `header_heading`, `header_paragraph`, `header_background_pic`) VALUES
(1, 'Hi There!', 'Lorem IspamLorem IspamLorem IspamLorem IspamLorem IspamLorem IspamLorem IspamLorem IspamLorem IspamLorem IspamLorem Ispam.', '');

-- --------------------------------------------------------

--
-- Table structure for table `landing_page`
--

CREATE TABLE `landing_page` (
  `id` int(100) NOT NULL,
  `component_id` int(100) NOT NULL,
  `component_name` varchar(50) NOT NULL,
  `sequence` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `landing_page`
--

INSERT INTO `landing_page` (`id`, `component_id`, `component_name`, `sequence`) VALUES
(1, 1, 'cpn_meta_data', 1),
(2, 1, 'navigation_bar_style_three', 2),
(3, 1, 'page_header', 3),
(5, 1, 'get_tittle', 4),
(6, 1, 'team', 6),
(7, 1, 'feature', 5),
(8, 1, 'coment_box', 7);

-- --------------------------------------------------------

--
-- Table structure for table `navigation_bar`
--

CREATE TABLE `navigation_bar` (
  `id` int(100) NOT NULL,
  `nb_company_name` varchar(100) NOT NULL,
  `nb_company_link` varchar(100) NOT NULL,
  `nb_navigation_link` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navigation_bar`
--

INSERT INTO `navigation_bar` (`id`, `nb_company_name`, `nb_company_link`, `nb_navigation_link`) VALUES
(1, 'ABC', 'https://www.google.com', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `navigation_dropdown`
--

CREATE TABLE `navigation_dropdown` (
  `id` int(100) NOT NULL,
  `nd_snl_id` int(100) NOT NULL,
  `nd_link_icon` varchar(50) NOT NULL,
  `nd_link_address` varchar(100) NOT NULL,
  `nd_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `navigation_dropdown`
--

INSERT INTO `navigation_dropdown` (`id`, `nd_snl_id`, `nd_link_icon`, `nd_link_address`, `nd_name`) VALUES
(1, 2, 'dns', '', 'Hello'),
(2, 2, 'build', '', 'World');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(100) NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `page_type` varchar(50) NOT NULL,
  `raised` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `page_type`, `raised`) VALUES
(1, 'landing_page', 'landing-page', 'Y'),
(5, 'blog', 'blog', 'Y'),
(6, 'about_us', 'landing-page', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`) VALUES
(1, 'a'),
(2, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `sample_table`
--

CREATE TABLE `sample_table` (
  `id` int(100) NOT NULL,
  `component_id` int(100) NOT NULL,
  `component_name` varchar(50) NOT NULL,
  `sequence` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `simple_navigation_link`
--

CREATE TABLE `simple_navigation_link` (
  `id` int(100) NOT NULL,
  `snl_nb_id` int(100) NOT NULL,
  `snl_name` varchar(50) NOT NULL,
  `snl_link` varchar(100) NOT NULL,
  `snl_link_icon` varchar(50) NOT NULL,
  `snl_dropdown` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `simple_navigation_link`
--

INSERT INTO `simple_navigation_link` (`id`, `snl_nb_id`, `snl_name`, `snl_link`, `snl_link_icon`, `snl_dropdown`) VALUES
(1, 1, 'Past', '', 'apps', 'N'),
(2, 1, 'Present', '', 'view_day', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `pic` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_password`, `pic`) VALUES
(1, 'Azeem', 'panadolrf1', 'assets/img/faces/marc.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sequence` (`sequence`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sequence` (`sequence`);

--
-- Indexes for table `cpn_blog_card`
--
ALTER TABLE `cpn_blog_card`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cpn_button`
--
ALTER TABLE `cpn_button`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_checkbox`
--
ALTER TABLE `cpn_checkbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_comentbox`
--
ALTER TABLE `cpn_comentbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_comentbox_coments`
--
ALTER TABLE `cpn_comentbox_coments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `coment_box_id` (`coment_box_id`);

--
-- Indexes for table `cpn_contact_us`
--
ALTER TABLE `cpn_contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_feature`
--
ALTER TABLE `cpn_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_feature_tiles`
--
ALTER TABLE `cpn_feature_tiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cpn_feature_id` (`cpn_feature_id`);

--
-- Indexes for table `cpn_footer_style_four`
--
ALTER TABLE `cpn_footer_style_four`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_footer_style_four_heading_one`
--
ALTER TABLE `cpn_footer_style_four_heading_one`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footer_style_four_id` (`footer_style_four_id`);

--
-- Indexes for table `cpn_footer_style_four_heading_three`
--
ALTER TABLE `cpn_footer_style_four_heading_three`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footer_style_four_id` (`footer_style_four_id`);

--
-- Indexes for table `cpn_footer_style_four_heading_two`
--
ALTER TABLE `cpn_footer_style_four_heading_two`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footer_style_four_id` (`footer_style_four_id`);

--
-- Indexes for table `cpn_footer_style_four_social_links`
--
ALTER TABLE `cpn_footer_style_four_social_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footer_style_four_id` (`footer_style_four_id`);

--
-- Indexes for table `cpn_footer_style_one`
--
ALTER TABLE `cpn_footer_style_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_footer_style_one_links`
--
ALTER TABLE `cpn_footer_style_one_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footer_style_one_id` (`footer_style_one_id`);

--
-- Indexes for table `cpn_footer_style_one_social_link`
--
ALTER TABLE `cpn_footer_style_one_social_link`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footer_style_one_id` (`footer_style_one_id`);

--
-- Indexes for table `cpn_footer_style_three`
--
ALTER TABLE `cpn_footer_style_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_footer_style_three_links`
--
ALTER TABLE `cpn_footer_style_three_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footer_style_three_id` (`footer_style_three_id`);

--
-- Indexes for table `cpn_footer_style_two`
--
ALTER TABLE `cpn_footer_style_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_footer_style_two_links`
--
ALTER TABLE `cpn_footer_style_two_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footer_style_one_id` (`footer_style_two_id`);

--
-- Indexes for table `cpn_footer_style_two_social_link`
--
ALTER TABLE `cpn_footer_style_two_social_link`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footer_style_two_id` (`footer_style_two_id`);

--
-- Indexes for table `cpn_image_circle`
--
ALTER TABLE `cpn_image_circle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_image_rounded`
--
ALTER TABLE `cpn_image_rounded`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_input`
--
ALTER TABLE `cpn_input`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_input_with_icon`
--
ALTER TABLE `cpn_input_with_icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_label`
--
ALTER TABLE `cpn_label`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_meta_data`
--
ALTER TABLE `cpn_meta_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_navigation_bar_style_one`
--
ALTER TABLE `cpn_navigation_bar_style_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_navigation_bar_style_one_links`
--
ALTER TABLE `cpn_navigation_bar_style_one_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `navigation_bar_rose_id` (`navigation_bar_rose_id`);

--
-- Indexes for table `cpn_navigation_bar_style_three`
--
ALTER TABLE `cpn_navigation_bar_style_three`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_navigation_bar_style_three_links`
--
ALTER TABLE `cpn_navigation_bar_style_three_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cpn_navigation_bar_style_three_id` (`cpn_navigation_bar_style_three_id`);

--
-- Indexes for table `cpn_navigation_bar_style_three_links_dropdown`
--
ALTER TABLE `cpn_navigation_bar_style_three_links_dropdown`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cpn_navigation_bar_style_three_links_id` (`cpn_navigation_bar_style_three_links_id`);

--
-- Indexes for table `cpn_navigation_bar_style_two`
--
ALTER TABLE `cpn_navigation_bar_style_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_navigation_bar_style_two_links`
--
ALTER TABLE `cpn_navigation_bar_style_two_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `navigation_bar_style_two_id` (`navigation_bar_style_two_id`);

--
-- Indexes for table `cpn_navigation_pill`
--
ALTER TABLE `cpn_navigation_pill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_navigation_pill_content`
--
ALTER TABLE `cpn_navigation_pill_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `np_id` (`np_id`);

--
-- Indexes for table `cpn_page_header`
--
ALTER TABLE `cpn_page_header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_paragraph`
--
ALTER TABLE `cpn_paragraph`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_pre_footer_style_one`
--
ALTER TABLE `cpn_pre_footer_style_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_pre_footer_style_one_links`
--
ALTER TABLE `cpn_pre_footer_style_one_links`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pre_footer_style_one_id` (`pre_footer_style_one_id`);

--
-- Indexes for table `cpn_pre_footer_style_two`
--
ALTER TABLE `cpn_pre_footer_style_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_pre_footer_style_two_links`
--
ALTER TABLE `cpn_pre_footer_style_two_links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_profile_card_one`
--
ALTER TABLE `cpn_profile_card_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_profile_card_two`
--
ALTER TABLE `cpn_profile_card_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_radio`
--
ALTER TABLE `cpn_radio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_select`
--
ALTER TABLE `cpn_select`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_select_option`
--
ALTER TABLE `cpn_select_option`
  ADD PRIMARY KEY (`id`),
  ADD KEY `select_id` (`select_id`);

--
-- Indexes for table `cpn_social_button_default`
--
ALTER TABLE `cpn_social_button_default`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_social_button_simple`
--
ALTER TABLE `cpn_social_button_simple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_social_button_small`
--
ALTER TABLE `cpn_social_button_small`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_subscribe_style_one`
--
ALTER TABLE `cpn_subscribe_style_one`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_subscribe_style_two`
--
ALTER TABLE `cpn_subscribe_style_two`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_table_simple`
--
ALTER TABLE `cpn_table_simple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_tabs_card`
--
ALTER TABLE `cpn_tabs_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_tabs_card_content`
--
ALTER TABLE `cpn_tabs_card_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tc_id` (`tc_id`);

--
-- Indexes for table `cpn_team`
--
ALTER TABLE `cpn_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_team_cards`
--
ALTER TABLE `cpn_team_cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cpn_team_id` (`cpn_team_id`);

--
-- Indexes for table `cpn_textarea`
--
ALTER TABLE `cpn_textarea`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_tittle`
--
ALTER TABLE `cpn_tittle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_tittle_with_subtittle`
--
ALTER TABLE `cpn_tittle_with_subtittle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpn_toggle`
--
ALTER TABLE `cpn_toggle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_navigation_link`
--
ALTER TABLE `footer_navigation_link`
  ADD PRIMARY KEY (`id`),
  ADD KEY `footer_id` (`footer_id`);

--
-- Indexes for table `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing_page`
--
ALTER TABLE `landing_page`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sequence` (`sequence`);

--
-- Indexes for table `navigation_bar`
--
ALTER TABLE `navigation_bar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navigation_dropdown`
--
ALTER TABLE `navigation_dropdown`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nd_snl_id` (`nd_snl_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sample_table`
--
ALTER TABLE `sample_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sequence` (`sequence`);

--
-- Indexes for table `simple_navigation_link`
--
ALTER TABLE `simple_navigation_link`
  ADD PRIMARY KEY (`id`),
  ADD KEY `snl_nb_id` (`snl_nb_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cpn_blog_card`
--
ALTER TABLE `cpn_blog_card`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_button`
--
ALTER TABLE `cpn_button`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_checkbox`
--
ALTER TABLE `cpn_checkbox`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_comentbox`
--
ALTER TABLE `cpn_comentbox`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_comentbox_coments`
--
ALTER TABLE `cpn_comentbox_coments`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `cpn_contact_us`
--
ALTER TABLE `cpn_contact_us`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_feature`
--
ALTER TABLE `cpn_feature`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_feature_tiles`
--
ALTER TABLE `cpn_feature_tiles`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cpn_footer_style_four`
--
ALTER TABLE `cpn_footer_style_four`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_footer_style_four_heading_one`
--
ALTER TABLE `cpn_footer_style_four_heading_one`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_footer_style_four_heading_three`
--
ALTER TABLE `cpn_footer_style_four_heading_three`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_footer_style_four_heading_two`
--
ALTER TABLE `cpn_footer_style_four_heading_two`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_footer_style_four_social_links`
--
ALTER TABLE `cpn_footer_style_four_social_links`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_footer_style_one`
--
ALTER TABLE `cpn_footer_style_one`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_footer_style_one_links`
--
ALTER TABLE `cpn_footer_style_one_links`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_footer_style_one_social_link`
--
ALTER TABLE `cpn_footer_style_one_social_link`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cpn_footer_style_three`
--
ALTER TABLE `cpn_footer_style_three`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_footer_style_three_links`
--
ALTER TABLE `cpn_footer_style_three_links`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_footer_style_two`
--
ALTER TABLE `cpn_footer_style_two`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_footer_style_two_links`
--
ALTER TABLE `cpn_footer_style_two_links`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_footer_style_two_social_link`
--
ALTER TABLE `cpn_footer_style_two_social_link`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_image_circle`
--
ALTER TABLE `cpn_image_circle`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_image_rounded`
--
ALTER TABLE `cpn_image_rounded`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_input`
--
ALTER TABLE `cpn_input`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_input_with_icon`
--
ALTER TABLE `cpn_input_with_icon`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_label`
--
ALTER TABLE `cpn_label`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_meta_data`
--
ALTER TABLE `cpn_meta_data`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_navigation_bar_style_one`
--
ALTER TABLE `cpn_navigation_bar_style_one`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_navigation_bar_style_one_links`
--
ALTER TABLE `cpn_navigation_bar_style_one_links`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cpn_navigation_bar_style_three`
--
ALTER TABLE `cpn_navigation_bar_style_three`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_navigation_bar_style_three_links`
--
ALTER TABLE `cpn_navigation_bar_style_three_links`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cpn_navigation_bar_style_three_links_dropdown`
--
ALTER TABLE `cpn_navigation_bar_style_three_links_dropdown`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_navigation_bar_style_two`
--
ALTER TABLE `cpn_navigation_bar_style_two`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_navigation_bar_style_two_links`
--
ALTER TABLE `cpn_navigation_bar_style_two_links`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cpn_navigation_pill`
--
ALTER TABLE `cpn_navigation_pill`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_navigation_pill_content`
--
ALTER TABLE `cpn_navigation_pill_content`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cpn_page_header`
--
ALTER TABLE `cpn_page_header`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_paragraph`
--
ALTER TABLE `cpn_paragraph`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cpn_pre_footer_style_one`
--
ALTER TABLE `cpn_pre_footer_style_one`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_pre_footer_style_one_links`
--
ALTER TABLE `cpn_pre_footer_style_one_links`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cpn_pre_footer_style_two`
--
ALTER TABLE `cpn_pre_footer_style_two`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_pre_footer_style_two_links`
--
ALTER TABLE `cpn_pre_footer_style_two_links`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cpn_profile_card_one`
--
ALTER TABLE `cpn_profile_card_one`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_profile_card_two`
--
ALTER TABLE `cpn_profile_card_two`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_radio`
--
ALTER TABLE `cpn_radio`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_select`
--
ALTER TABLE `cpn_select`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_select_option`
--
ALTER TABLE `cpn_select_option`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cpn_social_button_default`
--
ALTER TABLE `cpn_social_button_default`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_social_button_simple`
--
ALTER TABLE `cpn_social_button_simple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_social_button_small`
--
ALTER TABLE `cpn_social_button_small`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cpn_subscribe_style_one`
--
ALTER TABLE `cpn_subscribe_style_one`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_subscribe_style_two`
--
ALTER TABLE `cpn_subscribe_style_two`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_table_simple`
--
ALTER TABLE `cpn_table_simple`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_tabs_card`
--
ALTER TABLE `cpn_tabs_card`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_tabs_card_content`
--
ALTER TABLE `cpn_tabs_card_content`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cpn_team`
--
ALTER TABLE `cpn_team`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_team_cards`
--
ALTER TABLE `cpn_team_cards`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cpn_textarea`
--
ALTER TABLE `cpn_textarea`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cpn_tittle`
--
ALTER TABLE `cpn_tittle`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `cpn_toggle`
--
ALTER TABLE `cpn_toggle`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `footer_navigation_link`
--
ALTER TABLE `footer_navigation_link`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `header`
--
ALTER TABLE `header`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `landing_page`
--
ALTER TABLE `landing_page`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `navigation_bar`
--
ALTER TABLE `navigation_bar`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `navigation_dropdown`
--
ALTER TABLE `navigation_dropdown`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sample_table`
--
ALTER TABLE `sample_table`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `simple_navigation_link`
--
ALTER TABLE `simple_navigation_link`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cpn_blog_card`
--
ALTER TABLE `cpn_blog_card`
  ADD CONSTRAINT `cpn_blog_card_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `cpn_comentbox_coments`
--
ALTER TABLE `cpn_comentbox_coments`
  ADD CONSTRAINT `cpn_comentbox_coments_ibfk_1` FOREIGN KEY (`coment_box_id`) REFERENCES `cpn_comentbox` (`id`);

--
-- Constraints for table `cpn_feature_tiles`
--
ALTER TABLE `cpn_feature_tiles`
  ADD CONSTRAINT `cpn_feature_tiles_ibfk_1` FOREIGN KEY (`cpn_feature_id`) REFERENCES `cpn_feature` (`id`);

--
-- Constraints for table `cpn_footer_style_four_heading_one`
--
ALTER TABLE `cpn_footer_style_four_heading_one`
  ADD CONSTRAINT `cpn_footer_style_four_heading_one_ibfk_1` FOREIGN KEY (`footer_style_four_id`) REFERENCES `cpn_footer_style_four` (`id`);

--
-- Constraints for table `cpn_footer_style_four_heading_three`
--
ALTER TABLE `cpn_footer_style_four_heading_three`
  ADD CONSTRAINT `cpn_footer_style_four_heading_three_ibfk_1` FOREIGN KEY (`footer_style_four_id`) REFERENCES `cpn_footer_style_four` (`id`);

--
-- Constraints for table `cpn_footer_style_four_heading_two`
--
ALTER TABLE `cpn_footer_style_four_heading_two`
  ADD CONSTRAINT `cpn_footer_style_four_heading_two_ibfk_1` FOREIGN KEY (`footer_style_four_id`) REFERENCES `cpn_footer_style_four` (`id`);

--
-- Constraints for table `cpn_footer_style_four_social_links`
--
ALTER TABLE `cpn_footer_style_four_social_links`
  ADD CONSTRAINT `cpn_footer_style_four_social_links_ibfk_1` FOREIGN KEY (`footer_style_four_id`) REFERENCES `cpn_footer_style_four` (`id`);

--
-- Constraints for table `cpn_footer_style_one_links`
--
ALTER TABLE `cpn_footer_style_one_links`
  ADD CONSTRAINT `cpn_footer_style_one_links_ibfk_1` FOREIGN KEY (`footer_style_one_id`) REFERENCES `cpn_footer_style_one` (`id`);

--
-- Constraints for table `cpn_footer_style_one_social_link`
--
ALTER TABLE `cpn_footer_style_one_social_link`
  ADD CONSTRAINT `cpn_footer_style_one_social_link_ibfk_1` FOREIGN KEY (`footer_style_one_id`) REFERENCES `cpn_footer_style_one` (`id`);

--
-- Constraints for table `cpn_footer_style_three_links`
--
ALTER TABLE `cpn_footer_style_three_links`
  ADD CONSTRAINT `cpn_footer_style_three_links_ibfk_1` FOREIGN KEY (`footer_style_three_id`) REFERENCES `cpn_footer_style_three` (`id`);

--
-- Constraints for table `cpn_footer_style_two_links`
--
ALTER TABLE `cpn_footer_style_two_links`
  ADD CONSTRAINT `cpn_footer_style_two_links_ibfk_1` FOREIGN KEY (`footer_style_two_id`) REFERENCES `cpn_footer_style_two` (`id`);

--
-- Constraints for table `cpn_footer_style_two_social_link`
--
ALTER TABLE `cpn_footer_style_two_social_link`
  ADD CONSTRAINT `cpn_footer_style_two_social_link_ibfk_1` FOREIGN KEY (`footer_style_two_id`) REFERENCES `cpn_footer_style_two` (`id`);

--
-- Constraints for table `cpn_navigation_bar_style_one_links`
--
ALTER TABLE `cpn_navigation_bar_style_one_links`
  ADD CONSTRAINT `cpn_navigation_bar_style_one_links_ibfk_1` FOREIGN KEY (`navigation_bar_rose_id`) REFERENCES `cpn_navigation_bar_style_one` (`id`);

--
-- Constraints for table `cpn_navigation_bar_style_three_links`
--
ALTER TABLE `cpn_navigation_bar_style_three_links`
  ADD CONSTRAINT `cpn_navigation_bar_style_three_links_ibfk_1` FOREIGN KEY (`cpn_navigation_bar_style_three_id`) REFERENCES `cpn_navigation_bar_style_three` (`id`);

--
-- Constraints for table `cpn_navigation_bar_style_three_links_dropdown`
--
ALTER TABLE `cpn_navigation_bar_style_three_links_dropdown`
  ADD CONSTRAINT `cpn_navigation_bar_style_three_links_dropdown_ibfk_1` FOREIGN KEY (`cpn_navigation_bar_style_three_links_id`) REFERENCES `cpn_navigation_bar_style_three_links` (`id`);

--
-- Constraints for table `cpn_navigation_bar_style_two_links`
--
ALTER TABLE `cpn_navigation_bar_style_two_links`
  ADD CONSTRAINT `cpn_navigation_bar_style_two_links_ibfk_1` FOREIGN KEY (`navigation_bar_style_two_id`) REFERENCES `cpn_navigation_bar_style_two` (`id`);

--
-- Constraints for table `cpn_navigation_pill_content`
--
ALTER TABLE `cpn_navigation_pill_content`
  ADD CONSTRAINT `cpn_navigation_pill_content_ibfk_1` FOREIGN KEY (`np_id`) REFERENCES `cpn_navigation_pill` (`id`);

--
-- Constraints for table `cpn_pre_footer_style_one_links`
--
ALTER TABLE `cpn_pre_footer_style_one_links`
  ADD CONSTRAINT `cpn_pre_footer_style_one_links_ibfk_1` FOREIGN KEY (`pre_footer_style_one_id`) REFERENCES `cpn_pre_footer_style_one` (`id`);

--
-- Constraints for table `cpn_select_option`
--
ALTER TABLE `cpn_select_option`
  ADD CONSTRAINT `cpn_select_option_ibfk_1` FOREIGN KEY (`select_id`) REFERENCES `cpn_select` (`id`);

--
-- Constraints for table `cpn_tabs_card_content`
--
ALTER TABLE `cpn_tabs_card_content`
  ADD CONSTRAINT `cpn_tabs_card_content_ibfk_1` FOREIGN KEY (`tc_id`) REFERENCES `cpn_tabs_card` (`id`);

--
-- Constraints for table `cpn_team_cards`
--
ALTER TABLE `cpn_team_cards`
  ADD CONSTRAINT `cpn_team_cards_ibfk_1` FOREIGN KEY (`cpn_team_id`) REFERENCES `cpn_team` (`id`);

--
-- Constraints for table `footer_navigation_link`
--
ALTER TABLE `footer_navigation_link`
  ADD CONSTRAINT `footer_navigation_link_ibfk_1` FOREIGN KEY (`footer_id`) REFERENCES `footer` (`id`);

--
-- Constraints for table `navigation_dropdown`
--
ALTER TABLE `navigation_dropdown`
  ADD CONSTRAINT `navigation_dropdown_ibfk_1` FOREIGN KEY (`nd_snl_id`) REFERENCES `simple_navigation_link` (`id`);

--
-- Constraints for table `simple_navigation_link`
--
ALTER TABLE `simple_navigation_link`
  ADD CONSTRAINT `simple_navigation_link_ibfk_1` FOREIGN KEY (`snl_nb_id`) REFERENCES `navigation_bar` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
