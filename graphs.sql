-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 16. Jun 2018 um 23:14
-- Server-Version: 10.1.33-MariaDB
-- PHP-Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `zahlen`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `graphs`
--

CREATE TABLE `graphs` (
  `ID` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `header` text NOT NULL,
  `expl` text NOT NULL,
  `jsloc1` text NOT NULL,
  `jsloc2` text NOT NULL,
  `correct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `graphs`
--

INSERT INTO `graphs` (`ID`, `class`, `header`, `expl`, `jsloc1`, `jsloc2`, `correct`) VALUES
(2, 2, 'Asylbewerber', 'Einwanderungszahlen der Jahre', 'charts/chart1.js', 'charts/chart2.js', 2);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `graphs`
--
ALTER TABLE `graphs`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `graphs`
--
ALTER TABLE `graphs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
