-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 26 juin 2024 à 20:02
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `mini_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`) VALUES
(20, 'pull', 'c est mieux si vous etes celib au moins vous aurez chaud ', '4000.00', 'public/productsPics/2.jpg'),
(21, 'chaussure de boss', 'ceux qui porte ca meme laaa', '70000.00', 'public/productsPics/shoe-1.jpg'),
(19, 'chaussures', 'meilleur chaussures du pays ', '5000.00', 'public/productsPics/1.jpg'),
(16, 'robe rose', 'magnifique robe rose', '15000.00', 'public/productsPics/Cocktail-Dress-Free-PNG-Image.png'),
(17, 'montre', 'jolie montre', '3000.00', 'public/productsPics/watch-1.jpg'),
(18, 'montre de richard', 'achetter si vous avez des plan ', '20000.00', 'public/productsPics/watch-3.jpg'),
(22, 'chaussure de dragueur', 'vous vous connaisser', '80000.00', 'public/productsPics/shoe-2.jpg'),
(23, 'chaussure je suis pauvre ', 'n\'achette pas ca s\'il te plait ', '3000.00', 'public/productsPics/shoe-5.jpg'),
(24, 'chaussure de beau goss', 'si tu drague elle refuse poste la sur statue whatsapp', '20000.00', 'public/productsPics/sports-4.jpg'),
(25, 'haut de fille', 'magnifique haut pour fille tein clair', '7000.00', 'public/productsPics/clothes-1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$6mn7kEp1egj8MRae.HxC/e5sOSytMwpchbL9jKo5B.mIuuPuxiiwq'),
(2, 'admin', '$2y$10$TKoNgozGBUCofzf9wjaCNeD1ku1gH4QykOzCwRc.cjlY0u62P5akW'),
(3, 'admin', '$2y$10$fPwTBORJBxlQZTCveTF0U.hWCP2NC7IMHQlo1tk77BJmmo2THyADa');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
