-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 17. Jun 2018 um 11:56
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
-- Datenbank: `jh`
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
  `fullLoc1` text NOT NULL,
  `fullLoc2` text NOT NULL,
  `correct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `graphs`
--

INSERT INTO `graphs` (`ID`, `class`, `header`, `expl`, `jsloc1`, `jsloc2`, `fullLoc1`, `fullLoc2`, `correct`) VALUES
(1, 2, 'Gewalt', 'Statistik ueber Gewaltkriminalitaet', 'charts/chart7.js', 'charts/chart8.js', 'fullchart/chart7.html', 'fullchart/chart8.html', 2),
(2, 2, 'Erderwaermung', 'Das Klima auf der wird Zeit fuer Zeit waermer. Und natuerlich gibt es dafuer auch Statistiken.', 'charts/chart5.js', 'charts/chart6.js', 'fullchart/chart5.html', 'fullchart/chart6.html', 1),
(3, 2, 'Asylbewerber', 'Einwanderungszahlen der Jahre', 'charts/chart1.js', 'charts/chart2.js', 'fullchart/chart1.html', 'fullchart/chart2.html', 2),
(4, 2, 'Amazon Umsatz', 'Der Umsatz des Grosskonzernes Amazon.', 'charts/chart3.js', 'charts/chart4.js', 'fullchart/chart3.html', 'fullchart/chart4.html', 2);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
