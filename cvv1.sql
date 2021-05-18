-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 17 mai 2021 à 19:14
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cvv`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `username`, `password`) VALUES
(1, 'Administrator', 'Admin', 'admin'),
(2, 'Paul', 'Paul', 'PAul');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `chambre_id` int(11) NOT NULL,
  `chambre_type` varchar(50) NOT NULL,
  `prix` varchar(11) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`chambre_id`, `chambre_type`, `prix`, `photo`) VALUES
(1, 'Le Jura (Les Rousse)', '2000', '1.jpg'),
(2, 'VilleFort (Lozere)', '2400', '3.jpg'),
(3, 'La Rochelle (Charente maritime)', '2800', '4.jpg'),
(4, 'Suite', '3800', '5.jpg'),
(5, 'Suite luxueuse (Chamonix)', '4000', '6.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `guest_id` int(11) NOT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Deuxieme_prenom` varchar(30) NOT NULL,
  `nom` varchar(40) NOT NULL,
  `adresse` varchar(50) NOT NULL,
  `numero_tel` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`guest_id`, `Prenom`, `Deuxieme_prenom`, `nom`, `adresse`, `numero_tel`) VALUES
(1, 'Noah', 'Gren', 'Grenie', '77champs', '0764234046'),
(2, 'Yanis', 'Fajitas', 'Baptisateur', 'FC DESCARTES', '0690961823'),
(3, 'Noah', 'gren', 'gren', '7 Boulevard Copernic', '0764254046'),
(4, 'peul', 'rouri', 'gren', 'UTEC', '0764254046'),
(5, 'peul', 'rouri', 'gren', 'UTEC', '0764254046'),
(6, 'Sandrine', 'Relouzat', 'Manella', 'Gourbeyre113FMG', '0669416005'),
(7, 'Sandrine', 'Relouzat', 'Manella', 'Gourbeyre113FMG', '0669416005'),
(8, 'ugo', 'remora', 'Guillot', 'SRD', '0690774567'),
(9, 'Nicolas', 'Rodrigue', 'Darmalingon', 'Baillif', '0690357531'),
(10, 'Noah', 'gren', 'Darmalingon', '7 Boulevard Copernic', '06795643'),
(11, 'Yani', 'Kabyle Fighter', 'Haouili', 'UPEM', '097854'),
(12, 'So', 'So', 'EKIP', 'UPEM', '09837739101°'),
(13, 'Valery', 'Colonel', 'Mauduit', 'Lycee', '98653890');

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `guest_id` int(11) NOT NULL,
  `chambre_id` int(11) NOT NULL,
  `chambre_no` int(5) NOT NULL,
  `lit_extra` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `date` int(2) NOT NULL,
  `enregistrement` date NOT NULL,
  `temps_enregistrement` time NOT NULL,
  `paiement` date NOT NULL,
  `temps_paiement` time NOT NULL,
  `facture` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `guest_id`, `chambre_id`, `chambre_no`, `lit_extra`, `status`, `date`, `enregistrement`, `temps_enregistrement`, `paiement`, `temps_paiement`, `facture`) VALUES
(1, 1, 1, 0, 0, 'Pending', 0, '2021-05-19', '00:00:00', '0000-00-00', '00:00:00', ''),
(2, 2, 5, 0, 0, 'Pending', 0, '2021-05-28', '00:00:00', '0000-00-00', '00:00:00', ''),
(3, 4, 3, 0, 0, 'Pending', 0, '2021-10-08', '00:00:00', '0000-00-00', '00:00:00', ''),
(4, 4, 1, 0, 0, 'Pending', 0, '2021-05-30', '00:00:00', '0000-00-00', '00:00:00', ''),
(5, 6, 1, 0, 0, 'Attente', 0, '2021-08-12', '00:00:00', '0000-00-00', '00:00:00', ''),
(6, 8, 1, 0, 0, 'Attente', 0, '2021-07-29', '00:00:00', '0000-00-00', '00:00:00', ''),
(7, 9, 3, 90, 1, 'paiement', 7, '2021-08-19', '19:41:29', '1970-01-01', '00:00:00', '800'),
(8, 10, 2, 0, 0, 'attente', 0, '2021-06-30', '00:00:00', '0000-00-00', '00:00:00', ''),
(9, 11, 3, 49, 2, 'enregistrement', 15, '2021-07-23', '06:44:47', '1970-01-01', '00:00:00', '1600'),
(10, 12, 4, 800, 3, 'enregistrement', 7, '2021-06-24', '19:24:12', '1970-01-01', '00:00:00', '2400'),
(11, 13, 1, 0, 0, 'attente', 0, '2021-05-30', '00:00:00', '0000-00-00', '00:00:00', '');

-- --------------------------------------------------------

--
-- Structure de la table `util`
--

CREATE TABLE `util` (
  `id` int(11) NOT NULL,
  `nom_util` int(11) NOT NULL,
  `mdp_util` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dateInscrit` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `util`
--

INSERT INTO `util` (`id`, `nom_util`, `mdp_util`, `email`, `dateInscrit`) VALUES
(1, 0, 0, 'noah.grenie@gmail.com', '2021-05-17'),
(2, 0, 2147483647, 'yanialiouat@gmail.com', '2021-05-17'),
(3, 0, 627, 'pol@gmail.com', '2021-05-17'),
(4, 0, 9, 'lol@gmail.com', '2021-05-17');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`chambre_id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`guest_id`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Index pour la table `util`
--
ALTER TABLE `util`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `chambre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `guest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `util`
--
ALTER TABLE `util`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
