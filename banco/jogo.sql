-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Maio-2022 às 03:56
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `jogo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastros`
--

CREATE TABLE `cadastros` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastros`
--

INSERT INTO `cadastros` (`id`, `usuario`, `senha`) VALUES
(1, 'teste23', 'teste'),
(2, 'teste2', 'teste'),
(3, 'teste', 'teste'),
(4, 'testedsadsadsa', 'teste'),
(5, 'testesasasasasasasasa', 'teste'),
(6, 'testeaaaaaaaaaaaa', 'teste'),
(7, 'testeaaaa', 'teste'),
(8, 'admin', 'admin');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastros`
--
ALTER TABLE `cadastros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastros`
--
ALTER TABLE `cadastros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
