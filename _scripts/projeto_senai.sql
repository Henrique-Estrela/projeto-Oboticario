-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jun-2022 às 20:13
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `projeto_senai`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cad_produto`
--

CREATE TABLE `cad_produto` (
  `id` int(11) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `nome_produto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fornecedor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `custo_produto` decimal(10,2) NOT NULL,
  `valor_venda` decimal(10,2) NOT NULL,
  `codigo_barra` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `cad_produto`
--

INSERT INTO `cad_produto` (`id`, `data_cadastro`, `nome_produto`, `fornecedor`, `custo_produto`, `valor_venda`, `codigo_barra`, `quantidade`) VALUES
(18, '0000-00-00 00:00:00', '', '', '0.00', '0.00', '', 0),
(19, '2022-06-25 03:00:00', 'Notebook', 'Acer', '3500.00', '4450.00', '', 0),
(20, '0000-00-00 00:00:00', '', '', '0.00', '0.00', '', 0),
(21, '0000-00-00 00:00:00', '', '', '0.00', '0.00', '', 0),
(22, '2022-06-16 03:00:00', 'leonardo', 'Acer', '19.00', '26.00', '', 0),
(23, '0000-00-00 00:00:00', '', '', '0.00', '0.00', '', 0),
(24, '0000-00-00 00:00:00', '', '', '0.00', '0.00', '', 0),
(25, '2022-06-18 03:00:00', 'Notebook', 'Acer', '20.00', '4500.00', '65895', 15);

-- --------------------------------------------------------

--
-- Estrutura da tabela `consulta_venda`
--

CREATE TABLE `consulta_venda` (
  `id` int(11) NOT NULL,
  `data_venda` timestamp NOT NULL DEFAULT current_timestamp(),
  `cod_produto` int(11) NOT NULL,
  `valor_venda` decimal(10,2) NOT NULL,
  `valor_produto` decimal(10,2) NOT NULL,
  `qtde_comprada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_user`
--

CREATE TABLE `dados_user` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `dados_user`
--

INSERT INTO `dados_user` (`id`, `nome`, `tipo`, `senha`) VALUES
(1, 'leonardo', 'FUNCIONARIO', '12345');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cad_produto`
--
ALTER TABLE `cad_produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `consulta_venda`
--
ALTER TABLE `consulta_venda`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `dados_user`
--
ALTER TABLE `dados_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cad_produto`
--
ALTER TABLE `cad_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `consulta_venda`
--
ALTER TABLE `consulta_venda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `dados_user`
--
ALTER TABLE `dados_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
