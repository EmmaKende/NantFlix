-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 13 avr. 2020 à 23:26
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mabase`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteur`
--

CREATE TABLE `acteur` (
  `Id_A` int(10) NOT NULL,
  `nom_A` varchar(20) DEFAULT NULL,
  `prenom_A` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `episode`
--

CREATE TABLE `episode` (
  `Num_episode` int(11) NOT NULL,
  `Titre` varchar(20) DEFAULT NULL,
  `Durée` time DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `Refserie` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `realisateur`
--

CREATE TABLE `realisateur` (
  `Id_R` int(20) NOT NULL,
  `nom_R` varchar(20) DEFAULT NULL,
  `prenom_R` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `serie`
--

CREATE TABLE `serie` (
  `Num_serie` int(10) NOT NULL,
  `Nom_S` varchar(20) NOT NULL,
  `DateSortie` int(11) DEFAULT NULL,
  `nbreepisode` int(20) DEFAULT NULL,
  `acteurs` text DEFAULT NULL,
  `realisateur` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `serie`
--

INSERT INTO `serie` (`Num_serie`, `Nom_S`, `DateSortie`, `nbreepisode`, `acteurs`, `realisateur`) VALUES
(36, 'Manifest', 2019, 10, 'Clara, Margan, Eric', 'Diale'),
(37, 'La casa de papel', 2017, 20, 'Professor, Tokyo, Nairobi, Berlin, Raquel', 'Anibal'),
(38, 'TOi et MOi', 2020, 1, 'Emma, Arthur', 'Lyly'),
(40, 'Eva', 2020, 2, 'Emma', 'Lyly'),
(43, 'Ma vie', 2006, 4, 'tyara, malvin', 'eugenie'),
(44, 'COVID-19 : la survie', 2020, 1, 'aucun', 'Kende'),
(45, 'la Vie', 2015, 2, 'Jules', 'Lyly'),
(46, 'La prison', 2004, 7, 'Eva, samuel', 'Mattiwe');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Mot_de_passe` varchar(20) DEFAULT NULL,
  `Nom_U` varchar(20) DEFAULT NULL,
  `Prenom_U` varchar(20) DEFAULT NULL,
  `Date_de_naissance` date DEFAULT NULL,
  `Telephone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `Email`, `Mot_de_passe`, `Nom_U`, `Prenom_U`, `Date_de_naissance`, `Telephone`) VALUES
(12, 'nounoukende@gmail.co', '0000', 'Kende', 'KENDE', '1999-09-08', 769213526),
(13, 'Nelly@gmail.com', '1111', 'soro', 'Nelly', '2000-03-07', 9999999),
(14, 'atur@hotmail.fr', '1234', 'Konan', 'Arthur', '1997-11-05', 34567899),
(15, 'gloria@gmail.fr', '0987', 'lokou', 'Gloria', '2008-08-31', 2147483647),
(22, 'paul@outlook.fr', 'SALUT', 'Gocho', 'Paul', '2002-05-05', 97856443),
(23, 'paul@outlook.fr', 'HELLO', 'Gocho', 'Paul', '2002-05-05', 97856443),
(24, 'deoth@ahoofr', 'ERRE', 'eude', 'Deoth', '2001-06-01', 988754),
(25, 'HANS@gmail.com', '456789', 'Melle', 'Hans', '2000-12-09', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `acteur`
--
ALTER TABLE `acteur`
  ADD PRIMARY KEY (`Id_A`);

--
-- Index pour la table `episode`
--
ALTER TABLE `episode`
  ADD PRIMARY KEY (`Num_episode`),
  ADD KEY `e2` (`Refserie`);

--
-- Index pour la table `realisateur`
--
ALTER TABLE `realisateur`
  ADD PRIMARY KEY (`Id_R`);

--
-- Index pour la table `serie`
--
ALTER TABLE `serie`
  ADD PRIMARY KEY (`Num_serie`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `realisateur`
--
ALTER TABLE `realisateur`
  MODIFY `Id_R` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `serie`
--
ALTER TABLE `serie`
  MODIFY `Num_serie` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `episode`
--
ALTER TABLE `episode`
  ADD CONSTRAINT `e2` FOREIGN KEY (`Refserie`) REFERENCES `serie` (`Num_serie`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
