-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Počítač: localhost
-- Vygenerováno: Úte 29. bře 2016, 16:10
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Vypisuji data pro tabulku `foto`
--

INSERT INTO `foto` (`id`, `path`, `pathBig`, `name`, `title`, `timestamp`, `author`, `comment`, `fotogalerie`, `active`) VALUES
(1, 'images/uniformy/parachute/small/1.jpg', 'images/uniformy/parachute/large/1.jpg', 'blablalabl', 'Prvni Fotka', 0, 1, 'jdf spoafjpods jpdpsjf adsj ;fpdsajfdpsoj fapsdjpfdsj;aoijasiodj ;ofisjdf ojsdoj faodsjo fjadsoijfodsijoifjdso', 1, 1),
(2, 'images/uniformy/parachute/small/1.jpg', 'images/uniformy/parachute/large/1.jpg', 'blablalabl', 'Druha Fotka', 0, 1, 'jdf spoafjpods jpdpsjf adsj ;fpdsajfdpsoj fapsdjpfdsj;aoijasiodj ;ofisjdf ojsdoj faodsjo fjadsoijfodsijoifjdso', 1, 1),
(3, 'images/uniformy/parachute/small/1.jpg', 'images/uniformy/parachute/large/1.jpg', 'blablalabl', 'Tr etiFotka', 0, 1, 'jdf spoafjpods jpdpsjf adsj ;fpdsajfdpsoj fapsdjpfdsj;aoijasiodj ;ofisjdf ojsdoj faodsjo fjadsoijfodsijoifjdso', 1, 1),
(4, '../../../fileadmin/foto/4/_2.jpg', '../../../fileadmin/foto/4/2.jpg', '2.jpg', 'TESt', 1459255554, 1, '', 4, 1),
(5, '../../../fileadmin/foto/4/_4.jpg', '../../../fileadmin/foto/4/4.jpg', '4.jpg', 'sdgdfgd', 1459255558, 1, '', 4, 1),
(6, '../../../fileadmin/foto/4/_6.jpg', '../../../fileadmin/foto/4/6.jpg', '6.jpg', 'gsfdgsd', 1459255561, 1, '', 4, 1),
(7, '../../../fileadmin/foto/4/_8.jpg', '../../../fileadmin/foto/4/8.jpg', '8.jpg', 'gdsfgsdf', 1459255563, 1, '', 4, 1),
(8, '../../../fileadmin/foto/4/_10.jpg', '../../../fileadmin/foto/4/10.jpg', '10.jpg', 'gsdgsdf', 1459255565, 1, '', 4, 1),
(9, '../../../fileadmin/foto/4/_12.jpg', '../../../fileadmin/foto/4/12.jpg', '12.jpg', 'gsdgsfdfdsafasdf', 1459255566, 1, 'sgdfgsdfg', 4, 1),
(10, 'fileadmin/foto/5/_4.jpg', 'fileadmin/foto/5/4.jpg', '4.jpg', '', 1459255674, 1, '', 5, 1),
(11, 'fileadmin/foto/5/_6.jpg', 'fileadmin/foto/5/6.jpg', '6.jpg', 'Test1', 1459255678, 1, '', 5, 1),
(12, 'fileadmin/foto/5/_8.jpg', 'fileadmin/foto/5/8.jpg', '8.jpg', '', 1459255679, 1, '', 5, 1),
(13, 'fileadmin/foto/5/_10.jpg', 'fileadmin/foto/5/10.jpg', '10.jpg', '', 1459255679, 1, '', 5, 1),
(14, 'fileadmin/foto/5/_12.jpg', 'fileadmin/foto/5/12.jpg', '12.jpg', '', 1459255680, 1, '', 5, 1),
(15, 'fileadmin/foto/5/_14.jpg', 'fileadmin/foto/5/14.jpg', '14.jpg', '', 1459255680, 1, '', 5, 1),
(16, 'fileadmin/foto/5/_16.jpg', 'fileadmin/foto/5/16.jpg', '16.jpg', '', 1459255681, 1, '', 5, 1),
(17, 'fileadmin/foto/5/_18.jpg', 'fileadmin/foto/5/18.jpg', '18.jpg', '', 1459255750, 1, '', 5, 1),
(18, 'fileadmin/foto/5/_20.jpg', 'fileadmin/foto/5/20.jpg', '20.jpg', '', 1459255751, 1, '', 5, 1),
(19, 'fileadmin/foto/5/_22.jpg', 'fileadmin/foto/5/22.jpg', '22.jpg', '', 1459255751, 1, '', 5, 1),
(20, 'fileadmin/foto/5/_24.jpg', 'fileadmin/foto/5/24.jpg', '24.jpg', '', 1459255751, 1, '', 5, 1),
(21, 'fileadmin/foto/5/_26.jpg', 'fileadmin/foto/5/26.jpg', '26.jpg', '223165564564546546465', 1459255752, 1, 'fasdafsd\n\n\n\nfasdasdfadsfsda', 5, 1),
(22, 'fileadmin/foto/5/_28.jpg', 'fileadmin/foto/5/28.jpg', '28.jpg', 'Fofdsafsdas', 1459255753, 1, 'dashdasoifiosoif dsoahfasoafslkf klsadjflkasjdkfjsaldkjf;alksjflkjasdlkj\n\n\nfasdfasdfadsfds', 5, 1),
(23, 'fileadmin/foto/5/_30.jpg', 'fileadmin/foto/5/30.jpg', '30.jpg', '', 1459255753, 1, '', 5, 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Vypisuji data pro tabulku `osobyNaFotkach`
--

INSERT INTO `osobyNaFotkach` (`id`, `foto`, `user`, `jmeno`) VALUES
(2, 1, 0, 'KAret'),
(3, 1, 2, ''),
(5, 2, 2, ''),
(6, 22, 1, ''),
(7, 21, 1, ''),
(8, 21, 2, '');

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
(1, 'Martin', 'Pribyl', 'ununik', '3c55acdb9b57d665013a6d6195c32daf', 1, 'mail', 1, 'facebook', 1, 'muj tel', 1, 1),
(2, 'clen2', 'dssaf', '111', '123456', 0, '', 1, '', 1, '', 1, 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `users_zajmy`
--

CREATE TABLE IF NOT EXISTS `users_zajmy` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `text` text NOT NULL,
  `user` int(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
