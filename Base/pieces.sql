-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 17 juil. 2023 à 13:58
-- Version du serveur : 8.0.30
-- Version de PHP : 8.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `steil_auto`
--

-- --------------------------------------------------------

--
-- Structure de la table `pieces`
--

--
-- Déchargement des données de la table `pieces`
--

INSERT INTO `pieces` (`id`, `categorie_pieces`, `reference`, `nom`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Moteur', '1367504', 'APPAREIL DE SECURITE\n4 TROUS', 'assets/img/pieces/image1.jpg', NULL, '2023-07-17 11:23:54', '2023-07-17 11:23:54'),
(2, 'Moteur', '9347022600', 'APPAREIL 4 CIRCUIT\nAPPAREIL DE SECURITE\n M22', 'assets/img/pieces/image2.jpg', NULL, '2023-07-17 11:23:55', '2023-07-17 11:23:55'),
(3, 'Moteur', '5001837081\nAE4440          ', 'APPAREILDE SECURITE \nPLUSIEUR CIRCUIT\n  M23\n', 'assets/img/pieces/image3.jpg', NULL, '2023-07-17 11:23:55', '2023-07-17 11:23:55'),
(4, 'Moteur', '81521516033\nAE4162', 'APPAREILDE SECURITE \nPLUSIEUR CIRCUIT\n', 'assets/img/pieces/image4.jpg', NULL, '2023-07-17 11:23:55', '2023-07-17 11:23:55'),
(5, 'Moteur', '4730170000', 'APPAREIL DE \nPROTECTION', 'assets/img/pieces/image5.jpg', NULL, '2023-07-17 11:23:55', '2023-07-17 11:23:55'),
(6, 'Moteur', '9730110000\nWG9000360524', 'VALVE RELAIS', 'assets/img/pieces/image6.jpg', NULL, '2023-07-17 11:23:55', '2023-07-17 11:23:55'),
(7, 'Moteur', '9730112050\n\n5010206016', 'VALVE RELAIS', 'assets/img/pieces/image7.jpg', NULL, '2023-07-17 11:23:55', '2023-07-17 11:23:55'),
(8, 'Moteur', '9735000280\n0044292344\n1505154\n9735000280', 'VALVE DE DESSERRAGE \nRAPID', 'assets/img/pieces/image8.jpg', NULL, '2023-07-17 11:23:55', '2023-07-17 11:23:55'),
(9, 'Moteur', 'A0014313006', 'SOUPAPE VALVE DE\n PROTECTION', 'assets/img/pieces/image9.jpg', NULL, '2023-07-17 11:23:55', '2023-07-17 11:23:55'),
(10, 'Moteur', 'A0034314106', 'SOUPAPE VALVE DE\n PROTECTION', 'assets/img/pieces/image10.jpg', NULL, '2023-07-17 11:23:55', '2023-07-17 11:23:55'),
(11, 'Moteur', ' D1382011\n14750152H 3', 'APPAREIL DE BERNAGE', 'assets/img/pieces/image11.jpg', NULL, '2023-07-17 11:23:55', '2023-07-17 11:23:55'),
(12, 'Moteur', 'BKQF34-B', 'APPAREIL DE BERNAGE', 'assets/img/pieces/image12.jpg', NULL, '2023-07-17 11:23:55', '2023-07-17 11:23:55'),
(13, 'Moteur', 'D1380001\nD1380001\n14750430H', 'APPAREIL DE BERNAGE', 'assets/img/pieces/image13.jpg', NULL, '2023-07-17 11:23:55', '2023-07-17 11:23:55'),
(14, 'Moteur', '003 431 5506', 'APPAREIL DISTRIBUTEUR ', 'assets/img/pieces/image14.jpg', NULL, '2023-07-17 11:23:55', '2023-07-17 11:23:55'),
(15, 'Moteur', 'AE4528 ', 'APPAREIL DIRIBUTEUR', 'assets/img/pieces/image15.jpg', NULL, '2023-07-17 11:23:55', '2023-07-17 11:23:55'),
(16, 'Moteur', '5010422604', 'SOUPAPE DE DETECTION \nDE CHARGE', 'assets/img/pieces/image16.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(17, 'Moteur', '9702601057', 'ELECTROVANE 24V', 'assets/img/pieces/image17.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(18, 'Moteur', '12302657', 'DECLENCHEUR BOITE ', 'assets/img/pieces/image18.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(19, 'Moteur', '541L9101\n5000789615', 'DECLENCHEUR DE BOITE ', 'assets/img/pieces/image19.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(20, 'Moteur', 'WG2203250001', 'DECLENCHEUR DE BOITE ', 'assets/img/pieces/image20.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(21, 'Moteur', '81521316017', 'DECLENCHEUR DE BOITE ', 'assets/img/pieces/image21.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(22, 'Moteur', '5000673571\n 27878', 'DELENCHEUR DE BOITE', 'assets/img/pieces/image22.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(23, 'Moteur', '81327346031', 'DELENCHEUR DE BOITE\n\n(GROS TETON)', 'assets/img/pieces/image23.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(24, 'Moteur', '8172628\n1672230', 'DECLENCHEUR DE BOITE', 'assets/img/pieces/image24.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(25, 'Moteur', 'WG2203250003', 'DECLENCHEUR DE BOITE', 'assets/img/pieces/image25.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(26, 'Moteur', '3112823', 'DELENCHEUR DE BOITE\n\nGROS', 'assets/img/pieces/image26.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(27, 'Moteur', '501100029\n3944717', 'DELENCHEUR DE BOITE', 'assets/img/pieces/image27.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(28, 'Moteur', '22327063\n7421710522', 'ELECTROVANE DE BOITE', 'assets/img/pieces/image28.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(29, 'Moteur', '4640023300', 'VALVE DE CONNNTROLE DE LA HAUTEUR\nDE CHASIS', 'assets/img/pieces/image29.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(30, 'Moteur', 'ZB4578\n1443153', 'DESSICATEUR D\'AIR COMPRIMER', 'assets/img/pieces/image30.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(31, 'Moteur', '42535024\nAE4516\nAE4502', 'APPAREIL DISTRIBUTEUR', 'assets/img/pieces/image31.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(32, 'Moteur', 'ZB4734\n5801414923', 'DESSICATEUR COOMPLET', 'assets/img/pieces/image32.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(33, 'Moteur', 'LA8116\nLA8130', 'FILTRE DESICATEUR SIMPLE\nSAN DISTRIBUTEUR', 'assets/img/pieces/image33.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(34, 'Moteur', '5010457873', 'DESSICATEUR COMPLET APM', 'assets/img/pieces/image34.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(35, 'Moteur', '9325000030', 'FILTRE DESICATEUR COMPLET', 'assets/img/pieces/image35.jpg', NULL, '2023-07-17 11:23:56', '2023-07-17 11:23:56'),
(36, 'Moteur', '21352797', 'DESSICATEUR COMPLET APM', 'assets/img/pieces/image36.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(37, 'Moteur', '22358797', 'DESSICATEUR COMPLET APU', 'assets/img/pieces/image37.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(38, 'Moteur', '2148069', 'DESSICATEUR COMPLET APU SANS BRANCHEMENT', 'assets/img/pieces/image38.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(39, 'Moteur', 'A0034311906', 'REGULATEUR DE PRESSION', 'assets/img/pieces/image39.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(40, 'Moteur', '4728800000', 'APPAREIL PNEUMATIC\nECA ', 'assets/img/pieces/image40.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(41, 'Moteur', 'Ø  6*1 14 / Ø  8*1  17 / Ø10*1.25  19 / Ø12*1.5  22', 'TECALON', 'assets/img/pieces/image41.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(42, 'Moteur', NULL, NULL, 'assets/img/pieces/image42.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(43, 'Moteur', NULL, NULL, 'assets/img/pieces/image43.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(44, 'Moteur', NULL, NULL, 'assets/img/pieces/image44.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(45, 'Moteur', '9617230300', ' FREIN A PARKING', 'assets/img/pieces/image45.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(46, 'Moteur', 'A3504307009', ' FREIN A PARKING', 'assets/img/pieces/image46.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(47, 'Moteur', 'A0004305581', ' FREIN A PARKING', 'assets/img/pieces/image47.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(48, 'Moteur', 'A 3644307181', ' FREIN A PARKING', 'assets/img/pieces/image48.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(49, 'Moteur', '4630320200', ' FREIN A PARKING', 'assets/img/pieces/image49.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(50, 'Moteur', ' 7235390008', ' FREIN A PARKING', 'assets/img/pieces/image50.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(51, 'Moteur', '9730093000', 'APPAREIL REMORQUE \n\nM22', 'assets/img/pieces/image51.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(52, 'Moteur', '318158', 'TETED\'ACCOPLEMENT\nPETIT TROUS  ROUGE \n  M16X1.5', 'assets/img/pieces/image52.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(53, 'Moteur', '318159', 'TETED\'ACCOPLEMENT\nPETIT TROUS JAUNE  \n M16X1.5', 'assets/img/pieces/image53.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(54, 'Moteur', '318158', 'TETED\'ACCOPLEMENT\nGROS TROUS', 'assets/img/pieces/image54.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(55, 'Moteur', '318160', 'TETED\'ACCOPLEMENT\nGROS TROUS', 'assets/img/pieces/image55.jpg', NULL, '2023-07-17 11:23:57', '2023-07-17 11:23:57'),
(56, 'Moteur', '4324100760', 'APPAREIL DE FILTRE \nPETEUR (gros trou)', 'assets/img/pieces/image56.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(57, 'Moteur', NULL, 'APPAREIL DE FILTRE\n PETEUR (petit trou)', 'assets/img/pieces/image57.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(58, 'Moteur', '160070044\n1505119', 'TETE DE PETEUR', 'assets/img/pieces/image58.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(59, 'Moteur', 'WG9000270002', 'CLAXON VAPEUR ', 'assets/img/pieces/image59.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(60, 'Moteur', NULL, NULL, 'assets/img/pieces/image60.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(61, 'Moteur', NULL, NULL, 'assets/img/pieces/image61.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(62, 'Moteur', NULL, NULL, 'assets/img/pieces/image62.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(63, 'Moteur', '9254940410\n9253240000\n116724DP          ', 'POMMON DE FREIN ', 'assets/img/pieces/image63.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(64, 'Moteur', '9253211600\n9253213000\n124724DP                ', 'POMMON DE FREIN ', 'assets/img/pieces/image64.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(65, 'Moteur', '9254610000 / 9253212020', 'POUMON DE FREIN  T24', 'assets/img/pieces/image65.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(66, 'Moteur', NULL, NULL, 'assets/img/pieces/image66.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(67, 'Moteur', NULL, NULL, 'assets/img/pieces/image67.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(68, 'Moteur', NULL, NULL, 'assets/img/pieces/image68.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(69, 'Moteur', NULL, NULL, 'assets/img/pieces/image69.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(70, 'Moteur', NULL, 'POUMON DE FREIN  T24', 'assets/img/pieces/image70.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(71, 'Moteur', '81504106620', NULL, 'assets/img/pieces/image71.jpg', NULL, '2023-07-17 11:23:58', '2023-07-17 11:23:58'),
(72, 'Moteur', 'A0194205518', 'CYLINDRE DE FREIN', 'assets/img/pieces/image72.jpg', NULL, '2023-07-17 11:23:59', '2023-07-17 11:23:59'),
(73, 'Moteur', 'A0054200224', 'CYLINDRE DE FREIN', 'assets/img/pieces/image73.jpg', NULL, '2023-07-17 11:23:59', '2023-07-17 11:23:59'),
(74, 'Moteur', '41285149\nFA1095A', 'POMMON DE FREIN ', 'assets/img/pieces/image74.jpg', NULL, '2023-07-17 11:23:59', '2023-07-17 11:23:59'),
(75, 'Moteur', 'FA1095B', 'POMMON DE FREIN ', 'assets/img/pieces/image75.jpg', NULL, '2023-07-17 11:23:59', '2023-07-17 11:23:59'),
(76, 'Moteur', '9710021500', 'APPAREIL DE \nCOMMANDE\n D\'URGENCE', 'assets/img/pieces/image76.jpg', NULL, '2023-07-17 11:23:59', '2023-07-17 11:23:59'),
(77, 'Moteur', '9710021520', 'APPAREIL DE  COMMANDE  D\'URGENCE', 'assets/img/pieces/image77.jpg', NULL, '2023-07-17 11:23:59', '2023-07-17 11:23:59'),
(78, 'Moteur', '110200\n229434\n277446', 'APPAREIL DE  COMMANDE  D\'URGENCE', 'assets/img/pieces/image78.jpg', NULL, '2023-07-17 11:23:59', '2023-07-17 11:23:59'),
(79, 'Moteur', 'KN28601', 'VALVE DE RELAIS \nÀ FONCTION COMPLÈTE', 'assets/img/pieces/image79.jpg', NULL, '2023-07-17 11:23:59', '2023-07-17 11:23:59'),
(80, 'Moteur', '9730025200\n\nA0024314805', 'APPAREIL CENTRAL', 'assets/img/pieces/image80.jpg', NULL, '2023-07-17 11:23:59', '2023-07-17 11:23:59'),
(81, 'Moteur', 'A0014311805', 'SOUPAPE DE PRINCIPALE', 'assets/img/pieces/image81.jpg', NULL, '2023-07-17 11:23:59', '2023-07-17 11:23:59'),
(82, 'Moteur', 'A0004319413', 'SOUPAPE ', 'assets/img/pieces/image82.jpg', NULL, '2023-07-17 11:23:59', '2023-07-17 11:23:59'),
(83, 'Moteur', 'A0004292124', 'MODULE', 'assets/img/pieces/image83.jpg', NULL, '2023-07-17 11:24:00', '2023-07-17 11:24:00'),
(84, 'Moteur', 'A0054296944', 'APPARE DE ABS ET EBS ', 'assets/img/pieces/image84.jpg', NULL, '2023-07-17 11:24:00', '2023-07-17 11:24:00'),
(85, 'Moteur', '740012021', 'APPARE DE ABS ET EBS ', 'assets/img/pieces/image85.jpg', NULL, '2023-07-17 11:24:00', '2023-07-17 11:24:00'),
(86, 'Moteur', 'T12 / T16 / T20 / T24 / T30', 'COUPELLE', 'assets/img/pieces/image86.jpg', NULL, '2023-07-17 11:24:00', '2023-07-17 11:24:00'),
(87, 'Moteur', NULL, NULL, 'assets/img/pieces/image87.jpg', NULL, '2023-07-17 11:24:00', '2023-07-17 11:24:00'),
(88, 'Moteur', NULL, NULL, 'assets/img/pieces/image88.jpg', NULL, '2023-07-17 11:24:00', '2023-07-17 11:24:00'),
(89, 'Moteur', NULL, NULL, 'assets/img/pieces/image89.jpg', NULL, '2023-07-17 11:24:00', '2023-07-17 11:24:00'),
(90, 'Moteur', NULL, NULL, 'assets/img/pieces/image90.jpg', NULL, '2023-07-17 11:24:00', '2023-07-17 11:24:00'),
(91, 'Moteur', '1581329', '7 CONDUCTEUR MALE', 'assets/img/pieces/image91.jpg', NULL, '2023-07-17 11:24:00', '2023-07-17 11:24:00'),
(92, 'Moteur', '8JA003832001', '7 CONDUCTEUR FEMELLE', 'assets/img/pieces/image92.jpg', NULL, '2023-07-17 11:24:00', '2023-07-17 11:24:00'),
(93, 'Moteur', '4527130010', 'SERPENTIN D\'AIR', 'assets/img/pieces/image93.jpg', NULL, '2023-07-17 11:24:00', '2023-07-17 11:24:00'),
(94, 'Moteur', '4527130020', 'SERPENTIN D\'AIR', 'assets/img/pieces/image94.jpg', NULL, '2023-07-17 11:24:00', '2023-07-17 11:24:00'),
(95, 'Moteur', 'DZ9112230166', 'BOOSTER', 'assets/img/pieces/image95.jpg', NULL, '2023-07-17 11:24:00', '2023-07-17 11:24:00'),
(96, 'Moteur', '1602-500520\n9700514230', 'BOOSTER ', 'assets/img/pieces/image96.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(97, 'Moteur', '1346866   \n1241256', 'RECEPTEUR D\'EMBRAYAGE\nBOXEUR', 'assets/img/pieces/image97.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(98, 'Moteur', '1327940', 'RECEPTEUR D\'EMBRAYAGE\nBOXEUR', 'assets/img/pieces/image98.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(99, 'Moteur', '9700514310  \n9700500000', 'RECEPTEUR D\'EMBRAYAGE\nBOXEUR        ', 'assets/img/pieces/image99.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(100, 'Moteur', '5010245488', 'RECEPTEUR D\'EMBRAYAGE\nBOXEUR', 'assets/img/pieces/image100.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(101, 'Moteur', '9700514450', 'RECEPTEUR D\'EMBRAYAGE\nBOXEUR        ', 'assets/img/pieces/image101.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(102, 'Moteur', '625375AM', 'RECEPTEUR D\'EMBRAYAGE\nBOXEUR        ', 'assets/img/pieces/image102.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(103, 'Moteur', '64343\n81307166099\n81307166102', 'BOOSTER', 'assets/img/pieces/image103.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(104, 'Moteur', '9700514240\nWG9725230041\n9700514730\n1602-500520', 'BOOSTER', 'assets/img/pieces/image104.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(105, 'Moteur', 'VG3234', 'RECEPTEUR D\'EMBRAYAGE\nBOXEUR', 'assets/img/pieces/image105.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(106, 'Moteur', 'VG3269  \nVG3289\nK004297', 'RECEPTEUR D\'EMBRAYAGE\nBOXEUR', 'assets/img/pieces/image106.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(107, 'Moteur', '1604Z07-010 \n64209106', 'BOOSTER', 'assets/img/pieces/image107.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(108, 'Moteur', '64203080', 'BOOSTER', 'assets/img/pieces/image108.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(109, 'Moteur', '3412-00069', 'POUMON DE GUIDAGE', 'assets/img/pieces/image109.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(110, 'Moteur', '1608AD', 'BOOSTER EMBRAYAGE  GROS', 'assets/img/pieces/image110.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(111, 'Moteur', '4750102000', 'VALVE DE LIMITATION\n DE PRESSION', 'assets/img/pieces/image111.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(112, 'Moteur', '626392AM\n1504 845', 'BOOSTER', 'assets/img/pieces/image112.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(113, 'Moteur', 'A0002500562\nA0002950218\n1518 252', 'BOOSTER', 'assets/img/pieces/image113.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(114, 'Moteur', '81307259084  81307256084   81307256092', 'BOOSTER', 'assets/img/pieces/image114.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(115, 'Moteur', '1000129485AM', 'BOOSTER EMBRAYAGE', 'assets/img/pieces/image115.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(116, 'Moteur', '22085052', 'BOOSTER EMBRAYAGE', 'assets/img/pieces/image116.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(117, 'Moteur', 'K015875N50', 'BOOSTER EMBRAYAGE', 'assets/img/pieces/image117.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(118, 'Moteur', '9700516010', 'BOOSTER EMBRAYAGE', 'assets/img/pieces/image118.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(119, 'Moteur', '81307006019', 'BOOSTER EMBRAYAGE', 'assets/img/pieces/image119.jpg', NULL, '2023-07-17 11:24:01', '2023-07-17 11:24:01'),
(120, 'Moteur', '1655435', 'BOOSTER EMBRAYAGE', 'assets/img/pieces/image120.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(121, 'Moteur', '360717', 'BOOSTER EMBRAYAGE', 'assets/img/pieces/image121.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(122, 'Moteur', '81.52310.6149\nB283778\nDZ9100360080', 'APPAREIL DE FREIN', 'assets/img/pieces/image122.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(123, 'Moteur', '1337184', 'APPAREIL DE FREIN', 'assets/img/pieces/image123.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(124, 'Moteur', 'A0044312205', 'SOUPAPE DE FREIN PRINCIPALE', 'assets/img/pieces/image124.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(125, 'Moteur', 'A0044315905\n320049001\n4613152587', 'SOUPAPE DE FREIN ', 'assets/img/pieces/image125.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(126, 'Moteur', 'A0044316205', 'SOUPAPE DE FREIN', 'assets/img/pieces/image126.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(127, 'Moteur', 'A3454317005', 'SOUPAPE DE FREIN', 'assets/img/pieces/image127.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(128, 'Moteur', 'A0002607398', 'BOITIE DE COMANDE', 'assets/img/pieces/image128.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(129, 'Moteur', '42536194', 'GALLET ', 'assets/img/pieces/image129.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(130, 'Moteur', '10550673\nHXF33Q-G20L4', 'VALVE DE BERNAGE', 'assets/img/pieces/image130.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(131, 'Moteur', '4V220-08\n6108-01193', 'ELECTROVANE DE PORTIARE', 'assets/img/pieces/image131.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(132, 'Moteur', '4935573', 'ELECTROVANE / ARRET MOTEUR\nCOUP MOTEUR', 'assets/img/pieces/image132.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(133, 'Moteur', '3977620', 'ELECTROVANE', 'assets/img/pieces/image133.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(134, 'Moteur', '3973958', 'ELECTROVANE', 'assets/img/pieces/image134.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(135, 'Moteur', '2901-00395', 'BALLON     /    COUSSIN D\'AIR', 'assets/img/pieces/image135.jpg', NULL, '2023-07-17 11:24:02', '2023-07-17 11:24:02'),
(136, 'Moteur', '2M-1', 'ACCORDRION', 'assets/img/pieces/image136.jpg', NULL, '2023-07-17 11:24:03', '2023-07-17 11:24:03'),
(137, 'Moteur', 'PT-201605270746', 'ACCORDRION', 'assets/img/pieces/image137.jpg', NULL, '2023-07-17 11:24:03', '2023-07-17 11:24:03'),
(138, 'Moteur', NULL, NULL, 'assets/img/pieces/image138.jpg', NULL, '2023-07-17 11:24:03', '2023-07-17 11:24:03'),
(139, 'Moteur', NULL, NULL, 'assets/img/pieces/image139.jpg', NULL, '2023-07-17 11:24:03', '2023-07-17 11:24:03'),
(140, 'Moteur', NULL, NULL, 'assets/img/pieces/image140.jpg', NULL, '2023-07-17 11:24:03', '2023-07-17 11:24:03'),
(141, 'Moteur', '8541723611', 'CRIQUE DE CABINE', 'assets/img/pieces/image141.jpg', NULL, '2023-07-17 11:24:03', '2023-07-17 11:24:03'),
(142, 'Moteur', '85417236022', 'CRIQUE DE CABINE', 'assets/img/pieces/image142.jpg', NULL, '2023-07-17 11:24:03', '2023-07-17 11:24:03'),
(143, 'Moteur', '81963010900', 'DURITE', 'assets/img/pieces/image143.jpg', NULL, '2023-07-17 11:24:03', '2023-07-17 11:24:03'),
(144, 'Moteur', '1124136600010', 'SOUPAPE DE PRESSION ', 'assets/img/pieces/image144.jpg', NULL, '2023-07-17 11:24:03', '2023-07-17 11:24:03');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `pieces`
--
ALTER TABLE `pieces`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `pieces`
--
ALTER TABLE `pieces`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
