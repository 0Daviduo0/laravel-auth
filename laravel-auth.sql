-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Feb 10, 2023 alle 13:33
-- Versione del server: 10.4.27-MariaDB
-- Versione PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel-auth`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_02_09_100614_create_project_table', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(64) NOT NULL,
  `description` text DEFAULT NULL,
  `main_image` varchar(255) NOT NULL,
  `release_date` date NOT NULL,
  `repo_link` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `main_image`, `release_date`, `repo_link`, `created_at`, `updated_at`) VALUES
(4, 'ipsum', 'Possimus facilis consequatur sunt eligendi. Nesciunt itaque aperiam nulla doloremque consequuntur qui molestiae. Esse qui in quo explicabo. Quidem ut dolor enim et id placeat.', 'https://via.placeholder.com/640x480.png/00cc00?text=nihil', '1985-08-24', 'pariatur', '2023-02-09 10:52:00', '2023-02-09 10:52:00'),
(5, 'rem', 'Ducimus doloribus consectetur ut nisi ea ut nihil. Ut inventore esse qui doloribus consequatur. Placeat quo officiis repudiandae natus explicabo fuga magni. Aut accusantium et impedit.', 'https://via.placeholder.com/640x480.png/005544?text=suscipit', '2014-06-24', 'quae', '2023-02-09 10:52:00', '2023-02-09 10:52:00'),
(6, 'odit', 'Laborum qui minus accusamus est tempore. Sint facilis ducimus est voluptatem. Et expedita adipisci aut dolorum. Et qui nisi sit totam itaque deserunt omnis esse.', 'https://via.placeholder.com/640x480.png/00ffff?text=et', '1983-08-31', 'totam', '2023-02-09 10:52:00', '2023-02-09 10:52:00'),
(7, 'molestiae', 'Aut esse eos ut id. Enim velit rerum occaecati in nam excepturi rerum. Et consequuntur totam qui.', 'https://via.placeholder.com/640x480.png/00ccff?text=exercitationem', '1974-10-28', 'ipsam', '2023-02-09 10:52:00', '2023-02-09 10:52:00'),
(8, 'quam', 'Voluptatem aliquid suscipit sed earum aspernatur ducimus. Non laboriosam dolor architecto. Est mollitia velit voluptatem repellat officia quisquam tempora. Harum aut ut voluptatem omnis sed.', 'https://via.placeholder.com/640x480.png/00dd00?text=alias', '2022-09-12', 'et', '2023-02-09 10:52:00', '2023-02-09 10:52:00'),
(9, 'excepturi', 'In deleniti officia ab sequi reprehenderit beatae. Pariatur voluptas est eos qui. Labore consequatur fuga ut sed vel qui ratione. Quis laudantium praesentium et perferendis iure tempora voluptas.', 'https://via.placeholder.com/640x480.png/009922?text=repellat', '1971-02-04', 'id', '2023-02-09 10:52:00', '2023-02-09 10:52:00'),
(10, 'sit', 'Illum velit explicabo voluptas eos nesciunt sunt illo. Quo rerum quo quam. Corporis ut et esse harum. Fugiat repudiandae dignissimos aut dolor est doloribus.', 'https://via.placeholder.com/640x480.png/000044?text=aut', '2017-12-04', 'provident', '2023-02-09 10:52:00', '2023-02-09 10:52:00');

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Davide', 'davide0400@gmail.com', NULL, '$2y$10$GT8p6bzyNH3S4Ojhv3AOs.4hfCLPqRZj5/i8lOZAHZRCDomyDuU2W', NULL, '2023-02-09 10:25:54', '2023-02-09 10:25:54');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indici per le tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indici per le tabelle `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indici per le tabelle `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_name_unique` (`name`),
  ADD UNIQUE KEY `project_main_image_unique` (`main_image`),
  ADD UNIQUE KEY `project_repo_link_unique` (`repo_link`);

--
-- Indici per le tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la tabella `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT per la tabella `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
