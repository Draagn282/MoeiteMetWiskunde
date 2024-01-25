-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 25 jan 2024 om 10:29
-- Serverversie: 10.4.28-MariaDB
-- PHP-versie: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moeitemetwiskunde`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `beheer`
--

CREATE TABLE `beheer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `naam` varchar(255) NOT NULL,
  `wachtwoord` varchar(255) NOT NULL,
  `laatsteLogin` datetime NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `beheer`
--

INSERT INTO `beheer` (`id`, `naam`, `wachtwoord`, `laatsteLogin`, `email`) VALUES
(1, 'Vincent', 'Qwerty123@', '2024-01-23 13:06:29', 'Vincent@vincent.nl');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lesuren`
--

CREATE TABLE `lesuren` (
  `Id` int(11) NOT NULL,
  `Dag` int(11) DEFAULT NULL,
  `StartUurVanDag` time NOT NULL,
  `EindUurVanDag` time NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `lesuren`
--

INSERT INTO `lesuren` (`Id`, `Dag`, `StartUurVanDag`, `EindUurVanDag`, `Status`) VALUES
(1, 1, '12:00:00', '13:00:00', 0),
(2, 1, '13:00:00', '14:00:00', 1),
(3, 1, '15:00:00', '16:00:00', 1),
(4, 1, '16:00:00', '17:00:00', 1),
(5, 1, '17:00:00', '18:00:00', 0),
(6, 2, '12:00:00', '13:00:00', 0),
(7, 2, '13:00:00', '14:00:00', 0),
(8, 2, '15:00:00', '16:00:00', 2),
(9, 2, '16:00:00', '17:00:00', 2),
(10, 2, '17:00:00', '18:00:00', 2),
(11, 3, '12:00:00', '13:00:00', 0),
(12, 3, '13:00:00', '14:00:00', 0),
(13, 3, '15:00:00', '16:00:00', 1),
(14, 3, '16:00:00', '17:00:00', 1),
(15, 3, '17:00:00', '18:00:00', 0),
(16, 4, '12:00:00', '13:00:00', 0),
(17, 4, '13:00:00', '14:00:00', 1),
(18, 4, '15:00:00', '16:00:00', 0),
(19, 4, '16:00:00', '17:00:00', 2),
(20, 4, '17:00:00', '18:00:00', 0),
(21, 5, '12:00:00', '13:00:00', 0),
(22, 5, '13:00:00', '14:00:00', 0),
(23, 5, '15:00:00', '16:00:00', 0),
(24, 5, '16:00:00', '17:00:00', 0),
(25, 5, '17:00:00', '18:00:00', 0),
(26, 6, '12:00:00', '13:00:00', 1),
(27, 6, '13:00:00', '14:00:00', 1),
(28, 6, '15:00:00', '16:00:00', 2),
(29, 6, '16:00:00', '17:00:00', 0),
(30, 6, '17:00:00', '18:00:00', 0),
(31, 7, '12:00:00', '13:00:00', 0),
(32, 7, '13:00:00', '14:00:00', 0),
(33, 7, '15:00:00', '16:00:00', 0),
(34, 7, '16:00:00', '17:00:00', 0),
(35, 7, '17:00:00', '18:00:00', 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `personal_access_tokens`
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
-- Tabelstructuur voor tabel `recenties`
--

CREATE TABLE `recenties` (
  `Id` int(11) NOT NULL,
  `Naam` varchar(255) NOT NULL,
  `Text` varchar(255) NOT NULL,
  `Goedkeuring` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `recenties`
--

INSERT INTO `recenties` (`Id`, `Naam`, `Text`, `Goedkeuring`) VALUES
(1, 'Johanes', 'Ik Vind dat Vincent mij goed heeft geholpen. Ik kan heel goed wiskunde nu doen dus ik ben blij met vincennt. Ik ga proberen om  mijn best te doen op het examen.', 0),
(2, 'Bram', 'Samen met vincent heb ik veel wiskunde gedaan. Het heeft mij goed geholpen', 0),
(3, 'Bas', 'Vincent is een TOP gozer.', 0),
(4, 'Roos', 'Ik vind Vincent een goede docent. Hij kan goed luisteren en kan goed uitleggen. Als ik een vraag heb laat hij mij het oplossen met hulp. Dus dan kan ik zien dat ik het antwoord al weet, maar wel hulp krijg.', 0),
(5, 'daan', 'een beetje tekst', 0);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `beheer`
--
ALTER TABLE `beheer`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `lesuren`
--
ALTER TABLE `lesuren`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexen voor tabel `recenties`
--
ALTER TABLE `recenties`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `beheer`
--
ALTER TABLE `beheer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `lesuren`
--
ALTER TABLE `lesuren`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `recenties`
--
ALTER TABLE `recenties`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
