-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 09:28 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internet_solution`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `user`, `password`) VALUES
(1, 'admin101', 'admin101');

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` text NOT NULL,
  `name` text NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` text NOT NULL,
  `description` text NOT NULL,
  `long_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_item`
--

INSERT INTO `cart_item` (`id`, `name`, `price`, `image`, `description`, `long_description`) VALUES
('1', 'Router 5', '14', 'naj.png', 'This is a router', 'lorem'),
('2', 'jnina', '150', 'naj.png', '55', 'asga'),
('1001', 'Fahad', '5600', 'naj.png', '456456456', '464545sdafafgagfa');

-- --------------------------------------------------------

--
-- Table structure for table `crewlogin`
--

CREATE TABLE `crewlogin` (
  `crewid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `joiningdate` varchar(30) NOT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `crewlogin`
--

INSERT INTO `crewlogin` (`crewid`, `name`, `password`, `phone`, `email`, `address`, `joiningdate`, `salary`) VALUES
(11321, 'Joy', '123456', 0, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `pass`) VALUES
(1234, 123456),
(12235345, 1254235),
(0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `package_request`
--

CREATE TABLE `package_request` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `package` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package_request`
--

INSERT INTO `package_request` (`id`, `name`, `mobile`, `email`, `address`, `package`) VALUES
(41, '', 0, '', '', NULL),
(42, '', 0, '', '', NULL),
(43, 'Md. Najmul Kabir', 1679704843, 'najmul15-11321@diu.edu.bd', 'Goran', NULL),
(44, 'Md. Najmul Kabir', 1679704843, 'nmai@nai.com', 'Goran', NULL),
(45, 'Md. Najmul Kabir', 1679704843, 'najmul15-11321@diu.edu.bd', 'Goran', '1'),
(46, 'Md. Najmul Kabir', 1679704843, 'najmul15-11321@diu.edu.bd', 'Goran', '1');

-- --------------------------------------------------------

--
-- Table structure for table `product_request`
--

CREATE TABLE `product_request` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_request`
--

INSERT INTO `product_request` (`id`, `name`, `mobile`, `email`, `address`, `product_id`, `quantity`, `total`) VALUES
(25, 'Md. Najmul Kabir', 1679704843, 'najmul15-11321@diu.edu.bd', 'Goran', 2, 5, 7205),
(26, 'Joy', 1234567890, 'najmul15-11321@diu.edu.bd', 'basabo', 2, 1, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `quick_service`
--

CREATE TABLE `quick_service` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `problem` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `action` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quick_service`
--

INSERT INTO `quick_service` (`id`, `user_id`, `problem`, `date`, `action`) VALUES
(19, 1234, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-04-09 04:54:25', 'WORKING ON IT'),
(20, 4567, 'bbbbbbbbbbbbbbbbbbbbbbbbbbbb', '2021-04-09 09:28:54', 'SOLVED'),
(23, 0, 'daaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-04-09 08:13:33', 'PENDING'),
(25, 2543674, 'hfgjjhasaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-04-09 08:13:44', 'PENDING'),
(26, 0, 'aaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-04-09 09:31:14', 'WORKING ON IT'),
(27, 0, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-04-09 08:13:53', 'PENDING'),
(29, 12352, 'asaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2021-04-09 08:14:10', 'PENDING'),
(30, 3242, 'dsssssssssssssssssgssssssssssssssssss', '2021-04-09 08:14:19', 'PENDING'),
(31, 123456, 'gsdgsgfdbdfhrthdvbndhdfbndffhdhdfhfdhbdfgh', '2021-04-09 08:14:26', 'PENDING'),
(33, 124564, 'sokal theke net nai vai ektu dekhben ki kosto kore \r\n', '2021-04-09 08:15:13', 'PENDING');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `course` varchar(100) NOT NULL,
  `contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `course`, `contact`) VALUES
(5, 'New', 'DATA', 'MATH', 1674),
(8, 'Rupa', 'Pad', 'mare nai', 2),
(9, 'gagsag.', 'agag', 'asga', 424),
(10, 'asfafaf', 'agag', 'agag', 2352),
(11, 'afgsdgsg', 'shfdsbdhgb', '3', 232),
(12, 'gasg', 'agdgas', 'agdags', 333),
(13, 'Md.', 'Kabir', 'aga', 1679704843),
(14, 'gsgas', 'agdg', 'gasdg', 6346),
(15, 'Md.', 'Kabir', 'fsaf', 1679704843);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ipadd` varchar(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `pack` varchar(1000) NOT NULL,
  `address` text NOT NULL,
  `nid` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `phone`, `email`, `ipadd`, `pass`, `pack`, `address`, `nid`) VALUES
(333444, 'New user', 1679704843, 'najmulkabir178@gmail.com', '192.17.6.12', '$2y$10$Kx499cMZvlg.jRhHG70ReeAkPWRsF7yiLknM5MuDvYv1EKAx0GmUq', '4', 'Goran', '123456'),
(654123, 'Siam ', 1552330499, 'siam@mail.com', '192.168.3.36', '$2y$10$.RwaufBpZn.6bIawPR68/OQOMB6rvAjVaBWEZLzw9c.jpBwK0nRwq', '7', 'Faridpur', '987456'),
(789654, 'Siam', 1679704843, 'najmul15-11321@diu.edu.bd', '192.5.5.', '123456', '2', '551', '444444');

-- --------------------------------------------------------

--
-- Table structure for table `user_payment1`
--

CREATE TABLE `user_payment1` (
  `userid` int(11) NOT NULL,
  `pack` varchar(100) NOT NULL,
  `January` varchar(10) NOT NULL,
  `February` varchar(10) NOT NULL,
  `March` varchar(10) NOT NULL,
  `April` varchar(10) NOT NULL,
  `May` varchar(10) NOT NULL,
  `June` varchar(10) NOT NULL,
  `July` varchar(10) NOT NULL,
  `August` varchar(10) NOT NULL,
  `September` varchar(10) NOT NULL,
  `October` varchar(10) NOT NULL,
  `November` varchar(10) NOT NULL,
  `December` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_payment1`
--

INSERT INTO `user_payment1` (`userid`, `pack`, `January`, `February`, `March`, `April`, `May`, `June`, `July`, `August`, `September`, `October`, `November`, `December`) VALUES
(333444, '4', 'PAID', 'UNPAID', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_payment2`
--

CREATE TABLE `user_payment2` (
  `userid` int(11) NOT NULL,
  `pack` varchar(100) NOT NULL,
  `January` varchar(50) NOT NULL,
  `February` varchar(50) NOT NULL,
  `March` varchar(50) NOT NULL,
  `April` date NOT NULL,
  `May` date NOT NULL,
  `June` date NOT NULL,
  `July` date NOT NULL,
  `August` date NOT NULL,
  `September` date NOT NULL,
  `October` date NOT NULL,
  `November` date NOT NULL,
  `December` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_payment2`
--

INSERT INTO `user_payment2` (`userid`, `pack`, `January`, `February`, `March`, `April`, `May`, `June`, `July`, `August`, `September`, `October`, `November`, `December`) VALUES
(333444, '4', '10-04-2021', '10-04-2021', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `worksheet`
--

CREATE TABLE `worksheet` (
  `id` int(11) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  `username` varchar(100) NOT NULL,
  `userid` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` text NOT NULL,
  `comtime` varchar(50) NOT NULL,
  `soltime` varchar(50) NOT NULL,
  `team` varchar(200) NOT NULL,
  `complain` text NOT NULL,
  `current` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worksheet`
--

INSERT INTO `worksheet` (`id`, `date`, `username`, `userid`, `phone`, `address`, `comtime`, `soltime`, `team`, `complain`, `current`) VALUES
(2, '10/04/2021', 'Joy', 0, 1679704843, 'Goran', '7.15', '8.15', 'Joy Siam', 'Nosto', 'okay'),
(3, '10/04/2021', 'Siam', 0, 1552330499, 'Faridpur', '3.15', '5.15', 'Joy Fahad', 'Sob thik thak ekhn ?', 'okay');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crewlogin`
--
ALTER TABLE `crewlogin`
  ADD PRIMARY KEY (`crewid`);

--
-- Indexes for table `package_request`
--
ALTER TABLE `package_request`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `product_request`
--
ALTER TABLE `product_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quick_service`
--
ALTER TABLE `quick_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_payment1`
--
ALTER TABLE `user_payment1`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `user_payment2`
--
ALTER TABLE `user_payment2`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `worksheet`
--
ALTER TABLE `worksheet`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package_request`
--
ALTER TABLE `package_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `product_request`
--
ALTER TABLE `product_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `quick_service`
--
ALTER TABLE `quick_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `worksheet`
--
ALTER TABLE `worksheet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
