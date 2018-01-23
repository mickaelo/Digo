-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 23 Janvier 2018 à 09:35
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `digora`
--

-- --------------------------------------------------------

--
-- Structure de la table `techniciens`
--

CREATE TABLE IF NOT EXISTS `techniciens` (
  `id_technicien` int(11) NOT NULL AUTO_INCREMENT,
  `nom` text,
  `prenom` text,
  `email` text,
  `competences` text,
  PRIMARY KEY (`id_technicien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `techniciens`
--

INSERT INTO `techniciens` (`id_technicien`, `nom`, `prenom`, `email`, `competences`) VALUES
(1, 'ludovic', 'perrin', 'ludovic.perrin@viacesi.Fr', 'aucune\r\n'),
(2, 'amine', 'brahmia', 'amine.brah@viacesi.fr', 'WY'),
(3, 'amine', 'brahmia', 'amine.brah@viacesi.fr', 'WY'),
(4, 'amine', 'brahmia', 'amine.brah@viacesi.fr', 'WY'),
(5, 'mick', 'ott', 'diabolos28@hotmail.fr', 'WY'),
(6, 'toi', 'r', 'diabolos28@hotmail.fr', 'AL;WY;'),
(7, 'te', 'sss', 'diabolos28@hotmail.fr', 'AL;WY;');

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

CREATE TABLE IF NOT EXISTS `tickets` (
  `id_ticket` int(11) NOT NULL AUTO_INCREMENT,
  `signale_par` text,
  `categorie` text,
  `urgence` text,
  `priorite` text,
  `objet` text,
  `description` text,
  `id_technicien` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ticket`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `tickets`
--

INSERT INTO `tickets` (`id_ticket`, `signale_par`, `categorie`, `urgence`, `priorite`, `objet`, `description`, `id_technicien`) VALUES
(1, 'monsieur amine', 'réseau', 'haute', 'moyenne', 'défaillance', 'ça marche pas', NULL),
(2, 'Mickaël prenom', NULL, 'Haute', 'Haute', 'objet du ticket', 'etrey', 1),
(3, 'Mickaël prenom', NULL, 'Haute', 'Haute', 'sdsd', 'sdsds', NULL),
(4, 'zd zadzd', NULL, 'Haute', 'Haute', 'azdzad', 'azdazd', NULL),
(5, 'zd zadzd', NULL, 'Haute', 'Haute', 'azdzad', 'azdazd', NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
