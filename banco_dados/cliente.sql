-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/09/2023 às 02:26
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
  `id` int(2) NOT NULL,
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
(1, 'Felipe Pereira', 'felipe@gmail.com', '000.000.000-00', '00.000.000-0', '00 0000-0000', '00 00000-0000', '1997-08-10', 0),
(2, 'Victória Valentina', 'valentina@gmail.com', '111.111.111-11', '11.111.111-1', '11 1111-1111', '11 11111-1111', '1997-11-07', 1),
(3, 'Roberto Vieira', 'roberto@gmail.com', '222.222.222-22', '22.222.222-2', '22 2222-2222', '22 22222-2222', '1998-10-12', 1),
(4, 'Junior', 'junior@gmail.com', '000.000.000-00', '00.000.000-0', '19 98918-8585', '11 11111-1111', '2020-12-10', 1),
(5, 'Roberto Rodrigues', 'roberto@gmail.com', '000.000.000-00', '77.777.777-7', '19 98918-8485', '11 11111-1111', '2010-10-10', 0),
(6, 'Regina ', 'regina@gmail.com', '000.000.000-00', '88.777.777-8', '19989188481', '11 11111-1111', '1212-12-30', 0),
(7, 'Luara Pereira', 'luara@gmail.com', '115154848', '54255452425', '324567', '00 00000-0000', '2024-06-11', 0);

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
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
