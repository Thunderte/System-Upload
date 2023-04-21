-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/04/2023 às 09:31
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
-- Banco de dados: `sunset`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `mensagem` text NOT NULL,
  `tipo` varchar(240) NOT NULL,
  `data` varchar(240) NOT NULL,
  `author` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `logs`
--

INSERT INTO `logs` (`id`, `mensagem`, `tipo`, `data`, `author`) VALUES
(3, 'O usuário Thunder1 fez login com o ip ::1', 'Login', '21/04/2023 09:24', 'Thunder1');

-- --------------------------------------------------------

--
-- Estrutura para tabela `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `pasta` varchar(140) NOT NULL,
  `arquivo` varchar(140) NOT NULL,
  `author` varchar(140) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(140) NOT NULL,
  `password` varchar(140) NOT NULL,
  `email` varchar(140) NOT NULL,
  `rank` int(1) NOT NULL,
  `log_ip` varchar(240) NOT NULL,
  `reg_ip` varchar(240) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
