-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 06 mars 2019 à 20:34
-- Version du serveur :  10.1.37-MariaDB
-- Version de PHP :  7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `exos`
--

-- --------------------------------------------------------

--
-- Structure de la table `essai`
--

CREATE TABLE `essai` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `essai`
--

INSERT INTO `essai` (`id`, `nom`, `prenom`, `email`) VALUES
(5, 'hummm      tttt', 'Adama', 'nickassan01@gmail.com'),
(6, 'merci', 'Adama', 'zie.nanien@gmail.com'),
(7, 'GNELEZIE', 'Gnelezie Arouna', ''),
(8, 'GNELEZIE', 'Gnelezie Arouna', 'savanesara1644@gmail.com'),
(9, 'GNELEZIE', 'Gnelezie Arouna', 'savanesara1644@gmail.com'),
(10, 'GNELEZIE', 'Gnelezie Arouna', 'savanesara1644@gmail.com'),
(11, 'lllll', 'uuuuioii', 'ppoooo'),
(12, 'GNELEZIE', 'Gnelezie Arouna', 'savanesara1644@gmail.com'),
(13, 'OUATTARA', 'KOLO', 'kone@gmail.com'),
(14, 'OUATTARA', 'KOLO', 'kone@gmail.com');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `essai`
--
ALTER TABLE `essai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `essai`
--
ALTER TABLE `essai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
