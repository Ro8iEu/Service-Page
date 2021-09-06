-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Wrz 2021, 22:43
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `service`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `employee`
--

CREATE TABLE `employee` (
  `id_employee` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `surname` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `report`
--

CREATE TABLE `report` (
  `id_report` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `surname` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `phone` varchar(9) COLLATE utf8mb4_polish_ci NOT NULL,
  `model` varchar(100) COLLATE utf8mb4_polish_ci NOT NULL,
  `description` text COLLATE utf8mb4_polish_ci NOT NULL,
  `comment` text COLLATE utf8mb4_polish_ci DEFAULT NULL,
  `cost` float(5,2) DEFAULT NULL,
  `date_of_report` date DEFAULT current_timestamp(),
  `date_of_repair` date DEFAULT NULL,
  `id_repair` int(11) NOT NULL,
  `id_device` int(11) NOT NULL,
  `id_status` int(11) DEFAULT 3,
  `id_employee` int(11) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `type_of_device`
--

CREATE TABLE `type_of_device` (
  `id_device` int(11) NOT NULL,
  `name` varchar(45) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `type_of_device`
--

INSERT INTO `type_of_device` (`id_device`, `name`) VALUES
(3, 'Karta graficzna'),
(4, 'Monitor'),
(5, 'Procesor'),
(6, 'Zasilacz'),
(7, 'Laptop'),
(8, 'Komputer Stacjonarny'),
(9, 'Telefon'),
(10, 'Telewizor');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `type_of_repair`
--

CREATE TABLE `type_of_repair` (
  `id_repair` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `type_of_repair`
--

INSERT INTO `type_of_repair` (`id_repair`, `name`) VALUES
(3, 'Diagnostyka'),
(4, 'Czyszczenie'),
(5, 'Naprawa'),
(6, 'Reklamacja');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `type_of_role`
--

CREATE TABLE `type_of_role` (
  `id_role` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `type_of_role`
--

INSERT INTO `type_of_role` (`id_role`, `name`) VALUES
(1, 'admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `type_of_status`
--

CREATE TABLE `type_of_status` (
  `id_status` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Zrzut danych tabeli `type_of_status`
--

INSERT INTO `type_of_status` (`id_status`, `name`) VALUES
(3, 'Przyjęty'),
(4, 'Diagnozowany'),
(5, 'Naprawiony'),
(6, 'Wysłano'),
(7, 'Zakończony');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `surname` varchar(30) COLLATE utf8mb4_polish_ci NOT NULL,
  `login` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `password` varchar(20) COLLATE utf8mb4_polish_ci NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id_employee`);

--
-- Indeksy dla tabeli `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `id_device` (`id_device`),
  ADD KEY `id_employee` (`id_employee`),
  ADD KEY `id_repair` (`id_repair`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeksy dla tabeli `type_of_device`
--
ALTER TABLE `type_of_device`
  ADD PRIMARY KEY (`id_device`);

--
-- Indeksy dla tabeli `type_of_repair`
--
ALTER TABLE `type_of_repair`
  ADD PRIMARY KEY (`id_repair`);

--
-- Indeksy dla tabeli `type_of_role`
--
ALTER TABLE `type_of_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indeksy dla tabeli `type_of_status`
--
ALTER TABLE `type_of_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `login` (`login`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `employee`
--
ALTER TABLE `employee`
  MODIFY `id_employee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT dla tabeli `type_of_device`
--
ALTER TABLE `type_of_device`
  MODIFY `id_device` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `type_of_repair`
--
ALTER TABLE `type_of_repair`
  MODIFY `id_repair` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `type_of_role`
--
ALTER TABLE `type_of_role`
  MODIFY `id_role` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `type_of_status`
--
ALTER TABLE `type_of_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`id_device`) REFERENCES `type_of_device` (`id_device`),
  ADD CONSTRAINT `report_ibfk_2` FOREIGN KEY (`id_employee`) REFERENCES `employee` (`id_employee`),
  ADD CONSTRAINT `report_ibfk_3` FOREIGN KEY (`id_repair`) REFERENCES `type_of_repair` (`id_repair`),
  ADD CONSTRAINT `report_ibfk_4` FOREIGN KEY (`id_status`) REFERENCES `type_of_status` (`id_status`),
  ADD CONSTRAINT `report_ibfk_5` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Ograniczenia dla tabeli `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `type_of_role` (`id_role`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
