-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2022-05-13 04:52:14
-- 伺服器版本： 10.4.24-MariaDB
-- PHP 版本： 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `test`
--

-- --------------------------------------------------------

--
-- 資料表結構 `address_book`
--

CREATE TABLE `address_book` (
  `sid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `address_book`
--

INSERT INTO `address_book` (`sid`, `name`, `email`, `mobile`, `birthday`, `address`, `created_at`) VALUES
(1, '李小明', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26'),
(2, '李小明2', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26'),
(3, '李小明3', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26'),
(5, '李小明5', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26'),
(6, '李小明6', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26'),
(7, '李小明7', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26'),
(8, '李小明8', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26'),
(9, '李小明9', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26'),
(10, '李小明10', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26'),
(11, '李小明11', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26'),
(12, '李小明12', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26'),
(13, '李小明3', 'ming@ttt.com', '0918222333', '2012-05-01', '台北市大安區', '2022-05-13 09:49:26');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `address_book`
--
ALTER TABLE `address_book`
  ADD PRIMARY KEY (`sid`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `address_book`
--
ALTER TABLE `address_book`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
