CREATE DATABASE `ecom`;
USE `ecom`;
-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 20 jan. 2021 à 08:47
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecom`
--

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Horreur'),
(2, 'Aventure'),
(3, 'Heroic-Fantasy'),
(4, 'Romance'),
(5, 'Slice-Of-Life'),
(6, 'Action'),
(7, 'Thriller');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id`, `first_name`, `last_name`, `email`, `password`, `phone`) VALUES
(1, 'Aurélien', 'DE CILLIA', 'aureliendu3809@outlook.fr', '$2y$10$TIMipEQ84Q5WcCyxiMMFCuBMSazs3crgdKpC1zzmMcFl3cFlY/JCy', '06.25.38.25.16'),
(2, 'BIGARD', 'Jean', 'jeanbibi@ziiit.fr', '$2y$10$Ts7c4D7DHfcCc4URSZNrMuqpRzilIQx9axxVpclJzSABbY.PYBw4O', '48.14.16.95.47'),
(3, 'potier', 'FROMAGER', 'potier@outlook.fr', '$2y$10$5E.LCOBL9IRiXXIvTmoV4uG4XPelso9HutJ/CkSwXPdCREjbKcRvy', '06.98.78.09.35'),
(4, 'babine', 'MOUETTER', 'MOUETTER@outlook.fr', '$2y$10$s7emcD7aoWlzjBDzUnga8.2myD0/C15a8aETfKb.hgJLyKZvnMIxq', '06.25.38.25.16'),
(5, 'gros', 'wesh', 'wesh@lol.com', '$2y$10$PT1vdRaTyIIXcAMLxZ4KZ.P685K.bKP1X/.O37peL5W/RUfuVKp7.', '06.25.38.25.16'),
(6, 'Claude', 'PIZAYOLO', 'pizo@mangercestbon.fr', '$2y$10$XJGzTJ6NgJFvfYgja.EnWOZVfM9sy/Yh4pEBBUXNb41Y2YHA0bN8.', '06.25.38.25.16'),
(7, 'Victorien', 'vincent', 'toto@ouii.fr', '$2y$10$eJkztFBpZcFtDZorrJPUlOFgPLzMwZjISfBhHDLJE0XJVc1Yllgau', '06.25.38.25.16'),
(8, 'TUME', 'LAMER', 'LAMER@oui.fr', '$2y$10$OOP6cCPMQkBRPNwW9W6OMe/fcsRV/iqqkLr9cxGuuDDNt/to6VCpq', '06.25.38.25.16'),
(9, 'oui', 'oui', 'oui@oui', '$2y$10$IMsZj0SijQeHm8GvMwvl1.yO7195625GZk8Zxd9Aq8hqU/y0MuZCu', '06.25.38.25.16'),
(10, 'GERARD', 'depoitier', 'oui@ouai.com', '$2y$10$Mm9.RGy5DqrNRINhH4M5oe0/nY4LGIsMvj/ANs/9nYLi1E543r496', '48.14.16.95.47'),
(11, 'PHILIP', 'CASTEX', 'jeanjean@jean', '$2y$10$68CC6V0znglQh22Srd4Gq.9lUNQ1NUOq/rieCQt2dqEBXG3szszKC', '06.37.05.75.95'),
(12, 'test', 'tet', 'test@tttest', '$2y$10$8w9NmQP5ojtmx/wM29jareo7n1IeU.jXed6Eqi81EGuVXi6xaTbmu', '06.66.66.66.66'),
(13, 'javoue', 'TOUT', 'oui@javoue', '$2y$10$oiQ7zpYHAxzuMv4LCA8LOujvT7v69kESiYFMMvP/3gf/BisrslUMG', '06.66.66.66.66'),
(14, 'moi', 'moi', 'moi@moi', '$2y$10$ysErfvUiVNZ1g15iX/a.QObje//tNGzmgVDuAbSFRQjCTnwPD06Nu', '06.33.44.53.57'),
(15, 'timoté le proprio', 'oui', 'timo@yo', '$2y$10$5fntHTD.rpK4u04iZas2J.4ZBtKp0PnysIVc7hECf0s83XJp1OzTS', '06.25.38.25.16'),
(16, 'oui', 'oui', 'oui@oui', '$2y$10$dttAkt1GZSfZC3fEZTeY8u.3I4vexUhW7C3UyTuDVFQP9ZY/20sXW', '48.14.16.95.47'),
(17, 'e', 'e', 'fromage@1', '$2y$10$3ydnScRXXI3qmPB.xz2Uv.qn598OkUvmaUY/SVmQJpm2arnpwv.RS', '06.25.38.25.16');

-- --------------------------------------------------------

--
-- Structure de la table `content_order`
--

CREATE TABLE `content_order` (
  `id` int(11) NOT NULL,
  `id_item` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `content_order`
--

INSERT INTO `content_order` (`id`, `id_item`, `quantity`) VALUES
(22, 2, 7),
(22, 7, 1),
(22, 16, 7),
(22, 19, 6),
(22, 49, 1),
(22, 51, 1),
(23, 11, 1),
(23, 12, 1),
(23, 15, 5),
(23, 16, 7),
(23, 19, 6),
(23, 20, 4),
(23, 29, 5),
(24, 30, 2),
(24, 31, 7),
(25, 8, 5),
(25, 11, 1),
(25, 12, 1),
(26, 7, 1),
(26, 8, 5),
(27, 15, 5),
(27, 16, 7),
(27, 18, 4),
(28, 21, 1),
(28, 22, 2),
(29, 11, 1),
(29, 12, 1),
(29, 17, 3),
(30, 17, 3),
(30, 18, 4),
(31, 12, 1),
(31, 17, 2),
(32, 11, 1),
(32, 12, 1),
(33, 11, 1),
(33, 12, 1),
(34, 2, 7),
(34, 11, 1),
(34, 12, 1),
(34, 15, 5),
(34, 16, 3),
(34, 19, 6),
(34, 20, 4),
(35, 3, 3),
(35, 18, 1),
(35, 19, 6),
(35, 28, 2),
(35, 36, 1),
(36, 14, 1),
(37, 4, 1),
(37, 6, 1),
(37, 8, 4),
(38, 13, 4),
(38, 14, 1),
(39, 11, 1),
(39, 12, 1),
(40, 11, 1),
(40, 12, 1),
(40, 15, 5),
(41, 11, 1),
(42, 11, 1),
(43, 12, 1),
(43, 19, 6),
(43, 20, 4);

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `authors` varchar(150) NOT NULL,
  `description` text,
  `image` varchar(150) DEFAULT NULL,
  `id_manga_title` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id`, `name`, `authors`, `description`, `image`, `id_manga_title`, `price`) VALUES
(2, 'Higurashi When They Cry: Abducted by Demons Arc, Vol. 1', 'Ryukishi07 et Yutori Hôjô', 'Après avoir déménagé dans le village tranquille d\'Hinamizawa, Keiichi Maebara passe son temps à jouer à des jeux avec ses amies. Cependant, les apparences peuvent être trompeuses. Keiichi apprend qu\'un meurtre a été commis à Hinamizawa. A partir de ce jour, de terribles malheurs s\'abattront sur lui et il remarquera très rapidement que ses amies ne sont pas les personnes qu\'il croyait être.', 'https://images-na.ssl-images-amazon.com/images/I/51IyWbNYjeL._SX331_BO1,204,203,200_.jpg', 8, 11.18),
(3, 'Higurashi When They Cry: Abducted by Demons Arc, Vol. 2', 'Ryukishi07 et Yutori Hôjô', 'Après avoir déménagé dans le village tranquille d\'Hinamizawa, Keiichi Maebara passe son temps à jouer à des jeux avec ses amies. Cependant, les apparences peuvent être trompeuses. Keiichi apprend qu\'un meurtre a été commis à Hinamizawa. A partir de ce jour, de terribles malheurs s\'abattront sur lui et il remarquera très rapidement que ses amies ne sont pas les personnes qu\'il croyait être.', 'https://images-na.ssl-images-amazon.com/images/I/51h4WmVepDL._SX304_BO1,204,203,200_.jpg', 8, 24.14),
(4, 'Junji Ito collection N°1 Mystère de la chair', 'Junji Ito', 'Dans ce recueil de nouvelles, Junji ITO nous offre une nouvelle plongée dans le monde de la terreur : une femme décapitée dont la tête exécute sa vengeance, une femme qui ébouillante son enfant et s\'apprête à le dépecer, des abeilles à l\'intelligence maléfique... L\'horreur n\'a semble-t-il aucune limite !', 'https://images-na.ssl-images-amazon.com/images/I/61yLSYw1NcL._SX353_BO1,204,203,200_.jpg', 9, 1106.99),
(6, 'Junji Ito collection N°2 Le voleur de visages', 'Junji Ito', 'Une nouvelle fois, Junji Ito vous invite à plonger dans les méandres de la folie humaine. Hystérie collective et phénomènes inexpliqués sont le quotidien des personnages torturés de cet auteur talentueux. Que se passe-t-il lorsqu\'une fille dont l\'apparence peut changer est exploitée par une lycéenne sans scrupule ? Et si votre propre visage vous poursuivait pour vous offrir le doux réconfort de la mort ?', 'https://www.nautiljon.com/images/manga/00/77/mini/voleur_de_visages_le_-_junji_ito_collection_n_2_2877.jpg?11385762550', 9, 109),
(7, 'Doubt T01', 'Yoshiki Tonogai', 'Saurez-vous démasquer le loup ?\r\n\r\nRabbit Doubt fait fureur au Japon : dans ce jeu sur téléphone portable, des lapins doivent débusquer le loup qui se cache parmi eux. Quant au loup, il doit utiliser tous les subterfuges possibles pour semer la confusion dans le groupe et éliminer un par un tous ses adversaires... Mais pour cinq fans du jeu, Rabbit Doubt ne tarde pas à virer au cauchemar : ils se réveillent enfermés dans un bâtiment désaffecté avec, à leurs côtés, le corps d\'une camarade assassinée.\r\nTatoué sur la peau des adolescents, un mystérieux code-barres qui leur permet à chacun d\'ouvrir une porte différente semble être leur seul espoir de salut. Pas de doute : un loup se cache bien parmi eux, et il leur faudra le démasquer avant d\'être dévorés...\r\n\r\nEntre Saw et Dix petits nègres, un suspense haletant signé Yoshiki Tonogai, que sa réputation a précédé en France.', 'https://images-na.ssl-images-amazon.com/images/I/51itOw65pwL._SX359_BO1,204,203,200_.jpg', 10, 7.65),
(8, 'Doubt T02', 'Yoshiki Tonogai', 'Saurez-vous démasquer le loup ?\r\n\r\nRabbit Doubt fait fureur au Japon : dans ce jeu sur téléphone portable, des lapins doivent débusquer le loup qui se cache parmi eux. Quant au loup, il doit utiliser tous les subterfuges possibles pour semer la confusion dans le groupe et éliminer un par un tous ses adversaires... Mais pour cinq fans du jeu, Rabbit Doubt ne tarde pas à virer au cauchemar : ils se réveillent enfermés dans un bâtiment désaffecté avec, à leurs côtés, le corps d\'une camarade assassinée.\r\nTatoué sur la peau des adolescents, un mystérieux code-barres qui leur permet à chacun d\'ouvrir une porte différente semble être leur seul espoir de salut. Pas de doute : un loup se cache bien parmi eux, et il leur faudra le démasquer avant d\'être dévorés...\r\n\r\nEntre Saw et Dix petits nègres, un suspense haletant signé Yoshiki Tonogai, que sa réputation a précédé en France.', 'https://images-na.ssl-images-amazon.com/images/I/51S50Lp5iXL._SX359_BO1,204,203,200_.jpg', 10, 7.65),
(9, 'Elfen Lied 1', 'LYNN OKAMOTO', 'Durant la sanglante évasion du laboratoire où elle est retenue prisonnière, Lucy, une jeune mutante psychotique, est touchée à la tête par une balle et perd la mémoire. Grâce à son corps parfait et son air innocent, elle est recueillie et adoptée par deux adolescents', 'https://images-na.ssl-images-amazon.com/images/I/51ceMzV-teL._SX357_BO1,204,203,200_.jpg', 11, 12.83),
(10, 'Elfen Lied 2', 'LYNN OKAMOTO', 'Durant la sanglante évasion du laboratoire où elle est retenue prisonnière, Lucy, une jeune mutante psychotique, est touchée à la tête par une balle et perd la mémoire. Grâce à son corps parfait et son air innocent, elle est recueillie et adoptée par deux adolescents', 'https://images-na.ssl-images-amazon.com/images/I/513pBDtQuyL._SX366_BO1,204,203,200_.jpg', 11, 8.11),
(11, 'One Piece Volume 1', 'Eiichiro Oda', 'Enfant, Monkey D. Luffy a été inspiré pour devenir un pirate en écoutant les histoires du boucanier \'Red-Haired\' Shanks. Mais la vie de Luffy a changé quand il a accidentellement mangé le Gum-Gum Devil Fruit et a acquis le pouvoir de s\'étirer comme du caoutchouc au prix de ne plus jamais pouvoir nager! Des années plus tard, jurant toujours de devenir le roi des pirates, Luffy se lance dans son aventure, un gars seul dans une barque, à la recherche du légendaire \'One Piece\', considéré comme le plus grand trésor du monde.\r\n\r\nPour un public adolescent.', 'https://images-na.ssl-images-amazon.com/images/I/518KKkmd1fL._SX329_BO1,204,203,200_.jpg', 12, 5.74),
(12, 'One Piece Volume 2', 'Eiichiro Oda', 'Enfant, Monkey D. Luffy a été inspiré pour devenir un pirate en écoutant les histoires du boucanier \'Red-Haired\' Shanks. Mais la vie de Luffy a changé quand il a accidentellement mangé le Gum-Gum Devil Fruit et a acquis le pouvoir de s\'étirer comme du caoutchouc au prix de ne plus jamais pouvoir nager! Des années plus tard, jurant toujours de devenir le roi des pirates, Luffy se lance dans son aventure, un gars seul dans une barque, à la recherche du légendaire \'One Piece\', considéré comme le plus grand trésor du monde.\r\n\r\nPour un public adolescent.', 'https://images-na.ssl-images-amazon.com/images/I/61tLcPnnddL._SX332_BO1,204,203,200_.jpg', 12, 8.27),
(13, 'Hunter X Hunter, Vol. 1', 'Yoshihiro Togashi', 'Gon Freecss a presque douze ans, et rêve de devenir \'Hunter\' (chasseur en anglais). Les Hunters sont des aventuriers d\'élite qui peuvent être chasseurs de prime, chefs-cuisinier, archéologues, zoologues, justiciers ou consultants dans divers domaines. ... C\'est aussi pour le retrouver que Gon veut devenir Hunter.', 'https://images-na.ssl-images-amazon.com/images/I/51+Cjka5vDL._SX310_BO1,204,203,200_.jpg', 13, 11.96),
(14, 'Hunter X Hunter, Vol. 2', 'Yoshihiro Togashi', 'Gon Freecss a presque douze ans, et rêve de devenir \'Hunter\' (chasseur en anglais). Les Hunters sont des aventuriers d\'élite qui peuvent être chasseurs de prime, chefs-cuisinier, archéologues, zoologues, justiciers ou consultants dans divers domaines. ... C\'est aussi pour le retrouver que Gon veut devenir Hunter.', 'https://images-na.ssl-images-amazon.com/images/I/51G3t-8RgiL._SX320_BO1,204,203,200_.jpg', 13, 8.06),
(15, 'Black Clover, Vol. 1', 'Yuki Tabata', 'Le jeune Asta est né sans aucune capacité magique dans un monde où la magie est tout. Afin de prouver sa force et de tenir une promesse avec son ami, Asta rêve de devenir le plus grand mage du pays, le roi sorcier!\r\n\r\nPour un public adolescent.', 'https://images-na.ssl-images-amazon.com/images/I/61j7niGu2DL._SX331_BO1,204,203,200_.jpg', 14, 5.16),
(16, 'Black Clover, Vol. 2', 'Yuki Tabata', 'Le jeune Asta est né sans aucune capacité magique dans un monde où la magie est tout. Afin de prouver sa force et de tenir une promesse avec son ami, Asta rêve de devenir le plus grand mage du pays, le roi sorcier!\r\n\r\nPour un public adolescent.', 'https://images-na.ssl-images-amazon.com/images/I/51ub4xRiesL._SX331_BO1,204,203,200_.jpg', 14, 8.67),
(17, 'Sword Art Online 1: Aincrad', 'Reki Kawahara', 'Lisez le roman qui a déclenché le phénomène! En 2022, les joueurs se réjouissent alors que Sword Art Online - un VRMMORPG (jeu de rôle en ligne massivement multijoueur en réalité virtuelle) comme aucun autre - fait ses débuts, permettant aux joueurs de profiter pleinement de l\'ultime technologie de jeu : NerveGear, un système qui permet aux utilisateurs de se plonger complètement dans une expérience de jeu totalement réaliste. Mais lorsque le jeu est mis en ligne, l\'exaltation des joueurs se transforme rapidement en horreur lorsqu\'ils découvrent que, malgré toutes ses fonctionnalités étonnantes, SAO manque l\'une des fonctions les plus basiques de tout MMORPG - un bouton de déconnexion. Désormais piégés dans le monde virtuel d\'Aincrad, leurs corps retenus captifs par NerveGear dans le monde réel, les utilisateurs reçoivent un ultimatum effrayant: conquérir les cent', 'https://images-na.ssl-images-amazon.com/images/I/51dUkoMAD3L._SX331_BO1,204,203,200_.jpg', 15, 11.2),
(18, 'Sword Art Online 2: Aincrad', 'Reki Kawahara', 'Lié et connecté au mortel VMMORPG \'Sword Art Online\' dans les mondes réel et virtuel, Kirito est coincé dans l\'enfer d\'un seul homme et, comme tout le monde, incapable de s\'échapper tant que le jeu n\'est pas battu. Mais alors que certains joueurs sont paralysés par la peur et que d\'autres se lancent dans la fin du jeu, d\'autres encore se détendent dans la vie quotidienne face à leur situation cruelle et vivent au mieux de leurs capacités ... riant, pleurant, mais toujours en appréciant le jeu. . Parmi elles, quatre femmes marquent l\'aventurier solo que Kirito est devenu: Silica, la dompteuse de bêtes; Lisbeth, le forgeron; Yui, le mystérieux orphelin; et le tragique Sachi, à ne jamais oublier par l\'épéiste noir ...', 'https://images-na.ssl-images-amazon.com/images/I/51NhVCjtz1L._SX329_BO1,204,203,200_.jpg', 15, 11.2),
(19, 'The Seven Deadly Sins 1', 'Nakaba Suzuki', 'Lorsqu\'ils ont été accusés d\'avoir tenté de renverser la monarchie, les guerriers redoutés, les sept péchés capitaux, ont été envoyés en exil. La princesse Elizabeth découvre la vérité - les péchés ont été encadrés par la garde du roi, les chevaliers sacrés - trop tard pour les empêcher d\'assassiner son père et de s\'emparer du trône! Maintenant, la princesse est en fuite, cherchant les péchés pour l\'aider à récupérer le royaume. Mais le premier Sin qu\'elle rencontre, Meliodas, est un petit aubergiste avec un cochon qui parle.', 'https://images-na.ssl-images-amazon.com/images/I/51Zc+h1rU6L._SX331_BO1,204,203,200_.jpg', 16, 9.6),
(20, 'The Seven Deadly Sins 2', 'Nakaba Suzuki', 'Lorsqu\'ils ont été accusés d\'avoir tenté de renverser la monarchie, les guerriers redoutés, les sept péchés capitaux, ont été envoyés en exil. La princesse Elizabeth découvre la vérité - les péchés ont été encadrés par la garde du roi, les chevaliers sacrés - trop tard pour les empêcher d\'assassiner son père et de s\'emparer du trône! Maintenant, la princesse est en fuite, cherchant les péchés pour l\'aider à récupérer le royaume. Mais le premier Sin qu\'elle rencontre, Meliodas, est un petit aubergiste avec un cochon qui parle.', 'https://images-na.ssl-images-amazon.com/images/I/61x+N-DxHVL._SX327_BO1,204,203,200_.jpg', 16, 6.01),
(21, 'Vampire Knight: Memories, Vol. 1', 'Matsuri Hino', 'Contes immortels du passé et du présent du monde de Vampire Knight.\r\nVampire Knight revient avec une collection d\'histoires qui plongent dans le temps de Yuki et Zero en tant que couple dans le passé et explorent la relation entre les enfants de Yuki et Kaname dans le présent.\r\n\r\nAprès une bataille féroce entre les humains et les vampires, une paix temporaire a été établie, mais Kaname a continué à dormir dans un cercueil de glace ...\r\n\r\nYuki a donné à Kaname son cœur pour le faire revivre en tant qu\'être humain.\r\n\r\nCe sont les histoires de ce qui s\'est passé pendant ces 1000 ans de sommeil de Kaname et le début de sa vie humaine.', 'https://images-na.ssl-images-amazon.com/images/I/51r8UffIX4L._SX331_BO1,204,203,200_.jpg', 17, 8.27),
(22, 'Vampire Knight - Memories, Vol. 2', 'Matsuri Hino', 'Contes immortels du passé et du présent du monde de Vampire Knight.\r\nVampire Knight revient avec une collection d\'histoires qui plongent dans le temps de Yuki et Zero en tant que couple dans le passé et explorent la relation entre les enfants de Yuki et Kaname dans le présent.\r\n\r\nAprès une bataille féroce entre les humains et les vampires, une paix temporaire a été établie, mais Kaname a continué à dormir dans un cercueil de glace ...\r\n\r\nYuki a donné à Kaname son cœur pour le faire revivre en tant qu\'être humain.\r\n\r\nCe sont les histoires de ce qui s\'est passé pendant ces 1000 ans de sommeil de Kaname et le début de sa vie humaine.', 'https://images-na.ssl-images-amazon.com/images/I/51r8UffIX4L._SX331_BO1,204,203,200_.jpg', 17, 6.47),
(23, 'School Days, tome 1', 'Homare Sakazuki', 'Depuis qu\'il est au lycée, Makoto Ito prend le même train tous les jours. Ce n\'est cependant qu\'au début de sa seconde année qu\'il réalise la présence de la gracieuse Kotonoha Katsura dans le même wagon. Jour après jour, il l\'observera et finira, evidemment, par succomber aux charmes innocents de la jeune lycéenne. Poltron comme tout adolescent qui se respecte, Ito se fera aider de Sekai Saionji, l\'une de ses camarades de classe, afin de faire plus ample connaissance avec la femme de ses rêves, et pourquoi pas, pour se déclarer à elle. Evidemment, rien n\'est jamais si simple, et les sentiments de Sekai sont plus qu\'ambigus...', 'https://cdn1.booknode.com/book_cover/1095/school_days_tome_1-1094982-264-432.jpg', 18, 8.99),
(24, 'School Days, tome 2', 'Homare Sakazuki', 'Depuis qu\'il est au lycée, Makoto Ito prend le même train tous les jours. Ce n\'est cependant qu\'au début de sa seconde année qu\'il réalise la présence de la gracieuse Kotonoha Katsura dans le même wagon. Jour après jour, il l\'observera et finira, evidemment, par succomber aux charmes innocents de la jeune lycéenne. Poltron comme tout adolescent qui se respecte, Ito se fera aider de Sekai Saionji, l\'une de ses camarades de classe, afin de faire plus ample connaissance avec la femme de ses rêves, et pourquoi pas, pour se déclarer à elle. Evidemment, rien n\'est jamais si simple, et les sentiments de Sekai sont plus qu\'ambigus...', 'https://cdn1.booknode.com/book_cover/517/school_days_tome_2-516676-264-432.jpg', 18, 9.43),
(25, 'The Quintessential Quintuplets 1', 'Negi Haruba', 'Une comédie romantique de lycée avec cinq fois plus de jolies filles! Un lycéen doit travailler à temps partiel pour aider cinq sœurs à étudier afin qu\'elles puissent obtenir leur diplôme, mais la seule chose que ces quintuplés ont en commun est qu\'elles détestent toutes étudier!\r\n\r\nCINQ FOIS LE PROBLÈME', 'https://images-na.ssl-images-amazon.com/images/I/51KksQ+IraL._SX330_BO1,204,203,200_.jpg', 19, 9.53),
(26, 'The Quintessential Quintuplets 2', 'Negi Haruba', 'Une comédie romantique de lycée avec cinq fois plus de jolies filles! Un lycéen doit travailler à temps partiel pour aider cinq sœurs à étudier afin qu\'elles puissent obtenir leur diplôme, mais la seule chose que ces quintuplés ont en commun est qu\'elles détestent toutes étudier!\r\n\r\nCINQ FOIS LE PROBLÈME', 'https://images-na.ssl-images-amazon.com/images/I/51iUhUqjHDL._SX327_BO1,204,203,200_.jpg', 19, 9.53),
(27, 'Bienvenue dans NHK T01', 'OIWA et TAKIMOTO ', 'atsuhiro Satô est ce qu\'on appelle un Hikikomori. Il ne sort pratiquement plus de chez lui depuis près de 3 ans. ... Une mystérieuse jeune fille, Misaki, fait tout à coup irruption dans la vie de Satô et lui propose son aide pour le sortir de sa situation.', 'https://images-na.ssl-images-amazon.com/images/I/51QrvqEhj6L._SX342_BO1,204,203,200_.jpg', 20, 13.71),
(28, 'Bienvenue dans NHK T02', 'OIWA et TAKIMOTO ', 'atsuhiro Satô est ce qu\'on appelle un Hikikomori. Il ne sort pratiquement plus de chez lui depuis près de 3 ans. ... Une mystérieuse jeune fille, Misaki, fait tout à coup irruption dans la vie de Satô et lui propose son aide pour le sortir de sa situation.', 'https://images-na.ssl-images-amazon.com/images/I/51zmE89To6L._SX340_BO1,204,203,200_.jpg', 20, 11),
(29, 'Toradora! 1', 'Yuyuko Takemiya', 'OEIL DU TAIGA!\r\n\r\nTakasu Ryuuji a peut-être l\' air d\'un voyou, mais c\'est en fait un type sympa. Se faire des amis quand vous avez un visage effrayant involontairement est difficile - et ne le faites même pas commencer avec des copines. Mais avec son béguin secret dans sa classe, le début de sa deuxième année de lycée est bien parti ... jusqu\'à ce qu\'il croise la route d\'Aisaka Taiga. Belle, effrayante et ne mesure pas tout à fait un mètre cinquante, la fille connue sous le nom de Palmtop Tiger est la seule personne à l\'école encore plus effrayante que Ryuuji lui-même - et il vient de faire l\'erreur de la mettre très, très en colère.\r\n\r\nL\'inspiration originale pour l\'anime à succès et le manga le plus vendu!', 'https://images-na.ssl-images-amazon.com/images/I/51yB1k81WaL._SX354_BO1,204,203,200_.jpg', 21, 12.43),
(30, 'Toradora! 2', 'Yuyuko Takemiya', 'UN RIVAL APPARAÎT!\r\nLa nouvelle année scolaire amène un nouvel étudiant transféré - Kawashima Ami, un modèle à couper le souffle qui a rapidement séduit toute la classe. Mais l\'extérieur délicat d\'Ami cache une personnalité qui n\'est pas aussi innocente qu\'elle en a l\'air. Lorsqu\'elle montre involontairement à Aisaka Taiga ses vraies couleurs, une mauvaise première rencontre dégénère rapidement en une rivalité amère, aggravée par le fait qu\'Ami semble déterminé à charmer Ryuuji. Le Palmtop Tiger est sur le sentier de la guerre, et Ryuuji devra peut-être choisir un camp - ou devenir une victime de la guerre!', 'https://m.media-amazon.com/images/I/51hcos2fPdL._SY346_.jpg', 21, 6.04),
(31, 'Eromanga Sensei Volume 1', 'Tsukasa Fushimi', 'L\'histoire se centre autour d\'un lycéen, Masamune Izumi, qui aime rédiger des light novel. N\'ayant aucune compétence artistique, Masamune a toujours laissé les illustrations de ses romans à un partenaire anonyme employant le nom de plume d\'« Eromanga Sensei ».', 'https://www.nautiljon.com/images/light_novels_volumes/00/95/eromanga_sensei_vol_1_3259.jpg?0', 22, 15.24),
(32, 'Eromanga Sensei Volume 2', 'Tsukasa Fushimi', 'L\'histoire se centre autour d\'un lycéen, Masamune Izumi, qui aime rédiger des light novel. N\'ayant aucune compétence artistique, Masamune a toujours laissé les illustrations de ses romans à un partenaire anonyme employant le nom de plume d\'« Eromanga Sensei ».', 'https://images-na.ssl-images-amazon.com/images/I/710kvIr19vL._AC_SL1500_.jpg', 22, 13.99),
(33, 'Zero\'s Familiar Omnibus 1-3', 'Noboru Yamaguchi', 'Omnibus manga de 496 pages basé sur l\'anime à succès sur une sorcière Klutzy et l\'adolescent qui la sert Dans un monde où la sorcellerie règne en maître, la sorcière maladroite en formation Louise Françoise le Blanc de La Vallière est connue par ses camarades de classe de la Tristain Academy of Magic sous le nom de «Louise le Zéro». Lors d\'un important rituel de passage à l\'âge adulte, lorsque chaque élève doit invoquer un familier de toute une vie, Louise fait ses preuves en tant que klutz lorsqu\'elle évoque par erreur un adolescent de la Terre. Maintenant, qu\'ils le veuillent ou non, Louise et son serviteur réticent,', 'https://images-na.ssl-images-amazon.com/images/I/51r+1Y40gNL._SX349_BO1,204,203,200_.jpg', 23, 65.65),
(34, 'GTO T01 : Great Teacher Onizuka', 'Toru Fujisawa', 'Ancien voyou, chef de gang, Eikichi Onizuka décide un jour de devenir prof. Sa vocation n’a rien de pédagogique. Ce qu’il veut, c’est pouvoir sortir avec les étudiantes du lycée où il travaille… Seulement, son sens de l’honneur et de la justice risquent finalement d’en faire un enseignant hors pair.', 'https://m.media-amazon.com/images/I/516M21sT0xL._SY346_.jpg', 24, 6.95),
(35, 'GTO T02 : Great Teacher Onizuka', 'Toru Fujisawa', 'Ancien voyou, chef de gang, Eikichi Onizuka décide un jour de devenir prof. Sa vocation n’a rien de pédagogique. Ce qu’il veut, c’est pouvoir sortir avec les étudiantes du lycée où il travaille… Seulement, son sens de l’honneur et de la justice risquent finalement d’en faire un enseignant hors pair.', 'https://images-na.ssl-images-amazon.com/images/I/511ODHyRXzL._SX318_BO1,204,203,200_.jpg', 24, 5.3),
(36, 'Beelzebub, tome 1', 'Ryuhei Tamura', 'Tatsumi Oga, jeune délinquant tyrannique (que tous ses ennemis voudraient voir mort) se retrouve par le plus grand des hasards tuteur d\'un nourrisson très spécial ; Beelzebub IV... fils du Roi des Démons et accessoirement destiné à détruire l\'humanité !!!', 'https://images-na.ssl-images-amazon.com/images/I/61FTWEcojXL._SX331_BO1,204,203,200_.jpg', 25, 6.89),
(37, 'Beelzebub, tome 2', 'Ryuhei Tamura', 'Tatsumi Oga, jeune délinquant tyrannique (que tous ses ennemis voudraient voir mort) se retrouve par le plus grand des hasards tuteur d\'un nourrisson très spécial ; Beelzebub IV... fils du Roi des Démons et accessoirement destiné à détruire l\'humanité !!!', 'https://m.media-amazon.com/images/I/61phpqWzEzL._SY346_.jpg', 25, 6.89),
(38, 'Radiant, Tome 1', 'Tony Valente', 'Seth est un aspirant sorcier de la région des des Pompo Hills. Comme tous les sorciers, c\'est un « infecté » : un des rares êtres vivants ayant survécu au contact des Némésis, ces créatures tombées du ciel qui contaminent et déciment tous ceux qu\'ils touchent. Son apparente immunité lui a fait choisir une voie qui lui semblait toute désignée : devenir Chasseur et combattre les Némésis. Mais plus que ça, Seth souhaite s\'engager dans une quête qui dépasse la simple chasse aux monstres... Il veut trouver le Radiant, leur berceau présumé. Entouré d\'une faction de sorciers, il parcourt le monde à la recherche du Radiant, sous l\'oeil terrible de l\'Inquisition…', 'https://images-na.ssl-images-amazon.com/images/I/51oZpwJn2WL._SX318_BO1,204,203,200_.jpg', 26, 7.95),
(39, 'Radiant, Tome 2', 'Tony Valente', 'Commençant à (un peu) mieux maîtriser ses pouvoirs grâce aux enseignements de son maître Yaga, Seth embarque Doc et Mélie pour Rumble Town, l\'un des derniers bastions de l\'ère industrielle. Leur mission : y capturer un Némésis vivant ! Mais l\'Inquisition tient d\'une main de fer la population de rumble town et l\'arrivée des trois infectés déclenche la panique… d\'autant que la traque au sorcier à cornes est officiellement ouverte et promet une alléchante récompense à qui mettra la main sur Seth. Complots, manipulations, trahisons, chasse aux infectés : la confusion atteint son comble lorsque surgit Grimm, un sombre individu au visage bandé et aux motivations troubles… est-il lié à la présence du Némésis ? Joue-t-il un rôle dans les disparitions ? Et pourquoi attaque-t-il les sorciers alors que lui-même semble savoir manier l\'Anima ?', 'https://images-na.ssl-images-amazon.com/images/I/41Qx5XnFsSL._SX319_BO1,204,203,200_.jpg', 26, 7.95),
(40, 'Red Eyes Sword - Akame ga Kill ! - tome 01', 'Tetsuya TASHIRO', 'Tatsumi quitte son village natal pour la Cité impériale où il fait la rencontre d\'un groupe d\'assassins qui va changer sa vie à jamais: le Night Raid avec à sa tête la belle et mortelle Akame.\r\nDans un monde peuplé de créatures étranges et dangereuses, Tatsumi est un jeune garçon de la campagne en quête de rêve et d\'aventure. Un jour, il décide de se rendre à la capitale afin de s\'engager dans l\'armée impériale, faire fortune et sauver son village rongé par la pauvreté. Mais il va très vite déchanter en découvrant que la capitale n\'est pas le lieu de rêve qu\'il imaginait. De plus, sa rencontre avec la troupe de tueurs des Night Raid va probablement changer le cours de son destin : il va lui-même devenir un assassin afin de débarrasser la capitale des infâmes crapules qui corrompent le pays tout entier.', 'https://images-na.ssl-images-amazon.com/images/I/51Eq0MJEB2L._SX349_BO1,204,203,200_.jpg', 27, 7.65),
(41, 'Red Eyes Sword - Akame ga Kill ! - tome 02', 'Tetsuya TASHIRO', 'Tatsumi quitte son village natal pour la Cité impériale où il fait la rencontre d\'un groupe d\'assassins qui va changer sa vie à jamais: le Night Raid avec à sa tête la belle et mortelle Akame.\r\nDans un monde peuplé de créatures étranges et dangereuses, Tatsumi est un jeune garçon de la campagne en quête de rêve et d\'aventure. Un jour, il décide de se rendre à la capitale afin de s\'engager dans l\'armée impériale, faire fortune et sauver son village rongé par la pauvreté. Mais il va très vite déchanter en découvrant que la capitale n\'est pas le lieu de rêve qu\'il imaginait. De plus, sa rencontre avec la troupe de tueurs des Night Raid va probablement changer le cours de son destin : il va lui-même devenir un assassin afin de débarrasser la capitale des infâmes crapules qui corrompent le pays tout entier.', 'https://images-na.ssl-images-amazon.com/images/I/51pNWqosfdL._SX349_BO1,204,203,200_.jpg', 27, 7.65),
(42, 'ONE-PUNCH MAN - tome 01', 'ONE et Yusuke MURATA ', 'Découvrez l\'histoire du plus puissant des super-héros dans ce manga qui va vous mettre K.O. !!\r\nSaitama est un jeune homme sans emploi et sans réelle perspective d\'avenir, jusqu\'au jour où il décide de prendre sa vie en main. Son nouvel objectif : devenir un super-héros. Il s\'entraîne alors sans relâche pendant trois ans et devient si puissant qu\'il est capable d\'éliminer ses adversaires d\'un seul coup de poing. On le surnomme désormais One-Punch Man. Mais rapidement, l\'euphorie du succès cède place à l\'ennui, car lorsqu\'on est si fort, les victoires perdent de leur saveur...', 'https://images-na.ssl-images-amazon.com/images/I/51a4v+PapKL._SX323_BO1,204,203,200_.jpg', 28, 6.8),
(43, 'ONE-PUNCH MAN - tome 02', 'ONE et Yusuke MURATA', 'Découvrez l\'histoire du plus puissant des super-héros dans ce manga qui va vous mettre K.O. !!\r\nSaitama est un jeune homme sans emploi et sans réelle perspective d\'avenir, jusqu\'au jour où il décide de prendre sa vie en main. Son nouvel objectif : devenir un super-héros. Il s\'entraîne alors sans relâche pendant trois ans et devient si puissant qu\'il est capable d\'éliminer ses adversaires d\'un seul coup de poing. On le surnomme désormais One-Punch Man. Mais rapidement, l\'euphorie du succès cède place à l\'ennui, car lorsqu\'on est si fort, les victoires perdent de leur saveur...', 'https://images-na.ssl-images-amazon.com/images/I/512XDJyRM7L._SX323_BO1,204,203,200_.jpg', 28, 6.8),
(44, 'The Promised Neverland 01', 'Kaiu Shirai ', 'Emma, Norman et Ray coulent des jours heureux à l\'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s\'épanouissent sous l\'attention pleine de tendresse de « Maman », qu\'ils considérent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l\'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s\'échapper, c\'est une question de vie ou de mort !', 'https://images-na.ssl-images-amazon.com/images/I/51LFydEN8ML._SX316_BO1,204,203,200_.jpg', 29, 6.89),
(45, 'The Promised Neverland 02', 'Kaiu Shirai ', 'Emma, Norman et Ray coulent des jours heureux à l\'orphelinat Grace Field House. Entourés de leurs petits frères et soeurs, ils s\'épanouissent sous l\'attention pleine de tendresse de « Maman », qu\'ils considérent comme leur véritable mère. Mais tout bascule le soir où ils découvrent l\'abominable réalité qui se cache derrière la façade de leur vie paisible ! Ils doivent s\'échapper, c\'est une question de vie ou de mort !', 'https://images-na.ssl-images-amazon.com/images/I/51Hc1VExi5L._SX315_BO1,204,203,200_.jpg', 29, 6.89),
(46, 'Black Butler, tome 1', 'Yana Toboso', 'Sebastian est majordome au service de Ciel Phantomhive, héritier d\'une grande famille de la noblesse anglaise. En matière d\'érudition, d\'éducation, d\'art culinaire, rien à redire, il est parfait. Mais ne vous fiez pas à sa distinction, si vous vous en prenez à son jeune maître, vous découvrirez sa vraie nature... Ciel aurait-il signé un pacte avec le Diable...?!', 'https://images-na.ssl-images-amazon.com/images/I/51rhFHn0JcL._SX351_BO1,204,203,200_.jpg', 30, 6.85),
(47, 'Black Butler, tome 2', 'Yana Toboso', 'Ciel et Sebastian reçoivent la tante de Ciel : Madame Red, veuve du Comte Barnett, ainsi que son majordome Grell Sutcliff. C\'est la fin de la saison mondaine et Londres est en émoi à cause de meurtres perpétrés par celui que l\'on a déjà surnommé \'Jack l\'Éventreur\'. Plusieurs prostituées sont en effet massacrées dans d\'horribles circonstances. Sebastian et Ciel soupçonnent le Vicomte de Druitt d\'être le coupable et ils mettent au point un stratagème pour le piéger.', 'https://images-na.ssl-images-amazon.com/images/I/51vhsr3O0WL._SX350_BO1,204,203,200_.jpg', 30, 6.85),
(48, 'Shingeki no Kyojin (Attack on Titan) 1', 'Hajime Isayama ', 'The megahit Attack on Titan anime is back, with Season Three announced for 2018!\r\n\r\nIn this post-apocalytpic sci-fi story, humanity has been devastated by the bizarre, giant humanoids known as the Titans. Little is known about where they came from or why they are bent on consuming mankind. Seemingly unintelligent, they have roamed the world for years, killing everyone they see. For the past century, what\'s left of man has hidden in a giant, three-walled city. People believe their 50-meter-high walls will protect them from the Titans, but the sudden appearance of an immense Titan is about to change everything.\r\n\r\nWinner of the 2011 Kodansha Manga Award (Shonen) and nominated for the prestigious Osamu Tezuka Cultural Prize for 2012.', 'https://images-na.ssl-images-amazon.com/images/I/51ywmxi7JVL._SX331_BO1,204,203,200_.jpg', 31, 9.45),
(49, 'Shingeki no Kyojin (Attack on Titan) 2', 'Hajime Isayama ', 'The megahit Attack on Titan anime is back, with Season Three announced for 2018!\r\n\r\nIn this post-apocalytpic sci-fi story, humanity has been devastated by the bizarre, giant humanoids known as the Titans. Little is known about where they came from or why they are bent on consuming mankind. Seemingly unintelligent, they have roamed the world for years, killing everyone they see. For the past century, what\'s left of man has hidden in a giant, three-walled city. People believe their 50-meter-high walls will protect them from the Titans, but the sudden appearance of an immense Titan is about to change everything.\r\n\r\nWinner of the 2011 Kodansha Manga Award (Shonen) and nominated for the prestigious Osamu Tezuka Cultural Prize for 2012.', 'https://images-na.ssl-images-amazon.com/images/I/51KkeHAgJaL._SX332_BO1,204,203,200_.jpg', 31, 6.95),
(50, 'Psycho-Pass Saison 1', 'Gen Urobuchi', 'Il est possible de mesurer l\'état mental de chaque personne. Grâce à cet indice appelé \'Psycho-Pass\', la police peut désormais appréhender les \'criminels dormants\' avant même qu\'ils n\'aient commis leurs méfaits! Akane Tsunemori intègre la Brigade Criminelle au grade d\'inspecteur et elle va découvrir les avantages mais aussi les inconvénients de ce système!', 'https://images-na.ssl-images-amazon.com/images/I/51DITcfathL._SX351_BO1,204,203,200_.jpg', 32, 7.45),
(51, 'Psycho-Pass Saison 1', 'Gen Urobuchi', 'Début du XXIIe siècle, il est désormais possible d\'attribuer une valeur chiffrée à l\'état psychologique et à la personnalité de chacun. Les gens ont pris l\'habitude d\'appeler cette valeur \'Psycho-Pass\'. Les criminels sont également jugés en fonction de leur \'facteur criminel\'. Inspectrice désormais à la tête de l\'unité 1 de la brigade de Sécurité Publique, Akane Tsunemori doit faire face à la mort d\'un exécuteur et à la disparition d\'un inspecteur appartenant tous deux à l\'unité 2. La série d\'incidents impliquant le mystérieux \'Kamui\' constitue un redoutable défi lancé à Sibylle dont Akane connait à présent la véritable nature... Entre obéissance aveugle au système et rébellion, entre déterminisme et libre arbitre, Akane parviendra-t-elle à trouver le juste équilibre et à exercer son métier ?', 'https://images-na.ssl-images-amazon.com/images/I/513tUcMkHPL._SX351_BO1,204,203,200_.jpg', 32, 7.45);

-- --------------------------------------------------------

--
-- Structure de la table `manga_title`
--

CREATE TABLE `manga_title` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `image` varchar(150) NOT NULL,
  `id_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `manga_title`
--

INSERT INTO `manga_title` (`id`, `name`, `image`, `id_category`) VALUES
(8, 'Higurashi', 'https://www.japanpop.fr/wp-content/uploads/2020/01/higurashi-nouvel-anime.jpg', 1),
(9, 'Junji Ito collection', 'https://bloody-disgusting.com/wp-content/uploads/2019/06/Screen-Shot-2019-06-25-at-8.25.24-AM.png', 1),
(10, 'DOUBT', 'https://2.bp.blogspot.com/_G7jeL9ul1N0/TUWFo5IMfGI/AAAAAAAACWA/M9sFX9R4FZ4/s1600/doubt+1+couv+001.jpg', 1),
(11, 'ELFEN LIED', 'https://ekladata.com/ohLnC1Gzq75OcslzoE8XOmlJ1D4.jpg', 1),
(12, 'One piece', 'https://mcetv.fr/wp-content/uploads/2020/03/glena-le-manga-one-piece-devient-gratuit-pendant-le-confinement-.jpg', 2),
(13, 'Hunter X Hunter', 'https://www.japanpop.fr/wp-content/uploads/2017/05/Hunter_x_Hunter-lesgicques-e1539244012703.png', 2),
(14, 'Black Clover', 'https://i0.wp.com/mygeekactu.com/wp-content/uploads/2020/06/my-geek-actu-black-clover.jpg?fit=1200%2C625&ssl=1', 2),
(15, 'Sword Art Online', 'https://www.realite-virtuelle.com/wp-content/uploads/2018/02/sword-art-online-netflix-serie-live.jpg', 3),
(16, 'Seven Deadly Sins', 'https://www.actugaming.net/wp-content/uploads/2020/02/seven-deadly-sins-grand-cross.jpg', 3),
(17, 'Vampire Knight', 'https://alh-ho.fr/anime/vampire_knight/vampire_knight_banniere.jpg', 4),
(18, 'School days', 'https://i.skyrock.net/5682/87105682/pics/3235081007_1_2_wgXkXXYg.jpg', 4),
(19, 'The Quintessential Quintuplets', 'https://i.ytimg.com/vi/COe_29miRZE/maxresdefault.jpg', 4),
(20, 'Bienvenue à la NHK', 'https://www.mangaluxe.com/liste/n/img/nhk-ni-yokoso.jpg', 5),
(21, 'Toradora!', 'https://freakingeek.com/wp-content/uploads/2018/12/Towadora-Banniere-800x445.jpg', 5),
(22, 'Eromanga Sensei', 'https://dg31sz3gwrwan.cloudfront.net/fanart/319410/1215316-0-q80.jpg', 5),
(23, 'Zero no tsukaima', 'https://lh6.googleusercontent.com/-2q-avCYX9U8/VLhSMhU_mbI/AAAAAAAABbc/OFhJz4Rf-3Q/w800-h800/Zero-No-Tsukama.jpg', 4),
(24, 'Great Teacher Onizuka', 'https://images4.alphacoders.com/323/thumb-1920-32376.jpg', 6),
(25, 'Beelzebub', 'https://i.skyrock.net/2373/100212373/pics/3292919328_1_3_qXWfuNyZ.jpg', 6),
(26, 'Radiant', 'https://www.nautiljon.com/images/ost/00/47/radiant_-_original_soundtrack_21174.jpg?0', 6),
(27, 'Akame ga kill', 'https://freakingeek.com/wp-content/uploads/2018/08/RedEyesSword-Banniere-800x445.jpg', 6),
(28, 'One punch man', 'https://static.fnac-static.com/multimedia/Images/FD/Comete/126411/CCP_IMG_ORIGINAL/1650129.jpg', 6),
(29, 'The promised neverland', 'https://static.lpnt.fr/images/2018/04/26/14597262lpw-14597800-article-jpg_5195863_980x426.jpg', 7),
(30, 'Black Butler', 'https://ekladata.com/7n6d5uB9ue7C2lU3fWN4ESquzv0.jpg', 7),
(31, 'Shingeki no Kyojin', 'https://gaak.fr/wp-content/uploads/2020/06/Vignette-Shingeki-fin.jpg', 7),
(32, 'Psycho-Pass', 'https://iunctis.fr/uploads/default/original/3X/c/d/cd8935e498a369836a2b3f423c4d0faae137be89.jpeg', 7);

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `id_client` int(11) DEFAULT NULL,
  `paid` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `order`
--

INSERT INTO `order` (`id`, `id_client`, `paid`) VALUES
(22, 6, 0),
(23, 9, 1),
(24, 10, 0),
(25, 9, 1),
(26, 9, 0),
(27, 11, 1),
(28, 11, 0),
(29, 12, 1),
(30, 12, 1),
(31, 12, 1),
(32, 12, 1),
(33, 12, 1),
(34, 12, 0),
(35, 13, 1),
(36, 13, 1),
(37, 13, 1),
(38, 13, 1),
(39, 14, 1),
(40, 15, 1),
(41, 15, 1),
(42, 15, 0),
(43, 17, 1);

-- --------------------------------------------------------

--
-- Structure de la table `ordered_item_snapshot`
--

CREATE TABLE `ordered_item_snapshot` (
  `id` int(11) NOT NULL,
  `id_order` int(11) DEFAULT NULL,
  `name_item` varchar(45) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `id_manga_title` int(11) DEFAULT NULL,
  `category` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ordered_item_snapshot`
--

INSERT INTO `ordered_item_snapshot` (`id`, `id_order`, `name_item`, `price`, `quantity`, `id_manga_title`, `category`) VALUES
(3, 30, 'Sword Art Online 1: Aincrad', 11.2, 1, 15, '3'),
(4, 30, 'Sword Art Online 2: Aincrad', 11.2, 4, 15, '3'),
(5, 31, 'Sword Art Online 1: Aincrad', 11.2, 2, 15, '3'),
(6, 32, 'One Piece Volume 1', 5.74, 1, 12, '2'),
(7, 32, 'One Piece Volume 2', 8.27, 6, 12, '2'),
(8, 33, 'One Piece Volume 1', 5.74, 1, 12, '2'),
(9, 33, 'One Piece Volume 2', 8.27, 1, 12, '2'),
(10, 35, 'Sword Art Online 2: Aincrad', 11.2, 1, 15, '3'),
(11, 35, 'The Seven Deadly Sins 1', 9.6, 1, 16, '3'),
(12, 35, 'Bienvenue dans NHK T02', 11, 2, 20, '5'),
(13, 35, 'Beelzebub, tome 1', 6.89, 1, 25, '6'),
(14, 36, 'Hunter X Hunter, Vol. 2', 8.06, 1, 13, '2'),
(15, 37, 'Junji Ito collection N°1 Mystère de la chair', 1106.99, 1, 9, '1'),
(16, 37, 'Junji Ito collection N°2 Le voleur de visages', 109, 1, 9, '1'),
(17, 37, 'Doubt T02', 7.65, 4, 10, '1'),
(18, 38, 'Hunter X Hunter, Vol. 1', 11.96, 4, 13, '2'),
(19, 38, 'Hunter X Hunter, Vol. 2', 8.06, 1, 13, '2'),
(20, 39, 'One Piece Volume 1', 5.74, 5, 12, '2'),
(21, 39, 'One Piece Volume 2', 8.27, 1, 12, '2'),
(22, 40, 'One Piece Volume 1', 5.74, 1, 12, '2'),
(23, 40, 'One Piece Volume 2', 8.27, 6, 12, '2'),
(24, 40, 'Black Clover, Vol. 1', 5.16, 5, 14, '2'),
(25, 41, 'One Piece Volume 1', 5.74, 1, 12, '2'),
(26, 43, 'One Piece Volume 2', 8.27, 1, 12, '2'),
(27, 43, 'The Seven Deadly Sins 1', 9.6, 6, 16, '3'),
(28, 43, 'The Seven Deadly Sins 2', 6.01, 4, 16, '3');

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `date` varchar(50) DEFAULT NULL,
  `total_ht` float DEFAULT NULL,
  `tva` float DEFAULT NULL,
  `id_order` int(11) DEFAULT NULL,
  `id_payment_method` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `payment`
--

INSERT INTO `payment` (`id`, `date`, `total_ht`, `tva`, `id_order`, `id_payment_method`) VALUES
(4, NULL, 373.5, 20.54, 23, 14),
(5, NULL, 373.5, 20.54, 23, 14),
(6, NULL, 89.27, 4.91, 25, 14),
(7, NULL, 89.27, 4.91, 25, 15),
(8, NULL, 65.55, 3.6, 27, 16),
(9, NULL, 13.28, 0.73, 29, 17),
(10, NULL, 13.28, 0.73, 29, 17),
(11, NULL, 13.28, 0.73, 29, 17),
(12, NULL, 13.28, 0.73, 29, 17),
(13, NULL, 53.08, 2.92, 30, 18),
(14, NULL, 53.08, 2.92, 30, 18),
(15, NULL, 53.08, 2.92, 30, 18),
(16, NULL, 53.08, 2.92, 30, 18),
(17, NULL, 53.08, 2.92, 30, 18),
(18, NULL, 53.08, 2.92, 30, 18),
(19, NULL, 53.08, 2.92, 30, 18),
(20, NULL, 53.08, 2.92, 30, 18),
(21, NULL, 53.08, 2.92, 30, 18),
(22, NULL, 53.08, 2.92, 30, 18),
(23, NULL, 53.08, 2.92, 30, 18),
(24, NULL, 53.08, 2.92, 30, 18),
(25, NULL, 53.08, 2.92, 30, 18),
(26, NULL, 53.08, 2.92, 30, 18),
(27, NULL, 53.08, 2.92, 30, 18),
(28, NULL, 53.08, 2.92, 30, 18),
(29, NULL, 53.08, 2.92, 30, 18),
(30, NULL, 53.08, 2.92, 30, 18),
(31, NULL, 53.08, 2.92, 30, 18),
(32, NULL, 53.08, 2.92, 30, 18),
(33, NULL, 21.23, 1.17, 31, 19),
(34, NULL, 52.47, 2.89, 32, 20),
(35, NULL, 13.28, 0.73, 33, 21),
(36, NULL, 115.74, 6.37, 35, 22),
(37, '2021-01-20', 52.99, 2.91, 38, 24),
(38, '[20-01-2021]', 35.04, 1.93, 39, 25),
(39, '[20-01-2021]', 76.93, 4.23, 40, 26),
(40, '[20-01-2021]', 5.44, 0.3, 41, 27),
(41, '[20-01-2021]', 85.22, 4.69, 43, 28);

-- --------------------------------------------------------

--
-- Structure de la table `payment_method`
--

CREATE TABLE `payment_method` (
  `id` int(11) NOT NULL,
  `method` varchar(45) DEFAULT NULL,
  `value` varchar(45) DEFAULT NULL,
  `id_client` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `payment_method`
--

INSERT INTO `payment_method` (`id`, `method`, `value`, `id_client`) VALUES
(7, 'cb', 'oui', 9),
(8, 'cb', 'oui', 9),
(9, 'visa', '111', 9),
(10, 'visa', '111222', 9),
(11, 'masterCard', '111222', 9),
(12, 'cb', '445', 9),
(13, 'visa', '33213', 9),
(14, 'masterCard', 'oui', 9),
(15, 'visa', 'ouai', 9),
(16, 'visa', '789', 11),
(17, 'cb', 'cxvcx', 12),
(18, 'cb', '6456456', 12),
(19, 'masterCard', '545655', 12),
(20, 'cb', '55', 12),
(21, 'masterCard', '555', 12),
(22, 'masterCard', '4578965456', 13),
(23, 'masterCard', '4747', 13),
(24, 'visa', 'oui', 13),
(25, 'cb', '77', 14),
(26, 'masterCard', '444988745651', 15),
(27, 'masterCard', '44', 15),
(28, 'masterCard', '555', 17);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`,`email`);

--
-- Index pour la table `content_order`
--
ALTER TABLE `content_order`
  ADD PRIMARY KEY (`id`,`id_item`),
  ADD KEY `id_item` (`id_item`);

--
-- Index pour la table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_manga_title`);

--
-- Index pour la table `manga_title`
--
ALTER TABLE `manga_title`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`);

--
-- Index pour la table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`);

--
-- Index pour la table `ordered_item_snapshot`
--
ALTER TABLE `ordered_item_snapshot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_order` (`id_order`);

--
-- Index pour la table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_order` (`id_order`),
  ADD KEY `id_payment_method` (`id_payment_method`);

--
-- Index pour la table `payment_method`
--
ALTER TABLE `payment_method`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_client` (`id_client`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `manga_title`
--
ALTER TABLE `manga_title`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT pour la table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `ordered_item_snapshot`
--
ALTER TABLE `ordered_item_snapshot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `payment_method`
--
ALTER TABLE `payment_method`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `content_order`
--
ALTER TABLE `content_order`
  ADD CONSTRAINT `content_order_ibfk_1` FOREIGN KEY (`id_item`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `content_order_ibfk_2` FOREIGN KEY (`id`) REFERENCES `order` (`id`);

--
-- Contraintes pour la table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`id_manga_title`) REFERENCES `manga_title` (`id`);

--
-- Contraintes pour la table `manga_title`
--
ALTER TABLE `manga_title`
  ADD CONSTRAINT `manga_title_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `category` (`id`);

--
-- Contraintes pour la table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);

--
-- Contraintes pour la table `ordered_item_snapshot`
--
ALTER TABLE `ordered_item_snapshot`
  ADD CONSTRAINT `ordered_item_snapshot_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id`);

--
-- Contraintes pour la table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`id_order`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`id_payment_method`) REFERENCES `payment_method` (`id`);

--
-- Contraintes pour la table `payment_method`
--
ALTER TABLE `payment_method`
  ADD CONSTRAINT `payment_method_ibfk_1` FOREIGN KEY (`id_client`) REFERENCES `client` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
