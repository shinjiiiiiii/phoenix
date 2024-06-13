-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 18 mars 2024 à 16:06
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `phoenix`
--

-- --------------------------------------------------------

--
-- Structure de la table `tp_accounts`
--

DROP TABLE IF EXISTS `tp_accounts`;
CREATE TABLE IF NOT EXISTS `tp_accounts` (
  `id_account` int NOT NULL AUTO_INCREMENT,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(255) NOT NULL,
  `adress` varchar(100) NOT NULL,
  `tel` varchar(15) NOT NULL,
  `num_carte` varchar(16) NOT NULL,
  `crypto` varchar(3) NOT NULL,
  `role` int NOT NULL,
  PRIMARY KEY (`id_account`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `tp_accounts`
--

INSERT INTO `tp_accounts` (`id_account`, `username`, `password`, `email`, `adress`, `tel`, `num_carte`, `crypto`, `role`) VALUES
(5, 'a', '$2y$10$mP/744XYnNTAs.F/DhJji.xR7mfDnLgWIIP8E3AcsHcgtMj.1QBnu', 'boubakar@gmail.com', 'a', 'a', 'a', 'a', 0),
(6, 'b', '$2y$10$C23DFieZpSdC/.Q6zwmaUuogy6VkUyBNL9z/xoUj68qFnOKU22kdu', 'test@gmail.com', 'b', 'b', 'b', 'b', 1);

-- --------------------------------------------------------

--
-- Structure de la table `tp_category`
--

DROP TABLE IF EXISTS `tp_category`;
CREATE TABLE IF NOT EXISTS `tp_category` (
  `id_category` int NOT NULL AUTO_INCREMENT,
  `name_category` varchar(20) NOT NULL,
  PRIMARY KEY (`id_category`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `tp_category`
--

INSERT INTO `tp_category` (`id_category`, `name_category`) VALUES
(1, 'Vos vacances de rêve'),
(2, 'Plage'),
(3, 'Urbaine'),
(4, 'Croisière'),
(5, 'Montagne'),
(6, 'A prix tout doux');

-- --------------------------------------------------------

--
-- Structure de la table `tp_orders`
--

DROP TABLE IF EXISTS `tp_orders`;
CREATE TABLE IF NOT EXISTS `tp_orders` (
  `id_order` int NOT NULL AUTO_INCREMENT,
  `reference` varchar(8) NOT NULL,
  `account_id` int NOT NULL,
  `travel_id` int NOT NULL,
  `nb_personne` int NOT NULL,
  `nb_week` int NOT NULL,
  `total` int NOT NULL,
  `email_confirm` varchar(255) NOT NULL,
  PRIMARY KEY (`id_order`),
  UNIQUE KEY `reference` (`reference`),
  KEY `id_account` (`account_id`),
  KEY `id_travel` (`travel_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `tp_orders`
--

INSERT INTO `tp_orders` (`id_order`, `reference`, `account_id`, `travel_id`, `nb_personne`, `nb_week`, `total`, `email_confirm`) VALUES
(1, '65f3202c', 6, 2, 4, 3, 4200, 'boubakar@gmail.com'),
(11, '65f44dc0', 6, 1, 1, 1, 750, 'udauvergne@edenschool.fr'),
(12, '65f81bc8', 6, 10, 40, 8, 179840, 'boubakar@gmail.com'),
(13, '65f81bea', 6, 13, 2, 1, 4000, 'test@gmail.com'),
(14, '65f85153', 6, 9, 200, 100, 18840000, 'boubakar@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `tp_travels`
--

DROP TABLE IF EXISTS `tp_travels`;
CREATE TABLE IF NOT EXISTS `tp_travels` (
  `id_travel` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `category_id` int NOT NULL,
  PRIMARY KEY (`id_travel`),
  KEY `id_category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `tp_travels`
--

INSERT INTO `tp_travels` (`id_travel`, `name`, `description`, `image`, `price`, `category_id`) VALUES
(1, 'Les boucaniers', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil qui eum itaque, unde harum officiis modi cupiditate aperiam saepe id, quis, architecto cumque earum inventore sunt in quam fuga dolor.', 'caraibes_martinique_boucaniers.jpg', 750, 2),
(2, 'Kamarina', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil qui eum itaque, unde harum officiis modi cupiditate aperiam saepe id, quis, architecto cumque earum inventore sunt in quam fuga dolor.', 'sicile_kamarina.jpg', 350, 6),
(3, 'Finohlu', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil qui eum itaque, unde harum officiis modi cupiditate aperiam saepe id, quis, architecto cumque earum inventore sunt in quam fuga dolor.', 'maldives_fino.jpg', 750, 2),
(4, 'Albion sauvage', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil qui eum itaque, unde harum officiis modi cupiditate aperiam saepe id, quis, architecto cumque earum inventore sunt in quam fuga dolor.', 'maurice_albion.jpg', 750, 2),
(5, 'Kani', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil qui eum itaque, unde harum officiis modi cupiditate aperiam saepe id, quis, architecto cumque earum inventore sunt in quam fuga dolor.', 'maldives_kani.jpg', 750, 2),
(6, 'Gregolimano', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nihil qui eum itaque, unde harum officiis modi cupiditate aperiam saepe id, quis, architecto cumque earum inventore sunt in quam fuga dolor.', 'grece_gregolimano.jpg', 350, 6),
(7, 'bogota', 'ville magnifique tqt pas ', 'bogota.jpg', 1400, 1),
(8, 'Nouvelle zelande', 'il fait beau il fait pas très chaud c\'est le moment pour', 'NZLANDSCAPE.jpg', 2500, 5),
(9, 'suisse', 'montagne gout chocolat', 'swiss.jpg', 942, 5),
(10, 'Norvège ', 'Très beau avec la meilleur gastronomie au monde  ', 'norway.jpg', 562, 5),
(11, 'toronto', 'fais froid mais tqt', 'toronto.jpg', 700, 3),
(12, 'singapour', '吃米饭', 'singapour.jpg', 1100, 3),
(13, 'gold coast', 'attention au requin ma belle', 'australia.jpg', 2000, 3),
(14, 'inde', 'très bonne street food', 'inde.jpg', 10, 1),
(15, 'bora bora', 'sable doux', 'bora.jpg', 1500, 1),
(16, 'croatie', 'très bonne patates', 'croatie.jpg', 800, 4),
(17, 'messina', 'jsp', 'italie.jpg', 800, 4);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tp_orders`
--
ALTER TABLE `tp_orders`
  ADD CONSTRAINT `tp_orders_ibfk_1` FOREIGN KEY (`travel_id`) REFERENCES `tp_travels` (`id_travel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tp_orders_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `tp_accounts` (`id_account`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `tp_travels`
--
ALTER TABLE `tp_travels`
  ADD CONSTRAINT `tp_travels_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `tp_category` (`id_category`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
