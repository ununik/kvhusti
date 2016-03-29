-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Úte 29. bře 2016, 07:28
-- Verze serveru: 5.5.47-0ubuntu0.14.04.1
-- Verze PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databáze: `kvhusti`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `entries`
--

CREATE TABLE IF NOT EXISTS `entries` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `author` int(15) NOT NULL,
  `timestamp` int(20) NOT NULL,
  `text` text NOT NULL,
  `title` varchar(250) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Vypisuji data pro tabulku `entries`
--

INSERT INTO `entries` (`id`, `author`, `timestamp`, `text`, `title`, `active`) VALUES
(1, 1, 0, 'sduh dsfha dsiuh faisudh fiouhsdiofhui asudhfiouasdhf iuashidufh asiduhfiouhczvxiuhziucxhviuasdifudshaiuasdhifuwehrewiuoqrhewiurwheoiurhqweiuhrwqiuhrqwiuhqwieuewqrewr', 'fdsnafsd', 0),
(2, 0, 0, 'iojdfsioadsjfio', 'fadsifsioadjfioasdjfio oadsjfiosdj', 1),
(3, 0, 0, 'fafhadsihioasd oihdsf\r\nfadsj\r\npfpadsjpoafjdspf', 'fdaiofoiads hioafds', 1),
(4, 0, 0, 'fadsfasdohfoaisd', 'fadsfads', 1),
(5, 0, 0, 'fadsfas', 'fsadfasd', 1),
(6, 1, 1458930463, 'fadsfasdf', 'fdsaafds', 0),
(7, 1, 1458930499, '111111111111111111111111111111111111dasdasdas111111111111111111111111111111111111111111111111', 'Test222222222222', 0),
(8, 1, 1458941439, 'fdsafadsadsfadsfdsafs fdsaifh dsiohf ioasdhofihas dofhdsalfhlasdhklfjhasdkjfhaskjd  kljdfshakhf kjdsakhlfjhdsakj hfadskjhf kjsdh hfaskhfkdjashkjadsf', 'dafadfadafsdfsdf', 1),
(9, 1, 1459025307, 'fsdjijfpasofjaposdf', 'fsdaofaspojpoafdsjfpojadspo', 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `foto`
--

CREATE TABLE IF NOT EXISTS `foto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `path` varchar(255) NOT NULL,
  `pathBig` varchar(250) NOT NULL,
  `name` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL,
  `timestamp` int(20) NOT NULL,
  `author` int(15) NOT NULL,
  `comment` text NOT NULL,
  `fotogalerie` int(15) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Vypisuji data pro tabulku `foto`
--

INSERT INTO `foto` (`id`, `path`, `pathBig`, `name`, `title`, `timestamp`, `author`, `comment`, `fotogalerie`, `active`) VALUES
(1, 'images/uniformy/parachute/small/1.jpg', 'images/uniformy/parachute/large/1.jpg', 'blablalabl', 'Prvni Fotka', 0, 1, 'jdf spoafjpods jpdpsjf adsj ;fpdsajfdpsoj fapsdjpfdsj;aoijasiodj ;ofisjdf ojsdoj faodsjo fjadsoijfodsijoifjdso', 1, 1),
(2, 'images/uniformy/parachute/small/1.jpg', 'images/uniformy/parachute/large/1.jpg', 'blablalabl', 'Druha Fotka', 0, 1, 'jdf spoafjpods jpdpsjf adsj ;fpdsajfdpsoj fapsdjpfdsj;aoijasiodj ;ofisjdf ojsdoj faodsjo fjadsoijfodsijoifjdso', 1, 1),
(3, 'images/uniformy/parachute/small/1.jpg', 'images/uniformy/parachute/large/1.jpg', 'blablalabl', 'Tr etiFotka', 0, 1, 'jdf spoafjpods jpdpsjf adsj ;fpdsajfdpsoj fapsdjpfdsj;aoijasiodj ;ofisjdf ojsdoj faodsjo fjadsoijfodsijoifjdso', 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabulky `fotogalerie`
--

CREATE TABLE IF NOT EXISTS `fotogalerie` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `author` int(15) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `timestamp` int(20) NOT NULL,
  `date` int(20) NOT NULL,
  `date2` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Vypisuji data pro tabulku `fotogalerie`
--

INSERT INTO `fotogalerie` (`id`, `title`, `description`, `author`, `active`, `timestamp`, `date`, `date2`) VALUES
(1, 'Test 1', 'Nejaka fotogalerie 1', 1, 1, 0, 122565646, 121565646),
(2, 'Test2', 'dfasi fhiosfio ahdsiofh ioasdiofh asiohfio sad', 1, 1, 0, 0, 0),
(3, 'fds;fjaposdjfpoj adsjfpodspo', 'asdfopj adspo', 1, 1, 0, 0, 0),
(4, 'NEW ALBUM', 'safpojfoadsjofsdjopfjsadofjpoasfjspodfjposdfjpoasdjfpoadsfjposdpojpoasdfjposd fsd', 1, 1, 1459059530, 1459033200, 0),
(5, 'TEST', 'fafa\r\nfasdpofpoasj opfasd]f ads fjspad fsdp fjaspo jfjdspo[poasdf psjd pajofsd', 1, 1, 1459079358, 1458601200, 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `osobyNaFotkach`
--

CREATE TABLE IF NOT EXISTS `osobyNaFotkach` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `foto` int(15) NOT NULL,
  `user` int(15) NOT NULL,
  `jmeno` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Vypisuji data pro tabulku `osobyNaFotkach`
--

INSERT INTO `osobyNaFotkach` (`id`, `foto`, `user`, `jmeno`) VALUES
(2, 1, 0, 'KAret'),
(3, 1, 2, ''),
(4, 2, 1, '');

-- --------------------------------------------------------

--
-- Struktura tabulky `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `url_name` varchar(150) NOT NULL,
  `page_title` varchar(150) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `jmeno` varchar(255) NOT NULL,
  `prijmeni` varchar(255) NOT NULL,
  `login` varchar(100) NOT NULL,
  `passwordHash` varchar(100) NOT NULL,
  `addEntry` tinyint(1) NOT NULL DEFAULT '0',
  `mail` varchar(150) NOT NULL,
  `showMail` tinyint(1) NOT NULL DEFAULT '1',
  `facebook` varchar(150) NOT NULL,
  `showFacebook` tinyint(1) NOT NULL DEFAULT '1',
  `tel` varchar(25) NOT NULL,
  `showTel` tinyint(1) NOT NULL DEFAULT '1',
  `addFotogallery` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `jmeno`, `prijmeni`, `login`, `passwordHash`, `addEntry`, `mail`, `showMail`, `facebook`, `showFacebook`, `tel`, `showTel`, `addFotogallery`) VALUES
(1, 'Martin', 'Pribyl', 'ununik', 'Unununium111', 1, 'mail', 0, 'facebook', 0, 'muj tel', 0, 1),
(2, 'clen2', 'dssaf', '111', '123456', 0, '', 1, '', 1, '', 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
