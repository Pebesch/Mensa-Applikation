-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 19. Feb 2015 um 14:06
-- Server Version: 5.6.12
-- PHP-Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `mensaapp`
--
CREATE DATABASE IF NOT EXISTS `mensaapp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mensaapp`;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `menue`
--

CREATE TABLE IF NOT EXISTS `menue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(50) NOT NULL,
  `content` varchar(155) NOT NULL,
  `date` date NOT NULL,
  `bewertung` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=44 ;

--
-- Daten für Tabelle `menue`
--

INSERT INTO `menue` (`id`, `type`, `content`, `date`, `bewertung`) VALUES
(1, 'menue', '<p>Salat<br />***<br /><strong>H&ouml;rnli mit Gehacktem</strong><br />Apfelmus<br />***<br />Glac&eacute;</p>', '2015-02-17', 0),
(28, 'veggie', '<p>Was leckeres</p>', '2015-02-11', 0),
(30, 'menue', '<p>Hamburger</p>', '2015-02-16', 0),
(31, 'menue', '<p>Hackbraten</p>', '2015-02-17', 0),
(32, 'menue', '<p>Pl&auml;tzli</p>', '2015-02-18', 0),
(33, 'menue', '<p>Piccata</p>', '2015-02-19', 0),
(34, 'menue', '<p>Schnitzel</p>', '2015-02-20', 0),
(35, 'menue', '<p>Poulet</p>', '2015-02-21', 0),
(36, 'menue', '<p>Schnipo</p>', '2015-02-22', 0),
(37, 'veggie', '<p>Tofu</p>', '2015-02-17', 0),
(38, 'veggie', '<p>Gem&uuml;se</p>', '2015-02-18', 0),
(39, 'veggie', '<p>Teigwaren</p>', '2015-02-19', 0),
(40, 'veggie', '<p>Reis</p>', '2015-02-19', 0),
(41, 'veggie', '<p>Risotto</p>', '2015-02-20', 0),
(42, 'veggie', '<p>Ravioli</p>', '2015-02-21', 0),
(43, 'veggie', '<p>Gratain</p>', '2015-02-22', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personen`
--

CREATE TABLE IF NOT EXISTS `personen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `salt` varchar(30) NOT NULL,
  `passwort` varchar(155) NOT NULL,
  `mail` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Daten für Tabelle `personen`
--

INSERT INTO `personen` (`id`, `username`, `salt`, `passwort`, `mail`) VALUES
(1, 'Administrator', 'QjAMpNhwyyZ6l2cEfPxyho9lqRjLDo', '56fd3f4c2dd6669b36c1322c0c5f8e14', 'pebs@gmx.ch'),
(2, 'Test', 'QjAMpNhwyyZ6l2cEfPxyho9lqRjLDo', 'd3c7861e00c206c1e79632615fa15c75', 'pebesch@gmail.com'),
(3, 'Pete', 'QjAMpNhwyyZ6l2cEfPxyho9lqRjLDo', '99b1bbdf7e369203acca82562034ec51', 'peb@s'),
(8, 'Andi', 'QjAMpNhwyyZ6l2cEfPxyho9lqRjLDo', '106da5bb16cf938876660490230959c1', 'andreas@umbi.ch'),
(11, 'Rico', 'QjAMpNhwyyZ6l2cEfPxyho9lqRjLDo', 'eda8030e2c9bea8a2caf6b1fcdbd8cc6', 'rico@Vogelsang.ch'),
(12, 'Juli', 'QjAMpNhwyyZ6l2cEfPxyho9lqRjLDo', '3270bc185583eb0d78c53db0dd31d44f', 'Juli@Doebbi'),
(13, 'Atakan', 'QjAMpNhwyyZ6l2cEfPxyho9lqRjLDo', '1d014cc4ed870ab112d235098ab2683d', 'Achi@oli.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
