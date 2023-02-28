-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 28, 2023 alle 12:38
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
-- Database: `2es`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `ristoranti`
--

CREATE TABLE `ristoranti` (
  `id` int(11) NOT NULL,
  `nome` text NOT NULL,
  `voti_tot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `ristoranti`
--

INSERT INTO `ristoranti` (`id`, `nome`, `voti_tot`) VALUES
(1, 'colle salomonio', 0),
(2, 'villa finestrerre', 0),
(3, 'vazianello', 0),
(4, 'bella venere', 0),
(5, 'agriturismo gelsomino', 0);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `ristoranti`
--
ALTER TABLE `ristoranti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `ristoranti`
--
ALTER TABLE `ristoranti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
