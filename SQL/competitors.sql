-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 14 mrt 2022 om 21:16
-- Serverversie: 10.4.20-MariaDB
-- PHP-versie: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `texas-scramble-nh`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `competitors`
--

CREATE TABLE `competitors` (
  `id` int(3) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `gender` varchar(50) DEFAULT NULL,
  `handicap` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `competitors`
--

INSERT INTO `competitors` (`id`, `name`, `gender`, `handicap`) VALUES
(1, 'Arno', 'man', 22.3),
(2, 'Geore', 'man', 25.8),
(3, 'Michel', 'man', 24.6),
(4, 'Peter', 'man', 23.6),
(5, 'Sylvia', 'vrouw', 29.2),
(6, 'Jan', 'man', 26.5),
(7, 'Bram', 'man', 23.2),
(8, 'Ruud', 'man', 44),
(9, 'Leon', 'man', 18.4),
(10, 'Bart', 'man', 24.9),
(11, 'Ornella', 'vrouw', 39);

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `competitors`
--
ALTER TABLE `competitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `competitors`
--
ALTER TABLE `competitors`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
