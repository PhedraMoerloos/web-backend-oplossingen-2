-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 21 jan 2017 om 13:30
-- Serverversie: 10.1.16-MariaDB
-- PHP-versie: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `periode2-opdracht`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `hide` tinyint(1) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `articles`
--

INSERT INTO `articles` (`id`, `title`, `url`, `text`, `created_at`, `updated_at`, `published_at`, `hide`, `user_id`) VALUES
(2, 'New article', 'http://www.google.com', 'Third attempt at first article! GO!', '2017-01-19 18:17:51', '2017-01-19 18:17:51', '2017-01-19 18:17:51', 0, 1),
(3, 'Second article', 'http://www.facebook.com', 'Okay please please pleaaase', '2017-01-19 18:20:33', '2017-01-19 18:20:33', '2017-01-19 18:20:33', 0, 1),
(5, 'Second article by lukas', 'http://jokes.com', 'heheheheheheheheheh', '2017-01-21 10:27:31', '2017-01-21 10:27:31', '2017-01-21 10:27:31', 0, 6),
(6, 'Groentenmarkt', 'http://wase-groentenwinkel.be', 'In deze winkel vind je de meest verse peterselie! ;) ', '2017-01-21 11:07:48', '2017-01-21 11:07:48', '2017-01-21 11:07:48', 0, 7);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `commented_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `article_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `comments`
--

INSERT INTO `comments` (`id`, `comment`, `created_at`, `updated_at`, `commented_at`, `article_id`, `user_id`) VALUES
(1, 'I want to write a comment on this!! :o ', '2017-01-19 18:22:49', '2017-01-19 18:22:49', '2017-01-19 18:22:49', 3, 1),
(2, 'I want to write a comment on this as well ', '2017-01-21 10:28:16', '2017-01-21 10:28:16', '2017-01-21 10:28:16', 3, 6),
(3, 'Ik lust geen peterselie...', '2017-01-21 11:08:33', '2017-01-21 11:08:33', '2017-01-21 11:08:33', 6, 6),
(4, 'We hebben nog andere groenten ook hè', '2017-01-21 11:10:51', '2017-01-21 11:10:51', '2017-01-21 11:10:51', 6, 7),
(5, 'Dit is een beetje leeg', '2017-01-21 11:12:52', '2017-01-21 11:12:52', '2017-01-21 11:12:52', 2, 7),
(7, 'Pfff saai bleh', '2017-01-21 11:16:05', '2017-01-21 11:16:05', '2017-01-21 11:16:05', 5, 7),
(8, 'Idd vind ik ook!', '2017-01-21 11:19:24', '2017-01-21 11:19:24', '2017-01-21 11:19:24', 2, 6);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_01_10_163551_create-articles-table', 1),
('2017_01_11_112229_create_comment_table', 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'PhedraMoerloos', 'phedra.moerloos@student.kdg.be', '$2y$10$11YmWIXw/ffOyrZhlmXnSOJtv1BXXiLwS2tHjIgSX/YUt.cyGNt7e', NULL, '2017-01-19 18:16:59', '2017-01-19 18:16:59'),
(3, 'LunaMoerloos', 'p.moerloos@gmail.be', '$2y$10$UooOuGUt615wSx5n80dyw.JrBseJ6TXbWS9SNIChc5KJ497Aclrle', NULL, '2017-01-19 18:34:18', '2017-01-19 18:34:18'),
(6, 'LukasHuybrecht', 'lukas.huybrecht@hotmail.com', '$2y$10$QZGFJU7bJJwsT9LVLQ2GDuyuY5ChOeAxEfIcnA8PbE3.uvUQaVmX2', 'XLUQYYag8FbPuZ6SO4gUuhwFSexnXOqLfH2HK36NiqYmtsq1mbE8lH0zDBIO', '2017-01-19 18:49:02', '2017-01-21 11:09:20'),
(7, 'PeterSelie', 'peter.selie@gmail.com', '$2y$10$d2F1EaByPctBtYlMsdDv4.mGYmV0xv3GGBWWuscJMb9rqqhmcEzCe', 'jh0dDnAvzLBXyURHehfeCEk7ZcRxXYHlCdKXAJmd4DDH5jK0ZOelYxVrBNyl', '2017-01-21 11:06:23', '2017-01-21 11:17:39');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `articles_user_id_foreign` (`user_id`);

--
-- Indexen voor tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_article_id_foreign` (`article_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexen voor tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Beperkingen voor tabel `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
