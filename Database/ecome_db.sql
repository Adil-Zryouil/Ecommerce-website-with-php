

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



--
-- Base de données : `ecome_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `achat`
--

DROP TABLE IF EXISTS `achat`;
CREATE TABLE IF NOT EXISTS `achat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `num` varchar(30) NOT NULL,
  `commande` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;


-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_title` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Informatique'),
(2, 'Immobilier'),
(3, 'Vétements'),
(4, 'véhicules'),
(5, 'Animaux'),
(6, 'Autres');

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(65) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_title` varchar(255) NOT NULL,
  `product_category_id` int(11) NOT NULL,
  `product_price` float NOT NULL,
  `old_price` float NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `short_desc` text NOT NULL,
  `product_image` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_category_id`, `product_price`, `old_price`, `product_quantity`, `product_description`, `short_desc`, `product_image`) VALUES
(1, 'Pc_portable', 1, 2000, 3000, 1, 'Pc_portable dell trés bonne état.', 'Pc portable', 'Produits images/toshiba.jpg'),
(2, 'LENOVO', 1, 2000, 2500, 3, 'LENOVO professionnel 4Go RAM et CPU i3 core', 'LENOVO', 'Produits images/lenovo.jpg'),
(4, 'ACER', 1, 5000, 5100, 6, 'Acer est trés bonne performance', 'ACER ', 'Produits images/acer'),
(5, 'T-shirt black', 3, 200, 250, 5, 'T-shirt black', 'T-shirt black', 'Produits images/t-shirt black.jpg'),
(6, 'Hoody', 3, 300, 400, 6, 'Hoody', 'Hoody', 'Produits images/hoody.jpg'),
(7, 'Mercedes', 4, 500000, 500000, 2, 'Mercedes', 'Mercedes', 'Produits images/mercedes.jpeg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;



