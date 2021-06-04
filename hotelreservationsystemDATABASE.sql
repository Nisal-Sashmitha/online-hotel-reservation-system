-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2021 at 10:49 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelreservationsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `cfeedback`
--

CREATE TABLE `cfeedback` (
  `customerName` varchar(200) NOT NULL,
  `dateAndTime` datetime NOT NULL,
  `starsForServices` int(11) NOT NULL,
  `starsForVenues` int(11) NOT NULL,
  `starsForAccomodation` int(11) NOT NULL,
  `starsForPackages` int(11) NOT NULL,
  `AVGstars` float NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `reservationId` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cfeedback`
--

INSERT INTO `cfeedback` (`customerName`, `dateAndTime`, `starsForServices`, `starsForVenues`, `starsForAccomodation`, `starsForPackages`, `AVGstars`, `comment`, `reservationId`) VALUES
('kalhara soisa', '2020-10-23 17:45:47', 5, 3, 3, 4, 3.75, 'good', 1004),
('udith dananjaya', '2020-10-23 17:47:42', 1, 4, 4, 3, 3, 'excelent', 1005),
('chamika munaweera', '2020-10-26 12:15:48', 4, 4, 4, 4, 4, 'excelent', 1006),
('asdasd', '2020-10-26 15:10:10', 3, 2, 2, 2, 2.25, 'very good', 1009),
('nisal sashmitha', '2020-10-26 17:42:03', 4, 4, 4, 4, 4, 'very good', 1010),
('kalhara soisa jaya', '2020-10-27 04:56:36', 1, 4, 5, 5, 3.75, 'excelent', 1012),
('cxvcxv', '2020-10-27 04:58:09', 5, 5, 5, 5, 5, 'very good', 1013);

-- --------------------------------------------------------

--
-- Table structure for table `loyaltyholder`
--

CREATE TABLE `loyaltyholder` (
  `LoyaltyID` int(1) NOT NULL,
  `username` varchar(250) NOT NULL,
  `contactNumber` varchar(10) NOT NULL,
  `email` varchar(200) NOT NULL,
  `loyaltyPoints` int(1) NOT NULL DEFAULT 1,
  `password` varchar(20) NOT NULL,
  `accountCheck` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loyaltyholder`
--

INSERT INTO `loyaltyholder` (`LoyaltyID`, `username`, `contactNumber`, `email`, `loyaltyPoints`, `password`, `accountCheck`) VALUES
(100001, 'admin', '', '', 1, '100001', 0),
(100003, 'kalhara soisa', '0776563460', 'kalharasoisa@gmail.com', 1, '33883janaka', 1),
(100004, 'dananjaya siva', '0776563460', 'danajya@gmail.com', 1, 'dana123', 1),
(100005, 'kasun', '0776565345', 'kasun@gmail.com', 1, 'kasunbanuka', 1),
(100006, 'chamika munaweera', '0776563460', 'chamika@gmail.com', 1, '123', 1),
(100007, 'sdakan wikramarathna', '0776555608', 'sdakan@gmail.com', 1, '123', 1),
(100008, '', '', '', 1, '', 1),
(100009, 'kalhara soisa', '0776555608', 'niosal@gmail.com', 1, '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `packageID` int(1) NOT NULL,
  `packageType` varchar(20) NOT NULL,
  `packageDetails` varchar(200) NOT NULL,
  `pricePerGuest` float NOT NULL,
  `packageName` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`packageID`, `packageType`, `packageDetails`, `pricePerGuest`, `packageName`) VALUES
(1, 'wedding', 'sajkhd kjaskjdh aksjdh asjhd kjsahd ksajhdkjsh akaasdksab dkajsh dsakhd kashdkhsa', 5700, 'PLATINUM'),
(2, 'wedding', 'asd askj dhsakjd nksajhd kjashd jsanhjkdl sakljd jasdh ', 4500, 'GOLD'),
(3, 'wedding', 'sad sadsad sad sad', 3000, 'SILVER'),
(4, 'wedding', 'sjahd kjsahd kjsah dkjsah dkjsakldjsklajd slakjd lsas', 2000, 'BRONZE'),
(5, 'MEETING&CONFERENCE', '', 5000, 'Star Delight'),
(6, 'MEETING&CONFERENCE', '', 4000, 'Golden Key'),
(7, 'MEETING&CONFERENCE', '', 3000, 'Silver Range'),
(8, 'MEETING&CONFERENCE', '', 2000, 'Visionary Vista'),
(9, 'PARTY', '', 5000, 'Spring Fling'),
(10, 'PARTY', '', 4000, 'Golden Light'),
(11, 'PARTY', '', 3000, 'Silver Bliss'),
(12, 'PARTY', '', 2000, 'Cool Daze'),
(13, 'CATERING', '', 5000, 'Taste Buds'),
(14, 'CATERING', '', 4000, 'Fresh Delight'),
(15, 'CATERING', '', 3000, 'Savory Nuts'),
(16, 'CATERING', '', 2000, 'Food Fusion');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentID` int(11) NOT NULL,
  `reservationId` int(1) NOT NULL,
  `totalAmount` float NOT NULL DEFAULT 0,
  `paidAmount` float NOT NULL DEFAULT 0,
  `paymentStatus` varchar(50) NOT NULL DEFAULT 'advance',
  `paymentDate&Time` datetime(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentID`, `reservationId`, `totalAmount`, `paidAmount`, `paymentStatus`, `paymentDate&Time`) VALUES
(10011, 1006, 218000, 87200, 'Fulfilled', '2020-10-26 12:15:31.0'),
(10012, 1007, 815000, 0, 'Advanced', '2020-10-26 12:30:01.0'),
(10016, 1012, 915000, 366000, 'Fulfilled', '2020-10-27 04:48:06.0'),
(10017, 1007, 815000, 326000, 'Fulfilled', '2020-10-27 04:52:49.0'),
(10018, 1013, 606000, 242400, 'Fulfilled', '2020-10-27 04:57:57.0'),
(10019, 1014, 1002000, 400800, 'Fulfilled', '2020-10-27 05:02:21.0');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `reservationId` int(1) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contactNo` varchar(10) NOT NULL,
  `email` varchar(60) NOT NULL,
  `date` datetime NOT NULL,
  `address` varchar(100) NOT NULL,
  `packageId` int(1) NOT NULL,
  `venueId` int(1) NOT NULL,
  `reservationStatus` int(20) NOT NULL DEFAULT 1,
  `numOfGuest` int(1) NOT NULL,
  `LDR` int(1) NOT NULL,
  `LTR` int(1) NOT NULL,
  `SLDR` int(1) NOT NULL,
  `SLTR` int(1) NOT NULL,
  `reservationPin` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`reservationId`, `name`, `contactNo`, `email`, `date`, `address`, `packageId`, `venueId`, `reservationStatus`, `numOfGuest`, `LDR`, `LTR`, `SLDR`, `SLTR`, `reservationPin`) VALUES
(1004, 'kalhara soisa', '0778123342', 'kalharasoisa@gmail.com', '2020-10-23 01:19:00', '', 3, 4, 1, 400, 4, 1, 2, 3, 6724),
(1005, 'udith dananjaya', '0778962343', 'UDITH@gmail.com', '2020-11-28 01:16:00', '', 2, 4, 1, 343, 4, 3, 3, 0, 6972),
(1006, 'chamika munaweera', '0778943424', 'chamika@gmail.com', '2020-10-25 16:42:00', '', 2, 1, 1, 34, 2, 3, 0, 0, 6822),
(1007, 'idalhinna', '0778343424', 'idalhinna@gmail.com', '2020-12-15 07:59:00', '', 2, 1, 1, 168, 0, 3, 0, 0, 8159),
(1008, 'nisal sashmitha', '0778343424', 'nisal@gmail.com', '2020-10-14 18:48:00', '31/A,somawansha mawatha', 16, 6, 1, 343, 0, 0, 0, 0, 5425),
(1009, 'asdasd', '0778943424', 'kalharasoida@gmail.com', '2020-10-08 19:39:00', '', 6, 6, 1, 200, 0, 0, 0, 0, 2865),
(1010, 'nisal sashmitha', '0778967674', 'kalhara@gmail.com', '2020-10-24 01:14:00', '', 11, 3, 1, 499, 3, 3, 3, 3, 6529),
(1011, 'asdasd', '0778967674', 'kalharasoida@gmail.com', '2020-11-28 13:10:00', '', 6, 6, 1, 343, 0, 0, 0, 0, 3260),
(1012, 'kalhara soisa jaya', '0778943424', 'alharasoisaaya@gmail.com', '2020-10-31 09:17:00', '', 2, 6, 1, 200, 0, 3, 0, 3, 3292),
(1013, 'cxvcxv', '0778963424', '121@gmail.com', '2020-10-28 09:27:00', '', 11, 6, 1, 200, 0, 0, 3, 0, 4007),
(1014, 'sadsad', '0778967674', 'kalharasoida@gmail.com', '2020-10-23 09:32:00', '', 7, 6, 1, 334, 0, 0, 0, 0, 7774);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomID` int(1) NOT NULL,
  `roomName` varchar(10) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomID`, `roomName`, `price`) VALUES
(1, 'LDR', 3000),
(2, 'LTR', 3000),
(3, 'SLDR', 2000),
(4, 'SLTR', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venueID` int(1) NOT NULL,
  `venueName` varchar(20) NOT NULL,
  `venueDetails` varchar(200) NOT NULL,
  `maxGuests` int(1) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venueID`, `venueName`, `venueDetails`, `maxGuests`, `price`) VALUES
(1, 'Royal', 'The Royal Grove is tailor - made for family gatherings and other special occasions which is located at the 2 nd floor of the hotel. The venue is 700m 2 space and capacity of 200 guests (seated) with h', 200, 6000),
(2, 'Boss Room', 'The Boss Room is private and comfortable small venue for board meetings and other private gatherings which is located at the 2 nd floor of the hotel. The venue is 600m 2 space and maximum capacity of ', 30, 10000),
(3, 'Green Acres', 'The Green Acres is an outdoor venues , popular choice for open - air wedding receptions , cocktail parties & birthday parties. It is located on the garden annex of the hotel. The venue is 1000m 2 spac', 500, 100000),
(4, 'The Victorian', 'The Victorian is one of the most using venue which is located at the 5 th floor of the hotel. Ideal for weddings , home coming occations & batch parties. The venue is 850m 2 space and capacity of 400 ', 400, 80000),
(6, 'Your Place', '', 500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `vouchercode`
--

CREATE TABLE `vouchercode` (
  `voucherCode` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `startDate` date NOT NULL,
  `expireDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vouchercode`
--

INSERT INTO `vouchercode` (`voucherCode`, `price`, `startDate`, `expireDate`) VALUES
('SW97764MNVD845', 50000, '2020-10-07', '2020-10-08'),
('SW9000MLPZAAAC', 5500, '2020-10-12', '2020-10-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cfeedback`
--
ALTER TABLE `cfeedback`
  ADD KEY `reservationId` (`reservationId`);

--
-- Indexes for table `loyaltyholder`
--
ALTER TABLE `loyaltyholder`
  ADD PRIMARY KEY (`LoyaltyID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`packageID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentID`),
  ADD KEY `reservationId` (`reservationId`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationId`),
  ADD KEY `packageId` (`packageId`),
  ADD KEY `venueId` (`venueId`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`roomID`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venueID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `packageID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10020;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationId` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100000002;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `venueID` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cfeedback`
--
ALTER TABLE `cfeedback`
  ADD CONSTRAINT `cfeedback_ibfk_2` FOREIGN KEY (`reservationId`) REFERENCES `reservation` (`reservationId`) ON DELETE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`reservationId`) REFERENCES `reservation` (`reservationId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_ibfk_1` FOREIGN KEY (`packageId`) REFERENCES `package` (`packageID`),
  ADD CONSTRAINT `reservation_ibfk_2` FOREIGN KEY (`venueId`) REFERENCES `venue` (`venueID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
