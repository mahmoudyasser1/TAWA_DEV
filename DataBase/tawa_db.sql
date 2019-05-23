-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2019 at 09:50 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tawa_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `add`
--

CREATE TABLE `add` (
  `User_Username` varchar(14) NOT NULL,
  `FeedBack_ID` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(14) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `FullName` varchar(24) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(24) NOT NULL,
  `confirmpassword` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`, `FullName`, `Phone`, `Email`, `confirmpassword`) VALUES
('Esraa123', '21232f297a57', 'Esraa Salah', '011111111111', 'Esraa@yahoo.com', '21232f297a57');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `User_Username` varchar(14) NOT NULL,
  `Flight_FlightNumber` int(11) NOT NULL,
  `NumberOfSeats` varchar(45) NOT NULL,
  `PaymentMethod` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `Comment` varchar(400) NOT NULL,
  `NumberOfStars` int(11) NOT NULL,
  `ID` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `FlightNumber` int(11) NOT NULL,
  `FlightType` varchar(45) NOT NULL,
  `LevelOfService` varchar(45) NOT NULL,
  `AirLines` varchar(45) NOT NULL,
  `Travel_Date` datetime NOT NULL,
  `Travel_Destination` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `has`
--

CREATE TABLE `has` (
  `Travel_Date` datetime NOT NULL,
  `Travel_Destination` varchar(45) NOT NULL,
  `FeedBack_ID` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manage`
--

CREATE TABLE `manage` (
  `User_Username` varchar(14) NOT NULL,
  `Admin_Username` varchar(14) NOT NULL,
  `Type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `Date` datetime NOT NULL,
  `Destination` varchar(45) NOT NULL,
  `AvailablePlaces` varchar(45) DEFAULT NULL,
  `Resturant` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Username` varchar(14) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `FullName` varchar(24) NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(24) NOT NULL,
  `confirmpassword` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Username`, `Password`, `FullName`, `Phone`, `Email`, `confirmpassword`) VALUES
('Asmaa153', 'd16bfca2aecb', 'Asmaa Hamdy', '012222222222', 'Asmaa@gmail.com', 'd16bfca2aecb'),
('Esraa123', '25f9e794323b', 'Esraa Salah', '011111111111', 'Esraa@yahoo.com', '25f9e794323b'),
('Heba1', '60d516e35042', 'Heba', '015512345678', 'heba@gmail.com', '60d516e35042'),
('Said123', '40f7bc3df36b', 'Said Sayed', '012345678901', 'said@yahoo.com', '40f7bc3df36b'),
('Sara257', 'f8686adf4f0c', 'Sara Sayed', '011234567890', 'said_sara40@yahoo.com', 'f8686adf4f0c'),
('tawa', 'P@$$w0rd', 'tawa web', '010123456789', 'tawaweb@gmail.com', 'P@$$w0rd');

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `User_Username` varchar(14) NOT NULL,
  `Travel_Date` datetime NOT NULL,
  `Travel_Destination` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add`
--
ALTER TABLE `add`
  ADD PRIMARY KEY (`User_Username`,`FeedBack_ID`),
  ADD UNIQUE KEY `User_Username_UNIQUE` (`User_Username`),
  ADD UNIQUE KEY `FeedBack_ID_UNIQUE` (`FeedBack_ID`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Username_UNIQUE` (`Username`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`User_Username`,`Flight_FlightNumber`),
  ADD UNIQUE KEY `User_Username_UNIQUE` (`User_Username`),
  ADD UNIQUE KEY `Flight_FlightNumber_UNIQUE` (`Flight_FlightNumber`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID_UNIQUE` (`ID`);

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`FlightNumber`,`Travel_Date`,`Travel_Destination`),
  ADD UNIQUE KEY `FlightNumber_UNIQUE` (`FlightNumber`);

--
-- Indexes for table `has`
--
ALTER TABLE `has`
  ADD PRIMARY KEY (`Travel_Date`,`Travel_Destination`,`FeedBack_ID`),
  ADD UNIQUE KEY `Travel_Date_UNIQUE` (`Travel_Date`),
  ADD UNIQUE KEY `Travel_Destination_UNIQUE` (`Travel_Destination`),
  ADD UNIQUE KEY `FeedBack_ID_UNIQUE` (`FeedBack_ID`);

--
-- Indexes for table `manage`
--
ALTER TABLE `manage`
  ADD PRIMARY KEY (`User_Username`,`Admin_Username`),
  ADD UNIQUE KEY `User_Username_UNIQUE` (`User_Username`),
  ADD UNIQUE KEY `Admin_Username_UNIQUE` (`Admin_Username`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`Date`,`Destination`),
  ADD UNIQUE KEY `Date_UNIQUE` (`Date`),
  ADD UNIQUE KEY `Destination_UNIQUE` (`Destination`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Username`),
  ADD UNIQUE KEY `Username_UNIQUE` (`Username`),
  ADD UNIQUE KEY `Email_UNIQUE` (`Email`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`User_Username`,`Travel_Date`,`Travel_Destination`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
