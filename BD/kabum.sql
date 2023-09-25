-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26/09/2023 às 01:04
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `kabum`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `cpf` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `rg` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telefone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `celular` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `data_nascimento` date NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `cpf`, `rg`, `telefone`, `celular`, `data_nascimento`, `status`) VALUES
(11, 'Felipe Gabriel São Paulo', 'felipe@gmail.com', '432.452.968-00', '77.777.777-7', '00 00000-0000', '11 11111-1111', '1997-08-10', 1),
(12, 'Roberto Gabriel São Paulo', 'roberto@gmail.com', '432.452.968-00', '77.777.777-7', '00 00000-0000', '11 11111-1111', '1997-08-10', 0),
(13, 'João Paulo', 'Joao@hotmail.com', '333.333.333-77', '88.777.777-8', '16 98984-8586', '17 98765-5545', '1999-12-10', 1),
(14, 'Victória Valentina', 'valentina@gmail.com', '432.456.788.00', '88.555.789.9', '19 89884-5555', '12 4548-8888', '2000-12-01', 1),
(15, 'Felipe Gabriel São Paulo', 'roberto@gmail.com', '432.452.968-00', '77.777.777-7', '19989188481', '11 11111-1111', '1212-12-12', 1),
(16, 'Felipe Gabriel São Paulo', 'roberto@gmail.com', '432.452.968-00', '77.777.777-7', '19989188481', '11 11111-1111', '1212-12-12', 1),
(17, 'Felipe Gabriel São Paulo', 'roberto@gmail.com', '432.452.968-00', '77.777.777-7', '19989188481', '11 11111-1111', '1212-12-12', 1),
(18, 'Felipe Gabriel São Paulo', 'roberto@gmail.com', '432.452.968-00', '77.777.777-7', '19989188481', '11 11111-1111', '1212-12-12', 1),
(19, 'Felipe Gabriel São Paulo', 'roberto@gmail.com', '432.452.968-00', '77.777.777-7', '19989188481', '11 11111-1111', '1212-12-12', 1),
(20, 'Felipe Gabriel São Paulo', 'roberto@gmail.com', '432.452.968-00', '77.777.777-7', '19989188481', '11 11111-1111', '1212-12-12', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
