-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 17 juil. 2023 à 13:53
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
-- Structure de la table `engins`
--

CREATE TABLE `engins` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `engins`
--

INSERT INTO `engins` (`id`, `nom`, `image`, `description`, `created_at`, `updated_at`) VALUES
(22, 'Volvo Trucks VH16', 'assets/img/engin/1689409686.jfif', NULL, '2023-07-15 06:28:06', '2023-07-15 06:28:06'),
(23, 'Volvo Trucks FL', 'assets/img/engin/1689409730.jfif', NULL, '2023-07-15 06:28:50', '2023-07-15 06:28:50'),
(24, 'Scania L Serie', 'assets/img/engin/1689409865.webp', NULL, '2023-07-15 06:31:05', '2023-07-15 06:31:05'),
(25, 'Mercedes Benz Actros', 'assets/img/engin/1689410165.jpg', NULL, '2023-07-15 06:36:05', '2023-07-15 06:36:05'),
(26, 'Scania p94', 'assets/img/engin/1689410620.jpg', NULL, '2023-07-15 06:43:40', '2023-07-15 06:43:40'),
(27, 'Saic Iveco Hongyan Genlyon', 'assets/img/engin/1689410724.jpg', NULL, '2023-07-15 06:45:24', '2023-07-15 06:45:24'),
(28, 'Shacman F3000', 'assets/img/engin/1689410805.jpg', NULL, '2023-07-15 06:46:45', '2023-07-15 06:46:45');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `images`
--

CREATE TABLE `images` (
  `id` bigint UNSIGNED NOT NULL,
  `engin_id` bigint UNSIGNED DEFAULT NULL,
  `piece_id` bigint UNSIGNED DEFAULT NULL,
  `realisation_id` bigint UNSIGNED DEFAULT NULL,
  `chemin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

CREATE TABLE `marques` (
  `id` bigint UNSIGNED NOT NULL,
  `chemin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `marques`
--

INSERT INTO `marques` (`id`, `chemin`, `created_at`, `updated_at`) VALUES
(1, 'https://upload.wikimedia.org/wikipedia/fr/thumb/d/de/Mazda.svg/1200px-Mazda.svg.png', '2023-07-17 11:22:50', '2023-07-17 11:22:50'),
(2, 'https://assets.stickpng.com/images/580b57fcd9996e24bc43c46e.png', '2023-07-17 11:22:50', '2023-07-17 11:22:50'),
(3, 'https://logo-marque.com/wp-content/uploads/2020/08/Caterpillar-Logo.png', '2023-07-17 11:22:50', '2023-07-17 11:22:50'),
(4, 'https://logos-marques.com/wp-content/uploads/2021/02/Mitsubishi-Logo.png', '2023-07-17 11:22:50', '2023-07-17 11:22:50'),
(5, 'https://www.couderc-materiels.fr/wp-content/uploads/2021/01/logo-JCB.png', '2023-07-17 11:22:50', '2023-07-17 11:22:50'),
(6, 'https://www.couderc-materiels.fr/wp-content/uploads/2021/01/logo-JCB.png ', '2023-07-17 11:22:50', '2023-07-17 11:22:50'),
(7, 'https://news.via-mobilis.com/46898_1.jpg', '2023-07-17 11:22:50', '2023-07-17 11:22:50');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_06_27_173227_create_pieces_table', 1),
(7, '2023_06_27_173236_create_engins_table', 1),
(8, '2023_06_28_190747_create_marques_table', 1),
(9, '2023_06_29_101251_create_realisation_categories_table', 1),
(10, '2023_06_29_101260_create_realisations_table', 1),
(11, '2023_06_29_101749_create_images_table', 1),
(12, '2023_07_05_121344_create_testimonials_table', 1),
(13, '2023_07_12_121324_create_pieces_detaillers_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pieces`
--

CREATE TABLE `pieces` (
  `id` bigint UNSIGNED NOT NULL,
  `categorie_pieces` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Structure de la table `pieces_detaillers`
--

CREATE TABLE `pieces_detaillers` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `realisations`
--

CREATE TABLE `realisations` (
  `id` bigint UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_categories_realisations` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `realisation_categories`
--

CREATE TABLE `realisation_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fonction` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Particulier',
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'assets/img/temoignages/default.avif',
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `testimonials`
--

INSERT INTO `testimonials` (`id`, `nom`, `fonction`, `image`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Ms. Idell Keebler', 'Office Clerk', 'assets/img/temoignages/default.avif', 'Et aut non asperiores beatae necessitatibus. Reprehenderit quia id maiores eos minus. Velit aut temporibus rem.', '2023-07-17 11:22:50', '2023-07-17 11:22:50'),
(2, 'Elyssa Barrows', 'Public Transportation Inspector', 'assets/img/temoignages/default.avif', 'Voluptatibus sequi et sapiente voluptatem alias qui omnis quae. Aspernatur quaerat optio adipisci odio et. Aut in aut eligendi est saepe et.', '2023-07-17 11:22:50', '2023-07-17 11:22:50'),
(3, 'Moises Beatty III', 'Highway Patrol Pilot', 'assets/img/temoignages/default.avif', 'Velit voluptatem veritatis odio fugit nobis. Ut nam facere ad et. Est sit aliquid sunt hic neque. Sit tempora aut beatae incidunt voluptas sequi eum.', '2023-07-17 11:22:50', '2023-07-17 11:22:50'),
(4, 'Claudie D\'Amore', 'Camera Operator', 'assets/img/temoignages/default.avif', 'Dolorem modi temporibus sequi ut doloribus dicta. Commodi et cupiditate quasi totam et. Totam eos pariatur et aliquam reiciendis modi doloribus.', '2023-07-17 11:22:50', '2023-07-17 11:22:50'),
(5, 'Tremaine Farrell II', 'Gas Plant Operator', 'assets/img/temoignages/default.avif', 'Pariatur aspernatur nulla aut recusandae neque optio vero. Tempora impedit nihil harum eos similique sed culpa. Modi rerum ad quia nisi.', '2023-07-17 11:22:50', '2023-07-17 11:22:50'),
(6, 'Aidan Mertz', 'Library Technician', 'assets/img/temoignages/default.avif', 'Dicta deleniti quod necessitatibus velit. Et at nihil omnis eum. Provident sint aut ab unde. Repellat reiciendis nobis quidem asperiores minima.', '2023-07-17 11:22:50', '2023-07-17 11:22:50'),
(7, 'Sheila Russel', 'Bindery Worker', 'assets/img/temoignages/default.avif', 'Velit eaque voluptatem commodi natus. Blanditiis ea sit quia aut quo ea nobis et. Et dolore est facilis.', '2023-07-17 11:22:50', '2023-07-17 11:22:50'),
(8, 'Norma Kerluke', 'Shoe Machine Operators', 'assets/img/temoignages/default.avif', 'Repellendus et sunt nobis et. Et quia nobis esse dolorum. Possimus temporibus quam dolorum dolorum molestiae inventore sunt voluptatibus.', '2023-07-17 11:22:50', '2023-07-17 11:22:50');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Atchin Parfait', 'atchinaymard10@gmail.com', '2023-07-17 11:22:50', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'ANs0kLLb6o', '2023-07-17 11:22:51', '2023-07-17 11:22:51');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `engins`
--
ALTER TABLE `engins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `engins_nom_unique` (`nom`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_engin_id_foreign` (`engin_id`),
  ADD KEY `images_piece_id_foreign` (`piece_id`),
  ADD KEY `images_realisation_id_foreign` (`realisation_id`);

--
-- Index pour la table `marques`
--
ALTER TABLE `marques`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `pieces`
--
ALTER TABLE `pieces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pieces_detaillers`
--
ALTER TABLE `pieces_detaillers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `realisations`
--
ALTER TABLE `realisations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `realisations_id_categories_realisations_foreign` (`id_categories_realisations`);

--
-- Index pour la table `realisation_categories`
--
ALTER TABLE `realisation_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `realisation_categories_nom_unique` (`nom`);

--
-- Index pour la table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `engins`
--
ALTER TABLE `engins`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `marques`
--
ALTER TABLE `marques`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `pieces`
--
ALTER TABLE `pieces`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT pour la table `pieces_detaillers`
--
ALTER TABLE `pieces_detaillers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `realisations`
--
ALTER TABLE `realisations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `realisation_categories`
--
ALTER TABLE `realisation_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_engin_id_foreign` FOREIGN KEY (`engin_id`) REFERENCES `engins` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `images_piece_id_foreign` FOREIGN KEY (`piece_id`) REFERENCES `pieces` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `images_realisation_id_foreign` FOREIGN KEY (`realisation_id`) REFERENCES `realisations` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `realisations`
--
ALTER TABLE `realisations`
  ADD CONSTRAINT `realisations_id_categories_realisations_foreign` FOREIGN KEY (`id_categories_realisations`) REFERENCES `realisation_categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
