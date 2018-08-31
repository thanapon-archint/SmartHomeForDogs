-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2018 at 12:56 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shd`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogs`
--

CREATE TABLE `dogs` (
  `dog_id` int(11) NOT NULL,
  `dog_name` text CHARACTER SET utf8 NOT NULL,
  `dog_info` text CHARACTER SET utf8 NOT NULL,
  `dog_type` text CHARACTER SET utf8 NOT NULL,
  `dog_color` varchar(50) CHARACTER SET utf8 NOT NULL,
  `dog_age` varchar(50) NOT NULL,
  `cu_id` int(11) NOT NULL,
  `dog_address` text CHARACTER SET utf8,
  `dog_image` varchar(100) DEFAULT NULL,
  `location_x` double DEFAULT NULL,
  `location_y` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dogs`
--

INSERT INTO `dogs` (`dog_id`, `dog_name`, `dog_info`, `dog_type`, `dog_color`, `dog_age`, `cu_id`, `dog_address`, `dog_image`, `location_x`, `location_y`) VALUES
(39, 'น้องหมา', 'น้องหมาตัวนี้แอบมาหลบอยู่ในบ้านได้ 2-3 วันแล้ว น้องนิสัยดีมากกินเก่ง มีใครสนใจติดต่อมาได้เลยค่ะ', 'Labrador Retriever', 'White', 'Small', 1, 'Thaksin 1 Rd, Tambon Lak Hok, Amphoe Mueang Pathum Thani, Chang Wat Pathum Thani 12000, Thailand\r\nLine id: Pon007', '39dogs.jpg', 13.9857, 100.599983),
(40, 'หมาไทยแท้', '#หนูอยากได้บ้าน หาบ้านให้น้องหมาค่ะอายุ2เดือน ผู้หญิงทั้งคู่ค่ะ น้องมีพี่น้องอยู่8ชีวิตค่ะได้บ้านไปแล้ว6ตัวยังเหลืออีก2ตัวค่ะที่ยังไม่ได้บ้าน มีใครสนใจอยากรับเลี้ยงเด็กๆไหมค่ะ', 'Thai', 'Brown', 'Puppy', 1, '3214, Tambon Khlong Nung, Amphoe Khlong Luang, Chang Wat Pathum Thani 12120, Thailand', '40dogs.jpg', 14.063565, 100.636242),
(42, 'ลูกเจ้าปุย', 'หมาเพศเมียที่บ้านได้คลอดลูกออกมาจำนวนมาก(ภาพตัวอย่างตัวเดียว) ตอนนี้ที่บ้านเลี่ยงไม่ไหวแล้ว รบกวนผู้ใจดีรับไปเลี้ยงด้วยครับ', 'Other', 'White', 'Puppy', 1, 'Thanon Khlong Luang, Tambon Khlong Nung, Amphoe Khlong Luang, Chang Wat Pathum Thani 12120, Thailand', '42dogs.jpg', 14.074897, 100.604006),
(43, 'French Bulldog', 'This is a dog', 'Bulldog', 'Brown', 'Medium', 4, 'Thanon Khlong Luang - Udon Ratthaya - 3214 Tambon Chiang Rak Yai, Amphoe Sam Khok, Chang Wat Pathum Thani 12160, Thailand', '43dogs.jpg\r\n', 14.064897, 100.582033),
(44, 'Rottweiler', 'This is a dog', 'Other', 'Black', 'Large', 4, 'ถนน เลียบคลองเปรมประชากร Tambon Suan Prink Thai, Amphoe Mueang Pathum Thani, Chang Wat Pathum Thani 12120, Thailand', '44dogs.jpg', 14.030259, 100.59714),
(45, 'Yorkshire Terrier', 'This is a dog', 'Other', 'White', 'Puppy', 4, 'Soi Mu Ban Kritsada Nakhon 19 Soi Thichachon 4/2, Tambon Khlong Nung, Amphoe Khlong Luang, Chang Wat Pathum Thani 12120, Thailand', '45dogs.jpg', 14.04467, 100.651932);

-- --------------------------------------------------------

--
-- Table structure for table `dogs_vag`
--

CREATE TABLE `dogs_vag` (
  `dc_id` int(11) NOT NULL,
  `dc_image` varchar(50) DEFAULT NULL,
  `dc_detail` varchar(100) CHARACTER SET utf8 DEFAULT NULL,
  `dc_x` double DEFAULT NULL,
  `dc_y` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dogs_vag`
--

INSERT INTO `dogs_vag` (`dc_id`, `dc_image`, `dc_detail`, `dc_x`, `dc_y`) VALUES
(61, '32doggo.jpg', 'test12', 14.083834, 100.520885);

-- --------------------------------------------------------

--
-- Table structure for table `dog_shelter`
--

CREATE TABLE `dog_shelter` (
  `dogs_id` int(11) NOT NULL,
  `shelter_id` int(11) NOT NULL,
  `dogs_name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  `dogs_type` varchar(50) NOT NULL,
  `dogs_color` varchar(50) NOT NULL,
  `dogs_age` varchar(50) NOT NULL,
  `shelter_address` text CHARACTER SET utf8 NOT NULL,
  `dogs_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dog_shelter`
--

INSERT INTO `dog_shelter` (`dogs_id`, `shelter_id`, `dogs_name`, `dogs_type`, `dogs_color`, `dogs_age`, `shelter_address`, `dogs_image`) VALUES
(1, 1, 'Shelter_01', 'Thai', 'Brown', 'Puppy', 'เส้นทางการเดินทาง : ไปทางรังสิต นครนายก จนถึงคลอง 15 จะเจอทางโค้ง(อันตราย) พอพ้นโค้งจะเจอสี่แยกไฟแดง\r\nมีป้ายบอกเลี้ยวขวาไปองครักษ์ แต่ตรงไปทางนครนายก ตรงไปประมาณ14 กิโล( ระหว่างทางจะเห็นปั๊ม ปตท ทางขวามือ) จะถึงสี่แยกไฟแดง ให้เลี้ยวซ้ายไปทางน้ำตกกระอางและ โรงเรียนนายร้อย ไปตามทางราวๆ 6 กิโลเมตร จะเจอสี่แยกบ้านนา ให้ตรงไปทางน้ำตกกระอางไปประมาณ 13 กิโลเมตร ระหว่างทางจะเจอโค้งใหญ่ๆ ให้ไปตามโค้ง จะผ่านทางแยกเข้าโรงเรียนเตรียมทหารที่อยู่ขวามือ ตรงไปเรื่อยๆจะเห็นวัดโปร่งไผ่จันทรังสีอยู่ทางขวามือ (สังเกตมีเสือปูนปั้น2 ตัวอยู่ตรงทางเข้าวัด) เลี้ยวเข้าไปในวัดจะเห็นโรงเลี้ยงสุนัข', 'dog01.jpg'),
(2, 1, 'Shelter_02', 'Other', 'Brown', 'Small', '', 'dog02.jpg'),
(3, 1, 'Shelter_03', 'Other', 'Brown', 'Medium', 'xx', 'dog03.jpg'),
(4, 1, 'Shelter_04', 'Other', 'Brown', 'Medium', 'xx', 'dog04.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `cu_id` int(11) NOT NULL,
  `username` varchar(11) NOT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(11) NOT NULL DEFAULT 'User',
  `name` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`cu_id`, `username`, `email`, `password`, `usertype`, `name`) VALUES
(1, 'pon', NULL, '123', 'User', NULL),
(3, 'pon2', NULL, '123', 'User', NULL),
(4, 'pun', NULL, '123', 'User', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogs`
--
ALTER TABLE `dogs`
  ADD PRIMARY KEY (`dog_id`);

--
-- Indexes for table `dogs_vag`
--
ALTER TABLE `dogs_vag`
  ADD PRIMARY KEY (`dc_id`);

--
-- Indexes for table `dog_shelter`
--
ALTER TABLE `dog_shelter`
  ADD PRIMARY KEY (`dogs_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`cu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dogs`
--
ALTER TABLE `dogs`
  MODIFY `dog_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `dogs_vag`
--
ALTER TABLE `dogs_vag`
  MODIFY `dc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT for table `dog_shelter`
--
ALTER TABLE `dog_shelter`
  MODIFY `dogs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `cu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
