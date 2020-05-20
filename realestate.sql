-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 08, 2020 at 06:32 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `realestate`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `addressID` int(11) NOT NULL,
  `country` varchar(11) NOT NULL,
  `city` varchar(11) NOT NULL,
  `street` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`addressID`, `country`, `city`, `street`) VALUES
(1, 'Egypt', 'Cairo', 'Fakhry');

-- --------------------------------------------------------

--
-- Table structure for table `agreement`
--

CREATE TABLE `agreement` (
  `agreementID` int(11) NOT NULL,
  `validate` int(11) NOT NULL,
  `sellerID` int(11) NOT NULL,
  `BuyerID` int(11) NOT NULL,
  `PropertyID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `ID` int(11) NOT NULL,
  `city` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`ID`, `city`) VALUES
(2, 'Alex'),
(4, 'Sharm'),
(5, 'Cairo'),
(6, 'Matrouh'),
(7, 'Suhaj');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackID` int(11) NOT NULL,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackID`, `from`, `to`, `feedback`) VALUES
(1, 12, 11, 'I\'m very pleased with this costumer.'),
(10, 9, 12, 'LOVE HER'),
(11, 9, 12, 'GAMDAA'),
(12, 10, 12, 'MOZZAAAAAA'),
(14, 21, 12, 'good'),
(15, 21, 12, 'Amazing'),
(17, 12, 9, 'She is really neat'),
(19, 25, 26, 'Terrible buyer ows me 16M');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `ID` int(11) NOT NULL,
  `question` varchar(225) NOT NULL,
  `answer` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`ID`, `question`, `answer`) VALUES
(1, 'Who are we?', 'Real estate Copmpany in Egypt'),
(2, 'How to view properties?', 'Log in as a Buyer.'),
(3, 'What’s the difference between a Realtor/Real Estate Agent and a Real Estate Lawyer?', 'Realtors and Agents are professionals who assist people in buying and selling real estate.');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `messageID` int(11) NOT NULL,
  `senderID` int(11) NOT NULL,
  `recieverID` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`messageID`, `senderID`, `recieverID`, `content`) VALUES
(1, 21, 12, 'WASSSAAAPPPPP!!!!'),
(2, 7, 21, 'BABEEEE'),
(3, 10, 23, 'hii'),
(4, 23, 10, 'heyy'),
(32, 10, 23, 'uoo?'),
(33, 10, 7, 'testing 106'),
(34, 10, 11, 'testing 106'),
(35, 10, 11, 'testing 106'),
(36, 10, 10, 'samskjbshjdgeuygd'),
(37, 10, 10, 'samskjbshjdgeuygd'),
(38, 10, 10, 'samskjbshjdgeuygd'),
(39, 10, 10, 'helloo againn'),
(40, 10, 10, 'hey there');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL,
  `cardName` varchar(24) NOT NULL,
  `cardNo` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `expDate` date NOT NULL,
  `buyerID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `ID` int(11) NOT NULL,
  `ownerID` int(11) NOT NULL,
  `title` varchar(24) NOT NULL,
  `area` varchar(24) DEFAULT NULL,
  `propertyType` varchar(24) DEFAULT NULL,
  `noOfRooms` varchar(11) DEFAULT NULL,
  `noOfBathrooms` varchar(11) DEFAULT NULL,
  `promoted` varchar(11) NOT NULL DEFAULT 'no',
  `price` varchar(11) DEFAULT NULL,
  `picture` varchar(24) NOT NULL,
  `city` varchar(225) NOT NULL,
  `picture1` varchar(20) NOT NULL,
  `picture2` varchar(20) NOT NULL,
  `picture3` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`ID`, `ownerID`, `title`, `area`, `propertyType`, `noOfRooms`, `noOfBathrooms`, `promoted`, `price`, `picture`, `city`, `picture1`, `picture2`, `picture3`) VALUES
(3, 11, 'Villa', '1000', 'Sale', '6', '5', 'yes', '1000000', 's2.jpg', 'Sharm', 'rec1.jpg', 'liv1.jpg', 'bed1.jpg'),
(6, 11, 'House', '200', 'Rent', '3', '2', 'no', '500', 's3.jpg', 'Alex', 'rec2.jpg', 'liv2.jpg', 'bed2.jpg'),
(7, 13, 'Duplex', '200', 'Rent', '3', '2', 'no', '3', 's2.jpg', 'Sharm', 'rec3.jpg', 'liv3.jpg', 'bed3.jpg'),
(8, 12, 'Villa', '600', 'Rent', '6', '3', 'no', '7000', 's2.jpg', 'Sharm', 'rec4.jpg', 'liv4.jpg', 'bed4.jpg'),
(23, 11, 'House', '200', 'Sale', '3', '4', 'no', '500', 's3.jpg', 'Alex', 'rec5.jpg', 'liv5.jpg', 'bed5.jpg'),
(24, 12, 'Villa', '600', 'Rent', '6', '3', 'no', '7000', 's1.jpg', 'Cairo', 'rec6.jpg', 'liv6.jpg', 'bed6.jpg'),
(55, 17, 'House', '150', 'Sale', '1', '3', 'no', '500', 's2.jpg', 'Cairo', 'rec7.jpg', 'liv7.jpg', 'bed7.jpg'),
(57, 12, 'House', '1', 'Sale', '3', '3', 'no', '1000', 's1.jpg', 'Cairo', 'rec9.jpg', 'liv9.jpg', 'bed9.jpg'),
(59, 12, 'Villa', '200', 'Rent', '3', '3', 'no', '500', 's1.jpg', 'Alex', 'rec10.jpg', 'liv10.jpg', 'bed10.jpg'),
(60, 20, 'Villa', '745', 'Rent', '5', '3', 'no', '10000', 's3.jpg', 'Sharm', 'rec1.jpg', 'liv1.jpg', 'bed1.jpg'),
(75, 10, 'Villa', '200', 'Sale', '2', '1', 'yes', '2468', 's3.jpg', 'Cairo', 'rec3.jpg', 'liv3.jpg', 'bed3.jpg'),
(76, 23, 'Hut', '250', 'Rent', '4', '1', 'yes', '5000', 's2.jpg', 'Matrouh', 'rec4.jpg', 'liv4.jpg', 'bed4.jpg'),
(77, 25, 'House', '54', 'Sale', '1', '1', 'no', '16000000', 's2.jpg', 'Matrouh', 'rec5.jpg', 'liv5.jpg', 'bed5.jpg'),
(78, 7, 'Villa', '3', 'Rent', '1', '2', 'yes', '1555', 's1.jpg', 'Matrouha', 'rec1.jpg', 'liv1.jpg', 'bed1.jpg'),
(80, 7, 'Apartment', '2000', 'Rent', '1', '1', 'yes', '5555', 's1.jpg', 'Alex', 'rec1.jpg', 'liv1.jpg', 'bed1.jpg'),
(81, 7, 'Apartment', '1000', 'Rent', '1', '1', 'yes', '2', 's1.jpg', 'Alex', 'bed9.jpg', 'bed7.jpg', 'liv1.jpg'),
(82, 7, 'Apartment', '1', 'Rent', '1', '1', 'yes', '1233', 's1.jpg', 'Alex', 'liv1.jpg', 'rec1.jpg', 'bed1.jpg'),
(83, 7, 'Villa', '2999', 'Rent', '2', '2', 'yes', '123', 's1.jpg', 'Cairo', 'liv1.jpg', 'rec1.jpg', 'liv1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `property2`
--

CREATE TABLE `property2` (
  `ID` int(11) NOT NULL,
  `ownerID` int(11) NOT NULL,
  `title` varchar(24) NOT NULL,
  `area` varchar(24) DEFAULT NULL,
  `propertyType` varchar(24) DEFAULT NULL,
  `noOfRooms` varchar(11) DEFAULT NULL,
  `noOfBathrooms` varchar(11) DEFAULT NULL,
  `promoted` varchar(11) NOT NULL DEFAULT 'no',
  `price` varchar(11) DEFAULT NULL,
  `picture` varchar(24) NOT NULL,
  `city` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property2`
--

INSERT INTO `property2` (`ID`, `ownerID`, `title`, `area`, `propertyType`, `noOfRooms`, `noOfBathrooms`, `promoted`, `price`, `picture`, `city`) VALUES
(3, 11, 'Villa', '1000', 'Sale', '6', '5', 'yes', '1000000', 'i6.jpg', 'Sharm'),
(7, 13, 'Duplex', '200', 'Sale', '3', '2', 'no', '3', 's2.jpg', 'Sharm'),
(8, 12, 'Villa', '600', 'Rent', '6', '3', 'no', '7000', 's2.jpg', 'Sharm'),
(23, 11, 'House', '200', 'Sale', '3', '4', 'no', '500', 's3.jpg', 'Alex'),
(24, 12, 'Villa', '600', 'Rent', '6', '3', 'no', '7000', 's1.jpg', 'Cairo'),
(55, 17, 'House', '150', 'Sale', '1', '3', 'no', '500', 's2.jpg', 'Cairo'),
(56, 7, 'Villa', '200', 'Rent', '3', '2', 'no', '300', 'bed8.jpg', 'Cairo'),
(57, 12, 'House', '1', 'Sale', '3', '3', 'no', '1000', 's1.jpg', 'Cairo'),
(59, 12, 'Villa', '200', 'Rent', '3', '3', 'no', '500', 's1.jpg', 'Alex'),
(60, 20, 'Villa', '745', 'Rent', '5', '3', 'no', '10000', 's3.jpg', 'Sharm'),
(75, 10, 'Villa', '200', 'Sale', '2', '1', 'yes', '2468', 's3.jpg', 'Cairo'),
(76, 23, 'Hut', '250', 'Rent', '4', '1', 'yes', '5000', 's2.jpg', 'Bali'),
(77, 25, 'Single Family Home', '54', 'Sale', '1', '1', 'no', '16000000', 's2.jpg', 'Zimba');

-- --------------------------------------------------------

--
-- Table structure for table `Request`
--

CREATE TABLE `Request` (
  `requestID` int(11) NOT NULL,
  `propID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `SellerID` int(11) NOT NULL,
  `status` varchar(11) NOT NULL DEFAULT 'requested'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Request`
--

INSERT INTO `Request` (`requestID`, `propID`, `userID`, `SellerID`, `status`) VALUES
(5, 7, 9, 13, 'requested'),
(6, 24, 9, 12, 'declined'),
(20, 8, 9, 12, 'approved'),
(21, 57, 9, 12, 'approved'),
(24, 24, 21, 12, 'approved'),
(25, 24, 21, 12, 'approved'),
(37, 3, 10, 11, 'requested'),
(38, 3, 10, 11, 'requested'),
(41, 59, 10, 12, 'requested'),
(43, 7, 10, 13, 'requested'),
(46, 76, 10, 23, 'requested'),
(47, 75, 10, 10, 'requested'),
(48, 8, 10, 12, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `soldprops`
--

CREATE TABLE `soldprops` (
  `propID` int(11) NOT NULL,
  `buyerID` int(11) NOT NULL,
  `sellerID` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `ID` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `propertyType` tinyint(1) NOT NULL,
  `address` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `ID` int(11) NOT NULL,
  `type` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`ID`, `type`) VALUES
(2, 'Apartment'),
(4, 'Villa'),
(5, 'House'),
(6, 'Duplex');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `fullname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `mobile`, `username`, `email`, `password`, `role`) VALUES
(1, 'Admin', '012345677', 'admin', 'admin@admin.com', 'admin', 'admin'),
(7, 'Sara Ahmed', '0108823432', 'sara.a', 'seller@gmail.com', '123', 'seller'),
(8, 'Dalia Yasser', '01237654998', 'dalia', 'dodo.yasser@gmail.com', '123', 'buyer'),
(9, 'khadija Hamdy', '0109263130', 'dija', 'hamdykhadija@gmail.com', 'dija', 'buyer'),
(10, 'Noha Sabry', '01000100257', 'noha', 'buyer@gmail.com', '123', 'buyer'),
(11, 'Sherif Dahan', '01028822293', 'Chico', 'shetifdahan@gmail.com', 'sherifgamal', 'seller'),
(12, 'Habiba Abady', '01272294484', 'bambi', 'habiba@gmail.com', 'sexy', 'seller'),
(13, 'Suna', '01122556678', 'suna', 'suna@gmail.com', '123', 'seller'),
(16, 'ss', 'ssss', 'ss', 'ss@s.com', 'ss', 'seller'),
(17, 'Khaled Hamdy', '01009888833', 'khaled', 'khaled@gmail.com', '123', 'seller'),
(18, 'jj ha', '01983435', 'a', 'a@j.com', 'a', 'seller'),
(19, 'Jana', '1111111111', 'jay', 'jay@gmail.com', 'a', 'seller'),
(20, 'Yusuf Hamdy', '01092631300', 'YusufHamdy', 'y@gmail.com', 'lol', 'seller'),
(21, 'Amr Hussein', '010492631300', 'amr', 'amr@gmail.com', '123', 'buyer'),
(22, 'a2djkc', '1234567890000', 'asd', 'a@d.com', '2', 'seller'),
(23, 'Khaled Magued', '01063795325', 'Khokha', 'kmagued@gmail.com', 'khaled123', 'seller'),
(25, 'Amr Khalifa', '01399554387', 'uncleamr', 'iambuggingyou@gmail.com', 'turkey1', 'seller'),
(26, 'Muhammad Khalifa', '01092631008', 'khalifa', 'Mkhalifa503@gmail.com', '1234567', 'buyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`addressID`);

--
-- Indexes for table `agreement`
--
ALTER TABLE `agreement`
  ADD PRIMARY KEY (`agreementID`),
  ADD KEY `pdel` (`PropertyID`),
  ADD KEY `buyer` (`BuyerID`),
  ADD KEY `seller` (`sellerID`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackID`),
  ADD KEY `sdelete` (`to`),
  ADD KEY `fdelete` (`from`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`);

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `iddelete` (`ownerID`);

--
-- Indexes for table `property2`
--
ALTER TABLE `property2`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `iddelete` (`ownerID`);

--
-- Indexes for table `Request`
--
ALTER TABLE `Request`
  ADD PRIMARY KEY (`requestID`),
  ADD KEY `iidelete` (`SellerID`),
  ADD KEY `bdelete` (`userID`),
  ADD KEY `pdelete` (`propID`);

--
-- Indexes for table `soldprops`
--
ALTER TABLE `soldprops`
  ADD PRIMARY KEY (`propID`),
  ADD KEY `sdel` (`sellerID`),
  ADD KEY `bdel` (`buyerID`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_mobile_unique` (`mobile`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `addressID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `agreement`
--
ALTER TABLE `agreement`
  MODIFY `agreementID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `messageID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `property2`
--
ALTER TABLE `property2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `Request`
--
ALTER TABLE `Request`
  MODIFY `requestID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agreement`
--
ALTER TABLE `agreement`
  ADD CONSTRAINT `buyer` FOREIGN KEY (`BuyerID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pdel` FOREIGN KEY (`PropertyID`) REFERENCES `property2` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seller` FOREIGN KEY (`sellerID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `fdelete` FOREIGN KEY (`from`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sdelete` FOREIGN KEY (`to`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property`
--
ALTER TABLE `property`
  ADD CONSTRAINT `del` FOREIGN KEY (`ownerID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `property2`
--
ALTER TABLE `property2`
  ADD CONSTRAINT `iddelete` FOREIGN KEY (`ownerID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `Request`
--
ALTER TABLE `Request`
  ADD CONSTRAINT `bdelete` FOREIGN KEY (`userID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `iidelete` FOREIGN KEY (`SellerID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pdelete` FOREIGN KEY (`propID`) REFERENCES `property2` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `soldprops`
--
ALTER TABLE `soldprops`
  ADD CONSTRAINT `bdel` FOREIGN KEY (`buyerID`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pidelete` FOREIGN KEY (`propID`) REFERENCES `property2` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sdel` FOREIGN KEY (`sellerID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
