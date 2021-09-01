-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 01 sep. 2021 à 11:24
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `recipes`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `title`, `img`) VALUES
(1, 'Quick & Easy', 'spaguetti.svg'),
(2, 'Juices', 'drink.svg'),
(3, 'Sweets', 'cake-slice.svg'),
(4, 'Salts', 'chicken-leg.svg'),
(5, 'Salads', 'salad.svg');

-- --------------------------------------------------------

--
-- Structure de la table `favoris`
--

CREATE TABLE `favoris` (
  `id` int(11) NOT NULL,
  `id_recipe` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `favoris`
--

INSERT INTO `favoris` (`id`, `id_recipe`, `id_user`) VALUES
(11, 6, 2),
(12, 2, 2),
(13, 7, 5),
(14, 8, 5),
(15, 4, 5),
(18, 4, 2),
(19, 5, 6);

-- --------------------------------------------------------

--
-- Structure de la table `ratting`
--

CREATE TABLE `ratting` (
  `id` int(11) NOT NULL,
  `id_recipe` int(11) NOT NULL,
  `ratting_number` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `ratting`
--

INSERT INTO `ratting` (`id`, `id_recipe`, `ratting_number`, `id_user`) VALUES
(1, 2, 5, 2),
(9, 7, 4, 5),
(10, 4, 4, 2),
(11, 6, 5, 2),
(12, 9, 5, 2),
(13, 5, 4, 2),
(14, 8, 4, 2),
(15, 4, 4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `ingrediants` text,
  `type` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `img` text,
  `status` tinyint(1) DEFAULT '0',
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `recipes`
--

INSERT INTO `recipes` (`id`, `name`, `description`, `ingrediants`, `type`, `user`, `img`, `status`, `category`) VALUES
(2, 'Soupe', 'Bring on the heat! Seasonings like smoked paprika, canned chipotles in adobo sauce, and fresh and dried chiles fill these hearty soup recipes with bold flavor.', 'Bring on the heat! Seasonings like smoked paprika, canned chipotles in adobo sauce, and fresh and dried chiles fill these hearty soup recipes with bold flavor.', 4, 4, '4.jpg', 1, 1),
(4, 'Pasta crevette', 'Pasta Italienne avec du crevette', 'PÃ¢tes 300 g,Haricots blancs â€“ 500 g,Moules â€“ 1 kg,Tomates cerises â€“ 200 g,Huile d\'olive vierge extra,Sel,Poivre', 1, 4, '1628796333pasta1.jpg', 1, 1),
(5, 'Spagetti', 'spagetti with cheader', 'Spaghetti 500 g,1kg de tomates ,Ail â€“ 2 gousses,Huile d\'olive vierge extra,Basilic,frais,Sel,Sucre', 1, 4, '1628796537pasta2.jpg', 1, 1),
(6, 'Paela fish', 'Peale with fish', '500 g de riz longs grains ou 8 verres,moutarde,4 cuisses de poulet,8 langoustines ou 8 belles gambas,1 kg de moules + 8 moules d\'Espagne,2 encornets,2 poivrons rouges,1 poivron vert,16 crevettes,4 belles tomates,3 gousses d\'ail,1 petit piment ,1 bol de petits pois,1 bouquet garni,1/2 l d\'huile d\'olive,2 g de safran,3 sachets de rizdor ou de spigol (pour colorer le riz),1 litre de bouillon de poulet,1 clou de girofle,3 citrons,2 oignons,sel et poivre', 4, 2, '1628796699spanishh.jpg', 1, 4),
(7, 'Carrote Juice', 'good to try', 'Carrotes,ornage,sugar,water', 4, 1, '1628797039alexander-mils-hVk0-hqA69k-unsplash.jpg', 1, 2),
(8, 'Chicken tajine', 'Chicken tajine', 'Chicken, oil,salt', 1, 2, '1628798062thiebaud-faix-KXTAn5FzDac-unsplash.jpg', 1, 1),
(9, 'Couscous', 'Moroccan Couscous', 'Samid,carrote, onion, salt, poivron', 2, 1, '1628798143louis-hansel-restaurant-photographer-k2ZCm7LCj8E-unsplash.jpg', 1, 4),
(11, 'recette1', 'description', 'ingrediant1,ingrediant2', 4, 2, '16293735441628623078juce2.jpg', 0, 4);

-- --------------------------------------------------------

--
-- Structure de la table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `type`
--

INSERT INTO `type` (`id`, `name`, `img`) VALUES
(1, 'Italian', 'italian.jpg'),
(2, 'moroccan', 'moroccan.jpg'),
(3, 'mexican', 'mexican.jpg'),
(4, 'spanish', 'spanish.jpg'),
(5, 'test', '16286232142.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(25) DEFAULT NULL,
  `lname` varchar(25) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `role` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `role`) VALUES
(1, 'Salma', 'KALKHI', 'salma@gmail.com', '123', 'admin'),
(2, 'user', 'user', 'user@gmail.com', 'hamzaZwin', 'user'),
(3, 'sam', 'sam', 'sam@gmail.Com', 'password', 'user'),
(4, 'samya', 'kalkhi', 'samya@gmail.com', '123', 'user'),
(5, 'Hamza', 'hamza', 'hamza@gmail.com', '1234', 'user'),
(6, 'utilisateur1', 'user', 'hh@gmail.com', '1234', 'user');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD PRIMARY KEY (`id`),
  ADD KEY `favoris_ibfk_1` (`id_user`),
  ADD KEY `favoris_ibfk_2` (`id_recipe`);

--
-- Index pour la table `ratting`
--
ALTER TABLE `ratting`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipes_ibfk_1` (`type`),
  ADD KEY `recipes_ibfk_2` (`user`),
  ADD KEY `recipes_ibfk_3` (`category`);

--
-- Index pour la table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `favoris`
--
ALTER TABLE `favoris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `ratting`
--
ALTER TABLE `ratting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `favoris`
--
ALTER TABLE `favoris`
  ADD CONSTRAINT `favoris_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `favoris_ibfk_2` FOREIGN KEY (`id_recipe`) REFERENCES `recipes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_ibfk_1` FOREIGN KEY (`type`) REFERENCES `type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recipes_ibfk_2` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recipes_ibfk_3` FOREIGN KEY (`category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
