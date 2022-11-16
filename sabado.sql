-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 16-Nov-2022 às 10:43
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sabado`
--
CREATE DATABASE IF NOT EXISTS `sabado` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `sabado`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `nome` varchar(110) NOT NULL,
  `idade` varchar(100) NOT NULL,
  `img` varchar(300) NOT NULL,
  `id` int(20) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`nome`, `idade`, `img`, `id`) VALUES
('m,hasfhamfanm', '0978787878', 'recebidos/6329d18a4a181.jpg', 1),
('Rua puta que pariu, 90', '99001230103', 'recebidos/6332d1730dd33.jpg', 2),
('Rua puta que pariu, 90', '84463261616984984651', 'recebidos/6332d579937be.jpg', 3),
('Maria Eduarda Moreno dos Santos', '17', 'recebidos/636e3c1a217fd.jpg', 4),
('Maria Eduarda Moreno dos Santos', '17', 'recebidos/636e3c2bf0e4c.jpg', 5),
('maria fedida', '19', 'recebidos/6374bb43b57c9.jpg', 6);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
