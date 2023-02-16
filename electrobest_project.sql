-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 31 jan. 2023 à 18:26
-- Version du serveur : 5.7.33
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `electrobest_project`
--

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `cid` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cart`
--

INSERT INTO `cart` (`cid`, `user_id`, `product_id`, `product_quantity`) VALUES
(7, 87, 62, 6),
(8, 86, 42, 1),
(9, 86, 43, 1),
(10, 86, 44, 4),
(11, 86, 45, 1),
(12, 86, 57, 1),
(13, 86, 62, 5),
(110, 94, 42, 1),
(111, 94, 43, 1),
(112, 94, 44, 1),
(113, 94, 45, 1),
(114, 94, 57, 1),
(115, 95, 44, 1),
(116, 95, 43, 1),
(120, 89, 43, 1),
(121, 89, 44, 1),
(122, 89, 45, 1),
(124, 84, 43, 1),
(125, 84, 44, 1),
(126, 84, 45, 1);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `username` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `useremail` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `customer`
--

CREATE TABLE `customer` (
  `cid` int(11) NOT NULL,
  `username` char(20) NOT NULL,
  `useremail` char(30) NOT NULL,
  `contactNumber` bigint(20) NOT NULL,
  `password` varchar(200) NOT NULL,
  `user_role` enum('customer','admin') NOT NULL DEFAULT 'customer',
  `user_picture` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customer`
--

INSERT INTO `customer` (`cid`, `username`, `useremail`, `contactNumber`, `password`, `user_role`, `user_picture`) VALUES
(82, 'marcosmedenou', 'marcosmedenou@gmail.com', 96103161, '$2y$10$mNwrEjR.sEGYS2eEfMGDvuNiWoXXHGF./frj0utpAq0xJerZ9aRse', 'admin', 'avatar.jpg'),
(84, 'moisemedenou', 'moisemedenou@gmail.com', 94969244, '$2y$10$4inIjWXwWJ0NnDVcfMLHxuISAk2kJLbyqKPhe7/bTB3Ra8AN0K7AK', 'customer', 'avatar.jpg'),
(85, 'majomedenou', 'majomedenou@gmail.com', 94969245, '$2y$10$jn.WhRl1y6SJRqApDHEkZuSswCTThajCz7zZkIGcOpYFRF7YfF4wW', 'customer', 'avatar.jpg'),
(86, 'jacques', 'jacques@pgmail.comessssf', 56495561, '$2y$10$quBXxDxXWyMo9FI5hn/IS.PkjxZKUoX/.z2LvE98k2o89Vs1ibx7C', 'customer', '1674747182profile4.jpg'),
(87, 'mimis', 'mimis@gmail.com', 45564641564, '$2y$10$JkOw4vw4dFqhhs9sTSYCFuJgMLr8g0jICCSI0RM5cOq7dKMjvb7LO', 'customer', '3070 pc.jpg'),
(88, 'ser', 'moisedytmedenou@gmail.com', 58678789, '$2y$10$oBdQGI/ePDeDNEpRk/F0S.fU4XPjegmBRDJQvw4Fe77jaBg9TwbCy', 'customer', 'avatar.jpg'),
(89, 'maman', 'maman@gmail.com', 96103125, '$2y$10$zDo4TMp1unBQb4LrhLu38ur2bpkWcnjAoi3f0K.aOz3wzmy4XHYqy', 'customer', '1675151501cloth-3.jpg'),
(90, 'mamann', 'mamann@gmail.com', 961031255, '$2y$10$WvSSEAKnCfkZEq9odISyN.97KdDAA2LAqy9WZKo8W1Py8Ogvzskfi', 'customer', 'avatar.jpg'),
(91, 'mamannn', 'mamannn@gmail.com', 961031256, '$2y$10$rmkFcwhbegSq9ahVvucDMu7pwXLZCXcJxcYGBjEeYKA0oX92Q5BtO', 'customer', 'avatar.jpg'),
(92, 'momosto', 'moisemedenoua@gmail.com', 75845869, '$2y$10$7edNNcWlqUubC67UcwErJ.V7uMtRy3ZvCPWl/d2K2gmwU8TPYRBhO', 'customer', 'avatar.jpg'),
(93, 'peniel', 'peniel@gmail.com', 45854575, '$2y$10$knIXqAJlA/IW1M/KnMSr.uiu2amPh6gDG5sFGQtwy0f/CNei168Ce', 'customer', 'avatar.jpg'),
(94, 'test', 'test@gmail.com', 45854512, '$2y$10$SKF.nGoEV/uYyfwHh2MyEOQBPF/2fldFZuHUc6q5mEqAF6qYUNznW', 'customer', '16748389423070 pc.jpg'),
(95, 'wagner', 'wagner@gmail.com', 96124585, '$2y$10$RaRBPdbsuTAMDnT3FDn1AeFgprvBtVlZuXHg2mWO8I6VqrI3xCFk6', 'customer', '16750678192.png');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `products_list` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solde` int(11) NOT NULL,
  `addresse_livraison` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_reference` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `product_reference`, `product_name`, `product_category`, `product_price`, `product_description`, `product_image`) VALUES
(42, 'LX5645614', 'arduino', 'Carte électronique', 653, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'arduino.jpg'),
(43, 'AN45127', 'arduino nano', 'Carte électronique', 784, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'arduino-nano.webp'),
(44, 'CN456112', 'Condensateur', 'Composants électronique', 10, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'condo2.webp'),
(45, 'DF4210455', 'Multimetre', 'Appareil de mesure', 74, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'multimeter3.webp'),
(57, 'RF564616', 'raspberry', 'Carte électronique', 74, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'H1eb5b5ee42fe4afb9137176f9f5463f4g.jpg_720x720q50.jpg'),
(62, 'AZ4522', 'fer a souder', 'Kit électronique', 103, '  Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro rem dolorum voluptates! Dolor, odit quo! Rem officia ea, optio perspiciatis sunt nam modi, dolores veritatis harum, nostrum suscipit totam incidunt!\r\n', 'fer a souder.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `unique_email` (`useremail`),
  ADD UNIQUE KEY `unique_no` (`contactNumber`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_list` (`products_list`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `customer`
--
ALTER TABLE `customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `customer` (`cid`),
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
