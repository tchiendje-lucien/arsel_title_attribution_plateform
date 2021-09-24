-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 09 sep. 2021 à 12:32
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `arsel_crowfunding`
--

-- --------------------------------------------------------

--
-- Structure de la table `activites`
--

CREATE TABLE `activites` (
  `ID_ACTIVITE` int(11) NOT NULL,
  `LIBELLE_ACTIVITE` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `activites`
--

INSERT INTO `activites` (`ID_ACTIVITE`, `LIBELLE_ACTIVITE`) VALUES
(1, 'Production'),
(2, 'Stockage d\'eau'),
(3, 'Distribution'),
(4, 'Import / export'),
(5, 'Vente'),
(6, 'Réseau de transport');

-- --------------------------------------------------------

--
-- Structure de la table `activites_regimes`
--

CREATE TABLE `activites_regimes` (
  `ID_ACTIVE_REGIME` int(11) NOT NULL,
  `ID_REGIME` smallint(6) NOT NULL,
  `ID_ACTIVITE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `activites_regimes`
--

INSERT INTO `activites_regimes` (`ID_ACTIVE_REGIME`, `ID_REGIME`, `ID_ACTIVITE`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 5),
(4, 2, 4);

-- --------------------------------------------------------

--
-- Structure de la table `arrondissements`
--

CREATE TABLE `arrondissements` (
  `ID_ARRONDISSEMENT` int(11) NOT NULL,
  `ID_DEPARTEMENT` int(11) NOT NULL,
  `LIBELLE_ARRONDISSELENT` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `arrondissements`
--

INSERT INTO `arrondissements` (`ID_ARRONDISSEMENT`, `ID_DEPARTEMENT`, `LIBELLE_ARRONDISSELENT`) VALUES
(15, 7, 'Yaosqd'),
(16, 7, 'Yaosqd'),
(17, 8, 'Yaosqd'),
(18, 7, 'sdsqd'),
(19, 7, 'sdsqd'),
(20, 7, 'Yaounde 2'),
(21, 7, 'Yaounde 2'),
(22, 7, 'Yaosqd');

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

CREATE TABLE `departement` (
  `ID_DPT` int(11) NOT NULL,
  `LIBELLE_DPT` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`ID_DPT`, `LIBELLE_DPT`) VALUES
(1, 'Informatique'),
(2, 'Régulation');

-- --------------------------------------------------------

--
-- Structure de la table `departements`
--

CREATE TABLE `departements` (
  `ID_DEPARTEMENT` int(11) NOT NULL,
  `ID_REGION` int(11) NOT NULL,
  `LIBELLE_DEPATEMENT` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `departements`
--

INSERT INTO `departements` (`ID_DEPARTEMENT`, `ID_REGION`, `LIBELLE_DEPATEMENT`) VALUES
(7, 1, 'Mfoundi'),
(8, 2, 'Moungo'),
(9, 2, 'Wouri'),
(10, 1, 'Nyon ekele'),
(11, 1, 'Nfou');

-- --------------------------------------------------------

--
-- Structure de la table `images_site`
--

CREATE TABLE `images_site` (
  `ID_IMAGE_SITE` int(10) UNSIGNED NOT NULL,
  `ID_SITE` int(11) DEFAULT NULL,
  `LIBELLE_IMAGE` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `images_site`
--

INSERT INTO `images_site` (`ID_IMAGE_SITE`, `ID_SITE`, `LIBELLE_IMAGE`) VALUES
(1, 2, 'hilton0.jpg'),
(2, 3, 'hilton21.jpg'),
(3, 4, '6139db6677ac2.jpg'),
(4, 5, '6139dc4f95387.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `publication_site`
--

CREATE TABLE `publication_site` (
  `ID_PUB` int(11) NOT NULL,
  `ID_SITE` int(11) NOT NULL,
  `DATE_PUB` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `publication_site`
--

INSERT INTO `publication_site` (`ID_PUB`, `ID_SITE`, `DATE_PUB`) VALUES
(1, 2, '2021-09-09 09:50:52.000000'),
(2, 3, '2021-09-09 09:53:26.000000'),
(3, 4, '2021-09-09 10:01:11.000000'),
(4, 5, '2021-09-09 10:05:04.000000');

-- --------------------------------------------------------

--
-- Structure de la table `quartiers`
--

CREATE TABLE `quartiers` (
  `ID_QUARTIER` int(11) NOT NULL,
  `LIBELLE_QUARTIER` varchar(255) NOT NULL,
  `ID_ARRONDISSEMENT` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `quartiers`
--

INSERT INTO `quartiers` (`ID_QUARTIER`, `LIBELLE_QUARTIER`, `ID_ARRONDISSEMENT`) VALUES
(4, 'qsdsqd', 15),
(5, 'qsdsqd', 16),
(6, 'qsdsqd', 17),
(7, 'qsdsqd', 18),
(8, 'qsdsqd', 19),
(9, 'Tsinga', 20),
(10, 'Bastos', 21),
(11, 'Tsinga', 22);

-- --------------------------------------------------------

--
-- Structure de la table `regimes`
--

CREATE TABLE `regimes` (
  `ID_REGIME` smallint(6) NOT NULL,
  `LIBELLE_REGIME` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `regimes`
--

INSERT INTO `regimes` (`ID_REGIME`, `LIBELLE_REGIME`) VALUES
(1, 'Concession'),
(2, 'Licence'),
(3, 'Déclaration'),
(4, 'Liberté'),
(5, 'Autorisation');

-- --------------------------------------------------------

--
-- Structure de la table `regions`
--

CREATE TABLE `regions` (
  `ID_REGION` int(11) NOT NULL,
  `LIBELLE_REGION` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `regions`
--

INSERT INTO `regions` (`ID_REGION`, `LIBELLE_REGION`) VALUES
(1, 'Centre'),
(2, 'Littoral'),
(3, 'Ouest'),
(4, 'Est'),
(5, 'Nord'),
(6, 'Nord-Ouest'),
(7, 'Nord-Est'),
(8, 'Sud'),
(9, 'Sud-Ouest'),
(10, 'Sud-Est');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `ID_ROLE` bigint(4) NOT NULL,
  `LIBELLE_ROLE` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`ID_ROLE`, `LIBELLE_ROLE`) VALUES
(1, 'Administrateur'),
(2, 'Super administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `sites`
--

CREATE TABLE `sites` (
  `ID_SITE` int(11) NOT NULL,
  `ID_REGIME` smallint(6) NOT NULL,
  `ID_USER` int(11) NOT NULL,
  `ID_ARRONDISSELENT` int(11) NOT NULL,
  `ID_EXPLOITANT` int(11) NOT NULL,
  `ID_SOURCE_ENR` int(11) NOT NULL,
  `LIBELLE_SITE` varchar(255) NOT NULL,
  `DESCRIPTION_SITE` text NOT NULL,
  `CAPACITE_SITE` decimal(15,0) NOT NULL,
  `DATE_CREATE` datetime NOT NULL,
  `DATE_UPDATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `sites`
--

INSERT INTO `sites` (`ID_SITE`, `ID_REGIME`, `ID_USER`, `ID_ARRONDISSELENT`, `ID_EXPLOITANT`, `ID_SOURCE_ENR`, `LIBELLE_SITE`, `DESCRIPTION_SITE`, `CAPACITE_SITE`, `DATE_CREATE`, `DATE_UPDATE`) VALUES
(1, 1, 13, 18, 1, 5, 'dfsfdsf', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, perspiciatis. Sit quisquam officia in quos iste consectetur nisi saepe ex eos sint debitis sapiente, quam rem, perferendis eligendi hic ea!', '15', '2021-09-09 09:49:59', '2021-09-09 09:49:59'),
(2, 1, 13, 19, 1, 5, 'dfsfdsf', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, perspiciatis. Sit quisquam officia in quos iste consectetur nisi saepe ex eos sint debitis sapiente, quam rem, perferendis eligendi hic ea!', '15', '2021-09-09 09:50:52', '2021-09-09 09:50:52'),
(3, 2, 13, 20, 1, 5, 'Toto', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, perspiciatis. Sit quisquam officia in quos iste consectetur nisi saepe ex eos sint debitis sapiente, quam rem, perferendis eligendi hic ea!', '16', '2021-09-09 09:53:26', '2021-09-09 09:53:26'),
(4, 1, 13, 21, 1, 6, 'Chevre', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, perspiciatis. Sit quisquam officia in quos iste consectetur nisi saepe ex eos sint debitis sapiente, quam rem, perferendis eligendi hic ea!', '2', '2021-09-09 10:01:10', '2021-09-09 10:01:10'),
(5, 2, 13, 22, 1, 8, 'Toto', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, perspiciatis. Sit quisquam officia in quos iste consectetur nisi saepe ex eos sint debitis sapiente, quam rem, perferendis eligendi hic ea!', '2321', '2021-09-09 10:05:03', '2021-09-09 10:05:03');

-- --------------------------------------------------------

--
-- Structure de la table `source_energie`
--

CREATE TABLE `source_energie` (
  `ID_SOURCE_ENR` int(11) NOT NULL,
  `LIBELLE_SOURCE_ENR` char(255) NOT NULL,
  `DESCRIPTION_ENER` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `source_energie`
--

INSERT INTO `source_energie` (`ID_SOURCE_ENR`, `LIBELLE_SOURCE_ENR`, `DESCRIPTION_ENER`) VALUES
(5, 'Énergie hydroélectrique', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, perspiciatis. Sit quisquam officia in quos iste consectetur nisi saepe ex eos sint debitis sapiente, quam rem, perferendis eligendi hic ea!'),
(6, 'Énergie nucléaire', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, perspiciatis. Sit quisquam officia in quos iste consectetur nisi saepe ex eos sint debitis sapiente, quam rem, perferendis eligendi hic ea!'),
(7, 'Énergie thermique', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, perspiciatis. Sit quisquam officia in quos iste consectetur nisi saepe ex eos sint debitis sapiente, quam rem, perferendis eligendi hic ea!'),
(8, 'Énergie éolienne', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, perspiciatis. Sit quisquam officia in quos iste consectetur nisi saepe ex eos sint debitis sapiente, quam rem, perferendis eligendi hic ea!'),
(9, 'Rayonnement solaire', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, perspiciatis. Sit quisquam officia in quos iste consectetur nisi saepe ex eos sint debitis sapiente, quam rem, perferendis eligendi hic ea!'),
(10, 'Géothermie', 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis, perspiciatis. Sit quisquam officia in quos iste consectetur nisi saepe ex eos sint debitis sapiente, quam rem, perferendis eligendi hic ea!'),
(11, 'Biomasse', '');

-- --------------------------------------------------------

--
-- Structure de la table `type_exploitation`
--

CREATE TABLE `type_exploitation` (
  `ID_EXPLOITANT` int(11) NOT NULL,
  `LIBELLE_EXPLOITANT` char(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `type_exploitation`
--

INSERT INTO `type_exploitation` (`ID_EXPLOITANT`, `LIBELLE_EXPLOITANT`) VALUES
(1, 'Renouvelable');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `ID_USER` int(11) NOT NULL,
  `ID_ROLE` bigint(4) NOT NULL,
  `ID_DPT` int(11) NOT NULL,
  `EMAIL` char(255) NOT NULL,
  `PASSWORD` char(255) NOT NULL,
  `NOM` varchar(128) NOT NULL,
  `PRENOM` varchar(128) NOT NULL,
  `IS_ADMIN` tinyint(1) NOT NULL,
  `DATE_CREATE` datetime NOT NULL,
  `DATE_UPDATE` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`ID_USER`, `ID_ROLE`, `ID_DPT`, `EMAIL`, `PASSWORD`, `NOM`, `PRENOM`, `IS_ADMIN`, `DATE_CREATE`, `DATE_UPDATE`) VALUES
(1, 2, 2, 'edimoyvan@gmail.com', '$2y$10$7gaY0YEtDAGOlyYbX9k0z.AbnqBJASKbBHWLmGyGVXy1E/oPJuekO', 'Edimo', 'Yavn', 1, '2021-09-02 17:13:51', '2021-09-06 08:35:39'),
(2, 1, 1, 'lucien.tchiendje@kimia-technologies.com', '$2y$10$YF0F/YuDfkw9B/uLEr4tzuy.kR5EhK/GwoAqRP4cctQCLNQO/0bim', 'Arole', 'Tapelle', 0, '2021-09-02 20:33:16', '2021-09-03 16:32:10'),
(3, 1, 1, 'lucien.tchiendje@kimia-technologies.com', '$2y$10$yrJ6KrjDwa.vIwN.H39sKecQSIFqyZJk0ko8YUINDADcUzas3IBgm', 'xwc', 'xwc', 0, '2021-09-02 20:34:50', '2021-09-02 20:34:50'),
(4, 1, 1, 'lucien.tchiendje@kimia-technologies.co', '$2y$10$m25.nXNHz6PyUQAFeguL1usI26Zj7CfsGf61l8c5E0XvbrilxwGuq', 'Lucien', 'Didier', 1, '2021-09-02 21:45:57', '2021-09-02 21:45:57'),
(5, 1, 2, 'lucwlaker@gmail.com', '$2y$10$pqspvhS/OfG6hGjVmlN.Bu0WMMuM/P4xMDuLKo.xVX4ZgIrNOOhU.', 'Lucs', 'Walker', 1, '2021-09-03 13:32:24', '2021-09-03 16:05:24'),
(6, 1, 1, 'sergebertrand@gmail.com', '$2y$10$Nl7/DKNr7pgl8Dog7XJeWuxnxI/O3uxegmF5JpooTUxLr9C3oJWqC', 'Serge', 'Bertrand', 1, '2021-09-04 11:11:16', '2021-09-04 11:17:16'),
(7, 1, 2, 'ivanevainciane@gmail.com', '$2y$10$lhF7ow9e3OYO6qmoxoePyegS.Zm9JYa27dhmqUkHi/Xand1JeJfXW', 'Ivane', 'Vainciane', 1, '2021-09-08 14:53:52', '2021-09-08 14:53:52'),
(8, 1, 1, 'lucwalker@gmail.com', '$2y$10$NvH3pXQU.J3ucR9wm.dMDuwuZMrRe89fFfsAOhJvVuIQ6r5m6LH1K', 'Luc', 'Walker', 1, '2021-09-09 09:39:30', '2021-09-09 09:39:30'),
(9, 1, 1, 'tttt@fdg.com', '$2y$10$xp5osMoEIqrbUnl8fGxGRu5BhDp5Wzbly02Ico0i5a9xq29WJLs4G', 'dsqd', 'qsdsqd', 1, '2021-09-09 09:40:19', '2021-09-09 09:40:19'),
(10, 1, 2, 'lucielucienne@gmail.com', '$2y$10$rdwI6q1GJZ1Y/9j/bdNEneq1HMQflRe7Qsh7Lo6uVXUWW1pQhymKG', 'Lucie', 'Lucienne', 1, '2021-09-09 09:41:08', '2021-09-09 09:41:08'),
(11, 1, 1, 'lucien.tchiendje@kimia-technologies.comsq', '$2y$10$45je6rdtEkLoKewtVs/ulO7gy.DHODlaFND5YVjME2bKj22BtfavG', 'dqsdsqd', 'qsdsqd', 1, '2021-09-09 09:41:26', '2021-09-09 09:41:26'),
(12, 1, 1, 'aliba@gmail.com', '$2y$10$BaV73Ov1JKIxuu2VsYU0IumANNdda1.vgJ0EEfLZorssN5.h7oYCe', 'ali', 'ba', 1, '2021-09-09 09:41:54', '2021-09-09 09:41:54'),
(13, 1, 1, 'carellelea@gmail.com', '$2y$10$oeHVrn4qyuDVM7JqHf7IoeTkwXUFU2aHLYVcYHgsZgjKoIfyNw5fK', 'Carelle', 'Lea', 1, '2021-09-09 09:43:17', '2021-09-09 09:43:17');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `activites`
--
ALTER TABLE `activites`
  ADD PRIMARY KEY (`ID_ACTIVITE`);

--
-- Index pour la table `activites_regimes`
--
ALTER TABLE `activites_regimes`
  ADD PRIMARY KEY (`ID_ACTIVE_REGIME`),
  ADD KEY `I_FK_ACTIVIE_REGIME_REGIMES` (`ID_REGIME`),
  ADD KEY `I_FK_ACTIVIE_REGIME_ACTIVITES` (`ID_ACTIVITE`);

--
-- Index pour la table `arrondissements`
--
ALTER TABLE `arrondissements`
  ADD PRIMARY KEY (`ID_ARRONDISSEMENT`),
  ADD KEY `I_FK_ARRONDISSEMENTS_DEPARTEMENTS` (`ID_DEPARTEMENT`);

--
-- Index pour la table `departement`
--
ALTER TABLE `departement`
  ADD PRIMARY KEY (`ID_DPT`);

--
-- Index pour la table `departements`
--
ALTER TABLE `departements`
  ADD PRIMARY KEY (`ID_DEPARTEMENT`),
  ADD KEY `I_FK_DEPARTEMENTS_REGIONS` (`ID_REGION`);

--
-- Index pour la table `images_site`
--
ALTER TABLE `images_site`
  ADD PRIMARY KEY (`ID_IMAGE_SITE`),
  ADD KEY `ID_SITES` (`ID_SITE`);

--
-- Index pour la table `publication_site`
--
ALTER TABLE `publication_site`
  ADD PRIMARY KEY (`ID_PUB`),
  ADD KEY `ID_SITE` (`ID_SITE`);

--
-- Index pour la table `quartiers`
--
ALTER TABLE `quartiers`
  ADD PRIMARY KEY (`ID_QUARTIER`),
  ADD KEY `ID_ARRONDISSEMENT` (`ID_ARRONDISSEMENT`);

--
-- Index pour la table `regimes`
--
ALTER TABLE `regimes`
  ADD PRIMARY KEY (`ID_REGIME`);

--
-- Index pour la table `regions`
--
ALTER TABLE `regions`
  ADD PRIMARY KEY (`ID_REGION`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID_ROLE`);

--
-- Index pour la table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`ID_SITE`),
  ADD KEY `I_FK_SITES_REGIMES` (`ID_REGIME`),
  ADD KEY `I_FK_SITES_USERS` (`ID_USER`),
  ADD KEY `I_FK_SITES_ARRONDISSEMENTS` (`ID_ARRONDISSELENT`),
  ADD KEY `I_FK_SITES_TYPE_EXPLOITATION` (`ID_EXPLOITANT`),
  ADD KEY `I_FK_SITES_SOURCE_ENERGIE` (`ID_SOURCE_ENR`);

--
-- Index pour la table `source_energie`
--
ALTER TABLE `source_energie`
  ADD PRIMARY KEY (`ID_SOURCE_ENR`);

--
-- Index pour la table `type_exploitation`
--
ALTER TABLE `type_exploitation`
  ADD PRIMARY KEY (`ID_EXPLOITANT`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_USER`),
  ADD KEY `I_FK_USERS_ROLES` (`ID_ROLE`),
  ADD KEY `I_FK_USERS_DEPARTEMENT` (`ID_DPT`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `activites`
--
ALTER TABLE `activites`
  MODIFY `ID_ACTIVITE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `activites_regimes`
--
ALTER TABLE `activites_regimes`
  MODIFY `ID_ACTIVE_REGIME` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `arrondissements`
--
ALTER TABLE `arrondissements`
  MODIFY `ID_ARRONDISSEMENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `departement`
--
ALTER TABLE `departement`
  MODIFY `ID_DPT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `departements`
--
ALTER TABLE `departements`
  MODIFY `ID_DEPARTEMENT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `images_site`
--
ALTER TABLE `images_site`
  MODIFY `ID_IMAGE_SITE` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `publication_site`
--
ALTER TABLE `publication_site`
  MODIFY `ID_PUB` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `quartiers`
--
ALTER TABLE `quartiers`
  MODIFY `ID_QUARTIER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `regimes`
--
ALTER TABLE `regimes`
  MODIFY `ID_REGIME` smallint(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `regions`
--
ALTER TABLE `regions`
  MODIFY `ID_REGION` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `ID_ROLE` bigint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `sites`
--
ALTER TABLE `sites`
  MODIFY `ID_SITE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `source_energie`
--
ALTER TABLE `source_energie`
  MODIFY `ID_SOURCE_ENR` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `type_exploitation`
--
ALTER TABLE `type_exploitation`
  MODIFY `ID_EXPLOITANT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `ID_USER` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `activites_regimes`
--
ALTER TABLE `activites_regimes`
  ADD CONSTRAINT `FK_ACTIVIE_REGIME_ACTIVITES` FOREIGN KEY (`ID_ACTIVITE`) REFERENCES `activites` (`ID_ACTIVITE`),
  ADD CONSTRAINT `FK_ACTIVIE_REGIME_REGIMES` FOREIGN KEY (`ID_REGIME`) REFERENCES `regimes` (`ID_REGIME`);

--
-- Contraintes pour la table `arrondissements`
--
ALTER TABLE `arrondissements`
  ADD CONSTRAINT `FK_ARRONDISSEMENTS_DEPARTEMENTS` FOREIGN KEY (`ID_DEPARTEMENT`) REFERENCES `departements` (`ID_DEPARTEMENT`);

--
-- Contraintes pour la table `departements`
--
ALTER TABLE `departements`
  ADD CONSTRAINT `FK_DEPARTEMENTS_REGIONS` FOREIGN KEY (`ID_REGION`) REFERENCES `regions` (`ID_REGION`);

--
-- Contraintes pour la table `images_site`
--
ALTER TABLE `images_site`
  ADD CONSTRAINT `ID_SITES` FOREIGN KEY (`ID_SITE`) REFERENCES `sites` (`ID_SITE`);

--
-- Contraintes pour la table `publication_site`
--
ALTER TABLE `publication_site`
  ADD CONSTRAINT `ID_SITE` FOREIGN KEY (`ID_SITE`) REFERENCES `sites` (`ID_SITE`);

--
-- Contraintes pour la table `quartiers`
--
ALTER TABLE `quartiers`
  ADD CONSTRAINT `ID_ARRONDISSEMENT` FOREIGN KEY (`ID_ARRONDISSEMENT`) REFERENCES `arrondissements` (`ID_ARRONDISSEMENT`);

--
-- Contraintes pour la table `sites`
--
ALTER TABLE `sites`
  ADD CONSTRAINT `FK_SITES_ARRONDISSEMENTS` FOREIGN KEY (`ID_ARRONDISSELENT`) REFERENCES `arrondissements` (`ID_ARRONDISSEMENT`),
  ADD CONSTRAINT `FK_SITES_REGIMES` FOREIGN KEY (`ID_REGIME`) REFERENCES `regimes` (`ID_REGIME`),
  ADD CONSTRAINT `FK_SITES_SOURCE_ENERGIE` FOREIGN KEY (`ID_SOURCE_ENR`) REFERENCES `source_energie` (`ID_SOURCE_ENR`),
  ADD CONSTRAINT `FK_SITES_TYPE_EXPLOITATION` FOREIGN KEY (`ID_EXPLOITANT`) REFERENCES `type_exploitation` (`ID_EXPLOITANT`),
  ADD CONSTRAINT `FK_SITES_USERS` FOREIGN KEY (`ID_USER`) REFERENCES `users` (`ID_USER`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `FK_USERS_DEPARTEMENT` FOREIGN KEY (`ID_DPT`) REFERENCES `departement` (`ID_DPT`),
  ADD CONSTRAINT `FK_USERS_ROLES` FOREIGN KEY (`ID_ROLE`) REFERENCES `roles` (`ID_ROLE`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
