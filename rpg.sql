-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jun-2023 às 05:09
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rpg`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `personagem`
--

CREATE TABLE `personagem` (
  `id_personagem` int(10) UNSIGNED NOT NULL,
  `classe_per` varchar(40) NOT NULL,
  `geo_personagem` varchar(40) NOT NULL,
  `consti_personagem` varchar(80) NOT NULL,
  `forca_personagem` float NOT NULL,
  `resist_personagem` float NOT NULL,
  `intel_personagem` float NOT NULL,
  `sabedoria_personagem` float NOT NULL,
  `cat_armadura` varchar(40) NOT NULL,
  `vida_personagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `personagem`
--

INSERT INTO `personagem` (`id_personagem`, `classe_per`, `geo_personagem`, `consti_personagem`, `forca_personagem`, `resist_personagem`, `intel_personagem`, `sabedoria_personagem`, `cat_armadura`, `vida_personagem`) VALUES
(1, 'Arqueiro', 'Elfo', 'Carne', 1.2, 4, 0.5, 0.2, 'Couro', 10),
(5, 'Arqueiro', 'Fada', 'Purpurina', 10, 6.7, 0.5, 5, 'Forte', 2),
(7, 'Arqueiro', 'Elfo', 'Osso', 1.2, 6.7, 0.5, 7, 'Diamante', 1),
(9, 'Espadachim', 'Troll', 'Purpurina', 1.2, 4, 0.5, 10, 'Linha', 1),
(10, 'Espadachim', 'Troll', 'Purpurina', 1.2, 4, 0.5, 10, 'Linha', 1),
(11, 'Espadachim', 'Troll', 'Purpurina', 1.2, 4, 0.5, 10, 'Linha', 1),
(12, 'Espadachim', 'Troll', 'Purpurina', 10, 4, 1, 0.1, 'Couro', 1),
(13, 'Espadachim', 'Troll', 'Purpurina', 10, 4, 1, 0.1, 'Couro', 1),
(14, 'Espadachim', 'Troll', 'Purpurina', 10, 4, 1, 0.1, 'Couro', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `personagem`
--
ALTER TABLE `personagem`
  ADD PRIMARY KEY (`id_personagem`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `personagem`
--
ALTER TABLE `personagem`
  MODIFY `id_personagem` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
