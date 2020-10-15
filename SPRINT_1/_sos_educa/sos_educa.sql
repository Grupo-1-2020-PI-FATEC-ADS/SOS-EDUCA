-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11-Out-2020 às 20:08
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.7

USE sos_educa;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sos_educa`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `id_func` int(2) NOT NULL,
  `nome_func` varchar(45) NOT NULL,
  `login_func` varchar(100) NOT NULL,
  `senha_func` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `admin`
--

INSERT INTO `admin` (`id_func`, `nome_func`, `login_func`, `senha_func`) VALUES
(1, 'Egydio', 'soseduca@gmail.com', '123mudar');

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_cat` int(2) NOT NULL,
  `nome_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_cat`, `nome_cat`) VALUES
(1, 'Português'),
(2, 'Matemática'),
(3, 'Inglês'),
(4, 'Lógica de Programação'),
(5, 'Laboratório de Hardware'),
(6, 'Arquitetura e Organização de Computadores');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(100) NOT NULL,
  `senha` varchar(100) NOT NULL,
  `cep` varchar(9) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `num_casa` int(100) NOT NULL,
  `telefone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `cpf`, `senha`, `cep`, `rua`, `bairro`, `cidade`, `estado`, `num_casa`, `telefone`, `email`) VALUES
(1, 'Gabriel Eugenio', '645.543.566-88', '123', '', 'Vinte Sete de Juhlo', 'Planalto Airton Senna', 'Fortaleza', 'CE', 6534, '(85)97542-3255', 'Gabriel123@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produtos` int(2) NOT NULL,
  `nome_prod` varchar(75) NOT NULL,
  `preco` decimal(10,2) UNSIGNED NOT NULL,
  `imagem` varchar(200) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `id_categoria` int(3) NOT NULL,
  `arquivo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produtos`, `nome_prod`, `preco`, `imagem`, `descricao`, `id_categoria`, `arquivo`) VALUES
(28, 'Concordância', '39.00', 'Português.png', 'Resumo de Concordância.', 1, 'Concordância.pdf'),
(29, 'Interpretação de Texto', '59.00', 'Português.png', 'Resumo Interpretação de Texto.', 1, 'Interpretação de Texto.pdf'),
(30, 'Pontuação', '25.00', 'Português.png', 'Resumo Pontuação.', 1, 'Pontuação.pdf'),
(31, 'Matemática', '19.00', 'Matematica.jpeg', 'Resumo Matemática.', 2, 'Matemática - 1 - Com Capa.pdf'),
(32, 'Logica Argumentativa', '69.00', 'Matematica.jpeg', 'Introdução à logica argumentativa.', 2, 'Matemática - 2 - Com Capa.pdf'),
(33, 'Funções matemáticas', '24.00', 'Matematica.jpeg', 'Funções e construção de gráficos.', 2, 'Matemática - 3 - Com Capa.pdf'),
(34, 'Memória RAM', '15.00', 'Lab_Hard.jpeg', 'Resumo Memória Ram.', 5, 'Memória RAM.pdf'),
(35, 'Descarga Eletrostática', '36.00', 'Lab_Hard.jpeg', 'Resumo dos perigos da descarga eletrostática.', 5, 'Perigos da Descarga Eletrostática.pdf'),
(36, 'Verbo To Be', '25.00', 'ingles.jpeg', 'Resumo do Verbo To Be.', 3, 'PDF 1 - Verbo To Be.pdf'),
(37, 'Tempos Verbais', '19.00', 'ingles.jpeg', 'Resumo  de tempos verbais.', 3, 'PDF 2 - Tempos Verbais.pdf'),
(38, 'Dias da Semana', '15.00', 'ingles.jpeg', 'Resumo Dias da Semana.', 3, 'PDF 3 - Dias da Semana.pdf'),
(39, 'Arquitetura x Organização', '25.00', 'AOC.jpeg', 'Introdução Arquitetura x Organização.', 6, 'AOC 1 - COM CAPA.pdf'),
(40, 'Dispositivos de Armazenamento', '20.00', 'AOC.jpeg', 'Resumo Dispositivos de Armazenamento.', 6, 'AOC 2 - Com capa.pdf'),
(41, 'Lógica de programação e Algoritmos', '12.00', 'Algoritimo.jpeg', 'Resumo Lógica de programação e Algoritmos.', 4, 'Lógica de Programação-Modelo01.pdf'),
(42, 'Logica de Programação', '15.00', 'logicaProgramacao.jpeg', 'Resumo Logica de Programação.', 4, 'Lógica de Programação-Modelo02.pdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(3) NOT NULL,
  `id_clientes` int(3) NOT NULL,
  `total` int(50) NOT NULL,
  `qtd_vendida` int(50) NOT NULL,
  `forma_pagamento` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id_venda`, `id_clientes`, `total`, `qtd_vendida`, `forma_pagamento`) VALUES
(22, 1, 35, 4, 'Avista');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_func`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_cat`);

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produtos`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_venda`),
  ADD UNIQUE KEY `forma_pagamento` (`forma_pagamento`),
  ADD KEY `id_clientes` (`id_clientes`),
  ADD KEY `forma_pagamento_2` (`forma_pagamento`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id_func` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_cat` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produtos` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `id_categoria` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id_cat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
