-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 02 juin 2026 à 14:52
-- Version du serveur : 5.7.39
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e-commerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `circles_table`
--

CREATE TABLE `circles_table` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `ID` int(11) NOT NULL,
  `USERNAME` text NOT NULL,
  `EMAIL` text NOT NULL,
  `TELE` int(11) NOT NULL,
  `CITY` text NOT NULL,
  `PASSWORD` varchar(255) NOT NULL,
  `Accept` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`ID`, `USERNAME`, `EMAIL`, `TELE`, `CITY`, `PASSWORD`, `Accept`) VALUES
(1, 'Mohamed', 'med@gmail.com', 646396570, 'Sale', 'ANA@ana123', 1),
(2, 'Manal', 'manal@gmail.com', 635372, 'rabat', 'Manal#123', 0);

-- --------------------------------------------------------

--
-- Structure de la table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `telephone`, `city`) VALUES
(2, 'ahmed', 'ahmed@gmail.com', '0763768731', 'had '),
(3, 'nihad', 'nihad77@gmail.com', '033332333332', 'makka');

-- --------------------------------------------------------

--
-- Structure de la table `helpclient`
--

CREATE TABLE `helpclient` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email_tele` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `helpclient`
--

INSERT INTO `helpclient` (`id`, `name`, `email_tele`, `comment`) VALUES
(1, 'Mohamed', 'med@gmail.com', 'call me ');

-- --------------------------------------------------------

--
-- Structure de la table `newstop`
--

CREATE TABLE `newstop` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `newstop`
--

INSERT INTO `newstop` (`id`, `email`) VALUES
(1, 'admin@quickbuy.com'),
(2, 'med@gmail.com'),
(3, 'manal@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `orderproducts`
--

CREATE TABLE `orderproducts` (
  `name` text NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(180) NOT NULL,
  `in_cart` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `orderproducts`
--

INSERT INTO `orderproducts` (`name`, `price`, `img`, `in_cart`, `customer_id`, `order_date`) VALUES
('CITRUS JUICER USB', 215, 'imgproducts/CITRUSJUICER-removebg-preview.png', 4, 1, '2023-03-24 18:24:42'),
('Jelaba', 401, 'imgproducts/imgproductsHotpot-6.png', 2, 2, '2026-06-02 01:10:52'),
('Juice ', 50, 'imgproducts/images.jpeg', 4, 3, '2026-06-02 12:04:06'),
('Jelaba', 114, 'imgproducts/imgproductsHotpot-6.png', 1, 3, '2026-06-02 12:04:06'),
('Bag ', 38, 'imgproducts/imgproductsabot.png', 1, 3, '2026-06-02 12:04:06'),
('Kitchen ', 38, 'imgproducts/download (1).jpeg', 1, 3, '2026-06-02 12:04:06');

-- --------------------------------------------------------

--
-- Structure de la table `orders`
--

CREATE TABLE `orders` (
  `id` int(6) UNSIGNED NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `quantity` int(6) NOT NULL,
  `price` float(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `ordersss`
--

CREATE TABLE `ordersss` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_price` decimal(10,0) NOT NULL,
  `currency_code` varchar(3) NOT NULL DEFAULT 'MAD',
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_phone` varchar(255) NOT NULL,
  `customer_city` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ordersss`
--

INSERT INTO `ordersss` (`id`, `product_name`, `product_image`, `product_price`, `currency_code`, `customer_name`, `customer_email`, `customer_phone`, `customer_city`, `order_date`, `total_price`) VALUES
(41, 'Kitchen ', 'download (1).jpeg,images.jpeg,images (2).jpeg,download.jpeg', '100', 'MAD', 'Roa ', 'roa@gmail.com', '672187832761', 'belksiri', '2026-06-02 10:51:00', NULL),
(42, 'Bag ', 'imgproductsabot.png,imgproductspexels-nataliya-vaitkevich-6214471.jpg', '99', 'MAD', 'fatima', 'fatima12@gamil.com', '23456789087', 'had kourt', '2026-06-02 11:07:32', NULL),
(43, 'Bag ', 'imgproductsabot.png,imgproductspexels-nataliya-vaitkevich-6214471.jpg', '99', 'MAD', 'bouchra', 'fatima12@gamil.com', '23456789087', 'had kourt', '2026-06-02 11:11:48', NULL),
(44, 'Bag ', 'imgproductsabot.png,imgproductspexels-nataliya-vaitkevich-6214471.jpg', '99', 'MAD', 'rania', 'rania12@gmail.com', '567890228772', 'casa', '2026-06-02 11:18:06', NULL),
(45, 'Bag ', 'imgproductsabot.png,imgproductspexels-nataliya-vaitkevich-6214471.jpg', '99', 'MAD', 'rania', 'rania12@gmail.com', '34567887545', 'casa', '2026-06-02 11:20:38', NULL),
(46, 'Bag ', 'imgproductsabot.png,imgproductspexels-nataliya-vaitkevich-6214471.jpg', '99', 'MAD', 'Adam', 'rania12@gmail.com', '34567887545', 'casa', '2026-06-02 11:39:34', NULL),
(47, 'Kitchen ', 'download (1).jpeg,images.jpeg,images (2).jpeg,download.jpeg', '100', 'MAD', 'ismail', 'ismali1233@gmail.com', '233638382', 'agadir', '2026-06-02 11:44:31', NULL),
(48, 'Kitchen ', 'download (1).jpeg,images.jpeg,images (2).jpeg,download.jpeg', '100', 'MAD', 'mourd', 'mourad54@gmail.com', '6736236236', 'tanger', '2026-06-02 11:46:00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `productbeauty`
--

CREATE TABLE `productbeauty` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `productes`
--

CREATE TABLE `productes` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `sale` int(11) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `productes`
--

INSERT INTO `productes` (`id`, `name`, `description`, `image`, `price`, `sale_price`, `category`, `sale`, `availability`) VALUES
(5, 'Jelaba', 'jsnfgnshtam', 'imgproductsHotpot-6.png,imgproductsHotpot-10.png,imgproductsslazzer-edit-image.png', 400, 298, 'beauty', 1, 1),
(6, 'Jelaba', 'jsnfgnshtam', 'imgproductsHotpot-6.png,imgproductsHotpot-10.png,imgproductsslazzer-edit-image.png', 598, 498, 'beauty', 0, 0),
(7, 'Bag ', 'sdf grb fqe', 'imgproductsabot.png,imgproductspexels-nataliya-vaitkevich-6214471.jpg', 198, 98, 'beauty', 1, 1),
(8, 'Kitchen ', 'Le rayon Maison et Cuisine regroupe tous les équipements, ustensiles et objets de décoration essentiels pour rendre votre intérieur à la fois fonctionnel, confortable et esthétique.', 'download (1).jpeg,images.jpeg,images (2).jpeg,download.jpeg', 123, 99, 'home', 1, 1),
(9, 'Juice ', 'Le rayon Maison et Cuisine regroupe tous les équipements, ustensiles et objets de décoration essentiels pour rendre votre intérieur à la fois fonctionnel, confortable et esthétique.', 'images.jpeg,images (2).jpeg,images (1).jpeg,download.jpeg', 195, 131, 'home', 1, 1),
(10, 'Juice ', 'Le rayon Maison et Cuisine regroupe tous les équipements, ustensiles et objets de décoration essentiels pour rendre votre intérieur à la fois fonctionnel, confortable et esthétique.', 'images.jpeg,images (2).jpeg,images (1).jpeg,download.jpeg', 195, 131, 'home', 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `producthometapkh`
--

CREATE TABLE `producthometapkh` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `discount_percent` int(11) NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `productman`
--

CREATE TABLE `productman` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `discount_percent` int(11) NOT NULL,
  `availability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `productsweets`
--

CREATE TABLE `productsweets` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `productwoman`
--

CREATE TABLE `productwoman` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `sale_price` int(11) NOT NULL,
  `sale` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `circles_table`
--
ALTER TABLE `circles_table`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `helpclient`
--
ALTER TABLE `helpclient`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newstop`
--
ALTER TABLE `newstop`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ordersss`
--
ALTER TABLE `ordersss`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `productbeauty`
--
ALTER TABLE `productbeauty`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `productes`
--
ALTER TABLE `productes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `producthometapkh`
--
ALTER TABLE `producthometapkh`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `productman`
--
ALTER TABLE `productman`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `productsweets`
--
ALTER TABLE `productsweets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `productwoman`
--
ALTER TABLE `productwoman`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `circles_table`
--
ALTER TABLE `circles_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `helpclient`
--
ALTER TABLE `helpclient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `newstop`
--
ALTER TABLE `newstop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ordersss`
--
ALTER TABLE `ordersss`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT pour la table `productbeauty`
--
ALTER TABLE `productbeauty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `productes`
--
ALTER TABLE `productes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `producthometapkh`
--
ALTER TABLE `producthometapkh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `productman`
--
ALTER TABLE `productman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `productsweets`
--
ALTER TABLE `productsweets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `productwoman`
--
ALTER TABLE `productwoman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `circles_table`
--
ALTER TABLE `circles_table`
  ADD CONSTRAINT `circles_table_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `ordersss` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
