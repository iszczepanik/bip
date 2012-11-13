-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 13 Lis 2012, 21:55
-- Wersja serwera: 5.1.53
-- Wersja PHP: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Baza danych: `bonafide_bip`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `authassignment`
--

CREATE TABLE IF NOT EXISTS `authassignment` (
  `itemname` varchar(64) COLLATE utf8_bin NOT NULL,
  `userid` varchar(64) COLLATE utf8_bin NOT NULL,
  `bizrule` text COLLATE utf8_bin,
  `data` text COLLATE utf8_bin,
  PRIMARY KEY (`itemname`,`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `authassignment`
--

INSERT INTO `authassignment` (`itemname`, `userid`, `bizrule`, `data`) VALUES
('superadmin', '1', NULL, NULL),
('admin', '16', NULL, NULL),
('admin', '15', NULL, NULL),
('admin', '17', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `authitem`
--

CREATE TABLE IF NOT EXISTS `authitem` (
  `name` varchar(64) COLLATE utf8_bin NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_bin,
  `bizrule` text COLLATE utf8_bin,
  `data` text COLLATE utf8_bin,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `authitem`
--

INSERT INTO `authitem` (`name`, `type`, `description`, `bizrule`, `data`) VALUES
('admin', 1, 'pracownicy bonafides', NULL, NULL),
('radny', 1, 'radni', NULL, NULL),
('user', 1, 'Low access user', NULL, NULL),
('superadmin', 1, 'iza', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `authitemchild`
--

CREATE TABLE IF NOT EXISTS `authitemchild` (
  `parent` varchar(64) COLLATE utf8_bin NOT NULL,
  `child` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`parent`,`child`),
  KEY `child` (`child`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `authitemchild`
--

INSERT INTO `authitemchild` (`parent`, `child`) VALUES
('superadmin', 'admin');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `inf`
--

CREATE TABLE IF NOT EXISTS `inf` (
  `INF_ID` int(11) NOT NULL AUTO_INCREMENT,
  `INF_NAME` varchar(256) COLLATE utf8_bin NOT NULL,
  `INF_CONTENT` text COLLATE utf8_bin NOT NULL,
  `INF_OBLIGATORY` bit(1) NOT NULL DEFAULT b'1',
  `INF_SHOW` bit(1) NOT NULL DEFAULT b'1',
  `INF_BIP` bit(1) NOT NULL DEFAULT b'1',
  `INF_SIT_ID` int(11) NOT NULL,
  `INF_TYPE` int(11) NOT NULL DEFAULT '1' COMMENT '1 - INTERNAL, 2 - EXTERNAL, 3 - NEWS',
  `INF_INF_ID` int(11) DEFAULT NULL COMMENT 'PARENT',
  `INF_SHOW_PRJ_CAT` int(11) DEFAULT NULL,
  `INF_SHOW_FILE_CAT` int(11) DEFAULT NULL,
  `INF_CREATE_DATE` datetime DEFAULT NULL,
  `INF_CREATE_BY` datetime DEFAULT NULL,
  `INF_MODIFY_DATE` datetime DEFAULT NULL,
  `INF_MODIFY_BY` datetime DEFAULT NULL,
  PRIMARY KEY (`INF_ID`),
  KEY `INF_SIT_ID` (`INF_SIT_ID`),
  KEY `INF_INF_ID` (`INF_INF_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=44 ;

--
-- Zrzut danych tabeli `inf`
--

INSERT INTO `inf` (`INF_ID`, `INF_NAME`, `INF_CONTENT`, `INF_OBLIGATORY`, `INF_SHOW`, `INF_BIP`, `INF_SIT_ID`, `INF_TYPE`, `INF_INF_ID`, `INF_SHOW_PRJ_CAT`, `INF_SHOW_FILE_CAT`, `INF_CREATE_DATE`, `INF_CREATE_BY`, `INF_MODIFY_DATE`, `INF_MODIFY_BY`) VALUES
(1, 'Pełna nazwa organizacji ', 'Bonafides', b'1', b'1', b'1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Adres siedziby/biura/miejsca działalności (uwaga jeśli prywatny adres)', 'Jakiś adres tutaj', b'1', b'1', b'1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Informacja  o  możliwościach kontaktu ', '', b'1', b'1', b'1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Sposób dostępności dla osób niepełnosprawnych ', '', b'1', b'1', b'1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Numer KRS – link do Ministerstwa Sprawiedliwości', '', b'1', b'1', b'1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Numer NIP', '', b'1', b'1', b'1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Numer konta bankowego', '', b'1', b'1', b'1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Aktualne składy osobowe organów statutowych ', '', b'1', b'1', b'1', 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Dane kontaktowe –zespół', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Imię i Nazwisko', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 13, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'E-mail', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 13, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Telefon, fax', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 13, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Adres', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 13, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Misja', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'0', b'1', b'1', 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Cele działalności', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Plany działania', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'0', b'1', b'1', 3, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Opisy świadczonych usług bezpłatnie', '<p>Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe. TRalallala</p>', b'1', b'1', b'1', 4, 1, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-11-13 18:03:22', '0000-00-00 00:00:00'),
(20, 'Warunki/zasady świadczonych usług bezpłatnie', '<p>Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe. O kurcze pieczone!</p>', b'0', b'1', b'1', 4, 1, 19, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-11-13 18:03:35', '0000-00-00 00:00:00'),
(21, 'Opisy świadczonych usług odpłatnie', '<p>Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe. hg, kjhlkhiuuyd xtrsvhj poi t67ruyfhg</p>', b'1', b'1', b'1', 5, 1, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-11-13 20:29:20', '0000-00-00 00:00:00'),
(22, 'Warunki/zasady świadczonych usług odpłatnie', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'0', b'1', b'1', 5, 1, 21, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 'Realizowane projekty ', '<p>On a recent Yii-based project, managing one of the Models required a whole slew of checkboxes to indicate that yes, the quality does apply, or no, it does not. In this case, the value being stored in the database for each attribute was a single letter: Y/N. However Yii, when showing the form to update an item, needs the checkbox value to be a Boolean, in order to properly pre-check the box. Changing the database wasn&rsquo;t an option in this case, so I had to figure out a good conversion process. In this post, I&rsquo;ll tell you exactly how I solved this issue.As I said, for the item in question, the database table had multiple columns, each of which only stored either&nbsp;Y&nbsp;or&nbsp;N. As an example, think of a users table with multiple opt-in options: newsletters, offers, etc. When the user creates and updates their account, presenting these as checkboxes is appropriate. But for the administrator, it&rsquo;d probably be best to view user preferences by just seeing Y/N for each option (although the code I&rsquo;m going to present wouldn&rsquo;t be significantly different if you stored 1/0).</p>\r\n<p>The&nbsp;protected/views/modelName/_form.php&nbsp;file defines the form that&rsquo;s used to both create and update an individual record. In it, checkboxes are created using:</p>', b'1', b'1', b'1', 7, 2, NULL, 1, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-11-13 17:43:53', '0000-00-00 00:00:00'),
(25, 'Zrealizowane projekty ', '<p>Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.</p>\r\n<p>To jest drugi akapit!</p>', b'1', b'1', b'1', 7, 2, NULL, 2, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2012-11-13 17:54:29', '0000-00-00 00:00:00'),
(26, 'Sprawozdania ze zrealizowanych projektów dla grantodawców ', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'0', b'1', b'1', 7, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 'Sprawozdania - pliki do ściągnięcia', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 8, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 'Zbiórki publiczne ', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 9, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 'Sprawozdania ze zbiórek publicznych ', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 9, 1, 28, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 'Środki publiczne', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 9, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 'Wysokość środków publicznych otrzymanych na realizacje projektów w aktualnym roku kalendarzowym', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 9, 1, 30, 1, NULL, NULL, NULL, NULL, NULL),
(32, 'Wysokość środków z 1% za rok poprzedzający aktualny rok kalendarzowy', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 9, 1, 30, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 'Środki prywatne', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 9, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(34, 'Wysokość środków z działalności gospodarczej za rok poprzedzający aktualny rok kalendarzowy', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 9, 1, 33, NULL, NULL, NULL, NULL, NULL, NULL),
(35, 'Wysokość środków z darowizn w tym grantów (* zagraniczne)  za rok poprzedzający aktualny  rok kalendarzowy', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 9, 1, 33, 1, NULL, NULL, NULL, NULL, NULL),
(36, 'Wysokość środków z działalności odpłatnej za rok poprzedzający aktualny  rok kalendarzowy', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 9, 1, 33, NULL, NULL, NULL, NULL, NULL, NULL),
(37, 'Informacja o kontrola zewnętrznych - instytucja kontrolna, data, zakres kontroli', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 10, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 'Informacja o wynikach kontroli zewnętrznych przeprowadzonych przez instytucje publiczne', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'0', b'1', b'1', 10, 1, 37, NULL, NULL, NULL, NULL, NULL, NULL),
(40, 'Informacja o sposobie udostępnienia informacji publicznej ', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 'Wzór wniosku o udostępnienie informacji publicznej', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 'Kwota darowizn od osób fizycznych', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 9, 1, 35, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 'Informacja o wynikach kontroli zewnętrznych przeprowadzonych przez instytucje prywatne ', 'Windows is reinvented with an all-new touch interface, Windows Store, and dev platform that lets you sell apps across the globe.', b'1', b'1', b'1', 10, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `prj`
--

CREATE TABLE IF NOT EXISTS `prj` (
  `PRJ_ID` int(11) NOT NULL AUTO_INCREMENT,
  `PRJ_DESCRIPTION` varchar(512) COLLATE utf8_bin NOT NULL,
  `PRJ_AMOUNT_DONATION` double DEFAULT NULL,
  `PRJ_AMOUNT_PUBLIC` double DEFAULT NULL,
  `PRJ_SOURCES` varchar(512) COLLATE utf8_bin NOT NULL,
  `PRJ_CAT` int(11) NOT NULL COMMENT '1 - CURRENT, 2 - PASSED',
  PRIMARY KEY (`PRJ_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Zrzut danych tabeli `prj`
--

INSERT INTO `prj` (`PRJ_ID`, `PRJ_DESCRIPTION`, `PRJ_AMOUNT_DONATION`, `PRJ_AMOUNT_PUBLIC`, `PRJ_SOURCES`, `PRJ_CAT`) VALUES
(1, '<p>Fantastyczny projekt!</p>', 30233, NULL, 'jakies', 2),
(2, '<p>A to jakiś realizowany</p>', NULL, 10000, 'werwerwex ergrtgrt', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `sit`
--

CREATE TABLE IF NOT EXISTS `sit` (
  `SIT_ID` int(11) NOT NULL AUTO_INCREMENT,
  `SIT_NAME` varchar(256) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`SIT_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- Zrzut danych tabeli `sit`
--

INSERT INTO `sit` (`SIT_ID`, `SIT_NAME`) VALUES
(1, 'Strona Główna'),
(2, 'Aktualności'),
(3, 'Cele działalności'),
(4, 'Jak pomagamy?'),
(5, 'Oferta'),
(6, 'Zespół'),
(7, 'Projekty'),
(8, 'Sprawozdania'),
(9, 'Źródła finansowania działalności'),
(10, 'Kontrole zewnętrzne'),
(11, 'Informacje nie udostępnione w BIP'),
(12, 'Instrukcja korzystania z BIP'),
(13, 'Redakcja BIP');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `usr`
--

CREATE TABLE IF NOT EXISTS `usr` (
  `USR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `USR_NAME` varchar(16) NOT NULL DEFAULT '',
  `USR_PASS` varchar(16) NOT NULL DEFAULT '',
  `USR_FIRSTNAME` varchar(100) NOT NULL DEFAULT '',
  `USR_LASTNAME` varchar(100) NOT NULL DEFAULT '',
  `USR_EMAIL` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`USR_ID`),
  UNIQUE KEY `USR_NAZWA` (`USR_NAME`),
  UNIQUE KEY `USR_EMAIL` (`USR_EMAIL`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin2 COMMENT='users' AUTO_INCREMENT=18 ;

--
-- Zrzut danych tabeli `usr`
--

INSERT INTO `usr` (`USR_ID`, `USR_NAME`, `USR_PASS`, `USR_FIRSTNAME`, `USR_LASTNAME`, `USR_EMAIL`) VALUES
(1, 'admin', 'k@lafio4', 'Izabela', 'Szczepanik', 'izabela.szczepanik@gazeta.pl'),
(15, 'grzegorz', 'portugali@', 'Grzegorz', 'Wójkowski', 'grzegorz@bonafides.pl'),
(16, 'anna', 'je$temAnn@', 'Anna', 'Zetelman', 'anna.zetelman@bonafides.pl'),
(17, 'kasia', 'K@+arzyna', 'Kasia', '', 'kasia@bonafides.pl');

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `inf`
--
ALTER TABLE `inf`
  ADD CONSTRAINT `inf_ibfk_1` FOREIGN KEY (`INF_SIT_ID`) REFERENCES `sit` (`SIT_ID`) ON DELETE CASCADE;
