-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 03 Juin 2016 à 11:15
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `airfly`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(255) NOT NULL,
  `Prenom` varchar(255) NOT NULL,
  `Login` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `CodeAdmin` varchar(255) NOT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`idadmin`, `Nom`, `Prenom`, `Login`, `Password`, `Email`, `CodeAdmin`) VALUES
(1, 'Jhon', 'Mike', 'Jhon', '1b83d5da74032b6a750ef12210642eea', 'Jhon@gmail.com', 'BJ2H78');

-- --------------------------------------------------------

--
-- Structure de la table `aeroport`
--

CREATE TABLE IF NOT EXISTS `aeroport` (
  `nom` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `codeIATA` varchar(255) NOT NULL,
  PRIMARY KEY (`codeIATA`),
  UNIQUE KEY `codeIATA` (`codeIATA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `aeroport`
--

INSERT INTO `aeroport` (`nom`, `pays`, `ville`, `codeIATA`) VALUES
('Aeroport Amsterdam Schiphol ', 'Pays-Bas', 'Haarlemmermeer', 'AMS'),
('Aeroport  de cant', 'Chine', 'Canton', 'CAN'),
('Aeroport Paris-Charles-de-Gaul', 'France', 'Paris', 'CDG'),
('Aeroport  de Soekarm', 'Indénosie', 'Jakarta', 'CGK'),
('Aeroport Mohammed V', 'Maroc', 'Casablanca', 'CMN'),
('Aeroport  de Denv ', 'Etats-Unis', 'Denver', 'DEN'),
('Aeroport  de Dall', 'Etats-Uni', 'Forth Worth', 'DFW'),
('Aeroport  de dubai', 'Emirates Arabes Uni', 'Dubai', 'DXB'),
('Aeroport Leonard-de-Vinci', 'Italie', 'Rome', 'FCO'),
('Aeroport de Francfort', 'Allemagne', 'FrancForth', 'FRA'),
('Aeroport  de Hong Kong', 'Chine', 'Hong Kong', 'HKG'),
('Aeroport  de Tokyo', 'Japan', 'Tokyo', 'HND'),
('Aeroport Ataturk Istambul', 'Turquie', 'Istambul', 'IST'),
('Aeroport  de Kual ', 'Malaisie', 'Sepang', 'KUL'),
('Aeroport  de Los', 'Etats-Uni', 'Los Angeles', 'LAX'),
('Aeroport de Londres Heathrow', 'Royaume-Uni', 'Londres', 'LHR'),
('Aeroport  OHare', 'Etats-Unis', 'Chicago', 'ORD'),
('Aeroport  de Pékin', 'Chine', 'Pékin', 'PEK'),
('Aeroport  de changi', 'Singapour', 'Changi', 'SIN');

-- --------------------------------------------------------

--
-- Structure de la table `places`
--

CREATE TABLE IF NOT EXISTS `places` (
  `numvol` int(11) NOT NULL,
  `places` text NOT NULL,
  UNIQUE KEY `numvol` (`numvol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `places`
--

INSERT INTO `places` (`numvol`, `places`) VALUES
(980, ',l103,l119,f3,l1,l100,m48,l1200,l3,l4,l20,l21,l37,l91,l78,l2,l101,l80,l74,l40,l5,f1,l7,l118,l6,l8,l9,l10,l11,l112,l12,l13,l14,l15'),
(2233, ',l120,l1'),
(2400, ',l2,l28,l34,l60,l12,l13,l14,l19,m1,m6,m5,f2,f5,f27,f40,f60,f1,m2,f51,l113,f2,l120,l119,l20,f10,f21,l101,l1,l81,f41,l4,m4,m3,l24,l109,l105,l110,l21,l100,l3,l5,l6'),
(3400, ',l1,f1,l2,l3,f2,m1,l4,l5,l6,l120,l7,l8,l9,l10,l11,l12,l13,l14'),
(3740, ''),
(4400, ''),
(9999, ',l1'),
(88888, '');

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

CREATE TABLE IF NOT EXISTS `promotion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `datefin` date NOT NULL,
  `ville` varchar(255) NOT NULL,
  `pays` varchar(255) NOT NULL,
  `prixmin` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `img` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `promotion`
--

INSERT INTO `promotion` (`id`, `datefin`, `ville`, `pays`, `prixmin`, `description`, `img`) VALUES
(1, '2016-05-29', 'Hong Kong', 'Chine', 1500.77, 'Une Promotion Excusive Pour Tous les Vols Depuis Hok Kong', 'hong-kong'),
(2, '2016-05-29', 'Casablanca', 'Maroc', 900.77, 'Rien Que Pour Vous Vistez Casa A un Bon Prix', 'Casablanca'),
(3, '2016-05-29', 'Dubai', 'Emirates Arabes Uni', 4500.77, 'Vous Attendez Quoi ? Dubai Vous Attend', 'Dubai'),
(8, '2016-05-28', 'New York', 'America', 1200.89, 'Beautiful City', 'New York'),
(9, '2016-05-26', 'Milan', 'Italie', 3444.92, 'Hello', 'Milan');

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idclient` int(11) NOT NULL,
  `civilte` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `datenaissance` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `numvol` int(11) NOT NULL,
  `datereservation` datetime NOT NULL,
  `classe` varchar(255) NOT NULL,
  `modifiable` varchar(255) NOT NULL DEFAULT 'oui',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Contenu de la table `reservation`
--

INSERT INTO `reservation` (`id`, `idclient`, `civilte`, `nom`, `prenom`, `datenaissance`, `place`, `numvol`, `datereservation`, `classe`, `modifiable`) VALUES
(6, 6, 'monsieur', 'Zakaria', 'Benchikhi', '1994-04-04', 'l100', 980, '2016-05-07 18:43:32', 'economique', 'oui'),
(8, 6, 'garcon', 'Adam', 'Kobba', '2007-01-01', 'm48', 980, '2016-05-07 18:43:32', 'affaires', 'oui'),
(9, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'm1', 3400, '2016-05-07 18:43:32', 'affaires', 'oui'),
(11, 6, 'monsieur', 'Ayoub', 'Benchikhi', '1994-04-04', 'f2', 3400, '2016-05-01 18:43:33', 'premiere', 'non'),
(12, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l120', 980, '2016-05-02 16:37:36', 'economique', 'non'),
(14, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'f3', 980, '2016-05-02 16:59:10', 'premiere', 'oui'),
(15, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l1', 980, '2016-05-03 10:59:51', 'economique', 'oui'),
(16, 6, 'garcon', 'Saloua', 'Elhilali', '2007-01-01', 'l4', 980, '2016-05-03 10:59:52', 'economique', 'non'),
(18, 6, 'garcon', 'Saloua', 'Elhilali', '2007-01-01', 'l3', 3400, '2016-05-03 10:59:52', 'economique', 'oui'),
(19, 10, 'monsieur', 'Saloua', 'Elhilali', '1994-01-01', 'l1', 9999, '2016-05-03 11:57:07', 'economique', 'non'),
(20, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l60', 980, '2016-05-04 09:39:59', 'economique', 'oui'),
(21, 6, 'garcon', 'Salua', 'hilali', '2014-01-01', 'l3', 980, '2016-05-04 09:40:00', 'economique', 'oui'),
(22, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l4', 3400, '2016-05-04 09:40:00', 'economique', 'oui'),
(23, 6, 'garcon', 'Salua', 'hilali', '2014-01-01', 'l5', 3400, '2016-05-04 09:40:00', 'economique', 'oui'),
(24, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l1', 2233, '2016-05-07 12:17:55', 'economique', 'oui'),
(25, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-02-02', 'l20', 980, '2016-05-09 12:55:24', 'economique', 'non'),
(26, 6, 'monsieur', 'nasro', 'Benchikhi', '1994-04-04', 'l78', 980, '2016-05-09 13:08:47', 'economique', 'non'),
(28, 13, 'monsieur', 'Marouane', 'Lachgar', '1994-04-04', 'l21', 980, '2016-05-09 14:31:28', 'economique', 'oui'),
(30, 6, 'monsieur', 'taha', 'Benchikhi', '1994-04-04', 'l120', 3400, '2016-05-09 18:45:11', 'economique', 'non'),
(31, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l91', 980, '2016-05-09 19:03:17', 'economique', 'oui'),
(32, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l1', 4017, '2016-05-09 19:03:17', 'economique', 'oui'),
(33, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l2', 980, '2016-05-10 11:49:22', 'economique', 'oui'),
(34, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l7', 3400, '2016-05-10 11:49:22', 'economique', 'oui'),
(35, 6, 'monsieur', 'taha', 'Benchikhi', '1994-04-04', 'l101', 980, '2016-05-11 06:43:14', 'economique', 'oui'),
(36, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l80', 980, '2016-05-14 12:55:50', 'economique', 'oui'),
(37, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l8', 3400, '2016-05-14 12:55:50', 'economique', 'oui'),
(38, 6, 'monsieur', 'taha', 'Benchikhi', '1994-04-04', 'l74', 980, '2016-05-17 11:11:37', 'economique', 'oui'),
(39, 14, 'monsieur', 'Jhon', 'Mike', '1994-04-04', 'l40', 980, '2016-05-19 13:46:51', 'economique', 'oui'),
(42, 14, 'monsieur', 'Jhon', 'Mike', '1994-04-04', 'l11', 3400, '2016-05-19 14:24:46', 'economique', 'oui'),
(43, 15, 'monsieur', 'adnan', 'bazouit', '1994-01-01', 'f1', 980, '2016-05-23 11:22:58', 'premiere', 'oui'),
(44, 6, 'monsieur', 'Taha', 'Benchikhi', '0292-04-04', 'l118', 980, '2016-05-23 16:18:04', 'economique', 'non'),
(45, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l6', 980, '2016-05-25 16:14:34', 'economique', 'oui'),
(46, 6, 'garcon', 'Adam', 'Kobba', '2007-04-04', 'l8', 980, '2016-05-25 16:14:34', 'economique', 'oui'),
(47, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l9', 980, '2016-05-25 23:24:22', 'economique', 'oui'),
(48, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l10', 980, '2016-05-25 23:25:18', 'economique', 'oui'),
(49, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l11', 980, '2016-05-25 23:27:02', 'economique', 'oui'),
(50, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l1', 7777, '2016-05-26 06:46:18', 'economique', 'oui'),
(51, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'f1', 7777, '2016-05-26 06:47:28', 'premiere', 'non'),
(52, 6, 'monsieur', 'Taha', 'Benchikhi', '1994-04-04', 'l112', 980, '2016-05-30 13:25:24', 'economique', 'non'),
(53, 14, 'monsieur', 'Jhon', 'Mike', '1994-04-04', 'l12', 980, '2016-05-31 12:14:41', 'economique', 'oui'),
(54, 14, 'fille', 'Julia', 'Mike', '2007-02-11', 'l13', 980, '2016-05-31 12:14:41', 'economique', 'oui'),
(55, 14, 'monsieur', 'Jhon', 'Mike', '1994-04-04', 'l13', 3400, '2016-05-31 12:14:41', 'economique', 'oui'),
(56, 14, 'fille', 'Julia', 'Mike', '2007-02-11', 'l14', 3400, '2016-05-31 12:14:41', 'economique', 'oui'),
(57, 14, 'monsieur', 'fs', 'dfsddsf', '1994-04-04', 'l14', 980, '2016-05-31 12:15:54', 'economique', 'oui'),
(58, 14, 'monsieur', 'Jhon', 'Mike', '1994-04-04', 'l15', 980, '2016-05-31 12:16:28', 'economique', 'oui');

-- --------------------------------------------------------

--
-- Structure de la table `tarif`
--

CREATE TABLE IF NOT EXISTS `tarif` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `numvol` int(11) NOT NULL,
  `prix` float NOT NULL,
  `economique` int(11) NOT NULL DEFAULT '100',
  `affaires` int(11) NOT NULL,
  `premiere` int(11) NOT NULL,
  `enfant` int(11) NOT NULL,
  `bebe` float NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `numvol` (`numvol`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `tarif`
--

INSERT INTO `tarif` (`id`, `numvol`, `prix`, `economique`, `affaires`, `premiere`, `enfant`, `bebe`) VALUES
(1, 400, 1200.09, 100, 200, 300, 10, 14),
(2, 980, 2999.9, 100, 200, 300, 10, 21.98),
(3, 2233, 2100.01, 100, 120, 300, 10, 14),
(4, 2400, 1000.01, 100, 200, 300, 20, 35),
(5, 3400, 4500.01, 100, 120, 240, 20, 33),
(6, 3740, 4000.02, 100, 190, 270, 10, 20),
(7, 4017, 3750.99, 100, 190, 300, 10, 15),
(8, 4400, 3000.09, 100, 200, 300, 20, 40),
(9, 9999, 999.01, 100, 180, 200, 20, 29),
(12, 88888, 6500.6, 100, 200, 350, 19, 28);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `prenom` varchar(255) CHARACTER SET latin1 NOT NULL,
  `login` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `cart` varchar(255) CHARACTER SET latin1 NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `login`, `password`, `cart`, `email`) VALUES
(6, 'Taha', 'Benchikhi', 'taha@gmail.com', 'ac812175fbea1db0550899be0d571eec', 'BJ0097', 'taha@gmail.com'),
(7, 'Adam', 'Kobba', 'adam@gmail.com', '1d7c2923c1684726dc23d2901c4d8157', 'AX90029', 'adam@gmail.com'),
(8, 'Kawtar', 'Benchikhi', 'Kawtar@gmail.com', '77ad85907e92c27c7203214cd7808289', 'BJ928K', 'kawtar@gmail.com'),
(9, 'Abderrahim', 'Benchikhi', 'Abderrahim@gmail.com', '41d2166be796e90ee0f10a43b3b46947', 'BJ90289', 'Abderrahim@gmail.com'),
(10, 'Saloua', 'ElHilali', 'saloua@gmail.com', 'd286dee7e157ab88cd65077111535623', 'BJ2863', 'saloua@gmail.com'),
(11, 'zakaria', 'zakaria', 'Zakaria@gmail.com', '192845595d873a97998947111b7754db', 'BSHSJ', 'zakaria@gmail.com'),
(12, 'my', 'my', 'my@gmail.com', '6864f389d9876436bc8778ff071d1b6c', 'BHSKK', 'my@gmail.com'),
(13, 'Marouane', 'Lachgar', 'maroue@gmail.com', '202cb962ac59075b964b07152d234b70', 'BJ422222', 'marouane@gmail.com'),
(14, 'Jhon', 'Mike', 'Jhon@gmail.com', '4c25b32a72699ed712dfa80df77fc582', 'TJX689', 'Jhon@gmail.com'),
(15, 'adnan', 'bouzaouit', 'adnan@gmail.com', 'd1a0a9e9391af09e978c4c3d11711e75', 'BJ76976', 'adnan@gmail.com'),
(16, 'youp', 'youp', 'Youp', '7478908ad9c81b4811368e7c80883730', 'BJ278', 'youp@gmail.com'),
(17, 'za', 'za', 'za', '959848ca10cc8a60da818ac11523dc63', 'BJS86A', 'za@gmail.com'),
(18, 'po', 'po', 'po', 'f6122c971aeb03476bf01623b09ddfd4', 'BhS78', 'po@gmail.com'),
(19, 'zo', 'zo', 'zo', '2ff603c183a026bf9b67b1033c52ae2b', 'BSJHZS', 'zo@gmail.com'),
(20, 'mo', 'mo', 'mo', '27c9d5187cd283f8d160ec1ed2b5ac89', 'JSGSJD', 'mo@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `vols`
--

CREATE TABLE IF NOT EXISTS `vols` (
  `numvol` int(11) NOT NULL,
  `provenance` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `datedepart` date NOT NULL,
  `hdepart` time NOT NULL,
  `harriver` time NOT NULL,
  `economique` varchar(255) NOT NULL,
  `affaires` varchar(255) NOT NULL,
  `premiere` varchar(255) NOT NULL,
  `gate` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `escale` varchar(255) NOT NULL,
  PRIMARY KEY (`numvol`),
  UNIQUE KEY `numvol` (`numvol`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `vols`
--

INSERT INTO `vols` (`numvol`, `provenance`, `destination`, `datedepart`, `hdepart`, `harriver`, `economique`, `affaires`, `premiere`, `gate`, `company`, `escale`) VALUES
(400, 'HKG', 'CMN', '2016-05-24', '20:00:00', '01:09:00', '120', '48', '18', '2X', 'France Airline', 'direct'),
(980, 'CMN', 'HKG', '2016-05-07', '12:00:00', '09:00:00', '113', '48', '18', '1A', 'Royal Air Maroc', 'direct'),
(2233, 'DEN', 'DXB', '2016-05-07', '01:00:00', '12:00:00', '128', '48', '18', '1A', 'Emirates', 'direct'),
(2400, 'CMN', 'HKG', '2016-05-07', '03:00:00', '04:00:00', '120', '48', '18', '2Z', 'France Airline', '3h'),
(3400, 'HKG', 'CMN', '2016-05-24', '01:00:00', '08:20:00', '117', '48', '18', '1E', 'Royal Air Maroc', '5h'),
(3740, 'HKG', 'CMN', '2016-05-24', '01:00:00', '09:00:00', '120', '48', '18', '1Z', 'Hongkong Airlines', 'direct'),
(4017, 'HKG', 'CMN', '2016-05-24', '13:10:00', '17:12:00', '128', '48', '18', '1A', 'Royal Air Maroc', '1h'),
(4400, 'CMN', 'HKG', '2016-05-07', '03:00:00', '07:30:00', '120', '48', '18', '1A', 'Hongkong Airlines', '4h'),
(9999, 'CMN', 'HKG', '2016-05-07', '01:00:00', '13:47:00', '120', '48', '18', '1A', 'Royal Air Maroc', 'direct'),
(88888, 'CMN', 'CDG', '2016-05-07', '01:00:00', '05:00:00', '128', '48', '18', '7A', 'Royal Air Maroc', 'direct');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
