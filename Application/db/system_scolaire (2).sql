-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 13 jan. 2022 à 23:53
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `system_scolaire`
--

-- --------------------------------------------------------

--
-- Structure de la table `absence`
--

CREATE TABLE `absence` (
  `ID_ABSENCE` int(11) NOT NULL,
  `ID_ETUDIANT` int(11) NOT NULL,
  `ID_EMPLOYEE` int(11) NOT NULL,
  `DATE` datetime DEFAULT NULL,
  `justifie` int(11) NOT NULL,
  `annee_scolaire` varchar(40) NOT NULL,
  `semester` int(11) NOT NULL,
  `nbr_hours` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `absence`
--

INSERT INTO `absence` (`ID_ABSENCE`, `ID_ETUDIANT`, `ID_EMPLOYEE`, `DATE`, `justifie`, `annee_scolaire`, `semester`, `nbr_hours`) VALUES
(1, 1, 3, '2021-12-24 22:45:42', 1, '2021/2022', 1, 2),
(3, 1, 1, '2022-01-07 00:00:00', 0, '2021/2022', 1, 1),
(4, 1, 1, '2022-01-12 00:00:00', 0, '2021/2022', 2, 2),
(5, 1, 1, '2022-01-12 00:00:00', 0, '2021/2022', 2, 2),
(7, 1, 1, '2022-01-05 00:00:00', 0, '2021/2022', 2, 2),
(8, 1, 1, '2022-01-04 00:00:00', 0, '2021/2022', 2, 1),
(9, 1, 1, '2022-01-03 00:00:00', 0, '2021/2022', 3, 2),
(13, 1, 1, '2022-01-12 00:00:00', 0, '2021/2022', 1, 2),
(14, 1, 1, '2022-01-04 00:00:00', 0, '2022/2023', 1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE `annonce` (
  `ID_ANNONCE` int(11) NOT NULL,
  `ID_EMPLOYEE` int(11) NOT NULL,
  `TITRE` varchar(50) DEFAULT NULL,
  `DESCRIPTION` text DEFAULT NULL,
  `IMAGE_ANNONCE` varchar(100) DEFAULT NULL,
  `DOCUMENTS` varchar(100) DEFAULT NULL,
  `DATE_PUB` date NOT NULL,
  `AUDITION` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `annonce`
--

INSERT INTO `annonce` (`ID_ANNONCE`, `ID_EMPLOYEE`, `TITRE`, `DESCRIPTION`, `IMAGE_ANNONCE`, `DOCUMENTS`, `DATE_PUB`, `AUDITION`) VALUES
(1, 1, 'annonce number 1', 'dloijc_iz', '1.jpg', '1.pdf', '2021-12-08', 'PUBLIQUE'),
(2, 1, 'annonce number 2', 'iuhzdu', '2.jpg', '1.pdf', '2021-12-07', 'glsid'),
(4, 1, 'annonce 4', 'this is the 4th annoncement', 'bg2.jpg', '1642097867-fich.pdf', '2021-12-28', 'glsid1');

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

CREATE TABLE `compte` (
  `ID_COMPTE` int(11) NOT NULL,
  `LOGIN` varchar(100) DEFAULT NULL,
  `PASSWORD` varchar(200) DEFAULT NULL,
  `IMG_PROFILE` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`ID_COMPTE`, `LOGIN`, `PASSWORD`, `IMG_PROFILE`) VALUES
(0, 'ki61', 'Ic2Gk4fj', NULL),
(1, 'R130', '1234', '69479367-et.png'),
(2, 'emp1', '1234', '40849775-et.png'),
(3, 'azer', '1234', NULL),
(4, 'TF56', '1234', NULL),
(6, 'ha61', '6LJXJp10', NULL),
(25, 'ki61', '01FWgJlY', NULL),
(48, 'mo61', 'BBm9CUS6', NULL),
(61, 'ki61', 'RKr5jFSn', NULL),
(87, 'ki61', 'a1Fxn5Xq', NULL),
(118, 'ha61', '7yffZ291', NULL),
(336, 'ki61', 'IglNR7bq', NULL),
(539, 'ha61', 'ka8Vbbo6', NULL),
(447175976, 'ha61', 'GMblgqex', NULL),
(447175977, '', 'FukD6uP9', NULL),
(447175978, 'Pr61', 'P3UVFU8Q', NULL),
(447175979, 'Pr61', '19ufX9sU', NULL),
(447175980, 'Pr61', 'PlN2JtCC', NULL),
(447175981, 'et61', '7Q9BmSKS', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `contenir_1`
--

CREATE TABLE `contenir_1` (
  `ID_FILIERE` int(11) NOT NULL,
  `ID_MODULE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contenir_1`
--

INSERT INTO `contenir_1` (`ID_FILIERE`, `ID_MODULE`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `ID_DEPARTEMENT` int(11) NOT NULL,
  `DEPARTEMENT_LIBELLEL` varchar(50) DEFAULT NULL,
  `DESCRIPTION` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`ID_DEPARTEMENT`, `DEPARTEMENT_LIBELLEL`, `DESCRIPTION`) VALUES
(1, 'info', 'INFORMATRIQUE'),
(2, 'Mecaniaue', 'Mecanique'),
(3, 'electrique', 'electrique');

-- --------------------------------------------------------

--
-- Structure de la table `element_module`
--

CREATE TABLE `element_module` (
  `ID_ELEMENT_MODULE` int(11) NOT NULL,
  `ID_MODULE` int(11) NOT NULL,
  `ID_EMPLOYEE` int(11) NOT NULL,
  `ELEMENT_LIBELLE` varchar(50) DEFAULT NULL,
  `DESCRIPTION` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `element_module`
--

INSERT INTO `element_module` (`ID_ELEMENT_MODULE`, `ID_MODULE`, `ID_EMPLOYEE`, `ELEMENT_LIBELLE`, `DESCRIPTION`) VALUES
(1, 1, 1, 'merise', 'element de module description'),
(2, 1, 1, 'SQL', 'module description'),
(3, 2, 1, 'analyse numérique', 'element de module description'),
(4, 2, 1, 'algébre', 'element module description'),
(5, 6, 1, 'probabilité', 'element de module description'),
(6, 6, 1, 'Recherche operationelle', 'element de module description'),
(7, 4, 1, 'TEC', 'description'),
(8, 4, 1, 'English', 'Description'),
(9, 3, 1, 'langage C', 'description'),
(10, 3, 1, 'algorithme', 'description'),
(11, 7, 1, 'reseaux', 'description'),
(12, 7, 1, 'assembleur', 'description'),
(13, 5, 1, 'Economie générale', 'description'),
(14, 5, 1, 'Environnement socio-économique et institutionnel', 'description');

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE `employee` (
  `ID_EMPLOYEE` int(11) NOT NULL,
  `ID_COMPTE` int(11) NOT NULL,
  `NOM` varchar(30) DEFAULT NULL,
  `PRENOM` varchar(30) DEFAULT NULL,
  `TEL` char(11) DEFAULT NULL,
  `EMAIL` char(50) DEFAULT NULL,
  `SEX` varchar(11) DEFAULT NULL,
  `ADRESSE` varchar(100) DEFAULT NULL,
  `DATE_NAISSANCE` date DEFAULT NULL,
  `FONCTION` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`ID_EMPLOYEE`, `ID_COMPTE`, `NOM`, `PRENOM`, `TEL`, `EMAIL`, `SEX`, `ADRESSE`, `DATE_NAISSANCE`, `FONCTION`) VALUES
(1, 2, 'hassan', 'morabite', '0515854', 'gb@gmail.com', '2', 'Casablanca', '2021-12-13', 'professeur'),
(3, 3, 'khalid', 'mohammedi', '0612132134', 'prof1@gmail.com', '2\n', 'Mohammedia', '2022-01-19', 'directeur'),
(6, 0, 'hamid', 'salote', '0684123187', 'hamid@gmail.com', '2', 'Marrakesh', '0000-00-00', 'professeur'),
(48, 0, 'mohamed', 'karim', '0684123187', 'jhon@doe.com', '2', 'Mohammedia', '2022-01-11', 'professeur'),
(61, 0, 'kingo', 'Hakim', '0684123187', 'hzeyach18@gmail.com', '2', 'Mohammedia', '2022-01-18', 'professeur'),
(87, 0, 'kingo', 'Hakim', '0684123187', 'hzeyach18@gmail.com', '2', 'Mohammedia', '0000-00-00', 'professeur'),
(118, 0, 'hamid', 'salote', '0684123187', 'hamid@gmail.com', '2', 'Marrakesh', '0000-00-00', 'professeur'),
(539, 0, 'hamid', 'salote', '0684123187', 'hamid@gmail.com', '2', 'Marrakesh', '0000-00-00', 'professeur'),
(540, 0, 'Prof2', 'gsgsg', '068776876', 'test@gmail.com', '2', 'Mohammedia', '2022-01-19', 'professeur'),
(541, 0, 'Prof2', 'gsgsg', '068776876', 'test@gmail.com', '2', 'Mohammedia', '2022-01-19', 'professeur');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `ID_ETUDIANT` int(11) NOT NULL,
  `ID_FILIERE` int(11) NOT NULL,
  `ID_COMPTE` int(11) NOT NULL,
  `NOM` char(30) DEFAULT NULL,
  `PRENOM` char(30) DEFAULT NULL,
  `TEL` char(11) DEFAULT NULL,
  `EMAIL` char(50) DEFAULT NULL,
  `SEX` varchar(10) DEFAULT NULL,
  `ADRESSE` varchar(200) DEFAULT NULL,
  `DATE_NAISSANCE` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`ID_ETUDIANT`, `ID_FILIERE`, `ID_COMPTE`, `NOM`, `PRENOM`, `TEL`, `EMAIL`, `SEX`, `ADRESSE`, `DATE_NAISSANCE`) VALUES
(0, 3, 4, 'omar', 'doe', '06123471', 'omar@gmail.com', '1', 'Mohammedia', 2002),
(1, 1, 1, 'Ahmed', 'Taffah', '0684134787', 'taffahachraf184@gmail.com', '1', 'Casablanca ', 20),
(2, 1, 4, 'omar', 'doe', '06123471', 'omar@gmail.com', '1', 'Mohammedia', 2002),
(2097207129, 1, 0, 'etudiant1', 'etud', '87987987', 'etud1@gmail.com', '2', 'Mohammedia', 2022);

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

CREATE TABLE `filiere` (
  `ID_FILIERE` int(11) NOT NULL,
  `ID_DEPARTEMENT` int(11) NOT NULL,
  `FILIERE_LIBELLE` varchar(100) DEFAULT NULL,
  `DESCRIPTION` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`ID_FILIERE`, `ID_DEPARTEMENT`, `FILIERE_LIBELLE`, `DESCRIPTION`) VALUES
(1, 1, 'glsid1', 'GENIE DE LOGICIEL'),
(2, 1, 'GLSID2', 'Genie Logiciel'),
(3, 1, 'BDCC1', 'big data and cloud computing'),
(4, 1, 'BDCC2', 'big data and cloud computing');

-- --------------------------------------------------------

--
-- Structure de la table `gerer`
--

CREATE TABLE `gerer` (
  `ID_EMPLOYEE` int(11) NOT NULL,
  `EMP_ID_EMPLOYEE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `module`
--

CREATE TABLE `module` (
  `ID_MODULE` int(11) NOT NULL,
  `MODULE_LIBELLE` varchar(50) DEFAULT NULL,
  `DESCRIPTION` text DEFAULT NULL,
  `SEMESTRE` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `module`
--

INSERT INTO `module` (`ID_MODULE`, `MODULE_LIBELLE`, `DESCRIPTION`, `SEMESTRE`) VALUES
(1, 'Bases de données', 'module description', '1'),
(2, 'Mathématiques appliquées 1', 'module description', '1'),
(3, 'Techniques de programmation', 'module description', '1'),
(4, 'Technique d’expression et de communication 1', 'module description', '1'),
(5, 'Economie et environnement de l’entreprise', 'module description', '1'),
(6, 'Mathématiques appliquées 2', 'module description', '1'),
(7, 'Technologie des ordinateurs et réseaux', 'module description', '1');

-- --------------------------------------------------------

--
-- Structure de la table `note`
--

CREATE TABLE `note` (
  `ID_NOTE` int(11) NOT NULL,
  `ID_ETUDIANT` int(11) NOT NULL,
  `ID_ELEMENT_MODULE` int(11) NOT NULL,
  `NOTE` float DEFAULT NULL,
  `SECTION` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note`
--

INSERT INTO `note` (`ID_NOTE`, `ID_ETUDIANT`, `ID_ELEMENT_MODULE`, `NOTE`, `SECTION`) VALUES
(8, 1, 1, 10, '1'),
(10, 1, 2, 12, '1'),
(11, 1, 1, 18, '1'),
(12, 2, 1, 10, '1'),
(13, 2097207129, 1, 3, '1');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `absence`
--
ALTER TABLE `absence`
  ADD PRIMARY KEY (`ID_ABSENCE`),
  ADD KEY `FK_CONCERNER_1` (`ID_ETUDIANT`),
  ADD KEY `FK_MARQUER` (`ID_EMPLOYEE`);

--
-- Index pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD PRIMARY KEY (`ID_ANNONCE`),
  ADD KEY `FK_PUBLIER` (`ID_EMPLOYEE`);

--
-- Index pour la table `compte`
--
ALTER TABLE `compte`
  ADD PRIMARY KEY (`ID_COMPTE`);

--
-- Index pour la table `contenir_1`
--
ALTER TABLE `contenir_1`
  ADD PRIMARY KEY (`ID_FILIERE`,`ID_MODULE`),
  ADD KEY `FK_CONTENIR_3` (`ID_MODULE`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`ID_DEPARTEMENT`);

--
-- Index pour la table `element_module`
--
ALTER TABLE `element_module`
  ADD PRIMARY KEY (`ID_ELEMENT_MODULE`),
  ADD KEY `FK_CONTENIR_2` (`ID_MODULE`),
  ADD KEY `FK_ENSEIGNER` (`ID_EMPLOYEE`);

--
-- Index pour la table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`ID_EMPLOYEE`),
  ADD KEY `FK_AVOIR_2` (`ID_COMPTE`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`ID_ETUDIANT`),
  ADD KEY `FK_AVOIR_1` (`ID_COMPTE`),
  ADD KEY `FK_ETUDIER` (`ID_FILIERE`);

--
-- Index pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD PRIMARY KEY (`ID_FILIERE`),
  ADD KEY `FK_APPARTENIR` (`ID_DEPARTEMENT`);

--
-- Index pour la table `gerer`
--
ALTER TABLE `gerer`
  ADD PRIMARY KEY (`ID_EMPLOYEE`,`EMP_ID_EMPLOYEE`),
  ADD KEY `FK_GERER2` (`EMP_ID_EMPLOYEE`);

--
-- Index pour la table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`ID_MODULE`);

--
-- Index pour la table `note`
--
ALTER TABLE `note`
  ADD PRIMARY KEY (`ID_NOTE`),
  ADD KEY `FK_CONCERNER_2` (`ID_ELEMENT_MODULE`),
  ADD KEY `FK_VISUALISER` (`ID_ETUDIANT`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `absence`
--
ALTER TABLE `absence`
  MODIFY `ID_ABSENCE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `annonce`
--
ALTER TABLE `annonce`
  MODIFY `ID_ANNONCE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `compte`
--
ALTER TABLE `compte`
  MODIFY `ID_COMPTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=447175982;

--
-- AUTO_INCREMENT pour la table `element_module`
--
ALTER TABLE `element_module`
  MODIFY `ID_ELEMENT_MODULE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `employee`
--
ALTER TABLE `employee`
  MODIFY `ID_EMPLOYEE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=544;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `ID_ETUDIANT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2097207130;

--
-- AUTO_INCREMENT pour la table `filiere`
--
ALTER TABLE `filiere`
  MODIFY `ID_FILIERE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `module`
--
ALTER TABLE `module`
  MODIFY `ID_MODULE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `note`
--
ALTER TABLE `note`
  MODIFY `ID_NOTE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `absence`
--
ALTER TABLE `absence`
  ADD CONSTRAINT `FK_CONCERNER_1` FOREIGN KEY (`ID_ETUDIANT`) REFERENCES `etudiant` (`ID_ETUDIANT`),
  ADD CONSTRAINT `FK_MARQUER` FOREIGN KEY (`ID_EMPLOYEE`) REFERENCES `employee` (`ID_EMPLOYEE`);

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `FK_PUBLIER` FOREIGN KEY (`ID_EMPLOYEE`) REFERENCES `employee` (`ID_EMPLOYEE`);

--
-- Contraintes pour la table `contenir_1`
--
ALTER TABLE `contenir_1`
  ADD CONSTRAINT `FK_CONTENIR_1` FOREIGN KEY (`ID_FILIERE`) REFERENCES `filiere` (`ID_FILIERE`),
  ADD CONSTRAINT `FK_CONTENIR_3` FOREIGN KEY (`ID_MODULE`) REFERENCES `module` (`ID_MODULE`);

--
-- Contraintes pour la table `element_module`
--
ALTER TABLE `element_module`
  ADD CONSTRAINT `FK_CONTENIR_2` FOREIGN KEY (`ID_MODULE`) REFERENCES `module` (`ID_MODULE`),
  ADD CONSTRAINT `FK_ENSEIGNER` FOREIGN KEY (`ID_EMPLOYEE`) REFERENCES `employee` (`ID_EMPLOYEE`);

--
-- Contraintes pour la table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `FK_AVOIR_2` FOREIGN KEY (`ID_COMPTE`) REFERENCES `compte` (`ID_COMPTE`);

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `FK_AVOIR_1` FOREIGN KEY (`ID_COMPTE`) REFERENCES `compte` (`ID_COMPTE`),
  ADD CONSTRAINT `FK_ETUDIER` FOREIGN KEY (`ID_FILIERE`) REFERENCES `filiere` (`ID_FILIERE`);

--
-- Contraintes pour la table `filiere`
--
ALTER TABLE `filiere`
  ADD CONSTRAINT `FK_APPARTENIR` FOREIGN KEY (`ID_DEPARTEMENT`) REFERENCES `departement` (`ID_DEPARTEMENT`);

--
-- Contraintes pour la table `gerer`
--
ALTER TABLE `gerer`
  ADD CONSTRAINT `FK_GERER` FOREIGN KEY (`ID_EMPLOYEE`) REFERENCES `employee` (`ID_EMPLOYEE`),
  ADD CONSTRAINT `FK_GERER2` FOREIGN KEY (`EMP_ID_EMPLOYEE`) REFERENCES `employee` (`ID_EMPLOYEE`);

--
-- Contraintes pour la table `note`
--
ALTER TABLE `note`
  ADD CONSTRAINT `FK_CONCERNER_2` FOREIGN KEY (`ID_ELEMENT_MODULE`) REFERENCES `element_module` (`ID_ELEMENT_MODULE`),
  ADD CONSTRAINT `FK_VISUALISER` FOREIGN KEY (`ID_ETUDIANT`) REFERENCES `etudiant` (`ID_ETUDIANT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
