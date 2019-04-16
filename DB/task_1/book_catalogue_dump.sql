-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2019 at 03:58 PM
-- Server version: 5.7.25-0ubuntu0.18.04.2
-- PHP Version: 5.6.40-5+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookCatalogue`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminid` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `password` varchar(64) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(320) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminid`, `name`, `password`, `email`) VALUES
('liza', 'Liza Lotus', 'dac83bb166491b2329888108d66e2b70df84e678f89ea98d71c9552ceb9f0907', 'lotuselizza@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `authorid` int(11) NOT NULL,
  `authorname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`authorid`, `authorname`) VALUES
(1, 'Homer'),
(3, 'Daphne du Maurier'),
(4, 'Arthur Ransome'),
(5, 'C.S. Lewis'),
(6, 'Karl Marx'),
(7, 'Edward Gibbon'),
(8, 'Winston Churchill');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookid` int(11) NOT NULL,
  `title` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookid`, `title`, `description`, `price`) VALUES
(1, 'The Iliad and The Odyssey', 'The poem mainly focuses on the Greek hero Odysseus (known as Ulysses in Roman myths),king of Ithaca,and his journey home after the fall of Troy. It takes Odysseus ten years to reach Ithaca after the ten-year Trojan War.[3] In his absence,it is assumed Odysseus has died,and his wife Penelope and son Telemachus must deal with a group of unruly suitors,the Mnesteres (Greek: Μνηστῆρες) or Proci,who compete for Penelope\'s hand in marriage.', 22.50),
(4, 'Swallows and Amazonss', 'Swallows and Amazons is the first book in the Swallows and Amazons series by English author Arthur Ransome; it was first published in 1930,with the action taking place in the summer of 1929 in the Lake District. The book introduces central protagonists John,Susan,Titty and Roger Walker (Swallows) and their mother and baby sister (Bridget),as well as Nancy and Peggy Blackett (Amazons) and their uncle Jim,commonly referred to as Captain Flint.', 90.50),
(5, 'The Lion the Witch and the Wardrobe', 'This is the story of what happened to Saroo in those twenty-five years. How he ended up on the streets of Calcutta. And survived. How he then ended up in Tasmania,living the life of an upper-middle-class Aussie. And how,at thirty years old,with some dogged determination,a heap of good luck and the power of Google Earth,he found his way back home.\r\n', 88.50),
(8, 'A History of the English-Speaking Peopless', 'Churchill,who excelled in the study of history as a child and whose mother was American,had a firm belief in a so-called \"special relationship\" between the people of Britain with the Commonwealth of Nations united under the Crown (New Zealand,Canada,Australia,South Africa,etc.) and with the people of the United States who had broken with the Crown and gone their own way. His book thus dealt with the resulting two divisions of the \"English-speaking peoples', 18.20),
(18, 'Abstarction test content', 'Abstarction test content', 12.00),
(19, 'Abstarction test content', 'Abstarction test content', 12.00),
(25, 'Swallows and Amazonss', 'sd', 12.00);

-- --------------------------------------------------------

--
-- Table structure for table `books_authors`
--

CREATE TABLE `books_authors` (
  `id` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `authorid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books_authors`
--

INSERT INTO `books_authors` (`id`, `bookid`, `authorid`) VALUES
(5, 5, 5),
(8, 8, 8),
(20, 4, 5),
(23, 5, 8),
(36, 5, 4),
(46, 25, 4);

-- --------------------------------------------------------

--
-- Table structure for table `books_genres`
--

CREATE TABLE `books_genres` (
  `id` int(11) NOT NULL,
  `bookid` int(11) NOT NULL,
  `genreid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books_genres`
--

INSERT INTO `books_genres` (`id`, `bookid`, `genreid`) VALUES
(1, 1, 1),
(4, 4, 4),
(5, 5, 5),
(9, 1, 1),
(11, 1, 1),
(12, 8, 8),
(15, 1, 4),
(17, 1, 3),
(19, 4, 7),
(21, 5, 1),
(22, 8, 2),
(23, 5, 2),
(24, 4, 3),
(25, 8, 8),
(27, 1, 3),
(28, 5, 3),
(32, 25, 3);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genreid` int(11) NOT NULL,
  `genre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genreid`, `genre`) VALUES
(1, 'Classic'),
(2, 'Satire'),
(3, 'Mystery'),
(4, 'Children\'s books'),
(5, 'Action'),
(7, 'History'),
(8, 'Travel');

-- --------------------------------------------------------

--
-- Table structure for table `tmp`
--

CREATE TABLE `tmp` (
  `bookid` int(11) NOT NULL,
  `bookname` varchar(200) COLLATE utf8_bin NOT NULL,
  `author` varchar(200) CHARACTER SET latin1 NOT NULL,
  `genre` varchar(200) CHARACTER SET latin1 NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tmp`
--

INSERT INTO `tmp` (`bookid`, `bookname`, `author`, `genre`, `price`, `description`) VALUES
(1, 'The Iliad and The Odyssey', 'Homer', 'classic', '22.50', 'The poem mainly focuses on the Greek hero Odysseus (known as Ulysses in Roman myths),king of Ithaca,and his journey home after the fall of Troy. It takes Odysseus ten years to reach Ithaca after the ten-year Trojan War.[3] In his absence,it is assumed Odysseus has died,and his wife Penelope and son Telemachus must deal with a group of unruly suitors,the Mnesteres (Greek: Μνηστῆρες) or Proci,who compete for Penelope\'s hand in marriage.'),
(2, 'The Barchester Chronicles', 'Anthony Trollope', 'classic', '30.20', 'Barchester Towers,published in 1857 by Anthony Trollope,is the second novel in his series known as the \"Chronicles of Barsetshire\". Among other things it satirises the antipathy in the Church of England between High Church and Evangelical adherents. Trollope began writing this book in 1855. He wrote constantly and made himself a writing-desk so he could continue writing while travelling by train. \"Pray know that when a man begins writing a book he never gives over\",he wrote in a letter during this period. \"The evil with which he is beset is as inveterate as drinking – as exciting as gambling\"'),
(3, 'Rebecca', 'Daphne du Maurier', 'romantic fiction', '104.00', 'Rebecca by Daphne Du Maurier tells the story of a young,unnamed protagonist who meets a handsome,older gentleman,Maxim de Winter,in Monte Carlo. It is well-known that Maxim\'s widely adored wife Rebecca,has recently drowned at sea and the local people of Maxim\'s home county are devastated. The main character quickly falls in love with Maxim and the couple enter into a whirlwind marriage despite Maxim\'s troubled past. On arriving home to Maxim\'s West Country estate \'Manderley\' after their honeymoon,the unnamed protagonist faces a painful struggle against the \'other woman\' Rebecca,whose presence at Manderley remains overbearing even from beyond the grave. Maxim\'s new wife is constantly compared to Rebecca,who was loved and admired by all,and faces cruelty from the malevolent Mrs Danvers,Rebecca\'s old maid.'),
(4, 'Swallows and Amazons', 'Arthur Ransome', 'children\'s books', '90.50', 'Swallows and Amazons is the first book in the Swallows and Amazons series by English author Arthur Ransome; it was first published in 1930,with the action taking place in the summer of 1929 in the Lake District. The book introduces central protagonists John,Susan,Titty and Roger Walker (Swallows) and their mother and baby sister (Bridget),as well as Nancy and Peggy Blackett (Amazons) and their uncle Jim,commonly referred to as Captain Flint.'),
(5, 'The Lion the Witch and the Wardrobe', 'C.S. Lewis', 'children\'s books', '88.50', 'This is the story of what happened to Saroo in those twenty-five years. How he ended up on the streets of Calcutta. And survived. How he then ended up in Tasmania,living the life of an upper-middle-class Aussie. And how,at thirty years old,with some dogged determination,a heap of good luck and the power of Google Earth,he found his way back home.\n'),
(6, 'Das Kapital', 'Karl Marx', 'books that changed the world', '100.00', 'Das Kapital,also known as Capital. Critique of Political Economy (German: Das Kapital. Kritik der politischen Ökonomie,pronounced [das kapiˈtaːl,kʁiːtɪk deːɐ pɔliːtɪʃən øːkoːnoːmiː]; 1867–1883) by Karl Marx is a foundational theoretical text in materialist philosophy,economics and politics.[1] Marx aimed to reveal the economic patterns underpinning the capitalist mode of production,in contrast to classical political economists such as Adam Smith,Jean-Baptiste Say,David Ricardo and John Stuart Mill. Marx did not live to publish the planned second and third parts,but they were both completed from his notes and published after his death by his colleague Friedrich Engels. Capital is the most cited book in the social sciences published before 1950.'),
(7, 'The Decline and Fall of the Roman Empire', 'Edward Gibbon', 'history', '200.50', 'The History of the Decline and Fall of the Roman Empire[a] is a six-volume work by the English historian Edward Gibbon. It traces Western civilization (as well as the Islamic and Mongolian conquests) from the height of the Roman Empire to the fall of Byzantium. Volume I was published in 1776 and went through six printings.[1] Volumes II and III were published in 1781;[2][3] volumes IV,V,and VI in 1788–1789.[4][5][6] The original volumes were published in quarto sections,a common publishing practice of the time. The work covers the history,from 98 to 1590,of the Roman Empire,the history of early Christianity and then of the Roman State Church,and the history of Europe,and discusses the decline of the Roman Empire in the East and West.'),
(8, 'A History of the English-Speaking Peoples', 'Winston Churchill', 'history', '18.20', 'Churchill,who excelled in the study of history as a child and whose mother was American,had a firm belief in a so-called \"special relationship\" between the people of Britain with the Commonwealth of Nations united under the Crown (New Zealand,Canada,Australia,South Africa,etc.) and with the people of the United States who had broken with the Crown and gone their own way. His book thus dealt with the resulting two divisions of the \"English-speaking peoples');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`authorid`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookid`);

--
-- Indexes for table `books_authors`
--
ALTER TABLE `books_authors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookid` (`bookid`),
  ADD KEY `authorid` (`authorid`);

--
-- Indexes for table `books_genres`
--
ALTER TABLE `books_genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `genreid` (`genreid`),
  ADD KEY `bookid` (`bookid`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genreid`);

--
-- Indexes for table `tmp`
--
ALTER TABLE `tmp`
  ADD PRIMARY KEY (`bookid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `authorid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `books_authors`
--
ALTER TABLE `books_authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `books_genres`
--
ALTER TABLE `books_genres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genreid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tmp`
--
ALTER TABLE `tmp`
  MODIFY `bookid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books_authors`
--
ALTER TABLE `books_authors`
  ADD CONSTRAINT `books_authors_ibfk_2` FOREIGN KEY (`authorid`) REFERENCES `authors` (`authorid`),
  ADD CONSTRAINT `books_authors_ibfk_3` FOREIGN KEY (`bookid`) REFERENCES `books` (`bookid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `books_genres`
--
ALTER TABLE `books_genres`
  ADD CONSTRAINT `books_genres_ibfk_1` FOREIGN KEY (`genreid`) REFERENCES `genres` (`genreid`),
  ADD CONSTRAINT `books_genres_ibfk_2` FOREIGN KEY (`bookid`) REFERENCES `books` (`bookid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
