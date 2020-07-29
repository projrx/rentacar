-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2020 at 10:39 AM
-- Server version: 5.6.48-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mrsgroup_hamza`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `name` text,
  `img` text,
  `desp` text,
  `datec` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `name`, `img`, `desp`, `datec`) VALUES
(1, NULL, NULL, '<div class=\"heading-block\">\r\n<h3><br />\r\n<span style=\"color:#000000\">About Us</span></h3>\r\n</div>\r\n\r\n<p><span style=\"color:#000000\">Assertively iterate enterprise-wide portals through synergistic products. Efficiently build adaptive schemas after transparent quality vectors. Phosfluorescently optimize competitive resources after extensive convergence. Rapidiously optimize high-quality meta-services via distributed architectures. Credibly deliver 24/365.</span></p>\r\n\r\n<div class=\"row  clearfix\">\r\n<div class=\"col-md-10\">\r\n<div class=\"feature-box fbox-plain media-box\">\r\n<div class=\"fbox-icon\" style=\"position: relative;\"><a href=\"#\"><span style=\"color:#000000\"><em>&nbsp;</em></span></a></div>\r\n\r\n<div class=\"fbox-desc\" style=\"margin-top: 5px\">\r\n<h3><span style=\"color:#000000\">Special Care.</span></h3>\r\n\r\n<p><span style=\"color:#000000\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est perspiciatis mollitia.</span></p>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-10\">&nbsp;\r\n<div class=\"feature-box fbox-plain media-box\">\r\n<div class=\"fbox-icon\" style=\"position: relative;\"><a href=\"#\"><span style=\"color:#000000\"><em>&nbsp;</em></span></a></div>\r\n\r\n<div class=\"fbox-desc\" style=\"margin-top: 25px\">\r\n<h3><span style=\"color:#000000\">Skilled Professionals.</span></h3>\r\n\r\n<p><span style=\"color:#000000\">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi rem, facilis nobis voluptatum est perspiciatis mollitia.</span></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n', '2020-03-01 05:22:34');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `datec` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `datec`) VALUES
(4, 'admin', 'admin99', '2020-01-14 04:31:57');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `img` text,
  `name` text,
  `ordr` int(11) DEFAULT NULL,
  `datec` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `img`, `name`, `ordr`, `datec`) VALUES
(1, '59985ad4c6e4a120f81d40a8510066ea1.png', 'Honda ', 1, '2020-03-01 19:00:00'),
(2, '965f9f00384a2930c00a1a3ccb246e721.png', 'Toyota', 2, '2020-03-01 19:00:00'),
(3, 'b207d387481b75b0831ef16cac5de4611.png', 'Suzuki', 3, '2020-03-01 19:00:00'),
(4, '720c0c4769b8b64e34a8979ced4991731.png', 'BMW', 4, '2020-03-01 19:00:00'),
(5, 'db63abade550c95e45171ad310b05a021.png', 'Audi', 5, '2020-03-01 19:00:00'),
(6, '213d27ccf424cf4161bbfb83aa97c9b31.png', 'FAW', 6, '2020-03-01 19:00:00'),
(7, '05a54ff914ef2e5f63b31ee2e4932b1b1.png', 'Nissan', 4, '2020-03-02 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `car`
--

CREATE TABLE `car` (
  `id` int(11) NOT NULL,
  `name` text,
  `brand` varchar(40) DEFAULT NULL,
  `model` int(11) NOT NULL,
  `img0` text,
  `img1` text,
  `img2` text,
  `img3` text,
  `img4` text,
  `engine` int(11) DEFAULT NULL,
  `enginec` int(11) DEFAULT NULL,
  `fuel` varchar(40) DEFAULT NULL,
  `millage` int(11) DEFAULT NULL,
  `trans` varchar(40) DEFAULT NULL,
  `gears` int(11) DEFAULT NULL,
  `dist` int(11) DEFAULT NULL,
  `color` text,
  `price` int(11) DEFAULT NULL,
  `insr` text,
  `due` date DEFAULT NULL,
  `docd` date DEFAULT NULL,
  `book` int(11) DEFAULT NULL,
  `feat` int(11) NOT NULL DEFAULT '0',
  `dates` date DEFAULT NULL,
  `datec` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `car`
--

INSERT INTO `car` (`id`, `name`, `brand`, `model`, `img0`, `img1`, `img2`, `img3`, `img4`, `engine`, `enginec`, `fuel`, `millage`, `trans`, `gears`, `dist`, `color`, `price`, `insr`, `due`, `docd`, `book`, `feat`, `dates`, `datec`) VALUES
(12, '320i M Sport', '4', 2015, '6c50f2c297e7fcdebfe20dd5ef86ba0b1.png', 'f888917bba2abb5b37b9f42300ea625b1.png', 'b688ccfabba7fe9afaaf2d4715e054141.png', 'a07de16ced19fc12d8fc362bcc5d7b671.png', NULL, 800, NULL, 'diesel', 14, 'auto', NULL, 5000, '2', 7000, 'ca33fa4f0f18db25a636ac4087f2f7cf1.png', '2021-03-09', '2022-02-03', 0, 1, NULL, '2020-03-02 19:00:00'),
(11, 'RAV4 Icon ', '2', 2019, '17d7259f50353cea1bfbbe393958623e1.png', '48ad22b6d9b5f4e97517484515a39ff91.png', '341a5850760f9eb0e02083bdcbea8fdc1.png', NULL, NULL, 1200, NULL, 'petrol', 16, 'manual', NULL, 3000, '3', 6000, '23b62ce079a66d3b12dd2653f26e5baa1.png', '2030-08-02', '2021-01-14', 0, 1, NULL, '2020-03-02 19:00:00'),
(9, 'Yaris Icon', '2', 2016, '6aafe22ba88b6261bae7b30ee1d477c31.png', '2338ba51200c6b982415c25c8b789bac1.png', '42b960325a1ed4a82e6e2b20353c74311.png', '810f5a0ac7bdfbe381048c91428826051.png', NULL, 1500, NULL, 'cng', 16, 'auto', NULL, 5000, '6', 4500, '7a5c4ffc5ca8a06fcc56b8fac0c905ee1.png', '2015-07-12', '2009-08-21', 1, 1, NULL, '2020-03-02 19:00:00'),
(10, '118i Sport', '4', 2018, '4956c02f8720e096625c7544c5ac2ca61.png', '203931d3154f8d1da2f0248c7007a6411.png', '8d85ee713c431fb169c1e200265c844a1.png', NULL, NULL, 1600, NULL, 'diesel', 16, 'auto', NULL, 12000, '2', 9500, '7f22daa42f2ecc0fed7c2157bcf64e491.png', '2022-01-03', '2021-03-23', 0, 0, NULL, '2020-03-02 19:00:00'),
(13, 'Qashqai N-Connecta', '7', 2019, 'ad69dced271b5036c2160352865ea12d1.png', '1a4a19486af6b9f7e70a684c2ad69a701.png', 'e009f9d9613eef2e0053370a2c643d551.png', '175433d6a151ddc3b176e4800c80be601.png', NULL, 1200, NULL, 'cng', 18, 'manual', NULL, 5000, '2', 600, '1c040f04632562fe7e21795555edb1b41.png', '2024-03-02', '2021-03-03', 1, 1, NULL, '2020-03-02 19:00:00'),
(14, 'BR-V', '1', 2018, '81567aa6c01b18ca1ecd2ffa4fe773fa1.png', 'a35d75443f6d16ff8a3bb57b98edc0e51.png', 'df5b758b3db599235c1eb2347a76fe851.png', NULL, NULL, 220, NULL, 'petrol', 10, 'auto', NULL, 1000, '1', 12000, 'c796ce592d4bfe89b47ae6a9c45e5da11.png', '2020-03-02', '2021-03-05', 0, 0, NULL, '2020-03-02 19:00:00'),
(15, 'Accord CVT', '1', 2017, '4aad66d80ec5a5fe2c6b3f9a253ef1621.png', '4f107237667ca4a0e5f05ff476c06dea1.png', 'bee50a4a649f7d1208f0fe6eb2780e051.png', NULL, NULL, 1200, NULL, 'petrol', 10, 'auto', NULL, 2000, '1', 1000, '1d9cfd8f19c8e5846cf77ed09d82f0a01.png', '2020-03-01', '2021-05-03', 1, 0, NULL, '2020-03-02 19:00:00'),
(16, 'Civic Sedan', '1', 2019, '778ca39f41578d0d87227f227774045c1.png', '8085f9233abc8634f1ba989138c381d41.png', NULL, NULL, NULL, 1600, NULL, 'petrol', 18, 'manual', NULL, 2000, '8', 2000, '61d8d5f7fafb737e529b379d53807c731.png', '2020-02-02', '2021-05-06', 1, 0, NULL, '2020-03-02 19:00:00'),
(17, 'A4 Black Edition - 2.0', '5', 2019, '82588d7aaae776551919d98752349f921.png', 'de627bcdc6f5b6474cdb772096fb4f961.png', 'f1437405162d988da174e4907afca0061.png', 'd68726e09b4072bbd7f97014cc3358631.png', NULL, 1400, NULL, 'diesel', 10, 'auto', NULL, 20000, '1', 2000, 'ad9c216d36ae6a9ad285de5e458402031.png', '2020-03-02', '2021-05-02', 1, 1, NULL, '2020-03-02 19:00:00'),
(18, 'Q2 SE - 1.6', '5', 2017, 'dd5d4b3157a8cfaeb001dced78988a7d1.png', '6e6a537d615cb4471b79a7d0d287724a1.png', '7af0c127815316d6944ce2421e83c6871.png', NULL, NULL, 1800, NULL, 'petrol', 10, 'auto', NULL, 300000, '1', 2500, 'ca8a89a741d3319aabf26e1bbde8e3f61.png', '2020-03-02', '2019-05-02', 0, 1, NULL, '2020-03-02 19:00:00'),
(19, '320i M Sport ', '4', 2018, 'f9c68011386414c66897afe68cd501df1.png', 'bcf2ead5dd3520dd08b8d0d5337971061.png', 'de6060d4e65247988f6495d51410fcdc1.png', NULL, NULL, 1200, NULL, 'diesel', 20, 'auto', NULL, 20000, '1', 2000, '86c2b46532f759e341c809ad77756cc71.png', '2022-10-02', '2020-01-04', 0, 0, NULL, '2020-03-02 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `carimg`
--

CREATE TABLE `carimg` (
  `id` int(11) NOT NULL,
  `carid` int(11) DEFAULT NULL,
  `img` int(11) DEFAULT NULL,
  `ordr` int(11) DEFAULT NULL,
  `datec` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `ctval` int(11) NOT NULL,
  `city` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`ctval`, `city`) VALUES
(1, 'Abdul Hakeem'),
(2, 'Abottabad'),
(3, 'Adda jahan khan'),
(4, 'Adda shaiwala'),
(5, 'Ahmed Pur East'),
(6, 'Ahmedpur Lamma'),
(7, 'Akhora khattak'),
(8, 'Ali chak'),
(9, 'Alipur Chatta'),
(10, 'Allahabad'),
(11, 'Amangarh'),
(12, 'Arifwala'),
(13, 'Attock'),
(14, 'Babarloi'),
(15, 'Babri banda'),
(16, 'Badin'),
(17, 'Bahawal Nagar'),
(18, 'Balakot'),
(19, 'Bannu'),
(20, 'Baroute'),
(21, 'Basirpur'),
(22, 'Basti Shorekot'),
(23, 'Bat khela'),
(24, 'Batang'),
(25, 'Bhai pheru'),
(26, 'Bhakkar'),
(27, 'Bhalwal'),
(28, 'Bhan saeedabad'),
(29, 'Bhawalpur'),
(30, 'Bhera'),
(31, 'Bhikky'),
(32, 'Bhimber'),
(33, 'Bhirya road'),
(34, 'Bhuawana'),
(35, 'Buchay key'),
(36, 'Burewala'),
(37, 'Chacklala'),
(38, 'Chaininda'),
(39, 'Chak 4 b c'),
(40, 'Chak 46'),
(41, 'Chak jamal'),
(42, 'Chak jhumra'),
(43, 'Chak Shahzad'),
(44, 'Chaksawari'),
(45, 'Chakwal'),
(46, 'Charsadda'),
(47, 'Chashma'),
(48, 'Chawinda'),
(49, 'Chichawatni'),
(50, 'Chiniot'),
(51, 'Chishtian'),
(52, 'Chitral'),
(53, 'Chohar jamali'),
(54, 'Choppar hatta'),
(55, 'Chowha saidan shah'),
(56, 'Chowk azam'),
(57, 'Chowk mailta'),
(58, 'Chowk munda'),
(59, 'Chunian'),
(60, 'D.G.Khan'),
(61, 'Dadakhel'),
(62, 'Dadu'),
(63, 'Dadyal Ak'),
(64, 'Daharki'),
(65, 'Dandot'),
(66, 'Dargai'),
(67, 'Darya khan'),
(68, 'Daska'),
(69, 'Daud khel'),
(70, 'Daulatpur'),
(71, 'Deh pathaan'),
(72, 'Depal pur'),
(73, 'Dera Allah Yar'),
(74, 'Dera ismail khan'),
(75, 'Dera murad jamali'),
(76, 'Dera nawab sahib'),
(77, 'Dhatmal'),
(78, 'Dhoun kal'),
(79, 'Digri'),
(80, 'Dijkot'),
(81, 'Dina'),
(82, 'Dinga'),
(83, 'Dir'),
(84, 'Doaaba'),
(85, 'Doltala'),
(86, 'Domeli'),
(87, 'Donga Bonga'),
(88, 'Dudial'),
(89, 'Dunia Pur'),
(90, 'Eminabad'),
(91, 'Esa Khel'),
(92, 'Faisalabad'),
(93, 'Faqirwali'),
(94, 'Farooqabad'),
(95, 'Fateh Jang'),
(96, 'Fateh pur'),
(97, 'Feroz walla'),
(98, 'Feroz watan'),
(99, 'Ferozwatowan'),
(100, 'Fiza got'),
(101, 'Fort Abbass'),
(102, 'Gadoon amazai'),
(103, 'Gaggo mandi'),
(104, 'Gakhar mandi'),
(105, 'Gambat'),
(106, 'Gambet'),
(107, 'Garh maharaja'),
(108, 'Garh more'),
(109, 'Garhi yaseen'),
(110, 'Gari habibullah'),
(111, 'Gari mori'),
(112, 'Gharo'),
(113, 'Ghazi'),
(114, 'Ghotki'),
(115, 'Gilgit'),
(116, 'Gohar ghoushti'),
(117, 'Gojar khan'),
(118, 'Gojra'),
(119, 'Goth Machi'),
(120, 'Goular khel'),
(121, 'Guddu'),
(122, 'Gujar Khan'),
(123, 'Gujranwala'),
(124, 'Gujrat'),
(125, 'Gwadar'),
(126, 'Hafizabad'),
(127, 'Hala'),
(128, 'Hangu'),
(129, 'Harappa'),
(130, 'Hari pur'),
(131, 'Hariwala'),
(132, 'Haroonabad'),
(133, 'Hasilpur'),
(134, 'hamza abdal'),
(135, 'Hattar'),
(136, 'Hattian'),
(137, 'Hattian lawrencepur'),
(138, 'Havali Lakhan'),
(139, 'Hawilian'),
(140, 'Hayatabad'),
(141, 'Hazro'),
(142, 'Head marala'),
(143, 'Hub'),
(144, 'Hub-Balochistan'),
(145, 'Hujra Shah Mukeem'),
(146, 'Hunza'),
(147, 'Hyderabad'),
(148, 'Iskandarabad'),
(149, 'Jacobabad'),
(150, 'Jahaniya'),
(151, 'Jaja abasian'),
(152, 'Jalalpur Jattan'),
(153, 'Jalalpur Pirwala'),
(154, 'Jampur'),
(155, 'Jamrud road'),
(156, 'Jamshoro'),
(157, 'Jan pur'),
(158, 'Jand'),
(159, 'Jandanwala'),
(160, 'Jaranwala'),
(161, 'Jatlaan'),
(162, 'Jatoi'),
(163, 'Jauharabad'),
(164, 'Jehangira'),
(165, 'Jehlum'),
(166, 'Jhal Magsi'),
(167, 'Jhand'),
(168, 'Jhang'),
(169, 'Jhatta bhutta'),
(170, 'Jhudo'),
(171, 'Jin Pur'),
(172, 'K.N. Shah'),
(173, 'Kabirwala'),
(174, 'Kacha khooh'),
(175, 'Kahuta'),
(176, 'Kakul'),
(177, 'Kakur town'),
(178, 'Kala bagh'),
(179, 'Kala shah kaku'),
(180, 'Kalaswala'),
(181, 'Kallar Kahar'),
(182, 'Kallar Saddiyian'),
(183, 'Kallur kot'),
(184, 'Kamalia'),
(185, 'Kamalia musa'),
(186, 'Kamber ali khan'),
(187, 'Kameer'),
(188, 'Kamoke'),
(189, 'Kamra'),
(190, 'Kandh kot'),
(191, 'Kandiaro'),
(192, 'Karak'),
(193, 'Karoor pacca'),
(194, 'Karore lalisan'),
(195, 'Kashmir'),
(196, 'Kashmore'),
(197, 'Kasur'),
(198, 'Kazi ahmed'),
(199, 'Khair Pur Mirs'),
(200, 'Khairpur'),
(201, 'Khan Bela'),
(202, 'Khan qah sharif'),
(203, 'Khandabad'),
(204, 'Khanewal'),
(205, 'Khangarh'),
(206, 'Khanqah dogran'),
(207, 'Khanqah sharif'),
(208, 'Kharian'),
(209, 'Khebar'),
(210, 'Khewra'),
(211, 'Khoski'),
(212, 'Khudian Khas'),
(213, 'Khurian wala'),
(214, 'Khurrianwala'),
(215, 'Khushab'),
(216, 'Khushal kot'),
(217, 'Khuzdar'),
(218, 'Klaske'),
(219, 'Kohat'),
(220, 'Kot addu'),
(221, 'Kot bunglow'),
(222, 'Kot ghulam mohd'),
(223, 'Kot mithan'),
(224, 'Kot Momin'),
(225, 'Kot radha kishan'),
(226, 'Kotla'),
(227, 'Kotla arab ali khan'),
(228, 'Kotla jam'),
(229, 'Kotla Pathan'),
(230, 'Kotly Ak'),
(231, 'Kotly Loharana'),
(232, 'Kotri'),
(233, 'Kumbh'),
(234, 'Kundina'),
(235, 'Kunjah'),
(236, 'Kunri'),
(237, 'Laki marwat'),
(238, 'Lala musa'),
(239, 'Lala rukh'),
(240, 'Laliah'),
(241, 'Lalshanra'),
(242, 'Larkana'),
(243, 'Lasbella'),
(244, 'Lawrence pur'),
(245, 'Layya'),
(246, 'Liaqat Pur'),
(247, 'Lodhran'),
(248, 'Lower Dir'),
(249, 'Ludhan'),
(250, 'Madina'),
(251, 'Makli'),
(252, 'Malakand Agency'),
(253, 'Malikwal'),
(254, 'Mamu kunjan'),
(255, 'Mandi bahauddin'),
(256, 'Mandra'),
(257, 'Manga mandi'),
(258, 'Mangal sada'),
(259, 'Mangi'),
(260, 'Mangla'),
(261, 'Mangowal'),
(262, 'Manoabad'),
(263, 'Mansahra'),
(264, 'Mardan'),
(265, 'Mari indus'),
(266, 'Mastoi'),
(267, 'Matli'),
(268, 'Mehar'),
(269, 'Mehmood kot'),
(270, 'Mehrabpur'),
(271, 'Melsi'),
(272, 'Mian Channu'),
(273, 'Mian Wali'),
(274, 'Minchanaabad'),
(275, 'Mingora'),
(276, 'Mir ali'),
(277, 'Miran shah'),
(278, 'Mirpur A.K.'),
(279, 'Mirpur khas'),
(280, 'Mirpur mathelo'),
(281, 'Mithi'),
(282, 'Mitiari'),
(283, 'Mohen jo daro'),
(284, 'More kunda'),
(285, 'Morgah'),
(286, 'Moro'),
(287, 'Mubarik pur'),
(288, 'Multan'),
(289, 'Muridkay'),
(290, 'Murree'),
(291, 'Musafir khana'),
(292, 'Mustung'),
(293, 'Muzaffar Gargh'),
(294, 'Muzaffarabad'),
(295, 'Nankana sahib'),
(296, 'Narang mandi'),
(297, 'Narowal'),
(298, 'Naseerabad'),
(299, 'Naukot'),
(300, 'Naukundi'),
(301, 'Nawabshah'),
(302, 'New saeedabad'),
(303, 'Nilore'),
(304, 'Noor kot'),
(305, 'Nooriabad'),
(306, 'Noorpur nooranga'),
(307, 'Noshero Feroze'),
(308, 'Noudero'),
(309, 'Nowshera'),
(310, 'Nowshera cantt'),
(311, 'Nowshera Virka'),
(312, 'Okara'),
(313, 'Other'),
(314, 'Padidan'),
(315, 'Pak china fertilizer'),
(316, 'Pak pattan sharif'),
(317, 'Panjan kisan'),
(318, 'Panjgoor'),
(319, 'Panno Aqil'),
(320, 'Panu Aqil'),
(321, 'Pasni'),
(322, 'Pasroor'),
(323, 'Pattoki'),
(324, 'Phagwar'),
(325, 'Phalia'),
(326, 'Phool nagar'),
(327, 'Piaro goth'),
(328, 'Pind Dadan Khan'),
(329, 'Pindi Bhattiya'),
(330, 'Pindi bhohri'),
(331, 'Pindi gheb'),
(332, 'Piplan'),
(333, 'Pir mahal'),
(334, 'Pishin'),
(335, 'Qalandarabad'),
(336, 'Qamber Ali Khan'),
(337, 'Qasba gujrat'),
(338, 'Qazi ahmed'),
(339, 'Qila Deedar Singh'),
(340, 'Quaid Abad'),
(341, 'Quetta'),
(342, 'Rabwah'),
(343, 'Rahim Yar Khan'),
(344, 'Rahwali'),
(345, 'Raiwind'),
(346, 'Rajana'),
(347, 'Rajanpur'),
(348, 'Rangoo'),
(349, 'Ranipur'),
(350, 'Rato Dero'),
(351, 'Rawala kot'),
(352, 'Rawat'),
(353, 'Renala khurd'),
(354, 'Risalpur'),
(355, 'Rohri'),
(356, 'Sadiqabad'),
(357, 'Sagri'),
(358, 'Sahiwal'),
(359, 'Saidu sharif'),
(360, 'Sajawal'),
(361, 'Sakhi Sarwar'),
(362, 'Samanabad'),
(363, 'Sambrial'),
(364, 'Samma satta'),
(365, 'Sanghar'),
(366, 'Sanghi'),
(367, 'Sangla Hills'),
(368, 'Sangote'),
(369, 'Sanjarpur'),
(370, 'Sanjwal'),
(371, 'Sara e naurang'),
(372, 'Sara-E-Alamgir'),
(373, 'Sargodha'),
(374, 'Satiayana'),
(375, 'Sawabi'),
(376, 'Sehar baqlas'),
(377, 'Sehwan Sharif'),
(378, 'Sekhat'),
(379, 'Serai alamgir'),
(380, 'Shadiwal'),
(381, 'Shah kot'),
(382, 'Shahdad kot'),
(383, 'Shahdara'),
(384, 'Shahpur chakar'),
(385, 'Shahpur Saddar'),
(386, 'Sheikhupura'),
(387, 'Shakargarh'),
(388, 'Shamsabad'),
(389, 'Shankiari'),
(390, 'Shedani sharif'),
(391, 'Shehdadpur'),
(392, 'Shemier'),
(394, 'Shikar pur'),
(395, 'Shorekot Cantt'),
(396, 'Shorkot'),
(397, 'Shuja Abad'),
(398, 'Sialkot'),
(399, 'Sibi'),
(400, 'Sihala'),
(401, 'Sikandarabad'),
(402, 'Sillanwali'),
(403, 'Sita road'),
(404, 'Skardu'),
(405, 'Skrand'),
(406, 'Sohawa'),
(407, 'Sohawa district daska'),
(408, 'Sukkur'),
(409, 'Sumandari'),
(410, 'Swat'),
(411, 'Swatmingora'),
(412, 'Takhtbai'),
(413, 'Talagang'),
(414, 'Talamba'),
(415, 'Talhur'),
(416, 'Tandiliyawala'),
(417, 'Tando adam'),
(418, 'Tando Allah Yar'),
(419, 'Tando jam'),
(420, 'Tando Muhammad Khan'),
(421, 'Tank'),
(422, 'Tarbela'),
(423, 'Tarmatan'),
(424, 'Tatlay Wali'),
(425, 'Taunsa sharif'),
(426, 'Taxila'),
(427, 'Tharo shah'),
(428, 'Thatta'),
(429, 'Theing jattan more'),
(430, 'Thull'),
(431, 'Tibba sultanpur'),
(432, 'Toba Tek Singh'),
(433, 'Topi'),
(434, 'Toru'),
(435, 'Tranda Muhammad Pannah'),
(436, 'Turbat'),
(437, 'Ubaro'),
(438, 'Ubauro'),
(439, 'Ugoke'),
(440, 'Ukba'),
(441, 'Umer Kot'),
(442, 'Upper deval'),
(443, 'Usta Muhammad'),
(444, 'Vehari'),
(445, 'Village Sunder'),
(446, 'Wah cantt'),
(447, 'Wahi hassain'),
(448, 'Wahn Bachran'),
(449, 'Wan radha ram'),
(450, 'Warah'),
(451, 'Warburton'),
(452, 'Wazirabad'),
(453, 'Yazman mandi'),
(454, 'Zafarwal'),
(455, 'Zahir Peer'),
(456, 'Lahore'),
(457, 'Karachi'),
(458, 'Islamabad'),
(459, 'Rawalpindi'),
(460, 'Peshawar');

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(11) NOT NULL,
  `name` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `name`) VALUES
(1, 'white'),
(2, 'black'),
(3, 'red'),
(4, 'silver'),
(5, 'orange'),
(6, 'mehroon'),
(7, 'green'),
(8, 'blue');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` text,
  `logo` text,
  `phone` text,
  `email` text,
  `address` text,
  `gmaps` text,
  `cover` text,
  `post` text,
  `footer` text,
  `facebook` text,
  `linkedin` text,
  `insta` text,
  `youtube` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `logo`, `phone`, `email`, `address`, `gmaps`, `cover`, `post`, `footer`, `facebook`, `linkedin`, `insta`, `youtube`) VALUES
(1, 'A1CARS', '62637d02a037e31d3f268e64499d8d2d1.png', '03001234567', 'info@a1cars.com', 'Site Address, Lahore', NULL, NULL, NULL, NULL, 'fb.me', '#', '#', '#');

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `topdesp` text,
  `post` text,
  `img` text,
  `datec` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `topdesp`, `post`, `img`, `datec`) VALUES
(1, '<h3>Call us today at <span style=\"color:#B22222\">+92.22.57412541</span> or Email us at<span style=\"color:#B22222\"> info@rentacar.com</span></h3>\r\n\r\n<p>We strive to provide Our Drivers with Top Notch Support to make their Rides Experience Easy and More&nbsp;Informative <a class=\"button button-dark button-xlarge button-rounded\" href=\"contact.php\">Contact Us</a></p>\r\n', '<div class=\"heading-block\">\r\n<h3>Reliable Rent a Car.</h3>\r\nBenchmarking your car&#39;s performance helps you make great choices for your business.</div>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam excepturi quod, fuga architecto provident, cupiditate delectus voluptate eaque! Sit neque ut eum, voluptatibus odit cum dolorum ipsa voluptates inventore cumque a.</p>\r\n\r\n<p><a href=\"#\">Learn more &rarr;</a></p>\r\n', '7680ac09c5237994d123c2888bab00fc1.png', '2020-02-29 12:58:05');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `datebook` date DEFAULT NULL,
  `datestart` date DEFAULT NULL,
  `dateend` date DEFAULT NULL,
  `days` int(11) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `total` int(11) NOT NULL DEFAULT '0',
  `paid` int(11) NOT NULL DEFAULT '0',
  `status` varchar(11) DEFAULT NULL,
  `desp` text,
  `dates` date DEFAULT NULL,
  `datec` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `carid`, `userid`, `datebook`, `datestart`, `dateend`, `days`, `price`, `total`, `paid`, `status`, `desp`, `dates`, `datec`) VALUES
(21, 17, 1, '2020-03-05', '2020-03-05', '2020-03-14', 10, 2000, 20000, 15000, 'ongoing', NULL, '2020-03-05', '2020-03-05 10:53:40'),
(20, 13, 1, '2020-03-05', '2020-03-05', '2020-03-05', 1, 600, 600, 4000, 'terminated', 'Terminated By Admin.', '2020-03-05', '2020-03-05 09:32:14'),
(19, 11, 1, '2020-03-05', '2020-03-05', '2020-03-05', 0, 6000, 0, 0, 'terminated', 'Terminated By Admin.', '2020-03-05', '2020-03-05 09:28:25'),
(18, 16, 1, '2020-03-05', '2020-03-05', '2020-03-25', 20, 2000, 40000, 40000, 'ongoing', NULL, '2020-03-05', '2020-03-05 09:28:20'),
(17, 15, 1, '2020-03-05', '2020-03-03', '2020-03-05', 3, 1000, 1500, 1500, 'terminated', 'Terminated By Admin.', '2020-03-05', '2020-03-05 09:28:10'),
(22, 10, 1, '2020-03-05', '2020-03-05', '2020-03-05', 0, 9500, 0, 0, 'terminated', 'Terminated By Admin.', '2020-03-05', '2020-03-05 10:53:51'),
(23, 9, 3, '2020-07-10', '2020-07-10', '2020-07-12', 3, 4500, 13500, 10000, 'ongoing', NULL, '2020-07-10', '2020-07-10 10:41:09'),
(24, 9, 3, '2020-07-10', NULL, NULL, 5, 4500, 22500, 0, 'pending', NULL, '2020-07-10', '2020-07-10 10:51:18');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `easypaisa` text,
  `jazzcash` text,
  `bank` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `easypaisa`, `jazzcash`, `bank`) VALUES
(1, '03001234567', '03001234567', 'UBL: 0988-9987-3421-9388');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `img` text,
  `name` text,
  `ordr` int(11) DEFAULT NULL,
  `datec` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `img`, `name`, `ordr`, `datec`) VALUES
(1, '0cbf7d81ba9e857d802e2391a840f0421.png', 'Brands New Car', 1, '2020-02-28 19:00:00'),
(2, '0cad6223db996d24c0d31892be473d441.png', 'Best in Class', 2, '2020-02-28 19:00:00'),
(3, '796438312740ffedfbd8bce3132800c01.png', 'Rent Your Ride', 3, '2020-02-28 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testim`
--

CREATE TABLE `testim` (
  `id` int(11) NOT NULL,
  `name` text,
  `desp` text,
  `img` text,
  `ordr` int(11) DEFAULT NULL,
  `datec` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testim`
--

INSERT INTO `testim` (`id`, `name`, `desp`, `img`, `ordr`, `datec`) VALUES
(2, 'JOHN DOE', 'Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!', 'ba0a49c9dd55bfa11cea92727dde019b1.png', 1, '2020-02-29 19:00:00'),
(3, ' COLLIS TA', 'consequatur ullam quibusdam cum libero illo rerum repellendus! Incidunt deleniti blanditiis quas aperiam recusandae ', '684a5f6607b57f119882f7f3d35d65ea1.png', 2, '2020-02-29 19:00:00'),
(6, 'Natus DOE', 'Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum repellendus!', '9bf5b539afcbe353d976c6f7424b7c4c1.png', 3, '2020-02-29 19:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` text,
  `lname` text,
  `email` text,
  `phone` text,
  `address` text,
  `city` text,
  `img` text,
  `drl` text,
  `drlex` date DEFAULT NULL,
  `suspend` int(11) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `datec` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `lname`, `email`, `phone`, `address`, `city`, `img`, `drl`, `drlex`, `suspend`, `dates`, `datec`) VALUES
(1, 'hamza56', 'admin990', 'HAMZA PERVAIZ', NULL, 'hamzapervaiz5@gmail.com', '+923204157040', 'Al Rehman Garden P II', 'Lahore', 'dd98de2ac7ccdca323d6ba00f0373ee01.png', '1ec295b5bf65766f5666226c91ed6c411.png', '2019-10-12', NULL, NULL, '2020-03-04 02:23:45'),
(2, 'jawadrao', 'Pakistan@786', 'Jawad', NULL, 'jawad.rao@gmail.com', '03413666000', NULL, NULL, 'avatar.png', NULL, NULL, NULL, NULL, '2020-03-13 08:15:19'),
(3, 'temp', 'temp', 'Temp', NULL, 'temp@gmail.com', '123456', '', 'Abdul Hakeem', 'avatar.png', 'ce5e4d11efc45629fe15aa9cd4dd43931.png', '2022-12-31', NULL, NULL, '2020-07-10 10:36:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car`
--
ALTER TABLE `car`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `carimg`
--
ALTER TABLE `carimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`ctval`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testim`
--
ALTER TABLE `testim`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `car`
--
ALTER TABLE `car`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `carimg`
--
ALTER TABLE `carimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `ctval` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=461;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testim`
--
ALTER TABLE `testim`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
