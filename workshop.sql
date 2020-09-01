-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 01, 2020 at 06:53 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `billeterie`
--

CREATE TABLE `billeterie` (
  `id_billet` int(11) NOT NULL,
  `num_billet` varchar(50) NOT NULL,
  `Acces` varchar(50) NOT NULL,
  `Rang` varchar(50) NOT NULL,
  `Place` varchar(100) NOT NULL,
  `id_match` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `commande`
--

CREATE TABLE `commande` (
  `id_commande` int(11) NOT NULL,
  `NumeroDeCommande` varchar(20) NOT NULL,
  `NomDuClient` varchar(50) NOT NULL,
  `DetailsDeLaCommande` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `produit`
--

CREATE TABLE `produit` (
  `id_produit` int(11) NOT NULL,
  `Produit` varchar(50) NOT NULL,
  `PrixTTC` int(200) NOT NULL,
  `Description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `produit`
--

INSERT INTO `produit` (`id_produit`, `Produit`, `PrixTTC`, `Description`) VALUES
(1, 'Maillot Adidas Juventus', 200, 'Maillot tres cher ');

-- --------------------------------------------------------

--
-- Table structure for table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_user` int(11) NOT NULL,
  `Civilité` enum('Homme','Femme','Autre','') DEFAULT NULL,
  `Prenom` varchar(50) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Addresse` varchar(50) DEFAULT NULL,
  `AddresseFacultative` varchar(50) DEFAULT NULL,
  `Ville` varchar(50) DEFAULT NULL,
  `CodePostal` varchar(50) DEFAULT NULL,
  `Telephone` varchar(20) DEFAULT NULL,
  `Email` varchar(100) NOT NULL,
  `MotDePasse` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `utilisateur`
--

INSERT INTO `utilisateur` (`id_user`, `Civilité`, `Prenom`, `Nom`, `Addresse`, `AddresseFacultative`, `Ville`, `CodePostal`, `Telephone`, `Email`, `MotDePasse`) VALUES
(1, '', 'Cedric', 'Cai', '', '', '', '', '0623712786', 'cai.cedric.95@gmail.com', 'azerty'),
(2, NULL, 'Jean Daniel', 'Kissila', NULL, NULL, NULL, NULL, NULL, 'jdk@gmail.com', 'azerty'),
(3, NULL, 'James', 'Zhang', NULL, NULL, NULL, NULL, NULL, 'james@gmail.com', 'azerty'),
(4, NULL, 'richard', 'kali', NULL, NULL, NULL, NULL, NULL, 'kali@gmail.com', 'azerty'),
(5, NULL, 'Cedric', 'Cai', NULL, NULL, NULL, NULL, NULL, 'cai.cedric.95@gmail.fr', 'azerty');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billeterie`
--
ALTER TABLE `billeterie`
  ADD PRIMARY KEY (`id_billet`);

--
-- Indexes for table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id_commande`);

--
-- Indexes for table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id_produit`);

--
-- Indexes for table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billeterie`
--
ALTER TABLE `billeterie`
  MODIFY `id_billet` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `commande`
--
ALTER TABLE `commande`
  MODIFY `id_commande` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produit`
--
ALTER TABLE `produit`
  MODIFY `id_produit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
