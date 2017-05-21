-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Dim 21 Mai 2017 à 00:23
-- Version du serveur :  5.5.49-0+deb8u1
-- Version de PHP :  5.6.20-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `goulagoula`
--

-- --------------------------------------------------------

--
-- Structure de la table `detail_sejour`
--

CREATE TABLE IF NOT EXISTS `detail_sejour` (
`ref_reserv` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `evaluation_univer`
--

CREATE TABLE IF NOT EXISTS `evaluation_univer` (
`id` int(11) NOT NULL,
  `univer` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `mini_chat`
--

CREATE TABLE IF NOT EXISTS `mini_chat` (
`id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `reserv_sejour`
--

CREATE TABLE IF NOT EXISTS `reserv_sejour` (
`id` int(11) NOT NULL,
  `debut` varchar(255) NOT NULL,
  `fin` varchar(255) NOT NULL,
  `hotel` varchar(255) NOT NULL,
  `nb_room` varchar(255) NOT NULL,
  `nb_adulte` varchar(255) NOT NULL,
  `nb_enfant` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `detail_sejour`
--
ALTER TABLE `detail_sejour`
 ADD PRIMARY KEY (`ref_reserv`);

--
-- Index pour la table `evaluation_univer`
--
ALTER TABLE `evaluation_univer`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mini_chat`
--
ALTER TABLE `mini_chat`
 ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reserv_sejour`
--
ALTER TABLE `reserv_sejour`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `detail_sejour`
--
ALTER TABLE `detail_sejour`
MODIFY `ref_reserv` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `evaluation_univer`
--
ALTER TABLE `evaluation_univer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `mini_chat`
--
ALTER TABLE `mini_chat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `reserv_sejour`
--
ALTER TABLE `reserv_sejour`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
