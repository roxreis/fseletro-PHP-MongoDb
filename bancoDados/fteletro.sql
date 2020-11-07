-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Out-2020 às 00:48
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `fteletro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` int(11) NOT NULL UNIQUE AUTO_INCREMENT,
  `nome_cliente` varchar(100) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `ddd` int(2) NOT NULL,
  `telefone` int(9) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `valor_unitario` float NOT NULL,
  `quantidade` int(10) NOT NULL,
  `valor_total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`nome_cliente`, `endereco`, `ddd`, `telefone`, `nome_produto`, `valor_unitario`, `quantidade`, `valor_total`) VALUES
('Carlos Augusto', 'Rua 1 - 34', 11, 222222222, 'Relogio Samsung Rosa', 1000, 2, 2000),
('Marcia Silva', 'Rua 2 - 150', 15, 22233333, 'Smartphone Samsung Azul', 3900, 1, 3900),
('Ana Silva', 'Rua 15 - 350', 11, 222555558, 'Notebook Samsung', 4000, 1, 4000);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL UNIQUE AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `preco` float NOT NULL,
  `precoFinal` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`categoria`, `descricao`, `imagem`, `preco`, `precoFinal`) VALUES
('Relogios', 'Relogio Samsung Rosa', 'img/relogio1.JPG', 2000, 1000),
('Relogios', 'Relogio Smart Band Preto', 'img/relogio2.JPG', 3500, 3000),
('Relogios', 'Relogio Smart Band Branco', 'img/relogio3.JPG', 35000, 3000),
('Tvs', 'TV TCL', 'img/tv1.JPG', 6000, 5000),
('Tvs', 'TV Samsung', 'img/tv2.JPG', 12000, 10000),
('Tvs', 'TV LG', 'img/tv3.JPG', 5000, 3500),
('Smartphones', 'Smartphone Samsung Rosa', 'img/celular1.JPG', 4000, 3900),
('Smartphones', 'Smartphone Samsung Azul', 'img/celular2.JPG', 4000, 3900),
('Smartphones', 'Smartphone Samsung Grafite', 'img/celular3.JPG', 4000, 3900),
('Notebooks', 'Notebook Asus', 'img/note1.JPG', 8000, 7000),
('Notebooks', 'Notebook Asus', 'img/note2.JPG', 7000, 6500),
('Notebooks', 'Notebook Samsung', 'img/note3.JPG', 5000, 4000);

--
-- Índices para tabelas despejadas
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
