-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 29 Octobre 2022 à 14:10
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `consultation`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `genre` text NOT NULL,
  `motdepasse` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `genre`, `motdepasse`) VALUES
(1, 'Achille', 'Muhima', 'M', '0000'),
(2, 'MORINGA', 'Bienvenu', 'M', '1234'),
(3, 'AMUTA', 'KOLIWA', 'F', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `idmessage` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `id_destinateur` varchar(50) NOT NULL,
  `id_auteur` varchar(50) NOT NULL,
  PRIMARY KEY (`idmessage`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `message`
--

INSERT INTO `message` (`idmessage`, `message`, `id_destinateur`, `id_auteur`) VALUES
(1, 'slt c''est patient', 'psy1OLSI099', '1'),
(2, 'slt psyc', '1', 'psy1OLSI099'),
(3, 'Bjr', 'psy2KaMu097', 'psy2KaMu097'),
(4, 'salut<br />\r\n', '2', 'psy2KaMu097');

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `prenom` text NOT NULL,
  `genre` text NOT NULL,
  `motdepasse` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `patient`
--

INSERT INTO `patient` (`id`, `nom`, `prenom`, `genre`, `motdepasse`) VALUES
(1, 'IGETE', 'KAV', 'F', '1234'),
(2, 'cherubin', 'mahikiro', 'M', '1234');

-- --------------------------------------------------------

--
-- Structure de la table `psychologue`
--

CREATE TABLE IF NOT EXISTS `psychologue` (
  `idpsc` varchar(50) NOT NULL,
  `nom` text NOT NULL,
  `postnom` text NOT NULL,
  `prenom` text NOT NULL,
  `genre` text NOT NULL,
  `telephone` text NOT NULL,
  `motdepasse` text NOT NULL,
  PRIMARY KEY (`idpsc`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `psychologue`
--

INSERT INTO `psychologue` (`idpsc`, `nom`, `postnom`, `prenom`, `genre`, `telephone`, `motdepasse`) VALUES
('psy1OLSI099', 'OLGAS', 'SIWA', 'MOWA', 'M', '0995787413', '1234'),
('psy2KaMu097', 'Kakule', 'Muhima', 'Achille', 'M', '0972272839', '1405');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
