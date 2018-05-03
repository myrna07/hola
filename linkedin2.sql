-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 03 mai 2018 à 07:41
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `linkedin2`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `numero` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `amis`
--

DROP TABLE IF EXISTS `amis`;
CREATE TABLE IF NOT EXISTS `amis` (
  `utilisateur` int(11) NOT NULL,
  `ami` int(11) NOT NULL,
  PRIMARY KEY (`utilisateur`,`ami`),
  KEY `personne_ami` (`ami`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

DROP TABLE IF EXISTS `emploi`;
CREATE TABLE IF NOT EXISTS `emploi` (
  `societe` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `photo` blob NOT NULL,
  `ville` varchar(255) NOT NULL,
  PRIMARY KEY (`domaine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emploi`
--

INSERT INTO `emploi` (`societe`, `categorie`, `description`, `domaine`, `titre`, `photo`, `ville`) VALUES
('Sandro', 'Stage', 'Recherche vendeuse ', 'Autre', 'Vendeuse Sandro', '', ''),
('EDF', 'Stage', ' Recherche stagiaire pour 5 semaines...', 'IngÃ©nieur', 'Recherche stagiaires ete', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `numero` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `naissance` date NOT NULL,
  PRIMARY KEY (`numero`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`numero`, `nom`, `prenom`, `mail`, `pseudo`, `mdp`, `naissance`) VALUES
(0, 'Bacquart', 'Audrey', 'audrey.bacquart@edu.ece.fr', 'audi', 'ptdr', '2018-03-14'),
(1, 'el awady', 'mymy', 'mymy.elawady@edu.ece.fr', 'myms', 'lol', '2018-05-17'),
(2, 'hoche', 'mathilde', 'mathilde.hoche@edu.ece.fr', 'mat', 'mdrr', '2018-05-29');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `numero` int(11) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `photo` blob NOT NULL,
  `domaine` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `competences` varchar(255) NOT NULL,
  `langue` varchar(255) NOT NULL,
  PRIMARY KEY (`numero`,`domaine`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`numero`, `pays`, `photo`, `domaine`, `description`, `education`, `competences`, `langue`) VALUES
(0, 'france', '', '', '', '', '', ''),
(1, 'france', '', '', '', '', '', ''),
(2, 'FRANCE', '', '', 'hola', 'tchoin', 'ntm', 'chinois frr');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `utilisateur_admin` FOREIGN KEY (`numero`) REFERENCES `utilisateur` (`numero`);

--
-- Contraintes pour la table `amis`
--
ALTER TABLE `amis`
  ADD CONSTRAINT `personne_ami` FOREIGN KEY (`ami`) REFERENCES `personne` (`numero`),
  ADD CONSTRAINT `personne_user` FOREIGN KEY (`utilisateur`) REFERENCES `personne` (`numero`);

--
-- Contraintes pour la table `personne`
--
ALTER TABLE `personne`
  ADD CONSTRAINT `personne_utilisateur` FOREIGN KEY (`numero`) REFERENCES `utilisateur` (`numero`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
