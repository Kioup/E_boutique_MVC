-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 07 Février 2018 à 17:14
-- Version du serveur :  5.6.35
-- Version de PHP :  5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `e-boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `Cart`
--

CREATE TABLE IF NOT EXISTS `Cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `price` float NOT NULL,
  `dateCreation` date NOT NULL,
  `validate` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Category`
--

CREATE TABLE IF NOT EXISTS `Category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Category`
--

INSERT INTO `Category` (`id`, `name`, `image_url`) VALUES
(1, 'Jouets', '550_102389656.jpg'),
(2, 'Matériel informatique', '1200px-Personal_computer,_exploded_5,_unlabeled.svg.png');

-- --------------------------------------------------------

--
-- Structure de la table `lineOrder`
--

CREATE TABLE IF NOT EXISTS `lineOrder` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `id_cart` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `Product`
--

CREATE TABLE IF NOT EXISTS `Product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `id_categorie` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `Product`
--

INSERT INTO `Product` (`id`, `name`, `description`, `price`, `image_url`, `id_categorie`) VALUES
(2, 'Ours en peluche', 'Peluche animale marron, 100% laine, confort garanti.', 5, '93ede6d2b43ffb8783f28c92964b09d6--teddy-bears-maron.jpg', 1),
(3, 'Canard en plastique', 'Jouet en plastique jaune, gonflé à l''air, absorption des chocs et étanche.', 3.5, '314804.jpg', 1),
(4, 'Yoyo', 'Yoyo en bois, ficelle de corde de 3,5 mètre et résistance aux chocs et intempéries. ', 2.5, '461084006478.jpg', 1),
(5, 'Buller ', 'Bâton à bulle, 20Cl, 2 recharge de savon moussant et souffleur en plastique.', 6, 'a8692c1fbefbb5bbff271db9a74eac29--music-rings-bubble-machine.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `id` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(300) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `postalCode` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Contenu de la table `User`
--

INSERT INTO `User` (`id`, `email`, `password`, `firstName`, `lastName`, `address`, `postalCode`, `city`, `admin`) VALUES
(1, 'patrick.nollet@upmc.fr', 'toto', 'Patrick', 'NOLLET', '4 Place Jussieu', '75252', 'Paris', 0),
(2, 'patrick.nollet@upmc.fr', 'toto', 'Patrick', 'NOLLET', '4 Place Jussieu', '75252', 'Paris', 0),
(3, 'patrick.nollet@upmc.fr', 'toto', 'Patrick', 'NOLLET', '4 Place Jussieu', '75252', 'Paris', 0),
(7, 'toto@test.fr', 'Pass-Aâ†“', 'pierre', 'jerome', '6 rue des pavees', '75025', 'Paris', 0),
(8, 'toto@test.fr', 'Pass-Aâ†“', 'pierre', 'jerome', '6 rue des pavees', '75025', 'Paris', 0),
(9, 'bo@yahoo.com', '1234', 'Test', 'Proto', '9 rue des boulets', '75095', 'Paris', 0);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `lineOrder`
--
ALTER TABLE `lineOrder`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Category`
--
ALTER TABLE `Category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `lineOrder`
--
ALTER TABLE `lineOrder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Product`
--
ALTER TABLE `Product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
