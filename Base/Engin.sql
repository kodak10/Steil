-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : sam. 15 juil. 2023 à 08:48
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
(1, 'https://www.couderc-materiels.fr/wp-content/uploads/2021/01/logo-JCB.png', '2023-07-15 05:39:46', '2023-07-15 05:39:46'),
(2, 'https://assets.stickpng.com/images/580b57fcd9996e24bc43c46e.png', '2023-07-15 05:39:46', '2023-07-15 05:39:46'),
(3, 'https://news.via-mobilis.com/46898_1.jpg', '2023-07-15 05:39:46', '2023-07-15 05:39:46'),
(4, 'https://www.couderc-materiels.fr/wp-content/uploads/2021/01/logo-JCB.png ', '2023-07-15 05:39:46', '2023-07-15 05:39:46'),
(5, 'https://logo-marque.com/wp-content/uploads/2020/08/Caterpillar-Logo.png', '2023-07-15 05:39:46', '2023-07-15 05:39:46'),
(6, 'https://upload.wikimedia.org/wikipedia/fr/thumb/d/de/Mazda.svg/1200px-Mazda.svg.png', '2023-07-15 05:39:46', '2023-07-15 05:39:46'),
(7, 'https://logos-marques.com/wp-content/uploads/2021/02/Mitsubishi-Logo.png', '2023-07-15 05:39:46', '2023-07-15 05:39:46');

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
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pieces`
--

INSERT INTO `pieces` (`id`, `categorie_pieces`, `reference`, `nom`, `thumbnail`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Moteur', 'AHYZVCAOKPA', 'Voluptatibus vel sed id adipisci id quod ex adipisci expedita libero molestiae enim eveniet.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:48', '2023-07-15 05:39:48'),
(2, 'Moteur', 'JIHTLKMM5KH', 'Provident porro blanditiis vitae maxime assumenda vel aliquam porro aut sequi temporibus possimus voluptate.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:48', '2023-07-15 05:39:48'),
(3, 'Moteur', 'BTZUCEJ5EV2', 'Asperiores rerum corporis dignissimos reprehenderit porro veritatis non saepe molestias quisquam consequatur consequatur aspernatur numquam.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:48', '2023-07-15 05:39:48'),
(4, 'Moteur', 'PJHEFG68QCF', 'Et ut id nihil natus ipsum quae blanditiis quia recusandae numquam repudiandae.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:48', '2023-07-15 05:39:48'),
(5, 'Pieces_detachees', 'MBSHYCMV', 'Ducimus tempora minus minus ipsum corporis accusantium et omnis omnis voluptatibus dicta.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:48', '2023-07-15 05:39:48'),
(6, 'Pieces_detachees', 'MQRVIPVP', 'Perspiciatis eos et itaque voluptatem reiciendis rem tenetur veritatis eos.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:48', '2023-07-15 05:39:48'),
(7, 'Pieces_detachees', 'GBTATNZX', 'Omnis eaque harum repudiandae quae dolor provident sit omnis voluptates quo pariatur eum.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:48', '2023-07-15 05:39:48'),
(8, 'Moteur', 'MHUVPGD7N9A', 'Adipisci aut veritatis ut et veniam est qui aspernatur repudiandae ut dolorem et adipisci natus esse.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:48', '2023-07-15 05:39:48'),
(9, 'Moteur', 'CVSDUNO4ILL', 'Impedit voluptas quod sunt quas adipisci quos ut aut eum quae et tenetur labore labore commodi sit.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:48', '2023-07-15 05:39:48'),
(10, 'Moteur', 'FTUXYVF8T3A', 'Repellat vel id quis ipsam qui consequatur neque minima sapiente reiciendis qui tempore facilis est.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:48', '2023-07-15 05:39:48'),
(11, 'Pieces_detachees', 'GNMMUSHEDBB', 'Praesentium vero dolor debitis ea quam ad molestiae.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:48', '2023-07-15 05:39:48'),
(12, 'Moteur', 'ITRKRFZX', 'Aspernatur libero sed labore et cupiditate earum praesentium quaerat officia dolor est ut nisi qui.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(13, 'Moteur', 'SZBILLY23MX', 'Necessitatibus sed nesciunt ut doloremque distinctio quidem eos distinctio provident eligendi eos ipsum aperiam iste consectetur molestiae.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(14, 'Pieces_detachees', 'BWCSVFUZBX3', 'Et unde dolorem ex incidunt repellat et dolores soluta alias perspiciatis ut deleniti cumque occaecati.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(15, 'Pieces_detachees', 'YYFXMZGOCGW', 'Eos consectetur qui ut voluptatem iste temporibus enim quis repellat.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(16, 'Moteur', 'KGXRBV18', 'Earum quae reiciendis rerum laboriosam qui deleniti id consequatur.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(17, 'Moteur', 'HIVULLN0', 'Reprehenderit omnis qui non enim qui sequi accusamus veritatis.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(18, 'Pieces_detachees', 'UZDIQFKLNCQ', 'Magnam omnis sapiente eaque ratione quod aut excepturi impedit iure.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(19, 'Pieces_detachees', 'UCFKTNFE', 'Est molestiae dolores ratione et esse magni enim suscipit dolore mollitia ea quia culpa quia magnam.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(20, 'Pieces_detachees', 'KLZCNLLXTEI', 'Est quam occaecati nesciunt architecto possimus nobis quia culpa ea ipsa aspernatur perspiciatis inventore neque.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(21, 'Pieces_detachees', 'TJEZLBH53JZ', 'Facilis ea pariatur inventore harum dolorem ut exercitationem sed nobis.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(22, 'Moteur', 'DKZNDBBKZFZ', 'Qui aspernatur velit quas corporis et porro reprehenderit est ut rerum omnis porro illo maiores est.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(23, 'Moteur', 'EPAIRNQGBDG', 'Suscipit quia placeat qui sit quam deleniti consectetur voluptas adipisci odio.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(24, 'Moteur', 'CYQMNE0GPVM', 'Culpa occaecati ratione repellat ipsam sint quasi omnis omnis aut consequatur rerum.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(25, 'Pieces_detachees', 'TBHSXF0D8YV', 'Nesciunt facilis qui a asperiores animi omnis blanditiis enim quasi magnam et.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(26, 'Pieces_detachees', 'JDFBVZPA9I4', 'Necessitatibus voluptatibus laboriosam enim eligendi blanditiis deleniti ut voluptate delectus saepe modi.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(27, 'Pieces_detachees', 'NCHKYP9W', 'Et iusto est omnis dolorum aut explicabo quod cumque sapiente architecto voluptas error.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(28, 'Moteur', 'HFSSWLGC', 'Dolor est aliquid minus vitae aliquam magnam aliquid ad.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:49', '2023-07-15 05:39:49'),
(29, 'Pieces_detachees', 'VQOOFRT3', 'Magni maxime quam quaerat ea aut est corrupti alias ipsam est adipisci unde.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(30, 'Pieces_detachees', 'HSSDYYBA', 'Ex iste aspernatur sunt animi minima voluptatum asperiores quia sapiente et.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(31, 'Moteur', 'XDEATSSE', 'Hic excepturi alias id sint debitis ut autem.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(32, 'Pieces_detachees', 'JQUONQHR', 'Maxime et ipsam doloremque ratione sit est at impedit iure sed dolorem.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(33, 'Moteur', 'FJRZDWNIQQ0', 'Qui ut est voluptatem placeat est exercitationem velit quidem cum consequuntur et sunt.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(34, 'Pieces_detachees', 'RLPXMRGH', 'Ullam eos at rerum dignissimos a omnis laboriosam mollitia pariatur autem qui.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(35, 'Moteur', 'FMWLUEHRDAR', 'Eum quia ut est ea quam quod voluptas eligendi blanditiis et ullam repellat velit corporis itaque.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(36, 'Pieces_detachees', 'CRNVHDBB', 'Nisi accusamus ab sunt qui expedita sint alias in est nostrum.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(37, 'Pieces_detachees', 'DTNZUOLW', 'Et aut impedit saepe quia alias sunt autem unde dignissimos voluptas est commodi voluptates minus voluptate.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(38, 'Pieces_detachees', 'MREGMSD14GH', 'Veritatis et earum distinctio qui ipsam facere tempora sed sit sed ratione labore et recusandae.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(39, 'Pieces_detachees', 'YVSWTMFR6AQ', 'Est perspiciatis minima architecto at facilis dolorum fugiat reiciendis est neque at laudantium nobis.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(40, 'Moteur', 'JXUFVGRF', 'Labore repudiandae et aut facere libero praesentium sint et quis occaecati.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(41, 'Moteur', 'CNNKAVZ6', 'Sed error ut et voluptatem qui excepturi eum in illum fugit velit beatae ullam.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(42, 'Moteur', 'KTJLHYSTFZC', 'Necessitatibus voluptatem sed nisi cupiditate et ut voluptatem officiis harum qui provident aspernatur perspiciatis doloribus distinctio eveniet.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(43, 'Pieces_detachees', 'HNOHZSGQ', 'Est eius quia consectetur itaque similique doloremque illo qui architecto consequatur voluptatem occaecati quos.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(44, 'Moteur', 'WNVZJXOO', 'Dolores ut optio voluptas aperiam omnis neque animi qui distinctio architecto quas voluptas.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(45, 'Moteur', 'HJXFUDDU', 'Quidem quia illo officia est blanditiis incidunt voluptatem sint molestiae magni et.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(46, 'Moteur', 'CSZTLH1A', 'Animi rem deleniti odio est qui id consectetur minima aut.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(47, 'Pieces_detachees', 'RSIRAV98', 'Pariatur unde et optio cum ea id beatae aut voluptas ad et facilis corrupti.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(48, 'Moteur', 'CKZMLGE6', 'Odit voluptas et nihil dolor aut voluptas officiis eligendi perspiciatis non.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:50', '2023-07-15 05:39:50'),
(49, 'Moteur', 'DAYVXXJB', 'Repudiandae dolorem accusamus voluptates in et odit veritatis dicta quod quia quo maiores explicabo repellendus.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:51', '2023-07-15 05:39:51'),
(50, 'Moteur', 'GQBJRWDBQFB', 'Magni nesciunt repudiandae odit quaerat et iusto quod id.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:51', '2023-07-15 05:39:51'),
(51, 'Pieces_detachees', 'JVYNBXL6', 'Vero libero ea voluptates similique est vel et natus sequi.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:51', '2023-07-15 05:39:51'),
(52, 'Moteur', 'RIIKDU35FF2', 'Nulla est vero quasi consequuntur illo cum neque consequatur fugiat.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:51', '2023-07-15 05:39:51'),
(53, 'Pieces_detachees', 'KDFWDU7YLNU', 'Quas nostrum non tempora quis ab et quia ad nihil eligendi molestiae.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:51', '2023-07-15 05:39:51'),
(54, 'Pieces_detachees', 'UPGZPL4B', 'Non ut dolor repudiandae error tenetur excepturi voluptatem et sint perspiciatis.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:51', '2023-07-15 05:39:51'),
(55, 'Moteur', 'YUFUDKXH', 'Odio nesciunt doloribus sed nihil qui nulla magnam omnis eius aut omnis rem.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:51', '2023-07-15 05:39:51'),
(56, 'Pieces_detachees', 'HQPHLM09JKY', 'Perferendis neque perferendis sunt laborum aut dolores dolores.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:51', '2023-07-15 05:39:51'),
(57, 'Pieces_detachees', 'HORXDS0X', 'Ut minima ut dolorem eligendi fuga sequi accusantium distinctio ducimus.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:51', '2023-07-15 05:39:51'),
(58, 'Moteur', 'VXECOBCY', 'Ex quaerat quis sunt earum nisi dicta aut est quo adipisci est deleniti incidunt aut voluptatem.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:51', '2023-07-15 05:39:51'),
(59, 'Moteur', 'QIXCFQ3PK55', 'Enim sunt consequatur velit officia ab cumque similique quia eaque ad ut ut facere quisquam.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:51', '2023-07-15 05:39:51'),
(60, 'Pieces_detachees', 'MVRXMRAE', 'Recusandae iusto labore et earum minima eligendi quis asperiores.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:51', '2023-07-15 05:39:51'),
(61, 'Moteur', 'EMSWRUAW7YW', 'Aspernatur ex adipisci totam voluptas delectus animi aut quia impedit hic.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:51', '2023-07-15 05:39:51'),
(62, 'Pieces_detachees', 'MCXJIN2T0VT', 'Sit consequatur dolores assumenda blanditiis eius quam sint expedita.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:51', '2023-07-15 05:39:51'),
(63, 'Moteur', 'PRLWKRP0', 'Sint accusamus officia rerum molestiae expedita sit quia debitis quisquam aut.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:51', '2023-07-15 05:39:51'),
(64, 'Pieces_detachees', 'BTIGIYEX', 'Tempora aperiam qui hic suscipit cupiditate delectus praesentium soluta temporibus odit.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:52', '2023-07-15 05:39:52'),
(65, 'Moteur', 'OPQGPJIW', 'Voluptatem qui eius tenetur illum voluptas repudiandae et voluptas.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:52', '2023-07-15 05:39:52'),
(66, 'Pieces_detachees', 'NLNHGUNBLQU', 'Quis facilis non tempora dolor commodi omnis earum et quia.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:52', '2023-07-15 05:39:52'),
(67, 'Moteur', 'SDNHEU8B21T', 'Culpa eum ut at quaerat perspiciatis est iusto quaerat harum ad non excepturi rerum.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:52', '2023-07-15 05:39:52'),
(68, 'Pieces_detachees', 'ZPNQVSGRO77', 'Officia eum vel qui voluptatem quia quidem quisquam sunt mollitia sed dolorem et quam eaque sed suscipit.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:52', '2023-07-15 05:39:52'),
(69, 'Moteur', 'NXETEUL7L22', 'Vel molestiae quo atque laboriosam consectetur esse fuga porro rem ut voluptatibus nesciunt eum dolor incidunt et.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:52', '2023-07-15 05:39:52'),
(70, 'Moteur', 'HUNUAM4KZWU', 'Repellendus quibusdam officia dolorum enim omnis ut iure.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:52', '2023-07-15 05:39:52'),
(71, 'Moteur', 'IXNWXLL2', 'Corrupti est placeat doloribus magnam rerum laboriosam dolores mollitia et.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:52', '2023-07-15 05:39:52'),
(72, 'Pieces_detachees', 'CPGYJIGH', 'Suscipit qui cupiditate minus magni delectus sapiente praesentium deleniti tempora voluptatibus eum suscipit consequatur voluptatibus.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:52', '2023-07-15 05:39:52'),
(73, 'Moteur', 'KQRVMDRJ', 'Et facilis fugit optio voluptate est soluta sit vel et non odit nulla quidem.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:52', '2023-07-15 05:39:52'),
(74, 'Pieces_detachees', 'NOMZDZBK7LO', 'Cumque et qui eveniet eveniet in corrupti tempora qui beatae provident sunt.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:52', '2023-07-15 05:39:52'),
(75, 'Moteur', 'COLPQTKR', 'Eius dignissimos necessitatibus quis optio dignissimos corrupti sit rerum.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:52', '2023-07-15 05:39:52'),
(76, 'Moteur', 'ABASNABI', 'Consequatur aperiam rem accusamus dolores aspernatur a laborum quidem magnam aliquid a qui.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:53', '2023-07-15 05:39:53'),
(77, 'Moteur', 'SEHCRGL0K7C', 'Sunt rem rerum nihil quos quam repudiandae unde ut excepturi nobis quibusdam debitis voluptas.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:53', '2023-07-15 05:39:53'),
(78, 'Moteur', 'TKRSQRLE', 'Exercitationem deserunt alias architecto et molestias velit cupiditate cumque atque.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:53', '2023-07-15 05:39:53'),
(79, 'Pieces_detachees', 'XOIOWKPU', 'Necessitatibus exercitationem quas nostrum ipsa libero et ex voluptatem eaque magnam.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:53', '2023-07-15 05:39:53'),
(80, 'Pieces_detachees', 'KZPNNI7JN6O', 'Nobis rerum in asperiores molestiae et dolorum fugit molestias quas pariatur voluptates cupiditate mollitia est dolores.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:53', '2023-07-15 05:39:53'),
(81, 'Pieces_detachees', 'ITTAGPQ2', 'Magnam ut qui unde veritatis est praesentium non consequatur facilis occaecati.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:53', '2023-07-15 05:39:53'),
(82, 'Moteur', 'LOVLYOV9AOX', 'Eum consequuntur impedit ipsam aut quod ut voluptatem ut illo.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:53', '2023-07-15 05:39:53'),
(83, 'Pieces_detachees', 'ABNKZE5C', 'Laudantium est aspernatur perspiciatis necessitatibus est hic totam et vero.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:53', '2023-07-15 05:39:53'),
(84, 'Pieces_detachees', 'OXJIFXF0ZOD', 'Aut repellendus nostrum dolorem aut dolor at et qui eum reprehenderit quia nesciunt hic magni ab fugit.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:53', '2023-07-15 05:39:53'),
(85, 'Moteur', 'JHXJQJO0', 'Velit saepe laboriosam aut est ut vitae non eos odit repellat eos ut et.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:53', '2023-07-15 05:39:53'),
(86, 'Moteur', 'RXHENTUI', 'Repudiandae non et asperiores incidunt ut nemo ducimus nesciunt aspernatur velit voluptatem repellendus neque molestiae eum maiores.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:53', '2023-07-15 05:39:53'),
(87, 'Pieces_detachees', 'PFJJSADAQ2X', 'Culpa quis voluptatum fugiat et sequi quisquam cupiditate cupiditate non sint.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(88, 'Pieces_detachees', 'PYDSUT9U', 'Sint molestiae harum est et est sunt veritatis consequatur provident non.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(89, 'Moteur', 'EEDZPAGI', 'Molestias aliquam tempore aut quis dolores nulla voluptas laudantium unde veniam et voluptas.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(90, 'Moteur', 'JBTHKOW4PJO', 'Animi sunt nesciunt nihil molestiae doloremque laudantium quos aut est repellat blanditiis et veniam.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(91, 'Pieces_detachees', 'ALPJSY3G', 'Omnis eius dignissimos quaerat tempora quibusdam nihil libero fugiat.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(92, 'Pieces_detachees', 'AHEBOPCC', 'Tenetur optio magni corrupti sequi porro fuga animi minus.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(93, 'Pieces_detachees', 'QBXTDY68', 'Dolorem nesciunt nesciunt sunt omnis repudiandae odio maxime soluta laudantium dignissimos ut rerum.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(94, 'Pieces_detachees', 'BIHOCYVO', 'Aperiam dolore et ipsum fuga quia architecto modi aliquam aut necessitatibus nemo.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(95, 'Pieces_detachees', 'PLCUZQTIIJZ', 'Ut tempora ipsam veniam eos autem quia doloremque voluptas fugiat nostrum est quia dignissimos.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(96, 'Moteur', 'HRSNMTBAO35', 'Sequi voluptas est qui voluptates delectus eaque modi alias nam rerum qui et quo fuga voluptate.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(97, 'Moteur', 'XQWIRZTVFGT', 'Nisi nostrum qui neque perspiciatis saepe cum molestias vero et consequatur doloribus est distinctio voluptatibus.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(98, 'Moteur', 'UCTHIJ4UI8O', 'Voluptatibus laboriosam corporis voluptatem cum quaerat voluptas ex inventore omnis ea ullam perferendis.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(99, 'Pieces_detachees', 'XZTXYKDD', 'Illum necessitatibus necessitatibus ducimus ratione quibusdam necessitatibus eaque.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(100, 'Moteur', 'HXLXDIEQI71', 'Eveniet doloribus illo tempore ea totam illum amet et dolores ut dolor nemo.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(101, 'Pieces_detachees', 'ABHHYEST3KB', 'Accusamus labore quia assumenda aspernatur perspiciatis quasi sequi ullam assumenda harum autem.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(102, 'Pieces_detachees', 'GCIYNAMYR5N', 'Qui quas quidem non qui qui in velit aliquid qui non velit.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:54', '2023-07-15 05:39:54'),
(103, 'Moteur', 'MNFQLYNZ', 'Excepturi aut assumenda et doloremque est aliquid molestiae facilis eum non et quidem et adipisci sit vel.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(104, 'Pieces_detachees', 'MPXVUNJA', 'Tempore illum corrupti ullam sed veritatis molestiae ut nam omnis dignissimos et adipisci.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(105, 'Pieces_detachees', 'VIDLQKINWDK', 'Voluptatum accusantium libero non tempora consequatur omnis voluptatem dignissimos eos voluptatem voluptate cupiditate dolor et.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(106, 'Moteur', 'AGRCBE0Y', 'Nemo quia labore quo deleniti molestiae quasi quia totam nobis.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(107, 'Pieces_detachees', 'WOMXGVVP', 'Aut officia sed consequatur laboriosam occaecati enim placeat velit et ducimus.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(108, 'Moteur', 'LEJDNBNE', 'Sit est aut laudantium eius qui esse provident soluta voluptate reiciendis iste eaque omnis excepturi nemo debitis.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(109, 'Moteur', 'PJOXZBQY', 'Ut adipisci suscipit sit quisquam in aliquam vel cupiditate suscipit optio voluptas.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(110, 'Pieces_detachees', 'OMDYJN6MVCZ', 'Aliquam voluptas voluptatem accusamus voluptatem dignissimos quia atque dolores omnis sed autem nobis nobis ea quia beatae.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(111, 'Pieces_detachees', 'LBEUUSQI', 'Velit ipsum provident esse dolor soluta vel eligendi sit enim aliquid aut iusto consectetur.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(112, 'Pieces_detachees', 'ZZCKMW90', 'Velit in eaque omnis dicta laborum est libero temporibus.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(113, 'Moteur', 'HZNRNU3Z', 'Voluptatum velit iste ab qui accusamus minima quia eaque.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(114, 'Pieces_detachees', 'PXEIVYS4JA7', 'Assumenda vel omnis reprehenderit eveniet enim facilis voluptatem odit sapiente quis pariatur consequatur.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(115, 'Moteur', 'QESYLDRX', 'Molestiae quasi repellendus asperiores et sunt harum laudantium dicta minus.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(116, 'Moteur', 'NWXNHRVCMI3', 'Saepe ut non sit ducimus nihil est molestiae et dolorem reprehenderit.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(117, 'Pieces_detachees', 'CACSYLYL', 'Et velit sapiente aut iure tempora ut et vel consectetur pariatur nulla sit labore molestias qui ducimus.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(118, 'Pieces_detachees', 'UCZIFWUUR8V', 'Deserunt modi aliquam id velit et qui iure nobis nostrum voluptates eligendi sed repudiandae.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(119, 'Moteur', 'AYLOFRP00XO', 'Repellendus fugiat aut aperiam temporibus eligendi voluptate laboriosam rerum nobis vero sequi possimus.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(120, 'Moteur', 'OEDUYYBW', 'Aut recusandae in dolore sint itaque error distinctio possimus qui.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(121, 'Moteur', 'ABVYDPWX', 'Aut possimus expedita dolorem rerum ea praesentium at sint nostrum numquam repellat.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:55', '2023-07-15 05:39:55'),
(122, 'Pieces_detachees', 'TCBTPW6WTM8', 'Occaecati reiciendis ut soluta ducimus distinctio minus quia sapiente debitis illum et amet voluptas.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(123, 'Pieces_detachees', 'ZXIDEINUTBD', 'Consequatur laborum officia et consequatur occaecati tenetur rerum rerum.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(124, 'Moteur', 'QUJIYORM', 'Rerum aspernatur optio quaerat maiores cumque quisquam autem eveniet praesentium voluptatem.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(125, 'Moteur', 'JZEASPHF9H6', 'Voluptas sint qui tenetur labore maxime voluptatibus inventore quia ut impedit.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(126, 'Pieces_detachees', 'EPVZZGTI', 'Et quasi animi ipsa velit beatae ipsa eveniet ea inventore commodi explicabo recusandae quo qui provident consequatur.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(127, 'Moteur', 'JVSHKZ2DMNP', 'Est aperiam molestiae fugiat amet suscipit quia quos nostrum ut est consequatur.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(128, 'Moteur', 'ULTAEH2F6PJ', 'Non veritatis ipsa quibusdam occaecati asperiores temporibus sit qui quis.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(129, 'Pieces_detachees', 'HPTYCWUP', 'Beatae officia ut porro unde nihil eligendi consequuntur rem totam.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(130, 'Pieces_detachees', 'JDVJYG71O1S', 'Minima sed numquam accusantium et error impedit rerum qui in voluptas.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(131, 'Moteur', 'DNZXSLIY', 'At provident corporis harum aliquid omnis sunt nobis ut.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(132, 'Pieces_detachees', 'PKJLZIT1R1I', 'Totam ut est et non aut hic laudantium.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(133, 'Moteur', 'ZKYAUEO2', 'Dolor aspernatur eligendi autem totam dignissimos magni animi numquam suscipit eveniet.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(134, 'Pieces_detachees', 'ZQXTRHVTUJ8', 'Debitis dolore placeat aut placeat sed ut suscipit commodi mollitia et ad consectetur cum.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(135, 'Moteur', 'LTNUHBK4', 'Possimus aut ut quis voluptatem et earum a nihil aspernatur aut impedit quisquam aliquid reiciendis qui.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(136, 'Moteur', 'XKIDEL8S', 'Deleniti autem ullam ipsum sapiente est blanditiis eum inventore dicta et iusto ipsa deleniti iste qui harum.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(137, 'Pieces_detachees', 'WOSLXTJ4', 'Vel qui nostrum voluptatem qui assumenda nobis quibusdam soluta.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(138, 'Pieces_detachees', 'LIYQCH9S', 'Velit officiis delectus numquam quis vitae eum provident dolores.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(139, 'Pieces_detachees', 'HTFUQNACQMU', 'Et dignissimos qui aut velit et error cum accusantium.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:56', '2023-07-15 05:39:56'),
(140, 'Pieces_detachees', 'LQPKUHDPLSS', 'Nulla eum odit repellendus autem voluptas est sed aut quibusdam temporibus sequi iure et libero deserunt.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(141, 'Pieces_detachees', 'UPVMOTEQSDZ', 'Commodi blanditiis provident molestias amet optio praesentium ipsam.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(142, 'Moteur', 'GCFJKKGY', 'Aut dolor voluptatem adipisci dignissimos nihil dolores sint excepturi quis sit accusamus corporis sunt autem.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(143, 'Pieces_detachees', 'MCODWQW2', 'Enim provident mollitia maxime nihil voluptas maiores culpa amet aut autem vel.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(144, 'Pieces_detachees', 'QGUFBORT', 'Quisquam saepe minus et laborum impedit explicabo beatae sapiente et totam exercitationem.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57');
INSERT INTO `pieces` (`id`, `categorie_pieces`, `reference`, `nom`, `thumbnail`, `image`, `description`, `created_at`, `updated_at`) VALUES
(145, 'Pieces_detachees', 'EKEFSBS4ULF', 'Architecto minima voluptatem sit consequatur cum culpa explicabo dolor et adipisci et occaecati sit modi.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(146, 'Pieces_detachees', 'AFAUQRTUHXQ', 'Quasi consequatur vel sint eius et est non vitae qui aut ullam.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(147, 'Moteur', 'ANBJLLKX', 'Animi asperiores in repellat aut sed aspernatur adipisci.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(148, 'Moteur', 'BJHTGZO8', 'Doloribus perspiciatis voluptatem molestiae nobis laboriosam corrupti eius.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(149, 'Pieces_detachees', 'VFHVHGF6AC7', 'Repellendus et quis quis nobis voluptate a nihil velit nesciunt quam distinctio necessitatibus corrupti officia quisquam.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(150, 'Moteur', 'UCWLURP1', 'Tenetur alias qui nam odit magnam rerum optio et nostrum et quo eligendi.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(151, 'Moteur', 'TIRITPJM', 'Ipsum et aperiam occaecati voluptas earum recusandae ut repudiandae eum autem dolorum nihil dolore.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(152, 'Moteur', 'WDQUKIDH', 'Dolor qui unde earum voluptatum laborum odio temporibus et minima enim in amet architecto possimus et.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(153, 'Moteur', 'OPTXFFFGBDY', 'Unde eos et placeat est at sint est fugit quo fugit.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(154, 'Moteur', 'ZLTNNEY0', 'Iure quas similique est quis saepe officia culpa odio consequatur at molestias autem neque impedit doloremque natus.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(155, 'Pieces_detachees', 'FQFPWO9K', 'Repellendus rerum occaecati et in cupiditate laboriosam tempora sint nisi provident dicta.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(156, 'Pieces_detachees', 'STVUYL3E', 'Eaque est temporibus quia ducimus rerum asperiores qui sapiente quo hic nam.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(157, 'Moteur', 'VBGOEEBR', 'Sequi quos nam at voluptatum libero aut laborum.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(158, 'Moteur', 'TOLMYSKBMQB', 'Sit tempora enim fugiat provident nesciunt ut numquam libero nostrum quo nobis molestias et rerum.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(159, 'Moteur', 'HQGRRXNGIEZ', 'Quisquam nemo perspiciatis laudantium amet alias ea eum ipsum vero fuga mollitia.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:57', '2023-07-15 05:39:57'),
(160, 'Moteur', 'CSIOYDGO', 'Ut fuga aliquid illo et cumque numquam labore ipsum voluptas accusamus ut voluptatum et quia laborum.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:58', '2023-07-15 05:39:58'),
(161, 'Moteur', 'SKTMLHOTSIT', 'Est ducimus et eum est qui provident enim dolores exercitationem ratione qui expedita hic non placeat.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:58', '2023-07-15 05:39:58'),
(162, 'Moteur', 'KBNRXIK1USY', 'Et aut ratione accusamus cumque expedita voluptatem eos et.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:58', '2023-07-15 05:39:58'),
(163, 'Pieces_detachees', 'SXXIGHC06OU', 'Et non aut ipsa optio dolores repellat vitae rerum.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:58', '2023-07-15 05:39:58'),
(164, 'Moteur', 'WCAVSJ3RWCY', 'Explicabo repellat culpa doloribus cum porro rerum iusto alias occaecati inventore earum autem placeat dolor nesciunt.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:58', '2023-07-15 05:39:58'),
(165, 'Pieces_detachees', 'VSKJHRFNUDA', 'Sint quis quo quam illum impedit numquam et et facere occaecati.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:58', '2023-07-15 05:39:58'),
(166, 'Pieces_detachees', 'EDYJPAGL', 'Est voluptatem ad accusantium delectus iure in et.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:58', '2023-07-15 05:39:58'),
(167, 'Moteur', 'ROBRQLRR', 'Ea eligendi consequatur at asperiores numquam veniam minus.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:58', '2023-07-15 05:39:58'),
(168, 'Pieces_detachees', 'KVAQKK50', 'Eius ipsum reprehenderit sit ad culpa aut minima blanditiis quam soluta.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:58', '2023-07-15 05:39:58'),
(169, 'Pieces_detachees', 'OLMYYWC5UUX', 'Neque earum corporis est aliquam doloremque aut praesentium ea.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(170, 'Moteur', 'GWRCKP6M', 'Molestiae dignissimos pariatur ullam ipsum eos sed dolore aut.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(171, 'Moteur', 'GUORGE1M', 'Nulla adipisci cumque quibusdam sint ipsum voluptas eum exercitationem nostrum dignissimos magni hic voluptatem laudantium.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(172, 'Pieces_detachees', 'ADWHNCKB', 'Deserunt fuga facere saepe labore in esse velit sit laborum facilis numquam est consequuntur corporis.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(173, 'Pieces_detachees', 'PXLJRKPZ', 'Sint blanditiis possimus placeat rerum quaerat velit occaecati quo consequatur veritatis maiores autem.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(174, 'Moteur', 'HUZRYIUW', 'Reiciendis occaecati qui voluptas quasi vitae ea optio vel et eveniet.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(175, 'Pieces_detachees', 'ISAITZY8', 'Consequuntur harum praesentium aperiam voluptatibus rem quo ut eligendi corrupti perspiciatis error ut.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(176, 'Moteur', 'WRTKVX51', 'Id eos vero quia qui tempore dolorem molestiae ab qui in delectus exercitationem.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(177, 'Pieces_detachees', 'HWVIKP3DYZ9', 'Cupiditate provident nulla dolorem beatae autem aliquam quisquam itaque laboriosam aspernatur et fugiat.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(178, 'Moteur', 'TLZQMOI23A4', 'Repellat quos aspernatur deserunt deserunt debitis dolorem quibusdam modi.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(179, 'Moteur', 'MAIDIF0H', 'Esse laborum recusandae consequatur rerum enim nulla voluptas vel reiciendis nobis esse.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(180, 'Pieces_detachees', 'TSTAXOQ3', 'Aut et cum odio sunt ut tempora non ex facere.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(181, 'Moteur', 'QOHZBM9DZOK', 'Ad quos repudiandae necessitatibus ipsum qui non ducimus ex omnis.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(182, 'Pieces_detachees', 'NGPPJID7', 'Itaque autem blanditiis ut est quisquam tempore alias modi reiciendis sequi sed quia sequi.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(183, 'Moteur', 'VGUZLH0ZRHH', 'Dolor quaerat numquam velit quis modi voluptas sapiente vitae est.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(184, 'Pieces_detachees', 'WQIMXV2PQ55', 'Alias quis et non ipsum inventore omnis eos in sint non aut et iste.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(185, 'Moteur', 'LWZCRZMNNA5', 'Quasi doloremque ad aspernatur vitae amet error omnis est non enim nihil.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(186, 'Pieces_detachees', 'SNGSEQUDXL9', 'Nesciunt quia velit eligendi officiis in quia modi dicta ea ut.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:39:59', '2023-07-15 05:39:59'),
(187, 'Moteur', 'LDNOEJNJ', 'Id praesentium aut non praesentium libero adipisci consectetur et quia magni fuga officiis sint tempora.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:40:00', '2023-07-15 05:40:00'),
(188, 'Moteur', 'KIMZWO3LDKR', 'Quia iusto maiores aut commodi praesentium aspernatur quo iusto magni a nisi error.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:40:00', '2023-07-15 05:40:00'),
(189, 'Moteur', 'SIAFWM4WABY', 'A rerum quia voluptas repellendus ut sequi porro optio illo.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:40:00', '2023-07-15 05:40:00'),
(190, 'Pieces_detachees', 'HBKANFVS', 'Facere amet veritatis aut sequi quo omnis mollitia magni error quisquam temporibus ad odio dolorum.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:40:00', '2023-07-15 05:40:00'),
(191, 'Moteur', 'BQWIWCBD', 'Consequatur aut doloribus nostrum molestias nisi et consequatur nihil dolor voluptatem ut velit.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:40:00', '2023-07-15 05:40:00'),
(192, 'Pieces_detachees', 'KCWKAWGKSZ2', 'Rerum quis rem impedit nulla pariatur ea cupiditate consequatur dolor beatae possimus id autem blanditiis.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:40:00', '2023-07-15 05:40:00'),
(193, 'Pieces_detachees', 'OYURQW59VH6', 'Velit consequatur distinctio aut qui qui et qui exercitationem a saepe quam impedit autem.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:40:00', '2023-07-15 05:40:00'),
(194, 'Moteur', 'GACFKI5BXAA', 'Et similique debitis dicta voluptatem non iusto odio molestiae placeat enim.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:40:00', '2023-07-15 05:40:00'),
(195, 'Pieces_detachees', 'ORXVLW10', 'Quia vel vero doloremque non reprehenderit molestiae sequi sit quo culpa et aut placeat impedit.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:40:00', '2023-07-15 05:40:00'),
(196, 'Pieces_detachees', 'ZUTIEJ7XZQP', 'Illum recusandae consequatur aliquid quis et quia quibusdam aut quibusdam qui vero et laboriosam assumenda facere.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:40:00', '2023-07-15 05:40:00'),
(197, 'Moteur', 'BNBIXYYW', 'Maiores voluptate qui quos molestiae quam dolore voluptatibus ea modi aperiam architecto ea accusantium in dolores fuga.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:40:00', '2023-07-15 05:40:00'),
(198, 'Moteur', 'CTYHDCXXRI4', 'Recusandae in et rerum enim eos quo molestiae et ullam placeat incidunt nisi.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:40:00', '2023-07-15 05:40:00'),
(199, 'Pieces_detachees', 'ZEOWVMVXSWM', 'Corrupti neque consequatur deserunt repellat sit rerum fuga.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:40:00', '2023-07-15 05:40:00'),
(200, 'Moteur', 'KWOIFYPKTF5', 'Optio sit perspiciatis molestiae libero nihil autem officia distinctio et.', 'https://via.placeholder.com/550x750', 'https://via.placeholder.com/550x750', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. metus in massa consectetur fringilla.', '2023-07-15 05:40:01', '2023-07-15 05:40:01');

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
(1, 'Layla Williamson PhD', 'Religious Worker', 'assets/img/temoignages/default.avif', 'Voluptatibus reprehenderit blanditiis et. Ut quam molestias qui minima voluptatem earum totam. Dolor quas voluptas aliquid eveniet consequatur vel.', '2023-07-15 05:39:45', '2023-07-15 05:39:45'),
(2, 'Lizeth Purdy I', 'Roustabouts', 'assets/img/temoignages/default.avif', 'Qui reprehenderit quia neque veritatis optio. Ipsam distinctio ex incidunt dolorem mollitia. Rerum vero voluptate quis explicabo non dolorum.', '2023-07-15 05:39:46', '2023-07-15 05:39:46'),
(3, 'Rossie Stiedemann', 'Industrial Production Manager', 'assets/img/temoignages/default.avif', 'Earum quo explicabo voluptate hic in repudiandae. Nulla incidunt ab recusandae. Magnam autem natus veritatis nemo voluptate assumenda suscipit.', '2023-07-15 05:39:46', '2023-07-15 05:39:46'),
(4, 'Prof. Nella Kilback V', 'Council', 'assets/img/temoignages/default.avif', 'Deserunt adipisci totam nihil consequatur incidunt est repudiandae. Sit similique rerum facilis veritatis est rerum. Nam veniam ipsa odit ut.', '2023-07-15 05:39:46', '2023-07-15 05:39:46'),
(5, 'Ms. Leslie Hand', 'Slot Key Person', 'assets/img/temoignages/default.avif', 'Ut error rem maxime consequuntur fugiat harum. Commodi maxime ut ex sed. Et quia blanditiis inventore architecto qui.', '2023-07-15 05:39:46', '2023-07-15 05:39:46'),
(6, 'Brooke Hermiston', 'Wellhead Pumper', 'assets/img/temoignages/default.avif', 'Et dolores illo vel consectetur dolores. Cumque nulla sunt velit ut.', '2023-07-15 05:39:46', '2023-07-15 05:39:46'),
(7, 'Flossie Kiehn', 'Fishery Worker', 'assets/img/temoignages/default.avif', 'Unde ut voluptas esse sit et et sint pariatur. Harum consequuntur sapiente et expedita. Voluptatibus sed laboriosam voluptas.', '2023-07-15 05:39:46', '2023-07-15 05:39:46'),
(8, 'Gerard Denesik', 'Furniture Finisher', 'assets/img/temoignages/default.avif', 'Impedit ad aut et ut ut libero quod aliquam. Libero quis dolor et quibusdam velit.', '2023-07-15 05:39:46', '2023-07-15 05:39:46');

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
(1, 'Atchin Parfait', 'atchinaymard10@gmail.com', '2023-07-15 05:39:48', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'pvk0xtaOeC', '2023-07-15 05:39:48', '2023-07-15 05:39:48');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pieces_reference_unique` (`reference`);

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
