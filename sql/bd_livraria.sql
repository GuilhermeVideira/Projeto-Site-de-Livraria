-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 21/11/2023 às 01:01
-- Versão do servidor: 8.0.35
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_livraria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_cliente`
--

CREATE TABLE `tb_cliente` (
  `cd_cliente` int NOT NULL,
  `nm_cliente` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `nm_endereco` varchar(45) DEFAULT NULL,
  `nr_endereco` int DEFAULT NULL,
  `nr_cpf` char(11) DEFAULT NULL,
  `nr_cnpj` char(14) DEFAULT NULL,
  `nr_senha` int DEFAULT NULL,
  `nr_telefone` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `tb_cliente`
--

INSERT INTO `tb_cliente` (`cd_cliente`, `nm_cliente`, `nm_endereco`, `nr_endereco`, `nr_cpf`, `nr_cnpj`, `nr_senha`, `nr_telefone`) VALUES
(10, 'Guilherme Videira', 'Av. Principal', 2000, '50965957810', '12376937288183', 1234567, '13996374998'),
(11, 'Camila Santos', 'Av. Monteiro Lombato', 494, '8483787384', '8379196173', 871033, '1335060604');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_compra`
--

CREATE TABLE `tb_compra` (
  `cd_compra` int NOT NULL,
  `nm_livro` varchar(45) DEFAULT NULL,
  `dt_compra` date DEFAULT NULL,
  `vl_compra` decimal(6,2) DEFAULT NULL,
  `nm_editora` varchar(45) DEFAULT NULL,
  `fk_cd_cliente` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `tb_compra`
--

INSERT INTO `tb_compra` (`cd_compra`, `nm_livro`, `dt_compra`, `vl_compra`, `nm_editora`, `fk_cd_cliente`) VALUES
(22, 'Duna de Frank Herbert', '2023-02-15', 230.00, 'Universo das Letras', 10),
(23, 'O Senhor dos Anéis ', '2023-11-24', 170.00, 'Gugu Literatura', 11);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_editora`
--

CREATE TABLE `tb_editora` (
  `cd_editora` int NOT NULL,
  `nm_editora` varchar(45) DEFAULT NULL,
  `nm_endereco` varchar(45) DEFAULT NULL,
  `nr_endereco` int DEFAULT NULL,
  `nm_bairro` varchar(30) DEFAULT NULL,
  `nr_telefone` varchar(11) DEFAULT NULL,
  `nm_gerente` varchar(45) DEFAULT NULL,
  `nr_senha` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `tb_editora`
--

INSERT INTO `tb_editora` (`cd_editora`, `nm_editora`, `nm_endereco`, `nr_endereco`, `nm_bairro`, `nr_telefone`, `nm_gerente`, `nr_senha`) VALUES
(9, 'Universo das Letras', 'Av. Mário Covas', 198, 'Centro', '13976394092', 'Paulo Ferreira', 1827932);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_item_compra`
--

CREATE TABLE `tb_item_compra` (
  `cd_item_compra` int NOT NULL,
  `fk_cd_compra` int DEFAULT NULL,
  `fk_isbn_livro` char(13) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_livro`
--

CREATE TABLE `tb_livro` (
  `cd_isbn` char(13) NOT NULL,
  `nm_livro` varchar(45) DEFAULT NULL,
  `nm_autor` varchar(45) DEFAULT NULL,
  `ds_assunto` varchar(45) DEFAULT NULL,
  `qt_estoque` int DEFAULT NULL,
  `dt_livro` date DEFAULT NULL,
  `fk_cd_editora` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Despejando dados para a tabela `tb_livro`
--

INSERT INTO `tb_livro` (`cd_isbn`, `nm_livro`, `nm_autor`, `ds_assunto`, `qt_estoque`, `dt_livro`, `fk_cd_editora`) VALUES
('40923', 'Além do reflexo', 'Guilherme Videira', 'Fantasia', 10, '2022-03-23', 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  ADD PRIMARY KEY (`cd_cliente`);

--
-- Índices de tabela `tb_compra`
--
ALTER TABLE `tb_compra`
  ADD PRIMARY KEY (`cd_compra`);

--
-- Índices de tabela `tb_editora`
--
ALTER TABLE `tb_editora`
  ADD PRIMARY KEY (`cd_editora`);

--
-- Índices de tabela `tb_item_compra`
--
ALTER TABLE `tb_item_compra`
  ADD PRIMARY KEY (`cd_item_compra`);

--
-- Índices de tabela `tb_livro`
--
ALTER TABLE `tb_livro`
  ADD PRIMARY KEY (`cd_isbn`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_cliente`
--
ALTER TABLE `tb_cliente`
  MODIFY `cd_cliente` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de tabela `tb_compra`
--
ALTER TABLE `tb_compra`
  MODIFY `cd_compra` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de tabela `tb_editora`
--
ALTER TABLE `tb_editora`
  MODIFY `cd_editora` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `tb_item_compra`
--
ALTER TABLE `tb_item_compra`
  MODIFY `cd_item_compra` int NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
