-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Lun 06 Juillet 2015 à 16:26
-- Version du serveur: 5.6.12-log
-- Version de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `projet_tutore`
--
CREATE DATABASE IF NOT EXISTS `projet_tutore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projet_tutore`;

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE IF NOT EXISTS `administrateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `details`
--

CREATE TABLE IF NOT EXISTS `details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parcours` text NOT NULL,
  `palmares` varchar(20) NOT NULL,
  `effectif` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `idinf` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(20) NOT NULL,
  `entraineur` varchar(50) NOT NULL,
  `president` varchar(50) NOT NULL,
  `fondation` int(10) NOT NULL,
  `site` varchar(30) NOT NULL,
  `siege` text NOT NULL,
  `tel` varchar(30) NOT NULL,
  `effectif` int(11) NOT NULL,
  `palmares` varchar(50) NOT NULL,
  `parcours` text NOT NULL,
  PRIMARY KEY (`idinf`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `info`
--

INSERT INTO `info` (`idinf`, `nom`, `entraineur`, `president`, `fondation`, `site`, `siege`, `tel`, `effectif`, `palmares`, `parcours`) VALUES
(1, 'ATLANTA HAWKS', 'Mike Budenholzer', 'Bernard J. Mullin', 1949, 'www.nba.com/hawks/', 'Centennial Tower\r\n101 Marietta St. NW, Suite 1900\r\nAtlanta, GA 30303', '(404) 827-3800', 15, 'Une fois champion NBA en 1958', 'Avant d''intégrer la NBA:\r\nTri-Cities Blackhawks (49-51)\r\nEn NBA:\r\nMilwaukee Hawks (51-55)\r\nSaint-Louis Hawks (55-68)\r\nAtlanta (depuis 1968)'),
(2, 'CHICAGO BULLS', '', 'Jerry Reinsdorf', 1966, 'www.nba.com/bulls/', '980 N.Michigan Av., Suite 1600, Chicago IL 60611', '(312) 455-4000', 15, 'Six fois champion NBA en 1991,1992,1993,1996,1997', '6 fois champion NBA (91-92-93-96-97-98)  Détient le record de victoires (72) en saison régulière (1995-1996)'),
(3, 'BROOKLYN NETS', 'Lionel Hollins', 'Mikhail Prokhorov', 2012, 'www.nba.com/nets/', '620 Atlantic Avenue\r\nBrooklyn, New York 11217', '', 17, '', ''),
(4, 'LOS ANGELES LAKERS', 'Byron Scott', '', 1948, 'www.nba.com/lakers/', '113900 W. Manchester Blvd. Inglewood, CA 90305-2227', '(310) 419-3100 / (310) 419-323', 19, '', ''),
(5, 'MIAMI HEAT', 'Eric Spoelstra', 'Pat Riley', 1988, 'www.nba.com/heat/', 'SunTrust International Center One SE Third Ave., Ste. 2300 Miami, FL 33131', '(305) 577-4328 / (305) 372-080', 17, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `matchs`
--

CREATE TABLE IF NOT EXISTS `matchs` (
  `idmatch` int(11) NOT NULL AUTO_INCREMENT,
  `equipe1` varchar(50) NOT NULL,
  `equipe2` varchar(50) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`idmatch`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `matchs`
--

INSERT INTO `matchs` (`idmatch`, `equipe1`, `equipe2`, `date`) VALUES
(1, 'NOP', 'MIA', '2015-10-05'),
(2, 'MTA', 'CLE', '2015-07-06'),
(3, 'PHI', 'BOS', '2015-07-08'),
(4, 'NOP', 'ATL', '2015-07-23'),
(5, 'WAS', 'CHI', '2015-07-21');

-- --------------------------------------------------------

--
-- Structure de la table `sms_votes`
--

CREATE TABLE IF NOT EXISTS `sms_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idmatch` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `numero` varchar(50) NOT NULL,
  `equipe` int(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
