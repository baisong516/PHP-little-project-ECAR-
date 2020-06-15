-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2020-06-15 10:19:51
-- 服务器版本： 10.1.37-MariaDB
-- PHP 版本： 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `ecarsdb`
--

-- --------------------------------------------------------

--
-- 表的结构 `cars`
--

CREATE TABLE `cars` (
  `car_id` int(11) NOT NULL,
  `image_filename` varchar(50) NOT NULL,
  `details` varchar(100) NOT NULL,
  `price_paid` decimal(10,0) NOT NULL,
  `collection_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `cars`
--

INSERT INTO `cars` (`car_id`, `image_filename`, `details`, `price_paid`, `collection_id`) VALUES
(1, 'car1.jpg', '1972 Ford Falcon GT Red', '165000', 1),
(2, 'car2.jpg', '1972 Ford Falcon XA GT Bronze', '145000', 1),
(3, 'car3.jpg', '1970 Ford Falcon XA GT Bronze', '67000', 1),
(4, 'car4.jpg', '1970 Ford XY Falcon GT-HO Phase 3 Blue', '980000', 1),
(5, 'car5.jpg', '1971 Ford XY Falcon 500 GT Replica', '850000', 1),
(6, 'car6.jpg', '1957-Ferrari-250-GTO-California Red', '450000', 2),
(7, 'car7.jpg', '1957-Ferrari-250-GTO Black', '668000', 2),
(8, 'car8.jpg', '1962-Ferrari-250-GTO Red', '780000', 2),
(9, 'car9.jpg', '1984-Ferrari-288-GTO Red', '250000', 2),
(11, 'bg1.jpg', 'henhao', '23333', 1),
(10, 'chengxuyuan.jpg', 'henhao', '23333', 2),
(12, 'bg1.jpg', 'henhao', '23333', 34),
(13, 'car8.jpg', 'en', '99999', 2),
(15, 'bg1.jpg', 'meishao', '99', 1);

-- --------------------------------------------------------

--
-- 表的结构 `collections`
--

CREATE TABLE `collections` (
  `collection_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `period` varchar(50) NOT NULL,
  `make` varchar(50) NOT NULL,
  `model` varchar(50) NOT NULL,
  `car_type` varchar(50) NOT NULL,
  `origin` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `collections`
--

INSERT INTO `collections` (`collection_id`, `name`, `period`, `make`, `model`, `car_type`, `origin`, `user_id`) VALUES
(1, 'Classic', '1970 - 1980', 'Ford', 'GT', 'Sedan', 'Australia', 1),
(2, 'Sports', '1950', 'Ferrari', 'GTO', 'Coupe', 'Australia', 1),
(34, 'aiguozhe', '2020', 'china', 'kupao', 'dscsc', 'sdc ', 0),
(35, 'zhongjiezhe', '2020', 'china', 'ku', 'dscsc', 'sdc ', 0),
(36, 'bai ', '1999', 'hai', 'sds', 'dscsc', 'sdsd', 3),
(37, 'zho', '2020', 'hai', 'sds', 'sdsd', 'sdc ', 2),
(38, 'chaoren', '2020', 'china', 'ku', 'bieke', 'chian', 2);

-- --------------------------------------------------------

--
-- 表的结构 `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `email`) VALUES
(1, 'Alice', 'password', 'alice@yahoo.com'),
(2, 'Bill', 'password', 'bill@yahoo.com'),
(3, 'Gina', 'password', 'gina@yahoo.com'),
(4, 'Mark', 'password', 'mark@yahoo.com'),
(5, 'Elise', 'password', 'elise@yahoo.com');

--
-- 转储表的索引
--

--
-- 表的索引 `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`car_id`);

--
-- 表的索引 `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`collection_id`);

--
-- 表的索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `cars`
--
ALTER TABLE `cars`
  MODIFY `car_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- 使用表AUTO_INCREMENT `collections`
--
ALTER TABLE `collections`
  MODIFY `collection_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- 使用表AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
