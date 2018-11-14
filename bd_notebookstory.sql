-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13-Nov-2018 às 14:40
-- Versão do servidor: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_notebookstory`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_adms`
--

CREATE TABLE `tb_adms` (
  `id` int(11) NOT NULL,
  `nome` varchar(160) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(254) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_adms`
--

INSERT INTO `tb_adms` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Rafael', 'rafael@lindo.com', 'senha');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_notes`
--

CREATE TABLE `tb_notes` (
  `id` int(11) NOT NULL,
  `marca` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ram` int(11) NOT NULL,
  `proc` float NOT NULL,
  `hd` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `tb_notes`
--

INSERT INTO `tb_notes` (`id`, `marca`, `cor`, `ram`, `proc`, `hd`) VALUES
(1, 'Teste', 'Verde', 15, 3.4, 250),
(2, 'Teste 2', 'preto', 3, 2.53, 600.33);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_adms`
--
ALTER TABLE `tb_adms`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tb_notes`
--
ALTER TABLE `tb_notes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_adms`
--
ALTER TABLE `tb_adms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_notes`
--
ALTER TABLE `tb_notes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
