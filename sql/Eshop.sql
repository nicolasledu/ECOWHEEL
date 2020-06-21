-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  Dim 21 juin 2020 à 10:17
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Eshop`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `bio` text,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `name`, `bio`, `image`) VALUES
(1, 'SoloWheel', 'nsdjknjkfnjknczf', 'wheel1.jpg'),
(2, 'Vélo électrique', 'kiki', 'bike1.jpg'),
(3, 'Trotinette électrique ', 'cdnciernfenv', 'trotti1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `firstImage` varchar(255) DEFAULT NULL,
  `secondImage` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `short_description` tinytext NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `firstImage`, `secondImage`, `name`, `description`, `short_description`, `price`) VALUES
(19, 'wheel9.jpg', 'wheel9-2.jpg', 'SoloWheel REYFUN Retro', 'La gyroroue V5 de Inmotion vous propose une façon  fun et efficace de vous déplacer avec ses 30 km/h de vitesse maximale sur terrain privé en France (25 km/h en vitesse bridée).\r\nElle est idéale pour tous vos déplacements urbains avec son autonomie pouvant aller  jusqu\'à 40 km.Il vous faudra par ailleurs de  4 heure 30 pour assurer une charge de complète de la batterie de 6400 mAh.', 'Vitesse bridée 25 km/h \r\n- Vitesse maximale 30 km/h\r\nPoids maximum supporté: 120 kg\r\nBatterie 6400 mAh - Autonomie jusqu\'à \r\n40km\r\nPoignée de transport trolley - Temps de charge 4h30', 1999),
(20, 'wheel10.jpg', 'wheel10-2.jpg', 'SoloWheel INMOTION V8', 'La gyroroue V5 de Inmotion vous propose une façon  fun et efficace de vous déplacer avec ses 30 km/h de vitesse maximale sur terrain privé en France (25 km/h en vitesse bridée).\r\nElle est idéale pour tous vos déplacements urbains avec son autonomie pouvant aller  jusqu\'à 40 km.Il vous faudra par ailleurs de  4 heure 30 pour assurer une charge de complète de la batterie de 6400 mAh.', 'Vitesse bridée 25 km/h \r\n- Vitesse maximale 30 km/h\r\nPoids maximum supporté: 120 kg\r\nBatterie 6400 mAh - Autonomie jusqu\'à \r\n40km\r\nPoignée de transport trolley - Temps de charge 4h30', 890),
(21, 'wheel6.jpg', 'wheel6-2.jpg', 'SoloWheel INMOTION V5F ', 'La gyroroue V5 de Inmotion vous propose une façon  fun et efficace de vous déplacer avec ses 30 km/h de vitesse maximale sur terrain privé en France (25 km/h en vitesse bridée).\r\nElle est idéale pour tous vos déplacements urbains avec son autonomie pouvant aller  jusqu\'à 40 km.Il vous faudra par ailleurs de  4 heure 30 pour assurer une charge de complète de la batterie de 6400 mAh.', 'Vitesse bridée 25 km/h \r\n- Vitesse maximale 30 km/h\r\nPoids maximum supporté: 120 kg\r\nBatterie 6400 mAh - Autonomie jusqu\'à \r\n40km\r\nPoignée de transport trolley - Temps de charge 4h30', 780),
(22, 'wheel8.jpg', 'wheel8-2.jpg', 'SoloWheel NINEBOT', 'La gyroroue V5 de Inmotion vous propose une façon  fun et efficace de vous déplacer avec ses 30 km/h de vitesse maximale sur terrain privé en France (25 km/h en vitesse bridée).\r\nElle est idéale pour tous vos déplacements urbains avec son autonomie pouvant aller  jusqu\'à 40 km.Il vous faudra par ailleurs de  4 heure 30 pour assurer une charge de complète de la batterie de 6400 mAh.', 'Vitesse bridée 25 km/h \r\n- Vitesse maximale 30 km/h\r\nPoids maximum supporté: 120 kg\r\nBatterie 6400 mAh - Autonomie jusqu\'à \r\n40km\r\nPoignée de transport trolley - Temps de charge 4h30', 1067),
(23, 'wheel3.jpg', 'wheel3-2.jpg', 'SoloWheel MACWHEEL 60V', 'La gyroroue V5 de Inmotion vous propose une façon  fun et efficace de vous déplacer avec ses 30 km/h de vitesse maximale sur terrain privé en France (25 km/h en vitesse bridée).\r\nElle est idéale pour tous vos déplacements urbains avec son autonomie pouvant aller  jusqu\'à 40 km.Il vous faudra par ailleurs de  4 heure 30 pour assurer une charge de complète de la batterie de 6400 mAh.', 'Vitesse bridée 25 km/h \r\n- Vitesse maximale 30 km/h\r\nPoids maximum supporté: 120 kg\r\nBatterie 6400 mAh - Autonomie jusqu\'à \r\n40km\r\nPoignée de transport trolley - Temps de charge 4h30', 950),
(24, 'wheel1.jpg', 'wheel1-2.jpg', 'SoloWheel MONSTER V2', 'La gyroroue V5 de Inmotion vous propose une façon  fun et efficace de vous déplacer avec ses 30 km/h de vitesse maximale sur terrain privé en France (25 km/h en vitesse bridée).\r\nElle est idéale pour tous vos déplacements urbains avec son autonomie pouvant aller  jusqu\'à 40 km.Il vous faudra par ailleurs de  4 heure 30 pour assurer une charge de complète de la batterie de 6400 mAh.', 'Vitesse bridée 25 km/h \r\n- Vitesse maximale 30 km/h\r\nPoids maximum supporté: 120 kg\r\nBatterie 6400 mAh - Autonomie jusqu\'à \r\n40km\r\nPoignée de transport trolley - Temps de charge 4h30', 1250),
(25, 'wheel5.jpg', 'wheel5-2.jpg', 'SoloWheel XTREME', 'La gyroroue V5 de Inmotion vous propose une façon  fun et efficace de vous déplacer avec ses 30 km/h de vitesse maximale sur terrain privé en France (25 km/h en vitesse bridée).\r\nElle est idéale pour tous vos déplacements urbains avec son autonomie pouvant aller  jusqu\'à 40 km.Il vous faudra par ailleurs de  4 heure 30 pour assurer une charge de complète de la batterie de 6400 mAh.', 'Vitesse bridée 25 km/h \r\n- Vitesse maximale 30 km/h\r\nPoids maximum supporté: 120 kg\r\nBatterie 6400 mAh - Autonomie jusqu\'à \r\n40km\r\nPoignée de transport trolley - Temps de charge 4h30', 760),
(26, 'wheel7.jpg', 'wheel7-2.jpg', 'SoloWheel NINEBOT One', 'La gyroroue V5 de Inmotion vous propose une façon  fun et efficace de vous déplacer avec ses 30 km/h de vitesse maximale sur terrain privé en France (25 km/h en vitesse bridée).\r\nElle est idéale pour tous vos déplacements urbains avec son autonomie pouvant aller  jusqu\'à 40 km.Il vous faudra par ailleurs de  4 heure 30 pour assurer une charge de complète de la batterie de 6400 mAh.', 'Vitesse bridée 25 km/h \r\n- Vitesse maximale 30 km/h\r\nPoids maximum supporté: 120 kg\r\nBatterie 6400 mAh - Autonomie jusqu\'à \r\n40km\r\nPoignée de transport trolley - Temps de charge 4h30', 900),
(27, 'wheel2.jpg', 'wheel2-2.jpg', 'SoloWheel GYROBARDER', 'La gyroroue V5 de Inmotion vous propose une façon  fun et efficace de vous déplacer avec ses 30 km/h de vitesse maximale sur terrain privé en France (25 km/h en vitesse bridée).\r\nElle est idéale pour tous vos déplacements urbains avec son autonomie pouvant aller  jusqu\'à 40 km.Il vous faudra par ailleurs de  4 heure 30 pour assurer une charge de complète de la batterie de 6400 mAh.', 'Vitesse bridée 25 km/h \r\n- Vitesse maximale 30 km/h\r\nPoids maximum supporté: 120 kg\r\nBatterie 6400 mAh - Autonomie jusqu\'à \r\n40km\r\nPoignée de transport trolley - Temps de charge 4h30', 880),
(28, 'wheel4.jpg', 'wheel4-2.jpg', 'SoloWheel SCOOTY A9', 'La gyroroue V5 de Inmotion vous propose une façon  fun et efficace de vous déplacer avec ses 30 km/h de vitesse maximale sur terrain privé en France (25 km/h en vitesse bridée).\r\nElle est idéale pour tous vos déplacements urbains avec son autonomie pouvant aller  jusqu\'à 40 km.Il vous faudra par ailleurs de  4 heure 30 pour assurer une charge de complète de la batterie de 6400 mAh.', 'Vitesse bridée 25 km/h \r\n- Vitesse maximale 30 km/h\r\nPoids maximum supporté: 120 kg\r\nBatterie 6400 mAh - Autonomie jusqu\'à \r\n40km\r\nPoignée de transport trolley - Temps de charge 4h30', 3000),
(29, 'bike1.jpg', 'bike1-2.jpg', 'VTT HAIBIKE Surod', 'Ce vélo électrique dispose d’un look dynamique \r\net donne envie de rouler en forêt ou en montagne\r\nà la découverte de nouveaux paysages, \r\nbien accompagné du moteur central Yamaha.', 'Autonomie : Jusqu’à 70Km selon le parcours \r\n\r\nMoteur : E-Going, moteur roue arrière\r\n\r\nBatterie : Li-Ion 37V 333Wh', 1999),
(30, 'bike2.jpg', 'bike2-2.jpg', 'VTT CUBE Stereo ', 'Ce vélo électrique dispose d’un look dynamique \r\net donne envie de rouler en forêt ou en montagne\r\nà la découverte de nouveaux paysages, \r\nbien accompagné du moteur central Yamaha.', 'Autonomie : Jusqu’à 70Km selon le parcours \r\n\r\nMoteur : E-Going, moteur roue arrière\r\n\r\nBatterie : Li-Ion 37V 333Wh', 3450),
(31, 'bike3.jpg', 'bike3-2.jpg', 'VTT RAYMON HardRay', 'Ce vélo électrique dispose d’un look dynamique \r\net donne envie de rouler en forêt ou en montagne\r\nà la découverte de nouveaux paysages, \r\nbien accompagné du moteur central Yamaha.', 'Autonomie : Jusqu’à 70Km selon le parcours \r\n\r\nMoteur : E-Going, moteur roue arrière\r\n\r\nBatterie : Li-Ion 37V 333Wh', 2800),
(32, 'bike4.jpg', 'bike4-2.jpg', 'VTC RAYMON Tour', 'Ce vélo électrique dispose d’un look dynamique \r\net donne envie de rouler en forêt ou en montagne\r\nà la découverte de nouveaux paysages, \r\nbien accompagné du moteur central Yamaha.', 'Autonomie : Jusqu’à 70Km selon le parcours \r\n\r\nMoteur : E-Going, moteur roue arrière\r\n\r\nBatterie : Li-Ion 37V 333Wh', 789),
(33, 'bike5.jpg', 'bike5-2.jpg', 'VTC Kathmandu', 'Ce vélo électrique dispose d’un look dynamique \r\net donne envie de rouler en forêt ou en montagne\r\nà la découverte de nouveaux paysages, \r\nbien accompagné du moteur central Yamaha.', 'Autonomie : Jusqu’à 70Km selon le parcours \r\n\r\nMoteur : E-Going, moteur roue arrière\r\n\r\nBatterie : Li-Ion 37V 333Wh', 1250),
(34, 'bike6.jpg', 'bike6-2.jpg', 'VTC MACINA', 'Ce vélo électrique dispose d’un look dynamique \r\net donne envie de rouler en forêt ou en montagne\r\nà la découverte de nouveaux paysages, \r\nbien accompagné du moteur central Yamaha.', 'Autonomie : Jusqu’à 70Km selon le parcours \r\n\r\nMoteur : E-Going, moteur roue arrière\r\n\r\nBatterie : Li-Ion 37V 333Wh', 550),
(35, 'bike7.jpg', 'bike7-2.jpg', 'VTC DAS SPITZING', 'Ce vélo électrique dispose d’un look dynamique \r\net donne envie de rouler en forêt ou en montagne\r\nà la découverte de nouveaux paysages, \r\nbien accompagné du moteur central Yamaha.', 'Autonomie : Jusqu’à 70Km selon le parcours \r\n\r\nMoteur : E-Going, moteur roue arrière\r\n\r\nBatterie : Li-Ion 37V 333Wh', 2021),
(36, 'bike8.jpg', 'bike8-2.jpg', 'VEPLI JUNY pliant', 'Ce vélo électrique dispose d’un look dynamique \r\net donne envie de rouler en forêt ou en montagne\r\nà la découverte de nouveaux paysages, \r\nbien accompagné du moteur central Yamaha.', 'Autonomie : Jusqu’à 70Km selon le parcours \r\n\r\nMoteur : E-Going, moteur roue arrière\r\n\r\nBatterie : Li-Ion 37V 333Wh', 1020),
(37, 'bike9.jpg', 'bike9-2.jpg', 'EVEO Nexus pliant', 'Ce vélo électrique dispose d’un look dynamique \r\net donne envie de rouler en forêt ou en montagne\r\nà la découverte de nouveaux paysages, \r\nbien accompagné du moteur central Yamaha.', 'Autonomie : Jusqu’à 70Km selon le parcours \r\n\r\nMoteur : E-Going, moteur roue arrière\r\n\r\nBatterie : Li-Ion 37V 333Wh', 923),
(38, 'bike10.jpg', 'bike10-2.jpg', 'VTC MACINA II', 'Ce vélo électrique Haibike SDuro dispose d’un look dynamique \r\net donne envie de rouler en forêt ou en montagne\r\nà la découverte de nouveaux paysages, \r\nbien accompagné du moteur central Yamaha.', 'Autonomie : Jusqu’à 70Km selon le parcours \r\n\r\nMoteur : E-Going, moteur roue arrière\r\n\r\nBatterie : Li-Ion 37V 333Wh', 1100);

-- --------------------------------------------------------

--
-- Structure de la table `products_categories`
--

CREATE TABLE `products_categories` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `products_categories`
--

INSERT INTO `products_categories` (`id`, `product_id`, `category_id`) VALUES
(9, 19, 1),
(10, 20, 1),
(11, 21, 1),
(12, 22, 1),
(13, 23, 1),
(14, 24, 1),
(15, 25, 1),
(16, 26, 1),
(17, 27, 1),
(18, 28, 1),
(19, 29, 2),
(20, 30, 2),
(21, 31, 2),
(22, 32, 2),
(23, 33, 2),
(24, 34, 2),
(25, 35, 2),
(26, 36, 2),
(27, 37, 2),
(28, 38, 2);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `address`, `is_admin`, `created_at`) VALUES
(3, 'Nicolas', 'Le Du', 'nledu.pro@gmail.com', '41702121cde3dd06709adce5010f1d50', 'donniglot@gmail.com', 1, '2020-06-11 12:58:07'),
(5, 'Nicolas', 'admin', 'admin@ecowheel.com', '81dc9bdb52d04dc20036dbd8313ed055', '80 rue quimcampoix', 1, '2020-06-17 15:11:29'),
(6, 'Dany', 'Wu', 'danywutours@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '80 rue quimcampoix', 0, '2020-06-18 19:46:42');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `products_categories`
--
ALTER TABLE `products_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_id` (`category_id`),
  ADD KEY `products_id` (`product_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `products_categories`
--
ALTER TABLE `products_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `products_categories`
--
ALTER TABLE `products_categories`
  ADD CONSTRAINT `categories_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_id` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
