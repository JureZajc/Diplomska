-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2017 at 04:44 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diplomska5`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `ID_answers` int(11) NOT NULL,
  `Answer` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `correct` tinyint(1) DEFAULT NULL,
  `ID_users` int(11) NOT NULL,
  `ID_quizes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`ID_answers`, `Answer`, `correct`, `ID_users`, `ID_quizes`) VALUES
(1, 'a:9:{i:0;s:11:\"A:Waterloo \";i:1;s:7:\"C:1918 \";i:2;s:7:\"B:1821 \";i:3;s:11:\"A:Waterloo \";i:4;s:7:\"C:1918 \";i:5;s:7:\"B:1821 \";i:6;s:11:\"A:Waterloo \";i:7;s:7:\"C:1918 \";i:8;s:7:\"B:1821 \";}', 2, 3, 5),
(2, 'a:9:{i:0;s:7:\"A:1914 \";i:1;s:7:\"A:1939 \";i:2;s:11:\"A:Waterloo \";i:3;s:7:\"A:1914 \";i:4;s:7:\"A:1939 \";i:5;s:11:\"A:Waterloo \";i:6;s:7:\"A:1914 \";i:7;s:7:\"A:1939 \";i:8;s:11:\"A:Waterloo \";}', 2, 3, 5),
(3, 'a:9:{i:0;s:7:\"A:1939 \";i:1;s:7:\"A:1820 \";i:2;s:7:\"C:1918 \";i:3;s:7:\"A:1939 \";i:4;s:7:\"A:1820 \";i:5;s:7:\"C:1918 \";i:6;s:7:\"A:1939 \";i:7;s:7:\"A:1820 \";i:8;s:7:\"C:1918 \";}', 2, 3, 5),
(4, 'a:9:{i:0;s:7:\"C:1918 \";i:1;s:7:\"B:1821 \";i:2;s:11:\"A:Waterloo \";i:3;s:7:\"C:1918 \";i:4;s:7:\"B:1821 \";i:5;s:11:\"A:Waterloo \";i:6;s:7:\"C:1918 \";i:7;s:7:\"B:1821 \";i:8;s:11:\"A:Waterloo \";}', 3, 3, 5),
(5, 'a:9:{i:0;s:7:\"B:1821 \";i:1;s:7:\"A:1939 \";i:2;s:11:\"A:Waterloo \";i:3;s:7:\"B:1821 \";i:4;s:7:\"A:1939 \";i:5;s:11:\"A:Waterloo \";i:6;s:7:\"B:1821 \";i:7;s:7:\"A:1939 \";i:8;s:11:\"A:Waterloo \";}', 3, 3, 5),
(6, 'a:4:{i:0;s:4:\"D:5 \";i:1;s:4:\"C:6 \";i:2;s:4:\"D:5 \";i:3;s:4:\"C:6 \";}', 2, 3, 4),
(7, 'a:9:{i:0;s:11:\"A:Waterloo \";i:1;s:7:\"B:1821 \";i:2;s:7:\"A:1939 \";i:3;s:11:\"A:Waterloo \";i:4;s:7:\"B:1821 \";i:5;s:7:\"A:1939 \";i:6;s:11:\"A:Waterloo \";i:7;s:7:\"B:1821 \";i:8;s:7:\"A:1939 \";}', 3, 4, 5),
(8, 'a:9:{i:0;s:7:\"A:1939 \";i:1;s:11:\"A:Waterloo \";i:2;s:7:\"B:1821 \";i:3;s:7:\"A:1939 \";i:4;s:11:\"A:Waterloo \";i:5;s:7:\"B:1821 \";i:6;s:7:\"A:1939 \";i:7;s:11:\"A:Waterloo \";i:8;s:7:\"B:1821 \";}', 3, 3, 5),
(9, 'a:9:{i:0;s:7:\"B:1821 \";i:1;s:11:\"A:Waterloo \";i:2;s:7:\"C:1918 \";i:3;s:7:\"B:1821 \";i:4;s:11:\"A:Waterloo \";i:5;s:7:\"C:1918 \";i:6;s:7:\"B:1821 \";i:7;s:11:\"A:Waterloo \";i:8;s:7:\"C:1918 \";}', 3, 5, 5),
(10, 'a:9:{i:0;s:8:\"D:Jaffa \";i:1;s:7:\"C:1945 \";i:2;s:7:\"B:1821 \";i:3;s:8:\"D:Jaffa \";i:4;s:7:\"C:1945 \";i:5;s:7:\"B:1821 \";i:6;s:8:\"D:Jaffa \";i:7;s:7:\"C:1945 \";i:8;s:7:\"B:1821 \";}', 1, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `ID_questions` int(11) NOT NULL,
  `Question` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `answer1` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `answer2` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `answer3` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `answer4` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `correct` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `ID_quizes` int(11) NOT NULL,
  `ID_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`ID_questions`, `Question`, `answer1`, `answer2`, `answer3`, `answer4`, `correct`, `ID_quizes`, `ID_users`) VALUES
(1, 'Kdaj se je začela druga svetovna vojna?', 'A:1939', 'B:1940', 'C:1945', 'D:1935', 'A:1939 ', 5, 3),
(2, 'Kdaj se je končala prva svetovna vojna?', 'A:1914', 'B:1917', 'C:1918', 'D:1920', 'C:1918 ', 5, 3),
(3, 'Katerega leta je umrl Napoleon?', 'A:1820', 'B:1821', 'C:1822', 'D:1823', 'B:1821 ', 5, 3),
(4, 'Pri kateri bitki je bil Napoleon poražen?', 'A:Waterloo', 'B:Mondovi', 'C:Lodi', 'D:Jaffa', 'A:Waterloo ', 5, 3),
(5, 'Koliko je 2+2?', 'A:2', 'B:3', 'C:4', 'D:5', 'C:4 ', 4, 3),
(6, 'Koliko je 2+4?', 'A:2', 'B:3', 'C:6', 'D:4', 'C:6 ', 4, 3),
(7, 'Koliko je 2+3?', 'A:2', 'B:3', 'C:4', 'D:5', 'D:5 ', 4, 3),
(8, 'Kje leži Slovenija?', 'A:Evropa', 'B:Avstalija', 'C:Amerika', 'D:Južna Amerika', 'A:Evropa ', 6, 3),
(9, 'Kje je Miami?', 'A:Amerika', 'B:Južna Amerika', 'C:Evropa', 'D:Avstralija', 'A:Amerika ', 6, 3),
(10, 'Koliko ljudi ima Slovenija (v MIL) ?', 'A:2', 'B:3', 'C:4', 'D:5', 'A:2 ', 6, 3),
(11, 'Koliko prebivalcev ima Hrvaška (v MIL)?', 'A:2', 'B:3', 'C:4', 'D:5', 'C:4 ', 6, 3),
(12, 'Koliko prebivalcev ima Rusija (v MIL)?', 'A:140', 'B:150', 'C:144', 'D:154', 'C:144 ', 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `quizes`
--

CREATE TABLE `quizes` (
  `ID_quizes` int(11) NOT NULL,
  `ID_users` int(11) NOT NULL,
  `quiz_name` varchar(255) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `since_when` date DEFAULT NULL,
  `until` date DEFAULT NULL,
  `nmb_question` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `quizes`
--

INSERT INTO `quizes` (`ID_quizes`, `ID_users`, `quiz_name`, `since_when`, `until`, `nmb_question`) VALUES
(4, 3, 'Matematika', '2017-08-09', '2017-08-19', 2),
(5, 3, 'Zgodovina', '2017-08-07', '2017-08-16', 3),
(6, 3, 'Geografija', '2017-08-02', '2017-08-19', 5);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID_users` int(11) NOT NULL,
  `Name` varchar(255) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `Surname` varchar(255) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `Username` varchar(255) COLLATE utf8_slovenian_ci DEFAULT NULL,
  `Pass` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_slovenian_ci NOT NULL,
  `Admin` int(11) DEFAULT NULL,
  `text` text COLLATE utf8_slovenian_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_slovenian_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_users`, `Name`, `Surname`, `Username`, `Pass`, `email`, `Admin`, `text`) VALUES
(3, NULL, NULL, 'Jure199', '0b6427ec2f025d5f9f26dff1bce51de9667f2cd2', 'Jure.zajc.95@gmail.com', 1, NULL),
(4, 'Nejc', 'Zajc', 'NFaca411', '0b6427ec2f025d5f9f26dff1bce51de9667f2cd2', 'Nejc.zajc.99@gmail.com', NULL, 'Testno sporočilo'),
(5, 'Aljaž', 'Senič', 'BarcaBoy1996', '88a724726ee74cf522d5366f2a34a98fe5b5a2e1', 'Senic.aljaz@gmail.com', 1, 'SERBUUUSSSS!!!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`ID_answers`),
  ADD KEY `ID_users` (`ID_users`),
  ADD KEY `ID_quizes` (`ID_quizes`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`ID_questions`),
  ADD KEY `ID_users` (`ID_users`),
  ADD KEY `ID_quizes` (`ID_quizes`);

--
-- Indexes for table `quizes`
--
ALTER TABLE `quizes`
  ADD PRIMARY KEY (`ID_quizes`),
  ADD KEY `ID_users` (`ID_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `ID_answers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `ID_questions` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `quizes`
--
ALTER TABLE `quizes`
  MODIFY `ID_quizes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`ID_users`) REFERENCES `users` (`ID_users`),
  ADD CONSTRAINT `answers_ibfk_2` FOREIGN KEY (`ID_quizes`) REFERENCES `quizes` (`ID_quizes`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_ibfk_1` FOREIGN KEY (`ID_users`) REFERENCES `users` (`ID_users`),
  ADD CONSTRAINT `questions_ibfk_2` FOREIGN KEY (`ID_quizes`) REFERENCES `quizes` (`ID_quizes`);

--
-- Constraints for table `quizes`
--
ALTER TABLE `quizes`
  ADD CONSTRAINT `quizes_ibfk_1` FOREIGN KEY (`ID_users`) REFERENCES `users` (`ID_users`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
