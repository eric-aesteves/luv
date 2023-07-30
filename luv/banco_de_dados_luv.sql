-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jul-2023 às 03:05
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `banco_de_dados_luv`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `match`
--

CREATE TABLE `match` (
  `id_user1` int(11) NOT NULL,
  `id_user2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `nome` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL,
  `genero` varchar(30) NOT NULL,
  `hobbies` varchar(300) NOT NULL,
  `sexo` enum('M','F') NOT NULL,
  `orientacao` enum('Hetero','Homo','Bi','Outro') NOT NULL,
  `senha` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`nome`, `email`, `data_nascimento`, `genero`, `hobbies`, `sexo`, `orientacao`, `senha`, `id`) VALUES
('afsasfas', 'faafasff@', '2023-07-20', '', '', 'M', 'Hetero', '123', 1),
('Igor', 'igor@gmail.com', '2023-07-31', '', '', 'M', 'Hetero', '123', 2),
('brenda ', 'Brendaleite588@gmail.com', '2023-07-02', 'a', 'a', '', '', 'a', 6),
('', '', '0000-00-00', '', '', '', '', '', 7),
('', '', '0000-00-00', '', '', '', '', '', 8),
('brenda', 'Brendaleite588@gmail.com', '2023-07-04', 'a', 'a', '', '', '123', 9),
('', '', '0000-00-00', '', '', '', '', '', 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
