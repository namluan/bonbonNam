-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 18 mars 2024 à 13:29
-- Version du serveur : 8.0.31
-- Version de PHP : 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bonbons`
--
CREATE DATABASE bonbons;
USE bonbons;

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `login` varchar(50) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`login`, `mdp`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id`, `libelle`) VALUES
(1, 'bonbons'),
(2, 'biscuits');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(30) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `photo` varchar(30) CHARACTER SET latin1 COLLATE latin1_bin NOT NULL,
  `idCat` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `photo`, `idCat`) VALUES
(1, 'bananes', '1.48', 'bananes.jpg', 1),
(2, 'chamallow', '2.58', 'chamallow.jpg', 1),
(3, 'coca', '1.38', 'coca.jpg', 1),
(4, 'colorado', '2.18', 'colorado.jpg', 1),
(5, 'fruikipik', '3.55', 'fruikipik.jpg', 1),
(6, 'dragolo', '2.48', 'dragolo.jpg', 1),
(7, 'world', '2.45', 'world.jpg', 1),
(8, 'happy', '3.48', 'happy.jpg', 1),
(9, 'melange', '2.48', 'melange.jpg', 1),
(10, 'miami', '3.48', 'miami.jpg', 1),
(11, 'nounours', '4.18', 'nounours.jpg', 1),
(12, 'oeufs', '2.20', 'oeufs.jpg', 1),
(13, 'rainbow', '2.52', 'rainbow.jpg', 1),
(14, 'shtroumpf', '2.16', 'shtroumpf.jpg', 1),
(15, 'frites', '2.55', 'frites.jpg', 1),
(16, 'reglisses', '5.13', 'reglisse.jpg', 1),
(17, 'Petit Beurre', '1.10', 'petitbeurre.jpg', 2),
(18, 'Le Palmier', '1.29', 'palmier.jpg', 2),
(19, 'Cookies aux éclats de chocolat', '1.75', 'cookies.jpg', 2),
(20, 'Grande galette', '1.59', 'galettes.jpg', 2),
(21, 'La paille d\'or', '1.79', 'pailledor.jpg', 2),
(22, 'DéliChoc', '1.59', 'delichoc.jpg', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
