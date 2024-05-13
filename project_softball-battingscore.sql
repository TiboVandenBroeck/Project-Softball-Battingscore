-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 13 mei 2024 om 12:14
-- Serverversie: 5.7.17
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project softball-battingscore`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `afterburners03-2024`
--

CREATE TABLE `afterburners03-2024` (
  `AB` int(11) NOT NULL,
  `K` int(11) NOT NULL,
  `BB` int(11) NOT NULL,
  `1B` int(11) NOT NULL,
  `2B` int(11) NOT NULL,
  `3B` int(11) NOT NULL,
  `HR` int(11) NOT NULL,
  `Safe/e` int(11) NOT NULL,
  `DP` int(11) NOT NULL,
  `FC` int(11) NOT NULL,
  `GO` int(11) NOT NULL,
  `LO` int(11) NOT NULL,
  `FO` int(11) NOT NULL,
  `AVG` double NOT NULL,
  `OBP` double NOT NULL,
  `SLG` double NOT NULL,
  `OPS` double NOT NULL,
  `Speler` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `afterburners03-2024`
--

INSERT INTO `afterburners03-2024` (`AB`, `K`, `BB`, `1B`, `2B`, `3B`, `HR`, `Safe/e`, `DP`, `FC`, `GO`, `LO`, `FO`, `AVG`, `OBP`, `SLG`, `OPS`, `Speler`) VALUES
(4, 0, 0, 1, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0.5, 0.75, 0.75, 1.5, 'Tibo Vanden Broeck'),
(6, 0, 0, 1, 3, 0, 0, 0, 0, 0, 1, 0, 1, 0.666667, 0.666667, 1.166667, 1.833333, 'Ruben Ravestyn'),
(5, 0, 0, 0, 1, 2, 0, 0, 1, 0, 0, 0, 1, 0.6, 0.8, 1, 1.8, 'Luka Decorte'),
(5, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0.8, 0.8, 0.8, 1.6, 'Geoffrey Andries'),
(9, 0, 0, 4, 1, 1, 0, 2, 0, 0, 0, 0, 1, 0.666667, 0.888889, 1, 1.888889, 'Emiel Kerckhof'),
(4, 0, 0, 2, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0.75, 0.75, 1, 1.75, 'Dieter Decorte'),
(6, 0, 0, 1, 2, 0, 2, 0, 0, 0, 0, 0, 1, 0.833333, 0.833333, 2.166667, 3, 'Chiel Callens'),
(6, 0, 0, 3, 1, 0, 0, 0, 0, 0, 0, 1, 1, 0.666667, 0.666667, 0.833333, 1.5, 'Adhemar Couwet'),
(8, 1, 0, 1, 1, 0, 0, 2, 0, 0, 0, 2, 1, 0.25, 0.5, 0.375, 0.875, 'Marie Parret'),
(6, 0, 0, 4, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0.666667, 0.666667, 0.666667, 1.333333, 'Kaily Blanckaert'),
(6, 0, 0, 4, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0.666667, 0.666667, 1.333333, 2, 'Josephine Berten'),
(6, 0, 0, 2, 2, 0, 0, 0, 0, 0, 1, 1, 0, 0.666667, 0.666667, 1, 1.666667, 'Julie Kerckhof'),
(6, 0, 0, 2, 0, 0, 0, 0, 1, 0, 2, 0, 1, 0.333333, 0.333333, 0.333333, 0.666667, 'Elise Hautekeur'),
(6, 1, 0, 0, 0, 0, 0, 1, 0, 1, 1, 0, 2, 0, 0.166667, 0, 0.166667, 'Eline Vanneste'),
(6, 1, 0, 2, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0.5, 0.5, 0.833333, 1.333333, 'Ariane Couwet');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `borgerhoutsquirels04-2024`
--

CREATE TABLE `borgerhoutsquirels04-2024` (
  `AB` int(11) NOT NULL,
  `K` int(11) NOT NULL,
  `BB` int(11) NOT NULL,
  `1B` int(11) NOT NULL,
  `2B` int(11) NOT NULL,
  `3B` int(11) NOT NULL,
  `HR` int(11) NOT NULL,
  `Safe/e` int(11) NOT NULL,
  `DP` int(11) NOT NULL,
  `FC` int(11) NOT NULL,
  `GO` int(11) NOT NULL,
  `LO` int(11) NOT NULL,
  `FO` int(11) NOT NULL,
  `AVG` double NOT NULL,
  `OBP` double NOT NULL,
  `SLG` double NOT NULL,
  `OPS` double NOT NULL,
  `Speler` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `borgerhoutsquirels04-2024`
--

INSERT INTO `borgerhoutsquirels04-2024` (`AB`, `K`, `BB`, `1B`, `2B`, `3B`, `HR`, `Safe/e`, `DP`, `FC`, `GO`, `LO`, `FO`, `AVG`, `OBP`, `SLG`, `OPS`, `Speler`) VALUES
(4, 0, 0, 1, 1, 0, 0, 0, 0, 1, 0, 0, 1, 0.5, 0.5, 0.75, 1.25, 'Tibo Vanden Broeck'),
(3, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0.333333, 0.333333, 0.333333, 0.666667, 'Ruben Ravestyn'),
(7, 1, 0, 1, 1, 0, 0, 0, 0, 1, 1, 1, 1, 0.285714, 0.285714, 0.428571, 0.714286, 'Luka Decorte'),
(6, 0, 0, 3, 2, 0, 0, 0, 0, 0, 0, 0, 1, 0.833333, 0.833333, 1.166667, 2, 'Geoffrey Andries'),
(2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 'Emiel Kerckhof'),
(3, 0, 0, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1.333333, 2.333333, 'Dieter Decorte'),
(5, 0, 0, 1, 2, 0, 0, 0, 0, 1, 1, 0, 0, 0.6, 0.6, 1, 1.6, 'Chiel Callens'),
(3, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0, 0, 1, 0.333333, 0.333333, 0.333333, 0.666667, 'Adhemar Couwet'),
(2, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0, 0.5, 0.5, 0.5, 1, 'Marie Parret'),
(3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0, 0, 0, 0, 'Kaily Blanckaert'),
(7, 1, 0, 1, 0, 0, 0, 1, 1, 0, 1, 0, 2, 0.142857, 0.285714, 0.142857, 0.428571, 'Josephine Berten'),
(7, 1, 0, 1, 0, 0, 0, 0, 0, 0, 1, 1, 3, 0.142857, 0.142857, 0.14287, 0.285714, 'Julie Kerckhof'),
(6, 0, 1, 2, 0, 0, 0, 0, 0, 0, 1, 0, 2, 0.4, 0.5, 0.4, 0.9, 'Elise Hautekeur'),
(4, 0, 0, 2, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0.5, 0.5, 0.5, 1, 'Eline Vanneste'),
(3, 0, 0, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0.333333, 0.333333, 0.333333, 0.666667, 'Ariane Couwet');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `Auteur` text NOT NULL,
  `Bericht` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `comments`
--

INSERT INTO `comments` (`id`, `Auteur`, `Bericht`) VALUES
(2, 'Jan', 'Whahahahah');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `frontlinersog03-2023`
--

CREATE TABLE `frontlinersog03-2023` (
  `AB` int(11) NOT NULL,
  `K` int(11) NOT NULL,
  `BB` int(11) NOT NULL,
  `1B` int(11) NOT NULL,
  `2B` int(11) NOT NULL,
  `3B` int(11) NOT NULL,
  `HR` int(11) NOT NULL,
  `Safe/e` int(11) NOT NULL,
  `DP` int(11) NOT NULL,
  `FC` int(11) NOT NULL,
  `GO` int(11) NOT NULL,
  `LO` int(11) NOT NULL,
  `FO` int(11) NOT NULL,
  `AVG` double NOT NULL,
  `OBP` double NOT NULL,
  `SLG` double NOT NULL,
  `OPS` double NOT NULL,
  `Speler` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `frontlinersog03-2023`
--

INSERT INTO `frontlinersog03-2023` (`AB`, `K`, `BB`, `1B`, `2B`, `3B`, `HR`, `Safe/e`, `DP`, `FC`, `GO`, `LO`, `FO`, `AVG`, `OBP`, `SLG`, `OPS`, `Speler`) VALUES
(4, 0, 1, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0.75, 0.8, 1.25, 2.05, 'Adhemar Couwet'),
(4, 1, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0.75, 0.75, 2, 2.75, 'Ariane Couwet'),
(4, 0, 0, 2, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0.75, 0.75, 1.75, 2.5, 'Chiel Callens'),
(4, 1, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0.5, 0.5, 1.25, 1.75, 'Dieter Decorte'),
(4, 0, 0, 2, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0.75, 0.75, 1.75, 2.5, 'Eline Vanneste'),
(4, 1, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0.75, 0.75, 1.75, 2.5, 'Elise Hautekeur'),
(4, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0.75, 0.75, 1.75, 2.5, 'Emiel Kerckhof'),
(4, 1, 0, 2, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0.75, 0.75, 1.75, 2.5, 'Geoffrey Andries'),
(4, 0, 0, 1, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0.5, 0.5, 1.25, 1.75, 'Josephine Berten'),
(4, 1, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 1, 0.5, 0.5, 1.25, 1.75, 'Julie Kerckhof'),
(4, 0, 0, 1, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0.75, 0.75, 1.75, 2.5, 'Kaily Blanckaert'),
(4, 0, 0, 2, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0.75, 0.75, 1.75, 2.5, 'Luka Decorte'),
(4, 1, 0, 2, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0.75, 0.75, 1.75, 2.5, 'Marie Parret'),
(4, 0, 0, 2, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0.75, 0.75, 1.75, 2.5, 'Ruben Ravestyn'),
(4, 0, 0, 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0.75, 0.75, 1.75, 2.5, 'Tibo Vanden Broeck');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `frontlinersog04-2024`
--

CREATE TABLE `frontlinersog04-2024` (
  `AB` int(11) NOT NULL,
  `K` int(11) NOT NULL,
  `BB` int(11) NOT NULL,
  `1B` int(11) NOT NULL,
  `2B` int(11) NOT NULL,
  `3B` int(11) NOT NULL,
  `HR` int(11) NOT NULL,
  `Safe/e` int(11) NOT NULL,
  `DP` int(11) NOT NULL,
  `FC` int(11) NOT NULL,
  `GO` int(11) NOT NULL,
  `LO` int(11) NOT NULL,
  `FO` int(11) NOT NULL,
  `AVG` double NOT NULL,
  `OBP` double NOT NULL,
  `SLG` double NOT NULL,
  `OPS` double NOT NULL,
  `Speler` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `frontlinersog04-2024`
--

INSERT INTO `frontlinersog04-2024` (`AB`, `K`, `BB`, `1B`, `2B`, `3B`, `HR`, `Safe/e`, `DP`, `FC`, `GO`, `LO`, `FO`, `AVG`, `OBP`, `SLG`, `OPS`, `Speler`) VALUES
(6, 1, 0, 2, 0, 0, 1, 0, 0, 0, 1, 1, 0, 0.5, 0.5, 1, 1.5, 'Tibo Vanden Broeck'),
(8, 0, 0, 1, 3, 0, 0, 0, 0, 0, 0, 1, 3, 0.5, 0.5, 0.875, 1.375, 'Ruben Ravestyn'),
(8, 1, 0, 1, 2, 1, 0, 0, 0, 0, 0, 2, 1, 0.5, 0.5, 1, 1.5, 'Luka Decorte'),
(8, 0, 0, 3, 2, 0, 1, 0, 0, 0, 1, 0, 1, 0.75, 0.75, 1.375, 2.125, 'Geoffrey Andries'),
(6, 0, 0, 3, 0, 0, 0, 0, 0, 0, 1, 0, 2, 0.5, 0.5, 0.5, 1, 'Emiel Kerckhof'),
(5, 0, 1, 0, 1, 0, 1, 0, 0, 0, 1, 0, 1, 0.6, 0.5, 1.6, 2.267, 'Chiel Callens'),
(3, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0.333333, 0.333333, 0.333333, 0.666667, 'Adhemar Couwet'),
(6, 1, 0, 1, 0, 0, 0, 0, 0, 1, 1, 0, 2, 0.166667, 0.166667, 0.166667, 0.333333, 'Marie Parret'),
(5, 2, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0.2, 0.2, 0.2, 0.4, 'Kaily Blanckaert'),
(9, 0, 0, 3, 1, 0, 0, 0, 0, 1, 2, 2, 0, 0.444444, 0.444444, 0.555556, 1, 'Josephine Berten'),
(9, 0, 1, 4, 2, 0, 0, 0, 0, 0, 1, 1, 0, 0.75, 0.777778, 1, 1.589, 'Julie Kerckhof'),
(9, 1, 0, 3, 0, 0, 0, 0, 0, 0, 2, 0, 3, 0.333333, 0.333333, 0.333333, 0.666667, 'Elise Hautekeur'),
(6, 0, 0, 3, 0, 0, 0, 0, 0, 0, 1, 0, 2, 0.5, 0.5, 0.5, 1, 'Eline Vanneste');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `leuven04-2024`
--

CREATE TABLE `leuven04-2024` (
  `AB` int(11) NOT NULL,
  `K` int(11) NOT NULL,
  `BB` int(11) NOT NULL,
  `1B` int(11) NOT NULL,
  `2B` int(11) NOT NULL,
  `3B` int(11) NOT NULL,
  `HR` int(11) NOT NULL,
  `Safe/e` int(11) NOT NULL,
  `DP` int(11) NOT NULL,
  `FC` int(11) NOT NULL,
  `GO` int(11) NOT NULL,
  `LO` int(11) NOT NULL,
  `FO` int(11) NOT NULL,
  `AVG` double NOT NULL,
  `OBP` double NOT NULL,
  `SLG` double NOT NULL,
  `OPS` double NOT NULL,
  `Speler` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `leuven04-2024`
--

INSERT INTO `leuven04-2024` (`AB`, `K`, `BB`, `1B`, `2B`, `3B`, `HR`, `Safe/e`, `DP`, `FC`, `GO`, `LO`, `FO`, `AVG`, `OBP`, `SLG`, `OPS`, `Speler`) VALUES
(7, 0, 0, 3, 2, 0, 0, 0, 0, 0, 0, 1, 0, 0.714286, 0.714286, 1, 1.714286, 'Tibo Vanden Broeck'),
(4, 0, 0, 2, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0.75, 0.75, 1, 1.75, 'Ruben Ravestyn'),
(11, 0, 0, 4, 2, 2, 1, 0, 0, 0, 0, 0, 2, 0.818182, 0.818182, 1.636364, 2.454545, 'Luka Decorte'),
(9, 0, 1, 4, 0, 1, 0, 1, 0, 0, 0, 1, 1, 0.625, 0.777778, 0.875, 1.652778, 'Emiel Kerckhof'),
(4, 0, 1, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 0.666667, 0.75, 1, 1.75, 'Dieter Decorte'),
(11, 0, 0, 2, 1, 1, 2, 0, 0, 0, 0, 2, 3, 0.545455, 0.545455, 1.363636, 1.909091, 'Chiel Callens'),
(5, 0, 1, 1, 0, 0, 0, 0, 0, 0, 1, 0, 1, 0.25, 0.4, 0.25, 0.65, 'Adhemar Couwet'),
(7, 1, 0, 1, 1, 0, 0, 1, 1, 0, 0, 0, 2, 0.285714, 0.428571, 0.428574, 0.857143, 'Marie Parret'),
(11, 2, 1, 3, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0.3, 0.363636, 0.3, 0.663636, 'Kaily Blanckaert'),
(9, 2, 0, 5, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0.666667, 0.777778, 0.777778, 1.555556, 'Josephine Berten'),
(10, 0, 0, 2, 1, 0, 0, 1, 0, 0, 4, 0, 2, 0.3, 0.4, 0.4, 0.8, 'Julie Kerckhof'),
(11, 0, 0, 3, 1, 0, 0, 0, 0, 0, 2, 2, 3, 0.363636, 0.363636, 0.454545, 0.818182, 'Elise Hautekeur'),
(3, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 2, 0.333333, 0.333333, 0.333333, 0.666667, 'Eline Vanneste');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
