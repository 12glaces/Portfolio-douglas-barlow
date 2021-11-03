-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : sql302.epizy.com
-- Généré le :  mer. 03 nov. 2021 à 06:53
-- Version du serveur :  5.7.35-38
-- Version de PHP :  7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `epiz_29304690_douglasting`
--

-- --------------------------------------------------------

--
-- Structure de la table `Douglas_Contact`
--

CREATE TABLE `Douglas_Contact` (
  `Nom` text NOT NULL,
  `Prenom` text NOT NULL,
  `Email` text NOT NULL,
  `Phone` text NOT NULL,
  `Message` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Douglas_Contact`
--

INSERT INTO `Douglas_Contact` (`Nom`, `Prenom`, `Email`, `Phone`, `Message`, `id`) VALUES
('Me but not you', 'Yes', 'notmyeamil@poo.com', '69', 'Oh hi there ', 18),
('Douglas', 'Barlow', 'd.barlow@laposte.net', '0609701321', 'Bonjour ', 16),
('Douglas', 'Barlow', 'd.barlow@laposte.net', '0609701321', 'ayy does this work ?', 17);

-- --------------------------------------------------------

--
-- Structure de la table `Douglas_Login`
--

CREATE TABLE `Douglas_Login` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password_hash` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `Douglas_Login`
--

INSERT INTO `Douglas_Login` (`id`, `username`, `password_hash`) VALUES
(1, 'Douglas', 'dabc93d60a5eda9294e66732a96947af');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Douglas_Contact`
--
ALTER TABLE `Douglas_Contact`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Douglas_Login`
--
ALTER TABLE `Douglas_Login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Douglas_Contact`
--
ALTER TABLE `Douglas_Contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `Douglas_Login`
--
ALTER TABLE `Douglas_Login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
