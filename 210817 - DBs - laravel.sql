-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 17-Ago-2021 às 13:49
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id`, `nome`) VALUES
(1, 'Escritório'),
(2, 'Informática'),
(3, 'Artesanatos'),
(4, 'Livros'),
(5, 'Games'),
(6, 'Filmes'),
(7, 'Escolar'),
(8, 'Revistas'),
(9, 'Canetas'),
(10, 'Lápis'),
(11, 'Borrachas'),
(12, 'Réguas'),
(13, 'Kits'),
(14, 'Cartões'),
(15, 'Fitas'),
(16, 'Grampeadores'),
(17, 'Colas'),
(18, 'Pastas'),
(19, 'Roupas'),
(20, 'Limpeza');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` text NOT NULL,
  `valor` decimal(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `valor`) VALUES
(1, 'Caneta', '...', '1.50'),
(2, 'Masso de Papel', '...', '30.00'),
(3, 'Lápis', '...', '1.00'),
(4, 'Borracha', '...', '0.50'),
(5, 'Caderno', '...', '15.60'),
(6, 'Cartolina', '...', '0.50'),
(7, 'Caderneta', '...', '12.50'),
(8, 'Capa Livro', '...', '3.50'),
(9, 'Livro Português', '...', '28.50'),
(10, 'Livro Matemática', '...', '31.50'),
(11, 'Livro Geografia', '...', '18.50'),
(12, 'Livro Inglês', '...', '28.50'),
(13, 'Livro História', '...', '31.50'),
(14, 'Livro Biologia', '...', '18.50'),
(17, 'Caderno Super Heróis - Homem Aranha', '...', '15.60'),
(18, 'Caderno Super Heróis - Dr Estranho', '', '12.50'),
(19, 'Caderno Super Heróis - Homem de Ferro', '...', '15.60'),
(20, 'Caderno Super Heróis - Incrível Hulk', '', '12.50'),
(21, 'Caderno Super Heróis - Capitão América', '...', '15.60'),
(22, 'Caderno Super Heróis - Viúva Negra', '', '12.50');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
