-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- 主機： localhost:8889
-- 產生時間： 2020 年 09 月 04 日 09:35
-- 伺服器版本： 5.7.26
-- PHP 版本： 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- 資料庫： `RD5_db`
--
CREATE DATABASE IF NOT EXISTS `RD5_db` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `RD5_db`;

-- --------------------------------------------------------

--
-- 資料表結構 `transactions`
--

CREATE TABLE `transactions` (
  `transId` int(11) NOT NULL,
  `uId` int(11) NOT NULL,
  `transMode` enum('1','0') NOT NULL,
  `transName` varchar(10) NOT NULL,
  `transDate` datetime NOT NULL,
  `transUId` int(11) DEFAULT NULL,
  `transAmount` int(11) NOT NULL,
  `transNote` varchar(30) DEFAULT NULL,
  `transBalance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表新增資料前，先清除舊資料 `transactions`
--

TRUNCATE TABLE `transactions`;
--
-- 傾印資料表的資料 `transactions`
--

INSERT INTO `transactions` (`transId`, `uId`, `transMode`, `transName`, `transDate`, `transUId`, `transAmount`, `transNote`, `transBalance`) VALUES
(1, 1, '1', '存款', '2020-08-03 07:27:46', NULL, 35000, NULL, 35000),
(2, 1, '0', '提款', '2020-08-06 07:56:54', NULL, 5000, NULL, 30000),
(3, 1, '1', '存款', '2020-08-10 08:46:54', NULL, 5000, NULL, 35000),
(4, 1, '1', '存款', '2020-08-27 08:50:05', NULL, 5000, NULL, 40000),
(5, 1, '0', '提款', '2020-08-31 10:06:52', NULL, 6000, NULL, 34000),
(6, 1, '0', '提款', '2020-09-01 01:24:04', NULL, 2000, NULL, 32000),
(7, 1, '0', '提款', '2020-09-01 01:24:20', NULL, 2000, NULL, 30000),
(8, 1, '0', '提款', '2020-09-01 01:24:33', NULL, 5000, NULL, 25000),
(9, 1, '0', '提款', '2020-09-01 03:38:31', NULL, 5000, NULL, 20000),
(10, 1, '0', '提款', '2020-09-01 03:39:35', NULL, 1000, NULL, 19000),
(11, 1, '1', '存款', '2020-09-01 03:42:58', NULL, 5000, NULL, 24000),
(12, 1, '1', '存款', '2020-09-01 03:43:12', NULL, 6000, NULL, 30000),
(13, 1, '0', '提款', '2020-09-01 03:44:35', NULL, 9656, NULL, 20344),
(14, 1, '0', '提款', '2020-09-01 03:44:45', NULL, 344, NULL, 20000),
(15, 1, '1', '存款', '2020-09-02 08:12:59', NULL, 35000, NULL, 55000),
(16, 1, '0', '提款', '2020-09-03 16:13:43', NULL, 14000, NULL, 41000);

-- --------------------------------------------------------

--
-- 資料表結構 `users`
--

CREATE TABLE `users` (
  `uId` int(11) NOT NULL,
  `uAccountName` varchar(20) NOT NULL,
  `uPass` varchar(20) NOT NULL,
  `uName` varchar(10) NOT NULL,
  `uBirth` varchar(11) NOT NULL,
  `uAddress` varchar(50) NOT NULL,
  `uEmail` varchar(50) NOT NULL,
  `uDateOpen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uBalance` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表新增資料前，先清除舊資料 `users`
--

TRUNCATE TABLE `users`;
--
-- 傾印資料表的資料 `users`
--

INSERT INTO `users` (`uId`, `uAccountName`, `uPass`, `uName`, `uBirth`, `uAddress`, `uEmail`, `uDateOpen`, `uBalance`) VALUES
(1, 'owen5566', '5566', 'owen_huang', '2020-01-01', '台中市南屯區', 'owen@mail.com', '2020-08-31 01:19:08', 41000),
(2, 'paul5566', '5566', 'paul_cheng', '2020-08-31', '台中市南屯區', 'lopin@kkk.org', '2020-08-31 05:19:22', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transId`);

--
-- 資料表索引 `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uId`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `users`
--
ALTER TABLE `users`
  MODIFY `uId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
