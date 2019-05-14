-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mar. 14 mai 2019 à 18:08
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ucar`
--

-- --------------------------------------------------------

--
-- Structure de la table `concours`
--

CREATE TABLE `concours` (
  `id` int(10) UNSIGNED NOT NULL,
  `titre` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `concours`
--

INSERT INTO `concours` (`id`, `titre`, `specialite`, `description`, `created_at`, `updated_at`) VALUES
(1, 'concour1', 'specialité1', 'concour1concour1concour1concour1concour1', '2019-03-19 23:00:00', '2019-03-19 23:00:00'),
(2, 'concour2', 'specialite2', 'concour2concour2concour2concour2', '2019-03-20 23:00:42', '2019-03-28 23:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `contacter`
--

CREATE TABLE `contacter` (
  `id` int(11) NOT NULL,
  `nomC` varchar(100) DEFAULT NULL,
  `emailC` varchar(100) DEFAULT NULL,
  `messageC` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contacter`
--

INSERT INTO `contacter` (`id`, `nomC`, `emailC`, `messageC`) VALUES
(1, 'zeuu', '3aleuu@chacha.com', 'chachachachachachachachachacha'),
(2, 'enaesmiemail', 'enaemail@mail.fr', 'shit niggga'),
(3, 'LAME', 'SHIT@TERMA.com', 'GHZEL'),
(4, 'vg', 'gf@gg.com', 'zefezfz');

-- --------------------------------------------------------

--
-- Structure de la table `depose_models`
--

CREATE TABLE `depose_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `anneesThese` int(11) NOT NULL,
  `dateSoutenance` date NOT NULL,
  `nombreInscrits` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `doctors`
--

INSERT INTO `doctors` (`id`, `anneesThese`, `dateSoutenance`, `nombreInscrits`, `created_at`, `updated_at`) VALUES
(1, 2019, '2019-03-05', 5, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

CREATE TABLE `etudiants` (
  `id` int(10) UNSIGNED NOT NULL,
  `anneesEnThese` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theseDeposee` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dateDepot` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`id`, `anneesEnThese`, `theseDeposee`, `dateDepot`, `created_at`, `updated_at`) VALUES
(1, '4', 'theseDeposee', '2019-03-12', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `form`
--

CREATE TABLE `form` (
  `id` int(255) UNSIGNED NOT NULL,
  `cin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specialite` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `typedediplome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mentiondiplome` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redoublement` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `communication` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experiencePedagogiqueSecondaire` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experiencePedagogiqueSupérieur` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Score` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `form`
--

INSERT INTO `form` (`id`, `cin`, `nom`, `prenom`, `email`, `telephone`, `specialite`, `typedediplome`, `mentiondiplome`, `redoublement`, `communication`, `publication`, `experiencePedagogiqueSecondaire`, `experiencePedagogiqueSupérieur`, `Score`, `created_at`, `updated_at`) VALUES
(1, '09631680', 'med', 'med', 'mohamed.lahsoumi@hotmail.fr', '55477888', 'Informatique', NULL, NULL, '5', 'Communication', 'Publication', NULL, NULL, NULL, '2019-05-04 23:00:00', '2019-05-05 13:14:11'),
(4, '09631520', 'chacha', 'bouga', 'enaemail@mail.fr', '55477888', 'Informatique', 'typediplome', 'honorable', 'une année', 'communication', 'publication', '2', '1', 33, '2019-05-04 23:00:00', '2019-05-04 23:00:00'),
(7, '07639520', 'chacha', 'bouga', 'enaemail2@mail.fr', '55477888', 'Informatique', 'typediplome', 'honorable', 'une année', 'communication', 'publication', '2', '1', 33, '2019-05-04 23:00:00', '2019-05-04 23:00:00'),
(8, '65464567', 'chaima omami', 'jkhk', 'chaima0806@gmail.com', NULL, 'Instrumentation', NULL, NULL, '10', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '09638680', 'med', 'med', 'msed@med.med', NULL, 'Chimie', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `guests`
--

CREATE TABLE `guests` (
  `id` int(10) UNSIGNED NOT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `guests`
--

INSERT INTO `guests` (`id`, `mail`, `specialite`, `created_at`, `updated_at`) VALUES
(1, 'guest@hotmail.fr', 'informatique', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `inscri_models`
--

CREATE TABLE `inscri_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `Nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `institutes`
--

CREATE TABLE `institutes` (
  `id` int(10) UNSIGNED NOT NULL,
  `institut` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placesAvalible` int(191) NOT NULL,
  `spécialité` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `institutes`
--

INSERT INTO `institutes` (`id`, `institut`, `placesAvalible`, `spécialité`, `created_at`, `updated_at`) VALUES
(2, 'Institut supérieur des études technologiques de Radès', 4, 'Sciences économique et Gestion', '2019-05-04 23:00:00', '2019-05-04 23:00:00'),
(4, 'Institut supérieur des études technologiques de Radès', 13, 'Génie électrique', '2019-05-04 23:00:00', '2019-05-04 23:00:00'),
(5, 'Institut supérieur des études technologiques de Radès', 13, 'Génie électrique', '2019-05-04 23:00:00', '2019-05-04 23:00:00'),
(6, 'Institut Supérieur des Technologies de l\'Information et des Communications', 8, 'Télécommunications', '2019-05-04 23:00:00', '2019-05-04 23:00:00'),
(7, 'Institut Supérieur des Technologies de l\'Information et des Communications', 10, ' Sciences de l’Informatique', '2019-05-04 23:00:00', '2019-05-04 23:00:00'),
(8, 'Institut Supérieur des Technologies de l\'Information et des Communications', 9, 'Systèmes Embarqués', '2019-05-04 23:00:00', '2019-05-04 23:00:00'),
(9, 'Institut Supérieur des Technologies de l\'Information et des Communications', 12, 'Systèmes et Automatismes', '2019-05-04 23:00:00', '2019-05-04 23:00:00'),
(10, 'Institut Supérieur des Technologies de l\'Information et des Communications', 9, 'Systèmes Embarqués', '2019-05-04 23:00:00', '2019-05-04 23:00:00'),
(11, 'Institut Supérieur des Technologies de l\'Information et des Communications', 12, 'Systèmes et Automatismes', '2019-05-04 23:00:00', '2019-05-04 23:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_27_230558_create_inscri_models_table', 1),
(4, '2019_03_27_230653_create_depose_models_table', 2),
(5, '2019_03_29_003657_create_guests_table', 2),
(6, '2019_03_29_010335_create_etudiants_table', 2),
(7, '2019_03_29_010347_create_doctors_table', 2),
(8, '2019_03_29_010428_create_concours_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `d_id` int(11) DEFAULT NULL,
  `e_id` int(11) DEFAULT NULL,
  `Cin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specialite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `communication` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experiencePedagogiqueSecondaire` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experiencePedagogiqueSupérieur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `d_id`, `e_id`, `Cin`, `nom`, `prenom`, `email`, `telephone`, `specialite`, `communication`, `publication`, `experiencePedagogiqueSecondaire`, `experiencePedagogiqueSupérieur`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, '09631645', 'Lahsoumi', 'Mohamed', 'Lahsoumi@hotmail.fr', '560158888', 'specialite', 'communication', 'publication', 'experiencePedagogiqueSecondaire', 'experiencePedagogiqueSupérieur', NULL, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `concours`
--
ALTER TABLE `concours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacter`
--
ALTER TABLE `contacter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `depose_models`
--
ALTER TABLE `depose_models`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiants`
--
ALTER TABLE `etudiants`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_cin_unique` (`cin`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `guests`
--
ALTER TABLE `guests`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscri_models`
--
ALTER TABLE `inscri_models`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `institutes`
--
ALTER TABLE `institutes`
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
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_cin_unique` (`Cin`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `concours`
--
ALTER TABLE `concours`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `contacter`
--
ALTER TABLE `contacter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `depose_models`
--
ALTER TABLE `depose_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `etudiants`
--
ALTER TABLE `etudiants`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(255) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `guests`
--
ALTER TABLE `guests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `inscri_models`
--
ALTER TABLE `inscri_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `institutes`
--
ALTER TABLE `institutes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
