--
-- Database: `iclub`
--

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `bus_id` int(11) NOT NULL,
  `log_id` int(11) NOT NULL DEFAULT '0',
  `bus_no` int(11) NOT NULL,
  `route_no` int(11) NOT NULL,
  `bus_reg` varchar(11) NOT NULL,
  `in_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `out_time` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `curr_stat` varchar(8) NOT NULL DEFAULT 'inside',
  `driver_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`bus_id`, `log_id`, `bus_no`, `route_no`, `bus_reg`, `in_time`, `out_time`, `timestamp`, `curr_stat`, `driver_id`) VALUES
(1, 0, 323, 2, '212', '2016-09-11 13:53:57', '0000-00-00 00:00:00', '2016-09-11 13:53:57', 'inside', 5),
(2, 0, 66, 19, '3184', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-09-13 03:05:12', 'inside', 33),
(3, 0, 5, 67, 'TN02-1242', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2016-11-19 04:42:51', 'inside', 34);

-- --------------------------------------------------------

--
-- Table structure for table `driver`
--

CREATE TABLE `driver` (
  `driver_id` int(3) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `driv_cntct_no` int(11) NOT NULL,
  `alt_cntct_no` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'available'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driver`
--

INSERT INTO `driver` (`driver_id`, `driver_name`, `driv_cntct_no`, `alt_cntct_no`, `address`, `status`) VALUES
(5, 'dsadajjk', 42, 2134, 'dasdj,dadik', 'available'),
(33, 'bjhfjvfhgv', 6887687, 654664646, 'vcffhcvhgf,ghrhgfvnvhf,hgfhfh\r\n', 'available'),
(34, 'tyfhfyfjfuy', 135561811, 418191, 'hhvhdtdhv,hjgjhcaasgygjhv', 'available'),
(35, 'Shree Ravu', 5656757, 2147483647, 'gjjgjvjh,hjgkgfasgk\r\n', 'available'),
(37, 'ANghkhkjhkh', 0, 686876786, 'jvghfj,65mjbmnb', 'available');

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `log_id` int(11) NOT NULL,
  `bus_id` int(11) NOT NULL,
  `driver_id` int(11) NOT NULL,
  `route_no` int(11) NOT NULL,
  `bus_no` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`log_id`, `bus_id`, `driver_id`, `route_no`, `bus_no`, `status`, `timestamp`) VALUES
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:34:43'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:35:01'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:35:25'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:35:37'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:35:51'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:35:51'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:36:07'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:37:11'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:38:07'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:38:22'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:38:35'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:38:52'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:38:52'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:38:53'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:38:53'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:39:03'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:39:03'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:39:03'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:39:03'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:39:04'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:39:27'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:39:27'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:39:27'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:39:50'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:39:50'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:39:51'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:40:17'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:40:17'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:40:31'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:40:32'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:40:41'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:42:50'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:42:51'),
(0, 3, 34, 0, 0, 'inside', '2016-11-19 04:42:51');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_cntct` int(11) NOT NULL,
  `alt_cntct` int(11) NOT NULL,
  `txt_email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `full_name`, `user_name`, `user_cntct`, `alt_cntct`, `txt_email`, `password`) VALUES
(1, 'Samyak', 'sam', 2147483647, 1234567890, 'sam.shreyash@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`bus_id`),
  ADD UNIQUE KEY `bus_no` (`bus_no`),
  ADD UNIQUE KEY `bus_reg` (`bus_reg`),
  ADD UNIQUE KEY `driver_id` (`driver_id`);

--
-- Indexes for table `driver`
--
ALTER TABLE `driver`
  ADD PRIMARY KEY (`driver_id`),
  ADD UNIQUE KEY `driv_cntct_no` (`driv_cntct_no`),
  ADD UNIQUE KEY `alt_cntct_no` (`alt_cntct_no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `bus_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `driver`
--
ALTER TABLE `driver`
  MODIFY `driver_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
