-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 11 Juin 2017 à 14:14
-- Version du serveur :  5.6.21
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bd_promotion`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
`id` int(11) NOT NULL,
  `matricule` varchar(10) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `postnom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `genre` varchar(50) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `promotion` varchar(50) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `numTel` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photos` varchar(255) NOT NULL,
  `resultat` varchar(40) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `matricule`, `nom`, `postnom`, `prenom`, `date_naissance`, `genre`, `mail`, `promotion`, `adresse`, `numTel`, `password`, `photos`, `resultat`) VALUES
(19, '13NG306', 'NGUDIA', 'NKASHAMA', 'Manasse', '2017-06-22', 'Masculin', 'ngudiamanasse@gmail.com', 'G2 RT ISI', '12 av savonnier', '0976322706', '12345678', '759427.jpg', '75 D'),
(20, '12DF456', 'NGOIE', 'KALONDA', 'Jessica', '2017-06-25', 'Feminin', 'ngoie@gmail.com', 'G1 RT ISI', '234 AV maniema Q/lubumbashi', '09763227765', '1234', '676167.jpg', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `mail` (`mail`), ADD UNIQUE KEY `matricule` (`matricule`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
